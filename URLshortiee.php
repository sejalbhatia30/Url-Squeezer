<?php
  
  include('../backend/urlfunctions.php');
  getting();
  
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 

<style>
    
/* Login Page */
.dark-header {background: #f2f0f1;}
.dark-header header{background: #303030; position: absolute; width: 100%;	}
.btn-grps .pink-btn {height: 51px;display: inline-block;line-height: 51px;margin-left: 17px;}
.btn-grps .pink-btn:hover{background: #fff !important; color: #303030 !important;}
.btn-grps .dark-btn{background: #565656; box-shadow:0 2px 0 #4b4b4b; }
.btn-grps {margin-top: 13px;margin-right: 15px;}
.login-middle {vertical-align: middle;display: table-cell;height: 100vh;}
.login-details label {width: 100%;margin-bottom: 20px;}
input:focus, input:hover{outline: none;}
.login-details input[type="text"], .login-details input[type="password"] {width: 100%;padding-left: 10px;background: #f4f4f4;height: 40px;border: 1px solid #d5d5d5;border-radius: 5px;font-weight: 600;}
.login-details h2 {font-size: 25px;margin: 0;padding-bottom: 30px;}
.login-details span {margin-left: 15px;vertical-align: top;font-weight: 400;font-size: 14px;}
.btn-sub span a, .btn-sub span a:hover{color: #000; font-size: 15px;}
.btn-sub button {border-bottom: 2px solid #b2534f;box-shadow: none;border-radius: 3px; width: 145px;}
.btn-sub button:hover{background:#b2534f; border-radius: 3px; box-shadow: none;}
.login-details {max-width: 666px;margin: 0 auto;background: #fff;padding: 35px;border-radius: 7px; box-shadow: 0 0 7px rgba(0,0,0,0.1);}
.login-inner {height: 100%;display: table;width: 100%;}
.btn-sub span{margin-left: 25px;}


 @media (max-width:767px) {
/*KK*/
.login-middle {display: block;height: auto;padding: 15px;}
.dark-header header {position: relative;}
.btn-grps .pink-btn {height: 35px;display: inline-block;line-height: 35px;margin-left: 15px;max-width: 200px;display: block;text-align: center;margin:0px auto 13px}
.btn-grps {float: left !Important;width: 100%;}
.btn-sub span {text-align: left;display: block;margin-left: 0;margin-top: 15px;}
}
    
</style>




</head>
<body>
   
   
   <div id="result"></div> 
  <section class="login-inner">
    <div class="login-middle" >
      <div class="login-details">
        <form method="post" id="form">
          <h2 style="text-align: center"><strong>URL Shortener</strong></h2>
          <label>
            <input type="text" placeholder="Paste your original URL " name="url" />
          </label>
         
          
          <div class="btn-sub" style="text-align:center">
            <button class="pink-btn" type="submit" name="submit" >Shorten</button>
            
          </div>

        </form>
      </div>
      
    </div>
  </section>
    <?php  inserting();  ?>
   
</body>
</html>







