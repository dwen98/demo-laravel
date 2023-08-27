<!-- resources/views/livewire/countdown-timer.blade.php -->

<div>
    <h1>Countdown Timer</h1>
    <p>Time remaining:</p>
    <div>
        <span>{{ $countdown['days'] }} days</span>
        <span>{{ $countdown['hours'] }} hours</span>
        <span>{{ $countdown['minutes'] }} minutes</span>
        <span>{{ $countdown['seconds'] }} seconds</span>
    </div>
</div>
