<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "news_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recent news articles
$sql = "SELECT id, title, summary, published_date FROM articles ORDER BY published_date DESC LIMIT 10";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final project</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .news-article { margin-bottom: 20px; padding: 10px; border-bottom: 1px solid #ccc; }
        .title { font-size: 1.5em; }
        .summary { font-size: 1em; }
        .date { font-size: 0.8em; color: #999; }
    </style>
</head>
<body>
    <nav>
        <div class="main-nav container flex">
    
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item" id="finance">FINANCE</li>
                    <li class="hover-link nav-item" id="sports">SPORTS</li>
                    <li class="hover-link nav-item" id="crypto">CRYPTO</li>
                    <li class="hover-link nav-item" id="international"> INTERNATIONAL</li>
                    <li class="hover-link nav-item" id="education">EDUCATION</li>
                    <li class="hover-link nav-item" id="about us">ABOUT US</li>
                    <li class="hover-link nav-item" id="services">SERVICES</li>
                    <li class="hover-link nav-item" id="privancy police">PRIVANCY POLICE</li>
                </ul>
            </div>
            <div class="search-bar flex">
    
                <button id="search-button" class="search-button">Search</button>
            </div>
        </div>
    </nav>
    
    
    <main>
        <div class="cards-container container flex" id="cards-container">
    
        </div>
    </main>
    <img decoding="async" src="c:\Users\Acer\Downloads\news org img2.jpg" width = 1800; height = 1000; alt="news-image" id="news-img">
    





       

<style>
    
       
        
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #c3c3c3;
        }
        
        p {
            font-family: "Roboto", sans-serif;
            opacity: .8;
            line-height: 1.4rem;
        }
        
        a {
            text-decoration: none;
        }
        
        ul {
            list-style: none;
        }
        
        .flex {
            display: flex;
            align-items: center;
        }
        
        .container {
            max-width: 1180px;
            margin-inline: auto;
            overflow: hidden;
        }
        
        nav {
            background-color: #484e52;
            color: white;
            position: fixed;
            top: 0;
            z-index: 99;
            left: 0;
            right: 0;
        }
        
        .main-nav {
            justify-content: space-between;
            padding-block: 8px;
        }
        
        
        
        .nav-links ul {
            gap: 16px;
        }
        
        .hover-link {
            cursor: pointer;
        }
        
        
        .nav-item.active {
            color: var(--accent-color);
        }
        
        .search-bar {
            height: 32px;
            gap: 8px;
        }
        
        .news-input {
            width: 200px;
            height: 100%;
            padding-inline: 12px;
            border-radius: 4px;
            border: 2px solid #bbd0e2;
            font-family: "Roboto", sans-serif;
        }
        
        .search-button {
            background-color: #208c5b;
            color: white;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: "Roboto", sans-serif;
        }
        
        
        
        main {
            padding-block: 20px;
            margin-top: 80px;
        }
        
        .cards-container {
            justify-content: space-between;
            flex-wrap: wrap;
            row-gap: 20px;
            align-items: start;
        }
        
        .card {
            width: 360px;
            min-height: 400px;
            box-shadow: 0 0 4px #d4ecff;
            border-radius: 4px;
            cursor: pointer;
            background-color: #fff;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 1px 1px 8px #d4ecff;
            background-color: #f9fdff;
            transform: translateY(-2px);
        }
        
        .card-header img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 12px;
        }
        
        .news-source {
            margin-block: 12px;
        
        }
        
        .hover-link:hover {
            color: #b9b9b9;
            text-decoration: underline;
        }
        
    </style>
<h1>Latest News</h1>

