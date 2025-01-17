<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resources</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <button onclick="topFunction()" id="topButton" title="Go to top">Back to Top</button>
    <header>
        <h1 align="center">University of Windsor Computer Science Hub</h1>
        <nav align="center">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="tutorials.html">Tutorials</a></li>
                <li><a href="resources.php">Student Resources</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="main-content">
            <section>
                <h2>Ebooks</h2>
                    <div class="tiles">
                        <div class="tile">    
                            <img src="images/leddy.jpg" />
                            <a href="https://leddy.uwindsor.ca/get-help/subject/computer-science">Leddy Library Computer Science Collection</a>
                            <p>The Leddy Library has built a comprehensive collection of online, full-text databases and journals, reference tools, and indexes for supporting Computer Science.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/schoolofcs.jpg" />
                            <a href="https://www.uwindsor.ca/science/computerscience/sites/uwindsor.ca.science.computerscience/files/windsor_welcome_booklet_2021.pdf">School of Computer Science Welcome Booklet</a>
                            <p>The School of Computer Science has compiled an online welcome booklet for new students to view.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/schoolofcs.jpg" />
                            <a href="https://help.cs.uwindsor.ca/">School of Computer Science Technical Guidebook</a>
                            <p>The School of Computer Science's documentation showing how to use the various tools available for course work, research work, administrative work, or personal development.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/google.jpg" />
                            <a href="https://www.google.ca/search?tbm=bks&hl=en&q=Computer+Science">Google E-Books on Computer Science</a>
                            <p>Google Books is a service from Google that searches the full text of books and magazines that Google has stored in its digital database.</p>
                        </div>
                    </div>
            </section>
        
            <section>
                <h2>Articles and Guides</h2>
                    <div class="tiles">
                        <div class="tile">    
                            <img src="images/css.jpg" />
                            <a href="https://uwindsorcss.github.io/wiki/resources/guides/first-year">Computer Science Society First Year Guide</a>
                            <p>A comprehensive guide for new students majoring in computer science.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/css.jpg" />
                            <a href="https://uwindsorcss.github.io/wiki/academics/textbooks">Computer Science Society Textbook Guide</a>
                            <p>A guide on buying and using textbooks for computer science courses.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/css.jpg" />
                            <a href="https://uwindsorcss.github.io/wiki/resources/guides/wifi">Computer Science Society WiFi Setup Guide</a>
                            <p>A guide on connecting to and using the University's WiFi network.</p>
                        </div>
                        <div class="tile">    
                            <img src="images/css.jpg" />
                            <a href="https://uwindsorcss.github.io/wiki/resources/guides/vpn">Computer Science Society VPN Setup Guide</a>
                            <p>A guide on connecting to and using the University's VPN.</p>
                        </div>
                    </div>
            </section>
        
            <section>      
                <h2>Course Related Support</h2>
                <h3><a href="https://www.uwindsor.ca/science/computerscience/1082/tutoring-and-academic-assistance">
                CS Current Undergraduate Students (The School of Computer Science)</a></h3>
                    <p>On Brightspace, the CS Current Students organization offers tutoring for all CS courses. You can find them at the Brightspace Organizations page.</p>
                
                <h3><a href="https://uwindsorcss.github.io/wiki/academics/academic-support/#math-and-stats-learning-centre">
                Math and Stats Learning Centre</a></h3>
                <p>The MSLC provides midterm review sessions, drop-in tutoring services, and private tutors for many first-year Math and second-year Stats courses, including MATH-1250, MATH-1720, and STAT-2910.</p>
                
                <h3><a href="https://uwindsorcss.github.io/wiki/academics/academic-support/#sos-students-offering-support">
                SOS (Students Offering Support)</a></h3>
                <p>SOS offers student-led exam aids (group review sessions, take-home packages/summary notes) for midterms and final exams of different subjects, including Computer Science and Math/Stats courses.</p>
        
                <h3><a href="https://uwindsorcss.github.io/wiki/academics/academic-support/#student-success-and-leadership-centre">
                Student Success and Leadership Centre</a></h3>
                <p>The Student Success Centre provides writing support for students who are writing essays, reports, or other academic writings. They also provide academic support programs like Bounce Back to help students build good study habits.</p>
            </section>
        </div>

        <aside class="sidebar">
            <section>
                <h2 align="center">Study Materials</h2>
                <?php
                    $files = glob("uploads/*.pdf");
                    if (count($files) > 0) {
                        foreach ($files as $file) {
                        echo "<a href='$file'>" . basename($file) . "</a><br>";
                    }
                    } else {
                        echo "<p align='center'>There are currently no uploaded study materials</p>";
                    }
                ?>
            </section>
            <section>
                <h4 align="center">Upload Study Materials</h4>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <p></p>
                    <input type="submit" value="Upload File" name="submit" class="center">
                </form>
            </section>
        </aside>
    </div>

    <footer>
        <p>&copy; 2024<br>Anika Khan<br>ID: 110103345</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
