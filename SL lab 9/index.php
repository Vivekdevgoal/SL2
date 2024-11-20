<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
    <script type="text/javascript">
        function convertToBinary() {
            var decimalNumber = document.getElementById("decimal").value;
            if (decimalNumber === "" || isNaN(decimalNumber)) {
                alert("Please enter a valid number");
                return;
            }
            var binaryNumber = parseInt(decimalNumber).toString(2);
            document.getElementById("result").innerText = "Binary Equivalent: " + binaryNumber;
        }
    </script>
</head>
<body>
    <h2>Decimal to Binary Converter</h2>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the decimal number from the form
        $decimal = $_POST['decimal'];

        // Check if the input is a valid number
        if (is_numeric($decimal)) {
            echo "<p>Form submitted successfully!</p>";
            echo "<p>Decimal number submitted: $decimal</p>";
        } else {
            echo "<p>Please enter a valid decimal number.</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="decimal">Enter a decimal number:</label>
        <input type="text" id="decimal" name="decimal" required>
        <input type="submit" value="Submit">
    </form>

    <button onclick="convertToBinary()">Convert to Binary (Client-side)</button>

    <p id="result"></p>
</body>
</html>