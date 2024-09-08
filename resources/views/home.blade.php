@extends('layouts.master_home')
<!-- ======= Slider ======= -->
@section('home_content')
@include('layouts.frontend.slider')
   <!-- ======= About Us Section ======= -->
   <section id="about" class="about-us" >
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</strong></h2>
      </div>

 
      <div class="row content">
        @foreach($homeabout as $key => $description)
        <div class="col-lg-6" data-aos="fade-right">
          <h2>{{ucfirst($description->title)}}</h2>
          <h6>{{$description->short_dis}}</h6>
         </div>
        
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p> {{$description->long_dis}}</p>
         
        </div>

        @endforeach
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title" id="services">
        <h2>Services</strong></h2>
        <p>Eltie Group Provides Different Services...</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="#"> Our Services </a></h4>
            <dl>
              <dt>-Security Consulting</dt>
              <dt>-Security Audit</dt>
              <dt>-Risk Assessments</dt>
              <dt>-Risk management</dt>
              <dt>-Create & Operate Security Systems</dt>
              <dt>-Corporate Investigations</dt>
              <dt>-Executive Protection (VIP)</dt>
              <dt>-Cyber security solutions</dt>
              <dt>-Emergency Response Team</dt>
              <dt>-Government Relations</dt>
              <dt>-Mobile Patrols</dt>
              <dt>-Intrusion alert</dt>
              <dt>-Staff Training</dt>
              <dt>-K9</li>
            </dl>
                
           </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              {{-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
              </svg> --}}
                <img
                   {{-- src="https://elitegroup-eg.net/wp-content/uploads/2021/04/iso2.png"  --}}
                   src="https://www.ajsico.com/en/images/content/what-is-iso.jpg" 
                    alt="image not found" 
                    title="ISo image"
                    class="img-fluid rounded"
                    style="width:100px; height:80px" >
              {{-- <i class="bx bx-arch"></i> --}}
            </div>
            <h3><a href="https://elitegroup-eg.net/wp-content/uploads/2021/04/iso2.png" target="_blank">ISO</a></h3>
            <h5>ONE OF THE TOP SECURITY SERVICES COMPANIES IN EGYPT!</h5>
            <p>In today’s challenges, where so many events and social gatherings are looked upon as potential targets
              by terrorists, there is no place for mistakes, you need to hire a well staffed security services agency. More
              than ever, these critical challenges require the experience and knowledge of a professional protection
              firm. With our knowledge and security solutions you are guaranteed a smooth running event.
              We have worked hard to be on the top of security services companies in Egypt.
              With years of experience and knowledge, our staff are capable of creating and executing easy security
              solutions for any industry or event,in addition our preparation and performance are unique for business,
              we have security experts licensed to manage events and gatherings in a professional and secured way.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="">Our Syﬆems</a></h4>
              <dl>
                <dt>- Metal Detection Gates</dt>
                <dd>- black hot drink</dd>
                <dd>- Surveillance Systems</dd>
                <dd>- Inspection Systems</dd>
                <dd>- Access Control Systems</dd>
                <dd>- Automation Gates & Parking Systems</dd>
                <dd>- Intrusion Detection Systems</dd>
                <dd>- GPS Tracking Systems</dd>
                <dd>- Intrusion Detection Systems</dd>
                <dd>- Data Security Systems</dd>
                <dd>- Command Center (Creation /Insulation)</dd>
                <dd>- 24/7 Remotely Alarm Monitoring</dd>
 
              </dl>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">   Our Team proudly compromise a high skilled</a></h4>
            <p> personnel represents our company.
              We invest in the most up to date training for
              our staff so you can be sure that we are a market
              leaders in our field.
              Elite offers a full range of consultancy service.
              In Essence, we are available to provide you with
              all the necessity tools to approach your success
 
            </p>
 
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="">Risk Assessments</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div> --}}

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">Security Consulting</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div> --}}

    

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Elite Companies ======= -->

  {{-- <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title"
           data-aos="fade-up">
        <h2>Our Companies </h2>
        <h5> Elite has a variety of Companies providing differenet Services   </h5>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".elite-security-solutions">Elite Security Solutions</li>
            <li data-filter=".elite-academy">Elite Academy</li>
            <li data-filter=".dar-elzay">Dar Elzay</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        @foreach($multipicimages as $image)
        <div class="col-lg-4 col-md-6 portfolio-item elite-security-solutions">
          <img
              src="{{$image->image ?? $image->image}}" 
              title="{{$image->title}}" 
              class="img-fluid" 
              alt="image not found">
          <div class="portfolio-info">
            <h4>Elite Security Solutions</h4>
            <p style="max-width:250px">Elite Security provides innovative and value-driven security solutions at the highest level of service, integrity, and professionalism.

              No person should be leaving their house headed toward a business or event and hoping they make it home alive. Business owners these days are not only faced with running a profitable business but they are also faced with keeping their customers and employees safe. We work hard with business owners and event organizers to reduce the possibility of threats by creating a custom defense plan for each and every possible scenario. With terror on the rise, now more than ever, a complete security plan is needed. These vulnerable events require the knowledge, experience, and skill of one of the top security guard agencies in the EGYPT.</p>
            <a href="{{$image->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
         @endforeach
         <div class="col-lg-4 col-md-6 portfolio-item elite-academy">

         </div>
      </div>
    </div>
  </section><!-- End Elite Companies Section --> --}}

 
   <!-- ======= Our Clients Section ======= -->
   <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clients</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
        @forelse($brands as $brand)

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img
             {{-- src="{{asset('frontend/assets/img/brand/',$brand?->brand_image)}}"  --}}
             src="{{$brand?->brand_image}}" 

                class="img-fluid" 
                title="{{$brand->brand_name}}"
                alt="image not found">
          </div>
        </div>
        @empty 
        <img 
        src="{{asset('image/imagenotofound.webp')}}"
        class="img-fluid"
        alt="image not found">
        
        @endforelse

      </div>

    </div>
  </section><!-- End Our Clients Section -->


@endsection