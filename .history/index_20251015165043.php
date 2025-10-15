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
        
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
            max-width: 350px;
            width: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .photo-container {
            width: 100%;
            height: 280px;
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
            transform: scale(1.08);
        }
        
        .info-container {
            padding: 30px;
            text-align: center;
        }
        
        .name {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }
        
        .nim {
            font-size: 1.2rem;
            color: #666;
            font-weight: 500;
            margin-bottom: 20px;
        }
        
        .divider {
            height: 4px;
            width: 60px;
            background: linear-gradient(to right, #667eea, #764ba2);
            margin: 0 auto 20px auto;
            border-radius: 4px;
        }
        
        .details {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 5px 0;
        }
        
        .detail-label {
            color: #777;
            font-weight: 500;
        }
        
        .detail-value {
            color: #333;
            font-weight: 600;
        }
        
        .university {
            margin-top: 15px;
            font-style: italic;
            color: #888;
            font-size: 0.95rem;
        }
        
        @media (max-width: 400px) {
            .card {
                max-width: 300px;
            }
            
            .photo-container {
                height: 240px;
            }
            
            .name {
                font-size: 1.6rem;
            }
            
            .nim {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="photo-container">
            <img src="img/photo_2025-10-15_16-24-52.jpg" alt="Foto Mahasiswa" class="photo">
        </div>
        <div class="info-container">
            <div class="name">Eneng Susilawati</div>
            <div class="nim">NIM: 222611003</div>
            <div class="divider"></div>
            
            <div class="university">Universitas Masoem</div>
        </div>
    </div>
</body>
</html>