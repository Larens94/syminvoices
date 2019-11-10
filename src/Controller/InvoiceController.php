<?php
namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\InvoiceRows;
use Doctrine\DBAL\Types\DecimalType;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as SymfonyIntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InvoiceController extends Controller{

    /**
     * @Route("/", name="invoice_list")
     * @Method({"GET"})
     */
    public function index(){
        $invoices = $this->getDoctrine()->getRepository(Invoice::class)->findAll();
            
        return $this->render('invoices/index.html.twig',array(
            'invoices'=>$invoices
        ));
    } 


    /**
     * @Route("/invoice/new/step1", name="invoice_new_step1")
     * @Method({"GET", "POST"})
     */
    public function newStep1(Request $request){
        $invoice = new Invoice();
        //Crea e restituisce un'istanza del form builder.
        $form = $this->createFormBuilder($invoice)
        ->add('number',SymfonyIntegerType::class,array(
            'attr'=>array('class'=>'form-control')
            ))
        ->add('date',DateType::class,array(
            'attr'=>array('class'=>'form-control')
            ))
        ->add('title',TextType::class,array(
            'attr'=>array('class'=>'form-control')
            ))
        ->add('body',TextareaType::class,array(
            'required' => false,
            'attr'=>array('class'=>"form-control")
            ))
        ->add('customer_id',SymfonyIntegerType::class,array(
                'attr'=>array('class'=>'form-control','value'=>1)
        ))
        ->add('save',SubmitType::class,array(
                'label' => "Create",
                'attr'=>array('class'=>"btn btn-primary mt-3")
            ))
        ->getForm();

        //set handle request
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //prendo i dati dalla form 
            $invoice = $form->getData();
            //richiamo del gestore di entità
            $entityManager = $this->getDoctrine()->getManager();
            //Indica all'ObjectManager di rendere un'istanza gestita e persistente.
            $entityManager->persist($invoice);
            //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
            $entityManager->flush();
            
            return $this->redirect('/invoice/new/step2/'.$invoice->getId());
        }

        return $this->render('invoices/new/step1.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
 
           /**
     * @Route("/invoice/new/step2/{id}", name="invoice_new_step2")
     * @Method({"GET", "POST"})
     */
    public function newStep2(Request $request,$id){
        $invoiceRows = new InvoiceRows();
        //Crea e restituisce un'istanza del form builder.
        $form = $this->createFormBuilder($invoiceRows)
        ->add('description',TextareaType::class,array(
            'required' => false,
            'attr'=>array('class'=>"form-control")
            ))
        ->add('quantity',SymfonyIntegerType::class,array(
                'attr'=>array('class'=>'form-control')
                ))
        ->add('amount',MoneyType::class,array(
                'attr'=>array('class'=>'form-control','step' =>'any')
                ))
        ->add('amountIva',MoneyType::class,array(
            'attr'=>array('class'=>'form-control','step' =>'any')
            ))
        ->add('totalVat',MoneyType::class,array(
            'attr'=>array('class'=>'form-control','step' =>'any')
            ))
        ->add('invoice_id',SymfonyIntegerType::class,array(
                'attr'=>array('class'=>'form-control','value'=>$id)
            ))
        ->add('save',SubmitType::class,array(
                'label' => "Create",
                'attr'=>array('class'=>"btn btn-primary mt-3")
            ))
        ->getForm();

        //set handle request
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //prendo i dati dalla form 
            $invoiceRows = $form->getData();
            //richiamo del gestore di entità
            $entityManager = $this->getDoctrine()->getManager();
            //Indica all'ObjectManager di rendere un'istanza gestita e persistente.
            $entityManager->persist($invoiceRows);
            //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
            $entityManager->flush();

            return $this->redirectToRoute('invoice_list');
        }

        return $this->render('invoices/new/step2.html.twig', array(
            'form' => $form->createView()
        ));
    }

      /**
     * @Route("/invoice/edit/header/{id}", name="invoice_edit_header")
     * @Method({"GET", "POST"})
     */
    public function editHeader(Request $request,$id){
        $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);
        //Crea e restituisce un'istanza del form builder.
        $form = $this->createFormBuilder($invoice)
        ->add('title',TextType::class,array(
            'attr'=>array('class'=>'form-control')
            ))
        ->add('body',TextareaType::class,array(
            'required' => false,
            'attr'=>array('class'=>"form-control")
            ))
        ->add('save',SubmitType::class,array(
                'label' => "Update",
                'attr'=>array('class'=>"btn btn-primary mt-3")
            ))
        ->getForm();

      
        //set handle request
        $form->handleRequest($request);
     
        if($form->isSubmitted() && $form->isValid()){
            //richiamo del gestore di entità
            $entityManager = $this->getDoctrine()->getManager();
            //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
            $entityManager->flush();

            return $this->redirect('/invoice/edit/header/'.$invoice->getId());
        }

        return $this->render('invoices/edit/header.html.twig', array(
            'form' => $form->createView()
        ));

    }


      /**
     * @Route("/invoice/edit/body/{id}", name="invoice_edit_body")
     * @Method({"GET", "POST"})
     */
    public function editBody(Request $request,$id){
       
        $invoiceRows = $this->getDoctrine()->getRepository(InvoiceRows::class)->findByInvoIceId($id)[0];
        //Crea e restituisce un'istanza del form builder.
        $form = $this->createFormBuilder($invoiceRows)
        
        ->add('description',TextareaType::class,array(
            'required' => false,
            'attr'=>array('class'=>"form-control")
            ))
        ->add('quantity',SymfonyIntegerType::class,array(
                'attr'=>array('class'=>'form-control')
                ))
        ->add('amount',MoneyType::class,array(
                'attr'=>array('class'=>'form-control','step' =>'any')
                ))
        ->add('amountIva',MoneyType::class,array(
            'attr'=>array('class'=>'form-control','step' =>'any')
            ))
        ->add('totalVat',MoneyType::class,array(
            'attr'=>array('class'=>'form-control','step' =>'any')
            ))
        ->add('invoice_id',SymfonyIntegerType::class,array(
                'attr'=>array('class'=>'form-control')
            ))
        ->add('save',SubmitType::class,array(
                'label' => "Update",
                'attr'=>array('class'=>"btn btn-primary mt-3")
            ))
        ->getForm();

        //set handle request
        $form->handleRequest($request);

     
        if($form->isSubmitted()){
            //richiamo del gestore di entità
            $entityManager = $this->getDoctrine()->getManager();
            //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
            $entityManager->flush();

            return $this->redirect('/invoice/edit/body/'.$invoiceRows->getinvoiceId());
        }
    
        return $this->render('invoices/edit/body.html.twig', array(
            'form' => $form->createView(),
        ));

    }

     /**
     * @Route("/invoice/delete/{id}", name="invoice_delete")
     * @Method({"DELETE"})
     */
    public function delete(Request $request,$id){
        $invoice = new Invoice();
       
        $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);
        //richiamo del gestore di entità
        $entityManager = $this->getDoctrine()->getManager();
        //Rimuove un'istanza dell'oggetto.
        $entityManager->remove($invoice);
        //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
        $entityManager->flush();

        $response = new Response();
        return $response->send();
    }
    /**
     * @Route("/invoice/{id}", name="invoice_show")
     * @Method({"GET"})
     */
    public function show($id){
        // return new Response('<html><body>hello word</body></html>');

        $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);
        $invoiceRows = $this->getDoctrine()->getRepository(InvoiceRows::class)->findByInvoIceId($id);
        $totaleRows = $this->getDoctrine()->getRepository(InvoiceRows::class)->getTotalRows($id)[0];
        return $this->render('invoices/show.html.twig',array(
            'invoice'=>$invoice,
            'invoiceRows'=>$invoiceRows,
            'totalRows'=>$totaleRows
        ));
    } 

 

    //  /**
    //  * @Route("/invoice/save")
    //  * @Method({"POST"})
    //  */   
    // public function save(){
    //     //richiamo del gestore di entità
    //    $entityManager = $this->getDoctrine()->getManager();
    //     //creazione instanza del modello invoice
    //    $invoice = new Invoice();
    //    //sett attributi
    //    $invoice->setTitle("Invoices two");
    //    $invoice->setBody("This is the invoice body");
    //    //dopo aver settato
    //    //Indica all'ObjectManager di rendere un'istanza gestita e persistente.
    //    $entityManager->persist($invoice);

    //    //Scarica tutte le modifiche agli oggetti che sono stati messi in coda fino adesso al database.
    //     $entityManager->flush();
    //     return new Response('Saves an invoice with the of'.$invoice->getId());
    // } 
}