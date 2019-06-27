<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/modaal.css">
    <div class="other-content">
        <h1>INFO</h1>
        <div class="wrapper">
        <?php
        $statement = get_all_content();

        foreach ( $content as $history ):?>
        <div class="cover">
        <img class="modaal-knop" src="<?php echo $history['img'] ?>"/>
        <h2><?php echo $history['title'] ?></h2>
        </div>
            <div class="album modaalContent">
            <img src="<?php echo $history['img']?>" alt="<?php echo $history['title'] ?>" style="width="300" height="250"/>
    <article>
            <span class="item-<?php echo $i?>">
                <h2 class="title"><?php echo $history['title'] ?></h2>
         <p><?php echo $history['beschrijving']?></p>
         <br><hr id="tussenlijn"><br>
         <p><em><?php echo $history['keywords']?></em></p>
                <p>
                    Geplaatst op <?php echo $history['datum'] ?>  <br> door <?php echo $history['author'] ?> <br/>

                </p>
            </span>
                </article>
            </div>
        <?php endforeach; ?>
</div>
</div>
<script src="js/modaal.js"></script>
<?php
include 'footer.php';
?>
</body>
</html>
