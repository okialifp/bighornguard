<section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Contact </p>
          <h3>Contact Us</h3>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Warung Jati Barat No.22A, RT.1/RW.11, Ragunan, Kec. Ps. Minggu <br>Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="height:270px; border-radius:10px;">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>(021) 7822 543<br>(021) 7822 544</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Marketing@aeon-rt.com<br>support@aeon-rt.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" style="border-radius:10px;">
            <form action="{{route('inipostcontact')}}" method="POST" class="php-email-form" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row gy-4">
              
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="messages" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <div class="error-message">Your message has been sent. Thank you!</div>
                  

                  <input type="submit" value="Send Messages" class="btn btn-primary">
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->