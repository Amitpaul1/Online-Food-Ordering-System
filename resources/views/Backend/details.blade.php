<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
body {
    background: grey;
    padding:30px;
}


</style>







<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="http://via.placeholder.com/400x90?text=logo">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">ZNM Restaurant</p>
                         <p>House No. 02, Road No.32, Mirpur Road,<br> Dhanmondi, Dhaka-1209,Bangladesh.<br>Phone:01916061927,01397144419<br> Email:zarin@gmail.com</p>
                        </div>
                    </div>
					<div class="row p-5">
                        <div class="col-md-6">
                           <h3>Delivery Address:</h3>
						   
						   <p>Name:<b>{{$orders->Name}}</b></p>
						   <p style="margin-top:-18px;">Address:{{$orders->Address}}</p>
						   <p style="margin-top:-18px;">Phone:<b>{{$orders->Email}}</b></p>
						   <p style="margin-top:-18px;">Email:{{$orders->Phone}}</p>
						   
                        </div>

                        <div class="col-md-6 text-right">
                            <h3>Order Info:</h3>
							<p>Order ID:<b>{{$orders->tracking_no}}</b></p>
							<p style="margin-top:-18px;">Payment Status:Cash On Delivery</p>
                        </div>
						
                    </div>


                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">Sl.NO</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Name</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
								@php($i=1)
								@foreach($orders->orderItems as $value)
								<tr>
								<td>{{$i++}}</td>
								<td>{{$value->dishes->Dish_name}}</td>
								<td>{{$value->quantity}}</td>
								<td>{{$value->price}}</td>
								<td>{{$total=(int)$value->quantity * (int)$value->price }}</td>
								
								
								</tr>
								@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">{{$orders->total_price}}TK</div>
                        </div
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>








