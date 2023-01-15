<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JobWarrent</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Unbounded:wght@300;400;600&display=swap"
    rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
    #searchfield
    {
      width: 500px;
      height: 35px;
      border-radius: 5px;
      border: 1px solid white;
    }
    #btn{
      width: 100px;
      height: 39px;
      border-radius: 5px;
      border: 1px solid white;
    }
    #btn:hover
    {
      color:#A555EC;
      background-color: black;
    }
  </style>
</head>

<body>
<table border="3" width="">
    <?php
    include("database.php");
      $query1= "select * from jobs where designation like '%$search%'";
      $data1=mysqli_query($conn,$query1);

      while($row1 =mysqli_fetch_array($data1))
      {
        echo
        "
        <tr>
        <td>
        <font size='3'><a href ='#'>$row1[0]</a></font>";
        echo "<a href ='#'>$row1[1]</a>";
        echo "<a href ='#'>$row1[2]</a>";
       
        echo "<a href ='#'>$row1[4]</a>
        </td>
        </tr>
        ";
       
      }
    ?>
</table>
</body>

</html>