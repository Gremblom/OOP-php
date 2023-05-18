<?php
    class Producto{
        private $precio;
        private $nombre;
        private $categoria;
        private $stock;
        private $color;
        private $tamaño;
        private $garantia;

        public function __construct(){
            $this->precio = $precio;
            $this->nombre = $nombre;
            $this->categoria = $categoria;
            $this->stock = $stock;
            $this->color = $color;
            $this->tamaño = $tamaño;
            $this->garantia = $garantia;
        }

        public function get_precio(){
            return $this->precio;
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function get_categoria(){
            return $this->categoria;
        }

        public function get_stock(){
            return $this->stock;
        }

        public function get_color(){
            return $this->color;
        }

        public function get_tamaño(){
            return $this->tamaño;
        }

        public function get_garantia(){
            return $this->garantia;
        }

        public function set_precio($precio){
            return $this->precio = $precio;
        }

        public function set_nombre($nombre){
            return $this->nombre = $nombre;
        }

        public function set_categoria($categoria){
            return $this->categoria = $categoria;
        }

        public function set_stock($stock){
            return $this->stock = $stock;
        }

        public function set_color($color){
            return $this->color = $color;
        }

        public function set_tamaño($tamaño){
            return $this->tamaño = $tamaño;
        }

        public function set_garantia($garantia){
            return $this->garantia = $garantia;
        }
    }

    $televisor = new Producto();
    $televisor->set_precio(5000000 . " USD");
    $televisor->set_nombre("LG 4320");
    $televisor->set_categoria("Electrodomesticos");
    $televisor->set_stock(50);
    $televisor->set_color("Negro");
    $televisor->set_tamaño("Grande");
    $televisor->set_garantia("5 años");
    
    echo $televisor->get_precio() . "<br>";
    echo $televisor->get_nombre() . "<br>";
    echo $televisor->get_categoria() . "<br>";
    echo $televisor->get_stock() . "<br>";
    echo $televisor->get_color() . "<br>";
    echo $televisor->get_tamaño() . "<br>";
    echo $televisor->get_garantia() . "<br><br>";


    $marcador = new Producto();
    $marcador->set_precio(20000 . " USD");
    $marcador->set_nombre("Sharpie");
    $marcador->set_categoria("Papeleria");
    $marcador->set_stock(100);
    $marcador->set_color("Negro");
    $marcador->set_tamaño("Pequeño");
    $marcador->set_garantia("20 años");
    
    echo $marcador->get_precio() . "<br>";
    echo $marcador->get_nombre() . "<br>";
    echo $marcador->get_categoria() . "<br>";
    echo $marcador->get_stock() . "<br>";
    echo $marcador->get_color() . "<br>";
    echo $marcador->get_tamaño() . "<br>";
    echo $marcador->get_garantia() . "<br><br>";

    $celular = new Producto();
    $celular->set_precio(1200000 . " USD");
    $celular->set_nombre("Samsung Galaxy A10S");
    $celular->set_categoria("Tecnologia");
    $celular->set_stock(20);
    $celular->set_color("Rojo");
    $celular->set_tamaño("Pequeño");
    $celular->set_garantia("4 años");
    
    echo $celular->get_precio() . "<br>";
    echo $celular->get_nombre() . "<br>";
    echo $celular->get_categoria() . "<br>";
    echo $celular->get_stock() . "<br>";
    echo $celular->get_color() . "<br>";
    echo $celular->get_tamaño() . "<br>";
    echo $celular->get_garantia() . "<br><br>";

    $cama = new Producto();
    $cama->set_precio(600000 . " USD");
    $cama->set_nombre("Cama doble");
    $cama->set_categoria("Inmuebles");
    $cama->set_stock(30);
    $cama->set_color("Marron");
    $cama->set_tamaño("Grande");
    $cama->set_garantia("15 años");
    
    echo $cama->get_precio() . "<br>";
    echo $cama->get_nombre() . "<br>";
    echo $cama->get_categoria() . "<br>";
    echo $cama->get_stock() . "<br>";
    echo $cama->get_color() . "<br>";
    echo $cama->get_tamaño() . "<br>";
    echo $cama->get_garantia() . "<br><br>";
?> 