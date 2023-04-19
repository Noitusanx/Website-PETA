@extends('layouts.navigation')

@section('title')
PETA-Pemandu Wisata | Pemandu Wisata
@endsection
@section('content')
<div class="container mt-5">
    <form>
        <div style="background-color:white" class="container p-3 my-3 border" id="form" method="POST">
            <div class="border-bottom border-black" style="margin: 16px; ">
                <div class="title">
                    <h1>Format Pendaftaran Pemandu Wisata</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control input_pendaftaran" placeholder="Nama">
                    </div>
                    <div class="col-sm-10">
                        <input type="number" name="umur" class="form-control input_pendaftaran" placeholder="Umur">
                    </div>
                    <div class="col-sm-10 margin-input">
                        <select class="form-select gender-option" aria-label="Default select example">
                            <option class="gender-option" selected>Jenis Kelamin</option>
                            <option class="gender-option" value="Pria">Pria</option>
                            <option class="gender-option" value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="col-sm-10">
                        <input type="tel" name="contact" class="form-control input_pendaftaran" placeholder="Nomor HP">
                    </div>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control input_pendaftaran" placeholder="Email">
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label class="form-label form-control label_pendaftaran">Pilih Keahlian Bidang :</label>
                            <div class="form-check">
                                <input class="form-check-input input_pendaftaran" type="checkbox" value="option1"
                                    id="option1" name="options[]">
                                <label class="form-check-label form-control label_pendaftaran" for="option1">Wisata
                                    Museum</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input input_pendaftaran" type="checkbox" value="option2"
                                    id="option2" name="options[]">
                                <label class="form-check-label form-control label_pendaftaran" for="option2">Wisata Sejarah
                                    dan Budaya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input input_pendaftaran" type="checkbox" value="option3"
                                    id="option3" name="options[]">
                                <label class="form-check-label form-control label_pendaftaran" for="option3">Wisata
                                    Regligi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input input_pendaftaran" type="checkbox" value="option1"
                                    id="option1" name="options[]">
                                <label class="form-check-label form-control label_pendaftaran" for="option1">Wisata
                                    Kuliner</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input input_pendaftaran" type="checkbox" value="option1"
                                    id="option1" name="options[]">
                                <label class="form-check-label form-control label_pendaftaran" for="option1">Wisata
                                    Alam</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 margin-input">
                        <textarea placeholder="Kelebihan" style="width: 100%;"
                            class="border text_area_pendaftaran"></textarea>
                    </div>
                    <div class="col-sm-10 margin-input">
                        <textarea placeholder="Kekurangan" style="width: 100%;"
                            class="border  text_area_pendaftaran"></textarea>
                    </div>
                    <div class="col-sm-10 margin-input">
                        <label class="form-label form-control label_pendaftaran">Upload CV: <input type="file" name="cv"
                                accept="application/pdf">
                        </label>
                    </div>
                    <div>
                        <div class="card col-sm-3 margin-photo" style="width: 10rem;">
                            <div class="image_upload">
                                <input type="file" name="gambar" id="userImage" accept="image/*" style="display:none;">
                                <label for="userImage" class="label_pendaftaran">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <img src="{{ asset('images/tambah.png') }}" class="card-img-top" alt="value"
                                                onclick="">
                                        </div>
                                        <div class="grid-item">
                                            <div class="tambahkan-gambar">Tambah Gambar</div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button d-flex justify-content-end">
                    <input type="submit" value="Kirim" class="btn-kirim input_pendaftaran">
                </div>
            </div>
    </form>
</div>
@endsection