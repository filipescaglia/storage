<?php

class Core {

    /** 
     * Método para identificar qual controller e action devem ser executados
    */
    public function run() {
        $url = '/';
        if(isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $params = array();

        if(!empty($url) && $url != '/') { // Se algo foi enviado
            $url = explode('/', $url); // Monta um array com a url
            array_shift($url); // Array com índice inicial no controller

            $currentController = $url[0] . 'Controller';

            array_shift($url); // Removendo o controller do array

            if(isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url); // Removendo a action do array
            } else {
                $currentAction = 'index';
            }

            if(count($url) > 0) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $controller = new $currentController();
        // Meio de chamar a action correta e conseguir passar parâmetros
        call_user_func_array(array($controller, $currentAction), $params);

        /* echo 'Controller: ' . $currentController . '<br>';
        echo 'Action: ' . $currentAction . '<br>';
        echo 'Params: ' . print_r($params, true) . '<br>'; */
    }

}