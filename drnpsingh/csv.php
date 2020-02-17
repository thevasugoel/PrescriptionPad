<?php  

include("session.php");
	
if(isset($_POST['submit'])){	
$conn = new mysqli('localhost', 'vasuiuv9', '8331to4477');  
mysqli_select_db($conn, 'vasuiuv9_np');  
  
  $from = $_POST['from'];
  $to = $_POST['to'];
  
$setSql = "SELECT c.hospital,i.invoice,c.name,c.type, i.invoice_date, c.incharge, c.refer, c.visits, s.proc, i.invoice_due_date, s.amountexpected, s.discount, s.doneby, s.finalamount, s.cash, s.cashdate, s.cheque, s.chequedate, s.refer_charge, s.givendate
 FROM invoices i
					INNER JOIN customers c
					ON i.invoice = c.invoice
					INNER JOIN invoice_items s
					ON s.invoice = c.invoice					
						WHERE i.invoice = c.invoice AND i.invoice_date BETWEEN '$from' AND '$to' 
					ORDER BY i.invoice";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Hospital" . "\t" . "IPD NO." . "\t". "Patient's Name" . "\t" . "Type" . "\t" . "Date Of Admission" .  "\t" .  "Dr. Incharge" . "\t" . "Referref Dr." . "\t" . "Visits" . "\t" . "Procedure" . "\t" . "Date Of Discharge" . "\t" . "Amount Expected" . "\t"  . "Discount" . "\t" . "Done By" . "\t" . "Final Amount" . "\t" . "Cash" . "\t" . "Cash Date" . "\t" . "Cheque" . "\t" . "Cheque Date" . "\t" . "Referring Charges" . "\t" . "Given Date" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
}


elseif(isset($_POST['submit2'])){	
$conn = new mysqli('localhost', 'vasuiuv9', '8331to4477');  
mysqli_select_db($conn, 'vasuiuv9_np');  
  
  $type = $_POST['type'];
  
$setSql = "SELECT c.hospital,i.invoice,c.name,c.type, i.invoice_date, c.incharge, c.refer, c.visits, s.proc, i.invoice_due_date, s.amountexpected, s.discount, s.doneby, s.finalamount, s.cash, s.cashdate, s.cheque, s.chequedate, s.refer_charge, s.givendate
 FROM invoices i
					INNER JOIN customers c
					ON i.invoice = c.invoice
					INNER JOIN invoice_items s
					ON s.invoice = c.invoice					
						WHERE i.invoice = c.invoice AND c.type = '$type' 
					ORDER BY i.invoice";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Hospital" . "\t" . "IPD NO." . "\t". "Patient's Name" . "\t" . "Type" . "\t" . "Date Of Admission" .  "\t" .  "Dr. Incharge" . "\t" . "Referref Dr." . "\t" . "Visits" . "\t" . "Procedure" . "\t" . "Date Of Discharge" . "\t" . "Amount Expected" . "\t"  . "Discount" . "\t" . "Done By" . "\t" . "Final Amount" . "\t" . "Cash" . "\t" . "Cash Date" . "\t" . "Cheque" . "\t" . "Cheque Date" . "\t" . "Referring Charges" . "\t" . "Given Date" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
}

elseif(isset($_POST['submit3'])){	
$conn = new mysqli('localhost', 'vasuiuv9', '8331to4477');  
mysqli_select_db($conn, 'vasuiuv9_np');  
  
  $hospital = $_POST['hospital'];
  
$setSql = "SELECT c.hospital,i.invoice,c.name,c.type, i.invoice_date, c.incharge, c.refer, c.visits, s.proc, i.invoice_due_date, s.amountexpected, s.discount, s.doneby, s.finalamount, s.cash, s.cashdate, s.cheque, s.chequedate, s.refer_charge, s.givendate
 FROM invoices i
					INNER JOIN customers c
					ON i.invoice = c.invoice
					INNER JOIN invoice_items s
					ON s.invoice = c.invoice					
						WHERE i.invoice = c.invoice AND c.hospital = '$hospital' 
					ORDER BY i.invoice";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Hospital" . "\t" . "IPD NO." . "\t". "Patient's Name" . "\t" . "Type" . "\t" . "Date Of Admission" .  "\t" .  "Dr. Incharge" . "\t" . "Referref Dr." . "\t" . "Visits" . "\t" . "Procedure" . "\t" . "Date Of Discharge" . "\t" . "Amount Expected" . "\t"  . "Discount" . "\t" . "Done By" . "\t" . "Final Amount" . "\t" . "Cash" . "\t" . "Cash Date" . "\t" . "Cheque" . "\t" . "Cheque Date" . "\t" . "Referring Charges" . "\t" . "Given Date" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
}


else{
?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">

		<h1>Create User Detail Report</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post">
			
			
			<div class="row">
				<div class="col-xs-5">
					<h1>
						</h1>
				</div>
				<div class="col-xs-12">
				
					<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control required" name="from" placeholder="FROM" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <div class="col-xs-4">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control required" name="to" placeholder="TO" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
					<div class="input-group col-xs-4">
						
						<input type="submit" name="submit" class="btn btn-success float-left">
						<a href="invoice-create.php"><input type="button" value="Return Home" class="btn btn-primary float-left"></a>
					</div>
				</div>
			</div>  
			</form>
			
			
			
			
			
					<form method="post">
			
			
			<div class="row">
				<div class="col-xs-5">
					<h1>
						</h1>
				</div>
				<div class="col-xs-12">
				
					<div class="col-xs-4 no-padding-right">
				       <div class="form-group">
										<select class="form-control margin-bottom copy-input" name="type" tabindex="4">
											<option>Normal</option>
											<option>Panel</option>
											<option>ECHS</option>
											<option>CGHS</option>
											<option>Others</option>
										</select>	
										</div>
				    </div>
					<div class="input-group col-xs-4">
						
						<input type="submit" name="submit2" class="btn btn-success float-left">
						<a href="invoice-create.php"><input type="button" value="Return Home" class="btn btn-primary float-left"></a>
					</div>
				</div>
			</div>  
			</form>
			
			
			
			
			
			
			
			
			
				<form method="post">
			
			
			<div class="row">
				<div class="col-xs-5">
					<h1>
						</h1>
				</div>
				<div class="col-xs-12">
				
					<div class="col-xs-4 no-padding-right">
				       <select class="form-control" name="hospital" tabindex="1">
											<option>Anand</option>
											<option>Lokpriya</option>
										</select>
				    </div>
					<div class="input-group col-xs-4">
						
						<input type="submit" name="submit3" class="btn btn-success float-left">
						<a href="invoice-create.php"><input type="button" value="Return Home" class="btn btn-primary float-left"></a>
					</div>
				</div>
			</div>  
			</form>
			<?php
}
			?>