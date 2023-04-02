<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Assets/login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="./Assets/IntelliMeals logo .svg" />
    <meta
      name="description"
      content="intellieals is a web based application that offers you food suggestions,timely reminders and nutrition literature."
    />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="intelliMeals" />
    <meta
      property="og:description"
      content="intellieals is a web based application that offers you food suggestions,timely reminders and nutrition literature."
    />
    <meta
      property="og:url"
      content="https://intelli-meals-deploy.vercel.app /"
    />
    <meta
      property="og:image"
      content="https://intelli-meals-deploy.vercel.app/Assets/restaurantchef.jpg"
    />

    <title>Login</title>
  </head>
  <body>
    <main>
      <img
        src="./Assets/SUPA meal planner - Copy.svg"
        alt="intelliMeals logo"
        width="140px"
      />

      <section>
        <h3 style="font-weight: 600; font-size: 1rem">
          Log in to Supa Meal Planner
        </h3>
      </section>
      <form action="" method="post">
        <section class="input-container">
          <div>
            <label for="user_name" style="font-size: 13px"
              >Username or email address</label
            ><br />
            <input
              type="text"
              id="user_name"
              name="user_name"
              required
              onkeyup="validateUserName()"
            />
          </div>

          <div>
            <label for="user_password" style="font-size: 13px">Password</label
            ><span
              ><a
                href=""
                style="
                  color: #0969da;
                  text-decoration: none;
                  margin-left: 150px;
                  font-size: 13px;
                "
                >Forgot password?</a
              > </span
            ><br />
            <input
              type="password"
              id="user_password"
              name="user_password"
              required
              onkeyup="validateUserPassword()"
            />
          </div>

          <div class="login-button">
            <a href=""> <button type="submit" id="login_btn">Log in</button></a>
          </div>
        </section>
      </form>
      <p class="or">OR</p>
      <div class="options">
        <button style="display: flex; justify-content: center">
          <div class="google-logo"></div>
          <div class="sign-in-text">Sign in with Google</div>
        </button>
      </div>
      <div class="options">
        <button style="padding: 14px">
          New to Supa Meal Planner?
          <a href="" style="color: #0969da; text-decoration: none"
            >Create an account?</a
          >
        </button>
      </div>
    </main>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
