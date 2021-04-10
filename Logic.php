<pre>
<?php var_dump($_GET); ?>
</pre>
<?php
require "Automobile.php";
require "index.php";
$Automobile1 = new Automobile($_GET["LicencePlate"], $_GET["Brand"], $_GET["Model"], $_GET["ModelYear"], $_GET["Color"]);
echo $Automobile1;
