<?php
class ContaBancaria{
    private int $id;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }
}