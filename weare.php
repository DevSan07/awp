<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Score Calculator</title>
    <link rel="stylesheet" href="weare.css">
</head>
<body>

    <center>
<img src="escore.jpg">
</center>

    <h2>Customer Score Calculator</h2>
    <form id="customerScoreForm">
        <label for="initialScore">Initial Score:</label>
        <input type="number" id="initialScore" min="0" max="100" name="initialScor" value="100" readonly required><br><br>
        
        <label for="numberOfReturns">Number of Returns:</label>
        <input type="number" id="numberOfReturns" name="numberOfReturns" required><br><br>
        
        <label for="returnFrequency">Return Frequency:</label>
        <input type="number" id="returnFrequency" name="returnFrequency" required><br><br>
        
        <label for="loyaltyPoints">Loyalty Points:</label>
        <input type="number" id="loyaltyPoints" name="loyaltyPoints" required><br><br>
        
        <label for="amountPoints">Amount Points:</label>
        <input type="number" id="amountPoints" name="amountPoints" required><br><br>
        
        <input type="button" value="Calculate Total Score" onclick="calculateTotalScore()">
    </form>

    <div id="totalScore"></div>

    <script>
        function calculateTotalScore() {
            var initialScore = parseInt(document.getElementById('initialScore').value);
            var numberOfReturns = parseInt(document.getElementById('numberOfReturns').value);
            var returnFrequency = parseInt(document.getElementById('returnFrequency').value);
            var loyaltyPoints = parseInt(document.getElementById('loyaltyPoints').value);
            var amountPoints = parseInt(document.getElementById('amountPoints').value);

            // Perform calculation
            var totalScore = initialScore - (numberOfReturns * returnFrequency) + 2 * (amountPoints + loyaltyPoints);

            // Ensure total score is within range 0 to 100
            totalScore = Math.max(0, Math.min(totalScore, 100));

            // Display the total score to the user
            document.getElementById('totalScore').innerHTML = "Your total score is: " + totalScore;
        }
    </script>
</body>
</html>
