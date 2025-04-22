<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

    
<body>
    <div class="converter">
        <h2>Measurement Converter</h2>
        <form method="post">
            
            <input type="number" step="any" name="value" placeholder="Enter Value" required>
            <select name="type">
                <option value="choose">Choose Conversion:</option>
                <optgroup label="Temperature">
                    <option value="CtoF">Celsius → Fahrenheit</option>
                    <option value="CtoK">Celsius → Kelvin</option>
                </optgroup>

                <optgroup label="Speed">
                    <option value="KMHtoMS">km/h → m/s</option>
                    <option value="KMHtoKNOTS">km/h → knots</option>
                </optgroup>

                <optgroup label="Mass">
                    <option value="KGtoGram">kg → grams</option>
                    <option value="GramtoKg">grams → kg</option>
                </optgroup>
            </select>

            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["value"];
            $type = $_POST["type"];
            $result = "";

            switch ($type) {
                case "CtoF":
                    $result = ($value * 9/5) + 32 . " °F";
                    break;
                case "CtoK":
                    $result = $value + 273.15 . " K";
                    break;
                case "KMHtoMS":
                    $result = $value * (1000/3600) . " m/s";
                    break;
                case "KMHtoKNOTS":
                    $result = $value * 0.539957 . " knots";
                    break;
                case "KGtoGram":
                    $result = $value * 1000 . " g";
                    break;
                case "GramtoKg":
                    $result = $value / 1000 . " kg";
                    break;
            }

            echo "<div class='result'><strong>Result:</strong> $result</div>";
        }
        ?>
    </div>
</body>


</html>