<?php
include 'db.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Insert the news into the database
    $stmt = $conn->prepare("INSERT INTO news_articles (title, content, author) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $author);

    if ($stmt->execute()) {
        echo "News article added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News</title>
</head>
<body>
    <h2>Add News Article</h2>
    <form action="add_news.php" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="content">Content:</label><br>
        <textarea name="content" id="content" rows="5" required></textarea><br><br>

        <label for="author">Author:</label><br>
        <input type="text" name="author" id="author" required><br><br>

        <button type="submit">Add News</button>
    </form>
</body>
</html>
