@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Library Automation and Networking Admission (PGDLAN)</span>')
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
                    <h1><span class="u-imp">IGNOU Post Graduate Diploma in Library Automation and Networking Admission (PGDLAN)</span></h1>
                    <p class="lead">IGNOU Post Graduate Diploma in Library Automation and Networking is a great choice for library science graduates looking to get into the digital side. This programme, which lasts one year, helps both working professionals and new graduates to develop the skills necessary to run modern libraries.</p>
                    <p class="lead">We often see students who are very good at library work, but are unsure about automation, databases or networking. This programme was designed specifically to address that gap. It combines computer basics, library automation, networking concepts and internet resources with content development, programming, and real library settings.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year (32 Credits)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDLAN" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section class="section">
                <h2>Why Choose a Post Graduate Diploma in Library Automation and Networking?</h2>
                <p>If you want to be relevant in an ever-changing world of libraries, this program is the best choice. Libraries are becoming more information hubs and less book rooms.</p>
                <div class="grid">
                    <div class="card"><strong>Directly Focused on Library Tech</strong><br>Automation, networking, digital content — not generic IT</div>
                    <div class="card"><strong>Perfect for BLISc Graduates</strong><br>Builds exactly on your library science foundation</div>
                    <div class="card"><strong>Flexible ODL Mode</strong><br>Study while working — no need to quit your job</div>
                    <div class="card"><strong>Heavy on Practical Skills</strong><br>Lab work, project, programming basics</div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>Highlights of the PGDLAN Program</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Feature</th><th>Details</th></tr>
                            <tr><td>Programme</td><td>Post Graduate Diploma in Library Automation & Networking (PGDLAN)</td></tr>
                            <tr><td>School</td><td>School of Social Sciences, IGNOU</td></tr>
                            <tr><td>Mode</td><td>Open Distance Learning</td></tr>
                            <tr><td>Duration</td><td>1 Year (Flexible)</td></tr>
                            <tr><td>Medium</td><td>English</td></tr>
                            <tr><td>Total Credits</td><td>32 Credits</td></tr>
                            <tr><td>Eligibility</td><td>BLISc / B.L.I.Sc from recognized university</td></tr>
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
                            <tr><th>Course Code</th><th>Title of the Course</th><th>Credits</th></tr>
                            <tr><td>MLI 1</td><td>Introduction to Computers</td><td>4</td></tr>
                            <tr><td>MLIL 1</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 2</td><td>Library Automation</td><td>4</td></tr>
                            <tr><td>MLIL 2</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 3</td><td>Information Systems</td><td>4</td></tr>
                            <tr><td>MLIL 3</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 4</td><td>Networking and Internet Technology</td><td>4</td></tr>
                            <tr><td>MLIL 4</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 5</td><td>Internet Resources</td><td>4</td></tr>
                            <tr><td>MLIL 5</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 6</td><td>Content Development</td><td>4</td></tr>
                            <tr><td>MLIL 6</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLI 7</td><td>Programming</td><td>4</td></tr>
                            <tr><td>MLIL 7</td><td>Practical</td><td>—</td></tr>
                            <tr><td>MLIP 8</td><td>Project</td><td>4</td></tr>
                            <tr><td colspan="2"><strong>Total Credits</strong></td><td><strong>32</strong></td></tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="careers">
            <section class="section">
                <h2>Eligibility</h2>
                <ul class="list-check">
                    <li>Bachelor’s Degree in Library and Information Science (BLISc / B.L.I.Sc)</li>
                    <li>Comfortable with English (medium of instruction)</li>
                    <li>No upper age limit</li>
                </ul>
            </section>

            <section class="section">
                <h2>Career Opportunities After PGDLAN</h2>
                <div class="grid">
                    <div class="card"><strong>Library Automation Specialist</strong></div>
                    <div class="card"><strong>Systems Librarian</strong></div>
                    <div class="card"><strong>Digital Library Professional</strong></div>
                    <div class="card"><strong>E-Resources Manager</strong></div>
                    <div class="card"><strong>Networked Library Coordinator</strong></div>
                    <div class="card"><strong>Web Content Designer for Libraries</strong></div>
                </div>
            </section>

            <section class="section">
                <h2>Unnati Education Support</h2>
                <p>We guide you step-by-step — study planning, practicals, project, assignments — full 0 to 100 support.</p>
            </section>

            <section class="section">
                <h2>FAQs - PGDLAN</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q"><h4>Q1. Who should choose this program?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">This programme is designed for those with a Post Graduate Diploma in Library Automation and Networking who want to develop skills in automation and networking as well as digital library services.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q2. Does programming knowledge need to be acquired before joining the team?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">No, you do not need to be an expert programmer in order to join the course. You will learn some basic concepts of programming during the course.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q3. Is this programme useful for finding jobs in a digital library?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The course is designed to prepare students for work in digital and automated libraries, institutional repositories of information, and other technologically-oriented centers.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q4. How important is this project?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">It is vital that you complete the project. The project allows you to apply everything that you have learned — automation, systems-thinking, networking, content and programming — to a problem or a scenario. It becomes an important part of your portfolio.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q5. Is there a language other than English?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes, English is used as the medium of instruction. Most study materials, assignments and exams are written in English. Basic proficiency is therefore required.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q6. Can working professionals handle their workload?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">PGDLAN is a popular option for working librarians. Although the distance learning format was designed for them, they still need to put in a steady effort every week.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>Q7. What are the practicals included?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">For the majority of theory papers, such as MLI 1, MLI2, MLI 3, MLI4, MLI 5, MLI6, MLI7, there is a corresponding MLIL Practical component. These include using software, handling systems, exploring internet tools and building content.</div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conclusion</h2>
                <p>IGNOU Post Graduate Diploma in Library Automation and Networking Admission is a good option for library science graduates who want to enter the digital, networked, and automated side of librarianship. This program combines computer networks, information systems and web content with programming in a single focused programme.</p>
                <p>The diploma will help you build a career that is future-ready, rooted in the service of readers and researchers, and also future-proof.</p>
            </section>
        </div>

        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, and interest in PGDLAN. We handle everything from admission to project.</p>
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
const sol = ($i. data('solid') || '').split(' ');
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