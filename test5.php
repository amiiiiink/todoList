<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 36px;
            color: #3498db;
            margin-bottom: 20px;
        }

        #countdown {
            font-size: 60px;
            font-weight: bold;
            color: #333;
            padding: 10px 0;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #f0f0f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #countdown::before {
            content: "Time Left: ";
            font-size: 24px;
            color: #777;
        }

        #message {
            font-size: 24px;
            color: #e74c3c;
            margin-top: 20px;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Countdown Timer</h1>
    <div id="countdown">05:00</div>
    <div id="message"></div>
</div>

<script>
    $(document).ready(function() {
        // Set the initial time (5 minutes)
        let timeLeft = 5 * 60; // 5 minutes in seconds

        // Function to update the countdown display
        function updateCountdown() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            const formattedTime = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
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
                $("#message").text("Countdown timer has reached zero!");
            }
        }, 1000); // Update every second
    });
</script>
</body>
</html>
