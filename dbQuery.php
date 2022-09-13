<?php
include ("Settings.php");
   class dbQuery{
       public $link;
       public function __construct(){
           $k=new Settings();
           $this->link=$k->DBConnect();
           return $this->link;
       }

       public function viewoneRow($tbl,$fld,$value){
           $sql="SELECT * FROM $tbl WHERE `$fld`=?";
           $query=$this->link->prepare($sql);
           $query->execute(array($value));
           return $query;
       }

   }

    

 ?>