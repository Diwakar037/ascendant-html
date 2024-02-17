<?php
include('header.php');
?>
<!-- <link href="assets/css/product.css" rel="stylesheet"> -->

<style>

    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    :root {
      scroll-behavior: smooth;
    }

    body {
      color: rgba(var(--color-primary-rgb), 1);
    }

    a {
      color: var(--color-links);
      text-decoration: none;
    }

    a:hover {
      color: var(--color-links-hover);
      text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: var(--font-primary);
    }

    #main {
      margin-top: 90px;
    }

    /*--------------------------------------------------------------
    # Sections & Section Header
    --------------------------------------------------------------*/
    section {
      padding: 40px 0;
      overflow: hidden;
    }

    .section-header {
      border-bottom: 2px solid var(--color-black);
    }

    .section-header h2 {
      font-size: 50px;
      color: var(--color-black);
    }

    .section-header p {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
    # Scroll top button
    --------------------------------------------------------------*/
    .scroll-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 99999;
      background: var(--color-primary);
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }

    .scroll-top i {
      font-size: 24px;
      color: #fff;
      line-height: 0;
    }

    .scroll-top:hover {
      background: rgba(var(--color-primary-rgb), 0.8);
      color: #fff;
    }

    .scroll-top.active {
      visibility: visible;
      opacity: 1;
    }

    /*--------------------------------------------------------------
    # Page title
    --------------------------------------------------------------*/
    .page-title {
      font-size: 70px;
      color: var(--color-black);
    }

    /* Form Input Fieldds */
    .form-control:active,
    .form-control:focus {
      outline: none;
      box-shadow: none;
      border-color: var(--color-black);
    }

    .btn:active,
    .btn:focus {
      outline: none;
    }

    .btn.btn-primary {
      background-color: var(--color-black);
      color: var(--color-white);
      border-color: var(--color-black);
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    .header {
      height: 90px;
      transition: all 0.5s;
      z-index: 997;
      background: #fff;
    }

    .header.sticked {
      height: 70px;
    }
    .header-section {
        width: 100%;
        align-items: center;
    }
    #navbar {
        justify-content: center;
    }
    .icons-section {
        display: flex;
        justify-content: end;
        padding-right: 0px !important;
    }
    .header .logo img {
        margin-right: 6px;
        width: 100%;
        max-width: 110px;
    }
    .sticked .logo img {
        max-width: 70px;
    }
    .search-icon {
        width: 20px;
    }

    .search-icon img , .user-icon img , .cart-icon img {
        width: 20px;
    }
    .header .logo h1 {
      font-size: 30px;
      font-weight: 700;
      color: var(--color-default);
      font-family: var(--font-primary);
    }

    .search-form-wrap {
      position: absolute;
      right: 0;
      top: 0;
      z-index: 9;
      transition: 0.3s all ease;
      visibility: hidden;
      opacity: 0;
    }

    .search-form-wrap .search-form {
      position: relative;
    }

    .search-form-wrap .search-form .form-control {
      width: 300px;
      border: none;
      box-shadow: 0 15px 20px -10px rgba(var(--color-black-rgb), 0.1);
      padding-left: 40px;
      padding-right: 40px;
    }

    .search-form-wrap .search-form .form-control:active,
    .search-form-wrap .search-form .form-control:focus {
      outline: none;
      box-shadow: none;
    }

    .search-form-wrap .search-form .icon {
      position: absolute;
      left: 0;
      top: 7px;
      opacity: 0.5;
      left: 10px;
    }

    .search-form-wrap .search-form .btn {
      position: absolute;
      top: 2px;
      right: 4px;
      padding: 0;
      margin: 0;
      line-height: 1;
      font-size: 30px;
    }

    .search-form-wrap .search-form .btn:active,
    .search-form-wrap .search-form .btn:focus {
      outline: none;
      box-shadow: none;
    }

    .search-form-wrap.active {
      visibility: visible;
      opacity: 1;
    }

    section {
      scroll-margin-top: 70px;
    }

    /*--------------------------------------------------------------
    # Desktop Navigation
    --------------------------------------------------------------*/
    @media (min-width: 1280px) {
      .navbar {
        padding: 0;
      }

      .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
      }

      .navbar li {
        position: relative;
      }

      .navbar a,
      .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-family: var(--font-default);
        font-size: 16px;
        font-weight: 500;
        color: rgba(var(--color-default-rgb), 1);
        white-space: nowrap;
        transition: 0.3s;
      }

      .navbar a i,
      .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
      }

      .navbar a:hover,
      .navbar .active,
      .navbar .active:focus,
      .navbar li:hover>a {
        color: var(--color-default);
      }

      .navbar .getstarted,
      .navbar .getstarted:focus {
        background: var(--color-primary);
        padding: 8px 20px;
        margin-left: 30px;
        border-radius: 4px;
        color: var(--color-white);
      }

      .navbar .getstarted:hover,
      .navbar .getstarted:focus:hover {
        color: var(--color-white);
        background: rgba(var(--color-primary-rgb), 0.8);
      }

      .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: var(--color-white);
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
        border-radius: 4px;
      }

      .navbar .dropdown ul li {
        min-width: 200px;
      }

      .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 15px;
        text-transform: none;
        font-weight: 400;
      }

      .navbar .dropdown ul a i {
        font-size: 12px;
      }

      .navbar .dropdown ul a:hover,
      .navbar .dropdown ul .active:hover,
      .navbar .dropdown ul li:hover>a {
        color: var(--color-primary);
      }

      .navbar .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
      }

      .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
      }

      .navbar .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
      }
    }

    @media (min-width: 1280px) and (max-width: 1366px) {
      .navbar .dropdown .dropdown ul {
        left: -90%;
      }

      .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
      }
    }

    .mobile-nav-toggle {
      display: none;
    }

    /*--------------------------------------------------------------
    # Mobile Navigation
    --------------------------------------------------------------*/
    @media (max-width: 1279px) {
      .navbar {
        padding: 0;
        z-index: 9997;
      }

      .navbar ul {
        display: none;
        position: absolute;
        inset: 55px 15px 15px 15px;
        padding: 10px 0;
        margin: 0;
        border-radius: 10px;
        background-color: var(--color-white);
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
        top: 100px;
      }

      .navbar a,
      .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        font-family: var(--font-primary);
        font-size: 15px;
        font-weight: 600;
        color: var(--color-primary);
        white-space: nowrap;
        transition: 0.3s;
      }

      .navbar a i,
      .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
      }

      .navbar a:hover,
      .navbar .active,
      .navbar .active:focus,
      .navbar li:hover>a {
        color: var(--color-primary);
      }

      .navbar .dropdown ul,
      .navbar .dropdown .dropdown ul {
        position: static;
        display: none;
        z-index: 99;
        padding: 10px 0;
        margin: 10px 20px;
        background: var(--color-white);
        transition: all 0.5s ease-in-out;
        box-shadow: 0px 0px 30px rgba(var(--color-black-rgb), 0.1);
      }

      .navbar .dropdown>.dropdown-active,
      .navbar .dropdown .dropdown>.dropdown-active {
        display: block;
      }

      .mobile-nav-toggle {
        display: inline-block;
        color: var(--color-secondary);
        font-size: 28px;
        cursor: pointer;
        line-height: 0;
        transition: 0.5s;
      }

      .mobile-nav-toggle.bi-x {
        color: var(--color-black);
      }

      .mobile-nav-active {
        overflow: hidden;
      }

      .mobile-nav-active .mobile-nav-toggle {
        position: fixed;
        top: 30px;
        right: 35px;
        z-index: 9999;
        color: #000;
      }

      .mobile-nav-active .navbar {
        position: fixed;
        overflow: hidden;
        inset: 0;
        background: rgba(var(--color-black-rgb), 0.6);
        transition: 0.3s;
      }

      .mobile-nav-active .navbar>ul {
        display: block;
      }
    }

    /*--------------------------------------------------------------
    # Global Button
    --------------------------------------------------------------*/

    img.btn-icon {
        width: 18px;
        height: 18px;
        margin-left: 15px;
    }

    .global-btn {
        font-size: 22px;
        line-height: 29px;
        color: #000000;
        font-weight: 400;
        border-radius: 0px;
        border: 1px solid #000000;
        width: 273px;
        height: 64px;
    }
    .global-btn:hover{
        background: #483329;
    }



    /*--------------------------------------------------------------
    # Single product css
    --------------------------------------------------------------*/



    .main-img img, .imgs img {
        width: 100%;
    }

    .imgs img {
        width: 93px;
        height: 95px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    section#product-detail .content {
        display: flex;
        padding-bottom:0px !important;
    }
    .imgs {
        display: table-caption;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 3px;
        width: 120px;
        overflow-y: scroll;
        height: 415px;
        padding: 5px;
        overflow-x: hidden;
    }

    /* fade-in animation */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 0.5s ease-in forwards;
    }
    .main-img {
        width: 100%;
    }

    .main-img img {
        width: 415px;
        margin-left: 10px;
        height: 415px;
        object-fit: cover;
        border-radius: 10px;
    }
    button.single_add_to_cart_button.button {
            background-color: #22C4FF;
        color: #fff;
        border: navajowhite;
        font-size: 19px;
        border-radius: 9px;
        width: 210px;
        height: 60px;
    }
    .price strong {
        font-size: 30px;
        line-height: 35px;
        color: #252525;
        font-family: 'Poppins';
    }
    ::-webkit-scrollbar {
      width: 0px;
      height: 0px;
    }
    ::-webkit-scrollbar-thumb {
      background: rgb(90 90 90 / 0%);
    }
    ::-webkit-scrollbar-track {
      background: rgb(0 0 0 / 0%);
    }
    .product-wrapper {
        margin-left: 32px;
    }
    .carousel{
      width:100%;
      margin:0px auto;
    }
    .slick-slide{
      margin:10px;
    }
    .slick-slide img{
      width: 258px;
        height: 280px;
        margin: unset;
        object-fit: cover;
        border-radius: 10px;

    }
    .wrapper .slick-dots li button:before {
      font-size:20px;
      color:white;
    }
    button.slick-prev.slick-arrow:after {
        content: '❮' !important;
        color: #a8a5a5;
        font-size: 26px;
    }

    button.slick-prev.slick-arrow {
        background-color: transparent;
        border: none;
        color: transparent;
        width: 20px;
        position: absolute;
        left: -96px;
        top: 140px;
    }

    button.slick-next.slick-arrow {
        background-color: transparent;
        border: none;
        color: transparent;
        width: 20px;
        position: absolute;
        right: 2px;
        top: 140px;
    }
    button.slick-next.slick-arrow:after {
         content: '❯' !important;
        color: #a8a5a5;
        font-size: 26px;
    }
    section.related-product {
        background: #EEEEEE;
        padding-top: 80px;
    }
    .product-price-slider {
        text-align: center;
    }
    .product-price-slider {
        text-align: center;
    }

    .product-name-slider h1 {
        font-size: 18px;
        line-height: 30px;
        color: #252525;
        padding-top: 12px;
        margin-bottom: 0px;
    }

    .product-price-slider strong {
        font-size: 18px;
        color: #252525;
    }

    section.related-product h2 {
        font-size: 2.5rem;
    }
    .p-category h5 {
        font-size: 18px;
        line-height: 28px;
    }
    .related-product .wrapper {
        max-width: 1460px;
        margin: 0 auto;
    }
     div#crt-modal-open {
        top: 40% ;
    }
    div#crt-modal-open h5 {
        text-align: left;
        font: normal normal 500 19px/30px poppins;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
    }

    div#crt-modal-open h4 {
        text-align: left;
        font: normal normal 500 18px/30px poppins;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
    }
    div#crt-modal-open h2 {
        text-align: center;
        font: normal normal bold 25px/30px prata;
        letter-spacing: 0px;
        color: #343434;
        opacity: 1;
        margin-bottom: 15px;
        float: left;
        width: 100%;
    }
    div#crt-modal-open button.btn-close {
        background-color: red;
        opacity: 1;
        color: #fff;
        border-radius: 50%;
    }
    div#crt-modal-open .modal-header {
        border: unset !important;
    }
    div#crt-modal-open .modal-content {
        background-color: transparent !important;
        border-color: transparent;
    }
    div#crt-modal-open .modal-body {
        background-color: #fff;
        border-radius: 10px;
    }
    div#crt-modal-open button.btn-close {
        position: absolute;
        right: 0;
        top: 28px;
        z-index: 9;
    }


    @media (max-width: 769px){
        .main-img img {
       height: 280px !important;
        width: 94% !important;
    }

    .imgs {
        height: 280px !important;
    }
    section#product-detail .content {
        padding-bottom: 50px !important;
    }
    .slick-slide img {
        width: 100% !important;
        height: 280px !important;
    }
        button.slick-next.slick-arrow {
        right: 24px !important;
    }
    button.slick-prev.slick-arrow {
        left: -82px;
    }
    section#breadcrumbs {
        padding-left: 10px !important;
    }
    section.related-product {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }

    section.related-product h2 {
        font-size: 30px !important;
    }
    }



