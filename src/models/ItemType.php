<?php
    class ItemType {
        private $id;
        private $name;

        function __construct($name)
        {
                $this->name = $name;
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

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
    }
?>