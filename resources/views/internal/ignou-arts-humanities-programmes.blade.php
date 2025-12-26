@extends('layouts.user')
@section('page_h1', 'Master of Arts Programmes (Arts &amp; Humanities)')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --primary: #3b82f6;
        --primary-dark: #1d4ed8;
        --accent: #10b981;
        --bg: #f8fafc;
        --card-bg: #ffffff;
        --text: #0f172a;
        --text-light: #64748b;
        --shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 25px 50px rgba(59, 130, 246, 0.22);
        --radius: 24px;
        --transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: var(--text);
        min-height: 100vh;
        perspective: 1500px;
        overflow-x: hidden;
    }

    .container {
        width: 90%;
        max-width: 1350px;
        margin: 70px auto 100px;
        padding: 0 20px;
        transform-style: preserve-3d;
    }

    .page-title {
        text-align: center;
        font-size: 2.4rem;
        font-weight: 800;
        background: linear-gradient(120deg, #3b82f6, #8b5cf6, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 3rem;
        letter-spacing: -1px;
        transform: translateZ(30px);
    }

    .search-container {
        max-width: 700px;
        margin: 0 auto 3.5rem;
        position: relative;
        transform: translateZ(40px);
    }

    .search-bar {
        width: 100%;
        padding: 20px 24px 20px 60px;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 36px;
        background: var(--card-bg);
        outline: none;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .1);
        transition: var(--transition);
        backdrop-filter: blur(12px);
        color: var(--text);
        transform: translateZ(0);
    }

    .search-bar::placeholder {
        color: #94a3b8;
        font-weight: 500;
    }

    .search-bar:focus {
        transform: translateY(-4px) translateZ(50px);
        box-shadow: 0 15px 40px rgba(59, 130, 246, .2);
        border: 2px solid var(--primary);
    }

    .search-icon {
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        width: 24px;
        height: 24px;
        color: #94a3b8;
        transition: var(--transition);
    }

    .search-bar:focus+.search-icon {
        color: var(--primary);
        transform: translateY(-50%) scale(1.2) translateZ(20px);
    }

    #courseList {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 32px;
        margin-top: 20px;
        transform-style: preserve-3d;
        perspective: 1200px;
    }

    .course-card {
        background: var(--card-bg);
        border-radius: var(--radius);
        padding: 28px 30px;
        position: relative;
        height: 130px;
        display: block;
        text-decoration: none;
        color: inherit;
        transform-style: preserve-3d;
        transition: var(--transition);
        cursor: pointer;
        overflow: hidden;
        box-shadow: var(--shadow);
        opacity: 0;
        animation: cardFlyIn .7s ease forwards;
        animation-fill-mode: both;
        border: 1px solid #9d4be9;
        transition: all 0.3s ease;
    }




    .card-layer {
        position: absolute;
        inset: 0;
        border-radius: var(--radius);
        transition: var(--transition);
    }

    .layer-1 {
        background: linear-gradient(135deg, rgba(59, 130, 246, .12) 0%, rgba(139, 92, 246, .08) 100%);
        transform: translateZ(-20px);
        opacity: 0;
    }

    .layer-2 {
        background: linear-gradient(45deg, rgba(16, 185, 129, .1) 0%, transparent 70%);
        transform: translateZ(-40px);
        opacity: 0;
        filter: blur(8px);
    }

    .layer-3 {
        background: radial-gradient(circle at 30% 30%, rgba(236, 72, 153, .15), transparent 60%);
        transform: translateZ(-60px);
        opacity: 0;
    }

    .course-card:hover {
        transform: translateY(-20px) translateZ(80px) rotateX(8deg) rotateY(-5deg);
        box-shadow: var(--shadow-hover);
        transform: scale(1.5);
    }

    .course-card:hover .layer-1,
    .course-card:hover .layer-2,
    .course-card:hover .layer-3 {
        opacity: 1;

    }

    .course-info {
        transform: translateZ(40px);
        z-index: 2;
    }

    .course-info h3 {
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.3;
        transition: var(--transition);
        background: linear-gradient(90deg, #1e293b, #475569);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .course-card:hover h3 {
        transform: translateZ(20px);
        background: linear-gradient(90deg, var(--primary), #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .course-code {
        font-size: .85rem;
        color: var(--primary);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        transition: var(--transition);
        transform: translateZ(30px);
    }

    .course-card:hover .course-code {
        color: var(--primary-dark);
        transform: translateZ(50px) scale(1.05);
    }

    .arrow-3d {
        position: absolute;
        bottom: 20px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary), #8b5cf6);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 900;
        transition: var(--transition);
        box-shadow: 0 8px 20px rgba(59, 130, 246, .3);
        transform: translateZ(45px);
        overflow: hidden;
    }

    .arrow-3d::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, transparent 40%, rgba(255, 255, 255, .3) 50%, transparent 60%);
        transform: translateX(-100%);
        transition: var(--transition);
    }

    .course-card:hover .arrow-3d {
        transform: translateZ(70px) scale(1.2) rotate(20deg);
        box-shadow: 0 15px 30px rgba(59, 130, 246, .4);
    }

    .course-card:hover .arrow-3d::before {
        transform: translateX(100%);
    }

    .course-card:nth-child(3n+1) .arrow-3d {
        background: linear-gradient(135deg, #1078b9ff, #34abd3ff);
    }

    .course-card:nth-child(3n+2) .arrow-3d {
        background: linear-gradient(135deg, #0be9f5ff, #247dfbff);
    }

    .course-card:nth-child(3n) .arrow-3d {
        background: linear-gradient(135deg, #48a2ecff, #3f69f4ff);
    }

    @media (max-width: 1024px) {
        #courseList {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 28px;
        }
    }

    @media (max-width: 768px) {
        .container {
            margin: 50px auto 80px;
            padding: 0 16px;
        }

        .page-title {
            font-size: 2rem;
        }

        #courseList {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .course-card {
            height: 120px;
            padding: 24px 26px;
        }

        .course-card:hover {
            transform: translateY(-15px) translateZ(60px);
        }

        .arrow-3d {
            bottom: 18px;
            right: 26px;
            width: 45px;
            height: 45px;
            font-size: 1.3rem;
        }
    }

    @media (max-width: 480px) {
        .search-bar {
            padding: 18px 20px 18px 55px;
            font-size: 1rem;
        }

        .course-info h3 {
            font-size: 1.1rem;
        }
    }

    @keyframes cardFlyIn {
        0% {
            opacity: 0;
            transform: translateY(100px) translateZ(-300px) rotateX(-30deg) scale(.8);
        }

        100% {
            opacity: 1;
            transform: translateY(0) translateZ(0) rotateX(0) scale(1);
        }
    }

    /* Extended animation delays for 36 cards */
    .course-card:nth-child(1) {
        animation-delay: .1s;
    }

    .course-card:nth-child(2) {
        animation-delay: .2s;
    }

    .course-card:nth-child(3) {
        animation-delay: .3s;
    }

    .course-card:nth-child(4) {
        animation-delay: .4s;
    }

    .course-card:nth-child(5) {
        animation-delay: .5s;
    }

    .course-card:nth-child(6) {
        animation-delay: .6s;
    }

    .course-card:nth-child(7) {
        animation-delay: .7s;
    }

    .course-card:nth-child(8) {
        animation-delay: .8s;
    }

    .course-card:nth-child(9) {
        animation-delay: .9s;
    }

    .course-card:nth-child(10) {
        animation-delay: 1.0s;
    }

    .course-card:nth-child(11) {
        animation-delay: 1.1s;
    }

    .course-card:nth-child(12) {
        animation-delay: 1.2s;
    }

    .course-card:nth-child(13) {
        animation-delay: 1.3s;
    }

    .course-card:nth-child(14) {
        animation-delay: 1.4s;
    }

    .course-card:nth-child(15) {
        animation-delay: 1.5s;
    }

    .course-card:nth-child(16) {
        animation-delay: 1.6s;
    }

    .course-card:nth-child(17) {
        animation-delay: 1.7s;
    }

    .course-card:nth-child(18) {
        animation-delay: 1.8s;
    }

    .course-card:nth-child(19) {
        animation-delay: 1.9s;
    }

    .course-card:nth-child(20) {
        animation-delay: 2.0s;
    }

    .course-card:nth-child(21) {
        animation-delay: 2.1s;
    }

    .course-card:nth-child(22) {
        animation-delay: 2.2s;
    }

    .course-card:nth-child(23) {
        animation-delay: 2.3s;
    }

    .course-card:nth-child(24) {
        animation-delay: 2.4s;
    }

    .course-card:nth-child(25) {
        animation-delay: 2.5s;
    }

    .course-card:nth-child(26) {
        animation-delay: 2.6s;
    }

    .course-card:nth-child(27) {
        animation-delay: 2.7s;
    }

    .course-card:nth-child(28) {
        animation-delay: 2.8s;
    }

    .course-card:nth-child(29) {
        animation-delay: 2.9s;
    }

    .course-card:nth-child(30) {
        animation-delay: 3.0s;
    }

    .course-card:nth-child(31) {
        animation-delay: 3.1s;
    }

    .course-card:nth-child(32) {
        animation-delay: 3.2s;
    }

    .course-card:nth-child(33) {
        animation-delay: 3.3s;
    }

    .course-card:nth-child(34) {
        animation-delay: 3.4s;
    }

    .course-card:nth-child(35) {
        animation-delay: 3.5s;
    }

    .course-card:nth-child(36) {
        animation-delay: 3.6s;
    }
</style>

<div class="container">
    <h3 class="page-title">Master of Arts Programmes (Arts &amp; Humanities)</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by name or code...">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>

    <div id="courseList">

        <!-- 1. MEG -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-English-Admission-2025']) }}" class="course-card" data-search="english meg">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (English)</h3>
                <p class="course-code">MEG</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 2. MHD -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Hindi-Admission-2025']) }}" class="course-card" data-search="hindi mhd">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Hindi)</h3>
                <p class="course-code">MHD</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>



        <!-- 6. MAPY -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Philosophy-Admission-2025']) }}" class="course-card" data-search="philosophy mapy">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Philosophy)</h3>
                <p class="course-code">MAPY</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 7. MPS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Political-Science-Admission-2025']) }}" class="course-card" data-search="political science mps">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Political Science)</h3>
                <p class="course-code">MPS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 8. MAHI -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-History-Admission-2025']) }}" class="course-card" data-search="history mahi">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (History)</h3>
                <p class="course-code">MAHI</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 9. MSO -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Sociology-Admission-2025']) }}" class="course-card" data-search="sociology mso">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Sociology)</h3>
                <p class="course-code">MSO</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 10. MAEC -->
        <a href="#" class="course-card" data-search="economics maec">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Economics)</h3>
                <p class="course-code">MAEC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 11. MPA -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Public-Administration-MPA-2025']) }}" class="course-card" data-search="public administration mpa">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Public Administration)</h3>
                <p class="course-code">MPA</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 12. MGPS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Gandhi-and-Peace-Studies-Admission-2025']) }}" class="course-card" data-search="gandhi peace studies mgps">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Gandhi and Peace Studies)</h3>
                <p class="course-code">MGPS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 13. MARD -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Rural-Development-2025']) }}" class="course-card" data-search="rural development mard">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Rural Development)</h3>
                <p class="course-code">MARD</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 14. MAEDU -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Education-Admission-2025']) }}" class="course-card" data-search="education maedu">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Education)</h3>
                <p class="course-code">MAEDU</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 15. MAAE -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Adult-Education-Admission-2025']) }}" class="course-card" data-search="adult education maae">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Adult Education)</h3>
                <p class="course-code">MAAE</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 16. MAAN -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Anthropology-Admission-2025']) }}" class="course-card" data-search="anthropology maan">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Anthropology)</h3>
                <p class="course-code">MAAN</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 17. MAFCS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Folklore-and-Culture-Studies-Admission-2025']) }}" class="course-card" data-search="folklore culture studies mafcs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Folklore and Culture Studies)</h3>
                <p class="course-code">MAFCS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 18. MAENOH -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Environmental-Studies-Admission-2025']) }}" class="course-card" data-search="environmental occupational health maenoh">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Environmental and Occupational Health)</h3>
                <p class="course-code">MAENOH</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 19. MASS / MAEVS -->
        <a href="#" class="course-card" data-search="sustainable environmental studies mass maevs evs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Sustainable/Environmental Studies)</h3>
                <p class="course-code">MASS / MAEVS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 20. MAMID -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Migration-and-Diaspora-Admission-2025']) }}" class="course-card" data-search="migration diaspora mamid">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Migration and Diaspora)</h3>
                <p class="course-code">MAMID</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 21. MADVS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Education-Admission-2025']) }}" class="course-card" data-search="development studies madvs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Development Studies)</h3>
                <p class="course-code">MADVS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 22. MACSR -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Corporate-Social-Responsibility-Admission-2025']) }}" class="course-card" data-search="corporate social responsibility macsr">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Corporate Social Responsibility)</h3>
                <p class="course-code">MACSR</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 23. MAUS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-Urban-Studies-Admission-2025']) }}" class="course-card" data-search="urban studies maus">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Urban Studies)</h3>
                <p class="course-code">MAUS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 24. MAPFHS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MAPFHS-Admission-2025-MA-Population-and-Family-Health-Studies']) }}" class="course-card" data-search="population family health studies mapfhs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Population and Family Health Studies)</h3>
                <p class="course-code">MAPFHS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 25. MAWGSR -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-Womens-and-Gender-Studies-Admission-2025']) }}" class="course-card" data-search="women gender studies mawgsr">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Women and Gender Studies)</h3>
                <p class="course-code">MAWGSR</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 26. MAGD -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Gender-Development-Studies-2025']) }}" class="course-card" data-search="gender development studies magd">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Gender and Development Studies)</h3>
                <p class="course-code">MAGD</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 27. MATS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Translation-Studies-Admission-2025']) }}" class="course-card" data-search="translation studies mats">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Translation Studies)</h3>
                <p class="course-code">MATS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 28. MFAP -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-Master-of-Fine-Arts-in-Painting-Admission-2025']) }}" class="course-card" data-search="painting mfap">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Painting)</h3>
                <p class="course-code">MFAP</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 29. MAARB -->
        <a href="#" class="course-card" data-search="arabic maarb">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Arabic)</h3>
                <p class="course-code">MAARB</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 30. MAPRS -->
        <a href="#" class="course-card" data-search="persian maprs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Persian)</h3>
                <p class="course-code">MAPRS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 31. MAFL -->
        <a href="#" class="course-card" data-search="french mafl">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (French)</h3>
                <p class="course-code">MAFL</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 32. MASL -->
        <a href="#" class="course-card" data-search="spanish masl">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Spanish)</h3>
                <p class="course-code">MASL</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 33. MAJDM -->
        <a href="#" class="course-card" data-search="journalism digital media majd">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Journalism and Digital Media)</h3>
                <p class="course-code">MAJDM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 34. MAJMC -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-Journalism-and-Mass-Communication-Admission-2025']) }}" class="course-card" data-search="journalism mass communication majmc">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Journalism and Mass Communication)</h3>
                <p class="course-code">MAJMC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 35. MADDJ -->
        <a href="#" class="course-card" data-search="development journalism maddj">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Development Journalism)</h3>
                <p class="course-code">MADDJ</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 36. MAPPG -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MA-in-Public-Administration-MPA-2025']) }}" class="course-card" data-search="public policy governance mappg">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Arts (Public Policy and Governance)</h3>
                <p class="course-code">MAPPG</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

    </div>
</div>

<script>
    function searchCourses() {
        const query = document.getElementById('searchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.course-card');

        cards.forEach((card, i) => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const code = card.querySelector('.course-code').textContent.toLowerCase();
            const extra = (card.getAttribute('data-search') || '').toLowerCase();
            const matches = title.includes(query) || code.includes(query) || extra.includes(query);

            if (matches) {
                card.style.display = '';
                card.style.opacity = '0';
                card.style.transform = 'translateY(100px) translateZ(-300px) rotateX(-30deg) scale(0.8)';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) translateZ(0) rotateX(0) scale(1)';
                }, 100 + i * 50);
            } else {
                card.style.display = 'none';
            }
        });
    }

    document.querySelector('#courseList')?.addEventListener('mousemove', (e) => {
        const cards = document.querySelectorAll('.course-card');
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            card.style.transform = `rotateY(${x / 30}deg) rotateX(${-y / 30}deg) translateZ(0)`;
        });
    });

    document.querySelector('#courseList')?.addEventListener('mouseleave', () => {
        document.querySelectorAll('.course-card').forEach(card => {
            card.style.transform = 'rotateY(0) rotateX(0) translateZ(0)';
        });
    });
</script>

@endsection