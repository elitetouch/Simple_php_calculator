<?php
$answer = '';
$error = '';
$number1 = '';
$number2 = '';
$operator = '';

if (isset($_POST['calculate'])) {
    $number1 = $_POST['number_1'];
    $number2 = $_POST['number_2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case "+":
            $answer = $number1 + $number2;
            break;
        case "-":
            $answer = $number1 - $number2;
            break;
        case "/":
            $answer = $number1 / $number2;
            break;
        case "*":
            if ($number2 == 0) {
                $answer = $number1 * $number2;
            } else {
                $error = 'number can not be zero for division';
            }

            break;
        default:
            $answer = 0;
    }
}

?>

<!DOCTYPE html>
<html>
<style>
    .outter {
        margin: 0 auto;
        width: 30%;
        border: 2px solid green;
        padding: 10px;
        display: inline-block;
        position: absolute;
    }

    .outter2 {
        margin: 0 auto;
        width: 50%;
        border: 2px solid red;
        padding: 10px;
        display: inline-block;
        position: absolute;
    }

    input[type=text],
    input[type=number],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>
    <div class="outter">
        <h3>SIMPLE PHP CALCULATOR</h3>

        <div>
            <form action="" method="POST">
                <label for="number_1">Number 1</label>
                <input type="number" id="number_1" name="number_1" placeholder="Enter a first number" required>

                <label for="operator">Select Operator</label>
                <select id="operator" name="operator" required>
                    <option value="">Select An Operator</option>
                    <option value="/">Divide</option>
                    <option value="*">Multiply</option>
                    <option value="+">Add</option>
                    <option value="-">Substract</option>
                </select>

                <label for="number_2">Number 1</label>
                <input type="number" id="number_2" name="number_2" placeholder="Enter a second number " required><br>
                <p style="color: red;"><b><?php echo $number1 . '&nbsp; ' .$operator. '&nbsp;'. $number2; ?></b></p>
                <br>
                <p><b>ANSWER : <?php echo $answer; ?></b></p>
                <p style="color: red;"><?php echo $error; ?></p>

                <input type="submit" name="calculate" value="CALCULATE">
            </form>
        </div>
    </div>

</body>

</html>
