<?php

if(!empty($_POST)){
    echo "<script> alert('clicked.'); </script>";
    $name = $_POST['nom'];
    $mail = $_POST['mail'];
    $objet = $_POST['objet'];
    $msg = $_POST['message'];
    $email_subject = "new msg";
    $email_body = "Name: {$name} Email: {$mail} objet: {$objet} message: {$msg} ";
    $to = "su75369@gmail.com";
    $mail = mail($to,$email_subject,$email_body);
    
    if ($mail) {
        echo "<script> alert('Mail Send.'); </script>";
      }else {
        echo "<script> alert('Mail Not Send.'); </script>";
      }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5b7315c09d.js" crossorigin="anonymous"></script> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>My Portfilio</title>
</head>
<body>
    <div class="namewriter">
        <h3 class="welcome"></h3>

    </div>
    <div class="namechoose ">
        <div class="window">
          <input class="choose" type="text" placeholder="write your name here please...">
          <button onclick="myname()">click OK </button>
          <p class="verif"></p>
        </div>
    </div>
    <p class="text">Text me on Whatsapp</p>
    <img class="arrow" src="new.png" alt="">
    <div class="popup">
        <div class="window">
            <div class="colorchange">
                <h4>Choose Color : </h4>
                <span data-color="red"></span>
                <span data-color="purple"></span>
                <span data-color="green"></span>
                <span data-color="pink"></span>
                <span data-color="black"></span>


            </div>

            <div onclick="closepopup()" class="close">
                <i  class="fa-solid fa-xmark "></i>
            </div>
        </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=21627191738&text=Hello this is the starting message" class="whatsapp">  <i class="fa-brands fa-whatsapp"></i></a>

 <!-- start nav bar -->
 <nav class="nav-bar">
    <div class="container">
        <div class="burger-icon" onclick="displaynavbar()">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="logo" >
<h2>Mrad</h2>       
 </div>
        <div class="menu ">
            <a href="#about"><i class="fa-solid fa-house"></i> Home</a>
            <a href="#skills"><i class="fa-solid fa-person-digging"></i> My Skills</a>
            <a href="#projects"><i class="fa-solid fa-paper-plane"></i> My projects</a>
            <a href="#service"><i class="fa-solid fa-paper-plane"></i> My Services</a>
            <a href="#contact"><i class="fa-solid fa-paper-plane"></i> Contact Me</a>


        <div onclick="closer()" class="close">
            <i  class="fa-solid fa-xmark "></i>
        </div>
        <div class="social">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a> 
            <a href="tel:+216 27191738"> <i class="fa-solid fa-phone-volume"></i></a>      
            <a href="mailto:mradmohamed700@gmail.com"><i class="fa-solid fa-envelope"></i></a>     
             </div>
    
    
        </div>
       <div onclick="showparametre()" class="parametre"><i class="fa-solid fa-gear"></i> </div>

  
    
    
    
    
    
    
    </div>
    
    
    
     </nav>
        
    
    
    
        <!-- end nav bar -->


<section id="about" class="about">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="var(--main-color)" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,186.7C384,171,480,181,576,202.7C672,224,768,256,864,240C960,224,1056,160,1152,122.7C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
   <div class="container">
<div class="content">
<h1>Mohamed Amine Mrad .</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero quo incidunt excepturi. Porro omnis assumenda ipsa soluta laudantium. Nulla incidunt labore cum. Rem molestias distinctio quia expedita tenetur voluptatum.</p>
<a href="">Contact Me</a>
</div> 
<div class="image">
    <img src="photo.jpg" alt="">
</div>  


</div>
</section>

<!--start services-->
<section id="service" class="all services anglais">
    <h1 class="title">My Services</h1>
    <div class="container">
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <h4>Graphics design</h4>
        </div>
        <div class="box">
            <i class="fa-solid fa-code"></i>            <h4>Web development</h4>
        </div>
        <div class="box">
            <i class="fa-brands fa-searchengin"></i>          <h4>Seo</h4>
        </div>
        <div class="box">
            <i class="fa-solid fa-cart-shopping"></i>           
            <h4>E-commerce website</h4>
        </div>
      
    </div>
</section>

<!--end services-->

<!--start skills-->
<section id="skills" class="all skills anglais">
    <h1 class="title">My Skills</h1>
    <div class="container">
        <div class="box">
            <div class="content">
                <h5>HTML</h5>
                <span data-goal="80" >0</span>
            </div>
            <div class="progress">
                <span data-toul="80%"></span>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h5>CSS</h5>
                <span data-goal="90" >0</span>
            </div>
            <div class="progress">
                <span data-toul="90%"></span>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h5>JS</h5>
                <span data-goal="60" >0</span>
            </div>
            <div class="progress">
                <span data-toul="60%"></span>
            </div>
        </div>
        <div class="box">
            <div class="content">
                <h5>DESIGN</h5>
                <span data-goal="85" >0</span>
            </div>
            <div class="progress">
                <span data-toul="85%"></span>
            </div>
        </div>
      
    </div>
</section>

<!--end skills-->


<!--start projects-->
<section id="projects" class="all projects anglais">
    <div class="container">
        <div class="box">

        </div>
    </div>
</section>

<!--end projects-->

<!--start why-->
<section id="why" class="all why anglais">
    <span></span>
    <h1 class="title">Why Choising Me</h1>
    <div class="container">
        <div class="box">
            <i class="fa-solid fa-money-bill-wave"></i>  
            <p>reasonable price
            </p>                 
        </div>
        <div class="box">
            <i class="fa-sharp fa-solid fa-gauge-simple-high"></i>  
            <p>You will have the job in a fairly short time
            </p>           
        </div>
        <div class="box">
            <i class="fa-solid fa-briefcase"></i>            <p>     a professional job

            </p>       
        </div>
     
   
    </div>
</section>

<!--end why-->


<!--start contact-->
<section id="contact" class="all contacter-nous anglais">
    <h1 class="title">Contact Me</h1>
    <div class="container">
        <form action="index.php"  method="post">
         <input name="nom" type="text" placeholder="write ur name " >
         <input name="mail" type="email" placeholder="email " >

         <input name="objet" type="text" placeholder="objet " >
         <textarea name="message"  placeholder="msg " name="" id="" cols="30" rows="10"></textarea>
          <button  type="submit">send message</button>         

          <div class="social">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a> 
            <a href="tel:+216 27191738"> <i class="fa-solid fa-phone-volume"></i></a>      
            <a href="mailto:mradmohamed700@gmail.com"><i class="fa-solid fa-envelope"></i></a>     
             </div>








        </form>
    </div>
</section>

<!--end contact-->


<!--start footer-->
<section style="background-color: black; color: white; " id="con" class="all footer anglais">
  
    <div style="display: flex; justify-content: center; align-items: center;" class="container">
      &copy; | created by Mrad Mohamed Amine 
    </div>
</section>

<!--end footer-->






<script src=" https://smtpjs.com/v3/smtp.js"></script>

<script>
var m=document.querySelector('.menu')
var links=document.querySelectorAll('.menu a')
var n=document.querySelector(' body');
var sp=document.querySelectorAll('.skills .progress span');
var pop=document.querySelector('.popup');
var li=document.querySelectorAll('.popup .colorchange span');
var root=document.querySelector(':root');
var h=document.querySelector('.welcome');
var inp=document.querySelector('.choose');
var wind=document.querySelector('.namechoose'); 
var cmnt=document.querySelector('.verif'); 
var sec=document.querySelector('.skills');
var y=document.querySelectorAll('.skills .content span');
var aud=document.querySelector('audio'); 
var namwr=document.querySelector('.namewriter'); 




 
var start =false


window.onscroll = function() {
    if(window.scrollY >= sec.offsetTop  ){
        sp.forEach((e)=>{   e.style.width=e.dataset.toul;})


        if(!start){
            y.forEach((e)=> startcount(e));   


        }
        start=true;
            }
};
function startcount(el){
    let g=el.dataset.goal;
    let count = setInterval(()=>{
        el.textContent++;
        if( el.textContent == g){
            clearInterval(count);
        }
    }, 1000 / g);
}


function myname(){
    if(inp.value=="" ){
        cmnt.innerHTML="please write your name";
    }
    else if(inp.value.length > 10){
        cmnt.innerHTML="max 10 characters";

    }
    else{
        h.innerHTML ="welcome " + inp.value + " to my portfilio";
        wind.style.display="none";
        var stil = window.getComputedStyle(wind).getPropertyValue("display"); 
        if( stil == "none" ){
            namwr.classList.add('abc');  
        
           setTimeout("  namwr.style.width='0';",2500);         







}
    }
   

    

}





 
function chou(){
                
            
                root.style.setProperty('--main-color',    this.dataset.color);
                 
            }
    li.forEach((v)=> {
                v.style.background=v.dataset.color;
                v.addEventListener('click',chou 
                )}
            )

function showparametre(){
    pop.style.transform="translateY(0)";
}
function closepopup(){
    pop.style.transform="translateY(-1000px)";

}






function closer(){
    m.style.transform="translateX(-100%)";
}
function mode(){
    n.classList.toggle("abc");

}


function displaynavbar(){

    m.style.transform="translateX(0)";
}
function f(){
    links.forEach((e)=>{
e.classList.remove('active')

}
)
   this.classList.add('active')
   m.style.transform="translateX(-100%)";

}
links.forEach((e)=>{
e.addEventListener('click',f)

}
)

     </script>

 </body>


 </html>