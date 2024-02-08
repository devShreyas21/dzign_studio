<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        @media screen and (min-width: 480px) {
            .vector{
                width: 30%;
                margin-bottom: 50px;
            }
        }

        @media screen and (max-width: 480px) {
            .vector{
                width: 70%;
                margin-bottom: 50px;

            }
        }
        
    </style>

</head>
<body class="container d-flex justify-content-center align-items-center" style="height:100vh">
    
    <div style="background-color:white" >
        
        <div class="">
            <div class="row">
                <span class="text text-end pe-5 pt-5" style="color: #5B647A;"><a href="./index.php">Close</a></span>
            </div>
            <div class="row">
                <span class="text text-center" style="font-size:25px;color: #5B647A;">TESTIMONIAL</span>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="text-center my-4">
                    <img class="vector" src="./img/Testimonial-16.png" alt="">
                </div>
            </div>
            <div class="mb-4">
                                <?php 
                                    if(isset($_GET['message'])){
                                        echo "<div class='alert alert-danger' role='alert'>Fill all the fields</div>";
                                    }
                                    else {
                                        // echo "Response recorded";
                                    }
                                ?> 
                <form class="row g-3 d-flex justify-content-center" method="post" action="./addTestimonial.php">
                    <div class="row d-flex justify-content-center">


                        <div class="col-md-3">
                            <div>
                                
                                <input type="text" name="name" class="custom_1" placeholder="Name" style="outline:none">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>

                                <input type="email" name="email" class="custom_1" placeholder="Email" style="outline:none">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center my-3">
                        <div class="col-md-6">
                            <input type="text" name="testimonial" class="custom_1" placeholder="Testimonial" style="outline:none">
                        </div>
                    </div>   
    
                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary btn_submit">Submit</button>                                    
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script src="./js/bootstrap.js"></script>

</body>
</html>