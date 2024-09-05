<?php
// session_start();

// if(!isset($_SESSION['user'])){
//     header('location: products.php'); // لو مش مسجل دخول، يوديه على صفحة تسجيل الدخول
//     exit();
// }
?>



<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #111; /* لون خلفية سوداء */
            color: #f1f1f1; /* لون نص أبيض */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin-top: 60px;
            background-color: #222; /* لون خلفية داكنة للصندوق */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        h2 {
            color: #ffd700; /* لون نص ذهبي */
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control,
        .form-control-file {
            background-color: #333; /* لون خلفية حقول الإدخال */
            border: 1px solid #444; /* لون حدود حقول الإدخال */
            color: #f1f1f1; /* لون نص حقول الإدخال */
        }

        .btn-primary {
            background-color: #ffd700; /* لون خلفية أزرار اختيار الصورة */
            border: none;
            color: #111; /* لون نص الأزرار */
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: #111;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .text-center p {
            color: #666; /* لون نص المطور */
            font-size: 0.9rem;
            margin-top: 15px;
        }

        .main {
            background-color: #222;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .text-center img {
            border-radius: 10px;
            border: 2px solid #444; /* إطار للصورة */
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h2>متجر توتو وحمادة</h2>
            <img src="photo1.webp" alt="logo" class="mb-4" style="width: 350px; max-width: 100%;">
        </div>
        <div class="main p-4 mx-auto">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="اسم المنتج" required>
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="سعر المنتج" required>
                </div>
                <div class="form-group">
                    <input type="file" id="file" name="image" class="form-control-file d-none" required>
                    <label for="file" class="btn btn-primary w-100">اختار صورة المنتج</label>
                </div>
                <button type="submit" name="upload" class="btn btn-success w-100">ارفع المنتج يا مان 😉</button>
            </form>
            <div class="mt-4 text-center">
                <a href="products.php" class="btn btn-warning">عايز كل المنتجات؟</a>
            </div>
        </div>
        <p class="text-center mt-4">Developer By HAMADA</p>
    </div>
</body>

</html>
