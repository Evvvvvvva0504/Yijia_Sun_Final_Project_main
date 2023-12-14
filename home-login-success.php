<?php
// we can log the users in after they submit login form, via storing the user id in a session
// session are used to remember values between browser requests (like a cookie)

////// call the session start function to start the session

session_start(); // this either starts a new session or resume an existing one

////// to display the username of the user after they log in

if (isset($_SESSION['user_id'])) {
    
    $mysqli = require __DIR__ . "/php-database.php";

    $sql = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Yijia Sun's Final Project - Living with Pets (Homepage - Login Successful)</title>
    <link rel="stylesheet" href="style-home.css">
    <link rel="stylesheet" href="style-signup&login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gabarito&family=Indie+Flower&family=Permanent+Marker&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/3b7e74d9e5.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php if (isset($user)) : ?>
        
        <!--if the users login successfully-->
        <header>
            <div class="flex-header">
                <div style="font-family: 'Indie Flower', cursive; font-size: 2.4rem;">Living with Pets</div>
                <div style="margin-left: auto;">Hello <?= htmlspecialchars($user['username']) ?>! To&nbsp;<a href="php-logout.php">Log out</a></div>
            </div>
        </header>

    <?php else: ?>
        
        <!--if not-->
        <p>Login unsuccessful. Please <a href="home.html">try again</a>.</p>
    
    <?php endif; ?>

    <main>
        <div class="grid-title">
            <div class="title">
                <h1 class="main-title">Living with Pets<br></h1>
                <h1 class="sub-titile">Find a Community for You and Your Furkids</h1>
            </div>
            <div class="guide-box"><a href="PE.html">Pet<br> Encyclopedia</a></div>
            <div class="guide-box"><a href="PA.html">Pet<br> Adoption</a></div>
            <div class="guide-box"><a href="PLC.html">Pet<br> Lovers Community</a></div>
        </div>
        
        <h2>Pet Encyclopedia</h2>        
        <div class="flex-for-PE">
            <div class="row">
                <div class="col-1">
                    <a href="PE.html" style="text-decoration: none;">
                        <img src="assets\dogs.jpg" alt="Dogs" width="120px" height="120px">
                        <div class="label">Dogs</div>
                    </a>
                </div>

                <div class="col-2">
                    <a href="PE.html" style="text-decoration:none; color:black">
                        <p>
                            Dogs, often referred to as "man's best friend," are one of the most beloved and diverse 
                            species of domesticated animals. They come in a vast array of breeds, each with its own 
                            unique set of characteristics and personality traits.<br> Known for their unwavering loyalty, 
                            dogs have been cherished companions to humans for centuries. Their roles vary from being 
                            loving family pets to diligent working dogs, and their boundless affection and playful 
                            nature make them an integral part of countless households around the world.<br>
                        </p>
                        <br>
                        <div class="sign">Here you will see...</div>
                        <p>Our beloved dog friends such as
                            <ul class="example">
                                <li>Labrador Retriever</li>
                                <li>German Shepherd</li>
                                <li>Beagle</li>
                                <li>Poodle</li>
                                <li>Shih Tzu</li>
                                <li>Great Dane</li>
                                <li>etc.</li>
                            </ul>
                        </p>
                    </a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-1">
                    <img src="assets\cats.jpg" alt="Cats" width="120px" height="120px">
                    <div class="label">Cats</div>
                </div>

                <div class="col-2">
                    <p>
                        Cats, with their graceful and independent nature, are among the most popular and enigmatic 
                        of domesticated animals. These charming feline companions come in a variety of breeds, 
                        each possessing its own unique traits and characteristics.<br> Known for their agility and 
                        self-sufficiency, cats have been cherished pets for centuries. From their soothing purrs 
                        to their mischievous antics, they bring joy and comfort to countless households worldwide.<br>
                    </p>
                    <br>
                    <div class="sign">Here you will see...</div>
                    <p>Our beloved Cat friends such as
                        <ul class="example">
                            <li>Persian Cat</li>
                            <li>Siamese Cat</li>
                            <li>Maine Coon</li>
                            <li>Poodle</li>
                            <li>Ragdoll</li>
                            <li>Bengal Cat</li>
                            <li>etc.</li>
                        </ul>
                    </p>
                </div>
             </div>
            
             <div class="row">
                <div class="col-1">
                    <img src="assets\small.png" alt="Small" width="120px" height="120px">
                    <div class="label">Small</div>
                </div>

                <div class="col-2">
                    <p>
                        Small pets, often referred to as "pocket pets", are delightful and compact animal companions 
                        that are typically smaller than other animals in size. These diminutive creatures 
                        come in a variety of species, each with its own unique charm and appeal. From tiny rodents 
                        like hamsters and gerbils to petite reptiles such as geckos and turtles, small pets offer 
                        the joys of pet ownership without the space and care requirements of larger animals.<br>
                    </p>
                    <br>
                    <div class="sign">Here you will see...</div>
                    <p>
                        <ul class="example">
                            <li>Rabbit</li>
                            <li>Hamsters</li>
                            <li>Gerbils</li>
                            <li>Guinea Pigs</li>
                            <li>Birds</li>
                            <li>Tarantulas</li>
                            <li>etc.</li>
                        </ul>
                    </p>
                </div>
             </div>
             
             <div class="row">
                <div class="col-1">
                    <img src="assets\scales.jpg" alt="Scales" width="120px" height="120px">
                    <div class="label">Scales</div>
                </div>

                <div class="col-2">
                    <p>
                        Scale pets, typically referred to fish, reptiles and amphibians, are cold-blooded animals 
                        characterized by their unique scales, skin, or shells with a scale-like texture. They come in 
                        a wide array of species, from fascinating reptiles like geckos and snakes to enchanting 
                        amphibians like frogs and salamanders.<br> Recently, they become increasingly popular as pets
                        for individuals who appreciate the beauty of scales and the remarkable adaptations of these animals.<br>
                    </p>
                    <br>
                    <div class="sign">Here you will see...</div>
                    <p>
                        <ul class="example">
                            <li>Fish</li>
                            <li>Geckos</li>
                            <li>Iguanas</li>
                            <li>Turtles</li>
                            <li>Snakes</li>
                            <li>Frogs</li>
                            <li>etc.</li>
                        </ul>
                    </p>
                </div>
             </div>

             <div class="row">
                <div class="col-1">
                    <img src="assets\wild.jpg" alt="Wild" width="120px" height="120px">
                    <div class="label">Wild</div>
                </div>

                <div class="col-2">
                    <p>
                        Wild pets, in the context of responsible pet ownership, typically refer to animals that are 
                        not traditionally considered domesticated but are kept as pets. These animals are distinct 
                        from wildlife found in their natural habitats and may include exotic or non-traditional 
                        species.<br> It should be noted that, Keeping wild pets is subject to legal regulations and 
                        ethical considerations, and it often requires specialized care and knowledge to provide them 
                        with a safe and enriched environment. Hence, prior research and responsible ownership and 
                        dedication is recommended.<br>
                    </p>
                    <br>
                    <div class="sign">Here you will see...</div>
                    <p>
                        <ul class="example">
                            <li>Foxes</li>
                            <li>Wolves</li>
                            <li>Tigers</li>
                            <li>Bears</li>
                            <li>Crocodiles</li>
                            <li>Squirrels</li>
                            <li>etc.</li>
                        </ul>
                    </p>
                </div>
             </div>
        </div>

        <h2>Pet Adoption</h2>
        <div class="flex-for-PA">
            <div class="image">
                <a target="_blank" href="assets\adp1.jpg">
                    <img src="assets\adp1.jpg" alt="Dog for adoption" width="144px" height="180px">
                </a>
                <div class="desc">
                    <div class="name"><strong>Rosie</strong></div>
                    Junior (1 year) | Female<br>
                </div>
            </div>

            <div class="image">
                <a target="_blank" href="assets\adp2.png">
                    <img src="assets\adp2.png" alt="Cat for adoption" width="144px" height="180px">
                </a>
                <div class="desc">
                    <div class="name"><strong>Finn</strong></div>
                    Junior (8 month) | Male<br>
                </div>
            </div>

            <div class="image">
                <a target="_blank" href="assets\ra1.jpg">
                    <img src="assets\ra1.jpg" alt="Rabbit for adoption" width="144px" height="180px">
                </a>
                <div class="desc">
                    <div class="name"><strong>Bella</strong></div>
                    Adult (2 year) | Female<br>
                </div>
            </div>

            <div class="image">
                <a target="_blank" href="assets\adp4.jpg">
                    <img src="assets\adp4.jpg" alt="Bird for adoption" width="144px" height="180px">
                </a>
                <div class="desc">
                    <div class="name"><strong>Willow</strong></div>
                    Adult (3 year) | Female<br>
                </div>
            </div>

            <div class="image">
                <a target="_blank" href="assets\adp5.jpg">
                    <img src="assets\adp5.jpg" alt="Snake for adoption" width="144px" height="180px">
                </a>
                <div class="desc">
                    <div class="name"><strong>Milov</strong></div>
                    Adult (2 year) | Female<br>
                </div>
            </div>

            <a href="PA.html" style="text-decoration: none;">
                <div class="image-side">
                    <h3>Find Your Best Love!</h3>
                </div>
            </a>
        </div>

        <h2>Pet Lovers Community</h2>
        <div class="flex-for-PLC">
            <iframe width="80%" height="500" 
            src="https://www.youtube.com/embed/zFiDVs9GJ9o?si=ucEgd_usXMRyZlqW" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen></iframe>            
            <p>Pet Lovers Community is a place for you and all the pet lovers gathering to learn,
            share, communicate, and create about our beloved pets. Here we support mutual help, 
            Resource sharing, friendly discussion, and inspiring ideas or creation related to pets, 
            animals, as well as the community. We are also a good place for you to connect and engage 
            with one another who share the same enthusiasm with you and build your own pet lovers 
            network. Come and celebrate our love for pets and enhance the their welfare!</p>
            <a href="PLC.html"><input type="button" name="enter" value="Enter"></a>
        </div>
        <div class="vertical-nav">
            <h3>Hot Tutorials</h3>
            <ul>
                <li>
                    <a href="#hot1">
                        <div class="post-title">Puppy Training 101: Building a Strong Foundation for a Well-Behaved Dog</div>
                        <div class="date">11/28/2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.9k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.6k reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot2">
                        <div class="post-title">Training Cats: From Aloof to Obedient - A Comprehensive Guide</div>
                        <div class="date">10/17/2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.5k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1k reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot3">
                        <div class="post-title">Creating a Safe and Cozy Pet Space at Home🎶</div>
                        <div class="date">01/16/2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.8k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;967 reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot4">
                        <div class="post-title">Pet First Aid: Essential Tips for Handling Emergencies</div>
                        <div class="date">07/20/2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.7k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2k reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot5">
                        <div class="post-title">Understanding Pet Behavior: Decoding Your Furry Friend's Signals</div>
                        <div class="date">06/11/2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1k reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot6">
                        <div class="post-title">DIY Pet Toy Workshop: Fun and Frugal Toys for Your Furry Friend</div>
                        <div class="date">04/23/2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;923 reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot7">
                        <div class="post-title">Pet Travel Essentials: Tips for Stress-Free Journeys with Your Pet</div>
                        <div class="date">03/04/2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;875 reposts</div>
                    </a>
                </li>
                <li>
                    <a href="#hot8">
                        <div class="post-title">Indoor Pet Games: Keeping Your Fur Baby Entertained and Active</div>
                        <div class="date">10/03/2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1k likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;712 reposts</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="grid-for-PLC">
            <h3>Frequently Asked Questions in Community:</h3>
            <ol class="questions-group1">
                <li style="margin-top:20px;">
                    <a href="#first">What are the best practices for introducing a new pet to my 
                    current furry family members?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <a href="#second">How can I help my pet overcome separation anxiety when I'm 
                    away from home?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <a href="#third">What are some effective ways to train my pet?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
            </ol>
            <ol class="questions-group2" start="4">
                <li style="margin-top:20px;">
                    <a href="#forth">Where can I find reliable information about adopting a pet 
                    or supporting local rescue organizations?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <a href="#five">What's the best diet and nutrition plan for my specific pet's 
                    needs?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <a href="#six">How can I help my pet stay calm during thunderstorms or fireworks?</a>
                    <i class="fa-solid fa-arrow-right"></i>
                </li>
            </ol>
        </div>
    </main>

    <footer>
        <div class="flex-footer">
            <div style="width: 500px; height: auto; margin-left: 180px;"><em>Let's Make Tommorrow More Beautiful and Hopeful by Living with Our Pets!</em></div>
            <div> <img src="assets\div-line.png" alt="Division Line" style="height: 220px"> </div>
            <div style="width: 300px; height: auto; margin-right: 180px">If you have any questions, please contact <a href="mailto:ys359@duke.edu">ys359@duke.edu</a></div>
        </div>
        <div class="credit">
            This is Final Project for Fundamentals of Web-Based Multimedia Communications course @Duke University | Made by Yijia Sun
        </div>
    </footer>
</body>

</html>