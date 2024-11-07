<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perpindahan Orang Tua</title>
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
    <div class="container mt-5">
        <h2>Form Pendaftaran Jalur Perpindahan Orang Tua</h2>
        <form action="{{ route('pendaftaran.zona_prestasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: flex; justify-content: space-between;">
                <!-- Kolom Kiri -->
                  <div style="flex: 1; margin-right: 20px;">
                    <label>Nama Siswa:</label>
                    <input type="text" name="nama" maxlength="70" style="width: 350px; font-size: 20px; margin-bottom: 5px"><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 20px;">
                            <label>NISN:</label>
                    <input type="text" name="nisn" maxlength="10" style="width: 100px; margin-bottom: 5px"><br>
                        </div>
                        <div>
                            <label>Jenis Kelamin:</label>
                    <select name="jenis_kelamin" required style="width: 150px; margin-bottom: 5px;">
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
                            <input type="text" name="rt" maxlength="3" style="width: 50px; margin-bottom: 5px;">
                        </div>
                        <div style="margin-right: 10px;">
                            <label>RW:</label>
                            <input type="text" name="rw" maxlength="3" style="width: 50px; margin-bottom: 5px;">
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kelurahan:</label>
<input type="text" name="kelurahan" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                         </div>
                         <div style="margin-right: 10px;">
                            <label>Kecamatan:</label>
                            <input type="text" name="kecamatan" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kota:</label>
                    <input type="text" name="kota" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                         </div>
                        <div style="margin-right: 10px;">
                            <label>Provinsi:</label>
                            <input type="text" name="provinsi" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                
                        </div>
                    </div><br>

                    <label>Telepon:</label>
                    <input type="text" name="telepon" maxlength="14" required style="width: 150px; margin-bottom: 5px;"><br>
                </div>
                
                <!-- Kolom Tengah -->
                <div style="flex: 1; margin-right: 20px;">
                    <label>Nama Orang Tua/Wali:</label>
                    <input type="text" name="nama_orang_tua" maxlength="70"  style="width: 350px; margin-bottom: 5px;"><br>
                      
                    <label>Alamat Orang Tua/Wali:</label>
                    <input type="text" name="alamat_orang_tua" maxlength="150" required style="width: 350px; margin-bottom: 5px;"><br>
        
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>RT:</label>
                            <input type="text" name="rt" maxlength="3" style="width: 30px; margin-bottom: 5px;">
                        </div>
                        <div style="margin-right: 10px;">
                            <label>RW:</label>
                            <input type="text" name="rw" maxlength="3" style="width: 30px; margin-bottom: 5px;">
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kelurahan:</label>
                            <input type="text" name="kelurahan" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                         </div>
                        <div style="margin-right: 10px;">
                            <label>Kecamatan:</label>
                            <input type="text" name="kecamatan" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                        </div>
                    </div><br>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="margin-right: 10px;">
                            <label>Kota:</label>
                            <input type="text" name="kota" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                             </div>
                            <div style="margin-right: 10px;">
                                <label>Provinsi:</label>
                                <input type="text" name="provinsi" maxlength="50" style="width: 150px; margin-bottom: 5px;"><br>
                    
                            </div>
                        </div><br>
                        <label>No.Telp Orang tua/Wali:</label>
                        <input type="text" name="telepon_orang_tua" maxlength="14" required  style="width: 100px; margin-bottom: 5px;"><br>
                    </div>
            
                    <script>
                        // Fungsi untuk memperbarui kota di jalur afirmasi
                        function updateCitiesPerpindahanorangtua() {
                            const countrySelect = document.getElementById("country-perpindahanorangtua");
                            const citySelect = document.getElementById("city-perpindahanorangtua");
                    
                            // Menghapus opsi kota yang ada
                            citySelect.innerHTML = "";
                    
                            // Mendapatkan negara yang dipilih
                            const selectedCountry = countrySelect.value;
                    
                            // Menambahkan opsi kota yang sesuai dengan negara yang dipilih
                            if (selectedCountry) {
                                const cities = countryCityData[selectedCountry];
                                cities.forEach(city => {
                                    const option = document.createElement("option");
                                    option.value = city;
                                    option.text = city;
                                    citySelect.add(option);
                                });
                            }
                        }
                    </script>                                        
            
                                <!-- Bagian Unggahan -->
                    <div style="margin-top: 20px;">
                        <label>Unggah Foto Siswa (PDF/JPG/PNG):</label>
                        <input type="file" name="fs" accept="image/*" onchange="previewImage(event, 'fsPreview', 'fsDelete')" id="fsInput">
                        <br>
                        <img id="fsPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="fsDelete" style="display:none;" onclick="deleteImage('fsInput', 'fsPreview', 'fsDelete')">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Kartu Identitas Anak (PDF/JPG/PNG):</label>
                        <input type="file" name="kia" accept="image/*" onchange="previewImage(event, 'kiaPreview', 'kiaDelete')" id="kiaInput">
                        <br>
                        <img id="kiaPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="kiaDelete" style="display:none;" onclick="deleteImage('kiaInput', 'kiaPreview', 'kiaDelete')">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Kartu Keluarga (PDF/JPG/PNG):</label>
                        <input type="file" name="kk_perpindahan" accept="image/*" onchange="previewImage(event, 'kkPreview', 'kkDelete')" id="kkInput">
                        <br>
                        <img id="kkPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="kkDelete" style="display:none;" onclick="deleteImage('kkInput', 'kkPreview', 'kkDelete')">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Surat Keterangan Lulus (PDF/JPG/PNG):</label>
                        <input type="file" name="skl_perpindahan" accept="image/*" onchange="previewImage(event, 'sklPreview', 'sklDelete')" id="sklInput">
                        <br>
                        <img id="sklPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="sklDelete" style="display:none;" onclick="deleteImage('sklInput', 'sklPreview', 'sklDelete')">Hapus Gambar</button>
                        <br><br>

                        <label>Unggah Surat Perpindahan Orang Tua (PDF/JPG/PNG):</label>
                        <input type="file" name="spot_perpindahan" accept="image/*" onchange="previewImage(event, 'spotPreview', 'spotDelete')" id="spotInput">
                        <br>
                        <img id="spotPreview" style="display:none; width: 150px; height: 150px; margin-top: 10px;">
                        <br>
                        <button type="button" id="spotDelete" style="display:none;" onclick="deleteImage('spotInput', 'spotPreview', 'spotDelete')">Hapus Gambar</button>
                    </div>

                    <script>
                        // Fungsi untuk mempreview gambar yang diunggah
                        function previewImage(event, previewId, deleteButtonId) {
                            var input = event.target;
                            var reader = new FileReader();

                            reader.onload = function() {
                                var preview = document.getElementById(previewId);
                                preview.src = reader.result;
                                preview.style.display = 'block'; // Tampilkan gambar preview

                                var deleteButton = document.getElementById(deleteButtonId);
                                deleteButton.style.display = 'inline'; // Tampilkan tombol hapus
                            };

                            reader.readAsDataURL(input.files[0]); // Membaca data URL file yang diunggah
                        }

                        // Fungsi untuk menghapus gambar dan reset input
                        function deleteImage(inputId, previewId, deleteButtonId) {
                            var input = document.getElementById(inputId);
                            var preview = document.getElementById(previewId);
                            var deleteButton = document.getElementById(deleteButtonId);
                            input.value = ''; // Reset input file
                            preview.src = ''; // Reset preview image
                            preview.style.display = 'none'; // Sembunyikan preview
                            deleteButton.style.display = 'none'; // Sembunyikan tombol hapus
                        }
                    </script>

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
                        <input type="checkbox" id="terms" name="terms" required onchange="toggleButton()">
                        <label for="terms">Saya setuju dengan syarat dan ketentuan.</label>
                    </div>
                </div>

                <!-- Tombol Daftar -->
                <div style="margin-top: 10px;">
                    <button id="submitButton" type="submit" style="width: 250px; padding: 10px; font-size: 16px;" disabled>Daftar</button>
                </div>
                <script>
                    function toggleButton() {
                        const checkbox = document.getElementById('terms');
                        const submitButton = document.getElementById('submitButton');
                        submitButton.disabled = !checkbox.checked; // Tombol akan aktif jika checkbox dicentang
                    }
                    </script>
                  </div>
    
        </form>
    </div>
</body>
</html>
