<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Services - NBC News</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php">Home</a>
            <a href="blog.php">Blog</a>
            <a href="finance">Finance</a>
            <a href="education.php">Education</a>
            <a href="sports.php">Sports</a>
            <a href="entertainment.php">About</a>
            <a href="services.php">Services</a>
            <a href="login.php">Login</a>
            
        </div>
    </nav>

    <!-- Main Content Section -->
    <section class="services-section">
        <div class="container">
            <h1>Our Services</h1>
            <p>We offer a wide range of services designed to keep you informed and engaged with the latest news. Our platform offers tailored solutions for businesses, advertisers, and news enthusiasts alike.</p>

            <div class="service-list">
                <!-- Dynamically load services -->
                <?php foreach ($services as $service): ?>
                    <div class="service-item">
                        <img src="uploads/<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['name']) ?>">
                        <h2><?= htmlspecialchars($service['name']) ?></h2>
                        <p><?= htmlspecialchars($service['description']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Special Service Section -->
    <section class="special-services">
        <div class="container">
            <h2>Special Services</h2>
            <div class="special-service-items">
                <div class="special-service-item" id="news-alert">
                    <h3>News Alerts</h3>
                    <p>Stay up to date with real-time breaking news through our alerts. Subscribe now to receive news as it happens.</p>
                    <button onclick="subscribeAlert()">Subscribe Now</button>
                </div>
                <div class="special-service-item" id="custom-report">
                    <h3>Custom Reports</h3>
                    <p>Request custom news reports tailored to your interests. We deliver timely and relevant information directly to your inbox.</p>
                    <button onclick="requestReport()">Request Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <p>"NBC News is my go-to platform for the latest updates. Their service is fast, reliable, and comprehensive."</p>
                    <p><strong>John Doe</strong> - CEO, XYZ Corp</p>
                </div>
                <div class="testimonial-item">
                    <p>"I subscribed to their custom news reports, and it’s been an invaluable service for my business."</p>
                    <p><strong>Jane Smith</strong> - Marketing Director, ABC Ltd.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 NBC News. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Subscribe to news alerts functionality
        function subscribeAlert() {
            alert("You have successfully subscribed to News Alerts!");
        }

        // Request custom report functionality
        function requestReport() {
            alert("Your custom report request has been submitted. We'll be in touch soon!");
        }

        // Testimonial Slider (simple JS)
        $(document).ready(function() {
            let currentIndex = 0;
            const testimonials = $(".testimonial-item");
            const totalTestimonials = testimonials.length;

            function showNextTestimonial() {
                testimonials.eq(currentIndex).hide();
                currentIndex = (currentIndex + 1) % totalTestimonials;
                testimonials.eq(currentIndex).fadeIn();
            }

            setInterval(showNextTestimonial, 3000); // Change testimonial every 3 seconds
        });
    </script>

<style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6a1b9a, #ab47bc);
            color: #fff;
            line-height: 1.6;
            padding-top: 80px; /* Account for fixed navbar */
        }

        /* Navigation Bar */
        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            padding: 15px 0;
            z-index: 1000;
        }

        nav.navbar .container {
            display: flex;
            justify-content: center;
        }

        nav.navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 10px 20px;
            margin: 0 15px;
            transition: 0.3s;
            text-transform: uppercase;
        }

        nav.navbar a:hover {
            color: #ffeb3b;
            transform: scale(1.1);
        }

        /* Main Content */
        .services-section {
            background: rgba(0, 0, 0, 0.6);
            padding: 50px 0;
            text-align: center;
        }

        .services-section h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        .services-section p {
            font-size: 1.1rem;
            color: #e0e0e0;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .service-item {
            background: #2c2c2c;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            width: 280px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
        }

        .service-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .service-item h2 {
            font-size: 1.8rem;
            color: #ffeb3b;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .service-item p {
            font-size: 1.1rem;
            color: #e0e0e0;
            margin-bottom: 20px;
        }

        /* Special Services Section */
        .special-services {
            background: #1c1c1c;
            padding: 50px 0;
        }

        .special-services h2 {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        .special-service-items {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 30px;
        }

        .special-service-item {
            background: #333;
            padding: 20px;
            border-radius: 10px;
            width: 48%;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .special-service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .special-service-item h3 {
            color: #ffeb3b;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .special-service-item p {
            font-size: 1rem;
            color: #e0e0e0;
            margin-bottom: 20px;
        }

        .special-service-item button {
            background: #ffeb3b;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .special-service-item button:hover {
            background: #e0e0e0;
            color: #333;
        }

        /* Testimonials Section */
        .testimonials {
            background: #2c2c2c;
            padding: 50px 0;
        }

        .testimonials h2 {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
        }

        .testimonial-slider {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .testimonial-item {
            background: #333;
            color: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            opacity: 0;
            animation: fadeInTestimonial 1s ease-in-out forwards;
        }

        .testimonial-item p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .testimonial-item strong {
            font-size: 1.2rem;
            color: #ffeb3b;
        }

        /* Footer Section */
        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
        }

        footer p {
            font-size: 1rem;
        }

        /* Keyframes for Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInTestimonial {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</body>

</html>
