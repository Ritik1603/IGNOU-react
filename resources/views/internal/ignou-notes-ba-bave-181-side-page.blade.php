@extends('layouts.user')
@section('page_h1', 'BEVAE–181 ENVIRONMENTAL STUDIES')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        --primary: #0570B3;
        --primary-light: #3b82f6;
        --primary-dark: #1e40af;
        --accent: #0570B3;
        --gray: #64748b;
        --light-gray: #94a3b8;
        --border: #e2e8f0;
        --bg: #f8fafc;
        --card-bg: #ffffff;
        --shadow-sm: 0 4px 12px rgba(5, 112, 179, 0.1);
        --shadow-md: 0 8px 25px rgba(5, 112, 179, 0.15);
        --shadow-lg: 0 20px 50px rgba(5, 112, 179, 0.22);
        --radius-sm: 12px;
        --radius-md: 20px;
        --radius-lg: 28px;
        --radius-full: 60px;
        --transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
        --gradient: linear-gradient(135deg, #0570B3, #3b82f6, #0570B3);
        --gradient-glow: 0 0 30px rgba(5, 112, 179, 0.4);
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
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* BREADCRUMB */
    .breadcrumb {
        padding: 20px 0 12px;
        font-size: 0.92rem;
        color: var(--gray);
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .breadcrumb a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
    }

    .breadcrumb a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }

    .breadcrumb span {
        color: var(--light-gray);
    }

    /* HERO SECTION */
    .hero-section {
        position: relative;
        margin: 40px 0 60px;
        padding: 48px 40px;
        background: linear-gradient(145deg, #ffffff, #f1f8ff);
        border-radius: 32px;
        box-shadow: 0 20px 60px rgba(5, 112, 179, 0.12), 0 0 0 1px rgba(5, 112, 179, 0.08);
        overflow: hidden;
        border: 1px solid rgba(5, 112, 179, 0.1);
        animation: heroFloat 6s ease-in-out infinite;
    }

    @keyframes heroFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(5, 112, 179, 0.08) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
        pointer-events: none;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--gradient);
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 16px;
        box-shadow: 0 8px 25px rgba(5, 112, 179, 0.3);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    .hero-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 2.8rem;
        font-weight: 800;
        background: var(--gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin: 0 0 16px;
        line-height: 1.1;
        letter-spacing: -1px;
        text-shadow: var(--gradient-glow);
    }

    .hero-subtitle {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin: 20px 0;
    }

    .semester-badge {
        background: #e0f2fe;
        color: var(--primary);
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.95rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 4px 15px rgba(5, 112, 179, 0.15);
    }

    .material-types {
        color: var(--gray);
        font-size: 1rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .material-types i {
        color: var(--primary);
        font-size: 1.1rem;
    }

    .hero-desc {
        color: var(--gray);
        max-width: 860px;
        margin: 28px auto 0;
        font-size: 1.1rem;
        line-height: 1.7;
        font-weight: 500;
    }

    /* TABS & OTHER STYLES SAME AS YOURS (kept 100% original) */
    .material-tabs {
        display: flex;
        gap: 12px;
        margin: 60px 0 36px;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0 8px;
    }

    .tab {
        background: #f1f5f9;
        color: var(--gray);
        padding: 14px 28px;
        border-radius: 50px;
        font-size: 0.98rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        border: 1px solid var(--border);
        min-width: 150px;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .tab::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--gradient);
        opacity: 0;
        transition: var(--transition);
        z-index: -1;
    }

    .tab.active,
    .tab:hover {
        color: white;
        border-color: var(--primary);
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(5, 112, 179, 0.25);
    }

    .tab.active::before,
    .tab:hover::before {
        opacity: 1;
    }

    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1e293b;
        margin: 56px 0 16px;
        position: relative;
        padding-bottom: 14px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 70px;
        height: 5px;
        background: var(--gradient);
        border-radius: 3px;
        box-shadow: var(--gradient-glow);
    }

    .section-desc {
        font-size: 1.05rem;
        color: var(--gray);
        margin-bottom: 32px;
        max-width: 800px;
        line-height: 1.7;
    }

    .file-grid {
        display: grid;
        gap: 28px;
        margin-bottom: 80px;
    }

    .file-card {
        background: var(--card-bg);
        border-radius: var(--radius-lg);
        padding: 32px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .file-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--gradient);
        opacity: 0;
        transition: var(--transition);
    }

    .file-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary);
    }

    .file-card:hover::before {
        opacity: 1;
    }

    .file-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 18px;
    }

    .file-info h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
        line-height: 1.4;
        flex: 1;
    }

    .session-badge {
        background: linear-gradient(135deg, #f1f5f9, #e0f2fe);
        color: var(--primary);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.88rem;
        font-weight: 600;
        white-space: nowrap;
        box-shadow: 0 4px 12px rgba(5, 112, 179, 0.1);
    }

    .file-meta {
        font-size: 0.95rem;
        color: var(--gray);
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .file-meta i {
        color: var(--primary);
        font-size: 1.1rem;
    }

    .tags {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin: 14px 0;
    }

    .tag {
        background: #e0f2fe;
        color: var(--primary);
        padding: 7px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        box-shadow: 0 2px 8px rgba(5, 112, 179, 0.1);
    }

    .tag.popular {
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        color: #d97706;
    }

    .file-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .btn {
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.98rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: var(--transition);
        cursor: pointer;
        min-width: 140px;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(5, 112, 179, 0.2);
    }

    .btn-download {
        background: var(--gradient);
        color: white;
    }

    .btn-download:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(5, 112, 179, 0.35);
    }

    .btn-preview {
        background: white;
        color: var(--primary);
        border: 2px solid var(--primary);
    }

    .btn-preview:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-4px);
    }

    @media (max-width: 768px) {
        .main-container {
            padding: 0 16px;
        }

        .hero-section {
            padding: 36px 24px;
            margin: 32px 0 48px;
        }

        .hero-title {
            font-size: 2.1rem;
        }

        .material-tabs {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .file-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
</style>

<div class="main-container">

    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/solved-material">IGNOU Solved Material</a><span>›</span>
        <a href="/aecc">AECC Courses</a><span>›</span>
        <strong>BEVAE–181</strong>
    </div>

    <!-- HERO SECTION -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-leaf"></i> Most Important AECC Paper
            </div>
            <h1 class="hero-title">BEVAE–181 ENVIRONMENTAL STUDIES</h1>
            <div class="hero-subtitle">
                <div class="semester-badge">
                    <i class="fas fa-calendar-alt"></i> Ability Enhancement Compulsory Course
                </div>
                <div class="material-types">
                    <i class="fas fa-file-alt"></i> MCQ • PYQ • Notes • Guess Paper
                </div>
            </div>
            <p class="hero-desc">
                Complete exam-ready material for BEVAE–181 (Environmental Studies) — India's most important compulsory paper for all UG programs. Includes solved MCQs, previous year papers with answers, short notes & high-weightage guess questions.
            </p>
        </div>
    </div>

    <!-- TABS -->
    <div class="material-tabs">
        <div class="tab active" data-tab="mcq">Solved MCQs</div>
        <div class="tab" data-tab="pyq">Previous Year Papers</div>
        <div class="tab" data-tab="notes">Short Notes</div>
        <div class="tab" data-tab="guess">Guess Paper</div>
    </div>

    <!-- MCQ TAB -->
    <div id="mcq" class="tab-content active">
        <h2 class="section-title">Solved MCQs with Explanation</h2>
        <p class="section-desc">
            50 Most Important MCQs with detailed answers & explanations — exactly as per IGNOU pattern.
        </p>
        <div class="file-grid">
            <div class="file-card">
                <div class="file-header">
                    <div class="file-info">
                        <h3>BEVAE–181 Solved MCQ Bank (Latest 2025)</h3>
                    </div>
                    <div class="session-badge">Updated June 2025</div>
                </div>
                <div class="file-meta">
                    <i class="fas fa-file-pdf"></i> PDF • 2.1 MB • 50 Questions + Full Explanation
                </div>
                <div class="tags">
                    <span class="tag">Most Repeated</span>
                    <span class="tag">With Answers</span>
                    <span class="tag popular">90% Hit Rate</span>
                </div>
                <div class="file-actions">
                    <a href="#" class="btn btn-download">
                        <i class="fas fa-download"></i> Download Now
                    </a>
                    <a href="#" class="btn btn-preview">
                        <i class="fas fa-eye"></i> Preview
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- PYQ TAB -->
    <div id="pyq" class="tab-content">
        <h2 class="section-title">Previous Year Question Papers</h2>
        <p class="section-desc">
            Last 5 years official papers with model answers — perfect for understanding pattern.
        </p>
        <div class="file-grid">
            <div class="file-card">
                <div class="file-header">
                    <div class="file-info">
                        <h3>BEVAE–181 TEE June 2025 Paper + Answers</h3>
                    </div>
                    <div class="session-badge">June 2025</div>
                </div>
                <div class="file-meta">
                    <i class="fas fa-check-circle"></i> With Solved Answers • Official Paper
                </div>
                <div class="tags">
                    <span class="tag">Official</span>
                    <span class="tag popular">Latest</span>
                </div>
                <div class="file-actions">
                    <a href="{{ route('page.show', ['page' => 'BEVAE-181-ENVIRONMENTAL-STUDIES']) }}" class="btn btn-download">Download</a>
                    <a href="{{ route('page.show', ['page' => 'BEVAE-181-ENVIRONMENTAL-STUDIES']) }}" class="btn btn-preview">Preview</a>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTES TAB -->
    <div id="notes" class="tab-content">
        <h2 class="section-title">Short & Crisp Notes</h2>
        <p class="section-desc">
            Chapter-wise summary notes — perfect for quick revision before exam.
        </p>
        <div class="file-grid">
            <div class="file-card">
                <div class="file-header">
                    <div class="file-info">
                        <h3>BEVAE–181 Complete Short Notes (2025)</h3>
                    </div>
                    <div class="session-badge">Full Syllabus</div>
                </div>
                <div class="file-meta">
                    <i class="fas fa-book"></i> 45 Pages • Handwritten Style • Easy to Remember
                </div>
                <div class="tags">
                    <span class="tag">Revision Friendly</span>
                    <span class="tag popular">Most Loved</span>
                </div>
                <div class="file-actions">
                    <a href="#" class="btn btn-download">Download Notes</a>
                    <a href="#" class="btn btn-preview">Preview</a>
                </div>
            </div>
        </div>
    </div>

    <!-- GUESS TAB -->
    <div id="guess" class="tab-content">
        <h2 class="section-title">High Probability Guess Paper</h2>
        <p class="section-desc">
            25+ most expected questions based on past 5 years trend — 85%+ accuracy!
        </p>
        <div class="file-grid">
            <div class="file-card">
                <div class="file-header">
                    <div class="file-info">
                        <h3>BEVAE–181 Guess Paper Dec 2025</h3>
                    </div>
                    <div class="session-badge">Dec 2025 Exam</div>
                </div>
                <div class="file-meta">
                    <i class="fas fa-bullseye"></i> 85%+ Hit Rate • With Answers
                </div>
                <div class="tags">
                    <span class="tag">Trend Based</span>
                    <span class="tag popular">Top Scorer Choice</span>
                </div>
                <div class="file-actions">
                    <a href="#" class="btn btn-download">Download Guess</a>
                    <a href="#" class="btn btn-preview">Preview</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(target).classList.add('active');
        });
    });
</script>

@endsection