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
            <h3>Edit Skill</h3>
            <form action="editskills.php" method="POST">
                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                <input type="text" name="skillname" class="skill-edit" placeholder="Skill Name">
                <input type="text" name="level" class="skill-edit" placeholder="Skill Level">
                <input type="submit" name="submiteditskills" class="update" value="UPDATE">
            </form>
        </div>
    </div>
</body>

</html>


<?php
if (isset($_POST['submiteditskills'])) {
    $update_id = $_REQUEST['id'];
    $skillname = isset($_POST['skillname']) ? $_POST['skillname'] : '';
    $level = isset($_POST['level']) ? $_POST['level'] : '';

    // Prepare SQL statement
    $sql = "UPDATE skills 
            SET 
            name = :name,
            level = :level
            WHERE
            idx = :id";
            
    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id' => $update_id,
            'name' => $skillname,
            'level' => $level
        ]);

        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            header("Location: admin.php?update=successful");
            exit(); // Ensure script execution stops after redirect
        } else {
            echo "<h5>Update failed.</h5>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
