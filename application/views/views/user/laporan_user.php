<!-- Begin Page Content -->
<div class="container-fluid"> <?= $this->session->flashdata('pesan'); ?> <div class="row">
        <div class="col-lg-12"> <?php if(validation_errors()){?> <div class="alert alert-danger" role="alert">
                <?= validation_errors();?> </div> <?php }?> <?= $this->session->flashdata('pesan'); ?>
            73
            <a href="<?= base_url('laporan/cetak_laporan_buku'); ?>" class="btn btn-primary mb-3">
            <i class="fas fa-print"></i> Print</a> 
            <a href="<?= base_url('laporan/laporan_pdf_user'); ?>"
                class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>

            <a href="<?= base_url('laporan/export_excel_user'); ?>" class="btn btn-success mb-3"><i
                class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role_id</th>
                    </tr>
                </thead>
                <tbody> <?php $a = 1; foreach ($getuser as $user) { ?> <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $user['nama']; ?></td>
                        <td><?= $user['alamat']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td>
                            <picture >
                                <source srcset="" type="image/svg+xml">
                                <img width="60"src="<?= base_url('assets/img/profile/') . $user['image'];?>" class="img-fluid img-thumbnail"  alt="...">
                            </picture></td>
                        </td>
                        <td><?= $user['role_id']; ?></td>
                    </tr> <?php } ?> </tbody>
            </table>
        </div>
    </div>
</div> <!-- /.container-fluid -->
</div> <!-- End of Main Content -->