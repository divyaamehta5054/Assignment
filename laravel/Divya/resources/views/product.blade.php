<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="submit_form">
        @csrf
        <table border="1" align="center">
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="pro_name" id="" ></td>
        </tr>
        <tr>
            <td>Product price:</td>
            <td><input type="text" name="pro_price" id="" ></td>
        </tr>
        <tr>
            <td>Product Desc:</td>
            <td><textarea name="pro_desc"></textarea></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-primary">
        </tr>
        </table>
    </form>
</body>
</html>