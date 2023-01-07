<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="store">
        @csrf
        <table border="1" align="center">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="" ></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="" ></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pwd" id="" ></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-primary">
        </tr>
        </table>
    </form>
</body>
</html>