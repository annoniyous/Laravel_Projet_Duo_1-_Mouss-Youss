

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  {{-- @foreach ($form as $item) --}}
      <div class="container">
        
        <div class="section-title">
          <h2>{{$contact[0]->title}}</h2>
          <p>{{$contact[0]->subtitle}}</p>
          
          
          
          <div class="row">
            
            <div class="col-lg-6">
              
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    {{-- <h3>{{$form->title[1]}}</h3> --}}
                    {{-- <p>{{$form->donnés[1]}}</p> --}}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    {{-- <h3>{{$form->title[2]}}</h3> --}}
                    {{-- <p>{{$form->subtitle[2]}}<br>{{$form->donnés[2]}}</br></p> --}}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  {{-- <h3>{{$form->title[3]}}</h3> --}}
                  {{-- <p>{{$form->subtitle[3]}}<br>{{$form->donnés[3]}}</p> --}}
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            
            <form action="contact" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          
        </div>
        
      </div>
    {{-- @endforeach --}}
  </section><!-- End Contact Section -->