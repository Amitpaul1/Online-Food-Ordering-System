@include('Backend.page.header');

  <body>
  <body>
	
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

           @include('Backend.page.navbar');

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                               @include('Backend.page.sidebar');

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                            <h1>Show Order</h1>
											<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Tracking Name</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  @if(session('delete'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('delete')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('update'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<tbody>
@php($i=1)
@foreach($order as $data)
 <tr>
 <td>{{$i++}}</td>
 <td>{{$data->tracking_no}}</td>
 <td>{{$data->total_price}}</td>
      <td>{{$data->order_status == '0' ? 'pending':'Completed'}}</td>
 <td>
	<a data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fa fa-edit" style="font-size:30px;"></i></a>
  <!-- Button trigger modal -->
<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Order Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
	  <form action="{{route('order.update')}}" method="POST">
	  @csrf
        <input type="hidden" name="order_id" value="{{$data->id}}" />
		<div class="form-group">
		<label for="">Status</label>
		<select class="form-control" name="order_status">
		
		<option value="0">Pending</option>
		<option value="1">Completed</option>
		
		</select>
		</div>
      <div class="modal-footer">
        
		<input type="submit" class="btn btn-primary" value="Update" />
		</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>



 <a href="{{url('view_admin/'.$data->id)}}"><i class="fa fa-eye" style="font-size:30px;"></i></a>
 <a href="{{url('generate_pdf/'.$data->id)}}"><i class="fa fa-print" style="font-size:30px;"></i></a>
 
 
 </td>
 
 
 
 </tr>
 @endforeach
  </tbody>
</table>
 {{$order->links()}}

                                            <!-- statustic and process start -->
                                           <div class="container">
										   
										   
										   
										   </div>

                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('Backend.page.footer');