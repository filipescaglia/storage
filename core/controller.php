<?php

class controller {

    /**
     * Método encarregado de carregar a view.
     * @deprecated
     * 
     * @param view $viewName View a ser carregada.
     * @param array $viewData (opcional) Array de dados a ser enviado para a view.
     */
    public function loadView($viewName, $viewData = array()) {
        // Transforma os índices do array em uma variável com o respectivo valor.
        extract($viewData);
        require_once 'views/' . $viewName . '.php';
    }

    /**
     * Método para carregar o template do site.
     * Chamado dentro dos controllers.
     * 
     * @param view $viewName View a ser carregada.
     * @param array $viewData (opcional) Array de dados a ser enviado para a view.
     */
    public function loadTemplate($viewName, $viewData = array()) {
        require_once 'views/template.php';
    }

    /**
     * Método para carregar a view dentro do template.
     * Chamado dentro de 'template.php'.
     * 
     * @param view $viewName View a ser carregada.
     * @param array $viewData (opcional) Array de dados a ser enviado para a view.
     */
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require_once 'views/' . $viewName . '.php';
    }

}