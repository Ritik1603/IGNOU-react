@extends('layouts.user')
@section('page_h1', 'COMPUTER APPLICATIONS IN BUSINESS')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')




<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        --primary: #005BFF; --primary-light: #0A84FF; --accent: #F9A826; --success: #28C76F; --danger: #F04438;
        --gray: #4B5563; --light-gray: #9CA3AF; --border: #E2E8F0; --bg: #F3F6FB; --card-bg: #FFFFFF;
        --shadow-sm: 0 4px 12px rgba(15,23,42,0.06); --shadow-md: 0 8px 25px rgba(15,23,42,0.10);
        --radius-sm: 12px; --radius-md: 20px; --radius-lg: 28px; --transition: all 0.3s ease;
        --highlight: #FFFBEB; --highlight-border: #FBBF24;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Inter',sans-serif; background:var(--bg); color:#1e293b; line-height:1.7; }
    .container { max-width:1129px; margin:0 auto; padding:0 20px; }
    .paper-header { text-align:center; background:#fff; padding:28px 24px; border-radius:var(--radius-lg); margin-bottom:32px; box-shadow:var(--shadow-md); border:1px solid var(--border); }
    .paper-code { font-size:1.6rem; font-weight:700; color:var(--primary); letter-spacing:4px; margin-bottom:8px; }
    .paper-title { font-size:1.9rem; font-weight:800; color:#0f172a; margin:10px 0; text-transform:uppercase; letter-spacing:1px; }
    .program-name { font-size:1rem; color:var(--gray); margin:14px 0 18px; font-weight:500; }
    .instructions-box { background:#E3F0FF; border:1px solid rgba(0,91,255,0.35); padding:18px 22px; border-radius:var(--radius-md); margin:32px 0; font-size:1rem; line-height:1.8; color:#0f295f; font-weight:600; box-shadow:0 8px 20px rgba(15,23,42,0.06); }
    .question-dropdown { background:var(--card-bg); border-radius:var(--radius-lg); margin:24px 0; border:1px solid var(--border); box-shadow:var(--shadow-sm); overflow:hidden; transition:var(--transition); }
    .question-dropdown:hover { box-shadow:var(--shadow-md); transform:translateY(-2px); }
    .q-trigger { padding:22px 26px; display:flex; align-items:center; gap:16px; cursor:pointer; user-select:none; background:linear-gradient(to right,#F7FAFF,#FFFFFF); min-height:80px; }
    .q-trigger:hover { background:linear-gradient(to right,#E9F2FF,#F7FAFF); }
    .q-circle { width:42px; height:42px; background:radial-gradient(circle at 30% 0,#7FB4FF,var(--primary)); color:#fff; border-radius:50%; font-weight:700; font-size:1.3rem; display:flex; align-items:center; justify-content:center; flex-shrink:0; box-shadow:0 6px 16px rgba(0,91,255,0.5); }
    .q-content { flex:1; font-size:1.1rem; font-weight:600; line-height:1.6; color:#0f172a; padding-right:10px; }
    .marks-wrapper { display:flex; align-items:center; gap:10px; flex-shrink:0; }
    .marks-badge { background:linear-gradient(135deg,#DBEAFE,#BFDBFE); color:#1D4ED8; padding:8px 14px; border-radius:50px; font-weight:600; font-size:0.9rem; white-space:nowrap; box-shadow:0 2px 8px rgba(37,99,235,0.25); border:1px solid #93C5FD; }
    .show-answer-btn { background:linear-gradient(135deg,#E3F9EF,#C7F1DD); color:#166534; padding:8px 14px; border-radius:999px; border:1px solid var(--success); font-weight:700; font-size:0.9rem; white-space:nowrap; cursor:pointer; display:inline-flex; align-items:center; gap:6px; transition:var(--transition); box-shadow:0 2px 8px rgba(22,101,52,0.25); }
    .dropdown-icon { width:36px; height:36px; background:radial-gradient(circle at 30% 0,#7FB4FF,var(--primary)); color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.1rem; transition:var(--transition); box-shadow:0 4px 12px rgba(0,91,255,0.45); flex-shrink:0; }
    .question-dropdown.open .dropdown-icon { transform:rotate(180deg); background:var(--accent); }
    .answer-panel { max-height:0; overflow:hidden; transition:max-height 0.5s ease, padding 0.3s ease; background:#F7FAFF; border-top:1px solid var(--border); }
    .question-dropdown.open .answer-panel { max-height:8000px; }
    .answer-content { padding:28px 32px; font-size:1rem; line-height:1.9; color:#374151; background:linear-gradient(to bottom,#FFFFFF,#F7FAFF); }
    .explanation { background:var(--highlight); border-left:5px solid var(--highlight-border); padding:18px 22px; margin:20px 0; border-radius:0 var(--radius-sm) var(--radius-sm) 0; color:#92400e; font-size:1rem; line-height:1.8; }
    table { width:100%; border-collapse:collapse; margin:20px 0; }
    th, td { border:1px solid #cbd5e1; padding:12px; text-align:left; background:#f8fafc; }
    th { background:#e0e7ff; color:#1e293b; font-weight:600; }
    @media (max-width:768px) {
        .q-trigger { padding:16px; flex-wrap:wrap; gap:12px; }
        .q-circle { width:38px; height:38px; font-size:1.2rem; }
        .q-content { font-size:1rem; order:3; width:100%; }
        .marks-wrapper { order:4; margin-left:auto; }
        .dropdown-icon { order:2; margin-left:auto; }
        .answer-content { padding:20px 16px; }
    }
</style>

<div class="container">

    <div class="paper-header mt-5">
        <div><img src="./images/log.jpg" alt="" style="width:150px;"></div>
        <div class="paper-code">BCOS–183</div>
        <h1 class="paper-title">COMPUTER APPLICATIONS IN BUSINESS</h1>
        <div class="program-name">B.COM (CBCS) / BAG</div>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions • Total Marks: 100 • Time: 3 Hours
    </div>

    <!-- ==================== Q1 (a) - 20 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">1(a)</div>
            <div class="q-content">What do you understand by Computer Generation? Briefly discuss the 4th, 5th and 6th Generations of Computers. Also, compare the Analog Computer and the Digital Computer.</div>
            <div class="marks-wrapper">
                <div class="marks-badge">20 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <strong>Answer:</strong><br><br>
                    The term "computer generation" refers to various stages in the technological development of computers. Each generation is marked by significant advancements in computer hardware, software, or processing capability.<br><br>

                    <strong>1. Fourth Generation of Computers (1971–1980):</strong><br>
                    • Technology used: Microprocessors (thousands of transistors on a single chip)<br>
                    • Examples: IBM PC, Apple II, Altair 8800<br>
                    • Memory & Speed: Magnetic disks, microsecond speed<br>
                    • Languages: High-level (C, Pascal, BASIC)<br>
                    • Features: Portable, fast, low power, affordable<br><br>

                    <strong>2. Fifth Generation Computers (1981–Present):</strong><br>
                    • Technology: AI, large-scale integration, parallel processing<br>
                    • Languages: LISP, Prolog<br>
                    • Features: Voice recognition, expert systems, robotics, real-time translation<br>
                    • Examples: Supercomputers, AI assistants, quantum prototypes<br><br>

                    <strong>3. Sixth Generation Computers (Future/Present):</strong><br>
                    • Technology: Artificial neural networks, quantum computing<br>
                    • Features: Advanced robotics, nanotechnology, intelligent automation<br>
                    • Applications: Space research, intelligent systems, cloud connectivity<br><br>

                    <strong>Comparison: Analog vs Digital Computer</strong>
                    <table>
                        <tr><th>Basis</th><th>Analog Computer</th><th>Digital Computer</th></tr>
                        <tr><td>Nature of Data</td><td>Continuous data</td><td>Discrete (0s and 1s)</td></tr>
                        <tr><td>Working Principle</td><td>Measures physical quantities</td><td>Arithmetic & logical operations</td></tr>
                        <tr><td>Accuracy</td><td>Less accurate</td><td>Highly accurate</td></tr>
                        <tr><td>Speed</td><td>Faster for simulations</td><td>Efficient for general tasks</td></tr>
                        <tr><td>Output</td><td>Graphical/continuous</td><td>Numerical/symbolic</td></tr>
                    </table>
                    <strong>Conclusion:</strong> The journey from 4th to 6th generation shows evolution from microprocessors to intelligent AI-driven systems.
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q1 (b) - 20 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">1(b)</div>
            <div class="q-content">Describe the term ‘Depreciation Accounting’. Also, compare Straight Line Method and Diminishing Balance Method for Depreciation Accounting.</div>
            <div class="marks-wrapper">
                <div class="marks-badge">20 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <strong>Answer:</strong><br><br>
                    <strong>Depreciation Accounting</strong> is the systematic allocation of the cost of a fixed asset over its useful life due to wear and tear, obsolescence, or passage of time.<br><br>

                    <strong>Objectives:</strong><br>
                    • Show true financial position<br>
                    • Match cost with revenue<br>
                    • Create replacement reserve<br>
                    • Avoid overstatement of profits<br><br>

                    <strong>Two Major Methods:</strong><br><br>

                    <strong>1. Straight Line Method (SLM)</strong><br>
                    Formula: (Cost – Scrap Value) ÷ Useful Life<br>
                    • Equal annual depreciation<br>
                    • Simple and uniform<br>
                    • Suitable for buildings, furniture<br><br>

                    <strong>2. Diminishing Balance Method (DBM)</strong><br>
                    • Depreciation on reducing book value<br>
                    • Higher in initial years<br>
                    • Book value never zero<br>
                    • Suitable for machinery, vehicles<br><br>

                    <strong>Comparison Table:</strong>
                    <table>
                        <tr><th>Basis</th><th>Straight Line Method</th><th>Diminishing Balance Method</th></tr>
                        <tr><td>Depreciation Amount</td><td>Same every year</td><td>Decreases every year</td></tr>
                        <tr><td>Basis of Charge</td><td>Original cost</td><td>Written down value</td></tr>
                        <tr><td>Book Value at End</td><td>Can become zero</td><td>Never zero</td></tr>
                        <tr><td>Ease</td><td>Very simple</td><td>Slightly complex</td></tr>
                        <tr><td>Suitable For</td><td>Uniform usage assets</td><td>Rapid obsolescence assets</td></tr>
                    </table>
                    <strong>Memory Tip (T-O-M-S-D-C):</strong> True position → Objectives → Methods → SLM equal → DBM declining → Comparison
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q2 (a) Compiler vs Interpreter - 5 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2(a)</div>
            <div class="q-content">Compare and contrast the Compiler and Interpreter</div>
            <div class="marks-wrapper">
                <div class="marks-badge">5 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <table>
                        <tr><th>Basis</th><th>Compiler</th><th>Interpreter</th></tr>
                        <tr><td>Translation</td><td>Entire program at once</td><td>Line by line</td></tr>
                        <tr><td>Speed</td><td>Faster execution</td><td>Slower</td></tr>
                        <tr><td>Error Display</td><td>All errors together</td><td>One error at a time</td></tr>
                        <tr><td>Output File</td><td>Creates .exe file</td><td>No separate file</td></tr>
                        <tr><td>Examples</td><td>C, C++</td><td>Python, BASIC</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q2 (b) Android vs Windows OS - 5 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2(b)</div>
            <div class="q-content">Compare and contrast Android OS and Windows OS</div>
            <div class="marks-wrapper">
                <div class="marks-badge">5 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <table>
                        <tr><th>Basis</th><th>Android OS</th><th>Windows OS</th></tr>
                        <tr><td>Developer</td><td>Google</td><td>Microsoft</td></tr>
                        <tr><td>Platform</td><td>Linux-based, Open-source</td><td>Proprietary</td></tr>
                        <tr><td>Interface</td><td>Touch-based</td><td>Keyboard + Mouse GUI</td></tr>
                        <tr><td>App Store</td><td>Google Play Store</td><td>Microsoft Store</td></tr>
                        <tr><td>Devices</td><td>Mobiles, Tablets</td><td>Desktops, Laptops</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q2 (c) Sole Proprietorship vs Partnership - 5 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2(c)</div>
            <div class="q-content">Compare and contrast Sole Proprietorship and Partnership</div>
            <div class="marks-wrapper">
                <div class="marks-badge">5 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <table>
                        <tr><th>Basis</th><th>Sole Proprietorship</th><th>Partnership</th></tr>
                        <tr><td>Ownership</td><td>Single person</td><td>2 or more persons</td></tr>
                        <tr><td>Decision Making</td><td>Quick & independent</td><td>Mutual agreement</td></tr>
                        <tr><td>Liability</td><td>Unlimited</td><td>Shared</td></tr>
                        <tr><td>Capital</td><td>Limited</td><td>More capital</td></tr>
                        <tr><td>Continuity</td><td>Ends with owner</td><td>Continues with agreement</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q2 (d) DSS vs MIS - 5 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2(d)</div>
            <div class="q-content">Compare and contrast DSS and MIS</div>
            <div class="marks-wrapper">
                <div class="marks-badge">5 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <table>
                        <tr><th>Basis</th><th>DSS</th><th>MIS</th></tr>
                        <tr><td>Purpose</td><td>Semi-structured decisions</td><td>Routine reports</td></tr>
                        <tr><td>Data</td><td>Internal + External</td><td>Internal only</td></tr>
                        <tr><td>Decision Type</td><td>Analytical</td><td>Programmed</td></tr>
                        <tr><td>Output</td><td>Models, simulations</td><td>Periodic summaries</td></tr>
                        <tr><td>Flexibility</td><td>High</td><td>Standardized</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== Q2 (e) NEFT vs RTGS - 5 Marks ==================== -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2(e)</div>
            <div class="q-content">Compare and contrast NEFT and RTGS</div>
            <div class="marks-wrapper">
                <div class="marks-badge">5 MARKS</div>
                <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="explanation">
                    <table>
                        <tr><th>Basis</th><th>NEFT</th><th>RTGS</th></tr>
                        <tr><td>Settlement</td><td>Batch-wise</td><td>Real-time individual</td></tr>
                        <tr><td>Minimum Limit</td><td>No minimum</td><td>₹2 lakh</td></tr>
                        <tr><td>Speed</td><td>Few hours</td><td>Instant</td></tr>
                        <tr><td>Suitability</td><td>Small payments</td><td>High-value transfers</td></tr>
                        <tr><td>Availability</td><td>24×7</td><td>24×7</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- ==================== Q3 (a) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(a)</div>
        <div class="q-content">What are the objectives of a DPR (Detailed Project Report)? List and explain the various components involved in the formulation of DPR.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> A Detailed Project Report (DPR) is a comprehensive report prepared before the implementation of any project. It contains a detailed plan encompassing technical, financial, managerial, and economic aspects. The DPR serves as a plan for the project's execution, and it helps investors and management make informed decisions.<br><br>

                <strong>1. DPR objectives</strong><br>
                • Feasibility Analysis: To determine if the project is technically feasible and financially viable.<br>
                • Resource Management: Identifying manpower, machinery and raw materials needed.<br>
                • Financial Assessment: To estimate the project cost, source of finance and expected profitability.<br>
                • Implementation Plan: To provide a timeframe for the completion of a project.<br>
                • Risk Assessment: To evaluate project risks and suggest mitigation strategies.<br>
                • A Decision-Making Instrument: To offer a solid base for investors and management to approve financing.<br>
                • Monitoring Control: As a reference to track project progress and performance.<br><br>

                <strong>2. DPR components</strong><br><br>
                • <strong>Executive Summary:</strong> Overview and background of the project.<br>
                • <strong>Promoter’s Profile:</strong> Details regarding the promoter's experience and capability.<br>
                • <strong>Demand and Market Analysis:</strong> Evaluation of the target market, competitors, and demand forecast.<br>
                • <strong>Technical Feasibility Description</strong> and description of the technology, production processes, and equipment required.<br>
                • <strong>Financial Detail:</strong> Project Cost, Funding Source, Working Capital, and Proposed Income Statements<br>
                • <strong>Organizational Plan and Management Plan</strong> Structures, manpower requirements, and administrative setup<br>
                • <strong>Implementation Plan:</strong> Milestone chart (or timeline) for each phase of project execution.<br>
                • <strong>Impact on the Environment and Social Welfare:</strong> An Analysis of Environmental Compliance and Community Benefits<br><br>

                <strong>Conclusion:</strong> A DPR is critical for project formulation, decisions and execution. The DPR ensures that resources are optimized, risks are minimized, and the project is successful by providing a comprehensive plan based on financial and technical analyses.<br><br>
                <strong>Memory Help (Acronym: "F-F-M-T-F-O-I-S"):</strong><br>
                F- Feasibility report • F - Financial evaluation • M Market and Demand Analysis • T- Technical feasibility • F - Funding details • O Organizational plan • I - Implementation schedule • S – Social and environmental impact<br>
                <strong>Mnemonic:</strong> "Feasible Finance Management Takes Intelligent Future-Oriented Steps."
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q3 (b) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Discuss the role of YouTube in business development. Also, describe the role of Google Adsense in generating revenue through the YouTube channel.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> YouTube by Google is one of the most popular video-sharing platforms and marketing tools available to modern businesses. It allows businesses to create, advertise, and share products and services around the world. YouTube is a powerful tool for acquiring new customers and building a brand because of its wide audience and high engagement.<br><br>

                <strong>1. YouTube's role in business development:</strong><br><br>
                • <strong>Promotion of Brands:</strong> Aids in promoting the company's products and services to a worldwide audience.<br>
                • <strong>Customer engagement:</strong> Interactive content like tutorials, reviews, and testimonials builds trust.<br>
                • <strong>Cost-Effective Advertising:</strong> The free platform reduces advertising costs compared to traditional media.<br>
                • <strong>Educational Value and Demonstrative Value:</strong> Businesses may explain product usage by video demonstrations.<br><br>

                <strong>2. Google AdSense and Revenue Generation</strong><br><br>
                • <strong>Monetization Tools:</strong> Google AdSense is a tool that allows video creators to earn money by displaying advertisements on their videos.<br>
                • <strong>Ad Positioning:</strong> Advertisements appear before, after, or during videos based on engagement.<br>
                • <strong>Revenue Model</strong> Income comes from views (CPM) and clicks on ads (CPC).<br>
                • <strong>Channel eligibility:</strong> Approval is based on a minimum of subscribers and viewing hours.<br><br>

                <strong>Summary:</strong> YouTube's transformation into a digital-marketing engine has increased brand visibility, engagement and reach globally. Google AdSense integration allows businesses and creators to turn viewership into a substantial income.<br><br>
                <strong>Memory Help (Acronym: "B-C-C-G-L-D-A"):</strong><br>
                B – Brand Promotion • C - Customer engagement • C – Cost-effective marketing • G -- Global reach • L - Lead generation • D- Data Analytics • A - AdSense monetization<br>
                <strong>Mnemonic tip:</strong> "Business Channels create global leads and digital advertising."
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q4 (a) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">4(a)</div>
        <div class="q-content">Which factors contributed to the adoption of Plastic Money on a large scale? Discuss any four e-Payment methods.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction - Plastic Money</strong> Plastic money refers to the payment cards, like debit, credit and prepaid cards, which have replaced actual cash. Plastic money is a convenient way to pay for goods and services around the world.<br><br>

                <strong>1. Factors that contribute to adoption</strong><br>
                • Convenience: Easily carried and used anywhere, at any time.<br>
                • Security reduces theft risks compared with cash handling<br>
                • Online Payments: Allows seamless e-commerce payments.<br>
                • Reward and Benefits: Cashbacks (reward points), offers, and other incentives attract users.<br>
                • Banking innovation: A Widespread network of ATM and POS encourages use.<br><br>

                <strong>2. Four Electronic Payment Methods</strong><br>
                • <strong>Debit Cards:</strong> Direct Payment from the User's Bank Account<br>
                • <strong>Card de crédit:</strong> Permits the user to borrow money up to a pre-approved limit.<br>
                • <strong>Mobile Wallets</strong> Digital wallets like Paytm and Google Pay store money electronically.<br>
                • <strong>Online Banking (NEFT/RTGS/IMPS):</strong> Facilitates instantaneous fund transfers between accounts.<br><br>

                <strong>Conclusion:</strong> The rise of plastic money reflects the technological advances and consumer preferences for speed, security, and convenience when it comes to financial transactions.<br><br>
                <strong>Memory Help (Acronym: "C-S-O-R-B"):</strong><br>
                C - Convenience • S – Security • O- Online transactions • R- Rewards • B – Banking innovation<br>
                <strong>Mnemonic Tip:</strong> "Cashless System Offers Reliable Benefits."
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q4 (b) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">4(b)</div>
        <div class="q-content">How does a loan statement differ from the lease statement? List and explain the various components of any loan/lease statement.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> A Loan Statement represents borrowing, where ownership of an asset belongs to a borrower. A Lease Statement shows payments for using an asset without transferring ownership. Both are necessary for tracking payments and financial obligations.<br><br>

                <strong>1. Differentiate between a loan and a lease statement</strong><br>
                <table>
                    <tr><th>Basis</th><th>Statement of Loan</th><th>Lease Declaration</th></tr>
                    <tr><td>Ownership</td><td>Asset ownership remains with the borrower.</td><td>Ownership remains with the lessor.</td></tr>
                    <tr><td>Payment Type</td><td>Repayment includes principal + interest.</td><td>Payment includes rent and lease charges.</td></tr>
                    <tr><td>Tenure</td><td>Fixed repayment tenure.</td><td>Flexible tenure as per the lease agreement.</td></tr>
                    <tr><td>Balance Sheet Impact</td><td>Shown as a liability.</td><td>Treated as an expense in the income statement.</td></tr>
                </table><br><br>

                <strong>2. Components in a Lease/Loan Statement</strong><br><br>
                • Principal amount: the original loaned or leased sum.<br>
                • Interest or lease charges: Payment for using money or an asset.<br>
                • Tenure: The total period of repayment.<br>
                • Installment details: Amount, frequency and periodic payment.<br>
                • Outstanding Balance: the remaining amount still to be paid<br>
                • Due Dates & Penalties: Scheduled payments with penalties if late.<br><br>

                <strong>Conclusion:</strong> While the ownership and financial reporting of lease and loan statements may differ, both are transparent in their payment schedules as well as financial management.<br><br>
                <strong>Memory Help (Acronym: "O-P-T-I-O-D")</strong><br>
                O- Ownership • P – Payment type • T - Tenure • I - Installment details • O -- Outstanding balance • D - Due dates<br>
                <strong>Mnemonic:</strong> "Ownership patterns track installments by deadline."
            </div>
        </div>
    </div>
</div>




<!-- ==================== Q5 (a) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(a)</div>
        <div class="q-content">Types of computer networks</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 5 (a)</strong><br>
                <strong>Introduction:</strong> A Computer Network connects several computers or devices in order to share information, data and resources. It plays an important role in business operations, communication and storage. They are classified based on their area of coverage, purpose, or connectivity.<br><br>

                <strong>Computer Networks Types</strong><br><br>
                • <strong>Personal Area Networks (PANs):</strong> Small networks covering the workspace of a single individual (e.g., Bluetooth or mobile hotspot).<br>
                • <strong>Local Area Networks (LAN):</strong> Connect computers within a building.<br>
                • <strong>Metropolitan Area Networks (MAN):</strong> Link several LANs within a city by using wireless or cable technology.<br>
                • <strong>Wide Area Networks (WANs):</strong> Cover a large area, like a country; the Internet, for example, is the best.<br>
                • <strong>Storage Area Network SAN:</strong> A high-speed Network for centralized data backup and storage.<br>
                • <strong>Virtual Private Network -</strong> Encrypted Internet connections for secure communication.<br><br>

                <strong>Conclusion:</strong> Computer networks increase collaboration, information sharing and cost efficiency. Computer networks are at the core of global connectivity within business and communications systems.<br><br>

                <strong>Memory Help (Acronym: "P-L-M-W-S-V")</strong> - Personal, Local, Metropolitan, Wide, Storage, Virtual.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q5 (b) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(b)</div>
        <div class="q-content">Types of operating systems</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 5(B)</strong><br>
                <strong>Introduction:</strong> An operating system (OS)is the system software that manages computer hardware and coordinates user-system interaction. It ensures the smooth execution of programs and overall control of the system.<br><br>

                <strong>Types of Operating Systems</strong><br><br>
                • <strong>Batch Operating:</strong> Executes jobs in groups automatically without user input.<br>
                • <strong>Multiprogramming operating system:</strong> Can run multiple programs simultaneously,, and increases CPU utilization.<br>
                • <strong>A multitasking OS</strong> allows a user to perform many tasks at the same time (e.g., printing and typing).<br>
                • <strong>Time-sharing:</strong> Share CPU time between multiple users:<br>
                • <strong>Real Time Operating System:</strong> Performs tasks in real time; used for robotics, defence, and control systems.<br>
                • <strong>Distribution OS:</strong> manages several computers connected as one system.<br>
                • <strong>Network OS</strong> Controls, manages, and coordinates the operations of computers that are connected to a network.<br><br>

                <strong>Summary:</strong> Operating Systems ensure smooth and efficient processing, optimal use of hardware, and the user's convenience. These systems form the foundation of all computer functions.<br><br>

                <strong>Memory Help (Acronym: "B-M-M-T-R-D-N")</strong> - Batch, Multiprogramming, Multitasking, Time-sharing, Real-time, Distributed, Network.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q5 (c) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(c)</div>
        <div class="q-content">GDPR (General Data Protection Regulation)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 5 (C):</strong><br>
                <strong>Introduction:</strong> The General Data Protection Regulation, a European Union legislation introduced in May 2018, protects the privacy of individuals and their personal information in a digital environment. It increases control over the way organizations collect data.<br><br>

                <strong>Main Provisions:</strong><br><br>
                • <strong>Data Security:</strong> Provides a secure and transparent way to use personal data.<br>
                • <strong>Consent:</strong> Businesses must get clear consent before collecting any data.<br>
                • <strong>Right to access:</strong> Individuals may view, update or delete data at any time.<br>
                • <strong>Data Transferability:</strong> Enables the transfer of information between service providers.<br>
                • <strong>Right to Erasure</strong> Individuals have the right to request data deletion (right to be forgotten).<br>
                • <strong>Penalties.</strong> Failure to comply with the law can result in heavy fines.<br>
                • <strong>Global impact:</strong> Encourages global businesses to improve their privacy policy.<br><br>

                <strong>Conclusion:</strong> GDPR encourages trust, transparency and accountability with data handling. This ensures that the rights of individuals and digital security will be respected.<br><br>

                <strong>Memory Help (Acronym "P-C.A.P.E.P")</strong> – Protection, Consent. Access. Portability. Erasure. Penalty.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q5 (d) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(d)</div>
        <div class="q-content">CAPTCHA code and its purpose</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 5.d):</strong><br>
                <strong>Introduction:</strong> CAPTCHA stands for Completely Automatic Public Turing Test to Tell Computers and Humans Apart. The security feature is used to verify if the user is a human and prevent automated bots from exploiting websites.<br><br>

                <strong>Types and their Purpose</strong><br><br>
                • <strong>Stop Spam:</strong> blocks bots from posting fake forms or comments.<br>
                • <strong>Increase Security:</strong> Provides protection against automated attacks and unauthorized access.<br>
                • <strong>User Verification:</strong> Confirms users' authenticity by solving text-based, image-based puzzles and tasks.<br>
                • <strong>Reduce server loads:</strong> Limits the number of requests made by bots.<br><br>

                <strong>Types:</strong><br>
                • Text-based: Type distorted letters/numbers.<br>
                • Image-based S: Select specific Images<br>
                • Audio CAPTCHA for users with visual impairments.<br>
                • reCAPTCHA: Google's AI-based verification.<br><br>

                <strong>Conclusion:</strong> :Captcha is essential for website security, data protection, and maintaining real user interaction in online systems.<br><br>

                <strong>Memory Help (Acronym: "P. E.V.R.T"):</strong> Prevention, Enhancement Verification Reduction Types.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q5 (e) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(e)</div>
        <div class="q-content">Types of Internet services</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 5 (e)</strong><br>
                <strong>Introduction:</strong> The Internet provides a variety of services for communication, learning, entertainment, and business. These services have become indispensable for both personal and business life.<br><br>

                <strong>Major Internet Services</strong><br><br>
                • <strong>Email:</strong> allows electronic messages to be sent between users in different countries.<br>
                • <strong>The World Wide Web</strong> provides access to websites and information using browsers.<br>
                • <strong>FTP (File Transfer Protocol):</strong> Supports uploading/downloading files between computers.<br>
                • <strong>Chatting and Messaging:</strong> Real-time text communication through apps like WhatsApp Messenger.<br>
                • <strong>VoIP</strong> is a voice-over-IP protocol. Internet-based video calls (e.g., Skype).<br>
                • <strong>Social Media:</strong> Global Connectivity: Platforms including Facebook and Instagram.<br>
                • <strong>E-commerce</strong> is online shopping and digital business transactions.<br><br>

                <strong>Summary:</strong> Internet Services revolutionize communication, trade and information exchange, creating a connected society and knowledge-driven.<br><br>

                <strong>Memory Help (Acronym: "E.W.F.C.V.S.E")</strong> E-mails, Webs, File transfers, Chats, VoIP, Social Media, E-commerce.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 (a) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(a)</div>
        <div class="q-content">ccTLD and gTLD</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 6 (a):</strong><br>
                <strong>Introduction.</strong> The TLD (Top-Level Domain) is at the top of the Internet domain name system. The ccTLD is a Country Code Top Level Domain. The generic Top Level Domain is based on its purpose and usage.<br><br>

                <table>
                    <tr><th>Basis</th><th>Country Code TLD (ccTLD)</th><th>Generic TLD (gTLD)</th></tr>
                    <tr><td>Meaning</td><td>Represents the name of a country or region.</td><td>Represents general categories, groups, or organizations.</td></tr>
                    <tr><td>Examples</td><td>.in (India), .uk (United Kingdom)</td><td>.com, .org, .edu</td></tr>
                    <tr><td>Control</td><td>Managed by national authorities.</td><td>Managed by international bodies like ICANN.</td></tr>
                    <tr><td>Purpose</td><td>Used for region-specific websites.</td><td>Used for global or generic purposes.</td></tr>
                    <tr><td>Identification</td><td>Two-letter domain code.</td><td>Usually three letters or more.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> ccTLD represents country identity. gTLD is used to denote a global or organizational purpose.<br><br>
                <strong>Memory Help (Acronym: "M-E-C-P-I")</strong> - Meaning, Example, Control, Purpose, Identification.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 (b) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(b)</div>
        <div class="q-content">WAN and LAN</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 6(B)</strong><br>
                <strong>Introduction:</strong> A network is a computer network that connects devices for the purpose of sharing data and resources. Wide Area Network and Local Area Network have different coverage areas and connectivity.<br><br>

                <table>
                    <tr><th>Basis</th><th>Local Area Network (LAN)</th><th>Wide Area Network (WAN)</th></tr>
                    <tr><td>Coverage Area</td><td>Covers small areas like offices, buildings, or campuses.</td><td>Covers large geographic areas such as cities, states, or countries.</td></tr>
                    <tr><td>Ownership</td><td>Privately owned and managed.</td><td>Can be privately or publicly owned; often shared infrastructure.</td></tr>
                    <tr><td>Speed</td><td>High data transmission speed.</td><td>Relatively lower speed compared to LAN.</td></tr>
                    <tr><td>Cost</td><td>Lower installation and maintenance costs.</td><td>Expensive due to the wide infrastructure.</td></tr>
                    <tr><td>Examples</td><td>Office or campus network.</td><td>Internet or banking network systems.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> LAN connects local locations, while WAN links distant locations via global communication networks.<br><br>
                <strong>Memory Help (Acronym: "C-O-S-C-E")</strong> - Coverage, Ownership, Speed, Cost, Example.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 (c) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(c)</div>
        <div class="q-content">NPV and IRR</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS: 6(C)</strong><br>
                <strong>Introduction.</strong> NPV and IRR are two financial tools that can be used for investment decisions to determine project profitability.<br><br>

                <table>
                    <tr><th>Basis</th><th>NPV (Net Present Value)</th><th>IRR (Internal Rate of Return)</th></tr>
                    <tr><td>Meaning</td><td>The difference between the present value of cash inflows and outflows.</td><td>Discount rate at which NPV becomes zero.</td></tr>
                    <tr><td>Decision Rule</td><td>Accept if NPV > 0.</td><td>Accept if IRR > cost of capital.</td></tr>
                    <tr><td>Measure Type</td><td>Absolute measure (value in rupees).</td><td>Relative measure (percentage rate).</td></tr>
                    <tr><td>Computation</td><td>Requires a predetermined discount rate.</td><td>Determines discount rate internally.</td></tr>
                    <tr><td>Interpretation</td><td>Shows total value gain in monetary terms.</td><td>Shows the earning rate of the investment.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> The NPV represents the actual value added; the IRR is used to compare investment rates.<br><br>
                <strong>Memory Help (Acronym: "M D M C I")</strong> – Meaning, Decision Rule, Measurement, Calculation, Interpretation.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 (d) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(d)</div>
        <div class="q-content">Current Ratio and Quick Ratio</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 6 (D)</strong><br>
                <strong>Introduction:</strong> Both the current ratio and the quick ratio measure liquidity. They differ in the assets included.<br><br>

                <table>
                    <tr><th>Basis</th><th>Current Ratio</th><th>Quick Ratio</th></tr>
                    <tr><td>Meaning</td><td>Compares current assets with current liabilities.</td><td>Compares quick (liquid) assets to current liabilities.</td></tr>
                    <tr><td>Formula</td><td>Current Assets ÷ Current Liabilities</td><td>(Current Assets − Inventory − Prepaid Expenses) ÷ Current Liabilities</td></tr>
                    <tr><td>Components</td><td>Includes all current assets.</td><td>Excludes inventory and prepaid expenses; considers only liquid assets.</td></tr>
                    <tr><td>Ideal Ratio</td><td>2: 1</td><td>1: 1</td></tr>
                    <tr><td>Significance</td><td>Measures overall liquidity.</td><td>Measures immediate liquidity and short-term solvency.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> Current Ratio measures the general liquidity of the company, while Quick Ratio measures the ability to pay off liabilities immediately.<br><br>
                <strong>Memory Help (Acronym: "M.F.C.I.S")</strong>- Meaning, Formulas. Components. Ideal ratio. Significance.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 (e) – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(e)</div>
        <div class="q-content">Authorization and Authentication (with respect to IT Security)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 6 (E)</strong><br>
                <strong>Introduction:</strong> In Information Security, Authentication as well as Authorization represent the key control processes for ensuring identity management and access management.<br><br>

                <table>
                    <tr><th>Basis</th><th>Authentication</th><th>Authorization</th></tr>
                    <tr><td>Meaning</td><td>Verifies the identity of the user.</td><td>Grants access to specific resources.</td></tr>
                    <tr><td>Process</td><td>Occurs first in the security process.</td><td>Occurs after authentication.</td></tr>
                    <tr><td>Verification</td><td>Confirms “Who you are.”</td><td>Confirms “What you can do.”</td></tr>
                    <tr><td>Methods Used</td><td>Passwords, biometrics, OTPs.</td><td>Access rights, roles, and permissions.</td></tr>
                    <tr><td>Example</td><td>Logging into an account.</td><td>Accessing restricted files after login.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> Authentication and authorization define access boundaries. Together, they enhance IT system security.<br><br>
                <strong>Memory Help (Acronym: "M.P.V.M.E")</strong>- Meaning, Processes, Verification, Methods and Example.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q7 (a) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(a)</div>
        <div class="q-content">When do we use mail merge? Describe the components of mail merge. Why is it required to create a data source? Explain.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 7:</strong><br>
                <strong>Introduction</strong> Mail Merge allows users to create multiple personalized document types (like letters, labels, envelopes and e-mails) by merging a primary document into a source of data. It is a time-saving feature that ensures accuracy and uniform formatting throughout all documents. This feature can be used for business communication, mass mail, and report creation.<br><br>

                <strong>1. What is Mail Merge Used For?</strong><br><br>
                • Mail merging is used whenever a single document or message needs to be sent out to multiple recipients, but with customized details.<br>
                • Examples: Sending clients letters with their names and individual addresses.<br>
                • Create admission forms, payroll slips, and invoices for several employees.<br>
                • Customizing invitations and notices.<br><br>

                <strong>2. Components of mail merge</strong><br><br>
                • <strong>Document principal:</strong> the base document, which contains all common content (like letter text and templates).<br>
                • <strong>Source of data:</strong> the file that contains variables such as names or addresses.<br>
                • <strong>Merge field:</strong> Placeholders are inserted within the document to pull in data.<br>
                • <strong>Merged Document:</strong> The final output, which combines the main documents with individual data entry.<br>
                • <strong>Mail-Merge Wizard:</strong> In MS Word, a tool that guides users through the merge process.<br><br>

                <strong>3. Why Create a Data Source</strong><br><br>
                • Personalization allows each document to reflect individual details.<br>
                • Automation reduces repetitive typing errors and manual mistakes.<br>
                • Efficiency allows for the instant generation of hundreds of documents.<br>
                • Flexibility: Data import from Excel, Access and text files is possible.<br><br>

                <strong>Conclusion:</strong> Mail Merge simplifies the mass communication process by merging standard template data with recipient-specific information. It is widely used for administrations, marketing and customer correspondence. This makes document management more accurate and faster.<br><br>
                <strong>Memory Help (Acronym: "M-D-M-M-W")</strong><br>
                M - Main document • D - Data source • M- Merge fields • M – Merged document • W – Wizard tool<br>
                <strong>Mnemonic:</strong> "Merge mail documents more wisely."
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q7 (b) – 10 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(b)</div>
        <div class="q-content">Explain the following with a suitable example for each:</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Q(b) Explain the following with a suitable example for each: (2x5= 10 MARKS)</strong><br><br>

                <strong>(i) Net Profit Ratio</strong><br>
                <strong>ANS 7 (i)</strong><br>
                <strong>Introduction:</strong> Net Profit Ratio is a ratio that shows the relationship between net profits and net sales. It measures the efficiency of a firm in converting revenues into profits after all expenses.<br>
                <strong>Formula:</strong> Net Profit Ratio = (Net Profit / Net Sales) × 100<br>
                For example, if net profit = Rs50,000, and sales = Rs5,00,000.000, the ratio is 10%.<br>
                <strong>Conclusion:</strong> A higher ratio indicates better profitability.<br>
                <strong>Keywords:</strong> Profitability, Expenses, Efficiency.<br><br>

                <strong>(ii) Gross Profit Ratio</strong><br>
                <strong>ANS:</strong><br>
                <strong>Introduction.</strong> Gross Profit Ratio explains the relationship between net sales and gross profits. It is a measure of how efficiently a business produces and sells its goods.<br>
                <strong>Formula:</strong> Gross Profit Ratio = (Gross Profit / Net Sales) × 100<br>
                Example Gross Profit Rs1,00,000.000 on Sales Rs5,00,000.000 - 20.0%.<br>
                <strong>Conclusion:</strong> A Higher ratio demonstrates effective cost control.<br>
                <strong>Keywords:</strong> Sales, Gross Profit, Efficiency.<br><br>

                <strong>ANS 7(B)</strong><br>
                <strong>(iii) Identity Theft</strong><br>
                <strong>ANS</strong><br>
                <strong>Introduction:</strong> Identity Theft occurs whenever someone unlawfully uses another's personal or financial information to commit fraud or a crime.<br>
                Example: Using stolen Aadhaar numbers or credit cards for unauthorized transactions.<br>
                <strong>Conclusion:</strong> Threatens the privacy of data and requires strong cybersecurity.<br>
                <strong>Keywords:</strong> Fraud, Data, Security.<br><br>

                <strong>(iv) e-Wallets</strong><br>
                <strong>ANS:</strong><br>
                <strong>Introduction:</strong> A eWallet, or digital wallet, is an online payment app that stores user data for secure electronic transactions.<br>
                Paytm and Google Pay are examples of services that allow bill payment and transfers.<br>
                <strong>Conclusion:</strong> Promotes quick, easy and cashless payments.<br>
                <strong>Keywords:</strong> Digital, Payment, Convenience.<br><br>

                <strong>(v) Open Source Software</strong><br>
                <strong>ANS:</strong> <strong>Introduction:</strong> Open Source Software allows the user to freely access, modify and distribute source codes according to licensing terms.<br>
                Example: Linux, Mozilla Firefox, LibreOffice.<br>
                <strong>Conclusion:</strong> Encourages cost savings and transparency when using software.<br>
                <strong>Keywords:</strong> Open Access, Modification and Collaboration.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q8 (a) – 12 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(a)</div>
        <div class="q-content">In the context of any spreadsheet package, answer the following:</div>
        <div class="marks-wrapper">
            <div class="marks-badge">12 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS: 8</strong><br><br>

                <strong>(i) How do functions differ from formulas? (4 MARKS)</strong><br>
                <strong>Introduction:</strong> In spreadsheets (such as MS Excel or LibreOffice Calc), both Functions and Formulas are used for calculations. They differ, however, in their usage and structure. Functions are predefined operations, while formulas can be defined by the user.<br><br>

                <table>
                    <tr><th>Aspect</th><th>Functions</th><th>Formulas</th></tr>
                    <tr><td>Definition</td><td>Predefined (built-in) operations provided by the spreadsheet software</td><td>User-created expressions to perform calculations</td></tr>
                    <tr><td>Syntax Example</td><td>Uses specific function names with arguments<br>=SUM(A1:A5)<br>=AVERAGE(B1:B5)<br>=VLOOKUP(...)<br>=IF(...)</td><td>Uses arithmetic operators and/or cell references<br>=A1+A2+A3+A4+A5<br>=B1*B2+C1<br>=(A1+A2)/2</td></tr>
                    <tr><td>Purpose</td><td>Perform standard, repeatable, and often complex computations quickly</td><td>Perform customized or simple calculations tailored to specific needs</td></tr>
                    <tr><td>Ease of Use</td><td>Easier and faster, especially for complex or repetitive tasks (error-free, optimized)</td><td>Requires manual creation; more prone to errors, but offers full flexibility</td></tr>
                    <tr><td>Reusability</td><td>Highly reusable across sheets and workbooks</td><td>Can be copied, but logic must be built from scratch each time</td></tr>
                    <tr><td>Examples</td><td>=SUM(B1:B10)<br>=AVERAGE(B1:B5)<br>=COUNTIF(C1:C100,">50")<br>=TODAY()</td><td>=B1+B2+B3+B4+B5<br>=(Sales - Costs) * Tax_Rate<br>=A1^2 + A2^2</td></tr>
                </table><br>

                <strong>Conclusion:</strong> Functions are fast and accurate, but formulas can be used to calculate in a flexible way.<br>
                <strong>Memory Help (Acronym: "M-S-E-E-P")</strong> - Meaning, Syntax, Ease, Example, Purpose.<br><br>

                <strong>(ii) Difference between Formulae and Array Formulae (4 MARKS)</strong><br>
                <strong>ANS8(A)(II)</strong><br>
                <strong>Introduction:</strong> A Formula is used to calculate single data values. An array formula can process multiple data values at the same time.<br><br>

                <table>
                    <tr><th>Basis</th><th>Formulae</th><th>Array Formulae</th></tr>
                    <tr><td>Processing</td><td>Uses single-value or cell references.</td><td>Multi-array or range processing.</td></tr>
                    <tr><td>Output</td><td>It only gives a result.</td><td>It can produce a single result or several results.</td></tr>
                    <tr><td>Syntax</td><td>Regular formulae (e.g.</td><td>Enter the code enclosed by using Ctrl+Shift+Enter.</td></tr>
                    <tr><td>Usage</td><td>Calculate the amount of money you need to spend.</td><td>You can use complex matrix or data analysis tasks.</td></tr>
                    <tr><td>Example</td><td>=A1+A2</td><td>=SUM (A1:A5*B1:B5)</td></tr>
                </table><br>

                <strong>Conclusion:</strong> array formulae can be used to calculate large amounts of data and reduce the number of formulae.<br>
                <strong>Memory Help (Acronym: "M.O.S.U.E")</strong> Meaning, Output Syntax Usage Example.<br><br>

                <strong>(iii) Compare absolute addressing and relative addressing. (4 MARKS)</strong><br>
                <strong>ANS:</strong><br>
                <strong>Introduction:</strong> When formulas are copied, the addresses of the cells are copied. It comes in two forms -- absolute or relative addressing.<br><br>

                <table>
                    <tr><th>Aspect</th><th>Absolute Addressing</th><th>Relative Addressing</th></tr>
                    <tr><td>Definition / Behavior when copied</td><td>Cell reference remains fixed (does not change) when the formula is copied to another cell</td><td>Cell reference automatically adjusts based on the new position when the formula is copied</td></tr>
                    <tr><td>Symbol Used</td><td>Dollar signs $ lock the column and/or row<br>Examples:<br>• $A$1 – locks both column and row<br>• A$1 – locks only row<br>• $A1 – locks only column</td><td>No dollar signs.<br>Example: A1</td></tr>
                    <tr><td></td><td>Fixed / Constant reference: Ideal for referring to a single fixed value (e.g., tax rate, discount %, conversion factor)</td><td>Dynamic reference adjusts automatically – perfect for sequential or repetitive calculations across rows/columns.</td></tr>
                </table><br>

                <strong>Conclusion:</strong> Absolute addresses ensure fixed references, whereas relative addressing permits flexible formula replication.<br>
                <strong>Memory Help (Acronym: "M-S-F-E-A")</strong> - Meaning, Symbol, Flexibility, Example, Application.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q8 (b) – 8 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(b)</div>
        <div class="q-content">What is an operating system? List the functions of the operating system. Also, explain any one of the listed functions.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">8 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>ANS 8(B)</strong><br>
                An operating system (OS) serves as a user interface to the computer hardware. It controls the use of resources, such as CPUs, memory and input/output units, to execute programs. OS provides a friendly environment to interact with, which is crucial for smooth and error-free computer operation. Examples of OS include Windows, Linux, UNIX, and macOS.<br><br>

                <strong>1. The Operating System Functions</strong><br><br>
                1. <strong>Process Manager:</strong> controls creation, scheduling, termination, and CPU efficiency.<br>
                2. <strong>Management of memory:</strong> Allocates and monitors the main RAM for different programs to ensure optimal usage.<br>
                3. <strong>Data Management:</strong> Groups and organizes data in files and directories for easy manipulation and access.<br>
                4. <strong>Management of Devices:</strong> manages input/output through drivers for devices and maintains resource queues.<br>
                5. <strong>Management of data input/output:</strong> coordinates and controls the operations for data input/output.<br>
                6. <strong>Safety and Protection:</strong> Secures the system and its data against unauthorized access.<br>
                7. <strong>User interface management:</strong> Offers a command line or a graphical user interface.<br>
                8. <strong>Error Detection:</strong> Detects and corrects errors that occur during the execution of a program.<br>
                9. <strong>Allocation of Resources:</strong> Distributes CPUs, devices, and memory among users.<br><br>

                <strong>2. Explanation of One Function – Process Management</strong><br>
                It is important to understand the function of Process Management. This involves managing many processes simultaneously in order for CPU performance to be maximized. The OS executes processes, scheduling context switches, and synchronization, so that all applications run without any conflict. The OS uses Schedulers to allocate processor time.<br><br>

                <strong>Conclusion:</strong> The Operating System is at the core of all computer operations, managing hardware and software. Its core features ensure a stable system, efficient processing and user comfort.<br><br>
                <strong>Memory Help (Acronym: "P-M-F-D-I-S-U-E-R")</strong><br>
                P- Process Management • M- Memory Management • F- File Management • D- Device Management<br>
                - Input/Output Manager • S- Security and Protection • U User Interface • E - Error Detection • R- Resource Allocation<br><br>
                <strong>Mnemonic:</strong> "Proper management promotes interoperability of devices, as well as security, usability and reliability."
            </div>
        </div>
    </div>
</div>











</div>

<script>
    function toggleDropdown(el) {
        const card = el.closest('.question-dropdown');
        const isOpen = card.classList.toggle('open');
        const btnSpan = card.querySelector('.show-answer-btn span');
        const btnIcon = card.querySelector('.show-answer-btn i');
        if (btnSpan) btnSpan.textContent = isOpen ? 'Hide Answer' : 'Show Answer';
        if (btnIcon) {
            btnIcon.classList.toggle('fa-eye', !isOpen);
            btnIcon.classList.toggle('fa-eye-slash', isOpen);
        }
    }
    window.onbeforeprint = () => {
        document.querySelectorAll('.question-dropdown').forEach(card => {
            card.classList.add('open');
            const span = card.querySelector('.show-answer-btn span');
            if (span) span.textContent = 'Answer Shown';
        });
    };
</script>







@endsection