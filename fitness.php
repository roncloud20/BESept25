<?php
$pagetitle = "Fitness Page";
require_once ('assets/header.php');


//  echo $_SERVER['REQUEST_METHOD'];
$firstnameError = $lastError = $emailError = "";

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['first_'];
    $last = $_POST['last_'];
     $gender = $_POST['gender'];
    $weight = $_POST['weight'];
   $phone = $_POST['phone'];
    $TL = $_POST['Tl'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password'];
    // $remember = $_POST['remember'];

    echo "<h2> $firstname, $last, $gender, $weight, $TL, $email, $password, $confirm_password </h2>";

   
if(preg_match('/^\+234|^0[789][01]\d{8}$/', $phone)){
        echo "<h1> $phone is valid </h1>";
    }else {
        echo "<h1>Your number: $phone does not exist</h1>";
    }if(preg_match('/[@]./', $email)){
        echo "<h1> $email is valid </h1>";
    }else {
        echo "<h1>Your email: $email does not exist</h1>";
    }


 }
  if(empty($firstname)) {
    $firstnameError = "First name Required";
  }

  if(empty($last)) {
    $lastError = "Last name Required";
  }
  

  if(empty($email)) {
    $emailError = "Email Required";
  }

   

 ?>


    <main class = "m-5">
        <h1 class="text-3xl font-bold">Fitness Register</h1>

     <form method="post">

        <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name </label>
            <input type="text" name="first_" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="David"  />
            <span class="text-red-500"><?= $firstnameError ?></span>
        </div>
        <div>
            <label for="last_" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last </label>
            <input type="text" name="last_" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Niggaboy"  />
             <span class="text-red-500"><?= $lastError ?></span>
           
             
        </div>
        <div class="mb-6">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        <div class="mb-6">
                <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select name="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your weight</option>
                    <option value="text">60kg</option>
                    <option value="text">70kg</option>
                    <option value="text">80kg</option>
                    <option value="text">90kg</option>
                    <option value="text">100kg</option>
                    <option value="text">120kg</option>
                </select>
            </div>
            
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
            <input type="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678"  />
        </div>
        
        <div class="mb-6">
                <label for="Training Level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select name="Tl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Training Level</option>
                    <option value="Male">Basic</option>
                    <option value="Female">Medium</option>
                    <option value="Others">Advance</option>
                </select>
            </div>

    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com"  />
          <span class="text-red-500"><?= $emailError ?></span>
    </div> 
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••"  />
    </div> 
    <div class="mb-6">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
        <input type="password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••"  />
    </div> 
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input name="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"  />
    
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

    </main>
    


