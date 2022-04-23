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


                          <div class="col-lg-12">
                            <div class="sec-title">
                                <h2 class="title pb-22">
                                    Current job openings
                                </h2>
                                
                                
                                    <div class="card shadow">
                                            <div class="card-body">
                                                <h4 class="">
                                    Business Development Associate
                                </h4>
                                <div class="row">
                                                <div class="col-lg-10">
                                            
                                        <p>As a Business Development Associate with a minimum of 2 years of experience, you will be required to conduct market research and identify potential clients, cultivate strong relationships with new clients, while maintaining existing client relationships, collate and maintain client information in the CRM database and work closely with staff across departments to implement growth.</p>

                                            <ul>
                                                <li>Engineering</li>
                                                <li>Full-time</li>
                                                <li>UK</li>
                                            </ul>
                                    </div>
                        <div class="col-lg-2"><a href="mailto:info@zahtech.co.uk" target="_blank" class="btn btn-primary">Apply now</a></div>
                                    </div>
                                        </div>
                                
                                </div>



<br/>



             <div class="card shadow">
                                            <div class="card-body">
                                                <h4 class="">
                                    Graphic Designer
                                </h4>
                                <div class="row">
                                                <div class="col-lg-10">
                                            
                                        <p>As a Graphic Designer with a minimum of 1-year experience, you will be required to deliver graphic design solutions for print, web, and social media that are fresh, relevant, and on time, contribute to the development of visual branding elements and standards for Zahtech and it’s associated products, translate creative briefs, asking clarifying questions to ensure creative fit based on assignment objectives and develop creative concepts in line with the brand proposition for advertising, internal and external publications, posters and product flyers, digital and electronic media.</p>

                                         <ul>
                                                <li>Engineering</li>
                                                <li>Full-time</li>
                                                <li>UK</li>
                                            </ul>

                                    </div>
                        <div class="col-lg-2"><a href="mailto:info@zahtech.co.uk" target="_blank" class="btn btn-primary">Apply now</a></div>
                                    </div>
                                        </div>
                                
                                </div>
























                                <br/>



             <div class="card shadow">
                                            <div class="card-body">
                                                <h4 class="">
                                    Senior Product Designer
                                </h4>
                                <div class="row">
                                                <div class="col-lg-10">
                                            
                                        <p>As a Senior Product Designer with a minimum of 5 years of experience, you will be required to gather and evaluate technical and business requirements and to deliver intuitive and user-centered solutions, collaborate with Product Management and Technology team to define and implement innovative solutions for a product’s direction, visuals, and user experience, execute all visual design stages from concept to final hand-off to the Technology Team and help shape and communicate a compelling long-term design strategy and vision</p>

                                         <ul>
                                                <li>Engineering</li>
                                                <li>Full-time</li>
                                                <li>UK</li>
                                            </ul>
                                            
                                    </div>
                        <div class="col-lg-2"><a href="mailto:info@zahtech.co.uk" target="_blank" class="btn btn-primary">Apply now</a></div>
                                    </div>
                                        </div>
                                
                                </div>

























                            </div>


                        </div>

                    </div>
                </div>
              
            </div>
            <!-- About Section End -->








@include('MainInc.career')
@endsection