@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU PGDRD 2025 Guide | Rural Development Diploma Details</span>')
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

        <!-- Home Tab -->
        <div class="tab-panel active" data-tab="home">
            <div class="hero-wrap">
                <section id="home" class="hero">
                    <h1><span class="u-imp">IGNOU PGDRD 2025 Guide | Rural Development Diploma Details</span></h1>
                    <p class="lead">Learn all about the IGNOU Post Graduate Diploma in Rural Development (PGDRD) 2025 – eligibility, structure, skills, course codes, and career scope, with full guidance from Unnati Education.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1–2 Years</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDRD" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section id="why" class="section">
                <h2>Why Choose IGNOU PGDRD 2025?</h2>
                <p>Many rural development courses are available, but this course stands out for a few reasons that are very practical:</p>
                <div class="grid">
                    <div class="card"><strong>1) Strong Focus on Rural Realities</strong><br>More than just theory — socio-economic aspects, poverty, livelihoods, and local governance.</div>
                    <div class="card"><strong>2) Designed for Working Learners</strong><br>Open & Distance Learning — perfect for job holders, homemakers, and field workers.</div>
                    <div class="card"><strong>3) Direct Relevance to Development Jobs</strong><br>Teaches planning, formulation, monitoring of rural projects — exactly what NGOs & govt need.</div>
                    <div class="card"><strong>4) Foundation for MARD</strong><br>Credits transferable to Master of Arts Rural Development (except RDD5).</div>
                    <div class="card"><strong>5) Bilingual Flexibility</strong><br>Available in both English and Hindi medium.</div>
                </div>
            </section>
        </div>

        <!-- Highlights Tab -->
        <div class="tab-panel" data-tab="highlights">
            <section id="highlights" class="section">
                <h2>IGNOU PGDRD Admission 2025 — Highlights</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th>Feature</th>
                                <th>Details</th>
                            </tr>
                            <tr>
                                <td>Programme Code</td>
                                <td>PGDRD</td>
                            </tr>
                            <tr>
                                <td>Programme Name</td>
                                <td>Post Graduate Diploma in Rural Development</td>
                            </tr>
                            <tr>
                                <td>School</td>
                                <td>School of Continuing Education (SOCE)</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td><span class="u-imp">Minimum 1 Year</span> — Maximum 3 Years</td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td>English & Hindi</td>
                            </tr>
                            <tr>
                                <td>Eligibility</td>
                                <td><span class="u-imp">Bachelor’s Degree in any discipline</span></td>
                            </tr>
                            <tr>
                                <td>Total Credits</td>
                                <td>30 Credits</td>
                            </tr>
                            <tr>
                                <td>Mode</td>
                                <td>Open Distance Learning (ODL)</td>
                            </tr>
                            <tr>
                                <td>Support Partner</td>
                                <td>Unnati Education — Full Admission to Project Guidance</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p style="margin-top:10px"><strong>Last Date (Tentative):</strong> <span class="mono u-imp"><mark class="hl-yellow">31 August 2025</mark></span>. Apply early!</p>
                <div class="note">
                    <i class="fa-solid fa-circle-info"></i>
                    <strong>Pro tip:</strong> Keep admission receipt & subject selection screenshots safe for smooth re-registration.
                </div>
            </section>
        </div>

        <!-- Syllabus Tab -->
        <div class="tab-panel" data-tab="syllabus">
            <section id="structure" class="section">
                <h2>PGDRD Credit Structure (30 Credits)</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr>
                                <th>Course Code</th>
                                <th>Title</th>
                                <th>Credits</th>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>A) Compulsory Courses</strong></td>
                            </tr>
                            <tr>
                                <td>MRD-201</td>
                                <td>Rural Development: Indian Context</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>MRD-202</td>
                                <td>Rural Development Programmes</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>MRD-203</td>
                                <td>Rural Development Planning and Management</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>B) Elective (Choose any ONE)</strong></td>
                            </tr>
                            <tr>
                                <td>MRDE-201</td>
                                <td>Rural Social Development</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>MRDE-202</td>
                                <td>Rural Health Care</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>MRDE-203</td>
                                <td>Communication and Extension in Rural Development</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>C) Project Work</strong></td>
                            </tr>
                            <tr>
                                <td>MRDP-205</td>
                                <td>Research and Project Work</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Total Credits</strong></td>
                                <td><strong>30</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>

            <section id="syllabus" class="section">
                <h2>Detailed Course Breakdown</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>MRD-201 : Rural Development – Indian Context</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Covers rural society, caste-class-gender dynamics, land & livelihoods, Panchayati Raj, historical evolution of rural India.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>MRD-202 : Rural Development Programmes</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Major government & non-government programmes, employment, poverty alleviation, SHGs, infrastructure, success & failure factors.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>MRD-203 : Rural Development Planning & Management</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Project cycle, logical framework, budgeting, monitoring & evaluation — practical skills for project managers.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Electives (Choose ONE)</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">
                            <ul class="list-check">
                                <li>MRDE-201 : Rural Social Development</li>
                                <li>MRDE-202 : Rural Health Care</li>
                                <li>MRDE-203 : Communication & Extension in Rural Development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>MRDP-205 : Research and Project Work</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Field-based project on any rural issue — research methodology, data collection, report writing. A strong portfolio piece!</div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Careers Tab -->
        <div class="tab-panel" data-tab="careers">
            <section id="eligibility" class="section">
                <h2>Eligibility Criteria</h2>
                <ul class="list-check">
                    <li>Bachelor’s Degree in <strong>any discipline</strong> from a recognized university</li>
                    <li><strong>No upper age limit</strong></li>
                    <li>Medium: English or Hindi</li>
                </ul>
                <p>Perfect for fresh graduates, working professionals, social workers, bankers, CSR executives, and anyone passionate about rural India.</p>
            </section>

            <section id="skills" class="section">
                <h2>Skills You Will Gain</h2>
                <div class="grid">
                    <div class="card"><strong>Conceptual Understanding</strong><br>of rural society, institutions & livelihoods</div>
                    <div class="card"><strong>Planning & Management</strong><br>Project design, budgeting, M&E</div>
                    <div class="card"><strong>Research & Analysis</strong><br>Field surveys, data interpretation, reporting</div>
                    <div class="card"><strong>Communication & Extension</strong><br>Awareness campaigns & behaviour change</div>
                </div>
            </section>

            <section id="careers" class="section">
                <h2>Career Opportunities After PGDRD</h2>
                <div class="grid">
                    <div class="card"><strong>Government & Semi-Govt</strong><br>Rural Dept, Block/District offices, Scheme implementation</div>
                    <div class="card"><strong>NGOs & Development Sector</strong><br>Field Coordinator, Programme Officer, M&E roles</div>
                    <div class="card"><strong>CSR Foundations</strong><br>Rural project planning & execution</div>
                    <div class="card"><strong>Microfinance & Cooperatives</strong><br>SHG promotion, livelihood programs</div>
                    <div class="card"><strong>Consultancy & Research</strong><br>Baseline surveys, impact assessments</div>
                    <div class="card"><strong>Further Studies</strong><br>Credit transfer to MARD (MA Rural Development)</div>
                </div>
            </section>

            <section id="whyunnati" class="section">
                <h2>Why Choose Unnati Education for PGDRD</h2>
                <div class="grid">
                    <div class="card"><strong>Complete Admission Help</strong><br>Form filling to confirmation</div>
                    <div class="card"><strong>Assignment Guidance</strong><br>Latest pattern, plagiarism-free</div>
                    <div class="card"><strong>MRDP-205 Project Support</strong><br>Topic selection to final submission</div>
                    <div class="card"><strong>Exam & Deadline Alerts</strong><br>Never miss a date</div>
                </div>
            </section>

            <section id="faq" class="section">
                <h2>FAQs — IGNOU PGDRD</h2>
                <div class="accordion">
                    <div class="item">
                        <div class="q">
                            <h4>Q1. What is the duration of PGDRD?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Minimum 1 year, maximum 3 years (flexible for working professionals).</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q2. What is the eligibility?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Bachelor’s degree in any discipline. No age bar.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q3. Is project work compulsory?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes — MRDP-205 (6 credits) is mandatory and field-based.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q4. Can I join MARD after PGDRD?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Yes! Almost all credits are transferable except RDD5.</div>
                    </div>
                    <div class="item">
                        <div class="q">
                            <h4>Q5. Can I study while doing job?</h4><i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="a">Absolutely. ODL mode is made for working learners.</div>
                    </div>
                </div>
            </section>

            <section id="conclusion" class="section">
                <h2>Conclusion</h2>
                <p>IGNOU PGDRD is an ideal launchpad for anyone who wants to work with villages, communities, and development projects. In just one year you gain practical knowledge, field-ready skills, and a respected qualification that opens doors in government, NGOs, CSR, and beyond.</p>
                <p>Unnati Education promises to walk with you from Day 0 to 100 — admission, assignments, project, exams — everything handled so you can focus on learning and impact.</p>
            </section>
        </div>

        <!-- Contact Tab -->
        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, and “PGDRD 2025”. We’ll handle everything from admission to project submission.</p>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> Message on WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call Now</a>
                    </div>
                    <p style="margin-top:8px"><strong>Call/WhatsApp: 9355198199</strong></p>
                </div>
            </section>
        </div>
    </main>

    <!-- Floating Buttons -->
    <div class="fabs">
        <a class="fab wa" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a class="fab call" href="tel:+919355198199"><i class="fa-solid fa-phone"></i></a>
        <button class="fab top" id="toTop"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <!-- Mobile Bottom Dock -->
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

    <!-- Scripts (exactly same as original) -->
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
            const ids = ['#home', '#why', '#highlights', '#structure', '#syllabus', '#eligibility', '#skills', '#careers', '#whyunnati', '#faq', '#conclusion', '#contact'];
            let current = '#home';
            ids.forEach(id => {
                const $el = $(id);
                if (!$el.length) return;
                const top = $el.offset().top,
                    h = $el.outerHeight();
                if (y >= top && y < top + h) current = id;
            });
            const buttonTarget = (current === '#why' ? '#home' : (current === '#structure' || current === '#syllabus' ? '#syllabus' : (current === '#eligibility' || current === '#skills' || current === '#careers' || current === '#whyunnati' || current === '#faq' || current === '#conclusion' ? '#careers' : current)));
            $('#dock button').removeClass('active');
            $(`#dock button[data-target="${buttonTarget}"]`).addClass('active');
            updateNavIcons();
        }

        function updateActive() {
            if (!isDesktop) setActive();
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
                    if (cls && cls.length) $i.addClass(cls.join(' '));
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
                const strength = opts?.strength ?? 12,
                    damp = opts?.damp ?? 8;
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