<div class="news-item">
                <img src="C:\Users\Acer\Downloads\latest img international.jpg" alt="News Image 1">
                <div class="content">
                    <h3><a href="#">Breaking News: Global Economy on the Rise</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero...</p>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>

            <div class="news-item">
                <img src="C:\Users\Acer\Downloads\sport letest img 1.webp" alt="News Image 2">
                <div class="content">
                    <h3><a href="#">Tech Innovations That Will Change Your Life</a></h3>
                    <p>Sports News Today Live Updates: Argentina Vs Peru live streaming details: How to watch Lionel Messi in FIFA World Cup 2026 Qualifiers in India (PTI)
                      Sports News Today highlights: In the dynamic world of sports, every match and series brings fresh excitement. 
                      Our Sports News offers real-time updates and in-depth coverage of cricket series, hockey showdowns, and badminton 
                      tournaments, bringing you closer to the games you love. From thrilling last-ball finishes in cricket to
                      high-stakes hockey matches and intense badminton rallies, we deliver insights, key moments, 
                      and player achievements. Our goal is to keep you connected to the latest action, whether it’s a 
                      league championship, an international series, or a standout individual performance, so you’re always
                      in the know on the biggest stories in sports.</p>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>

            <div class="news-item">
                <img src="C:\Users\Acer\Downloads\education ltest img 1.webp"alt="News Image 3">
                <div class="content">
                    <h3><a href="#">Sports: The Biggest Wins of the Year</a></h3>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae...</p>
                    <a href="#" class="read-more">Read more...</a>
                </div>
            </div>

        </div>
    </div>

