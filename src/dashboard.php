<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktiver/Deaktiver</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="phone">
        <div class="screen">
            <h1>Easy Cart</h1>
            <link rel="stylesheet" href="style_1.css">
            <button id="toggleButton" class="button">Aktiver/Deaktiver</button>
        </div>
    </div>
    <script>
        var button = document.getElementById("toggleButton");
        button.addEventListener("click", function() {
            if (button.disabled) {
                // Redirect to activation page
                window.location.href = "activation.html";
            } else {
                if (button.classList.contains("disabled")) {
                    button.classList.remove("disabled");
                } else {
                    button.classList.add("disabled");
                }
            }
        });
    </script>

</body>

</html>