<?php
// ini_set('session.gc_maxlifetime',3600*24);
// ini_set('session.gc_maxlifetime',PHP_INT_MAX);
// session_name('paymentInfo');
// session_start();
// $_SESSION['name']=$Name;
// $_SESSION['email']=$Email;
// $_SESSION['phone']=$Phone;
// $_SESSION['address']=$Address;
// $_SESSION['cardNumber']=$CardNumber;
// $_SESSION['expirationDate']=$ExpirationDate;
// $_SESSION['cvs']=$CVS;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Payment Form</title>
        <LINK rel="stylesheet" type="text/css" href="css/payment.css" />
    </head>
    <body>
	<?php
	
	?>
    <DIV class="header">
    <h1>Start you paying now!</h1>
    </DIV>
    <BR />
    <BR />
    <BR />
    <BR />

    <DIV class="paymentForm">
        <form action="paymentSuccessful.php" method="post">
            Name: <input type="text" placeholder="First Last" pattern="^([a-zA-Z]{2,}\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)" name="name" required><br><!-- name regular expression from https://stackoverflow.com/questions/2385701/regular-expression-for-first-and-last-name -->
            E-mail: <input type="email" placeholder="username@email.com" pattern="/^\w+@[A-z0-9]+(\.[A-z]{2.5}){1,2}$/" name="email" required><br>
            Phone: <input type="text" maxlength="11" name="phone" required><br>
            Address: <input type="text" name="address" required><br>
            Card number: <input type="text" maxlength="19" name="cardNumber" required><br>
            Expiration date: <input type="text" maxlength="4" name="expirationDate" required><br>
            CVS: <input type="text" maxlength="4" name="cvs" required><br>
            <input type="submit" value="Pay Now">
        </form>
    </DIV>
    <BR />
    <BR />
    <DIV class="footer">
	<h2>Thank you for shopping on our site.</h2>
    </DIv>
    
    </body>
</html>