<header class="header responsive-wrapper">
  <div class="header-left">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="233.445" height="52.805" viewBox="0 0 233.445 52.805">
      <defs>
        <clipPath id="clip-fox-news-logo">
          <rect width="233.445" height="52.805" />
        </clipPath>
      </defs>
      <g id="fox-news-logo" clip-path="url(#clip-fox-news-logo)">
        <g id="Group_1" data-name="Group 1" transform="translate(-2179.585 601.093)">
          <path id="Path_5" data-name="Path 5" d="M4.185-29.205H22.59v4.59H9.5v7.7h11.97v4.545H9.5V0H4.185Zm27.675,6.75a12.117,12.117,0,0,1,4.14.7,8.656,8.656,0,0,1,3.33,2.138q3.105,3.15,3.105,8.73,0,5.49-3.105,8.64A9.921,9.921,0,0,1,31.86.63,10.222,10.222,0,0,1,24.3-2.25Q21.2-5.355,21.2-10.89q0-5.625,3.105-8.73A10.217,10.217,0,0,1,31.86-22.455Zm5.265,11.52a8.372,8.372,0,0,0-1.35-5.2,4.5,4.5,0,0,0-3.757-1.733,5.013,5.013,0,0,0-3.937,1.733,7.654,7.654,0,0,0-1.53,5.2,8.27,8.27,0,0,0,1.372,5.2A4.534,4.534,0,0,0,31.68-4.005,4.989,4.989,0,0,0,35.6-5.738,7.654,7.654,0,0,0,37.125-10.935ZM64.62,0H58.14l-5.4-7.02L47.7,0H41.175l8.5-10.89-8.5-11.025H47.7l5.355,7.02,5.085-7.02h6.48L56.16-10.89ZM78.48-29.205l12.87,20.7v-20.7h5.31V0h-5.4L77.985-21.42V0h-5.31V-29.205Zm37.71,9.945a9.966,9.966,0,0,1,1.688,3.33,12.23,12.23,0,0,1,.563,3.465,20.182,20.182,0,0,1-.18,2.835H104.13a7.606,7.606,0,0,0,1.305,4.32,4.268,4.268,0,0,0,3.69,1.665q3.285,0,3.915-2.88H118.4A7.849,7.849,0,0,1,115.38-1.35,9.93,9.93,0,0,1,109.125.63a9.489,9.489,0,0,1-7.245-3.15,11.96,11.96,0,0,1-3.015-8.415,11.822,11.822,0,0,1,3.015-8.46,9.529,9.529,0,0,1,7.245-3.06A8.486,8.486,0,0,1,116.19-19.26Zm-7.02,1.035a4.385,4.385,0,0,0-3.51,1.463,6.578,6.578,0,0,0-1.485,3.758h9.315q0-3.555-2.25-4.77A4.4,4.4,0,0,0,109.17-18.225Zm13.455-3.645,4.41,15.615,4.185-14.4h4.815L140.22-6.21l4.455-15.66h5.31L142.785,0h-5.22l-4.05-13.1L129.555,0H124.29l-7.245-21.87Zm31.05,15.21q.09,3.105,4.545,3.1a4.934,4.934,0,0,0,2.813-.743,2.1,2.1,0,0,0,1.1-1.733,1.847,1.847,0,0,0-.675-1.53,6.639,6.639,0,0,0-2.115-.99l-4.77-1.71q-5.31-1.845-5.31-6.03a5.172,5.172,0,0,1,2.5-4.477,11.8,11.8,0,0,1,6.7-1.687,10.044,10.044,0,0,1,6.48,1.845,6,6,0,0,1,2.362,4.635h-4.995a2.191,2.191,0,0,0-1.035-1.71,4.856,4.856,0,0,0-2.7-.63,4.6,4.6,0,0,0-2.723.7,1.974,1.974,0,0,0-.967,1.6q0,1.575,2.655,2.34l5.175,1.935a10.264,10.264,0,0,1,3.938,2.182A4.576,4.576,0,0,1,168.03-6.12a5.8,5.8,0,0,1-2.565,4.68,11.1,11.1,0,0,1-7.02,2.07,11.753,11.753,0,0,1-7.02-1.913,6.353,6.353,0,0,1-2.7-5.377Z" transform="translate(2245 -561)" />
          <path id="Path_1" data-name="Path 1" d="M2207.653-46.775c-.029,5.98,9.656-7.959,11.9-8.762a45.226,45.226,0,0,1,9.4-2.275,19.066,19.066,0,0,1,2.663-.116c4.366.13-3.9-18.154-3.9-18.154l-8.853.386s-6.824,3.109-7.306,9.208,1.265,4.691-.822,10.951c-1.45,4.351-2.432,3.276-3.084,5.217A25.988,25.988,0,0,0,2207.653-46.775Z" transform="translate(-0.475 -503)" />
          <path id="Path_2" data-name="Path 2" d="M2232.822-46.775c.029,5.98-9.656-7.959-11.9-8.762a45.226,45.226,0,0,0-9.4-2.275,19.066,19.066,0,0,0-2.663-.116c-4.366.13,3.9-18.154,3.9-18.154l8.853.386s6.824,3.109,7.306,9.208-1.265,4.691.822,10.951c1.45,4.351,2.432,3.276,3.084,5.217A25.988,25.988,0,0,1,2232.822-46.775Z" transform="translate(-28 -503)" />
          <circle id="Ellipse_1" data-name="Ellipse 1" cx="1" cy="1" r="1" transform="translate(2205 -559)" />
          <path id="Path_3" data-name="Path 3" d="M2216.209-91.186c.2,1.456,9.045,4.389,11.518,8.66s3.761-15.174,2.68-16.427S2216.012-92.642,2216.209-91.186Z" transform="translate(0 -502)" />
          <path id="Path_4" data-name="Path 4" d="M2230.791-91.186c-.2,1.456-9.045,4.389-11.518,8.66s-3.761-15.174-2.68-16.427S2230.988-92.642,2230.791-91.186Z" transform="translate(-34 -502)" />
        </g>
      </g>
    </svg>
  </div>
  
  <div class="header-right">
  <nav class="header-nav">
    <a href="#" class="header-link">Login</a>
    <a href="#" class="header-link header-link--button">Get 1 year for $50 USD</a>
  </nav>
    <button class="header-menu-button">Menu</button>
    </div>
