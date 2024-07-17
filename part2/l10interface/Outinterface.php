<?php

interface Role{
    public function setid($id);
    public function createrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function detete();
}

class Outinterface implements Role{

    public $id;
    public $request;


    public function setid($id){

        $this->id = $id;
        
    }
    public function createrole(){
        echo"I am from create role .<br/>";
    }
  
    public function readrole($id){
        $this->id = $id;
        echo"I am from read role and I have to read record id = {$this->id} .<br/>";
        
    }
    public function updaterole($id,$request){
        $this->id = $id;    
        $this->request = $request;
        echo"I am from update role and I have to update update id = {$this->id} and my requet data is = {$this->request} .<br/>";

    }
    public function detete(){
        echo"I am from delete role I have to delete record id = {$this->id}.<br/>";

    }

}

$obj = new Outinterface();  
$obj->setid("500");
$obj->createrole();//I am from create role 
$obj->readrole("10");//I am from read role and I have to read record id = 10
$obj->updaterole("12","aung aung");//I am from update role and I have to update update id = 12 and my requet data is = aung aung .
$obj->detete();//I am from delete role I have to delete record id = 12.
echo"Outinterface";
echo"<hr/>";
?>