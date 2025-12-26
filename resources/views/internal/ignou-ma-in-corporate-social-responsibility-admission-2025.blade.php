@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU MA in Corporate Social Responsibility Admission 2025 – Build a Career That Drives Change</span>')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
<style>
    :root {
        --brand: #0066CC;
        /* Deep Indigo */
        --brand-2: #00A3FF;
        /* Bright Cyan */
        --brand-glow: #0099FF;
        --bg: #f8fbff;
        --card: #ffffff;
        --line: #007DDF;
        --text: #1a1a2e;
        --muted: #44476a;
        --radius: 20px;
        --shadow-md: 0 16px 48px rgba(0, 102, 204, .16);
        --shadow-card: 0 8px 32px rgba(0, 102, 204, .12);
        --space-xs: clamp(6px, 1.2vw, 10px);
        --space-sm: clamp(10px, 1.6vw, 14px);
        --space-md: clamp(16px, 2.4vw, 22px);
        --space-lg: clamp(22px, 3.2vw, 32px);
        --space-xl: clamp(28px, 4vw, 44px);
        --dock-h: 84px;
        --tilt-persp: 1000px;
        --tilt-raise: 16px;
        --tilt-scale: 1.03;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    html,
    body {
        height: 100%
    }

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(180deg, #f8fbff 0%, #eef5ff 100%);
        color: var(--text);
        line-height: 1.7;
        overflow-x: hidden;
        letter-spacing: .01em;
        font-feature-settings: "cv10", "ss01", "tnum";
        position: relative;
    }

    body::before {
        content: "";
        position: fixed;
        inset: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"><path fill="%23eef5ff" fill-opacity="0.03" d="M1 3h1v1H1V3zm2-2h1v1H3V1z"/></svg>');
        pointer-events: none;
        z-index: -1;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 var(--space-md)
    }

    a {
        color: var(--brand);
        text-decoration: none;
        font-weight: 600
    }

    a:hover {
        color: var(--brand-2);
        text-decoration: underline
    }

    .mono {
        font-variant-numeric: tabular-nums
    }

    /* HERO */
    .hero-wrap {
        padding: var(--space-md) 0 var(--space-sm)
    }

    .hero {
        margin: var(--space-sm) auto;
        padding: var(--space-lg) var(--space-md);
        border-radius: 24px;
        background:
            radial-gradient(1000px 380px at 100% 0%, rgba(0, 153, 255, .12), transparent 60%),
            radial-gradient(1000px 380px at 0% 0%, rgba(0, 102, 204, .14), transparent 60%),
            linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
        border: 2px solid var(--line);
        box-shadow: var(--shadow-md);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--brand), var(--brand-2));
        border-radius: 24px 24px 0 0;
    }

    .hero h1 {
        font-size: clamp(24px, 3.4vw, 36px);
        line-height: 1.15;
        letter-spacing: -.03em;
        margin-bottom: 10px;
        background: linear-gradient(90deg, #1a1a2e 0%, var(--brand) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
    }

    .hero p.lead {
        font-size: clamp(15px, 1.7vw, 18px);
        color: var(--muted);
        max-width: 900px;
        margin: 0 auto 16px;
    }

    .badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
        margin: var(--space-sm) 0
    }

    .badge {
        padding: 6px 28px;
        border-radius: 999px;
        border: 2px solid var(--line);
        background: #fff;
        font-weight: 800;
        font-size: 13px;
        color: var(--text);
        box-shadow: 0 4px 12px rgba(0, 102, 204, .1);
        transition: all .2s ease;
    }

    .badge.brand {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        border: none;
        font-weight: 900;
        box-shadow: 0 8px 24px rgba(0, 102, 204, .3), 0 0 0 4px rgba(0, 153, 255, .2);
        animation: pulse-badge 2s infinite;
    }

    @keyframes pulse-badge {

        0%,
        100% {
            box-shadow: 0 8px 24px rgba(0, 102, 204, .3), 0 0 0 4px rgba(0, 153, 255, .2);
        }

        50% {
            box-shadow: 0 12px 32px rgba(0, 102, 204, .4), 0 0 0 8px rgba(0, 153, 255, .3);
        }
    }

    .actions {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 16px
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 20px;
        border-radius: 16px;
        font-weight: 800;
        font-size: 15px;
        transition: all .25s ease;
        border: none;
        outline: none;
        position: relative;
        overflow: hidden;
    }

    .btn::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, .3), transparent);
        opacity: 0;
        transition: opacity .25s;
    }

    .btn:hover::before {
        opacity: 1;
    }

    .btn.primary {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        box-shadow: 0 12px 32px rgba(0, 102, 204, .35);
    }

    .btn.primary:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 16px 40px rgba(0, 102, 204, .45);
    }

    .btn.ghost {
        background: #fff;
        color: var(--brand);
        border: 2px solid var(--line);
        font-weight: 700;
    }

    .btn.ghost:hover {
        border-color: var(--brand);
        background: var(--brand);
        color: #fff;
        transform: translateY(-2px);
    }

    /* SECTIONS */
    .section {
        background: #fff;
        border: 2px solid var(--line);
        border-radius: var(--radius);
        box-shadow: var(--shadow-md);
        padding: clamp(20px, 2.6vw, 32px);
        margin: var(--space-md) auto;
        max-width: 1200px;
        position: relative;
    }

    .section h2 {
        font-size: clamp(20px, 2.6vw, 28px);
        margin-bottom: 8px;
        position: relative;
        padding-bottom: 10px;
        font-weight: 800;
        color: var(--text);
    }

    .section h2::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--brand), var(--brand-2));
        border-radius: 999px;
        box-shadow: 0 0 12px rgba(0, 153, 255, .5);
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 16px
    }

    /* CARDS - 3D + GLOW */
    .card {
        background: var(--card);
        border: 2px solid var(--line);
        border-radius: 16px;
        padding: 16px;
        box-shadow: var(--shadow-card);
        transition: all .25s ease;
        will-change: transform;
        position: relative;
        overflow: hidden;
        transform-style: preserve-3d;
        transform: perspective(var(--tilt-persp)) rotateX(var(--rx, 0deg)) rotateY(var(--ry, 0deg)) translateZ(var(--tz, 0px)) scale(var(--sc, 1));
    }

    .card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 16px;
        padding: 2px;
        background: linear-gradient(45deg, var(--brand), var(--brand-2));
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask-composite: exclude;
        opacity: 0;
        transition: opacity .25s;
    }

    .card:hover::before {
        opacity: 1;
    }

    .card::after {
        content: "";
        position: absolute;
        inset: -1px;
        background: radial-gradient(1200px 420px at var(--mx, 50%) var(--my, 0%), rgba(255, 255, 255, .35), transparent 60%);
        opacity: 0;
        pointer-events: none;
        transform: translateZ(1px);
        transition: opacity .25s ease;
    }

    .card:hover {
        --tz: var(--tilt-raise);
        --sc: var(--tilt-scale);
        border-color: var(--brand-glow);
        box-shadow: 0 24px 56px rgba(0, 102, 204, .22);
    }

    .card:hover::after {
        opacity: .7;
    }

    /* TABLES */
    .table-wrap {
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        border: 2px solid var(--line);
        border-radius: 16px;
        background: #fff;
        box-shadow: var(--shadow-card);
        transition: all .25s ease;
        transform-style: preserve-3d;
        transform: perspective(var(--tilt-persp)) rotateX(var(--rx, 0deg)) rotateY(var(--ry, 0deg)) translateZ(var(--tz, 0px)) scale(var(--sc, 1));
        position: relative;
        overflow: hidden;
    }

    .table-wrap::after {
        content: "";
        position: absolute;
        inset: -1px;
        background: radial-gradient(1000px 360px at var(--mx, 50%) var(--my, 0%), rgba(255, 255, 255, .25), transparent 60%);
        opacity: 0;
        pointer-events: none;
        transform: translateZ(1px);
        transition: opacity .25s ease;
    }

    .table-wrap:hover {
        --tz: 12px;
        --sc: 1.01;
        border-color: var(--brand);
        box-shadow: 0 20px 48px rgba(0, 102, 204, .18);
    }

    .table-wrap:hover::after {
        opacity: .6;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 8px;
        margin: -8px 0;
    }

    td,
    th {
        padding: 12px 10px;
        font-size: 15px;
        vertical-align: middle;
        line-height: 1.6;
    }

    th {
        font-weight: 800;
        color: var(--text);
        background: linear-gradient(135deg, #f8fbff, #eef5ff);
        position: sticky;
        top: 0;
        z-index: 2;
        box-shadow: 0 2px 0 var(--line);
    }

    tr {
        transition: transform .2s ease, background .2s ease;
        border-radius: 12px;
    }

    tr:hover {
        transform: scale(1.03);
        z-index: 1;
        position: relative;
    }

    tr:hover td {
        background: linear-gradient(90deg, rgba(0, 153, 255, .12), rgba(0, 102, 204, .08));
        font-weight: 600;
        color: var(--brand);
    }

    tr td {
        background: #fbfdff;
        border-bottom: 1px solid #e6ecff;
    }

    tr:last-child td {
        border-bottom: none;
    }

    /* ACCORDION */
    .accordion .item {
        border: 2px solid var(--line);
        border-radius: 16px;
        margin-bottom: 12px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 102, 204, .08);
    }

    .accordion .q {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 16px;
        cursor: pointer;
        background: linear-gradient(135deg, #f8fbff, #eef5ff);
        border-bottom: 1px dashed var(--line);
        transition: background .2s;
    }

    .accordion .q:hover {
        background: #eef5ff;
    }

    .accordion .q h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text);
    }

    .accordion .a {
        display: none;
        padding: 16px;
        background: #fff;
    }

    .accordion .item.open .q {
        background: #fff;
        border-color: var(--brand);
    }

    /* FABs */
    .fabs {
        position: fixed;
        right: 16px;
        bottom: calc(var(--dock-h)+12px);
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 60
    }

    .fab {
        width: 52px;
        height: 52px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        color: #fff;
        box-shadow: 0 16px 40px rgba(2, 6, 23, .12);
        cursor: pointer
    }

    .fab.wa {
        background: #25d366
    }

    .fab.call {
        background: linear-gradient(90deg, var(--brand), var(--brand-2))
    }

    .fab.top {
        background: #fff;
        color: #111827;
        border: 1px solid var(--line);
        display: none
    }

    /* DOCK */
    .dock-wrap {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 10px;
        z-index: 70;
        display: flex;
        justify-content: center;
        pointer-events: none;
    }

    .dock {
        pointer-events: auto;
        display: flex;
        gap: 8px;
        align-items: center;
        background: rgba(255, 255, 255, .96);
        backdrop-filter: blur(10px);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 10px;
        box-shadow: var(--shadow-md);
        max-width: min(980px, 96vw);
        overflow-x: auto;
    }

    .dock button {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        min-width: 92px;
        padding: 8px 10px;
        border-radius: 12px;
        border: 1px solid transparent;
        background: transparent;
        color: #0f172a;
        font-weight: 600;
        font-size: 12px;
        cursor: pointer;
        flex: 0 0 auto;
    }

    .dock button i {
        font-size: 18px
    }

    .dock button .ico {
        width: 36px;
        height: 36px;
        border-radius: 12px;
        display: grid;
        place-items: center;
        transition: all .2s ease;
        color: #0f172a;
    }

    .dock button.active .ico,
    .dock button:hover .ico {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        transform: translateY(-2px) scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 102, 204, .3);
    }

    /* TAB NAV */
    .tab-nav {
        display: none;
        gap: 8px;
        align-items: center;
        background: rgba(255, 255, 255, .96);
        backdrop-filter: blur(10px);
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 10px;
        margin-bottom: var(--space-md);
        box-shadow: var(--shadow-md);
        max-width: min(980px, 96vw);
        overflow-x: auto;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    .tab-nav button {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 12px;
        border: 1px solid transparent;
        background: transparent;
        color: #0f172a;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        flex: 0 0 auto;
        white-space: nowrap;
    }

    .tab-nav button .ico {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: grid;
        place-items: center;
        transition: all .2s ease;
        color: #0f172a;
        font-size: 14px;
    }

    .tab-nav button.active .ico,
    .tab-nav button:hover .ico {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 102, 204, .3);
    }

    /* TAB PANELS */
    .tab-panel {
        display: block;
    }

    main {
        padding-bottom: calc(var(--dock-h)+var(--space-md))
    }

    .progress {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--brand), var(--brand-2));
        transform-origin: 0 50%;
        transform: scaleX(0);
        z-index: 69;
    }

    .toast {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        bottom: calc(var(--dock-h)+20px);
        background: #fff;
        border: 1px solid var(--line);
        color: #111827;
        padding: 10px 14px;
        border-radius: 12px;
        display: none;
        z-index: 80;
        box-shadow: 0 8px 24px rgba(16, 24, 40, .12)
    }

    /* UTILITIES */
    .u-imp {
        background: linear-gradient(transparent 60%, rgba(0, 153, 255, .25) 0);
        padding: 0 .2em;
        border-radius: 4px;
        font-weight: 800;
        text-decoration: none !important;
    }

    .hl,
    mark {
        background: linear-gradient(transparent 60%, rgba(0, 153, 255, .3) 0);
        padding: 0 .2em;
        border-radius: 4px;
        font-weight: 700;
    }

    .hl-yellow {
        background: linear-gradient(transparent 60%, rgba(255, 193, 7, .35) 0);
    }

    .list-check {
        list-style: none;
        padding-left: 0;
    }

    .card strong {
        color: black;
    }

    .list-check li {
        padding-left: 26px;
        position: relative;
    }

    .list-check li::before {
        content: "\f00c";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        width: 18px;
        text-align: center;
        color: #16a34a;
    }

    .note {
        border: 1px solid var(--line);
        background: #fff;
        border-left: 4px solid var(--brand);
        padding: 12px;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 102, 204, .08);
        margin-top: 12px;
    }

    .note i {
        margin-right: 6px;
        color: var(--brand);
    }

    /* RESPONSIVE */
    @media (min-width:1025px) {
        .tab-nav {
            display: flex;
        }

        .dock-wrap {
            display: none;
        }

        main {
            padding-bottom: var(--space-md);
        }

        .tab-panel:not(.active) {
            display: none !important;
        }

        .container {
            max-width: 960px
        }

        .dock button {
            min-width: 88px
        }
    }

    @media (max-width:1024px) {
        .container {
            max-width: 960px
        }

        .dock button {
            min-width: 88px
        }
    }

    @media (max-width:768px) {
        .container {
            max-width: 720px
        }

        .grid {
            grid-template-columns: 1fr 1fr
        }

        .dock {
            padding: 8px 8px
        }

        .dock button {
            min-width: 82px
        }

        .dock button .ico {
            width: 34px;
            height: 34px
        }

        td,
        th {
            font-size: 14px;
            padding: 10px 8px
        }
    }

    @media (max-width:560px) {
        .grid {
            grid-template-columns: 1fr
        }

        .dock {
            max-width: 98vw
        }

        .dock button {
            min-width: 74px;
            gap: 4px;
            font-size: 11px
        }

        .dock button .ico {
            width: 32px;
            height: 32px
        }

        td,
        th {
            font-size: 13.5px;
            padding: 10px 8px
        }
    }

    @media (prefers-reduced-motion:reduce) {
        * {
            transition: none !important;
            animation: none !important;
        }

        .card,
        .table-wrap,
        tr {
            transform: none !important;
        }
    }
