<?php

class User {
    private $id;
    private $username;
    private $password;
    private $type;
    private $photo;
    private $name;
    private $id_locale;

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    public function get_username()
    {
        return $this->username;
    }

    public function set_username($username)
    {
        $this->username = $username;

        return $this;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_password($password)
    {
        $this->password = $password;

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

    public function get_photo()
    {
        return $this->photo;
    }

    public function set_photo($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;

        return $this;
    }

    public function get_id_locale()
    {
        return $this->id_locale;
    }

    public function set_id_locale($id_locale)
    {
        $this->id_locale = $id_locale;

        return $this;
    }
}

?>