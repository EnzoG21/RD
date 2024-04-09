<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Kit;
use App\Models\Jersey;

class KitAndJerseyData
{
    public function handle($request, Closure $next)
    {
        $kits = Kit::all();
        $jerseys = Jersey::all();

        view()->share('kits', $kits);
        view()->share('jerseys', $jerseys);

        return $next($request);
    }
}
