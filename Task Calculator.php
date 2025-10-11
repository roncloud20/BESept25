<?php
$pagetitle = "Task Calculator";
require_once('assets/header.php');
?>
<main class="container m-auto flex flex-col justify-center max-w-70 mb-6">
<h1 class="text-3xl font-bold">Task Calculator</h1>
<?php
//  echo $_SERVER ['REQUEST_METHOD'];
  $earningsError = $taxError = "";
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $earnings = $_POST['earnings'];
   $tax = $_POST['tax'];
    

   if(empty($earnings)){
    $earningsError = "<p class='text-red-500'>Please enter earnings</p>";
   }
   if(empty($tax)){
     $taxError = "<p class='text-red-500'>Please enter tax</p>";
   }

    if ($earningsError == "" && $taxError == "") {
          $task = ($earnings) - (($tax / 100) * $earnings);
            echo "<h1 class='text-red-600 text-3xl'>Total Earnings:</h1>";
            echo "<h1 class='text-green-600 text-3xl'>$task</h1>";
        } else {
            echo "<h1 class='text-red-500 text-3xl font-bold'>Error Occured</h1>";
        }
 }
?>

 <form method="post" action="">
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="earning" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray mt-2">Earnings</label>
                <input type="number" name="earnings" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Earnings"/>
                   <?php echo $earningsError ?>
            </div>
            <div>
                <label for="tax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Tax</label>
                <input type="text" name="tax" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Tax"/>
                  <?php echo $taxError ?>
            </div>
          
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
               
    </form>

</main>
<?php
require_once('assets/footer.php');
?>