<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Processing form content" />
  <title>Request Denied</title>
  <link rel="stylesheet" href="clubhouse.css" />
  <style>

  * {
          box-sizing: border-box;
        }

        body {
          /*background-image: url("background.jpg");*/
          /* Full height */
          background-image:url("img/bkimg.png");
          height: 100%;
          width: 100%;
          /* Center and scale the image nicely */
          background-position: right;
          background-repeat: no-repeat;
          background-size: cover;
          z-index: 1;
        }
    </style>
</head>

<body>
  <p><?php
/* This page receives and handles the data generated by a form.
The predefined $_POST variable is used to collect values from a form sent with method="post".
Information sent from a form with the POST method is invisible to others and has no limits on the amount of information to send. */
print "<h1>We're sorry, the court is reserved at</h1><br />\n {$_POST['Time']}\n";
print "<h3>Suburbika is ranked the fifth safest city in {$_POST['Yourlocation']}\n";
print "<h3>The median income of a resident in Suburbika makes twice as much as a {$_POST['Occupation']}\n";
print "<h3>Residents in Suburbika have a life expenctancy 10 years longer than someone who experiences {$_POST['Covid']}\n";
print "{$_POST['Housing']}\n does not compute";
?><p>
</body>

</html>
