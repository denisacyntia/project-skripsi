@extends('layouts.app')

@section('content')
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="aboutus-title">
                <h2>Tentang Kami</h2>
            </div>
            <div class="aboutus-wrapper">
                <div class="row">
                    <div class="col-sm-4 col-md-5">
                        <div class="aboutus-image" {{--data-aos="fade-right"--}}>
                            <img src="assets/images/Add%20a%20heading.png">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                        <div class="aboutus-text">
                            <h3>TITIKOMA</h3>
                            <p>TITIKOMA merupakan penyedia aplikasi berbasis website yang
                                diharapkan dapat membantu Anda untuk mendapatkan penanganan
                                perihal permasalahan diri, keluarga, keuangan, pekerjaan, percintaan,
                                ataupun pertemanan melalui layanan konseling dengan Psikolog.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="contact-us-title" >
                <h2>Kontak Kami</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-us-wrapper" >
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="icofont-google-map"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Kebon Jeruk Raya No. 27, Kebon Jeruk <br>Jakarta Barat 11530, Indonesia</p>
                            </div>
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>titikoma@gmail.com</p>
                            </div>
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>(62 – 21) 53 69 69 69 / <br>(62 – 21) 53 69 69 99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <div class="team-title" >
                <h2>Our <strong>Team</strong></h2>
            </div>
            <div class="team-wrapper" {{--data-aos="fade-up"--}}>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="team-member">
                            <div class="team-member-img">
                                <img src="assets/images/team/team-1.jpg">
                            </div>
                            <div class="team-member-info">
                                <h4>Denisa Cyntia</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="team-member">
                            <div class="team-member-img">
                                <img src="assets/images/team/team-2.jpg">
                            </div>
                            <div class="team-member-info">
                                <h4>Dhea Syifa</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="team-member">
                            <div class="team-member-img">
                                <img src="assets/images/team/team-3.jpg">
                            </div>
                            <div class="team-member-info">
                                <h4>Citra Fadella</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
