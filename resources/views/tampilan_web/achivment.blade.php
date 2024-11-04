<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievment</title>
    <title>Product</title>
    <link rel="stylesheet" href="style_web/css/achivment.css">
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

    <section id="achivment" class="about-section"
        style="position: relative;  overflow: hidden;">
        <div class="container h-10 d-flex justify-content-center align-items-center text-center">
            <h1 class="fw-bold " style="z-index: 2;">Achievment</h1>
        </div>
        <div class="parallax-bg"></div>
    </section>
    <!-- End navbar and first page -->
    <section class="our-product mt-0 mb-5 ">
        <h2>Legalitas</h2>
        <div class="underline mt-5 mb-5"></div>

        <div class="carousel-container">
            <div class="row g-0 carousel-content">
                <!-- Card Group 1 -->
                @foreach ($legalitys as $legal)
                <div class="col-sm-3 row g-2 card-wrapper c1" data-aos="fade-up">
                    <div class="card card-custom-size">
                        @if($legal->image)
                        <a href="{{ $legal->image->getUrl() }}" target="_blank" style="display: inline-block">
                            <img src="{{ $legal->image->getUrl('preview') }}" class="card-img-top lazy" alt="...">
                        </a>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $legal->name }}</h5>
                            <!-- <p class="card-text">Nam sint iste tempora perspiciatis vitae expedita.</p> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="our-product mt-6 mb-5 " style=" min-height: 50vh;">
        <h2>TESTIMONI KEPUASAN PELANGGAN</h2>
        <div class="underline mt-5 mb-5"></div>

        <div class="carousel-container">
            <div class="row g-0 carousel-content">
                <!-- Card Group 1 -->
                @foreach ($testimonis as $testi)
                <div class="col-sm-3 row g-2 card-wrapper c1" data-aos="fade-up">
                    <div class="card card-custom-size">
                        @if($testi->image)
                        <a href="{{ $testi->image->getUrl() }}" target="_blank" style="display: inline-block">
                            <img src="{{ $testi->image->getUrl('preview') }}" class="card-img-top lazy" alt="...">
                        </a>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $testi->name }}</h5>
                            <!-- <p class="card-text">Nam sint iste tempora perspiciatis vitae expedita.</p> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="our-product mt-6 mb-5 " style=" min-height: 50vh;">
        <h2>SERTIFIKAT PERUSAHAAN</h2>
        <div class="underline mt-5 mb-5"></div>

        <div class="carousel-container">
            <div class="row g-0 carousel-content">
                <!-- Card Group 1 -->
                @foreach ($sertifikats as $serti)
                <div class="col-sm-3 row g-2 card-wrapper c1" data-aos="fade-up">
                    <div class="card card-custom-size">
                        @if($serti->image)
                        <a href="{{ $serti->image->getUrl() }}" target="_blank" style="display: inline-block">
                            <img src="{{ $serti->image->getUrl('preview') }}" class="card-img-top lazy" alt="...">
                        </a>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $serti->name }}</h5>
                            <!-- <p class="card-text">Nam sint iste tempora perspiciatis vitae expedita.</p> -->
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>

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
