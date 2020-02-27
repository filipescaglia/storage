<?php

class referenciasController extends controller {

    public function index() {
        $r = new References();
        $data = array("data" => $r->listReferences("book"));
        $this->loadTemplate('list-ref', $data);
    }

    public function add() {
        $this->loadTemplate('add-ref');
    }

    /**
     * Função temporária para adicionar as referencias no BD.
     * Futuramente transformar a função add em um componente do vue e usar ela para a função a seguir.
     */
    public function register() {
        $title = addslashes($_POST['title']);
        $author = addslashes($_POST['author']);
        $year = addslashes($_POST['year']);
        $city = addslashes($_POST['city']);
        $publisher = addslashes($_POST['publisher']);
        $editor = addslashes($_POST['editor']);
        $volume = addslashes($_POST['volume']);
        $edition = addslashes($_POST['edition']);
        $user_id = $_SESSION['userID'];

        $ref = new References();
        if($ref->add($title, $author, $year, $city, $publisher, $editor, $volume, $edition, $user_id)) {
            header("Location: " . BASE_URL . "referencias");
        } else {
            echo "erro";
        }
    }

}