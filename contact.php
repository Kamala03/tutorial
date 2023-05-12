<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-axJDvPQWCH0UfTBPOY9eb5U6vG8WlMwfe6fEB+IhjvZ8QXdWnETVA6Y+X9U5Tw6pe5B6+WsHBC95Fwm6q3vqJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            color: white;
            background-color: black;
        }

        #navbarNav ul {
            margin-left: 80px;
        }

        .navbar-brand {
            margin-left: 20px;
        }

        ul li {
            margin-left: 100px;
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

        form {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 90px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input,
        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            height: 100px;
            margin-top: 39px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        li {
            margin: 0 10px;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        .icon {
            font-size: 24px;
            display: inline-block;
            margin-right: 5px;
        }

        .contact {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .phone {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .phone .icon {
            margin-right: 10px;
        }
    </style>





    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <a class="navbar-brand" href=''>Event Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href='home.php'>Home</a>
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
                    <li class="nav-item active">
                        <a class="nav-link" id="active" href='contact.php'>Contact Us</a>
                    </li>
            </div>
    </div>


    <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Send">
    </form>

    <footer>
        <ul>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.instagram.com/">Instagram</a></li>
            <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
            <li><a href="https://www.youtube.com/">YouTube</a></li>
            <li><a href="mailto:example@gmail.com">Email</a></li>
        </ul>
        <div class="contact">
            <div class="phone">
                <i class="fas fa-phone-square icon"></i>
                <p>+994(50)-500-50-50</p>
            </div>
            <p>Mahsati 41 St. | Baku, Azerbaijan AZ1096</p>
        </div>
    </footer>


</body>

</html>