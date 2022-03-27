<?php

class Sale {
    private $id;
    private $value;
    private $date;
    private $idSeller;
    private $type;
    private $payedValue;
    private $idClient;
    private $change;
    private $note;

    function __construct($value, $idSeller, $type, $change, $payedValue, $idClient, $note){
        $this->value = $value;
        $this->idSeller = $idSeller;
        $this->type = $type;
        $this->change = $change;
        $this->payedValue = $payedValue;        
        $this->idClient = $idClient;
        $this->note = $note;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getPayedValue()
    {
        return $this->payedValue;
    }

    public function setPayedValue($payedValue)
    {
        $this->payedValue = $payedValue;

        return $this;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getChange()
    {
        return $this->change;
    }

    public function setChange($change)
    {
        $this->change = $change;

        return $this;
    }


    public function getIdSeller()
    {
        return $this->idSeller;
    }

    public function setIdSeller($idSeller)
    {
        $this->idSeller = $idSeller;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

}

?>