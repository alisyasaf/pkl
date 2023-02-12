<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="d-flex justify-content-center" style="background-color:#061755">
    <div class="card" style="top: 100px; height: 390px; background-color:#061755">    
        <div class="login row align-items-center" style="height:400px; width:300px;">
            <div class="d-flex justify-content-center">    
                <img src="img/logo.png" alt="logo" width="270px"></img>
            </div>
            <div>
                <form>
                    <div class="form-group d-flex justify-content-center">
                        <i class="bi bi-person" style="color: white; font-size: 30px"></i>
                        <input class="form-control" type="username" id="username" placeholder="Username">
                    </div><br>

                    <div class="form-group d-flex justify-content-center">
                        <i class="bi-lock-fill" style="color: white; font-size: 28px"></i>
                        <input class="form-control" type="password" id="password" placeholder="Password">
                    </div><br>

                    <div class="form-group d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="check">    
                        <label class="form-check-label" for="check" style="color: white;">Remember me</label>
                    </div><br>
                    
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-light" type="submit" name="" id="SIGN IN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>