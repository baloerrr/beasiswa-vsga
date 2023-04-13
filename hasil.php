<!DOCTYPE html>
<html>

<?php require "./components/head.php" ?>

<body>
    <?php require "./components/navbar.php" ?>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Hasil Pengisian Form Beasiswa
                        <!-- Header -->
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php
                            // Koneksi ke database
                            include('koneksi.php');

                            // Data dari form
                            $nama           = $_POST['nama'];
                            $email          = $_POST['email'];
                            $telp           = $_POST['telp'];
                            $smtr           = $_POST['smtr'];
                            $ipk            = $_POST['ipk'];
                            $pilihan        = $_POST['pilihan'];
                            $berkas         = $_POST['berkas'];
                            $status         = "Belum diverifikasi";

                            // Query insert ke database
                            $query          = "INSERT INTO beasiswa (id, nama, email, telp, smtr, ipk, pilihan, berkas, status_ajuan) VALUES ('','$nama', '$email', '$telp', '$smtr', '$ipk', '$pilihan', '$berkas', '$status')";

                            // Pengecekan apakah data berhasil masuk atau tidak
                            if ($con->query($query)) {
                                //  header("location:hasil.php");
                            }
                            //else{
                            //  echo "Data Gagal Disimpan!";
                            //}
                            echo "<tr>";
                            echo "<td>Nama</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $nama . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Email</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $email . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Nomor Handphone</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $telp . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Semester</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $smtr . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>IPK Terakhir</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $ipk . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Pilihan Beasiswa</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $pilihan . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Berkas</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $berkas . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Status</td>";
                            echo " <td>:</td>";
                            echo "<td>" . $status . "</td>";
                            echo "</tr>";
                            ?>
                        </table>
                    </div>
                </div>
            </div>
</body>

</html>