
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance - NBC News</title>
    <link rel="stylesheet" href="styles.css">
</head>


        
        
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">

            <a href="index.php">Home</a>
            <a href="finance.php">Finance</a>
            <a href="blog.php">Blog</a>
            <a href="education.php">Education</a>
            <a href="sports.php">Sports</a>
            <a href="about.php">About</a>
            <a href="service.php">Service</a>
            <a href="login.php">Login</a>
            
        </div>
    </nav>

    

    <div class="content">
        <h1>Welcome to the Finance Section</h1>
        <p>This is the finance section where you can get all the latest news and updates about the financial world.</p>
        <!-- Add more content as needed -->
    </div>

    <section>
      <h2>Letest Article</h2>
        <div class="article-section">
            <!-- Article 1 -->
            <div class="article">
                <img src="https://www.ft.com/__origami/service/image/v2/images/raw/ftcms%3A43a2184f-4b86-434c-997d-115c66258185?source=next-article&fit=scale-down&quality=highest&width=700&dpr=1" width="200px" height="300px" alt="Article Image">
                <h2>Global Stock Markets Soar Amid Economic Recovery</h2>
                <p>The global stock markets are experiencing significant gains as countries around the world recover from the economic impacts of the pandemic...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 2 -->
            <div class="article">
                <img src="https://bitperfect.pe/wp-content/uploads/2024/12/compressed_4ab72909-8b08-49f1-9174-5c9f0e49ce05.png" width="200px" heigt="300px"alt="Article Image">
                <h2>Cryptocurrency: The New Frontier in Investment</h2>
                <p>Cryptocurrencies like Bitcoin and Ethereum are increasingly becoming a mainstream investment option, with many investors seeing them as the future of money...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 3 -->
            <div class="article">
                <img src="https://www.reuters.com/resizer/v2/TPCQEWEYBZO7JENQMB3TLCUPHM.jpg?auth=a29700372d41ca519f83b10d2fc53596cb8bcfcc733d7e834fd829a84c7d5800&width=720&quality=80" width="300px" height="200px" alt="Article Image">
                <h2>How Inflation is Affecting Consumer Spending</h2>
                <p>Inflation has been rising in several countries, leading to a shift in consumer spending patterns. People are tightening their belts, and businesses are adjusting their pricing strategies...</p>
                <a href="#" class="read-more">Read More</a>
            </div>

            <!-- Article 4 -->
            <div class="article">
                <img src="https://images.indianexpress.com/2024/09/fed-reserve.jpg?w=640"width="300px" height="200px" alt="Article Image">
                <h2>Understanding Interest Rates and Their Impact on the Economy</h2>
                <p>Interest rates play a critical role in shaping the economic landscape. Learn how central banks use them to control inflation, encourage or slow down economic growth...</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </section>
        <!-- Finance Tips Section -->
        <h2>Finance Tips for You</h2>
        <ul>
            <li><strong>Start Saving Early:</strong> Time is your biggest ally when it comes to saving and investing. The earlier you start, the more you benefit from compound interest.</li>
            <li><strong>Diversify Your Investments:</strong> Don't put all your eggs in one basket. Diversifying your investments reduces risk and improves your chances for long-term growth.</li>
            <li><strong>Live Below Your Means:</strong> No matter how much you earn, make sure you spend less than what you make. This ensures you can save and invest for the future.</li>
            <li><strong>Stay Educated About Finance:</strong> Keep learning about financial markets, trends, and investment strategies. Financial knowledge will help you make better decisions.</li>
        </ul>
    </div>

    <!-- Footer -->
    <div class="background animation">
        <h1 class="head text-center">Our Products</h1>
    </div>
    <!-- end background section -->


    <!-- Start products section -->
    <div class="products ani pt-5">
        <div class="container text-center"></div>
    </div>
    <!-- end products section -->

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('https://plus.unsplash.com/premium_photo-1681487769650-a0c3fbaed85a?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZmluYW5jZXxlbnwwfHwwfHx8MA%3D%3D') 
            background-size: cover;
            color: #fff;
            line-height: 1.6;
        }

        /* Navbar Style */
        .navbar {
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            width: 100%;
            top: 0;
            padding: 10px 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: center;
        }

        .navbar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #f9a825;
        }

        /* Content Section */
        .content {
            margin-top: 80px; /* Adjusting content below navbar */
            text-align: center;
            padding: 40px 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Dark background for readability */
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .article-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .article {
            background: rgba(0, 0, 0, 0.7);
            width: 300px;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .article:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        }

        .article img {
            width: 100%;
            border-radius: 8px;
        }

        .article h2 {
            font-size: 1.6rem;
            color: #f9a825;
            margin-top: 10px;
        }

        .article p {
            font-size: 1rem;
            color: #ccc;
            margin-top: 10px;
        }

        .read-more {
            color: #f9a825;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            display: inline-block;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        /* Finance Tips Section */
        h2 {
            font-size: 2rem;
            color: #fff;
            margin-top: 40px;
        }

        ul {
            list-style: none;
            margin-top: 20px;
            padding: 0;
        }

        ul li {
            font-size: 1.1rem;
            color: #ccc;
            margin-bottom: 10px;
        }

        ul li strong {
            color: #f9a825;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            font-size: 1rem;
        }
    </style>
<!-- footer -->
  
<?php
// Simulate a simple array of articles (This could be fetched from a database in a real-world application)
$articles = [
    [
        'title' => 'Global Stock Markets Soar Amid Economic Recovery',
        'content' => 'The global stock markets are experiencing significant gains as countries around the world recover from the economic impacts of the pandemic...',
        'image' => 'https://image.cnbcfm.com/api/v1/image/108065947-1732135903752-gettyimages-1935926054-AFP_34ET38F.jpeg?v=1732863968&w=1480&h=833&ffmt=webp&vtcrop=y width="300px height="200px" ',
        'link' => '#',
    ],
    [
        'title' => 'Cryptocurrency: The New Frontier in Investment',
        'content' => 'Cryptocurrencies like Bitcoin and Ethereum are increasingly becoming a mainstream investment option, with many investors seeing them as the future of money...',
        'image' => 'https://townsquare.media/site/385/files/2024/05/attachment-6626D834-3126-43DC-8036-3773E8887860_1-1.jpg?w=980&q=75 width="300px" height="200px" ',
        'link' => '#',
    ],
    [
        'title' => 'How Inflation is Affecting Consumer Spending',
        'content' => 'Inflation has been rising in several countries, leading to a shift in consumer spending patterns. People are tightening their belts, and businesses are adjusting their pricing strategies...',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCwr-vCt34Mtq4mFe6-Z3w7mZLmx-TZbbU-w&s width="300px" height="200px" ',
        'link' => '#',
    ],
    [
        'title' => 'Understanding Interest Rates and Their Impact on the Economy',
        'content' => 'Interest rates play a critical role in shaping the economic landscape. Learn how central banks use them to control inflation, encourage or slow down economic growth...',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLZUjJjx7vuJLE2IlYjbfRTWnO-RHJ07TAxw&s width="300x" height="200px" ',
        'link' => '#',
    ],
];

// Finance tips
$financeTips = [
    'Start Saving Early' => 'Time is your biggest ally when it comes to saving and investing. The earlier you start, the more you benefit from compound interest.',
    'Diversify Your Investments' => "Don't put all your eggs in one basket. Diversifying your investments reduces risk and improves your chances for long-term growth.",
    'Live Below Your Means' => "No matter how much you earn, make sure you spend less than what you make. This ensures you can save and invest for the future.",
    'Stay Educated About Finance' => "Keep learning about financial markets, trends, and investment strategies. Financial knowledge will help you make better decisions.",
];

?>
<div class="article-section">
        <?php foreach ($articles as $article) : ?>
            <div class="article">
                <img src="<?php echo $article['image']; ?>" alt="Article Image">
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <a href="<?php echo $article['link']; ?>" class="read-more">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Finance Tips Section -->
    <h2>Finance Tips for You</h2>
    <ul>
        <?php foreach ($financeTips as $tip => $description) : ?>
            <li><strong><?php echo $tip; ?>:</strong> <?php echo $description; ?></li>
        <?php endforeach; ?>
    </ul>

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url('https://plus.unsplash.com/premium_photo-1681487769650-a0c3fbaed85a?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZmluYW5jZXxlbnwwfHwwfHx8MA%3D%3D') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            line-height: 1.6;
        }

        /* Navbar Style */
        .navbar {
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            width: 100%;
            top: 0;
            padding: 10px 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: center;
        }

        .navbar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #f9a825;
        }

        /* Content Section */
        .content {
            margin-top: 80px;
            text-align: center;
            padding: 40px 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        /* Article Section */
        .article-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .article {
            background: rgba(0, 0, 0, 0.7);
            width: 300px;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .article:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        }

        .article img {
            width: 100%;
            border-radius: 8px;
        }

        .article h2 {
            font-size: 1.6rem;
            color: #f9a825;
            margin-top: 10px;
        }

        .article p {
            font-size: 1rem;
            color: #ccc;
            margin-top: 10px;
        }

        .read-more {
            color: #f9a825;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            display: inline-block;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        /* Finance Tips Section */
        h2 {
            font-size: 2rem;
            color: #fff;
            margin-top: 40px;
        }

        ul {
            list-style: none;
            margin-top: 20px;
            padding: 0;
        }

        ul li {
            font-size: 1.1rem;
            color: #ccc;
            margin-bottom: 10px;
        }

        ul li strong {
            color: #f9a825;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            font-size: 1rem;
        }
    </style>
  

<footer>
        <p>&copy; 2024 NBC NEWS. All rights reserved.</p>
      </footer>
</body>

</html>
