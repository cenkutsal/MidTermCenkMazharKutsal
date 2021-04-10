<h1>Welcome</h1>
<form method="GET">
    <p><label for="input">License Plate</label>
        <input type="text" name="LicencePlate" size="20" />
    </p>
    <p><label for="input">Brand</label>
        <input type="text" name="Brand" size="20" />
    </p>
    <p><label for="input">Model</label>
        <input type="text" name="Model" size="20" />
    </p>
    <p><label for="otherinput">Model Year</label>
        <input type="text" name="ModelYear" size="5" />
    </p>
    <p><label for="otherinput">Color</label>
        <input type="text" name="Color" size="5" />
    </p>
    <input type="submit" />
</form>
<pre>
$_GET:
<?php
print_r($_GET);
?>
</pre>