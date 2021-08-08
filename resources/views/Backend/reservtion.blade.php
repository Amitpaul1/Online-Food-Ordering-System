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

                                            <h1>Reservation List</h1>
											<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Person</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
     
    </tr>
  </thead>
  
 
  <tbody>
  @php($i=1)
  @foreach($res as $data)
  <tr>
  <td>{{$res->firstItem()+$loop->index}}</td>
  <td>{{$data->Name}}</td>
  <td>{{$data->Email}}</td>
  <td>{{$data->Phone}}</td>
  <td>{{$data->Person}}</td>
  <td>{{$data->Reservation_Date}}</td>	
  <td>{{$data->Reservation_Time}}</td>
  
  
  
  
  
  </tr>
  @endforeach
  


  </tbody>
 
</table>
 {{$res->links()}}
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