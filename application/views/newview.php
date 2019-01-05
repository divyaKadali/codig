<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
 .column { 
     width: 50%; 
    padding: 10px; 
 } 
</style>
</head>
<body>
<div id="container">
	<h1>Welcome to CodeIgniter List View !</h1>
	<div id="body">
<div class="row">
 
     <?php foreach ($result as $row)  { ?>
         <div class="column" >
           <div><?php echo $row->courier_name;?>  <?php echo $row->amount;?> 
           <?php echo $row->order_details;?>
           <?php echo $row->order_Id;?>
           <?php echo $row->date_of_order;?>
           <?php echo $row->phone_number;?>
           <?php echo $row->status;?>
         <a href='update&id=<?php echo $row->ess_id;?>'>update</a>
         <a href='delete&id=<?php echo $row->ess_id;?>'>delete</a>
           </div>
         </div> 
       <?php }?>
       
  </div>
</div>
</body>
</html>

