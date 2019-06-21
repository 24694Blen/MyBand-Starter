## BAP

### Oefenen met bestaande code omzetten naar een MVC structuur

In deze opdracht leer je hoe je code die nog niet zo goed is georganiseerd kunt organiseren in een (versimpelde) MVC (model view controller) structuur.

**Doel:**
- De student kan een stuk code waar logica gegevens en weergave door elkaar heen staat opnieuw organiseren in een beter georgainseerde structuur
- De student kan dubbele code omzetten in herbruikbare functies
- De student kan weergave, gegevens en logica van elkaar scheiden en een structuur opzetten waar later makkelijk extra code aan toegevoegd kan worden.

---

Begin bij [het begin](https://hiddebraun-ma.github.io/bap-md1-plantjes).

<div class="album modaalContent">
<img src="<?php echo $history['image']?>" alt="<?php echo $history['titel'] ?>" style="width="300" height="250" />
<article>
<span class="item-<?php echo $i?>">
    <h2 class="title"><?php echo $history['titel'] ?></h2>
<p><?php echo $history['beschrijving']?></p>
<br><hr id="tussenlijn"><br>
<p><em><?php echo $history['keywords']?></em></p>
    <p>
        Geplaatst op <?php echo $history['datum'] ?>  <br> door <?php echo $history['auteur'] ?> <br/>

    </p>
</span>
    </article>
</div>
<?php endforeach; ?>
</div>
</div>
<script src="modaal.js"></script>
