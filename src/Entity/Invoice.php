<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\InvoiceRows", mappedBy="invoice_id")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    
    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer_id;

    // Getter & Setters
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function getBody(){
        return $this->body;
    }
    
    public function setBody($body){
        $this->body = $body;
    }

      
    public function getNumber(){
        return $this->number;
    }
    public function setNumber($number){
        $this->number = $number;
    }

    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getCustomer_id(){
        return $this->customer_id;
    }
    public function setCustomer_id($customer_id){
        $this->customer_id = $customer_id;
    }

    public function getCustomerId(){
        return $this->customer_id;
    }
    public function setCustomerId($customer_id){
        $this->customer_id = $customer_id;
    }


}


// Id (auto incremento)
// Data fattura (type date)
// Numero fattura (type int)
// cliente_id (type int)
