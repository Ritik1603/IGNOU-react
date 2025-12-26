@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU MA in Rural Development 2025 – Empowering Change in India’s Heartland</span>')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

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
                    <h1><span class="u-imp">IGNOU MA in Rural Development 2025 – Empowering Change in India’s Heartland</span></h1>
                    <p class="lead">You can achieve your dream of making India's rural villages stronger, more economically vibrant, and self-sufficient by completing the IGNOU MA in Rural Development.<br>This program is designed to train professionals who can tackle real rural problems, from governance to policy to education to livelihood management. It is more than a degree. It is a commitment.<br>Unnati Education believes every learner who wishes to serve rural India should receive the best support, guidance, and clarity. This is why we will guide you throughout the entire process, from enrollment to exam success.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: Minimum 2 Years, Maximum 5 Years</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC-DEB Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20MA%20Rural%20Development%202025" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>
            <!-- WHY -->
            <section id="why" class="section">
                <h2>Why IGNOU MA in Rural Development 2020?</h2>
                <div class="grid">
                    <div class="card"><strong>One Mission-Driven Program</strong><br>IGNOU's Master of Arts in Rural Development program is for those who are interested in improving rural life with research-based, practical strategies. This program combines academic and practical knowledge to enable you to contribute to community empowerment, sustainable growth, and policy planning.<br>The program is designed to give you a solid grounding in rural issues and how to create solutions.</div>
                    <div class="card"><strong>Comprehensive Learning Experience</strong><br>MARD is a unique program that focuses on India’s rural development ecosystem.<br>You'll learn about the rural governance structure, planning, and management of public services, as well as participatory approaches to change.<br>IGNOU's combination of theoretical study and practical applications helps you to develop a 360-degree understanding of rural dynamics.</div>
                    <div class="card"><strong>Flexible working for professionals</strong><br>Open and Distance Learning is the perfect option for students who want to continue their studies while also working and handling other responsibilities. You can study at your own pace. You have access to digital resources wherever you are. And, IGNOU's study centers offer counseling on occasion.<br>This flexibility makes this program ideal for teachers and NGO workers who want to improve their skills, without having them leave their current positions.</div>
                    <div class="card"><strong>The Affordable and Accessible Higher Education</strong><br>IGNOU makes quality education affordable to all. The MA Rural Development programme ensures that students of diverse economic backgrounds have the opportunity to pursue advanced learning without financial obstacles.<br>With the wide network of study centers across India, you are never too far away from academic assistance.</div>
                    <div class="card"><strong>The UGC is a nationally respected degree.</strong><br>The IGNOU MA in Rural Development program is approved by the University Grants Commission and the Distance Education Bureau. The degree is valid in all government jobs and academic pursuits, as well as competitive examinations.<br>Graduates are well-recognized for their academic and practical skills.</div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="highlights">
            <!-- OVERVIEW -->
            <section id="overview" class="section">
                <h2>IGNOU MA Rural Development Overview</h2>
                <p>The MA Rural Development Program (MARD), a postgraduate program of two years, is designed to prepare students for leadership and strategic roles within rural development sectors. It integrates interdisciplinary education with real-world experience to develop socially conscious professionals.<br><br>The program curriculum develops knowledge in five key areas.<br><br>* Rural Governance Policy Formulation<br>* Economic Development and Planning<br>* Social Change Participation<br>* Environmental and Sustainable Development<br>* Project Management Methodologies and Research Methods<br><br>IGNOU’s Open and Distance Learning System includes printed self learning materials, digital content, online lectures, and periodic academic counselling sessions. The course may be completed within two years or extended to five years, depending on the learners' convenience.</p>
            </section>
            <!-- ELIGIBILITY -->
            <section id="eligibility" class="section">
                <h2>IGNOU MA Rural Development - Eligibility 2025</h2>
                <p>To be eligible to apply for the MARD Program, students must possess a bachelor's degree in a recognized discipline.<br>There is no maximum age for the program, which is open both to recent graduates and professionals who have an interest in rural governance, policy, or development.<br>The language of instruction is either English or Hindi.<br><br>Unnati Education will handle your application, selection of subjects, and purchase of study materials seamlessly. You can concentrate on learning, while we manage the paperwork.</p>
            </section>
        </div>
        <div class="tab-panel" data-tab="syllabus">
            <!-- SYLLABUS -->
            <section id="syllabus" class="section">
                <h2>IGNOU MA Rural Development Syllabus - Overview & Structure</h2>
                <p>The IGNOU MARD course is spread over two academic years with a system of credits totaling 66.</p>
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
                                        <td>Rural Development: Indian Context</td>
                                        <td>MRD-101</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Rural Development Programmes</td>
                                        <td>MRD-102</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Rural Development: Planning and Management</td>
                                        <td>MRD-103</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CORE</td>
                                        <td>Project Work</td>
                                        <td>MRDP-001</td>
                                        <td>6</td>
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
                                        <th>SUBJECTS</th>
                                        <th>CODE</th>
                                        <th>CREDITS</th>
                                    </tr>
                                    <tr>
                                        <td>ELECTIVE (Electives – Any 4)</td>
                                        <td>1. Rural Social Development<br>2. Research Methods<br>3. Communication and Extension<br>4. Land Reforms and Rural Development<br>5. Management of Rural Development Projects<br>6. Voluntary Action in Rural Development</td>
                                        <td>1. RDD-6<br>2. RDD-7<br>3. MRDE-101<br>4. MRDE-002<br>5. MRDE-003<br>6. MRDE-004</td>
                                        <td>6 each</td>
                                    </tr>
                                </table>
                            </div>
                            <p>Each course focuses on applied learning via case studies and field research. Students gain a holistic understanding of India's rural ecosystem by the end of the course and acquire skills in policy development, implementation, and impact evaluation.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-panel" data-tab="careers">
            <!-- CAREERS -->
            <section id="careers" class="section">
                <h2>Career Opportunities After IGNOU MA Rural Development</h2>
                <p>IGNOU offers a degree in Rural Development that opens up a wide range of career opportunities in the public as well as private sectors. Graduates will be able to contribute to India’s development goals through designing, executing, monitoring, and evaluating programs that improve rural lifestyles.</p>
                <p><strong>Top Career Roles & Opportunities</strong></p>
                <ul class="list-check">
                    <li>* Rural Development Officer: Responsible for projects in agriculture and infrastructure, as well as social welfare.</li>
                    <li>* NGO Coordinator/Program manager: Manage the non-profit organization, its development projects, and empowerment programs.</li>
                    <li>* Assess and design rural policy that addresses poverty alleviation, resource management, and other issues.</li>
                    <li>* Social researcher: Research rural governance, health and education institutions, and livelihoods.</li>
                    <li>* Corporate CSR executive: Plan and monitor Corporate Social Responsibility initiatives, focusing on rural impact projects.</li>
                    <li>* Development Consultant: Advise international and national organizations on rural policy evaluation and implementation.</li>
                    <li>* Agricultural Extension Officers: They promote modern farming techniques, rural entrepreneurialism, and resource-management initiatives.</li>
                </ul>
                <p><strong>Average Salary range</strong></p>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th align="left">Role</th>
                                <th align="left">Average Annual Salary</th>
                            </tr>
                            <tr>
                                <td>Rural Development Officer</td>
                                <td>Rs3 L. - Rs6 l</td>
                            </tr>
                            <tr>
                                <td>Policy Analyst</td>
                                <td>Rs4 L. - Rs8 l</td>
                            </tr>
                            <tr>
                                <td>NGO Manager</td>
                                <td>Rs3 L. - Rs6 l</td>
                            </tr>
                            <tr>
                                <td>Social Researcher</td>
                                <td>Rs3.5 L – Rs7 L</td>
                            </tr>
                            <tr>
                                <td>CSR Executive</td>
                                <td>Rs4 L. - Rs9 l</td>
                            </tr>
                            <tr>
                                <td>Agricultural Extension Officer</td>
                                <td>Rs3 L. - Rs6 l</td>
                            </tr>
                        </table>
                    </div>
                    <p>Career growth depends on your experience, skills, and organization scale. But many graduates see this as a rewarding and high-impact career.</p>
                </div>
            </section>
            <!-- FUTURE -->
            <section id="future" class="section">
                <h2>Future Academic and Professional Pathways</h2>
                <p>Students who complete the MA in Rural Development can go on to pursue advanced research or specialized programs, such as:<br><br>* PhD in Rural Development or Development Studies<br>* M.Phil. The M.Phil.<br>* MBA in Rural Management, Social Enterprise or Social Enterprise<br><br>These programs provide opportunities for career advancement in academic, research, and policy roles at universities and international organisations.</p>
            </section>
            <!-- MATTERS -->
            <section id="matters" class="section">
                <h2>Why IGNOU MA Rural Development Matters Today</h2>
                <p>India's growth is dependent on inclusive development, which means strengthening India's villages. Rural India is faced with complex challenges ranging from agriculture, education and sustainability. It requires visionary leaders. The IGNOU MARD creates professionals with the ability to analyze, innovate, and implement solutions, which have a direct impact on millions of people.<br><br>The program is useful to:<br><br>* Civil service aspirants seeking a stronger understanding of development administration.<br>* NGO professionals who wish to scale up their impact.<br>* Teachers and social workers are looking to formalize your expertise.<br>* Corporate CSR Teams focus on sustainable rural projects.<br><br>Unnati Education guides you through the entire learning process -- from registration to assignments to exam preparation. This ensures that your learning is well-organized and focused on your goals.</p>
            </section>
            <!-- FAQ -->
            <section id="faq" class="section">
                <h2>FAQs - IGNOU MA Rural Development 2030</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>1. What is IGNOU MA Rural Development?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The two-year Postgraduate Program equips the students with both theoretical and practical knowledge in rural development and management.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>2. Who is eligible to apply?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Anyone who has a bachelor's degree is eligible. No age restriction applies, so both recent graduates and professionals may enroll.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>3. IGNOU MARD is recognized for government positions?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. The degree is approved by UGC and DEB and accepted in all government and private sector jobs as well as for higher education.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>4. Can I continue to work while studying?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes. Open Distance Learning lets you continue to work and study while maintaining your commitments.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>5. What career options do I have after an MA in Rural Development?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Graduates may work as CSR Executives and CSR Managers in India, or they can be employed as Social Researchers, Rural Development Officers, and Policy Analysts.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>6. What is the length and medium of instruction for each course?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">The program is offered for 2 years minimum and 5 years maximum. The course is available both in English and Hindi.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>7. Does Unnati Education help throughout the IGNOU journey?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Absolutely. From 0 to 100, we guide you through every step of the process. This includes registration, material assistance, assignment support, and exam prep.</div>
                    </div>
                </div>
            </section>
            <!-- CONCLUSION -->
            <section id="conclusion" class="section">
                <h2>You can also read our conclusion.</h2>
                <p>IGNOU MA Rural Development is not just an academic qualification. It is a journey to transform your life and connect you with India's grassroots. Combining academic rigor with practical relevance, the MARD will empower you to make a lasting impact in the communities and villages that are the heart of India.<br><br>The program provides you with the tools and knowledge to succeed in any career you choose, be it governance, research, or policy institutions.<br><br>Unnati Education will make your IGNOU experience simple, focused, and successful. We'll guide you through each step, from 0 to 100.</p>
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
            const ids = ['#home', '#why', '#overview', '#eligibility', '#syllabus', '#careers', '#future', '#matters', '#faq', '#conclusion', '#contact'];
            let current = '#home';
            ids.forEach(id => {
                const $el = $(id);
                if (!$el.length) return;
                const top = $el.offset().top,
                    h = $el.outerHeight();
                if (y >= top && y < top + h) current = id;
            });
            const buttonTarget = current === '#why' ? '#home' : (current === '#overview' || current === '#eligibility' ? '#highlights' : (current === '#future' || current === '#matters' || current === '#faq' || current === '#conclusion' ? '#careers' : current));
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