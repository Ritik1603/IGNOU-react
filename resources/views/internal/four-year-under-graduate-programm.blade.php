@extends('layouts.user')
@section('page_h1', 'Undergraduate Programmes (FYUP)')
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
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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
    }

    /* 3D Layers */
    .card-layer {
        position: absolute;
        inset: 0;
        border-radius: var(--radius);
        transition: var(--transition);
    }

    .layer-1 {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.12) 0%, rgba(139, 92, 246, 0.08) 100%);
        transform: translateZ(-20px);
        opacity: 0;
    }

    .layer-2 {
        background: linear-gradient(45deg, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
        transform: translateZ(-40px);
        opacity: 0;
        filter: blur(8px);
    }

    .layer-3 {
        background: radial-gradient(circle at 30% 30%, rgba(236, 72, 153, 0.15), transparent 60%);
        transform: translateZ(-60px);
        opacity: 0;
    }

    .course-card:hover {
        transform: translateY(-20px) translateZ(80px) rotateX(8deg) rotateY(-5deg);
        box-shadow: var(--shadow-hover);
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
        color: var(--text);
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
        font-size: 0.85rem;
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

    /* Arrow Below Text */
    .arrow-3d {
        position: absolute;
        bottom: 20px;
        right: 30px;
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
        box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        transform: translateZ(45px);
        overflow: hidden;
    }

    .arrow-3d::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, transparent 40%, rgba(255, 255, 255, 0.3) 50%, transparent 60%);
        transform: translateX(-100%);
        transition: var(--transition);
    }

    .course-card:hover .arrow-3d {
        transform: translateZ(70px) scale(1.2) rotate(20deg);
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.4);
    }

    .course-card:hover .arrow-3d::before {
        transform: translateX(100%);
    }

    /* Unique Arrow Colors */
    .course-card:nth-child(3n+1) .arrow-3d {
        background: linear-gradient(135deg, #1078b9ff, #34abd3ff);
    }

    .course-card:nth-child(3n+2) .arrow-3d {
        background: linear-gradient(135deg, #0be9f5ff, #247dfbff);
    }

    .course-card:nth-child(3n) .arrow-3d {
        background: linear-gradient(135deg, #48a2ecff, #3f69f4ff);
    }

    /* Responsive */
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

    /* 3D Entry Animation */
    @keyframes cardFlyIn {
        0% {
            opacity: 0;
            transform: translateY(100px) translateZ(-300px) rotateX(-30deg) scale(0.8);
        }

        100% {
            opacity: 1;
            transform: translateY(0) translateZ(0) rotateX(0) scale(1);
        }
    }

    .course-card {
        opacity: 0;
        animation: cardFlyIn 0.7s ease forwards;
        animation-fill-mode: both;
    }

    .course-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .course-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .course-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .course-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .course-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .course-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    .course-card:nth-child(7) {
        animation-delay: 0.7s;
    }

    .course-card:nth-child(8) {
        animation-delay: 0.8s;
    }

    .course-card:nth-child(9) {
        animation-delay: 0.9s;
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
</style>

<div class="container">
    <h3 class="page-title">Undergraduate Programmes (FYUP)</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by name or code...">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>

    <div id="courseList">
        <!-- Complete 3D Cards with Arrow Below Text -->
        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (History)</h3>
                <p class="course-code">BAFHI</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Economics)</h3>
                <p class="course-code">BAFEC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Philosophy)</h3>
                <p class="course-code">BAFPY</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Political Science)</h3>
                <p class="course-code">BAFPS</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Psychology)</h3>
                <p class="course-code">BAFPC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Public Administration)</h3>
                <p class="course-code">BAFPA</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Sociology)</h3>
                <p class="course-code">BAFSO</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Journalism and Digital Media)</h3>
                <p class="course-code">BAFJDM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Commerce</h3>
                <p class="course-code">BCOMF</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Science (Anthropology)</h3>
                <p class="course-code">BSCFAN</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Science (Biochemistry)</h3>
                <p class="course-code">BSCFBC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Science (Mathematics)</h3>
                <p class="course-code">BSCFMT</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Social Work</h3>
                <p class="course-code">BFSW</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Micro, Small & Medium Enterprises)</h3>
                <p class="course-code">BAMSME</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Science (Food Safety and Quality Management)</h3>
                <p class="course-code">BSCFFSQM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Performing Arts—Hindustani Music</h3>
                <p class="course-code">BPAFH</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Facility and Services Management)</h3>
                <p class="course-code">BAFSM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Vocational Studies) Tourism Management</h3>
                <p class="course-code">BAFVT</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Tourism and Travel Management</h3>
                <p class="course-code">BFTTM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Education)</h3>
                <p class="course-code">BAFEDU</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="#" class="course-card">
            <div class="card-layer layer-1"></div>
            <div class="card-layer layer-2"></div>
            <div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Bachelor of Arts (Home Science)</h3>
                <p class="course-code">BAFHSC</p>
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
            const matches = title.includes(query) || code.includes(query);

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

    // Subtle 3D mouse tilt
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