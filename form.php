<?php
    require_once 'components/header.php';
    require_once 'components/footer.php';
    echo $header;
    require_once 'database.php';
?>

    <div class="content">
        <br>
        <form>
            <input type="text" name="title" placeholder="title"/> <br> <br>
            <textarea placeholder="description"></textarea> <br> <br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
    
<?php echo $footer; ?>