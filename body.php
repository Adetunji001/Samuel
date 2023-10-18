function calculateBMI($weight, $height) {
    // Check if weight and height are greater than zero
    if ($weight > 0 && $height > 0) {
        // Calculate BMI
        $bmi = $weight / ($height * $height);
        
        // Round BMI to one decimal place
        $bmi = round($bmi, 1);
        
        return $bmi;
    } else {
        // Handle invalid input
        return "Invalid input. Please make sure weight and height are greater than zero.";
    }
}

// Example usage:
$weight = 70; // in kilograms
$height = 1.75; // in meters

$result = calculateBMI($weight, $height);
echo "Your BMI is: " . $result;
