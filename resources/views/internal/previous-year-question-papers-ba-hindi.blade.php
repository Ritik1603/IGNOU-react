@extends('layouts.user')
@section('page_h1', 'DISASTER MANAGEMENT')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')



<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        /* Brand + palette (tuned for 60-30-10) */
        --primary: #005BFF;
        /* main brand blue */
        --primary-light: #0A84FF;
        /* lighter blue for gradients */
        --accent: #F9A826;
        /* warm accent (badges, highlights) */
        --success: #28C76F;
        /* action / correct */
        --danger: #F04438;
        /* error / critical text */

        --gray: #4B5563;
        --light-gray: #9CA3AF;
        --border: #E2E8F0;
        --bg: #F3F6FB;
        /* softer neutral background */
        --card-bg: #FFFFFF;

        --shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06);
        --shadow-md: 0 8px 25px rgba(15, 23, 42, 0.10);

        --radius-sm: 12px;
        --radius-md: 20px;
        --radius-lg: 28px;
        --transition: all 0.3s ease;

        --highlight: #FFFBEB;
        --highlight-border: #FBBF24;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: #1e293b;
        line-height: 1.7;
        /*padding: 20px 0;*/
    }

    .container {
        max-width: 1129px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* === PAPER HEADER === */
    .paper-header {
        text-align: center;
        background: #ffffff;
        padding: 28px 24px;
        border-radius: var(--radius-lg);
        margin-bottom: 32px;
        box-shadow: var(--shadow-md);
        border: 1px solid var(--border);
    }

    .paper-code {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary);
        letter-spacing: 4px;
        margin-bottom: 8px;
    }

    .paper-title {
        font-size: 1.9rem;
        font-weight: 800;
        color: #0f172a;
        margin: 10px 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .program-name {
        font-size: 1rem;
        color: var(--gray);
        margin: 14px 0 18px;
        font-weight: 500;
    }

    .exam-meta {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        font-size: 0.95rem;
        color: var(--gray);
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
    }

    .meta-item::before {
        content: '';
        width: 6px;
        height: 6px;
        background: #111827;
        border-radius: 50%;
    }

    /* === INSTRUCTIONS === */
    .instructions-box {
        background: #E3F0FF;
        border: 1px solid rgba(0, 91, 255, 0.35);
        padding: 18px 22px;
        border-radius: var(--radius-md);
        margin: 32px 0;
        font-size: 1rem;
        line-height: 1.8;
        position: relative;
        color: #0f295f;
        font-weight: 600;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.06);
    }

    .instructions-box strong {
        color: #111827;
        font-weight: 700;
    }

    /* === SECTION === */
    .section {
        margin: 40px 0;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        padding: 12px 20px;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: var(--radius-md);
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 26px rgba(0, 91, 255, 0.35);
    }

    /* === DROPDOWN QUESTION CARD === */
    .question-dropdown {
        background: var(--card-bg);
        border-radius: var(--radius-lg);
        margin: 24px 0;
        border: 1px solid var(--border);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
        transition: var(--transition);
    }

    .question-dropdown:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .q-trigger {
        padding: 22px 26px;
        display: flex;
        align-items: center;
        gap: 16px;
        cursor: pointer;
        transition: var(--transition);
        user-select: none;
        position: relative;
        background: linear-gradient(to right, #F7FAFF, #FFFFFF);
    }

    .q-trigger:hover {
        background: linear-gradient(to right, #E9F2FF, #F7FAFF);
    }

    .q-circle {
        width: 42px;
        height: 42px;
        background: radial-gradient(circle at 30% 0, #7FB4FF, var(--primary));
        color: #ffffff;
        border-radius: 50%;
        font-weight: 700;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 6px 16px rgba(0, 91, 255, 0.5);
    }

    .q-content {
        flex: 1;
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.6;
        padding-right: 120px;
        color: #0f172a;
    }

    /* === MARKS + SHOW ANSWER WRAPPER === */
    .marks-wrapper {
        position: absolute;
        right: 72px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .marks-badge {
        background: linear-gradient(135deg, #DBEAFE, #BFDBFE);
        color: #1D4ED8;
        padding: 8px 14px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        white-space: nowrap;
        box-shadow: 0 2px 8px rgba(37, 99, 235, 0.25);
        border: 1px solid #93C5FD;
    }

    .show-answer-btn {
        background: linear-gradient(135deg, #E3F9EF, #C7F1DD);
        color: #166534;
        padding: 8px 14px;
        border-radius: 999px;
        border: 1px solid var(--success);
        font-weight: 700;
        font-size: 0.9rem;
        white-space: nowrap;
        box-shadow: 0 2px 8px rgba(22, 101, 52, 0.25);
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: var(--transition);
    }

    .show-answer-btn i {
        font-size: 0.9rem;
    }

    .show-answer-btn:hover {
        transform: translateY(-1px) scale(1.02);
        box-shadow: 0 4px 12px rgba(22, 101, 52, 0.32);
    }

    .question-dropdown.open .show-answer-btn {
        background: linear-gradient(135deg, #FEE4E2, #FECDCA);
        color: #B42318;
        border-color: var(--danger);
        box-shadow: 0 2px 8px rgba(180, 35, 24, 0.26);
    }

    .dropdown-icon {
        position: absolute;
        right: 24px;
        top: 50%;
        transform: translateY(-50%);
        width: 36px;
        height: 36px;
        background: radial-gradient(circle at 30% 0, #7FB4FF, var(--primary));
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(0, 91, 255, 0.45);
    }

    .question-dropdown.open .dropdown-icon {
        transform: translateY(-50%) rotate(180deg);
        background: var(--accent);
    }

    /* === ANSWER PANEL === */
    .answer-panel {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease, padding 0.3s ease;
        background: #F7FAFF;
        border-top: 1px solid var(--border);
    }

    .question-dropdown.open .answer-panel {
        max-height: 3000px;
    }

    .answer-content {
        padding: 28px 32px;
        font-size: 1rem;
        line-height: 1.9;
        color: #374151;
        background: linear-gradient(to bottom, #FFFFFF, #F7FAFF);
    }

    /* REMOVED h4 numbering – ab sirf content headings hain, no auto numbers */

    .answer-content h4 {
        color: var(--primary);
        margin: 20px 0 12px;
        font-weight: 700;
        font-size: 1.15rem;
        padding: 8px 0;
        border-bottom: 2px solid var(--primary-light);
        display: inline-block;
    }

    /* LIST NUMBERING: Plain text style jaise image mein – bold title, then description */
    .answer-content ol {
        margin: 14px 0;
        padding-left: 0;
        list-style: none;
        counter-reset: custom-item;
    }

    .answer-content ol>li {
        margin: 12px 0;
        position: relative;
        counter-increment: custom-item;
        padding-left: 40px;
        line-height: 1.6;
    }

    .answer-content ol>li::before {
        content: counter(custom-item) ".";
        position: absolute;
        left: 0;
        top: 0;
        font-weight: 700;
        color: #000;
        font-size: 1rem;
        width: 30px;
        text-align: left;
    }

    .answer-content ol>li>strong {
        display: block;
        color: #000;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .answer-content ol>li>strong::after {
        content: ":";
    }

    .answer-content ol>li {
        color: #374151;
    }

    /* === HIGHLIGHT BOXES === */
    .highlight-box {
        background: var(--highlight);
        border-left: 5px solid var(--highlight-border);
        padding: 16px 20px;
        margin: 18px 0;
        border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
        box-shadow: 0 2px 8px rgba(251, 191, 36, 0.18);
    }

    .highlight-box p {
        margin: 0;
        font-weight: 600;
        color: #92400e;
    }

    .highlight-box strong {
        color: var(--danger);
    }

    /* === KEYWORD ANCHORS === */
    .keyword-anchors {
        background: #ECFDF3;
        border: 1px solid #A7F3D0;
        padding: 14px 18px;
        border-radius: var(--radius-sm);
        margin: 20px 0;
        font-family: 'Courier New', monospace;
        font-weight: 600;
        color: #047857;
    }

    /* === SHORT NOTES === */
    .short-notes {
        margin: 16px 0 0 52px;
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .short-note {
        background: #FEF3C7;
        padding: 8px 14px;
        border-radius: 50px;
        font-size: 0.95rem;
        font-weight: 600;
        color: #92400e;
        border: 1px solid #FBBF24;
    }

    .short-note::before {
        content: '(' attr(data-label) ')';
        margin-right: 6px;
        font-weight: 700;
        color: var(--danger);
    }

    /* === P.T.O === */
    .pto {
        text-align: center;
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        margin: 40px 0;
        padding: 20px;
        background: linear-gradient(to right, #E3F0FF, #DBEAFE);
        border-radius: var(--radius-md);
        border: 1px solid #BFDBFE;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.12);
    }

    /* === PRINT STYLES === */
    @media print {

        .print-btn,
        header,
        footer {
            display: none !important;
        }

        .dropdown-icon {
            display: none;
        }

        .marks-wrapper {
            position: static;
            margin-left: auto;
            transform: none;
        }

        .answer-panel {
            max-height: none !important;
        }

        .question-dropdown {
            border: 1px solid #ccc;
            page-break-inside: avoid;
        }

        .pto {
            page-break-before: always;
        }

        body {
            background: #ffffff;
        }

        .highlight-box {
            background: #fffbeb !important;
            border-left: 5px solid #fbbf24 !important;
        }
    }

    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        body {
            padding: 12px 0;
        }

        .container {
            padding: 0 12px;
        }

        .paper-title {
            font-size: 1.4rem;
        }

        .paper-header {
            padding: 20px 16px;
        }

        .section {
            margin: 28px 0;
        }

        .q-trigger {
            padding: 16px 14px;
            flex-wrap: wrap;
            gap: 8px 12px;
        }

        .q-circle {
            width: 36px;
            height: 36px;
            font-size: 1.1rem;
            order: 1;
        }

        .dropdown-icon {
            position: static;
            order: 2;
            margin-left: auto;
        }

        .q-content {
            order: 3;
            width: 100%;
            padding-right: 0;
            font-size: 1rem;
        }

        .marks-wrapper {
            order: 4;
            position: static;
            width: 100%;
            margin: 6px 0 0 52px;
            flex-wrap: wrap;
        }

        .marks-badge,
        .show-answer-btn {
            font-size: 0.85rem;
            padding: 6px 12px;
        }

        .short-notes {
            margin-left: 0;
            justify-content: flex-start;
        }

        .answer-content {
            padding: 18px 16px;
            font-size: 0.96rem;
        }

        .section-title {
            font-size: 1.25rem;
            padding: 10px 16px;
        }

        .answer-content ol>li {
            padding-left: 32px;
        }

        .answer-content ol>li::before {
            width: 24px;
        }
    }

    @media (max-width: 480px) {
        .paper-code {
            font-size: 1.1rem;
        }

        .program-name {
            font-size: 0.9rem;
        }

        .exam-meta {
            gap: 16px;
            font-size: 0.85rem;
        }

        .keyword-anchors {
            font-size: 0.8rem;
        }
    }
</style>

<div class="container">

    <!-- PAPER HEADER -->
    <div class="paper-header mt-5">
        <div>
            <img src="./images/log.jpg" alt="" style="width: 150px;">
        </div>
        <div class="paper-code">BPAG–171</div>
        <h1 class="paper-title">DISASTER MANAGEMENT</h1>
        <div class="program-name">BACHELOR OF ARTS (HONOURS) PUBLIC ADMINISTRATION (BAPAH)</div>
        <div class="exam-meta">
            <div class="meta-item">Time: 3 Hours</div>
            <div class="meta-item">Maximum Marks: 100</div>
            <div class="meta-item">No. of Printed Pages: 6</div>
        </div>
    </div>

    <!-- INSTRUCTIONS -->
    <div class="instructions-box">
        <strong>Note:</strong> Attempt any <strong>five questions</strong> in about <strong>400 words</strong> each, selecting at least <strong>two from each Section</strong>. All questions carry <strong>equal marks</strong>.
    </div>

    <!-- ========= SECTION I ========= -->
    <div class="section">
        <h2 class="section-title">Section—I</h2>

        <!-- Question 1 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">1</div>
                <div class="q-content">
                   Describe the various types of natural 
disasters. 
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>A natural disaster is a catastrophic event caused by a natural phenomenon that results in the loss of lives, property, and the environment. Natural disasters are sudden and can have long-term and immediate impacts on communities. India's varied geography and climate make it highly vulnerable to a variety of natural disasters. Understanding these types is important for effective disaster management and preparation.</p>

                    <h4>Types of Natural Disasters</h4>
                    <ol>
                        <li><strong>Hydrological Disasters</strong> These disasters are caused by excessive rainfall, river overflows, or dam failures. India has experienced major floods, especially in Assam, Bihar and Uttar Pradesh.</li>
                        <li><strong>Weather Disasters</strong> Extreme weather conditions, such as cyclones and storms, along the east coast of India, particularly in Odisha and Andhra Pradesh, cause significant losses to life and property.</li>
                        <li><strong>Geophysical Disasters</strong> These occur as a result of the Earth's internal processes. Examples are earthquakes and landslides that commonly occur in hilly areas and the Himalayan Belt.</li>
                        <li><strong>Climate Disasters</strong> These include extreme temperatures, droughts, and forest fires. Droughts result in significant economic and agricultural losses in Maharashtra.</li>
                        <li><strong>Biological Disasters</strong> The disasters caused by the spread of disease, epidemics or pest attacks against crops. Examples of such disasters include dengue, malaria, and locust invasions, which threaten food and human security.</li>
                        <li><strong>Avalanches</strong> Occur when snow slides down mountainsides.</li>
                        <li><strong>Tsunamis</strong> The destruction caused by tsunamis is massive. The 2004 Indian Ocean Tsunami severely affected India's eastern coastline.</li>
                        <li><strong>Forest Fires</strong> Especially in Uttarakhand or Himachal Pradesh, where dry forests are prevalent, fires in the forest can cause loss of wildlife and vegetation. They also lead to human settlements and destruction.</li>
                        <li><strong>Extreme Temperature Disasters</strong> Include heatwaves as well as coldwaves, which can cause serious health issues and even death. Climate change has led to an increase in heat waves across northern India.</li>
                        <li><strong>Land Degradation and Desertification</strong> Deforestation and the overuse of resources have led to land degradation and the expansion of deserts. This has created long-term risks to livelihoods.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Critical Importance:</strong> Natural Disasters are often linked. For example, floods can trigger epidemics and landslides. Earthquakes may also cause tsunamis. An integrated approach to managing disasters is crucial.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>India's diverse geography makes it vulnerable to multiple natural disasters. A proper classification and understanding of disasters enable scientific planning and the development of effective early warning systems. To reduce the impact, sustainable development and climate adaptation are crucial.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Earthquakes – Droughts – Landslides – Forest Fires
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">2</div>
                <div class="q-content">
                   Discuss the key vulnerability factors. 
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>The term vulnerability refers to conditions that make people, communities, and systems more susceptible to disasters. It is affected by physical, socio-economic, and environmental aspects. Understanding vulnerability helps identify at-risk groups and plan effective mitigation strategies.</p>

                    <h4>Key Vulnerability Elements</h4>
                    <ol>
                        <li><strong>Physical Vulnerability</strong> Refers specifically to the risk of exposure to people and infrastructure. Settlements located near floodplains, coasts, and seismic zones are more susceptible to damage.</li>
                        <li><strong>Social Vulnerability</strong> This includes aspects such as poverty and illiteracy. It also involves gender inequality and social exclusion. Marginalized groups have limited access to support and resources during disasters.</li>
                        <li><strong>Economic Vulnerability</strong> Individuals with low incomes and those dependent on climate-sensitive occupations, such as agriculture or fishing, will be disproportionately affected by disasters.</li>
                        <li><strong>Environmental Vulnerability</strong> The degradation and deforestation of natural resources, as well as unplanned urbanisation, increase disaster risk. Insufficient waste management and the encroachment onto wetlands can worsen flooding.</li>
                        <li><strong>Technical Vulnerability</strong> The use of outdated or unsafe technologies by industries, transportation, and infrastructure can increase the risks of accidents.</li>
                        <li><strong>Cultural Vulnerability</strong> Traditional belief systems and resistance to warnings from scientists can hinder the implementation of evacuation or preventive measures.</li>
                        <li><strong>Institutional Vulnerability</strong> Weak government, lack of coordination among agencies, and inadequate disaster management policies increase vulnerability.</li>
                        <li><strong>Educational Vulnerability</strong> Lack Of Awareness, Training, And Early Warning Dissemination Leads To Delay In Response and Higher Casualties.</li>
                        <li><strong>Demographic Vulnerability</strong> The high density of people, particularly in urban slums, limits evacuation options and increases the risk.</li>
                        <li><strong>Geographical Vulnerability</strong> Certain regions, such as the Himalayas and coastal belts, are naturally more susceptible to disasters.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Caution:</strong> Vulnerability changes dynamically in response to development, environmental, and social circumstances. To reduce vulnerability, it is necessary to integrate risk reduction into development policies.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>The level of vulnerability determines the impact of a disaster. To build resilient communities, it is essential to address this issue through education, infrastructure planning, and environmental protection.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Physical – Social – Economic – Environmental – Institutional – Educational – Geographical <br>
                        <strong>Mnemonic: PSEEIEG</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">3</div>
                <div class="q-content">
                   Write a note on the institutional framework <br>
under the Disaster Management Act. 
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>The Disaster Management Act, 2005 provides a comprehensive legal and institutional framework for disaster management in India. Enacted post the 2004 Indian Ocean Tsunami, it shifted the focus from relief-centric to a holistic approach covering prevention, mitigation, preparedness, response, and recovery. The Act establishes authorities at national, state, and district levels to ensure coordinated and effective disaster management.</p>

                    <h4>Institutional Framework</h4>
                    <ol>
                        <li><strong>National Disaster Management Authority (NDMA)</strong> Apex body chaired by the Prime Minister. It lays down policies, plans, and guidelines for disaster management.</li>
                        <li><strong>National Executive Committee (NEC)</strong> Chaired by the Union Home Secretary, it assists NDMA in implementing policies and coordinates response across ministries.</li>
                        <li><strong>State Disaster Management Authority (SDMA)</strong> Headed by the Chief Minister, responsible for state-level policies and plans in line with NDMA guidelines.</li>
                        <li><strong>District Disaster Management Authority (DDMA)</strong> Led by the District Collector, it prepares district plans, coordinates response, and ensures community participation.</li>
                        <li><strong>National Institute of Disaster Management (NIDM)</strong> Provides training, research, and capacity building for disaster management professionals.</li>
                        <li><strong>National Disaster Response Force (NDRF)</strong> Specialized force for rapid response, search, rescue, and relief operations during disasters.</li>
                        <li><strong>State Disaster Response Force (SDRF)</strong> State-level units supporting NDRF in localized response operations.</li>
                        <li><strong>Local Authorities</strong> Panchayats and municipalities integrate disaster management into local development plans.</li>
                        <li><strong>Financial Mechanisms</strong> Includes National Disaster Response Fund (NDRF) and State Disaster Response Fund (SDRF) for funding relief and mitigation.</li>
                        <li><strong>Advisory Committees</strong> Expert groups guide NDMA on technical and scientific aspects of disaster risk reduction.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Critical Importance:</strong> The framework emphasizes multi-level coordination and community involvement. Regular mock drills and plan updates are mandatory for effectiveness.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>The institutional framework under the Disaster Management Act, 2005 ensures a structured, proactive, and inclusive approach to managing disasters. It promotes resilience through coordinated efforts across all levels of governance.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: NDMA – SDMA – DDMA – NDRF – NIDM – NEC – Funds <br>
                        <strong>Mnemonic: NSDNNEF</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">4</div>
                <div class="q-content">
                  Write short notes on the following in about 
200 words each :
                    <div class="short-notes">
                        <div class="short-note" data-label="a">Types of man-made disasters </div>
                        <div class="short-note" data-label="b">Search and Rescue</div>
                    </div>
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">10×2 = 20</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>(a) Types Of Man-Made Disasters</h4>
                    <p><strong>Introduction:</strong> Manmade Disasters are large-scale disasters caused by human negligence, actions or technological failures. Because they can be prevented through planning, regulation, or awareness, artificial disasters are less common than natural ones. The industrialization, urbanization, modern technologies, and other factors are contributing to an increase in these types of disasters.</p>

                    <ol>
                        <li><strong>Industry Accidents</strong> Accidents that occur in chemical plants, mining units, or manufacturing facilities involving fires, explosions, and leakages. Bhopal Gas Tragedy (1984) is an example.</li>
                        <li><strong>Accidents Nuclear and Radiological</strong> Explosion or leakage in nuclear facilities causing radiation hazards. Example: Chernobyl disaster (1986).</li>
                        <li><strong>Transportation Accidents</strong> Road, rail and air accidents caused by mechanical failures, human errors, or poor infrastructure.</li>
                        <li><strong>Oil Spills</strong> The spillage of crude oil from ships or pipelines pollutes oceans and coastlines.</li>
                        <li><strong>Forest or urban fires</strong> that are caused by short circuits in electrical systems, gas leaks or human negligence.</li>
                        <li><strong>Terrorist Attacks</strong> Groups that use violence or explosives to incite fear and destroy property.</li>
                        <li><strong>War and Civil Conflicts</strong> Armed Conflicts that lead to destruction, displacements, and humanitarian crises.</li>
                        <li><strong>Chemical Warfare</strong> Use toxic agents or pathogens during conflict.</li>
                        <li><strong>Environmental Pollution and Deforestation</strong> Overexploitation and resource imbalance lead to ecological degradation.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Critical Note:</strong> Most human-made disasters result from negligence, a lack of safety regulations, and poor governance. They emphasize the need for sustainable environmental and industrial management.</p>
                    </div>

                    <p><strong>Summary:</strong> Manmade catastrophes have devastating long-term effects. By strengthening safety standards, implementing emergency plans, and raising public awareness, we can prevent these tragedies, protect lives, and preserve ecosystems.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Industrial – Nuclear – Transport – Oil – Fire – Terrorism – War <br>
                        <strong>Mnemonic: INTOFTW</strong>
                    </div>

                    <h4>(b) Search and Rescue</h4>
                    <p><strong>Introduction:</strong> Search and Rescue refers to coordinated operations carried out immediately after a catastrophe to locate and assist affected people and evacuate them to safety. This is a crucial part of the response phase in disaster management, aimed at reducing casualties and providing immediate assistance.</p>

                    <ol>
                        <li><strong>Pre-Planning</strong> SAR Teams are trained and equipped in advance of disasters. In planning, high-risk areas are identified and resource maps prepared.</li>
                        <li><strong>Alerts and Mobilizations</strong> Following an emergency, control rooms notify rescue teams, including the NDRF and police.</li>
                        <li><strong>Search Operations</strong> Teams identify affected zones using maps, drones, and satellite imagery, and search for trapped individuals under debris or collapsed buildings.</li>
                        <li><strong>Rescue Operations</strong> Victims will be extricated by using specialized equipment and techniques while maintaining the safety of responders.</li>
                        <li><strong>First Aid and Evacuation</strong> Injured individuals receive immediate medical treatment and are moved to safe shelters and hospitals.</li>
                        <li><strong>Coordination & Communication</strong> Effective communication between agencies reduces duplication. Local volunteers assist official teams.</li>
                        <li><strong>Equipment Used</strong> Tools such as stretchers, cutters, life jackets, ropes, cranes and boats are essential in rescue situations.</li>
                        <li><strong>Specialized Agencies</strong> Including the NDRF, SDRF, and armed forces, have significant roles to play in large-scale SAR operations.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Importance:</strong> Effective search and rescue operations depend on a quick response, a trained workforce, and effective coordination between agencies. Delay increases the risk of death.</p>
                    </div>

                    <p><strong>Conclusion:</strong> Search and Rescue Operations are crucial in saving lives immediately following disasters. Faster and safer recovery is possible by strengthening community capacity, utilizing technology and coordinating efforts.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Search – Locate – Rescue – Evacuate – First Aid – Coordination <br>
                        <strong>Mnemonic: SLREFC</strong>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- P.T.O -->
    <div class="pto">[ 2 ] BPAG–171 P. T. O.</div>

    <!-- ========= SECTION II ========= -->
    <div class="section">
        <h2 class="section-title">Section—II</h2>

        <!-- Question 5 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">5</div>
                <div class="q-content">
                    Examine the key aspects of damage 
assessment plan for critical sectors. 
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>A damage assessment is a process that evaluates the impact of disasters on lives, infrastructure, essential services, and property. It is a foundation for planning reconstruction, rehabilitation, or relief measures. A well-designed damage assessment plan will identify the extent of the loss, prioritise needs, and guide the allocation of resources to critical sectors to accelerate recovery.</p>

                    <h4>Damage Assessment Plan Key Aspects</h4>
                    <ol>
                        <li><strong>Objectives and Scope</strong> This document aims to quantify, classify, and evaluate the damages caused by disasters in terms of physical, social and economic damage. It covers sectors as diverse as housing, healthcare, education, electricity, water, transportation and communication.</li>
                        <li><strong>Identification and Prioritization of Critical Sectors</strong> The critical sectors include infrastructure, agriculture (including industry), environment, social services, and the economy. Their performance determines how quickly recovery and restoration can be achieved.</li>
                        <li><strong>Disaster Preparedness</strong> Involves creating baseline data, inventories of resources, and maps that show vulnerability, enabling quick comparisons following a catastrophe.</li>
                        <li><strong>Rapid Assessment</strong> Conducted during the first 24 hours to estimate immediate damages. It can help determine immediate needs such as relief, shelter, and rescue.</li>
                        <li><strong>Detailed Evaluation</strong> Continues with a rapid assessment, collecting quantitative data sector by sector. It includes the impact on infrastructure, economic costs, livelihoods, and other factors.</li>
                        <li><strong>Methodology</strong> Utilizes satellite images and GIS tools. A multi-sectoral team assesses housing, roads, health centers, and schools. (Diagram Flow: From Data Collection to Verification, Consolidation and Reporting.)</li>
                        <li><strong>Assessment Indicators</strong> Key indicators include the number of deaths/injuries; damaged structures; affected population; crop losses, livestock mortality and economic disruption.</li>
                        <li><strong>Institutional Framework</strong> NDMA, SDMA, DDMA line department, and coordinate assessments. Technical agencies, such as NIDM and IMD, provide expertise and data.</li>
                        <li><strong>Community Participation</strong> Involving local organizations and NGOs, ensures the accuracy and transparency of data.</li>
                        <li><strong>Reporting, Decision-Making and Funding</strong> Data compiled to a consolidated Report on Damages and Needs Assessment (DNA) for funding and priority setting of reconstruction.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Importance:</strong> The use of a uniform methodology in all states is essential for comparability. Weak coordination or delays in data collection hinder recovery and result in delayed assistance.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>A_damage assessment is essential for making informed decisions after disasters. Focusing on key sectors and engaging the communities ensures resource efficiency and supports resilient rebuilding.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Rapid – Detailed – Indicators – Institutions – Community – Reporting <br>
                        <strong>Mnemonics: RDIICR</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">6</div>
                <div class="q-content">
                  Discuss the funding arrangements for 
reconstruction activities. 
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>Reconstruction is the process of restoring and improving damaged physical, social and economic infrastructure. To rebuild regions affected by disasters, improve resilience, and reduce risks in the future, it is crucial to have adequate funding and for it to arrive on time. The Disaster Management Act (2005) outlines the institutional and financial mechanisms for reconstruction at all levels.</p>

                    <h4>Funding Arrangements</h4>
                    <ol>
                        <li><strong>National Disaster Response Fund (NDRF)</strong> Set up under Section 48 of the Act for expenses related to emergency response and disaster relief. It supplements state efforts during large-scale calamities.</li>
                        <li><strong>State Disaster Response Fund (SDRF)</strong> Constituted by Section 48. Serves as the primary fund to provide immediate relief and rehabilitation for the state. The Central Government contributes between 75% and 90%, depending on the category to which the state belongs.</li>
                        <li><strong>National Disaster Mitigation Fund</strong> Created as a fund to reduce future risks through prevention, mitigation and capacity building.</li>
                        <li><strong>State Disaster Mitigation Funds (SDMF)</strong> Used to reduce risks and mitigate disasters over a long period of time, often in conjunction with development plans.</li>
                        <li><strong>Budgetary Allocations</strong> Departments and Ministries include specific provisions for disaster management in their annual budgets.</li>
                        <li><strong>External Aid</strong> Funding provided by multilateral agencies, such as the World Bank or Asian Development Bank. Supports reconstruction projects, particularly for large-scale natural disasters.</li>
                        <li><strong>Insurance</strong> Schemes for crop, property, and disaster protection protect individuals and institutions, reducing the financial burden on governments.</li>
                        <li><strong>Public Private Partnerships (PPP)</strong> Mobilize expertise and private investment to rebuild infrastructure, notably in housing, roads, health facilities, and so on.</li>
                        <li><strong>Corporate Social Responsibility (CSR)</strong> Companies provide funds and materials to rebuild schools and hospitals in areas affected by natural disasters.</li>
                        <li><strong>Community Financing</strong> Local contributions and NGOs mobilize small amounts of funds to support livelihood recovery and microreconstruction.</li>
                        <li><strong>Monitoring & Accountability</strong> Proper auditing & tracking systems ensure transparency and effective use of funds.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Critical Importance:</strong> The combination of institutional funds and community and private participation can create a comprehensive recovery mechanism.</p>
                    </div>

                    <h4>Summary</h4>
                    <p>A funding structure that includes multiple sources of funding ensures that the reconstruction process is inclusive, rapid, and resilient. Enhancing financial planning and transparency, as well as community participation, will improve the effectiveness of disaster recovery.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: NDRF – SDRF – Mitigation Funds – PPP – Insurance – CSR – Monitoring <br>
                        <strong>Mnemonic: NSMPICM</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">7</div>
                <div class="q-content">
                  Write a note on Community Based Disaster 
Risk Assessments (CBDRA).
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">20 MARKS</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>Introduction</h4>
                    <p>Community-Based Disaster Risk Assessment is a participatory process in which local communities identify, analyze, and evaluate hazards posed by natural or human-induced disasters. It empowers local communities to plan preparedness and preventive measures tailored to meet their needs.</p>

                    <h4>CBDRA's Key Aspects</h4>
                    <ol>
                        <li><strong>Community Participation</strong> Engages residents, local leadership, women, young people, and vulnerable groups in identifying hazards.</li>
                        <li><strong>Understanding Local Risks</strong> Communities map hazards such as floods, droughts, and landslides using historical experience.</li>
                        <li><strong>Vulnerability Analysis</strong> Identifies the most vulnerable factors, including housing type, income, gender, access to resources, and other relevant characteristics.</li>
                        <li><strong>Capacity Evaluation</strong> Identifies the strengths of local communities, including skills, traditional know-how, institutions, social networks and other factors that contribute to resilience.</li>
                        <li><strong>Analysis of Risk</strong> Uses data from hazard and vulnerability assessments, as well as capacity and capability information, to determine the risk level in a community. It then prioritizes areas that need intervention.</li>
                        <li><strong>Methods and Tools</strong> Utilizes participatory methods of rural appraisal, including seasonal calendars, vulnerability matrices, and group discussions.</li>
                        <li><strong>Integration into Local Plans</strong> Findings inform the CDMP (Community Disaster Management Plan), linking with district and state plans.</li>
                        <li><strong>Awareness Training</strong> Enhances preparedness through mock drills, first aid training, and the dissemination of early warnings.</li>
                        <li><strong>Institutional Assistance</strong> NGOs provide resources and guidance to local authorities and the DDMA.</li>
                        <li><strong>Review and Monitoring</strong> Regular review and monitoring ensure community risk assessments stay current and relevant.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Critical Importance:</strong> CBDRA bridges the gaps between government plans and local realities. It ensures that risk reduction is grounded in community experience.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>A community-based disaster risk assessment fosters self-reliance and resilience among individuals. It transforms the communities from passive victims into active agents for disaster preparedness.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Participation – Hazard Mapping – Vulnerability – Capacity – Risk – Integration – Monitoring <br>
                        <strong>Mnemonics: PHVCRIM</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 8 -->
        <div class="question-dropdown">
            <div class="q-trigger" onclick="toggleDropdown(this)">
                <div class="q-circle">8</div>
                <div class="q-content">
                   Write short notes on the following in about 
200 words each :
                    <div class="short-notes">
                        <div class="short-note" data-label="a">Disasters 
as 
opportunities 
development initiatives </div>
                        <div class="short-note" data-label="b">Types of indigenous knowledge</div>
                    </div>
                </div>
                <div class="marks-wrapper">
                    <div class="marks-badge">10×2 = 20</div>
                    <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this);">
                        <i class="fas fa-eye"></i><span>Show Answer</span>
                    </button>
                </div>
                <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="answer-panel">
                <div class="answer-content">
                    <h4>(a) Disasters can be leveraged as opportunities for development initiatives</h4>
                    <p><strong>Introduction:</strong> Although destructive, disasters can also be an opportunity for renewal and sustainable growth. They reveal weaknesses in governance, social and infrastructure systems. This allows us to integrate risk reduction and rebuild better. The concept emphasizes post-disaster reconstruction as an opportunity for positive change and long-term resilience.</p>

                    <ol>
                        <li><strong>Building Better Infrastructure</strong> After disasters, reconstruction offers an opportunity to make more resilient and safer housing and facilities.</li>
                        <li><strong>Policy and Planning Reform</strong> After-disaster recovery draws attention to the planning gap, allowing the formulation and improvement of land-use, construction codes, and safety standards.</li>
                        <li><strong>Building Institutions</strong> Often, disasters lead to the establishment or improvement of institutions such as emergency response units and disaster management teams.</li>
                        <li><strong>Empowerment for Communities</strong> The participation of communities in the recovery process increases their awareness, ownership and ability to manage future risks.</li>
                        <li><strong>Economic Revitalization</strong> Revitalization creates employment, stimulates local industries, and revitalizes lives through targeted development programs.</li>
                        <li><strong>Environmental Restoration</strong> Post-disaster periods are used for restoring ecosystems, controlling deforestation, and promoting sustainable resource use.</li>
                        <li><strong>Technology Adoption</strong> The impact of disasters on the adoption of new technologies, such as early warning systems, GIS maps, and resilient building materials, is a driving force behind this adoption.</li>
                        <li><strong>International Cooperation</strong> The relief and recovery effort often attracts global assistance. This enhances the knowledge exchange and capability building.</li>
                        <li><strong>Integration with DRR</strong> Lessons learnt from disasters will be incorporated into future development projects to reduce vulnerability and promote sustainability.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Critical Note:</strong> The "Build Back Better Approach" transforms disasters into catalysts for inclusive growth and resilience.</p>
                    </div>

                    <p><strong>Summary:</strong> Natural disasters offer a unique chance to transform weakness into strength. Effective leadership and community participation can transform tragedy into a pathway towards sustainable development.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Revive – Rebuild – Integrate
                    </div>

                    <h4>(b) Types of indigenous knowledge</h4>
                    <p><strong>Introduction:</strong> Indigenous Knowledge refers to the traditional wisdom and skills that local communities have developed over many generations in interaction with their environments. It is based on local knowledge and experience and is vital to disaster risk reduction, as it reflects how the community has adapted to local hazards and risks.</p>

                    <ol>
                        <li><strong>Environmental Knowledge</strong> Understanding local climate, weather patterns and soil, water resources and natural resources for sustainable living.</li>
                        <li><strong>Agricultural Knowledge</strong> Traditional Cropping Patterns, Mixed Farming, Seed Preservation, and Water Harvesting Techniques that ensure food safety during disasters.</li>
                        <li><strong>Architectural Knowledge</strong> Uses local materials and methods of construction to resist local hazards, such as earthquakes or floods.</li>
                        <li><strong>Health, Medical and Knowledge</strong> Traditional Medicine systems and herbal medicines are used to treat injuries during emergencies.</li>
                        <li><strong>Knowledge of Water Management</strong> Community systems, including tanks and stepwells.</li>
                        <li><strong>Social & Cultural Knowledge</strong> Practices to promote cooperation, sharing resources, and collective action during crisis, increasing community resilience.</li>
                        <li><strong>Knowledge of Early Warning</strong> Recognition and understanding of natural signs, such as animal behavior, wind direction, or changes in sea color, to predict hazards.</li>
                        <li><strong>Livelihoods Knowledge</strong> Adaptive livelihoods strategies, such as shifting cultivation or handicrafts, which reduce economic vulnerability.</li>
                    </ol>

                    <div class="highlight-box">
                        <p><strong>Note of Critical Importance:</strong> Indigenous knowledge complements scientific approaches and community-based disaster prevention.</p>
                    </div>

                    <h4>Conclusion</h4>
                    <p>Indigenous Knowledge shows people's strong connection with the environment. Integrating modern disaster management practices with traditional wisdom ensures sustainability and inclusivity.</p>

                    <div class="keyword-anchors">
                        Keyword Anchors: Agriculture – Environment – Health – Architecture – Water – Early Warning System – Social <br>
                        <strong>Mnemonic: EAAHWES</strong>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    function toggleDropdown(el) {
        const card = el.closest('.question-dropdown');
        if (!card) return;

        const isOpen = card.classList.toggle('open');

        const btnSpan = card.querySelector('.show-answer-btn span');
        const btnIcon = card.querySelector('.show-answer-btn i');

        if (btnSpan) {
            btnSpan.textContent = isOpen ? 'Hide Answer' : 'Show Answer';
        }

        if (btnIcon) {
            btnIcon.classList.toggle('fa-eye', !isOpen);
            btnIcon.classList.toggle('fa-eye-slash', isOpen);
        }
    }

    window.onbeforeprint = () => {
        document.querySelectorAll('.question-dropdown').forEach(card => {
            card.classList.add('open');
            const btnSpan = card.querySelector('.show-answer-btn span');
            const btnIcon = card.querySelector('.show-answer-btn i');
            if (btnSpan) btnSpan.textContent = 'Hide Answer';
            if (btnIcon) {
                btnIcon.classList.remove('fa-eye');
                btnIcon.classList.add('fa-eye-slash');
            }
        });
    };
</script>






@endsection