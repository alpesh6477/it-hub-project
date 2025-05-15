<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/7b3b228058.js" crossorigin="anonymous"></script>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <style>
        .footer_3{
            padding-left: 70px;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .footer {
            background: #333;
            color: #efefef;
            padding: 60px 0;
        }

        .footer h3 {
            font-weight: 300;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .footer a {
            display: block;
            text-decoration: none;
            color: #efefef;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            height: 45px;
            border-radius: 4px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
            outline: none;
            border: none;
        }

        .btn-primary {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            border-radius: 30px;
            padding: 10px 30px;
            font-size: 15px;
            cursor: pointer;
        }

        .social-icons {
            margin-top: 30px;
            display:flex;
            gap:10px;
        }

        .social-icons a {
            font-size: 22px;
            margin: 10px;
            cursor: pointer;
        }

        /* Media queries */
        @media (max-width: 990px) {
            .footer_3{
                padding-left: 15px;
                padding-top:20px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h3>USEFUL LINK</h3>
                    <ul class="list-unstyled">
                        <li><a href="health policy.php">Health policy</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="condition.php">Domain condition</a></li>
                        <li><a href="trainner.php">our trainer</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3>NEWSLETTER</h3>
                    <form>
                        <input type="text" class="form-control" placeholder="Your email address" required>
                        <button type="submit" class="btn btn-primary">SUBSCRIBE NOW</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 footer_3">
                    <h3>CONTACT</h3>
                    <p>chitra , 364004 <br>bhavnagar, gujrat</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/" class="fab fa-facebook"></a>
                        <a href="https://www.snapchat.com/" class="fab fa-snapchat"></a>
                        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                        <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Link to Bootstrap JS (Popper.js and jQuery are required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
