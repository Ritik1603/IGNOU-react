@extends('layouts.user')
@section('page_h1', '<span class="u-imp">IGNOU Post Graduate Diploma in Development Studies Admission</span>')
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
        <button data-target="#careers"><span class="ico"><i class="fa-solid fa-briefcase"></i></span><span>Career & Eligibility</span></button>
        <button data-target="#contact"><span class="ico"><i class="fa-solid fa-headset"></i></span><span>Contact</span></button>
    </nav>

    <!-- ==================== HOME ==================== -->
    <div class="tab-panel active" data-tab="home">
        <div class="hero-wrap">
            <section id="home" class="hero">
                <h1><span class="u-imp">IGNOU Post Graduate Diploma in Development Studies Admission</span></h1>
                <p class="lead">We frequently meet working professionals and students who are interested in moving beyond generic postgraduate courses and into meaningful work. They all share a similar frustration. There aren't nearly enough structured professional programs to prepare students for the real challenges of development. The IGNOU Post Graduate Diploma Admission topic is important because it helps people prepare for real development challenges.</p>
                <p class="lead">We are aware of the pressure to select the best program that will not only align with the purpose but also provide a solid academic foundation. Development studies isn't a trendy field; it's a foundation for social transformation, grassroots leadership, and policy work. This program helps learners go from uncertainty to clarity and interest to expertise. As always, our guides will take you from 0 - 100, step by step.</p>
                <div class="badges">
                    <span class="badge brand"><i class="fa-regular fa-calendar"></i> Tentative Last Date: 31 Aug 2025</span>
                    <span class="badge"><i class="fa-regular fa-clock"></i> Duration: 1 Year (Flexible ODL)</span>
                    <span class="badge"><i class="fa-solid fa-shield-check"></i> UGC Approved • ODL Mode</span>
                </div>
                <div class="actions">
                    <a class="btn primary" href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20PGDDS" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp Now</a>
                    <a class="btn ghost" href="tel:+919355198199"><i class="fa-solid fa-phone"></i> Call Us</a>
                </div>
            </section>
        </div>

        <section id="why" class="section">
            <h2>Why Choose This Program?</h2>
            <p>Development studies are not something people choose to do to boost their resume. People choose development studies because they want to be able to influence change, make a contribution, and grasp the deeper realities that shape communities. This happens every day.</p>
            <p>This program targets learners who are:</p>
            <ul class="list-check">
                <li>Social development: a better understanding</li>
                <li>A practical grounding in community-focused frames</li>
                <li>Exposure of real-world development challenges</li>
                <li>Flexible but serious academics</li>
                <li>An important step in advancing development-focused educational programs</li>
            </ul>
            <p>In our conversations with students, we have noticed a common pattern: Students are looking for clarity, direction and a structured educational experience, without having to give up their current responsibilities. This program is exactly what students are looking for.</p>
            <p>It is not just a solid academic program -- it shapes how people analyze development issues and react to them.</p>
        </section>
    </div>

    <!-- ==================== HIGHLIGHTS ==================== -->
    <div class="tab-panel" data-tab="highlights">
        <section id="highlights" class="section">
            <h2>Highlights from the program</h2>
            <p>The postgraduate diploma is different because it concentrates on actual developmental contexts and not abstract theory. The structure of the post-graduate diploma is clear, the credit load manageable, and it is highly valued for its conceptual clarity.</p>
            <p>Some of the key highlights include:</p>
            <div class="grid">
                <div class="card"><strong>Flexible open-distance education for one year</strong></div>
                <div class="card"><strong>Curriculum developed by the School of Extension and Development Studies</strong></div>
                <div class="card"><strong>Modules that are industry-relevant and based on the current development realities</strong></div>
                <div class="card"><strong>Coverage of gender frameworks, national development perspectives, research foundations and development concepts</strong></div>
                <div class="card"><strong>The program provides a clear route to pursue advanced studies after completion.</strong></div>
            </div>
            <p>The balance is what our learners say makes this program so appealing. It's substantial enough to feel academic, yet practical enough to keep you grounded.</p>
        </section>
    </div>

    <!-- ==================== SYLLABUS ==================== -->
    <div class="tab-panel" data-tab="syllabus">
        <section id="about" class="section">
            <h2>What is the Program?</h2>
            <p>This program addresses a long-standing gap between a lack of development courses that are comprehensive and structured, as well as the high demand for professionals in the field. The program is designed to meet the needs of a variety of stakeholders, including the social sector, government initiatives, as well as NGOs, CSR Departments, and global development organisations.</p>
            <p>The curriculum was designed by experts in the field to expose learners to the theoretical foundations of their subject while maintaining a constant focus on real-world issues. The program is suitable for:</p>
            <ul class="list-check">
                <li>Fresh graduates looking for a career as a developer</li>
                <li>Professionals in NGOs and social enterprises</li>
                <li>Researchers and policymakers</li>
                <li>Professionals who move from corporate to development roles</li>
                <li>Anyone interested in developing a better understanding of challenges to development.</li>
            </ul>
            <p>Students often enter the program with curiosity but leave it with confidence, because the structure encourages them to be critical and look at issues from many angles.</p>
        </section>

        <section id="syllabus" class="section">
            <h2>Post Graduate Diploma in Development Studies Curriculum & Syllabus Overview</h2>
            <div class="card">
                <div class="table-wrap">
                    <table>
                        <tr><th>Course Code</th><th>Title of the Course</th><th>Credits</th></tr>
                        <tr><td>MDV 101</td><td>Introduction to Development and Development Theories</td><td>6</td></tr>
                        <tr><td>MDV 102</td><td>Dynamics of Development</td><td>6</td></tr>
                        <tr><td>MDV 103</td><td>Issues and Challenges of Development</td><td>6</td></tr>
                        <tr><td>MDV 106</td><td>Research Methodology in Development Studies</td><td>6</td></tr>
                        <tr><td>MDV 109</td><td>Development in India – An Overview</td><td>6</td></tr>
                        <tr><td>MDV 4</td><td>Gender and Development</td><td>6</td></tr>
                        <tr><td colspan="2"><strong>Total Credits</strong></td><td><strong>36</strong></td></tr>
                    </table>
                </div>
            </div>
            <p style="margin-top:16px">The syllabus follows an organized structure that moves from fundamental theories to applied analysis of development. It has 36 credits spread out over modules that are focused on development frameworks, country contexts, gender perspectives and research methods.</p>
            <p>Instead of listing all subjects, we will keep it simple: The curriculum is a blend of conceptual foundations and analytical training with exposure to development-focused studies. It helps learners to understand development theories, explore challenges in different sectors, and build their ability to examine India's journey. The distribution of credits ensures that learners are receiving a balanced education, with equal emphasis on conceptual clarity and application insights.</p>
        </section>
    </div>

    <!-- ==================== CAREER & ELIGIBILITY ==================== -->
    <div class="tab-panel" data-tab="careers">
        <section id="eligibility" class="section">
            <h2>Eligibility</h2>
            <p>The criteria remain straightforward and accessible.</p>
            <p>Graduated in any discipline.</p>
            <p>Our students come from diverse academic backgrounds, such as sociology and economics, commerce, humanities, engineering, and professional fields. Anyone who wants to learn about development issues is welcome to join the program.</p>
        </section>

        <section id="objectives" class="section">
            <h2>Objectives</h2>
            <p>Although the official goals of the program are well-known, it is helpful to translate them into simple terms:</p>
            <ul class="list-check">
                <li>Enhancing the understanding of theories and models of development</li>
                <li>Learners are trained to identify, analyse, and interpret developmental problems.</li>
                <li>Building research capability related to development studies</li>
                <li>Forming a qualified pool of professionals who are ready to take on roles in the sector</li>
                <li>Students are encouraged to examine and critically evaluate socio-economic issues.</li>
            </ul>
            <p>These objectives will ensure that the program goes beyond simple information delivery to deeper intellectual development.</p>
        </section>

        <section id="outcomes" class="section">
            <h2>Learning Outcomes</h2>
            <p>At the end of the course, students gain:</p>
            <div class="grid">
                <div class="card"><strong>The development of concepts, theories and debates</strong></div>
                <div class="card"><strong>It is important to be able to make informed decisions about community issues.</strong></div>
                <div class="card"><strong>Research that supports data-driven decisions</strong></div>
                <div class="card"><strong>Awareness of national priorities for development and changing socio-economic reality</strong></div>
                <div class="card"><strong>Developmental sensitivity to gender, inclusion and equity</strong></div>
                <div class="card"><strong>Confidence for projects, research studies and field-based initiatives</strong></div>
            </div>
            <p>We have observed that the learners who complete this program are more grounded, analytic, and capable of engaging in meaningful discussions on development.</p>
        </section>

        <section id="careers" class="section">
            <h2>Career Opportunities</h2>
            <p>A career in development studies can lead to many different roles, as the industry is vast, diverse, growing, and constantly expanding. Some common areas where learners can build a career include:</p>
            <div class="grid">
                <div class="card">Non-governmental Organizations (NGOs).</div>
                <div class="card">International development agencies</div>
                <div class="card">CSR is the foundation of all corporations</div>
                <div class="card">Social impact consultancy</div>
                <div class="card">Public Policy and Governance</div>
                <div class="card">Research organisations</div>
                <div class="card">Community-based Project Leadership</div>
                <div class="card">Rural and Urban Development Programs</div>
                <div class="card">Roles of gender advocacy and social inclusion</div>
            </div>
            <p>Many learners choose this route because they desire meaningful work. This program provides the necessary foundations for those who want to work in roles that include planning, evaluation, social impact analysis, and research.</p>
        </section>

        <section id="whyunnati" class="section">
            <h2>Unnati Education</h2>
            <p>We have supported thousands of learners in need of clear guidance, program understanding and honest academic directions. Many people feel confused when they start something new. So we help cut the confusion by providing clear and concise guidance.</p>
            <p>Learners get:</p>
            <div class="grid">
                <div class="card">Transparent and easy-to-understand information</div>
                <div class="card">From the very beginning, you will receive step-by-step assistance.</div>
                <div class="card">Real-life experiences and practical advice are shared to help students.</div>
                <div class="card">Advice based on accuracy and trust</div>
                <div class="card">A team that is truly interested in the informed choice of learners</div>
            </div>
            <p>We don't oversell or exaggerate - we guide.</p>
        </section>

        <section id="addon" class="section">
            <h2>Add-on Courses</h2>
            <p>Add-on courses are popular with learners who want to improve their careers. Popular add-ons revolve around:</p>
            <ul class="list-check">
                <li>Social research data analysis</li>
                <li>Planning community projects</li>
                <li>Monitoring and Evaluation Basics</li>
                <li>Gender and inclusion studies</li>
                <li>Public policy basics</li>
                <li>Rural development basics</li>
                <li>NGO management essentials</li>
            </ul>
            <p>We help our learners to understand what add-ons will best suit their needs so they do not waste time and money.</p>
        </section>

        <section id="benefits" class="section">
            <h2>Benefits Summary</h2>
            <p>Here's an overview of what students gain.</p>
            <div class="grid">
                <div class="card">A solid foundation in development theory</div>
                <div class="card">Understand the industry challenges and how to overcome them.</div>
                <div class="card">Research-oriented Thinking</div>
                <div class="card">Learn about gender frameworks, inclusion perspectives and other issues.</div>
                <div class="card">The Indian developmental pattern</div>
                <div class="card">Flexible learning for a manageable academic workload</div>
                <div class="card">Eligibility for higher education afterward</div>
                <div class="card">Confidence for development-focused roles</div>
                <div class="card">Our step-by-step guide will take you through the entire process.</div>
            </div>
            <p>This program is balanced, structured and suitable for both recent graduates and professionals wanting to upgrade their knowledge.</p>
        </section>

        <section id="faq" class="section">
            <h2>FAQs</h2>
            <div class="accordion">
                <div class="item"><div class="q"><h4>1. What is the length of the program?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">The program will be offered in an open-distance format for one year.</div></div>
                <div class="item"><div class="q"><h4>2. What is the language of instruction?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">The medium of instruction is English.</div></div>
                <div class="item"><div class="q"><h4>3. Who can apply to this program?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Anyone with a degree in any subject can apply.</div></div>
                <div class="item"><div class="q"><h4>4. Does this program suit beginners?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Yes. The course starts with the basics.</div></div>
                <div class="item"><div class="q"><h4>5. What types of roles can I expect after this program?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Many people hold roles in NGOs and other organizations, such as CSR departments, research institutes, development agencies, and social impact organizations.</div></div>
                <div class="item"><div class="q"><h4>6. Is this program recognized?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Yes, the School of Extension and Development Studies is a recognized academic centre.</div></div>
                <div class="item"><div class="q"><h4>7. After this, can I continue to study?</h4><i class="fa-solid fa-plus"></i></div>
                    <div class="a">Yes. This program will allow you to enter the second semester of the Master's in Development Studies after completing this program.</div></div>
            </div>
        </section>

        <section id="conclusion" class="section">
            <h2>You can also read our conclusion.</h2>
            <p>IGNOU Post Graduate Diploma in Development Studies Admission route will suit learners who desire structured knowledge, deeper insight and intellectual development. Students who seek purpose-driven education will find clarity in this program. The curriculum is balanced and well-defined. There are many opportunities to pursue afterward.</p>
            <p>We continue to guide our students through their entire career journey -- from zero to one hundred -- so they can remain confident, knowledgeable, and ready for what's next in their development-focused path.</p>
        </section>
    </div>

    <!-- ==================== CONTACT ==================== -->
    <div class="tab-panel" data-tab="contact">
        <section id="contact" class="section">
            <h2>Get Started – Contact Unnati Education</h2>
            <div class="card">
                <p>We guide you from admission to project submission – truly 0 to 100 support.</p>
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
        const sections=['#home','#why','#highlights','#about','#syllabus','#eligibility','#objectives','#outcomes','#careers','#whyunnati','#addon','#benefits','#faq','#conclusion','#contact'];
        let current='#home';sections.forEach(s=>{const el=$(s);if(el.length&&y>=el.offset().top-100)current=s});
        const map={'#why':'#home','#about':'#syllabus','#eligibility':'#careers','#objectives':'#careers','#outcomes':'#careers','#whyunnati':'#careers','#addon':'#careers','#benefits':'#careers','#faq':'#careers','#conclusion':'#careers'};
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