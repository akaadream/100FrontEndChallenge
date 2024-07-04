<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ChallengesController extends Controller
{
    public function challenge(int $id): Application|View|Factory|RedirectResponse
    {
        if (!view()->exists('challenges.challenge' . $id))
        {
            return back();
        }

        return view('challenges.challenge' . $id, compact('id'));
    }
}
