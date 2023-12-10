<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Feedback Form</title>
</head>
<body>

    <h1>Simple Feedback Form</h1>

    <?php include 'process_form.php'; ?>

    <form method="post" action="">
        <label for="feedback">Enter your feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br>
        <button type="submit">Submit Feedback</button>
    </form>

</body>
</html>
