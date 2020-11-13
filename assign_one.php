<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <h1>Charmie A. Cabanela</h1>
    <br>
    <form class="" action="assignment_one.php" method="post">
      <h3>---CALCULATOR---</h3>
      <p>Input the First number:</p>
      <input type="text" name="firstnum" value="">
      <p>Input the Second number:</p>
      <input type="text" name="secondnum" value="">
      <br>
      <br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="sub" value="-">
      <input type="submit" name="multi" value="*">
      <input type="submit" name="div" value="/">
      <br>
      <p id="answer"></p>
    </form>

    <?php
    //addition//
      if(isset($_POST['add']))
      {
        if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']))
        {
          $firstnum = $_POST['firstnum'];
          $secondnum = $_POST['secondnum'];
          $add = $firstnum + $secondnum;
          echo "<br>";
          echo "The Answer is: " . $firstnum . " + " . $secondnum . " = " . $add;
        }
        elseif(empty($_POST['secondnum']) && empty($_POST['firstnum']))
        {
          echo "no data inputted please try again";
        }
        elseif (empty($_POST['secondnum']))
        {
          echo "you need to input Second Number";
        }
        elseif (empty($_POST['firstnum']))
        {
          echo "you need to input First Number";
        }
      }//substract//
      elseif(isset($_POST['sub']))
      {
        if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']))
        {
          $firstnum = $_POST['firstnum'];
          $secondnum = $_POST['secondnum'];
          $add = $firstnum - $secondnum;
          echo "<br>";
          echo "The Answer is: " . $firstnum . " - " . $secondnum . " = " . $add;
        }
        elseif(empty($_POST['secondnum']) && empty($_POST['firstnum']))
        {
          echo "no data inputted please try again";
        }
        elseif (empty($_POST['secondnum']))
        {
          echo "you need to input Second Number";
        }
        elseif (empty($_POST['firstnum']))
        {
          echo "you need to input First Number";
        }
      }//multiplication//
      elseif(isset($_POST['multi']))
      {
        if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']))
        {
          $firstnum = $_POST['firstnum'];
          $secondnum = $_POST['secondnum'];
          $add = $firstnum * $secondnum;
          echo "<br>";
          echo "The Answer is: " . $firstnum . " * " . $secondnum . " = " . $add;
        }
        elseif(empty($_POST['secondnum']) && empty($_POST['firstnum']))
        {
          echo "no data inputted please try again";
        }
        elseif (empty($_POST['secondnum']))
        {
          echo "you need to input Second Number";
        }
        elseif (empty($_POST['firstnum']))
        {
          echo "you need to input First Number";
        }
      }
      //division//
      elseif(isset($_POST['div']))
      {
        if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']))
        {
          $firstnum = $_POST['firstnum'];
          $secondnum = $_POST['secondnum'];
          $add = $firstnum / $secondnum;
          echo "<br>";
          echo "The Answer is: " . $firstnum . " / " . $secondnum . " = " . $add;
        }
        elseif(empty($_POST['secondnum']) && empty($_POST['firstnum']))
        {
          echo "no data inputted please try again";
        }
        elseif (empty($_POST['secondnum']))
        {
          echo "you need to input Second Number";
        }
        elseif (empty($_POST['firstnum']))
        {
          echo "you need to input First Number";
        }
      }
    ?>

    <form class="" action="assignment_one.php" method="post">
      <h3>---Finding GCD---</h3>
      <p>Input the First Number:</p>
      <input type="text" name="firstnum" value="">
      <p>Input the Second number:</p>
      <input type="text" name="secondnum" value="">
      <br>
      <br>
      <input type="submit" name="gcd" value="Submit">
    </form>

    <?php

    if(isset($_POST['gcd']))
    {
      if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']))
      {
        $firstnum = $_POST['firstnum'];
        $secondnum = $_POST['secondnum'];

        if ($firstnum > $secondnum)
        {
          $temp = $firstnum;
          $firstnum = $secondnum;
          $secondnum = $temp;
        }
        for($i = 1; $i < ($firstnum+1); $i++)
        {
          if ($firstnum%$i == 0 and $secondnum%$i == 0)
            $gcd = $i;
        }
        echo " The GCD of $firstnum and $secondnum is: $gcd";
      }
      elseif(empty($_POST['secondnum']) && empty($_POST['firstnum']))
      {
        echo "no data inputted please try again";
      }
      elseif (empty($_POST['secondnum']))
      {
        echo "you need to input Second Number";
      }
      elseif (empty($_POST['firstnum']))
      {
        echo "you need to input First Number";
      }
    }
    ?>
  </body>
</html>