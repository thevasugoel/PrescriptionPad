<?php
include('header.php');
include('functions.php');

$getID = $_GET['id'];

// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT p.*, i.*, c.*
			FROM invoice_items p 
			JOIN invoices i ON i.invoice = p.invoice
			JOIN customers c ON c.invoice = i.invoice
			WHERE p.invoice = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$customer_name = $row['name']; // customer name
		$customer_type = $row['type']; // customer email
		$doctor_incharge = $row['incharge'];
		$refer = $row['refer'];
$refer_date = $row['refer_date'];
		$customer_visit = $row['visits']; // customer address
		$customer_hospital = $row['hospital']; // customer county
$dopr = $row['dopr'];		// customer postcode

  $procedure = $row['proc'];
	    $amountexpected = $row['amountexpected'];
	    $discount = $row['discount'];
		$doneby = $row['doneby'];
	    $finalamount = $row['finalamount'];
		$cash = $row['cash'];
		$cashdate = $row['cashdate'];
		$cheque = $row['cheque'];
		$chequedate = $row['chequedate'];
		$refer_charge = $row['refer_charge'];
		$givendate = $row['givendate'];

		// invoice details
		$invoice_number = $row['invoice']; // invoice number
				$invoice_date = $row['invoice_date']; // invoice date
		$invoice_due_date = $row['invoice_due_date']; // invoice due date
		$invoice_subtotal = $row['subtotal']; // invoice sub-total
		
		$invoice_discount = $row['discount']; // invoice discount
		
		$invoice_total = $row['total']; // invoice total
		
	}
}

/* close connection */
$mysqli->close();

?>

		<h1>Edit Invoice (<?php echo $getID; ?>)</h1>
		<hr>
<script>
function myFunction() {
  var x = document.getElementById("update_invoice");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="update_invoice">
			<input type="hidden" name="action" value="update_invoice">
			<input type="hidden" name="update_id" value="<?php echo $getID; ?>">

			

			<div class="row">
				<div class="col-xs-5">
					
				</div>
				<div class="col-xs-7">
					<div class="row">
						<div class="col-xs-6">
							<h1>Entry&nbsp;Edit</h1>
						</div>


					</div>
				
				    <div class="col-xs-6">
				           <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input required" name="customer_hospital" id="customer_hospital" placeholder="Hospital" tabindex="6" value="<?php echo $customer_hospital; ?>" <?php if($customer_hospital != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
								    </div>
				    </div>
					
					<div class="input-group col-xs-6 float-right" id="dis">
						<span class="input-group-addon">#<?php echo INVOICE_PREFIX ?></span>
						<input type="text" name="invoice_id"  class="form-control required" placeholder="Invoice Number" aria-describedby="sizing-addon1" value="<?php echo $getID; ?>" <?php if($getID != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
					</div>
				</div>
			</div>
		
		

		<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Patient Information</h4>
							
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input" name="customer_name" id="customer_name"  placeholder="Patient Name" value="<?php echo $customer_name; ?>" tabindex="3" <?php if($customer_name != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
									</div><div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control" name="invoice_date"  value="<?php echo $invoice_date; ?>" placeholder="Date Of Admission" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="5" <?php if($invoice_date != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?> />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input" name="customer_refer" id="customer_refer" placeholder="Referred By" value="<?php echo $refer; ?>" tabindex="7" <?php if($refer != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
									</div>
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="invoice_due_date"  value="<?php echo $invoice_due_date; ?>"  data-date-format="<?php echo DATE_FORMAT ?>" placeholder="Date Of Discharge" tabindex="9" <?php if($invoice_due_date != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?> />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
								    
								 
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input" name="customer_type" id="customer_type" placeholder="Customer Type" value="<?php echo $customer_type; ?>" tabindex="7" <?php if($customer_type != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
									
										</div><div class="form-group">								<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="dr_incharge" id="dr_incharge" placeholder="Dr. Incharge" value="<?php echo $doctor_incharge; ?>" tabindex="6" <?php if($doctor_incharge != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
								    </div>
				            <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="customer_visit" id="customer_visit" placeholder="Visits" value="<?php echo $customer_visit; ?>" tabindex="8" <?php if($customer_visit != "" && $_SESSION['login_username']!="admin"){ echo "disabled"; }?>>
								    </div>
							
				        </div>
						
																    
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Payment Information</h4>
							
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input" name="procedure" id="procedure" placeholder="Procedure" value="<?php echo $procedure; ?>" <?php if($procedure != '' && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="10">
									</div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="discount" id="discount" <?php if($discount != 0){ echo "value = '$discount'";} else {echo "placeholder = 'Discount'"; }?><?php if($discount != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="12">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="finalamount" id="finalamount" <?php if($finalamount != 0){ echo "value = $finalamount";} else {echo "placeholder = 'Final Amount'"; }?>" <?php if($finalamount != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="14">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="cash" id="cash" <?php if($cash != 0){ echo "value = $cash";} else {echo "placeholder = 'Cash'"; }?> <?php if($cash != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="15">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="cheque" id="cheque" <?php if($cheque != 0){ echo "value = $cheque";} else {echo "placeholder = 'Cheque'"; }?> <?php if($cheque != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="17">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="refer_charge" id="refer_charge" <?php if($refer_charge != 0){ echo "value = $refer_charge";} else {echo "placeholder = 'Referring Charges'"; }?> <?php if($refer_charge != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="19">
								    </div>

								 
								</div>
								
								
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="amountexpected" id="amountexpected" <?php if($amountexpected != 0){ echo "value = $amountexpected";} else {echo "placeholder = 'Amount Expected'"; }?> <?php if($amountexpected != 0 && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="11">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="doneby" id="doneby" <?php if($doneby != ''){ echo "value = $doneby";} else {echo "placeholder = 'Done By'"; }?> <?php if($doneby != '' && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="13">
								    </div>
									<div class="form-group">
								    	<p class="" style="padding-top:10px;">&nbsp;</p>
								    </div>
									<div class="form-group">
<div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="cash_date" placeholder="Cash Recieved Date" value="<?php echo $cashdate; ?>" <?php if($cashdate != '' && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> data-date-format="<?php echo DATE_FORMAT ?> " tabindex="16" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div></div>
							<div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="cheque_date" placeholder="Cheque Recieved Date" value="<?php echo $chequedate; ?>"  data-date-format="<?php echo DATE_FORMAT ?>" tabindex="18" <?php if($chequedate != '' && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?>/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div></div>
				            <div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="given_date" placeholder="Giving Date" value="<?php echo $givendate; ?>" data-date-format="<?php echo DATE_FORMAT ?>" <?php if($givendate != '' && $_SESSION['login_username']!="admin"){ echo 'disabled'; }?> tabindex="20"/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div></div>
							
				        </div>
						
																    
								</div>
							</div>
						</div>
					</div>
				</div>
	
		</div>
		
		














	
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_edit_invoice" onclick="myFunction()" class="btn btn-success float-right" value="Update Invoice" data-loading-text="Updating...">
				</div>
			</div>
		</form>

		<div id="insert" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select an item</h4>
		      </div>
		      <div class="modal-body">
				<?php popProductsList(); ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php
	include('footer.php');
?>