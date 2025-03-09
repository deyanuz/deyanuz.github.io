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
            <h3>Add Skill</h3>
            <form action="insertskill.php" method="POST">
                <input type="hidden" name="id" value="<?php echo isset($_GET['end']) ? $_GET['end'] : ''; ?>" >
                <input type="text" name="skillname" class="skill-edit" placeholder="Skill Name" required>
                <input type="text" name="level" class="skill-edit" placeholder="Skill Level" required>
                <input type="submit" name="submitinsertskills" class="update" value="UPDATE">
            </form>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submitinsertskills'])) {
    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve id
        $end = isset($_POST['id']) ? $_POST['id'] : '';

        // Insert new skills
        if (isset($_POST['skillname']) && isset($_POST['level'])) {
            $skillname= $_POST['skillname'];
            $skilllevel = $_POST['level'];

            // Iterate over each skill and insert into database

                // Prepare SQL statement
                $sql = "INSERT INTO skills (`f/b`, `name`, `level`) VALUES (:fb, :name, :level)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'fb' => $end,
                    'name' => $skillname,
                    'level' => $skilllevel
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
