<?php 

namespace App\Services;

use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\SignupForm;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AdminDashboardClass
{
    public function getSignupCountDayWise(): array
    {
        // Get the last 7 days as date strings
        $dates = collect(range(6, 0))->map(fn($i) => Carbon::now()->subDays($i)->toDateString());

        // Fetch signup counts grouped by date
        $signupsByDay = SignupForm::where('delete_status', 1)
            ->whereBetween('created_at', [Carbon::now()->subDays(6)->startOfDay(), Carbon::now()->endOfDay()])
            ->groupBy(DB::raw("DATE(created_at)"))
            ->orderBy(DB::raw("DATE(created_at)"), 'ASC')
            ->pluck(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"))
            ->toArray();

        // Map results to ensure missing days have a count of 0
        $signupCounts = $dates->map(fn($date) => $signupsByDay[$date] ?? 0)->toArray();

        // Convert dates to short day names (e.g., Mon, Tue)
        $days = $dates->map(fn($date) => Carbon::parse($date)->format('D'))->toArray();

        return ['days' => $days, 'signupCounts' => $signupCounts];
    }







//     public function getSignupCountMonthWise()
// {
//     $months = collect(range(1, 12))->map(function ($month) {
//         return Carbon::create()->month($month)->format('M'); // Jan, Feb, Mar, ...
//     });

//     $signupCounts = collect(range(1, 12))->map(function ($month) {
//         return SignupForm::whereYear('created_at', now()->year)
//                          ->whereMonth('created_at', $month)
//                          ->count();
//     });

//     return [
//         'months' => $months,
//         'signupCounts' => $signupCounts
//     ];
// }


public function getSignupCountMonthWise()
{
    $months = collect(range(1, 12))->map(fn ($month) => Carbon::create()->month($month)->format('M'))->toArray();

    $signupCounts = collect(range(1, 12))->map(fn ($month) => 
        SignupForm::whereYear('created_at', now()->year)
                  ->whereMonth('created_at', $month)
                  ->count()
    )->toArray();

    return [
        'months' => $months,
        'signupCounts' => $signupCounts
    ];
}

public function allModelChartData()
{
    $months = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    $signupCounts = SignupForm::where('delete_status', 1)
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    $agentRegisterCounts = Partner::where('user_status', 1)
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    $contactUsCounts = ContactUs::where('delete_status', 1)
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    $careerCounts = Career::where('delete_status', 1)
        ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    // Fill missing months with 0
    $signupCounts = array_replace(array_fill(1, 12, 0), $signupCounts);
    $agentRegisterCounts = array_replace(array_fill(1, 12, 0), $agentRegisterCounts);
    $contactUsCounts = array_replace(array_fill(1, 12, 0), $contactUsCounts);
    $careerCounts = array_replace(array_fill(1, 12, 0), $careerCounts);

    $data = [
        'months' => $months,
        'signupCounts' => array_values($signupCounts),
        'agentRegisterCounts' => array_values($agentRegisterCounts),
        'contactUsCounts' => array_values($contactUsCounts),
        'careerCounts' => array_values($careerCounts),
    ];

    return $data;
}



}











?>