<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/boot.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <main class="container">
        <header>
            <nav>
                <div class="menu">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo overlord intellectus"></a>
                    </div>
                    <i class="fas fa-bars btn-menumobile"></i>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">serviços</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <section>
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <div class="slide-data">

                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-data">

                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-data">

                        </div>
                    </div>
                </div>

                <button class="arrows prev" onclick="plusslide(-1)">
                    <span><i class="fas fa-angle-left"></i></span>
                </button>
                <button class="arrows next" onclick="plusslide(1)">
                    <span><i class="fas fa-angle-right"></i></span>
                </button>

                <div class="dots">
                    <span onclick="currentslide(1)"></span>
                    <span onclick="currentslide(2)"></span>
                    <span onclick="currentslide(3)"></span>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="title-section">
                <p>Conheça as coleções para os proximos eventos</p>
            </div>
            <div class="icon-youtube">
                <img src="img/youtube.png" alt="">
                <p>Lorem, ipsum dolor sit amet co</p>
            </div>
        </section>
        <section class="block-store">
            <div>
                <img src="img/img3.png" alt="Overlord intellectus">
            </div>
            <div>
                <h2>TITULO ITEM 01</h2>
                <p>A Overlord Intellectus é uma start-up JR fundada como objetivo de
                    alavancar as empresas locais por meio da Tecnologia, construindo sites, e-commerces, sistemas, montagens de servidores marketing digital.
                    As tecnologias que usamos em nossos projetos foram escolhidas de forma a agregar o máximo de valor e perfomance na busca por resultados.
                </p>
            </div>
            <div class="block-store-icons">
                <div>
                    <h3>Projetos</h3>
                </div>
            </div>
        </section>

        <section class="block-store">
            <div>
                <img src="img/img3.png" alt="Overlord intellectus">
            </div>
            <div>
                <h2>TITULO ITEM 01</h2>
                <p>A Overlord Intellectus é uma start-up JR fundada como objetivo de
                    alavancar as empresas locais por meio da Tecnologia, construindo sites, e-commerces, sistemas, montagens de servidores marketing digital.
                    As tecnologias que usamos em nossos projetos foram escolhidas de forma a agregar o máximo de valor e perfomance na busca por resultados.
                </p>
            </div>
            <div class="block-store-icons">
                <div>
                    <h3>Projetos</h3>
                </div>
            </div>
        </section>
            <div class="slider slider-c owl-carousel">
                <div class="card">
                    <div class="img">
                        <img src="img/img3.png" alt="">
                    </div>
                    <div class="content">
                        <div class="title">
                            Briana Tozour</div>
                        <div class="sub-title">
                            Graphic Designer</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="img/img3.png" alt="">
                    </div>
                    <div class="content">
                        <div class="title">
                            Pricilla Preez</div>
                        <div class="sub-title">
                            Web Developer</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="img/img3.png" alt="">
                    </div>
                    <div class="content">
                        <div class="title">
                            Eliana Maia</div>
                        <div class="sub-title">
                            App Developer</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <script src="js/script.js"></script>
    <script>
        $(".slider-c").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
        });
    </script>
</body>

</html>