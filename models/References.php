<?php

class References extends model {

    public function add($title, $author, $year, $city, $publisher, $editor, $volume, $edition, $user_id) {
        $sql = "INSERT INTO book_reference SET user_id = :user_id, title = :title, author = :author, year = :year,
        city = :city, publisher = :publisher, editor = :editor, volume = :volume, edition = :edition";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":user_id", $user_id);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":author", $author);
        $sql->bindValue(":year", $year);
        $sql->bindValue(":city", $city);
        $sql->bindValue(":publisher", $publisher);
        $sql->bindValue(":editor", $editor);
        $sql->bindValue(":volume", $volume);
        $sql->bindValue(":edition", $edition);

        if($sql->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Lista todas as referências de determinada tabela.
     * 
     * @param type $type Tipo de referência que deve ser listada.
     * @return array Array com os resultados.
     */
    public function listReferences($type) {
        $table = $type . "_reference";
        $sql = "SELECT * FROM $table";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

}