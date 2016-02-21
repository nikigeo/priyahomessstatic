<?php
$reviewFile = fopen("reviews.txt", "r") or die("Unable to open file!");
$fullReviews = fread($reviewFile,filesize("reviews.txt"));
  $reviews = explode("$$", "$fullReviews");
  foreach($reviews as $review) {
    $reviewContent = explode("##",$review);
    echo "<div class='inner-content'>";
    echo "<div style='text-align:left; color:#000; font-weight:400; font-size:16px;'>";
    echo "<div class='subtitle' style='color:#000; font-weight:bold;'>$reviewContent[0]</div>";
    echo "<p>";
    echo "$reviewContent[1]<br>";
    echo "$reviewContent[2]<br>";
    echo "$reviewContent[3]<br>";
    echo "</p></div></div>";
    }
fclose($reviewFile);
?>