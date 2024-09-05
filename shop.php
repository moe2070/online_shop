


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منتجات حمادة وتوتة</title>
    
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Tajawal', sans-serif;
        }

        h3 {
            font-family: 'Tajawal', sans-serif;
            font-weight: 700;
            color: #f8f9fa;
        }

        .card {
            background-color: #1e1e1e;
            color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            color: #aaa;
            margin-bottom: 15px;
        }

        .btn {
            width: 100%;
            margin-top: 5px;
            background-color: #212529;
            border: none;
        }

        .btn:hover {
            background-color: #343a40;
        }

        .navbar {
            background-color: #1c1c1c;
        }

        .navbar-brand {
            color: #f8f9fa;
            margin-left: 70px;
        }

        .navbar-brand:hover {
            color: #e0e0e0;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-dark">
        <a id="aa" class="navbar-brand" href="card.php">Mycard | عربتي</a>
    </nav>

    <div class="container my-4">
        <h3 class="text-center mb-4">المنتجات المتوفرة</h3>
        <div class="row">
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM prod");
            while ($row = mysqli_fetch_array($result)) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='" . $row['image'] . "' class='card-img-top' alt='Product Image'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $row['name'] . "</h5>
                            <p class='card-text'>" . $row['price'] . "</p>
                            <a href='val.php?id=" . $row['id'] . "' class='btn btn-success'>أضف المنتج للعربة</a>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
