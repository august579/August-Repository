jQuery(document).ready(function($) {
    var timerElement = $('#custom-timer');
    var time = timerElement.data('time').split(':');
    var seconds = (+time[0]) * 60 * 60 + (+time[1]) * 60 + (+time[2]);

    setInterval(function() {
        seconds++;
        var hours = Math.floor(seconds / 3600);
        var minutes = Math.floor((seconds - (hours * 3600)) / 60);
        var seconds = seconds - (hours * 3600) - (minutes * 60);

        if (hours   < 10) {hours   = "0"+hours;}
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}

        timerElement.text(hours + ':' + minutes + ':' + seconds);
    }, 1000);
});