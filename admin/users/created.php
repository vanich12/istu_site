
<?php
include("../../path.php");
include("../../controllers/user.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/e923b74977.js" crossorigin="anonymous"></script>
      <!--Custom style-->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Мой блог</title>
  </head>
  <body>
  <?php include("../../include/header-admin.php");?>
    <div class="conatiner">
        <div class="row">
                 <?php include ("../../include/sidebar-admin.php");?>     
            <div class="posts col-9">
            <div class="button row">
                    <a href="<?php echo BASE_URL .  "admin/users/created.php";?>" class = "col-2 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                </div>
                <div class="row tittle-table">
                    <h2>Создание пользователя</h2>
                </div>

                <div class="row add-post">
                    <form action="created.php" method = "post">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Логин</label>
                        <input type="text" name="login" value = "<?=$login?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Введите логин</div>
                        <p><?=$errLogin?></p>
                        </div>  

                        <div class="w-100"></div>
                        <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" value = "<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Введите email</div>
                        <p><?=$errEmail?></p>
                        </div>

                        <div class="w-100"></div>
                        <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        <div id="emailHelp" class="form-text">Введите пароль</div>
                        <p><?=$errPass?></p>
                        </div>

                        <div class="w-100"></div>

                        <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                        <input type="password" name="repeat_password" class="form-control" id="exampleInputPassword1">
                        <div id="emailHelp" class="form-text">Введите пароль</div>
                        </div>
                       <input value ="1" name="admin" class="form-check-input" type="checkbox">
                       <label for="flexCheckChecked" class="form-check-label">Admin</label>
                        <div class="col-12">
                            <button name="create-user" class="btn btn-primary" type="submit">Создать</button>
                        </div>    
                    </form>
                </div>

            </div>
        </div>
    </div>

  <?php include("../../include/footer.php");?>
  </div>
 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./js/renderProducts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/filter.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>