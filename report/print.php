<?php 
session_start(); 
?>
<link rel="stylesheet" href="print.css" media="screen">

<div class='head'>
  <img src='../assets/img/logo.png' id='logo'/>
  <h1>RUPSHOP.COM<br/>
  <span>ka-26, Nadda Sarkarbari, Gulshan-2, Dhaka-1212<br/>Cell: +881758948070, Email: info@rupshop.com</span>
  </h1>
  <!--
  
  `receipt_id`, `bill_amount`, `customer_name`, `contact_number`, `p_description`, `color_size`, `address`, `cre_date`, `image`
  -->
<table id="head_field">
  <tr>
     <td>Date: </td>
     <td id="bor" width="100"><?php echo $data['cre_date']?></td>
  </tr>
  <tr>
     <td>Receipt No: </td>
     <td id="bor" width="100"><?php echo $data['customer_id']?></td>
  </tr>
  <tr>
     <td>Bill Amount : </td>
     <td id="bor" width="100"><?php echo $data['bill_amount']?></td>
  </tr>
</table>
  

<table id="body_field" width="70%" >
  <tr>
     <td width="110">Name of Customer : </td>
     <td id="bor"><?php echo $data['customer_name']?></td>
  </tr>
</table>

<table id="body_field" width="70%">
  <tr>
     <td width="110">Contact Number : </td>
     <td id="bor"><?php echo $data['contact_number']?></td>
  </tr>
</table>

<table id="body_field" width="70%">
  <tr>
     <td width="110">Product Description : </td>
     <td id="bor"><?php echo $data['p_description']?></td>
  </tr>
</table>
<table id="body_field" width="70%" style="float:left;">
  <tr>
     <td width="110">Address </td>
  </tr>
  <tr>
     <td id="bor1"><?php echo $data['address']?></td>
  </tr>
</table>
<table id="body_field" width="29%" style="float:right;">
  <tr>
     <td width="110">Color / Size </td>
  </tr>
  <tr>
     <td id="bor"><?php echo $data['color_size']?></td>
  </tr>
</table>
<table id="body_field" width="100%" style=" margin:100 0 0 0;clear:both; text-align:center;">
  <tr>
     <td width="35%" style="border-top:1px dashed #333;">Signature of Responsible Person</td>
     <td width="30%"></td>
     <td width="35%" style="border-top:1px dashed #333;">Signature of Courier Agent</td>
  </tr>
</table>

</div>
