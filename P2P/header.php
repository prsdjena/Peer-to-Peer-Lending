<style type="text/css">
    header {
        padding: 10px;
    }
    
    
</style>
<?php
if (isset($_SESSION['log']) == "") {
?>
    <header style="background:black; padding: 5px;">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="index.php"><img src="img/HOME.png" alt="home button" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">


                    <li class="menu-has-children"><a> P2P Lending</a>
                        <ul>
                            <li><a href="#" onclick="myfunction()">Lend</a></li>
                            <li><a href="#" onclick="myfunction()">Borrow</a></li>
                        </ul>
                    </li>
                    <li> <a href="#team">About Team</a></li>
                   <li> <a href ="#contact">Contact Us</a></li>

                    <li class="menu-has-children"><a>Login</a>
                        <ul>
                            <li><a href="login.php">Existing User</a></li>
                            <li><a href="signup.php">New User</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
<?php
} else if ($_SESSION['log1'] == "user") {
?>
    <header style="background: black; padding: 5px;">
        <div class="container">

            <div id="logo" class="pull-left">
               <a href="index.php"><img src="img/HOME.png" alt="Home" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="index.php">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">


                   
                            <li><a href="P2P.php">Lend</a></li>
                            <li><a href="loanp2p.php">Borrow</a></li>
                   

             

                    <li class="menu-has-children"><a><?php echo $_SESSION['log']['name']; ?></a>
                        <ul>
                            <li><a href="Dashboard.php">Dashboard</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
<?php
} else {
?>
    <header style="background: black; padding: 5px;">
        <div class="container">

            <div id="logo" class="pull-left">
               <a href="index.php"><img src="img/HOME.png" alt="Home" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">


                    <li class="menu-has-children"><a> P2P Lending</a>
                        <ul>
                            <li><a href="#" onclick="myfunction()">Lend</a></li>
                            <li><a href="#" onclick="myfunction()">Borrow</a></li>
                        </ul>
                    </li>

                        <li> <a href="#team">About Team</a></li>
                   <li> <a href ="#contact">Contact Us</a></li>
                

                    <li class="menu-has-children"><a>Login</a>
                        <ul>
                            <li><a href="login.php">Existing User</a></li>
                            <li><a href="signin.php">New User</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- #nav-menu-container -->
        </div>
    </header>
<?php
}
?>
<script>
    function myfunction() {
        alert("LogIn First");
    }
</script>
