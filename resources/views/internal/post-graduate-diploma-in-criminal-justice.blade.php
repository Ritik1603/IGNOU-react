@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU PGDCJ Admission 2025 – Post Graduate Diploma in Criminal Justice</span>')
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
        box-shadow: 0 8px 20px rgba(0,102,204,.3);
    }

    /* TAB NAV */
    .tab-nav {
        display: none;
        gap: 8px;
        align-items: center;
        background: rgba(255,255,255,.96);
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
        box-shadow: 0 4px 12px rgba(0,102,204,.3);
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
        background: linear-gradient(transparent 60%, rgba(0,153,255,.25) 0);
        padding: 0 .2em;
        border-radius: 4px;
        font-weight: 800;
        text-decoration: none !important;
    }

    .list-check {
        list-style: none;
        padding-left: 0;
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

    @media (min-width:1025px) {
        .tab-nav { display: flex; }
        .dock-wrap { display: none; }
        main { padding-bottom: var(--space-md); }
        .tab-panel:not(.active) { display: none !important; }
    }

    @media (max-width:560px) {
        .grid { grid-template-columns: 1fr }
    }
</style>
</head>

<body>
    <div class="progress" aria-hidden="true"></div>

    <main class="container mt-5">

        <!-- Desktop Tab Navigation -->
        <nav class="tab-nav" id="tabNav">
            <button data-target="#home" class="active"><span class="ico"><i class="fa-solid fa-house"></i></span><span>Home</span></button>
            <button data-target="#highlights"><span class="ico"><i class="fa-regular fa-calendar-check"></i></span><span>Highlights</span></button>
            <button data-target="#syllabus"><span class="ico"><i class="fa-solid fa-book-open"></i></span><span>Syllabus</span></button>
            <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Careers</span></button>
            <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
        </nav>

        <!-- ===================== HOME TAB ===================== -->
        <div class="tab-panel active" data-tab="home">
            <div class="hero-wrap">
                <section id="home" class="hero">
                    <h1><span class="u-imp">IGNOU PGDCJ Admission 2025 – Post Graduate Diploma in Criminal Justice</span></h1>
                    <p class="lead">IGNOU Post Graduate Diploma in Criminal Justice Admission is for students who are interested in learning how modern justice works, the reasons behind certain laws, and what authorities do to combat crime. Unnati Education is a place where we encounter many students with a passion for legal studies and policing. They are also interested in criminology, public service, or social work. But they don't know how to get started. This diploma offers a structure to help them study law, crime and justice. It is practical and relevant.</p>
                    <p class="lead">Criminal justice is an area that's growing quickly. Crime prevention, the rights of vulnerable people, police methods, reforms in law, and justice are all topics that come up constantly. The one-year curriculum allows students to learn about these subjects in depth while gaining the confidence they need to pursue a career within the justice sector or to further their studies.</p>
                    <p class="lead">This diploma will help anyone, whether they are a new graduate or already work in the justice sector, develop an understanding of processes such as crime investigation, courtroom functions, correctional administration and crime analysis. Our team of experts will guide you through each stage, from beginning to end.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDCJ" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section id="why" class="section">
                <h2>Why choose the Post Graduate Diploma in Criminal Justice program?</h2>
                <p>This diploma will appeal to anyone who is interested in crime and the delivery of justice. The program is appealing to many people.</p>
                <div class="grid">
                    <div class="card"><strong>1. Relevant for Today's Justice Challenges</strong><br />It is now more than just police work and courtroom trials. Now, it includes issues such as cybercrime and juvenile justice, along with forensics, social behaviors, reforms in the law, and marginalized groups' rights. Students can keep abreast of these issues so that they have a broader understanding of crime.</div>
                    <div class="card"><strong>2. It is useful for beginners as well as professionals.</strong><br />This diploma is popular with students of criminology, public administration, social work and psychology. The diploma is also useful for professionals who are already in the government, with NGOs, at courts and other support systems.</div>
                    <div class="card"><strong>3. Students who are interested in Law Studies will benefit from this course</strong><br />Those who are interested in pursuing further studies in law, joining research positions, or entering fields such as community justice, victim support or legal advocacy will often find that this diploma is helpful. The diploma helps students to gain a solid foundation in the laws and administration of justice.</div>
                    <div class="card"><strong>4. An Academic Perspective with a Practical Focus</strong><br />It explores different aspects of criminal justice, including legal, administrative and procedural perspectives, as well as social. This program helps the learner understand the workings of the system as well as the challenges that it presents.</div>
                    <div class="card"><strong>5. Flexibility in Learning without Interrupting Study or Work Schedule</strong><br />The program can be completed in open distance mode. This allows students to continue with their internships, jobs, or even graduation. The flexibility of the program makes it easy to combine academics with daily life.</div>
                </div>
            </section>
        </div>

        <!-- ===================== HIGHLIGHTS TAB ===================== -->
        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>Highlights from the program</h2>
                <p>What are the main features of the Post Graduate Diploma in Criminal Justice?</p>
                <ul style="margin:20px 0; padding-left:32px;">
                    <li>One-year postgraduate diploma</li>
                    <li>School of Law</li>
                    <li>English</li>
                    <li>The program is designed for all graduates, regardless of their discipline.</li>
                    <li>The course explores the criminal justice system, including codes, administration, research, and administrative systems.</li>
                    <li>A strong focus is placed on the criminal law, governance and rights of vulnerable people.</li>
                    <li>The course is designed for employees of the government, workers in non-governmental organizations, lawyers, as well as students and teachers of criminology.</li>
                    <li>A project component that allows you to put your learning into practice</li>
                </ul>

                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th align="left">Feature</th><th align="left">Details</th></tr>
                            <tr><td>Programme Code</td><td>PGDCJ</td></tr>
                            <tr><td>Programme Name</td><td>Post Graduate Diploma in Criminal Justice</td></tr>
                            <tr><td>School</td><td>School of Law (SOL)</td></tr>
                            <tr><td>Duration</td><td>1 Year</td></tr>
                            <tr><td>Medium</td><td>English</td></tr>
                            <tr><td>Eligibility</td><td>Any Bachelor’s Degree</td></tr>
                            <tr><td>Total Credits</td><td>32</td></tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <!-- ===================== SYLLABUS TAB ===================== -->
        <div class="tab-panel" data-tab="syllabus">
            <section id="program-info" class="section">
                <h2>What is the Post Graduate Diploma in Criminal Justice?</h2>
                <p>Post-Graduate Diplomas in Criminal Justice expose students to many concepts of the justice system. This program examines how the courts, administrative and correctional bodies, and law enforcement work together. This program examines issues such as criminal management, delay in investigation, complexity of legal systems, rights awareness, and delays with investigations.</p>
                <p>The study of criminal justice involves more than just learning about the punishment. Criminal justice involves an understanding of human behaviour and social issues. It also includes a policing system, victim assistance, legal reasoning, evidence-based decisions, and police systems. It helps students look at criminality from a balanced perspective, looking both at the structural factors behind crimes and legal responses.</p>
                <p>It also helps us think of vulnerable people, including women, children and those with disabilities. The program teaches students how to protect themselves and the dignity of justice professionals.</p>
                <p>As crime patterns rapidly change, it is important to keep up-to-date with the latest information. This will help you stay informed and develop your analytical skills. You can also participate in discussions around reforms of justice.</p>
            </section>

            <section id="syllabus" class="section">
                <h2>Post Graduate Diploma in Criminal Justice Syllabus Overview</h2>
                <p>The curriculum moves through the different layers of justice. Students start with basic topics, like how the legal and administrative system of criminal justice operates. Students study crime processes, codes and challenges. The core courses are a set of theory classes and the project. The 32-credit program builds on basic concepts and then moves to more applied knowledge, so that students are not overwhelmed.</p>

                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th>Course Code</th>
                                <th align="left">Title of the Course</th>
                                <th>Credits</th>
                            </tr>
                            <tr><td>MLE 11</td><td>Criminal Justice System</td><td>4</td></tr>
                            <tr><td>MLE 12</td><td>Indian Penal Code</td><td>4</td></tr>
                            <tr><td>MLE 13</td><td>Criminal Justice Processes</td><td>4</td></tr>
                            <tr><td>MLE 14</td><td>Criminal Justice Administration</td><td>4</td></tr>
                            <tr><td>MLE 15</td><td>Challenges to Criminal Justice System</td><td>4</td></tr>
                            <tr><td>MLE 16</td><td>Criminal Justice Research and Advocacy</td><td>4</td></tr>
                            <tr><td>MLEP 17</td><td>Project</td><td>8</td></tr>
                            <tr style="background:#f0f8ff"><td><strong>Total Credits</strong></td><td></td><td><strong>32</strong></td></tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <!-- ===================== CAREERS TAB ===================== -->
        <div class="tab-panel" data-tab="careers">
            <section id="eligibility" class="section">
                <h2>Post Graduate Diploma in Criminal Justice Admission Eligibility</h2>
                <p>The following qualifications are required to apply for the diploma:</p>
                <ul>
                    <li><strong>The degree can be in any field.</strong></li>
                    <li><strong>OR you can have a special background, such as in social work or criminalology.</strong></li>
                    <li><strong>OR work experience in criminal justice administration</strong></li>
                </ul>
                <p>Program eligibility is inclusive and includes:</p>
                <ul>
                    <li>Law and Criminology graduates</li>
                    <li>Social workers who work with vulnerable populations</li>
                    <li>The staff of the government and courts</li>
                    <li>Supporting justice and rights through NGO professionals</li>
                    <li>Police department employees or support personnel</li>
                    <li>Anyone who would like to learn about crime and justice more clearly, in a structured fashion.</li>
                </ul>
            </section>

            <section class="section">
                <h2>Objectives of Programme</h2>
                <p>These key goals include:</p>
                <ul class="list-check">
                    <li>Helping students stay up to date with the latest developments in the Criminal Justice field</li>
                    <li>The creation of informed professionals, citizens and stakeholders who are aware of justice processes</li>
                    <li>What can you do to improve your skills as a justice worker?</li>
                    <li>Inspiring deeper studies of legal codes, justice processes and administration</li>
                    <li>The challenges faced by law enforcement agencies and the justice system</li>
                </ul>
            </section>

            <section class="section">
                <h2>Learning Outcomes</h2>
                <p>The students who complete this diploma will be in a position to:</p>
                <ul class="list-check">
                    <li>Learn how to understand the criminal justice system from beginning to end</li>
                    <li>Strong academic foundation to help you analyze crime and legal issues</li>
                    <li>Investigate challenges related to evidence handling and justice administration.</li>
                    <li>Interpretation of relevant laws in real cases</li>
                    <li>Examine issues relating to vulnerable groups within the justice systems.</li>
                    <li>Research small-scale crimes, criminal behaviour or justice processes</li>
                    <li>Participate meaningfully in discussions about criminal law reform and justice reforms.</li>
                </ul>
            </section>

            <section id="careers" class="section">
                <h2>Career Opportunities</h2>
                <p>Criminal justice covers a large range. The following career options are available to learners after completing this diploma:</p>
                <div class="grid">
                    <div class="card"><strong>1. Roles within Government Departments</strong><br />Learners with justice skills are valued in departments such as those that deal with crime prevention, criminal investigation, legal aid, women's and children's safety, correctional management, etc.</div>
                    <div class="card"><strong>2. NGOs and rights-based organizations</strong><br />Professionals are often hired by organizations working in the areas of legal education, rehabilitation, victim services, prison reform, community justice and support for victims.</div>
                    <div class="card"><strong>3. Supporting Lawyers</strong><br />This course will improve your legal knowledge and prepare you for positions as a paralegal or legal assistant.</div>
                    <div class="card"><strong>4. Research and Policy Organizations</strong><br />Students can help with community assessment, policy studies, or documentation.</div>
                    <div class="card"><strong>5. These roles are based on the study of criminal behaviour and criminology.</strong><br />Students can also assist with behavioural studies, crime prevention programs, or youth-based interventions.</div>
                    <div class="card"><strong>6. Court Support Roles</strong><br />Criminal processes are essential for court clerks as well as administrative and legal staff.</div>
                    <div class="card"><strong>7. Journalism and Public Information</strong><br />The media professionals who cover crime news, legal matters, and justice developments gain more clarity.</div>
                    <div class="card"><strong>8. Future Legal Studies</strong><br />The diploma provides a solid foundation for learners who plan to pursue an LLB degree or advanced criminal law.</div>
                </div>
            </section>

            <section class="section">
                <h2>About Unnati education:</h2>
                <p>Clarity, motivation and constant guidance are essential for studying justice. Unnati Education provides support to learners in the form of academic planning and concept understanding. We also provide project guidance and study strategies.</p>
                <p>We ensure that the students are able to understand complex concepts in a clear and simple way. Our students are guided to stay consistent and understand how to manage their assignments, prepare for the practical and learn about expectations.</p>
                <p>It's simple: We guide and support our students all the way through. You will be guided through the entire process from 0 to 100, so that you feel comfortable and confident in your learning.</p>
            </section>

            <section class="section">
                <h2>Add-On courses</h2>
                <p>Most learners choose to combine their diploma with short-term courses like:</p>
                <ul>
                    <li>Basics in forensic science</li>
                    <li>Research methods for social sciences</li>
                    <li>Legal Drafting and Documentation</li>
                    <li>Gender studies</li>
                    <li>Police and community safety training</li>
                    <li>The public administration or governance course</li>
                    <li>Psychological or victimology training</li>
                </ul>
                <p>Add-ons can help expand career knowledge.</p>
            </section>

            <section class="section">
                <h2>The Benefits of the Program</h2>
                <ul class="list-check">
                    <li>One-year structured criminal justice learning</li>
                    <li>This course covers law, procedural challenges, administration, and the application of law.</li>
                    <li>Beginners and experts alike will find this book useful.</li>
                    <li>Working learners can now learn at a distance.</li>
                    <li>The research component is important.</li>
                    <li>The justice system is better understood from different perspectives.</li>
                    <li>Useful in the public sector, community work, NGO studies and legal roles</li>
                </ul>
            </section>

            <section id="faq" class="section">
                <h2>FAQs</h2>
                <div class="accordion">
                    <div class="item"><div class="q"><h4>Q1. What is the length of the PGDCJ?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Under the Open Distance Learning System, you can study for up to one year.</div></div>
                    <div class="item"><div class="q"><h4>Q2. What is the eligibility for this diploma program?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Anyone with an undergraduate or graduate degree in criminology or social work can apply.</div></div>
                    <div class="item"><div class="q"><h4>Q3. Is the program good for a legal career?</h4><i class="fa-solid fa-plus"></i></div><div class="a">The course is designed for students who want to learn about law, legal research and roles in justice.</div></div>
                    <div class="item"><div class="q"><h4>Q4. Is there a component of practical training in the program?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Students can conduct case-based studies and research in the Project Course (MLEP-17).</div></div>
                    <div class="item"><div class="q"><h4>Q5. Are working professionals eligible to join?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Yes. This mode is best suited to professionals working in law enforcement, courts, NGOs or administrative departments.</div></div>
                    <div class="item"><div class="q"><h4>Q6. What is the content of your course?</h4><i class="fa-solid fa-plus"></i></div><div class="a">The book covers criminal justice systems and penal codes as well as administrative processes, challenges to administration, and areas of research.</div></div>
                    <div class="item"><div class="q"><h4>Q7. Unnati Education provides students with support.</h4><i class="fa-solid fa-plus"></i></div><div class="a">Learners are guided to understand concepts and plan projects.</div></div>
                </div>
            </section>

            <section id="conclusion" class="section">
                <h2>Conclusion</h2>
                <p>IGNOU Post Graduate Diploma in Criminal Justice Admission provides a good path for those who wish to study justice in depth and with responsibility. This course builds on students’ knowledge of crime, administration, law, and social issues. Unnati Education provides support to learners in every phase, including completing their academic year. The right guidance can help anyone walk confidently down this path and establish a connection to justice, society and civic responsibility.</p>
            </section>
        </div>

        <!-- ===================== CONTACT TAB ===================== -->
        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Ready to Join PGDCJ 2025? Contact Unnati Now!</h2>
                <div class="card">
                    <p>Send your name, qualification & “PGDCJ” — we handle admission to exams, full support!</p>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                    <p style="margin-top:8px"><strong>Call/WhatsApp: 9355198199</strong></p>
                </div>
            </section>
        </div>
    </main>

    <!-- FABs + Dock -->
    <div class="fabs">
        <a class="fab wa" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a class="fab call" href="tel:+919355198199"><i class="fa-solid fa-phone"></i></a>
        <button class="fab top" id="toTop"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <div class="dock-wrap">
        <div class="dock" id="dock">
            <button data-target="#home" class="active"><span class="ico"><i class="fa-solid fa-house"></i></span><span>Home</span></button>
            <button data-target="#highlights"><span class="ico"><i class="fa-regular fa-calendar-check"></i></span><span>Highlights</span></button>
            <button data-target="#syllabus"><span class="ico"><i class="fa-solid fa-book-open"></i></span><span>Syllabus</span></button>
            <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Careers</span></button>
            <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
        </div>
    </div>

    <div class="toast" id="toast"><i class="fa-solid fa-circle-check"></i> Copied!</div>

    <!-- FULL ORIGINAL JAVASCRIPT - 100% UNCOMPRESSED -->
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
                gsap.to(window, {duration: .3, scrollTo: {y: '.tab-nav', offsetY: 10}, ease: 'power2.inOut'});
            } else {
                gsap.to(window, {duration: .8, scrollTo: {y: target, offsetY: 10}, ease: 'power2.inOut'});
            }
        }

        $('#dock button, #tabNav button').on('click', function() {
            const target = $(this).data('target');
            handleNavClick(target);
        });

        function setActive() {
            const y = $(window).scrollTop() + 120;
            const ids = ['#home','#why','#highlights','#program-info','#syllabus','#eligibility','#careers','#faq','#conclusion','#contact'];
            let current = '#home';
            ids.forEach(id => {
                const $el = $(id);
                if (!$el.length) return;
                const top = $el.offset().top,
                      h = $el.outerHeight();
                if (y >= top && y < top + h) current = id;
            });
            const buttonTarget = current === '#why' ? '#home' : (current === '#program-info' || current === '#syllabus' ? '#syllabus' : (current === '#eligibility' || current === '#careers' || current === '#faq' || current === '#conclusion' ? '#careers' : current));
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

        $('#toTop').on('click', () => gsap.to(window, {duration: .8, scrollTo: 0, ease: 'power2.inOut'}));

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
                el.addEventListener('mousemove', onMove, {passive: true});
                el.addEventListener('mouseleave', onLeave);
                el.addEventListener('touchstart', e => {
                    const t = e.touches[0];
                    if (!t) return;
                    onMove({clientX: t.clientX, clientY: t.clientY});
                }, {passive: true});
                el.addEventListener('touchend', onLeave, {passive: true});
            }
            document.querySelectorAll('.section .card').forEach(el => bindTilt(el, {strength: 10, damp: 10}));
            document.querySelectorAll('.table-wrap').forEach(el => bindTilt(el, {strength: 6, damp: 10}));
        })();
    </script>

    @endsection
</body>
</html>