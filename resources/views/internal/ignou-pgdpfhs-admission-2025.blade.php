@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Population and Family Health Studies Admission (PGDPFHS)</span>')
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
                <span class="ico"><i class="fa-solid fa-house"></i></span>
                <span>Home</span>
            </button>
            <button data-target="#highlights">
                <span class="ico"><i class="fa-regular fa-calendar-check"></i></span>
                <span>Highlights</span>
            </button>
            <button data-target="#syllabus">
                <span class="ico"><i class="fa-solid fa-book-open"></i></span>
                <span>Syllabus</span>
            </button>
            <button data-target="#careers">
                <span class="ico"><i class="fa-solid fa-briefcase"></i></span>
                <span>Careers</span>
            </button>
            <button data-target="#contact">
                <span class="ico"><i class="fa-solid fa-headset"></i></span>
                <span>Contact</span>
            </button>
        </nav>

        <!-- Tab Panels -->
        <div class="tab-panel active" data-tab="home">
            <div class="hero-wrap">
                <section id="home" class="hero">
                    <h1><span class="u-imp">IGNOU Post Graduate Diploma in Population and Family Health Studies Admission (PGDPFHS)</span></h1>
                    <p class="lead">How a country plans for its future is heavily influenced by the population and family health. The numbers are changing, and everything changes with them. Schools, jobs, housing services, health, and even city planning. The IGNOU Post Graduate Diploma in Population and Family Health Studies Admission has been created for those who wish to study these changes in an academic, scientific and practical manner.</p>
                    <p class="lead">Unnati Education is a company that works with many students interested in demography, population studies and health systems. However, they don't know how to get started. This one-year diploma provides a structured way to enter these fields. It combines population dynamics, migration and family health in an easy-to-follow way, but is deep enough to develop expertise.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year (40 Credits)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDPFHS" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section class="section">
                <h2>Why choose IGNOU Post Graduate Diploma in Population and Family Health Studies?</h2>
                <p>Many courses exist in the field of public health and community development. The post-graduate diploma in population and health studies offers a much more focused program. It focuses directly on the link between trends in population and the everyday life of communities and families.</p>
                <div class="grid">
                    <div class="card"><strong>Specialized Focus</strong><br>Fertility, mortality, migration — not generic health</div>
                    <div class="card"><strong>Strong SDG Link</strong><br>Directly connected to poverty, education, gender, health goals</div>
                    <div class="card"><strong>Distance Learning Flexibility</strong><br>Perfect for working professionals & in-service officers</div>
                    <div class="card"><strong>Research-Oriented</strong><br>Full course on research methodology included</div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>PGDPFHS Highlights</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Feature</th><th>Details</th></tr>
                            <tr><td>Programme</td><td>Post Graduate Diploma in Population and Family Health Studies (PGDPFHS)</td></tr>
                            <tr><td>School</td><td>School of Extension and Development Studies</td></tr>
                            <tr><td>Mode</td><td>Open Distance Learning</td></tr>
                            <tr><td>Duration</td><td>1 Year</td></tr>
                            <tr><td>Medium</td><td>English</td></tr>
                            <tr><td>Total Credits</td><td>40 Credits</td></tr>
                            <tr><td>Eligibility</td><td>Graduation in any discipline</td></tr>
                        </table>
                    </div>
                </div>
                <p style="margin-top:10px"><strong>Last Date (Tentative):</strong> <span class="mono u-imp"><mark class="hl-yellow">31 August 2025</mark></span></p>
            </section>
        </div>

        <div class="tab-panel" data-tab="syllabus">
            <section class="section">
                <h2>Curriculum & Syllabus Overview</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Course Code</th><th>Title of the Course</th><th>Type</th><th>Credits</th></tr>
                            <tr><td>MEDS-071</td><td>Introduction to Population Studies</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-072</td><td>Population Theories, Policies and Programmes</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-073</td><td>Social Groups and Family Health</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-074</td><td>Population and Development: Issues and Challenges</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-075</td><td>Research Methodology in Population and Family Health Studies</td><td>Theory</td><td>8</td></tr>
                            <tr><td colspan="3"><strong>Total Credits</strong></td><td><strong>40</strong></td></tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="careers">
            <section class="section">
                <h2>Eligibility</h2>
                <ul class="list-check">
                    <li>Graduation in any discipline from a recognized university</li>
                    <li>No upper age limit</li>
                    <li>Medium: English</li>
                </ul>
            </section>

            <section class="section">
                <h2>Career Opportunities After PGDPFHS</h2>
                <div class="grid">
                    <div class="card"><strong>Demography & Research</strong></div>
                    <div class="card"><strong>Public Health & Family Welfare</strong></div>
                    <div class="card"><strong>Urban & Regional Planning</strong></div>
                    <div class="card"><strong>NGOs & Development Projects</strong></div>
                    <div class="card"><strong>CSR & Social Impact</strong></div>
                    <div class="card"><strong>Policy Analysis</strong></div>
                </div>
            </section>

            <section class="section">
                <h2>Unnati Education Support</h2>
                <p>We guide you completely — study planning, doubt clearing, assignments, exam prep — full 0 to 100 support.</p>
            </section>

            <section class="section">
                <h2>FAQs – Post Graduate Diploma in Population and Family Health Studies</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q"><h4>Q1. What is PGDPFHS's main focus?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The programme is centered on population dynamics, the health of families, and development. It covers fertility, migration, mortality, social groups, research methods, and population and family health concerns.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q2. How long is the program?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The programme has been designed to be a one-year diploma in postgraduate studies offered via open distance education, making it easier for students to balance their work or other obligations.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q3. Do I have to have a certain academic background in order to join?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">No. You can enroll as a graduate of any recognized university, in any field. If you are interested in population studies, development, or health, this will make it easier for you to understand the content.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q4. Does this suit professionals who work in the development or health sectors?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes. The programme is designed for health officers, educators and development professionals. It's also ideal for NGO staff and urban planners.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q5. Can PGDPFHS be used to pursue careers in data-driven research?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Definitely, this diploma is designed to prepare learners for research, monitoring, evaluation, and developmental studies. It includes a complete course in research methodology, with a strong emphasis on demographic concepts.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q6. How does this diploma differ from a public health general course?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">PGDPFHS is a course that focuses specifically on population trends and family health and their links to policy and development.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q7. How does Unnati Education support students?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">We help our students plan their studies, understand complex topics, stay on track, and remain focused throughout the learning journey.</div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conclusion</h2>
                <p>The IGNOU Post Graduate Diploma in Population and Family Health Studies Admission provides learners with a structured approach to understanding one of the most important questions of our times: how family and population health affects development in a real and measurable way. This diploma helps us see population not as a problem, but rather as an opportunity to think critically, analyze data and develop thoughtful responses.</p>
                <p>This program offers a meaningful way for professionals and graduates who want to be able to relate their work to real communities and families. It also helps them connect their work with real policies. Unnati Education is there to help you along the way. We will guide you from 0 to 100 and turn your curiosity and study into competence.</p>
            </section>
        </div>

        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, and interest in PGDPFHS. We handle everything from admission to completion.</p>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> Message</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                    <p style="margin-top:8px"><strong>Call/WhatsApp: 9355198199</strong></p>
                </div>
            </section>
        </div>
    </main>

    <!-- Floating CTAs -->
    <div class="fabs">
        <a class="fab wa" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a class="fab call" href="tel:+919355198199"><i class="fa-solid fa-phone"></i></a>
        <button class="fab top" id="toTop"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <!-- Mobile Dock -->
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

    <!-- All Scripts (100% your original) -->
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
const ids = ['#home', '#highlights', '#syllabus', '#careers', '#contact'];
            let current = '#home';
            ids.forEach(id => {
const $el = $(id);
if (!$el.length) return;
const top = $el.offset().top,
                    h = $el.outerHeight();
if (y >= top && y < top + h) current = id;
            });
const buttonTarget = current;
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
                el.addEventListener('mousemove', onMove, {passive:true});
                el.addEventListener('mouseleave', onLeave);
                el.addEventListener('touchstart', e => { const t = e.touches[0]; if(t) onMove({clientX:t.clientX, clientY:t.clientY}); }, {passive:true});
                el.addEventListener('touchend', onLeave, {passive:true});
            }
            document.querySelectorAll('.section .card').forEach(el => bindTilt(el, {strength:10, damp:10}));
            document.querySelectorAll('.table-wrap').forEach(el => bindTilt(el, {strength:6, damp:10}));
        })();
    </script>
@endsection