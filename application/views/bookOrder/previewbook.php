<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Example 1</title>

  <link href=" <?= base_url("Assests/invoice/style.css") ?>" rel="stylesheet" media="all">
  <style>
    .column {
      float: left;
      width: 10.33%;
      padding: 10px;
      height: 20px;
      /* Should be removed. Only for demonstration */
    }
  </style>

</head>

<body>

 <form action="<?=base_url("BookAload/printinvoice")?>" method="POST">

  <section>
    <div>
      <img style="width: 100%;" src="<?= base_url("Assests/invoice/head.jpg") ?>" rel=" stylesheet" media="all">

    </div>
    <div style="float: right;">
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="<?= base_url("Assests/invoice/bnr.jpg") ?>" rel="stylesheet" media="all">
      </div>
      <?php foreach ($data as $data1) : ?>
        <div style="width:45%;Text-align:right;float:right">
          <b>BOOKING DATE:<?php echo $data1['booking_date'] ?></b><br>
        
        </div>

      <?php endforeach; ?>

    </div>
    <header class="clearfix">
      <div>
        <div style="float: left;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b>CONSIGNOR NAME</b></span>:<?php echo $data1['consignor_name'] ?></div> <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['cosignee_adress'] ?></div>



          <?php endforeach; ?>

        </div>
        <div style="float: right;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b> NAME</b></span>:<?php echo $data1['consignor_name'] ?></div>
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['consignor_adress'] ?></div>



          <?php endforeach ?>
        </div>
      </div>

    </header>


    <div id="logo">
      <link href="invoice/logo.png"" rel=" stylesheet" media="all">

    </div>
    <!-- <header class="clearfix"
    <h1></h1>

    <div style="float: left;">
      <?php// foreach ($data as $data1) : ?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div> <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
        <div><span>ADDRESS</span>: <?php echo $data1['cosignee_adress'] ?></div>
        <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>

      <?php //endforeach; 
      ?>

    </div>
    <div style="float: right;">
      <?php// foreach ($data as $data1) : ?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div>
        <div><span>ADDRESS</span>: <?php echo $data1['consignor_adress'] ?></div>
        <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>

      <?php// endforeach ?>
    </div>
    </header> -->
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
            <?php foreach ($data as $data1) : ?>
              <td class="service"><?php echo $data1['number_of_goods'] ?></td>
              <td class="desc"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] ?></td>
              <td class="unit"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.pices)'] ?></td>
              <td class="qty"><?php echo $data1['amount'] ?></td>
              <td class="total"><?php echo $data1['amount'] ?></td>

          </tr>

          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total"><?php echo $data1['amount'] ?></td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo $data1['amount'] ?></td>
          </tr>

        </tbody>
      </table>
      <div class="row">
        <div class="column" style="background-color:#aaa;">PAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['paid'] ?></div>

      </div>
      <div class="row" style="padding-right:50px">
        <div class="column" style="background-color:#aaa;">UNPAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['to_pay'] ?></div>

      </div>
    <?php endforeach ?>
    <div style="">
      <img style="  width: 100%;margin-top: 20px;" ;" src="<?= base_url("Assests/invoice/foot.jpg") ?>" rel="stylesheet" media="all">
    </div>
  </section>
  <!-- consignee-->

  <section>
    <div>
      <img style="  width: 100%;" ;" src="<?= base_url("Assests/invoice/head2.jpg") ?>" rel="stylesheet" media="all">

    </div>
    <div style="float: right;">
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="<?= base_url("Assests/invoice/bnr.jpg") ?>" rel="stylesheet" media="all">
      </div>
      <div style="width:45%;Text-align:right;float:right">
        <?php foreach ($data as $data1) : ?>
          <b>BOOKING DATE:<?php echo $data1['booking_date'] ?></b><br>
         
        <?php endforeach; ?>
      </div>

    </div>
    <header class="clearfix">
      <div>
        <div style="float: left;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b>CONSIGNOR NAME</b></span>:<?php echo $data1['consignor_name'] ?></div> <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['cosignee_adress'] ?></div>



          <?php endforeach; ?>

        </div>
        <div style="float: right;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b> NAME</b></span>:<?php echo $data1['consignor_name'] ?></div>
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['consignor_adress'] ?></div>


          <?php endforeach ?>
        </div>
      </div>

    </header>


    <div id="logo">
      <link href="<?= base_url("Assests/invoice/logo.png") ?>" rel=" stylesheet" media="all">

    </div>
    <!-- <header class="clearfix">
      <h1></h1>
     
      <div style="float: left;">
		  <?php foreach ($data as $data1) : ?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div>  <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
        <div><span>ADDRESS</span>: <?php echo $data1['cosignee_adress'] ?></div>
        <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>
		
		  <?php endforeach; ?>
      
	  </div>
	  <div style="float: right;">
		  <?php foreach ($data as $data1) : ?>
          <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div>
          <div><span>ADDRESS</span>: <?php echo $data1['consignor_adress'] ?></div>
          <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
          <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>
		
		<?php endforeach ?>
      </div>
    </header> -->
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
            <?php foreach ($data as $data1) : ?>
              <td class="service"><?php echo $data1['number_of_goods'] ?></td>
              <td class="desc"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] ?></td>
              <td class="unit"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.pices)'] ?></td>
              <td class="qty"><?php echo $data1['amount'] ?></td>
              <td class="total"><?php echo $data1['amount'] ?></td>

          </tr>

          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total"><?php echo $data1['amount'] ?></td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo $data1['amount'] ?></td>
          </tr>

        </tbody>
      </table>
      <div class="row">
        <div class="column" style="background-color:#aaa;">PAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['paid'] ?></div>

      </div>
      <div class="row" style="padding-right:50px">
        <div class="column" style="background-color:#aaa;">UNPAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['to_pay'] ?></div>

      </div>
    <?php endforeach ?>
    <div style="">
      <img style="  width: 100%;margin-top: 20px;" ;" src="<?= base_url("Assests/invoice/foot.jpg") ?>" rel="stylesheet" media="all">
    </div>
  </section>
  <!--consignor-->

  <section>
    <div style="float: right;">
      <div style="width: 50%;float:left">
        <img style="  width: 100%;" ;" src="<?= base_url("Assests/invoice/bnr.jpg") ?>" rel=" stylesheet" media="all">
      </div>
      <div style="width:50%;Text-align:right;float:right">
        <?php foreach ($data as $data1) : ?>
          <b>BOOKING DATE:<?php echo $data1['booking_date'] ?></b><br>
         
        <?php endforeach; ?>
      </div>

    </div>
    <header class="clearfix">
      <div>
        <div style="float: left;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b>CONSIGNOR NAME</b></span>:<?php echo $data1['consignor_name'] ?></div> <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['cosignee_adress'] ?></div>

          <?php endforeach; ?>

        </div>
        <div style="float: right;">
          <?php foreach ($data as $data1) : ?>
            <div><span><b> NAME</b></span>:<?php echo $data1['consignor_name'] ?></div>
            <div><span><b>ADDRESS</b></span>: <?php echo $data1['consignor_adress'] ?></div>

          <?php endforeach ?>
        </div>
      </div>

    </header>


    <div id="logo">
      <link href="<?= base_url("Assests/invoice/logo.png") ?>" rel=" stylesheet" media="all">

    </div>
    <!-- <header class="clearfix"
    <h1></h1>

    <div style="float: left;">
      <?php foreach ($data as $data1) : ?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div> <input type="hidden" name="book_id" value="<?php echo $data1['book_id']; ?>">
        <div><span>ADDRESS</span>: <?php echo $data1['cosignee_adress'] ?></div>
        <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>

      <?php endforeach; ?>

    </div>
    <div style="float: right;">
      <?php foreach ($data as $data1) : ?>
        <div><span>CONSIGNOR NAME</span>:<?php echo $data1['consignor_name'] ?></div>
        <div><span>ADDRESS</span>: <?php echo $data1['consignor_adress'] ?></div>
        <div><span>EMAIL</span>: <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span>:<?php echo $data1['booking_date'] ?></div>

      <?php endforeach ?>
    </div>
    </header> -->
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
            <?php foreach ($data as $data1) : ?>
              <td class="service"><?php echo $data1['number_of_goods'] ?></td>
              <td class="desc"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] ?></td>
              <td class="unit"><?php echo  $data1['GROUP_CONCAT(book_nature_of_good.pices)'] ?></td>
              <td class="qty"><?php echo $data1['amount'] ?></td>
              <td class="total"><?php echo $data1['amount'] ?></td>

          </tr>

          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total"><?php echo $data1['amount'] ?></td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo $data1['amount'] ?></td>
          </tr>

        </tbody>
      </table>
      <div class="row">
        <div class="column" style="background-color:#aaa;">PAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['paid'] ?></div>

      </div>
      <div class="row" style="padding-right:50px">
        <div class="column" style="background-color:#aaa;">UNPAID</div>
        <div class="column" style="background-color:#bbb;"><?php echo $data1['to_pay'] ?></div>

      </div>
      <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="<?= base_url("Assests/invoice/foot.jpg") ?>" rel="stylesheet" media="all">
      </div>
  </section>
  <button type="submit" class="btn btn-primary" style="float:right">PRINT</button>
   <button type="submit" class="btn btn-primary" style="float:right"><i class="fa fa-close"></i><a href="<?= base_url("BookAload/index") ?>"> Close</a></button>
<?php endforeach ?>
</form>
</main>
<footer>
</footer>
</section>
</body>

</html>