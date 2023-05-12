<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;

            background: url('Login.jpg')no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;

        }

        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .forget label input {
            margin-right: 3px;

        }

        .forget label a {
            color: #fff;
            text-decoration: none;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        .button {
            width: 50%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }

        .register {
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: underline;
        }
    </style>

    <section>

        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <input type="submit" class="button" value="Submit">
                </form>
            </div>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "INSERT INTO registration (r_username, r_email, r_password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "<div class='form-box'>";
                echo "<div class='form-value'>";
                echo "<form action='login.php' method='POST'>";
                echo "<h2>Saved Successfully!</h2>";
                echo "<input type='submit' class='button' value='Back to Login'>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        ?>

    </section>



</body>

</html>