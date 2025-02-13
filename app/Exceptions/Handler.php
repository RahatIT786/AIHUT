<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;
use ErrorException;
use ReflectionException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Contracts\Container\BindingResolutionException;

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

        if ($exception instanceof QueryException) {
            // Handle database errors specifically
            $msg=$exception->getMessage();
            Log::error('Database error: ' . $msg);
            return response()->view('errors.general',['exception'=>$msg]);
        }

        if ($exception instanceof HttpException) {
            // Handle HTTP exceptions (like 404, 500, etc.)
            $msg=$exception->getMessage();
            Log::error('HTTP error: ' . $msg);
            return response()->view('errors.general',['exception'=>$msg]);
        }
        if ($exception instanceof ErrorException) {
            $msg=$exception->getMessage();
            // Log the error, which may include undefined variable errors
            Log::error('PHP error occurred: ' . $exception->getMessage());
            return response()->view('errors.general',['exception'=>$msg]);
        }

        // Render custom 500 error page for all errors
        if ($exception instanceof Exception) {
            $msg=$exception->getMessage();
            return response()->view('errors.general',['exception'=>$msg]);
        }

        if ($exception instanceof ReflectionException || $exception instanceof BindingResolutionException) {
            $msg=$exception->getMessage();
            Log::error('Class not found: ' . $exception->getMessage());
            return response()->view('errors.general',['exception'=>$msg]);
        }

        // Handle 404 errors (not found)
        if ($exception instanceof NotFoundHttpException) {
            $msg=$exception->getMessage();
            Log::error('Class not found: ' . $exception->getMessage());
            return response()->view('errors.general',['exception'=>$msg]);
        }

        



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