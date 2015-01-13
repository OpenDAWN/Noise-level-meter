
  <?php

    //echo count($_POST["data"]);

    $file = 'data/noise_values.csv';

    //$noise_value = $_POST["timestamp"].",".implode(",", $_POST["data"])."\r\n";
    $noise_value = $_POST["timestamp"].",".$_POST["avg"].",".$_POST["peak"]."\r\n";

    echo $noise_value;

    file_put_contents($file, $noise_value, FILE_APPEND);

  ?>
