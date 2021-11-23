<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/registration-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRM | Registration</title>
</head>
<body>
    <?php require_once("includes/registration.php") ?>
    <div class="row mt-5 mx-5">
        <div class="col-2"></div>
        <div class="col-3">
            <h1 class="title">Sign in to CRM</h1>
            <h2 class="subtitle"><a href="login.php"><strong>Sign in Now!</strong></a> for a webarch account,It's free and always will be...</h2>
        </div>
        <div class="col-5">
            <div class="alert alert-danger" style="display: <?php ($resultString=='') ?  printf('none') : printf('') ?>;">Failed to Register User</div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="false" onchange="checkPasswords()">
                    <span id="alert-password" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" autocomplete="false" onchange="checkPasswords()">
                </div>
                <div class="form-group">
                    <label for="name">Contact</label>
                    <input type="tel" name="contact" id="contact" class="form-control">
                </div>
                <div class="form-group">
                    Gender <br>
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" value="male" checked="checked">
                    <label for="gender">Female</label>
                    <input type="radio" name="gender" value="female">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Submit" class="btn btn-primary col-12">
                </div>
            </form>
        </div>
    </div>
    <script>
        let alertDanger =  document.querySelectorAll('.alert-danger')[0];
        if(alertDanger.style.display==''){
            setTimeout(()=>{alertDanger.style.display='none'},1500);
        }
        function checkPasswords(){
            let pwd = document.getElementById('password');
            let confirmPwd = document.getElementById('confirm');
            let alert = document.getElementById('alert-password')
            if (pwd.value != confirmPwd.value){
                alert.innerHTML='Passwords Must Match';
            }else{
                alert.innerHTML='';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>