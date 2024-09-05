<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM prod WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("خطأ في الاستعلام: " . mysqli_error($con));
    }
    $data = mysqli_fetch_assoc($result);
} else {
    die("المنتج غير موجود.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
    <title>تأكيد شراء المنتج</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Tajawal', sans-serif;
        }

        .main {
            width: 30%;
            background-color: #1e1e1e;
            color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
        }

        button {
            background-color: #212529;
            border: none;
        }

        button:hover {
            background-color: #343a40;
        }

        a {
            color: #f8f9fa;
        }

        a:hover {
            color: #e0e0e0;
        }
    </style>
</head>

<body>
    <center>
        <div class="main">
            <form action="card.php" method="POST">
                <h2>هل تريد فعلاً شراء المنتج؟</h2>
                <input type="hidden" name="id" value='<?php echo htmlspecialchars($data['id']); ?>'>
                <input type="hidden" name="name" value='<?php echo htmlspecialchars($data['name']); ?>'>
                <input type="hidden" name="price" value='<?php echo htmlspecialchars($data['price']); ?>'>
                <button name="add" type="submit" class="btn btn-warning">تأكيد إضافة المنتج للعربة</button>
                <br><br>
                <a href="shop.php">الرجوع إلى صفحة المنتجات</a>
            </form>
        </div>
    </center>
</body>

</html>