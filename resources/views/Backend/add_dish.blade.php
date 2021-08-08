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

                                            <h1>Add Catagory</h1>
	                                     
                                    
                                                
                                            <!-- statustic and process start -->
                                           <div class="container">
										  <form action="{{route('save_dish')}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
											 @if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
		
										   <div class="row  mt-4">
											 <div class=" col-12 col-md-8">
	                                     <div class="from-group">
										 <label for="">Dish Name:</label>
										 <input type="text" class="form-control @error('cat') is-invalid @enderror" name="dish_name" placeholder="Enter Your Dish Name" />
										 @error('dish_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
										  <div class="from-group mt-2">
										 <label for="">Catagory Name:</label>
										 <select name="cata_name" class="form-control @error('cat_name') is-invalid @enderror">
										 <option value="">Select Catagory Name</option>
										 @foreach($cata as $data)
										 <option value="{{$data->Cat_id}}">{{$data->Cat_Name}}</option>
										 @endforeach
										 </select>
										 @error('cata_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
										  <div class="from-group mt-2">
										 <label for="">Dish Image:</label>
										 <input type="file" class="form-control @error('dish_name') is-invalid @enderror" name="dish_image" />
										 @error('dish_image')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
										  <div class="from-group mt-2">
										 <label for="">Dish Price:</label>
										 <input type="text" class="form-control @error('dish_price') is-invalid @enderror" name="dish_price" placeholder="Enter Your Dish price">
										 @error('dish_price')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
										 
	                                     </div>
										
											</div>
											<input type="submit" class=" mt-3 btn btn-primary" value="Submit" />
										   	                                        </form>

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









'fname' => 'required',
		'mname' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'blood' => 'required',
		'gender' => 'required',
		'd_birth' => 'required',
		'picture' => 'required',
		'pr_address' => 'required',
		'pr_district' => 'required',
		'pa_address' => 'required',
		'pa_district' => 'required',
		'gu_name' => 'required',
		'gu_phone' => 'required',
		'gu_address' => 'required',
		'gu_rl' => 'required',
		'department' => 'required',
		'semester' => 'required',
		'year' => 'required',
		
		
		
		'fname.required' => 'Please Input Father Name',
		'mname.required' => 'Please Input Mother Name',
		'phone.required' => 'Please Input Phone',
		'email.required' => 'Please Input Email',
		'blood.required' => 'Please Input Blood Group',
		'gender.required' => 'Please Input Gender',
		'd_birth.required' => 'Please Input Birth Of Date',
		'picture.required' => 'Please Input Picture',
		'pr_address.required' => 'Please Input Present Address',
		'pr_district.required' => 'Please Input Present District',
		'pa_address.required' => 'Please Input Parmanent Address',
		'pa_district.required' => 'Please Input Parmanent District',
		'gu_name.required' => 'Please Input Local Guardian Name',
		'gu_phone.required' => 'Please Input Contact Of Local Guardian',
		'gu_address.required' => 'Please Input Address Of Local Guardian',
		'gu_rl.required' => 'Please Input Relation With Local Guardian',
		'department.required' => 'Please Input Your Dish Name',
		'semester.required' => 'Please Input Your Dish Name',
		'year.required' => 'Please Input Your Dish Name',
		