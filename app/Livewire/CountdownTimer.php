<?php

// app/Http/Livewire/CountdownTimer.php

namespace App\Livewire;

use Livewire\Component;

class CountdownTimer extends Component
{
    public $targetDate; // Target date for countdown
    public $countdown;

    public function mount()
    {
        // Set the target date (December 1, 2023)
        $this->targetDate = strtotime('2023-12-01');
        $this->updateCountdown();
    }

    public function updateCountdown()

   

    {
        $now = time();
        $diff = max(0, $this->targetDate - $now); // Ensure countdown doesn't go negative

        $this->countdown = [
            'days' => floor($diff / (60 * 60 * 24)),
            'hours' => floor(($diff % (60 * 60 * 24)) / (60 * 60)),
            'minutes' => floor(($diff % (60 * 60)) / 60),
            'seconds' => $diff % 60,
        ];
      //  $this->emit('countdownUpdated', $this->countdown); // Emit the updated countdown
    }

    public function render()
    {
        return view('livewire.countdown-timer');
    }
}

