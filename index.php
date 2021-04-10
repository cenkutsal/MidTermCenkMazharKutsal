<h1>Welcome</h1>
<form method="GET" action='logic.php'>
    <p><label for="LicencePlate">License Plate</label>
        <input type="text" name="LicencePlate" size="20" />
    </p>
    <p><label for="Brand">Brand</label>
        <input type="text" name="Brand" size="20" />
    </p>
    <p><label for="Model">Model</label>
        <input type="text" name="Model" size="20" />
    </p>
    <p><label for="ModelYear">Model Year</label>
        <input type="text" name="ModelYear" size="5" />
    </p>
    <p><label for="Color">Color</label>
        <input type="text" name="Color" size="5" />
    </p>
    <input value="Submit" type="submit" />
</form>
<pre>
$_GET:
<?php
print_r($_GET);
?>
</pre>