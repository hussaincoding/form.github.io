<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <div class="container">
            <label for="">Text</label>
            <input type="text" name="userName" placeholder="Name" required>
            <label for="">Email</label>
            <input type="Email" name="userEmail" placeholder="Email" required>
            <label for="Password"></label>
            <input type="password" name="user_Password" placeholder="password" id="" required>
            <input type="submit" name="">
        </div>
    </form>
    <script>
        // Disable right-click context menu
document.addEventListener('contextmenu', event => event.preventDefault());

// Disable text selection
document.addEventListener('selectstart', event => event.preventDefault());
    </script>
</body>
</html>