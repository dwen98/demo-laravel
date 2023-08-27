<?php

// app/Livewire/CountdownTimer.php

namespace App\Livewire;

use Livewire\Component;

class CountdownTimer extends Component
{
    public $targetDate;
    public $now;

    public function mount()
    {
        $this->targetDate = strtotime('2023-12-01');
        $this->now = time();
    }

    public function updateCountdown()
    {
        $diff = max(0, $this->targetDate - $this->now);

        return [
            'days' => floor($diff / (60 * 60 * 24)),
            'hours' => floor(($diff % (60 * 60 * 24)) / (60 * 60)),
            'minutes' => floor(($diff % (60 * 60)) / 60),
            'seconds' => $diff % 60,
        ];
    }

    public function render()
    {
        return view('livewire.countdown-timer', [
            'countdown' => $this->updateCountdown(),
        ]);
    }
}
