 <?php
include('config.php');

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    
    <link rel="stylesheet" href="index.css">

    <script src="index.js"></script>
    
</head>
<body>
    
    <title>For You</title>
    <div class="container mt-5">
        <div class="row">
            <h1 id="register">Khabri</h1>
            <div class="all-steps" id="all-steps"> 
                <span class="step"><i class="fa fa-user"></i></span> 
                <span class="step"><i class="fa fa-map-marker"></i></span>
                <img src="spy1.png"  width="200" class=" ">
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="background-color: black;">
                    <form action="anon.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="message" style="color: white;">Message:</label>
                            <input class="form-control" type="text" name="msg" placeholder="Type your message here">
                        </div>
                        <div class="form-group py-2">
                            <label for="file" style="color: white;">File:</label>
                            <input class="form-control" type="file" name="file">
                        </div>
                        <div class="form-group py-2">
                            <label for="phn_no" style="color: white;">Phone Number:</label>
                            <input class="form-control" type="password" name="phn" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group py-2">
                            <button class="btn btn-success" type="submit" name="send">Submit</button>
                        </div>
                    </form>  
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>