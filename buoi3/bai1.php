<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* CSS cho form */
    form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    /* CSS cho các nhãn (label) */
    form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    /* CSS cho các ô nhập liệu (input) */
    form input[type="text"],
    form input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    /* CSS cho nút Submit */
    form button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    /* CSS cho hiệu ứng hover trên nút Submit */
    form button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <form action="bai1-1.php" method="post">

        <input type="text" name="nameBook" id="">
        <input type="text" name="nxb" id="">
        <input type="number" name="namxuatban" id="">
        <input type="submit" value="Gửi" name="submit">
    </form>
    <!-- <form action="bai1-1.php" method="get">

        <input type="text" name="nameBook" id="">
        <input type="text" name="nxb" id="">
        <input type="number" name="namxuatban" id="">
        <input type="submit" value="Gửi" name="submit">
    </form> -->
</body>

</html>