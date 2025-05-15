
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg" />
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        header {
            background-color: black;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: yellow;
        }
       

        nav {
            display: flex;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
            font-weight:600;
        }

        nav ul li a {
            text-decoration: none;
            color: red;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #0096cc;
        }

        .buttons a {
            text-decoration: none;
            color: white;
            border: 2px solid transparent;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .buttons a:hover {
            background-color: transparent;
            border-color: white;
        }

        nav i {
            color: white;
            cursor: pointer;
            display: none;
        }
        .menu{
            display:none;
        }

        /* Media Query for responsiveness */
        @media screen and (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: black;
            }

            nav ul li {
                margin: 0;
                margin-bottom: 10px;
            }

            .buttons {
                display: none;
            }

            .menu {
                display: block;
            }
        }
.logo .fas {
    width:200px;

}
    </style>
</head>

<body>
    <header style="display:flex;">
        <div class="logo"><i class=' fa fa-walking' style='font-size:30px;color:white'></i> Body Blast Gym <i class='fa fa-dumbbell' style='font-size:22px;color:red;'></i></div>

        <nav>
            <label for="click" class="menu" > <i class='bx bx-menu click' id="button_menu"></i></label>
            <ul class="nav_list" style="z-index:100;">
                <li><a href="index.php">Home</a></li>
                <li><a href="../html/about.php">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="achiv.php">Achievement</a></li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="career.php">Career</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="buttons">
            <a href="logout.php">Logout</a>
        </div>
    </header>

    <!-- Your page content goes here -->

    <script src="../js/header.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuIcon = document.getElementById('button_menu');
            const navList = document.querySelector('.nav_list');

            menuIcon.addEventListener('click', function () {
                navList.style.display = (navList.style.display === 'flex' || navList.style.display === '') ? 'none' : 'flex';
            
            });
        });
    </script>
   
</body>

</html>
