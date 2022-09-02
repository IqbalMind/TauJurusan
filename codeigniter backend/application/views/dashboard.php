<div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Ulasan</h4>
                                <h6 class="text-muted card-subtitle mb-2"></h6>
                                <div class="row">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Ulasan</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i=1; foreach ($get_data as $row) : ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row->nama;?></td>
                                            <td><?php echo $row->ulasan;?></td>
                                            <td><?php echo $row->jurusan;?></td>
                                            <td>
                                            <?php 
                                            $app = $row->approve;
                                            if($app == 0){?>
                                            <div class="btn-group" role="group">
                                            <form action="<?php echo base_url('dashboard/approve') ?>" method="post">
                                                <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                                <input type="hidden" name="id_ulasan" value="<?php echo $row->id_ulasan;?>">
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                                            </form>
                                            <form action="<?php echo base_url('dashboard/reject') ?>" method="post">
                                                <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                                <input type="hidden" name="id_ulasan" value="<?php echo $row->id_ulasan;?>">
                                                <input type="hidden" name="status" value="1=0">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                            </form>
                                            </div>
                                            <?php }else{ ?>
                                                <a class="btn btn-success" href="#"><i class="fa fa-check"></i></a>
                                            <?php } ?>
                                            </td>
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
                        <h4 class="card-title">Daftar Ulasan</h4>
                        <p class="card-text">Hanya Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>