.product-banner {
    position: relative;
    top: 60px;
    padding-bottom: 100px;
}


.product-banner .brdcrm-bnnr {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 484px;
    display: flex;
    align-items: center;
    /* justify-content: center; */
    align-content: center;
}


.product-banner .breadcrumbs.d-flex {
    width: 100%;
}


.product-banner .breadcrumbs h2 {
    font-size: 60px;
    line-height: 79px;
    font-weight: 600;
    text-transform: uppercase;
    text-align: left;
    color: #fff;
    font-family: var(--font-secondary);
}


.product-banner .breadcrumbs ol {
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
}

.product-banner .breadcrumbs ol a {
    color: #fff;
    transition: 0.3s;
    text-decoration: none;
}


.product-banner .container.position-relative.d-flex.flex-column {
    pointer-events: all;
    opacity: 1;
    max-width: 78%;
}


.product-banner .breadcrumbs ol li+li::before {
    display: inline-block;
    padding-right: 10px;
    color: #fff;
    content: "/";
}

/*product-banner css end*/


    .caro-main {
        display: flex;
        padding-bottom: 20px;
    }

    .caro-main .col-6.s-heading {
        text-align: end;
    }



    .caro-main .f-head {
          font-size: 44px;
          font-weight: normal;
                   }

    .caro-main .S-text {
        font-size: 22px;
        font-weight: normal;
    }


