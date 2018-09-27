<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(171, 163, 163);
    position:fixed;
    width:100%;

}

.header li {
    float: left;
}

.header li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.header li a:hover {
    background-color: rgba(165, 156, 159, 0.55);
}
.search{
  padding-top: 10px;
}
#searchbar{
  width:400px;
  border-radius: 4px;
}


.btn-primary{
  padding-top:2px; 
  height: 30px;
  text-align: center;

}
</style>
</head>
<body>

<ul>
<div class="header">
<li><a href="dashboard.php">Dash board </a></li>
  <li><a href="addproducts.php">Add products </a></li>
  <li><a href="receivedmessages.php">messages</a></li>
  <li><a href="orders.php">orders</a></li>
  <!-- <li><a href="sentdeliveries.php">sent deliveries</a></li> -->
  <li><a href="ordersdelivered.php"> delivered </a></li>
  <li><a href="sentdeliveries.php"> Delivery in Progress </a></li>
  <li><a href="allproducts.php"> all products </a></li>
  <li><a href="contribution.php"> Contribution </a></li>
  <li align="right"><a href="index.php"> logout </a></li>
  
 <!-- <li> <form method='post' action='searchengine.php' class="search">
<input type="text" name="asd" id="searchbar" autocomplete="off"  class="glyphicon glyphicon-search">
<input type="submit" name="search" value="search"  class="btn btn-primary" >

 </form> 
</li> -->

  </div>
</ul>

</body>
</html>
