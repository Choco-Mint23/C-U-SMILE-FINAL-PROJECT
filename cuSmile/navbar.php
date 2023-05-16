

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link lg text-end fs-4 nav-services navbar-selections" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item nav-about">
                    <a class="nav-link text-end fs-4 navbar-selections" href="aboutUs.html">About</a>
                </li>
                <li class="nav-item">
                <form action="appointment.php" method="post">
                    <input type="submit" name="logout" value="Logout" class="appointmentButton">
                </form>

                <?php
                    if (isset($_POST['logout'])){
                        header("Location: login.php");
                    }
                ?>
                </li>
                </ul>
            </div>
        </div>
    </nav>
