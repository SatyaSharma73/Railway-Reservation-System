<?php
include("../connection3.php");
if(isset($_POST['submit']))
{

    $query="insert into order_invoice set firstname='".$_POST['firstname']."',email='".$_POST['email']."',phone='".$_POST['phone']."',amount='".$_POST['amount']."',person='".$_POST['person']."',arrival='".$_POST['arrival']."',status='unpaid'";

    mysqli_query($con,$query);

  }
$MERCHANT_KEY = "rjQUPktU";
$SALT = "e5iIg1jwi8";
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://test.payu.in/";
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode





$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {
    $posted[$key] = $value;

  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script>
      var hash = '<?php echo $hash ?>';
      function submitPayuForm() {
        if(hash == '') {
          return;
        }
        var payuForm = document.forms.payuForm;
        payuForm.submit();
      }
    </script>
  </head>

  <body onload="setTimeout(function() {document.payuForm.submit()  }, 50)">

      <h2>PayU Form</h2>
      <br/>
      <?php if($formError) { ?>

        <span style="color:red">Please fill all mandatory fields.</span>
        <br/>
        <br/>
      <?php } ?>
      <form action="<?php echo $action; ?>" method="post" name="payuForm">
        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
        <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        <table>
          <tr>
            <td><b>Mandatory Parameters</b></td>
          </tr>
          <tr>
            <td>Amount: </td>
            <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount']; ?>" /></td>
            <td>First Name: </td>
            <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
            <td>Phone: </td>
            <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
          </tr>
          <tr>
            <td>Product Info: </td>
            <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
          </tr>
          <tr>

            <td colspan="3"><input type="hidden" name="surl" value="<?php echo $surl ?>" size="64" /></td>
          </tr>
          <tr>

            <td colspan="3"><input type="hidden" name="furl" value="<?php echo $furl ?>" size="64" /></td>
          </tr>

          <tr>
            <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
          </tr>


          <tr>
            <?php if(!$hash) { ?>
              <td colspan="4"><input type="submit" value="Submit" /></td>
            <?php } ?>
          </tr>
        </table>
      </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
