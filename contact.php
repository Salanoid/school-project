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
        <input type="text" name="name" placeholder="Full Name" size="30">
        <br><br>
        <textarea name="question" placeholder="Question" cols="28" rows="3"></textarea>
        <br><br>
        <input type="submit" value="Submit" name="submit">
        <br>
      </form>
      <br>
      <br>
      <br>

      <?php
        $getContact = $conn->prepare("SELECT * FROM contact");
        $getContact->execute();
        $contacts = $getContact->fetchAll();
        foreach ($contacts as $contact) {
          echo '<hr>';
          echo "Name: " . $contact['name'] . '<br>';
          echo "Question: " . $contact['question'] . '<br>';
        }
        echo '<hr>';
      ?>

    </div>

    <?php
      if(isset($_POST["submit"])){
        $sql = "INSERT INTO contact (name, question)
                VALUES ('".$_POST["name"]."','".$_POST["question"]."')";
                if ($conn->query($sql)) {
                  echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                }
                else{
                  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                }

      }
    ?>

<?php echo $footer; ?>
