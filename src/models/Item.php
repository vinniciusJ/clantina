<?php

class Item {
    private $id;
    private $id_item_type;
    private $status;
    private $purchase_price;
    private $id_sale;

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    public function get_id_item_type()
    {
        return $this->id_item_type;
    }

    public function set_id_item_type($id_item_type)
    {
        $this->id_item_type = $id_item_type;

        return $this;
    }
 
    public function get_status()
    {
        return $this->status;
    }

    public function set_status($status)
    {
        $this->status = $status;

        return $this;
    }

    public function get_purchase_price()
    {
        return $this->purchase_price;
    }


    public function set_purchase_price($purchase_price)
    {
        $this->purchase_price = $purchase_price;

        return $this;
    }

    public function get_id_sale()
    {
        return $this->id_sale;
    }

    public function set_id_sale($id_sale)
    {
        $this->id_sale = $id_sale;

        return $this;
    }
}

?>