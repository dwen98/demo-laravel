<h1>Countdown page</h1>
@livewire('countdown-timer')
<script>
    Livewire.on('countdownUpdated', countdown => {
        // Update the countdown data in the browser
        // This will automatically update the displayed countdown
        // Livewire components on the page will be re-rendered
    });
</script>