<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 1 - Main Course Page</title>
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

h1 {
    text-align: center;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="https://github.com/kwperry/se266Fall2018">GitHub</a></li>
</ul>

<h1>Kenneth Perry</h1>

<p>Here are some resources I use to learn PHP!</p>
<div><a href="https://stackoverflow.com/">Stackoverflow</a></div>
<div><a href="http://php.net/docs.php">Php.net Docs</a></div>
<div><a href="https://www.w3schools.com/php/">W3 PHP</a></div>

<h2>Lab1</h2>
<div><a href="http://ict.neit.edu/001062697/public_html/PHP/week1/Lab/CreditCard.php">Credit Card Lab</a></div>
<div><?php 
        $file = "CreditCard.php";
        $mod_date = date("F d Y h:i:s A", filemtime($file));

        echo "Last modified $mod_date";
?></div>
<div><a href="http://ict.neit.edu/001062697/public_html/PHP/week1/Lab/CreditCard.zip">Zipped Sourse for Credit Card Lab</a></div>
<div><?php 
        $file2 = "CreditCard.zip";
        $mod_date2 = date("F d Y h:i:s A", filemtime($file2));

        echo "Last modified $mod_date2";
?></div>

</body>
</html>