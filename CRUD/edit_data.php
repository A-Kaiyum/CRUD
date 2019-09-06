<!DOCTYPE html>
<html lang="en">
<head>
  <title>CROD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php 

    include("DBconnection.php");
    $idd = base64_decode($_GET['id']);
    $sql = "SELECT *FROM member where id='$idd'";
    $result = $connet->query($sql);
    $data = $result->fetch_assoc();



    ?>

  <div class="container">
    

    <form class="mt-5 p-5 border border-dark" action="update_clientinfo.php" method="post">
      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $data['Name'];?>" id="first_name" class="form-control">
          </div>
        </div>
        
    </div>
    <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" value="<?php echo $data['Address'];?>" id ="address" class="form-control">
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" value="<?php echo $data['Phone'];?>" id ="phone" class="form-control">
        </div>


        <div class="form-group">
          <label for="status">Status:</label>
          <input type="number" name="status" value="<?php echo $data['Status'];?>" id ="status"class="form-control">
        </div>
       <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" id="gender_male" <?php if($data['Gender']=='Male') echo "checked";?> >Male &nbsp;<input type="radio" name="gender" value="Female" id="gender_female" <?php if($data['Gender']=='Female') echo "checked"; ?>>Female &nbsp;<input type="radio" name="gender" value="Others" id="gender_others" <?php if($data['Gender']=='Others') echo "checked";?>>Others &nbsp;
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="submit">&nbsp;</label>
            <input type="submit" name="submit" value="save" id="submit" class="btn btn-success" >
          </div>
        </div>
      </div>
  </form>



</div>


</body>
</html>


