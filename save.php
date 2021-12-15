<html>
    <head></head>
    <body>
        <?php
            include 'conn.php';
            $conn = OpenCon();
            $conn -> query("INSERT INTO `reviews` (anime, review) VALUES ('". $_POST['anime-name'] ."', '". $_POST['comment'] ."')");
            CloseCon($conn);
        ?>
        <script type="text/javascript">
            var anime_name = `<?php echo $_POST['anime-name'] ?>`
            var synopsis = `<?php echo $_POST['synopsis'] ?>`
            var episodes = `<?php echo $_POST['episodes'] ?>`
            var img_link = `<?php echo $_POST['img_link'] ?>`
            var anime_link = `<?php echo $_POST['anime_link'] ?>`
            
            // Redirecting
            window.location = "singleanime.php?anime-name=" + encodeURI(anime_name) + "&synopsis=" + encodeURI(synopsis) + "&episodes=" + encodeURI(episodes) + "&img_link=" + encodeURI(img_link) + "&anime_link=" + encodeURI(anime_link);
        </script>
    </body>
</html>