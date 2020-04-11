<?php

namespace App\Http\Controllers\App\Elearning;

class PremiumRequiredController
{
    public function __invoke()
    {
        return view('app.elearning.premium_required.index');
    }
}
