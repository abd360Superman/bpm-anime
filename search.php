<?php 
    echo file_get_contents("html/head.html");
    echo file_get_contents("html/home.html");
?>
        <main id="anime-list">
            <div class="container">
                <?php
                    include 'animereader.php';
                    include 'showanimelist.php';

                    $anime_len = strlen($_GET["anime-name"]);
                    if ($anime_len < 3) {
                        echo file_get_contents("html/lenerror.html");
                    } else {
                        $animes = readCSV($_GET["anime-name"]);
                        if (count($animes) == 0) {
                            echo file_get_contents("html/nonefounderror.html");
                        } else {
                            for ($i = 0; $i < count($animes); $i++) {
                                showAnimeList($animes[$i][0], $animes[$i][1], $animes[$i][2], $animes[$i][3], $animes[$i][4]);
                            }
                        }
                    }
                ?>
            </div>
        </main>

<?php 
    echo file_get_contents("html/end.html");
?>
