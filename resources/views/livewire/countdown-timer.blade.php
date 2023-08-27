<!-- resources/views/livewire/countdown-timer.blade.php -->

<div>
    <h1>Countdown Timer</h1>
    <p>Time remaining:</p>
    <div id="countdown">
        <span id="days">{{ $countdown['days'] }} days</span>
        <span id="hours">{{ $countdown['hours'] }} hours</span>
        <span id="minutes">{{ $countdown['minutes'] }} minutes</span>
        <span id="seconds">{{ $countdown['seconds'] }} seconds</span>
    </div>
</div>

<script>
    function updateCountdown() {
        const daysElement = document.getElementById('days');
        const hoursElement = document.getElementById('hours');
        const minutesElement = document.getElementById('minutes');
        const secondsElement = document.getElementById('seconds');

        const countdownData = @json($countdown);

        const interval = setInterval(() => {
            countdownData.seconds -= 1;
            if (countdownData.seconds < 0) {
                countdownData.seconds = 59;
                countdownData.minutes -= 1;
                if (countdownData.minutes < 0) {
                    countdownData.minutes = 59;
                    countdownData.hours -= 1;
                    if (countdownData.hours < 0) {
                        countdownData.hours = 23;
                        countdownData.days -= 1;
                        if (countdownData.days < 0) {
                            clearInterval(interval);
                            // Countdown has reached 0, update UI accordingly
                        }
                    }
                }
            }

            daysElement.textContent = countdownData.days + ' days';
            hoursElement.textContent = countdownData.hours + ' hours';
            minutesElement.textContent = countdownData.minutes + ' minutes';
            secondsElement.textContent = countdownData.seconds + ' seconds';
        }, 1000);
    }

    updateCountdown(); // Start the countdown update
</script>
