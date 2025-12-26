@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Educational Management and Administration Admission – Complete Academic Guide 2025</span>')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
<style>
    :root{
        --brand:#0066CC;--brand-2:#00A3FF;--brand-glow:#0099FF;--bg:#f8fbff;--card:#ffffff;--line:#007DDF;
        --text:#1a1a2e;--muted:#44476a;--radius:20px;--shadow-md:0 16px 48px rgba(0,102,204,.16);
        --shadow-card:0 8px 32px rgba(0,102,204,.12);
        --space-xs:clamp(6px,1.2vw,10px);--space-sm:clamp(10px,1.6vw,14px);--space-md:clamp(16px,2.4vw,22px);
        --space-lg:clamp(22px,3.2vw,32px);--space-xl:clamp(28px,4vw,44px);--dock-h:84px;
        --tilt-persp:1000px;--tilt-raise:16px;--tilt-scale:1.03;
    }
    *{box-sizing:border-box;margin:0;padding:0}html,body{height:100%}
    body{font-family:'Inter',sans-serif;background:linear-gradient(180deg,#f8fbff 0%,#eef5ff 100%);
        color:var(--text);line-height:1.7;overflow-x:hidden;letter-spacing:.01em;position:relative}
    body::before{content:"";position:fixed;inset:0;background:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"><path fill="%23eef5ff" fill-opacity="0.03" d="M1 3h1v1H1V3zm2-2h1v1H3V1z"/></svg>');pointer-events:none;z-index:-1}
    .container{max-width:1100px;margin:0 auto;padding:0 var(--space-md)}
    a{color:var(--brand);text-decoration:none;font-weight:600}a:hover{color:var(--brand-2);text-decoration:underline}
    .mono{font-variant-numeric:tabular-nums}
    .hero-wrap{padding:var(--space-md) 0 var(--space-sm)}
    .hero{margin:var(--space-sm) auto;padding:var(--space-lg) var(--space-md);border-radius:24px;
        background:radial-gradient(1000px 380px at 100% 0%,rgba(0,153,255,.12),transparent 60%),
        radial-gradient(1000px 380px at 0% 0%,rgba(0,102,204,.14),transparent 60%),
        linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);border:2px solid var(--line);
        box-shadow:var(--shadow-md);text-align:center;position:relative;overflow:hidden}
    .hero::after{content:"";position:absolute;top:0;left:0;right:0;height:4px;
        background:linear-gradient(90deg,var(--brand),var(--brand-2));border-radius:24px 24px 0 0}
    .hero h1{font-size:clamp(24px,3.4vw,36px);line-height:1.15;letter-spacing:-.03em;margin-bottom:10px;
        background:linear-gradient(90deg,#1a1a2e 0%,var(--brand) 100%);
        -webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;font-weight:800}
    .hero p.lead{font-size:clamp(15px,1.7vw,18px);color:var(--muted);max-width:900px;margin:0 auto 16px}
    .badges{display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin:var(--space-sm) 0}
    .badge{padding:6px 28px;border-radius:999px;border:2px solid var(--line);background:#fff;
        font-weight:800;font-size:13px;color:var(--text);box-shadow:0 4px 12px rgba(0,102,204,.1);transition:all .2s ease}
    .badge.brand{background:linear-gradient(135deg,var(--brand),var(--brand-2));color:#fff;border:none;
        font-weight:900;box-shadow:0 8px 24px rgba(0,102,204,.3),0 0 0 4px rgba(0,153,255,.2);animation:pulse-badge 2s infinite}
    @keyframes pulse-badge{0%,100%{box-shadow:0 8px 24px rgba(0,102,204,.3),0 0 0 4px rgba(0,153,255,.2)}
        50%{box-shadow:0 12px 32px rgba(0,102,204,.4),0 0 0 8px rgba(0,153,255,.3)}}
    .actions{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:16px}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:14px 20px;border-radius:16px;
        font-weight:800;font-size:15px;transition:all .25s ease;border:none;position:relative;overflow:hidden}
    .btn::before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,.3),transparent);
        opacity:0;transition:opacity .25s}
    .btn:hover::before{opacity:1}
    .btn.primary{background:linear-gradient(135deg,var(--brand),var(--brand-2));color:#fff;
        box-shadow:0 12px 32px rgba(0,102,204,.35)}
    .btn.primary:hover{transform:translateY(-3px) scale(1.02);box-shadow:0 16px 40px rgba(0,102,204,.45)}
    .btn.ghost{background:#fff;color:var(--brand);border:2px solid var(--line);font-weight:700}
    .btn.ghost:hover{border-color:var(--brand);background:var(--brand);color:#fff;transform:translateY(-2px)}
    .section{background:#fff;border:2px solid var(--line);border-radius:var(--radius);
        box-shadow:var(--shadow-md);padding:clamp(20px,2.6vw,32px);margin:var(--space-md) auto;max-width:1200px;position:relative}
    .section h2{font-size:clamp(20px,2.6vw,28px);margin-bottom:8px;position:relative;padding-bottom:10px;
        font-weight:800;color:var(--text)}
    .section h2::after{content:"";position:absolute;left:0;bottom:0;width:80px;height:4px;
        background:linear-gradient(90deg,var(--brand),var(--brand-2));border-radius:999px;
        box-shadow:0 0 12px rgba(0,153,255,.5)}
    .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:16px}
    .card{background:var(--card);border:2px solid var(--line);border-radius:16px;padding:16px;
        box-shadow:var(--shadow-card);transition:all .25s ease;will-change:transform;position:relative;overflow:hidden;
        transform-style:preserve-3d;
        transform:perspective(var(--tilt-persp)) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg))
        translateZ(var(--tz,0px)) scale(var(--sc,1))}
    .card::before{content:"";position:absolute;inset:0;border-radius:16px;padding:2px;
        background:linear-gradient(45deg,var(--brand),var(--brand-2));
        mask:linear-gradient(#fff 0 0) padding-box,linear-gradient(#fff 0 0);mask-composite:exclude;
        opacity:0;transition:opacity .25s}
    .card:hover::before{opacity:1}
    .card::after{content:"";position:absolute;inset:-1px;
        background:radial-gradient(1200px 420px at var(--mx,50%) var(--my,0%),rgba(255,255,255,.35),transparent 60%);
        opacity:0;pointer-events:none;transform:translateZ(1px);transition:opacity .25s ease}
    .card:hover{--tz:var(--tilt-raise);--sc:var(--tilt-scale);border-color:var(--brand-glow);
        box-shadow:0 24px 56px rgba(0,102,204,.22)}
    .card:hover::after{opacity:.7}
    .table-wrap{overflow:auto;-webkit-overflow-scrolling:touch;border:2px solid var(--line);
        border-radius:16px;background:#fff;box-shadow:var(--shadow-card);transition:all .25s ease;
        transform-style:preserve-3d;position:relative;overflow:hidden;
        transform:perspective(var(--tilt-persp)) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg))
        translateZ(var(--tz,0px)) scale(var(--sc,1))}
    .table-wrap::after{content:"";position:absolute;inset:-1px;
        background:radial-gradient(1000px 360px at var(--mx,50%) var(--my,0%),rgba(255,255,255,.25),transparent 60%);
        opacity:0;pointer-events:none;transform:translateZ(1px);transition:opacity .25s ease}
    .table-wrap:hover{--tz:12px;--sc:1.01;border-color:var(--brand);box-shadow:0 20px 48px rgba(0,102,204,.18)}
    .table-wrap:hover::after{opacity:.6}
    table{width:100%;border-collapse:separate;border-spacing:0 8px;margin:-8px 0}
    th,td{padding:12px 10px;font-size:15px;vertical-align:middle;line-height:1.6}
    th{font-weight:800;color:var(--text);background:linear-gradient(135deg,#f8fbff,#eef5ff);
        position:sticky;top:0;z-index:2;box-shadow:0 2px 0 var(--line)}
    tr:hover{transform:scale(1.03);z-index:1;position:relative}
    tr:hover td{background:linear-gradient(90deg,rgba(0,153,255,.12),rgba(0,102,204,.08));
        font-weight:600;color:var(--brand)}
    tr td{background:#fbfdff;border-bottom:1px solid #e6ecff}
    tr:last-child td{border-bottom:none}
    .accordion .item{border:2px solid var(--line);border-radius:16px;margin-bottom:12px;overflow:hidden;
        box-shadow:0 4px 16px rgba(0,102,204,.08)}
    .accordion .q{display:flex;justify-content:space-between;align-items:center;padding:14px 16px;
        cursor:pointer;background:linear-gradient(135deg,#f8fbff,#eef5ff);
        border-bottom:1px dashed var(--line);transition:background .2s}
    .accordion .q:hover{background:#eef5ff}
    .accordion .q h4{font-size:16px;font-weight:700;color:var(--text)}
    .accordion .a{display:none;padding:16px;background:#fff}
    .accordion .item.open .q{background:#fff;border-color:var(--brand)}
    .fabs{position:fixed;right:16px;bottom:calc(var(--dock-h)+12px);display:flex;flex-direction:column;gap:10px;z-index:60}
    .fab{width:52px;height:52px;display:grid;place-items:center;border-radius:50%;color:#fff;
        box-shadow:0 16px 40px rgba(2,6,23,.12);cursor:pointer}
    .fab.wa{background:#25d366}.fab.call{background:linear-gradient(90deg,var(--brand),var(--brand-2))}
    .fab.top{background:#fff;color:#111827;border:1px solid var(--line);display:none}
    .dock-wrap{position:fixed;left:0;right:0;bottom:10px;z-index:70;display:flex;justify-content:center;pointer-events:none}
    .dock{pointer-events:auto;display:flex;gap:8px;align-items:center;background:rgba(255,255,255,.96);
        backdrop-filter:blur(10px);border:1px solid var(--line);border-radius:16px;padding:10px;
        box-shadow:var(--shadow-md);max-width:min(980px,96vw);overflow-x:auto}
    .dock button{display:flex;flex-direction:column;align-items:center;gap:6px;min-width:92px;
        padding:8px 10px;border-radius:12px;border:1px solid transparent;background:transparent;
        color:#0f172a;font-weight:600;font-size:12px;cursor:pointer}
    .dock button i{font-size:18px}
    .dock button .ico{width:36px;height:36px;border-radius:12px;display:grid;place-items:center;
        transition:all .2s ease;color:#0f172a}
    .dock button.active .ico,.dock button:hover .ico{background:linear-gradient(135deg,var(--brand),var(--brand-2));
        color:#fff;transform:translateY(-2px) scale(1.1);box-shadow:0 8px 20px rgba(0,102,204,.3)}
    .tab-nav{display:none;gap:8px;align-items:center;background:rgba(255,255,255,.96);
        backdrop-filter:blur(10px);border:1px solid var(--line);border-radius:16px;padding:10px;
        margin-bottom:var(--space-md);box-shadow:var(--shadow-md);max-width:min(980px,96vw);
        overflow-x:auto;justify-content:center;margin-left:auto;margin-right:auto}
    .tab-nav button{display:flex;flex-direction:row;align-items:center;gap:8px;padding:8px 16px;
        border-radius:12px;border:1px solid transparent;background:transparent;color:#0f172a;
        font-weight:600;font-size:14px;cursor:pointer;white-space:nowrap}
    .tab-nav button .ico{width:32px;height:32px;border-radius:8px;display:grid;place-items:center;
        transition:all .2s ease;color:#0f172a;font-size:14px}
    .tab-nav button.active .ico,.tab-nav button:hover .ico{background:linear-gradient(135deg,var(--brand),var(--brand-2));
        color:#fff;transform:scale(1.1);box-shadow:0 4px 12px rgba(0,102,204,.3)}
    .tab-panel{display:block}main{padding-bottom:calc(var(--dock-h)+var(--space-md))}
    .progress{position:fixed;bottom:0;left:0;right:0;height:4px;
        background:linear-gradient(90deg,var(--brand),var(--brand-2));transform-origin:0 50%;
        transform:scaleX(0);z-index:69}
    .toast{position:fixed;left:50%;transform:translateX(-50%);
        bottom:calc(var(--dock-h)+20px);background:#fff;border:1px solid var(--line);
        color:#111827;padding:10px 14px;border-radius:12px;display:none;z-index:80;
        box-shadow:0 8px 24px rgba(16,24,40,.12)}
    .u-imp{background:linear-gradient(transparent 60%,rgba(0,153,255,.25) 0);padding:0 .2em;
        border-radius:4px;font-weight:800;text-decoration:none !important}
    .hl,mark{background:linear-gradient(transparent 60%,rgba(0,153,255,.3) 0);padding:0 .2em;
        border-radius:4px;font-weight:700}
    .hl-yellow{background:linear-gradient(transparent 60%,rgba(255,193,7,.35) 0)}
    .list-check{list-style:none;padding-left:0}
    .list-check li{padding-left:26px;position:relative;margin:8px 0}
    .list-check li::before{content:"\f00c";font-family:"Font Awesome 6 Free";font-weight:900;
        position:absolute;left:0;top:2px;width:18px;text-align:center;color:#16a34a}
    .note{border:1px solid var(--line);background:#fff;border-left:4px solid var(--brand);
        padding:12px;border-radius:12px;box-shadow:0 4px 16px rgba(0,102,204,.08);margin-top:12px}
    .note i{margin-right:6px;color:var(--brand)}
    @media(min-width:1025px){.tab-nav{display:flex}.dock-wrap{display:none}
        main{padding-bottom:var(--space-md)}.tab-panel:not(.active){display:none !important}}
    @media(max-width:768px){.grid{grid-template-columns:1fr 1fr}}
    @media(max-width:560px){.grid{grid-template-columns:1fr}}
    @media(prefers-reduced-motion:reduce){*{transition:none !important;animation:none !important}
        .card,.table-wrap,tr{transform:none !important}}
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
        <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Career & Eligibility</span></button>
        <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
    </nav>

    <!-- ==================== HOME ==================== -->
    <div class="tab-panel active" data-tab="home">
        <div class="hero-wrap">
            <section id="home" class="hero">
                <h1><span class="u-imp">IGNOU Post Graduate Diploma in Educational Management and Administration Admission – Complete Academic Guide 2025</span></h1>
                <p class="lead">The IGNOU Post Graduate Diploma is for graduates who wish to go beyond classroom roles and move into leadership positions in schools and colleges, training institutions, NGOs and education-focused organizations. This Post Graduate Diploma in Educational Management and Administration programme focuses on how educational institutions in the real world are planned, managed and led, rather than just teaching methods.</p>
                <p class="lead">We find that many teachers, coordinators, or young professionals are ready for more responsibilities, but do not know how to obtain formal credentials in educational management. IGNOU PGDEMA can help. It is a one-year focused postgraduate diploma that allows you to apply management principles directly to the educational sector.</p>
                <p class="lead">Unnati Education is here to make the journey easy and clear. We help you learn what the programme has to offer, how it matches your goals and how you can benefit from it. We aim to guide you along your academic path from 0 to 100%.</p>
                <div class="badges">
                    <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                    <span class="badge"><i class="fa-regular fa-clock"></i> Duration: Minimum 1 Year</span>
                    <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                </div>
                <div class="actions">
                    <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDEMA" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp Now</a>
                    <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call Us</a>
                </div>
            </section>
        </div>

        <section id="why" class="section">
            <h2>Why IGNOU Post Graduate Diploma in Educational Management and Administration is Your Next Step</h2>
            <p>Few courses specifically focus on educational administration and management. This programme fills this gap. This programme was created by IGNOU School of Education to meet the increasing demand for educational managers and administrators.</p>
            <p>There are many reasons to choose this program.</p>
            <div class="grid">
                <div class="card"><strong>1. Focus on Education Systems, not Generic Business Management.</strong><br>In the course, you will learn about open and distance education systems, schools, higher learning, and corporate workplaces. You can use what you have learned in your everyday work as an academic officer, teacher, coordinator or principal.</div>
                <div class="card"><strong>2. This is a great resource for both current and aspiring leaders.</strong><br>This program will give you the language, tools and frameworks that you need to take action with more confidence and clarity.</div>
                <div class="card"><strong>3. Distance Learning Flexibility</strong><br>The programme is available in Open and Distance Learning, so you can continue to work or take care of your family while you study. You do not have to change cities or leave your current job to upgrade your qualification.</div>
                <div class="card"><strong>4. Short-term and focused learning</strong><br>IGNOU PGDEMA's minimum duration is one year. This makes it intense, but also manageable. The structure allows you to develop your leadership skills without committing yourself to a two-year degree.</div>
                <div class="card"><strong>5. Relevance to Real World</strong><br>These topics include organisational behaviours, institutional managements, leadership and decision making. They are directly connected to timetable planning, conflict resolution and resolution of staff, school development plans and stakeholder communications.</div>
            </div>
            <p>Many of us in the education field feel that this type of course is what we are missing between "being a great teacher" and "being a leader who can inspire others."</p>
        </section>
    </div>

    <!-- ==================== HIGHLIGHTS ==================== -->
    <div class="tab-panel" data-tab="highlights">
        <section id="highlights" class="section">
            <h2>Post Graduate Diploma in Educational Management and Administration Program Highlights</h2>
            <p>The Post Graduate Diploma in Educational Management and Administration is structured to give both a theoretical and practical overview of what it takes to lead and manage educational institutions.</p>
            <p>Some of the most important academic highlights include:</p>
            <div class="card">
                <div class="table-wrap">
                    <table>
                        <tr><th>Feature</th><th>Details</th></tr>
                        <tr><td>Programme Type</td><td>Post Graduate Diploma (PGDIPLOMA)</td></tr>
                        <tr><td>Mode</td><td>Distance and Open Learning Mode</td></tr>
                        <tr><td>School</td><td>School of Education at IGNOU</td></tr>
                        <tr><td>Duration</td><td>Minimum One Year</td></tr>
                        <tr><td>Medium</td><td>English</td></tr>
                        <tr><td>Specialisation</td><td>Educational Management and Administration</td></tr>
                        <tr><td>Target Learners</td><td>Teachers and coordinators in the education field, as well as principals, academic administrators in higher education, NGO workers, and graduates who are aspiring to leadership roles.</td></tr>
                    </table>
                </div>
            </div>
            <p style="margin-top:16px">Consider the following:<br><strong>IGNOU Post Graduate Diploma in Educational Management and Administration</strong><br>If you're looking for a way to make the transition from classroom instruction into planning, supervising, and making institutional decisions, this is a great resource.</p>
        </section>
    </div>

    <!-- ==================== SYLLABUS ==================== -->
    <div class="tab-panel" data-tab="syllabus">
        <section id="program" class="section">
            <h2>What’s in the Post Graduate Diploma in Educational Management and Administration Program</h2>
            <p>The IGNOU PGDEMA Programme is built on a series of carefully designed modules that progress from the broad concepts of education management to more specific institutional practices.</p>
            <p>This programme is designed to help us understand:</p>
            <ul class="list-check">
                <li>How educational management as a discipline has evolved.</li>
                <li>What levels and dimensions exist for managing education systems</li>
                <li>What people do in organizations.</li>
                <li>How institutions can be run more ethically and effectively.</li>
            </ul>
        </section>

        <section id="courses" class="section">
            <h2>Course-wise Details</h2>
            <div class="accordion">
                <div class="item"><div class="q"><h4>MES 41 – Growth and Development of Educational Management</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>This course explores how educational management has changed over the years. This course shows how school and university administration has evolved over time from simple control and regulations to leadership, planning and quality assurance. MES41 provides a solid basis for managing as more than just paperwork.</p></div></div>
                <div class="item"><div class="q"><h4>MES 42 - Dimensions of Educational Management</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>Management is viewed as a multi-layered concept. We consider policy level, system levels, institutional levels, and classroom-level. MES 42 helps to understand planning, supervision, coordination and evaluation within educational organizations.</p></div></div>
                <div class="item"><div class="q"><h4>MES 43 – Organisational Behaviour</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>The people who make up schools and colleges are more than just circulars and buildings. MES 43 explores the way individuals and groups behave within institutions. It includes topics such as group dynamics, motivation, conflict resolution, and communication. This course will be very helpful for those who are in teams and need to learn how to deal with human issues.</p></div></div>
                <div class="item"><div class="q"><h4>MES 44 – Institutional Management</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>This course has a more practical approach. This course is a practical introduction to the inner workings of educational institutions. It covers time-table planning and staff meetings as well as infrastructure use, student discipline. MES44 helps us view the institution as a complex system in which all elements must be geared towards learning.</p></div></div>
                <div class="item"><div class="q"><h4>MESP 49: Project Work</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>PGDEMA also includes a component of a project. MESP 49 consists of a practical project in which we apply the theories and tools that we have learned from previous courses to an actual institutional context. It may involve analysing a school’s management system, creating an improvement plan or analysing the leadership practices. This segment is usually the most memorable because it's "our work in our field."</p></div></div>
                <div class="item"><div class="q"><h4>Optional Courses (Choose Any One)</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a"><p>MES 45 – School Education<br>MES 46 – Higher education<br>MES 47 – Open and Distance Education<br>MES 48 – Alternative Education</p></div></div>
            </div>
        </section>

        <section id="syllabus" class="section">
            <h2>Post Graduate Diploma in Educational Management and Administration Curriculum & Syllabus Overview</h2>
            <div class="card">
                <div class="table-wrap">
                    <table>
                        <tr><th>Course Code</th><th>Title of the Course</th><th>Credits</th></tr>
                        <tr><td>MES 41</td><td>Growth and Development of Educational Management</td><td>6</td></tr>
                        <tr><td>MES 42</td><td>Dimensions of Educational Management</td><td>6</td></tr>
                        <tr><td>MES 43</td><td>Organisational Behaviour</td><td>6</td></tr>
                        <tr><td>MES 44</td><td>Institutional Management</td><td>6</td></tr>
                        <tr><td>MESP 49</td><td>Project Work</td><td>6</td></tr>
                        <tr><td colspan="3"><strong>Optional Courses (Choose Any One)</strong></td></tr>
                        <tr><td>MES 45</td><td>School Education</td><td>4</td></tr>
                        <tr><td>MES 46</td><td>Higher Education</td><td>4</td></tr>
                        <tr><td>MES 47</td><td>Open and Distance Education</td><td>4</td></tr>
                        <tr><td>MES 48</td><td>Alternative Education</td><td>4</td></tr>
                        <tr><td colspan="2"><strong>Total Credits</strong></td><td><strong>34</strong></td></tr>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- ==================== CAREER & ELIGIBILITY ==================== -->
    <div class="tab-panel" data-tab="careers">
        <section id="eligibility" class="section">
            <h2>Post Graduate Diploma in Educational Management and Administration Admission Eligibility</h2>
            <p>The eligibility for the IGNOU PGDEMA program is inclusive and simple:</p>
            <ul class="list-check">
                <li>Minimum Qualifications: Graduation in any discipline from a recognized university.</li>
                <li>Professional Background: All members must have at least a bachelor's degree. This includes teachers, administrators and education officers.</li>
                <li>No upper age limit. This is great for professionals mid-career looking to formalize their upgrade of qualifications.</li>
            </ul>
            <p>We find that the learners are a mixture of young graduates, experienced teachers, coordinators of NGO, and retired professionals.</p>
        </section>

        <section id="objectives" class="section">
            <h2>Post Graduate Diploma in Educational Management and Administration Objectives</h2>
            <p>PGDEMA’s objectives are a reflection of what leaders in educational institutions require today. The program aims to achieve:</p>
            <ul class="list-check">
                <li>Improve your performance as a leader and manager in education.</li>
                <li>Enhance effectiveness and efficiency in educational organisations.</li>
                <li>Enhance your knowledge in important areas, such as leadership, interpersonal relationships and team building.</li>
                <li>Learn how to apply basic management concepts in educational environments such as schools, colleges and universities.</li>
            </ul>
            <p>This course will not turn you into a "bureaucratic administrator," but instead into a thoughtful leader who can manage processes and policies with empathy and clarity.</p>
        </section>

        <section id="outcomes" class="section">
            <h2>IGNOU PGDEMA - Learning Outcomes: What do we Gain?</h2>
            <p>The programme will provide us with several tangible results.</p>
            <ol style="margin:16px 0;padding-left:20px">
                <li><strong>Stronger Conceptual Foundation</strong><br>We have a good grasp of the terminology used in educational management.</li>
                <li><strong>Improved People Manager Skills</strong><br>With the knowledge we gain from topics such as organisational behavior and leadership, we can better motivate teams, set expectations, and build trust among institutions.</li>
                <li><strong>Better Decision-Making Ability</strong><br>Education managers frequently make decisions regarding resource allocation, staffing and discipline. The programme encourages us to use data analysis, feedback and feedback instead of intuition.</li>
                <li><strong>Confidence in handling institutional responsibility</strong><br>We are more confident to take the lead, whether we're planning a development plan for the school, leading an academic committee, or coordinating activities with parents and the local community.</li>
                <li><strong>Preparedness to move up the ranks</strong><br>A formal post-graduate diploma in Educational Management and Administration will allow you to better apply for positions such as Vice Principal, Academic Coordinator, Institution Head, Project Manager in Education, or Programme Officer in NGOs.</li>
            </ol>
            <p>These results are not only for our CV, but they also shape the way we view ourselves in education - not just as employees, but as leaders.</p>
        </section>

        <section id="careers" class="section">
            <h2>Career Opportunities After PGDEMA</h2>
            <p>The IGNOU PGDEMA is a gateway to many educational and related fields. Some possible directions include:</p>
            <div class="grid">
                <div class="card"><strong>1. Leaders in the School and College</strong><br>Many PGDEMA learners are teachers who later move into roles such as vice-principal, headmistress/headmaster, academic coordinator, or senior administrator.</div>
                <div class="card"><strong>2. Education Administration in Private and Public Institutions</strong><br>Both academics and managers are needed in institutions. Administrative officer, registrar’s assistant, program manager, and operations coordinator are all possible roles.</div>
                <div class="card"><strong>3. Education: NGOs, Foundations and NGOs</strong><br>Organisations that work on literacy, school improvements, teacher education, or community educational programmes look for professionals with the ability to plan, monitor, manage, and implement programmes effectively.</div>
                <div class="card"><strong>4. Training and HR in Educational Settings</strong><br>PGDEMA allows some learners to move into the training side, such as planning workshops for capacity-building, in-service teacher education, or professional modules.</div>
                <div class="card"><strong>5. EdTech and Education Startups</strong><br>The new education industry needs people with a good understanding of both management and learning. PGDEMA graduates are able to contribute in roles such as academic operations, institutional partnerships or programme design.</div>
                <div class="card"><strong>6. More Study and Research</strong><br>PGDEMA may also be a stepping-stone to higher education, such as master's degrees in educational leadership, management or education, and even M.Ed. These can lead further into research careers and academic careers.</div>
            </div>
            <p>The path we choose depends on what we want to achieve, but this qualification enhances our credibility as professionals in the field of educational management.</p>
        </section>

        <section id="whyunnati" class="section">
            <h2>Unnati Education is Important for PGDEMA Learners</h2>
            <p>Unnati Education supports distance learners who have to juggle many responsibilities - work, home and study. The content of programmes such as PGDEMA is rich, but there is a limited amount of time. This is where we can help.</p>
            <p>We can help you:</p>
            <div class="grid">
                <div class="card"><strong>Understanding the course structure</strong><br>in plain language.</div>
                <div class="card"><strong>Plan your studies</strong><br>around your personal and work life.</div>
                <div class="card"><strong>Clear communication</strong><br>is essential when it comes to completing assignments and working on projects.</div>
                <div class="card"><strong>Keep updated</strong><br>with the latest academic dates and notifications.</div>
            </div>
            <p>You are not just another student to us. We will be with you from the beginning of your academic journey until you have completed your project. We will guide you through every step of the process from 0 to 100%, so that you never feel lost.</p>
        </section>

        <section id="addon" class="section">
            <h2>Add-On courses to complement IGNOU PGDEMA</h2>
            <p>If you're serious about a career that lasts, you may want to combine PGDEMA and other qualifications or short courses like:</p>
            <ul class="list-check">
                <li>A Bachelor of Education degree (B.Ed. ), or a professional teaching qualification equivalent.</li>
                <li>You can earn a Master's in Education, Educational Management or Educational Leadership.</li>
                <li>Short courses are available in communication, conflict resolution or human resource management.</li>
                <li>Training in digital platforms for learning, school ERP software, or educational data analytics.</li>
            </ul>
            <p>You will stand out from the crowd in interviews with these combinations. They also help prepare you for more complicated responsibilities.</p>
        </section>

        <section id="benefits" class="section">
            <h2>Benefits Summary</h2>
            <p>What the IGNOU PGDEMA provides us as learners is summarized below:</p>
            <ul class="list-check">
                <li>Specialised Focus: This course is designed specifically for education management and administration.</li>
                <li>Flexible Learning: The ODL (Online Distance Learning) mode allows students to continue their studies while also juggling work and personal obligations.</li>
                <li>Short Duration: An intensive one-year programme that has a deep impact on roles in the workplace.</li>
                <li>Real-World Relevance: This book addresses real challenges that schools, colleges, or education systems face.</li>
                <li>Skill Upgrade: Improves leadership, communication and planning skills.</li>
                <li>Growth Potential: Encourages advancement to leadership positions and higher education options.</li>
            </ul>
            <p>Many educators will find that this programme changes the way they view their work and the future of the education system.</p>
        </section>

        <section id="faq" class="section">
            <h2>FAQs - IGNOU PGDEMA2025</h2>
            <div class="accordion">
                <div class="item"><div class="q"><h4>Q1. What is the core focus of the IGNOU Post Graduate Diploma in Educational Management?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">The course is a study of educational administration and management. It helps learners to understand how educational institutions are planned and organised.</div></div>
                <div class="item"><div class="q"><h4>Q2. Who should consider joining this programme?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Teachers, coordinators or principals. NGO workers. Fresh graduates. And anyone else interested in taking leadership positions in schools, colleges and universities.</div></div>
                <div class="item"><div class="q"><h4>Q3. Is PGDEMA only theoretical?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Yes, the course includes both theory and a practical project component (MESP49), which must be applied in an actual institutional setting.</div></div>
                <div class="item"><div class="q"><h4>Q4. What is required as a minimum qualification?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Graduate degree in any subject from an internationally recognized university.</div></div>
                <div class="item"><div class="q"><h4>Q5. Can working professionals handle this course?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Yes. Working professionals can manage their time well by studying at their own pace.</div></div>
                <div class="item"><div class="q"><h4>Q6. Can PGDEMA lead to career advancement?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">The experience can enhance our ability to perform in roles of educational leadership and management, leading to new responsibilities or promotions.</div></div>
                <div class="item"><div class="q"><h4>Q7. What is the age limit?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">The age of the participants is not restricted. This includes professionals who are in mid-career or at the end of their careers.</div></div>
                <div class="item"><div class="q"><h4>Q8. How important is PGDEMA's project work?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Very important. It is very important.</div></div>
            </div>
        </section>

        <section id="conclusion" class="section">
            <h2>Conclusion</h2>
            <p>The IGNOU Post Graduate Diploma in Educational Management and Administration offers a focused path for those of us who want to go from "doing our jobs" to actually shaping the way educational organizations function. It helps us understand systems, people and processes within education while also respecting our flexibility as adults.</p>
            <p>Unnati Education views this programme as the perfect stepping-stone for teachers, coordinators, or education workers ready to move into leadership. This journey of one year can change your role as an educator. With the right guidance, steady effort and a clear purpose, we will walk you from zero to 100.</p>
        </section>
    </div>

    <!-- ==================== CONTACT ==================== -->
    <div class="tab-panel" data-tab="contact">
        <section id="contact" class="section">
            <h2>Get Started – Contact Unnati Education</h2>
            <div class="card">
                <p>We handle admission, assignments, project guidance, study planning – everything from 0 to 100.</p>
                <div class="actions">
                    <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call Now</a>
                </div>
                <p style="margin-top:12px"><strong>Call / WhatsApp: 9355198199</strong></p>
            </div>
        </section>
    </div>
</main>

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
        <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Career</span></button>
        <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
    </div>
</div>

<div class="toast" id="toast"><i class="fa-solid fa-circle-check"></i> Copied!</div>

<script>
    gsap.registerPlugin(ScrollTrigger,ScrollToPlugin);
    function setDockHeightVar(){const dock=document.querySelector('.dock');const h=dock?(dock.getBoundingClientRect().height+10):84;document.documentElement.style.setProperty('--dock-h',h+'px')}
    window.addEventListener('load',setDockHeightVar);window.addEventListener('resize',setDockHeightVar);
    function wrapTables(){document.querySelectorAll('table').forEach(t=>{if(!t.parentElement.classList.contains('table-wrap')){const w=document.createElement('div');w.className='table-wrap';t.parentNode.insertBefore(w,t);w.appendChild(t)}})}
    wrapTables();
    const prog=document.querySelector('.progress');
    ScrollTrigger.create({start:0,end:document.body.scrollHeight-innerHeight,onUpdate:(self)=>prog.style.transform=`scaleX(${self.progress})`});
    let isDesktop=window.matchMedia('(min-width:1025px)').matches;
    function handleNavClick(target){
        $('#dock button, #tabNav button').removeClass('active');
        $(`#dock button[data-target="${target}"], #tabNav button[data-target="${target}"]`).addClass('active');
        updateNavIcons();
        if(isDesktop){
            $('.tab-panel').removeClass('active').hide();
            $(`.tab-panel[data-tab="${target.replace('#','')}"]`).addClass('active').show();
            gsap.to(window,{duration:.3,scrollTo:{y:'.tab-nav',offsetY:10},ease:'power2.inOut'});
        }else{
            gsap.to(window,{duration:.8,scrollTo:{y:target,offsetY:10},ease:'power2.inOut'});
        }
    }
    $('#dock button, #tabNav button').on('click',function(){handleNavClick($(this).data('target'))});
    function setActive(){if(isDesktop)return;const y=$(window).scrollTop()+120;
        const sections=['#home','#why','#highlights','#program','#courses','#syllabus','#eligibility','#objectives','#outcomes','#careers','#whyunnati','#addon','#benefits','#faq','#conclusion','#contact'];
        let current='#home';sections.forEach(s=>{const el=$(s);if(el.length&&y>=el.offset().top-100)current=s});
        const map={'#why':'#home','#program':'#syllabus','#courses':'#syllabus','#eligibility':'#careers','#objectives':'#careers','#outcomes':'#careers','#whyunnati':'#careers','#addon':'#careers','#benefits':'#careers','#faq':'#careers','#conclusion':'#careers'};
        const target=map[current]||current;
        $('#dock button').removeClass('active');$(`#dock button[data-target="${target}"]`).addClass('active');updateNavIcons()}
    $(window).on('scroll',setActive);
    $(window).on('resize',()=>{const newDesktop=window.matchMedia('(min-width:1025px)').matches;
        if(newDesktop!==isDesktop){isDesktop=newDesktop;handleNavClick($('#dock button.active, #tabNav button.active').first().data('target')||'#home')}setDockHeightVar()});
    setActive();
    function updateNavIcons(){
        $('#dock button .ico i, #tabNav button .ico i').each(function(){
            const $btn=$(this).closest('button');const isActive=$btn.hasClass('active');const $i=$(this);
            const reg=($i.data('regular')||'').split(' ');const sol=($i.data('solid')||'').split(' ');
            if(reg.length||sol.length){$i.removeClass(reg.concat(sol).join(' '));$i.addClass((isActive?sol:reg).join(' '))}});
    }
    gsap.utils.toArray('.hero,.section,.card').forEach(el=>{gsap.from(el,{y:16,opacity:0,duration:.55,ease:'power2.out',
        scrollTrigger:{trigger:el,start:'top 85%'}})});
    ScrollTrigger.create({start:400,onEnter:()=>$('.fab.top').fadeIn(150),onLeaveBack:()=>$('.fab.top').fadeOut(150)});
    $('#toTop').on('click',()=>gsap.to(window,{duration:.8,scrollTo:0,ease:'power2.inOut'}));
    $(document).on('click','.accordion .q',function(){
        const $item=$(this).closest('.item');const $a=$item.find('.a');const willOpen=$a.is(':hidden');
        $('.accordion .a').slideUp(140);$('.accordion .q i').removeClass('fa-minus').addClass('fa-plus');
        $('.accordion .item').removeClass('open');
        if(willOpen){$a.slideDown(160);$(this).find('i').removeClass('fa-plus').addClass('fa-minus');$item.addClass('open')}
        setTimeout(setDockHeightVar,220);
    });
    (function(){
        const clamp=(n,min,max)=>Math.max(min,Math.min(n,max));
        function bindTilt(el,opts){const strength=opts?.strength??12;const damp=opts?.damp??8;let raf=null,rx=0,ry=0;
            function onMove(e){const rect=el.getBoundingClientRect();const cx=(e.clientX-rect.left)/rect.width;
                const cy=(e.clientY-rect.top)/rect.height;const tRY=(cx-0.5)*strength*2;const tRX=(0.5-cy)*strength*2;
                function step(){rx+=(tRX-rx)/(opts?.damp??damp);ry+=(tRY-ry)/(opts?.damp??damp);
                    el.style.setProperty('--rx',rx.toFixed(2)+'deg');el.style.setProperty('--ry',ry.toFixed(2)+'deg');
                    el.style.setProperty('--mx',clamp(cx*100,0,100)+'%');el.style.setProperty('--my',clamp(cy*100,0,100)+'%');
                    if(Math.abs(tRX-rx)>0.1||Math.abs(tRY-ry)>0.1)raf=requestAnimationFrame(step);
                    else{cancelAnimationFrame(raf);raf=null}}
                if(!raf)raf=requestAnimationFrame(step)}
            function onLeave(){el.style.setProperty('--rx','0deg');el.style.setProperty('--ry','0deg');
                el.style.removeProperty('--mx');el.style.removeProperty('--my')}
            el.addEventListener('mousemove',onMove,{passive:true});el.addEventListener('mouseleave',onLeave);
            el.addEventListener('touchstart',e=>{if(e.touches[0])onMove({clientX:e.touches[0].clientX,clientY:e.touches[0].clientY})},{passive:true});
            el.addEventListener('touchend',onLeave,{passive:true})}
        document.querySelectorAll('.section .card, .table-wrap').forEach(el=>bindTilt(el,{strength:10,damp:10}));
    })();
</script>
@endsection