</style>
</head>

<body>
    <!-- Bottom progress -->
    <div class="progress" aria-hidden="true"></div>
    <main class="container mt-5">
        <!-- Tab Navigation (Desktop) -->
        <nav class="tab-nav" id="tabNav">
            <button data-target="#home" class="active">
                <span class="ico"><i class="fa-solid fa-house" data-regular="fa-solid fa-house" data-solid="fa-solid fa-house"></i></span>
                <span>Overview</span>
            </button>
            <button data-target="#highlights">
                <span class="ico"><i class="fa-regular fa-calendar-check" data-regular="fa-regular fa-calendar-check" data-solid="fa-solid fa-calendar-check"></i></span>
                <span>Highlights</span>
            </button>
            <button data-target="#syllabus">
                <span class="ico"><i class="fa-solid fa-book-open" data-regular="fa-solid fa-book-open" data-solid="fa-solid fa-book-open"></i></span>
                <span>Syllabus</span>
            </button>
            <button data-target="#careers">
                <span class="ico"><i class="fa-solid fa-briefcase" data-regular="fa-solid fa-briefcase" data-solid="fa-solid fa-briefcase"></i></span>
                <span>Careers</span>
            </button>
            <button data-target="#contact">
                <span class="ico"><i class="fa-solid fa-headset" data-regular="fa-solid fa-headset" data-solid="fa-solid fa-headset"></i></span>
                <span>Contact</span>
            </button>
        </nav>
        <!-- Tab Panels -->
        <div class="tab-panel active" data-tab="home">
            <!-- HERO -->
            <div class="hero-wrap">
                <section id="home" class="hero">
                    <h1><span class="u-imp">IGNOU MA in Corporate Social Responsibility Admission 2025 – Build a Career That Drives Change</span></h1>
                    <p class="lead">IGNOU MA in Corporate Social Responsibility Admission is the bridge between social and business success. This program helps students to better understand the relationship between corporations, communities, and profit. The MA-CSR equips students with CSR and sustainability frameworks, ethical governance, and social innovation—designed for professionals, graduates, and social entrepreneurs who want to lead impact-driven initiatives.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Admission 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 2 Years (PG)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC/DEB Recognized • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20MA%20CSR" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>
            <!-- WHY -->
            <section id="why" class="section">
                <h2>Why Choose IGNOU MA in Corporate Social Responsibility (MA-CSR)?</h2>
                <p>The Master of Arts in Corporate Social Responsibility program (MA-CSR), offered by Indira Gandhi National Open University, equips students with comprehensive knowledge of CSR and sustainability frameworks. It provides a solid foundation in ethical governance and social innovation, preparing graduates to design and lead CSR initiatives that deliver measurable social impact.</p>
                <div class="grid">
                    <div class="card"><strong>1) Flexible, Career-Focused Learning</strong><br />Open and Distance Learning enables professionals and graduates to study without interrupting work or life commitments.</div>
                    <div class="card"><strong>2) Practical Curriculum</strong><br />Courses blend theory with case studies, projects, and community-based learning for real-world application.</div>
                    <div class="card"><strong>3) Recognized Qualification</strong><br />UGC and DEB recognition makes the degree valuable across private, public, and non-profit sectors.</div>
                    <div class="card"><strong>4) Multi-Disciplinary Skills</strong><br />Students gain skills in stakeholder analysis, monitoring & evaluation, governance, and sustainability reporting.</div>
                    <div class="card"><strong>5) Full Support from Unnati Education</strong><br />From admissions to assignment help and TEE mentoring, Unnati supports your MA-CSR journey end-to-end.</div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="highlights">
            <!-- HIGHLIGHTS -->
            <section id="highlights" class="section">
                <h2>IGNOU MA in Corporate Social Responsibility Admission 2025 — Highlights</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th align="left">Feature</th>
                                <th align="left">Details</th>
                            </tr>
                            <tr>
                                <td>Programme Code</td>
                                <td>MA-CSR (or as per IGNOU code for MA CSR)</td>
                            </tr>
                            <tr>
                                <td>Programme Name</td>
                                <td>Master of Arts (Corporate Social Responsibility)</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>Postgraduate Degree</td>
                            </tr>
                            <tr>
                                <td>Mode of Study</td>
                                <td>Open and Distance Learning (ODL)</td>
                            </tr>
                            <tr>
                                <td>School</td>
                                <td>School of Social Sciences / Relevant School at IGNOU</td>
                            </tr>
                            <tr class="key-row">
                                <td>Duration</td>
                                <td><span class="u-imp">Minimum 2 Years</span> — Semester / Credit Based</td>
                            </tr>
                            <tr>
                                <td>Medium of Instruction</td>
                                <td>English and Hindi</td>
                            </tr>
                            <tr class="key-row">
                                <td>Eligibility</td>
                                <td><span class="u-imp">Bachelor's Degree in any discipline from a recognized university</span></td>
                            </tr>
                            <tr>
                                <td>Graduation Award</td>
                                <td>Master of Arts (Corporate Social Responsibility)</td>
                            </tr>
                            <tr>
                                <td>Support Partner</td>
                                <td>Unnati Education: Admission, Assignments & Project Support</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p style="margin-top:10px"><strong>Admission 2025:</strong> The MA-CSR prepares you for roles at the intersection of business, society, and sustainability. Unnati Education manages portal navigation, form filling, subject selection, and confirmation tracking to keep your registration error-free.</p>
                <div class="note">
                    <i class="fa-solid fa-circle-info"></i>
                    <strong>Pro tip:</strong> Keep your <span class="u-imp">admission receipt</span> and project/assignment submission screenshots handy for smooth re-registration and tracking.
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="syllabus">
            <!-- STRUCTURE -->
            <section id="structure" class="section">
                <h2>Program Structure — MA Corporate Social Responsibility</h2>
                <p>The IGNOU MA Corporate Social Responsibility is structured on a credit basis over two years, totalling approximately 64 credits. The program includes core courses across CSR theory and practice, project work, electives specialising in thematic CSR areas, and a research/dissertation component to apply learning to real-world initiatives.</p>
                <div class="grid">
                    <div class="card"><strong>Foundations of CSR</strong><br />Principles, history, and governance of corporate responsibility.</div>
                    <div class="card"><strong>Implementation & Management</strong><br />Project management, monitoring & evaluation, and stakeholder engagement techniques.</div>
                    <div class="card"><strong>Applied & Elective Areas</strong><br />Gender, health, education, livelihood and environment focused electives to specialise.</div>
                </div>
                <p>This combination of courses and project work prepares graduates to design, implement, and evaluate CSR programmes with measurable impact.</p>
            </section>
            <!-- SYLLABUS -->
            <section id="syllabus" class="section">
                <h2>MA-CSR Syllabus — Year-wise Summary</h2>
                <div class="accordion">
                    <!-- Year 1 -->
                    <div class="item open">
                        <div class="q">
                            <h4>Year 1 (Core Courses)</h4><i class="fa-solid fa-minus"></i>
                        </div>
                        <div class="a" style="display:block">
                            <div class="table-wrap">
                                <table>
                                    <tr>
                                        <th>TYPE</th>
                                        <th align="left">SUBJECTS</th>
                                        <th>CODE</th>
                                        <th>CREDITS</th>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Fundamentals of CSR</td>
                                        <td>MEDS-041</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>CSR and Sustainable Development</td>
                                        <td>MEDS-042</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>CSR: Laws, Governance and Implementation</td>
                                        <td>MEDS-043</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>CSR Project Management</td>
                                        <td>MEDS-044</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>CSR Monitoring and Evaluation</td>
                                        <td>MEDS-045</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Project Work</td>
                                        <td>MEDSP-046</td>
                                        <td>6</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Year 2 -->
                    <div class="item">
                        <div class="q">
                            <h4>Year 2 (Electives & Dissertation)</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">
                            <div class="table-wrap">
                                <table>
                                    <tr>
                                        <th>TYPE</th>
                                        <th align="left">SUBJECTS</th>
                                        <th>CODE</th>
                                        <th>CREDITS</th>
                                    </tr>
                                    <tr>
                                        <td>ELECTIVE (Any 4)</td>
                                        <td>CSR and Gender / CSR and Health / CSR and Education / CSR and Livelihood / CSR and Environment</td>
                                        <td>MEDSE-047 / MEDSE-048 / MEDSE-049 / MEDSE-050 / MEDSE-051</td>
                                        <td>6 each</td>
                                    </tr>
                                </table>
                            </div>
                            <p style="margin-top:10px">The course culminates in a research-based dissertation or project, allowing students to apply theoretical learning to practical CSR initiatives. This blend of theory and practice ensures graduates can plan, implement, and evaluate CSR programmes that create measurable impact.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="careers">
            <!-- ELIGIBILITY -->
            <section id="eligibility" class="section">
                <h2>Eligibility Criteria</h2>
                <ul>
                    <li><strong>Qualification:</strong> <span class="u-imp">Bachelor's Degree in any discipline</span> from a recognized University.</li>
                    <li><strong>Age Limit:</strong> <span class="u-imp">No upper age limit</span>.</li>
                    <li><strong>Medium of Study:</strong> <span class="u-imp">English and Hindi</span>.</li>
                </ul>
                <p>This program suits fresh graduates, mid-career professionals, social entrepreneurs, and anyone passionate about social development and sustainability. Unnati Education offers expert guidance through every step of admission and study.</p>
            </section>
            <!-- OUTCOMES -->
            <section id="outcomes" class="section">
                <h2>Learning Objectives & Outcomes</h2>
                <ul class="list-check">
                    <li>Understand CSR principles, sustainability frameworks, and governance ethics.</li>
                    <li>Develop skills for stakeholder analysis, monitoring, and evaluation.</li>
                    <li>Design and implement CSR programs and sustainability initiatives.</li>
                    <li>Build competencies in social auditing, impact measurement, and reporting.</li>
                    <li>Engage with interdisciplinary approaches linking business, policy, and community development.</li>
                </ul>
                <p>Graduates are prepared to lead socially responsible strategies and projects that balance business goals with social and environmental wellbeing.</p>
            </section>
            <!-- CAREERS -->
            <section id="careers" class="section">
                <h2>Career Opportunities After IGNOU MA in Corporate Social Responsibility</h2>
                <div class="grid">
                    <div class="card"><strong>1. CSR Officer / Manager</strong><br />Manage CSR budgets, programs, and sustainability reporting.</div>
                    <div class="card"><strong>2. Sustainability Consultant</strong><br />Advise on ESG compliance, strategy, and ethical governance.</div>
                    <div class="card"><strong>3. NGO Program Manager</strong><br />Design and run community-driven projects in partnership with corporates and governments.</div>
                    <div class="card"><strong>4. Social Impact Analyst</strong><br />Measure outcomes, analyse data, and report social value creation.</div>
                    <div class="card"><strong>5. Corporate Communications Specialist</strong><br />Manage CSR communications, stakeholder outreach, and brand responsibility content.</div>
                    <div class="card"><strong>6. Policy & Research Roles</strong><br />Work with think-tanks, public agencies, and research organizations on inclusive growth frameworks.</div>
                    <div class="card"><strong>7. Community Development Officer</strong><br />Implement grassroots initiatives in education, health, and livelihoods.</div>
                </div>
                <h3 style="margin-top:12px">Average Salary Range (INR Per Annum)</h3>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th>Job Roles</th>
                                <th>Average Salary (INR Per Annum)</th>
                            </tr>
                            <tr>
                                <td>CSR Coordinator</td>
                                <td>Rs 3 L - Rs 5 L</td>
                            </tr>
                            <tr>
                                <td>CSR / Sustainability Manager</td>
                                <td>Rs 6 L - Rs 12 L</td>
                            </tr>
                            <tr>
                                <td>ESG Analyst / Policy Consultant</td>
                                <td>Rs 5 L - Rs 10 L</td>
                            </tr>
                            <tr>
                                <td>NGO Project Lead</td>
                                <td>Rs 4 L - Rs 8 L</td>
                            </tr>
                            <tr>
                                <td>Corporate Communications Specialist</td>
                                <td>Rs 4 L - Rs 7 L</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p style="margin-top:10px">Salaries vary with experience, role, company size, and specialization. Beyond pay, the role offers the reward of creating measurable social and environmental benefit.</p>
            </section>
            <!-- WHY UNNATI -->
            <section id="whyunnati" class="section">
                <h2>Why Choose Unnati Education for IGNOU MA-CSR</h2>
                <div class="grid">
                    <div class="card"><strong>Admissions Guidance</strong><br />Individualised help for form filling, portal navigation, and document submission.</div>
                    <div class="card"><strong>Course & Subject Selection</strong><br />Guidance on electives and credit mapping aligned with career goals.</div>
                    <div class="card"><strong>Assignments & Project Support</strong><br />Solved notes, templates, and expert mentorship for project/dissertation work.</div>
                    <div class="card"><strong>TEE & Exam Mentoring</strong><br />Strategies, previous papers, and focused revision support.</div>
                    <div class="card"><strong>Live Updates</strong><br />Deadlines, results, and revaluation notifications.</div>
                    <div class="card"><strong>Backlog & Planning Support</strong><br />Help with pacing, resubmissions, and academic planning.</div>
                </div>
            </section>
            <!-- FAQ -->
            <section id="faq" class="section">
                <h2>FAQs — IGNOU MA in Corporate Social Responsibility (MA-CSR)</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>Q1. What is the MA-CSR program?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">A two-year postgraduate program focusing on sustainability, ethics, and corporate citizenship. It prepares students to manage CSR and social impact initiatives.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q2. Who can apply for IGNOU MA-CSR Admissions 2025?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Graduates from a recognized university are eligible. There is no upper age limit.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q3. Is the MA-CSR degree valid for employment and higher education?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. It is recognized by UGC and DEB, and is valid for research, employment, and higher studies.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q4. What will I learn in the MA-CSR?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">You will learn CSR strategies, sustainability reporting, stakeholder engagement, social auditing, and impact measurement aligned with ESG frameworks.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q5. Can working professionals enroll?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Absolutely. ODL mode allows flexible study alongside work commitments.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q6. What career opportunities follow completion?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Graduates can work as CSR managers, sustainability consultants, NGO leaders, social impact analysts, policy researchers, and communication specialists.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q7. Does Unnati Education provide help for this program?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. We provide admission assistance, assignment support, project guidance, and timely updates—end-to-end support from zero to one hundred.</div>
                    </div>
                </div>
            </section>
            <!-- CONCLUSION -->
            <section id="conclusion" class="section">
                <h2>Conclusion</h2>
                <p>IGNOU MA in Corporate Social Responsibility Admission 2025 is not just a degree — it is a call to action for responsible leaders. The program blends social innovation with business acumen to prepare graduates for leadership roles that prioritise both profit and planet. By choosing MA-CSR, you invest in a future focused on sustainable and inclusive growth.</p>
                <p>Unnati Education provides simple, guided academic support to ensure your IGNOU experience is structured and successful. Begin today — lead with integrity and build a career that drives change.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="contact">
            <!-- CONTACT -->
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, DOB, qualification, and chosen program. We’ll handle admissions, documents, assignments, and projects.</p>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> Message</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                    <p style="margin-top:8px"><strong>Call/WhatsApp: 9355198199 • 9355198199</strong></p>
                </div>
            </section>
        </div>
    </main>
    <!-- Right CTAs -->
    <div class="fabs">
        <a class="fab wa" href="https://wa.me/919355198199" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        <a class="fab call" href="tel:+919355198199" aria-label="Call"><i class="fa-solid fa-phone"></i></a>
        <button class="fab top" id="toTop" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
    </div>
    <!-- Bottom Dock (Mobile) -->
    <div class="dock-wrap">
        <div class="dock" id="dock" role="navigation" aria-label="Bottom navigation">
            <button data-target="#home" class="active">
                <span class="ico"><i class="fa-solid fa-house" data-regular="fa-solid fa-house" data-solid="fa-solid fa-house"></i></span>
                <span>Overview</span>
            </button>
            <button data-target="#highlights">
                <span class="ico"><i class="fa-regular fa-calendar-check" data-regular="fa-regular fa-calendar-check" data-solid="fa-solid fa-calendar-check"></i></span>
                <span>Highlights</span>
            </button>
            <button data-target="#syllabus">
                <span class="ico"><i class="fa-solid fa-book-open" data-regular="fa-solid fa-book-open" data-solid="fa-solid fa-book-open"></i></span>
                <span>Syllabus</span>
            </button>
            <button data-target="#careers">
                <span class="ico"><i class="fa-solid fa-briefcase" data-regular="fa-solid fa-briefcase" data-solid="fa-solid fa-briefcase"></i></span>
                <span>Careers</span>
            </button>
            <button data-target="#contact">
                <span class="ico"><i class="fa-solid fa-headset" data-regular="fa-solid fa-headset" data-solid="fa-solid fa-headset"></i></span>
                <span>Contact</span>
            </button>
        </div>
    </div>
    <!-- Toast -->
    <div class="toast" id="toast"><i class="fa-solid fa-circle-check"></i> Copied!</div>
    <!-- Same Scripts -->
    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        function setDockHeightVar() {
            const dock = document.querySelector('.dock');
            const h = dock ? (dock.getBoundingClientRect().height + 10) : 84;
            document.documentElement.style.setProperty('--dock-h', h + 'px');
        }
        window.addEventListener('load', setDockHeightVar);
        window.addEventListener('resize', setDockHeightVar);

        function wrapTables() {
            document.querySelectorAll('table').forEach(t => {
                if (!t.parentElement.classList.contains('table-wrap')) {
                    const w = document.createElement('div');
                    w.className = 'table-wrap';
                    t.parentNode.insertBefore(w, t);
                    w.appendChild(t);
                }
            });
        }
        wrapTables();
        const prog = document.querySelector('.progress');
        ScrollTrigger.create({
            start: 0,
            end: document.body.scrollHeight - innerHeight,
            onUpdate: (self) => prog.style.transform = `scaleX(${self.progress})`
        });
        let isDesktop = window.matchMedia('(min-width: 1025px)').matches;

        function handleNavClick(target) {
            $('#dock button, #tabNav button').removeClass('active');
            $(`#dock button[data-target="${target}"], #tabNav button[data-target="${target}"]`).addClass('active');
            updateNavIcons();
            if (isDesktop) {
                $('.tab-panel').removeClass('active').hide();
                $(`.tab-panel[data-tab="${target.replace('#', '')}"]`).addClass('active').show();
                gsap.to(window, {
                    duration: .3,
                    scrollTo: {
                        y: '.tab-nav',
                        offsetY: 10
                    },
                    ease: 'power2.inOut'
                });
            } else {
                gsap.to(window, {
                    duration: .8,
                    scrollTo: {
                        y: target,
                        offsetY: 10
                    },
                    ease: 'power2.inOut'
                });
            }
        }
        $('#dock button, #tabNav button').on('click', function() {
            const target = $(this).data('target');
            handleNavClick(target);
        });

        function setActive() {
            const y = $(window).scrollTop() + 120;
            const ids = ['#home', '#why', '#highlights', '#structure', '#syllabus', '#eligibility', '#outcomes', '#careers', '#whyunnati', '#faq', '#conclusion', '#contact'];
            let current = '#home';
            ids.forEach(id => {
                const $el = $(id);
                if (!$el.length) return;
                const top = $el.offset().top,
                    h = $el.outerHeight();
                if (y >= top && y < top + h) current = id;
            });
            const buttonTarget = current === '#why' ? '#home' : (current === '#structure' || current === '#syllabus' || current === '#outcomes' ? '#syllabus' : (current === '#eligibility' || current === '#careers' || current === '#whyunnati' || current === '#faq' || current === '#conclusion' ? '#careers' : current));
            $('#dock button').removeClass('active');
            $(`#dock button[data-target="${buttonTarget}"]`).addClass('active');
            updateNavIcons();
        }

        function updateActive() {
            if (isDesktop) return;
            setActive();
        }
        $(window).on('scroll', updateActive);
        $(window).on('resize', function() {
            const newDesktop = window.matchMedia('(min-width: 1025px)').matches;
            if (newDesktop !== isDesktop) {
                isDesktop = newDesktop;
                const currentTarget = $('#dock button.active, #tabNav button.active').first().data('target') || '#home';
                handleNavClick(currentTarget);
                if (!isDesktop) {
                    document.querySelector('main').style.paddingBottom = `calc(var(--dock-h) + var(--space-md))`;
                    $('.tab-panel').removeClass('active').show();
                } else {
                    document.querySelector('main').style.paddingBottom = `var(--space-md)`;
                }
            } else {
                updateActive();
            }
            setDockHeightVar();
        });
        updateActive();

        function updateNavIcons() {
            $('#dock button .ico i, #tabNav button .ico i').each(function() {
                const $btn = $(this).closest('button');
                const isActive = $btn.hasClass('active');
                const $i = $(this);
                const reg = ($i.data('regular') || '').split(' ');
                const sol = ($i.data('solid') || '').split(' ');
                if (reg.length || sol.length) {
                    $i.removeClass(reg.concat(sol).join(' '));
                    const cls = isActive ? sol : reg;
                    if (cls && cls.length) {
                        $i.addClass(cls.join(' '));
                    }
                }
            });
        }
        gsap.utils.toArray('.hero,.section,.card').forEach(el => {
            gsap.from(el, {
                y: 16,
                opacity: 0,
                duration: .55,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%'
                }
            });
        });
        ScrollTrigger.create({
            start: 400,
            onEnter: () => $('.fab.top').fadeIn(150),
            onLeaveBack: () => $('.fab.top').fadeOut(150)
        });
        $('#toTop').on('click', () => gsap.to(window, {
            duration: .8,
            scrollTo: 0,
            ease: 'power2.inOut'
        }));
        $(document).on('click', '.accordion .q', function() {
            const $item = $(this).closest('.item');
            const $a = $item.find('.a');
            const willOpen = $a.is(':hidden');
            $('.accordion .a').slideUp(140);
            $('.accordion .q i').removeClass('fa-minus').addClass('fa-plus');
            $('.accordion .item').removeClass('open');
            if (willOpen) {
                $a.slideDown(160);
                $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
                $item.addClass('open');
            }
            setTimeout(setDockHeightVar, 220);
        });
    </script>
    <script>
        (function() {
            const clamp = (n, min, max) => Math.max(min, Math.min(n, max));

            function bindTilt(el, opts) {
                const strength = opts?.strength ?? 12;
                const damp = opts?.damp ?? 8;
                let raf = null,
                    rx = 0,
                    ry = 0;

                function onMove(e) {
                    const rect = el.getBoundingClientRect();
                    const cx = (e.clientX - rect.left) / rect.width;
                    const cy = (e.clientY - rect.top) / rect.height;
                    const tRY = (cx - 0.5) * strength * 2;
                    const tRX = (0.5 - cy) * strength * 2;

                    function step() {
                        rx += (tRX - rx) / (opts?.damp ?? damp);
                        ry += (tRY - ry) / (opts?.damp ?? damp);
                        el.style.setProperty('--rx', rx.toFixed(2) + 'deg');
                        el.style.setProperty('--ry', ry.toFixed(2) + 'deg');
                        el.style.setProperty('--mx', clamp(cx * 100, 0, 100) + '%');
                        el.style.setProperty('--my', clamp(cy * 100, 0, 100) + '%');
                        if (Math.abs(tRX - rx) > 0.1 || Math.abs(tRY - ry) > 0.1) {
                            raf = requestAnimationFrame(step);
                        } else {
                            cancelAnimationFrame(raf);
                            raf = null;
                        }
                    }
                    if (!raf) raf = requestAnimationFrame(step);
                }

                function onLeave() {
                    el.style.setProperty('--rx', '0deg');
                    el.style.setProperty('--ry', '0deg');
                    el.style.removeProperty('--mx');
                    el.style.removeProperty('--my');
                }
                el.addEventListener('mousemove', onMove, {
                    passive: true
                });
                el.addEventListener('mouseleave', onLeave);
                el.addEventListener('touchstart', e => {
                    const t = e.touches[0];
                    if (!t) return;
                    onMove({
                        clientX: t.clientX,
                        clientY: t.clientY
                    });
                }, {
                    passive: true
                });
                el.addEventListener('touchend', onLeave, {
                    passive: true
                });
            }
            document.querySelectorAll('.section .card').forEach(el => bindTilt(el, {
                strength: 10,
                damp: 10
            }));
            document.querySelectorAll('.table-wrap').forEach(el => bindTilt(el, {
                strength: 6,
                damp: 10
            }));
        })();
    </script>
    @endsection