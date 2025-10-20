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
// $word = "There is a difference between the man friend and is brother";
// echo preg_match('/the/', $word);
// echo "<br/>";
// echo preg_match_all('/the/i', $word);
// echo "<br/>";
// // echo preg_replace('/the/', "john", $word);
// $word = "Th1ere is a differ7ence between@$ the m22an frie5nd and is brother";
// echo preg_match_all('/\u{0039}/', $word, $results);
// echo "<br/>";
// echo "<pre>";
// print_r($results);
// echo "</pre>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entry = $_POST['entry'];
    $image = $_FILES['imageUpload'];
    // echo "<pre>";
    // var_dump($image);
    // echo "</pre>";
    if($image['type'] === 'image/jpeg' || $image['type'] === 'image/jpg' || $image['type'] === 'image/png') {
        echo $image['name'];
    } else {
        die("File type is not supported");
    };
    // if(preg_match('/(0[789][01]\d{8}$)|(^\+234[789][01]\d{8}$)/', $entry)){
    // if (preg_match('/^0|^\+234[789][01]\d{8}$/', $entry)) {
    //     echo "<h1>$entry is valid</h1>";
    // } else {
    //     echo "<h1>Your number: $entry does not exist</h1>";
    // }
}

?>
<h1 class="text-3xl font-bold">Hello World</h1>
<form action="" method="post" enctype="multipart/form-data">
    <!-- <input type="text" name="person" /> -->
    <div class="col-span-full">
        <label for="photo" class="block text-sm/6 font-medium text-gray-900">Photo</label>
        <div class="mt-2 flex items-center gap-x-3">
            <img class="w-15 h-15 rounded-full" src="assets/raystore.png" alt="Rounded avatar" id="display">
            <input type="file" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50" id="entry" name="imageUpload"/>
        </div>
    </div>
    <input type="text" name="entry" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

    <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" />
</form>

<script>
    const entry = document.querySelector('#entry');
    const display = document.querySelector('#display');
    entry.addEventListener('change', (e)=> {
        let file = e.target.files[0];
        if(file.type == "image/jpeg" || file.type == "image/jpg" || file.type == "image/png") {
            display.src = URL.createObjectURL(file);
            console.log(file);
        } else {
            alert('Please upload an image');
        }
    });
</script>
<?php
// require_once('assets/footer.php');
?>