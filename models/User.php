<?php

class User extends model {

    /**
     * Método responsável por fazer o login do usuário.
     * 
     * @return true Caso o usuário seja logado com sucesso.
     */
    public function login($email, $passwd) {
        $sql = "SELECT id FROM users WHERE email = :email AND passwd = :passwd";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":passwd", $passwd);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $_SESSION['userID'] = $row['id'];
            
            return true;
        } else {
            return false;
        }
    }

    /**
     * Método responsável por inserir um usuário no banco de dados.
     * 
     * @return true Caso o usuário seja inserido com sucesso.
     */
    public function register($name, $username, $email, $passwd) {
        if(!$this->emailExists($email)) {
            $sql = "INSERT INTO users SET name = :name, username = :username, email = :email, passwd = :passwd, active = 1, admin = 0";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":username", $username);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":passwd", $passwd);

            if($sql->execute()) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    public function logout() {
        unset($_SESSION['userID']);
    }

    /**
     * Método responsável por verificar se um determinado e-mail já foi cadastrado no banco.
     * 
     * @param email $email E-mail a ser verificado.
     * @return true Se o e-mail existir.
     */
    public function emailExists($email) {
        $sql = "SELECT id FROM users WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getName($id) {
        $sql = "SELECT name FROM users WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return false;
        }
    }

    public function getUsername($id) {
        $sql = "SELECT username FROM users WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return false;
        }
    }

}