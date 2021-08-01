<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Example 1</title>
	<link href="<?=base_url("Assests/invoice/style.css")?>" rel="stylesheet" media="all">
	<style>
		.column {
         float: left;
         width: 10.33%;
         padding: 10px;
         height: 20px; /* Should be removed. Only for demonstration */
      }
	</style>
    
  </head>
  <body>
 
    <header class="clearfix">
    <form action="<?=base_url("BookAload/printinvoice")?>" method="POST">
	
      <div id="logo">
	  <link href="<?=base_url("Assests/invoice/logo.png")?>" rel="stylesheet" media="all">
        <img src="logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
        <h4>
      <?php foreach($data as $data1):?>
      Invoice No :<?php echo $data1['branch_code']?><?php echo $data1['sl_no']?>
      <?php endforeach;?></h4>
     
      <div style="float: left;">
		  <?php foreach($data as $data1):?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['f_cosignee_name']?></div>  <input type="hidden" name="f_id" value="<?php echo $data1['f_id']; ?>">
        <div><span>ADDRESS</span>: <?php echo $data1['f_cosignee_adress']?></div>
        <div><span>GST NO</span>: <?php echo $data1['f_cosignee_gst_no']?></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date']?></div>
		
		  <?php endforeach;?>
      
	  </div>
	  <div style="float: right;">
		  <?php foreach($data as $data1):?>
          <div><span>CONSIGNOR NAME</span>:<?php echo $data1['f_consignor_name']?></div>
          <div><span>ADDRESS</span>: <?php echo $data1['f_cosignor_adress']?></div>
           <div><span>GST NO</span>: <?php echo $data1['f_cosignor_gst_no']?></div>
          <div><span>DATE</span>:<?php echo $data1['booking_date']?></div>
		
		<?php endforeach?>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">NUMBER OF GOODS</th>
			<th class="desc">NATURE OF GOODS</th>
			<th>QTY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
		  <?php foreach($data as $data1):?>
            <td class="service"><?php echo $data1['f_number_of_goods']?></td>
            <td class="desc"><?php echo  $data1['GROUP_CONCAT(f_book_nature_of_good.nature_of_goods)']?></td>
            <td class="unit"><?php echo  $data1['GROUP_CONCAT(f_book_nature_of_good.pices)']?></td>
            <td class="qty"><?php echo $data1['f_amount']?></td>
			<td class="total"><?php echo $data1['f_amount']?></td>
			
          </tr>
        
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total"><?php echo $data1['f_amount']?></td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo $data1['f_amount']?></td>
		  </tr>
	
        </tbody>
      </table>
      <div class="row">
        <div class="column" style="background-color:#aaa;">PAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['f_paid']?></div>
       
	</div>
	<div class="row" style="padding-right:50px">
        <div class="column" style="background-color:#aaa;">PAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['f_to_pay']?></div>
       
  </div>
  <button type="submit" class="btn btn-primary">PRINT</button>
  <?php endforeach?>
  </form>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>