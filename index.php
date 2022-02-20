<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


    <title>Astronomy Website</title>
</head>
<body>
 


<!-- header section starts  -->

<header class="header">

   

    <a href="#home" class="logo"> <img id="jupiter_logo" src="images/JUPITER-logos_black.png" alt=""></a>
   
    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#packages">Course</a>
        <a href="#reviews">reviews</a>
        <a href="#blogs">blogs</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
      
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/outer-digital-space-tq-3840x2160.jpg) no-repeat;">
                    <div class="content">
                        <span style="color:#F2E52E ; "><strong>What Is</strong></span>
                        <h3 style="color :#BF5E5E; "></strong> Beyond Space?</h3>
                        
                        <p style="color :rgb(255, 210, 210); "><STRONG> JUPITER is the premier source of space exploration, innovation and astronomy news, chronicling humanity's ongoing expansion across the final frontier.</STRONG></p>
                        <a href="#" class="btn"><strong>get started</strong></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/HOMEPIC2A.jpg) no-repeat;">
                    <div class="content">
                        <span style="color :#F2E52E; ">Know Everything About</span>
                        <h3 style="color :#BF5E5E; ">Universe</h3>
                        <p style="color :rgb(255, 255, 255); " ><STRONG>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</STRONG></p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/homepic3.jpg)no-repeat;">
                    <div class="content">
                        <span style="color :#F2E52E; ">Buy Telescope</span>
                        <h3 style="color :#BF5E5E; ">& many more Things</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <h1 class="heading">Explore Space & Beyond !</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/NEBULA.jpg" alt="">
            <h3>Nebula</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id. </p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/comet.jpg" alt="">
            <h3>What Is Comet?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/darkmatter.jpg" alt="">
            <h3>What is dark matter?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/spa_scary.jpg" alt="">
            <h3>How Scary Is Space?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/quantum.jpg" alt="">
    </div>

    <div class="content">
        <h3>Week's Top Blog</h3>
        <p><strong>A new method for quantum computing</strong></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates corrupti natus necessitatibus beatae voluptatibus, deserunt quo soluta minima libero laborum, corporis error esse vitae placeat blanditiis reiciendis vel? Minima.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta doloremque placeat porro, ipsam quia at beatae atque odit iste?</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading">Our products</h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/tele1.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Telescope</h3>
                    <div class="price"> $500.00 - $750.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/tele2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Telescope</h3>
                    <div class="price"> $500.00 - $2500.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/tele3.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Telescope</h3>
                    <div class="price"> $600.00 - $1200.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/tele4.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Apertura</h3>
                    <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/spacesuit.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Spacesuit</h3>
                    <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/bina1.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Binacular</h3>
                    <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">Explore Astronomy Courses</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/vedic_astrology.png" alt="">
            </div>
            <div class="content">
                <h3>Vedic Astrology</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/astronomy_for_beginner.jpg" alt="">
            </div>
            <div class="content">
                <h3>Astronomy For Beginner</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/physics_of_astronogy.webp" alt="">
            </div>
            <div class="content">
                <h3>Physics Of Astronomy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/star_gazing_without_telescope.jpg" alt="">
            </div>
            <div class="content">
                <h3>Astronomy Without Telescope</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/backyard_astronomy.jpg" alt="">
            </div>
            <div class="content">
                <h3>Backyard Astronomy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.lorem epsum N epsum huptom  umquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/greek.png" alt="">
            </div>
            <div class="content">
                <h3>Astronomy & Greek Mythalogy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">Cources's reviews</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Teacher</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Enthusiast</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Parents</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Student</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Student</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>Teacher</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- services section starts  -->

<section class="services">

    <h1 class="heading"> what we offer </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/serv-1.png" alt="">
            <h3>complete guide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/tele_transparent.png" alt="">
            <h3>Astronomy packages</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/community_transparent.png" alt="">
            <h3>Great Community</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/blogger-512.webp" alt="">
            <h3> Daily Blogs</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/magazine -logos_transparent.png" alt="">
            <h3>Monthly Magazine</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/career -logos_transparent.png" alt="">
            <h3>Astronomy Career Guide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nihil?</p>
            <a href="#" class="btn">read more</a>
        </div>
        
    </div>

</section>

<!-- services section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our daily posts </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/blog1.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Exploring astronomy with X-rays.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/blog2.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Puffy planets lose atmospheres, become super-Earths.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/blog3.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Astronomers offer theory about mysterious location of massive stars.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/blog4.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Juno and Hubble data reveal electromagnetic light up.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/blog5.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Leftover SpaceX Falcon 9 upper stage will impact </h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/blog6.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st JAN, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Warps drive disruptions in planet formation in young solar systems.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- newsletter section  -->

<section class="newsletter">

    <div class="content">
        <h1 class="heading">subscribe now</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ipsam repellat nostrum esse officiis unde quisquam corporis doloremque adipisci similique!</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </div>

</section>

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/Swami Vivekanand School -logos_transparent.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#packages">packages</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my wishlist</a>
            <a href="#">ask questions</a>
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +98-234-8970 </a>
            <a href="#"> <i class="fas fa-phone"></i> +122-333-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i>keshavk289@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Hajipur, Vaishali - 844678 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit">created by <span>KESHAV</span> | all rights reserved!</div>

</section>

<!-- footer section ends -->












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>