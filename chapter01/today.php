<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Today&rsquo;s Date</title>
  </head>
  <body>
    <p>Today&rsquo;s date (according to this web server) is
        <?php
        echo date('l, F jS Y.');
        ?>
    </p>
    <p>
        <?php
        echo 'This is a <strong>test</strong>!';
        ?>
    </p>
    <p>
        <strong>Variables</strong><br>
        <?php
        $testvariable = 3;
        echo "$testvariable<br>";
        $testvariable = 'string';
        echo "$testvariable<br>";
        $testvariable = 'hi ' . 'there';
        echo "$testvariable<br>";
        ?>
    </p>
    <p>
      <strong>Array</strong><br>
        <?php
        $myArray = array('one', 2, '3');
        echo $myArray[0];
        echo $myArray[1];
        echo $myArray[2];

        $myArray[1] = 'two'; // replace value
        $myArray[3] = 'four'; // create new element

        // add element
        $myArray[] = "the fifth element";
        echo $myArray[4];

        echo '<br>';
        $birthdays['Kevin'] = '1978-04-12';
        $birthdays['Stephanie'] = '1980-05-16';
        $birthdays['David'] = '1983-09-09';

        $birthdays = array('Kevin' => '1978-04-12',
            'Stephanie' => '1980-05-16', 'David' => '1983-09-09');
        echo 'My birthday is: ' . $birthdays['Kevin'];

        ?>
    </p>
  </body>
</html>
