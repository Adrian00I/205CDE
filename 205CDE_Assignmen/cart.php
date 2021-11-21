<!DOCTYPE html>
<html>
<head>
	<title>MY SHOPPING CART</title>
        <style>
            footer{
                position: fixed;                
                bottom: 0;
                left: 0;
                right: 0;
                background: #111;
                width: 100%;
                color: #FFF;
            }

            .footer-bottom{
                background: #000;
                width: 100%;
                padding-bottom: 2px;
                padding-top: 20px;
                text-align: center;
            }

            .footer-bottom p{
                font-size: 14px;
                word-spacing: 2px;
                text-transform: capitalize;

            }            
        </style>
</head>
<body>

	<?php 
     include("header.php");


	 ?>

	 <div class="container">
	 	<div class="col-md-12 get_cart my-5">
	 		
	 	</div>
	 </div>
    
    <footer>
        <div class="footer-bottom">
            <p>copyright &copy 2021 Briyani Delivery</p>
        </div>
    </footer>

	 <script type="text/javascript">
	 	$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
              	$("#get_cart").html(data.out);
                $("#cart").text(data.da);
                $("#total").text(data.total);
              }
           });
           }

           setInterval(show_mycart,1000);

	 	});

	 	$(document).on("click",".remove",function(){
             var id = $(this).attr("id");

             var action = "delete";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});

	 		$(document).on("click",".clearall",function(){
             var id = $(this).attr("id");

             var action = "clearall";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});
	 </script>

</body>
</html>