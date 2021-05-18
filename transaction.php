<?php
include_once 'database.php';
$tdate = date("Y-m-d");

$result=mysqli_query($conn,"select * from vwtransaction where Pdate='$tdate'");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<section>  
<div class="container-fluid p-3 text-white text-center text-uppercase" style="background-color:#160d27;">
  <h1>mhb bank</h1>
</div>
<div class="container-fluid p-1 text-white text-left text-uppercase" style="background-color:#695002;">
    <h6>Today's Date: <label><input type="text" class="text-left" name="lbldt" id="currentDate" style="background-color:#695002;color:white;border:none;" value=""></label> 
    <span  class="text-center" style="margin-left: 300px">Today Transaction</span>      
    </h6>
  <script>
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      document.getElementById("currentDate").value = date;
  </script>

</div>
</section>
<div class="container">
  <h2>Transaction List</h2>
  
  <div class="table-responsive">
  <?php
if (mysqli_num_rows($result)>0) {
//   # code...
// }
  ?>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.No.</th>
          <th>From Customer</th>
          <th>To Customer</th>
          <th>Amount Transfer</th>

        </tr>
      </thead>
      <?php
      $i=0;
      while ($row=mysqli_fetch_array($result)) {
        # code...
      ?>

        <tbody>
        <tr>
          <td><?php echo $row["TranId"];?></td>
          <td><?php echo $row["fromcustName"];?></td>
          <td><?php echo $row["TocustName"];?></td>
          <td><?php echo $row["AmtTransfer"];?></td>
          
        </tr>
      </tbody>        
        <?php
        $i++;
        }
        ?>

    </table>
    <?php
    }
    else{
      echo "no result found";
    }
    ?>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
