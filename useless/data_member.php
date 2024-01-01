<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data_member.css">
    <title>Data Buku</title>
</head>

<body>
    <?php
    include_once('config.php');
    ?>
    <nav>
        <a href="peminjaman.php?page=peminjaman">Peminjaman</a>
        <a href="buku.php?page=buku">Buku</a>
        <a href="data_member.php">Data Member</a>
        <div id="indicator"> </div>
    </nav>
    <div class="konten">
        <center>
            <h2>Data Peminjaman Buku</h2>
            <table border="1" width="90%" cellspacing="0">
                <tr>
                    <th align="center">ID Peminjaman</th>
                    <th align="center">judul Buku</th>
                    <th align="center">Nama</th>
                    <th align="center">Nim</th>
                    <th align="center">Tanggal Pinjam</th>
                    <th align="center">Tanggal kembali</th>
                    <th align="center">Keterangan</th>
                    <th align="center">Action</th>
                </tr>
                <?php
                $cari = "select * from peminjaman";
                $result = mysqli_query($conn, $cari);
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $data[0] ?>
                        </td>
                        <td>
                            <?php echo $data[1] ?>
                        </td>
                        <td>
                            <?php echo $data[2] ?>
                        </td>
                        <td>
                            <?php echo $data[3] ?>
                        </td>
                        <td>
                            <?php echo $data[4] ?>
                        </td>
                        <td>
                            <?php echo $data[5] ?>
                        </td>
                        <td>
                            <?php echo $data[6] ?>
                        </td>
                        <td>
                            <?php echo $data[7] ?>
                        </td>
                        <td>
                            <a href="data_member_hapus.php?id=<?php echo $data['id_peminjaman']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </center>
    </div>
    <div class="konten">
        <center>
            <h2>Data Member</h2>
            <table border="1" width="90%" cellspacing="0">
                <tr>
                    <th align="center">ID Member</th>
                    <th align="center">Nama</th>
                    <th align="center">Nim</th>
                    <th align="center">Email</th>
                </tr>
                <?php
                $cari = "select * from member";
                $result = mysqli_query($conn, $cari);
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $data[0] ?>
                        </td>
                        <td>
                            <?php echo $data[1] ?>
                        </td>
                        <td>
                            <?php echo $data[2] ?>
                        </td>
                        <td>
                            <?php echo $data[3] ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </center>
        <center>
            <button class="button-16" role="button"><a href="member_tambah.php">Add Member</a></button>
        </center>
    </div>

    <div class="kaki">
    © 2023 Ivanda Gabrila
    </div>

</body>

</html>