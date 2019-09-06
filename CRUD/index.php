<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CROD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--datatable css next 2 link-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!--Datatable-->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


</head>
<body>
  <div>


    <?php 

    include ("DBconnection.php");
    $sql = "SELECT * FROM member";
    $result = $connet->query($sql);



    ?>

  </div>

  <div class="container">

    <!--  button -->

    <h2>Member Table</h2>
    <div>
      <?php
      if(isset($_SESSION['message']))echo $_SESSION['message'];
      if(isset($_SESSION['message2']))echo $_SESSION['message2'];

      ?>
    </div>
    <a href="add_client.php" class="btn btn-primary m-2">Add Member </a>


    <!-- Table -->

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Gender</th>
          <th>Status</th>
          <th>Update and Delete</th>
        </tr>
      </thead>


      <tbody>
        <?php
        $i=1;
        foreach($result as $data){?> 
        <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $data['Name'];?></td>
          <td><?php echo $data['Address'];?></td>
          <td><?php echo $data['Phone'];?></td>
          <td><?php echo $data['Gender'];?></td>
          <td><?php echo $data['Status']==1? 'Active': 'Inactive';?></td>
          <?php $new_id = base64_encode($data['id']); ?>
          <td><a href="edit_data.php? id = <?php echo $new_id;?>" class="btn btn-success">Update</a>  
            <a href="remove_client.php? id=<?php echo $new_id;?>"  class="btn btn-danger">Delete</a></td>
          </tr>
          <?php $i++; } ?>
        </tbody>

      </table>



    </div>

    <script>
      $(document).ready(function() {
        $('.table').DataTable( {
          dom: 'Bfrtip',
          buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        } );
      } );
    </script>

  </body>
  </html>

  <?php unset($_SESSION['message']); ?>


