<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="d-flex justify-content-center" style="background-color:#061755">
    <div class="card" style="top: 100px; height: 390px; background-color:#061755; border-color:#061755; font-family: Poppins">    
        <div class="login row align-items-center" style="height:400px; width:300px;">
            <div class="d-flex justify-content-center">    
                <img src="img/logo.png" alt="logo" width="270px"></img>
            </div>
            <div>
                <form>
                    <div class="form-group d-flex justify-content-center">
                        <i class="bi bi-person" style="color: white; font-size: 30px"></i>
                        <input class="form-control text-light" type="username" id="username" placeholder="Username" style="border-radius: 100px; background-color:white; border-color:white;">
                    </div><br>

                    <div class="form-group d-flex justify-content-center">
                        <i class="bi-lock-fill" style="color: white; font-size: 28px"></i>
                        <input class="form-control text-white" type="password" id="password" placeholder="Password" style="border-radius: 100px; background-color:white; border-color:white">
                    </div><br>

                    <div class="form-group d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="check">    
                        <label class="form-check-label" for="check" style="color: white;">Remember me</label>
                    </div><br>
                    
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-light" type="button" name="" id="SIGN IN" style="border-radius: 100px; color: #061755; width: 150px">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>