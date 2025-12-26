@extends('layouts.user')
@section('title', 'Complete Study Material: Notes + Previous Year Papers') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --blue: #2563eb;
        --blue-light: #3b82f6;
        --blue-bg: #f0f7ff;
        --text: #1e293b;
        --gray: #64748b;
        --border: #e0e7ff;
        --shadow: 0 10px 30px rgba(37, 99, 235, 0.12);
    }

    * { box-sizing: border-box; }

    body {
        font-family: 'Inter', sans-serif;
        background: #fff;
        color: var(--text);
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1100px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .page-subtitle {
        text-align: center;
        color: var(--gray);
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 40px;
    }

    .search-box {
        max-width: 680px;
        margin: 0 auto 50px;
        position: relative;
    }

    .search-box input {
        width: 100%;
        padding: 18px 24px;
        border: 2px solid var(--border);
        border-radius: 50px;
        font-size: 1.1rem;
        background: #fff;
        outline: none;
        box-shadow: 0 6px 20px rgba(0,0,0,0.06);
        transition: all 0.3s ease;
    }

    .search-box input:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 6px rgba(37, 99, 235, 0.15);
    }

    .table-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: var(--shadow);
        border: 1px solid var(--border);
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .course-table {
        width: 100%;
        min-width: 700px; /* Mobile pe horizontal scroll enable */
        border-collapse: collapse;
    }

    .table-card thead {
        background: var(--blue-bg);
        border-bottom: 3px solid var(--blue);
    }

    .table-card th {
        padding: 20px 24px;
        text-align: left;
        font-weight: 700;
        color: var(--blue);
        font-size: 1.05rem;
        white-space: nowrap;
    }

    .table-card tbody tr {
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.25s ease;
    }

    .table-card tbody tr:hover {
        background: #f8fbff;
    }

    .table-card td {
        padding: 22px 24px;
        vertical-align: middle;
    }

    .course-code {
        font-weight: 800;
        color: var(--blue);
        font-size: 1.05rem;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .course-name {
        font-weight: 600;
        color: var(--text);
        font-size: 1.05rem;
        padding-right: 15px;
    }

    .credits-badge {
        background: var(--blue);
        color: white;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1rem;
        box-shadow: 0 6px 15px rgba(37,99,235,0.3);
        flex-shrink: 0;
    }

    .btn-group {
        display: flex;
        gap: 14px;
        flex-wrap: nowrap;
    }

    .btn-notes, .btn-pyq {
        padding: 12px 22px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.98rem;
        color: white;
        text-decoration: none;
        min-width: 100px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 6px 18px rgba(37,99,235,0.3);
        background: linear-gradient(135deg, var(--blue), var(--blue-light));
        white-space: nowrap;
    }

    .btn-notes:hover, .btn-pyq:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(37,99,235,0.4);
    }

    /* MOBILE RESPONSIVE - PERFECT */
    @media (max-width: 768px) {
        .container {
            padding: 0 15px;
            margin: 40px auto;
        }
        .page-subtitle {
            font-size: 1rem;
            margin-bottom: 35px;
        }
        .search-box input {
            padding: 16px 20px;
            font-size: 1rem;
        }
        .table-card th,
        .table-card td {
            padding: 16px 12px;
            font-size: 0.95rem;
        }
        .course-name {
            font-size: 0.98rem;
        }
        .credits-badge {
            width: 42px;
            height: 42px;
            font-size: 0.95rem;
        }
        .btn-group {
            gap: 10px;
        }
        .btn-notes, .btn-pyq {
            padding: 10px 16px;
            font-size: 0.9rem;
            min-width: 88px;
        }
    }

    @media (max-width: 480px) {
        .table-card {
            border-radius: 18px;
        }
        .table-card th,
        .table-card td {
            padding: 14px 10px;
            font-size: 0.92rem;
        }
        .course-code {
            font-size: 1rem;
        }
        .course-name {
            font-size: 0.94rem;
        }
        .btn-group {
            flex-direction: column;
            gap: 10px;
        }
        .btn-notes, .btn-pyq {
            width: 100%;
            padding: 12px 16px;
            font-size: 0.95rem;
        }
        .credits-badge {
            width: 40px;
            height: 40px;
            font-size: 0.9rem;
        }
    }
</style>

<div class="container">

    <p class="page-subtitle">IGNOU July 2025 Session • Complete Study Material: Notes + Previous Year Papers</p>

    <div class="search-box">
        <input type="text" id="searchInput" onkeyup="searchCourses()" placeholder="Search by course name or code...">
    </div>

    <div class="table-card">
        <table class="course-table" id="courseTable">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Credits</th>
                    <th>Study Material</th>
                </tr>
            </thead> 
            <tbody>

                <tr>
                    <td><div class="course-code">IBO-01</div></td>
                    <td class="course-name">International Business Environment</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'IBO-01-INTERNATIONAL-BUSINESS-ENVIRONMENT-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="course-code">IBO-02</div></td>
                    <td class="course-name">International Marketing Management</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="course-code">IBO-03</div></td>
                    <td class="course-name">India's Foreign Trade</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="course-code">IBO-04</div></td>
                    <td class="course-name">Export Import Procedures and Documentation</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="course-code">IBO-05</div></td>
                    <td class="course-name">International Marketing Logistics</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="course-code">IBO-06</div></td>
                    <td class="course-name">International Business Finance</td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://api.whatsapp.com/send/?phone=9355198199&text&type=phone_number&app_absent=0" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'IBO-06-INTERNATIONAL-BUSINESS-FINANCE-JUNE-2025-QP']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<script>
function searchCourses() {
    let input = document.getElementById('searchInput').value.toLowerCase().trim();
    let rows = document.querySelectorAll('#courseTable tbody tr');

    rows.forEach(row => {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(input) ? '' : 'none';
    });
}

// Auto focus on search bar
window.onload = () => {
    document.getElementById('searchInput').focus();
};
</script>

@endsection