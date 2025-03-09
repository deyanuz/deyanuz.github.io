<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Edit Skill</title>
</head>
<body>
    <div class="bg-model">
        <div class="model-content">
            <h3>Add Work</h3>
            <form action="addworks.php" method="POST">
                <input type="text" name="workname" class="skill-edit" placeholder="Title" required>
                <input type="text" name="image" class="skill-edit" placeholder="Image" required>
                <input type="text" name="link" class="skill-edit" placeholder="Link" required>
                <input type="submit" name="submitinsertworks" class="update" value="UPDATE">
            </form>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submitinsertworks'])) {
    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert new skills
        if (isset($_POST['workname']) && isset($_POST['image']) && isset($_POST['link'])) {
            $workname= $_POST['workname'];
            $image = $_POST['image'];
            $link = $_POST['link'];

            // Iterate over each skill and insert into database

                // Prepare SQL statement
                $sql = "INSERT INTO work (`image`, `link`,title) VALUES (:image, :link, :title)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'title' => $workname,
                    'image' => $image,
                    'link' => $link
                ]);

            if ($stmt->rowCount() > 0) {
                header("Location: admin.php?insert=successful");
                exit(); // Ensure script execution stops after redirect
            } else {
                echo "<h5>Update failed.</h5>";
            }
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
