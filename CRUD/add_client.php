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

  <div class="container">
    

    <form class="mt-5 p-5 border border-dark" action="data_insertion.php" method="post">
      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="" id="first_name" class="form-control">
          </div>
        </div>
        
    </div>
    <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" value="" id ="address" class="form-control">
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" value="" id ="phone" class="form-control">
        </div>


        <div class="form-group">
          <label for="status">Status:</label>
          <input type="number" name="status" value="" id ="status"class="form-control">
        </div>
       <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" id="gender_male">Male &nbsp;<input type="radio" name="gender" value="Female" id="gender_female">Female &nbsp;<input type="radio" name="gender" value="Others" id="gender_others">Others &nbsp;
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


