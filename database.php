<!DOCTYPE html>
<html>

<?php require "./components/head.php" ?>

<body>
    <?php require "./components/navbar.php" ?>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Handphone</th>
                            <th scope="col">Semester</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Pilihan Beasiswa</th>
                            <th scope="col">Berkas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $no = 1;
                        $query = mysqli_query($con, "SELECT * FROM beasiswa");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <?php echo $row['nama'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['telp'] ?>
                                </td>
                                <td>
                                    <?php echo $row['smtr'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ipk'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pilihan'] ?>
                                </td>
                                <td>
                                    <?php echo $row['berkas'] ?>
                                </td>
                                <td id="status">
                                    <?php echo $row['status_ajuan'] ?>
                                </td>
                                <td>
                                    <button id="button" class="btn btn-primary" onclick="verifikasiStatus(this)" type="submit">Verifikasi</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        function verifikasiStatus(button) {
            const row = button.parentNode.parentNode;
            const status = row.cells[8];
            console.log(status);
            status.innerText = "Terverifikasi"
        }
    </script>
</body>

</html>