#Main-QTY-counter {
    display: flex;
    align-items: center;
}

.QTY-text {
    padding-right: 20px;
}

.QTA-buttons {
    width: 214px;
    height: 50px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border: 1px solid #707070;
    border-radius: 12px;
    opacity: 1;
   display: flex;
    justify-content: center;
}

.related-product .carousel img {
    width: 100%;
}

.QTA-buttons input{
    border:none;
    text-align: center;
}

.QTA-buttons button#sub ,button#add {
    border: none;
    background: transparent;
}



        @media (min-width: 992px) {
          .banner-content {
            margin-left: 0;
            margin-right: auto;
          }
        }


    /*--------------------------------------------------------------
    # single-product end
    --------------------------------------------------------------*/




    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    .footer {
      overflow: hidden;
      background: #311610;
      font-size: 16px;
      color:#fff;F
    }

    .footer .footer-content {
      padding: 60px 0;
    }

    .footer a.footer-link-more {
      color: rgba(var(--color-white-rgb), 0.7);
      display: inline-block;
      position: relative;
    }

    .footer a.footer-link-more:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: var(--color-white);
    }
    .footer .whatsapp img {
        width: 100px !important;
        position: absolute;
        bottom: 40px;
        right: 0;
    }

    .footer a.footer-link-more:hover {
      color: rgba(var(--color-white-rgb), 1);
    }

    .footer .footer-heading {
      color: var(--color-white);
      margin-bottom: 20px;
      padding-bottom: 10px;
      font-size: 18px;
    }

    .footer .footer-blog-entry li {
      margin-bottom: 20px;
      display: block;
    }

    .footer .footer-blog-entry li a .post-meta {
      font-size: 10px;
      letter-spacing: 0.07rem;
      text-transform: uppercase;
      font-weight: 400;
      font-family: var(--font-secondary);
      color: rgba(var(--color-white-rgb), 0.4);
      margin-bottom: 0px;
    }

    .footer .footer-blog-entry li a img {
      width: 25px;
    }

    .footer .footer-links li {
      margin-bottom: 10px;
    }

    .footer .footer-links li a {
      color: rgba(var(--color-white-rgb), 0.7);
    }

    .footer .footer-links li a:hover,
    .footer .footer-links li a:focus {
      color: rgba(var(--color-white-rgb), 1);
    }

    .footer .footer-legal {
      background:#D0CAC6;
      color: #000;
      padding:5px 0px;
    }

    .footer .footer-legal .social-links a {
      text-align: center;
      display: inline-block;
      width: 40px;
      height: 40px;
      background-color: rgba(var(--color-white-rgb), 0.09);
      border-radius: 50%;
      color: var(--color-white);
      line-height: 40px;
    }

    .footer .footer-legal .social-links a:hover {
      background-color: rgba(var(--color-white-rgb), 0.2);
    }
    .footer .copyright {
        font-size: 15px;
        line-height: 20px;
    }

    .footer .credits {
        font-size: 15px;
        line-height: 20px;
    }
    @media only screen and (max-width: 426px) {
      .footer .credits {
        text-align: center;
     }
     .logo-sec {
        width: 40%;
    }

    .menu-sec {
        width: 20%;
        order: 3;
    }

    .icons-section {
        width: 40%;
        order: 2;
    }

    .header {
        justify-content: space-between;
        display: flex;
        align-items: center;
    }

    #navbar {
        justify-content: end;
    }
    }

    .Product-slider-main .swiper-pointer-events {
    overflow: hidden;
}
.QTA-buttons input[type="number"] {
    border: none;
    outline: none; /* Remove focus outline */
    text-align: center;
  }
  .navigation {
    position: absolute;
    right: 314px;
    margin-top: -64px;
}
 span.swiper-button-next {
    color: gray;
--swiper-navigation-size: 22px !important;
    font-weight: bolder;
    left: 0;
}
span.swiper-button-prev {
    color: gray;
    --swiper-navigation-size: 22px !important;
    font-weight: bolder;
    left: -33px;
}
</style>

