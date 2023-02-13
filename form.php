<?php
// require_once './php/session.php';
require_once './assets/php/session.php';

echo '<link href="./assets/css/form.css" rel="stylesheet"/>';
echo '<link rel="icon" href="./assets/icon/favicon.ico" />';
?>
<title>Form</title>

<body>
    <?php

    include "./assets/php/database.php";

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        // $password = mysqli_real_escape_string($con,$_POST['password']);
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));

        //pass = password_hash($password, PASSWORD_BCRYPT);


        $emailquery = " SELECT * FROM purnaDriveData WHERE email='$email' ";
        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);

        if (
            $emailcount >
            0
        ) { ?>
            <script>
                alert("Email already exists!!!!");
            </script>
            <?php
        } else {
            $insertquery = " INSERT INTO purnaDriveData(username,email,password) VALUES('$username','$email','$password') ";
            // $insertquery = " INSERT INTO purnaDriveData(username,email,password) VALUES('$username','$email','$pass') ";
            $iquery = mysqli_query($con, $insertquery);

            if ($iquery) {
            ?>
                <!-- <script>
    alert("Inserted Successful");
    </script> -->
            <?php
            } else {
            ?>
                <!-- <script>
    alert("Not inserted");
    </script> -->
    <?php
            }
        }
    }
    ?>

    <div class="box">
        <div class="inner">
            <div class="island_popup">
                <div class="content">
                    <div class="details">
                        <div class="imgBx">
                            <img src="./assets/img/purna.webp" />
                        </div>
                        <p>Purna Drive<i class="fa-solid fa-lock"></i></p>
                    </div>
                    <div class="action">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" fill="none">
                            <path fill="#265BFF" d="M15.236 10.811a.736.736 0 01-.736-.736V8.811a2.5 2.5 0 00-5 0v5H8v-5a4 4 0 018 0v1.236a.764.764 0 01-.764.764z" style="animation:lock 1s cubic-bezier(1,-.43,0,1.29) both infinite alternate-reverse" />
                            <path fill="#fff" d="M6.6 13.704a3 3 0 013-3h4.8a3 3 0 013 3v3a3 3 0 01-3 3H9.6a3 3 0 01-3-3v-3z" />
                            <path fill="#0A0A30" d="M9.6 11.454h4.8v-1.5H9.6v1.5zm7.05 2.25v3h1.5v-3h-1.5zm-2.25 5.25H9.6v1.5h4.8v-1.5zm-7.05-2.25v-3h-1.5v3h1.5zm2.25 2.25a2.25 2.25 0 01-2.25-2.25h-1.5a3.75 3.75 0 003.75 3.75v-1.5zm7.05-2.25a2.25 2.25 0 01-2.25 2.25v1.5a3.75 3.75 0 003.75-3.75h-1.5zm-2.25-5.25a2.25 2.25 0 012.25 2.25h1.5a3.75 3.75 0 00-3.75-3.75v1.5zm-4.8-1.5a3.75 3.75 0 00-3.75 3.75h1.5a2.25 2.25 0 012.25-2.25v-1.5zm1.543 5.198a.857.857 0 011.714 0v.104a.857.857 0 11-1.714 0v-.104z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="main">
                <input type="checkbox" id="check" aria-hidden="true" />

                <div class="login">
                    <form action="./assets/php/process.php" method="POST">
                        <label class="label-title" for="check" aria-hidden="true">Login</label>

                        <div class="inputBox">
                            <input type="text" name="username" required="" />
                            <!-- <i class="bi bi-person-fill-check"></i> -->
                            <span>Username</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required="" />
                            <!-- <i class="bi bi-lock-fill"></i> -->
                            <span>Password</span>
                        </div>
                        <div class="checkBox">
                            <input class="checkbox-btn" type="checkbox" name="" />
                            <span>remember me</span>
                            <br />
                            <a href="./assets/php/logout.php">logout</a>
                        </div>

                        <input type="submit" name="submit" class="login-btn" value="Log in" />
                    </form>
                </div>

                <div class="signup">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <label class="label-title" for="check" aria-hidden="true">Sign Up</label>

                        <div class="inputBox">
                            <input type="text" name="username" required="" id="username" />
                            <!-- <i class="bi bi-person-fill-check"></i> -->
                            <span>Username</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" required="" id="email" />
                            <!-- <i class="bi bi-envelope-at-fill"></i> -->
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required="" id="password" />
                            <!-- <i class="bi bi-lock-fill"></i> -->
                            <span>Password</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="code" required="" id="code" />
                            <span>Refer Code</span>
                        </div>
                        <input type="submit" name="submit" class="signup-btn" value="Sign Up" />
                    </form>
                </div>
            </div>
        </div>
        <i class="btn btn1"></i>
        <i class="btn btn2"></i>
        <i class="btn btn3"></i>
        <i class="rightSideBtn"></i>
    </div>
    <script>
        let popup = document.querySelector(".island_popup");
        popup.onclick = function() {
            popup.classList.toggle("active");
        };
    </script>
</body>

</html>