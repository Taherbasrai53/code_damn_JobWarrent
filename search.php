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
  <!--   navbar -->
  <div class="hero-container">
    <nav class="nav-container">
      <div class="nav-inner-container">
        <h2 class="logo">JobWarrent</h2>
        <div class="nav-list">
          <a class="nav-list-items" href="home.php">Home</a>
          <a class="nav-list-items" href="./pages/catalog.html">Catalogues</a>
          <a class="nav-list-items" href="#">Contact Us</a>
        </div>
      </div>
      <a href="./pages/join.html" class="nav-btn">Join Now</a>
    </nav>
<form action="" method="GET">
  <table width="100%"> 
    <tr>
      <td align="center">
        <input type="text" name="" id="searchfield">
        <input type="submit" name="" value="Search" id="btn">
      </td>
    </tr>
  </table>
  
  <table border="3">
    <tr>
    <?php
    include("database.php");
    if(isset($_GET['searchbtn']))
    {
      $search= $_GET['search']; 

      if($search=="")
      {
        echo "Please write something in the search field";
        exit();
      }

      $query="select * from jobs where designation like '%$search%'";
      $data=mysqli_query($conn,$query);

      if(mysqli_num_rows($data)<1)
      {
        echo "No result found";
        exit();
      }
     echo "<a href='#' style='margin-left:105px;'>More Images for $search</a>";
     while($row = mysqli_fetch_array($data))
     {
       echo"";
     }
    }

    ?>
    </tr>
  </table>
  <table border="3" width="100%">
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
        <font size='3'><b><a href ='#'>$row1[0]</a></b></font><br>";
        
        echo "<a href ='#'>$row1[1]</a><br>";
        echo "<a href ='#'>$row1[2]</a><br>";
       
        echo "<a href ='#'>Experience: $row1[4]</a>
        </td>
        </tr>
        ";
       
      }
    ?>
</table>
 
</form>
 
  <footer>
    <div class="footer-list">
      <h5>Company</h5>
      <a href="#">About Us</a>
      <a href="#">Platform Offerings</a>
      <a href="#">Join the Team</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="footer-list">
      <h5>Services</h5>
      <a href="#">Resume Database Access</a>
      <a href="#">Live Chat</a>
      <a href="#">Management Tools</a>
      <a href="#">Job Listings</a>
    </div>
    <div class="footer-list">
      <h5>Explore</h5>
      <a href="#">Catalogues</a>
      <a href="#">Our Solution</a>
      <a href="#">Blog</a>
      <a href="#">Discounts</a>
    </div>
    <div class="footer-list footer-logo">
      <h5>JobWarrent</h5>
      <p>290, A.B. Road</p>
      <p>Indore, India</p>
      <p>hello@finlit.co</p>
      <p>+91-6782909187</p>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>