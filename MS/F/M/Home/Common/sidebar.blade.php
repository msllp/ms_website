<div class="visible-lg-block col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="panel panel-default">
<div class="panel-footer ms-bg">
<span class="ms-text"><span class="lnr lnr-magic-wand ms-padding-right-10"></span>Our Services</span>
</div>
<div class="panel-body">
<ul>
									     									 <li><a href="{{url('service/it-consultancy')}}"><i class="fa fa-check-square-o" aria-hidden="true"></i> IT Consultancy</a></li>
                                         <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Website Development</a></li>
                                         <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> ERP Development</a></li>
                                         <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> CRM Development</a></li>
                                         <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> E-Commerce Solutions</a></li>
                                         <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> SEO & SMO Services</a></li>

								</ul>
</div>

<div class="panel-footer ms-bg">
<span class="ms-text"><span class="lnr lnr-rocket ms-padding-right-10"></span>Our Products</span>

</div>
<div class="panel-body">
<ul>
									<li><a href="{{url('product/ms-flex')}}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> MS-Flex</a></li>
									<li><a href="{{url('product/ms-erp')}}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> MS-ERP</a></li>
									<li><a href="{{url('product/ms-crm')}}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> MS-CRM</a></li>
									<li><a href="{{url('product/ms-cca')}}"><i class="fa fa-hand-o-right" aria-hidden="true"></i> MS-CCA</a></li>
								</ul>
</div>


<div class="panel-footer ms-bg">
<span class="ms-text">Have any query ?</span>
</div>
<div class="panel-body ">
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
@stack('PageSidebar')
</div>

</div>
