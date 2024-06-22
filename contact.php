

<?php


    $con=mysqli_connect("localhost:3306","root","","contact_us");
    
    if(isset($_POST['f_Submit'])){
        $Name=$_POST['f_name'];
        $Reference=$_POST['f_Reference'];
        $Email=$_POST['f_email'];
        $Message=$_POST['f_message'];
        $query=mysqli_query($con,"insert into contact(Name,Reference,Email,Message) values('$Name','$Reference','$Email','$Message')");

}

?>

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7f257b9379.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact</title>
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <h1 class="logo">P.S</h1>
            <ul class="nav-items">
                <li class="nav-item"><a href="./index.html">Home</a></li>
                <li class="nav-item"><a href="./about.html">About</a></li>
                <li class="nav-item"><a href="./contact.html">Buy Now</a></li>
            </ul>
        </div>
    </nav>

    <section class="contact-form">
        <div class="container-contact">
            <div class="form-wrapper">
                <div class="company-address">
                    <i class="fas fa-map-marker-alt fa-3x" style="color: #d10e0e;"></i>
                    <h2>LOCATION</h2>
                    <p>Ashuliya,Savar</p>
                    <i class="fas fa-envelope fa-3x" style="color: #1e0cbd;"></i>
                    <h2>E-MAIL</h2>
                    <p>xyz@gmail.com</p>
                    <i class="fab fa-twitter fa-4x" style="color: #d10e0e;"></i>
                    <h2>Bkash</h2>
                    <p>+8801648129429</p>
                    <h1><p>Don't forget to donate</p></h1>

                    <img src="./img/giphy.gif" alt="Image">
                   
                   <h3 id='d_nid'></h3> 
                   <h3 id='d_pid'></h3> 
                </div>
                <form action="" method="post" class="form">
                    <h1>Buy Now</h1>
                    <p>: Let us know your buying details.<br>
                    : For Suggestions and concerns and other Requirments fill out the message section below.</p>

                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="f_name" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Reference Id</label>
                        <input type="text" name="f_Reference" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="f_email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="f_message" id="message" required></textarea>
                    </div>
                    <button type="submit"  name="f_Submit" nam class="form-btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-twitter fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>

        </div>
        <p>Get your best BUddy.</p>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src="./script.js"> </script>
    </footer>
</body>
</html>

