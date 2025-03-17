<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        a {
            color: red;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th, td {
                padding: 10px;
                text-align: right;
            }
            th {
                position: absolute;
                left: -9999px;
            }
            tr {
                margin-bottom: 15px;
            }
            td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }
        }
        *{
    padding:0;
    margin:0;
    box-sizing: border-box;
    font-family:'Poppins', sans-serif;
    cursor: pointer;
}

#wrapper {
   
    width: 100%;
    height: 100vh;
}
#header {
    width: 100%;
    padding:0px 30px;
    margin-top:33px;
    display: flex;
    justify-content: space-between;
    align-items: center;    
}

#menu {
    list-style:none;
    display: flex;
}

#menu .item {
    margin:0px 25px;
}

#menu .item a {
    color:#626A67;
    text-decoration: none;
}


#actions {
    display: flex;
}

#actions .item {
    margin-left:22px;
}





#banner {
    width: 100%;
    background-image :url("assets/banner.png");
    height: 463px;
    margin-top:40px;
    display: flex;
    padding:0px 133px;
    position:relative;
}

#banner .box-left ,#banner .box-right {
    width: 50%;
}

#banner  .box-left h2 {
    font-size:48px;
    margin-top:75px;
    color:#fff;
}

#banner .box-left p {
    color:#f6f2f2;
}

#banner .box-left button {
    width: 191px;
    height: 40px;
    margin-top:41px;
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 20px;
    transition:0.4s;
}

#banner .box-left button:hover {
    background:orange;
}



#banner .box-right img {
    margin:0px 10px;
    animation :animation 3s infinite linear; 
}

#footer {
    width: 100%;
    background:rgb(0,0,0,0.79);
    height: 322px;
    margin-top:338px;
    padding:0px 63px;
    padding-top:57px;
    display: flex;
    justify-content: space-around;
}

#footer .box {
    width: 250px;
    color:#fff;
}

#footer .box .quick-menu {
    margin-top:40px;

}


#footer .box .quick-menu .item{
    margin-bottom:12px;

}
#footer .box .quick-menu ,.item a{
    color:#fff;
    text-decoration: none;
}



#footer .box form input {
    width: 294px;
    height: 42px;
    background:transparent;
    padding-left:20px;
    color:#fff;
    margin-top:30px;
}

#footer .box form button {
    background:#362f2f;
    box-shadow: 5px 5px 4px rgba(0,0,0.25);
    width: 163px;
    height: 38px;
    margin-top:29px;
    color:#fff;
}

    </style>
</head>
<body>

       

<div class="header">
    <h1>Danh Sách Sản Phẩm</h1>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Hãng</th>
            <th>Màu</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($phone as $p) { ?>
            <tr>
                <td data-label="ID"><?= $p['id'] ?></td>
                <td data-label="Name"><?= $p['name'] ?></td>
                <td data-label="Image">
                    <img src="<?= $p['image'] ?>" alt="">
                </td>
                <td data-label="Brand"><?= $p['brand'] ?></td>
                <td data-label="Color"><?= $p['color'] ?></td>
                <td data-label="Actions">
                    <a href="?act=detail&id=<?=$p['id']?>">Chi Tiết Sản Phẩm</a>
                </td>
                <td data-label="Actions">
                    <a href="?act=edit&id=<?=$p['id']?>">Sua</a>
                </td>
                <td data-label="Actions">
                    <a href="?act=create&id=<?=$p['id']?>">Them</a>
                </td>
                <td data-label="Actions">
                    <a href="?act=delete&id=<?=$p['id']?>" onclick="return confirm('Ban co chac muon xoa khong?')">Xoa</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>