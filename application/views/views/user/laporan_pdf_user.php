
<!DOCTYPE html>
<html lang="en"><head>
    <title>Print Data pesanan pdf</title>
</head><body>
    <h2 class="mb-5"style="text-align:center;">Tampil User</h2>
    <table width="100%">
    <tr align="center" style="1px solid #000;">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>

            <?php 
            $no=1;
            foreach($user as $u) : ?>
            
            <tr align="center">
                
                <td><?= $no++ ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->email ?></td>
            <?php endforeach; ?>
    </table>
</body></html>