</header>
<main class="responsive-wrapper">
  <div class="page-title">
    <h1>Latest Updates</h1>
  </div>
  <div class="magazine-layout">
    <div class="magazine-column">
      <article class="article">
        <h2 class="article-title article-title--large">
          <a href="#" class="article-link">The First Signs of <mark class="mark mark--primary">Alcoholic Liver</mark> Damage Are Not in the Liver</a>
        </h2>
        <div class="article-excerpt">
          <p>The combination of my father's death and my personal back ground lit a fire in me to know more</p>
          <p>He was admitted to the hospital on 2024
        </div>
        <div class="article-author">
          <div class="article-author-img">
            <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
          </div>
          <div class="article-author-info">
            <dl>
              <dt>Vindya Dissanayake</dt>
              <dd>Reporter</dd>
            </dl>
          </div>
        </div>
      </article>
      <article class="article">
        <h2 class="article-title article-title--medium">
          <a href="#" class="article-link">The Founder's Guide to Actually Understanding Users Vindya</a>
        </h2>
        <div class="article-creditation">
          <p>By Johnathan O'Connell, Andrew Van Dam, Aaron Gregg and Alyssa Fowers</p>
        </div>
      </article>
    </div>
    <div class="magazine-column">
      <article class="article">
        <figure class="article-img">
          <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
        </figure>
        <h2 class="article-title article-title--medium">
          <a href="#" class="article-link">How 7 Lines of Code Turned Into a LKR36 Billion Empire</a>
        </h2>
        <div class="article-excerpt">
          <p>Yeah, it's safe to say these guys have a great sense of humor, which isn't really suprising for us considering their seemingly absurd solution to online payments. Instead of chasing 1000-hour programming contracts to build clunky payments solutions for each individual client, the Collison...</p>
        </div>
        <div class="article-author">
          <div class="article-author-img">
            <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
          </div>
          <div class="article-author-info">
            <dl>
              <dt>vindya Dissanayake</dt>
              <dd>Editor</dd>
            </dl>
          </div>
        </div>
      </article>
    </div>
    <div class="magazine-column">
      <article class="article">
        <figure class="article-img">
          <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
        </figure>
        <h2 class="article-title article-title--small">
          <a href="#" class="article-link">To Become <mark class="mark mark--secondary">Happier</mark>, Ask Yourself These Two Questions Every Night</a>
        </h2>
        <div class="article-creditation">
          <p>By Vindya Dissanayake</p>
        </div>
      </article>
      <article class="article">
        <figure class="article-img">
          <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
        </figure>
        <h2 class="article-title article-title--small">
          <a href="#" class="article-link">10 Things I Stole From People Smarter Than Me</a>
        </h2>
        <div class="article-creditation">
          <p>By Vindya Dissanayake</p>
        </div>
      </article>
    </div>
    <div class="magazine-column">
      <article class="article">
        <h2 class="article-title article-title--medium">
          <a href="#" class="article-link">Traveller Visiting Ice Cave With Amazing Eye-Catching Scenes</a>
        </h2>
        <div class="article-excerpt">
          <p>Slack has become indispensible for many businesses operation remotely during the pandemic. Here's what the acquisition could mean for users...</p>
        </div>
        <div class="article-author">
          <div class="article-author-img">
            <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
          </div>
          <div class="article-author-info">
            <dl>
              <dt>Vindya Dissanayake</dt>
              <dd>Editor</dd>
            </dl>
          </div>
        </div>
      </article>
      <article class="article">
        <small class="article-category">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="22" viewBox="0 0 28 22">
  <defs>
    <clipPath id="clip-headphones">
      <rect width="28" height="22"/>
    </clipPath>
  </defs>
  <g id="headphones" clip-path="url(#clip-headphones)">
    <g id="Group_2" data-name="Group 2" transform="translate(-3680 -609)">
      <path id="Subtraction_1" data-name="Subtraction 1" d="M5,12H5A5.274,5.274,0,0,1,0,6.5,5.274,5.274,0,0,1,5,1V12Z" transform="translate(3680 619)"/>
      <rect id="Rectangle_18" data-name="Rectangle 18" width="2" height="11" transform="translate(3686 620)"/>
      <path id="Subtraction_5" data-name="Subtraction 5" d="M1.243,12H.045C.015,11.67,0,11.334,0,11A11,11,0,0,1,18.778,3.222,10.925,10.925,0,0,1,22,11c0,.331-.015.667-.045,1h-1.2a14.108,14.108,0,0,0-2.685-6.241A8.982,8.982,0,0,0,11,2,8.982,8.982,0,0,0,3.929,5.759,14.109,14.109,0,0,0,1.243,12Z" transform="translate(3683 609)"/>
      <path id="Subtraction_6" data-name="Subtraction 6" d="M5,0H5A5.274,5.274,0,0,0,0,5.5,5.274,5.274,0,0,0,5,11V0Z" transform="translate(3708 631) rotate(180)"/>
      <rect id="Rectangle_23" data-name="Rectangle 23" width="2" height="11" transform="translate(3700 620)"/>
      <path id="Path_8" data-name="Path 8" d="M.156-.031,2.125-1.687,2,2H0Z" transform="translate(3683 619)"/>
      <path id="Path_9" data-name="Path 9" d="M1.969-.031,0-1.687.125,2h2Z" transform="translate(3702.875 619)"/>
    </g>
  </g>
