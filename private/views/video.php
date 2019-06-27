<?php
include 'header.php';
?>

<div class="Home-content">


  <?php foreach ( $videos as $video ):?>


  <div class="videos">
    <h2><?php echo $video['title'] ?> </h2>
    <iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/<?php echo $video['video']?>"></iframe>
    <p><em>Tags:<span> <?php echo $video['keywords']; ?></span></em></p>
  </div>



<?php endforeach; ?>
</div>
    <?php
include 'footer.php';
?>

</body>
</html>
