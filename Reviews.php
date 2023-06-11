<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Lab6 web design</title>

<style> 
main{
min-height:100%;
margin-top: 3%;
}
footer{
width: 100%;
left: 0;
bottom: 0;
background: blue;
position: fixed;
padding: 1%;
color:#FFFFFF;
text-align: center;
}
header{
width: 100%;
right: 0;
top: 0;
background: blue;
position: fixed;
padding: 1%;
color:#FFFFFF;
text-align: center;
}
.sidebar {
color: #ffff00;
width: 150px;
height: 100vh;
background-color: yellow;
float: left;
margin-right: 5%;
}
nav .link {
font-size: 12px;
color: #008000;
display: block;
padding: 12px;
margin: 10px;
padding-left: 30px;
text-decoration: none;
background-color: #008000;
}
nav .link:hover, .link:visited:hover
{
color: #008000;
text-decoration: none;
background-color: green;
}
nav p {
margin: 0;
padding: 15px;
}
</style>
</head>
<body>
<header>

 Мафія, <?php
echo "дата : " . date('d.m.y') . "";
?>

</header>
</header>
<main>
<div class="sidebar">
<nav>
<h2> Навігація </h2>
<ul class="navigation">
<li>
<a href="index.php">
Головна
</a>
</li>
<li>
<a href="reviews.php">
Відгуки
<?php
require_once 'scripts/admin.php';
?>
</a>
</li>
</ul>
</nav>
</div>
<div class="main-content">
<h1>Відгуки</h1>
<?php
require_once 'scripts/get.php';
?>
</div>
</main>
</body>
</html>