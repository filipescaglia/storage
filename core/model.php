<?php

/**
 * Classe responsável por fornecer conexão ao banco de dados aos models do projeto.
 */
class model {

    protected $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

}