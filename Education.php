<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBC NEWS</title>
    <style>
       /* Reset Default Styles */
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Global Styles */
       
        body {
            font-family: Arial, sans-serif;
            background: url('https://t4.ftcdn.net/jpg/08/75/26/43/360_F_875264301_tRDKHTD1ehTLoCX1EK7w4FhohIyw6VU0.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            line-height: 1.6;
        }


        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #4caf50, #81c784);
            position: fixed;
            top: 0;
            width: 100%;
            padding: 15px 0;
            z-index: 100;
        }

        .navbar .logo {
            font-size: 30px;
            color: white;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .navbar ul li {
            margin: 0 15px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .navbar ul li a:hover {
            color: #ffeb3b;
        }

        /* Main Content Area */
        .content {
            padding: 30px 50px;
            background: #fff;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 3rem;
            color: #4caf50;
            text-align: center;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        p {
            font-size: 1.1rem;
            color: #666;
            text-align: center;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        /* Articles Section */
        h2 {
            font-size: 2.5rem;
            color: #4caf50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .article-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .article {
            width: 30%;
            background: #f7f7f7;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .article:hover {
            transform: translateY(-10px);
        }

        .article img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .article h2 {
            padding: 15px;
            font-size: 1.6rem;
            font-weight: bold;
            color: #333;
        }

        .article p {
            padding: 0 15px;
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .read-more {
            display: block;
            color: #4caf50;
            text-decoration: none;
            text-align: right;
            padding: 0 15px 15px;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .read-more:hover {
            color: #ffeb3b;
        }

        /* Education Resources Section */
        .resources-section {
            margin-top: 50px;
        }

        .resources-section h2 {
            font-size: 2.5rem;
            text-align: center;
            color: #4caf50;
            margin-bottom: 20px;
        }

        .resources-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0;
        }

        .resource-item {
            background: #eaf0e1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .resource-item:hover {
            transform: translateY(-10px);
        }

        .resource-item a {
            color: #4caf50;
            font-size: 1.5rem;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        .resource-item p {
            font-size: 1rem;
            color: #555;
        }

        /* Education Tips Section */
        .education-tips {
            margin-top: 50px;
        }

        .education-tips h2 {
            font-size: 2.5rem;
            color: #4caf50;
            text-align: center;
            margin-bottom: 20px;
        }

        .tip-item {
            background: #f7f7f7;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .tip-item h3 {
            font-size: 1.8rem;
            color: #4caf50;
            margin-bottom: 10px;
        }

        .tip-item p {
            font-size: 1rem;
            color: #555;
            line-height: 1.8;
        }

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            font-size: 1rem;
        }

        /* Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        
       
    </style>
   

</head>



    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>

<body>
    <nav class="navbar">
        <div class="logo">NBC NEWS</div>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="finance.php">FINANCE</a></li>
            <li><a href="#">EDUCATION</a></li>
            <li><a href="#">SPORT</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SERVICE</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>


    <div class="content">
        <h1>Welcome to the Education Section</h1>
        <p>This section covers the latest educational news, articles, resources for learners, and useful tips to help you succeed in your educational journey. Stay informed about the education system, digital learning tools, and more!</p>

        <!-- Articles Section -->
        <h2>Latest Educational Articles</h2>
        <div class="article-section">
            <!-- Article 1 -->
            <div class="article">
                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Technology_Trends.jpg" alt="Article Image">
                <h2>The Future of Online Learning</h2>
                <p>The rise of online learning platforms is transforming how education is delivered. This article explores the benefits of online learning, the best platforms, and how to stay motivated...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 2 -->
            <div class="article">
                <img src="https://www.stjohns.edu/sites/default/files/styles/660x660/public/2024-12/untitled_1600_x_1080_px_instagram_post.png?itok=XRgujSDw" alt="Article Image">
                <h2>Top 10 Study Tips for Students</h2>
                <p>Effective study techniques can drastically improve your academic performance. Discover the best strategies to study smarter, not harder, and improve your grades...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 3 -->
            <div class="article">
                <img src="https://home.dartmouth.edu/sites/home/files/styles/16_9_xl/public/2024-06/20240609-Federer-Commencement-Speech-kl-12.jpg?h=0a8b6f8b&itok=OtFMEWwu" alt="Article Image">
                <h2>How to Choose the Right University for You</h2>
                <p>Choosing the right university can be overwhelming. This article guides you through the process, helping you evaluate your options based on factors like location, program, and campus culture...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 4 -->
            <div class="article">
                <img src="https://s45498.pcdn.co/wp-content/uploads/2024/02/10202021Student_Promo_Facilities_083-1024x681.jpg" alt="Article Image">
                <h2>The Importance of Financial Aid for Students</h2>
                <p>Financial aid is crucial for many students to afford higher education. Learn about scholarships, grants, and student loans, and how to apply for them...</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>

        <div class="article-section">
            <!-- Article 1 -->
            <div class="article">
                <img src="https://www.globaltimes.cn/Portals/0/attachment/2024/2024-10-04/f93500f5-9519-43b4-8957-844797d546ec.jpeg" alt="Article Image">
                <h2>Global Stock Markets Soar Amid Economic Recovery</h2>
                <p>The global stock markets are experiencing significant gains as countries around the world recover from the economic impacts of the pandemic...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 2 -->
            <div class="article">
                <img src="https://bmkltsly13vb.compat.objectstorage.ap-singapore-1.oraclecloud.com/cdn.sg.dailymirror.lk/assets/uploads/image_8db3cf6a1c.jpg" alt="Article Image">
                <h2>Cryptocurrency: The New Frontier in Investment</h2>
                <p>Cryptocurrencies like Bitcoin and Ethereum are increasingly becoming a mainstream investment option...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 3 -->
            <div class="article">
                <img src="https://bmkltsly13vb.compat.objectstorage.ap-singapore-1.oraclecloud.com/cdn.sg.dailymirror.lk/assets/uploads/image_137c949a73.jpg" alt="Article Image">
                <h2>Understanding Interest Rates and Their Impact on the Economy</h2>
                <p>Interest rates play a critical role in shaping the economic landscape...</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
        <!-- Education Resources Section -->
        <div class="resources-section">
            <h2>Top Educational Resources</h2>
            <ul class="resources-list">
                <li class="resource-item">
                    <a href="#">Khan Academy</a>
                    <p>Free online courses, lessons, and practice exercises for students of all ages.</p>
                </li>
                <li class="resource-item">
                    <a href="#">Coursera</a>
                    <p>Access to online courses from top universities and organizations.</p>
                </li>
                <li class="resource-item">
                    <a href="#">edX</a>
                    <p>Online learning platform offering courses from leading universities worldwide.</p>
                </li>
            </ul>
        </div>

        <!-- Education Tips Section -->
        <div class="education-tips">
            <h2>Education Tips for Success</h2>
            <div class="tip-item">
                <h3>Set Realistic Goals</h3>
                <p>Setting clear and achievable goals is crucial for staying motivated throughout your educational journey. Break down long-term goals into smaller, actionable steps.</p>
            </div>

            <div class="tip-item">
                <h3>Stay Organized</h3>
                <p>Use planners, calendars, or digital tools to keep track of assignments, exams, and deadlines. An organized approach will help reduce stress and improve productivity.</p>
            </div>

            <div class="tip-item">
                <h3>Seek Help When Needed</h3>
                <p>Don't hesitate to reach out to teachers, tutors, or classmates if you're struggling with a subject. Seeking help is a sign of strength and can make a big difference in your understanding.</p>
            </div>

            <div class="tip-item">
                <h3>Take Breaks</h3>
                <p>Studying for long periods without breaks can lead to burnout. Incorporate short breaks into your study sessions to keep your mind fresh and focused.</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 NBC NEWS. All rights reserved.</p>
    </footer>

</body>

</html>