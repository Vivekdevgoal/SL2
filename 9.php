<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>

<body>
    <h2>Decimal to Binary Converter</h2>
    <form id="conversionForm">
        <label for="decimalNumber">Enter Decimal Number:</label>
        <input type="number" id="decimalNumber" name="decimalNumber" required>
        <br><br>
        <button type="button" onclick="convertToBinary()">Convert to Binary</button>
    </form>
    <br>
    <div id="result"></div>
    <script>
        function convertToBinary() {
            const decimalNumber = document.getElementById("decimalNumber").value;
            if (decimalNumber === "") {
                document.getElementById("result").innerText = "Please enter a decimal number.";
                return;
            }
            const binaryResult = parseInt(decimalNumber, 10).toString(2);
            document.getElementById("result").innerText = `Binary Equivalent:
${binaryResult}`;
        }
    </script>
</body>

</html>