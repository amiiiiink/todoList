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
            left: 0;
            opacity: 0;
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

        // Function to show the current artwork with fade-in animation
        function showArtwork() {
            $(".artwork").css({ opacity: 0 });
            $(".artwork:eq(" + currentArtwork + ")").animate({ opacity: 1 }, 800);
        }

        // Show the initial artwork
        showArtwork();

        // When the "Next" button is clicked
        $("#nextButton").click(function() {
            // Fade out the current artwork
            $(".artwork:eq(" + currentArtwork + ")").animate({ opacity: 0 }, 800, function() {
                $(this).hide();
            });

            // Increment the artwork index or loop back to the first artwork
            currentArtwork = (currentArtwork + 1) % $(".artwork").length;

            // Show the next artwork with fade-in animation
            $(".artwork:eq(" + currentArtwork + ")").css({ opacity: 0 }).show().animate({ opacity: 1 }, 800);
        });

        // When the "Previous" button is clicked
        $("#prevButton").click(function() {
            // Fade out the current artwork
            $(".artwork:eq(" + currentArtwork + ")").animate({ opacity: 0 }, 800, function() {
                $(this).hide();
            });

            // Decrement the artwork index or loop back to the last artwork
            currentArtwork = (currentArtwork - 1 + $(".artwork").length) % $(".artwork").length;

            // Show the previous artwork with fade-in animation
            $(".artwork:eq(" + currentArtwork + ")").css({ opacity: 0 }).show().animate({ opacity: 1 }, 800);
        });
    });
</script>
</body>
</html>
