@include('header');


 <div class="page_header menu_banner_bg" style="background-image:url(Frontend/image/menu-banner.jpg);" >
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="page_header_content text-center sect_pad">
                            <h1>Reservation</h1>
                            <ul class="m-0 nav pt-0 pt-lg-3 justify-content-center">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li class="active"><a href="#">Reservation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--PAGE BARNER AREA END-->
            </div>
        </div>
		 <section class="about_us sect_pad bg_img_area" >
        <div class="bg_img_left wow fadeIn" data-wow-delay="0.5s"></div>
        <div class="container">
            <div class="row about_inner">
                <div class="col-lg-5 col-xl-6 text-center wow fadeIn">
                    <div class="sect_title mb-4">
                        <h2 class="curve_title">Discover</h2>
                        <h3 class="big_title">OUR STORY</h3>
                    </div>
                    <div class="aboutus_text mb-lg-0 mb-5">
                                            <p class="mb-4"> <p>ZNM Is A Popular Instrument of Folk & Sufi Music In Kashmir Which Came to India From Iran. However, It’s Origins Are Traced to the shat Tantri Veena ( 100 Stringed Lute ) or the Pinaki Veena Which Is Mentioned In India’s Oldest Religious Work. This Ancient Tool of Music, When Played In The Hands of Devoted Artist Evokes Scintillating Melodies Of Timeless Purity</p></p>
                        <a href="about.html" class="simple_btn">Read more</a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="img_part mb-4 mb-sm-0 wow fadeIn" data-wow-delay="0.4s">
                                <img src="{{'Frontend/image/f.jpg'}}" class="img-fluid" alt="Discover">
                            </div>
                        </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="img_part mb-4 mb-sm-0 wow fadeIn" data-wow-delay="0.4s">
                                <img src="{{'Frontend/image/a.jpg'}}" class="img-fluid" alt="Discover">
                            </div>
                        </div>
                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
	 
    <!--Reservation Area-->
        <section class="reservation-area sect_pad bg_two" style="background-color:#F9F9F9;">
        <div class="container">
            <div class="sect_title mb-5 text-center">
                <h2 class="curve_title">Reservation</h2>
                <h3 class="mb-3 big_title">BOOK YOUR TABLE</h3>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form class="main-reservaton-form" action="{{route('save_reservation')}}" method="post">
					@csrf
					@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
                        <div class="row">
												<div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                                       <div class="form-group">
                                <input type="text" class="mb-2 form-control @error('reservation_name') is-invalid @enderror" name="reservation_name"  placeholder="Enter Your Name">
                            @error('reservation_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
						   </div>
						</div>
						 
							 <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                               <div class="form-group">
                                <input type="text" name="reservation_email" class="form-control @error('reservation_email') is-invalid @enderror" placeholder="Enter Your Email">
                             @error('reservation_email')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
							</div>
                            </div>
							 <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                                <div class="form-group">
                                <input type="text" class="form-control @error('reservation_phone') is-invalid @enderror" name="reservation_phone"  placeholder="Enter Your Number">
                            @error('reservation_phone')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
							
							</div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							    <div class="form-group">
                                <input type="number" class="from-control @error('reservation_person') is-invalid @enderror" name="reservation_person"  placeholder="Total Person">
								@error('reservation_person')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <label for="reservation_date"></label>
                                <input type="text" name="reservation_date" id="reservation_date" placeholder="Expected Date" class="datepickerreserve">
                           @error('reservation_date')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
						   </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                                <label for="reservation_time"></label>
                                <input type="text" name="reservation_time" id="reservation_time" placeholder="Expected Time">
                            @error('reservation_time')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
						   </div>
                           
                        </div>
						    <div class="col-lg-2 col-md-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reserve Table</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body editinfo">
                                
                            </div>
                           <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Confirm Reservation</button>
                            </div>-->
                        </div>
                    </div>
                </div>
    <!--End Reservation Area-->
		
		
		

















@include('footer');