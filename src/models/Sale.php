<?php

class Sale {
    private $id;
    private $value;
    private $date;
    private $id_user;
    private $type;

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    public function get_value()
    {
        return $this->value;
    }

    public function set_value($value)
    {
        $this->value = $value;

        return $this;
    }

    public function get_date()
    {
        return $this->date;
    }

    public function set_date($date)
    {
        $this->date = $date;

        return $this;
    }

    public function get_id_user()
    {
        return $this->id_user;
    }

    public function set_id_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function set_type($type)
    {
        $this->type = $type;

        return $this;
    }
}

?>