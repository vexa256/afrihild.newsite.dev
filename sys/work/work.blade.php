 <!-- start of breadcumb-section -->
 <div class="wpo-breadcumb-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="wpo-breadcumb-wrap">
                     <h2>Our Work - AfriChild Center Makerere</h2>
                     <ul>
                         <li><a href="{{ url('/') }}">Home</a></li>
                         <li><span>Our Work</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of wpo-breadcumb-section-->
 <!-- <div style="padding: 2em"></div> -->
 <!-- start of wpo-blog-section -->

 <section class="wpo-blog-section section-padding">
     <div class="container">
         <div class="wpo-blog-items">
             <div class="row">
                 @isset($OurWork)

                     @foreach ($OurWork as $data)
                         <div class="col col-lg-4 col-md-8 col-12 mb-4">
                             <div class="wpo-blog-item">
                                 <div class="wpo-blog-img">
                                     <img src="{{ asset($data->URL) }}"
                                         alt="" style="height: 30vh">
                                 </div>
                                 <div class="wpo-blog-content">
                                     <div class="wpo-blog-content-top">
                                         <h2
                                             style="font-size: 19px; height: 7vh; overflow-y: scroll;">
                                             <a href="#">
                                                 {{ $data->Title }}
                                             </a>
                                         </h2>


                                         <p class="pt-5"
                                             style="height: 30vh; overflow-y: hidden; text-align: justify; padding-left: 10px; padding-right: 10px
                      ">

                                             {{ strip_tags($data->Desc) }}

                                         </p>
                                         <a data-bs-toggle="modal"
                                             href="#More{{ $data->id }}"
                                             class="fs-5">Read
                                             More</a>

                                     </div>




                                 </div>
                             </div>
                         </div>
                     @endforeach

                 @endisset

             </div>

         </div>
     </div>
 </section>
 <!-- end of wpo-blog-section -->


 @include('work.OurWorkModal')
