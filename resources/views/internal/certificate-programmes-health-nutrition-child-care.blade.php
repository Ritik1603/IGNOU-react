@extends('layouts.user')
@section('page_h1', 'Health, Nutrition & Child Care Programmes')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --primary: #3b82f6;
        --primary-dark: #1d4ed8;
        --accent: #10b981;
        --bg: #f8fafc;
        --card-bg: #ffffff;
        --text: #0f172a;
        --text-light: #64748b;
        --shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 25px 50px rgba(59, 130, 246, 0.22);
        --radius: 24px;
        --transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body { font-family: 'Inter', sans-serif; background: var(--bg); color: var(--text); min-height: 100vh; perspective: 1500px; overflow-x: hidden; }

    .container { width: 90%; max-width: 1350px; margin: 70px auto 100px; padding: 0 20px; transform-style: preserve-3d; }

    .page-title {
        text-align: center; font-size: 2.4rem; font-weight: 800;
        background: linear-gradient(120deg, #8b5cf6, #3b82f6, #10b981);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        margin-bottom: 3rem; letter-spacing: -1px; transform: translateZ(30px);
    }

    .search-container { max-width: 700px; margin: 0 auto 3.5rem; position: relative; transform: translateZ(40px); }

    .search-bar {
        width: 100%; padding: 20px 24px 20px 60px; font-size: 1.1rem; font-weight: 600; border: none; border-radius: 36px;
        background: var(--card-bg); outline: none; box-shadow: 0 8px 25px rgb(213 213 213);
        transition: var(--transition); backdrop-filter: blur(12px); color: var(--text);
    }
    .search-bar::placeholder { color: #94a3b8; font-weight: 500; }
    .search-bar:focus { transform: translateY(-4px) translateZ(50px); box-shadow: 0 15px 40px rgba(59,130,246,.2); border: 2px solid var(--primary); }

    .search-icon { position: absolute; left: 22px; top: 50%; transform: translateY(-50%); width: 24px; height: 24px; color: #94a3b8; transition: var(--transition); }
    .search-bar:focus + .search-icon { color: var(--primary); transform: translateY(-50%) scale(1.2) translateZ(20px); }

    #courseList { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px; margin-top: 20px; perspective: 1200px; }

    .course-card {
        background: var(--card-bg); border-radius: var(--radius); padding: 28px 30px; position: relative; height: 150px;
        display: block; text-decoration: none; color: inherit; transform-style: preserve-3d; transition: var(--transition);
        cursor: pointer; overflow: hidden; box-shadow: var(--shadow); opacity: 0; animation: cardFlyIn .7s ease forwards;
    }

    .card-layer { position: absolute; inset: 0; border-radius: var(--radius); transition: var(--transition); }
    .layer-1 { background: linear-gradient(135deg, rgba(139,92,246,.12), rgba(59,130,246,.08)); transform: translateZ(-20px); opacity: 0; }
    .layer-2 { background: linear-gradient(45deg, rgba(16,185,129,.1), transparent 70%); transform: translateZ(-40px); opacity: 0; filter: blur(8px); }
    .layer-3 { background: radial-gradient(circle at 30% 30%, rgba(34,197,94,.15), transparent 60%); transform: translateZ(-60px); opacity: 0; }

    .course-card:hover { transform: translateY(-20px) translateZ(80px) rotateX(8deg) rotateY(-5deg); box-shadow: var(--shadow-hover); }
    .course-card:hover .layer-1,.course-card:hover .layer-2,.course-card:hover .layer-3 { opacity: 1; }

    .course-info { transform: translateZ(40px); z-index: 2; }
    .course-info h3 { font-size: 1.02rem; font-weight: 700; margin-bottom: 10px; line-height: 1.35;
        background: linear-gradient(90deg, #1e293b, #475569); -webkit-background-clip: text; -webkit-text-fill-color: transparent; transition: var(--transition); }
    .course-card:hover h3 { background: linear-gradient(90deg, var(--primary), #8b5cf6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

    .course-code { font-size: .85rem; color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; }
    .course-card:hover .course-code { color: var(--primary-dark); transform: translateZ(50px) scale(1.05); }

    .arrow-3d {
        position: absolute; bottom: 16px; right: 30px; width: 50px; height: 50px;
        background: linear-gradient(135deg, var(--primary), #8b5cf6); color: #fff; border-radius: 50%;
        display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 900;
        transition: var(--transition); box-shadow: 0 8px 20px rgba(59,130,246,.3); transform: translateZ(45px);
    }
    .course-card:hover .arrow-3d { transform: translateZ(70px) scale(1.2) rotate(20deg); }

    @keyframes cardFlyIn {
        0% { opacity: 0; transform: translateY(100px) translateZ(-300px) rotateX(-30deg) scale(.8); }
        100% { opacity: 1; transform: translateY(0) translateZ(0) rotateX(0) scale(1); }
    }

    .course-card:nth-child(1)  { animation-delay: .1s; }
    .course-card:nth-child(2)  { animation-delay: .2s; }
    .course-card:nth-child(3)  { animation-delay: .3s; }
    .course-card:nth-child(4)  { animation-delay: .4s; }
    .course-card:nth-child(5)  { animation-delay: .5s; }
    .course-card:nth-child(6)  { animation-delay: .6s; }
    .course-card:nth-child(7)  { animation-delay: .7s; }
    .course-card:nth-child(8)  { animation-delay: .8s; }
    .course-card:nth-child(9)  { animation-delay: .9s; }
    .course-card:nth-child(10) { animation-delay: 1.0s; }

    @media (max-width: 768px) {
        #courseList { grid-template-columns: 1fr; }
        .page-title { font-size: 2rem; }
        .course-card { height: 160px; }
    }
</style>

<div class="container">
    <h3 class="page-title">Health, Nutrition & Child Care Programmes</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by programme name or code...">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>

    <div id="courseList">

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CNCC%20(Certificate%20in%20Nutrition%20and%20Child%20Care)" class="course-card" data-search="cncc nutrition child care">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Nutrition and Child Care</h3>
                <p class="course-code">CNCC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CMCHN%20(Certificate%20in%20Maternal%20and%20Child%20Health%20Nursing)" class="course-card" data-search="cmchn maternal child health nursing">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Maternal and Child Health Nursing</h3>
                <p class="course-code">CMCHN</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CNIN%20(Certificate%20in%20Newborn%20and%20Infant%20Nursing)" class="course-card" data-search="cnin newborn infant nursing">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Newborn and Infant Nursing</h3>
                <p class="course-code">CNIN</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CHBHC%20(Certificate%20in%20Home%20Based%20Health%20Care)" class="course-card" data-search="chbhc home based health care">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Home Based Health Care</h3>
                <p class="course-code">CHBHC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CCH%20(Certificate%20in%20Community%20Health)" class="course-card" data-search="cch community health">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Community Health</h3>
                <p class="course-code">CCH</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CGHC%20(Certificate%20in%20Geriatric%20Health%20and%20Care)" class="course-card" data-search="cghc geriatric health care">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Geriatric Health and Care</h3>
                <p class="course-code">CGHC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CAHC%20(Certificate%20in%20Adolescent%20Health%20and%20Counselling)" class="course-card" data-search="cahc adolescent health counselling">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Adolescent Health and Counselling</h3>
                <p class="course-code">CAHC</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CHCWM%20(Certificate%20in%20Health%20Care%20Waste%20Management)" class="course-card" data-search="chcwm health care waste management">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Health Care Waste Management</h3>
                <p class="course-code">CHCWM</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CPY%20(Certificate%20in%20Yoga)" class="course-card" data-search="cpy yoga">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in Yoga</h3>
                <p class="course-code">CPY</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20CFAID%20(Certificate%20in%20First%20Aid)" class="course-card" data-search="cfaid first aid">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Certificate in First Aid</h3>
                <p class="course-code">CFAID</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

    </div>
</div>

<script>
    function searchCourses() {
        const query = document.getElementById('searchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.course-card');
        cards.forEach((card, i) => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const code = card.querySelector('.course-code').textContent.toLowerCase();
            const extra = (card.getAttribute('data-search') || '').toLowerCase();
            const matches = title.includes(query) || code.includes(query) || extra.includes(query);
            card.style.display = matches ? '' : 'none';
            if (matches) {
                card.style.opacity = '0';
                setTimeout(() => { card.style.opacity = '1'; }, 100 + i * 50);
            }
        });
    }
</script>

@endsection