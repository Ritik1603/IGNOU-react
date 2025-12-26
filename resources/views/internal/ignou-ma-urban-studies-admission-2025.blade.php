@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU MA Urban Studies Admission 2025 – Complete Master’s Guide by Unnati Education</span>')
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
                <span>Home</span>
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
                    <h1><span class="u-imp">IGNOU MA Urban Studies Admission 2025 – Complete Master’s Guide by Unnati Education</span></h1>
                    <p class="lead">Explore IGNOU MA Urban Studies Admission 2025—eligibility, syllabus overview, and career opportunities. A detailed master’s guide by Unnati Education.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 2 Years (Flexible)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20MAUS" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>
            <!-- WHY -->
            <section id="why" class="section">
                <h2>IGNOU MA Urban Studies admission tells the story modern India</h2>
                <p>IGNOU MA Urban Studies admission tells the story modern India, a nation that is changing at a faster pace than its infrastructure. By 2025 half of India’s population will live in the city, and two-thirds will live there globally. The rapid urbanization has made it essential to train professionals that understand how cities thrive, grow, and live.</p>
                <p>India's urban areas -- from Mumbai high-rises, to Delhi's NCR, to the smart cities of Pune and Indore — are not just growing. They are redefining what it means to live, to work, and to connect. This progress comes with a challenge: how can we make our cities more sustainable, inclusive and equitable?</p>
                <p>IGNOU’s Master of Arts (MAUS) in Urban Studies is a program for those who are interested in urban planning, thinking, and doing.</p>
                <div class="grid">
                    <div class="card"><strong>Curriculum that is grounded in urban reality rather than abstract theory.</strong></div>
                    <div class="card"><strong>Integrating sustainability, climate change, and inclusivity into core learning pillars.</strong></div>
                    <div class="card"><strong>Learn while you contribute. This flexibility is for both working professionals and administrators.</strong></div>
                    <div class="card"><strong>UGC-DEB is a credible source of recognition for both public and private careers.</strong></div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="highlights">
            <!-- HIGHLIGHTS -->
            <section id="highlights" class="section">
                <h2>MA Urban Studies: Overview</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th align="left">Aspect</th>
                                <th align="left">Details</th>
                            </tr>
                            <tr>
                                <td>Program Name</td>
                                <td>MAUS (Master of Arts, Urban Studies)</td>
                            </tr>
                            <tr>
                                <td>The School</td>
                                <td>School of Extension and Development Studies</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>Postgraduate Degree</td>
                            </tr>
                            <tr>
                                <td>Mode</td>
                                <td>Open Distance Learning</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td>2 Years (Flexible completion period)</td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>Specialization</td>
                                <td>Urban Studies</td>
                            </tr>
                            <tr>
                                <td>Eligibility</td>
                                <td>The graduation of any discipline</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p style="margin-top:10px"><strong>Last Date (Tentative):</strong> The session typically closes around <span class="mono u-imp"><mark class="hl-yellow">31 August 2025</mark></span>. Apply early to ensure timely enrollment and access to materials. Unnati Education manages portal login, form filling, subject selection, and confirmation tracking to keep your registration error-free.</p>
                <div class="note">
                    <i class="fa-solid fa-circle-info"></i>
                    <strong>Pro tip:</strong> Keep your <span class="u-imp">admission receipt</span> and <span class="k">subject selection</span> screenshots handy for smooth re-registration.
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="syllabus">
            <!-- STRUCTURE -->
            <section id="structure" class="section">
                <h2>Programme Structure & Syllabus Overview (Semester-wise Summary)</h2>
                <p>The MA Urban Studies course is split into two academic year, with each emphasising progressive learning - from foundational theory through to applied practice.</p>
                <p>During the first academic year, learners will explore the key dynamics of urbanization, including how cities form, develop, and change. In the first year, learners focus on urban governance models, demographic dynamics, and evaluation frameworks.</p>
                <p>In the second-year, the program dives deeper into areas such as urban ecologies, sustainable development and decentralization. Incorporating research-based projects improves analytical skills and helps learners to apply classroom concepts to actual urban issues.</p>
                <p>The overall program has 64 credits. It is a balance of core, electives and project-based learning, ensuring that each learner will graduate with a practical, actionable knowledge.</p>
                <p>Unnati Education guides you smoothly through the entire process - from course mapping and project completion to ensuring that your academic journey remains structured and free of stress.</p>
                <div class="grid">
                    <div class="card"><strong>Year 1:</strong> Urbanization dynamics, governance, demographics, evaluation frameworks</div>
                    <div class="card"><strong>Year 2:</strong> Urban ecology, sustainable development, decentralization, research projects</div>
                    <div class="card"><strong>Total Credits:</strong> 64 (Core + Electives + Projects)</div>
                </div>
            </section>
            <!-- SYLLABUS -->
            <section id="syllabus" class="section">
                <h2>Key Learning Outcomes</h2>
                <ul class="list-check">
                    <li>A comprehensive understanding of urban systems, sustainable development frameworks and their integration.</li>
                    <li>Ability to use analytical and participatory methods for evaluating city-level policies and projects.</li>
                    <li>Enhanced leadership, planning and governance abilities relevant to real world urban challenges.</li>
                    <li>Strong interdisciplinarity - combining economics with sociology and environmental sciences.</li>
                    <li>Confidence is needed to participate in national and international programs on urban development.</li>
                </ul>
                <p>This course helps you to become a well-rounded professional in urban areas, capable of both strategic and operational vision.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="careers">
            <!-- ELIGIBILITY -->
            <section id="eligibility" class="section">
                <h2>Eligibility Criteria</h2>
                <ul>
                    <li><strong>Qualification:</strong> <span class="u-imp">Graduation in any discipline</span> from a recognized university.</li>
                    <li><strong>Age Limit:</strong> <span class="u-imp">No upper age limit</span>.</li>
                    <li><strong>Medium of Study:</strong> <span class="u-imp">English</span>.</li>
                </ul>
                <p>This program is designed for students who want to specialize in urban planners, governance, sustainability and development policies while still enjoying flexibility.</p>
            </section>
            <!-- OUTCOMES -->
            <section id="outcomes" class="section">
                <h2>Programme Objectives</h2>
                <ol>
                    <li>Deep Knowledge of Urban Development (DKU) - Provides learners with a multi-dimensional perspective on planning, governance, urban growth, and more.</li>
                    <li>Understanding Urban Ecology, Sustainability and Sustainability: Cultivating the mindset of seeing cities as ecosystems rather than concrete jungles.</li>
                    <li>Capacity Building For Urban Professionals: Enabling planners, policymakers, and functionaries to implement evidence-based strategies.</li>
                    <li>Mastery in Project Evaluation: Developing technical skills in developing, monitoring, and evaluating development programs.</li>
                </ol>
                <p>By combining these two disciplines, MAUS graduates become visionary, analytical professionals capable of interpreting urban trends and translating insights into policy.</p>
            </section>
            <!-- CAREERS -->
            <section id="careers" class="section">
                <h2>Career Opportunities and Employment Avenues</h2>
                <p>Urban development is one of India’s fastest-growing job sectors. Students who complete MAUS can work as:</p>
                <div class="grid">
                    <div class="card"><strong>Smart City missions, Ministry of Housing & Urban Affairs and municipal authorities.</strong></div>
                    <div class="card"><strong>UN-Habitat. UNDP. World Bank. ADB.</strong></div>
                    <div class="card"><strong>Private consultants: real estate analytics, infrastructure plans, CSR based sustainability projects.</strong></div>
                    <div class="card"><strong>Research and academia - urban think tanks and policy institutes. Universities.</strong></div>
                </div>
                <p>The program provides a solid foundation for Ph.D. students, UPSC candidates, and individuals who are interested in roles within public policy and government.</p>
                <h3 style="margin-top:12px">Global Outlook of Urban Studies</h3>
                <p>Globalization has brought urban problems to the forefront. Climate change and migration are common concerns. IGNOU MA Urban Studies Admission is globally relevant.</p>
                <p>Graduates can work in international organizations and collaborate on cross-border urban initiatives, or they can contribute to global networks of research on sustainable cities.</p>
                <p>This degree opens the door to not only Indian career opportunities, but also careers in international development.</p>
                <h3 style="margin-top:12px">Smart City Mission - India's Smart City Mission - The Urban Studies Advantage</h3>
                <p>Smart City Mission by the government, AMRUT (Asset Management and Reuse Unit) and PM Awas are increasing the need for multi-disciplinary professionals to handle projects, from water networks to transportation networks.</p>
                <p>Graduates of IGNOU MA Urban Studies Admission 2025 are able to play a vital role in these programs, contributing as planners or sustainability advisors.</p>
                <p>This degree offers a gateway to India's largest development movement.</p>
            </section>
            <!-- FAQ -->
            <section id="faq" class="section">
                <h2>Frequently Asked Question (FAQ)</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>Q1. What is the eligibility to IGNOU MA Urban Studies Admission in 2025?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">For admission, a graduate degree in any field is required.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q2. How long will it take for me to finish the program?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">IGNOU provides flexible completion options. The course lasts for two years.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q3. What is your preferred medium of instruction for teaching?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The entire program will be offered in English. This ensures accessibility to global learners.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q4. Who should apply for this course?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Any student, professional, or civic administrator who is passionate about sustainable cities, urban planning, or public policy.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q5. What is the advantage of studying the MA Urban Studies with IGNOU?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">It is an affordable and flexible postgraduate program that blends academic depth and application. It can open doors to careers within government, research, and NGOs.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q6. Does Unnati Education provide support?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. Unnati Education can provide full-cycle help. We will guide you through the process of understanding your program, choosing courses, completing tasks, and achieving excellence in academics.</div>
                    </div>
                </div>
            </section>
            <!-- CONCLUSION -->
            <section id="conclusion" class="section">
                <h2>Conclusion – Building Cities of Tomorrow</h2>
                <p>IGNOU MA Urban Studies admission is more than an academic degree. It is a vision for India’s future. It empowers learners with the ability to analyze, design and manage urban growth that is inclusive and sustainable.</p>
                <p>Unnati Education provides expert mentorship to students throughout the process. From enrollment through project completion, they can achieve academic mastery while gaining professional direction.</p>
                <p>This program provides you with the tools needed to influence not only the urban infrastructure but the fabric of the city itself. This is the program for you if cities are more to you than skylines. They can offer opportunities for innovation, equity and change.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="contact">
            <!-- CONTACT -->
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, DOB, qualification, and chosen program. We’ll handle admission, documents, assignments, and exams.</p>
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
                <span>Home</span>
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