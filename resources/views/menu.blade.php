@include('header');


 <div class="page_header menu_banner_bg" style="background-image:url(Frontend/image/menu-banner.jpg);" >
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="page_header_content text-center sect_pad">
                            <h1>Menu</h1>
                            <ul class="m-0 nav pt-0 pt-lg-3 justify-content-center">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li class="active"><a href="#">Menu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <section class="menu_area sect_pad">
        <div class="container-fluid wow fadeIn">
        	                                                    <div class="row">
                <div class="col-xl-3 col-md-4 sidebar">
                    
                    <div class="category_choose p-3 mb-3">
                        <h6 class="mb-3 text-center">Items Available</h6>
                        <div class="panel-group" id="accordion">
                        	                            
                                                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title">
                                		<a href="#OurMenu" class="accordion-toggle" data-toggle="collapse"  aria-expanded="false">Our Menu</a>
                                    </h6>
                                </div>
                                                                <div id="OurMenu" class="panel-collapse collapse " data-parent="#accordion">
                                    <div class="panel-body">
                                    <a onclick="searchmenu('20')" class="serach"><i class="ti-minus mr-2"></i>Our Menu<span>(0)</span></a>
									                                            @foreach($cata as $value)
                                    	                                        <a href="{{route('product',$value->Cat_id)}}">{{$value->Cat_Name}}</a>
                                    	                                        @endforeach
                                                                               
                                                                            </div>
                                </div>
                                                            </div>
                                                       
                                                    </div>
                    </div>
                    <div class="need_booking py-4 px-3 mb-3 text-center">
                                             <h6 class="mb-3">Need Help Booking?</h6>
                        <div class="need_booking_inner">
                            <p class="mb-2">Just call our customer services at any time, we are waiting 24 hours to recieve your calls.</p>
<p>9128737, 9124892<br> 01937 144419<br><br>Zarin@gmail.com</p>                        </div>
                    </div>
                                    </div>
                <div class="col-xl-8 col-md-8">
                <div id="loaditem">
                <div id="loadingcon" style="text-align:center; display:none;"><img src="view/themes/assets_web/images/loader.html" alt="loader" width="180" /></div>
@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif  
@if(session('unsuccess'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('unsuccess')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif                                   	
								   @foreach($dish as $data)
									
									<form action="{{route('add_to_cart')}}" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="single_item row mb-3">
									<input type="hidden" name="dish_id" value="{{$data->id}}" />

                        <div class="item_img col-sm-3">
											

                            <img src="{{('Image/').$data->Dish_Img}}" class="img-fluid" alt="MIXED PAKURA">
                        </div>
                        <div class="item_details col-lg-6 col-sm-5 pl-0">
						
                           <p>{{$data->Dish_name}}</p>
                                                        <div class="rating_area">
                               
                            </div>
                                                        <p>{{$data->Cat_Name}} </p>
                                                       <input type="number" name="quantity"  min="1" value="1">
                                                    </div>
                        <div class="item_info col-lg-3 col-sm-4 text-center">
						
						
                            <h4>{{$data->price}}</h4>
							
                            <div class="form-group">
												

							
							                      <input type="submit" class="btn btn-danger a" value="ADD TO CART"/>       

							  </div>
                        </div>

                    </div>
					 </form>
					 													  @endforeach

				     
                      {{$dish->links()}}              
               
            </div>
        </div>
    </section>



































@include('footer');