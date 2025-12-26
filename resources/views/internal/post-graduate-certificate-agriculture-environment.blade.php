@extends('layouts.user')
@section('page_h1', 'Agriculture & Environment Programmes')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">



<div class="container">
    <h3 class="page-title">Agriculture & Environment Programmes</h3>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-bar" onkeyup="searchCourses()" placeholder="Search by programme name or code...">
        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>

    <div id="courseList">

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20PGCAP%20(Post%20Graduate%20Certificate%20in%20Agriculture%20Policy)" class="course-card" data-search="pgcap agriculture policy">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Post Graduate Certificate in Agriculture Policy</h3>
                <p class="course-code">PGCAP</p>
            </div>
            <div class="arrow-3d">→</div>
        </a>

        <a href="https://wa.me/919355198199?text=Hi!%20I%20want%20to%20know%20more%20about%20PGCCC%20(Post%20Graduate%20Certificate%20in%20Climate%20Change)" class="course-card" data-search="pgccc climate change environment">
            <div class="card-layer layer-1"></div><div class="card-layer layer-2"></div><div class="card-layer layer-3"></div>
            <div class="course-info">
                <h3>Post Graduate Certificate in Climate Change</h3>
                <p class="course-code">PGCCC</p>
                <div class="note">Also listed under Technology & Engineering</div>
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
            if (matches) {
                card.style.display = '';
                card.style.opacity = '0';
                setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'translateY(0) translateZ(0) rotateX(0) scale(1)'; }, 100 + i * 50);
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

@endsection