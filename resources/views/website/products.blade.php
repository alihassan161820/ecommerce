@extends('website.master')
@section('title')
Products
@endsection
@section('container')
@include('website.layouts.blogArchive')
<section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="gallery-area">
              <!-- Start First Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>New Arrivals</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now </button> 
                      </figcaption>       
                  </figure>
                  
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now </button> </figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                       <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End First Image Album  -->

              <!-- Start Second Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Popular</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End Second Image Album  -->

              
              <!-- Start Third Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Best Seller</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End Third Image Album  -->

              <!-- Start Foruth Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Specials</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Bid Now</button> </figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone3.jpeg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/phone3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone4.jpeg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/phone4.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/phone5.jpeg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/phone5.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">
                      <div class="pricebox">
                      <p class="center-block"> 40$ </p>
                      </div>
                      <button type="button" class="btn btn-warning"> Buy Now</button></figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End Fourth Image Album  -->

              <!-- This Section only for Lightbox view -->
              <!-- Root element of PhotoSwipe. Must have class pswp. -->
              <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe. 
                     It's a separate element, as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                  
                  <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                  <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                  </div>

                  <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                  <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->

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
