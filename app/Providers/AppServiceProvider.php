<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Livewire\CountdownTimer;


class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('countdown-timer', CountdownTimer::class);
       // Livewire::component('countdown-timer', \App\Livewire\CountdownTimer::class);

    }
}

