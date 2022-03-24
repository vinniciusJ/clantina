<?php
    class ItemType {
        private $id;
        private $name;

        public function get_id()
        {
                return $this->id;
        }

        public function set_id($id)
        {
                $this->id = $id;

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
    }
?>