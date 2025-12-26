@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Tribal Studies Admission (PGDTRBS)</span>')
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
                    <h1><span class="u-imp">IGNOU Post Graduate Diploma in Tribal Studies Admission (PGDTRBS)</span></h1>
                    <p class="lead">The IGNOU Post Graduate Diploma in Tribal Studies is a one-year postgraduate degree that focuses primarily on the lives and histories of Indian tribal communities. The School of Extension and Development Studies, or SOEDS, offers this program through open and online learning. This makes it accessible to new graduates and professionals.</p>
                    <p class="lead">Unnati Education often encounters learners who have a keen interest in tribal knowledge, development, and welfare. Many students are interested in understanding why tribal societies, which once had a close connection to land and nature, are now facing economic and social challenges. This programme allows us the opportunity to explore these questions in a structured and academic manner.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year (40 Credits)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDTRBS" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section class="section">
                <h2>Why this IGNOU Post Graduate Diploma in Tribal Studies Program?</h2>
                <p>It isn't just about adding a new line to your resume when you choose the IGNOU Post Graduate Diploma in Tribal Studies. It's a conscious choice to learn about communities that are often discussed but rarely understood.</p>
                <div class="grid">
                    <div class="card"><strong>Focused & In-Depth</strong><br>Tribal society, culture, economy, governance — no generic sociology</div>
                    <div class="card"><strong>Beyond Stereotypes</strong><br>Learn with empathy, respect and evidence</div>
                    <div class="card"><strong>Policy & Development Ready</strong><br>Understand displacement, land rights, welfare schemes</div>
                    <div class="card"><strong>Flexible ODL Mode</strong><br>Perfect for working professionals & fresh graduates</div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>IGNOU Post Graduate Diploma in Tribal Studies Highlights</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Feature</th><th>Details</th></tr>
                            <tr><td>Programme</td><td>Post Graduate Diploma in Tribal Studies (PGDTRBS)</td></tr>
                            <tr><td>School</td><td>School of Extension and Development Studies (SOEDS)</td></tr>
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
                            <tr><td>MEDS-021</td><td>Introduction to Tribal Studies and Tribes</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-022</td><td>Tribal Society, Culture and Traditional Knowledge System</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MEDS-023</td><td>Tribal Economy, Polity and Governance</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MANE-007</td><td>Tribes in India</td><td>Theory</td><td>8</td></tr>
                            <tr><td>MANI-001</td><td>Anthropology and Methods of Research</td><td>Theory</td><td>8</td></tr>
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
                <h2>Career Opportunities</h2>
                <div class="grid">
                    <div class="card"><strong>Tribal Welfare Departments</strong></div>
                    <div class="card"><strong>NGOs & Development Projects</strong></div>
                    <div class="card"><strong>Research & Documentation</strong></div>
                    <div class="card"><strong>CSR Initiatives</strong></div>
                    <div class="card"><strong>Education & Training</strong></div>
                    <div class="card"><strong>Higher Studies (MA/PhD)</strong></div>
                </div>
            </section>

            <section class="section">
                <h2>Unnati Education Support</h2>
                <p>We guide you from day 1 to final submission — full 0 to 100 support with study planning, doubt clearing, and motivation.</p>
            </section>

            <section class="section">
                <h2>FAQs – Post Graduate Diploma of Tribal Studies</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q"><h4>Q1. What is PGDTRBS' core focus?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The programme is a multidisciplinary program that focuses on the tribal society, culture and economy as well as governance and research methods. It pays special attention to issues such as displacement, poverty and inequality.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q2. Does the program only accept social science graduates as applicants?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">No. You can be a graduate of any discipline. It is particularly suitable for students of sociology and history.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q3. Can working professionals attend this course?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes. This programme is offered in distance-learning mode and therefore suitable for those in the field of tribal welfare, CSR, NGOs or government departments.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q4. How long will it take for me to complete PGDTRBS?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The course is designed to last one year and includes five theory courses worth 40 credits. Students must complete all readings and assignments as well as exams during the academic year.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q5. What jobs can I get after this diploma?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">You can explore roles within tribal welfare departments, NGO's, research projects and CSR initiatives, work in documentation or tribal regions, as well as further study in tribal studies-related fields.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q6. Is there a strong research component in this course?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes. The course in anthropology and methods of research teaches learners how to conduct social and field research within tribal contexts.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q7. How does Unnati Education help students of this programme?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">We can help you with understanding course structure, managing time for study, dealing with difficult topics, and staying focused so that you can complete your programme with confidence.</div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conclusion</h2>
                <p>The IGNOU Post Graduate Diploma in Tribal Studies Admission is a rare opportunity to study tribal culture in India in a serious and respectful manner. It takes us past the superficial narratives and allows us to see history, culture, economics, and governance through the eyes of those who lived through generations of change.</p>
                <p>This diploma can be an important step for students who want to see their education have a real impact on the ground in villages, forests or policy offices. Unnati Education can help you on your journey. From your first doubt until your final exam, we are there with you to help you convert your interest in tribes into knowledge, skill and purpose. We will guide you on your journey from 0 to 100.</p>
            </section>
        </div>

        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, and interest in PGDTRBS. We handle everything from admission to completion.</p>
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