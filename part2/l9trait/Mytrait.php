<?php

trait Sitelogin {
    public $fullname = "Nay Mon";
    public $email = "naymon@gmail.com";
    public $password = "123456";

    public function useraccess() {
        echo "This is site login. Email is $this->email and Password is $this->password.<br/>";
    }
    public function userinfo() {
        echo "Profile is $this->fullname.<br/>";
    }
}

trait Devlogin {
    public function githublogin() {
        echo "This is Github login. Email is $this->email and Password is $this->password.<br/>";
    }
}

class Googleauth {
    use Sitelogin, Devlogin;

    public function gmailogin() {
        echo "This is Gmail login. Email is $this->email & Password is $this->password.<br/>";
    }
}

trait Mastertrait {
    use Sitelogin, Devlogin;
}

class Mytrait extends Googleauth {
    // Method1 
    // use Sitelogin;
    // use Devlogin;

    // Method2
    // use Sitelogin, Devlogin;

    // Method4
    // use Mastertrait;
}

echo "This is my Trait <br/>";
$obj = new Mytrait();
$obj->gmailogin(); // This is Gmail login. Email is naymon@gmail.com & Password is 123456
echo $obj->fullname; // Nay Mon
echo "<br/>";
echo $obj->password; // 123456
echo "<br/>";
$obj->useraccess(); // This is site login. Email is naymon@gmail.com and Password is 123456.
$obj->userinfo(); // Profile is Nay Mon.
$obj->githublogin(); // This is Github login. Email is naymon@gmail.com and Password is 123456.
echo "<hr/>";
?>