</svg>
          <span>Post Reports / Podcast</span>
        </small>
        <h2 class="article-title article-title--medium">
          <a href="#" class="article-link">Things to Do After 6 P.M Will Enrich <mark class="mark mark--tertiary">Your Life</mark></a>
        </h2>
        <div class="article-podcast-player">
          <button class="podcast-play-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M232.3125,114.34375,88.34375,26.35937A15.99781,15.99781,0,0,0,64,40.00781V215.99219a16.00521,16.00521,0,0,0,24.34375,13.64843L232.3125,141.65625a16.00727,16.00727,0,0,0,0-27.3125Z"></path></svg>
          </button>
          <div class="podcast-progression">
            
          </div>
          <span class="podcast-time">23:45</span>
        </div>
        <div class="article-podcast-info">
          Apple Podcasts, Google Podcasts, Stitcher
        </div>
        <div class="article-author">
          <div class="article-author-img">
            <img src="C:\Users\Acer\Downloads\repoter img 1.jpg" />
          </div>
          <div class="article-author-info">
            <dl>
              <dt>Vindya Dissanayake</dt>
              <dd>Reporter</dd>
            </dl>
          </div>
        </div>
      </article>
    </div>
  </div>
</main>

<style>
*,
*:after,
*:before {
  box-sizing: border-box;
}

body {
  font-family: "DM Sans", sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  background-color: #f8f3eb;
  color: #484847;
  padding-bottom: 5rem;
}

img {
  display: block;
  max-width: 100%;
}

.responsive-wrapper {
  width: 95%;
  max-width: 1900px;
  margin-left: auto;
  margin-right: auto;
}

.header {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
  padding-top: 3rem;
  padding-bottom: 4rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header-left {

  svg {
    max-height: 40px;
    width: auto;
  }
}

.header-middle {
  display: none;
  @media (min-width: 1200px) {
      display: block;
  }
}

.header-right {
  display: flex;
  align-items: center;
}

.header-nav {
  display: none;
  (min-width: 1200px) {
      display: block;
  }
}

.header-link {
  color: #000;
  text-decoration: none;
  margin-left: .75rem;
  margin-right: .75rem;
  display: none;
  font-weight: 500;
  display: inline-block;
  &--button {
    background-color: #000;
    color: #fff;
    padding: .5rem 1.25rem;
  }
  
  @media (min-width: 1200px) {
  }
}

.header-menu-button {
  margin-left: .75rem;
  border: 0;
  padding: 0;
  background-color: transparent;
  font: inherit;
  position: relative;
  padding-right: 30px;
  font-weight: 500;
  
  &:after, &:before {
    content: "";
    display: block;
    position: absolute;
    width: 20px;
    height: 2px;
    background-color: currentcolor;
    right: 0;
    top: 8px;
  }
  
  &:after {
    top: 16px;
    width: 12px;
    right: 8px;
  }
}

.page-title {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  display: flex;
  justify-content: center;
  h1 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #000;
    text-align: center;
    position: relative;
    
    
    &:after {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      bottom: -3px;
      height: 2px;
      background-color: currentcolor;
    }
  }
}

