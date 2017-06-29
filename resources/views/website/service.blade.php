@extends('website.master')
@section('title')
Service
@endsection
@section('container')
@include('website.layouts.blogArchive')
<!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Services</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-user service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="\login">Register</a></h3>
                      <p> The <a href="\login">Login</a> or Register page will ask you to enter an e-mail address, password, and your birth date. Your registration will create your Alla tre account which can be used to bid on auctions as it will also allow you to access information about your subTscriptions.</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-money service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="/createitem">Buy or Bid</a></h3>
                      <p>In some listings you can select Buy Now to buy an item immediately at a fixed price.
                          In auction-style listings and in most categories, 
                          the Buy It Now option is only available until someone places a bid. 
                          The option goes away and the item is then sold to the highest bidder.</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-bell service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="/createitem">Sell</a></h3>
                      <p>To sell on Alla tre, you first need to register for an Alla tre account if you don’t have one. 
                             Got to <a href="/createitem">Place a New Ads</a> page, if you want
                             to sell your product in fixed price or if you want to create Auction Got to <a href="/createauction">Create Auction</a> page , and enter the details about your item.
                     </p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->
   <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Why Choose Us</h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
                    <div class="whychoose-singleslide">
                      <img src="images/03.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/06.png" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/05.png" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-calendar"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Great Infrastructure</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-thumbs-up"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Trusted</h4>
                      <p> Alla Tre come for you , we produce our service to you and we can save you from any tricked.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-asterisk"></span>
                      </a>
                    </div>
                    <div class="media-body">

                      <h4 class="media-heading">Safer</h4>
                      <p>We protect your information using technical and administrative security measures to reduce the risks of loss, misuse, unauthorized access, disclosure and alteration. Some of the safeguards we use are firewalls and data encryption, physical access controls to our data centers, and information access authorization controls..</p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <section id="counterSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                    2000
                  </div>
                  <div class="counter-label">Product</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    2500
                  </div>
                  <div class="counter-label">Cuctomer</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    350
                  </div>
                  <div class="counter-label">Awards</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    1000
                  </div>
                  <div class="counter-label">Bid</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Counter SECTION ================-->
    <section id="extraFeatures">
      <div class="container">
        <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="departments-area">
              <div class="section-heading">
                <h2>What You Need?!</h2>
                <div class="line"></div>
              </div>
              <!-- Start Departments Accordion -->
              <div class="panel-group custom-panel" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        I am new to Alla tre: Where do I start ? <span class="fa fa-minus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                     <p> Everyone is invited to browse or search through our auction categories and listings for items on Alla tre. If you see something you would like to bid on you must first register by creating an Alla tre account, if you do not already have one. Don't worry! Account creation is free and easy!.</p>
                  
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Create Auction<span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                     <p> To sell on Alla tre, you first need to register for an Alla tre account if you don’t have one. 
                              Your account must also be set up for selling. 
                            to create Auction Got to <a href="/createauction">Create Auction</a> page , and enter the details about your item.
                     </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        How i can bid on product  <span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>You can bid on an item in an auction by entering your bid amount in the listing.
                           We'll let you know if someone else bids higher so you can bid again.

                          To avoid being outbid, enter the highest amount or maximum bid you're willing to pay.
                          Our automatic bidding system increases your bid in increments so you're the highest bidder
                           until it reaches your maximum bid. 
                          If someone bids higher than your maximum, we'll let you know in case you want to bid again.

                          Only bid on items you intend to buy. In most cases, you can’t retract your bid.
                          If you win, you must pay the seller..</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        When does an auction end?<span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                     <p> An auction is ended when the countdown reaches 00:00:00 .
                     </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        What do I do, if I've forgotten my password or user name? <span class="fa fa-plus"></span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>On the <a style="text-decoration:underline;" href="/login">Login</a> page, below the block allowing to connect you on your account, click on the link "forgotten Password?”. Then indicate your e-mail address used for the registration on Swoggi and we will send you an email with your username and password..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="how-works-area">
             <div class="section-heading">
                <h2>How we work</h2>
                <div class="line"></div>
              </div>
              <div class="how-works">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#experiment" data-toggle="tab">Experiment</a></li>
                  <li><a href="#monitor" data-toggle="tab">Monitor</a></li>
                  <li><a href="#clean" data-toggle="tab">Clean</a></li>
                  <li><a href="#fast" data-toggle="tab">Fast</a></li>
                  <li><a href="#support" data-toggle="tab">Support</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="experiment">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <div class="tab-pane fade " id="monitor">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <img class="img-center" src="images/choose-us-img2.jpg" alt="img">
                  </div>
                  <div class="tab-pane fade " id="clean">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <div class="tab-pane fade " id="fast">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <img class="img-center" src="images/choose-us-img1.jpg" alt="img">
                  </div>
                  <div class="tab-pane fade " id="support">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>                     
                  </div>
                </div>
              </div>
           </div>
         </div>
       </div>         
      </div>
    </section>

@endsection

@section('script')

          {!! Html::script('js/slick.min.js') !!}
          {!! Html::script('js/modernizr.custom.79639.js') !!}
          
          {!! Html::script('js/waypoints.min.js') !!}
          {!! Html::script('js/jquery.counterup.min.js') !!}
              <!-- verfied hover effect -->

          {!! Html::script('js/snap.svg-min.js') !!}
          {!! Html::script('js/hovers.js') !!}
          


              <!-- Custom JS -->

          {!! Html::script('js/custom.js') !!}
@endsection