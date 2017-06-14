@extends('website.master')
@section('title')
Contact Us
@endsection
@section('container')
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-6">
            <div class="contact-form">
              <div class="section-heading">
                <h2>Contact Us</h2>
                <div class="line"></div>
              </div>
              <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
              <form class="submitphoto_form">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">          
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
               <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>                
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="contact-address">
              <div class="section-heading">
                <h2>Contact Information</h2>
                <div class="line"></div>
              </div>
               <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
              <address class="contact-info">               
                <p><span class="fa fa-home"></span>Alexandria</p>
                <p><span class="fa fa-phone"></span>0123456789</p>
                <p><span class="fa fa-envelope"></span>www.Bidding.com</p>
              </address>
              <h3>Social Media</h3>
              <div class="social-share">               
               <ul>
                 <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                 <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                 <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
               </ul>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


@section('script')

          {!! Html::script('js/slick.min.js') !!}
          {!! Html::script('js/waypoints.min.js') !!}
          {!! Html::script('js/modernizr.custom.79639.js') !!}
          {!! Html::script('js/jquery.counterup.min.js') !!}
              <!-- verfied hover effect -->

          {!! Html::script('js/snap.svg-min.js') !!}
          {!! Html::script('js/hovers.js') !!}
              <!-- Photo Swipe Gallery Slider -->

          {!! Html::script('js/photoswipe.min.js') !!}
          {!! Html::script('js/photoswipe-ui-default.min.js') !!}
          {!! Html::script('js/photoswipe-gallery.js') !!}
              <!-- Custom JS -->

          {!! Html::script('js/custom.js') !!}
@endsection
