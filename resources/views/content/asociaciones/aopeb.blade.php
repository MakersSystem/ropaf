<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="{{asset('light')}}/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>R.O.P.A.F.</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="{{asset('light')}}/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="{{asset('light')}}/css/animate.min.css" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{asset('light')}}/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{asset('light')}}/css/demo.css" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="{{asset('light')}}/css/pe-icon-7-stroke.css" rel="stylesheet" />

    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="green" data-image="{{asset('light')}}/img/sidebar-5.jpg">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="#" class="simple-text">
                            <img src="{{asset('home')}}/img/aopeb.png" alt="" height="100">
                        </a>
                    </div>
            
                    <ul class="nav">
                        <li class="active">
                            <a href="dashboard.html">
                                <i class="pe-7s-graph"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a href="user.html">
                                <i class="pe-7s-user"></i>
                                <p>Organizacion</p>
                            </a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="pe-7s-note2"></i>
                                <p>Cultivos Anuales Ciclos Cortos</p>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html">
                                <i class="pe-7s-news-paper"></i>
                                <p>Cultivos Perenes Ciclos Largos</p>
                            </a>
                        </li>
                        <li>
                            <a href="icons.html">
                                <i class="pe-7s-science"></i>
                                <p>Videos</p>
                            </a>
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="pe-7s-map-marker"></i>
                                <p>Biblioteca</p>
                            </a>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="pe-7s-bell"></i>
                                <p>Convocatorias</p>
                            </a>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="pe-7s-bell"></i>
                                <p>Reglamentos</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                @include('layouts.light.navbar')
                <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../home/img/intro-carousel/1.jpg); background-size: cover; background-position: center top; height: 400px">
                    <span style="background-image: linear-gradient(to right, #006600,#000);"></span>    
                    <div class="container-fluid">
                        <div class="header-body">
                            <h1 style="color: #fff" class="text-center"><b>Asociacion de Organizaciones Productoras Ecologicas de Bolivia</b> </h1>
                        </div>
                    </div>
                </div>
                
                <div class="content">    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title"><b>Objetivo</b> </h4>                        
                                    </div>
                                    <div class="content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nemo ducimus rerum at, ea sequi doloremque vero consectetur consequatur, dicta repellat! Obcaecati sequi dolor repellendus facere facilis suscipit. Mollitia, aut.
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title"><b>Misíon</b> </h4>
                                    </div>
                                    <div class="content text-justify">
                                        Somos una Red de productores agrícolas forestales líder del sector agrícola ecológico forestal, que busca satisfacer las principales necesidades de las organizaciones de base y las familias de productores afiliadas, a través del desarrollo integral y oportuno de productos y servicios, con equidad, ética, transparencia, eficacia, eficiencia, y reciprocidad bajo la filosofía del desarrollo sostenible y cuidado del medio ambiente, posicionado en el contexto nacional e internacional.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title"><b>Visíon</b></h4>
                                    </div>
                                    <div class="content text-justify">
                                        ROPAF es una red de organizaciones de productores forestales, sólida y competitiva con emprendimientos a nivel nacional en constante crecimiento para darle a nuestra producción primaria el mayor valor agregado y promoviendo servicios integrales para el desarrollo de las organizaciones afiliadas de base, con criterios propositivos de equidad y sostenibilidad económica, social y medio ambiental.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="header">
                                        <h4 class="title">Contactanos</h4>
                                        <p class="category">Redes Sociales</p>
                                    </div>
                                    <div class="content"> 
                                        <h4><i class="fa fa-phone-square"></i> 2849388</h4>
                                        <h4><i class="fa fa-bookmark"></i> Av. Landaeta #543</h4>
                                        <h4><i class="fa fa-envelope"></i> aopeb@aopeb.org</h4>
                                        <div class="legend">
                                            <i class="fa fa-facebook-square" style="font-size:48px;color: blue; margin-right: 80px"></i>
                                            <i class="fa fa-twitter-square" style="font-size:48px;color: skyblue; margin-right: 80px"></i>
                                            <i class="fa fa-youtube-square" style="font-size:48px;color:red; margin-right: 80px"></i>
                                        </div>
                
                
                                        <div class="footer">
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-check"></i> La Paz - Bolivia
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="header">
                                        <h4 class="title">Ubicacion</h4>
                                        <p class="category">Google Maps</p>
                                    </div>
                                    <div class="content">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7650.866092047707!2d-68.13113996735055!3d-16.504221337592003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2065711bba9f%3A0xcc2fca99ed7fcf5a!2sVillaSalome%20PUC!5e0!3m2!1ses-419!2sbo!4v1583297535514!5m2!1ses-419!2sbo" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                
                                        <div class="footer">
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-history"></i> La Paz - Bolivia
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.light.footter')
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="{{asset('light')}}/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="{{asset('light')}}/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src="{{asset('light')}}/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('light')}}/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('light')}}/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('light')}}/js/demo.js"></script>
	
</html>
