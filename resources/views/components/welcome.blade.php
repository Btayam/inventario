
<div class="content-wrapper">
    <div class="container">
        <!-- Título de la sección de inventario -->
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">INVENTARIO</h4>
            </div>
        </div>

        <!-- Cuadrantes con información de inventario -->
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info back-widget-set text-center">
                    <i class="fa fa-cogs fa-5x"></i>
                    <h3>500+&nbsp; <i class="fa fa-box"></i></h3>
                    Artículos disponibles en inventario
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <i class="fa fa-refresh fa-5x"></i>
                    <h3>300+ Items</h3>
                    Pendientes para reabastecer
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center">
                    <i class="fa fa-truck fa-5x"></i>
                    <h3>56+ Envíos</h3>
                    Pendientes para entregar
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-danger back-widget-set text-center">
                    <i class="fa fa-exclamation-triangle fa-5x"></i>
                    <h3>30+ Peligros</h3>
                    Artículos con vencimiento cercano
                </div>
            </div>
        </div>              

        <!-- Carrusel de imágenes de inventario -->
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/inventario_1.jpg" alt="Inventario 1" />
                        </div>
                        <div class="item">
                            <img src="assets/img/inventario_2.jpg" alt="Inventario 2" />
                        </div>
                        <div class="item">
                            <img src="assets/img/inventario_3.jpg" alt="Inventario 3" />
                        </div>
                    </div>

                    <!-- Indicadores del carrusel -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>

                    <!-- Botones de navegación del carrusel -->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <!-- Panel de chat reciente -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Historial de chat reciente
                    </div>
                    <div class="panel-body chat-widget-main">
                        <!-- Mensajes de chat -->
                        <div class="chat-widget-left">
                            Actualización de inventario: revisión de artículos dañados.
                        </div>
                        <div class="chat-widget-name-left">
                            <img class="media-object img-circle img-left-chat" src="assets/img/user2.png" />
                            <h4>María López</h4>
                            <h5>Hora: 2:00 pm, 25 de julio</h5>
                        </div>
                        <hr />
                        <div class="chat-widget-right">
                            Se necesitan más artículos para el restock.
                        </div>
                        <div class="chat-widget-name-right">
                            <img class="media-object img-circle img-right-chat" src="assets/img/user2.png" />
                            <h4>Juan Pérez</h4>
                            <h5>Hora: 2:30 pm, 25 de julio</h5>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>

        <!-- Usuarios recientes -->
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Usuarios recientes que actualizaron inventario
                    </div>
                    <div class="panel-body text-center recent-users-sec">
                        <img class="img-thumbnail" src="assets/img/user.gif" />
                        <img class="img-thumbnail" src="assets/img/user2.png" />
                        <img class="img-thumbnail" src="assets/img/user.gif" />
                    </div>
                </div>
            </div>

            <!-- Tabla de productos en inventario -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Productos en inventario
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Producto A</td>
                                        <td>100</td>
                                        <td>$10.00</td>
                                        <td>Disponible</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Producto B</td>
                                        <td>200</td>
                                        <td>$5.00</td>
                                        <td>Disponible</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Producto C</td>
                                        <td>50</td>
                                        <td>$20.00</td>
                                        <td>En reabastecimiento</td>
                                    </tr>
                                    <!-- Más productos -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comentarios recientes sobre inventario -->
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        Comentarios recientes sobre el inventario
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            <!-- Comentarios -->
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Necesitamos más stock del Producto A</h4>
                                    <p>El Producto A está agotado, necesitamos reabastecer inmediatamente.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Aviso importante sobre inventario -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3>Aviso Importante</h3>
                    </div>
                    <div class="panel-body">
                        Los artículos con vencimiento próximo deben ser gestionados inmediatamente para evitar pérdidas.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>