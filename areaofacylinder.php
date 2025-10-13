<?php
$pagetitle = "Area of a Cylinder";
?>
<main>
    <h1>Area of a Cylinder</h1>
    <?php
    echo $_SERVER['REQUEST_METHOD'];
    $radius = $height = $area = "";
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $radius = $_POST['radius'];
        $height = $_POST['height'];

        //
     if (is_numeric($radius) && is_numeric($height) && $radius <= 0 && $height <= 0)
        $area = 2 * pi() * $radius * ($radius + $height);
        $area = round($area, 2);
} else {
    $area = "incorrect input";
}
?> 
<form method="post" action="">
    <div>
        <div>
            <label for="radius">Radius:</label>
            <input type="text" id="radius" name="radius" value="<?php echo $radius; ?>">
        </div>
        <div>
            <label for="height">Height:</label>
            <input type="text" id="height" name="height" value="<?php echo $height; ?>">
        </div>
        <div>
            <input type="submit" value="Calculate">
        </div>

    </div>

</main>