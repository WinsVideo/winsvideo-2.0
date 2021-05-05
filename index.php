<?php
    include("includes/header.php");
?>

<!--  this is where the code will be -->
<div class="column">
    <h2>Recommended</h2>
    <?php 
        $query = $conn->query("SELECT * FROM videos, thumbnails WHERE videos.id = thumbnails.videoId AND privacy = '1' AND thumbnails.selected = '1' ORDER BY RAND() LIMIT 21");
        while($row = $query->fetch()) {
            echo htmlspecialchars(strip_tags($row["title"])) . "<br>";
            echo htmlspecialchars(strip_tags($row["filePath"])) . "<br>";
        }
    ?>

    <hr>

    <h2>Latest</h2>
    //latest videos
</div>

<?php
    include("includes/footer.php");
?>