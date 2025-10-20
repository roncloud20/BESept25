
<?php
$pagetitle = "Registration Page";
require_once('assets/header.php'); 

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $entry = $_POST ['entry'];

    if(preg_match('/^\+234|^0[789][01]\d{8}$/', $entry)){
        echo "<h1> $entry is valid </h1>";
    }else {
        echo "<h1>Your number: $entry does not exist</h1>";
    }
}

?>

    <form method="post">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="entry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                <input type="text" name="entry" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" />
              
            </div>
           <br>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

Assignment : 
Email : must include the @ and .
Password : must contain caps letters , numbers and special characters 