<html>
<head>
    <title>Авторизация пользователя</title>
</head>
<body>
<?php
$login = $_POST["login"];
$password = $_POST["password"];

$users = array(array('login' => 'AaronSmith', 'password' => '123', 'name' => 'Aaron', 'surname' => 'Smith', 'role' => 'admin'),
    array('login' => 'AdamLevine', 'password' => '234', 'name' => 'Adam', 'surname' => 'Levine', 'role' => 'client'),
    array('login' => 'JohnCooper', 'password' => 'bestmanager', 'name' => 'Иван', 'surname' => 'Иванов', 'role' => 'manager'));
$cong = array('hi' => 'Здравствуйте', 'you' => 'Вы')

for($i= 0; $i< count($users); $i++){
    if(!($login == $users[$i]['login'])){
        header(location: index.php)
    }
}

class User {
    public $login;
    public $password;
    public $name;
    public $surname;
    public $role;
    public $hi;
    public $you;

    function __construct($login,$password,$name,$surname,$role, $hi, $you)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->hi = $hi;
        $this->you = $you;
    }
}
class Admin extends User {

    public function introduce (){
        echo $this->hi. " " . $this->name. "  " . $this->surname . "  ". $this->you . " " . $this->role;
    }
}
class Manager extends User {

    public function introduce() {
        echo $this->hi. " " . $this->name. "  " . $this->surname . "  ". $this->you . " " . $this->role;
    }
}
class Client extends User {

    public function introduce (){
        echo $this->hi. " " . $this->name. "  " . $this->surname . "  ". $this->you . " " . $this->role;
    }
}

if($login == $users[0]['login']){
    $admin = new Admin($users[0]['login'], $users[0]['password'], $users[0]['name'], $users[0]['surname'], $users[0]['role'], $cong['hi'], $cong['you'])
}else if ($login == $users[1]['login']) {
    $client = new Client($users[1]['login'], $users[1]['password'], $users[1]['name'], $users[1]['surname'], $users[1]['role'], $cong['hi'], $cong['you'])
}else if ($login == $users[2]['login']) {
    $client = new Client($users[2]['login'], $users[2]['password'], $users[2]['name'], $users[2]['surname'], $users[2]['role'], $cong['hi'], $cong['you'])
}
?>
</html>