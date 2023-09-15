<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #countdown {
            font-size: 36px;
        }
    </style>
</head>
<body>
<h1>Countdown Timer</h1>
<div id="countdown">05:00</div>

<script>
    $(document).ready(function() {
        // Set the initial time (5 minutes)
        let timeLeft = 1 * 60; // 5 minutes in seconds

        // Function to update the countdown display
        function updateCountdown() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            // const formattedTime = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            const formattedTime = `${String(minutes)}:${String(seconds)}`;
            $("#countdown").text(formattedTime);
        }

        // Initial display
        updateCountdown();

        // Countdown interval
        const countdownInterval = setInterval(function() {
            if (timeLeft > 0) {
                timeLeft--;
                updateCountdown();
            } else {
                clearInterval(countdownInterval);
                $("#countdown").text("00:00");
                alert("Countdown timer has reached zero!");
            }
        }, 1000); // Update every second
    });
</script>
</body>
</html>
