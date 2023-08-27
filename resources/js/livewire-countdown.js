// resources/js/livewire-countdown.js

document.addEventListener('livewire:load', function () {
    Livewire.hook('message.processed', (message, component) => {
        if (message.updateQueue.hasOwnProperty('countdown')) {
            setInterval(() => {
                component.call('decrementCountdown');
            }, 1000); // Decrement every second
        }
    });
});
