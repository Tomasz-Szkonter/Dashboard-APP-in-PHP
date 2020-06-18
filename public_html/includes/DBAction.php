<?php

class DBAction
{
    private $con;

    function __construct()
    {
        include_once("../database/db.php");
        $db = new Database();
        $db->connect();
        $this->con = $db->connect();
    }

    public function addCategory($parent,$cat){
        $pre_stmt = $this->con->prepare("INSERT INTO `categories`(`parent_category`, `category_name`, `status`) VALUES (?,?,?)");
        $status = 1;
        $pre_stmt->bind_param("isi",$parent,$cat,$status);
        $result = $pre_stmt->execute() or die ($this->con->error);
        if ($result) {
            return "CATEGORY_ADDED";
        } else {
            return 0;
        }
        
    }

    public function getAllRecord($table){
        $pre_stmt = $this->con
    }
}

// $opr = new DBAction();
// echo $opr->addCategory(1,"React.js");

?>