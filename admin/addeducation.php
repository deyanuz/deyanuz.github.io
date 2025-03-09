<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Edit Skill</title>
</head>
<body>
    <div class="bg-model ">
        <div class="model-content model-education">
            <h3>Add Education</h3>
            <form action="addeducation.php" method="POST">
                <input type="text" name="year" class="skill-edit" placeholder="Year" required>
                <input type="text" name="institution" class="skill-edit" placeholder="Institution" required>
                <input type="text" name="race" class="skill-edit" placeholder="Degree" required>
                <input type="text" name="discipline" class="skill-edit" placeholder="Discipline" required>
                <input type="submit" name="submitinserteducation" class="update" value="UPDATE">
            </form>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submitinserteducation'])) {
    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert new skills
        if (isset($_POST['year']) && isset($_POST['institution']) && isset($_POST['race']) && isset($_POST['discipline'])) {
            $year= $_POST['year'];
            $institution = $_POST['institution'];
            $race = $_POST['race'];
            $discipline = $_POST['discipline'];

            // Iterate over each skill and insert into database

                // Prepare SQL statement
                $sql = "INSERT INTO education (`year`, `uni`,race, specialty) VALUES (:year, :institution, :race, :discipline)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'year' => $year,
                    'institution' => $institution,
                    'race' => $race,
                    'discipline' =>$discipline
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
