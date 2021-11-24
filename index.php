<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Responsive Food/Resturant Website Design Tutorial</title>
    
    <link rel="stylesheet" href="Bootstrap\css\bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="Bootstrap\js\jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="Bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- header section starts -->

    <header id="header">

        <nav>
            <ul>
                <li><a href="#home"><i class="fa fa-fw fa-home"></i>home</a></li>
                <li><a href="#special"><i class="fa fa-fw fa-star"></i>special</a></li>
                <li><a href="#about"><i class="fa fa-fw fa-user"></i>about</a></li>
                <li><a href="#dish"><i class="fa fa-fw fa-shopping-basket"></i>cuisine</a></li>
                <li><a href="Chinese/chinese.php#cart"><i class="fa fa-fw fa-shopping-cart"></i>cart</a></li>
            </ul>
        </nav>

        <div class="fas fa-hamburger"></div>

        <a href="#" class="logo"><img src="images/logo.png" alt=""></a>

    </header>

<!-- header section ends -->


<!-- home section starts  -->

    <section id="home" class="container-fluid">
             
        <div class="row min-vh-100 align-items-center">
    
            <div class="col-md-8 ml-md-5 text-md-left text-center content">
                <h1>food that you can't resist</h1>
                <h2>enjoy the marvelous taste</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta vel quisquam nostrum cum minima nobis consequatur alias eius omnis dolorem.</p>
                <a href="#special"><button>get started</button></a>
            </div>
           
            <div class="video-container">
                <video src="Images\wings.mp4" autoplay loop class="vid vid1"></video>
                <video src="Images\burger.mp4" autoplay loop class="vid vid2"></video>
                <video src="Images\pizza.mp4" autoplay loop class="vid vid3"></video>
            </div>
        
            <div class="controls">
                <div class="dots dot1"></div>
                <div class="dots dot2"></div>
                <div class="dots dot3"></div>
            </div>
            
        </div>
    
    </section>
    
<!-- home section ends  -->
   
<!-- special card section starts  -->

<section id="special" class="container-fluid">

    <div class="heading text-center">
    <h1>our <span>special</span></h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, atque.</p>
    </div>
    
    
    <div class="card-container">
    
        <div class="card">
            <img src="Images\burger1.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
            <a href="#"><button>read more</button></a>
        </div>
    
        <div class="card">
            <img src="Images\coffee.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
            <a href="#"><button>read more</button></a>
        </div>
    
        <div class="card">
            <img src="Images\biryani.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
            <a href="#"><button>read more</button></a>
        </div>
    
    </div>
    
    </section>
    
<!-- special card section ends  -->    

<!-- about section starts  -->

<section id="about" class="container">

    <div class="heading text-center">
    <h1><span>about</span> us</h1>
    </div>

    <div class="row min-vh-100">

        <div class="col-md-6 text-center text-md-left align-self-center content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi recusandae iusto, perferendis earum laboriosam rerum et quisquam iste vel commodi corporis praesentium porro impedit ullam!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci iure aliquam illum quaerat quia voluptate.</p>
            <a href="#"><button>learn more</button></a>
        </div>

        <div class="col-md-6 image">
            <img src="Images\momos.png" alt="">
        </div>

    </div>

</section>

<!-- about section ends  -->
    
<!-- dish section starts  -->

<section id="dish" class="container">

    <div class="heading text-center">
        <h1>our <span>cuisines</span></h1>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="Images\chinese.png" alt="">
            <div class="info">
                <h3>Chinese</h3>
                <p>Chinese food staples such as rice, soy sauce, noodles, tea, chili oil, tofu, and chopsticks and the wok.</p>
                <a href="Chinese/chinese.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Images\Indian.png" alt="">
            <div class="info">
                <h3>Indian</h3>
                <p>Indian cuisine consists of a variety of regional and traditional cuisines native to the Indian subcontinent.</p>
                <a href="Chinese/chinese.php#indian"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Images\italian.png" alt="">
            <div class="info">
                <h3>Italian</h3>
                <p>Traditional Central Italian cuisine uses ingredients such as tomatoes, all kinds of meat, fish, and pecorino cheese. </p>
                <a href="Chinese/chinese.php#italian"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Images\mexican.png" alt="">
            <div class="info">
                <h3>Mexican</h3>
                <p>Mexican cuisine consists of the cooking cuisines and traditions of the modern country of Mexico. Its roots lie in Mesoamerican cuisine.</p>
                <a href="Chinese/chinese.php#mexican"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Images\japanese.png" alt="">
            <div class="info">
                <h3>Japanese</h3>
                <p>The traditional cuisine of Japan is based on rice with miso soup and other dishes; there is an emphasis on seasonal ingredients.</p>
                <a href="Chinese/chinese.php#japanese"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Images\dessert.png" alt="">
            <div class="info">
                <h3>Desserts</h3>
                <p>The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur.</p>
                <a href="Chinese/chinese.php#dessert"><button>view</button></a>
            </div>
        </div>

    </div>

</section>

<!-- dish section ends  -->

<!-- contact section starts  -->
        <section id="cart" class="container content-section">
            
        </section>

<!-- contact section ends  -->

<!-- footer section starts  -->

<section id="footer" class="container-fluid">

    <div class="row align-items-center">
    
    <div class="col-md-4 brand">
    
    <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
    
    <div class="icons">
        <a href="#" class="fab fa-facebook-square"></a>
        <a href="#" class="fab fa-twitter-square"></a>
        <a href="#" class="fab fa-instagram-square"></a>
        <a href="#" class="fab fa-pinterest-square"></a>
    </div>
    
    </div>
    
    <div class="col-md-4 footer-links">
    <h3>links:</h3>
    <a href="#home">home</a>
    <a href="#special">special</a>
    <a href="#about">about</a>
    <a href="#dish">dish</a>
    <a href="#contact">contact</a>
    </div>
    
    <div class="col-md-4 text-center text-md-left letter">
    <h2>newsletter</h2>
    <input type="text"><br>
    <input type="submit" value="subscribe">
    </div>
    
    </div>
    
    <h1>&copy; copyright @ 2021 by <span>Group no.5</span></h1>
    
    </section>
    
<!-- footer section ends  -->

<!-- script part starts  -->

<script>

  $(document).ready(function(){
  
    $('.fa-hamburger').click(function(){
        $(this).toggleClass('fa-times');
        $('nav').toggleClass('nav-toggle');
    });

    $('nav ul li a').click(function(){
        $('.fa-hamburger').removeClass('fa-times');
        $('nav').removeClass('nav-toggle');
    });

    $('.dot1').click(function(){
        $('.vid1').css('display','block');
        $('.vid2').css('display','none');
        $('.vid3').css('display','none');
    });

    $('.dot2').click(function(){
        $('.vid2').css('display','block');
        $('.vid1').css('display','none');
        $('.vid3').css('display','none');
    });

    $('.dot3').click(function(){
        $('.vid3').css('display','block');
        $('.vid1').css('display','none');
        $('.vid2').css('display','none');
    });

    $(window).on('scroll load',function(){
        if($(window).scrollTop() > 10){
            $('#header').addClass('header-active');
        }else{
            $('#header').removeClass('header-active');
        }
    });

  
  });
  
  </script>

<!-- script part ends  -->
</body>

</html>