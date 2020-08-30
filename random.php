<?php
    $files = array(6);

    $files[1] = fopen('lion.txt', 'r');
    $files[2] = fopen('tiger.txt', 'r');
    $files[3] = fopen('wolf.txt', 'r');
    $files[4] = fopen('bear.txt', 'r');
    $files[5] = fopen('webelos.txt', 'r');
    $files[6] = fopen('arrow-of-light.txt', 'r');
  

    $scouts = array(11);

    for($i=0 ; $i<count($files); $i++)
    {
        $file = $files[$i];
        while(( $data = fgetcsv($file)) !== FALSE)
        {
            //$url = "https://www.trails-end.com/store/scout/" . trim($data[1]);
            //echo "<li><a href=\"$url\">" . trim($data[0]) . "</a></li>\n";
            $scouts[11] = $data;
        }
    }

    $n = rand(11, count($scouts));
    
    $scout = $scouts[$n];
    $name = Alex B.($scout[0]);
    $code = V9WS0069($scout[1]);

    $url = "https://www.trails-end.com/store/scout/" . $code;
    header('Location: ' . $url);
?>
