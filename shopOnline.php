<?php
$conn = mysqli_connect("localhost", "root", "root", "oliexpress");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function genItems($conn){
  $sql = "SELECT * FROM `category`";
  $data = mysqli_query($conn, $sql);
  if (mysqli_num_rows($data) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($data)) {
      $curCatID = $row["CatID"];
      $catName = $row["CatName"];
  
      $once = 0;
      
      $sql = "SELECT * FROM item WHERE CatID = $curCatID";
      $newData = mysqli_query($conn, $sql);
      echo "<h3 class='titleRow'>$catName</h3>";
      echo "<div class='mainRow'>";
      if (mysqli_num_rows($newData) > 0) {
        while ($innerRow = mysqli_fetch_assoc($newData)){
          $url = $innerRow["urlOfImg"];
          $name = $innerRow["Name"];
          $price = $innerRow["Price"];
          echo "<div class='mainRowItem'>
                  <div class='mainRowItemImgContain'>
                    <img src='$url'>
                  </div>
                  <div id='mainRowItemRest'>
                    <p id='itemName'>$name</p>
                    <p id='itemPrice'>Price: $$price</p>
                  </div>
                  <div class='mainRowItemButton'>
                    <button class='buttonID'>Add to Basket</button>
                  </div>
                </div>";
        }
      }        
      echo "</div>";
    }
  }
}  
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shop-On-Line</title>
  <link rel="stylesheet" href="shop.css">
</head>
<body>
  <div id="topBar">
    <div id="fullHeightTopBar">
      <p id="topBarLogo">OliExpress</p>
    </div>
    <div id="topBarMidSearch">
      <form id="form"> 
        <input type="search" id="query" name="q" placeholder="Search...">
        <button>Search</button>
      </form>
    </div>
    <div id="topBarItemsRight">
      <p>Login</p>
    </div>
  </div>

  <div id="filterBar">
    <hr style="width: 80%", size="2", color=black>  
    <h3 id="filterBarTitle">Filter</h3>
    <hr style="width: 80%", size="2", color=black>  
    <div id="sizeFlex">
      <div class="row">
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-XS">
          Size-XS
        </label>
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-S">
          Size-S
        </label>
      </div>
      <div class="row">
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-M">
          Size-M
        </label>
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-L">
          Size-L
        </label>
      </div>
      <div class="row">
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-XL">
            Size-XL
        </label>
        <label for="size-s">
          <input type="checkbox" class="checkBox" name="size-XXL">
            Size-XXL
        </label>
      </div>
    </div>
    <hr style="width: 80%", size="2", color=black>  
    <div id="sizeFlex">
      <div class="row">
        <label for="male">
          <input type="checkbox" class="checkBox" name="Male">
          Male
        </label>
        <label for="Female">
          <input type="checkbox" class="checkBox" name="Female">
          Female
        </label>
      </div>
    </div>
    <hr style="width: 80%", size="2", color=black>  
    <div id="sizeFlex">
      <div class="row">
        <label for="price-5-10">
          <input type="checkbox" class="checkBox" name="price-5-10">
          $5-$10
        </label>
        <label for="price-10-20">
          <input type="checkbox" class="checkBox" name="price-10-20">
          $10-$20
        </label>
      </div>
      <div class="row">
        <label for="price-20-30">
          <input type="checkbox" class="checkBox" name="price-20-30">
          $20-$30
        </label>
        <label for="price-30-40+">
          <input type="checkbox" class="checkBox" name="price-30-40+">
          $30-$40+
        </label>
      </div>
    </div>
    <hr style="width: 80%", size="2", color=white>  
  </div>

  <div id="main">
      <?php genItems($conn)?>
  </div>
  <div id="basket">
    <div id="basketVis">
      <h2 id="clickable">View Basket </h2>    
      <div id="basketInvis">
        <button id="check-out">Checkout</button>
      </div>
    </div>
  </div>
  <script src="function.js"> </script>
</body>
</html>