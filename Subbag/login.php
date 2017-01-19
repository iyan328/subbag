<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form Sub Bagian Kerjasama</title>
  <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->

  
      <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/normalize.min.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Login</a></li>
      </ul>
      
        <div id="signup">   
          <h1>Silahkan Login</h1>
          
          <form action="../login/loginsubbag.php?op=in" method="post">
          
          <div class="field-wrap">
            <input name="username" placeholder="Username" type="text"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <input name="password" placeholder="Password" type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button next"/>Login</button>
          
          </form>

        </div>
        
      
</div> <!-- /form -->
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
		<script src="js/jquery.min.js"></script>
      <script src="js/index.js"></script>

</body>
</html>
