<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: gray;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }
        img {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chi tiết sản phẩm</h1>
        <p>Tên: <?= $phone['name'] ?></p>
        <p>Màu: <?= $phone['color'] ?></p>
        <p>Hãng: <?= $phone['brand'] ?></p>
        <img src="<?= $phone['image'] ?>" alt="Product Image">
    </div>
</body>
</html>