<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body background="images/bankbg6.jpg" style="background-image:images/robert-bye-jeF-vyxytb4-unsplash.jpg;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover; ">

<section>  
<div class="container-fluid p-3 text-white text-center text-uppercase" style="background-color:#160d27;">
  <h1>mhb bank</h1>
  
</div>
<div class="container-fluid p-1 text-white text-left text-uppercase" style="background-color:#695002;">
  <h6>Today's Date: <label><input type="text/submit/hidden/button/etc" name="lbldt" id="currentDate" style="background-color:#695002;color:white;border:none;" value=""></label> </h6>
  <script>
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      document.getElementById("currentDate").value = date;
  </script>
</div>
</section>

  <section>
  <div class="container mx-5 " >
      <ul class="center">
        <li class=" my-5 col-lg-3 col-md-3 col-12 centermargin">
          <a href="customer.php" title="">
          <article class="boxholder bg_pink2">
            <p>
              <img src="images/cust3.png" style="width:120px;height:80px;margin: 5px 0px;" border="0" alt="">
            </p>
            <h3>View Customer</h3>
          </article>
        </a>
        </li>
        <li class="my-5 col-lg-3 col-md-3 col-12 centermargin">
          <a href="transaction.php" title="">
          <article class="boxholder bg_pink2">
            <p>
              <img src="images/transfer1.png" style="width:120px;height:80px;margin: 5px 0px;" border="0" alt="">
            </p>
            <h3>Transactions</h3>
          </article>
        </li>
      </a>
      </ul>             
  </section>
      
    </div>

</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>