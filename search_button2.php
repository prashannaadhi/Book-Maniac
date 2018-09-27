

<html>
<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: none;
    float: left;
    width: 45%;
	height: 8%;
    background: #e3e6ea;
	position: absolute;
	top: 60%;
	left: 22%;
}

form.example button {
    float: left;
    width: 10%;
	height: 8%;
    padding: 10px;
    background: #ffcc33;
    color: white;
    font-size: 17px;
    border: none;
    cursor: pointer;
	position: absolute;
	top: 60%;
	left: 67%;
}

form.example button:hover {
    background: #ffcc00;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

</style>
</head>
<body>
  <nav class="fixed-side" id="search">
    <form class="example" action="showbook.php" style="margin:auto;max-width:300px">
    <input name="query" type="text" placeholder="Search.." name="search2"/>
    <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
  </form>
</nav>
</body>
</html> 
