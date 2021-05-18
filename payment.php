<!DOCTYPE html>
<html>
<head>
	<title></title>
      <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<section>  

<div class="container-fluid p-3 text-white text-center text-uppercase" style="background-color:#160d27;">
  <h1>mhb bank</h1>
</div>
<div class="container-fluid p-1 text-white text-left text-uppercase" style="background-color:#695002;">
    <h6>Today's Date: <label><input type="text" class="text-left" name="lbldt" id="currentDate" style="background-color:#695002;color:white;border:none;" value=""></label> 
    <span  class="text-center" style="margin-left: 325px">view customer</span>      
    </h6>
  <script>
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      document.getElementById("currentDate").value = date;
  </script>

</div>
</section>
<section>
  <div class="center my-5">
<svg xmlns="http://www.w3.org/2000/svg" height="50px" fill="green" class="bi bi-check-circle" <!-- viewBox="0 0 16 16" -->>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>
<br>
<h3 class="text-success">your transaction is successful</h3>  
  <button type="submit" class="btn-lg btn-primary my-1" onclick="document.location='index.php'">Home</button>

  </div>
  
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>