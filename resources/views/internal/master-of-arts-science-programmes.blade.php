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
        border: 1px solid #9d4be9;
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

        <a href="#" class="course-card" data-search="computer applications mca">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Master of Computer Applications</h3>
                <p class="course-code">MCA</p>
            </div>
              <div class="arrow-3d">→</div>
        </a>

        <!-- 57. MSCMACS (Duplicate - kept as requested) -->
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