<?php
$pagetitle = "Calculator";
require_once('assets/header.php');
?>
<main class="container m-auto flex flex-col justify-center max-w-70 mb-6">
    <h1 class="text-3xl font-bold">Simple Interest Calculator</h1>
    <?php
    echo $_SERVER['REQUEST_METHOD'];
    $principalError = $rateError = $timeError = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];


        // Validating Principal
        if(empty($principal)) {
            $principalError = "<p class='text-red-500'>Please enter principal value</p>";
        }
        // Validating rate
        if(empty($rate)) {
            $rateError = "<p class='text-red-500'>Please enter rate value</p>";
        }
        // Validating time
        if(empty($time)) {
            $timeError = "<p class='text-red-500'>Please enter time value</p>";
        }

        if ($principalError == "" && $rateError == "" && $timeError == "") {
            $interest = ($principal * $rate * $time) / 100;
            $interest = '₦'.number_format($interest, 2);
            echo "<h1 class='text-green-600 text-3xl'>$interest</h1>";
        } else {
            echo "<h1 class='text-red-500 text-3xl font-bold'>Error Occured</h1>";
        }
    }
    ?>
    <form method="post" action="">
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="principal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Principal</label>
                <input type="number" name="principal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Principal"/>
                <?php echo $principalError ?>
            </div>
            <div>
                <label for="rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Rate</label>
                <input type="text" name="rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Rate"/>
                <?= $rateError ?>
            </div>
            <div>
                <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Time</label>
                <input type="number" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Time"/>
                <?= $timeError ?>
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


    </form>

</main>
<?php
require_once('assets/footer.php');
?>