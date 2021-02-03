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
        .recipts{
            background-color: white;
            border-radius: 10px;
            height: 160px;
            width: 300px;
            box-shadow: 1px 1px 9px 1px #333;
        }
        .recipts:hover{
               box-shadow: 1px 1px 9px 1px #00ff7f ;
        }
        .container{
            display: grid;
            grid-template-columns: repeat(3,auto);
            grid-gap: 20px;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
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
  
<?php
        echo"<br><br><br><br><br><br>";
        include_once('connectPg.php');
        $qry0 = "SELECT * FROM `tbpg` ";
        $result = mysqli_query($conn,$qry0);
        echo"<div class='container' align='left'>";
        while($row = mysqli_fetch_array($result))
        {

            echo"<div class='recipts'>";echo"<br>";
            echo "<b>&nbsp Paying Guest:  </b>";echo$row["pgCod"]; echo"<br>";
            echo"<b>&nbsp  Onwer:</b> ";echo $row["pgOwn"];echo"<br>";
            echo"<b>&nbsp  Mobile Number: </b>";echo$row["pgMob"];echo"<br>";
            echo"<b>&nbsp  Address:</b> ";echo$row["pgAdr"];echo"<br>";
            echo"<b>&nbsp  Pg For:</b> ";echo$row["pgGen"]; echo"<br>";
            echo"<b>&nbsp  More Info: </b>";echo$row["pgInf"]; echo"<br>";
            echo"</div>";

        }
        echo"</div>";
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</body>
</html>