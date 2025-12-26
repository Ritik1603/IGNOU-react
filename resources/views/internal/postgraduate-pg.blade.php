@extends('layouts.user')
@section('page_h1', 'IGNOU Post Graduate & Diploma Programmes 2025')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --primary: #3b82f6;
        --accent: #10b981;
        --bg: #f8fafc;
        --card-bg: #ffffff;
        --text: #0f172a;
        --shadow: 0 15px 35px rgba(0,0,0,0.08);
        --shadow-hover: 0 25px 50px rgba(59,130,246,0.25);
        --radius: 24px;
        --transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: var(--text);
        min-height: 100vh;
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
        background: linear-gradient(120deg, #8b5cf6, #3b82f6, #10b981);
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
        box-shadow: 0 8px 25px rgba(0,0,0,.1);
        outline: none;
        transition: var(--transition);
    }

    .search-bar:focus {
        transform: translateY(-4px);
        box-shadow: 0 15px 40px rgba(59,130,246,.2);
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
        pointer-events: none;
    }

    #courseList {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 32px;
        margin-top: 20px;
    }

    .course-card {
        background: var(--card-bg);
        border-radius: var(--radius);
        padding: 28px 30px;
        position: relative;
        height: 150px;
        overflow: hidden;
        box-shadow: var(--shadow);
        cursor: pointer;
        transition: var(--transition);
        opacity: 0;
        animation: cardFlyIn 0.8s ease forwards;
    }

    .course-card:hover {
        transform: translateY(-15px);
        box-shadow: var(--shadow-hover);
    }

    .card-layer {
        position: absolute;
        inset: 0;
        border-radius: var(--radius);
        opacity: 0;
        transition: var(--transition);
    }

    .course-card:hover .card-layer { opacity: 1; }
    .layer-1 { background: linear-gradient(135deg, rgba(139,92,246,.12), rgba(59,130,246,.08)); }
    .layer-2 { background: linear-gradient(45deg, rgba(16,185,129,.1), transparent 70%); filter: blur(8px); }
    .layer-3 { background: radial-gradient(circle at 30% 30%, rgba(34,197,94,.15), transparent 60%); }

    .course-info h3 {
        font-size: 1.02rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.35;
        background: linear-gradient(90deg, #1e293b, #475569);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: var(--transition);
    }

    .course-card:hover h3 {
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
    }

    .arrow-whatsapp {
        position: absolute;
        bottom: 16px;
        right: 30px;
        width: 56px;
        height: 56px;
        background: linear-gradient(135deg, var(--primary), #8b5cf6);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        font-weight: 900;
        box-shadow: 0 8px 20px rgba(59,130,246,.4);
        transition: var(--transition);
        text-decoration: none;
        z-index: 10;
    }

    .course-card:hover .arrow-whatsapp {
        transform: scale(1.3) rotate(15deg);
        box-shadow: 0 15px 30px rgba(59,130,246,.5);
    }

    @keyframes cardFlyIn {
        0% { opacity: 0; transform: translateY(60px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        #courseList { grid-template-columns: 1fr; }
        .page-title { font-size: 2rem; }
        .course-card { height: 140px; }
    }
</style>

<div class="container">
    <h3 class="page-title">IGNOU Post Graduate & Diploma Programmes 2025</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by programme name or code..." autocomplete="off">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
        </svg>
    </div>

    <div id="courseList">

        <div class="course-card" data-search="pgdibo international business operations">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <a href="{{ route('page.show', ['page' => 'Postgraduate-Subject']) }}">
            <div class="course-info"><h3>Post Graduate Diploma in International Business Operations</h3><p class="course-code">PGDIBO</p></div>
            </a>
            <a href="{{ route('page.show', ['page' => 'Postgraduate-Subject']) }}" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdiom operations management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Operations Management</h3><p class="course-code">PGDIOM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIOM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdimm marketing management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Marketing Management</h3><p class="course-code">PGDIMM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIMM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdifm financial management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Financial Management</h3><p class="course-code">PGDIFM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIFM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdihrM human resource management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Human Resource Management</h3><p class="course-code">PGDIHRM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIHRM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdfmp financial markets practice">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Financial Markets Practice</h3><p class="course-code">PGDFMP</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDFMP%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdrd rural development">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Rural Development</h3><p class="course-code">PGDRD</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDRD%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdcft counselling family therapy">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Counselling and Family Therapy</h3><p class="course-code">PGDCFT</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDCFT%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdecfe early childhood education">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Early Childhood and Foundational Stage Education</h3><p class="course-code">PGDECFE</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDECFE%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdhe higher education">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Higher Education</h3><p class="course-code">PGDHE</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDHE%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdet educational technology">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Educational Technology</h3><p class="course-code">PGDET</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDET%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdslm school leadership management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in School Leadership and Management</h3><p class="course-code">PGDSLM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDSLM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdema educational management administration">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Educational Management and Administration</h3><p class="course-code">PGDEMA</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDEMA%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdpped pre primary education">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Pre Primary Education</h3><p class="course-code">PGDPPED</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDPPED%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdae adult education">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Adult Education</h3><p class="course-code">PGDAE</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAE%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdsw social work">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Social Work</h3><p class="course-code">PGDSW</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDSW%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdswc social work counselling">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Social Work Counselling</h3><p class="course-code">PGDSWC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDSWC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgddvs development studies">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Development Studies</h3><p class="course-code">PGDDVS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDDVS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdupdl urban planning development">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Urban Planning and Development</h3><p class="course-code">PGDUPDL</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDUPDL%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdcsr corporate social responsibility">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Corporate Social Responsibility</h3><p class="course-code">PGDCSR</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDCSR%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdss sustainability science">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Sustainability Science</h3><p class="course-code">PGDSS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDSS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdmh mental health">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Mental Health</h3><p class="course-code">PGDMH</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDMH%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdrpc rehabilitation psychology">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Rehabilitation Psychology</h3><p class="course-code">PGDRPC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDRPC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdgm geriatric medicine">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Geriatric Medicine</h3><p class="course-code">PGDGM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDGM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdmch maternal child health">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Maternal and Child Health</h3><p class="course-code">PGDMCH</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDMCH%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdeoh environmental occupational health">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Environmental and Occupational Health</h3><p class="course-code">PGDEOH</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDEOH%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdfsqm food safety quality management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Food Safety and Quality Management</h3><p class="course-code">PGDFSQM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDFSQM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgjmc journalism mass communication">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Journalism and Mass Communication</h3><p class="course-code">PGJMC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGJMC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdapp audio programme production">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Audio Programme Production</h3><p class="course-code">PGDAPP</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAPP%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdidm digital media">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Digital Media</h3><p class="course-code">PGDIDM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIDM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgddc development communication">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Development Communication</h3><p class="course-code">PGDDC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDDC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdaic advertising integrated communication">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Advertising and Integrated Communication</h3><p class="course-code">PGDAIC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAIC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdca_new computer applications">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Computer Applications</h3><p class="course-code">PGDCA_NEW</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDCA_NEW%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdis information security cyber">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Information Security</h3><p class="course-code">PGDIS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdesd environment sustainable development">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Environment and Sustainable Development</h3><p class="course-code">PGDESD</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDESD%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdac analytical chemistry">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Analytical Chemistry</h3><p class="course-code">PGDAC</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAC%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdrrm disaster risk reduction management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Disaster Risk Reduction and Management</h3><p class="course-code">PGDDRM</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDDRM%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdaw animal welfare">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Animal Welfare</h3><p class="course-code">PGDAW</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAW%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdt translation hindi">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Translation</h3><p class="course-code">PGDT</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDT%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdshst sindhi hindi translation">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Sindhi-Hindi-Sindhi Translation</h3><p class="course-code">PGDSHST</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDSHST%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdgps gandhi peace studies">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Gandhi and Peace Studies</h3><p class="course-code">PGDGPS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDGPS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdipr intellectual property rights ipr">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Intellectual Property Rights</h3><p class="course-code">PGDIPR</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIPR%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdwgsr women gender studies">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Women’s & Gender Studies</h3><p class="course-code">PGDWGSR</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDWGSR%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdast applied statistics">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Applied Statistics</h3><p class="course-code">PGDAST</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDAST%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdlan library automation networking">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Library Automation and Networking</h3><p class="course-code">PGDLAN</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDLAN%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdgi geoinformatics gis">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Geoinformatics</h3><p class="course-code">PGDGI</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDGI%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdpfhs population family health">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Population and Family Health Studies</h3><p class="course-code">PGDPFHS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDPFHS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdtrbs tribal studies">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Tribal Studies</h3><p class="course-code">PGDTRBS</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDTRBS%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>

        <div class="course-card" data-search="pgdind industrial safety">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info"><h3>Post Graduate Diploma in Industrial Safety</h3><p class="course-code">PGDIND</p></div>
            <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20PGDIND%20Admission%202025" class="arrow-whatsapp" target="_blank">→</a>
        </div>
<!-- ==================== MASTER'S DEGREE PROGRAMMES (WhatsApp Only) ==================== -->

<div class="course-card" data-search="mcom master of commerce">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Commerce</h3>
        <p class="course-code">MCOM</p>
    </div>
    <a href="{{ route('page.show', ['page' => 'mco-subject']) }}" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mba master of business administration">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration</h3>
        <p class="course-code">MBA</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBA%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbf banking finance mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Banking and Finance)</h3>
        <p class="course-code">MBF</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBF%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbahm human resource hr mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration – Human Resource Management</h3>
        <p class="course-code">MBAHM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAHM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbafm financial finance management mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration – Financial Management</h3>
        <p class="course-code">MBAFM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAFM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbaom operations management mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration – Operations Management</h3>
        <p class="course-code">MBAOM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAOM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mba marketing management mbamm">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration – Marketing Management</h3>
        <p class="course-code">MBAMM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAMM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbalsm logistics supply chain mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Logistics & Supply Chain Management)</h3>
        <p class="course-code">MBALSCM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBALSCM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbacm construction management mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Construction Management)</h3>
        <p class="course-code">MBACM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBACM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbaha hospital administration healthcare">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Hospital Administration)</h3>
        <p class="course-code">MBAHA</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAHA%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbatqm total quality management mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Total Quality Management)</h3>
        <p class="course-code">MBATQM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBATQM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbahhm hospital healthcare management mba">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Hospital and Healthcare Management)</h3>
        <p class="course-code">MBAHHM</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAHHM%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<div class="course-card" data-search="mbaer entrepreneurship startup">
    <div class="card-layer layer-1"></div>
    <div class="card-layer layer-2"></div>
    <div class="card-layer layer-3"></div>
    <div class="course-info">
        <h3>Master of Business Administration (Entrepreneurship)</h3>
        <p class="course-code">MBAER</p>
    </div>
    <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20details%20about%20MBAER%20Admission%202025" 
       class="arrow-whatsapp" target="_blank">→</a>
</div>

<!-- ==================== END OF MASTER'S PROGRAMMES ==================== -->
    </div>
</div>

<script>
    function searchCourses() {
        let input = document.getElementById('searchInput').value.toLowerCase().trim();
        let cards = document.querySelectorAll('.course-card');

        cards.forEach(card => {
            let title = card.querySelector('h3').textContent.toLowerCase();
            let code = card.querySelector('.course-code').textContent.toLowerCase();
            let keywords = card.getAttribute('data-search').toLowerCase();

            if (title.includes(input) || code.includes(input) || keywords.includes(input)) {
                card.style.display = "";
            } else {
                card.style.display = "none";
            }
        });
    }

    window.onload = function() {
        document.querySelectorAll('.course-card').forEach((card, i) => {
            card.style.animationDelay = (i * 0.07) + 's';
        });
    };
</script>

@endsection