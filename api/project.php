<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Fernandes - Projects</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-dark-purple">
    <div class="container bg-purple">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark-purple">
                <div class="container-fluid navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/odgiedev/" target="_blank">All Projects</a>
                    </li>
                </div>
            </nav>
        </div>
        <div class="row">
            <div id="carouselProjects" class="carousel slide pt-2" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselProjects" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://github.com/odgiedev/frc/raw/master/storage/app/public/frc1.PNG" class="d-block w-100 mx-auto rounded" alt="FRC" style="max-height: 530px;max-width: 1100px;">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="https://github.com/odgiedev/frc#sparkles-home" target="_blank">
                                <span class="h3" style="background-color:black">FRC</span> <br>
                            </a>
                            <span class="h5" style="background-color:black">
                                Forum/ImageBoard.
                            </span> <br>
                            <small style="background-color:black">Laravel 8, MySQL, Bootstrap 5</small>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://github.com/odgiedev/tl/raw/master/storage/app/public/tl2.PNG" class="d-block w-100 mx-auto rounded" alt="..." style="max-height: 530px;max-width: 1100px;">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="https://github.com/odgiedev/tl#sparkles-guest-home" target="_blank">
                                <span class="h3" style="background-color:black">TL</span> <br>
                            </a>
                            <span class="h5" style="background-color:black">
                                Images/Gifs social media.
                            </span> <br>
                            <small style="background-color:black">Laravel 8, MySQL, Bootstrap 5</small>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://github.com/odgiedev/to_do_laravel/raw/master/storage/app/public/todolaravel1.PNG" class="d-block w-100 mx-auto rounded" alt="..." style="max-height: 530px;max-width: 1100px;">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="https://github.com/odgiedev/to_do_laravel/#sparkles-home" target="_blank">
                                <span class="h3" style="background-color:black">To Do Laravel</span> <br>
                            </a>
                            <span class="h5" style="background-color:black">
                                To Do app.
                            </span> <br>
                            <small style="background-color:black">Laravel 8, MySQL, Bootstrap 5</small>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://github.com/odgiedev/warriors/raw/master/storage/app/public/warriors2.PNG" class="d-block w-100 mx-auto rounded" alt="..." style="max-height: 530px;max-width: 1100px;">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="https://github.com/odgiedev/warriors#sparkles-doc" target="_blank">
                                <span class="h3" style="background-color:black">Warriors</span> <br>
                            </a>
                            <span class="h5" style="background-color:black">
                                REST API that simulates the creation of a character from an RPG game, choosing the class, weapon, pet
                            </span> <br>
                            <small style="background-color:black">Laravel 9, MySQL</small>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://github.com/odgiedev/VirtualCityNew/raw/master/assets/VCSS.jpeg" class="d-block w-100 mx-auto rounded" alt="..." style="max-height: 530px;max-width: 1100px;">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="https://github.com/odgiedev/VirtualCityNew#sparkles-preview" target="_blank">
                                <span class="h3" style="background-color:black">VirtualCityNew</span> <br>
                            </a>
                            <span class="h5" style="background-color:black">
                                Things the people of VirtualCity(a fake city) are doing.
                            </span> <br>
                            <small style="background-color:black">TypeScript, Bootstrap 5</small>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjects" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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