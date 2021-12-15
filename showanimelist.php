<?php
    function showAnimeList($anime, $synopsis, $episodes, $img_link, $anime_link)
    {
        echo "<div class='anime col-xs-12 col-sm-4 col-md-3'>";

        echo "<form action='singleanime.php' method='get'>";
        echo "<input type='hidden' name='anime-name' value='". $anime ."'>";
        echo "<input type='hidden' name='synopsis' value='". $synopsis ."'>";
        echo "<input type='hidden' name='episodes' value='". $episodes ."'>";
        echo "<input type='hidden' name='img_link' value='". $img_link ."'>";
        echo "<input type='hidden' name='anime_link' value='". $anime_link ."'>";
        echo "<a href='#'><input type='submit' style='height: 350px; width: 225px; margin: 35px; background: url(". $img_link .") no-repeat; border: 0px solid black' value=''></a>";
        echo "</form>";

        echo "<form action='singleanime.php' method='get'>";
        echo "<input type='hidden' name='anime-name' value='". $anime ."'>";
        echo "<input type='hidden' name='synopsis' value='". $synopsis ."'>";
        echo "<input type='hidden' name='episodes' value='". $episodes ."'>";
        echo "<input type='hidden' name='img_link' value='". $img_link ."'>";
        echo "<input type='hidden' name='anime_link' value='". $anime_link ."'>";
        echo "<a href='#'><input type='submit' value='". $anime ."' id='text-anime-submit'></a>";
        echo "</form>";

        echo "</div>";
    }
?>