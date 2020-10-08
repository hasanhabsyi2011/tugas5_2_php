<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Operator String</h1>

    <?php
    $input1="Ayo";
    $input1_1="Bersama";
    $input2="Belajar";
    $input2_1="Niomic";

    $hasil1 = $input1." ".$input2;
    $hasil2 = $input1_1." ".$input2_1;


     ?>

     <table border="1">
     			<tr>
     				<td>Input 1</td>
     				<td>Input 2</td>
            <td>Hasil</td>
     			</tr>
     			<tr>
     				<td><?php echo $input1 ?></td>
     				<td><?php echo $input2 ?></td>
            <td><?php echo $hasil1 ?></td>
     			</tr>
          <tr>
            <td><?php echo $input1_1 ?></td>
     				<td><?php echo $input2_1 ?></td>
            <td><?php echo $hasil2 ?></td>
     			</tr>
    </table>

    <p>Gabungan: <?php echo $hasil1 ?> <?php echo $hasil2 ?> :) </p>

  </body>
</html>
