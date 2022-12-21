<?php
$is_invalied = false;
if ($_SERVER["REQUEST_METHOD"] === "post") {
    $host = "localhost";
    $dataname = "user-info";
    $username = "root";
    $password = "";
    $conn = new mysqli($host, $username, $password, $dataname);
    $sql = sprintf(
        "SELECT * FROM `us-data` WHERE `emial`= '%s' ",
        $mysql->mysqli_real_escape_string($_POST['email'])
    );
    $result = $mysqli->query($sql);
    $data = $result->fetch_assoc();

    if ($data) {
        password_verify($_POST["password"], $user["password"]);
    }
    $is_invalied = true;
    ;

} ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css-sl.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>


    <form action="" method="post">
        <form action="pn.php" method="post">
            <div class="cont">
                <div class="form sign-in">
                    <h2>Sign In</h2>

                    <?php
                    if ($is_invalied): ?>
                    <em>invalied login</em>
                    <?php
                    endif;
                    ?>
                    <label>
                        <span>Email Address</span>
                        <input type="email" name="email" required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </label>
                    <button class="submit"> <a href="index2-home.html">sgin in</a></button>

                    <div class="social-media">
                        <ul>
                            <li><img src="images/facebook.png"></li>
                            <li><img src="images/twitter.png"></li>
                            <li><img src="images/linkedin.png"></li>
                            <li><img src="images/instagram.png"></li>
                        </ul>
                    </div>
                </div>
        </form>
        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>

            <form action="pn.php" method="post">
                <div class="form sign-up">
                    <h2>Sign Up</h2>
                    <label>
                        <span>email</span>
                        <input type="text" id="email" name="email" required>
                    </label>
                    <label>
                        <span>password</span>
                        <input type="password" id="password" name="password" required>
                    </label>
                    <label>
                        <span>name</span>
                        <input type="text" id="name" name="name" required>
                    </label>
                    <label>
                        <span>location</span>
                        <input type="text" id="location" name="location" required>
                    </label>
                    <label>
                        <span>Discribtion</span>
                        <textarea id="message" name="Discribtion" required></textarea>
                    </label>
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
                        <option value="1">plastic</option>
                        <option value="2" selected>orginc</option>
                        <option value="3">food</option>
                    </select>
                    <label>



                        <button class="submit"> <a href="su.php">sgin up</a></button>
                </div>
        </div>
        </div>
    </form>
    <script type=" text/javascript" src="script.js"></script>

</body>

</html>