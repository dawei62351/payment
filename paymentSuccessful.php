<!DOCTYPE HTML>
<html>
    <head>
        <title>Info</title>
    </head>
    <body>
        <?php  
            global $sqlStatement;
            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Phone = $_POST['phone'];
            $Address = $_POST['address'];
            $CardNumber = $_POST['cardNumber'];
            $ExpirationDate = $_POST['expirationDate'];
            $CVS = $_POST['cvs'];

            include_once('dbinc.php');
            $conn = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
            if ($conn->connect_error) {
                print "console.log(\"There was a problem connecting to the database.\");<BR />";
                print $conn->connect_errno.": {$conn->connect_error}";
            } else {
                print "console.log(\"Database connection established.\");<BR />";
                $conn = $sqlStatement->prepare("INSERT INTO paymentInfo (Name, Email, Phone, Address, CardNumber, ExpirationDate, CVS);
                VALUES (?,?,?,?,?,?,?);");
                $conn->bind_param("ssisiii",$Name,$Email,$Phone,$Address,$CardNumber,$ExpirationDate,$CVS);
                $conn->execute();
                $conn->bind_result($result);
                if ($result!==false) {
                  Print "Your information have been submitted. We will process your order as soon as possible. Thank you for shopping on our website";
                } else {
                    print $conn->error;
                }
                $conn->close();
            }
        ?>
    </body>
</html>