<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Connverter</title>
    <link rel="stylesheet" href="style.css">
</head>

    
<body>
    <div class="converter">
        <h2>Measurement Converter</h2>
        <form method="post">
            <label for="value">Enter Value:</label>
            <input type="number" step="any" name="value" required>

            <label for="type">Choose Conversion:</label>
            <select name="type">
                <optgroup label="Temperature">
                    <option value="c_to_f">Celsius → Fahrenheit</option>
                    <option value="c_to_k">Celsius → Kelvin</option>
                </optgroup>

                <optgroup label="Speed">
                    <option value="kmh_to_ms">km/h → m/s</option>
                    <option value="kmh_to_knots">km/h → knots</option>
                </optgroup>

                <optgroup label="Mass">
                    <option value="kg_to_g">kg → grams</option>
                    <option value="g_to_kg">grams → kg</option>
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
                case "c_to_f":
                    $result = ($value * 9/5) + 32 . " °F";
                    break;
                case "c_to_k":
                    $result = $value + 273.15 . " K";
                    break;
                case "kmh_to_ms":
                    $result = $value * (1000/3600) . " m/s";
                    break;
                case "kmh_to_knots":
                    $result = $value * 0.539957 . " knots";
                    break;
                case "kg_to_g":
                    $result = $value * 1000 . " g";
                    break;
                case "g_to_kg":
                    $result = $value / 1000 . " kg";
                    break;
            }

            echo "<div class='result'><strong>Result:</strong> $result</div>";
        }
        ?>
    </div>
</body>


</html>