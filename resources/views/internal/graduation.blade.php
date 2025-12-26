@extends('layouts.user')
@section('page_h1', 'UNDER GRADUATES PROGRAMMES ')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')


<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
        justify-items: center;
    }

    .grid a {
        display: block;
        text-decoration: none;
    }

    .card {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        width: 220px;
        height: 160px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, .1);
        position: relative;
        transition: .2s;
    }

    .card:hover {
        transform: translateY(-3px);
    }

    .arrow-btn {
        position: absolute;
        left: 50%;
        bottom: 15px;
        transform: translateX(-50%);
    }

    .view-more-card {
        position: relative;
        overflow: hidden;
        background: #e9f6ff;
        border: 2px dashed #0099ff;
        color: #0099ff;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* stronger, darker wave effect */
    .view-more-card::before,
    .view-more-card::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 250%;
        /* bigger circle */
        height: 250%;
        transform: translate(-50%, -50%) scale(0);
        border-radius: 50%;
        background: radial-gradient(circle,
                rgba(0, 153, 255, 0.5) 0%,
                /* darker center */
                rgba(0, 153, 255, 0.35) 30%,
                rgba(0, 153, 255, 0.15) 55%,
                transparent 75%);
        animation: wavePulse 2.5s ease-in-out infinite;
        pointer-events: none;
        z-index: 0;
    }

    .view-more-card::after {
        animation-delay: 1.25s;
    }

    /* smoother animation */
    @keyframes wavePulse {
        0% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 1;
        }

        60% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.4;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.4);
            opacity: 0;
        }
    }

    /* make text stay above waves */
    .view-more-card>* {
        position: relative;
        z-index: 1;
    }

    /* faster ripple when hovered */
    .view-more-card:hover::before,
    .view-more-card:hover::after {
        animation-duration: 1.8s;
        background: radial-gradient(circle,
                rgba(0, 153, 255, 0.6) 0%,
                rgba(0, 153, 255, 0.4) 35%,
                rgba(0, 153, 255, 0.2) 60%,
                transparent 75%);
    }



    /* IMPORTANT: hidden by default; when .open => display: contents to stay in grid */
    #extraCards {
        display: none;
    }

    #extraCards.open {
        display: contents;
    }




    .course-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
        justify-items: center;
    }

    /* Each course card */
    .course-item {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        width: 220px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        transition: 0.3s;
        font-weight: 700;
    }

    .course-item:hover {
        transform: translateY(-4px);
    }

    .course-code {
        color: #b1b3b5;
    }

    .course-btn {
        background-color: #0099ff;
        border: none;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        width: 35px;
        height: 35px;
        cursor: pointer;
        position: absolute;
        bottom: -10px;
        /* was 15px – change to 8px to move slightly lower */
        left: 50%;
        z-index: 700;
        transform: translateX(-50%);
    }

    /* Wave animation for view more */
    .course-viewmore {
        background: #e9f6ff;
        border: 2px dashed #0099ff;
        color: #0099ff;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .course-viewmore::before,
    .course-viewmore::after {
        content: "";
        position: absolute;
        width: 250%;
        height: 250%;
        background: radial-gradient(circle, rgba(0, 153, 255, 0.3) 20%, transparent 70%);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        border-radius: 50%;
        animation: wavePulseNew 3s infinite ease-in-out;
        z-index: 0;
    }

    .course-viewmore::after {
        animation-delay: 1.4s;
    }

    .course-viewmore span {
        position: relative;
        z-index: 1;
    }

    @keyframes wavePulseNew {
        0% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 0.9;
        }

        70% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.3;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 0;
        }
    }

    /* Hide extra cards initially */
    .extra-items {
        display: none;
    }

    /* Responsive */
    @media (max-width: 600px) {
        .course-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }
    }



















    .program-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
        justify-items: center;
    }

    /* individual card */
    .program-box {
        background: #fff;
        border-radius: 12px;
        padding: 20px 20px 27px;
        /* extra bottom padding for arrow */
        text-align: center;
        width: 220px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        transition: all 0.3s ease;
        overflow: visible;
        font-weight: 700;
        /* prevent arrow clipping */
    }

    .program-box:hover {
        transform: translateY(-4px);
    }

    .program-code {
        color: #b1b3b5;
    }

    .program-btn {
        background-color: #0099ff;
        border: none;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        width: 35px;
        height: 35px;
        cursor: pointer;
        position: absolute;
        bottom: -10px;
        /* lower arrow button */
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
    }

    /* view more card */
    .program-viewmore {
        background: #eaf9f1;
        border: 2px dashed #0099ff;
        color: #0099ff;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .program-viewmore:hover {
        background: #d9f5e4;
        transform: scale(1.03);
    }

    /* wave animation */
    .program-viewmore::before,
    .program-viewmore::after {
        content: "";
        position: absolute;
        width: 260%;
        height: 260%;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        background: radial-gradient(circle,
                rgba(0, 153, 255, 0.6) 0%,
                rgba(0, 153, 255, 0.4) 35%,
                rgba(0, 153, 255, 0.2) 60%,
                transparent 70%);
        transform: translate(-50%, -50%) scale(0);
        animation: pulseWaveGreen 3s ease-in-out infinite;
        z-index: 0;
    }

    .program-viewmore::after {
        animation-delay: 1.5s;
    }

    @keyframes pulseWaveGreen {
        0% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 0.9;
        }

        60% {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 0.35;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.3);
            opacity: 0;
        }
    }

    .program-viewmore span {
        position: relative;
        z-index: 2;
    }

    /* hide extra cards */
    .more-programs {
        display: none;
    }

    /* responsive */
    @media (max-width: 600px) {
        .program-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }
    }



    .coursegrid-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
        justify-items: center;
    }

    /* Each card */
    .coursegrid-card {
        background: #fff;
        border-radius: 12px;
        padding: 20px 20px 30px;
        text-align: center;
        width: 220px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        transition: all 0.3s ease;
        overflow: visible;
    }

    .coursegrid-card:hover {
        transform: translateY(-4px);
    }

    .coursegrid-code {
        color: #b1b3b5;
    }

    .coursegrid-btn {
        background-color: #0099ff;
        border: none;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        width: 35px;
        height: 35px;
        cursor: pointer;
        position: absolute;
        bottom: 8px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
    }

    /* View More Card */
    .coursegrid-viewmore {
        background: #f0f9ffff;
        border: 2px dashed #0099ff;
        color: #0099ff;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .coursegrid-viewmore:hover {
        background: #e0f4ffff;
        transform: scale(1.03);
    }

    /* Orange Wave Animation */
    .coursegrid-viewmore::before,
    .coursegrid-viewmore::after {
        content: "";
        position: absolute;
        width: 260%;
        height: 260%;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        background: radial-gradient(circle,
                rgba(0, 140, 255, 0.4) 0%,
                rgba(0, 106, 255, 0.2) 40%,
                transparent 70%);
        transform: translate(-50%, -50%) scale(0);
        animation: pulseWaveOrange 3s ease-in-out infinite;
        z-index: 0;
    }

    .coursegrid-viewmore::after {
        animation-delay: 1.5s;
    }

    @keyframes pulseWaveOrange {
        0% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 0.9;
        }

        60% {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 0.35;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.3);
            opacity: 0;
        }
    }

    .coursegrid-viewmore span {
        position: relative;
        z-index: 2;
    }

    /* Hidden Extra Cards */
    .coursegrid-extra {
        display: none;
    }

    /* Responsive */
    @media (max-width: 600px) {
        .coursegrid-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<div class="page-content ">
    <!--banner-->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>UNDER GRADUATES PROGRAMMES </h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('page.show', ['page' => 'index']) }}"> Home</a></li>
                        <li class="breadcrumb-item">UNDER GRADUATES PROGRAMMES</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



    <div class="bg-tech">

        <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">UNDER GRADUATES PROGRAMMES UNDER (FYUP)</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'Bachelor-of-Arts-Programmes']) }}">
                    <div class="card">Bachelor of Arts Programmes<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Bachelor-of-Science-programmes']) }}">
                    <div class="card">
                        Bachelor of Science<br>
                        Programmes

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'IGNOU-BCom-Admission-2025']) }}">
                    <div class="card">
                        Bachelor of Commerce <br>
                        Programme
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="#">
                    <div class="card">
                        Bachelor of Tourism And Travel Management<br>
                        <p style="color:#b1b3b5;">(BFTTM)</p>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>


                <!-- 5th: View More in grid -->
                <a href="{{ route('page.show', ['page' => 'four-year-under-graduate-programm']) }}">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>

        <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">MASTER DEGREE PROGRAMS</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'Management-Business-Programs']) }}">
                    <div class="card">Management & Business Programs<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Ignou-Arts-Humanities-Programmes']) }}">
                    <div class="card">
                        Arts & Humanities<br>
                        Programmes

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Master-Programmes-Social-Work-Counselling']) }}">
                    <div class="card">
                        Social Work & Counselling <br>
                        Programmes
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Master-of-Science-Programmes-Science']) }}">
                    <div class="card">
                        Science Programmes<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'ignou-Computer-Applications-IT']) }}">
                    <div class="card">
                        Computer Applications<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'IGNOU-Master-of-Library-and-Information-Science-Admission-2025']) }}">
                    <div class="card">
                        Library & Information Science<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'IGNOU-Master-of-Tourism-and-Travel-Management-Admission-2025']) }}">
                    <div class="card">
                        Tourism & Travel Management<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>




                <!-- 5th: View More in grid -->
                <a href="#">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>


        <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">POST GRADUATE DIPLOMA PROGRAMMES</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'post-graduate-Education-Teaching-Related-Programs']) }}">
                    <div class="card">Education & Teaching Related Programs<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Pg-Social-Work-Development-Programmes']) }}">
                    <div class="card">
                        Social Work & Development<br>
                        Programmes

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Pg-Health-Psychology-Programmes']) }}">
                    <div class="card">
                        Health & Psychology <br>
                        Programmes
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Pg-Management-Business-Programmes']) }}">
                    <div class="card">
                        Management & Business Programmes<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Journalism-Communication-Programmes']) }}">
                    <div class="card">
                        Journalism & Communication<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Computer-IT-Programmes']) }}">
                    <div class="card">
                        Computer & IT<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Environment-Disaster-Management-Programmes']) }}">
                    <div class="card">
                        Environment & Disaster Management<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Languages-Literature-Programmes']) }}">
                    <div class="card">
                        Languages & Literature<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Law-Criminal-Justice-Programmes']) }}">
                    <div class="card">
                        Law & Criminal Justice<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-Women-Gender-Studies-Programmes']) }}">
                    <div class="card">
                        Women & Gender Studies<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Pg-others-specialized']) }}">
                    <div class="card">
                        Others / Specialized<br>

                        <button class="arrow-btn">›</button>
                    </div>
                </a>





                <!-- 5th: View More in grid -->
                <a href="#">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>









         <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">DIPLOMA PROGRAMMES</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-healthcare-nursing']) }}">
                    <div class="card">Healthcare & Nursing<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Agriculture-food-processing']) }}">
                    <div class="card">
                       Agriculture & Food Processing

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Business-Finance-management']) }}">
                    <div class="card">
                       Business, Finance & Management
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Retail-merchandising']) }}">
                    <div class="card">
                       Retail & Merchandising
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Creative-Arts-Languages']) }}">
                    <div class="card">
                        Creative Arts & Languages

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-engineering-technology']) }}">
                    <div class="card">
                        Engineering & Technology

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Diploma-programmes-administration-development']) }}">
                    <div class="card">
                       Administration & Development
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
               





                <!-- 5th: View More in grid -->
                <a href="#">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>






         <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">POST GRADUATE CERTIFICATE PROGRAMMES</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-engineering-technology']) }}">
                    <div class="card">Technology & Engineering<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Agriculture-Environment']) }}">
                    <div class="card">
                       Agriculture & Environment

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Safety-Industrial-Management']) }}">
                    <div class="card">
                      Safety & Industrial Management
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Peace-Gandhian-Studies']) }}">
                    <div class="card">
                       Peace & Gandhian Studies
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Languages-Translation']) }}">
                    <div class="card">
                       Languages & Translation

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Medical-Disaster-Management']) }}">
                    <div class="card">
                       Medical & Disaster Management
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
               





                <!-- 5th: View More in grid -->
                <a href="#">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>


  <div class="container mt-4 mb-5">

            <h3 class="mt-5 p-5 text-center">CERTIFICATE PROGRAMMES</h3>

            <div class="search-box">
                <input type="text" id="search" placeholder="Search by subject">
            </div>



            <div class="grid" id="cardGrid">
                <!-- 1–4 -->
                <a href="{{ route('page.show', ['page' => 'certificate-programmes-health-nutrition-child-care']) }}">
                    <div class="card">Health, Nutrition & Child Care<br>
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'certificate-programmes-disability-special-education']) }}">
                    <div class="card">
                       Disability & Special Education

                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'certificate-programmes-agriculture-environment-animal-husbandry']) }}">
                    <div class="card">
                     Agriculture, Environment & Animal Husbandry
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                <a href="{{ route('page.show', ['page' => 'certificate-programmes-languages-translation']) }}">
                    <div class="card">
                       Languages & Translation
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'certificate-programmes-teaching-education']) }}">
                    <div class="card">
                       Teaching & Education

                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'certificate-programmes-arts-performing-arts-culture']) }}">
                    <div class="card">
                       Arts, Performing Arts & Culture
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                <a href="{{ route('page.show', ['page' => 'certificate-programmes-technology-it-security']) }}">
                    <div class="card">
                       Technology, IT & Security
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                 <a href="{{ route('page.show', ['page' => 'certificate-programmes-law-rights-governance']) }}">
                    <div class="card">
                      Law, Rights & Governance
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                 <a href="{{ route('page.show', ['page' => 'certificate-programmes-disaster-management-environment']) }}">
                    <div class="card">
                      Disaster Management & Environment
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                 <a href="{{ route('page.show', ['page' => 'certificate-programmes-community-social-development']) }}">
                    <div class="card">
                       Community & Social Development
                        <button class="arrow-btn">›</button>
                    </div>
                </a>

                 <a href="{{ route('page.show', ['page' => 'certificate-programmes-business-skills-laboratory']) }}">
                    <div class="card">
                      Business, Skills & Laboratory
                        <button class="arrow-btn">›</button>
                    </div>
                </a>
                 



                <!-- 5th: View More in grid -->
                <a href="#">
                    <div class="card view-more-card" id="viewMoreBtn">+ View More</div>
                </a>

                <!-- Extra cards (hidden initially) -->

            </div>











        </div>




    </div>

    <!-- Newsletter -->
    <section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
        <div class="container">
            <div class="subscride-inner">
                <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-head mb-0">
                            <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <form class="dzSubscribe style-1" action="" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
                                            <span>SUBSCRIBE</span>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

</div>
@endsection