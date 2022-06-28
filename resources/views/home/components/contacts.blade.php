<section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Contact </p>
          <h3>Contact Us</h3>
        </header>
      </div>
        <div class="row features-icons" data-aos="fade-up">
            
          <div class="col-lg-6">

            <div class="row gy-4" style="margin-left:10px;">
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  <h3><i class="fa-solid fa-address-book fa-sm" style="height:10px;"></i>&nbsp;Address</h3>
                  <p>Jl. Warung Jati Barat No.22A, RT.1/RW.11, Ragunan, Kec. Ps.Minggu,  Jakarta Selatan</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="height:160px; border-radius:10px;">
                  
                  <h3><i class="bi bi-telephone"></i>&nbsp;Call Us</h3>
                  <p>(021) 7822 543<br>(021) 7822 544</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  
                  <h3><i class="bi bi-envelope"></i>&nbsp;Email Us</h3>
                  <p>Marketing@aeon-rt.com<br>support@aeon-rt.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box" style="border-radius:10px;">
                  
                  <h3><i class="bi bi-clock"></i>&nbsp;Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" style="border-radius:10px;">
            <form style="margin-right:10px;" action="{{route('inipostcontact')}}" method="POST" class="php-email-form" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row gy-4" style="margin-right:10px;">
              
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
                  <div class="sent-message">{{session()->get('success')}}</div>
                  <div class="error-message">Your message has been sent. Thank you!</div>
                  @if(session()->has('success'))
                  <div class="alert alert-success">
                    {{session()->get('success')}}
                  </div>
                @endif

                </div>
                
                <input type="submit" value="Send Messages" class="btn btn-primary">
              </div>
            </form>

          </div>

        </div>
    

    </section><!-- End Contact Section -->