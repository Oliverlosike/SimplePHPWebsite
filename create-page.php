<!DOCTYPE html>
<html>
<head>
    <title>Create New Page</title>
</head>
<body>
    <h1>Create New Page</h1>
    <form action="process-create-page.php" method="post">
        <label for="title">Page Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Page Content:</label>
        <textarea id="content" name="content" rows="6" required></textarea>
        <br>
        <input type="submit" value="Create Page">
    </form>
</body>
</html>