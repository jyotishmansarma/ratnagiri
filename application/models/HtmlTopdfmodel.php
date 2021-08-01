<?php

class HtmlTopdfmodel extends CI_Model
{
    public function htmlpdf(Array $data){
      $output1=$this->db->select(['bookaload.branch_code','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
            ->from('bookaload')
            ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
            ->where_in('book_id',$data)
            ->group_by('book_nature_of_good.sl_no')
            ->get();

            $output='<style>
            table, td, th {
              border: 1px solid black;
              text-align:center;
               border-collapse: collapse;
            }
            
            table {
              width: 100%;
             
            }</style>';
            $output .= '<table>';
            $output .= '<tr>
                          <th>SL NO</th>
                         <th>AMOUNT</th>
                           <th>PAID</th>
                          <th>TO PAY</th>
                          <th>cosignee_name</th>
                          <th>NATURE OF GOOD</th>
                         <th>PICES</th>
                          <th>VEHICAL NO</th>
                        </tr>';
  foreach($output1->result_array() as $display)
  {
   $output .= '
   <tr>
   
    
    <td > '.$display['branch_code'].'</td> 
    <td> '.$display['amount'].'</td>
    <td>'. $display['paid'].'</td>
    <td>'. $display['to_pay'].'</td>
   
    <td> '.$display['cosignee_name'].'</td>
   <td>'. $display['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'].'</td>
   <td>' . $display['GROUP_CONCAT(book_nature_of_good.pices)'].'</td>
    <td>
    '. $display['vehical_no'].'
    </td>

   </tr>
   ';
  }
 
  $output .= '</table>';
  return $output;
 }
 public function invoicepdf($id){
   $data =$this->db->select(['bookaload.branch_code','bookaload.booking_from','bookaload.branch_name','bookaload.consignor_adress','bookaload.cosignee_adress','bookaload.booking_date','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.number_of_goods','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
                   ->from('bookaload')
    
                  ->join('book_nature_of_good','book_nature_of_good.sl_no=bookaload.sl_no')
                  ->where('book_id',$id)
   
                  ->get();

 }
 public function pdfview(Array $data){
  
  $output1=$this->db->select(['manifesto.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','manifesto.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
                    ->from('manifesto')
                    ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
                    ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
                    ->where_in('manifesto.sl_no',$data)
                     ->group_by('book_nature_of_good.sl_no')
                    ->get();
        
          $output='<style>
          table, td, th {
            border: 1px solid black;
            text-align:center;
             border-collapse: collapse;
          }
          
          table {
            width: 100%;
           
          }</style>';
          $output .= '<table>';
          $output .= '<tr>
                        <th>SL NO</th>
                       <th>AMOUNT</th>
                         <th>PAID</th>
                        <th>TO PAY</th>
                        <th>cosignee_name</th>
                        <th>NATURE OF GOOD</th>
                       <th>PICES</th>
                        <th>VEHICAL NO</th>
                      </tr>';
foreach($output1->result_array() as $display)
{
 $output .= '
 <tr>
 
  
  <td > '.$display['branch_code'].''.$display['sl_no'].'</td> 
  <td> '.$display['amount'].'</td>
  <td>'. $display['paid'].'</td>
  <td>'. $display['to_pay'].'</td>
 
  <td> '.$display['cosignee_name'].'</td>
 <td>'. $display['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'].'</td>
 <td>' . $display['GROUP_CONCAT(book_nature_of_good.pices)'].'</td>
  <td>
  '. $display['vehical_no'].'
  </td>

 </tr>
 ';
}

$output .= '</table>';
return $output;
}
public function printinvoice($book_id){
  $value = $this->db->select(['bookaload.branch_code', 'bookaload.booking_from','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.cosignor_phn_num','bookaload.cosignee_phn_no','bookaload.branch_name', 'bookaload.consignor_adress', 'bookaload.cosignee_adress', 'bookaload.booking_date', 'bookaload.consignor_gst_no', 'bookaload.cosignee_gst_no', 'bookaload.number_of_goods', 'bookaload.amount', 'bookaload.sl_no', 'bookaload.paid', 'bookaload.to_pay', 'bookaload.consignor_name', 'bookaload.cosignee_name', 'bookaload.book_id', 'bookaload.vehical_no', 'GROUP_CONCAT(book_nature_of_good.pices)', 'GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
      ->from('bookaload')

      ->join('book_nature_of_good', 'book_nature_of_good.sl_no=bookaload.sl_no')
      ->where('bookaload.book_id', $book_id)

      ->get();
    $output = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Example 1</title>
   
    <link href="http://deep.gkd619.com/Assests/invoice/style.css" rel="stylesheet" media="all">
  <style>
    .column {
      float: left;
      width: 10.33%;
      padding: 10px;
      height: 20px;
      /* Should be removed. Only for demonstration */
    }
    table td {
    padding: 8px;
    }
  </style>

</head>
<body>
<header class="clearfix">
  <section>
   <div>
      <img style="width: 100%;" src="http://deep.gkd619.com/Assests/invoice/head3.jpg" rel=" stylesheet" media="all">

    </div>
    <div>
    <div>
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="http://deep.gkd619.com/Assests/invoice/bnr.jpg" rel="stylesheet" media="all">
      </div>';
     foreach ($value->result_array() as $data1) {
      $output .='<div>
       <p style="margin-left:20px">  <b>  <img style="  width: 17%;" src="http://deep.gkd619.com/Assests/invoice/white.jpg" rel="stylesheet" media="all">BOOKING DATE:' . $data1['booking_date'] . '</b></p></div>
            
    
    
     </div></div>
     
    </header>
      <main>
      <table >
        <thead>
         <tr>';
         }
         foreach ($value->result_array() as $data1) {
                $output .= '<td colspan="2"><div><span style="float:left"><b>CONSIGNOR NAME</b></span>:' . $data1['consignor_name'] . '<br>
              <span style="float:left"> <b>CONSIGNOR ADDRESS</b></span>: ' . $data1['consignor_adress'] . '<br>
             <span style="float:left">  <b>CONSIGNOR PHONE NO</b></span>: ' . $data1['cosignor_phn_num'] . '<br>
              <span style="float:left"> <b> CONSIGNOR GST NO</b></span>: ' . $data1['consignor_gst_no'] . '<br>
                </div></td>
                <td colspan="4" ><div style="padding-left:80px"><span style="float:left"><b>COSIGNEE NAME</b></span>:' . $data1['cosignee_name'] . '<br>
              <span style="float:left"> <b>COSIGNEE ADDRESS</b></span>: ' . $data1['cosignee_adress'] . '<br>
              <span style="float:left"> <b>COSIGNEE PHONE NO</b></span>: ' . $data1['cosignee_phn_no'] . '<br>
              <span style="float:left"> <b>COSIGNEE GST NO</b></span>: ' . $data1['cosignee_gst_no'] . '<br>
                </div></td>
                         
        </tr>
          <tr>
           <th class="service">NUMBER OF GOODS</th>
            <th class="desc">NATURE OF GOODS</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
         <tr>';
         }
          foreach ($value->result_array() as $data1) {
                $output .= ' <td class="service">' . $data1['number_of_goods'] . '</td>
              <td class="desc">' . $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] . '</td>
              <td class="unit">' . $data1['GROUP_CONCAT(book_nature_of_good.pices)'] . ' </td>
              <td class="qty">' . $data1['amount'] . '</td>
              <td class="total">' . $data1['amount'] . '</td>

          </tr>
           <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">' . $data1['amount'] . '</td>
          </tr>
           <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
            <tr>
             <td class="column" style="background-color:#aaa;"> PAID :' . $data1['paid'] . '</td>
             
             <td class="column" style="background-color:#bbb;">UNPAID :' . $data1['to_pay'] . '</td>
             
            <td colspan="4" class="grand total">GRAND TOTAL '. $data1['amount'] .'</td>
            <td class="grand total">' . $data1['amount'] . '</td>
          </tr>
       
            </tbody>
             </table>

     
     
     
    
    
     

    <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="http://deep.gkd619.com/Assests/invoice/foot.jpg" rel="stylesheet" media="all">
</div>  </form>
</main>

  </section><br><br><br>';
  }
  


 $output.='
<header class="clearfix"> <section>
      
    <div>
      <img style="width: 100%;" src="http://deep.gkd619.com/Assests/invoice/head3.jpg" rel=" stylesheet" media="all">

    </div>
      <div>
    <div>
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="http://deep.gkd619.com/Assests/invoice/bnr.jpg" rel="stylesheet" media="all">
      </div>';
        foreach ($value->result_array() as $data1) {
      $output .='<div>
              <p style="margin-left:20px">  <b>  <img style="  width: 17%;" src="http://deep.gkd619.com/Assests/invoice/white.jpg" rel="stylesheet" media="all">BOOKING DATE:' . $data1['booking_date'] . '</b></p></div>
    
    
     </div></div>
     
     
    </header>
    <main>
      <table >
        <thead>
        <tr>';
         }
         foreach ($value->result_array() as $data1) {
                  $output .= '<td colspan="2"><div><span style="float:left"><b>CONSIGNOR NAME</b></span>:' . $data1['consignor_name'] . '<br>
              <span style="float:left"> <b>CONSIGNOR ADDRESS</b></span>: ' . $data1['consignor_adress'] . '<br>
             <span style="float:left">  <b>CONSIGNOR PHONE NO</b></span>: ' . $data1['cosignor_phn_num'] . '<br>
              <span style="float:left"> <b> CONSIGNOR GST NO</b></span>: ' . $data1['consignor_gst_no'] . '<br>
                </div></td>
                <td colspan="4" ><div style="padding-left:80px"><span style="float:left" ><b>COSIGNEE NAME</b></span>:' . $data1['cosignee_name'] . '<br>
                <span style="float:left"><b>COSIGNEE ADDRESS</b></span>: ' . $data1['cosignee_adress'] . '<br>
               <span style="float:left"> <b>COSIGNEE PHONE NO</b></span>: ' . $data1['cosignee_phn_no'] . '<br>
                <span style="float:left"><b>COSIGNEE GST NO</b></span>: ' . $data1['cosignee_gst_no'] . '<br>
                </div></td>
                         
        </tr>
          <tr>
           <th class="service">NUMBER OF GOODS</th>
            <th class="desc">NATURE OF GOODS</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
         <tr>';
         }
          foreach ($value->result_array() as $data1) {
                $output .= ' <td class="service">' . $data1['number_of_goods'] . '</td>
              <td class="desc">' . $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] . '</td>
              <td class="unit">' . $data1['GROUP_CONCAT(book_nature_of_good.pices)'] . ' </td>
              <td class="qty">' . $data1['amount'] . '</td>
              <td class="total">' . $data1['amount'] . '</td>

          </tr>
           <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">' . $data1['amount'] . '</td>
          </tr>
           <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
            <tr>
             <td class="column" style="background-color:#aaa;"> PAID :' . $data1['paid'] . '</td>
             
             <td class="column" style="background-color:#bbb;">UNPAID :' . $data1['to_pay'] . '</td>
             
            <td colspan="4" class="grand total">GRAND TOTAL '. $data1['amount'] .'</td>
            <td class="grand total">' . $data1['amount'] . '</td>
          </tr>
       
            </tbody>
             </table>

     
     
     
    
    
     

    <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="http://deep.gkd619.com/Assests/invoice/foot.jpg" rel="stylesheet" media="all">
</div>  </form>
</main>

 </section><br><br><br>';
          }


'</body>

</html>';

      
      return $output;
    }



public function Viewinvoice($sl_no){
  $value=$this->db->select(['bookaload.branch_code','bookaload.sl_no','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.cosignor_phn_num','bookaload.cosignee_phn_no','bookaload.booking_from','bookaload.branch_name','bookaload.consignor_adress','bookaload.cosignee_adress','bookaload.booking_date','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.number_of_goods','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
  ->from('bookaload')
  
  ->join('book_nature_of_good','book_nature_of_good.sl_no=bookaload.sl_no')
  ->where('bookaload.sl_no',$sl_no)
 
  ->get();
 
   $output = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Example 1</title>
   
    <link href="http://deep.gkd619.com/Assests/invoice/style.css" rel="stylesheet" media="all">
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
<header class="clearfix">
  <section>
   <div>
      <img style="width: 100%;" src="http://deep.gkd619.com/Assests/invoice/head.jpg" rel=" stylesheet" media="all">

    </div>
    <div>
    <div>
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="http://deep.gkd619.com/Assests/invoice/bnr.jpg" rel="stylesheet" media="all">
      </div>';
     foreach ($value->result_array() as $data1) {
      $output .='<div>
              <p style="margin-left:20px">  <b>  <img style="  width: 17%;" ;" src="http://deep.gkd619.com/Assests/invoice/white.jpg" rel="stylesheet" media="all">BOOKING DATE:' . $data1['booking_date'] . '</b></p></div>
    
    
     </div></div>
     
    <div>';
     }
         foreach ($value->result_array() as $data1) {
                $output .= '<div style="width:50%;><div style="width:30%;"><span><b> NAME</b></span>:' . $data1['consignor_name'] . '<br>
                           <span><b>ADDRESS</b></span>:' . $data1['consignor_adress'] . '<br>
                           <span><b>GST NO</b></span>:' . $data1['consignor_gst_no'] . '<br>
                           <span><b>PHONE NUMBER</b></span>:' . $data1['cosignor_phn_num'] . '</div></div>
                            <div style="float: right;" ><span><b> NAME</b></span>:' . $data1['cosignee_name'] .'<br>
                             <span><b>ADDRESS</b></span>:' . $data1['cosignee_adress'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_gst_no'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_phn_no'] .' </div>
                            
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
         <tr>';
         }
          foreach ($value->result_array() as $data1) {
                $output .= ' <td class="service">' . $data1['number_of_goods'] . '</td>
              <td class="desc">' . $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] . '</td>
              <td class="unit">' . $data1['GROUP_CONCAT(book_nature_of_good.pices)'] . ' </td>
              <td class="qty">' . $data1['amount'] . '</td>
              <td class="total">' . $data1['amount'] . '</td>

          </tr>
           <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">' . $data1['amount'] . '</td>
          </tr>
           <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total"></td>
          </tr>
            <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">' . $data1['amount'] . '</td>
          </tr>
          <tr>
            <td class="column" style="background-color:#aaa;"> PAID :' . $data1['paid'] . '</td>
             
             <td class="column" style="background-color:#bbb;">UNPAID :' . $data1['to_pay'] . '</td>
          </tr>
            </tbody>
             </table>

     
     
     
    
    
     

    <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="http://deep.gkd619.com/Assests/invoice/foot.jpg" rel="stylesheet" media="all">
</div>  </form>
</main>

  </section><br><br><br>';
  }
  


 $output.='
<header class="clearfix"> <section>
      
    <div>
      <img style="width: 100%;" src="http://deep.gkd619.com/Assests/invoice/head.jpg" rel=" stylesheet" media="all">

    </div>
      <div>
    <div>
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="http://deep.gkd619.com/Assests/invoice/bnr.jpg" rel="stylesheet" media="all">
      </div>';
        foreach ($value->result_array() as $data1) {
      $output .='<div>
              <p style="margin-left:20px">  <b>  <img style="  width: 17%;" src="http://deep.gkd619.com/Assests/invoice/white.jpg" rel="stylesheet" media="all">BOOKING DATE:' . $data1['booking_date'] . '</b></p></div>
    
    
     </div></div>
     
    <div>';
     }
        
    
      foreach ($value->result_array() as $data1) {
                $output .= '<div style="width:50%;><div style="width:30%;"><span><b> NAME</b></span>:' . $data1['consignor_name'] . '<br>
                           <span><b>ADDRESS</b></span>:' . $data1['consignor_adress'] . '<br>
                           <span><b>GST NO</b></span>:' . $data1['consignor_gst_no'] . '<br>
                           <span><b>PHONE NUMBER</b></span>:' . $data1['cosignor_phn_num'] . '</div></div>
                            <div style="float: right;" ><span><b> NAME</b></span>:' . $data1['cosignee_name'] .'<br>
                             <span><b>ADDRESS</b></span>:' . $data1['cosignee_adress'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_gst_no'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_phn_no'] .' </div>
                            
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
         <tr>';
         }

      foreach ($value->result_array() as $data1) {
                $output .= ' <td class="service">' . $data1['number_of_goods'] . '</td>
              <td class="desc">' . $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] . '</td>
              <td class="unit">' . $data1['GROUP_CONCAT(book_nature_of_good.pices)'] . ' </td>
              <td class="qty">' . $data1['amount'] . '</td>
              <td class="total">' . $data1['amount'] . '</td>

          </tr>
           <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">' . $data1['amount'] . '</td>
          </tr>
           <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total"></td>
          </tr>
            <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">' . $data1['amount'] . '</td>
          </tr>
          <tr>
            <td class="column" style="background-color:#aaa;"> PAID :' . $data1['paid'] . '</td>
             
             <td class="column" style="background-color:#bbb;">UNPAID :' . $data1['to_pay'] . '</td>
          </tr>
            </tbody>
             </table>

     
     
     
    
    
     

    <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="http://deep.gkd619.com/Assests/invoice/foot.jpg" rel="stylesheet" media="all">
</div>  </form>
</main>

 </section><br><br><br>';
  }

 $output.='
<header class="clearfix"> <section>
      
    <div>
      <img style="width: 100%;" src="http://deep.gkd619.com/Assests/invoice/head.jpg" rel=" stylesheet" media="all">

    </div>
      <div>
    <div>
      <div style="width: 55%;float:left">
        <img style="  width: 100%;" ;" src="http://deep.gkd619.com/Assests/invoice/bnr.jpg" rel="stylesheet" media="all">
      </div>';
        foreach ($value->result_array() as $data1) {
      $output .='<div>
              <p style="margin-left:20px">  <b>  <img style="  width: 17%;" src="http://deep.gkd619.com/Assests/invoice/white.jpg" rel="stylesheet" media="all">BOOKING DATE:' . $data1['booking_date'] . '</b></p></div>
    
    
     </div></div>
     
    <div>';
     }
        
    
      foreach ($value->result_array() as $data1) {
                $output .= '<div style="width:50%;><div style="width:30%;"><span><b> NAME</b></span>:' . $data1['consignor_name'] . '<br>
                           <span><b>ADDRESS</b></span>:' . $data1['consignor_adress'] . '<br>
                           <span><b>GST NO</b></span>:' . $data1['consignor_gst_no'] . '<br>
                           <span><b>PHONE NUMBER</b></span>:' . $data1['cosignor_phn_num'] . '</div></div>
                            <div style="float: right;" ><span><b> NAME</b></span>:' . $data1['cosignee_name'] .'<br>
                             <span><b>ADDRESS</b></span>:' . $data1['cosignee_adress'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_gst_no'] .'<br>
                             <span><b> NAME</b></span>:' . $data1['cosignee_phn_no'] .' </div>
                            
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
         <tr>';
         }

      foreach ($value->result_array() as $data1) {
                $output .= ' <td class="service">' . $data1['number_of_goods'] . '</td>
              <td class="desc">' . $data1['GROUP_CONCAT(book_nature_of_good.nature_of_goods)'] . '</td>
              <td class="unit">' . $data1['GROUP_CONCAT(book_nature_of_good.pices)'] . ' </td>
              <td class="qty">' . $data1['amount'] . '</td>
              <td class="total">' . $data1['amount'] . '</td>

          </tr>
           <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">' . $data1['amount'] . '</td>
          </tr>
           <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total"></td>
          </tr>
            <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">' . $data1['amount'] . '</td>
          </tr>
          <tr>
            <td class="column" style="background-color:#aaa;"> PAID:' . $data1['paid'] . '</td>
             
             <td class="column" style="background-color:#bbb;">UNPAID:' . $data1['to_pay'] . '</td>
          </tr>
            </tbody>
             </table>

     
     
     
    
    
     

    <div style="">
        <img style="  width: 100%;margin-top: 20px;" ;" src="http://deep.gkd619.com/Assests/invoice/foot.jpg" rel="stylesheet" media="all">
</div>  </form>
</main>

</body>

</html>';

      }
      return $output;
}

}


