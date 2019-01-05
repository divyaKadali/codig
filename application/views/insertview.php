<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="container">
<?php // echo form_open('newcontroller'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>

    <form method="post" action="<?php // echo site_url('baby_form/savingdata'); ?>">  
        <table>  
            <tr>  
                <td>courier_name:</td>  
                <td>:</td>  
                <td><input type="text" name="courier_name"></td>  
            </tr>  
            <tr>  
                <td>mail_id:</td>  
                <td>:</td>  
                <td><input type="text" name="mail_id"></td>  
            </tr>  
            <tr>  
                <td>phone_number:</td>  
                <td>:</td>  
                <td><input type="text" name="phone_number"></td>  
            </tr>  
            <tr>  
                <td>reason:</td>  
                <td>:</td>  
                <td><input type="text" name="reason"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" value="Save">  
            </tr>  
        </table>  
    </form>  
</div>
</body>
</html>