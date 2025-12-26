@extends('layouts.user')
@section('title', 'IGNOU M.COM (Master of Commerce)') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
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
        min-width: 700px;
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

    .type-badge {
        background: #e0e7ff;
        color: var(--blue);
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        width: 70px;
        text-align: center;
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

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .container { padding: 0 15px; margin: 40px auto; }
        .page-subtitle { font-size: 1rem; margin-bottom: 35px; }
        .search-box input { padding: 16px 20px; font-size: 1rem; }
        .table-card th, .table-card td { padding: 16px 12px; font-size: 0.95rem; }
        .course-name { font-size: 0.98rem; }
        .credits-badge { width: 42px; height: 42px; font-size: 0.95rem; }
        .btn-group { gap: 10px; }
        .btn-notes, .btn-pyq { padding: 10px 16px; font-size: 0.9rem; min-width: 88px; }
        .type-badge { font-size: 0.8rem; padding: 5px 10px; width: 65px; }
    }

    @media (max-width: 480px) {
        .btn-group { flex-direction: column; gap: 10px; }
        .btn-notes, .btn-pyq { width: 100%; padding: 12px 16px; font-size: 0.95rem; }
        .credits-badge { width: 40px; height: 40px; font-size: 0.9rem; }
    }
</style>

<div class="container">

    <p class="page-subtitle">IGNOU M.COM (Master of Commerce) • July 2025 Session • Complete Syllabus & Study Material</p>

    <div class="search-box">
        <input type="text" id="searchInput" onkeyup="searchCourses()" placeholder="Search by course name or code...">
    </div>

    <div class="table-card">
        <table class="course-table" id="courseTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Course Title</th>
                    <th>Code</th>
                    <th>Credits</th>
                    <th>Study Material</th>
                </tr>
            </thead>
            <tbody>

                <!-- Semester 1 -->
                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Organisation Theory and Behaviour</td>
                    <td><div class="course-code">MCO-01</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-01%20(Organisation%20Theory%20and%20Behaviour)%20Notes%20%26%20Solved%20Papers" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'MCO-01-ORGANISATIONAL-THEORY-AND-BEHAVIOUR-JUNE-2025-QP']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Business Environment</td>
                    <td><div class="course-code">MCO-04</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-04%20(Business%20Environment)%20Notes%20%26%20Solved%20Papers" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'MCO-04-BUSINESS-ENVIRONMENT-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Accounting for Managerial Decisions</td>
                    <td><div class="course-code">MCO-05</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-05%20(Accounting%20for%20Managerial%20Decisions)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-05%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Managerial Economics</td>
                    <td><div class="course-code">MCO-21</div></td>
                    <td><div class="credits-badge">4</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-21%20(Managerial%20Economics)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-21%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <!-- Semester 2 -->
                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Marketing Management</td>
                    <td><div class="course-code">MCO-06</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-06%20(Marketing%20Management)%20Notes" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'MCO-06-MARKETING-MANAGEMENT-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Quantitative Analysis for Managerial Applications</td>
                    <td><div class="course-code">MCO-22</div></td>
                    <td><div class="credits-badge">4</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-22%20(Quantitative%20Analysis)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-22%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Strategic Management</td>
                    <td><div class="course-code">MCO-23</div></td>
                    <td><div class="credits-badge">4</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-23%20(Strategic%20Management)%20Notes" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'MCO-23-STRATEGIC-MANAGEMENT-JUNE-2025-Q-P-SOLUTION']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Business Ethics and CSR</td>
                    <td><div class="course-code">MCO-24</div></td>
                    <td><div class="credits-badge">4</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-24%20(Business%20Ethics%20and%20CSR)%20Notes" class="btn-notes">Notes</a>
                            <a href="{{ route('page.show', ['page' => 'MCO-024-BUSINESS-ETHICS-AND-CSR-JUNE-2025-QP-SOLUTION']) }}" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Research Methodology & Statistical Analysis</td>
                    <td><div class="course-code">MCO-03</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-03%20(Research%20Methodology)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-03%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Financial Management</td>
                    <td><div class="course-code">MCO-07</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-07%20(Financial%20Management)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-07%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <!-- International Business Specialisation -->
                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">International Marketing Management</td>
                    <td><div class="course-code">IBO-02</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-02%20(International%20Marketing)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-02%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">India's Foreign Trade and Investment</td>
                    <td><div class="course-code">MCO-15</div></td>
                    <td><div class="credits-badge">4</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-15%20(India's%20Foreign%20Trade)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20MCO-15%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">International Business Environment</td>
                    <td><div class="course-code">IBO-01</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-01%20(International%20Business%20Environment)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-01%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">International Business Finance</td>
                    <td><div class="course-code">IBO-06</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-06%20(International%20Business%20Finance)%20Notes" class="btn-notes">Notes</a>
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20send%20IBO-06%20PYQ" class="btn-pyq">PYQ</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="type-badge">Core</div></td>
                    <td class="course-name">Project Course</td>
                    <td><div class="course-code">MCOP-001</div></td>
                    <td><div class="credits-badge">6</div></td>
                    <td>
                        <div class="btn-group">
                            <a href="https://wa.me/919355198199?text=Hi!%20Please%20guide%20me%20for%20MCOP-001%20Project%20Work" class="btn-notes">Project Help</a>
                            <a href="#" class="btn-pyq" style="opacity:0.6;cursor:not-allowed;">No PYQ</a>
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

window.onload = () => {
    document.getElementById('searchInput').focus();
};
</script>

@endsection