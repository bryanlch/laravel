<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Diamond Club</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">  

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">    
    

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>
    
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <button class="navbar-toggler fa fa-bars tooltips " type="button">
                      <span class="navbar-toggler-icon"></span>

                  </button>
              
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

              </div>

            <a href="index.html" class="logo"><b>Diamond Club</b></a>
            <div class="nav notify-row" id="top_menu">
   
            </div>
            <div class="top-menu form-inline my-2 my-lg-0">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout my-2 my-sm-0" href="login.html">Logout</a></li>
              </ul>
            </div>
        </header>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/diamante.svg')}}" width="100"></a></p>
                  <h5 class="centered">Menu</h5>
                    
                  <li class="mt">
                      <a  href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>DashBoard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Almacen</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('almacen/categoria')}}">Categoria</a></li>
                          <li><a  href="{{url('almacen/articulo')}}">Articulo</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Compra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Ingresar Compra</a></li>
                          <li><a  href="#">Provedores</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Venta</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Ingresar Venta</a></li>
                          <li><a  href="#">Cliente</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('compras/cliente')}}" >
                          <i class="fa fa-desktop"></i>
                          <span>Cliente</span>
                      </a>
                   </li>
                  <li class="sub-menu">
                      <a  href="{{url('ventas/provedor')}}" >
                          <i class="fa fa-desktop"></i>
                          <span>Proveedor</span> 
                      </a>
                   </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Usuario</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Reporte</span>
                      </a>
                  </li>

              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
              @yield('contenido')
           </section>
      </section>

      <footer class="site-footer">
          <div class="text-center">
              Bryan and Renner Ingenieria de Software II
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js" type="text/javascript')}}"></script>
    <script src="{{asset('assets/js/jquery.sparkline.js')}}"></script>

    <script src="{{asset('assets/js/common-scripts.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/gritter-conf.js')}}"></script>

    <script src="{{asset('assets/js/sparkline-chart.js')}}"></script>    
  <script src="{{asset('assets/js/zabuto_calendar.js')}}"></script>  
  


  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
