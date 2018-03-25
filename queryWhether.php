<?php
include "connectDB.php";
$resultsLATTE001 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-001' ");
$resultsLATTE001->execute();

$resultsLATTE002 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-002' ");
$resultsLATTE002->execute(); 

$resultsLATTE003 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-003' ");
$resultsLATTE003->execute(); 

$resultsLATTE004 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-004' ");
$resultsLATTE004->execute(); 

$resultsLATTE005 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-005' ");
$resultsLATTE005->execute(); 

$resultsLATTE006 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-006' ");
$resultsLATTE006->execute(); 

$resultsLATTE007 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-007' ");
$resultsLATTE007->execute(); 

$resultsLATTE008 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-008' ");
$resultsLATTE008->execute(); 

$resultsLATTE009 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-009' ");
$resultsLATTE009->execute(); 

$resultsLATTE010 = $con->prepare("SELECT * FROM whether WHERE name = 'LATTE-010' ");
$resultsLATTE010->execute(); 

// $whetherDelete = $con->prepare("DELETE FROM whether");			
// $whetherDelete->execute();	
?>
<html>

<body>
 <h2>LATTE-001</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE001 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-002</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE002 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-003</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE003 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-003</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE003 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-04</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE004 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-005</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE005 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-006</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE006 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-007</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE007 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-008</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE008 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-009</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE009 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
<h2>LATTE-010</h2>   
<table border="1">
  <tr>
  <th>name</th>
        <th>time_stamp</th>
        <th>presure</th>
        <th>temp</th>
        <th>hum</th>
  </tr>
  <?php
            foreach($resultsLATTE010 as $row):
            ?>
            <tr>
                <td>
                    <?=$row["name"]?>
                </td>
                <td>
                    <?=$row["time_stamp"]?>
                </td>
                <td>
                    <?=$row["presure"]?>
                </td>
                <td>
                    <?=$row["temp"]?>
                </td>
                <td>
                    <?=$row["hum"]?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
</table>
</body>
</html>