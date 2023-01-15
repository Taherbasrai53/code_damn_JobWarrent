<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JobWarrent</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Unbounded:wght@300;400;600&display=swap"
    rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
     #searchfield
    {
      width: 500px;
      height: 35px;
      border-radius: 5px;
      border: 1px solid white;
    }
  </style>
</head>

<body>
  <!--   navbar -->
  <div class="hero-container">
    <nav class="nav-container">
      <div class="nav-inner-container">
        <h2 class="logo">JobWarrent</h2>
        <div class="nav-list">
          <a class="nav-list-items" href="#">Home</a>
          <a class="nav-list-items" href="./pages/catalog.html">Catalogues</a>
          <a class="nav-list-items" href="#">Contact Us</a>
        </div>
      </div>
      <a href="./pages/join.html" class="nav-btn">Join Now</a>
    </nav>

    <!--     hero -->
    <main class="hero">
      <div class="hero-left">
        <h1>Time spent on hiring is time well spent !</h1>

  <form action="search.php" method="GET">
    <br>
   <input type="text" name="search" id="searchfield">
    <br><br>
    <input type="submit" name="searchbtn" >
  </form>
      </div>
      <div class="hero-right">
        <img src="./images/heroImg.png">
      </div>
    </main>
  </div>

  <!--   issues -->
  <section class="issue-container">
    <div class="issue-inner-container">
      <div class="issue-desc">
        <h2>If you think it's difficult to hire a professional, WAIT !! Us bro us.</h2>
        <p>Today’s digital world has brought everyone closer and has created more opportunities for all!</p>
      </div>
      <div class="issue-img">
        <img src="./images/sad.png">
      </div>
    </div>
    <div class="issue-card-container">
      <div class="issue-card">
        <h3>Employee Handbook</h3>
        <p>Build, update, and customize a state-specific, cloud based employee handbook with one simple tool..</p>
      </div>
      <div class="issue-card">
        <h3>Job description manager</h3>
        <p>2,000+ job descriptions, ready for your customization, complete with team based approvals.</p>
      </div>
      <div class="issue-card">
        <h3>Salary finder</h3>
        <p>Research and compare salaries for over 2,400 job titles; filter based on industry, location, and company size.</p>
      </div>
      <div class="issue-card">
        <h3>Job classification</h3>
        <p>Save time and money, and gain peace of mind that your FLSA practices are in compliance .</p>
      </div>
      <div class="issue-card">
        <h3>Actionable news</h3>
        <p>When new laws or regulations are announced, you’ll be the first to know.</p>
      </div>
      <div class="issue-card">
        <h3>Frauds</h3>
        <p>Not being aware about Identity theft, credit card fraud, and other financial scams can lead to financial
          losses.</p>
      </div>
    </div>
  </section>

  <!--   solutions -->
  <section class="sol-container">
    <div class="sol-inner-container">
      <div class="sol-inner-desc">
        <h2>Welcome to JobWarrent!</h2>
        <p> This is used as the main tool for talent acquistion by lacs of recruiters across all kinds and sizes of industry. 
        “A modern recruiter is one who is targeted, builds relationships and knows how to not only find candidates but also get them to respond!”
– Stacy Donovan Zapar</p>
      </div>
      <div class="sol-inner-img">
        <img src="./images/account.png">
      </div>
    </div>
    <div class="sol-inner-container">
      <div class="sol-inner-img">
        <img src="./images/teaching.png">
      </div>
      <div class="sol-inner-desc">
        <h2>Without data, you are blind and deaf and in the middle of a freeway.”</h2>
        <p>Quickly connect with person who's profile is matched and connectt through chat and get more responses and improve your efficiency by using smart comments , tasks and reminders.</p>
      </div>
    </div>
  </section>

  <!--   testimonials -->
  <section class="testimonials">
    <h2>What our clients say about us.</h2>
    <div class="testimonial-card card-1">
      <div class="testimonial-card-desc">
        <p>  JobWarrent help internal recruiting teams attract and source job candidates to convert into applicants. It offer a variety of features to facilitate recruiting marketing efforts including social recruiting tools, job distribution features, and candidate relationship management (CRM) capabilities. Many of these features are similar to those that support inbound marketing efforts within marketing departments. Organizations use recruitment marketing platforms to market job openings, engage with candidates, nurture their interest, and encourage the submission of applications.</p>
        <h5>- Tahirita Agrawal</h5>
      </div>
      <div class="testimonial-card-img">
        <img src="./images/woman.png">
      </div>
    </div>
    <div class="testimonial-card card-2">
      <div class="testimonial-card-desc">
        <p>"I received lots of deserved candidate when i open my JobWarrent account . I sent Interview Invites from all sort of companies ( Start Up, Service Based Companies, Product Based Companies, Captives, Tech Giant).Being an HR I received lots of  calls.TCS, CTS, Tech Mahindra, MindTree, Capgemini, Accenture, LTI, RS Software,HCL, IBM, Amazon , Microsoft.
If I mention all company names then the list will be really long.
Out of these I provide offer letter / job offer to following Companies — MindTree, RS Software, FIS Global, ABS , ITC Infotech , Deloitte USI, Northern Trust & McAfee. Hence JobWarrent was quite helpful for me."</p>
        <h5>- Sahil Khan</h5>
      </div>
      <div class="testimonial-card-img">
        <img src="images/man.png">
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-list">
      <h5>Company</h5>
      <a href="#">About Us</a>
      <a href="#">Platform Offerings</a>
      <a href="#">Join the Team</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="footer-list">
      <h5>Services</h5>
      <a href="#">Resume Database Access</a>
      <a href="#">Live Chat</a>
      <a href="#">Management Tools</a>
      <a href="#">Job Listings</a>
    </div>
    <div class="footer-list">
      <h5>Explore</h5>
      <a href="#">Catalogues</a>
      <a href="#">Our Solution</a>
      <a href="#">Blog</a>
      <a href="#">Discounts</a>
    </div>
    <div class="footer-list footer-logo">
      <h5>JobWarrent</h5>
      <p>290, A.B. Road</p>
      <p>Indore, India</p>
      <p>hello@finlit.co</p>
      <p>+91-6782909187</p>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>

