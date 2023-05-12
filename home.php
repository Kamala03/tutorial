<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php  /* error_reporting(E_ERROR | E_PARSE); */ ?>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        ul {
            margin-left: 80px;
        }

        .navbar-brand {
            margin-left: 30px;
        }

        ul li {
            margin-left: 80px;
        }

        #userIcon{
            margin-left: 60px;
        }

        .main {
            height: 100vh;
            background-color: black;

        }

        #active {
            color: red;
        }

        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }
    </style>


    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href=''>Event Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" id="active" href='home.php'>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='event.php'>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='calendar.php'>Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registration.php'>Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='contact.php'>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='userProfile.php'><i class='fas fa-user-circle' id="userIcon" style='font-size:24px'></i></a>
                    </li>
                </ul>

            </div>
    </div>



</body>

</html>