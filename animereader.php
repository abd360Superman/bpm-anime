<?php 
    function readCSV($anime_name) {
        $data = array();
        $file = fopen("animes.csv", "r");
        fgetcsv($file); // Adding this line will skip the reading of the first line from the csv file and the reading process will begin from the second line onwards
        while (! feof($file))
        {
            $a = fgetcsv($file);
            if (str_contains(strtolower($a[0]), strtolower($anime_name))) {
                array_push($data, $a);
            }
        }

        return $data;
    }
?>