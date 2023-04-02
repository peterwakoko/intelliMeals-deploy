<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Assets/food select.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="./Assets/IntelliMeals logo .svg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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

    <title>Food Select|Step 4</title>
  </head>
  <body>
    <main class="info">
      <div style="position: absolute; left: 0; top: 10px">
        <a
          href="health info.html"
          style="
            font-size: 13px;
            text-decoration: none;
            color: #000;
            margin-left: 20px;
            font-weight: 700;
          "
          ><i class="fa-sharp fa-solid fa-arrow-left"></i>Step 4 of 4</a
        >
      </div>
      <h1 style="font-size: 1rem">Create your account</h1>
      <h3 style="font-size: 0.7rem; font-weight: 500">
        Select your preferred foods
      </h3>
      <div class="mobile-search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" placeholder="search foods" />
      </div>
      <div class="scrollmenu">
        <button class="selected">Proteins</button>
        <button>Carbohydrates</button> <button>Fats</button>
        <button>Vitamins</button>
      </div>
      <div class="foods">
        <button>Rice</button>
        <button>Beans</button>
        <button>Chicken</button>
        <button>Goats Meat</button>
        <button>Matooke</button>
        <button>Cowpeas</button>
        <button>Bread</button>
        <button>Millet</button>
        <button>Greens</button>
      </div>
      <div style="display: flex; justify-content: center">
        <button class="mobile-sign-up">Sign up</button>
      </div>
    </main>
    <nav style="position: absolute; left: 0; top: 10px">
      <a
        href="health info.html"
        style="
          font-size: 13px;
          text-decoration: none;
          color: #000;
          margin-left: 20px;
          font-weight: 700;
        "
        ><i class="fa-sharp fa-solid fa-arrow-left"></i>Step 4 of 4</a
      >
    </nav>
    <section>
      <img
        src="./Assets/SUPA meal planner - Copy.svg"
        alt="intelliMeals logo"
        width="140px"
      />
      <h3 style="font-weight: 600; font-size: 1rem">Create your account</h3>
      <p style="font-size: 0.8rem">Select your preferred foods</p>

      <form action="" method="post">
        <section class="input-container">
          <div class="search-field">
            <i class="fa-solid fa-magnifying-glass"></i
            ><input type="search" placeholder="search food" autofocus />
          </div>
        </section>
      </form>
    </section>

    <div class="container">
      <aside>
        <h5 style="font-weight: 100">Main Nutrients</h5>

        <div style="border-bottom: 1px solid #ccc">
          <button
            style="
              background: #2da44e;
              border: none;
              color: #fff;
              text-align: left;
              text-indent: 30px;
              padding: 10px;
              border-radius: 10px;
              font-size: 0.8rem;
              width: 100%;
              margin: 10px;
            "
          >
            Proteins
          </button>
        </div>
        <div style="border-bottom: 1px solid #ccc">
          <button class="food-category">Carbohydrates</button>
        </div>
        <div style="border-bottom: 1px solid #ccc">
          <button class="food-category">Fats</button>
        </div>

        <div style="border-bottom: 1px solid #ccc">
          <button class="food-category">Vitamins</button>
        </div>
      </aside>
      <main>
        <h6 style="margin-top: 30px">Proteins</h6>
        <div class="food-list">
          <button>Rice</button>
          <button>Beans</button>
          <button>Chicken</button>
          <button>Beans</button>
          <button>Chicken</button>
          <button>Beans</button>
          <button>Chicken</button>
        </div>

        <div class="food-list">
          <button>Goats Meat</button>
          <button>Matooke</button>
          <button>Cowpeas</button>
          <button>Matooke</button>
          <button>Cowpeas</button>
          <button>Cowpeas</button>
        </div>

        <div class="food-list">
          <button>Eggs</button>
          <button>Peanuts</button>
          <button>Yorghut</button>
          <button>Groundnuts</button>
          <button>Fish</button>
          <button>Beef</button>
        </div>
      </main>
    </div>

    <div class="sign-up-btn">
      <a href="dashboard.html">Finish</a>
    </div>
  </body>
</html>