<main id="main">
    <!-- ======= Banner section ======= -->

  <section id="product-banner" class="product-banner">
        <div id="" class="brdcrm-bnnr" style="background-image: url('./assets/img/abt-sub-banner.png');">
            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex">
                <div class="container position-relative d-flex flex-column" data-aos="fade">
                    <h2>OUR PRODUCTS</h2>
                    <ol>
                        <li><a href="#">Home</a></li>
                        <li>Our Products</li>
                    </ol>
                </div>

            </div>
            <!-- End Breadcrumbs -->
        </div>
    </section>

   

    <!-- ======= product-details-section ======= -->

    <section id="product-detail" class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-4 pt-lg-0 content">
                    <div class="imgs">
                        <img src="assets/img/Mask Group 1.png" />
                        <img src="assets/img/Mask Group 2.png" />
                        <img src="assets/img/Mask Group 3.png" />
                        <img src="assets/img/Mask Group 11.png" />
                    </div>
                    <div class="main-img">
                        <img src="assets/img/Mask Group 1.png" id="current" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-wrapper">
                        <div class="product-name">
                            <h1 class="prata">Stainless Steel Inlay</h1>
                        </div>
                        <div class="product-short-disc mt-4">
                            <p class="discription">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat.
                            </p>
                        </div>
                        <div id="Main-QTY-counter">

                        <div class="QTY-text">QTY</div>

                            <div class="QTA-buttons">
                              <button type="button" id="sub" class="sub">-</button>
                            <input type="number" id="1" value="1" min="1" max="3" />
                            <button type="button" id="add" class="add">+</button>
                            </div> 
                            <!-- <div id="field1">
                                <button type="button" id="sub" class="sub">-</button>
                                <input type="number" id="1" value="1" min="1" max="3" />
                                <button type="button" id="add" class="add">+</button>
                            </div> -->
                        
                    </div>

                        <div class="add-to-cart mt-5">
                            <button type="button" class="btn btn-outline-secondary global-btn">
                                DOWNLOAD PDF<span><img class="btn-icon" src="assets/img/icon-aerrow-black.png" alt="" /></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <section class="related-product">
        <div class="container" style="padding-top: ;">
            <div class="caro-main">
                <div class="col-6 f-heading">
                    <h2 class="f-head">YOU MAY ALSO LIKE</h2>
                </div>
                <div class="col-6 s-heading">
                    <h2 class="S-text">VIEW ALL</h2>
                </div>
            </div>

            <div class="wrapper">
                <div class="Product-slider-main" style="column-gap: 30px;">
                  <div class="swiper-product swiper-slider">
                    <div class="navigation">
                       <span class="swiper-button-prev"></span>
                       <span class="swiper-button-next"></span>
                     </div>
                   <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="product-open" href="#">
                            <img src="assets/img/Mask Group 1.png" />
                            <div class="product-name-slider">
                                <h1 class="text-center">Stainless Steel Inlay</h1>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="product-open" href="#">
                            <img src="assets/img/Mask Group 2.png" />
                            <div class="product-name-slider">
                                <h1 class="text-center">Glass View</h1>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="product-open" href="#">
                            <img src="assets/img/Mask Group 3.png" />
                            <div class="product-name-slider">
                                <h1 class="text-center">Solid Timber</h1>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="product-open" href="#">
                            <img src="assets/img/Image 11.png" />
                            <div class="product-name-slider">
                                <h1 class="text-center">Classic</h1>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="product-open" href="#">
                            <img src="assets/img/vd.png" />
                            <div class="product-name-slider">
                                <h1 class="text-center">Veneer</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
    </section>
    <!-- end product-details-section -->
    <section id="cart-modal">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade-in" id="crt-modal-open" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Item added to cart</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <img src="assets/img/home/shop_product.png" style="max-width: 100%;" alt="img" />
                            </div>
                            <div class="col-md-8 col-sm-8 col-8 ps-0">
                                <h5>Guzheng Dust Cover</h5>
                                <h4 id="priceHtmlATC">$ 5.80</h4>
                                <div class="single-product-cart">
                                    <a href="/websentialsdraft3/view-cart.php" class="btn btn-primary btn-sm ms-0" style="min-width: 140px; margin: 5px; background: #22c4ff; color: #fff; border-color: #22c4ff; border-radius: 0px;">
                                        VIEW CART
                                    </a>
                                    <a href="/websentialsdraft3/checkout.php" class="btn btn-primary btn-sm" style="min-width: 140px; margin: 5px; background: #22c4ff; color: #fff; border-color: #22c4ff; border-radius: 0px;">CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->

