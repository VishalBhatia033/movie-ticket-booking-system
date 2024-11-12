<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Note</title>
    <link
      rel="shortcut icon"
      href="project_images/favicon-32x32.png"
      type="image/x-icon"
    />
    <style>
        body{
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .note{
            background-color: white;
            /* height: 50%; */
            width: 30%;
            padding: 1rem 2rem;
            border-radius: 0.4rem;

            
        }
        .note ul{
            list-style:decimal;
            margin: 0;
            padding: 0;

        }
        .note h4{
            text-align: center;
            font-weight: 400;
        }
        .note ul li{
            color: grey;
            font-size: 0.8rem;
            line-height: 140%;
            word-spacing: 2px;
        }
        .buttons{
            display: flex;
            justify-content: space-between;
            padding-top: 1rem;
        }
        .buttons button{
          padding: 0.5rem 0;
        }
        .cancle{
          width: 47%;
          border: 1px solid  rgb(250, 84, 84);
          background-color: transparent;
          border-radius: 0.4rem;
        }
        .accept{
          width: 47%;
          background-color: rgb(250, 84, 84);
          border: 1px solid  rgb(250, 84, 84);
          color: white;
          border-radius: 0.4rem;

        }
    </style>
  </head>
  <body>
    <div class="note">
        <h4>Notes</h4>
      <ul>
        <li>Outside Food & Beverages are not allowed inside the Cinema.</li>
        <li>Tickets are compulsory for children of 3 years & above.</li>
        <li>
          The person below the age of 18 years cannot be admitted for movies
          certified `A`.
        </li>
        <li>
          Items like laptops, cameras, knives, lighters, matchboxes, cigarettes,
          firearms, and all types of inflammable objects are strictly
          prohibited.
        </li>
        <li>
          Items, like carry bags, eatables, helmets, and handbags, are not
          allowed inside the theatres and are strictly prohibited. Kindly
          deposit at the baggage counter of the mall/cinema.
        </li>
        <li>
          For 3D movies, ticket price includes charges towards the usage of 3D
          glasses.
        </li>
        <li>
          In case the ticket is lost or misplaced, a duplicate ticket will not
          be issued.
        </li>
      </ul>
      <div class="buttons">
        <button class="cancle">Cancle</button>
        <button class="accept">Accept</button>
      </div>
    </div>
  </body>
</html>
