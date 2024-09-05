<?php 
session_start(); 
include('config.php'); 

if (isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
}

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

if (!$con) { 
    die("فشل الاتصال: " . mysqli_connect_error()); 
} 

$result = mysqli_query($con, "SELECT * FROM addcard"); 
if (!$result) { 
    die("خطأ في تنفيذ الاستعلام: " . mysqli_error($con)); 
} 
?> 

<!DOCTYPE html> 
<html lang="ar"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>عربتي | منتجاتي</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet"> 
    <style> 
        body { 
            font-family: 'Cairo', sans-serif; 
            background-color: #f8f9fa; 
            display: flex; 
            justify-content: center; 
            align-items: flex-start; 
            height: 100vh; 
            margin: 0; 
            padding-top: 40px; 
        } 
        .table-container { 
            width: 50%; 
        } 
        h3 { 
            margin-bottom: 20px; 
        } 
        .table { 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            overflow: hidden; 
        } 
        .table thead { 
            background-color: #007bff; 
            color: white; 
        } 
        .table tbody tr { 
            transition: all 0.3s ease-in-out; 
        } 
        .table tbody tr:hover { 
            background-color: #e9ecef; 
            transform: scale(1.02); 
        } 
        .btn-danger { 
            transition: background-color 0.3s ease; 
        } 
        .btn-danger:hover { 
            background-color: #dc3545; 
            transform: translateY(-2px); 
        } 
    </style> 
</head> 
<body> 
    <div class="table-container"> 
        <center> 
            <h3 class="mb-4">منتجاتك المحجوزة</h3> 
        </center> 
        <?php while ($row = mysqli_fetch_array($result)): ?> 
            <div class="mb-3"> 
                <table class="table table-bordered"> 
                    <thead> 
                        <tr> 
                            <th scope="col">اسم المنتج</th> 
                            <th scope="col">سعر المنتج</th> 
                            <th scope="col">إزالة المنتج</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td><?php echo htmlspecialchars($row['name']); ?></td> 
                            <td><?php echo htmlspecialchars($row['price']); ?></td> 
                            <td><a href='del_card.php?id=<?php echo $row['id']; ?>' class='btn btn-danger'>إزالة</a></td> 
                        </tr> 
                    </tbody> 
                </table> 
            </div> 
        <?php endwhile; ?> 
        <div class="mt-4 text-center"> 
            <a href="shop.php" class="btn btn-primary">الرجوع للمنتجات</a> 
        </div> 
    </div> 
</body> 
</html>
