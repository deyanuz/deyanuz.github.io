<?php
ob_start();
include 'connections.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container">

        <aside>
            <div class="top">
                <div class="logo">
                    <img src="logo1.png" alt="">
                    <h2>Zuaneyd Khan</h2>
                </div>
                <div class="close" id="close-btn">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div class="sidebar">
                <ul>
                    <li id="home" class="nav-menu active">
                        <i class='bx bx-home-alt-2'></i>
                        <h3>HOME</h3>
                    </li>
                    <li id="education" class="nav-menu">
                        <i class='bx bx-book-alt'></i>
                        <h3>EDUCATION</h3>
                    </li>
                    <li id="skills" class="nav-menu">
                        <i class='bx bxs-widget'></i>
                        <h3>SKILLS</h3>
                    </li>
                    <li id="works" class="nav-menu">
                        <i class='bx bx-laptop'></i>
                        <h3>WORKS</h3>
                    </li>
                    <li id="messages" class="nav-menu">
                        <i class='bx bx-message-rounded'></i>
                        <h3>MESSAGES</h3>
                        <span class="message-count">
                            <?= mysqli_num_rows($resultMessage) ?>
                        </span>
                    </li>
                    <li class="nav-menu" id="contact">
                        <i class='bx bxs-contact'></i>
                        <h3>CONTACT</h3>
                    </li>
                    <li onclick="loginPage()" id="log-out" class="nav-menu">
                        <i class='bx bx-log-out'></i>
                        <h3>LOG OUT</h3>
                    </li>
                </ul>
            </div>
        </aside>

        <main>
            <h1> Admin Panel </h1>
            <div class="home nav-section ">
                <h2>HOME</h2>
                <form action="admin.php" method="POST" id="update-form">
                    <table>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td><input class="home-input" name="user_name" type="text"
                                        value="<?= $data['user_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><input type="text" name="image" class="home-input" value="<?= $data['image'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><input type="text" name="jobDescription" class="home-input"
                                        value="<?= $data['jobDescription'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Facebook</th>
                                <td><input type="text" name="facebook" class="home-input"
                                        value="<?= $data['facebook'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Twitter</th>
                                <td><input type="text" name="twitter" class="home-input"
                                        value="<?= $data['twitter'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td><input type="text" name="instagram" class="home-input"
                                        value="<?= $data['instagram'] ?>"></td>
                            </tr>
                            <tr>
                                <th>LinkedIn</th>
                                <td><input type="text" name="linkedin" class="home-input"
                                        value="<?= $data['linkedin'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Github</th>
                                <td><input type="text" name="github" class="home-input" value="<?= $data['github'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <th>YouTube</th>
                                <td><input type="text" name="youtube" class="home-input"
                                        value="<?= $data['youtube'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Dribbble</th>
                                <td><input type="text" name="dribble" class="home-input"
                                        value="<?= $data['dribble'] ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="submit" class="update-home update" value="UPDATE">
                </form>

                <?php
                // Assuming you have established a database connection
                
                if (isset($_POST['submit'])) {
                    $user_name = $_POST['user_name'];
                    $image = $_POST['image'];
                    $jobDescription = $_POST['jobDescription'];
                    $facebook = $_POST['facebook'];
                    $twitter = $_POST['twitter'];
                    $instagram = $_POST['instagram'];
                    $linkedin = $_POST['linkedin'];
                    $github = $_POST['github'];
                    $youtube = $_POST['youtube'];
                    $dribble = $_POST['dribble'];


                    // Prepare SQL statement
                    $sql = "UPDATE home 
                SET 
            user_name = :user_name,
            image = :image,
            jobDescription = :jobDescription,
            facebook = :facebook,
            twitter = :twitter,
            instagram = :instagram,
            linkedin = :linkedin,
            github = :github,
            dribble = :dribble,
            youtube= :youtube
             WHERE
            id = 1";
                    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
                    $username = "root";
                    $password = "";
                    $pdo = new PDO($dsn, $username, $password);
                    // Prepare and execute the statement
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        'user_name' => $user_name,
                        'image' => $image,
                        'jobDescription' => $jobDescription,
                        'facebook' => $facebook,
                        'twitter' => $twitter,
                        'instagram' => $instagram,
                        'linkedin' => $linkedin,
                        'github' => $github,
                        'dribble' => $dribble,
                        'youtube' => $youtube
                    ]);

                    // Check if the update was successful
                    if ($stmt->rowCount() > 0) {
                        header("Location: " . $_SERVER['PHP_SELF']);
                        ?>
                        <h5>Update successful.</h5>
                        <?php
                    } else {
                        ?>
                        <h5>Update failed.</h5>
                        <?php
                    }

                }
                ?>
            </div>

            <div class="education nav-section not-visible">
                <h2>EDUCATION</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Institution</th>
                            <th>Degree</th>
                            <th>Discipline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($dataEducation = mysqli_fetch_assoc($resultEducation)) {
                            ?>
                            <tr>
                                <td class="center">
                                    <?= $dataEducation['year'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataEducation['uni'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataEducation['race'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataEducation['specialty'] ?>
                                </td>
                                <td><a class="edit-skills" href="editskills.php?id=<?= $dataEducation['idx'] ?>">Edit</a>
                                </td>
                                <td><a class="edit-skills" href="deleteeducation.php?id=<?= $dataEducation['idx'] ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="add-education add-btn" href="#" onclick="addEducationRow()">ADD</a>
                </div>
            </div>


            <div class="skills nav-section not-visible">
                <h2>SKILLS</h2>
                <h3>Frontend</h3>

                <table class="frontend">
                    <thead>
                        <th>Skill Name</th>
                        <th>Skill Level</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($dataSkills = mysqli_fetch_assoc($resultSkills)) {
                            if ($dataSkills['f/b'] == 'f') {
                                ?>
                                <tr>
                                    <td class="center"><input class="center skills-input" name="skillname[]" type="text"
                                            value="<?= $dataSkills['name'] ?>"></td>
                                    <td class="center"><input class="center skills-input" name="skilllevel[]" type="text"
                                            value="<?= $dataSkills['level'] ?>"></td>
                                    <td><a class="edit-skills" href="editskills.php?id=<?= $dataSkills['idx'] ?>">Edit</a>
                                    </td>
                                    <td><a class="edit-skills" href="deleteskills.php?id=<?= $dataSkills['idx'] ?>">Delete</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="add-frontend add-btn" href="insertskill.php?end=f">ADD</a>
                </div>
                <h3>Backendend</h3>
                <table class="backend">
                    <thead>
                        <th>Skill Name</th>
                        <th>Skill Level</th>
                    </thead>
                    <tbody>
                        <?php
                        $resultSkills = mysqli_query($conn, $sqlSkills);
                        while ($dataSkills = mysqli_fetch_assoc($resultSkills)) {
                            if ($dataSkills['f/b'] == 'b') {
                                ?>
                                <tr>

                                    <td class="center"><input class="center skills-input" name="skillname" type="text"
                                            value="<?= $dataSkills['name'] ?>">
                                    </td>
                                    <td class="center"><input class="center skills-input" name='skilllevel' type="text"
                                            value="<?= $dataSkills['level'] ?>"></td>
                                    <td><a class="edit-skills" href="editskills.php?id=<?= $dataSkills['idx'] ?>">Edit</a></td>
                                    <td><a class="edit-skills" href="deleteskills.php?id=<?= $dataSkills['idx'] ?>">Delete</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="add-frontend add-btn" href="insertskill.php?end=b">ADD</a>
                </div>
            </div>

            <div class="works nav-section not-visible">
                <h2>WORKS</h2>
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Link</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><input class="center" type="text" value="2018"></td>
                            <td class="center"><input class="center" type="text" value="SSC"></td>
                            <td class="center"><input class="center" type="text" value="Science"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="update " href="#">UPDATE</a>
                    <a class="add-works add-btn" href="#" onclick="addWorksRow()">ADD</a>
                    <a class="remove-works remove-btn not-visible" href="#" onclick="removeWorksRow()">REMOVE</a>
                </div>
            </div>

            <div class="contact nav-section not-visible">
                <h2>CONTACT</h2>
                <form action="admin.php" method="POST" id="update-form">
                    <table>
                        <tbody>
                            <tr>
                                <th>Phone NO. 1</th>
                                <td><input type="text" name="number1" class="about-input"
                                        value="<?= $dataContact['number1'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Phone NO. 2</th>
                                <td><input type="text" name="number2" class="about-input"
                                        value="<?= $dataContact['number2'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Phone NO. 3</th>
                                <td><input type="text" name="number3" class="about-input"
                                        value="<?= $dataContact['number3'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Email 1</th>
                                <td><input type="text" name="email1" class="about-input"
                                        value="<?= $dataContact['email1'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Email 2</th>
                                <td><input type="text" name="email2" class="about-input"
                                        value="<?= $dataContact['email2'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Email 3</th>
                                <td><input type="text" name="email3" class="about-input"
                                        value="<?= $dataContact['email3'] ?>"></td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td><input type="text" name="location" class="about-input"
                                        value="<?= $dataContact['location'] ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="submitabout" class="update-contact update" value="UPDATE">
                </form>

                <?php
                // Assuming you have established a database connection
                
                if (isset($_POST['submitabout'])) {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $number3 = $_POST['number3'];
                    $email1 = $_POST['email1'];
                    $email2 = $_POST['email2'];
                    $email3 = $_POST['email3'];
                    $location = $_POST['location'];

                    // Prepare SQL statement
                    $sql = "UPDATE contact 
            SET 
                number1 = :number1,
                number2 = :number2,
                number3 = :number3,
                email1 = :email1,
                email2 = :email2,
                email3 = :email3,
                location = :location
            WHERE
                id = 1";

                    $dsn = "mysql:host=localhost;dbname=webportfolio;charset=utf8mb4";
                    $username = "root";
                    $password = "";

                    try {
                        $pdo = new PDO($dsn, $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Prepare and execute the statement
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([
                            'number1' => $number1,
                            'number2' => $number2,
                            'number3' => $number3,
                            'email1' => $email1,
                            'email2' => $email2,
                            'email3' => $email3,
                            'location' => $location,
                        ]);

                        // Check if the update was successful
                        if ($stmt->rowCount() > 0) {
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit(); // Ensure script execution stops after redirect
                        } else {
                            echo "<h5>Update failed.</h5>";
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                }
                ?>


            </div>

            <div class="messages nav-section not-visible">
                <h2>MESSAGES</h2>
                <table>
                    <thead>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        while ($dataMessage = mysqli_fetch_assoc($resultMessage)) {
                            ?>
                            <tr>
                                <td class="center">
                                    <?= $dataMessage['time'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataMessage['name'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataMessage['email'] ?>
                                </td>
                                <td class="center">
                                    <?= $dataMessage['msg'] ?>
                                </td>

                                <td><a class="delete-msg" href="delete.php?id=<?= $dataMessage['id'] ?>">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="footer">

            </div>
        </main>

    </div>
    <script src="admin.js"></script>
</body>

</html>
<?php
ob_end_flush()
    ?>