<script type="text/javascript">
    const current = document.querySelector("#current");
    const imgs = document.querySelectorAll(".imgs img");
    const opacity = 0.6;

    //set first image opacity
    imgs[0].style.opacity = opacity;

    //using es6 arrow function
    imgs.forEach((img) => img.addEventListener("click", imgClick));

    function imgClick(e) {
        //reset the opaticy
        imgs.forEach((img) => (img.style.opacity = 1));

        //change current image to src of clicked image
        current.src = e.target.src;

        //add fade in class
        current.classList.add("fade-in");

        //remove fade-in class after 0.5 seconds
        setTimeout(() => current.classList.remove("fade-in"), 500);

        //change the opacity to opacity var
        e.target.style.opacity = opacity;
    }

    $(document).ready(function () {
        $(".carousel").slick({
            slidesToShow: 4,
            dots: false,
            arrows: true,

            responsive: [
                {
                    breakpoint: 1024, // Define breakpoint for medium-sized devices
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 768, // Define breakpoint for small devices
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 480, // Define breakpoint for extra small devices
                    settings: {
                        slidesToShow: 1,
                    },
                },
                // Add more breakpoints if needed
            ],
        });
    });
// swiper-sproduct-slider

const swiper = new Swiper('.swiper-product', {
  // Optional parameters
  loop: true,
  slidesPerView: 5,
  centeredSlides: true,
  slideToShow: 5, // Typo fixed: 'slideToShow' instead of 'slidetoshow'

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 0 // Adjust space between slides if needed
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
      spaceBetween: 0 // Adjust space between slides if needed
    },
    // when window width is >= 1280px
    1280: {
      slidesPerView: 5,
      spaceBetween: 0 // Adjust space between slides if needed
    }
  }
});

// end-swiper

    // Slick version 1.5.8
</script>

<script>
    // function for hover images
    function hover_image(id1, id2) {
        $(id1).on("mouseenter", function () {
            $(id1).addClass("rem_img");
            $(id2).removeClass("rem_img");
        });
        $(id2).on("mouseleave", function () {
            $(id2).addClass("rem_img");
            $(id1).removeClass("rem_img");
        });
    }

    $(document).ready(function () {
        hover_image(".img1", ".img2");
        hover_image(".img3", ".img4");
        hover_image(".img5", ".img6");
    });

    // Quantity counter js

    $(".add").click(function () {
        if ($(this).prev().val() < 100) {
            $(this)
                .prev()
                .val(+$(this).prev().val() + 1);
        }
    });
    $(".sub").click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1)
                $(this)
                    .next()
                    .val(+$(this).next().val() - 1);
        }
    });

    // end js
</script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" />
<!-- Include the Slick JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>

<?php
include('footer.php');
?>
