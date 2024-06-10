<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
        <center><h1>Bus</h1></center>
        <h3>Tabel bus </h3>
        <table>
            <thead>
                <tr>
                    <th>ID bus</th>
                    <th>nomer plat</th>
                    <th>kapasitas</th>
                    <th>merek</th>
                </tr>
            </thead>
            <?php
                include 'koneksi.php';		
                $sql = 'SELECT  * FROM bus';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
            {?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Nomor_Plat'] ?></td>
                    <td><?php echo $row['Kapasitas'] ?></td>
                    <td><?php echo $row['Merek'] ?></td>
                </tr>
            </tbody>
            <?php
            }?>
        </table>
        <h3>Tabel detail pesanan </h3>
        <table>
            <thead>
                <tr>
                    <th>ID pesanan</th>
                    <th>id pemesan</th>
                    <th>id bus</th>
                    <th>nomer kursi</th>
                </tr>
            </thead>
            <?php
                $sql = 'SELECT  * FROM detail_pemesanan';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Detail'] ?></td>
                    <td><?php echo $row['ID_Pemesanan'] ?></td>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Nomor_Kursi'] ?></td>
                </tr>
            </tbody>
            <?php
            }?>
        </table>
        <h3>Tabel jadwal </h3>
        <table>
            <thead>
                <tr>
                    <th>ID ID_Jadwal</th>
                    <th>id bus</th>
                    <th>Tujuan</th>
                    <th>tanggal berangkat</th>
                    <th>waktu berangkat</th>
                </tr>
            </thead>
            <?php
                include 'koneksi.php';		
                $sql = 'SELECT  * FROM jadwal';
         
           $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
            {?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Jadwal'] ?></td>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Tujuan'] ?></td>
                    <td><?php echo $row['Tanggal_Berangkat'] ?></td>
                    <td><?php echo $row['Waktu_Berangkat'] ?></td>
                </tr>
            </tbody>
            <?php
            }?>
        </table>
        <h3>Tabel pelanggan </h3>
        <table>
            <thead>
                <tr>
                    <th>ID pelanggan</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>tanggal lahir</th>
                    <th>nomor telpon</th>
                    <th>setatus keanggotaan</th>
                    <th>tanggal bergabung</th>
                </tr>
            </thead>
            <?php		
                $sql = 'SELECT  * FROM pelanggan';
         
           $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
            {?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Pelanggan'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Alamat'] ?></td>
                    <td><?php echo $row['Tanggal_Lahir'] ?></td>
                    <td><?php echo $row['Nomor_Telepon'] ?></td>
                    <td><?php echo $row['Status_Keanggotaan'] ?></td>
                    <td><?php echo $row['Tanggal_Bergabung'] ?></td>
                </tr>
            </tbody>
            <?php
            }?>
        </table>
        <h3>Tabel pemesanan </h3>
        <table>
            <thead>
                <tr>
                    <th>id pemesanan</th>
                    <th>id pelanggan</th>
                    <th>id jadwal</th>
                    <th>tanggal pesanan</th>
                    <th>jumlah tiket</th>
                </tr>
            </thead>
            <?php		
                $sql = 'SELECT  * FROM pemesanan';
         
           $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
            {?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Pemesanan'] ?></td>
                    <td><?php echo $row['ID_Pelanggan'] ?></td>
                    <td><?php echo $row['ID_Jadwal'] ?></td>
                    <td><?php echo $row['Tanggal_Pemesanan'] ?></td>
                    <td><?php echo $row['Jumlah_Tiket'] ?></td>
                </tr>
            </tbody>
            <?php
            }?>
        </table>

   </body>
</html>