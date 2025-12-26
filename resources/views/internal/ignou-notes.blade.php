@extends('layouts.user')
@section('page_h1', 'IGNOU Solved Material<br>for UG & PG')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        --primary: #0570B3;
        --primary-light: #3b82f6;
        --primary-dark: #1e40af;
        --accent: #10b981;
        --gray: #64748b;
        --light-gray: #94a3b8;
        --border: #e2e8f0;
        --bg: #ffffff;
        --card-bg: #ffffff;
        --shadow-sm: 0 4px 12px rgba(0, 0, 0, 0.06);
        --shadow-md: 0 8px 25px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 20px 50px rgba(0, 0, 0, 0.1);
        --radius-sm: 16px;
        --radius-md: 24px;
        --radius-lg: 32px;
        --radius-full: 60px;
        --transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
        --gradient: linear-gradient(135deg, #0570B3, #3b82f6);
        --gradient-accent: linear-gradient(135deg, #0570B3, #10b981);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: #1e293b;
        line-height: 1.6;
        overflow-x: hidden;
    }

    .main-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* === HERO SECTION - WHITE + BLUE SHADOW + BG === */
    .hero {
        text-align: center;
        padding: 100px 20px 80px;
        background: white;
        border-radius: 0 0 40px 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(5, 112, 179, 0.12);
        margin-bottom: 60px;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(5, 112, 179, 0.04) 0%, transparent 70%);
        z-index: 0;
    }

    .hero h1 {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 4rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 20px;
        letter-spacing: -1.5px;
        position: relative;
        z-index: 1;
    }

    .hero p {
        font-size: 1.2rem;
        color: var(--gray);
        max-width: 780px;
        margin: 0 auto 40px;
        font-weight: 500;
        line-height: 1.7;
        position: relative;
        z-index: 1;
    }

    .search-container {
        max-width: 720px;
        margin: 0 auto 50px;
        position: relative;
        z-index: 1;
    }

    .search-bar {
        display: flex;
        background: white;
        border-radius: var(--radius-full);
        padding: 8px 12px;
        border: 2px solid var(--border);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }

    .search-bar:focus-within {
        border-color: var(--primary);
        box-shadow: 0 12px 35px rgba(5, 112, 179, 0.12);
        transform: translateY(-3px);
    }

    .search-bar input {
        flex: 1;
        border: none;
        outline: none;
        padding: 20px 28px;
        font-size: 1.1rem;
        font-weight: 600;
        color: #1e293b;
    }

    .search-bar input::placeholder {
        color: var(--light-gray);
    }

    .search-btn {
        background: var(--gradient);
        color: white;
        border: none;
        padding: 16px 36px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.05rem;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .search-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(5, 112, 179, 0.3);
    }

    .how-it-works {
        color: var(--primary);
        font-weight: 700;
        text-decoration: none;
        font-size: 1.1rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 20px;
        transition: var(--transition);
    }

    .how-it-works:hover {
        transform: translateX(6px);
    }

    /* === STATS BAR - WHITE CARDS === */
    .stats-bar {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        margin: 80px 0;
        padding: 36px 40px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--border);
        box-shadow: var(--shadow-md);
    }

    .stat {
        text-align: center;
        min-width: 120px;
        padding: 16px;
        border-radius: var(--radius-md);
        background: #f8fafc;
        transition: var(--transition);
    }

    .stat:hover {
        transform: translateY(-6px);
        background: white;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .stat h3 {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 6px;
        line-height: 1;
    }

    .stat p {
        color: var(--gray);
        font-size: 0.95rem;
        font-weight: 600;
    }

    /* === CONTENT TYPES - WHITE CARDS === */
    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 28px;
        margin: 90px 0;
    }

    .content-card {
        background: white;
        border-radius: var(--radius-lg);
        padding: 36px 32px;
        text-align: center;
        border: 1px solid var(--border);
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }

    .content-card:hover {
        transform: translateY(-12px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary);
    }

    .icon-circle {
        width: 80px;
        height: 80px;
        margin: 0 auto 24px;
        background: var(--gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        box-shadow: 0 8px 25px rgba(5, 112, 179, 0.2);
        transition: var(--transition);
    }

    .content-card:hover .icon-circle {
        transform: scale(1.1);
    }

    .content-card h3 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 14px;
        color: #1e293b;
    }

    .content-card p {
        color: var(--gray);
        font-size: 0.98rem;
        line-height: 1.7;
    }

    /* === LEVEL SELECTOR - WHITE TABS === */
    .level-section {
        text-align: center;
        margin: 100px 0;
    }

    .level-section h2 {
        font-size: 2rem;
        color: #1e293b;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .level-section p {
        color: var(--gray);
        max-width: 720px;
        margin: 0 auto 50px;
        font-size: 1.05rem;
    }

    .level-tabs {
        display: flex;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
    }

    .level-tab {
        background: white;
        border: 2px solid var(--border);
        padding: 24px 48px;
        border-radius: var(--radius-lg);
        font-weight: 700;
        font-size: 1.15rem;
        color: var(--gray);
        cursor: pointer;
        transition: var(--transition);
        min-width: 260px;
        text-align: center;
        box-shadow: var(--shadow-sm);
    }

    .level-tab.active,
    .level-tab:hover {
        background: var(--gradient);
        color: white;
        border-color: transparent;
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .level-tab span {
        display: block;
        font-size: 0.95rem;
        margin-top: 8px;
        opacity: 0.9;
        font-weight: 500;
    }

    /* === PROGRAM PILLS === */
    .program-section {
        text-align: center;
        margin: 90px 0;
    }

    .program-section h2 {
        font-size: 2rem;
        color: #1e293b;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .view-all {
        color: var(--primary);
        font-weight: 700;
        text-decoration: none;
        font-size: 1.05rem;
        margin-bottom: 40px;
        display: inline-block;
        transition: var(--transition);
    }

    .view-all:hover {
        transform: translateX(6px);
    }

    .pills {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: center;
        margin: 40px 0;
    }

    .pill {
        background: white;
        border: 1px solid var(--border);
        padding: 14px 28px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.98rem;
        color: #475569;
        transition: var(--transition);
        cursor: pointer;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.04);
    }

    .pill:hover {
        background: var(--gradient);
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(5, 112, 179, 0.2);
    }

    /* === SUBJECT CHIPS === */
    .subject-section {
        margin: 100px 0;
    }

    .subject-section h2 {
        text-align: center;
        font-size: 2rem;
        color: #1e293b;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .subject-section p {
        text-align: center;
        color: var(--gray);
        max-width: 750px;
        margin: 0 auto 50px;
        font-size: 1.05rem;
    }

    .chip-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
    }

    .chip {
        background: white;
        border-radius: var(--radius-md);
        padding: 24px;
        text-align: center;
        border: 1px solid var(--border);
        transition: var(--transition);
        cursor: pointer;
        box-shadow: var(--shadow-sm);
    }

    .chip:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary);
    }

    .chip code {
        background: #e0f2fe;
        color: var(--primary);
        padding: 6px 14px;
        border-radius: 12px;
        font-family: 'Courier New', monospace;
        font-size: 0.88rem;
        font-weight: 700;
    }

    .chip h4 {
        margin: 14px 0 8px;
        font-size: 1.1rem;
        color: #1e293b;
        font-weight: 700;
    }

    .chip p {
        font-size: 0.9rem;
        color: var(--gray);
    }

    /* === STRESS-FREE === */
    .stress-section {
        margin: 110px 0;
        text-align: center;
    }

    .stress-section h2 {
        font-size: 2rem;
        color: #1e293b;
        margin-bottom: 18px;
        font-weight: 700;
    }

    .stress-section p {
        color: var(--gray);
        max-width: 750px;
        margin: 0 auto 50px;
        font-size: 1.05rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 32px;
        padding: 48px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--border);
        box-shadow: var(--shadow-md);
    }

    .feature {
        text-align: center;
        padding: 20px;
    }

    .feature i {
        font-size: 3rem;
        color: var(--primary);
        margin-bottom: 20px;
        display: block;
        transition: var(--transition);
    }

    .feature:hover i {
        transform: scale(1.1);
    }

    .feature h3 {
        font-size: 1.3rem;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .feature p {
        font-size: 0.98rem;
        color: var(--gray);
        line-height: 1.7;
    }

    /* === RESPONSIVE === */
    @media (max-width: 992px) {
        .hero h1 {
            font-size: 3.4rem;
        }

        .stats-bar {
            gap: 30px;
            padding: 32px 24px;
        }

        .level-tabs {
            gap: 18px;
        }
    }

    @media (max-width: 768px) {
        .hero {
            padding: 80px 15px 60px;
        }

        .hero h1 {
            font-size: 2.8rem;
        }

        .search-bar {
            flex-direction: column;
            padding: 16px;
        }

        .search-btn {
            width: 100%;
            justify-content: center;
            margin-top: 12px;
        }

        .level-tab {
            min-width: 220px;
            padding: 20px 32px;
        }

        .stats-bar {
            gap: 20px;
            padding: 28px 20px;
        }

        .features-grid {
            padding: 36px 24px;
        }
    }

    @media (max-width: 576px) {
        .hero h1 {
            font-size: 2.4rem;
        }

        .search-bar input {
            padding: 18px;
            font-size: 1rem;
        }

        .level-tab {
            width: 100%;
            max-width: 280px;
        }
    }
</style>

<div class="main-container">

    <!-- HERO WITH BG + SHADOW -->
    <section class="hero">
        <h1>IGNOU Solved Material<br>for UG & PG</h1>
        <p>Download solved assignments, previous year papers, guess papers & chapter notes — all in one clean interface.</p>

        <div class="search-container">
            <div class="search-bar">
                <input type="text" placeholder="Search subject, code or programme (e.g. BAECH, MEG01, BA English)...">
                <button class="search-btn">
                    Search
                </button>
            </div>
        </div>

        <a href="#" class="how-it-works">How it works?</a>
    </section>

    <!-- STATS -->
    <div class="stats-bar">
        <div class="stat">
            <h3>2,500+</h3>
            <p>Solved PDFs</p>
        </div>
        <div class="stat">
            <h3>30+</h3>
            <p>IGNOU Programmes</p>
        </div>
        <div class="stat">
            <h3>50,000+</h3>
            <p>Students Helped</p>
        </div>
        <div class="stat">
            <h3>4.8</h3>
            <p>Avg Rating</p>
        </div>
    </div>

    <!-- CONTENT TYPES -->
    <div class="content-grid">
        <div class="content-card">
            <div class="icon-circle"><i class="fas fa-clipboard-check"></i></div>
            <h3>Solved Assignments</h3>
            <p>Course-wise and year-wise IGNOU solved assignments so you can write answers with confidence.</p>
        </div>
        <div class="content-card">
            <div class="icon-circle"><i class="fas fa-file-alt"></i></div>
            <h3>Previous Year Papers</h3>
            <p>Past year question papers with solutions to understand the pattern and important topics.</p>
        </div>
        <div class="content-card">
            <div class="icon-circle"><i class="fas fa-lightbulb"></i></div>
            <h3>Guess Papers</h3>
            <p>High-probability important questions curated from trends and past year analysis.</p>
        </div>
        <div class="content-card">
            <div class="icon-circle"><i class="fas fa-book"></i></div>
            <h3>Chapter-wise Notes</h3>
            <p>Simple, exam-oriented chapter summaries to help you revise faster before exams.</p>
        </div>
    </div>

    <!-- LEVEL SELECTOR -->
    <div class="level-section">
        <h2>Choose your level – UG or PG</h2>
        <p>Start by selecting whether you are in an undergraduate or postgraduate programme.</p>

        <div class="level-tabs">
            <a href="{{ route('page.show', ['page' => 'Undergraduate-UG']) }}" class="level-tab active">
                Undergraduate (UG)
                <span>BA, B.Com, BBA, BCA, B.Sc</span>
            </a>
           <div class="level-tab">
               
                     <a href="{{ route('page.show', ['page' => 'Postgraduate-PG']) }}">
                Postgraduate (PG)
                </a>
                 <a href="{{ route('page.show', ['page' => 'Postgraduate-PG']) }}">
                <span>MA, M.Com, MBA, MCA, M.Sc</span>
                </a>
            </div>
        </div>
    </div>

    <!-- POPULAR PROGRAMS -->
    <div class="program-section">
        <h2>Popular IGNOU Programmes</h2>
        <a href="#" class="view-all">View all programmes</a>

        <div class="pills">
            <div class="pill">BA Programme</div>
            <div class="pill">B.Com</div>
            <div class="pill">BBA</div>
            <div class="pill">BCA</div>
            <div class="pill">MA English (MEG)</div>
            <div class="pill">M.Com</div>
            <div class="pill">MBA</div>
            <div class="pill">MCA</div>
        </div>
    </div>

    <!-- POPULAR SUBJECTS -->
    <div class="subject-section">
        <h2>Popular Subjects & Codes</h2>
        <p>One-click access to the most searched subjects.</p>

        <div class="chip-grid">
            <div class="chip">
                <code>BAECH</code>
                <h4>BA Economics (Honours)</h4>
                <p>Solved assignments • PYQ • Guess • Notes</p>
            </div>
            <div class="chip">
                <code>BAHIH</code>
                <h4>BA History (Honours)</h4>
                <p>Updated as per latest IGNOU syllabus</p>
            </div>
            <div class="chip">
                <code>BAPSH</code>
                <h4>BA Political Science</h4>
                <p>Core papers with solved assignments</p>
            </div>
            <div class="chip">
                <code>MEG-01</code>
                <h4>British Poetry</h4>
                <p>MA English – MEG solved material</p>
            </div>
            <div class="chip">
                <code>MCO-01</code>
                <h4>Organisation Theory</h4>
                <p>M.Com – assignment & exam prep</p>
            </div>
        </div>
    </div>

    <!-- STRESS-FREE -->
    <div class="stress-section">
        <h2>Built for stressed exam-time students</h2>
        <p>Everything is designed to reduce confusion and save time.</p>

        <div class="features-grid">
            <div class="feature">
                <i class="fas fa-sitemap"></i>
                <h3>Organised by Programme & Code</h3>
                <p>Instead of searching everywhere, students drill down: UG/PG → Programme → Subject → Material type – in a few clicks.</p>
            </div>
            <div class="feature">
                <i class="fas fa-language"></i>
                <h3>Simple, exam-focused language</h3>
                <p>Notes and solved assignments are written in easy-to-understand English so students can replicate them in exams.</p>
            </div>
            <div class="feature">
                <i class="fas fa-eye"></i>
                <h3>Clean, distraction-free interface</h3>
                <p>No clutter, no unnecessary animations — just a focused layout that respects exam pressure and limited time.</p>
            </div>
        </div>
    </div>

</div>

<script>
    // Level Tab Toggle
    document.querySelectorAll('.level-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.level-tab').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });

    // Search Action
    document.querySelector('.search-btn').addEventListener('click', () => {
        const query = document.querySelector('.search-bar input').value.trim();
        if (query) {
            alert(`Searching: ${query}`);
        }
    });
</script>

@endsection