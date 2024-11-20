<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sekolah Programmer</title>
    <style>
        nav {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }
        .logo {
            flex: 1;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        li {
            margin-right: 20px;
        }
        a {
            text-decoration: none;
            padding: 10px;
            color: #000;
            position: relative;
            transition: color 0.3s;
        }
        a:hover {
            color: #007bff;
        }
        a::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -5px;
            height: 2px;
            background-color: #007bff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        a:hover::after {
            transform: scaleX(1);
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .image-container {
            position: relative;
            width: 100%;
            height: 400px; /* Tinggi gambar dapat disesuaikan */
            margin-top: 20px;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang transparan */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        select, button {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('siswa.create') }}">Pendaftaran</a></li>
            <li><a href="{{ route('cek-status') }}">Cek Status Pendaftaran</a></li>
            <li><a href="{{ route('pengumuman') }}">Pengumuman Hasil Seleksi</a></li>
            <li><a href="{{ route('bantuan-faq') }}">Bantuan dan FAQ</a></li>
        </ul>
    </nav>
    <div class="image-container">
        <img src="https://3.bp.blogspot.com/-rvKhbPdJLKw/WxlYUTBaHUI/AAAAAAAAAC8/1bFIaqW4oy8gMebK4KXgzuuV4OHVLoWlACPcBGAYYCw/w1200-h630-p-k-no-nu/PPDB-Online-730x355.jpg" alt="ppdb">
        <div class="form-container">
            <form id="jalurForm" method="GET">
                <select name="jalur" id="jalurSelect" required>
                    <option value="" disabled selected>Pilih Jalur Pendaftaran</option>
                    <option value="{{ route('pendaftaran.zonasi') }}">Zonasi</option>
                    <option value="{{ route('pendaftaran.prestasi') }}">Prestasi</option>
                    <option value="{{ route('pendaftaran.afirmasi') }}">Afirmasi</option>
                    <option value="{{ route('pendaftaran.perpindahan') }}">Perpindahan Orang Tua</option>
                </select>
                <button type="button" onclick="redirectToForm()">Berikutnya</button>
            </form>
        </div>
    </div>

    <script>
        function redirectToForm() {
            const select = document.getElementById('jalurSelect');
            const selectedValue = select.value;

            if (selectedValue) {
                window.location.href = selectedValue;
            } else {
                alert('Silakan pilih jalur pendaftaran terlebih dahulu');
            }
        }
    </script>
</body>
</html>
