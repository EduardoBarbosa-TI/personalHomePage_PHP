<?php

declare(strict_types=1);

class Produto {

    private PDO $conn;

    public function __construct()
    {
        try{
            $this->conn = new PDO('mysql:host=mysql;dbname=pw_exemple', 'root', '1q2w3e4r5t');
        }catch(Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    public function list(): array
    {
        $sql = 'select * from produtos';

        $produtos = [];

        foreach($this->conn->query($sql) as $key => $value){
            array_push($produtos, $value);
        }

        return $produtos;
    }

    public function insert(string $descricao): int{
        $sql = 'insert into produtos(descricao) values(?)';

        echo '<h3>Produtos:  </h3>';

        $prepare = $this->conn->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $descricao, int $id): int{
        $sql = 'update produtos set descricao= ? where id = ?';

        echo '<h3>Produtos:  </h3>';

        $prepare = $this-> conn->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();
   
        return $prepare->rowCount();
    }

    public function delete(int $id): int{
        $sql = 'delete from produtos where id = ?';

        echo '<h3>Produtos:  </h3>';

        $prepare = $this->conn->prepare($sql);

        $prepare->bindParam(1, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }
}