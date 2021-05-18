<!DOCTYPE html>
<html>
<head>
	<title></title>
      <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <?php
    include_once 'database.php';
    if(isset($_POST['submit']))
    {
       $from=$_POST['FromCustomer'];
       $to=$_POST['ToCustomer'];
       $amt=$_POST['AmtTransfer'];
      $curbal = $_POST['curbal'];
      if ($amt > $curbal)
      {

         function function_alert($msg)
          {
            # code...
            echo "<script type='text/javascript'>alert('$msg')</script>";
          }
         function_alert("Cannot Transfer Amount Because of Insufficient Balance !..");

      }
      else {
       $query="insert into transfer(FromCustomer,ToCustomer,AmtTransfer) values('$from','$to','$amt')";
       $insert = mysqli_query($conn,$query);
       if(!$insert)
          {
              echo mysqli_error();
          }
          else
          {
              //---update from customer 
              $updtFrom = "update customer set current_balance= current_balance - '$amt' where tid = '$from'";
              $updt1 = mysqli_query($conn,$updtFrom);
              //---update to customer
              $updtTo = "update customer set current_balance= current_balance + '$amt' where tid = '$to'";
              $updt2 = mysqli_query($conn,$updtTo);
              echo "Records added successfully.";
              header("Location: payment.php",true,301);
          }
        }
    }
?>


<section>  

<div class="container-fluid p-3 text-white text-center text-uppercase" style="background-color:#160d27;">
  <h1>mhb bank</h1>
</div>
<div class="container-fluid p-1 text-white text-left text-uppercase" style="background-color:#695002;">
    <h6>Today's Date: <label><input type="text" class="text-left" name="lbldt" id="currentDate" style="background-color:#695002;color:white;border:none;" value=""></label> 
    <span  class="text-center" style="margin-left: 350px">transfer</span>      
    </h6>
  <script>
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      document.getElementById("currentDate").value = date;
  </script>

</div>
</section>
<section>
  <div class="container my-2">

<form method="POST">
 
      <label class="" for="inlineFormCustomSelectPref">Select Customer</label>
      <?php
            $id = htmlspecialchars($_GET['id']);
            
          include_once 'database.php';
          $sql = "Select * from customer where tid = $id";
          
          $result=mysqli_query($conn,$sql);

          echo "<select class='custom-select' id='inlineFormCustomSelectPref' name='FromCustomer'>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['tid'] . "'>" . $row['name'] . "</option>";
            $curbal=$row['current_balance'];
          }
          echo "</select>";
          echo " <div class='form-group'>";
    echo "<label for='exampleInputEmail1'>Current Balance Amount</label>";
    echo "<input type='label' class='form-control' id='exampleInputEmail1' name='curbal' aria-describedby='emailHelp'  readonly='true' value=$curbal>";
    echo "</div>";
        ?>

      <label class="" for="inlineFormCustomSelectPref">Transfer to</label>
            <?php
                        $id = htmlspecialchars($_GET['id']);

          include_once 'database.php';
          $result=mysqli_query($conn,"select * from customer where tid!=$id");

          echo "<select class='custom-select' id='inlineFormCustomSelectPref2' name='ToCustomer'>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['tid'] . "'>" . $row['name'] . "</option>";
          }
          echo "</select>";
        ?>

      <div class="form-group">
    <label for="exampleInputEmail1">Amount to be Transfer</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter amount" name="AmtTransfer">
  </div>

  <button type="submit" class="btn btn-primary my-1" name="submit" >Transfer</button>
  <button type="button" class="btn btn-primary my-1" onclick="document.location='index.php'">Cancel</button>

</div>

</form>
  </div>
</section>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>