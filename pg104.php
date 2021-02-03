<html>
<head>
    <meta name="viewport" >
    <style>
        body {margin:0;}
        body {
            background-image: url("https://i.pinimg.com/564x/99/79/4a/99794a7147a58dd8e63b06785c39d5db.jpg");
            background-repeat: repeat;
            background-size: 100% 100%;
        }
        .navbar {
            background-color: #17202A;
            font-size: 25px;
            margin: 0px 0px 20px;
            position: fixed;
            height: 80px;
            width: 100%;
        }
    </style>
</head>

<body >
<div class="navbar" >
       <img src="pg.png" height=90% width=15%>
       <FONT size=+5 color=#B7B9B5 style='Bold Font'> <b>Gues</b></font><font color= #499207 size=+5>pying</font></img>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="pg.php">Home</a>&nbsp;&nbsp;&nbsp;
        <a href="pgusr.php">Guest</a>&nbsp;&nbsp;&nbsp;
        <a href="pgcont.php">Contact</a>&nbsp;&nbsp;&nbsp;
        <a href="pgform.html">Feedback</a>&nbsp;&nbsp;&nbsp;
    </div>


<table cellspacing="0" border=1 align="center" bgcolor=#ffffff >
<?php
echo"<br><br><br><br><br><br>";
echo"<tr>";
echo "<th width=7% height= 50% slign='center' colspan=2>
<font color=#000000 size=+3><I><b>Facilities Available</font></b></I>
</th>";
echo"</tr>";
echo"<tr>";
echo"<td width=7% height= 50% >"."Food"."</td>";
echo"<td width=7% height= 50% >"."3 meal"."</td>";
echo"</tr>";
echo"<tr>";
echo"<td width=25% height= 50%>"."AC"."</td>";
echo"<td width=7% height= 50%>"."YA"."</td>";
echo"</tr>";
echo"<tr>";
echo"<td width=7% height= 50%>"."Internet"."</td>";
echo"<td width=7% height= 50%>"."YA"."</td>";
echo"</tr>";
echo"<tr>";
echo"<td width=7% height= 50%>"."Rent"."</td>";
echo"<td width=7% height= 50%>"."7000"."</td>";
echo"</tr>";
echo"<tr>";
echo"<td width=25% height= 50%>"."Rooms available"."</td>";
echo"<td width=25% height= 50%>"."3"."</td>";
echo"</tr>";
?>
</table>


<?php
echo "<h1 align='Center'><font color=#ffffff><I><b>Images</font></b></I></h1>";
include_once('connectPg.php');
$qry0 = "SELECT * FROM `tbpg`  where Pgcod=104 ";
$result = mysqli_query($conn,$qry0);
while($row = mysqli_fetch_array($result))
{
    ?>
    <?php echo"<div align='center'>";echo $row["pgImg"]?><?php echo "<br>" ?>
    <?php
   }
    ?>


<table cellspacing="0" border=1 align="center" bgcolor=#ffffff >
<?php

echo "<h1 align='Center'><font color=#ffffff><I><b>User</font></b></I></h1>";
include_once('connectPg.php');
$qry0 = "SELECT * FROM `tbusr` where Pgcod=104";
$result = mysqli_query($conn,$qry0);
echo"<tr>";

echo"<th >"."Date of joining"."</th>";
echo"<th >"."Name"."</th>";
echo"<th >"."Address"."</th>";
echo"<th >"."Occupation"."</th>";
echo"</tr>";
while($row = mysqli_fetch_array($result))
{
    ?>
    <tr>

    <td width=20% height=30%><?php echo $row["usrDoj"]?></td>
    <td width=20% height=30%><?php echo $row["usrNam"]?></td>
    <td width=20% height=30%><?php echo $row["usrAdr"]?></td>
    <td width=20% height=30%><?php echo $row["usrOcp"]?></td>
    </tr>
    <?php
   }
   mysqli_free_result($result);
   mysqli_close($conn);
    ?>
    </table>
    <div align="center">
    <font color=#ffffff size=5>
    <br><br>PG Comfirmation:
    <a href='pgusrfrm.html'>Click Here</a>
    <br><br>
</font>
</div>
</body>
</html>