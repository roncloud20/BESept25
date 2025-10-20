<?php
$pagetitle = "real estate";
require_once('assets/header.php');

echo $_SERVER['REQUEST_METHOD'];

$firstnameError =$lastnameError = $phoneError = $emailError = $passwordError = $confirm_passwordError = $locationError = $interestError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $location = $_POST['location'];
    $interest = $_POST['interest'];

      echo "<h3> $firstname, $lastname, $phone, $email, $password, $confirm_password, $location, $interest </h3>";

    // Validate Firstname
    if(empty($firstname)) {
        $firstnameError = "First name is required";
    }

    // Validate Lastname
    if(empty($lastname)) {
        $lastnameError = "Last name is required";
    }

    if(empty($phone)) {
        $phoneError = "Phone number is required";
    }

    if(empty($email)) {
        $emailError = "Email is required";
    }

    if(empty($password)) {
        $passwordError = "Password is required";
    }

    if(empty($confirm_password)) {
        $confirm_passwordError = "Password is required";
    }

    if(empty($location)) {
        $locationError = "Location is required";
    }

    if(empty($interest)) {
        $interestError = " Make Your Choice";
    }
}
?>

<main class="m-5">
<form method ="post">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
              <span class="text-red-500"><?= $firstnameError ?></span>
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
            <span class="text-red-500"><?= $lastnameError ?></span>
        </div> 
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
              <span class="text-red-500"><?= $phoneError ?></span>
        </div>
          <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
           <span class="text-red-500"><?= $emailError ?></span>
    </div> 
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
               <span class="text-red-500"><?= $passwordError ?></span>
    </div> 
    <div class="mb-6">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
        <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
             <span class="text-red-500"><?= $confirm_passwordError ?></span>
    </div> 
    <div>
            <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
            <input type="text" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" placeholder="Enter Location" required />
              <span class="text-red-500"><?= $locationError?></span>
        </div>
            <div class="mb-6">
                <label for="interest" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select name="interest" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                    <option selected>Choose your interest</option>
                    <option value="Buying">Buying</option>
                    <option value="Selling">Selling</option>
                    <option value="Agent">Agent</option>
                </select>
                 <span class="text-red-500"><?= $interestError?></span>
          </div>
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
        </div>
     
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</main>
<?php
require_once('assets/footer.php');
?>