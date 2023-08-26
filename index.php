<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #6C63FF, #C675FF);
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            transition: background 0.3s ease;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, cursor 0.3s ease;
            margin: 20px;
            text-align: center;
            cursor: pointer;
        }
        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="box">
                <h3>Todo App</h3>
                <p class="mt-5">
                    <a class="btn btn-sm btn-outline-primary" href="todoList/index.php">CLICK HERE TO USE</a>
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <h3>Quiz App</h3>
                <p class="mt-5">
                    <a class="btn btn-sm btn-outline-primary" href="quizApp/index.php">CLICK HERE TO USE</a>
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <h3>Box 3</h3>
                <p>Yet another beautiful box with hover animation.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <h3>Box 4</h3>
                <p>The final beautiful box with hover animation.</p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".box").hover(function() {
            $("body").css("background", "linear-gradient(to right, #81ecec, #0984e3)");
        }, function() {
            $("body").css("background", "linear-gradient(to right, #6C63FF, #C675FF)");
        });
    });
</script>

</body>
</html>
