<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web FIltter</title>
    <link rel="stylesheet" href="style_web/css/stylee.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('partials.menuweb')

  <!-- section hero  -->
  <div class="heroo">
        <div class="page-centerr">
            <div class="hero-contentt d-flexx justify-space-betweenn gapp-48">
                @foreach ($herosections as $hero)
                <div class="hero-leftt myy-autoo d-griddd gapp-32">
                    <h1 class="text-inkk">{{ $hero->hero_description }}</h1>
                    <p class="text-ink">
                        {{ $hero->description }}
                    </p>
                    <button class="btnnn primaryyy">Explore or work !</button>
                </div>
                @endforeach
                <div class="heroo-right ">
                    @foreach ($galeries as $galeri)
                    @if($galeri->image)
                        <img class="animationimg" src="{{ $galeri->image->getUrl('preview') }}" alt="Hero Image" loading="lazy" />
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="hero-image-bottom">
            <img src="style_web/assets/vectorr.png" alt="Bottom Image" />
        </div>
  </div>
  <!-- end of section hero  -->



    <!-- First page -->
    <!-- <section id="home" class=" align-items-center" style="min-height: 30vh;">
        <div class="container-core">
            <div class="row justify-content-left text-left">
                <div class="col col-sm-7 " style="text-align: left; padding-top: 105px; padding-bottom: 20px; ">
                    <h1> Menyediakan solusi dan peralatan berkualitas untuk industri</h1>
                    <p div class="col col-sm-7">
                        Kami adalah Perusahaan Penyedia Segala jenis Filter After Market yang bisa Menggantikan Product
                        OEM dengan Kualitas yang Setara dengan OEM.
                    </p>
                    <div class="slide-image">
                        <img class="filter1 active" src="style_web/assets/filter1.png" alt="">
                        <img class="filter1 " src="style_web/assets/filter2.png" alt="">
                        <img class="filter1 " src="style_web/assets/filter3.png" alt="">
                    </div>
                    <a href="#buttonawal" class="btn btn-light custom-btn fw-bold "
                        style="width: 170px; border-radius: 60px; color: var(--grey); position: relative;">Explore or
                        work</a>

                </div>

            </div>
        </div>
        <div class="aww " style="position: relative;">
            <img src="style_web/assets/logowin.png" class="img-fluid" loading="lazy">
        </div>


     
        <svg class="svglogo" width="100%" height="auto" viewBox="0 0 1526 300" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 48.7366V300H1526V62.3184C1510.76 57.7911 1419.28 41.332 1241.93 25.3469C1064.59 9.36179 786.893 11.2994 575.307 1.20023C411.074 -6.63879 123.711 25.6151 0 48.7366Z"
                fill="url(#paint0_linear_36_11)" />
            <path
                d="M0 48.7366V300H1526V62.3184C1510.76 57.7911 1419.28 41.332 1241.93 25.3469C1064.59 9.36179 786.893 11.2994 575.307 1.20023C411.074 -6.63879 123.711 25.6151 0 48.7366Z"
                fill="url(#paint1_linear_36_11)" />
            <path
                d="M0 300H136.459L1526 287.907V75.7762C1445.12 70.2336 1245.65 59.5515 1094.85 61.1639C906.361 63.1794 632.913 104.497 450.791 123.14C305.094 138.055 89.5565 225.427 0 267.248V300Z"
                fill="url(#paint2_linear_36_11)" />
            <path
                d="M520.58 218.203C386.732 219.798 210.207 273.24 142.833 299H1526V124.469C1308.6 116.093 1103.22 145.576 1027.71 161.364C914.434 179.646 654.428 216.607 520.58 218.203Z"
                fill="#444154" />
            <defs>
                <linearGradient id="paint0_linear_36_11" x1="0" y1="150" x2="1526"
                    y2="150" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0328" stop-color="#009EDB" stop-opacity="0.81" />
                    <stop offset="1" stop-color="#009EDB" />
                </linearGradient>
                <linearGradient id="paint1_linear_36_11" x1="0" y1="150" x2="1526"
                    y2="150" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0328" stop-color="#009EDB" stop-opacity="0.81" />
                    <stop offset="1" stop-color="#009EDB" />
                </linearGradient>
                <linearGradient id="paint2_linear_36_11" x1="-6.24699e-08" y1="150" x2="1526"
                    y2="150" gradientUnits="userSpaceOnUse">
                    <stop offset="0.04" stop-color="#107CC1" stop-opacity="0.8" />
                    <stop offset="1" stop-color="#107CC1" />
                </linearGradient>
            </defs>
        </svg>
    </section> -->
    <!-- End first page -->

    <!-- Our Service -->
    <section id="our-services" >
        <div class="container-fluid   " style="position: relative;"> <!-- Menambahkan padding horizontal -->
            <h2 class="text-left fw-bold">OUR SERVICES</h2>
            <hr class="hr-blue mb-5" />

            <div class="row lor" data-aos="fade-up">
                <!-- Capability Section -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="fw-bold">CAPABILITY</h5>
                    <ul class="list-unstyled">
                        @foreach ($capabilitys as $capa)
                        <li>{{ $capa->name }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Otomotive dan Heavy Duty Section -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold">OTOMOTIVE AND HEAVY DUTY</h5>
                    <ul class="list-unstyled">
                        @foreach ($otomotives as $oto)
                        <li>{{ $oto->name }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Trading Section -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold ms-2">TRADING</h5>
                    <ul class="list-unstyled ms-2">
                        @foreach ($tradings as $trad)
                        <li>{{ $trad->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="blue-logo-container">
                <img src="style_web/assets/bluelogo.png" alt="Blue Logo" class="blue-logo" loading="lazy">
            </div>
        </div>
    </section>

    <!--  End Our Service -->


    <!-- Our prduct -->
    <!-- <section id="our-product" class=" mt-5">
        <div class="container-fluid px-7 ">
          <h2 class="text-center fw-bold">OUR PRODUCT</h2>
          <hr class="hr-blue " />
          
      </section> -->

    <section class="our-product ">
        <h2>Our Product</h2>
        <div class="underline "></div>

        <div class="carousel-container">
            <div class="row g-0 carousel-content">
                <!-- Card Group 1 -->
                @foreach ($products as $product)
                <div class="col-sm-3 row g-2 card-wrapper c1">
                    <div class="card card-custom-size">
                        @if($product->image)
                            <a href="{{ $product->image->getUrl() }}" target="_blank" style="display: inline-block">
                                <img src="{{ $product->image->getUrl('preview') }}" class="card-img-top" alt="...">
                            </a>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $product->name }}</h5>
                            
                            <p class="card-text scrollable-text  mt-0 mb-5">Media : {{ $product->bahan }} <br> Fungsi : {{ $product->fungsi }} <br> Customer : {{ $product->customer }}</p>
                            <a href="#" class="btn btn-primary btn-right">Price:ALL</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Arrows -->
            <button id="prev" class="carousel-nav prev">
                <i class="bi bi-chevron-left"></i> <!-- Ikon Bootstrap untuk panah kiri -->
            </button>
            <button id="next" class="carousel-nav next">
                <i class="bi bi-chevron-right"></i> <!-- Ikon Bootstrap untuk panah kanan -->
            </button>

            <!-- Navigation Dots -->
            <div class="carousel-dots mt-3">
                <div class="dots-container">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end our product -->

    <!-- Contact person -->
    <section class="contact-person mt-5 mb-5">
        <div class="container">
            <h2 class="text-center">Contact Person</h2>
            <div class="underline mb-5"></div>

            <div class="row justify-content-center" data-aos="fade-up">
                @foreach ($contact_persons as $contact)
                <!-- Profile 1 -->
                <div class="col-md-3 profile-card">
                    @if($contact->image)
                        <img src="{{ $contact->image->getUrl('preview') }}" loading="lazy">
                    @endif
                    <h5 class="mt-3 fw-bold pers">{{ $contact->name }}</h5>
                    <p>{{ $contact->email }}</p>
                    <p>{{ $contact->phone }}</p>
                </div>
                @endforeach
            </div>

            <div class="navigation-container mt-4">
                <button id="prevv" class="carousel-navv prevv">
                    <i class="bi bi-chevron-left"></i> <!-- Left arrow icon -->
                </button>
                
                <!-- Navigation Dots -->
                <div class="carousel-dotss">
                    <div class="dotss-container">
                        <span class="dot activee"></span>
                        <span class="dott"></span>
                    </div>
                </div>
                
                <button id="nextt" class="carousel-navv nextt">
                    <i class="bi bi-chevron-right"></i> <!-- Right arrow icon -->
                </button>
            </div>
        </div>
    </section>
    <!-- End contact person --> 

    {{-- footer include --}}
    @include('partials.footer')

    <script src="style_web/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>
