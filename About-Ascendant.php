
<?php
include('Header.php');
?>

<style>

*{
   margin: 0;
   padding: 0;
}

#main {
    margin-top: 0px;
}

/*--------------------------------------------------------------
# About-banner Sections  css
--------------------------------------------------------------*/

.about-banner {
    position: relative;
    top: 60px;
    padding-top: 40px;
    overflow: hidden;
    padding-bottom: 40px;
}


.about-row {
    max-width: 1360px;
    width: 100%;
    margin: 0 auto;
}



.about-banner .brdcrm-bnnr {
background-size: cover;
background-position: center;
background-repeat: no-repeat;
height: 400px;
display: flex;
align-items: center;
/* justify-content: center; */
align-content: center;
}


.about-banner .breadcrumbs.d-flex {
width: 100%;
}


.about-banner .breadcrumbs h2 {
font-size: 60px;
line-height: 79px;
font-weight: 600;
text-transform: uppercase;
text-align: center;
color: #fff;
font-family: var(--font-secondary);
margin: 15px 0px;
}


.about-banner .breadcrumbs ol {
display: flex;
flex-wrap: wrap;
list-style: none;
padding: 0 0 10px 0;
margin: 0;
font-size: 16px;
line-height: 21px;
font-weight: 300;
text-transform: capitalize;
color: #fff;
justify-content:center;
}

.about-banner .breadcrumbs ol a {
color: #fff;
transition: 0.3s;
text-decoration: none;
}


.about-banner .container.position-relative.d-flex.flex-column {
pointer-events: all;
opacity: 1;
max-width: 100%;
}


.about-banner .breadcrumbs ol li+li::before {
display: inline-block;
padding-right: 10px;
color: #fff;
content: "/";
}


/*--------------------------------------------------------------
# About-banner Sections  css End
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# About-paragraph section start css
--------------------------------------------------------------*/
.about-p h2 {
    font-size: 50px;
    text-align: center;
    color: #252525;
    font-weight: 800;
    margin-bottom: 35px;
    margin-top: 0px;
}

.about-p {
padding: 100px 0px;
display: flex;
justify-content: center;
}

.about-p p {
color: #252525;
font-size: 20px;
width: 100%;
max-width: 1125px;
margin: 0 auto;
text-align: center;
}

.about-p .f-para {
margin-bottom: 40px;
}


/*--------------------------------------------------------------
# About-paragraph section  css End
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# Image section  css starting
--------------------------------------------------------------*/


.Image-sec , .Team-sec {
    padding-top: 0px;
    padding-bottom: 100px;
}



/*--------------------------------------------------------------
# Image section  css End
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# TEAM section  css starting
--------------------------------------------------------------*/


.Team-sec h2 {
    font-size: 50px;
    color: #252525;
    font-weight: 800;
    margin-bottom: 35px;
}

