<?php

class Bankbalance{
    public $accountnumber;
    public $accountname;
    public $balance=0;
    

    public function depositamount($amount){
        $this->balance=$this->balance+$amount;

    }
    public function checkbalance(){
        echo "Your Balance is = $this->balance";

    }
    public function deductamount($amount){
        if($this->balance <=0){
            echo"No balanance , You do not have any money";
        }
        if($this->balance <$amount){
            echo"Insufficient ammount , You are trying to withdraw than your main balance";
        }
        $this->balance=$this->balance - $amount;

    }

}

$bankobj1= new Bankbalance();

$bankobj1->accountnumber = 197001;
$bankobj1->accountname = "naymon";
$bankobj1->balance = 200000;

$bankobj1->checkbalance();//200000
echo"<br/>";
$bankobj1->depositamount(300000);//300000
$bankobj1->checkbalance();

echo"<hr/>";


$bankobj2= new Bankbalance();
$bankobj2->accountnumber = 197002;
$bankobj2->accountname = "pyaephyo";
$bankobj2->balance = 300000;

$bankobj2->checkbalance();//300000
echo"<br/>";
$bankobj2->depositamount(200000);
$bankobj2->checkbalance();//200000
echo"<br/>";
$bankobj2->deductamount(400000);
$bankobj2->checkbalance();//100000

echo"<br/>";
$bankobj2->deductamount(30000);
$bankobj2->checkbalance();//70000

echo"<br/>";
$bankobj2->deductamount(80000);
$bankobj2->checkbalance();//-10000

?>