<style> 
.clr{
    background-color:gray;
    width: 400px;
    border: 2px black ;
    text-align: center;
    margin-left: 100px;
    color: black;
    font-size: large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.clr2{

    background-color:white;
    width: 400px;
    border: 2px black;
    text-align: center;
    margin-left: 300px;
    margin-top: 20px;
    color: black;
    font-size: large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}




</style>
</form>
<table  border="2" class="clr">
  
</head>
<body>
    <form action="">
        <div class="container">
            <h1>Student Register Form</h1>
        <tr> <td>Name</td> <td> <input type="text" name="val1" required></td></tr>
        <tr> <td>Father Name</td> <td>  <input type="text" name="val2" required></td></tr>
        <tr> <td>E Mail</td> <td>  <input type="text" name="val3" required></td></tr>
        <tr> <td>Cnic</td> <td> <input type="text" name="val4" required></td></tr>
        <input type="submit" value="Reg" name="sub">
</style>
<table  border="1" class="clr2">

        <?php
if(isset($_GET['sub']))
{
    $a= $_GET['val1'];
    $b= $_GET['val2'];
    $c= $_GET['val3'];
    $d= $_GET['val4'];
   
    echo "<tr> <td/>  $a</td </tr> <br>"; 
    echo "<tr> <td/>  $b</td </tr> <br>";
    echo "<tr> <td/>  $c</td </tr> <br>";
    echo "<tr> <td/>  $d</td </tr> <br>";
}

?>