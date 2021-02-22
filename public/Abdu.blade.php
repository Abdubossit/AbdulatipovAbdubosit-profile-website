<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/Abdu.css')}}"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <nav>
            <a href="#" class="logo">G T Internet</a>
            <ul> 
                <li><a href="about.html">About Me</a></li>
                <li><a href="index.html">Services</a></li>
                <li><a href="contact.html">Contact Me</a></li>
            </ul>
            <div class="toggle">

            </div>
        </nav>
        <div class="text-conatiner">
            <p>Hello,</p>
            <p>I'M ABDUBOSIT</p>
            <p>I am Programmer <br> & Designer</p>
            <button onclick="popup1()" class="hire-btn">Hire me</button>
            <button id="down" class="down-cv">Download CV</button>
        </div>
        <img src="abdu.png" class="model" alt="abdu">
    </section>

    <div class="hire_me">
        <div class="hire">
            <p id="x" onclick="close_popup1()">X</p>
            <img class="closed" onclick="close_popup1()" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR22mgL3N2_qeM5ZABKPiBT2XfFChru6Jv7aQ&usqp=CAU" alt="">
            <img src="Abdu.jpg" alt="" width="300px">
            <h1>Abdulatipov Abdubossit</h1>
            <p>Programmer & Designer</p>
        </div>
    </div>




    <div id="aabout" class="about-container">
        <img src="Abdu2.jpg" alt="" >
        <div class="about-text">
            <p>About Me</p>
            <p>Programmer & Disigner</p>
            <p>Hello, My name is Abdu. I was born on July 7, 2001.
                Place of birth Republic of Kazakhstan city of Tukistan Zhuynek village.
                My specialty is creating a list of Information Systems. Currently, I am a 2nd year student at Suleymen Demirel University.
                So far, I've learned to create several web sites …</p>
            <p>My goal for the future is to work in world-class companies.
                You can see the websites I've created so far in my Instagram account (@Abdu_Latipov). </p>
                <button onclick="popup1()">Hire Me</button>
                <button>Download CV </button>
        </div>
    </div>
    <div class="services" id="ser">
            <div class="services-text">
                <p>Services</p>
                <p>Services required</p>
                <p>if you want make a software for your bussniess conatact me.I make as soon as possibale.You really like my work, if you don&#8217;t i change this until you like if you want make a software for your bussniess conatact me.I make as soon</p>
           </div>
           <div class="box-container">
               <div class="box-1">
                   <span>1</span>
                   <p class="heading">Web Design</p>
                   <p class="details">I used several programming languages to design this website.
                    I used HTML to insert icons, СSS to decorate the site, and for javascript to open buttons. I used Photoshop to create logos</p>
                    <button>Read More</button>
               </div>
               <div class="box-2">
                <span>2</span>
                <p class="heading">Web Lesson</p>
                <p class="details">To learn on the site, I will start my classes next week.
                    5 programming languages are taught in these lesson. In addition, we will teach Photoshop and video editing.
                    These courses will be paid and will be taught 18 hours a week</p>
                 <button>Read More</button>
               </div>
               <div class="box-3">
                <span>3</span>
                <p class="heading">My level</p>
                <p class="details">2 years ago, I graduated from high school with honors and became a temporary mentor in mathematics.
                    Then, at the university, I mastered several programming languages, such as Java, Python.
                    In addition, I am well versed in html css and javascript
                </p>
                 <button>Read More</button>
               </div>

           </div>
    </div>
    <div class="contact-me" id="us">
        <p>If You Have Any Project In Your Mind.</p>
        <button id="flip">Contact Me</button>
    </div>


    <div id="panel" class="button_Contact">
        <img id="id" src="Abdu2.jpg" alt="" width="100px">
        <div class="whatsapp">
            <img src="https://img.icons8.com/pastel-glyph/2x/whatsapp.png" alt="" width="40px">
            <p>8 771 969 2001</p>
        </div>
        <div class="whatsapp">
            <img src="https://i.pinimg.com/originals/63/9b/3d/639b3dafb544d6f061fcddd2d6686ddb.png" alt="" width="60px">
            <p>@Abdu_Latipov</p>
        </div>
        <div class="whatsapp">
            <img id="gm" src="https://cdn.icon-icons.com/icons2/652/PNG/512/gmail_icon-icons.com_59877.png" alt="" width="40px">
            <p>190103326@stu.sdu.edu.kz</p>
        </div>
        <div id="fb" class="whatsapp">
            <img  src="https://cdn.iconscout.com/icon/free/png-512/facebook-social-media-fb-logo-square-44659.png" alt="" width="40px">
            <p>Abdu_Latipov</p>
        </div>
    </div>



    <footer>
        <p>Going-To Internet</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/abdu.latipov.79"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/livewatchmovies"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/abdu_lat1pov/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCwo96lXdeMZWAdMWh8gu1Xg"><i class="fab fa-youtube"></i></a>
            </div>
            <p class="copy">Copyright by Going-To Internet</p>
    </footer>

    <script type="text/javascript" src="abdu.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('nav').toggleClass('active')

        })
    })
    </script>
</body>
</html>