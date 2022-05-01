<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="help.css">

</head>
<body>
<section class="top">
                <div class="container" onclick="myFunction(this)" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>               
                    <div class="dropdown1">
                    <ul id="w1">    
                        <li><a href="dashboard.php">Home</a><hr></li>
                        <li><a href="dispose.php">Dispose</a><hr></li>
                        <li><a href="diy products.php">Diy products</a><hr></li>
                        <li><a href="help.php">Help</a><hr></li>
                        <li><a href="contact.php">Contact Us</a><hr></li>
                    </ul></div>
                </div>
                <div class="ti">
                    <span id="a1" data-text="RECYCLING LIVES">RECYCLING LIVES</span>
                </div>
                <div class="drop">
                <ul>
                    <li>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }?>
                        <a href="#" id="m1"> &#9759;My account</a>
                        <ul class="dropdown">
                            <li><a href="profilea.php">Profile</a></li>
                            <li><a href="cart.php">Cart(<?php echo $count;?>)</a></li>
                            <li><a href="orders.php">My orders</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div></section>
    <header>
    <h1>FREQUENTLY ASKED QUESTIONS</h1></header>
    <div class="content">
        <button class="accordion">How is old paper recycled into new paper?</button>
        <div class="panel">
            <p >Once the paper is collected, it is transferred to a recycling center or Material Recovery Facility (MRF), where contaminants such as glass, plastics and metals are removed. Once the recovered paper is free of contaminants, it is baled and transported to a paper mill .
To begin the papermaking process using recovered fiber, the fiber is shredded and mixed with water to make a pulp. The pulp is washed, refined, and cleaned, then turned to slush in a beater. Color dyes and other additives are mixed in, and the pulp slush is pumped onto a large moving screen. Computers and special sensors monitor each step of the papermaking process.
As the pulp travels down the screen, water is drained away and recycled. The resulting crude paper sheet, also known as web, is pressed between massive rollers to extract most of the remaining water and to ensure smoothness and uniform thickness. The semidry web is then run through heated dryer rollers to remove any remaining water.
The finished paper is then wound into large rolls, which can be 30 feet wide and weigh close to 25 tons. A slitter cuts the paper into smaller, more manageable rolls, and the paper is ready for use in your school, workplace, and community.</p>
        </div>
        <button class="accordion">When RL token will be available?</button>
        <div class="panel">
            <p >It is expected to reach you out soon.</p>
        </div>

        <button class="accordion">How do we believe privacy of our details?</button>
        <div class="panel">
            <p>Your privacy of details is maintained by our privacy policies.You can expect no data breach at all time since website 
                security level is too high.</p>
        </div>
    </div>
    <script>
         function myFunction(x) {
                    x.classList.toggle("change"); 
                }
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
    </script>
       <footer>
                
                <p id="left"><i>RECYCLING LIVES</i></p>
                <p>For more details contact <br>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    recyclinglives09@gmail.com</a></p>
            </footer>      
</body>
</html>
