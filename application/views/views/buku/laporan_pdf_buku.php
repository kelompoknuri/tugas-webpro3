<!-- <!DOCTYPE html>
<html lang="en"><head>
    <title>Print Data pesanan pdf</title>
</head><body>
    <h2 class="mb-5"style="text-align:center;">Laporan Data Buku Perpustakaan Online</h2>
    <table width="100%">
            <tr align="center">
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Terbit</th>
                <th>Tahun Penerbit</th>
                <th>ISBN</th>
                <th>STOK</th>
            </tr>
        <?php
        $no=1;
        foreach($buku as $b) : ?> -->
        <!-- <tr> -->
            <!-- <th scope="row"><?= $no++ ?></th>
            <td><?= $b->judul_buku   ?></td>
            <td><?= $b->pengarang ?></td>
            <td><?= $b->penerbit ?></td>
            <td><?= $b->tahun_terbit ?></td>
            <td><?= $b->isbn?></td>
            <td><?= $b->stok ?></td> -->
         <!-- </tr> -->
        <!-- <?php endforeach; ?>
    </table>
</body></html> -->

<!DOCTYPE html>
<html lang="en"><head>
    <title>Print Data pesanan pdf</title>
</head><body>
    <h2 class="mb-5"style="text-align:center;">Tampil Seluruh pesanan</h2>
    <table width="100%">
    <tr align="center" style="1px solid #000;">
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Terbit</th>
                <th>Tahun Penerbit</th>
                <th>ISBN</th>
                <th>STOK</th>
            </tr>

            <?php 
            $no=1;
            foreach($buku as $b) : ?>
            
            <tr align="center">
                
                <td><?= $no++ ?></td>
                <td><?php echo $b->judul_buku ?></td>
                <td><?php echo $b->pengarang ?></td>
                <td><?php echo $b->penerbit ?></td>
                <td><?php echo $b->tahun_terbit ?></td>
                <td><?php echo $b->isbn ?></td>
                <td><?php echo $b->stok ?></td>
            

            <?php endforeach; ?>
    </table>
</body></html>