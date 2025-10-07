<?php
$pagetitle = "Welcome to BESept25";
require_once('assets/header.php');
// // Datatype
// $x = 10;
// var_dump($x);
// echo "<br/>";
// $y = 20.5;
// var_dump($y);
// echo "<br/>";
// $z = true;
// var_dump($z);
// echo "<br/>";

// $list = ["John", "Da-Silva", "Mayowa", "Femi"];
// echo "<pre>";
// print_r($list);
// echo "</pre>";

// $person = [
//     'person' => "john",
//     'age' => 25,
// ];

// echo "<pre>";
// print_r($person);
// echo "</pre>";

// // // String
// $name = "John Doe";
// // echo 'My name is ' . $name;
// echo "My name is $name";

// define('person', 'Oluwafemi');
// echo person;
// define('person', "Da-silva");
// $person = "John Doe";
// echo $person;

// $x = 20;
// function dasilva() {
//     $GLOBALS['y'] = 300;
//     echo $GLOBALS['x'];
// }
// dasilva();
// echo $y;

// $x = 10;
// $y = &$x;
// $x = 30;
// echo $x . "<br/>";
// echo $y . "<br/>";

// $person = [
//     'firstname' => "John",
//     'lastname' => "Doe",
//     'age' => 25,
//     'class' => "Web",
// ];

// foreach($person as $da => $silva) {
//     echo $da . ' is ' . $silva . '<br/>';
// }

// foreach($person as $da) {
//     echo $da . '<br/>';
// }

// echo $_SERVER['PHP_SELF'] . '<br/>';
// echo $_SERVER['SERVER_SOFTWARE'] . '<br/>';
// echo $_SERVER['REQUEST_METHOD'] . '<br/>';
?>
<h1 class="text-3xl font-bold">Hello World</h1>
<form action="output.php" method="get">
    <input type="text" name="person" />
    <input type="password" name="pass" id="">
    <input type="submit" />
</form>
<?php
require_once('assets/footer.php')
?>