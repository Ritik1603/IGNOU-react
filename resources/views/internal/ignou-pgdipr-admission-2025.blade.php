@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Intellectual Property Rights Admission (PGDIPR)</span>')
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
                    <h1><span class="u-imp">IGNOU Post Graduate Diploma in Intellectual Property Rights Admission (PGDIPR)</span></h1>
                    <p class="lead">IGNOU Post Graduate Diploma on Intellectual Property Rights Admission offers a unique opportunity for students to learn how today's digital and industrial world protects ideas, creativity, innovation, and other intellectual property rights. In a world where more and more industries are dependent on brand identity and innovations, the demand for professionals who know about patents and trademarks as well as copyrights and other IPR issues is growing rapidly.</p>
                    <p class="lead">Here, our goal is to help you better understand what the diploma can offer, who will benefit from it, and how this diploma can be used to shape a professional career. We make sure that everything is simple to read, practical, and aligned with the needs of students, such as clarity, future potential, and support.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year (32 Credits)</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDIPR" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section class="section">
                <h2>Why Choose This Program?</h2>
                <p>A program such as this is more than a decision about a future career -- it's also a chance to better understand how intellectual properties shape industries, protect creators, or influence global trade.</p>
                <div class="grid">
                    <div class="card"><strong>1. IPR Knowledge in High Demand</strong><br>Today, intellectual property is an issue in almost every industry. IPR experts play a key role in legal compliance and protection of creativity.</div>
                    <div class="card"><strong>2. All Academic Backgrounds Welcome</strong><br>Open to graduates from science, commerce, law, media, humanities — no prior legal background needed.</div>
                    <div class="card"><strong>3. Strong Academic Structure</strong><br>Covers patents, trademarks, copyrights, GI, plant varieties, traditional knowledge, industrial design.</div>
                    <div class="card"><strong>4. Multiple Industries Offer Opportunities</strong><br>Research, compliance, branding, publishing, digital content, R&D, corporate legal teams.</div>
                    <div class="card"><strong>5. Self-paced & Flexible</strong><br>Perfect for working professionals and fresh graduates.</div>
                    <div class="card"><strong>6. Full Support from Unnati</strong><br>We guide you from admission to final submission — 0 to 100.</div>
                </div>
            </section>
        </div>

        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>Program Highlights – PGDIPR</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Feature</th><th>Details</th></tr>
                            <tr><td>Programme</td><td>Post Graduate Diploma in Intellectual Property Rights (PGDIPR)</td></tr>
                            <tr><td>School</td><td>School of Law, IGNOU</td></tr>
                            <tr><td>Mode</td><td>Open Distance Learning (ODL)</td></tr>
                            <tr><td>Duration</td><td>1 Year (Flexible)</td></tr>
                            <tr><td>Medium</td><td>English</td></tr>
                            <tr><td>Total Credits</td><td>32 Credits</td></tr>
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
                            <tr><th>Course Code</th><th>Title of the Course</th><th>Credits</th></tr>
                            <tr><td>MIP 101</td><td>General Introduction to IP Rights</td><td>4</td></tr>
                            <tr><td>MIP 102</td><td>Patents</td><td>4</td></tr>
                            <tr><td>MIP 103</td><td>Industrial Design and Layout Designs of Integrated Circuits and Utility Models</td><td>4</td></tr>
                            <tr><td>MIP 104</td><td>Trademarks, Domain Names, Geographical Indications</td><td>4</td></tr>
                            <tr><td>MIP 105</td><td>Copyright and Related Rights</td><td>4</td></tr>
                            <tr><td>MIP 106</td><td>Plant Varieties Protection, Biotechnology and Traditional Knowledge</td><td>4</td></tr>
                            <tr><td>MIP 107</td><td>Trade Secrets, Competition Law and Protection of TCE</td><td>4</td></tr>
                            <tr><td>MIP 108</td><td>Management of IPRs</td><td>4</td></tr>
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
                    <li>Graduation in any discipline from a recognized university</li>
                    <li>No upper age limit</li>
                    <li>Medium: English</li>
                </ul>
            </section>

            <section class="section">
                <h2>Learning Outcomes</h2>
                <ul class="list-check">
                    <li>Understand all branches of IPR (Patents, Trademarks, Copyright, GI, etc.)</li>
                    <li>Identify infringement and misuse of intellectual property</li>
                    <li>Apply IPR in product development, branding, and digital content</li>
                    <li>Explain legal processes clearly</li>
                    <li>Prepare for roles in compliance, research, and innovation management</li>
                </ul>
            </section>

            <section class="section">
                <h2>Career Opportunities After PGDIPR</h2>
                <div class="grid">
                    <div class="card"><strong>IPR Assistant / Research Associate</strong></div>
                    <div class="card"><strong>Patent Analyst</strong></div>
                    <div class="card"><strong>Trademark Executive</strong></div>
                    <div class="card"><strong>Copyright Management</strong></div>
                    <div class="card"><strong>IP Consultant</strong></div>
                    <div class="card"><strong>Compliance Officer</strong></div>
                    <div class="card"><strong>Media & Publishing Rights</strong></div>
                    <div class="card"><strong>Technology Transfer Executive</strong></div>
                </div>
            </section>

            <section class="section">
                <h2>Unnati Education Support</h2>
                <p>We guide you completely — admission, subject selection, assignments, exams, updates — from 0 to 100.</p>
            </section>

            <section class="section">
                <h2>FAQs - IGNOU PGDIPR</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q"><h4>1. How long will the program last?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">The maximum duration of the course is one year.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>2. Can students with non-law backgrounds apply to the program?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">You can apply if you are a graduate of any academic discipline.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>3. What skills can I expect to gain by completing the diploma?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">You will gain a thorough understanding of patents, trademarks, copyrights, GI, trade secrets, and more.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>4. Are you a working professional?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Many working people choose this program due to its distance learning format.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>5. What career paths are available?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">IPR assistant jobs, legal research assistance, compliance positions, trademark assistance and positions in publishing or media.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>6. Can this diploma be used to further your studies?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes, this program supports students who want to pursue a law degree, LLM, certification in patent drafting, or research.</div>
                    </div>
                    <div class="item">
                        <div class="q"><h4>7. Will Unnati Education assist throughout the program?</h4><i class="fa-solid fa-plus"></i></div>
                        <div class="a">Yes, we assist students in their academic pursuits from the beginning to the end.</div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conclusion</h2>
                <p>The IGNOU Post Graduate Diploma on Intellectual Property Rights provides learners with a strong foundation to understand laws and systems protecting innovation, creativity and knowledge. IPR knowledge is becoming increasingly valuable as industries grow and digital creation is on the rise.</p>
                <p>This program encourages students to develop analytical skills, clarity and responsibility towards intellectual property. You will be guided from 0 - 100 to ensure you fully understand every step.</p>
            </section>
        </div>

        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, and interest in PGDIPR. We handle everything from admission to completion.</p>
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