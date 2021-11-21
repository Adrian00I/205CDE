<?php 
session_start();
    $total = 0;

    
$to = 0;

$output = "";

$output .= "
  <table class='table table-bordered table-striped'>
    <tr >
       <th>Code</th>
       <th>Item</th>
       <th>Price</th>
       <th>Quantity</th>
       <th>Total</th>
       <th></th>
    </tr>
";

if (!empty($_SESSION['mycart'])) {





	foreach ($_SESSION['mycart'] as $key => $value) {


		$output .= "
           <tr>
             <td>".$value['id']."</td>
             <td>".$value['name']."</td>
             <td>RM ".$value['price']."</td>
             <td>".$value['quantity']."</td>
             <td>RM ".number_format($value['quantity'] * $value['price'], 2)."</td>
             <td>
               <button class='btn btn-danger remove' id='".$value['id']."'>  Remove  </button>
             </td>
		";

		

		$total = $total + $value['quantity'] * $value['price'];


    $_SESSION['total_price'] = $total;


		
	}






	$output .= "
         <tr>
         <td><b></b></td>
         <td><b>Total Price</b></td>
         <td><b>$".number_format($total, 2)."</b></td>
         <td>
            <a href='stripe/'> <button class='btn btn-warning' >Pay</button></a>
            </td>
            <td>
              <a href='invoice.php'><button class='btn btn-info'>Receipt</button></a>
            </td>
            <td>
              <button class='btn btn-danger clearall' id='".$value['id']."'> Clear All </button>
            </td>
            
         </tr>
   
	";



	$to = count($_SESSION['mycart']);
	
}else{


}

$data['da'] = $to;
$data['out'] = $output;


echo json_encode($data);





 ?>