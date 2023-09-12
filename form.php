<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body><div class="container">
    <form action="test.php" method="POST" class='form-group'>
    <label for="name">Name</label>
    <input type="text" name='name' class='form-control'>
    <br>
    <label for="email">Email</label>
    <input type="email" name='email' class='form-control'>
    <br>
    <label for="pass">password</label>
    <input type="password" name='pass' class='form-control'>
    <br>
    <label for="phone">phone</label>
    <input type="phone" name='phone' class='form-control'>
    <br>
    <label for="gender">gender</label><br>
    <input type="text" name="gender">
    <br>
    <input type="submit" value="register" class='btn btn-success mt-4'>
    </form>
    </div>
</body>
</html>