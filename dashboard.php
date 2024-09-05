<?php
session_start();
include('config.php');
// تابع مع الكود
?>




<?php
session_start();

// التحقق من أن المستخدم قام بتسجيل الدخول وأنه مستخدم عادي (user)
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}

// استيراد إعدادات الاتصال بقاعدة البيانات
include('config.php');

// الحصول على معلومات المستخدم
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);

if (!$result) {
    die("خطأ في الاستعلام: " . mysqli_error($con));
}

$user = mysqli_fetch_assoc($result);

if (!$user) {
    die("لم يتم العثور على المستخدم.");
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم المستخدم</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }
        .content {
            margin-top: 20px;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .content a {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .content a:hover {
            background-color: #0056b3;
        }
        .logout {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>مرحبًا، <?php echo htmlspecialchars($user['name']); ?></h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>لوحة تحكم المستخدم</h2>
            <p>اهلاً بك في لوحة تحكم المستخدم الخاصة بك. يمكنك إدارة حسابك واستعراض المنتجات من هنا.</p>
            <a href="products.php">عرض المنتجات</a>
            <a href="cart.php">عرض سلة المشتريات</a>
        </div>
        <div class="logout">
            <a href="logout.php">تسجيل الخروج</a>
        </div>
    </div>
</body>
</html>