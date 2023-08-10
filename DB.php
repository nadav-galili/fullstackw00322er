<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class DB{

    private $link;

    public function connect($db){
        $this->link = mysqli_connect('localhost', 'root', '', $db);
        return $this->link;
    }

    public function close(){
        mysqli_close($this->link);
    }

    public function select($sql){
        $data = [];
        $result = mysqli_query($this->link, $sql);
        if($result && mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        return $data;
    }


}


?>