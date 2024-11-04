  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Product</title>
      <link rel="stylesheet" href="style_web/css/pproductt.css">
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

      <section id="product" class="about-section"
          style="position: relative;">
          <div class="container h-10 d-flex justify-content-center align-items-center text-center">
              <h1 class="fw-bold" style="z-index: 2;">product</h1>
          </div>
          <div class="parallax-bg"></div>
      </section>
      <!-- End navbar and first page -->

      <!-- List product -->
      <section class="our-product mt-0 mb-5">
          <h2>Our Product</h2>
          <div class="underline mt-2 mb-5"></div>

          <div class="carousel-container">
              <div class="row g-0 carousel-content">
                  <!-- Card Group 1 -->
                  @foreach ($products as $product)
                    <div class="col-sm-3 row g-2 card-wrapper c1" data-aos="fade-up">
                        <div class="card card-custom-size">
                            @if($product->image)
                            <a href="{{ $product->image->getUrl() }}" target="_blank" style="display: inline-block">
                                <img src="{{ $product->image->getUrl('preview') }}" class="card-img-top lazy" alt="...">
                            </a>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title m-0 m-0">{{ $product->name }}</h5>
                                <p class="card-text  scrollable-text">Media : {{ $product->bahan }} <br> Fungsi : {{ $product->fungsi }} <br> Customer : {{ $product->customer }}</p>
                                <a href="#" class="btn btn-primary btn-right">Price: ALL</a>
                            </div>
                        </div>
                    </div>
                  @endforeach
              </div>

              <!-- Navigation Arrows -->


              <!-- Navigation Dots -->
              <div class="carousel-dots">
                <div class="dots-container"></div> <!-- Dots akan diisi secara dinamis oleh JavaScript -->
                <button id="prev" class="carousel-nav prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button id="next" class="carousel-nav next">
                    <i class="bi bi-chevron-right"></i>
                </button>
                </div>            
              <!-- Button for all products -->

          </div>

      </section>
      <!-- end our product -->


      {{-- footer include --}}
      @include('partials.footer')

      {{-- <script src="style_web/js/main.js"></script> --}}
      <script src="style_web/js/product.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
  </body>

  </html>
