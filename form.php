<?php
    require_once 'components/header.php';
    require_once 'components/footer.php';
    echo $header;
    require_once 'database.php';
?>

    <div class="content">
        <br>
          <h1>Add a new recipe</h1>
          <h3>If you cook and want to share a recipe with other users, you can use this form. <br><i>Cooking brings people together, your recipe matters!</i></h3>
        <br>
        <form method="post" action="">
            <input type="text" name="title" placeholder="Title" size="30" required /> <br> <br>
            <input type="text" name="ingredients" placeholder="Ingredients" size="30" required /> <br> <br>
            <textarea name="preparationmethod" placeholder="Preparation method" cols="28" rows="3" required></textarea> <br> <br>
            <input type="number" name="preparationtime" placeholder="Preparation Time (hours)" required/> <br> <br>
            <input type="submit" value="Submit" name="submit" />
        </form>
    </div>

<?php
    if(isset($_POST["submit"])){
        $sql = "INSERT INTO recipe (title, ingredients, preparationmethod, preparationtime)
                VALUES ('".$_POST["title"]."','".$_POST["ingredients"]."','".$_POST["preparationmethod"]."','".$_POST["preparationtime"]."')";
                if ($conn->query($sql)) {
                  echo "<script type= 'text/javascript'>window.location.replace('index.php');alert('Data successfully Inserted.');</script>";
                }
                else{
                  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                }

    }
?>

<?php echo $footer; ?>
