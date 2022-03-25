<?php

class Item {
    private $id;
    private $idItemType;
    private $status;
    private $purchasePrice;
    private $idSale;
    private $price;
    private $idSeller;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getSeller()
    {
        return $this->seller;
    }

    public function setSeller($seller)
    {
        $this->seller = $seller;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public function getIdItemType()
    {
        return $this->idItemType;
    }

    public function setIdItemType($idItemType)
    {
        $this->idItemType = $idItemType;

        return $this;
    }
 
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }


    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    public function getIdSale()
    {
        return $this->idSale;
    }

    public function setIdSale($idSale)
    {
        $this->idSale = $idSale;

        return $this;
    }
}

?>