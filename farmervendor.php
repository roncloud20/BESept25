<?php
$pagetitle = "Farmer Vendor Page";
require_once('assets/header.php');


// Initializing variables
$businessnameError = $vendortypeError = $contactpersonError = $phoneError = $emailError = $passwordError = $confirmpasswordError = $businessregnumberError = $taxidnumberError = $businesstypeError = $yearofestblishmentError = $businessaddressError = $productsError = $farmsizeError = "";


// Capture values
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $businessname = $_POST['business_name'];
    $vendortype = $_POST['vendor_name'];
    $contactperson = $_POST['contact_person'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $businessregnumber = $_POST['business_reg_number'];
    $taxidnumber = $_POST['tax_id_number'];
    $businesstype = $_POST['business_type'];
    $yearofestblishment = $_POST['year_of_estb'];
    $businessaddress = $_POST['business_address'];
    $products = $_POST['products'];
    $farmsize = $_POST['farm_size'];

    echo "<h3> $businessname, $vendortype, $contactperson, $phone, $email, $password, $confirm_password, $businessregnumber, $taxidnumber, $businesstype, $yearofestblishment, $businessaddress, $products, $farmsize   </h3>";

    // Validate Businessname
    if(empty($firstname)) {
        $businessnameError = "Business name is required";
    }

    // Validate Vendor Type
    if(empty($vendortype)) {
        $vendortypeError = "Vendor type is required";
    }
    // Validate Contact Person
    if(empty($contactperson)) {
        $contactpersonError = "Contact person is required";
    }
    // Validate Phone
    if(empty($phone)) {
        $phoneError = "Phone number is required";
    }
    // Validate Email
    if(empty($email)) {
        $emailError = "Email is required";
    }
    // Validate Password
    if(empty($password)) {
        $passwordError = "Password is required";
    }
    // Validate Confirm Password
    if(empty($confirm_password)) {
        $confirmpasswordError = "Confirm password is required";
}
    // Validate business registration number
    if(empty($businessregnumber)) {
        $businessregnumberError = "Business registration number is required";
    }
    
    // Validate tax identification number
    if(empty($taxidnumber)) {
        $taxidnumberError = "Tax identification number is required";
    }

    // Validate Business Type
    if(empty($businesstype)) {
        $businesstypeError = "Business type is required";
    }

    // Validate Year of Establishment
    if(empty($yearofestblishment)) {
        $yearofestblishmentError = "Year of establishment is required";
    }

    // Validate Password Match
    if($password !== $confirm_password) {
        $confirmpasswordError = "Passwords do not match";
    }

    // Validate Business Address
    if(empty($businessaddress)) {
        $businessaddressError = "Business address is required";
    }

    // Validate Products
    if(empty($products)) {
        $productsError = "Products offered is required";
    }

    // Validate Farm Size
    if(empty($farmsize)) {
        $farmsizeError = "Farm size is required";
    }


}
?>

<main class=" m-5 ">
<div class="w-full p-4 bg-blue-50 border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 ">
    <form class="space-y-6" action="#" method="post">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Basic Information</h5>
        <div class="grid gap-6 mb-6 md:grid-cols-4">
        <div>
            <label for="business_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business name</label>
            <input type="text" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="primalfix" />
            <span class="text-red-500"><?= $businessnameError ?></span>
        </div>
        <div>
        <label for="vendor_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vendor Type</label>
                <select name="vendor_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your vendor type</option>
                    <option value="Farmer">Farmer</option>
                    <option value="Input Supplier">Input Supplier</option>
                    <option value="Equipment Dealer">Equipment Dealer</option>
                    <option value="Processor">Processor</option>
                    <option value="Distributor">Distributor</option>
                    <option value="Exporter">Exporter</option>
                </select>
        </div>
        <div>
            <label for="contact_person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Person</label>
            <input type="text" name="contact_person" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bola Tinubu" />
            <span class="text-red-500"><?= $contactpersonError ?></span>
        </div>
        <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                <input type="tel" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" />
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" />
            </div>
            <div>
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                <input type="password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" />
            </div>
        
        </div>
        
    </form>

    <form class="space-y-6" action="#" method="post">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Business Details</h5>
        <div class="grid gap-6 mb-6 md:grid-cols-4">
        <div>
            <label for="business_reg_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Registration Number</label>
            <input type="text" name="business_reg_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="RC 001002" />
            <span class="text-red-500"><?= $businessregnumberError ?></span>
        </div>
        <div>
            <label for="tax_id_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tax Identification Number</label>
            <input type="number" name="tax_id_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0123456789" />
            <span class="text-red-500"><?= $taxidnumberError ?></span>
        </div>
        <div>
            <label for="year_of_estb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year of Establishment</label>
            <input type="number" name="year_of_estb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1990" />
            <span class="text-red-500"><?= $yearofestblishmentError ?></span>
        </div>
        <div>
        <label for="business_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Type</label>
                <select name="business_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your business type</option>
                    <option value="Farmer">Sole Proprietorship</option>
                    <option value="Input Supplier">Partnership</option>
                    <option value="Equipment Dealer">Limited Liability Company</option>
                    <option value="Processor">Cooperative</option>
                </select>
        </div>
        <div>
            <label for="business_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Address</label>
            <input type="text" name="business_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="address" />
            <span class="text-red-500"><?= $businessaddressError ?></span>
        </div>
        <div>
                <label for="social_media" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website/Social Media Links</label>
                <input type="text" name="social_media" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" />
            </div>
        
        </div>
        
    </form>

    <form class="space-y-6" action="#" method="post">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Agricultural Information</h5>
        <div class="grid gap-6 mb-6 md:grid-cols-4">
        <div>
            <label for="agric_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primary Agricultural Category</label>
                <select name="agric_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your category</option>
                    <option value="Crops">Crops</option>
                    <option value="Livestock">Livestock</option>
                    <option value="Fisheries">Fisheries</option>
                    <option value="Equipment">Equipment</option>
                    <option value="Agrochemicals">Agrochemicals</option>
                    <option value="Fertilizers">Fertilizers</option>
                    <option value="Seeds">Seeds</option>
                    <option value="Agro Services">Agro Services</option>
                </select>
        </div>
        <div>
            <label for="products" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Products Offered</label>
            <input type="text" name="products" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maize, Soybeans etc" />
            <span class="text-red-500"><?= $productsError ?></span>
        </div>
        <div>
        <label for="farming_scale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Farming Scale</label>
                <select name="farming_scale" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your farming scale</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select>
        </div>
        <div>
            <label for="farm_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Farm Size</label>
            <input type="text" name="farm_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g 250 hectares" />
            <span class="text-red-500"><?= $farmsizeError ?></span>
        </div>
        <div>
        <label for="production_season" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Production Season/Cycle</label>
                <select name="production_season" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your Production Season</option>
                    <option value="Rain-fed">Rain-fed</option>
                    <option value="Irrigation">Irrigation</option>
                    <option value="All-year round">All-year round</option>
                </select>
        </div>
        <div>
        <label for="certification" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certifications</label>
                <select name="certification" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose your Certification</option>
                    <option value="SON">SON</option>
                    <option value="NAFDAC">NAFDAC</option>
                    <option value="Organic Certified">Organic Certified</option>
                    <option value="GAP">GAP</option>
                </select>
        </div>
        <div>
                <label for="supply_capability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supply Capability</label>
                <input type="text" name="supply_capability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quantity per month or season" />
            </div>
        
        </div>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register Vendor</button>
        
    </form>


</div>
</main>