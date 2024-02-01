<?php 
// Clase principal que arranca el código
class Landing{
    public function __construct(){}
    public function main(){
        require_once "views/company/header.php";
        require_once "views/company/inicio.php";
        require_once "views/company/footer.php";
    }
    public function inicio(){
        
        require_once "views/company/header.php";
        require_once "views/company/inicio.php";
        require_once "views/company/footer.php";  
    }
    public function nosotros(){
        require_once "views/company/header.php";
        require_once "views/company/nosotros.php";
        require_once "views/company/footer.php";
}
    public function tienda(){
        require_once "views/company/header.php";
        require_once "views/company/tienda.php";
        require_once "views/company/footer.php";
 }
    public function blog(){
        require_once "views/company/header.php";
        require_once "views/company/blog.php";
        require_once "views/company/footer.php";
}
    public function contacto(){
        require_once "views/company/header.php";
        require_once "views/company/contacto.php";
        require_once "views/company/footer.php";
}
}
?>