<?php
  /*
    Here you check if the person is logged in

    If the person is logged in, the code will redirect the person to the home page
    If the person is not logged in, the code will show or redirect to the 'Landing page '
  */

  $_POST['loggedIn'] = true; // this is an example that mimicks the person logged in already

  if(isset($_POST['loggedIn']))
  {
      header("Location: pages/home.php");
  }
  else
  {
      header("Location: pages/landingPage.php");
  }

?>