
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div id="main-left">
                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
            </div>

            <div id="mySidenav" class="sidenav-left">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="logout.php">LogOut</a>
                <a href="#">Contact</a>
            </div>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="paklo\index.php" style="color:white">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php" style="color:white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php" style="color:white">GameShop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:white">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login">Home</a></li>
                            <li><a class="dropdown-item" href="#">Category</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

