<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt Upload Form</title>
    <link rel="stylesheet" href="bai2.css">
</head>
<body>
    <div class="container">
        <h2>Payment Receipt Upload Form</h2>
        <form name="paymentForm" action="process_payment_form.php" method="post" onsubmit="return validatePaymentForm()">
            <div class="form-group">
                <label for="firstName">First Name:
                    <input type="text" id="firstName" name="firstName">
                </label>
                <label for="lastName">Last Name:
                    <input type="text" id="lastName" name="lastName">
                </label>
            </div>
            <div class="form-group">
                <label for="email">Email:
                    <input type="email" id="email" name="email">
                </label>
                <label for="invoiceId">Invoice ID:
                    <input type="text" id="invoiceId" name="invoiceId">
                </label>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="15K"> 15K Category</label>
                <label><input type="checkbox" name="payFor[]" value="35K"> 35K Category</label>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="55K"> 55K Category</label>
                <label><input type="checkbox" name="payFor[]" value="75K"> 75K Category</label>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="116K"> 116K Category</label>
                <label><input type="checkbox" name="payFor[]" value="Shuttle One Way"> Shuttle One Way</label>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="Shuttle Two Ways"> Shuttle Two Ways</label>
                <label><input type="checkbox" name="payFor[]" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</label>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox" name="payFor[]" value="Training Cap Merchandise"> Training Cap Merchandise</label>
                <label><input type="checkbox" name="payFor[]" value="Buf Merchandise"> Buf Merchandise</label>
            </div>
            <div class="submit-button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <script src="bai2.js"></script>
</body>
</html>
