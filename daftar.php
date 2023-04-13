<!DOCTYPE html>
<html>

<?php require "./components/head.php" ?>


<body>
    <?php require "./components/navbar.php" ?>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Registrasi Beasiswa</h3>
                        <!-- Header -->
                    </div>
                    <div class="card-body">
                        <form action="hasil.php" method="POST">
                            <!-- Form Action -->

                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required> <!-- Nama -->
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required>
                                <!-- Email -->
                            </div>

                            <div class="form-group">
                                <label>Nomor Handphone</label>
                                <input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor Handphone" required> <!-- Telp -->
                            </div>

                            <div class="form-group">
                                <label>Semester Saat Ini</label>
                                <select class="form-select" name="smtr">
                                    <!-- Semester -->
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>IPK Terakhir</label>
                                <div class="input-group mb-3">
                                    <input type="text" placeholder="Masukkan IPK Terakhir" name="ipk" class="form-control" id="ipk" readonly required> <!-- IPK -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="cekIpk()">Cek
                                        IPK</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pilihan" id="pilihan">Pilihan Beasiswa</label>
                                <select class="form-select" name="pilihan" id="beasiswa" disabled required>
                                    <!-- Beasiswa -->
                                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                    <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="upload" id="upload">Upload Berkas Syarat</label>
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="berkas" id="berkas" disabled required>
                                    <!-- Berkas -->
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" id="submit" disabled>Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>

                            <div class="mt-5" id="alert">

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function randomIpk(min, max, dec) {
            const str = (Math.random() * (max - min) + min).toFixed(dec);
            return parseFloat(str);
        }

        function cekIpk() {
            var nilai = randomIpk(1, 4, 2)
            document.getElementById("ipk").value = nilai;
            let beasiswa = document.getElementById("beasiswa")
            let berkas = document.getElementById("berkas")
            let submit = document.getElementById("submit")
            let pilihan = document.getElementById("pilihan")
            let upload = document.getElementById("upload")
            let alert = document.getElementById("alert")

            if (nilai < 3) {
                beasiswa.disabled = true;
                beasiswa.style.display = "none"
                berkas.style.display = "none";
                submit.style.display = "none";
                pilihan.style.display = "none"
                upload.style.display = "none"
                alert.innerText = "Maaf Anda tidak bisa mendafta dikarenakan IPK Anda Dibawah 3"

            } else {
                document.getElementById("beasiswa").disabled = false;
                document.getElementById("beasiswa").focus();
                document.getElementById("berkas").disabled = false;
                document.getElementById("submit").disabled = false;
                alert.style.display = "none"
                beasiswa.style.display = "block"
                berkas.style.display = "block";
                submit.style.display = "block";
                pilihan.style.display = "block"
                upload.style.display = "block"
            }
        }
    </script>
</body>

</html>