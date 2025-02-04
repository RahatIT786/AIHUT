<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Report or log an exception.
     */
    public function report(Throwable $exception)
    {
        // Call the custom error handling function
        $this->handleException($exception);

        parent::report($exception); // Keep Laravel's default reporting
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        // Use the common function to log error before rendering
        $this->handleException($exception, $request);

        // Return a generic error page
        return response()->view('errors.general', ['exception' => $exception], 500);
    }

    /**
     * Common function to handle all exceptions.
     */
    private function handleException(Throwable $exception, $request = null)
    {
        $logData = [
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString(),
        ];

        if ($request) {
            $logData['url'] = $request->fullUrl();
            $logData['method'] = $request->method();
            $logData['input'] = $request->except(['password', 'password_confirmation']); // Exclude sensitive data
            $logData['user_id'] = optional($request->user())->id;
        }

        // Log the error
        Log::error('Exception Caught:', $logData);

        // Optionally, integrate with external tools like Sentry/Bugsnag here
        if (app()->bound('sentry') && $this->shouldReport($exception)) {
            app('sentry')->captureException($exception);
        }
    }
}



?>