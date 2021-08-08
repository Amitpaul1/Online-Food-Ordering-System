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

                                            <h1>Manage Dish</h1>
											<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Catagory Name</th>
      <th scope="col">Dish Image</th>
      <th scope="col">Dish Price</th>
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
  @php($i=1)
  @foreach($dish as $value)
  <tbody>
  <tr>
  <td>{{$dish->firstItem()+$loop->index}}</td>
  <td>{{$value->Dish_name}}</td>
  <td>{{$value->Cat_Name}}</td>
  <td><img src="{{('Image/').$value->Dish_Img}}" style="height:150px; width:150px;"></td>
  <td>{{$value->price}}</td>
 
	    <td>
	<a data-toggle="modal" data-target="#edit{{$value->id}}"><i class="ti-arrow-up" style="font-size:25px;"></i></a>
	<div class="modal fade" id="edit{{$value->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Dish Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="{{route('update_dish')}}" method="post">
	  @csrf
	  <div class="from-group">
		 <label for="">Dish ID:</label>
		 <input type="hidden" class="form-control" name="dish_id" value="{{$value->id}}" />
		</div>
         <div class="from-group">
		 <label for="">Dish Name:</label>
		 <input type="text" class="form-control" name="dish_name" value="{{$value->Dish_name}}" />
		</div>
		 <div class="from-group">
		 <label for="">Previous Catagory Name:</label>
		 <input type="text" class="form-control" name="cat_name" value="{{$value->Cat_Name}}" />
		</div>
		 <div class="from-group mt-2">
										 <label for="">Catagory Name:</label>
										 <select name="cata_name" class="form-control">
										 <option value="">Select Catagory Name</option>
										 @foreach($cata as $data)
										 <option value="{{$data->Cat_id}}">{{$data->Cat_Name}}</option>
										 @endforeach
										 </select>
										 
										 </div>
		 <div class="from-group">
		 <label for="">Price:</label>
		 <input type="text" class="form-control" name="dish_price" value="{{$value->price}}" />
		</div>
      </div>
      <div class="modal-footer">
	  <input type="submit" class="btn btn-primary" value="Update" />
	  </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	<a href="dish/delete/{{$value->id}}"><i class="ti-trash" style="font-size:25px;"></i></a>
  </td>
 
  
  
  </tr>
 
    @endforeach
  </tbody>
</table>
{{$dish->links()}}

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