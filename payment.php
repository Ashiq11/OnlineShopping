<html>
<?php 
require("menu.php");
?>
<script>
function show1(){
	document.getElementById("cashond").style.display="block";
	document.getElementById("payonline").style.display="none";
	document.getElementById("bkash").style.display="none";
	document.getElementById("mobilepayment").style.display="none";
	
}
function show2(){
	//alert("s2");
	document.getElementById("cashond").style.display="none";
	document.getElementById("payonline").style.display="none";
	document.getElementById("bkash").style.display="none";
	document.getElementById("mobilepayment").style.display="block";
	
}
function show3(){
	//alert("s2");
	document.getElementById("cashond").style.display="none";
	document.getElementById("payonline").style.display="block";
	document.getElementById("bkash").style.display="none";
	document.getElementById("mobilepayment").style.display="none";
	
}
function show4(){
	//alert("s2");
	document.getElementById("cashond").style.display="none";
	document.getElementById("payonline").style.display="none";
	document.getElementById("bkash").style.display="block";
	document.getElementById("mobilepayment").style.display="none";
	
}



</script>


	<body>
		<from>
		<b>1.YOUR EMAIL</b>
		<br/>
		<br/>
		<hr/>
		<b>2.YOUR ADDRESS</b>
			<div align="center">
			<input type="submit" value="CHANGED ADDRESS" onclick="window.location.href='check_place_order.php'" style="color:white;background-color:green;" >
			</div>
		<hr/>
		<b>3.ORDER SUMMARY</b>
			<div align="center">
			<input type="submit" value="CHANGED DELEVERY" onclick="window.location.href='index.php'" style="color:white;background-color:green;" >
			</div>
			<br/>
		<hr/>
		<b>4.PAYMENT METHOD:</b>
		<br/>
		<br/>
		<br/>
		<style>

			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 200px;
				background-color: #f1f1f1;
				overflow: auto;
			}

			li a {
				display: block;
				color: #000;
				padding: 8px 16px;
				text-decoration: none;
			}

			li a.active {
				background-color: #4CAF50;
				color: white;
			}

			li a:hover:not(.active) {
				background-color: #555;
				color: white;
			}
			</style>
			<body>

			<ul>
			  <li><a class="active" onclick="show1()" href="#Cash"><b>Cash On Delivery</b></a></li>
			  <li><a onclick="show2()"><b>Mobile Payment</b></a></li>
			  <li><a onclick="show3()"><b>Debit and credit Card</b></a></li>
			  <li><a onclick="show4()"><b>Bkash</b></a></li>
			</ul>

			<div id="cashond" style="margin-left:20%;display:block;">
			  <h2>Cash On Delivery</h2>
			  <h4>Pay cash at your doorstep at the time of the order delivery. We only accept Bangladeshi Taka.</h4>
			  <b>Important:</b>
			  <ol>
				  <li>Please have the exact amount available as your delivery may not be carring sufficient change.</li>
				  <li>If you have multiple items in an order, you might not recieve every item at the same time.</li>
				  <li>Don't worry, all your items will arrive shortly.</li>
			  </ol>
			  <table align="center" border="2" cellspacing="0"  cellpadding="10">
				<tr>
					<td><b>TOTAL</b></td>
				</tr>
				<tr>
					<td>4040 TK
					</td>
				</tr>
			  </table>
			</div>
			<div id="mobilepayment" style="margin-left:20%;display:none">
		  <h2>Pay Online using your Mobile payment account</h2>
		  <b>Pay online uning your Bkash,DBBL,M-cash, or other mobile account.</b>
		  <h3>To complete payment:</h3>
		  <ol>
			  <li>Click Confirm Order below. </li>
			  <li>Select your Mobile payment provider.</li>
			  <li>Fill in your details and click Pay Now.</li>
		  </ol>
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
		<div id="payonline" style="margin-left:20%;display:none;">
		  <h2>Pay Online by Card</h2>
		  Pay online uning your <b>VISA, Mastercard,American Express or DBBL Nexus</b> account or net banking.
		  <h3>To complete payment:</h3>
		  <ol>
			  <li>Please ensure your card is active and on hand to fill in your details. </li>
			  <li>Click Confirmed Order below to complete payment and check-out.</li>
		  </ol>
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
		
		<div id="bkash" style="margin-left:20%;display:none">
		  <h2>Pay using your Bkash account</h2>
		  <b>Important:</b>
		  <p>You will not be able to confirm your order until you receive your bkash payment.
		  <br/>If you have multiple items in an order, you might not recieve every item at the same time.
		  <br/>Don't worry, all your items will arrive shortly.<br/></p>
		  <b>To pay through bKash follow thes simple steps:</b>
		  <ol>
			  <li><b>Step-1: </b>Dial *247# to get your bKash menu</li>
			  <li><b>Step-2: </b>Press '3' for "Payments"</li>
			  <li><b>Step-3: </b>Enter the FNF Merchant Number -<b>01776038047</b></li>
			  <li><b>Step-4: </b>Enter Amount: Total order amount</li>
			  <li><b>Step-5: </b>Enter Order no. as reference.</li>
			  <li><b>Step-6: </b>Enter '1' for the bKash Counter No.</li>
			  <li><b>Step-7: </b>Veryfy your Payment by entering your PIN.</li>
		  </ol>
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