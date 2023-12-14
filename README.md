<h1>Something new in this project:</h1>

<h3>1. A cover page: index.html, style-index.css, js-index.js</h3>

<p>Move the mouse, where the mouse goes to will be "lighted". Click on anywhere on the screen, the page to jump to the home.html page.</p>

<h3>2. Signup and Login window and functionality: home.html, home-signup-success.html, home-login-success.html, style-signup&login.css, js-signup&login.js, php-database.php, php-signup.php, php-login.php, php-logout.php, cmac240_final_signup_login_form.sql</h3>

<p>Click "Sign up" or "Log in" on the upper left of the page and fill in the information as instructed.</p>
<p><strong>Note:</strong> Due to time limit, only the home.html page was successfully set up the signup and login functionality. Any signup or login from pages other than home.html will not be transmitted to the server.</p>

<h3>3. Text posts posting and displaying functionality: PLC.html, js-PLC.js</h3>

<p>Open the PLC.html page, enter the title and post content in the title and post textarea respectively, and click "Post". Title and post content cannot be blank, otherwise an alert will pop up. After posting, your new post with post title and date will show up below at the "Recently Posted" area. Click "Clear" to clear all text input.</p>

<h3> 4. A detailed page about an article under the PLC with commenting functionality: PLC-article.html, style-PLC-article.css, js-PLC-article.js</h3>

<p>Entering the page can be achieved either by (1) opening PLC-article.html directly or (2) clicking the last post "Whiskers in the Wild: A Tale of Taming Tigers and Untamed Hearts" under "Hoy Posts" area in PLC.html.</p>
<p> After entering the page, clicking "Pet Lover Community" on the left top (above the image) will redirect you to the PLC.html.</p>
<p>Post your comment using the comment input box in the comments area. The method is the same as the text posts.</p>

<h3> 5. Other fixed problems and details</h3>
<ul>
  <li>Solved the problem of unproperly located header</li>
  <li>Solved the problem of uncentered background image on home.html </li>
  <li>Give a frame for the main content in PLC-article.html</li>
</ul>

<h1>How to run the Signup and Login functionality using PHP:</h1>
<p>To successfully run the code of Signup and Login functionality and use it, a PHP environment needs to be established, which requires one external tool XAMPP and two extensions in Visual Studio Code to be installed.</p>

<p>To set up the PHP environment:</p>

<h2>1. Install XAMPP and run it</h2>
<p>1. Download <a href="https://www.apachefriends.org/">XAMPP</a> and install it.</p>
<p>2. Open "xampp-control.exe" in your local xampp file.</p>
<p>3. Click "Start" under the "Actions" for the first two module "Apache" and "MySQL". Once start it, you will see the PIDs and Ports they are connected to.</p>

<h2>2. Install Two Extensions in VS code</h2>
<p>1. Open Visual Studio Code.</p>
<p>2. Search "PHP Intelephense" in VS Code Extensions and install it.</p>
<p>3. Search "PHP Server" and install it.</p>
<br>

<p>Full videos of how to install <a href="https://www.youtube.com/watch?v=BLY4nEyGe5M&t=0s">XAMPP</a> and the <a href="https://www.youtube.com/watch?v=Ry8tRRfxxf4">two extensions in VS code</a> can be accessed using the links.</p>
<br>

<p>To run the code of Signup and Login functionality in your local computer:</p>

<h2>3. Import my MySQL Database to your local phpMyAdmin</h2>
<p>1. In your "xampp-control.exe", click "Admin" of the module "MySQL". A page with the address "/localhost/phpmyadmin/index.php" should be opened.</p>
<p>2. Click the "Import" from the horizontal menu bar on that page.</p>
<p>3. From GitHub repository, find my file called "cmac240_final_signup_login_form.sql" and import it.</p>
<p>4. The database for storing the user data is ready.</p>

<h2>4. Run the Signup and Login code in VS Code</h2>
<p>1. In your local xampp file, find "htdocs" file and open it.</p>
<p>2. Start a new folder and download my Final Project file package from GitHub repository to it.</p>
<p><strong>Important:</strong> Only files inside "htdocs" can be run from the server, which means, can be connected to the database. If you have the same documents in another file but meanwhile in htdocs, that is OK; but if you merely have documents in another file other than htdocs, it will NOT work properly.
<p>3. Open "home.html" in VS code.</p>
<p>4. Right click the mouse and find "PHP Server: Serve project" and click it. A page with the address "/localhost:3000" should be opened. If your VS Code says "Server is already running" but your page is not open, click "PHP Server: Reload project" or "PHP Server: open file in browser" instead.</p>
<p><strong>Important:</strong> Only webpage will address "/localhost:3000" can run the server and Signup/Login function successfully. If it is not "localhost", it is not from the server, thus the data will not be transmitted to the database. As long as you have documents in "htdocs", the address will automatically be "localhost" once you open it following the instructions.</p>
<p>5. Now you have "home.html" page opened from the server. You can try Signup or Login as it is placed on the page and see what will happen!</p>
