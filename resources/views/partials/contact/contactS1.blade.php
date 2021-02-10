<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2> {{ $contactStatic[0]->titre }} </h2>
            <p>{{ $contactStatic[0]->p }}</p>
        </div>

        <div class="row">


            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>


                    @foreach ($contactDynamic as $item)


                    @if ($item->id == 2 || $item->id == 3)
            
                            <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="{{ $item->icon }} "></i>
                                <h3>{{ $item->titre }} </h3>
                                <p>{{ $item->info1 }} <br>{{ $item->info2 }} </p>
                            </div>
                          </div>
            
                    @endif

                    @endforeach


                </div>


            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="{{ $contactStatic[0]->placeholder1 }}" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="{{ $contactStatic[0]->placeholder2 }}" data-rule="email"
                                data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="{{ $contactStatic[0]->placeholder3 }}" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us"
                            placeholder="{{ $contactStatic[0]->placeholder4 }}"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">{{ $contactStatic[0]->btn }}</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
