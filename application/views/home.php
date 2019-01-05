<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
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

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="index.php/newcontroller/getdata">ListView</a></li>
  <li><a href="index.php/newcontroller/savingdata">Insert</a></li>
 
</ul>

</body>
</html>