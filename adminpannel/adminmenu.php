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
<nav class="navbar navbar-expand-sm navbar-dark fixed" style="background-color: black">
    
    <!--<div id="hint"></div>
    <div id="hint" style="position: absolute; background-color: white"></div>
    <button class="btn btn-outline-dark-btn-sm" onclick="getProduct()"></button> -->       
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="home.php" style="color:white"><span class="fas fa-box "> Home</span></a>
                    </li>    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="add_users.php">Add users</a>
                                <a class="dropdown-item" href="users_list.php">List of users</a>
                            </div>
                    </li>        
               
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>Product</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="product.php">Mobile</a>
                             
                            </div>
                    </li> 
                    <li class="nav-item"><a href="query.php" style="color:white" class="nav-link text-light"><span >Query</span></a></li>
                        <li class="nav-item"><a href="logout.php" style="color:white" class="nav-link text-light"><span class="glyphicon glyphicon-user">Logout</span></a></li>
                </ul>
            </div>
        </nav>
