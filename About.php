

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - NBC News</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php">Home</a>
            <a href="finance.php">Finance</a>
            <a href="education.php">Education</a>
            <a href="sports.php">Sports</a>
            <a href="about.php">About</a>
            <a href="service.php">Service</a>
        </div>
    </nav>
    <style>
       

        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #00E0C7;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1, h2, h3 {
            color: #333;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .navbar {
            background-color: #333;
            padding: 15px 0;
            color: #fff;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1rem;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        .main-content {
            margin-top: 40px;
        }

        .about-section {
            margin-bottom: 40px;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #666;
        }

        /* Our Mission Section */
        .mission-section {
            background-color: #f9f9f9;
            padding: 40px;
            margin-bottom: 40px;
            border-radius: 8px;
        }

        .mission-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .mission-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
            text-align: center;
        }

        /* Our Team Section */
        .team-section {
            margin-bottom: 40px;
        }

        .team-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .team-member {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin-top: 15px;
        }

        .team-member p {
            font-size: 1.1rem;
            color: #666;
        }

        /* History Section */
        .history-section {
            background-color: #fff;
            padding: 40px;
            margin-bottom: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .history-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .history-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        /* Contact Section */
        .contact-section {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
            text-align: center;
        }

        .contact-details {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .contact-details li {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }
        
       
    </style>
    <!-- Main Content -->
    <div class="container">
        <!-- About Us Section -->
        <section class="about-section">
            <h2>About NBC News</h2>
            <p>Founded in 2024, NBC News is a leading digital news platform that provides the latest updates on global events, politics, finance, sports, and entertainment. We are dedicated to delivering accurate, timely, and in-depth coverage to keep our readers informed and engaged.</p>
        </section>

        <!-- Our Mission Section -->
        <section class="mission-section">
            <h2>Our Mission</h2>
            <p>Our mission is to provide unbiased and accurate news to our audience, empowering them with the knowledge to make informed decisions in their personal and professional lives. We believe in the power of information and its role in shaping a well-informed society.</p>
        </section>

        <!-- Our Team Section -->
 <section class="team-section">
    <h2>Meet Our Team</h2>
    <div class="team-grid">
        <?php
        // Make sure $team_members is defined and contains data
        // Example: $team_members = fetch_team_members_from_db();

        // Loop through each team member and display their information
        foreach ($team_members as $member):
        ?>
            <div class="team-member">
                <!-- Display the image, name, and position -->
                <img src="uploads/<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>">
                <h3><?= htmlspecialchars($member['name']) ?></h3>
                <p><?= htmlspecialchars($member['position']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>



        <!-- History Section -->
        <section class="history-section">
            <h2>Our History</h2>
            <p>Founded as a small digital news platform in 2024, NBC News has grown rapidly into a trusted source for breaking news and expert analysis. Our commitment to delivering the most reliable news has earned us a loyal audience, and we continue to expand our coverage to include more categories, including finance, technology, and global affairs.</p>
        </section>

        <!-- Contact Us Section -->
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to get in touch, feel free to contact us using the details below:</p>
            <ul class="contact-details">
                <li>Email: <a href="mailto:contact@nbcnews.com">contact@nbcnews.com</a></li>
                <li>Phone: +1 (800) 123-4567</li>
                <li>Address: 123 News Blvd, Suite 456, City, Country</li>
            </ul>
        </section>
    </div>
    <div class="mission-section">
            <h2>Our Mission</h2>
            <p>Our mission is to provide trustworthy and up-to-date news coverage from around the world. We are committed to fostering informed conversations that empower individuals to make educated decisions in their personal and professional lives. We believe that a well-informed citizenry is the foundation of a healthy democracy.</p>
        </div>

        <!-- Our Team Section -->
        <div class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr_2JN-ve_9K4ocw5iyBhRpfKXNVR0dYgDrrQqCwZxU1Pzr2BbpV-2EUNwQev8gQZdwUo&usqp=CAU" alt="Team Member">
                    <h3>John Doe</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="https://www.javierortego.com/wp-content/uploads/2022/01/Gestion-de-equipos-remotos.jpg" alt="Team Member">
                    <h3>Jane Smith</h3>
                    <p>Editor-in-Chief</p>
                </div>
                <div class="team-member">
                    <img src="https://img.freepik.com/free-photo/portrait-adult-male-smiling_23-2148729648.jpg" alt="Team Member">
                    <h3>Mark Lee</h3>
                    <p>Senior Journalist</p>
                </div>
                <div class="team-member">
                    <img src="https://www.shutterstock.com/image-photo/young-woman-working-office-260nw-1310994044.jpg" alt="Team Member">
                    <h3>Amy Williams</h3>
                    <p>Head of Digital Content</p>
                </div>
            </div>
        </div>

        <!-- Our History Section -->
        <div class="history-section">
            <h2>Our History</h2>
            <p>Founded as a small digital news blog, NBC News has grown into a global news platform. We started with a mission to deliver real-time news updates that would keep our readers informed about the world’s most important events. Over the years, we have expanded our reach to cover various areas of interest, from politics and business to sports and entertainment.</p>
        </div>

        <!-- Contact Us Section -->
        <div class="contact-section">
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, feel free to reach out to us. We value feedback and are always ready to assist our readers.</p>
            <ul class="contact-details">
                <li>Email: <a href="mailto:contact@nbcnews.com">contact@nbcnews.com</a></li>
                <li>Phone: +1 (800) 123-4567</li>
                <li>Address: 123 News Blvd, Suite 456, City, Country</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 NBC News. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
