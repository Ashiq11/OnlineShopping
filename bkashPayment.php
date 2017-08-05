<html>
<?php 
require("menu.php");
?>
	<body>
		<div style="margin-left:20%;">
		  <h2>Pay using your Bkash account</h2>
		  <b>Important:</b>
		  <p>You will not be able to confirm your order until you receive your bkash payment.
		  <br/>If you have multiple items in an order, you might not recieve every item at the same time.
		  <br/>Don't worry, all your items will arrive shortly.<br/></p>
		  <b>To pay through bKash follow thes simple steps:</b>
		  <ul>
			  <li><b>Step-1: </b>Dial *247# to get your bKash menu</li>
			  <li><b>Step-2: </b>Press '3' for "Payments"</li>
			  <li><b>Step-3: </b>Enter the FNF Merchant Number -<b>01776038047</b></li>
			  <li><b>Step-4: </b>Enter Amount: Total order amount</li>
			  <li><b>Step-5: </b>Enter Order no. as reference.</li>
			  <li><b>Step-6: </b>Enter '1' for the bKash Counter No.</li>
			  <li><b>Step-7: </b>Veryfy your Payment by entering your PIN.</li>
		  </ul>
		  <b>Caution: Final Step</b><br/>
		  This is the final step. Once you click "Confirmed Order", you will not be able to <br/>
		  change or edit your order.
		  <br/>To cancel,edit or change your order go back to <a href="cart.php">cart page </a><br/><br/>
		  <b>Cancelation Policy:</b>
		  <p>Please note that FNF.com.bd will have the right to refuse or cancel any order at any time<br/>
		  wheter or not the order has been confirmed and your credit card charge.In case of<br/>
		  cancellation of prepaid orders(fully or partially),full amount paid by the customer will be <br/>
		  refund within 2-3 business days of cancelling the orders.</p>
		  <table align="center" border="2" cellspacing="0" cellpadding="10">
			<tr>
				<td><b>TOTAL</b></td>
			</tr>
			<tr>
				<td>1640.00 Tk</td>
			</tr>
		  </table>
		</div>
		</body>
		<hr/>
		<center>
		<input type="button" value="Confirmed Order" onclick="window.location.href='thnx.php'" size="50" style="font-size:15pt;height:50px; width:250px; color:white;background-color:orange;">
		</center>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>