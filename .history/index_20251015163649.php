<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            gap: 25px;
            max-width: 1200px;
            width: 100%;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }
        
        .photo-container {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .card:hover .photo {
            transform: scale(1.05);
        }
        
        .info-container {
            padding: 25px;
            text-align: center;
        }
        
        .name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }
        
        .nim {
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }
        
        .divider {
            height: 3px;
            width: 50px;
            background: linear-gradient(to right, #667eea, #764ba2);
            margin: 15px auto;
            border-radius: 3px;
        }
        
        .footer {
            text-align: center;
            color: white;
            margin-top: 30px;
            opacity: 0.8;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Profil Mahasiswa</h1>
            <p>Kartu profil dengan foto, nama, dan NIM</p>
        </div>
        
        <div class="cards-container">
            <div class="card">
                <div class="photo-container">
                    <img src="img/photo_2025-10-15_16-24-52.jpg" alt="Foto Saya" class="photo">
                </div>
                <div class="info-container">
                    <div class="name">Ahmad Rizki</div>
                    <div class="divider"></div>
                    <div class="nim">NIM: 20210001</div>
                </div>
            </div>
        
        <div class="footer">
            <p>&copy; 2023 Profil Mahasiswa. Data contoh untuk demonstrasi.</p>
        </div>
    </div>
</body>
</html>