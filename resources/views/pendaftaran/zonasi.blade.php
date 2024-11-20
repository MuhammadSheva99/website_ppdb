<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Zonasi</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 50%; /* Mengatur lebar input field menjadi 90% */
            padding: 5px;
            margin-bottom: 5px;
        }
        button {
            background-color: #2c3e50;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #1a252f;
        }
        .additional-section {
            display: none;
        }

        .image-preview-container img {
            display: none;
            width: 150px;
            height: 150px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Zonasi</h1>
        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: flex; justify-content: space-between;">
                <!-- Kolom Kiri -->
                <div style="flex: 1; margin-right: 20px;">
                    <label>Nama Siswa:</label>
                    <input type="text" name="nama" maxlength="70" style="width: 350px; font-size: 20px; margin-bottom: 5px" oninput="validateInput(this)"><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 20px;">
                            <label>NISN:</label>
                    <input type="text" name="nisn" maxlength="10" style="width: 100px; margin-bottom: 5px" oninput="validatenumber(this)"><br>
                        </div>
                        <div>
                            <label>Jenis Kelamin:</label>
                    <select name="jenis_kelamin" required style="width: 150px; margin-bottom: 5px;">
                        <option value="Tidak ada data">Tidak ada data</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select><br>
                        </div>
                    </div><br>
        
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 20px;">
                            <label>Tempat Lahir:</label>
                            <select id="tempat_lahir" name="tempat_lahir" required style="width: 150px;">
                                <option value="">--Pilih Kota--</option>
                            </select>
                        </div>
                        <div>
                            <label>Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" required style="width: 150px; margin-bottom: 5px;"><br>
                
                        </div>
                    </div><br>
        
        
                    <label>Alamat Domisili:</label>
                    <input type="text" name="alamat_domisili" maxlength="150" style="width: 350px; margin-bottom: 5px;"><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>RT:</label>
                            <input type="text" name="rt" maxlength="3" style="width: 30px; margin-bottom: 5px;" oninput="validatenumber(this)">
                        </div>
                        <div style="margin-right: 10px;">
                            <label>RW:</label>
                            <input type="text" name="rw" maxlength="3" style="width: 30px; margin-bottom: 5px;" oninput="validatenumber(this)">
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kelurahan:</label>
                            <input type="text" name="kelurahan" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                         </div>
                        <div style="margin-right: 10px;">
                            <label>Kecamatan:</label>
                            <input type="text" name="kecamatan" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kota:</label>
                    <input type="text" name="kota" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                         </div>
                        <div style="margin-right: 10px;">
                            <label>Provinsi:</label>
                            <input type="text" name="provinsi" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                
                        </div>
                    </div><br>

                    <label>Telepon:</label>
                    <input type="text" name="telepon" maxlength="14" required style="width: 150px; margin-bottom: 5px;" oninput="validatenumber(this)"><br>
                </div>
                
               <!-- Kolom Tengah -->
               <div style="flex: 1; margin-right: 20px;">
                <label>Nama Orang Tua/Wali:</label>
                <input type="text" name="nama_orang_tua" maxlength="70"  style="width: 350px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                
                <label>Alamat Orang Tua/Wali:</label>
                <input type="text" name="alamat_orang_tua" maxlength="150" required style="width: 350px; margin-bottom: 5px;"><br>
    
                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <label>RT:</label>
                        <input type="text" name="rt_orang_tua" maxlength="3" style="width: 30px; margin-bottom: 5px;" oninput="validatenumber(this)">
                    </div>
                    <div style="margin-right: 10px;">
                        <label>RW:</label>
                        <input type="text" name="rw_orang_tua" maxlength="3" style="width: 30px; margin-bottom: 5px;" oninput="validatenumber(this)">
                    </div>
                </div><br>
                
                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <label>Kelurahan:</label>
                        <input type="text" name="kelurahan_orang_tua" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                     </div>
                    <div style="margin-right: 10px;">
                        <label>Kecamatan:</label>
                        <input type="text" name="kecamatan_orang_tua" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                    </div>
                </div><br>
                
                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <label>Kota:</label>
                <input type="text" name="kota_orang_tua" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
                     </div>
                    <div style="margin-right: 10px;">
                        <label>Provinsi:</label>
                        <input type="text" name="provinsi_orang_tua" maxlength="50" style="width: 150px; margin-bottom: 5px;" oninput="validateInput(this)"><br>
            
                    </div>
                </div><br>
                <label>No.Telp Orang tua/Wali:</label>
                <input type="text" name="telepon_orang_tua" maxlength="14" required  style="width: 100px; margin-bottom: 5px;" oninput="validatenumber(this)"><br>
            </div>
        
            <script>
                function validateInput(input) {
                         // Hanya mengizinkan huruf, spasi, dan karakter tertentu seperti dash
                         input.value = input.value.replace(/[^a-zA-Z\s'-]/g, '');
                    } 
                
                function validatenumber(input) {
                        // Hanya mengizinkan angka (0-9)
                        input.value = input.value.replace(/[^0-9]/g, '');
                    }        
                </script>

                <!-- Kolom Kanan -->
                <div style="flex: 1;">
                    <!-- Bagian Unggahan -->
                    <div style="margin-top: 20px;">
                        <label>Unggah Foto Siswa (PDF/JPG/PNG):</label>
                        <input type="file" name="fs" accept="image/*" onchange="previewImage(event, 'fsPreview', 'fsDelete', true)" id="fsInput">
                        <br>
                        <img id="fsPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="fsDelete" style="display:none;" onclick="deleteImage('fsInput', 'fsPreview', 'fsDelete', true)">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Kartu Identitas Anak (PDF/JPG/PNG):</label>
                        <input type="file" name="kia" accept="image/*" onchange="previewImage(event, 'kiaPreview', 'kiaDelete', false)" id="kiaInput">
                        <br>
                        <img id="kiaPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="kiaDelete" style="display:none;" onclick="deleteImage('kiaInput', 'kiaPreview', 'kiaDelete', false)">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Kartu Keluarga (PDF/JPG/PNG):</label>
                        <input type="file" name="kk_perpindahan" accept="image/*" onchange="previewImage(event, 'kkPreview', 'kkDelete', false)" id="kkInput">
                        <br>
                        <img id="kkPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="kkDelete" style="display:none;" onclick="deleteImage('kkInput', 'kkPreview', 'kkDelete', false)">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Surat Keterangan Lulus (PDF/JPG/PNG):</label>
                        <input type="file" name="skl_perpindahan" accept="image/*" onchange="previewImage(event, 'sklPreview', 'sklDelete', false)" id="sklInput">
                        <br>
                        <img id="sklPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="sklDelete" style="display:none;" onclick="deleteImage('sklInput', 'sklPreview', 'sklDelete', false)">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Surat Perpindahan Orang Tua (KIP) (PDF/JPG/PNG):</label>
                        <input type="file" name="spot_perpindahan" accept="image/*" onchange="previewImage(event, 'spotPreview', 'spotDelete', false)" id="spotInput">
                        <br>
                        <img id="spotPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="spotDelete" style="display:none;" onclick="deleteImage('spotInput', 'spotPreview', 'spotDelete', false)">Hapus Gambar</button>
                        <br><br>
                    </div>
                    <script>
                        // Variabel untuk menyimpan URL foto siswa
                        let uploadedImageURL = ""; // URL Foto Siswa
                        let kkImageURL = ""; // URL Foto KK
                        let kiaImageURL = ""; // URL Foto KIA
                        let sklImageURL = ""; // URL Foto Surat Keterangan Lulus
                        let spotImageURL = ""; // URL Foto Surat Perpindahan Orang Tua
                // Fungsi untuk mempreview gambar yang diunggah
                function previewImage(event, previewId, deleteButtonId, isFotoSiswa) {
                        const input = event.target;
                        const reader = new FileReader();

                        reader.onload = function() {
                            if (isFotoSiswa) {
                                uploadedImageURL = reader.result;
                            } else if (previewId === 'kkPreview') {
                                kkImageURL = reader.result;
                            } else if (previewId === 'kiaPreview') {
                                kiaImageURL = reader.result;
                            } else if (previewId === 'sklPreview') {
                                sklImageURL = reader.result;
                            } else if (previewId === 'spotPreview') {
                                spotImageURL = reader.result;
                            }

                            const preview = document.getElementById(previewId);
                            preview.src = reader.result;
                            preview.style.display = 'block';

                            const deleteButton = document.getElementById(deleteButtonId);
                            deleteButton.style.display = 'inline';
                        };

                        reader.readAsDataURL(input.files[0]);
                    }

                    function deleteImage(inputId, previewId, deleteButtonId, isFotoSiswa) {
                        const input = document.getElementById(inputId);
                        const preview = document.getElementById(previewId);
                        const deleteButton = document.getElementById(deleteButtonId);

                        input.value = '';
                        preview.src = '';
                        preview.style.display = 'none';
                        deleteButton.style.display = 'none';

                        if (isFotoSiswa) uploadedImageURL = "";
                        if (previewId === 'kkPreview') kkImageURL = "";
                        if (previewId === 'kiaPreview') kiaImageURL = "";
                        if (previewId === 'sklPreview') sklImageURL = "";
                        if (previewId === 'spotPreview') spotImageURL = "";
                    }
                </script>
        
                <!-- Field untuk Input Lokasi -->

                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 10px;">
                        <label for="lat_rumah">Latitude Rumah:</label>
                        <input type="text" id="lat_rumah" name="lat_rumah" required style="width: 150px; margin-bottom: 5px;"><br>                            
                     </div>
                    <div style="margin-right: 10px;">
                        <label for="lon_rumah">Longitude Rumah:</label>
                        <input type="text" id="lon_rumah" name="lon_rumah" required style="width: 150px; margin-bottom: 5px;"><br>
                    </div>
                </div><br>

                   <!-- Hidden field untuk latitude dan longitude sekolah -->
        <input type="hidden" id="lat_sekolah" name="lat_sekolah" value="-6.200000">
        <input type="hidden" id="lon_sekolah" name="lon_sekolah" value="106.816666">

                    <label>Jarak Rumah ke Sekolah:</label>
                    <input type="text" id="jarak_rumah_sekolah" name="jarak_rumah_sekolah" required style="width: 150px; margin-bottom: 5px;" readonly><br>
                </div>
            </div>
                    <!-- Tambahkan teks Syarat dan Ketentuan di atas checkbox -->
            <div style="margin-bottom: 10px;">
                <a href="#" onclick="showTermsPopup()" style="text-decoration: underline; color: blue;">Syarat dan Ketentuan</a>
            </div>

            <!-- Pop-up Syarat dan Ketentuan -->
            <div id="termsPopup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                <div style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; width: 80%; max-width: 600px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h3 style="text-align: center;">Syarat dan Ketentuan PPDB</h3>
                    
                    <!-- Syarat dan ketentuan dalam kolom bergulir -->
                    <div style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
                        <p>1. Calon peserta didik harus memenuhi semua persyaratan yang ditetapkan oleh sekolah.</p>
                        <p>2. Informasi yang diberikan harus benar dan sesuai dengan data asli yang dimiliki oleh calon peserta didik.</p>
                        <p>3. Kelalaian atau kesalahan dalam pengisian data dapat mengakibatkan penolakan atau pembatalan pendaftaran.</p>
                        <p>4. Semua dokumen yang diunggah harus dalam format yang sesuai (PDF, JPG, atau PNG) dan jelas.</p>
                        <p>5. Jarak antara rumah dan sekolah akan dihitung berdasarkan data yang diberikan dan dapat mempengaruhi penerimaan.</p>
                        <p>6. Dengan menyetujui, calon peserta didik atau wali murid menyatakan bahwa mereka bertanggung jawab penuh atas informasi yang diberikan.</p>
                    </div>
                    
                    <!-- Checkbox dan teks persetujuan -->
                    <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <input type="checkbox" id="agreeCheckbox">
                        <label for="agreeCheckbox">Saya setuju dengan syarat dan ketentuan yang ada</label>
                    </div>
                    
                    <!-- Tombol tutup -->
                    <button onclick="hideTermsPopup()" style="margin-top: 15px; padding: 10px; width: 100%;">Tutup</button>
                </div>
            </div>
            
            <script>
                function hideTermsPopup() {
                    document.getElementById("termsPopup").style.display = "none";
                }
            </script>
           
<!-- Checkbox Setuju -->
<div style="display: flex; align-items: center;">
    <div style="margin-right: 10px;">
        <div class="checkbox-container"></div>
        <input type="checkbox" id="terms" name="terms" required onchange="toggleSubmitButton()">
        <label for="terms">Saya setuju dengan syarat dan ketentuan.</label>
    </div>
</div>

  <!-- Tambahkan Tombol Preview -->
  <button type="button" onclick="showPreview()" style="width: 250px; padding: 10px; font-size: 16px; margin-top: 10px;">Preview</button>

<!-- Tombol Daftar -->
<div style="margin-top: 10px;">
    <button id="submit-btn" type="submit" style="width: 250px; padding: 10px; font-size: 16px;" disabled>Daftar</button>
</div>
    </form>
    <!-- Pop-up Pratinjau -->
    <div id="previewPopup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; width: 80%; max-width: 600px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h3 style="text-align: center;">Preview Data Pendaftaran</h3>

        <div id="previewContent" style="text-align: left; font-size: 16px; margin-top: 15px;">
        <!-- Tempat untuk menampilkan pratinjau data -->
        </div>

        <button onclick="hidePreview()" style="margin-top: 15px; padding: 10px; width: 100%;">Tutup</button>
        </div>
        </div>

        <script>
        function showPreview() {
        // Mengambil data dari form
        const nama = document.querySelector('input[name="nama"]').value || "Tidak ada data";
            const nisn = document.querySelector('input[name="nisn"]').value || "Tidak ada data";
            const jenisKelamin = document.querySelector('select[name="jenis_kelamin"]').value || "Tidak ada data";
            const tempatLahir = document.querySelector('select[name="tempat_lahir"]').value || "Tidak ada data";
            const tanggalLahir = document.querySelector('input[name="tanggal_lahir"]').value || "Tidak ada data";
            const alamatDomisili = document.querySelector('input[name="alamat_domisili"]').value || "Tidak ada data";
            const rt = document.querySelector('input[name="rt"]').value || "Tidak ada data";
            const rw = document.querySelector('input[name="rw"]').value || "Tidak ada data";
            const kelurahan = document.querySelector('input[name="kelurahan"]').value || "Tidak ada data";
            const kecamatan = document.querySelector('input[name="kecamatan"]').value || "Tidak ada data";
            const kota = document.querySelector('input[name="kota"]').value || "Tidak ada data";
            const provinsi = document.querySelector('input[name="provinsi"]').value || "Tidak ada data";
            const telepon = document.querySelector('input[name="telepon"]').value || "Tidak ada data";
            const orangTua = document.querySelector('input[name="nama_orang_tua"]').value || "Tidak ada data";
            const alamatOrangtua = document.querySelector('input[name="alamat_orang_tua"]').value || "Tidak ada data";
            const rtOrangtua = document.querySelector('input[name="rt_orang_tua"]').value || "Tidak ada data";
            const rwOrangtua = document.querySelector('input[name="rw_orang_tua"]').value || "Tidak ada data";
            const kelurahanOrangtua = document.querySelector('input[name="kelurahan_orang_tua"]').value || "Tidak ada data";
            const kecamatanOrangtua = document.querySelector('input[name="kecamatan_orang_tua"]').value || "Tidak ada data";
            const kotaOrangtua = document.querySelector('input[name="kota_orang_tua"]').value || "Tidak ada data";
            const provinsiOrangtua = document.querySelector('input[name="provinsi_orang_tua"]').value || "Tidak ada data";
            const teleponOrangtua = document.querySelector('input[name="telepon_orang_tua"]').value || "Tidak ada data";
            const jarakRumahSekolah = document.getElementById("jarak_rumah_sekolah").value || "Tidak ada data";
        // Buat dokumen baru di tab atau jendela baru
        const newWindow = window.open("", "_blank", "width=800,height=600");

        // Isi dokumen baru dengan data yang diinputkan
        newWindow.document.write(`
               <!DOCTYPE html>
            <html>
            <head>
                <title>Preview Formulir</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                    }
                    .header {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .header-content {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 20px; /* Jarak antar elemen */
                    }
                    .logo {
                        width: 50px;
                    }
                    .title {
                        text-align: center;
                    }
                    hr {
                        border: 2px solid black; /* Ubah 2px menjadi ketebalan yang diinginkan */
                    }
                    .container {
                        display: flex;
                        align-items: flex-start;
                        padding: 20px;
                    }
                    .foto {
                        flex: 0 0 150px;
                        margin-right: 20px;
                        width: 150px;
                        height: 150px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: 2px solid #000;
                        font-size: 14px;
                        color: #666;
                        text-align: center;
                        background-color: #f0f0f0;
                    }
                    .foto img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                    .info {
                        flex: 1;
                        margin-left: 20px;
                    }
                    .info-row {
                        display: flex;
                    }
                    .info-row .label {
                        width: 150px; /* Lebar tetap untuk label */
                    }
                    .info-row .separator {
                        width: 10px; /* Lebar tetap untuk titik dua */
                    }
                    .info-row .value {
                        flex: 1;
                    }
                    .red-text {
                      color: red;
                    }

                    /* Styling untuk layout gambar dan keterangannya */
            .foto-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                gap: 20px;
                margin-top: 20px;
            }
            .foto-item {
                text-align: center;
                width: 150px;
            }
            .foto-item p {
                margin-top: 5px;
                font-weight: bold;
            }
                        /* Sembunyikan tombol cetak saat mencetak */
                    @media print {
                        button {
                            display: none;
                        }
                    }
                </style>
            </head>
            <body>
                <div class="header">
                    <div class="header-content">
                        <img src="{{ asset('images/1.png') }}" alt="Logo" class="logo">

                        <div class="title">
                            <h2>SMA MULTIMEDIA</h2>
                            <p>PPDB</p>
                            <h3>Formulir Daftar Ulang Peserta Didik Baru Tahun 2024 ( Jalur Zonasi )</h3>
                        </div>
                        <img src="{{ asset('images/1.png') }}" alt="Logo" class="logo">

                    </div>
                    <hr>
                </div> 
                <div class="container">
                    <div class="foto">
                        ${uploadedImageURL ? `<img src="${uploadedImageURL}" alt="Foto Siswa">` : '<p>Foto Siswa</p>'}
                    </div>
                     <div class="info">
                        <li><strong>Registrasi Peserta Didik</strong></li>
                        <div class="info-row"><div class="label">Nama Siswa</div><div class="separator">:</div><div class="value ${nama === 'Tidak ada data' ? 'red-text' : ''}">${nama}</div></div>
                        <div class="info-row"><div class="label">NISN</div><div class="separator">:</div><div class="value ${nisn === 'Tidak ada data' ? 'red-text' : ''}">${nisn}</div></div>
                        <div class="info-row"><div class="label">Jenis Kelamin</div><div class="separator">:</div><div class="value ${jenisKelamin === 'Tidak ada data' ? 'red-text' : ''}">${jenisKelamin}</div></div>
                        <div class="info-row"><div class="label">Tempat Lahir</div><div class="separator">:</div><div class="value ${tempatLahir === 'Tidak ada data' ? 'red-text' : ''}">${tempatLahir}</div></div>
                        <div class="info-row"><div class="label">Tanggal Lahir</div><div class="separator">:</div><div class="value ${tanggalLahir === 'Tidak ada data' ? 'red-text' : ''}">${tanggalLahir}</div></div>
                        <div class="info-row"><div class="label">Alamat Domisili</div><div class="separator">:</div><div class="value ${alamatDomisili === 'Tidak ada data' ? 'red-text' : ''}">${alamatDomisili}</div></div>
                        <div class="info-row"><div class="label">RT/RW</div><div class="separator">:</div><div class="value ${rt === 'Tidak ada data' ? 'red-text' : ''}">${rt}/${rw}</div></div>
                        <div class="info-row"><div class="label">Kelurahan</div><div class="separator">:</div><div class="value ${kelurahan === 'Tidak ada data' ? 'red-text' : ''}">${kelurahan}</div></div>
                        <div class="info-row"><div class="label">Kecamatan</div><div class="separator">:</div><div class="value ${kecamatan === 'Tidak ada data' ? 'red-text' : ''}">${kecamatan}</div></div>
                        <div class="info-row"><div class="label">Kota</div><div class="separator">:</div><div class="value ${kota === 'Tidak ada data' ? 'red-text' : ''}">${kota}</div></div>
                        <div class="info-row"><div class="label">Provinsi</div><div class="separator">:</div><div class="value ${provinsi === 'Tidak ada data' ? 'red-text' : ''}">${provinsi}</div></div>
                        <div class="info-row"><div class="label">Telepon</div><div class="separator">:</div><div class="value ${telepon === 'Tidak ada data' ? 'red-text' : ''}">${telepon}</div></div>
                       <li><strong>Biodata Orang Tua</strong></li>
                        <div class="info-row"><div class="label">Nama Orang Tua/Wali</div><div class="separator">:</div><div class="value  ${orangTua === 'Tidak ada data' ? 'red-text' : ''}">${orangTua}</div></div>
                        <div class="info-row"><div class="label">Alamat Orang Tua/Wali</div><div class="separator">:</div><div class="value ${alamatOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${alamatOrangtua}</div></div>
                        <div class="info-row"><div class="label">RT/RW Orang Tua/Wali</div><div class="separator">:</div><div class="value ${rtOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${rtOrangtua}/${rwOrangtua}</div></div>
                        <div class="info-row"><div class="label">Kelurahan Orang Tua/Wali</div><div class="separator">:</div><div class="value ${kelurahanOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${kelurahanOrangtua}</div></div>
                        <div class="info-row"><div class="label">Kecamatan Orang Tua/Wali</div><div class="separator">:</div><div class="value ${kelurahanOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${kecamatanOrangtua}</div></div>
                        <div class="info-row"><div class="label">Kota Orang Tua/Wali</div><div class="separator">:</div><div class="value ${kotaOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${kotaOrangtua}</div></div>
                        <div class="info-row"><div class="label">Provinsi Orang Tua/Wali</div><div class="separator">:</div><div class="value ${provinsiOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${provinsiOrangtua}</div></div>
                        <div class="info-row"><div class="label">Telepon Orang Tua/Wali</div><div class="separator">:</div><div class="value ${teleponOrangtua === 'Tidak ada data' ? 'red-text' : ''}">${teleponOrangtua}</div></div>
                        <br>
                        <div class="info-row">
                    <div class="label">Jarak Rumah ke Sekolah:</div>
                    <div class="value">${jarakRumahSekolah}</div>
                </div>
                </div>
                 <div class="foto-container">
            <div class="foto-item">
                ${kkImageURL ? `<img src="${kkImageURL}" alt="Kartu Keluarga" class="foto">` : '<div class="foto">Kartu Keluarga</div>'}
                <p>Kartu Keluarga</p>
            </div>
            <div class="foto-item">
                ${kiaImageURL ? `<img src="${kiaImageURL}" alt="Kartu Identitas Anak" class="foto">` : '<div class="foto">Kartu Identitas Anak</div>'}
                <p>Kartu Identitas Anak</p>
            </div>
            <div class="foto-item">
                ${sklImageURL ? `<img src="${sklImageURL}" alt="Surat Keterangan Lulus" class="foto">` : '<div class="foto">Surat Keterangan Lulus</div>'}
                <p>Surat Keterangan Lulus</p>
            </div>
            <div class="foto-item">
                ${spotImageURL ? `<img src="${spotImageURL}" alt="Surat Perpindahan Orang Tua" class="foto">` : '<div class="foto">Surat Perpindahan Orang Tua</div>'}
                <p>Surat Perpindahan Orang Tua</p>
            </div>
        </div>
                <button onclick="window.print()">Cetak</button>
            </body>
            </html>

        `);
    
            newWindow.document.close();
        }
        </script>
        
            <script>
                // Fungsi untuk menampilkan pop-up syarat dan ketentuan
                function showTermsPopup() {
                    document.getElementById('termsPopup').style.display = 'block';
                }

                // Fungsi untuk menyembunyikan pop-up syarat dan ketentuan
                function hideTermsPopup() {
                    document.getElementById('termsPopup').style.display = 'none';
                }

                // Fungsi untuk mengaktifkan tombol submit jika checkbox disetujui
                function toggleSubmitButton() {
                    const terms = document.getElementById('terms').checked;
                    const responsibility = document.getElementById('responsibility').checked;
                    document.getElementById('submit-btn').disabled = !(terms && responsibility);
                }
            </script>

        
        </div>
        
        <!-- Script untuk Google Maps dan menghitung jarak serta menampilkan rute -->
        <script>
            var map, directionsService, directionsRenderer;
        
            function initMap() {
                directionsService = new google.maps.DirectionsService();
                directionsRenderer = new google.maps.DirectionsRenderer();
        
                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: { lat: -6.200000, lng: 106.816666 }, // Lokasi default
                    zoom: 10
                });
        
                directionsRenderer.setMap(map);
            }
        
            function drawRoute(latRumah, lonRumah, latSekolah, lonSekolah) {
                const request = {
                    origin: { lat: latRumah, lng: lonRumah },
                    destination: { lat: latSekolah, lng: lonSekolah },
                    travelMode: 'DRIVING'
                };
        
                directionsService.route(request, function(result, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);
                    } else {
                        alert('Gagal menampilkan rute: ' + status);
                    }
                });
            }
        
            function haversine(lat1, lon1, lat2, lon2) {
                const R = 6371; // Radius bumi dalam kilometer
                const dLat = (lat2 - lat1) * Math.PI / 180;
                const dLon = (lon2 - lon1) * Math.PI / 180;
                const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                          Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                          Math.sin(dLon / 2) * Math.sin(dLon / 2);
                const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                return R * c; // Jarak dalam kilometer
            }
        
            function hitungJarak() {
                const latRumah = parseFloat(document.getElementById("lat_rumah").value);
                const lonRumah = parseFloat(document.getElementById("lon_rumah").value);
                const latSekolah = parseFloat(document.getElementById("lat_sekolah").value);
                const lonSekolah = parseFloat(document.getElementById("lon_sekolah").value);
        
                if (!isNaN(latRumah) && !isNaN(lonRumah)) {
                    const jarak = haversine(latRumah, lonRumah, latSekolah, lonSekolah);
                    document.getElementById("jarak_rumah_sekolah").value = jarak.toFixed(2) + " km";
        
                    drawRoute(latRumah, lonRumah, latSekolah, lonSekolah);
                } else {
                    document.getElementById("jarak_rumah_sekolah").value = "Masukkan koordinat rumah!";
                }
            }
        
            document.getElementById("lat_rumah").addEventListener("input", hitungJarak);
            document.getElementById("lon_rumah").addEventListener("input", hitungJarak);
        
            window.onload = initMap;
        </script>
        
        <!-- Pastikan untuk mengganti API Key dengan milik Anda -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        

</body>
</html>
