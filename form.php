<!-- process_form.php -->
<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $feedback = $_POST['feedback'];
    
    // In a real application, you might save the feedback to a database or perform other actions.
    // For this example, we'll just print the feedback to the console.
    echo "<p>Thank you for your feedback: $feedback</p>";
}
?>
