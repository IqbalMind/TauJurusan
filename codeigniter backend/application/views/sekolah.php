<div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Sekolah</h4>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $jurusan; ?></h6>
                                <div class="row">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sekolah</th>
                                            <th>Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i=1; foreach ($get_data as $row) : ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row->nama_sekolah;?></td>
                                            <td><?php echo $row->jenis;?></td>
                                        </tr>
                                <?php $i++; endforeach;?>
                                    </tbody>
                                
                                </table>
                            </div>
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
                        <p class="card-text">Kembali Kedetail</p>
                        <a href="<?php echo base_url("detail/").$jurusan?>" class="btn btn-primary" type="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>