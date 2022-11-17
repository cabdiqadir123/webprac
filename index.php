<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    label {
        display: block;
        margin-bottom: 10px;
    }

    button {
        margin-top: 10px;
    }
</style>

<body>
    <div>
        <form action="" method="post" autocomplete="off">
            <label for="id">id</label>
            <input type="text" placeholder="enterid" name="id"  value="">
            <label for="id">name</label>
            <input type="text" placeholder="enterid" name="name" required value=""><br>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
    <?php
    require 'conn.php';

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];

        $query = "INSERT INTO test values('','$name')";
        //$query = "delete from test where id='$id'";
        mysqli_query($conn, $query);

        echo "<script>alert('data inserted')</script>";
    }
    ?>
</body>

</html>