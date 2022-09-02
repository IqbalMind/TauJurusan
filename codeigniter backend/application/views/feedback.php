<div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Ulasan</h4>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $jurusan; ?></h6>
                                <div class="row">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Ulasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i=1; foreach ($get_data as $row) : ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row->nama;?></td>
                                            <td><?php echo $row->ulasan;?></td>
                                        </tr>
                                <?php $i++; endforeach;?>
                                    </tbody>
                                
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($this->session->userdata('status')=='1'){ ?>
                <div class="row">
                    <div class="col">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title">Buat Ulasan Jurusan</h4>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $jurusan; ?></h6>
                                <div class="row">
                                <form action="<?php echo base_url("feedback/submit")?>" method="POST">
                                    <div class="form-group">
                                    <?php   
                                        if($this->session->flashdata('error') !='')
                                        {
                                            echo '<div class="alert alert-danger" role="alert">';
                                            echo $this->session->flashdata('error');
                                            echo '</div>';
                                        }
                                    ?>
                                    <input type="hidden" name="user" value="<?php echo $this->session->userdata('id');?>">
                                    <input type="hidden" name="jurusan" value="<?php echo $jurusan; ?>">
                                        <label for="ulasan" class="text-uppercase">Ulasan</label>
                                        <textarea class="form-control" name="ulasan" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="row">
                    <div class="col">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title">Buat Ulasan Aplikasi</h4>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $jurusan; ?></h6>
                                <div class="row">
                                
                                <form action="<?php echo base_url("feedback/submit")?>" method="POST">
                                    <div class="form-group">
                                    <?php   
                                        if($this->session->flashdata('error') !='')
                                        {
                                            echo '<div class="alert alert-danger" role="alert">';
                                            echo $this->session->flashdata('error');
                                            echo '</div>';
                                        }
                                    ?>
                                   <input type="hidden" name="user" value="<?php echo $this->session->userdata('id');?>">
                                    <input type="hidden" name="jurusan" value="ulasan">
                                        <label for="ulasan" class="text-uppercase">Ulasan</label>
                                        <textarea class="form-control" name="ulasan" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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