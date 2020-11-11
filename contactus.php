<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US | PDF BOOKS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    

    <link rel="stylesheet" href="./css/contactus.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        
        <a class="navbar-brand" href="index.php">PDF BOOKS</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="books.php">Books</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="papers.php">Previous Papers</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="aboutus.php">About Us </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
                </li>
            
            </ul>

            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section class="my-4 py-5">
        <h1 class="text-center">Contact Us</h1>
        
        <h4 class="py-3 text-center contacts">E-mail : kartik.varshney_cs18@gla.ac.in</h4>
        <h4 class="py-3 text-center contacts"> <p> Github : <a href="https://github.com/Kartik1411" target="_blank"> Kartik1411 </a></p></h4>
        
        <div class="social text-center">
            <a href="#"><i class="fa fa-facebook fa-2x mx-3"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x mx-3"></i></a>
            <a href="#"><i class="fa fa-linkedin fa-2x mx-3"></i></a>
        </div>
    </section>

    <hr>

    <section>
        <div class="py-5">
            <h2 class="text-center">Contact Form</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter User Name">
                </div>

                <div class="form-group">
                    <label> E-mail </label>
                    <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Email ID">
                </div>

                <div class="form-group">
                    <label> Mobile Number </label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Mobile Number">
                </div>

                <div class="form-group">
                    <label> Comments </label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </section>

    <br>
    <br>

    <footer>
        <p class="p-3 bg-dark text-white text-center "> © PDF BOOKS | 2020 </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>