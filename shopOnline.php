<?php
$conn = mysqli_connect("localhost", "root", "root", "items");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DROP TABLE item;";
mysqli_query($conn, $sql);

$sql = "DROP TABLE category;";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE `category` (
  `CatID` int NOT NULL,
  `CatName` text NOT NULL
);";
mysqli_query($conn, $sql);


$sql = "INSERT INTO `category` (`CatID`, `CatName`) VALUES
(1, 'Men\'s Casual Clothing'),
(2, 'Men\'s Formal Clothing');";
mysqli_query($conn, $sql);


$sql = "CREATE TABLE `item` (
  `ItemID` int NOT NULL,
  `CatID` int NOT NULL,
  `urlOfImg` tinytext NOT NULL,
  `Name` text NOT NULL,
  `Price` float NOT NULL
);";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `item` (`ItemID`, `CatID`, `urlOfImg`, `Name`, `Price`) VALUES
(1, 1, 'https://ae01.alicdn.com/kf/Sbd75d011f2094f02ae0fd35af48c3b450/2022-Spring-Autumn-Japanese-Streetwear-Black-Casual-Lapel-Jacket-Men-Clothing-Korean-Couple-Coat-Harajuku-Loose.jpg_Q90.jpg_.webp', 'Dickies Men\'s Blue Jacket', 20),
(2, 1, 'https://ae01.alicdn.com/kf/H93f83822dbe7431a95ac491746338152x/100-Cotton-Pullover-Men-Sweater-2021-Autumn-Winter-Man-Clothes-Jersey-Sueter-Hombre-Pull-Homme-Sweter.jpg_Q90.jpg_.webp', 'Blue Men\'s Jumper', 28),
(3, 2, 'https://ae01.alicdn.com/kf/H55cde1df7c9644ee9db7e963962c6c7ah/2022-Mens-Loose-Style-Jacket-Motorcycle-Biker-Leather-Jacket-Men-Fashion-Leather-Coats-Male-Bomber-Jacket.jpg_Q90.jpg_.webp', 'Men\'s Black jacket', 27),
(4, 1, 'https://ae01.alicdn.com/kf/Hd0a554ee7705423e8427e6c32765ddcbx/IEFB-Men-s-Clothing-Spring-New-Oversize-Coat-Korean-Trend-Loose-Casual-PU-Leather-Jacket-Coat.jpg_Q90.jpg_.webp', 'Men\'s Classic Leather', 35),
(5, 1, 'https://ae01.alicdn.com/kf/H4c959635443b48f3a818c2e8d256af3bZ/Autumn-Plaid-Jacket-Men-Fashion-Retro-Pocket-Casual-Jacket-Men-Streetwear-Korean-Loose-Lapel-Coat-Mens.jpg_Q90.jpg_.webp', 'Men\'s Warm Jacket', 29),
(6, 1, 'https://ae01.alicdn.com/kf/H09c89d3492ec49d09a789dcc0d2dd9c3I/IEFB-Male-Pullover-Sweater-Autumn-Winter-Thickened-Lapel-Zipper-Ins-Casual-Knitted-Tops-Grey-Black-Korean.jpg_Q90.jpg_.webp', 'Men\'s Black Sweater ', 34),
(7, 1, 'https://ae01.alicdn.com/kf/Sa8c9858b58164888b650fc0d1a1ed30dW/Cardigan-Men-Autumn-Japanese-Solid-Sweater-High-Street-Loose-Trendy-All-match-O-neck-Knitting-Simple.jpg_Q90.jpg_.webp', 'Men\'s Blue Cardigan', 12),
(8, 1, 'https://ae01.alicdn.com/kf/S405f36fb8eb4409aa25262580f022647f/Privathinker-Half-Sleeve-Men-Solid-Shirts-Summer-Casual-Oversize-Blouses-White-Fashion-Male-Cardigan-Vintage-Korean.jpg_Q90.jpg_.webp', 'Men\'s Black Shirt', 10.75),
(9, 1, 'https://ae01.alicdn.com/kf/Sf7b3207fc9c34920a834486cd9f2c4393/2022-Spring-Autumn-Japanese-Streetwear-Black-Casual-Lapel-Jacket-Men-Clothing-Korean-Couple-Coat-Harajuku-Loose.jpg_Q90.jpg_.webp', 'Men\'s Black Jacket', 30.27),
(10, 1, 'https://ae01.alicdn.com/kf/H93320fa276de42c5a1ba71b537c025d03/Korean-Fashion-Turtleneck-Sweater-Men-Streetwear-Men-High-Neck-Knitted-Sweaters-Men-Fashion-Clothing-2021-Trend.jpg_Q90.jpg_.webp', 'Men\'s White Jumper', 19.35),
(11, 2, 'https://ae01.alicdn.com/kf/H5871c420676b448aad218eda25ea60f99/GODLIKEU-Blazers-Men-Casual-British-Trendy-Loose-Korean-Suit-Tops-Male-Vintage-Jacket-Streetwear.jpg_Q90.jpg_.webp', 'Men\'s White Blazer', 15.38),
(12, 2, 'https://ae01.alicdn.com/kf/Hbf3ce162d50548cb8ea7374f5a6a1f051/2021-Brand-New-Autumn-Trench-Korean-Men-s-Fashion-Overcoat-for-Male-Long-Windbreaker-Streetwear-Men.jpg_Q90.jpg_.webp', 'Men\'s Autumn Trench', 24.73),
(13, 2, 'https://ae01.alicdn.com/kf/Hbed8cb1e98e04be8a51fb8c6966f3ecec/Oversized-Men-s-Business-Plaid-Long-sleeved-Shirt-Classic-Formal-Wear-Design-Boss-Quality-Work-Clothes.jpg_Q90.jpg_.webp', 'Men\'s Business Shirt', 11.49),
(14, 2, 'https://ae01.alicdn.com/kf/H2bf7187c47044b159b5803b8744a338df/Men-s-Western-style-Trousers-Male-Loose-Leisure-Casual-Pants-Business-Design-Cotton-Suit-Pants-Formal.jpg_Q90.jpg_.webp', 'Men\'s Black Trousers', 20.24),
(15, 2, 'https://ae01.alicdn.com/kf/Se9834d224add4cb6a5cb19c46f89c614k/Pleated-Thin-Mens-Suit-Pants-Black-White-Slim-White-Dress-Pants-Men-Trousers-Office-Business-Korea.jpg_Q90.jpg_.webp', 'Men\'s Suit Pants ', 13.21),
(16, 2, 'https://ae01.alicdn.com/kf/Sdf99d1959a6e465faa400acd315236cef/Korean-Fashion-Pants-Men-Casual-Slim-Fit-Work-Tousers-9-Part-Ankle-Length-Skinny-Pants-Men.jpg_Q90.jpg_.webp', 'Pants Men Casua', 20.07),
(17, 2, 'https://ae01.alicdn.com/kf/H2c1d70a77070450f9099c363481334f0x/HYBSKR-Summer-Men-Shirt-Short-Sleeve-Solid-Color-Shirts-For-Man-Vintage-Harajuku-Casual-Oversized-Blouses.jpg_Q90.jpg_.webp', 'Men\'s Short Sleave', 11.24),
(18, 2, 'https://ae01.alicdn.com/kf/Hfb9f49061ad44350b165f0eee565f64dI/Privathinker-Pleated-Straight-Pants-Men-s-Elastic-Waist-Casual-Pants-Men-Streetwear-Loose-Ice-Silk-Trousers.jpg_Q90.jpg_.webp', 'Men\'s Elatic Pants', 11.57),
(19, 1, 'https://ae01.alicdn.com/kf/Ha4aff5c3f4a446fdac2aeddc29689ccao/Fw21-new-men-s-polar-fleece-half-zipper-designer-brand-Jerry-Lorenzo-rubber-print-letters-hip.jpg_Q90.jpg_.webp', 'Men\'s Polar Fleece', 27.38),
(20, 2, 'https://ae01.alicdn.com/kf/H69a5036e23f540fbb97b2f7e68e85f45K/2022-autumn-pocket-super-hot-tooling-coat-fashion-casual-men-s-loose-retro-Japanese-jacket-M.jpg_Q90.jpg_.webp', 'Men\'s Slim Jacket', 43.24);";
mysqli_query($conn, $sql);

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