<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body id="body">
    <section id="section">
        <div id="navbar" class="navbar">
            <div class="pull-left">
                <img src="media/logosd.png" alt="logo sd" width="150px" margin-right="20px">
            </div>
            <div class="pull-left">
                <h1>Sistem Informasi Sekolah Dasar</h1>
                <h3>Welcome</h3>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SISD</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Budaya</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <h3>Sekolah Dasar (SD)</h3>
                    <img src="media/lingkungansd.jpg" alt="" style="float: left; margin-right:10px">
                    <p>
                        Sekolah dasar (disingkat SD; bahasa Inggris: Elementary School atau Primary School)
                        adalah jenjang paling dasar pada pendidikan formal di Indonesia.
                        Sekolah dasar ditempuh dalam waktu 6 tahun, mulai dari kelas 1 sampai kelas 6.
                        Saat ini murid kelas 6 diwajibkan mengikuti Ujian Nasional (EBTANAS) yang mempengaruhi kelulusan siswa.
                        Lulusan sekolah dasar dapat melanjutkan pendidikan ke tingkat SLTP. Pelajar sekolah dasar umumnya berusia 6-12 tahun.
                        Di Indonesia, setiap warga negara berusia 6-15 tahun wajib mengikuti pendidikan dasar,
                        yakni sekolah dasar (atau sederajat) 6 tahun dan sekolah menengah pertama (atau sederajat) 3 tahun.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Kurikulum SD</h3>
                    <ul>
                        <li>Agama</li>
                        <li>Jasmani dan Kesehatan</li>
                        <li>Teknologi Informatika dan Komunikasi</li>
                        <li>Bahasa Indonesia</li>
                        <li>Bahasa Inggris</li>
                        <li>Kewarganegaraan</li>
                    </ul>
                    <a class="link" href="https://id.wikipedia.org/wiki/Sekolah_dasar" target="_blank">Selengkapnya</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <h3>Form Pengisian Survei</h3>
                    <button class="btn-block" id="btn">Klik Untuk Mengisi Survei</button>
                    <hr>
                    <form class="form-horizontal form">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Nama:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control input" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Umur:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="umur">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Pekerjaan:</label>
                            <div class="col-sm-9">
                                <select name="pekerjaan" class="form-control krj">
                                    <option value=" ">Pilih</option>
                                    <option value="orangtua">Orang Tua Siswa</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="Guru">Guru</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jawaban"class="control-label col-sm-3">Yang anda tahu tentang SD:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control input" id="jawaban" name="jawaban"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" id="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2021 | by Ainan Fajar</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $('#submit').click(function(){
                alert('Survei Anda Berhasil!');
            });

            $('.input').focus(function(){
                $(this).css('background', 'lightgrey')
            });

            $('.input').blur(function(){
                $(this).css('background', 'white')
            });
            
            $('.form').hide();

            $('#btn').click(function(){
                $('.form').toggle();
            });
        });
    </script>
</body>

</html>