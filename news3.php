<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>News | Login & Registration</title>
</head>
<body>
  
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Home</a></li>
                <li><a href="#" class="link active">Finance</a></li>
                <li><a href="#" class="link activ">Blog</a></li>
                <li><a href="#" class="link active">Education</a></li>
                <li><a href="#" class="link active">Sport</a></li>
                <li><a href="#" class="link active">Services</a></li>
                <li><a href="#" class="link active">About Us</a></li>
                <li><a href="#" class="link active">Privancy Police</a></li>
            </ul>

<div class="search-bar flex">
    
             <button id="search-button" class="search-button">Search</button>
            </div>
        </div>
    </nav>
    
    
    <!-- carousel -->
    <div class="carousel">
      <!-- list item -->
      <div class="list">
          <div class="item">
              <img src="">
              <div class="content">
                  <div class="author">NBS</div>
                  <div class="title">NEWS WEBSITE</div>
                  <div class="topic">NBC NEWS</div>
                  <div class="des">
                      <!-- lorem 50 -->
                      NBC News is a prominent American news outlet delivering reliable, up-to-date coverage of global and national events. Known for its comprehensive reporting, NBC News covers politics, business, entertainment, health, and more, offering breaking news, investigative stories, and in-depth analysis. It provides news across multiple platforms, ensuring accessibility and credibility for its audience.
                  </div>
                  <div class="buttons">
                      <button>SEE MORE</button>
                      <button>SUBSCRIBE</button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="image/img2.jpg">
              <div class="content">
                  <div class="author">NBC</div>
                  <div class="title">NEWS WEBSITE</div>
                  <div class="topic">NBS NEWS</div>
                  <div class="des">
                    NBC News is a prominent American news outlet delivering reliable, up-to-date coverage of global and national events. Known for its comprehensive reporting, NBC News covers politics, business, entertainment, health, and more, offering breaking news, investigative stories, and in-depth analysis. It provides news across multiple platforms, ensuring accessibility and credibility for its audience.
                  </div>
                  <div class="buttons">
                      <button>SEE MORE</button>
                      <button>SUBSCRIBE</button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="image/img3.jpg">
              <div class="content">
                  <div class="author">NBC</div>
                  <div class="title">NEWS WEBSITE</div>
                  <div class="topic">NBS NEWS</div>
                  <div class="des">
                    NBC News is a prominent American news outlet delivering reliable, up-to-date coverage of global and national events. Known for its comprehensive reporting, NBC News covers politics, business, entertainment, health, and more, offering breaking news, investigative stories, and in-depth analysis. It provides news across multiple platforms, ensuring accessibility and credibility for its audience.
                  </div>
                  <div class="buttons">
                      <button>SEE MORE</button>
                      <button>SUBSCRIBE</button>
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="image/img4.jpg">
              <div class="content">
                  <div class="author">NBC</div>
                  <div class="title">NEWS WEBSITE</div>
                  <div class="topic">NBS NEWS</div>
                  <div class="des">
                    NBC News is a prominent American news outlet delivering reliable, up-to-date coverage of global and national events. Known for its comprehensive reporting, NBC News covers politics, business, entertainment, health, and more, offering breaking news, investigative stories, and in-depth analysis. It provides news across multiple platforms, ensuring accessibility and credibility for its audience.
                  </div>
                  <div class="buttons">
                      <button>SEE MORE</button>
                      <button>SUBSCRIBE</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- list thumnail -->
      <div class="thumbnail">
          <div class="item">
              <img src="C:\Users\Acer\Downloads\newsupdate.jpg">
              <div class="content">
                  <div class="title">
                      
                  </div>
                  <div class="description">
                      
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="C:\Users\Acer\Downloads\news update img 2.jfif">
              <div class="content">
                  <div class="title">
                      
                  </div>
                  <div class="description">
                      
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="C:\Users\Acer\Downloads\news update img 3.jpg">
              <div class="content">
                  <div class="title">
                      
                  </div>
                  <div class="description">
                      
                  </div>
              </div>
          </div>
          <div class="item">
              <img src="C:\Users\Acer\Downloads\news update img 4.jfif">
              <div class="content">
                  <div class="title">
                      
                  </div>
                  <div class="description">
                      
                  </div>
              </div>
          </div>
      </div>
     
    <style>
    
    body{
        margin: 0;
        background-color: #000;
        color: #eee;
        font-family: Poppins;
        font-size: 12px;
    }
    a{
        text-decoration: none;
    }
    header{
        width: 1140px;
        max-width: 80%;
        margin: auto;
        height: 50px;
        display: flex;
        align-items: center;
        position: relative;
        z-index: 100;
    }
    header a{
        color: #eee;
        margin-right: 40px;
    }
    /* carousel */
    .carousel{
        height: 100vh;
        margin-top: -50px;
        width: 100vw;
        overflow: hidden;
        position: relative;
    }
    .carousel .list .item{
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0 0 0 0;
    }
    .carousel .list .item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .carousel .list .item .content{
        position: absolute;
        top: 20%;
        width: 1140px;
        max-width: 80%;
        left: 50%;
        transform: translateX(-50%);
        padding-right: 30%;
        box-sizing: border-box;
        color: #fff;
        text-shadow: 0 5px 10px #0004;
    }
    .carousel .list .item .author{
        font-weight: bold;
        letter-spacing: 10px;
    }
    .carousel .list .item .title,
    .carousel .list .item .topic{
        font-size: 5em;
        font-weight: bold;
        line-height: 1.3em;
    }
    .carousel .list .item .topic{
        color: #f1683a;
    }
    .carousel .list .item .buttons{
        display: grid;
        grid-template-columns: repeat(2, 130px);
        grid-template-rows: 40px;
        gap: 5px;
        margin-top: 20px;
    }
    .carousel .list .item .buttons button{
        border: none;
        background-color: #eee;
        letter-spacing: 3px;
        font-family: Poppins;
        font-weight: 500;
    }
    .carousel .list .item .buttons button:nth-child(2){
        background-color: transparent;
        border: 1px solid #fff;
        color: #eee;
    }
    /* thumbail */
    .thumbnail{
        position: absolute;
        bottom: 50px;
        left: 50%;
        width: max-content;
        z-index: 100;
        display: flex;
        gap: 20px;
    }
    .thumbnail .item{
        width: 150px;
        height: 220px;
        flex-shrink: 0;
        position: relative;
    }
    .thumbnail .item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
    }
    .thumbnail .item .content{
        color: #fff;
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
    }
    .thumbnail .item .content .title{
        font-weight: 500;
    }
    .thumbnail .item .content .description{
        font-weight: 300;
    }
    /* arrows */
    .arrows{
        position: absolute;
        top: 80%;
        right: 52%;
        z-index: 100;
        width: 300px;
        max-width: 30%;
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .arrows button{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #eee4;
        border: none;
        color: #fff;
        font-family: monospace;
        font-weight: bold;
        transition: .5s;
    }
    .arrows button:hover{
        background-color: #fff;
        color: #000;
    }
    
    /* animation */
    .carousel .list .item:nth-child(1){
        z-index: 1;
    }
    
    /* animation text in first item */
    
    .carousel .list .item:nth-child(1) .content .author,
    .carousel .list .item:nth-child(1) .content .title,
    .carousel .list .item:nth-child(1) .content .topic,
    .carousel .list .item:nth-child(1) .content .des,
    .carousel .list .item:nth-child(1) .content .buttons
    {
        transform: translateY(50px);
        filter: blur(20px);
        opacity: 0;
        animation: showContent .5s 1s linear 1 forwards;
    }
    @keyframes showContent{
        to{
            transform: translateY(0px);
            filter: blur(0px);
            opacity: 1;
        }
    }
    .carousel .list .item:nth-child(1) .content .title{
        animation-delay: 1.2s!important;
    }
    .carousel .list .item:nth-child(1) .content .topic{
        animation-delay: 1.4s!important;
    }
    .carousel .list .item:nth-child(1) .content .des{
        animation-delay: 1.6s!important;
    }
    .carousel .list .item:nth-child(1) .content .buttons{
        animation-delay: 1.8s!important;
    }
    /* create animation when next click */
    .carousel.next .list .item:nth-child(1) img{
        width: 150px;
        height: 220px;
        position: absolute;
        bottom: 50px;
        left: 50%;
        border-radius: 30px;
        animation: showImage .5s linear 1 forwards;
    }
    @keyframes showImage{
        to{
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0;
        }
    }
    
    .carousel.next .thumbnail .item:nth-last-child(1){
        overflow: hidden;
        animation: showThumbnail .5s linear 1 forwards;
    }
    .carousel.prev .list .item img{
        z-index: 100;
    }
    @keyframes showThumbnail{
        from{
            width: 0;
            opacity: 0;
        }
    }
    .carousel.next .thumbnail{
        animation: effectNext .5s linear 1 forwards;
    }
    
    @keyframes effectNext{
        from{
            transform: translateX(150px);
        }
    }
    
    /* running time */
    
    .carousel .time{
        position: absolute;
        z-index: 1000;
        width: 0%;
        height: 3px;
        background-color: #f1683a;
        left: 0;
        top: 0;
    }
    
    .carousel.next .time,
    .carousel.prev .time{
        animation: runningTime 3s linear 1 forwards;
    }
    @keyframes runningTime{
        from{ width: 100%}
        to{width: 0}
    }
    
    
    /* prev click */
    
    .carousel.prev .list .item:nth-child(2){
        z-index: 2;
    }
    
    .carousel.prev .list .item:nth-child(2) img{
        animation: outFrame 0.5s linear 1 forwards;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    @keyframes outFrame{
        to{
            width: 150px;
            height: 220px;
            bottom: 50px;
            left: 50%;
            border-radius: 20px;
        }
    }
    
    .carousel.prev .thumbnail .item:nth-child(1){
        overflow: hidden;
        opacity: 0;
        animation: showThumbnail .5s linear 1 forwards;
    }
    .carousel.next .arrows button,
    .carousel.prev .arrows button{
        pointer-events: none;
    }
    .carousel.prev .list .item:nth-child(2) .content .author,
    .carousel.prev .list .item:nth-child(2) .content .title,
    .carousel.prev .list .item:nth-child(2) .content .topic,
    .carousel.prev .list .item:nth-child(2) .content .des,
    .carousel.prev .list .item:nth-child(2) .content .buttons
    {
        animation: contentOut 1.5s linear 1 forwards!important;
    }
    
    @keyframes contentOut{
        to{
            transform: translateY(-150px);
            filter: blur(20px);
            opacity: 0;
        }
    }
    @media screen and (max-width: 678px) {
        .carousel .list .item .content{
            padding-right: 0;
        }
        .carousel .list .item .content .title{
            font-size: 30px;
        }
    }
  </style>





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
<html>
    <head>
    <title>Welcome to news channel</title>
    	<link rel="stylesheet" type="text/css" href="design/style.css">
    </head>
    <body>
    
    	<div class="container">
    
    		<div class="welcome">
    			<h1>Latest news</h1>
    			<p>Welcome to the demo news site. <em>We never stop until you are aware.</em></p>
    		</div>
    
    		<div class="news-box">
    
    			<div class="news">
    				<h2><a href="read-news.php?newsid=1">First news title here</a></h2>
    				<p> This news short description will be displayed at this particular place. This news short description will be displayed at this particular place.</p>
    				<span>published on Jan, 12th 2015 by zooboole</span>
    			</div>
    
    			<div class="news">
    				<h2><a href="read-news.php?newsid=2">Second news title here</a></h2>
    				<p>This news short description will be displayed at this particular place. This news short description will be displayed at this particular place.</p>
    				<span>published on November, 12th 2024 by vindya</span>
    			</div>
    
    			<div class="news">
    				<h2><a href="read-news.php?newsid=3">Thirst news title here</a></h2>
    				<p>This news short description will be displayed at this particular place. This news short description will be displayed at this particular place.</p>
    				<span>published on November, 12th 2024 by vindya</span>
    			</div>
    
    			<div class="news">
    				<h2><a href="read-news.php?newsid=4">Fourth news title here</a></h2>
    				<p>This news short description will be displayed at this particular place. This news short description will be displayed at this particular place.</p>
    				<span>published on November, 12th 2024 by vindya</span>
    			</div>
    
    		</div>
        <main>
          <div class="container">
              <!-- Breaking News Section -->
              <section class="breaking-news">
                  <h2>Breaking News</h2>
                  <article>
                      <h3>Breaking: Major Event in the World</h3>
                      <p>Details about the major event happening right now...</p>
                  </article>
              </section>
              
      <div class="arrows">
        <button id="prev"></button>
        <button id="next">></button>
    </div>
    
      <!-- time running -->
      <div class="time"></div>
  </div>

  <script src="app.js"></script>
        <h1>Latest News</h1>

        <div class="news-item">
                        <img src="" alt="News Image 1">
                        <div class="content">
                            <h3><a href="#">Breaking News: Global Economy on the Rise</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero...</p>
                            <a href="#" class="read-more">Read more...</a>
                        </div>
                    </div>
        
                    <div class="news-item">
                        <img src="" alt="News Image 2">
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
                        <img src=""alt="News Image 3">
                        <div class="content">
                            <h3><a href="#">Sports: The Biggest Wins of the Year</a></h3>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae...</p>
                            <a href="#" class="read-more">Read more...</a>
                        </div>
                    </div>
        
                </div>
            </div>
    
<style>
  body
 {
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
  @media (min-width: 1200px) {
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

<hr>

<main>
    <section class = "main-container-left">
        <h2>Top Stories</h2>
        <div class = "container-top-left">
            <article>
                <img src = "images/top-left.jpg">

                <div>
                    <h3>Best Used Cars Under $20, 000 for families</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea sint, nisi rem earum fugit? Facere veritatis sapiente eveniet quibusdam.</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>
        </div>

        <div class = "container-bottom-left">
            <article>
                <img src = "images/bottom-left-1.jpg">
                <div>
                    <h3>Best smart speakers for the year</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>

            <article>
                <img src = "images/bottom-left-2.jpg">
                <div>
                    <h3>iPad Pro, reviewed: Has the iPad become my main computer now?</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>
        </div>
    </section>

    <section class = "main-container-right">
        <h2>Latest Stories</h2>
        
        <article>
            <h4>just in </h4>
            <div>
                <h2>Here's how to track your stimulus check with the IRS Get My Payment Portal</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "images/right-1.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>The best outdoor games to play with your family</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "images/right-2.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>Why walk? Check out the best electric scooters and e-bikes for 2020</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "images/right-3.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>Disneyland Paris will stream its Lion King stage show Friday night</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "images/right-4.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>Looking at a phone's lock screen also requries a warrant, judge rules</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "images/right-5.jpg">
        </article>
    </section>
</main>



        <div class = "footer-right">
            <h2>Newletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, autem!</p>

            <div>
                <input type = "text" placeholder = "Email Address">
                <i class = "fas fa-envelope"></i>
            </div>
        </div>
    </div>

   
<?php

include('FInal.php');


$articles = [
['id' => 1, 'category' => 'Breaking News', 'title' => 'Earthquake Hits City', 'image' => 'earthquake.jpg', 'excerpt' => 'A powerful earthquake struck the city, causing widespread damage.'],
['id' => 2, 'category' => 'Tech', 'title' => 'New Smartphone Launched', 'image' => 'smartphone.jpg', 'excerpt' => 'A new smartphone model was unveiled with cutting-edge technology and features.'],
['id' => 3, 'category' => 'Sports', 'title' => 'Local Team Wins Championship', 'image' => 'sports.jpg', 'excerpt' => 'The local football team won the national championship in a thrilling final match.'],

];


$categories = array_unique(array_column($articles, 'category'));


?>

<main class="home-page">

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
                    echo '<div class="article">';
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
<?php endforeach; ?>
</section>
</main>

<?php
// Include the footer
include('Final.php');
?>




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

    <div class="page2">
      <div class="news" id="sportsNews">
          <div class="title">
              <h2>Finance News</h2>
          </div>
          <div class="newsBox">
          </div>
      </div>
      <div class="news" id="businessNews">
          <div class="title">
              <h2>Sport News</h2>
          </div>
          <div class="newsBox">
          </div>
      </div>
      <div class="news" id="techNews">
          <div class="title">
              <h2>Education News</h2>
          </div>
          <div class="newsBox">
          </div>
      </div>
  </div>

  <div class="footer">
      <div class="box">
          <div class="left">
              <div class="categories">
                  <p>Categories</p>
                  <div>
                      <p>Finance</p>
                  </div>
                  <div>
                      <p>Sports</p>
                  </div>
                  <div>
                      <p>Education</p>
                  </div>
              </div>
              
              <div class="contactUs">
                  <div class="contact">
                      <p>Contact Us</p>
                      <div>Phone No. - <span>9876543210</span></div>
                      <div>Email - <span>nbc@gmail.com</span></div>
                      <div>Address - <span>Kandy, Sri Lanka</span></div>
                  </div>
                  <div class="icon">
                      <i class="fa-brands fa-square-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-youtube"></i>
                  </div>
              </div>
          </div>
          <div class="right">
              <div class="newsletter">
                  <p>Subscribe to Our Newsletter</p>
                  <div class="email">
                      <input type="email" placeholder="Enter Your Email Here">
                      <button>Subscribe</button>

                  </div>
              </div>
          </div>
      </div>
      <div class="copyrights">
          Copyrights &copy; 2024 Coders Villa
      </div>
  </div>


  


  <script src="./index.js"></script>

<script>
  let breakingImg = document.querySelector('#breakingImg')
let breakingNews_title = document.querySelector('#breakingNews .title')
let breakingNews_desc = document.querySelector('#breakingNews .description')
let topNews = document.querySelector('.topNews')
let sportsNews = document.querySelector('#sportsNews .newsBox')
let businessNews = document.querySelector('#businessNews .newsBox')
let techNews = document.querySelector('#techNews .newsBox')

let header = document.querySelector('.header')
let toggleMenu = document.querySelector('.bar')
let menu = document.querySelector('nav ul')

const toggle = (e)=>{
  toggleMenu.classList.toggle('active')
  menu.classList.toggle('activeMenu')
}

toggleMenu.addEventListener('click',toggle)



window.addEventListener('scroll',()=>{
  if(window.scrollY>50){
      header.classList.add('sticky')
  }
  else{
      header.classList.remove('sticky')
  }
})







// fetching news data from a website providing api

const apiKey = "29f8e42efe874ee2be23f0d1edb6844b"

const fetchData = async (category,pageSize)=>{
  const url = `https://newsapi.org/v2/top-headlines?country=us&category=${category}&pageSize=${pageSize}&apiKey=${apiKey}`
  const data = await fetch(url)
  const response = await data.json()
  console.log(response);
  return response.articles
  
}
// fetchData('general',5)

//adding breaking news

const add_breakingNews = (data)=>{
  breakingImg.innerHTML = `<img src=${data[0].urlToImage} alt="image">`
  breakingNews_title.innerHTML = `<a href=${data[0].url} target="_blank"><h2>${data[0].title}</h2></a>`
  breakingNews_desc.innerHTML = `${data[0].description}`
}
fetchData('general',5).then(add_breakingNews)

const add_topNews = (data)=>{
  let html = ''
  let title = ''
  data.forEach((element)=>{
      if (element.title.length<100){
          title = element.title
      }
      else{
          title = element.title.slice(0,100) + "..."
      }

      html += `<div class="news">
                  <div class="img">
                      <img src=${element.urlToImage} alt="image">
                  </div>
                  <div class="text">
                      <div class="title">
                      <a href=${element.url} target="_blank"><p>${title}</p></a>
                      </div>
                  </div>
              </div>`
  })
  topNews.innerHTML = html
}
fetchData('general',20).then(add_topNews)

const add_sportsNews = (data)=>{
  let html = ''
  let title = ''
  data.forEach((element)=>{
      if (element.title.length<100){
          title = element.title
      }
      else{
          title = element.title.slice(0,100) + "..."
      }

      html += `<div class="newsCard">
                  <div class="img">
                      <img src=${element.urlToImage} alt="image">
                  </div>
                  <div class="text">
                      <div class="title">
                      <a href=${element.url} target="_blank"><p>${title}</p></a>
                      </div>
                  </div>
              </div>`
  })
  sportsNews.innerHTML = html
}
fetchData('sports',5).then(add_sportsNews)
const add_businessNews = (data)=>{
  let html = ''
  let title = ''
  data.forEach((element)=>{
      if (element.title.length<100){
          title = element.title
      }
      else{
          title = element.title.slice(0,100) + "..."
      }

      html += `<div class="newsCard">
                  <div class="img">
                      <img src=${element.urlToImage} alt="image">
                  </div>
                  <div class="text">
                      <div class="title">
                      <a href=${element.url} target="_blank"><p>${title}</p></a>
                      </div>
                  </div>
              </div>`
  })
  businessNews.innerHTML = html
}
fetchData('business',5).then(add_businessNews)
const add_techNews = (data)=>{
  let html = ''
  let title = ''
  data.forEach((element)=>{
      if (element.title.length<100){
          title = element.title
      }
      else{
          title = element.title.slice(0,100) + "..."
      }

      html += `<div class="newsCard">
                  <div class="img">
                      <img src=${element.urlToImage} alt="image">
                  </div>
                  <div class="text">
                      <div class="title">
                      <a href=${element.url} target="_blank"><p>${title}</p></a>
                      </div>
                  </div>
              </div>`
  })
  techNews.innerHTML = html
}
fetchData('technology',5).then(add_techNews)
</script>
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
}
body{
  background-color: #EAB8D1;
  font-family: 'Ubuntu', sans-serif;
  width: 100%;
  min-height: 100vh;
  color: #fff;
  overflow-y: overlay;
}

::-webkit-scrollbar{
  width: 8px;
}
::-webkit-scrollbar-track{
  background-color: transparent;
}
::-webkit-scrollbar-thumb{
  background-color: #999;
  border-radius: 100px;
}
.topHeadlines .right .topNews::-webkit-scrollbar{
  width: 6px;
}
.topHeadlines .right .topNews::-webkit-scrollbar-thumb{
  background-color: #777;
}


.header{
  position: fixed;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 20px 50px;
  background-color: #0b0b11;
  transition: 0.3s;
}
.header.sticky{
  padding-block: 10px;
  box-shadow: inset 0 -1.5px 3px rgba(255,255,255,0.3);
}
.logo{
  font-size: 45px;
  font-weight: 700;
  cursor: pointer;
}
nav ul{
  display: flex;
}
nav div.bar{
  display: none;
  position: absolute;
  right: 80px;
  margin-top: -10px;
  font-size: 25px;
  cursor: pointer;
}
nav div.bar.active .open{
  display: none;
}
nav div.bar .close{
  display: none;
}
nav div.bar.active .close{
  display: initial;
}

nav ul li{
  list-style: none;
  margin: 0 15px;
  padding: 0 10px;
  border-left: 1px solid #fff0;
  border-right: 1px solid #fff0;
  transition: 0.3s;
}
nav ul li:hover{
  border-left: 1px solid #fff;
  border-right: 1px solid #fff;
}
nav ul li a{
  text-decoration: none;
  color: #fff;
  letter-spacing: 1px;
}
.topHeadlines{
  padding: 100px 50px 50px;
  width: 100%;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
}
.topHeadlines .left{
  padding: 10px 30px;
}
.topHeadlines .left > .title{
  font-size: 20px;
  padding: 15px;
  text-align: center;
}
.topHeadlines .left .img{
  width: 100%;
  height: 400px;
  background-color: #a04;
}
.topHeadlines .left .img img{
  width: 100%;
  height: 100%;
}
.topHeadlines .left .text{
  padding: 20px 15px 10px;
}
.topHeadlines .left .text .title a{
  text-decoration: none;
}
.topHeadlines .left .text .title a h2{
  font-size: 20px;
  color: #fff;
  letter-spacing: 1px;
  display: inline;
  cursor: pointer;
}
.topHeadlines .left .text .title a h2:hover{
  text-decoration: underline;
}
.topHeadlines .left .text .description{
  font-size: 15px;
  margin-top: 10px;
  color: #aaa;
  letter-spacing: 1px;
}
.topHeadlines .right{
  padding: 10px;
  width: 1005;
  height: 500px;
}
.topHeadlines .right > .title{
  font-size: 20px;
  padding: 15px;
  text-align: center;
}
.topHeadlines .right .topNews{
  padding: 7px;
  height: 85%;
  border: 1px solid #fff;
  border-radius: 4px;
  overflow-y: scroll;
}
.topHeadlines .right .topNews .news{
  display: grid;
  grid-template-columns: auto auto;
  align-items: center;
  margin-bottom: 20px;
}
.topHeadlines .right .topNews .news .img{
  width: 170px;
  height: 100%;
  max-height: 120px;
  min-height: 90px;
  background-color: #a04;
}
.topHeadlines .right .topNews .news .img img{
  width: 100%;
  height: 100%;
}
.topHeadlines .right .topNews .news .text{
  margin-inline: 10px;
  display: flex;
  align-items: center;
}
.topHeadlines .right .topNews .news .text .title a{
  text-decoration: none;
}
.topHeadlines .right .topNews .news .text .title a p{
  color: #fff;
  display: inline;
}
.topHeadlines .right .topNews .news .text .title a p:hover{
  text-decoration: underline;
}
.page2{
  width: 100%;
  background-color: #16161d;
  min-height: 100vh;
  padding: 50px;
}
.page2 .news{
  padding: 30px 0;
  border-bottom: 1px solid #555;
}
.page2 .news:last-child{
  padding: 30px 0;
  border-bottom: none;
}
.page2 .news > .title h2{
  font-size: 40px;
  cursor: pointer;
  display: inline;
}
.page2 .news > .title h2:hover{
  text-decoration: underline;
}
.page2 .news .newsBox{
  width: 100%;
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
}
.page2 .news .newsBox .newsCard{
  width: calc(100% / 5 - 20px); /*20px is the margin given to each card*/
  margin: 10px;
}
.page2 .news .newsBox .newsCard .img{
  width: 100%;
  height: 150px;
  background-color: #a04;
  border-radius: 5px;
}
.page2 .news .newsBox .newsCard .img img{
  width: 100%;
  height: 100%;
  border-radius: 5px;
}
.page2 .news .newsBox .newsCard .text{
  padding: 10px;
}
.page2 .news .newsBox .newsCard .text .title a{
  text-decoration: none;
}
.page2 .news .newsBox .newsCard .text .title a p{
  font-size: 15px;
  color: #fff;
  display: inline;
  cursor: pointer;
}
.page2 .news .newsBox .newsCard .title a p:hover{
  text-decoration: underline;
}

.footer{
  width: 100%;
  padding: 50px 50px 0px;
  background-color: #0a0a18;
  min-height: 200px;
}
.footer .box{
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  justify-content: space-around;
}
.footer .box .left{
  display: flex;
  justify-content: space-around;
  padding-right: 20px;
}
.footer .box .left .categories > p {
  font-size: 28px;
  margin-bottom: 30px;
}
.footer .box .left .categories div{
  margin-bottom: 15px;
  width: max-content;
}
.footer .box .left .categories div p{
  font-size: 20px;
  color: #ddd;
  cursor: pointer;
  padding: 0 10px;
  border-left: 1px solid #fff0;
  border-right: 1px solid #fff0;
  transition: 0.3s;
}
.footer .box .left .categories div p:hover{
  color: #fff;
  border-left: 1px solid #fff;
  border-right: 1px solid #fff;
}
.footer .contact{
  margin-left: 10px;
}
.footer .contact p{
  font-size: 28px;
  margin-bottom: 30px;
}
.footer .contact div{
  font-size: 17px;
  margin-bottom: 15px;
  color: #aaa;
}
.footer .icon{
  margin-top: 20px;
  padding: 20px;
}
.footer .icon i{
  font-size: 25px;
  margin-right: 20px;
  color: #aaa;
  cursor: pointer;
  transition: 0.3s;
}
.footer .icon i:hover{
  color: #fff;
  transform: scale(1.2);
}
.footer .newsletter p{
  font-size: 28px;
  margin-bottom: 30px;
}
.footer .newsletter .email{
  display: flex;
}
.footer .newsletter .email input{
  width: 400px;
  padding: 12px 25px;
  border-radius: 5px;
  border: none;
  outline: none;
  font-size: 16px;
  margin-right: 20px;
}
.footer .newsletter .email button{
  padding: 10px 25px;
  font-size: 16px;
  font-weight: 600;
  background-color: transparent;
  border-color: #fff;
  border-style: solid;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
.footer .newsletter .email button:hover{
  color: #0a0a18;
  background-color: #fff;
}
.footer .copyrights{
  font-size: 18px;
  text-align: center;
  padding: 20px;
  letter-spacing: 1px;
}

@media (max-width:1024px) {
  .topHeadlines .right .topNews .news .img {
      width: 150px;
  }
  .topHeadlines .right .topNews .news .text .title a p {
      font-size: 14px;
  }
  .page2 .news .newsBox .newsCard .img {
      height: 120px;
  }
  .page2 .news .newsBox .newsCard .text {
      padding: 5px;
  }
  .page2 .news .newsBox .newsCard .text .title a p {
      font-size: 14px;
  }
  .footer .box .left .categories > p {
      font-size: 25px;
  }
  .footer .contact p {
      font-size: 25px;
  }
  .footer .newsletter p {
      font-size: 25px;
  }
  .footer .newsletter .email input {
      width: 300px;
  }
  .footer .newsletter .email button {
      padding: 10px 20px;
      font-size: 14px;
  }
  .footer .box .left .categories div p {
      font-size: 18px;
  }
  .footer .contact div {
      font-size: 15px;
  }
}
@media (max-width:768px) {
  nav div.bar{
      display: block;
  }
  nav ul {
      opacity: 0;
      position: absolute;
      background-color: #0b0b11;
      flex-direction: column;
      right: 0px;
      padding: 30px 30px 10px;
      text-align: center;
      pointer-events: none;
      border-radius: 10px;
  }
  nav ul.activeMenu {
      opacity: 1;
      pointer-events: all;
  }
  nav ul li{
      margin: 10px 0;
  }
  .topHeadlines {
      display: block;
  }
  .topHeadlines .right .topNews .news .img {
      width: 220px;
  }
  .topHeadlines .right .topNews .news .text .title a p {
      font-size: 18px;
  }
  .page2 .news .newsBox .newsCard {
      width: calc(100% / 3 - 20px);
  }
  .footer .box {
      grid-template-columns: none;
  }
  .footer .box .right{
      grid-row-start: 1;
      margin-bottom: 40px;
  }
  .footer .newsletter .email input {
      width: 400px;
  }
  .footer .box .left {
      justify-content: space-between;
  }
}
@media (max-width:600px) {
  .logo {
      font-size: 35px;
  }
  .topHeadlines .left {
      padding: 10px 0px;
  }
  .topHeadlines .right .topNews .news .img {
      width: 150px;
  }
  .topHeadlines .right .topNews .news .text .title a p {
      font-size: 14px;
  }
  .page2 .news .newsBox .newsCard {
      width: calc(100% / 2 - 20px);
  }
  .footer .newsletter .email input {
      width: 300px;
      font-size: 14px;
  }
  .footer .newsletter .email button {
      padding: 8px 15px;
      font-size: 14px;
  }
  .footer .newsletter p {
      font-size: 22px;
  }
  .footer .box .left .categories > p {
      font-size: 22px;
  }
  .footer .contact p {
      font-size: 22px;
  }
  .footer .copyrights {
      font-size: 14px;
  }
}
@media (max-width:425px) {
  nav div.bar {
      right: 50px;
  }
  nav ul {
      padding: 30px 10px 10px;
  }
  nav ul li {
      margin: 5px 0px;
  }
  nav ul li a {
      font-size: 14px;
  }
  .topHeadlines {
      padding: 100px 20px 50px;
  }
  .page2 {
      padding: 50px 20px;
  }
  .page2 .news .newsBox .newsCard {
      width: 100%;
      display: grid;
  }
  .page2 .news > .title h2 {
      font-size: 30px;
  }
  .page2 .news .newsBox .newsCard .img{
      height: 100%;
      min-height: 150px;
  }
  .page2 .news .newsBox .newsCard .text .title a p {
      font-size: 16px;
  }
  .footer .newsletter .email {
      display: block;
  }
  .footer .newsletter .email button {
      margin-top: 15px;
  }
  
}
</style>

</body>
</html>
org home pag cod