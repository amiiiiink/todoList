<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <title>TODO LIST JAVASCRIPT</title>
</head>
<body>

<div class="container">
    <div class="todo-app">
        <h2>TODO-LIST <img src="Images/icon.png"></h2>
        <div class="row">
            <input type="text" id="input-box" placeholder="Add your text">
            <button onclick="addTask()">Add</button>
        </div>
        <ul id="list-container"></ul>
    </div>
</div>


<div class="custom-alert" id="customAlert">
    <div class="alert-content">
        <h2>Please write Something</h2>
        <p>The Input Could not Be Empty</p>
        <button id="closeAlertBtn">Close</button>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>