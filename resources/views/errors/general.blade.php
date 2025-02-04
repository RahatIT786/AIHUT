<!-- resources/views/errors/generic.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error | Rahat Group</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 600px;
        }
        h1 {
            font-size: 2.5rem;
            color: #dc3545;
            margin-bottom: 20px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 10px;
            line-height: 1.6;
        }
        strong {
            color: #495057;
        }
        .error-details {
            background-color: #f1f3f5;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            margin-top: 20px;
            overflow-x: auto;
        }
        a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .error-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Something went wrong!</h1>
        <p>We encountered an issue while processing your request. Please try again later.</p>

        @if(isset($exception))
            <div class="error-details">
                <p><strong>Error Message:</strong> {{ $exception->getMessage() }}</p>
                <p><strong>Details:</strong></p>
                <pre>{{ $exception->getTraceAsString() }}</pre>
            </div>
        @else
            <div class="error-details">
                <p><strong>Error Message:</strong> An unexpected error occurred.</p>
            </div>
        @endif

        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</body>
</html>

