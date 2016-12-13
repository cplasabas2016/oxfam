<html>

    <head>
        <title>Oxfam</title>


        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-custom-home.css" rel="stylesheet" type="text/css"/>
           <link href="css2/mdb.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/png" href="resources/Oxfam_Circle_Green-min.png"/>
   

        <script src="js2/bootstrap.min.js" type="text/javascript"></script>
        <script src="js2/jquery.min.js" type="text/javascript"></script>
        <script src="js2/mdb.min.js" type="text/javascript"></script>

        <?php
        session_start();

        $mysql = new mysqli("localhost", "root", "", "oxfam");

        ?>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="resources/Oxfam_Circle_Green-min.png" class="symbol" />
                </div>

                <ul class="nav navbar-nav ">
                    <li ><a href="home.php">DASHBOARD</a></li>
                     <!--    <li><a href="orders.php" >ORDERS</a></li>-->    
                    <li ><a href="inventory.php"  >INVENTORY</a></li> 
                    <li><a href="suppliers.php"  >SUPPLIERS</a></li> 
                    <li  class="active"><a href="reports.php"  >REPORTS</a></li> 
                </ul>



                <form class="navbar-form navbar-right">
                    <div class="input-group has-feedback search-bar-wrapper">
                        <input type="text" class="form-control search-bar" placeholder="Search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>

            </div>
        </nav>

    </body>


</html>