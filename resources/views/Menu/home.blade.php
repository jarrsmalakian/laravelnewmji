@extends('layout.main')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('assets/images/gym-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <!-- <h6>let's grow tothether with us</h6> -->
                <h2>let's grow together <em>with us</em></h2>
                <a class="btn btn-primary" href="{{ url('register') }}">DAFTAR MAGANG</a>


            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Menu Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-heading">
                        <h2>Tentang <em>Kami</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="waves" />
                        <div class="clearfix">
                            <img src="{{ asset('assets/images/hakim.jpg') }}" class="col-md-6 float-md-end mb-3 ms-md-3"
                                alt="direktur" />

                            <p style="text-align: justify">
                                <strong>Mitra Jaya Indonesia</strong> adalah
                                Lembaga yang dikelola secara langsung oleh
                                berbagai macam profesional dan ahli yang
                                terakreditasi serta berpengalaman, bergerak
                                dibidang perekrutan, pelatihan, pengiriman
                                tenaga magang, internship, study di Jepang
                                dengan selalu memprioritaskan Etos dan Etika
                                kerja yang tinggi, efektif dan inovatif yang
                                selalu mengedepankan nilai-nilai
                                keharmonisan dan profesionalisme kerja yang
                                berkualitas. Dengan semakin berkembangnya
                                zaman dan semakin banyaknya permintaan
                                kerjasama dari pihak Jepang, kami selalu
                                melakukan peningkatan kinerja dengan lebih
                                fokus kepada kegiatan inti dengan
                                mengedepankan kualitas, efektifitas,
                                efisiensi kerja, kepuasan pelanggan dan
                                keharmonisan hubungan dengan patners. Mitra
                                Jaya Indonesia didirikan pada tahun 2008,
                                telah menjalin kerjasama dengan beberapa
                                Yayasan Jepang dari awal berdiri. Tidak
                                dipungkiri perbedaan budaya, kehidupan dan
                                cara befikir antara masyarakat Indonesia dan
                                Jepang merupakan tantangan yang harus
                                dilalui dan dipecahkan dengan sebaik
                                baiknya. Dengan mengutamakan prinsip
                                keselarasan dan keharmonisan kami telah
                                berhasil mempertahankan hubungan baik dengan
                                patner kami di Jepang lebih dari 10 tahun.
                                Eksistensi dan perkembangan Mitra Jaya
                                Indonesia telah menunjukan bukti jelas bahwa
                                kerja keras dari semua staff kami yang
                                profesional dalam kerjasama yang
                                berkesinambungan, dan disertai dengan Visi
                                dan Misi yang kuat telah melahirkan motto
                                semboyan baru ditahun 2021 , yaitu “Lets
                                grow together" Mari bekerjasama bersama
                                kami, bersama sama berkembang, tumbuh
                                menjadi lebih besar, sehingga memberikan
                                manfaat untuk sesama dan untuk negara kita.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">
                        <!-- VISI -->
                        <li class="feature-item">
                            <div class="right-content">
                                <h4 style="text-align: center">VISI</h4>
                                <p style="text-align: center">
                                    "Mewujudkan siswa yang memiliki
                                    penguasaan ilmu dan teknologi serta
                                    memiliki kepribadian, moralitas dan
                                    mental yang baik"
                                </p>
                            </div>
                        </li>

                        <!-- MISI -->
                        <li class="feature-item">
                            <div class="right-content">
                                <h4 style="text-align: center">MISI</h4>
                                <p>
                                    Dilakukan dengan 3 pola pendekatan yaitu
                                    :
                                    <br />
                                    <b>Pengajaran</b><br />
                                    Keahlian berbahasa Jepang serta budaya
                                    Jepang. (fisik prima, mental tangguh,
                                    dan pantang menyerah).
                                    <br />
                                    <b>Penanaman</b><br />
                                    Pembentukan fisik dan jasmani serta
                                    kedisiplinan yang tinggi.
                                    <br />
                                    <b>Pengasuhan</b><br />
                                    Pembentukan akhlak mental dan spiritual
                                    serta disiplin ibadah.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/features-first-icon.jpg') }}" alt="gedung" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu End ***** -->

    <section class="section" id="our-classes" style="background-color: rgb(237, 250, 247);">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>fasilitas</h2>
                    <img src="{{ asset('assets/images/line-dec.png') }}" />
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li>
                            <a href="#tabs-1">Ruang Kantor</a>
                        </li>
                        <li>
                            <a href="#tabs-2">Ruang Tamu</a>
                        </li>
                        <li>
                            <a href="#tabs-3">Ruang Kelas</a>
                        </li>
                        <li>
                            <a href="#tabs-4">Ruang Makan</a>
                        </li>
                        <li>
                            <a href="#tabs-5">Kamar Tidur</a>
                        </li>
                        <li>
                            <a href="#tabs-6">Lapangan Olahraga</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class="tabs-content">
                        <article id="tabs-1">
                            <img src="{{ asset('assets/images/kantor.png') }}" alt="kantor" />
                            <h4>Ruang Kantor</h4>
                            <p>
                                Ruang kerja staff LPK Mitra Jaya Indonesia
                            </p>
                        </article>
                        <article id="tabs-2">
                            <img src="{{ asset('assets/images/training-image-02.jpg') }}" alt="Second Training" />
                            <h4>Ruang Tamu</h4>
                            <p>Ruang untuk menerima tamu</p>
                        </article>
                        <article id="tabs-3">
                            <img src="{{ asset('assets/images/training-image-01.jpg') }}" alt="Third Class" />
                            <h4>Ruang Kelas</h4>
                            <p>
                                4 Ruang kelas penunjang kegiatan belajar
                                mengajar dengan kapasitas per kelas 20 orang
                            </p>
                        </article>
                        <article id="tabs-4">
                            <img src="{{ asset('assets/images/ruangmakan.jpg') }}" alt="Fourth Training" />
                            <h4>Ruang Makan</h4>
                            <p>
                                1 ruang makan untuk para siswa magang dengan
                                kapasitas 80 orang
                            </p>
                        </article>
                        <article id="tabs-5">
                            <img src="{{ asset('assets/images/training-image-03.jpg') }}" alt="Fourth Training" />
                            <h4>Kamar Tidur</h4>
                            <p>
                                Asrama khusus laki-laki dengan kapasitas
                                tempat tidur 80 orang
                            </p>
                        </article>
                        <article id="tabs-6">
                            <img src="{{ asset('assets/images/training-image-03.jpg') }}" alt="Fourth Training" />
                            <h4>Lapangan Olahraga</h4>
                            <p>
                                Lapangan olahraga untuk melatih fisik dan
                                kesehatan para peserta magang
                            </p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>persentase <em>jenis kerja</em></h2>
                        <hr />
                        <p>
                            Total Siswa Berangkat <strong>907</strong> orang
                        </p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="77" aria-valuemin="0" aria-valuemax="907" style="width: 77%"></div>
                            Iron Working : 77,84%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="907" style="width: 10%"></div>
                            Casting : 9,15%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="5" aria-valuemin="0" aria-valuemax="907" style="width: 5%"></div>
                            Machining : 2,76%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="4" aria-valuemin="0" aria-valuemax="907" style="width: 4%"></div>
                            Painting : 2,21%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="4" aria-valuemin="0" aria-valuemax="907" style="width: 4%"></div>
                            Factory Metal Sheet Work : 2,21%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="3" aria-valuemin="0" aria-valuemax="907" style="width: 3%"></div>
                            Electroplating : 1,54%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="2" aria-valuemin="0" aria-valuemax="907" style="width: 2%"></div>
                            Scaffolding : 1,21%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="2" aria-valuemin="0" aria-valuemax="907" style="width: 2%"></div>
                            Ready-Made Meal Manufactoring Work : 0,99%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="907" style="width: 1%"></div>
                            Application Of Construction Equipment : 0,66%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="907" style="width: 1%"></div>
                            Welding : 0,22%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="907" style="width: 1%"></div>
                            Fish Paste Making : 0,22%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="907" style="width: 1%"></div>
                            Reinforcing Bar Construction : 0,22%
                        </div>
                        <p></p>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="907" style="width: 1%"></div>
                            Finishing Work : 0,11%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Pengajar Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Instruktur <em>Berpengalaman</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="" />
                        <p>Under Construction</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/first-trainer.jpg') }}" alt="" />
                        </div>
                        <div class="down-content">
                            <span>Sensei</span>
                            <h4>Habib</h4>
                            <p>Under Construction</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/second-trainer.jpg') }}" alt="" />
                        </div>
                        <div class="down-content">
                            <span>Sensei</span>
                            <h4>Lili</h4>
                            <p>Under Construction</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/third-trainer.jpg') }}" alt="" />
                        </div>
                        <div class="down-content">
                            <span>Sensei</span>
                            <h4>Fani</h4>
                            <p>Under Construction</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Pengajar Ends ***** -->

    <!-- ***** Jenis Kerja ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>jenis <em>kerja</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="waves" />
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Aliquid officiis magni quo,
                            numquam odit rem sit modi unde quis saepe!
                            Cumque enim esse consectetur animi laborum
                            maiores fugit voluptatibus hic?
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <!-- <img
                                                                                                                                                                                                            src="assets/images/features-first-icon.png"
                                                                                                                                                                                                            alt="First One"
                                                                                                                                                                                                        /> -->
                            </div>
                            <div class="right-content">
                                <h4>Iron Working</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Nostrum fuga
                                    reprehenderit totam. Maxime, architecto.
                                    Provident exercitationem, repellendus
                                    ullam, sequi, voluptates a dolores
                                    laboriosam commodi nulla impedit
                                    aperiam. Enim, sapiente quae.
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="right-content">
                                <h4>Casting</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Assumenda, dicta quam
                                    laudantium magnam explicabo impedit
                                    ducimus, sed suscipit voluptates omnis
                                    non magni labore laboriosam eaque hic
                                    corporis laborum recusandae earum!
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="right-content">
                                <h4>Plating</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Magni, deleniti!
                                    Voluptatibus molestias quas voluptatem
                                    cupiditate omnis. Ut numquam, voluptates
                                    unde placeat, id, tempore vel totam
                                    porro similique ea officia culpa. > for
                                    images and video background used in this
                                    HTML template.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="right-content">
                                <h4>Konstruksi</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Fuga, amet? Unde
                                    dolor, velit iure harum odio error
                                    delectus autem, maxime ut omnis
                                    necessitatibus. Et, ratione unde!
                                    Impedit quas obcaecati cumque.
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="right-content">
                                <h4>Pertanian &amp; Peternakan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Saepe, repellat
                                    commodi. Maxime molestias debitis dicta
                                    illum, placeat suscipit! Molestias
                                    voluptate dicta ipsum quos. Distinctio
                                    placeat dolores dolore minima
                                    dignissimos consequuntur.
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="right-content">
                                <h4>Garmen</h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Eos, in. Eligendi
                                    voluptatum provident quo nemo!
                                    Repudiandae voluptate esse unde quae
                                    doloribus nisi cupiditate laborum
                                    tempore, nam harum debitis facilis
                                    explicabo.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Jenis Kerja End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>
                            masa depan <em>lebih baik</em>, bersama
                            <em>mitra </em>jaya indonesia
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Distinctio dolor iusto cum
                            libero facere suscipit exercitationem laborum
                            laudantium quibusdam, temporibus nemo quo error
                            mollitia impedit corporis fugit unde hic
                            numquam!
                        </p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>program <em>belajar</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Culpa, facilis totam dolore
                            quia, laborum non facere accusantium molestias
                            illum inventore consectetur! Iste necessitatibus
                            beatae sunt explicabo doloremque optio nam a?
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li>
                            <a href="#tabs-7">Bahasa Jepang</a>
                        </li>
                        <li>
                            <a href="#tabs-8">Budaya Jepang</a>
                        </li>
                        <li>
                            <a href="#tabs-9">Pengetahuan Magang</a>
                        </li>
                        <li>
                            <a href="#tabs-10">FMD (Fisik, Mental, Disiplin &amp; Wawasan
                                Kebangsaan)</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class="tabs-content">
                        <article id="tabs-7">
                            <img src="{{ asset('assets/images/training-image-01.JPG') }}" alt="First Class" />
                            <h4>Bahasa Jepang</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Labore amet officiis culpa
                                earum. Sint autem quis nobis sequi,
                                voluptates doloremque voluptatum libero
                                necessitatibus labore, asperiores distinctio
                                natus? Hic, et consequatur.
                            </p>
                        </article>
                        <article id="tabs-8">
                            <img src="{{ asset('assets/images/training-image-02.JPG') }}" alt="Second Training" />
                            <h4>Pengetahuan Hidup di Jepang</h4>
                            <p>
                                Integer dapibus, est vel dapibus mattis, sem
                                mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in
                                ultricies augue ultricies faucibus. Nam
                                tellus nibh, ullamcorper at mattis non,
                                rhoncus sed massa. Cras quis pulvinar eros.
                                Orci varius natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus.
                            </p>
                        </article>
                        <article id="tabs-9">
                            <img src="{{ asset('assets/images/training-image-03.JPG') }}" alt="Third Class" />
                            <h4>Pengetahuan Magang</h4>
                            <p>
                                Fusce laoreet malesuada rhoncus. Donec
                                ultricies diam tortor, id auctor neque
                                posuere sit amet. Aliquam pharetra, augue
                                vel cursus porta, nisi tortor vulputate
                                sapien, id scelerisque felis magna id felis.
                                Proin neque metus, pellentesque pharetra
                                semper vel, accumsan a neque.
                            </p>
                        </article>
                        <article id="tabs-10">
                            <img src="{{ asset('assets/images/training-image-04.jpg') }}" alt="Fourth Training" />
                            <h4>
                                FMD (Fisik, Mental, Disiplin &amp; Wawasan
                                Kebangsaan)
                            </h4>
                            <p>
                                Pellentesque habitant morbi tristique
                                senectus et netus et malesuada fames ac
                                turpis egestas. Aenean ultrices elementum
                                odio ac tempus. Etiam eleifend orci lectus,
                                eget venenatis ipsum commodo et.
                            </p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>kegiatan <em>belajar</em></h2>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="" />
                        <p>
                            Kegiatan belajar selama 5 bulan (20 minggu)
                            kurang lebih 1.015 jam yang meliputi :
                        </p>
                        <p style="text-align: left">
                            1. Bahasa Jepang 815 jam (Grammar, Reading,
                            Writing, Listening and Conversation)
                        </p>
                        <p style="text-align: left">
                            2. Pengetahuan Hidup di Jepang 40 jam (Rules at
                            Work and Safety work life of Japanese style)
                        </p>
                        <p style="text-align: left">
                            3. Pengetahuan Magang di Jepang 40 jam.
                        </p>
                        <p style="text-align: left">
                            4. FMD 120 jam (Fisik, Mental, Disiplin dan
                            Wawasan Kebangsaan)
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">
                                Senin
                            </li>
                            <li data-tsfilter="tuesday">Selasa</li>
                            <li data-tsfilter="wednesday">Rabu</li>
                            <li data-tsfilter="thursday">Kamis</li>
                            <li data-tsfilter="friday">Jumat</li>
                            <li data-tsfilter="saturday">Sabtu</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Bahasa Jepang</td>
                                    <td class="monday ts-item show" data-tsmeta="monday"></td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday"></td>
                                    <td>Habib Sensei</td>
                                </tr>
                                <tr>
                                    <td class="day-time">
                                        Pengetahuan Hidup di Jepang
                                    </td>
                                    <td class="friday ts-item" data-tsmeta="friday"></td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday"></td>
                                    <td>Lili Sensei</td>
                                </tr>
                                <tr>
                                    <td class="day-time">
                                        Pengetahuan Magang
                                    </td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday"></td>
                                    <td class="monday ts-item show" data-tsmeta="monday"></td>
                                    <td>Nana Sensei</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Olahraga</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday"></td>
                                    <td class="friday ts-item" data-tsmeta="friday"></td>
                                    <td>Eko Sensei</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Religi</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday"></td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday"></td>
                                    <td>Bpk. Hadi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pertanyaan Yang Sering di Ajukan -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>Pertanyaan Yang <em>Sering Diajukan</em></h2>
                    <img src="{{ asset('assets/images/line-dec.png') }}" alt="" />
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    A. Persyaratan Apa Yang Dibutuhkan
                                    Untuk Mendaftar ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Usia minimal 19,5 tahun dan
                                            maksimal 26 tahun sesuai
                                            persyaratan User.
                                        </li>
                                        <li style="text-align: justify">
                                            Pendidikan minimal SMA, SMK,
                                            MA, Paket C atau yang setara
                                            (kecuali dipersyaratkan
                                            User).
                                        </li>
                                        <li style="text-align: justify">
                                            Tinggi badan minimal 162 cm
                                            bagi pria dan minimal 155 cm
                                            bagi wanita (kecuali
                                            dipersyaratkan User).
                                        </li>
                                        <li style="text-align: justify">
                                            Berat badan proporsional,
                                            maksimal 78 kg.
                                        </li>
                                        <li style="text-align: justify">
                                            Sehat Jasmani dan Rohani.
                                        </li>
                                        <li style="text-align: justify">
                                            Penglihatan normal dan tidak
                                            buta warna, minus mata
                                            maksimal -0,25 (kecuali ada
                                            yang diperbolehkan memakai
                                            kaca mata oleh pihak User).
                                        </li>
                                        <li style="text-align: justify">
                                            Dalam kondisi sehat, tidak
                                            pernah menderita
                                            penyakit-penyakit seperti
                                            sakit pinggang, migrain,
                                            tekanan darah tinggi,
                                            penyakit jantung, TBC,
                                            hepatitis, dan lain-lain
                                            yang kemungkinan dapat
                                            mengganggu dalam proses
                                            Pendidikan dan Pemagangan
                                            nantinya.
                                        </li>
                                        <li style="text-align: justify">
                                            Belum pernah mengajukan atau
                                            mengikuti Program Pemagangan
                                            ke Jepang maupun Program
                                            lainnya ke Jepang, atau
                                            tidak pernah tersangkut
                                            masalah dengan keimigrasian
                                            Indonesia dan Jepang.
                                        </li>
                                        <li style="text-align: justify">
                                            Memiliki semua kelengkapan
                                            dokumen dan tidak
                                            bermasalah, seperti KTP, KK,
                                            Akte Kelahiran, Ijasah
                                            Pendidikan terakhir.
                                            (pastikan eja’an nama sama
                                            semua)
                                        </li>
                                        <li style="text-align: justify">
                                            Jujur dan tidak sedang
                                            terikat dengan LPK (Lembaga
                                            Pendidikan Ketrampilan)
                                            manapun.
                                        </li>
                                        <li style="text-align: justify">
                                            Telah memahami dan
                                            menyetujui semua proses
                                            Pendidikan dan Pemagangan.
                                        </li>
                                        <li style="text-align: justify">
                                            Telah mendapat ijin
                                            mengikuti Pendidikan dan
                                            Program Pemagangan dari
                                            pihak orang tua dan
                                            keluarga.
                                        </li>
                                    </ol>

                                    <p>
                                        <i>* Untuk memastikan
                                            lowongan-lowongan yang
                                            tersedia, silahkan lihat di
                                            laman Facebook dan Instagram
                                            Mitra Jaya Indonesia.</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="true"
                                    aria-controls="flush-collapse1">
                                    B. Bagaimana Cara Mendaftar Di Mitra
                                    Jaya Indonesia ?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Cara mendaftar di
                                            <strong>LPK Mitra Jaya
                                                Indonesia</strong>
                                            cukup mudah dan dapat
                                            dilakukan dimana saja, yaitu
                                            dilakukan secara Online
                                            dengan mendaftar di laman
                                            ini, mengisi semua data yang
                                            ditanyakan dalam Form
                                            Pendaftaran secara online.
                                        </li>
                                        <li style="text-align: justify">
                                            Selain itu bisa dengan
                                            mendownload CV pendaftaran,
                                            setelah di isi lengkap
                                            kemudian di kirim ke email
                                            lpkmitrajayaindonesia@yahoo.co.id
                                        </li>
                                        <li style="text-align: justify">
                                            Bisa datang langsung ke
                                            kantor
                                            <strong>LPK Mitra Jaya
                                                Indonesia</strong>
                                            Magelang
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse2" aria-expanded="true"
                                    aria-controls="flush-collapse2">
                                    C. Prosedur Atau Persyaratan Apa
                                    Saja Yang Diperlukan ?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Persyaratan umum untuk
                                            mengikuti Program Pemagangan
                                            telah dijelaskan dalam
                                            halaman
                                            <strong>LPK Mitra Jaya
                                                Indonesia</strong>. Secara umum adalah
                                            berusia minimal 19.5 tahun,
                                            belum pernah mengikuti atau
                                            mengajukan dokumen Program
                                            Pemagangan sebelumnya, atau
                                            tidak pernah bermasalah
                                            dengan Imigrasi atau Hukum
                                            di Jepang.
                                        </li>
                                        <li style="text-align: justify">
                                            Selanjutnya adalah memenuhi
                                            kriteria/persyaratan LPK
                                            Mitra Jaya Indonesia dan
                                            user. Izin keluarga juga
                                            menjadi salah satu
                                            persyaratan yang utama.
                                        </li>
                                        <li style="text-align: justify">
                                            Bagi mereka yang telah
                                            mendaftar dan dipanggil oleh
                                            staf perekrutan kami, maka
                                            akan mengikuti Seleksi Tahap
                                            Pertama berupa Tes Tertulis,
                                            Tes Fisik, Interview dan
                                            tes-tes lainnya jika
                                            diperlukan. Bagi mereka yang
                                            dinyatakan lulus Seleksai
                                            Tahap Pertama, akan
                                            dipanggil Seleksi Tahap
                                            Kedua dengan Matching user.
                                            Kesiapan dokumen (fotokopi
                                            KK, KTP, Ijasah, dsbnya)
                                            mungkin juga akan
                                            dipastikan, disamping
                                            persetujuan orang tua yang
                                            juga akan dipastikan.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="true"
                                    aria-controls="flush-collapse3">
                                    D. Berapa biaya yang harus
                                    dipersiapkan ?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li style="text-align: justify">
                                            Pada prinsipnya, tidak ada
                                            biaya selama proses
                                            pendaftaran.
                                        </li>
                                        <li style="text-align: justify">
                                            Biaya yang diperlukan adalah
                                            tes tahap pertama, tes MCU
                                            (Medical Check up),
                                            Pembuatan Paspor, Biaya
                                            Pelatihan dan
                                            pemberangkatan.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="true"
                                    aria-controls="flush-collapse4">
                                    E. Lowongan apa saja yang tersedia ?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Di bidang pengolahan besi
                                            baja (iron working, casting,
                                            Plating, Konstruksi)
                                        </li>
                                        <li style="text-align: justify">Pertanian</li>
                                        <li style="text-align: justify">Peternakan</li>
                                        <li style="text-align: justify">Perikanan</li>
                                        <li style="text-align: justify">Konstruksi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="true"
                                    aria-controls="flush-collapse5">
                                    F. Berapa lama Pendidikan di LPK
                                    Mitra Jaya Indonesia, dan
                                    fasilitas-fasilitas apa saja yang
                                    akan didapatkan ?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Pendidikan di
                                            <strong>LPK Mitra Jaya
                                                Indonesia</strong>
                                            selama 5 sampai dengan 6
                                            bulan, disesuaikan dengan
                                            permohonan dari User di
                                            Jepang. Pendidikan dilakukan
                                            8 jam dari hari Senin hingga
                                            Jumat, dan 4 jam di hari
                                            Sabtu.
                                        </li>
                                        <li style="text-align: justify">
                                            Asrama (tempat tinggal),
                                            sarapan pagi, makan siang,
                                            makan malam, perlengkapan
                                            belajar, perlengkapan
                                            ibadah, pakaian training
                                            olahraga, jas, koper.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse6" aria-expanded="true"
                                    aria-controls="flush-collapse6">
                                    G. Apakah LPK Mitra Jaya Indonesia
                                    bisa menjamin pasti berangkat ke
                                    Jepang ?
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li style="text-align: justify">
                                            Jika calon Pemagang telah
                                            lulus Seleksi User, lulus
                                            tes MCU Tahap Pertama dan
                                            masuk Pendidikan di LPK
                                            Mitra Jaya Indonesia, pada
                                            prinsipnya kemungkinan besar
                                            pasti akan berangkat ke
                                            Jepang.
                                        </li>
                                        <li style="text-align: justify">
                                            Namun, pihak User Jepang
                                            atau
                                            <strong>LPK Mitra Jaya
                                                Indonesia</strong>
                                            juga dapat membatalkan, jika
                                            calon Pemagang melanggar
                                            peraturan, dinilai tidak
                                            bisa mengikuti Program
                                            Pendidikan, memiliki masalah
                                            kesehatan atau masalah sikap
                                            mental yang dianggap tidak
                                            bisa beradaptasi hidup di
                                            Jepang kemudian harinya.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Pertanyaan Yang Sering di Ajukan End -->
@endsection
