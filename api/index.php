<?php require_once 'set.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Fernandes - Home</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-dark-purple">
    <div class="container bg-purple">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark-purple">
                <div class="container-fluid navbar-nav d-flex justify-content-between">
                    <?php if(isset($english)): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="project.html">PROJECTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">PT</a>
                        </li> 
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="project.html">PROJETOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?lang=english">EN</a>
                        </li>
                    <?php endif ?>
                </div>
            </nav>
        </div>
        <div class="row my-3 d-flex align-items-center p-3">
            <div class="col-12 col-md-12 col-lg-3 text-white border-end">
                <img src="../images/diego-pfp.png" alt="diego-pfp" class="img-fluid border rounded-3" style="max-height: 200px">
                <h3 class="mt-2">Diego Fernandes.</h3>
                <h6><?= $bio ?></h6>
                <hr>
                <p>
                    <?= $desc ?>
                </p>
            </div>

            <div class="offset-1 col-3 col-md-3 col-lg-2">
                <a href="https://github.com/odgiedev" target="_blank">
                    <i class="devicon-github-original-wordmark devicon"></i>
                </a>
            </div>

            <div class="col-3 col-md-3 col-lg-2 ms-5">
                <a href="https://linkedin.com/in/dev-diego-fernandes" target="_blank">
                    <i class="devicon-linkedin-plain-wordmark devicon"></i>
                </a>
            </div>              

            <div class="col-12 col-md-2 col-lg-2 mt-3 ms-5">
                <a href="mailto:dev.diegof@gmail.com" target="_blank">
                    <img src="../images/icon_email.png" alt="e-mail" style="height: 90px;">
                </a>
                <p class="mt-1 text-white">dev.diegof@gmail.com</p>
            </div>
        
        </div>           
        <footer class="text-white text-center border-top p-2">
            <span>
                <a href="https://github.com/odgiedev">odgiedev</a> &copy; 2022
            </span>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
