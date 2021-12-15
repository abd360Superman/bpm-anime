<?php 
    echo file_get_contents("html/head.html");
?>
        <main id='single-anime'>
            <?php
                echo "<h2>". $_GET["anime-name"] ."</h2>";
            ?>
            <div class='img-single-anime col-xs-12 col-md-3'>
                <?php
                    echo "<img src='" . $_GET["img_link"] . "'>";
                ?>
            </div>
            <div class='synopsis col-xs-12 col-md-6'>
                <?php
                    echo "<p><strong>Synopsis:  </strong>" . $_GET["synopsis"] . "</p>";
                ?>
            </div>
            <div class='details col-xs-12 col-md-3'>
                <?php 
                    if ($_GET["episodes"] > 1) { // If less than or equal to one, then probably a movie or null
                        echo "<h4>Episodes: </h4><p>". $_GET["episodes"] . "</p><br><br>";
                    }
                    echo "<h4>Watch it <a href='" . $_GET["anime_link"] . "' target='_blank'>here</a>"
                ?>
            </div>
            <hr>
            <h2>Comments</h2>
            <div id='your-comment'>
                <form action='save.php' method='post' id='comment-form'>
                    <input type='text' name='comment' class='comment' placeholder="Write your comment here... e.g. Amazing Anime!" required>
                    <!-- Even send other important data -->
                    <?php
                        echo "<input type='hidden' name='anime-name' value='". $_GET["anime-name"] ."'>";
                        echo "<input type='hidden' name='synopsis' value='". $_GET["synopsis"] ."'>";
                        echo "<input type='hidden' name='episodes' value='". $_GET["episodes"] ."'>";
                        echo "<input type='hidden' name='img_link' value='". $_GET["img_link"] ."'>";
                        echo "<input type='hidden' name='anime_link' value='". $_GET["anime_link"] ."'>";
                    ?>
                    <a href='#'><input type='submit' value='Submit Comment'></a>
                </form>
            </div>
            <div id='comments'>
                <?php
                    include 'conn.php';

                    $conn = OpenCon();
                    $sql = "SELECT * FROM `reviews` WHERE anime='" . $_GET["anime-name"] . "'";
                    $result = $conn -> query($sql);

                    while($row = $result->fetch_assoc()) {
                        echo "<em style='font-size: 1.25em; margin-left: 15px;'>". $row["review"] ."</em><br>";
                    }

                    CloseCon($conn);
                ?>
            </div>
        </main>

<?php
    echo file_get_contents("html/end.html");
?>