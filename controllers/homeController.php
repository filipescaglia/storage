<?php

class homeController extends controller {

    /**
     * Action padrão do homeController
     */
    public function index() {
        $data = array(
            'quantidade' => 5
        );

        $this->loadTemplate('home', $data);
    }

}
