@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Educational Technology Admission</span>')
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

        <!-- Desktop Tabs -->
        <nav class="tab-nav" id="tabNav">
            <button data-target="#home" class="active"><span class="ico"><i class="fa-solid fa-house"></i></span><span>Home</span></button>
            <button data-target="#highlights"><span class="ico"><i class="fa-regular fa-calendar-check"></i></span><span>Highlights</span></button>
            <button data-target="#syllabus"><span class="ico"><i class="fa-solid fa-book-open"></i></span><span>Syllabus</span></button>
            <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Careers</span></button>
            <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
        </nav>

        <!-- HOME -->
        <div class="tab-panel active" data-tab="home">
            <div class="hero-wrap">
                <section id="home" class="hero">
                    <h1><span class="u-imp">IGNOU Post Graduate Diploma in Educational Technology Admission</span></h1>
                    <p class="lead">In classrooms, online learning environments, and training rooms, educational technology is no longer "optional". Teachers, trainers and academic managers must now plan, teach and assess using digital tools just as easily as they do with a chalkboard. The IGNOU Post Graduate Diploma in Educational Technology Admission is designed for people who want to formalise these skills and understand why and how they can be used to teach.<br><br>Unnati Education has worked with learners from a variety of backgrounds, including schools, colleges, corporate learning, NGOs and edtech start-ups. They all have the same goal: to be able to teach more effectively with technology, rather than just using random apps.</p>
                    <div class="badges">
                        <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Oct 2025</span>
                        <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year</span>
                        <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL</span>
                    </div>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDET" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                </section>
            </div>

            <section id="why" class="section">
                <h2>Why choose a Post Graduate Diploma in Educational Technology?</h2>
                <p>You may think of video calls, LMS portals and slides when you hear "educational technologies". But this program goes much further. It is a programme that focuses on the pedagogy of technology and not just the tools.</p>
                <p>If:</p>
                <div class="grid">
                    <div class="card">You feel that you are already a teacher, and chalk-and-talk is not sufficient.</div>
                    <div class="card">You wish to improve your online or blended course.</div>
                    <div class="card">You're involved in training or capacity building.</div>
                    <div class="card">You would like to switch from content to learning experience design.</div>
                </div>
                <p>The School of Education of IGNOU has designed this programme to reflect global thinking in edtech. UNESCO and the Commonwealth of Learning, as well as national policies, all emphasize the importance of digital integration. This programme is designed to help you align your teaching with the digital revolution in a practical and structured manner.</p>
            </section>
        </div>

        <!-- HIGHLIGHTS -->
        <div class="tab-panel" data-tab="highlights">
            <section class="section">
                <h2>Highlights of One-Year Specialization Program</h2>
                <p>The IGNOU Post Graduate Diploma in Educational Technology Admission leads to a 1-year postgraduate degree with a focus on educational technologies in real-life contexts. This program runs in Open and Distance Learning Mode (ODL), so you can keep working while you are studying.</p>
                <p>The following are some of the highlights:</p>
                <div class="grid">
                    <div class="card">Post Graduate Diploma (PGDET), School of Education.</div>
                    <div class="card">Distance Learning Open with both printed and digital study materials</div>
                    <div class="card">Duration: Minimum one year. Flexibility to complete the project later, if required.</div>
                    <div class="card">Medium: English.</div>
                    <div class="card">Specialisation: Educational Technology in teaching, training and courseware development.</div>
                </div>
                <p>You'll learn more than just how to use digital devices. You'll also discover how to plan and integrate technology in a thoughtful way, and how to create courseware that is suitable for all types of learners.</p>
            </section>
        </div>

        <!-- SYLLABUS -->
        <div class="tab-panel" data-tab="syllabus">
            <section class="section">
                <h2>IGNOU Post Graduate Diploma in Educational Technology Curriculum & Syllabus Overview</h2>
                <div class="card">
                    <div class="table-wrap">
                        <table>
                            <tr><th>Course Code</th><th>Title of the Course</th><th>Credits</th></tr>
                            <tr><td>MES 131</td><td>Educational Technology: An Overview</td><td>6</td></tr>
                            <tr><td>MES 132</td><td>Computer in Education</td><td>6</td></tr>
                            <tr><td>MES 133</td><td>Selection and Integration of Technology in Educational Processes</td><td>6</td></tr>
                            <tr><td>MES 134</td><td>Design, Development and Delivery of Courseware</td><td>6</td></tr>
                            <tr><td>MESP135</td><td>Project*</td><td>8</td></tr>
                            <tr><td colspan="2">Total Credits</td><td>32</td></tr>
                        </table>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Objects - What is the programme aiming to build?</h2>
                <ul class="list-check">
                    <li>Learn the core concepts of educational technology.</li>
                    <li>Select the right technologies to use for your teaching, learning and institutional tasks rather than using random tools.</li>
                    <li>Use technology to enhance individual and group learning.</li>
                    <li>Use digital tools to create an inclusive learning environment where all learners can keep up and participate.</li>
                    <li>Use technology to enhance the learning process, institutional processes, and training modules.</li>
                    <li>Develop digital resources, courseware and media in different forms that can be used by real learners.</li>
                </ul>
            </section>

            <section class="section">
                <h2>Learning Outcomes-Skills You're More Likely to Walk With</h2>
                <ul class="list-check">
                    <li>Explain educational technology with confidence - not just buzzwords.</li>
                    <li>Analyse your teaching or learning situations to identify the technology that can assist.</li>
                    <li>Select platforms and tools intelligently, based upon learner needs, context, and content type.</li>
                    <li>Create blended learning modules, multimedia, courseware, and digital learning experiences.</li>
                    <li>Support inclusive education through the use of technology.</li>
                    <li>Working as part of an educational team to plan, implement, and review technology-based projects.</li>
                </ul>
            </section>
        </div>

        <!-- CAREERS -->
        <div class="tab-panel" data-tab="careers">
            <section class="section">
                <h2>Career Opportunities for PGDET - What you can do!</h2>
                <div class="grid">
                    <div class="card">Educational Technologist (EdTech)</div>
                    <div class="card">E-Learning Content Developer</div>
                    <div class="card">Online/Blended Learning Coordinator</div>
                    <div class="card">Teacher Trainer / Faculty Developer</div>
                    <div class="card">Digital Content Developer</div>
                    <div class="card">Project roles in NGOs / Govt EdTech initiatives</div>
                </div>
            </section>

            <section class="section">
                <h2>Unnati Education Supports Your Journey</h2>
                <p>We understand that a programme of one year can seem overwhelming, especially if you are working, taking care of a family or teaching full-time. Unnati Education has a simple role: We make the road easier so that you can concentrate on your learning.</p>
                <p>We:</p>
                <div class="grid">
                    <div class="card">You will be able to plan your schedule and learn about the PGDET.</div>
                    <div class="card">Clarify concepts of educational technology if you're stuck or uncertain.</div>
                    <div class="card">This guide will show you how to approach assignments, practical work, and projects in a structured manner.</div>
                    <div class="card">Share smart and time-saving reading strategies for IGNOU materials.</div>
                    <div class="card">Stay informed with notifications about your academic progress.</div>
                </div>
                <p>We will support you all the way through, from the very first moment you learn about this diploma to when you finish the project and await the final result.</p>
            </section>

            <section class="section">
                <h2>FAQs - IGNOU PGDET 2025</h2>
                <div class="accordion">
                    <div class="item"><div class="q"><h4>Q1. What are the main focuses of this Post Graduate Diploma in Educational Technology?</h4><i class="fa-solid fa-plus"></i></div><div class="a">The Post Graduate Diploma in Educational Technology Programme is centered on integrating technologies into teaching, learning, and educational management. It includes concepts, tools and integration strategies as well as courseware, project components, and design of courseware.</div></div>
                    <div class="item"><div class="q"><h4>Q2. Who should consider joining this programme?</h4><i class="fa-solid fa-plus"></i></div><div class="a">This course will be of benefit to teachers, trainers, academic coordinators, administrators and institutions involved in the design or delivery of learning with technology.</div></div>
                    <div class="item"><div class="q"><h4>Q3. Does this program require a technical background?</h4><i class="fa-solid fa-plus"></i></div><div class="a">No. No. Although a basic understanding of computers and English will be helpful, the program is aimed at educators. The program is geared towards educators who want to use technology in a pedagogical way, rather than those who are coding experts.</div></div>
                    <div class="item"><div class="q"><h4>Q4. What is MESP 135 used for?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Projects usually involve planning, designing, implementing, or evaluating an educational intervention supported by technology. It could be an entire course module, digital resources, or even a technology-enabled plan.</div></div>
                    <div class="item"><div class="q"><h4>Q5. Does the PGDET help me if I have previous teaching experience?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Yes. Yes, in fact, many experienced teachers use the PGDET program to modernise their classroom teaching, to move into academic leadership roles, or to shift towards instructional technology and educational design roles.</div></div>
                    <div class="item"><div class="q"><h4>Q6. Can I continue my job while studying this programme?</h4><i class="fa-solid fa-plus"></i></div><div class="a">Yes. ODL is designed so that professionals who are working can still manage both. They just need to plan their time and make sure they keep up with assignments and readings.</div></div>
                </div>
            </section>

            <section class="section">
                <h2>IGNOU Post Graduate Diploma in Educational Technology Admission: Is It Right for You?</h2>
                <p>This programme will help you to move forward if, as a teacher or trainer, you feel that teaching in the traditional way is not enough. IGNOU Post Graduate Diploma in Educational Technology Admission isn't about chasing another certificate. Instead, it's about learning how to design, deliver, manage, and use technology to enhance learning.<br><br>Unnati Education has witnessed people using this diploma to rethink roles, update practices, and take new responsibilities in schools, universities, training centers, and edtech projects. If you want to be a learner who is not just able to use tools, but can also shape learning using them, then this program is the right step for you. And we will guide you from 0 - 100.</p>
            </section>
        </div>

        <!-- CONTACT -->
        <div class="tab-panel" data-tab="contact">
            <section id="contact" class="section">
                <h2>Get Started — Contact Unnati</h2>
                <div class="card">
                    <p>Send your details — name, qualification, current role. We’ll handle admission, assignments, project, everything.</p>
                    <div class="actions">
                        <a class="btn primary" href="https://wa.me/919355198199" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                        <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call</a>
                    </div>
                    <p style="margin-top:8px"><strong>Call/WhatsApp: 9355198199</strong></p>
                </div>
            </section>
        </div>
    </main>

    <!-- FABs & Dock -->
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

    <!-- Full Scripts (100% working on mobile) -->
    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        function setDockHeightVar() {
            const dock = document.querySelector('.dock');
            const h = dock ? (dock.getBoundingClientRect().height + 20) : 100;
            document.documentElement.style.setProperty('--dock-h', h + 'px');
        }
        window.addEventListener('load', setDockHeightVar);
        window.addEventListener('resize', setDockHeightVar);

        function wrapTables() {
            document.querySelectorAll('table').forEach(t => {
                if (!t.closest('.table-wrap')) {
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
            end: () => document.body.scrollHeight - innerHeight,
            onUpdate: self => prog.style.transform = `scaleX(${self.progress})`
        });

        let isDesktop = window.matchMedia('(min-width: 1025px)').matches;

        function handleNavClick(target) {
            document.querySelectorAll('#dock button, #tabNav button').forEach(b => b.classList.remove('active'));
            document.querySelectorAll(`#dock button[data-target="${target}"], #tabNav button[data-target="${target}"]`).forEach(b => b.classList.add('active'));

            if (isDesktop) {
                document.querySelectorAll('.tab-panel').forEach(p => {
                    p.classList.remove('active');
                    p.style.display = 'none';
                });
                const panel = document.querySelector(`.tab-panel[data-tab="${target.replace('#','')}"]`);
                panel.classList.add('active');
                panel.style.display = 'block';
            } else {
                gsap.to(window, {duration: 0.8, scrollTo: {y: target, offsetY: 80}, ease: "power2.inOut"});
            }
        }

        document.querySelectorAll('#dock button, #tabNav button').forEach(btn => {
            btn.addEventListener('click', () => handleNavClick(btn.dataset.target));
        });

        gsap.utils.toArray('.hero, .section, .card').forEach(el => {
            gsap.from(el, { y: 20, opacity: 0, duration: 0.6, ease: "power2.out", scrollTrigger: { trigger: el, start: "top 90%" } });
        });

        ScrollTrigger.create({ start: "top 400", onEnter: () => document.querySelector('.fab.top').style.display = 'grid', onLeaveBack: () => document.querySelector('.fab.top').style.display = 'none' });

        document.getElementById('toTop').addEventListener('click', () => gsap.to(window, {duration: 0.8, scrollTo: 0, ease: "power2.inOut"}));

        document.addEventListener('click', e => {
            if (e.target.closest('.accordion .q')) {
                const item = e.target.closest('.item');
                const answer = item.querySelector('.a');
                const isOpen = answer.style.display === 'block';
                document.querySelectorAll('.accordion .a').forEach(a => a.style.display = 'none');
                document.querySelectorAll('.accordion .q i').forEach(i => i.classList.replace('fa-minus', 'fa-plus'));
                document.querySelectorAll('.accordion .item').forEach(i => i.classList.remove('open'));
                if (!isOpen) {
                    answer.style.display = 'block';
                    item.querySelector('.q i').classList.replace('fa-plus', 'fa-minus');
                    item.classList.add('open');
                }
                setTimeout(setDockHeightVar, 300);
            }
        });

        (function() {
            const clamp = (n, min, max) => Math.max(min, Math.min(n, max));
            function bindTilt(el) {
                let raf = null, rx = 0, ry = 0;
                const move = e => {
                    const rect = el.getBoundingClientRect();
                    const cx = (e.clientX - rect.left) / rect.width;
                    const cy = (e.clientY - rect.top) / rect.height;
                    const tRY = (cx - 0.5) * 24;
                    const tRX = (0.5 - cy) * 24;
                    const step = () => {
                        rx += (tRX - rx) / 10;
                        ry += (tRY - ry) / 10;
                        el.style.setProperty('--rx', rx.toFixed(2) + 'deg');
                        el.style.setProperty('--ry', ry.toFixed(2) + 'deg');
                        el.style.setProperty('--mx', clamp(cx * 100, 0, 100) + '%');
                        el.style.setProperty('--my', clamp(cy * 100, 0, 100) + '%');
                        if (Math.abs(tRX - rx) > 0.1 || Math.abs(tRY - ry) > 0.1) raf = requestAnimationFrame(step);
                        else { cancelAnimationFrame(raf); raf = null; }
                    };
                    if (!raf) raf = requestAnimationFrame(step);
                };
                const leave = () => {
                    el.style.removeProperty('--rx'); el.style.removeProperty('--ry');
                    el.style.removeProperty('--mx'); el.style.removeProperty('--my');
                };
                el.addEventListener('mousemove', move, {passive:true});
                el.addEventListener('mouseleave', leave);
                el.addEventListener('touchstart', e => e.touches[0] && move(e.touches[0]), {passive:true});
                el.addEventListener('touchend', leave, {passive:true});
            }
            document.querySelectorAll('.section .card, .table-wrap').forEach(bindTilt);
        })();
    </script>

@endsection