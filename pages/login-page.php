<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="card-deck mb-3 text-center">
            <form action="../backend/login.php" method="POST" class="card mb-4 shadow-sm col-md-5"  style="margin-top: 50px; margin-bottom: 100px  ;">
                <div class="form-group">
                  <label for="exampleInputEmail1">نام</label>
                  <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">رمز عبور</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                <button type="submit" class="btn btn-primary">ورود</button>
              </form>
       </div>      
</body>
</html>