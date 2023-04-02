<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Assets/personal info.css" />
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

    <title>Personal Info|Step 2</title>
  </head>
  <body>
    <main>
      <img
        src="./Assets/SUPA meal planner - Copy.svg"
        alt="intelliMeals logo"
        width="140px"
      />
      <nav style="position: absolute; left: 0; top: 10px">
        <a
          href="account info.html"
          style="
            font-size: 13px;
            text-decoration: none;
            color: #000;
            margin-left: 20px;
            font-weight: 700;
          "
          ><i class="fa-sharp fa-solid fa-arrow-left"></i>Step 2 of 4</a
        >
      </nav>

      <section>
        <h3 style="font-weight: 600; font-size: 1rem">Create your account</h3>
      </section>
      <p style="font-size: 0.8rem; margin-bottom: 10px">Personal Information</p>
      <form action="" method="post">
        <section class="input-container">
          <div class="input-field">
            <label for="user_first_name" style="font-size: 13px"
              >First Name:</label
            ><br />
            <input type="text" id="user_first_name" name="user_first_name" />
          </div>

          <div class="input-field">
            <label for="user_last_name" style="font-size: 13px"
              >Last Name:</label
            ><br />
            <input type="text" id="user_last_name" name="user_last_name" />
          </div>

          <div class="input-field">
            <label for="gender" style="font-size: 13px">Gender:</label><br />
            <select
              id="gender"
              style="
                padding: 10px;
                border-radius: 6px;
                border: 1px solid #ccc;
                box-shadow: inset;
                width: 100%;
              "
            >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="birth_date">
            <div>
              <label for="month" style="font-size: 13px">Month</label><br />
              <input
                type="text"
                name="month"
                id="month"
                placeholder="Month"
                list="months"
              />
              <datalist id="months">
                <option value="January"></option>
                <option value="February"></option>
                <option value="March"></option>
                <option value="April"></option>
                <option value="May"></option>
                <option value="June"></option>
                <option value="July"></option>
                <option value="August"></option>
                <option value="September"></option>
                <option value="October"></option>
                <option value="November"></option>
                <option value="December"></option>
              </datalist>
            </div>

            <div>
              <label for="day" style="font-size: 13px">Day</label><br />
              <input
                type="number"
                id="day"
                name="day"
                placeholder="DD"
                min="1"
                max="31"
              />
            </div>

            <div>
              <label for="yob" style="font-size: 13px">Year</label><br />
              <input
                type="text"
                placeholder="YYYY"
                id="yob"
                maxlength="4"
                max="2022"
                list="birth_year"
              />
              <datalist id="birth_year">
                <option value="2006"></option>
                <option value="2005"></option>
                <option value="2004"></option>
                <option value="2003"></option>
                <option value="2002"></option>
                <option value="2001"></option>
                <option value="2000"></option>
                <option value="1999"></option>
                <option value="1998"></option>
                <option value="1997"></option>
                <option value="1996"></option>
                <option value="1995"></option>
                <option value="1994"></option>
                <option value="1993"></option>
                <option value="1992"></option>
                <option value="1991"></option>
                <option value="1990"></option>
                <option value="1989"></option>
                <option value="1988"></option>
                <option value="1987"></option>
                <option value="1986"></option>
                <option value="1987"></option>
              </datalist>
            </div>
          </div>

          <div class="nxt-btn">
            <a href="health info.html">Next</a>
          </div>
        </section>
      </form>
    </main>
  </body>
</html>
