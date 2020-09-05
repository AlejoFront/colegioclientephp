<?php
    include 'ip.php';

    $proyecto = "/sw/test.json";

    $data = json_decode(file_get_contents($ip.$proyecto),true);

