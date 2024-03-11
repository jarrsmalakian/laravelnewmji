@extends('layout.main')

@section('content')
    <div class="section" style="background-color: #FBF6EE">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>Jadwal Tes <em>Angkatan 49</em></h2>
                    <hr>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
                        <a class="breadcrumb-item" href="{{ url('informasi') }}">Informasi</a>
                        <span class="breadcrumb-item active" aria-current="page">Jadwal Tes</span>
                    </nav>

                    <div class="container" style="padding: 20px;text-align:left;">
                        <h4>Gelombang 1</h4>
                        <p style="font-size: 16px">Tes dilaksanakan tanggal 12 Desember 2024 di Aula LPK Mitra Jaya
                            Indonesia. Setiap peserta diwajibkan membawa alat tulis (pulpen, pensil, penghapus,
                            penggaris,buku catatan).
                        </p>
                        <h4>Gelombang II</h4>
                        <p>
                            Tes dilaksanakan tanggal 13 Desember 2024 di A
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-borderless table-primary align-middle">
                                <thead class="table-light">
                                    <tr style="text-align: center">
                                        <th>Waktu</th>
                                        <th>Materi</th>
                                        <th>Tempat</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr class="table-primary">
                                        <td scope="row">07.30 - 08.00</td>
                                        <td>Psikotes</td>
                                        <td>Aula LPK Mitra Jaya Indonesia</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td scope="row">08.00 - 09.00</td>
                                        <td>Tes Matematika</td>
                                        <td>Ruang Multimedia</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td scope="row">09.00 - 10.00</td>
                                        <td>Tes Bahasa Jepang</td>
                                        <td>Ruang Fujiyama</td>
                                    </tr>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Materi</th>
                                    <th scope="col">Tempat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">R1C1</td>
                                    <td>R1C2</td>
                                    <td>R1C3</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <figure class="text-start">
                        <blockquote class="blockquote">
                            <p>Jangan terlalu banyak berharap sama manusia</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Fajar Bachtiyar
                            <cite title="Source Title">Kalegen</cite>
                        </figcaption>
                    </figure>
                @endsection
