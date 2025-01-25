<!-- resources/views/errors/generic.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Something went wrong!</h1>
    <p>We encountered an issue while processing your request. Please try again later.</p>
    <p><strong>Error Message:</strong> {{ $exception->getMessage() }}</p>  <!-- Display error message -->
    <p><strong>Details:</strong> {{ $exception->getTraceAsString() }}</p>  <!-- Show stack trace (if needed) -->
    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
