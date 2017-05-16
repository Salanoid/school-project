<?php
    require_once 'components/header.php';
    require_once 'components/footer.php';
    echo $header;
    require_once 'database.php';
?>

    <div class="content">
      <br>
      <h1>Customer support</h1>
      <h3>Do you need help? Check if there is the question you wish to ask below. <br>If not, ask a new question with this form:</h3>

      <form method="post" action="">
        <input type="text" name="fullname" placeholder="Full Name" size="30">
        <br><br>
        <textarea name="question" placeholder="Question" cols="28" rows="3"></textarea>
        <br>
        <input type="submit" value="Submit">
        <br>
      </form>

    </div>
    
    <?php
      if(isset($_POST["submit"])){
        $sql = "INSERT INTO contact (name, question)
                VALUES ('".$_POST["name"]."','".$_POST["question"]."')";
                if ($dbh->query($sql)) {
                  echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                }
                else{
                  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                }

                }
?>
<?php echo $footer; ?>
