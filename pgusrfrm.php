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
    echo"<FONT size=5 color=#B7B9B5 > ";
    include_once('connectPg.php');
    $pgCod = $_POST['code'];
    $usrDoj = $_POST['date'];
    $usrName = $_POST['name'];
    $usrAdr = $_POST['adr'];
    $usrOccup = $_POST['occup'];
    $qry0="INSERT INTO tbusr VALUES('$pgCod', '$usrDoj', '$usrName', '$usrAdr', '$usrOccup')";


mysqli_query($conn,$qry0);
echo"<br><br>Welcome !";
//echo " $qry0";
mysqli_commit($conn);
mysqli_close($conn);
echo"</font>";
?>

</body>
</html>