<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expire:0");
?>

<h3><center>Data Tampil Semua User</center></h3>
<br>
<table class="table-data" style="align-content: center;text-align: center;align-items: center;>
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
                <tbody> <?php $a = 1; foreach ($user as $user) { ?> <tr>
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