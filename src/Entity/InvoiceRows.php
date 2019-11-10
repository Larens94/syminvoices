<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRowsRepository")
 */
class InvoiceRows
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="smallint")
     */
    private $quantity;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $amount;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $amountIva;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $totalVat;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Invoice", inversedBy="id")
     */
    private $invoice_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmountIva(): ?string
    {
        return $this->amountIva;
    }

    public function setAmountIva(string $amountIva): self
    {
        $this->amountIva = $amountIva;

        return $this;
    }

    public function getTotalVat(): ?string
    {
        return $this->totalVat;
    }

    public function setTotalVat(string $totalVat): self
    {
        $this->totalVat = $totalVat;

        return $this;
    }

    
    public function getinvoiceId(): ?int
    {
        return $this->invoice_id;
    }

    public function setInvoiceId(int $invoice_id): self
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }

    public function getinvoice_id(): ?int
    {
        return $this->invoice_id;
    }

    public function setInvoice_id(int $invoice_id): self
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }
}
