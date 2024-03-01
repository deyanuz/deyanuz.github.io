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
                    <li id="about" class="nav-menu">
                        <i class='bx bx-info-circle'></i>
                        <h3>ABOUT</h3>
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
                        <span class="message-count">26</span>
                    </li>
                    <li class="nav-menu" id="contact">
                        <i class='bx bxs-contact'></i>
                        <h3>CONTACT</h3>
                    </li>
                    <li id="settings" class="nav-menu">
                        <i class='bx bx-cog'></i>
                        <h3>SETTINGS</h3>
                    </li>
                    <li id="log-out" class="nav-menu">
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
                <table>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td><input class="home-input" type="text" value="Zunayed Khan"></td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><input type="text" class="home-input" value="shadoww.png"></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><input type="text" class="home-input" value="B.Sc Undergraduate Student in KUET"></td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Twitter</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>LinkedIn</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Github</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Dribble</th>
                            <td><input type="text" class="home-input" value="#"></td>
                        </tr>

                    </tbody>
                </table>
                <a class="update-home" href="">UPDATE</a>
            </div>

            <div class="about nav-section not-visible">
                <h2>ABOUT</h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Image</th>
                            <td><input type="text" class="about-input" value="Zunayed Khan"></td>
                        </tr>
                        <tr>
                            <th>Descrioption</th>
                            <td><input type="text" class="about-input"
                                    value="Passionate B.Sc undergraduate on a journey of exploration and learning. Dive into my world of diverse interests, projects, and aspirations. Join me in making a positive impact. Welcome to my portfolio!">
                            </td>
                        </tr>
                        <tr>
                            <th>Hobby-1</th>
                            <td><input type="text" class="about-input" value="B.Sc Undergraduate Student in KUET"></td>
                        </tr>
                        <tr>
                            <th>Hobby-2</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Hobby-3</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Achievement-1</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Note-1</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Link-1</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Achievement-2</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Note-2</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Link-2</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Achievement-3</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Note-3</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>
                        <tr>
                            <th>Link-3</th>
                            <td><input type="text" class="about-input" value="#"></td>
                        </tr>


                    </tbody>
                </table>
                <a class="update-about" href="">UPDATE</a>
            </div>

            <div class="education nav-section not-visible">
                <h2>EDUCATION</h2>
                <table>
                    <thead>
                        <th>Year</th>
                        <th>Institution</th>
                        <th>Degree</th>
                        <th>Discipline</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center"><input class="center" type="text" value="2018"></td>
                            <td class="center"><input class="center" type="text"
                                    value="The Flowers K.G. <br> and High School"></td>
                            <td class="center"><input class="center" type="text" value="SSC"></td>
                            <td class="center"><input class="center" type="text" value="Science"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="update " href="#">UPDATE</a>
                    <a class="add-education add-btn" href="#" onclick="addEducationRow()">ADD</a>
                    <a class="remove-education remove-btn not-visible" href="#"
                        onclick="removeEducationRow()">REMOVE</a>
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
                        <tr>

                            <td class="center"><input class="center" type="text" value="PYTHON"></td>
                            <td class="center"><input class="center" type="text" value="20"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="update " href="#">UPDATE</a>
                    <a class="add-frontend add-btn" href="#" onclick="addFrontendRow()">ADD</a>
                    <a class="remove-frontend remove-btn not-visible" href="#" onclick="removeFrontendRow()">REMOVE</a>
                </div>

                <h3>Backendend</h3>
                <table class="backend">
                    <thead>
                        <th>Skill Name</th>
                        <th>Skill Level</th>
                    </thead>
                    <tbody>
                        <tr>

                            <td class="center"><input class="center" type="text" value="PYTHON"></td>
                            <td class="center"><input class="center" type="text" value="20"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a class="update " href="#">UPDATE</a>
                    <a class="add-backend add-btn" href="#" onclick="addBackendRow()">ADD</a>
                    <a class="remove-backend remove-btn not-visible" href="#" onclick="removeBackendRow()">REMOVE</a>
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
                <table>
                    <tbody>
                        <tr>
                            <th>Phone NO. 1</th>
                            <td><input type="text" value="Zunayed Khan"></td>
                        </tr>
                        <tr>
                            <th>Phone NO. 2</th>
                            <td><input type="text" value="shadoww.png"></td>
                        </tr>
                        <tr>
                            <th>Phone NO. 3</th>
                            <td><input type="text" value="B.Sc Undergraduate Student in KUET"></td>
                        </tr>
                        <tr>
                            <th>Email 1</th>
                            <td><input type="text" value="#"></td>
                        </tr>
                        <tr>
                            <th>Email 2</th>
                            <td><input type="text" value="#"></td>
                        </tr>
                        <tr>
                            <th>Email 3</th>
                            <td><input type="text" value="#"></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td><input type="text" value="#"></td>
                        </tr>
                    </tbody>
                </table>
                <a class="update" href="">UPDATE</a>
            </div>

            <div class="messages nav-section not-visible">
                <h2>MESSAGES</h2>
                <table>
                    <thead>
                        <th>Email</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">abc</td>
                            <td class="center">def</td>
                            <td class="center">nasnkskk</td>
                            <td><a class="delete-msg" href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
    <script src="admin.js"></script>
</body>

</html>