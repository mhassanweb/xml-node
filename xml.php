<?php
    $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
    print_r ($xml);
    $sku = $xml->sku;
    echo $sku;
echo "<br>";
