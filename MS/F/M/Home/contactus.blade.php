@extends('F.L.plate')


@push('title')
Contact Us : Million Solutions LLP
@endpush

@push('description')
MS LLP - One of the top ERP software companies, ERP vendors & ERP solution provider company in india offers customized ERP , online ERP solutions across India.
@endpush

@push('keywords')
erp in india,erp software india,erp software company,cloud erp,erp system,erp software development company india,erp companies,erp vendors in india,erp solution provider in india
@endpush

@push('content')
<div >


        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class="preloader" style="display: none;"><div class="loaded" style="display: none;">&nbsp;</div></div>
        <!--Home page style-->




        <section id="home" class="home">
        	
            <div class="home_overlay">
                <div class="container">
                    <div class="row">
					
						<div class="col-sm-10 col-sm-offset-1">
							<div class="main_home">
								<div class="mainhomecontent">
									<div class="single_home">
										<div class="col-sm-7">
											<div class="single_home_left">
												<h2>India's Leading </h2>
												<h3>Cloud Software Company</h3>
												<p>We had earned expertise in :</p>
												<p>Fully Customized ERP Solutions</p>
												<p>Fully Customized CRM Solutions</p>
												<p>Fully Customized Website Solutions</p>
											</div>
										</div>
										<div class="col-sm-5">
                                            @include("Home.Common.contact")
										</div>
										<!--<img src="assets/images/homepc.png" alt="" />-->
									</div>
								</div>
							</div>
						</div>
					</div>
						
                </div>
            </div>
        </section><!-- End of Banner Section -->
		
		
		<section id="newsstory" class="sewsstory">
			<div class="container">
				<div class="row">
					<div class="main_newsstory text-center">
						<p><i class="fa fa-lock"> We believe in our cloud environment only, So we host all cloud applications only in our safe and secure cloud environment.</i></p>
					</div>
				</div>
			</div>
		</section>
		
		
				
		
		
		<section id="pricing" class="pricing">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-6 padding-top-20">


<div class="panel panel-default" id="contact-form">
	<div class="panel-footer">Send Us your query directly to our sales team</div>
<div class="panel-body" >
						<form method="post" class="ms-form" action="{{action('\B\Query\Controller@post')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleInputEmail1" class="ms-text">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="ms-text">Contact No.</label>
    <input type="number" name="contactno" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="ms-text">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" required> 
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1" class="ms-text">Query</label>
    <textarea class="form-control" name="query" id="exampleInputEmail1" placeholder="Enter Your Query" required></textarea>

  </div>

  <div class="form-group">

    <button class="form-control btn action-btn-post" ><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>

  </div>
</form>
</div>
</div>

					</div>


									<div class="col-lg-6 padding-top-20">


<div class="panel panel-default">
<div class="panel-footer">
	Our Product Lineup
</div>
<div class="panel-body">
				<a href="{{url('/product/ms-flex')}}" alt="ms-flex website provided by million solutions llp">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="single_pricing_text wow fadeIn" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
								
								<div class="pricing_head_text">
									<img alt="Website Solution & ERP vendors & ERP Solution provider in India " src="{{asset('images/master/Ms_Flex.png')}}">
								</div>
								
							</div>
						</div>
						</a>

						<a href="{{url('/product/ms-crm')}}" alt="ms-crm software in India by million solutions llp">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="single_pricing_text wow fadeIn" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
								
								<div class="pricing_head_text">
									<img alt="CRM Solution & ERP Software "src="{{asset('images/master/Ms_CRM.png')}}">
								</div>
								
							</div>
						</div>
						</a>

						<a href="{{url('/product/ms-erp')}}" alt="ms-erp in gujarat provided by million solutions llp">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="single_pricing_text wow fadeIn" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
								<div class="pricing_head_text">
									<img alt="ERP Software India, ahmedabad,vadodara,surat" src="{{asset('images/master/Ms_ERP.png')}}">
								</div>
						
							</div>
						</div>
						</a>

						<a href="{{url('/product/ms-cca')}}" alt="ms-erp in gujarat provided by million solutions llp">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="single_pricing_text wow fadeIn" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
								<div class="pricing_head_text">
									<img alt="Custom Cloud software Solution in India"src="{{asset('images/master/Ms_CCA.png')}}">
								</div>
						
							</div>
						</div>
					</a>

</div>
	

	
</div>

<div class="row">
<div class="col-lg-7">

<div class="panel panel-default">
	<div class="panel-footer">
		We provide all solutions for Industries
	</div>
	<div class="panel-body">

		<ul>
								<li><a href="#"><i class="fa fa-pagelines" aria-hidden="true"></i> Agriculture</a></li>
												<li><a href="#"><i class="fa fa-university" aria-hidden="true"></i> Education Institute</a></li>
												<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Engineering</a></li>
												<li><a href="#"><i class="fa fa-building" aria-hidden="true"></i> Infrastructure</a></li>
												<li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Processing</a></li>
                                                <li><a href="#"><i class="fa fa-industry" aria-hidden="true"></i> Manufacturing</a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Retail</a></li>
                                                <li><a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i> Textiles</a></li>
                                                <li><a href="#"><i class="fa fa-hospital-o" aria-hidden="true"></i> Tourism & Hospitality</a></li>
								</ul>


	</div>
</div>

</div>

<div class=" col-lg-5">
<div class="panel panel-default">
	<div class="panel-footer">We provide services</div>
	<div class="panel-body">	<ul>
									     <li><a href="{{url('service/it-consultancy')}}"><span class="lnr lnr-checkmark-circle"></span> IT Consultancy</a></li>
                                         <li><a href="{{url('service/web-development-designing')}}"><span class="lnr lnr-checkmark-circle"></span> Website Development</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> Cloud Development</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> Server Development</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> ERP Development</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> CRM Development</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> E-Commerce Solutions</a></li>
                                         <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> SEO SMO Services</a></li>
                                          <li><a href="#"><span class="lnr lnr-checkmark-circle"></span> Logo Designing</a></li>


								</ul>
							</div>	
</div>



</div>
</div>


		



					</div>
				
				</div>
			</div>
		</section><!-- End of Pricing Section -->


		<section id="newsstory" class="sewsstory">
			<div class="container">
				<div class="row">
					<div class="main_newsstory text-center">
						<p><i class="fa fa-line-chart">
							We are Top Most Fast Growing <b>ERP solution provider in India </b> who provides <b>Customized Cloud ERP </b>.</i></p>
					</div>
				</div>
			</div>
		</section>
		


		<section id="callus" class="callus">
			<div class="container">
				<div class="row">
					<div class="main_callus">


						@include("Home.Common.contact2")


						@include("Home.Common.shortprofile")

						@include("Home.Common.clients")
					</div>
				</div>
			</div>
		</section>


		
		
		




        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup" style="display: none;">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        
            
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
    

</div>
@endpush


@push('breadcrumb')

@endpush


@push('js')

@endpush

