@extends('layouts.user')
@section('page_h1', 'Master of Science Programmes (Science)')
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
        --shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 25px 50px rgba(59, 130, 246, 0.22);
        --radius: 24px;
        --transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: var(--text);
        min-height: 100vh;
        overflow-x: hidden;
    }

    .container {
        width: 90%;
        max-width: 1350px;
        margin: 70px auto 100px;
        padding: 0 20px;
    }

    .page-title {
        text-align: center;
        font-size: 2.4rem;
        font-weight: 800;
        background: linear-gradient(120deg, #3b82f6, #8b5cf6, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 3rem;
    }

    .search-container {
        max-width: 700px;
        margin: 0 auto 3.5rem;
        position: relative;
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
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
        color: var(--text);
    }

    .search-bar::placeholder {
        color: #94a3b8;
        font-weight: 500;
    }

    .search-bar:focus {
        transform: translateY(-4px);
        box-shadow: 0 15px 40px rgba(59, 130, 246, 0.2);
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
    }

    #courseList {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 32px;
        margin-top: 20px;
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
        transition: var(--transition);
        box-shadow: var(--shadow);
        cursor: pointer;
    }

    .course-card:hover {
        transform: translateY(-15px) scale(1.03);
        box-shadow: var(--shadow-hover);
    }

    .course-info h3 {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--text);
        line-height: 1.3;
    }

    .course-code {
        font-size: 0.85rem;
        color: var(--primary);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .arrow-3d {
        position: absolute;
        bottom: 15px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary), #8b5cf6);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 900;
        transition: var(--transition);
    }

    .course-card:hover .arrow-3d {
        transform: scale(1.2) rotate(20deg);
    }
</style>

<div class="container">
    <h3 class="page-title">Master of Science Programmes (Science)</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by name or code...">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>

    <div id="courseList">
        <!-- Updated Science degrees -->

        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-in-food-nutrition-Admission-2025']) }}" class="course-card" data-search="food nutrition mscdfsm">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Food Nutrition)</h3>
                <p class="course-code">MSCDFSM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 41. MSCENV -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Environmental-Science-Admission-2025']) }}" class="course-card" data-search="environmental science mscenv">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Environmental Science)</h3>
                <p class="course-code">MSCENV</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 42. MSCHSC -->
        <a href="#" class="course-card" data-search="home science community development mschsc">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Home Science — Community Development and Extension Management)</h3>
                <p class="course-code">MSCHSC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 43. Home Science (Other Specializations) -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Home-Science-Admission-2025']) }}" class="course-card" data-search="home science other specializations">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Home Science — other specializations)</h3>
                <p class="course-code">—</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 44. MSCGG -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Geography-Admission-2025']) }}" class="course-card" data-search="geography mscgg">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Geography)</h3>
                <p class="course-code">MSCGG</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 45. MSCSTAT -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Applied-Statistics-Admission-2025']) }}" class="course-card" data-search="applied statistics mscstat">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Applied Statistics)</h3>
                <p class="course-code">MSCSTAT</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 46. MSCMACS -->
        <a href="#" class="course-card" data-search="mathematics computer science mscmacs">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Mathematics with Application in Computer Science)</h3>
                <p class="course-code">MSCMACS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 47. MSCPH -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Physics-Admission-2025']) }}" class="course-card" data-search="physics mscph">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Physics)</h3>
                <p class="course-code">MSCPH</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 48. MSGI -->
        <a href="{{ route('page.show', ['page' => 'GNOU-MSC-Geoinformatics-Admission-2025-Complete-Guide-by-Unnati-Education']) }}" class="course-card" data-search="geoinformatics msgi">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Geoinformatics)</h3>
                <p class="course-code">MSGI</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 49. MSCZOO -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Zoology-Admission-2025']) }}" class="course-card" data-search="zoology msczoo">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Zoology)</h3>
                <p class="course-code">MSCZOO</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 50. MSCHEM -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Chemistry-Admission-2025']) }}" class="course-card" data-search="chemistry mschem">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Chemistry)</h3>
                <p class="course-code">MSCHEM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 51. MSCANHEM -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Analytical-Chemistry-Admission-2025']) }}" class="course-card" data-search="analytical chemistry mscanhem">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Analytical Chemistry)</h3>
                <p class="course-code">MSCANHEM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 52. MSCBCH -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Biochemistry-Admission-2025']) }}" class="course-card" data-search="biochemistry mscbch">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Biochemistry)</h3>
                <p class="course-code">MSCBCH</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 53. MSCIS -->
        <a href="#" class="course-card" data-search="information security mscis">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Information Security)</h3>
                <p class="course-code">MSCIS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 54. MSCREWE -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Renewable-Energy-and-Environment-Admission-2025']) }}" class="course-card" data-search="renewable energy environment mscrewe">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Renewable Energy and Environment)</h3>
                <p class="course-code">MSCREWE</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <!-- 55. MSCIDS -->
        <a href="{{ route('page.show', ['page' => 'IGNOU-MSC-Industrial-Safety-Admission-2025']) }}" class="course-card" data-search="industrial safety mscids">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Science (Industrial Safety)</h3>
                <p class="course-code">MSCIDS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>
    </div>
</div>

<script>
    function searchCourses() {
        const query = document.getElementById('searchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.course-card');
        cards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const code = card.querySelector('.course-code').textContent.toLowerCase();
            const extra = (card.getAttribute('data-search') || '').toLowerCase();
            const matches = title.includes(query) || code.includes(query) || extra.includes(query);
            card.style.display = matches ? '' : 'none';
        });
    }
</script>

@endsection