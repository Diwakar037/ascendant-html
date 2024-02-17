
<?php
include('Header.php');
?>




<style>

*{
   margin: 0;
   padding: 0;
}

.About-brands  {
    margin-top: 0px !important;
}

/*--------------------------------------------------------------
# About-banner Sections  css
--------------------------------------------------------------*/

#About-brands-sec {
    position: relative;
    top: 60px;
    padding-top: 0px;
    overflow: hidden;
    padding-bottom: 40px;
}




.about-row {
    max-width: 1360px;
    width: 100%;
    margin: 0 auto;
}



.About-brands .brdcrm-bnnr {
background-size: cover;
background-position: center;
background-repeat: no-repeat;
height: 400px;
display: flex;
align-items: center;
/* justify-content: center; */
align-content: center;
}


.About-brands .breadcrumbs.d-flex {
width: 100%;
}


.About-brands .breadcrumbs h2 {
font-size: 60px;
line-height: 79px;
font-weight: 600;
text-transform: uppercase;
text-align: center;
color: #fff;
font-family: var(--font-secondary);
margin: 15px 0px;
}


.About-brands .breadcrumbs ol {
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

.About-brands .breadcrumbs ol a {
color: #fff;
transition: 0.3s;
text-decoration: none;
}


.About-brands .container.position-relative.d-flex.flex-column {
pointer-events: all;
opacity: 1;
max-width: 100%;
}


.About-brands .breadcrumbs ol li+li::before {
display: inline-block;
padding-right: 10px;
color: #fff;
content: "/";
}


/*--------------------------------------------------------------
# All brands  Sections  css start
--------------------------------------------------------------*/


.All-brands-sec {
    padding: 80px;
    width: 100%;
    max-width: 1360px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}


.All-brands-sec .tabset > input:checked + label span {
    border: none;
    color: #A1A1A1;
    font-size: 20px;
}

.All-brands-sec .tabset > input:checked + label span:hover {
    color: #E22626;
}

.All-brands-sec .tabset > label span {
    color: #A1A1A1;
    font-size: 20px;
    border: none !important;
}

.All-brands-sec .tabset > label span:hover {
   
     color: #E22626;
  
}


/*--------------------------------------------------------------
#  MEDIA QUERY FOR MOBILE VIEW START
--------------------------------------------------------------*/
@media (max-width: 769px){


    .About-brands .breadcrumbs h2 {
    font-size: 25px;
    line-height: 30px;
}
.About-brands .brdcrm-bnnr {
    height: 108px;
}

#About-brands-sec {
    padding-top: 40px;
}
.All-brands-sec .tab-panels {
    padding: 0px !important;
}

.All-brands-sec {
    padding: 40px;
}

.All-brands-sec .tabset > input:checked + label span {
    font-size: 18px;
}

.All-brands-sec .tabset > label span {
    font-size: 18px;
}

.ascendant-header .wrapper .nav-links {
    display: none;
}
    }


</style>



<main id="main" class="About-brands">
<!-- ======= About-Brands section ======= -->

<section id="About-brands-sec">
    <div class="brdcrm-bnnr" style="background-image: url('./assets/img/About-Brands.jpg');">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex">
            <div class="container position-relative d-flex flex-column" data-aos="fade">
                <h2>BRANDS WE CARRY</h2>
                <ol>
                    <li><a href="#">Home</a></li>
                    <li>Brands We Carry</li>
                </ol>
            </div>

        </div>
        <!-- End Breadcrumbs -->
    </div>
</section>

  <!-- ======= About-Brands section End ======= -->


    <!-- ======= All-brands TAB section start ======= -->


    

    <section class="All-brands-sec">
    <div class="container">
<div class="ast-row">
          <div class="tabset">

<!-- Tab 1 -->
<input type="radio" name="tabset" id="tab1" aria-controls="f1" checked="checked">
<label for="tab1" style="border-left: 0px"><span>SECURITY & AI </span></label>
<!-- Tab 2 -->
<input type="radio" name="tabset" id="tab2" aria-controls="f2">
<label for="tab2"><span>UNIFIED COMMUNICATION </span></label>
<!-- Tab 3 -->
<input type="radio" name="tabset" id="tab3" aria-controls="f3">
<label for="tab3"><span>TECHNOLOGIES</span></label>



<div class="tab-panels">
<section id="f1" class="tab-panel">
<div class="ast-row">
<div class="col-lg">
<img src="assets/img/All-brands-logo.png" alt="Image 1" width="100%">
</div>
</div>
</section>

<section id="f2" class="tab-panel">
<div class="ast-row">
<div class="col-lg">
<img src="assets/img/All-brands-logo.png" alt="Image 2" width="100%">
</div>
</div>
</section>

<section id="f3" class="tab-panel">
<div class="ast-row">
<div class="col-lg">
<img src="assets/img/All-brands-logo.png" alt="Image 3" width="100%">
</div>
</div>
</section>

</div>
</div>
      
</section>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  // Get the current URL, removing any fragment
  var documentUrl = document.location.href.replace(/#.*$/, '')

  // Iterate through all links
  var linkEls = document.getElementsByTagName('A')
  for (var linkIndex = 0; linkIndex < linkEls.length; linkIndex++) {
    var linkEl = linkEls[linkIndex]

    // Ignore links that don't begin with #
    if (!linkEl.getAttribute('href').match(/^#/)) {
      continue;
    }

    // Convert to an absolute URL
    linkEl.setAttribute('href', documentUrl + linkEl.getAttribute('href'))
  }
})    
</script>





  <!-- ======= All-brands TAB section End ======= -->



</main>


<base href="https://cdn.jsdelivr.net/gh/linuxguist/tabs@main/">

<link href="styles.pure.ii.css" rel="stylesheet" />


<?php
include('footer.php');
?> 

