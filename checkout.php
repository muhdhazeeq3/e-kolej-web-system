<?php
  if(isset($_GET)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Ekolej (Stripe)</title>
    <!-- <link rel="stylesheet" href="./css/_style.css"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

button[type=submit] {
  background-color: #CC4629;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: ;
}

button[type=submit]:hover {
  background-color: #45a049;
}

button[type=reset] {
  background-color: #CC4629;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: ;
}

button[type=reset]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<script src="script.js"></script>
  <link rel="stylesheet" href="styles.css">

</head>
<body>

    <?php
        include_once "topnavbar_guest.php";
    ?>

<!-- <button type="button" onclick="goback()" class="back">Go Back</button>  -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

            <form autocomplete="off" action="checkout-charge.php" method="POST">

                <div class="row">
                    <div class="col-25">
                        <label>Customer Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="c_name" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label>Address</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="address" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label>Contact number</label>
                    </div>
                    <div class="col-75">
                    <input type="number" id="ph" name="phone" pattern="\d{10}" maxlength="10" required/>
                </div>
                    
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Product name</label>
                    </div>
                    <div class="col-75">
                    <input type="text"  name="product_name" value="<?php echo $_GET["item_name"]?>" disabled required/>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                    <input type="text"  name="price" value="<?php echo $_GET["price"]?>" disabled required/>
                    </div>

                </div>
               
               <div style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 20%; margin-top: 20px">
                    <input type="hidden" name="amount" value="<?php echo $_GET["price"]?>">
                    <input type="hidden" name="product_name" value="<?php echo $_GET["item_name"]?>">
                
                <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51I6q4mLv8g6axRStGmdqChSJp0zaJhoVbEo69tA6TkhBaarEpdNUkH0gEaOfmkHuwkqTAZbf5nzUvNSBIJOSRFeK00FF4hruM0"
                data-amount=<?php echo str_replace(",","",$_GET["price"]) * 100?>
                data-name="<?php echo $_GET["item_name"]?>"
                data-description="<?php echo $_GET["item_name"]?>"
                data-image="<?php echo $_GET["image"]?>"
                data-currency="myr"
                data-locale="auto">
                </script>
            </div>
            </form>
        </div>
    </div>
</div>
    <div class="col-md-6">
        <div class="checkout-container" style="text-align: center;">
            <h4 >Product Name&nbsp;:&nbsp;<?php echo $_GET["item_name"]?></h4>
            <img src="<?php echo $_GET["image"]?>" style="height: : 250px; width: 250px;  display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 40%;"/>
            <span>Price &nbsp;:&nbsp;<?php  echo $_GET["price"]?></span>
        </div>
    </div>
 

<?php
  }
?>
<script>
    function goback(){
        window.history.go(-1);
    }

    $('#ph').on('keypress',function(){
         var text = $(this).val().length;
         if(text > 9){
              return false;
         }else{
            $('#ph').text($(this).val());
         }
         
    });
</script>

<?php
        include_once "footer_ekolej.php";
    ?>

</body>
</html>