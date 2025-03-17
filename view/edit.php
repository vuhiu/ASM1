<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        @media (max-width: 480px) {
            form {
                padding: 15px;
            }
            input[type="submit"] {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <h1>Cap nhap</h1>
    <form action="index.php?act=edit&id=<?=$phone['id']?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?=$phone['name']?>">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" value="<?=$phone['image']?>">
        </div>
        <div>
            <label for="brand">Brand</label>
            <input type="text" name="brand" value="<?=$phone['brand']?>">
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color" value="<?=$phone['color']?>">
        </div>
        <input type="submit" name="sua" value="cap nhap"> 
    </form>
</body>
</html>