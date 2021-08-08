<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	
	<style type="text/css">
body {
   
}

.padding {
    padding: 2rem !important
}
.column2{
	float: left;
  width: 50%;
  
	
}
.column {
  float: left;
  width: 50%;
  
}
.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


</style>
</head>
<body>
	<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
       
            
		 
		 			 
<hr />
<br />
         <div class="card-body">
             <div class="row mb-4">
                 <div class="column" style="padding:20px;>
                     <h5 class="mb-3">From:</h5>
                     <h3 class="text-dark mb-1">ZNM Restaurant</h3>
                     <div>House No. 02, Road No.32, Mirpur Road</div>
                     <div>Dhanmondi, Dhaka-1209,Bangladesh</div>
                     <div>Email: zarin@gmail.com</div>
                     <div>Phone: 01916061927,01397144419</div>
                 </div>
                 <div class="column" style="padding:20px;>
                     <h5 class="mb-3">Delivery Address:</h5>
                     <h3 class="text-dark mb-1">{{$orders->Name}}</h3>
                     <div>Address:{{$orders->Address}}</div>
                     <div>Email:{{$orders->Phone}}</div>
                     <div>Phone:{{$orders->Email}}</div>
                     <div>Invoice #{{$orders->tracking_no}}</div>
                 </div>
             </div>
			 <br style="clear:both;"/>

             <div class="table-responsive-sm">
                <table id="customers">
                     <thead>
                         <tr>
                             <th class="center">Sl.NO</th>
                             <th>Name</th>
                             <th class="right">Price</th>
                             <th class="center">Qty</th>
                             <th class="right">Total</th>
                         </tr>
                     </thead>
                     <tbody>
					  @php($i=1)
								@foreach($orders->orderItems as $value)
                         <tr>
                             <td class="center">{{$i++}}</td>
                             <td class="left strong">{{$value->dishes->Dish_name}}</td>
                             <td class="right">{{$value->quantity}}</td>
                             <td class="center">{{$value->price}}</td>
                             <td class="right">{{$total=(int)$value->quantity * (int)$value->price }}</td>
                         </tr>
						 @endforeach
						 
                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td>
                                     <strong class="darks" style="text-align:center;">Subtotal</strong>
                                 </td>
                                 <td class="right">2222TK</td>
                             </tr>
                             
                                 <td class="left">
                                     <strong class="text-dark">Total</strong> </td>
                                 <td class="right">
                                     <strong class="text-dark">2222TK</strong>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
       
     </div>
 </div>
</body>
</html>














 




