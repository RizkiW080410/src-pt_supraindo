  <!-- Footer -->
  <section class="info-section py-4 bg-light">
    <div class="container">
        <div class="row foot ">
            <!-- Company Information -->
            @foreach ($footers as $footer)
            <div class="col-md-6 infoo">
                <h5 class="pt">{{ $footer->detail }}</h5>
                <div class="info-item aww">
                    <p><i class="bi bi-geo-alt "></i>{{ $footer->alamat }}
                        <!-- <span class="first-line">BIZPOINT Point 1 Blok L No 16 Kel. Sukamulya</span>
                  <br>
                  <span class="second-line">Kec. Cikupa TANGERANG</span> -->
                    </p>
                </div>
                <div class="info-item">
                    <i class="bi bi-telephone"></i> {{ $footer->phone }}
                </div>
                <div class="info-item">
                    <i class="bi bi-envelope"></i> {{ $footer->email }}
                </div>
            </div>
            @endforeach

            <!-- Navigation and Social Media -->
            <div class="col-md-6 d-flex align-items-start foot-right">
              <div class="navigation">
                  <h5>NAVIGATION</h5>
                  <div class="nav-links">
                      <a href="/">Home</a>
                      <a href="/about">About</a>
                      <a href="/product">Product</a>
                      <a href="/achievement">Achievement</a>
                      <a href="/contact">Contact Us</a>
                  </div>
              </div>
          
              <div class="social-media text-end">
                  <h5>FOLLOW US</h5>
                  <div class="social-media-icons">
                    @foreach ($sosial_medias as $sosmed)
                        <a href="{{ $sosmed->url }}"><i class="{{ $sosmed->icon }}"></i>{{ $sosmed->name }}</a>
                    @endforeach
                      
                  </div>
              </div>
          </div>
        </div>

        <!-- Logo -->
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-end " style="position: relative;">
                <img src="style_web/assets/bluelogo.png" alt="Wintrust Filtration" loading="lazy" class="footer-logo">
            </div>
        </div>
    </div>    
</section>
<div class="row ">
  <div class="col-12 text-center copyrightt">
      <p class="mb-0">&copy; 2024 PT. Supraindo Multi Sejahtera. All rights reserved.</p>
  </div>
</div>
<!-- End footerr -->