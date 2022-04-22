@extends('MainLayouts.app')
@section('content')



            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img10">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                           Careers
                            <span class="watermark">Careers</span>
                        </h1>
                        
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->









            <!-- About Section Start -->
            <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-6 ">
                            <div class="sec-title">
                                <h2 class="title pb-22">
                                    {{$careers->title}}
                                </h2>
                                <span class="sub-text big">{!! $careers->desc !!}</span>

                                
                              
                            </div>
                        </div>

 <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                            <div class="images-part">
                                <img src="{{$careers->image}}" alt="Images">
                                <!-- <img src="/assets/images/off2.jpg" alt="Images"> -->
                            </div>
                            <br>
                           


<h5>Work autonomously.</h5>
<p>You have ownership over work that directly impacts the business. You can move fast, and learn even faster.</p>

<h5>Our culture</h5>
<p>We're building a culture where personal and professional growth are just as important as business growth.</p>
                        </div>

                    </div>
                </div>
              
            </div>
            <!-- About Section End -->









@endsection