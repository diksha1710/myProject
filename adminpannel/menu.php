
    
    <style>
    li a:hover:not(.active) {
  background-color:salmon;
  color: white;
}
li a:hover {
  background-color:salmon;
  color: white;
}
</style>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color:black;padding-right:50px">
                <div class="navbar-collapse collapse">
                    <ul id="menu-top" class="nav navbar-nav navbar-right" >
                        <li><a class="menu-top-active" href="home.php" style="color:white"><span class="glyphicon glyphicon-home "> HOME</span></a></li>
                        <li class="dropdown-hover">
                        <a href="" class="nav-link dropdown-toggle arrow" data-toggle="dropdown" style="color:white"><span class="glyphicon glyphicon-user "> USER</a>
                        <ul class="dropdown-menu">
                            <li><a href="add_users.php">Add Users</a></li>
                            <li><a href="users_list.php">List of Users</a></li>
                        </ul>
                        </li>
                        
                        <li class="dropdown-hover">
                    <a href="product.php" class="nav-link dropdown-toggle arrow" data-toggle="dropdown" style="color:white">PRODUCT</a>                    
                    <ul class="dropdown-menu">
                       <li><a href="product.php">Mobile</a></li>
                    </ul>
                </li>
                        <li><a href="query.php" style="color:white"><span class="glyphicon glyphicon-log-in "> QUERY</a></li>
                        <li><a href="logout.php" style="color:white"><span class="glyphicon glyphicon-log-in "> LOGOUT</a></li>
                            
                    </ul>
                </div>
            </div>
            </div>
    </div>
</nav>






