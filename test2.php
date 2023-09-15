<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Art Gallery</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Style for the art gallery div */
        #artGallery {
            width: 600px;
            height: 400px;
            background-color: #f0f0f0;
            position: relative;
            overflow: hidden;
        }

        .artwork {
            width: 100%;
            height: 100%;
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #toggleButtons {
            margin-top: 20px;
        }

        .toggleButton {
            margin-right: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <h1>Welcome to the Virtual Art Gallery</h1>
    <div id="toggleButtons">
        <button class="toggleButton" id="prevButton">Previous Artwork</button>
        <button class="toggleButton" id="nextButton">Next Artwork</button>
    </div>
</header>
<div id="artGallery">
    <div class="artwork" style="background-image: url('1.jpg');"></div>
    <div class="artwork" style="background-image: url('2.jpg');"></div>
    <div class="artwork" style="background-image: url('3.jpg');"></div>
</div>

<script>
    $(document).ready(function() {
        // Track the currently displayed artwork
        let currentArtwork = 0;

        // Function to show the current artwork
        function showArtwork() {
            $(".artwork").hide();
            $(".artwork:eq(" + currentArtwork + ")").show();
        }

        // Show the initial artwork
        showArtwork();

        // When the "Next" button is clicked
        $("#nextButton").click(function() {
            // Hide the current artwork with an animation
            $(".artwork:eq(" + currentArtwork + ")").animate({ left: "100%" }, 500, function() {
                $(this).hide();
            });

            // Increment the artwork index or loop back to the first artwork
            currentArtwork = (currentArtwork + 1) % $(".artwork").length;

            // Show the next artwork with an animation
            $(".artwork:eq(" + currentArtwork + ")").css("left", "-100%").show().animate({ left: "0" }, 500);
        });

        // When the "Previous" button is clicked
        $("#prevButton").click(function() {
            // Hide the current artwork with an animation
            $(".artwork:eq(" + currentArtwork + ")").animate({ left: "-100%" }, 500, function() {
                $(this).hide();
            });

            // Decrement the artwork index or loop back to the last artwork
            currentArtwork = (currentArtwork - 1 + $(".artwork").length) % $(".artwork").length;

            // Show the previous artwork with an animation
            $(".artwork:eq(" + currentArtwork + ")").css("left", "100%").show().animate({ left: "0" }, 500);
        });
    });
</script>
</body>
</html>
