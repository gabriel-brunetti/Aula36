<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f0f5a4c16a.js"></script>
    <link rel="stylesheet" href="{{url('./css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <ul class="nav bg-dark col-12 justify-content-center">
                    <div class="row col-6 d-flex justify-content-around py-2">
                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/clientes" class="nav-link text-white">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contatos" class="nav-link text-white">Contato</a>
                        </li>
                    </div>
                </ul>
            </div>
        </header>
        
        <main>

            @yield('conteudo')

        </main>
    </div>

    <footer class="bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">    
                            <div class="accordion d-lg-flex w-100" id="accordion">
                                <!-- ELEMENTO UM -->
                                <div class="col-lg-4 col-md-12">
                                    <!-- ELEMENTO ANCORA -->
                                    <a href="#one" class="d-lg-none d-block h4 text-white nav-link p-0" data-toggle="collapse">
                                        Links Utéis
                                    </a>
                                    <!-- TEXTO DISPLAY LG  -->
                                    <div class="text-white h4 d-none d-lg-block">
                                        Links Utéis
                                    </div>
                                    <!-- CONTEUDO DA SECCAO -->
                                    <div class="collapse text-white d-lg-flex" data-parent="#accordion" id="one">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </div>
                                    <!-- FINAL DA DIV -->
                                </div>
                                <!-- ELEMENTO DOIS -->
                                <div class="col-lg-4 col-md-12">
                                    <!-- ANCORA -->
                                    <a href="#two" class="d-lg-none d-block h4 text-white nav-link p-0" data-toggle="collapse">
                                        Two
                                    </a>
                                    <!-- TEXTO DISPLAY LG -->
                                    <div class="text-white h4 d-none d-lg-block">
                                        Two
                                    </div>
                                    <!-- CONTEUDO DA SECCAO -->
                                    <div class="collapse text-white d-lg-flex" data-parent="#accordion" id="two">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                                    </div>
                                </div>
                                <!-- REDES SOCIAIS -->
                                <div class="col-lg-4 col-md-12">
                                    <!-- ELEMENTO ANCORA  -->
                                    <a href="#three" class="d-lg-none d-block h4 text-white nav-link p-0" data-toggle="collapse">
                                        Redes Sociais
                                    </a>
                                    <!-- TEXTO DISPLAY LG -->
                                    <div class="text-white h4 d-none d-lg-block">
                                        Redes Sociais
                                    </div>
                                    <!-- CONTEUDO DA SECCAO -->
                                    <div class="collapse text-white d-lg-flex pt-2" data-parent="#accordion" id="three">
                                        <ul class="list-unstyled d-flex w-100 justify-content-between" style="font-size: 24px;">
                                            <li><a href="#" class="navlink py-2 px-4 border border-white"><i class="text-white fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="navlink py-2 px-4 border border-white"><i class="text-white fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="navlink py-2 px-4 border border-white"><i class="text-white fab fa-instagram"></i></a></li>
                                            <li><a href="#" class="navlink py-2 px-4 border border-white"><i class="text-white fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid">
            <div class="row bg-primary">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="p-3 text-white">Pigtime &copy; Copyright 2019</span>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>