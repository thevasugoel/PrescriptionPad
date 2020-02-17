<?php
include('header.php');
include('functions.php');

?>

		<h1>Create Entry</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice">
			<input type="hidden" name="action" value="create_invoice">
			
			<div class="row">
				<div class="col-xs-5">
					<h1>
						</h1>
				</div>
				<div class="col-xs-7 text-right">
					<div class="row">
						<div class="col-xs-1">
							<center><h1>Patient&nbsp;Entry</h1>
</center>						</div>
						
					</div>
					<div class="col-xs-6 no-padding-right">
				        <div class="form-group">
						
				                	<select class="form-control" name="customer_hospital" tabindex="1">
											<option>Anand</option>
											<option>Lokpriya</option>
										</select>
						
				        </div>
				    </div>
					<!--	<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control" name="invoice_date" placeholder="Select DOA" data-date-format="<?php //echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <div class="col-xs-4">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="invoice_due_date" placeholder="Select DOD" data-date-format="<?php //echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>-->
					<div class="input-group col-xs-6 float-right">
						<span class="input-group-addon">#IPD</span>
						<input type="text" name="invoice_id" id="invoice_id" class="form-control required" placeholder="IPD Number" aria-describedby="sizing-addon1" value="" tabindex="2">
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
										<input type="text" class="form-control margin-bottom copy-input" name="customer_name" id="customer_name" placeholder="Enter name" tabindex="3">
									</div><div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control" name="invoice_date" placeholder="Date of Admission" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="5" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input" name="customer_refer" id="customer_refer" placeholder="Referred By" tabindex="7">
									</div>
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="invoice_due_date" placeholder="Date of Discharge" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="9" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
								    
								 
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<select class="form-control margin-bottom copy-input" name="customer_type" tabindex="4">
											<option>Normal</option>
											<option>Panel</option>
											<option>ECHS</option>
											<option>CGHS</option>
											<option>Others</option>
										</select>	
										</div><div class="form-group">								<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="dr_incharge" id="dr_incharge" placeholder="Dr. Incharge" tabindex="6">
								    </div>
				            <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="customer_visit" id="customer_visit" placeholder="Visits" tabindex="8">
								    </div>
							
				        </div>
						
																    
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--	<div class="col-xs-6 text-right">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Shipping Information</h4>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_name_ship" id="customer_name_ship" placeholder="Enter name" tabindex="9">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2_ship" id="customer_address_2_ship" placeholder="Address 2" tabindex="11">	
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control required" name="customer_county_ship" id="customer_county_ship" placeholder="County" tabindex="13">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom required" name="customer_address_1_ship" id="customer_address_1_ship" placeholder="Address 1" tabindex="10">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_town_ship" id="customer_town_ship" placeholder="Town" tabindex="12">							
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_postcode_ship" id="customer_postcode_ship" placeholder="Postcode" tabindex="14">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		-->	</div>



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
										<input type="text" class="form-control margin-bottom copy-input" name="procedure" id="procedure" placeholder="Procedure" tabindex="10">
									</div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="discount" id="discount" placeholder="Discount" tabindex="12">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="finalamount" id="finalamount" placeholder="Final Amount" tabindex="14">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="cash" id="cash" placeholder="Cash" tabindex="15">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="cheque" id="cheque" placeholder="Cheque" tabindex="17">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="refer_charge" id="refer_charge" placeholder="Referring Charges" tabindex="19">
								    </div>

								 
								</div>
								
								
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="amountexpected" id="amountexpected" placeholder="Amount Expected" tabindex="11">
								    </div>
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="doneby" id="doneby" placeholder="Done By" tabindex="13">
								    </div>
									<div class="form-group">
								    	<p class="" style="padding-top:10px;">&nbsp;</p>
								    </div>
									<div class="form-group">
<div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="cash_date" placeholder="Cash Recieved Date" data-date-format="<?php echo DATE_FORMAT ?> " tabindex="16" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div></div>
							<div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="cheque_date" placeholder="Cheque Recieved Date" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="18"/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div></div>
				            <div class="form-group">									
									<div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control" name="given_date" placeholder="Giving Date" data-date-format="<?php echo DATE_FORMAT ?>" tabindex="20"/>
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
		
		
		
			<!-- / end client details section -->
					<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_create_invoice" class="btn btn-success float-right" tabindex="21" value="Create Invoice" data-loading-text="Creating...">
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

		<div id="insert_customer" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select an existing customer</h4>
		      </div>
		      <div class="modal-body">
				<?php popCustomersList(); ?>
		      </div>
		      <div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php
	include('footer.php');
?>