.magazine-layout {
  margin-top: 3rem;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-row-gap: 2rem;
}

.magazine-column {
  padding: 0 1.5rem;
  grid-column: span 5;
  
  @media (min-width: 1200px) {
    grid-column: span 1;
    border-right: 1px solid #CCC;
    &:last-child {
      border-right: none;
    }
  }
  
  &:nth-child(2) {
    @media (min-width: 1200px) {
      grid-column: span 2;
    }
  }
}

.article {
  & + .article {
    padding-top: 2rem;
    margin-top: 2rem;
    border-top: 1px solid #ccc;
  }
}

.article-img {
  & + * {
    margin-top: 1rem;
  }
}

.article-link {
  color: inherit;
  text-decoration: none;
}

.article-title {
  font-family: "Fraunces", serif;
  font-weight: 900;
  line-height: 1.25;
  color: #000;

  &--large {
    font-size: 2rem;
    & + * {
      margin-top: 1.5rem;
    }
  }

  &--medium {
    font-size: 1.5rem;
    & + * {
      margin-top: 0.75rem;
    }
  }

  &--small {
    font-size: 1.25rem;
    & + * {
      margin-top: 0.75rem;
    }
  }
}

.article-link {
  color: inherit;
}

.mark {
  background-color: #fabea1;
  &--secondary {
    background-color: #c2dddf;
  }
  
  &--tertiary {
    background-color: #F8E177;
  }
}

.article-excerpt,
.article-creditation {
  font-size: 1.125rem;
  line-height: 1.4;
  p + p {
    margin-top: 1.5rem;
  }
}

.article-author {
  display: flex;
  flex-wrap: wrap;
  margin-top: 1.5rem;
}

.article-author-img {
  width: 3rem;
  height: 3rem;
  border-radius: 12px;
  background-color: #323232;
  overflow: hidden;
  background-blend-mode: multiply;
  img {
  }

  & + .article-author-info {
    margin-left: 0.5rem;
  }
}

.article-author-info {
  line-height: 1.375;
  dl {
    margin-top: 0.25em;
  }

  dt {
    font-weight: 600;
  }

  dd {
    font-size: 0.875em;
  }
}

.article-category {
  font-weight: 500;
  margin-bottom: 1rem;
  display: block;
  svg {
    max-width: 1.5rem;
    margin-right: .5rem;
    vertical-align: middle;
  }
  
}

.article-podcast-player {
  display: flex;
  align-items: center;
  margin-bottom: 1rem;
  margin-top: 1.25rem;
}

.podcast-play-button {
  width: 2.25rem;
  height: 2.25rem;
  border-radius: 12px;
  border: 0;
  background-color: #000;
  margin-right: .5rem;
  svg {
    max-width: 1rem;
    max-height: 1rem;
    fill: #FFF;
  }
}

