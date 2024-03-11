@extends('layout.main')

@section('content')
    <section class="section" id="features" style="background-color: #FBF6EE">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>contact <em>us</em></h2>
                    <img src="{{ asset('assets/images/line-dec.png') }}" alt="waves" />
                    <hr>
                    <div class="container">
                        <div class="row no-gutters justify-content-center">
                            <iframe style="border: 0; width: 100%; height: 270px"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.722310157253!2d110.20713311002598!3d-7.495879873900101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f12a8f5acd3%3A0x569c3f8c542dc94d!2sLPK%20Mitra%20Jaya%20Indonesia%20New!5e0!3m2!1sen!2sid!4v1709741653610!5m2!1sen!2sid"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-lg-10">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required />
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required />
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" style="border-radius: 10px; background-color: goldenrod;">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