.Team-sec p {
    color: #252525;
    font-size: 20px;
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

.Team-sec img {
    height: auto;
    width: 532px;
}

.Team-sec a.join-us-link {
    display: block;
    margin-top: 35px;
    text-align: left;
    color: #E22626;
    font-weight: 600;
    font-size: 18px;
    text-decoration: none;
}

.Team-sec a.join-us-link img {
    width: 11.8px;
    position: absolute;
    left: 98px;
    bottom: 8px;
    height:9.71px;
}

.Team-sec {
    position: relative;
}

.Four-img-sec .container {
    max-width: 1500px !important;
    margin: 0 auto;
    width: 100% !important;
}

.Four-img-sec .about-row {
    max-width: 1276px !important;
}

/*--------------------------------------------------------------
# TEAM section  css END
--------------------------------------------------------------*/


.Four-img-sec {
    background-color: #252525;
    padding-top: 80px;
    padding-bottom: 80px;
    position: relative;
}


.Four-img-sec h2 {
    font-size: 50px;
    color: #fff;
    font-weight: 800;
    margin-bottom: 35px;
    position: absolute;
    top: -130px;
}

.join-us-link {
        position: relative;
        display: inline-block;
    }
    .join-us-link img {
        transition: transform 0.3s ease;
    }
    .join-us-link:hover img {
        transform: translateX(10px); /* Adjust the value as per your requirement */
    }

/*--------------------------------------------------------------
# FOURTH section  css END
--------------------------------------------------------------*/

/*--------------------------------------------------------------
#  MEDIA QUERY FOR MOBILE VIEW START
--------------------------------------------------------------*/
@media (max-width: 769px){
    .about-banner .breadcrumbs h2 {
    font-size: 25px;
    line-height: 30px;
}
.about-banner .brdcrm-bnnr {
    height: 108px;
}

.about-p h2 {
    font-size: 25px;
    text-align: center;
    margin-bottom: 17px;
}

.about-p {
    padding: 50px 0px;
}

.about-p p {
    font-size: 16px;
    width: 100%;
    text-align: left;
}

.about-p .f-para {
    margin-bottom: 20px;
}

.Image-sec, .Team-sec {
    padding-bottom: 50px;
}

.Team-sec h2 {
    margin-top: 0px;
    margin-bottom: 17px;
    font-size: 25px;
    text-align: center;
}

.Team-sec p {
    font-size: 16px;
    margin-bottom: 50px;
}

.Team-sec img {
    max-width: 100%;
}


.Team-sec a.join-us-link {
    display: block;
    margin-bottom: 35px;
    font-weight: 600;
    font-size: 16px;
    
}

.Team-sec a.join-us-link img {
    left: 90px !important;
    bottom: 8px !important;
}


.Four-img-sec h2 {
    font-size: 25px;
    text-align: center;
    margin-top: 0px;
    position:unset;
}

.Four-img-sec .certificate {
    text-align: center;
    margin-bottom:20px;
}

.Four-img-sec {
    padding-top: 40px;
    padding-bottom: 20px;
}



    }





</style>



<main id="main" class="about-ascendant">
<!-- ======= About-Banner section ======= -->

<section id="about-banner" class="about-banner">
    <div class="brdcrm-bnnr" style="background-image: url('./assets/img/About-bg.jpg');">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex">
            <div class="container position-relative d-flex flex-column" data-aos="fade">
                <h2>ABOUT US</h2>
                <ol>
                    <li><a href="#">Home</a></li>
                    <li>About Ascendant</li>
                </ol>
            </div>

        </div>
        <!-- End Breadcrumbs -->
    </div>
</section>

  <!-- ======= About-Banner section End ======= -->



<!-- ======= About-paragraph section ======= -->

<section class="about-p">

<div class="container">
<div class="row about-row">
<div class="col-lg">
  <h2>OUR STORY</h2>
  <p class="f-para" >Welcome to Ascendant Technologies, your premier destination for cutting-edge integrated technology solutions and services. As a forward-thinking industry leader, we specialize in providing a comprehensive suite of offerings spanning professional audio-visual, unified communications, integrated security solutions, and IT solutions. At Ascendant Technologies, we understand the evolving landscape of technology and the increasing demand for seamless integration. With a commitment to excellence, we pride ourselves on delivering innovative and tailored solutions that not only meet but exceed the diverse needs of our clients.</p>

  <p>Whether you’re seeking state-of-the-art audio-visual experiences, robust unified communication platforms, advanced security solutions, or cutting-edge IT services, Ascendant Technologies is your trusted partner for transformative technology solutions designed to elevate your business to new heights.</p>
</div>
</div>
</div>



</section>
<!-- ======= Image section  End======= -->

<!-- ======= Image section ======= -->
<section class="Image-sec">
<div class="container">
  <div class="row about-row">
     <div class="col-lg">
        <img src="assets/img/projector-img.jpg" class="img-fluid" alt="About Image">
     </div>
  </div>
</div>
</section>
<!-- ======= Image section  End======= -->


<!-- ======= Team section ======= -->

<section class="Team-sec">
      <div class="container">
        <div class="row about-row">
          <div class="col-lg-6 ">
            <h2>OUR TEAM</h2>
            <p>Meet our team - experts in audio-visual, unified communication, security, and IT solutions. Our dynamic professionals collaborate seamlessly, turning challenges into innovative results. We’re your reliable partners in navigating the evolving technology landscape.</p>
            <a href="#" class="join-us-link">
    <img src="assets/img/join.svg" alt="Icon"> JOIN US
</a>

          </div>
          <div class="col-lg-6 ">
            <img src="assets/img/Team.jpg">
          </div>
          
        </div>
      </div>
    </section>

<!-- ======= Team  section  End======= -->


<section class="Four-img-sec">
    <div class="container">
        <div class="row about-row align-items-center">
            <div class="col-lg-6">
                <h2>OUR <br> ACCREDITATIONS</h2>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3 certificate">
                        <img src="assets/img/Certificate.png" class="img-fluid mb-3">
                    </div>
                    <div class="col-lg-3 certificate">
                        <img src="assets/img/Certificate.png" class="img-fluid mb-3">
                    </div>
                    <div class="col-lg-3 certificate ">
                        <img src="assets/img/Certificate.png" class="img-fluid mb-3">
                    </div>
                    <div class="col-lg-3 certificate">
                        <img src="assets/img/Certificate.png" class="img-fluid mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





</main>


<?php
include('footer.php');
?> 

