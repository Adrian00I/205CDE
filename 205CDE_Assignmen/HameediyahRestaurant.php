<?php 

include("header.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            h2{
                text-align: center;
                height: 10%;
            }
            
            .carousel-item{
                margin-top: -10px;
                height: 350px;
                margin-bottom: 50px;
            }

            .carousel-item img{
                margin: auto;
                position: absolute;
                left: 0;
                top: 0;
                min-height: 300px;
                z-index: -1;
            }
            
            footer{
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
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="carousel slide" data-ride="carousel" id="mycarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="HameediyahCarousel//freeDelivery.jpg">
                            <div class="carousel-caption">
                                <h2 class="text-white"></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="HameediyahCarousel/HameediyahCarousel.jpg">
                            <div class="carousel-caption">
                                <h2 class="text-white"></h2>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="mycarousel" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>MENU</h2>
    

	<div class="container-fluid my-5">
		<div class="col-md-12">
			<div class="row show_data">
				
			</div>
		</div>
            <div class="" id="pagination">
      
    </div>
	</div>

    

	<script type="text/javascript">
		
       $(document).ready(function(){
           
             load_data();
           function load_data(page){


           	$.ajax({
               url: "ajax/load_data.php",
               method: "POST",
               data:{page:page},
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
                $("#pagination").html(data.pagination);
               }
           	});
           }

        $(document).on("click", ".pagination a",function(event){
        event.preventDefault();
          var id  = $(this).attr("id");
          load_data(id);
       });




           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $("#cart").text(data.da);
              }
           });
           }

       });






       $(document).on("click",".add_cart", function(event){
       	event.preventDefault();
           var id = $(this).attr("id");
           var name = $("#name"+id+"").val();
           var price = $("#price"+id+"").val();
           var quantity = $("#quantity"+id+"").val();
           var action = "add";


           $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              dataType:"JSON",
              data: {id:id,name:name,price:price,quantity:quantity,action:action},
              success:function(data){
                 
              }
           });


       });


	</script>
    <footer>
        <div class="footer-bottom">
            <p>copyright &copy 2021 Briyani Delivery</p>
        </div>
    </footer>    
</body>
</html>