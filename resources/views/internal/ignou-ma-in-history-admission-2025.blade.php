@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU MA in History Admission 2025 — Explore the Past, Shape the Future</span>')
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
        --brand-2: #00A3FF;
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
                    <h1><span class="u-imp">IGNOU MA in History Admission 2025 — Explore the Past, Shape the Future</span></h1>
                    <p class="lead">History is not just a list of events. It is the story of humanity's progress, our foundation, and our compass to the future. If you are someone who is inspired by the stories of cultures, revolutions, or cultural transitions, IGNOU MA in History Admission 2025 gives you the chance to transform your curiosity into deep academic understanding and meaningful career development.<br><br>The Master of Arts (MAH), offered by Indira Gandhi Open University, School of Social Sciences under IGNOU, combines rigorous study of history with modern interpretation and analytical research. If you want to work in heritage, policy, or research, you can use this degree to help you learn how the world has evolved.<br><br>Unnati Education will help you to not only apply, but also thrive. We will guide you from 0 to 100%, making sure your journey from registration to exam success is smooth and structured.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: Minimum 2 Years - Maximum 4 Years</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC-DEB Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20MA%20History%202025" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>
            <!-- HIGHLIGHTS -->
            <section id="highlights" class="section">
                <h2>IGNOU MA Admission 2025 -- Key Highlights</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th align="left">Feature</th>
                                <th align="left">Details</th>
                            </tr>
                            <tr>
                                <td>Program Name</td>
                                <td>MAH (Master of Arts History)</td>
                            </tr>
                            <tr>
                                <td>University</td>
                                <td>Indira Gandhi National Open University</td>
                            </tr>
                            <tr>
                                <td>The School</td>
                                <td>School of Social Sciences</td>
                            </tr>
                            <tr>
                                <td>Program Code</td>
                                <td>MAHI</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td>Minimum 2 Years - Maximum 4 Years</td>
                            </tr>
                            <tr>
                                <td>Medium of Instruction</td>
                                <td>English & Hindi</td>
                            </tr>
                            <tr>
                                <td>Total Credits</td>
                                <td>Buy 64 Credits</td>
                            </tr>
                            <tr>
                                <td>Mode of study</td>
                                <td>Open Distance Learning</td>
                            </tr>
                            <tr>
                                <td>Eligibility</td>
                                <td>Bachelor's in any field from a recognized university</td>
                            </tr>
                            <tr>
                                <td>Specialization Areas</td>
                                <td>Indian History, World History, Political History, and Economic & Environmental Studies</td>
                            </tr>
                            <tr>
                                <td>Recognition</td>
                                <td>Approved By UGC-DEB</td>
                            </tr>
                            <tr>
                                <td>Support Partner</td>
                                <td>Unnati Education provides full 0-100 guidance</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <!-- WHY -->
            <section id="why" class="section">
                <h2>Why IGNOU MA in History Admission 2025?</h2>
                <div class="grid">
                    <div class="card"><strong>History is a Comprehensive Study.</strong><br>The IGNOU MA in History is more than just memorizing timelines. It encourages students to critically examine how societies and economies have changed over time. You'll learn how trade created empires, how revolutionary changes redefined nations, as well as how human thought changed civilizations.<br><br>Connecting ancient, modern, and medieval worlds will give you a holistic understanding of globalization, which is invaluable in today's ever-changing social-political scene.</div>
                    <div class="card"><strong>Open Distance Learning - Education Without Barriers</strong><br>Open and Distance Learning allows you to learn at your own speed, from anywhere in the world. The program is designed to meet the needs of working professionals, housewives, lifelong learners, and anyone else who wants a high-quality education without compromising on their responsibilities.<br><br>With IGNOU, you can customize your learning to fit your schedule. The true power of inclusive learning is in its ability to include all students.</div>
                    <div class="card"><strong>3 Dual Medium -- Hindi and English</strong><br>IGNOU MA in History in Hindi or English is offered to students from a variety of linguistic and cultural backgrounds. This inclusivity empowers all learners, from small towns to large cities. It makes the course democratic and representative of India’s diverse academic ecosystem.</div>
                    <div class="card"><strong>4 No Age Limit -- Learning Knows No Boundaries</strong><br>Admission is open to anyone - from recent graduates to retired professionals - who wants the MA in History 2025. IGNOU believes that learning history is timeless and will never limit your ambition.</div>
                    <div class="card"><strong>5 Respected and Recognized Worldwide</strong><br>IGNOU is a UGCDEB-approved university that has a global reputation. Its degrees are respected both in India and overseas. If you are interested in applying for teaching positions, competitive exams, or pursuing a Ph.D. abroad, an IGNOU MA degree in History can be your passport.</div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="highlights">
            <!-- PROGRAM -->
            <section id="program" class="section">
                <h2>MA History Program at IGNOU</h2>
                <p>IGNOU’s Master of Arts in History Program (MAH) is for students looking for a strong foundation in historical analysis, research methods, and academic writing. It helps students develop critical thinking and interpret historical sources. They can also engage in comparative analyses of civilizations over time.<br><br>This program allows students to explore the connections between culture, politics, and economics. They also learn to read history using both narratives and evidence.<br><br>The curriculum encourages students not to just learn history, but to think like historians. It is an invitation for students to ask questions, analyze human progress, and make contributions to its understanding.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="syllabus">
            <!-- SYLLABUS -->
            <section id="syllabus" class="section">
                <h2>IGNOU MA in History Syllabus (Yearwise).</h2>
                <p>The IGNOU MA History 2025 Admission syllabus is divided into two years of core courses, with 64 credits. Elective options are also available. It is an interdisciplinary program that combines regional, national, and global history.</p>
                <div class="accordion">
                    <!-- Year 1 -->
                    <div class="item">
                        <div class="q">
                            <h4>Year-1</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">
                            <div class="table-wrap">
                                <table>
                                    <tr>
                                        <th>TYPE</th>
                                        <th>SUBJECTS</th>
                                        <th>CODE</th>
                                        <th>CREDITS</th>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Ancient and Medieval Societies</td>
                                        <td>MHI‑01</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Modern World</td>
                                        <td>MHI‑02</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Historiography</td>
                                        <td>MHI‑03</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Political Structures in India (Early Times to 1526 CE)</td>
                                        <td>MHI‑04</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Year 2 -->
                    <div class="item">
                        <div class="q">
                            <h4>Year-2</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">
                            <div class="table-wrap">
                                <table>
                                    <tr>
                                        <th>TYPE</th>
                                        <th>SUBJECTS (Choose any 4 electives)</th>
                                        <th>CODE</th>
                                        <th>CREDITS</th>
                                    </tr>
                                    <tr>
                                        <td>ELECTIVE (Any 4)</td>
                                        <td>1. History of Indian Economy<br>2. History of Environment<br>3. Social Structures in India<br>4. History of Indian Science and Technology<br>5. Indian National Movement<br>6. Evolution of State and Polity in India<br>7. India: Earliest Times to 8th Century A.D</td>
                                        <td>1. MHI‑05<br>2. MHI‑06<br>3. MHI‑07<br>4. MHI‑08<br>5. MHI‑09<br>6. MHI‑10<br>7. MHI‑11</td>
                                        <td>8 each</td>
                                    </tr>
                                </table>
                            </div>
                            <p>Assignments, examinations at the end of each term, and dissertations are all designed to ensure a balance between theoretical knowledge and research applications.<br><br>Unnati Education helps you to understand the syllabus, step by step. We'll show you how credits work, how to prepare your assignments, and how to plan a study schedule. From 0 to 100, we will guide you, making sure you are never lost.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- OUTCOMES -->
            <section id="outcomes" class="section">
                <h2>MA in History - Key Learning Outcomes</h2>
                <p>After you complete the IGNOU MA History program, you'll not just know about history; you'll also be able to think historically. The program cultivates academic and professional skills such as:</p>
                <ul class="list-check">
                    <li>* Critical and analytical thinking: Ability to evaluate historical evidence, interpret conflicting narratives, and draw informed conclusions.</li>
                    <li>* Research Proficiency: Experience in historical research, archival work, and analytic writing.</li>
                    <li>* Global Awareness: Understanding historical connections between India, the world, and India.</li>
                    <li>* Cultural literacy: An understanding of history, philosophy, and social-political movements.</li>
                    <li>* Communication Skills, Confidence to present ideas, write papers, and engage in academic dialogue.</li>
                </ul>
                <p>With these skills, you are equally prepared for academic, administrative, and professional careers.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="careers">
            <!-- CAREERS -->
            <section id="careers" class="section">
                <h2>Career Opportunities After an MA in History</h2>
                <p>The postgraduate degree opens up a range of career options, including education and public policy, as well as cultural management and global studies. You can use your MA in History to pursue the following careers:</p>
                <p><strong>Teaching and Academia</strong><br>Many graduates go on to teach in colleges or schools. A MA in History will allow you to apply for UGC NET/JRF and pursue a Ph.D. later. Here, teaching is more than a career -- it's an opportunity to pass along the lessons of history to the future generation.</p>
                <p><strong>Research and Archival Work</strong><br>Historians protect the collective memory. This degree allows you to work as a historian in archives, museums, and historical societies.</p>
                <p><strong>Civil Services and Policy Functions</strong><br>Students who study history do well in UPSC and other exams, such as State PSC, SSC, and administrative exams. This is because the program helps them to understand governance, politics, and global dynamics. The study of history has been credited with the analytical thinking of many successful civil servants.</p>
                <p><strong>Heritage and Cultural Management</strong><br>The course prepares you to take on roles in museums and heritage sites. It also provides training for cultural organizations that work with documentation, conservation, and awareness. You can actively protect India's living history.</p>
                <p><strong>Five Media, Journalism, and Writing</strong><br>Your analytical depth and storytelling abilities can lead to roles within journalism, publishing, and documentary research. Scriptwriting is also an option. There are many opportunities, from working as a strategist to writing historical articles.</p>
                <p><strong>Career in Corporate and International Companies</strong><br>International institutions and global companies are increasingly looking for employees who possess cultural intelligence, analytical reasoning, and research precision, all of which history students possess.</p>
                <p>Unnati Education offers students a one-on-one mentorship program, exam support, and career guidance. This ensures that your degree is translated into tangible success.</p>
            </section>
            <!-- RELEVANCE -->
            <section id="relevance" class="section">
                <h2>What is the relevance of studying history in our modern world?</h2>
                <p>In a world where information is spread faster than ever, wisdom is often left behind. History gives us wisdom to understand events, challenge narratives, avoid mistakes, and question them.<br><br>IGNOU MA History Admission is more than an academic experience; it's also a way to gain a new perspective. It teaches about how revolutions begin, how societies change, and how individuals can shape their own destiny. These insights will be invaluable to anyone involved in education or governance, law, or business.<br><br>You can navigate the present and future with more intelligence if you understand the past. The program prepares students for more than just exams. It prepares them for life.</p>
            </section>
            <!-- UNNATI -->
            <section id="unnati" class="section">
                <h2>Unnati Education - Your Trusted IGNOU Partner (0-100 Guidance)</h2>
                <p>Unnati Education redefines distance learning. We are aware that IGNOU learners often have to juggle family life, work, and academics. This is why Unnati Education offers end-to-end support so you can stay on track.</p>
                <p>How can we make your travels more enjoyable?</p>
                <ul class="list-check">
                    <li>* Personal Admission Assistance: From registration to enrollment confirmation, complete guidance.</li>
                    <li>* Study Support: Updated IGNOU materials, structured summaries, and conceptual notes.</li>
                    <li>* Solved assignments (TMAs), handwritten or typed, are accurate assignments in all subjects.</li>
                    <li>* Exam Preparation: Previous-year papers, Guess papers, and Test Series for Top Performance.</li>
                    <li>* Do not miss the deadlines to submit or register again.</li>
                    <li>* Career Counseling: Personalized mentoring for teaching, civil services, and research.</li>
                </ul>
                <p>Our philosophy is straightforward -- you concentrate on the learning, while we handle everything else. From registration to exam, and from confusion to clarity, we will guide you throughout the entire process.</p>
            </section>
            <!-- LEADERS -->
            <section id="leaders" class="section">
                <h2>New Section - Building Analytical Leaders</h2>
                <p>The world is constantly changing -- the technology advances, economies change, and society reinvents itself every decade. Under every change, however, there is a pattern only history can reveal.<br><br>Understanding how things change is what history is about. Only those who can understand the lessons learned in the past will be able to solve the global challenges of today, including the climate crisis, inequality, and migration.<br><br>This is why historians have become increasingly influential in fields like:<br><br>* Designing international relations policies and their impact on policy<br>* Sustainability and environmental planning<br>* Reforming education and developing a curriculum<br>* Digital archiving, knowledge management, and digital archiving<br><br>IGNOU MA in History Admission 2025 will enable you to be more than a historian, but rather a leader.</p>
            </section>
            <!-- FAQ -->
            <section id="faq" class="section">
                <h2>FAQs are frequently Asked Questions</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>Q1. What are the admission requirements for IGNOU MA History 2025?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">You must possess a bachelor’s degree from a recognized institution in any field. There is no minimum requirement for the percentage.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q2. How long is the program?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The MA program in History can be extended to four years using IGNOU’s flexible ODL mode.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q3. What is your preferred medium of instruction for teaching?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The program is offered in Hindi and English to allow students from all over the world to learn in their preferred language.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q4. What is included in the MA in History?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The curriculum includes 64 credits of ancient, medieval, modern, and historiography history, political and cultural analysis, and electives, such as economics and environment.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q5. What are the career options available after earning a degree?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Graduates can work in public and private sectors as educators, researchers, and civil servants. They can also become content creators, curators, historians, and museum professionals.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q6. Is IGNOU's MA in History a valid degree internationally?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. It's UGC DEB-approved and is accepted for employment, research, and higher studies globally.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q7. Unnati Education: How can it help you?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">We provide a full range of 0-100 support, from the completion of the application form to study plans, exam preparation, and ongoing mentorship.</div>
                    </div>
                </div>
            </section>
            <!-- CONCLUSION -->
            <section id="conclusion" class="section">
                <h2>You can also read our conclusion.</h2>
                <p>IGNOU MA History Admissions 2025 is more than a postgraduate degree program. It's an invitation for you to rediscover the human spirit through the length of time. It creates cultural leaders, thinkers, and educators who can understand the past, why it happened, and how that will affect our future.<br><br>You can achieve academic success with the flexibility of IGNOU, its academic credibility, and Unnati Education’s 0-100 guidance. You will not only receive a respected diploma, but you will also gain a lifelong analytical mind that will give you an advantage in all fields.<br><br>If you are ready to learn about the past and develop a career with a lasting impact --<br><br>Unnati Education can guide you from the moment of your first registration until your final success.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="contact">
            <!-- CONTACT -->
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Share your details — name, DOB, qualification, and chosen program. We'll handle admission, documents, assignments, and exams.</p>
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
            const ids = ['#home', '#highlights', '#why', '#program', '#syllabus', '#outcomes', '#careers', '#relevance', '#unnati', '#leaders', '#faq', '#conclusion', '#contact'];
            let current = '#home';
            ids.forEach(id => {
                const $el = $(id);
                if (!$el.length) return;
                const top = $el.offset().top,
                    h = $el.outerHeight();
                if (y >= top && y < top + h) current = id;
            });
            const buttonTarget = current === '#highlights' || current === '#why' ? '#home' : (current === '#program' || current === '#syllabus' || current === '#outcomes' ? '#syllabus' : (current === '#relevance' || current === '#unnati' || current === '#leaders' || current === '#faq' || current === '#conclusion' ? '#careers' : current));
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
</body>

</html>