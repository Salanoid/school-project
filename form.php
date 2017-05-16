<?php
    require_once 'components/header.php';
    require_once 'components/footer.php';
    echo $header;
    require_once 'database.php';
?>

    <div class="content">
        <br>
        <form>
            <input type="text" name="title" placeholder="title" size="30"/> <br> <br>
            <input type="text" name="ingredients" placeholder="Ingredients" size="30"/> <br> <br>
            <textarea name="preparationmethod" placeholder="Preparation method" cols="28" rows="3"></textarea> <br> <br>
            <input type="number" name="preparationtime" placeholder="Preparation Time"/> <br> <br>
            <input type="file" name="image"/> <br> <br>
            <input type="submit" value="Submit"/>
        </form>
    </div>

<?php echo $footer; ?>
