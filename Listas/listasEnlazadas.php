<?php
    class Nodo
    {
        public $dato;
        public $siguiente;

        public function __construct($dato) 
        {
            $this->dato = $dato;
            $this->siguiente = null;
        }
    }
    class ListaEnlazada
    {
        public $value;
        public function __construct()
        {
            $this -> siguiente = null;
        }
    }
?>