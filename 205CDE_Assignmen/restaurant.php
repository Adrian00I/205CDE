<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Restaurants</title>
                <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif; 
            }
            
            body{
                background-image: url(images/brick.jpg);
                background-position: center;
                background-size: cover;
                position: relative;
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

            h1{
                text-align: center;
            }
            
            h2{
                text-align: center;
            }

            .restaurant{
                width: 80%;
                align-items: center;
                padding-left: 200px;
            }

            .restaurant-row{
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-column-gap: 20px;
                grid-row-gap: 30px;
            }

            .restaurant-col{ 
                flex-basis: 32%;
                border-radius: 10px; 
                margin-bottom: 30px;
                position: relative;
                overflow: hidden;
                height: 300px;
                width: 300px;
                float: left; 
                padding: 5px;
            }

            .restaurant-col img{
                border-radius: 10px;
                width: 100%;
                height: 100%;
            }

            .layer{
                text-align: center;
                background: transparent;
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                transition: 0.5s;
            }

            .layer:hover{
                background: rgba(226,0,0,0.7);   
            }

            .layer h3{
                width: 100%;
                font-weight: 500;
                color: #FFFFFF;
                font-size: 20px;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                position: absolute;
                opacity: 0;
                transition: 0.5s;
            }

            .layer:hover h3{
                bottom: 49%;
                opacity: 1;
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
                              <img src="images/freeDelivery.jpg">
                              <div class="carousel-caption">
                                  <h2 class="text-white"></h2>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img src="images/promotion24.jpg">
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
        <h2><b>Briyani Restaurant</b></h2>
      <div class="restaurant">      
          <div class="restaurant-row">
              <div class="restaurant-col">
                  <img src="images/tajuddinlogo.jpg">
                  <div class="layer">
                      <a href="tajuddinHussain.html"><h3>TAJUDDIN HUSSAIN</h3></a> 
                  </div>
              </div>
              <div class="restaurant-col">
                  <img src="images/kapitanlogo.jpg">
                  <div class="layer">
                      <a href="kapitanChulia.html"><h3>KAPITAN CHULIA STREET</h3></a> 
                  </div>
              </div>
              <div class="restaurant-col">
                  <img src="images/rangoonlogo.jpg">
                  <div class="layer">
                      <a href="biryaniRangoon.html"><h3>BIRYANI RANGOON</h3></a> 
                  </div>
              </div>
              <div class="restaurant-col">
                  <img src="images/hameediyahlogo.jpeg">
                  <div class="layer">
                      <a href="HameediyahRestaurant.php"><h3>HAMEEDIYAH RESTAURANT</h3></a> 
                  </div>
              </div>
              <div class="restaurant-col">
                  <img src="images/kapitanlogo.jpg">
                  <div class="layer">
                      <a href="kapitanMacalisterRestaurant.php"><h3>KAPITAN MACALISTER</h3></a> 
                  </div>
              </div>
              <div class="restaurant-col">
                  <img src="images/sablogo.jpg">
                  <div class="layer">
                      <a href="sriAnandaBahwan.html"><h3>SRI ANANDA BAHWAN RESTAURANT</h3></a> 
                  </div>
              </div>
          </div>
      </div>
      <footer>
            <div class="footer-bottom">
                <p>copyright &copy 2021 Briyani Delivery</p>
            </div>
      </footer>
    </body>
</html>