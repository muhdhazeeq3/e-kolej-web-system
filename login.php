<?php  

 include_once 'db.php';
 
 
 session_start();
 if(isset($_SESSION["staffid"]))

      { 
        include_once 'session.php';
        if ($pos==="Admin") {
           header("location:indexadmin.php");
         } 
        elseif($pos==="Student") {
           header("location:indexstudent.php");
         } else{
          header("location:indexguest.php");
        }


      }

 try  
 {  
       // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["staffid"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
            // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "SELECT * FROM tbl_user_kiz WHERE fld_user_nomatric = :staffid AND fld_user_password = :password";  
                $stmt = $conn->prepare($query);  
                $stmt->execute(  
                     array(  
                          'staffid'     =>     $_POST["staffid"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                	
                    $_SESSION["staffid"] = $_POST["staffid"];  
                   
                  

                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Password</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
        <?php include_once 'nav_bar_ekolej.php' ?>
           <title>E-Kolej System: Login</title>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <link href="css/bootstrap.min.css" rel="stylesheet"> 
             <script src="js/bootstrap.min.js"></script>  
             <style type="text/css">
                html,body {
                  width:100%;
                  height:100%;
                  background:url(loginpage2.jpg) center center no-repeat;
                }
            </style>
      </head>  
      <body>  
           <br />  
           <div id="a" class="container" style="width:600px;">  
                
                <div id="c" class="col-md-12">
                  <div id="d" class="jumbotron" style="background-color: lightgray" >
                    <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <center><h3 align="">E-Kolej Login Page</h3><br />  

                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="staffid" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>
                <label style="float: right; font-size: 12px">For guest click <a href="indexguest.php">HERE</a></label> 

           </div>
           <div></div>  
           <br />  
      </body>  
 </html>  