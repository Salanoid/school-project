<?php
    require_once 'components/header.php';
    require_once 'components/footer.php';
    echo $header;
    require_once 'database.php';
?>

    <div class="content">
      <br><br>

      <h3>Want to cook a specific recipe and don't know what <i>ingredients</i> you need, how to <i>prepare</i> it or how much <i>time</i> it takes? <u>See if you can find it below!</u> <br>(They are ordered alphabetically.)</h3>
      <br>
<!--
      <a href="recipe.php">
        <div>
          <h1 class="inline-recipe">Recipe title</h1>
          <br>
          <img src="chef.png" height="200px" class="flip">
          <img src="chef.png" height="200px" class="normal">
          <br><br><br><br><br><br><br><br><br><br><hr>
        </div>
      </a>
-->

      <?php
        $getRecipe = $conn->prepare("SELECT * FROM recipe ORDER BY title");
        $getRecipe->execute();
        $recipes = $getRecipe->fetchAll();
        foreach ($recipes as $recipe) {
          echo '<a href="recipe.php"><div>';
          echo "<h1 class='inline-recipe'>" . $recipe['title'] . '</h1>';
          echo '<br><img src="chef.png" height="200px" class="flip"><img src="chef.png" height="200px" class="normal">';
          echo "<br><b>Ingredients:</b> " . $recipe['ingredients'] . '<br>';
          echo "<br><b>Preparation method:</b> " . $recipe['preparationmethod'] . '<br>';
          echo "<br><b>Preparation time:</b> " . $recipe['preparationtime'] . ' hours<br><br><br><br><br><hr>';
        }
      ?>

    </div>
<?php echo $footer; ?>
