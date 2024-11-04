<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style_web/css/about.css">
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

    <!-- Section Tentang Kami -->
    <section id="about" class="about-section"
        style="position: relative; ">
        <div class="container h-10 d-flex justify-content-center align-items-center text-center">
            <h1 class="fw-bold " style="z-index: 2;">Tentang Kami</h1>
        </div>
        <div class="parallax-bg"></div>
    </section>
    <!-- End tentang kami  -->

    <section class="description-section py-5 ">
        <div class="container mt-3">
            @foreach ($abouts as $about)
            <div class="row align-items-center">
                <!-- Gambar di sebelah kiri -->
                <div class="col-md-6 text-center">
                    @if($about->image)
                        <img src="{{ $about->image->getUrl('preview') }}" alt="Filter Image" class="img-fluid rounded">
                    @endif
                </div>
                <!-- Deskripsi di sebelah kanan -->
                <div class="col-md-6 scrollable-text">
                    <p >{!! $about->description !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="vision-mission-section py-5">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <!-- Visi -->
                <div class="col-md-6 mb-4">
                    <h2 class="fw-bold">VISION</h2>
                    <hr style="width: 50px; height: 4px; margin: 10px auto;">
                    <div class="vision-box border-custom p-4 text-start">
                        @foreach ($visions as $vision)
                        <p><i class="bi bi-check-all fs-3 align-middle"></i> {{ $vision->visi }}</p>
                        @endforeach
                    </div>
                </div>
                <!-- Misi -->
                <div class="col-md-6 mb-4">
                    <h2 class="fw-bold">MISSION</h2>
                    <hr style="width: 50px; height: 4px; margin: 10px auto;">
                    <div class="mission-box border-custom p-4 text-start">
                        @foreach ($missions as $mission)
                        <p><i class="bi bi-check-all fs-3 align-middle"></i>{{ $mission->misi }}</p>
                        @endforeach
                    </div>
                </div>
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
