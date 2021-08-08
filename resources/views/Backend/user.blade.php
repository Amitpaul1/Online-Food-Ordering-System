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

                                            <h1>user</h1>
											<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Utype</th>
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
  @php($i=1)
  @foreach($user as $value)
  <tbody>
  <tr>
  <td>{{$i++}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->utype}}</td>
  @if($value->utype=='0')
	    <td>
	<a href="student/delete/{{$value->id}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
  </td>
  @else
	  <td><a href="">Not Allowed</a></td>
  
  
  </tr>
  @endif
    @endforeach
  </tbody>
</table>

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