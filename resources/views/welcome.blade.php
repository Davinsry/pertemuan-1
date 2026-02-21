<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 1 - Davin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Latar belakang gelap dengan sedikit gradasi */
        body {
            background-color: #0f172a; 
            background-image: radial-gradient(circle at top right, #1e293b, transparent);
            color: #f8fafc;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Desain Card bergaya Glassmorphism */
        .card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 50px 40px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
        }

        /* Efek saat mouse mengarah ke kotak */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(56, 189, 248, 0.2); 
            border: 1px solid rgba(56, 189, 248, 0.3);
        }

        /* Efek gradasi warna pada nama */
        .nama {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Desain teks NIM */
        .nim {
            font-size: 16px;
            color: #94a3b8; 
            margin-top: 8px;
            margin-bottom: 0;
            font-weight: 500;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

    <div class="card">
        <p class="nama">Muhammad Davin Surya</p>
        <p class="nim">20230140075</p> 
    </div>

</body>
</html>