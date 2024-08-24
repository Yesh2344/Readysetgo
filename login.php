<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email_id = $_POST['email_id'];
		$password = $_POST['password'];

		if(!empty($email_id) && !empty($password) && !is_numeric($email_id))
		{

			//read from database
			$query = "select * from users where email_id = '$email_id' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index3.html");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login Page</title>
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
          <img src="medium-shot-fit-woman-stretching-indoors.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-left" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Login now</h2>
              <form method="post">

                <!-- Email input -->
                <div class="form-floating mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="email_id" />
                  <label class="form-label" for="form3Example3">Email Address</label>
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
                    Remember me
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block mb-4">
                  Login
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or login with:</p>
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

                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Sign up now</a></p>

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
