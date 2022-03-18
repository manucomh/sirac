
<?php

require_once 'core/db_model.php';

class birth_certificate extends DB_PDO{

    public $table = "birth_certificate";

    public function insert(){
        return;    
    }
    public function update(){
        return;
    }
    public function delete(){
        
    }
    public function exist($column, $text_filter){
        $var = false;
        $query = "select * from ".$this->table." where ".$column." = '".$text_filter."'" ;
        $res = $this->connect()->prepare($query);
        $res->execute();
        if($res->rowCount()>0)
            $var = true;
        return $var;
    }

}


$c=new birth_certificate();
echo $c->exist("person_per_id",1);
