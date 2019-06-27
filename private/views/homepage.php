<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
    <div class="Home-content">



		<?php

        $statement = get_latest_plants();

		foreach ( $statement as $plantje ):?>
            <div class="plantje">
                <h2><?php echo $plantje['title'] ?> </h2>
                <img src="<?php echo $plantje['img']?>" width="300" height="300"/>
                <p>
                    
                    Gevonden op <?php echo $plantje['datum'] ?> geplaatst door <?php echo $plantje['author'] ?> Tags: <?php echo $plantje['keywords']; ?><br/>
                    <!-- <a href="http://maps.google.com/maps?z=12&t=m&q=<?php echo $plantje['latitude'] ?>,<?php echo $plantje['longitude'] ?>" target="_blank">Bekijk de vindplaats op Google Maps</a> -->
                </p>
            </div>

		<?php endforeach; ?>

  </div>
    <?php
include 'footer.php';
?>
</div>
</body>
</html>
