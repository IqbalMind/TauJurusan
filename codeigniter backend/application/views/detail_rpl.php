<div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <h4 class="card-title">Rekayasa Perangkat Lunak</h4>
                                    <h6 class="text-muted card-subtitle mb-2">RPL</h6>
                                    <p class="card-text">Rekayasa Perangkat Lunak (RPL) merupakan sebuah jurusan yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col"><a href="<?php echo base_url('kd/rpl')?>" class="btn btn-info">Kompetensi dasar</a>
                        <a href="<?php echo base_url('prospek/rpl')?>" class="btn btn-warning">Prospek Kerja</a></div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <h4 class="card-title">Ulasan</h4>
                                    <h6 class="text-muted card-subtitle mb-2">Pendapat para pengguna</h6>
                                    <p class="card-text">Tuliskan Pendapat kalian terhadap Jurusan ini</p>
                                    <form action="<?php echo base_url('feedback')?>" method="GET">
                                        <input type="hidden" name="jurusan" value="rpl">
                                        <button class="btn btn-primary" type="submit">Lihat sekarang</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card-header" style="background: url('<?php echo base_url()?>assets/img/slider-2.jpg');background-size: cover;"></div>
                        <div class="card-body">
                            <h4 class="card-title">Daftar Sekolah</h4>
                            <p class="card-text">Yang memiliki jurusan tersebut</p>
                            <form action="<?php echo base_url('sekolah')?>" method="GET">
                                <input type="hidden" name="jurusan" value="rpl">
                                <button class="btn btn-primary" type="submit">Cek sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>