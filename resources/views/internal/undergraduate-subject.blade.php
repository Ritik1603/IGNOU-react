@extends('layouts.user')
@section('page_h1', 'BA History Honours (BAHIH)')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')




<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --blue-1: #2563eb;     /* Main Blue */
        --blue-2: #3b82f6;     /* Lighter Blue */
        --blue-3: #1d4ed8;     /* Darker Blue */
        --blue-bg: #eff6ff;
        --border: #dbeafe;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #fff;
        color: #1e293b;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .page-title {
        text-align: center;
        font-size: 2.9rem;
        font-weight: 800;
        background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 8px;
    }

    .page-subtitle {
        text-align: center;
        color: #64748b;
        font-size: 1.15rem;
        margin-bottom: 45px;
        font-weight: 500;
    }

    .search-box {
        max-width: 650px;
        margin: 0 auto 45px;
        position: relative;
    }

    .search-box input {
        width: 100%;
        padding: 18px 24px 18px 55px;
        border: 2px solid #e0e7ff;
        border-radius: 50px;
        font-size: 1.05rem;
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        outline: none;
        transition: all 0.3s;
    }

    .search-box input:focus {
        border-color: var(--blue-1);
        box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.15);
        transform: translateY(-2px);
    }

    .search-box::before {
        content: "Search";
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 1.3rem;
        pointer-events: none;
    }

    .table-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 35px rgba(37, 99, 235, 0.08);
        border: 1px solid var(--border);
    }

    .table-card thead {
        background: var(--blue-bg);
    }

    .table-card th {
        padding: 22px 20px;
        text-align: left;
        font-weight: 700;
        color: #1e40af;
        font-size: 1.05rem;
    }

    .table-card tbody tr {
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.2s;
    }

    .table-card tbody tr:hover {
        background: #f0f7ff;
    }

    .table-card td {
        padding: 20px;
        vertical-align: middle;
    }

    .sem-badge {
        background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
        color: white;
        padding: 8px 17px;
        border-radius: 50px;
        font-size: 0.88rem;
        font-weight: 700;
        min-width: 80px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(37,99,235,0.3);
    }

    .course-name {
        font-weight: 600;
        color: #1e293b;
        line-height: 1.5;
    }

    .course-code {
        font-weight: 700;
        color: var(--blue-1);
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-size: 0.92rem;
    }

    .btn-group {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-notes, .btn-pyq {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 7px 11px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.98rem;
        color: white;
        text-decoration: none;
        min-width: 145px;
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(37,99,235,0.3);
        background: linear-gradient(135deg, #5495fdff, #0e96f1ff);
    }

    .btn-notes:hover, .btn-pyq:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(37,99,235,0.4);
    }

    .btn-notes span, .btn-pyq span {
        font-size: 1.4em;
        font-weight: bold;
    }

    .dse-header {
        text-align: center;
        padding: 25px;
        background: linear-gradient(135deg, #dbeafe, #e0f2fe);
        font-weight: 700;
        color: #1e40af;
        font-size: 1.15rem;
        border-bottom: 3px solid var(--blue-1);
    }

    @media (max-width: 768px) {
        .btn-group {
            flex-direction: column;
            align-items: stretch;
        }
        .btn-notes, .btn-pyq {
            width: 100%;
        }
        .page-title {
            font-size: 2.3rem;
        }
    }
</style>

<div class="container">
    <h1 class="page-title">BA History Honours (BAHIH)</h1>
    <p class="page-subtitle">IGNOU July 2025 Session • Complete Study Material: Notes + Previous Year Papers</p>

    <div class="search-box">
        <input type="text" id="searchInput" onkeyup="searchCourses()" placeholder="Search by course name or code...">
    </div>

    <div class="table-card">
        <table class="course-table" id="courseTable">
            <thead>
                <tr>
                    <th>Semester</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Notes</th>
                    <th>Previous Year Papers</th>
                </tr>
            </thead>
            <tbody>

                <!-- Semester 1 -->
                <tr>
                    <td><span class="sem-badge">Sem 1</span></td>
                    <td class="course-name">History of India – I</td>
                    <td class="course-code">BHIC-101</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 1</span></td>
                    <td class="course-name">Social Formations and Cultural Patterns of the Ancient World</td>
                    <td class="course-code">BHIC-102</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 1</span></td>
                    <td class="course-name">Environmental Studies (Compulsory)</td>
                    <td class="course-code">BEVAE-181</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="{{ route('page.show', ['page' => 'BEVAE-181-ENVIRONMENTAL-STUDIES']) }}" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 1</span></td>
                    <td class="course-name">Disaster Management</td>
                    <td class="course-code">BPAG-171</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="{{ route('page.show', ['page' => 'Disaster-management']) }}" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- Semester 2 -->
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">History of India – II</td>
                    <td class="course-code">BHIC-103</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Social Formations and Cultural Patterns of the Medieval World</td>
                    <td class="course-code">BHIC-104</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">English Communication Skills</td>
                    <td class="course-code">BEGAE-182</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Hindi Bhasha aur Sampreshan</td>
                    <td class="course-code">BHDAE-182</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Media and Communication Skills</td>
                    <td class="course-code">BPCG-172</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Disaster Management</td>
                    <td class="course-code">BPAEG-172</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Philosophy of Religion</td>
                    <td class="course-code">BPYG-171</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 2</span></td>
                    <td class="course-name">Indian Society: Images and Realities</td>
                    <td class="course-code">BSOG-171</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- Semester 3 -->
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">History of India – III (c. 750 – 1206 CE)</td>
                    <td class="course-code">BHIC-105</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">Rise of the Modern West – I</td>
                    <td class="course-code">BHIC-106</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">History of India: Earliest Times to c. 300 BCE</td>
                    <td class="course-code">BHID-101</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">Emotional Intelligence</td>
                    <td class="course-code">BPCS-183</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">Counselling Psychology</td>
                    <td class="course-code">BPCS-185</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">Psychology for Living</td>
                    <td class="course-code">BPCG-175</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 3</span></td>
                    <td class="course-name">Academic Writing & Composition</td>
                    <td class="course-code">BEGC-173</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- Semester 4 -->
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">History of India – IV (c. 1206 – 1550 CE)</td>
                    <td class="course-code">BHIC-107</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Rise of the Modern West – II</td>
                    <td class=",class="course-code">BHIC-108</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">History of India: c. 300 BCE – 8th Century CE</td>
                    <td class="course-code">BHID-102</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Emotional Intelligence</td>
                    <td class="course-code">BPCS-183</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Managing Stress</td>
                    <td class="course-code">BPCS-185</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Writing and Study Skills</td>
                    <td class="course-code">BEGS-183</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="{{ route('page.show', ['page' => 'BEGS-183-WRITING-AND-STUDY-SKILLS-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Tourism Anthropology</td>
                    <td class="course-code">BANS-183</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Computer Applications in Business</td>
                    <td class="course-code">BCOS-183</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="{{ route('page.show', ['page' => 'BCOS-183-COMPUTER-APPLICATION-IN-BUSINESS-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 4</span></td>
                    <td class="course-name">Leadership and Teamwork</td>
                    <td class="course-code">BCOS-187</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- Semester 5 -->
                <tr>
                    <td><span class="sem-badge">Sem 5</span></td>
                    <td class="course-name">History of India – V (c. 1550 – 1605 CE)</td>
                    <td class="course-code">BHIC-109</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 5</span></td>
                    <td class="course-name">History of India: 8th to 15th Century CE</td>
                    <td class="course-code">BHID-103</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- Semester 6 -->
                <tr>
                    <td><span class="sem-badge">Sem 6</span></td>
                    <td class="course-name">History of India – VI (c. 1750 – 1857 CE)</td>
                    <td class="course-code">BHIC-110</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">Sem 6</span></td>
                    <td class="course-name">History of India: 16th to Mid-18th Century CE</td>
                    <td class="course-code">BHID-104</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

                <!-- DSE Header -->
                <tr>
                    <td colspan="5" class="dse-header">
                        Discipline Specific Electives (DSE) – Choose Any One in Semester 5 & 6
                    </td>
                </tr>

                <!-- DSE Options -->
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of the United States of America (c.1776-1945)</td>
                    <td class="course-code">BHIE-141</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of the USSR (c.1917-1964)</td>
                    <td class="course-code">BHIE-143</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of Africa (c.1500-1960)</td>
                    <td class="course-code">BHIE-145</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of Southeast Asia (c.19th–20th Century)</td>
                    <td class="course-code">BHIE-142</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of China and Japan (c.1840-1949)</td>
                    <td class="course-code">BHIE-144</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>
                <tr>
                    <td><span class="sem-badge">DSE</span></td>
                    <td class="course-name">History of Modern Europe (c.1780-1939)</td>
                    <td class="course-code">BHIE-146</td>
                    <td><div class="btn-group"><a href="#" class="btn-notes">View Notes →</a></div></td>
                    <td><div class="btn-group"><a href="#" class="btn-pyq">View PYQ →</a></div></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<script>
function searchCourses() {
    let input = document.getElementById('searchInput').value.toLowerCase();
    let rows = document.querySelectorAll('#courseTable tbody tr');
    rows.forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(input) ? '' : 'none';
    });
}
</script>






   @endsection