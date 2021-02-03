<html>
<head>
    <meta name="viewport" >
    <style>
        body {
            background-image: url("https://i.pinimg.com/564x/99/79/4a/99794a7147a58dd8e63b06785c39d5db.jpg");
            background-repeat: repeat;
            background-size: 100% 100%;
        }
        body {margin:0;}
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
        &nbsp;&nbsp;<img src="pg.png" height=90% width=15%>
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
    <?php
        echo"<br><br><br><br><br><br>";
        echo"<div align='center'><FONT size=+5 color=#B7B9B5 style='Bold Font'><u>Feedback</u></font></img></div><br>";
        include_once('connectPg.php');
        $qry0 = "SELECT * FROM `tbfrm` ";
        $result = mysqli_query($conn,$qry0);
        echo"<table border=1 bgcolor=#ffffff align='center'>";
        echo"<tr>";
        echo"<th >"."Name"."</th>";
        echo"<th >"."E-mail"."</th>";
        echo"<th >"."Feedback"."</th>";
        echo"</tr>";
        while($row = mysqli_fetch_array($result))
        {

            echo "<td width=20% height=30%>"; echo $row["usrNam"]; echo "</td>";
            echo "<td width=20% height=30%>"; echo $row["usrEml"]; echo "</td>";
            echo "<td width=20% height=30%>";echo $row["usrFbk"]; echo "</td>";
            echo"</tr>";

        }
        echo"</table>";
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</body>
</html>