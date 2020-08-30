<?php
    $files = array(6);

    $files[1] = fopen('popcorn-dir.github.io/lion.txt', 'r');
    $files[2] = fopen('popcorn-dir.github.io/tiger.txt', 'r');
    $files[3] = fopen('popcorn-dir.github.io/wolf.txt', 'r');
    $files[4] = fopen('popcorn-dir.github.io/bear.txt', 'r');
    $files[5] = fopen('popcorn-dir.github.io/webelos.txt', 'r');
    $files[6] = fopen('popcorn-dir.github.io/arrow-of-light.txt', 'r');
  

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
    $name = trim($scout[0]);
    $code = trim($scout[1]);

    $url = "https://www.trails-end.com/store/scout/" . $code;
    header('Location: ' . $url);
?>
