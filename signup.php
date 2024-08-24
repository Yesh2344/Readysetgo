<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email_id = $_POST['email_id'];
		$user_last_name = $_POST['user_last_name'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !is_numeric($user_last_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_last_name,email_id,password) values ('$user_id','$user_name','$user_last_name','$email_id','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Register Page</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <!-- Section: Design Block -->
  <section class="text-center text-lg-start">
    <style>
      .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        border-color: #D7B1D7;
        background-color: #D7B1D7;
        }

      .cascading-left {
        margin-left: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-left {
          margin-left: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="full-shot-fit-woman-training-indoors.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-left" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign up now</h2>
              <form method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="text" id="form3Example1" class="form-control" name="user_name" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="text" id="form3Example2" class="form-control" name="user_last_name"/>
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-floating mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email_id" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-floating mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" default />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our monthly guides
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block mb-4">
                  Sign up
                </button>
								

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn text-dark btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn text-dark btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn text-dark btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn text-dark btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>

									<p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
								class="link-danger">Login now</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
</html>