.podcast-progression {
  flex: 1;
  height: 8px;
  border-radius: 99em;
  background-color: #D9D4CD;
  background-image: linear-gradient(to right, #F99970 30%, #D9D4CD 30%, #D9D4CD 100%)
}

.podcast-time {
  font-weight: 500;
  font-size: 1.125rem;
  margin-left: .5rem;
}

:focus {
  outline: 0;
}
</style>
<div class="card">
    <div class="card-header">
        <img decoding="async" src="c:\Users\Acer\Downloads\finance img1.jpg" width = 500; height = 250; alt="news-image" id="news-img">
    </div>
    <div class="card-content">
        <h3 id="news-title">Finance</h3>
        <h6 class="news-source" id="news-source">End Gadget 2024</h6>
        <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae
            saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
    </div>
</div>
           
<div class="card">
  <div class="card-header">
      <img decoding="async" src=c:\Users\Acer\Downloads\finance img 2.jpg width = 700; height = 350; alt="news-image" id="news-img">
  </div>
  <div class="card-content">
      <h3 id="news-title">Finance</h3>
      <h6 class="news-source" id="news-source">End Gadget 2024</h6>
      <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae
          saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
  </div>
</div>


<?php
// Include the header
include('includes/header.php');

// Simulated dynamic article data (In real applications, this data should be fetched from a database)
$articles = [
['id' => 1, 'category' => 'Breaking News', 'title' => 'Earthquake Hits City', 'image' => 'earthquake.jpg', 'excerpt' => 'A powerful earthquake struck the city, causing widespread damage.'],
['id' => 2, 'category' => 'Tech', 'title' => 'New Smartphone Launched', 'image' => 'smartphone.jpg', 'excerpt' => 'A new smartphone model was unveiled with cutting-edge technology and features.'],
['id' => 3, 'category' => 'Sports', 'title' => 'Local Team Wins Championship', 'image' => 'sports.jpg', 'excerpt' => 'The local football team won the national championship in a thrilling final match.'],
// Add more articles as needed
];

// Get unique categories
$categories = array_unique(array_column($articles, 'category'));

// Render the homepage with categories and articles
?>

<main class="home-page">
<!-- Slider Section -->
<section class="slider">
<div class="slider-wrapper">
    <div class="slide">
        <img src="C:\Users\Acer\Downloads\EARTHQUAKE DESTRORY IMG1.jpg" widh=300px; height=300px; alt="Earthquake News">
        <div class="slide-caption">
            <h2><a href="article.php?id=1">Earthquake Hits City</a></h2>
            <p>A powerful earthquake struck the city...</p>
        </div>
    </div>
    <div class="slide">
        <img src="C:\Users\Acer\Downloads\smart phone lunch img 1.jpg" width=400px; height="200px" alt="Tech News">
        <div class="slide-caption">
            <h2><a href="article.php?id=2">New Smartphone Launched</a></h2>
            <p>Revolutionary features in the latest model...</p>
        </div>
    </div>
    <div class="slide">
        <img src="assets/images/sports_slider.jpg" alt="Sports News">
        <div class="slide-caption">
            <h2><a href="article.php?id=3">Local Team Wins Championship</a></h2>
            <p>The city celebrates as their team wins the cup...</p>
        </div>
    </div>
</div>
</section>

<!-- Categories Section -->
<section class="article-categories">
<?php foreach ($categories as $category): ?>
    <div class="category-section">
        <h2 class="category-title"><?= $category ?></h2>
        <div class="category-articles">
            <?php
            // Display articles based on category
            foreach ($articles as $article) {
                if ($article['category'] == $category) {
                    echo '<div class="final project">';
                    echo '<a href="article.php?id=' . $article['id'] . '">';
                    echo '<img src="assets/images/' . $article['image'] . '" alt="' . $article['title'] . '" class="article-image">';
                    echo '<h3>' . $article['title'] . '</h3>';
                    echo '<p>' . $article['excerpt'] . '</p>';
                    echo '</a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
<?php finalproject; ?>
</section>
</main>

<?php
// Include the footer
include('includes/footer.php');
?>

<div class="header-middle">
    <a href="#" class="header-link">Call Us (948) 348 981 872</a>
    
    <a href="#" class="header-link">vindiyanid@gmail.com</a>
  </div>


  <?php
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='news-article'>";
        echo "<div class='title'>" . htmlspecialchars($row["title"]) . "</div>";
        echo "<div class='summary'>" . htmlspecialchars($row["summary"]) . "</div>";
        echo "<div class='date'>" . date('F d, Y', strtotime($row["published_date"])) . "</div>";
        echo "</div>";
    }
} else {
    echo "No news articles available.";
}
$conn->close();
?>

<footer>
        <div class="container">
            <p>&copy; 2024 News Today. All rights reserved.</p>
        </div>
    </footer>



</body>
</html>
