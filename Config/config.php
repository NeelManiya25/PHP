<?php

class Config
{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "data_w";
    public $con_res;

    public function connect()
    {
        $this->con_res = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);
        return $this->con_res;
    }

   

    public function update($name, $cityname, $proucttype, $phonenumber, $id)
    {
        $this->connect();

        $query = "UPDATE data_w SET name='$name', cityname='$cityname', proucttype='$proucttype', phonenumber=$phonenumber WHERE id=$id;";

        $res = mysqli_query($this->con_res, $query);
        return $res;
    }

    public function delete($id)
    {
        $this->connect();

        $query = "DELETE FROM data_w WHERE id=$id;";

        $res = mysqli_query($this->con_res, $query);
        return $res;
    }
}

?>