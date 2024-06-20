<!DOCTYPE html>
<html>
<head>
    <title>Income Tax and Net Salary Calculator</title>
</head>
<body>
    <h1>Finance Bill Tax and Net Salary Calculator</h1>
    <form method="POST" action="tax.php">
        <label for="grossSalary">Gross Salary:</label>
        <input type="number" id="grossSalary" name="grossSalary" required><br><br>
        <label for="maritalStatus">Marital Status:</label><br>
        <input type="radio" id="single" name="maritalStatus" value="single" required>
        <label for="single">Single</label><br>
        <input type="radio" id="married" name="maritalStatus" value="married" required>
        <label for="married">Married</label><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grossSalary = $_POST['grossSalary'];
        $maritalStatus = $_POST['maritalStatus'];

        function computeTaxAndNetSalary($grossSalary, $maritalStatus) {
            // Define tax relief amounts
            $taxReliefSingle = 650;
            $taxReliefMarried = 1100;

            // Determine tax relief based on marital status
            $taxRelief = $maritalStatus === "married" ? $taxReliefMarried : $taxReliefSingle;

            // Calculate taxable income
            $taxableIncome = $grossSalary - $taxRelief;

            // Determine tax rate
            if ($taxableIncome < 5000) {
                $taxRate = 0;
            } elseif ($taxableIncome < 36699) {
                $taxRate = 0.06;
            } elseif ($taxableIncome < 37000) {
                $taxRate = 0.09;
            } else {
                $taxRate = 0.16;
            }

            // Compute tax charge
            $taxCharge = $taxableIncome * $taxRate;

            // Compute net salary
            $netSalary = $grossSalary - $taxCharge;

            return [
                'taxCharge' => $taxCharge,
                'netSalary' => $netSalary,
            ];
        }

        $result = computeTaxAndNetSalary($grossSalary, $maritalStatus);
        echo "<p>Tax Charge: " . $result['taxCharge'] . " Kenya Shillings</p>";
        echo "<p>Net Salary: " . $result['netSalary'] . " Kenya Shillings</p>";
    }
    ?>
</body>
</html>
