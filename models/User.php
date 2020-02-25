<?php

class User extends model {

    /**
     * Método responsável por inserir um usuário no banco de dados.
     * 
     * @return true Caso o usuário seja inserido com sucesso.
     */
    public function register($name, $email, $passwd) {
        $sql = "INSERT INTO users SET name = :name, email = :email, passwd = :passwd, active = 1, admin = 0";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":passwd", $passwd);

        if($sql->execute()) {
            return true;
        } else {
            return false;
        }
    }

}