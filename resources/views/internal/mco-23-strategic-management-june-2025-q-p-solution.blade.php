@extends('layouts.user')
@section('page_h1', 'STRATEGIC MANAGEMENT')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    :root {
        --primary: #005BFF; --primary-light: #0A84FF; --accent: #F9A826; --success: #28C76F; --danger: #F04438;
        --gray: #4B5563; --light-gray: #9CA3AF; --border: #E2E8F0; --bg: #F3F6FB; --card-bg: #FFFFFF;
        --shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06); --shadow-md: 0 8px 25px rgba(15, 23, 42, 0.10);
        --radius-sm: 12px; --radius-md: 20px; --radius-lg: 28px; --transition: all 0.3s ease;
        --highlight: #FFFBEB; --highlight-border: #FBBF24;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; background: var(--bg); color: #1e293b; line-height: 1.7; }
    .container { max-width: 1129px; margin: 0 auto; padding: 0 20px; }
    .paper-header { text-align: center; background: #ffffff; padding: 28px 24px; border-radius: var(--radius-lg); margin-bottom: 32px; box-shadow: var(--shadow-md); border: 1px solid var(--border); }
    .paper-code { font-size: 1.6rem; font-weight: 700; color: var(--primary); letter-spacing: 4px; margin-bottom: 8px; }
    .paper-title { font-size: 1.9rem; font-weight: 800; color: #0f172a; margin: 10px 0; text-transform: uppercase; letter-spacing: 1px; }
    .instructions-box { background: #E3F0FF; border: 1px solid rgba(0, 91, 255, 0.35); padding: 18px 22px; border-radius: var(--radius-md); margin: 32px 0; font-size: 1rem; line-height: 1.8; color: #0f295f; font-weight: 600; box-shadow: 0 8px 20px rgba(15, 23, 42, 0.06); }
    .question-dropdown { background: var(--card-bg); border-radius: var(--radius-lg); margin: 24px 0; border: 1px solid var(--border); box-shadow: var(--shadow-sm); overflow: hidden; transition: var(--transition); }
    .question-dropdown:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
    .q-trigger { padding: 22px 26px; display: flex; align-items: center; gap: 16px; cursor: pointer; user-select: none; position: relative; background: linear-gradient(to right, #F7FAFF, #FFFFFF); min-height: 80px; }
    .q-trigger:hover { background: linear-gradient(to right, #E9F2FF, #F7FAFF); }
    .q-circle { width: 42px; height: 42px; background: radial-gradient(circle at 30% 0, #7FB4FF, var(--primary)); color: #ffffff; border-radius: 50%; font-weight: 700; font-size: 1.3rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 6px 16px rgba(0, 91, 255, 0.5); }
    .q-content { flex: 1; font-size: 1.1rem; font-weight: 600; line-height: 1.6; color: #0f172a; padding-right: 10px; }
    .marks-wrapper { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
    .marks-badge { background: linear-gradient(135deg, #DBEAFE, #BFDBFE); color: #1D4ED8; padding: 8px 14px; border-radius: 50px; font-weight: 600; font-size: 0.9rem; white-space: nowrap; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.25); border: 1px solid #93C5FD; }
    .show-answer-btn { background: linear-gradient(135deg, #E3F9EF, #C7F1DD); color: #166534; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--success); font-weight: 700; font-size: 0.9rem; white-space: nowrap; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; transition: var(--transition); box-shadow: 0 2px 8px rgba(22, 101, 52, 0.25); }
    .dropdown-icon { width: 36px; height: 36px; background: radial-gradient(circle at 30% 0, #7FB4FF, var(--primary)); color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; transition: var(--transition); box-shadow: 0 4px 12px rgba(0, 91, 255, 0.45); flex-shrink: 0; }
    .question-dropdown.open .dropdown-icon { transform: rotate(180deg); background: var(--accent); }
    .answer-panel { max-height: 0; overflow: hidden; transition: max-height 0.5s ease, padding 0.3s ease; background: #F7FAFF; border-top: 1px solid var(--border); }
    .question-dropdown.open .answer-panel { max-height: 10000px; }
    .answer-content { padding: 28px 32px; font-size: 1rem; line-height: 1.9; color: #374151; background: linear-gradient(to bottom, #FFFFFF, #F7FAFF); }
    .explanation { background: var(--highlight); border-left: 5px solid var(--highlight-border); padding: 18px 22px; margin: 20px 0; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; color: #92400e; font-size: 1rem; line-height: 1.8; }
    table { width: 100%; border-collapse: collapse; margin: 20px 0; }
    table, th, td { border: 1px solid #ddd; }
    th, td { padding: 12px; text-align: left; }
    th { background: #f0f7ff; }
    @media (max-width: 768px) { .container { padding: 0 12px; } .q-trigger { padding: 16px; flex-wrap: wrap; gap: 12px; } .q-circle { width: 38px; height: 38px; font-size: 1.2rem; } .q-content { order: 3; width: 100%; } .marks-wrapper { order: 4; } .dropdown-icon { order: 2; margin-left: auto; } }
</style>

<div class="container">
    <div class="paper-header mt-5">
        <div><img src="./images/log.jpg" alt="" style="width:150px;"></div>
        <div class="paper-code">MCO–23</div>
        <h1 class="paper-title">STRATEGIC MANAGEMENT</h1>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions as per marks allocation.
    </div>

<!-- ====================== Q1(a) ====================== -->
<!-- ====================== Q1(a) + Q1(b) – Fully Detailed 10 + 10 = 20 MARKS ====================== -->

<!-- ====================== Q1(a) – What is Strategy & Levels ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(a)</div>
        <div class="q-content">What do you mean by strategy? Explain the different levels of strategy. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Meaning of Strategy (3–4 MARKS)</strong><br>
                Strategy is a unified, comprehensive and integrated plan that relates the strategic advantages of the firm to the challenges of the environment. It is designed to ensure that the basic objectives of the enterprise are achieved through proper execution by the organisation.<br><br>

                <strong>Key Characteristics of Strategy</strong><br>
                • Long-range & future-oriented<br>
                • Concerned with overall purpose & scope<br>
                • Involves matching resources with environment<br>
                • Provides direction & unity of purpose<br>
                • Involves both formulation & implementation<br><br>

                <strong>Three Levels of Strategy (6 MARKS)</strong><br><br>

                <table>
                    <tr><th>Level</th><th>Decided By</th><th>Focus</th><th>Example</th></tr>
                    <tr>
                        <td><strong>1. Corporate Level Strategy</strong></td>
                        <td>Board of Directors & Top Management</td>
                        <td>Overall scope & direction of the entire organisation<br>• Which businesses to enter/exit<br>• Diversification, merger, acquisition, stability, retrenchment</td>
                        <td>Tata Group deciding to enter aviation (Air India acquisition)</td>
                    </tr>
                    <tr>
                        <td><strong>2. Business Level Strategy (SBU Level)</strong></td>
                        <td>SBU Heads / Divisional Managers</td>
                        <td>How to compete successfully in a particular market<br>• Cost leadership, differentiation, focus</td>
                        <td>Maruti Suzuki following cost leadership in small car segment</td>
                    </tr>
                    <tr>
                        <td><strong>3. Functional Level Strategy</strong></td>
                        <td>Functional Heads (Marketing, HR, Finance, Operations, R&D)</td>
                        <td>Support business strategy through day-to-day actions<br>• Marketing plan, HR policies, production efficiency</td>
                        <td>HUL’s aggressive rural marketing & Project Shakti for business strategy</td>
                    </tr>
                </table><br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                All three levels must be aligned and mutually supportive for effective strategy execution. Corporate strategy gives direction, business strategy creates competitive advantage, and functional strategies ensure implementation.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>C-B-F</strong> → Corporate (What business?) → Business (How to win?) → Functional (How to execute?)<br>
                Think: “Chairman → Business Head → Functional Manager”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q1(b) – Objectives ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(b)</div>
        <div class="q-content">What are objectives? How are they set? State the characteristics of objectives. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Meaning of Objectives (2 MARKS)</strong><br>
                Objectives are specific, measurable, time-bound end results that an organisation seeks to achieve. They convert the mission and vision into performance targets and provide direction to all planning and actions.<br><br>

                <strong>Characteristics of Good Objectives (5 MARKS)</strong><br>
                1. <strong>Specific</strong> – Clear and unambiguous<br>
                2. <strong>Measurable</strong> – Quantifiable (e.g., 15% growth)<br>
                3. <strong>Achievable</strong> – Challenging but realistic<br>
                4. <strong>Relevant</strong> – Aligned with mission<br>
                5. <strong>Time-bound</strong> – Has deadline<br>
                6. <strong>Hierarchical</strong> – Corporate → Business → Functional<br>
                7. <strong>Balanced</strong> – Covers financial & non-financial aspects<br>
                8. <strong>Consistent</strong> – No conflict between objectives<br><br>

                <strong>Process of Setting Objectives (3 MARKS)</strong><br>
                1. Review mission, vision and values<br>
                2. Environmental scanning (SWOT/PESTLE)<br>
                3. Gap analysis (current vs desired performance)<br>
                4. Involvement of top management & key stakeholders<br>
                5. Prioritisation and finalisation<br>
                6. Communication & cascading down the hierarchy<br>
                7. Periodic review and modification<br><br>

                <strong>Example</strong>: Reliance Jio objective (2016): “Achieve 100 million subscribers within 18 months” → Specific, Measurable, Achievable, Relevant, Time-bound.<br><br>

                <strong>Conclusion</strong><br>
                Well-set objectives act as a yardstick for performance measurement and motivate employees by giving clear direction.<br><br>

                <strong>Memory Help</strong><br>
                <strong>SMART + CHBC</strong><br>
                Specific → Measurable → Achievable → Relevant → Time-bound + Challenging → Hierarchical → Balanced → Consistent
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q1(b) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(b)</div>
        <div class="q-content">What are objectives? How are they set? State the characteristics of objectives. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Objectives are specific, measurable end results an organisation wants to achieve within a time frame.<br><br>

                <strong>Characteristics (SMART):</strong><br>
                • Specific • Measurable • Achievable • Relevant • Time-bound<br>
                • Challenging yet realistic • Hierarchical • Balanced<br><br>

                <strong>Process of Setting Objectives:</strong><br>
                1. Review mission/vision<br>
                2. Environmental scanning<br>
                3. Gap analysis<br>
                4. Involvement of top management & key stakeholders<br>
                5. Communication & cascading down<br><br>

                <strong>Memory Help:</strong> SMART + C-H-B → Challenging, Hierarchical, Balanced
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q2 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q2</div>
        <div class="q-content">What is PESTLE Analysis? Describe the steps involved in PESTLE analysis. Explain the different factors under PESTLE analysis with respect to the global environment. (20 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">20 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction (2 MARKS)</strong><br>
                PESTLE Analysis is a strategic tool used to scan and evaluate the macro-environmental (external) factors that can impact an organisation’s performance, especially in the global/international context. The acronym stands for Political, Economic, Social, Technological, Legal and Environmental factors.<br><br>

                <strong>Steps Involved in Conducting PESTLE Analysis (5 MARKS)</strong><br><br>
                1. <strong>Data Collection</strong> – Gather information from reports, journals, government sources, trade bodies, global databases.<br>
                2. <strong>Identify Key Factors</strong> – List specific variables under each PESTLE dimension relevant to the industry/country.<br>
                3. <strong>Assess Impact</strong> – Determine whether each factor creates Opportunity or Threat and its magnitude.<br>
                4. <strong>Prioritise Critical Factors</strong> – Focus on high-impact, high-uncertainty factors (using impact-probability matrix).<br>
                5. <strong>Draw Strategic Implications</strong> – Suggest entry mode, timing, localisation, risk mitigation, partnerships.<br><br>

                <strong>PESTLE Factors in Global Environment (12 MARKS)</strong><br><br>

                <table>
                    <tr><th>Factor</th><th>Key Global Aspects</th><th>Example / Implication</th></tr>
                    <tr>
                        <td><strong>Political</strong></td>
                        <td>Government stability, trade policies, tariffs, FDI regulations, bilateral relations, geopolitical tensions</td>
                        <td>US-China trade war → Indian firms gained electronics export orders</td>
                    </tr>
                    <tr>
                        <td><strong>Economic</strong></td>
                        <td>GDP growth, inflation, interest & exchange rates, labour cost, purchasing power, ease of doing business</td>
                        <td>Vietnam’s low labour cost → Apple, Samsung shifted manufacturing from China</td>
                    </tr>
                    <tr>
                        <td><strong>Social</strong></td>
                        <td>Demographics, lifestyle, education, cultural values, urbanisation, health consciousness</td>
                        <td>Ageing population in Japan → high demand for healthcare & robotics</td>
                    </tr>
                    <tr>
                        <td><strong>Technological</strong></td>
                        <td>R&D expenditure, automation, 5G/AI/IoT adoption, patent protection, digital infrastructure</td>
                        <td>India’s UPI success → attracted global fintech investments</td>
                    </tr>
                    <tr>
                        <td><strong>Legal</strong></td>
                        <td>Labour laws, taxation, IPR, antitrust, data privacy (GDPR), foreign ownership limits</td>
                        <td>EU’s GDPR → forced all global companies to upgrade data protection</td>
                    </tr>
                    <tr>
                        <td><strong>Environmental</strong></td>
                        <td>Climate change policies, carbon emission norms, renewable energy targets, waste management laws</td>
                        <td>EU Carbon Border Adjustment Mechanism (CBAM) → affects Indian steel/aluminium exports</td>
                    </tr>
                </table><br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                PESTLE is an indispensable tool for any firm operating or planning to operate globally. It helps identify favourable markets, anticipate risks, choose appropriate entry strategies and formulate contingency plans.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>PESTLE</strong> → Political-Economic-Social-Technological-Legal-Environmental<br>
                <strong>Steps</strong> → C-I-A-P-S → Collect → Identify → Assess → Prioritise → Strategic implications
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q3(a) + Q3(b) – Fully Detailed 10 + 10 = 20 MARKS ====================== -->

<!-- ====================== Q3(a) – External Factor Evaluation (EFE) Matrix ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(a)</div>
        <div class="q-content">What is the external factor evaluation matrix? Explain. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction & Meaning (2 MARKS)</strong><br>
                The **External Factor Evaluation (EFE) Matrix** is a strategic tool that summarises and evaluates the major opportunities and threats in the external environment and measures how effectively the company’s current strategy is responding to them.<br><br>

                <strong>Purpose</strong><br>
                • To quantify the firm’s responsiveness to external factors<br>
                • To compare competitors<br>
                • To identify areas where strategic change is needed<br><br>

                <strong>Steps to Develop EFE Matrix (6 MARKS)</strong><br><br>

                <table>
                    <tr><th>Step</th><th>Description</th></tr>
                    <tr><td>1. List Key External Factors</td><td>Identify 10–20 critical Opportunities & Threats from PESTLE & Porter’s analysis</td></tr>
                    <tr><td>2. Assign Weights (0.0 to 1.0)</td><td>Weight reflects relative importance (total = 1.0)<br>Higher weight → more important factor</td></tr>
                    <tr><td>3. Rate Company Response (1–4)</td><td>1 = Poor response<br>2 = Below average<br>3 = Above average<br>4 = Superior response</td></tr>
                    <tr><td>4. Calculate Weighted Score</td><td>Multiply Weight × Rating for each factor</td></tr>
                    <tr><td>5. Sum Total Weighted Score</td><td>Add all weighted scores</td></tr>
                </table><br><br>

                <strong>Interpretation (2 MARKS)</strong><br>
                • Average total score = 2.5<br>
                • > 2.5 → Strong external position (effectively exploiting opportunities & minimising threats)<br>
                • < 2.5 → Weak external position (needs strategic improvement)<br><br>

                <strong>Conclusion</strong><br>
                EFE Matrix converts qualitative external analysis into a quantitative score, helping managers decide whether current strategies are adequate or new strategies are required.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **L-W-R-M-T** → List → Weight → Rate (1–4) → Multiply → Total (Average 2.5)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3(b) – Strategic Groups & Scenario Planning ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Discuss strategic groups and scenario planning. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>A. Strategic Groups (5 MARKS)</strong><br><br>
                <strong>Definition:</strong> Clusters of firms within an industry that follow similar business models or strategies along key dimensions (price, quality, geography, technology, etc.).<br><br>

                <strong>Key Points</strong><br>
                • Firms within the same group are direct competitors.<br>
                • Mobility barriers exist between groups (e.g., brand, technology, scale).<br>
                • Profitability can differ significantly between groups.<br>
                • Helps identify closest rivals and attractive positions.<br><br>

                <strong>Example (Indian 2-Wheeler Industry)</strong><br>
                • Premium segment: Royal Enfield, Harley-Davidson<br>
                • Volume segment: Hero, Honda, Bajaj<br>
                • Electric segment: Ather, Ola Electric<br><br>

                <strong>B. Scenario Planning (5 MARKS)</strong><br><br>
                <strong>Definition:</strong> A disciplined method for imagining and preparing for several alternative futures by developing multiple plausible stories about how the environment might evolve.<br><br>

                <strong>Key Features & Benefits</strong><br>
                • Challenges “single official future” thinking<br>
                • Identifies early warning signals<br>
                • Tests strategy robustness across different futures<br>
                • Encourages strategic conversation & flexibility<br><br>

                <strong>Steps (Brief)</strong>: Identify driving forces → Develop 2–4 plausible scenarios → Analyse implications → Develop contingency plans.<br><br>

                <strong>Example</strong>: Shell Oil famously used scenario planning in 1970s to prepare for oil price shocks.<br><br>

                <strong>Conclusion</strong><br>
                Strategic groups improve competitive analysis; scenario planning prepares for uncertainty — both are essential for robust strategy formulation.<br><br>

                <strong>Memory Help</strong><br>
                • Strategic Groups → “Same Strategy Club”<br>
                • Scenario Planning → “Multiple Possible Tomorrows”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3(b) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Discuss strategic groups and scenario planning. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Strategic Groups:</strong> Clusters of firms following similar strategies.<br>
                <strong>Scenario Planning:</strong> Developing multiple plausible future scenarios to test strategy robustness.<br><br>

                <strong>Memory Help:</strong> Groups = Similar strategy clusters | Scenarios = Multiple futures
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q4 ====================== -->
<!-- ====================== Q4 (Fully Detailed – 10 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q4</div>
        <div class="q-content">What do you mean by Differentiation? Discuss its types and also explain the advantages and disadvantages of Differentiation. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Meaning of Differentiation (2 MARKS)</strong><br>
                Differentiation is a competitive strategy in which a firm seeks to be unique in its industry along some dimensions that are widely valued by buyers. It creates a perception that the product/service is superior to competitors, allowing the firm to charge a premium price (Michael Porter).<br><br>

                <strong>Types / Bases of Differentiation (4 MARKS)</strong><br><br>

                <table>
                    <tr><th>Type</th><th>Description</th><th>Example</th></tr>
                    <tr>
                        <td><strong>1. Product Differentiation</strong></td>
                        <td>Features, performance, design, durability, reliability</td>
                        <td>Apple iPhone (design + ecosystem), Volvo (safety)</td>
                    </tr>
                    <tr>
                        <td><strong>2. Service Differentiation</strong></td>
                        <td>Delivery, installation, customer training, after-sales service</td>
                        <td>Asian Paints (free colour consultancy), Caterpillar (24×7 service)</td>
                    </tr>
                    <tr>
                        <td><strong>3. Personnel Differentiation</strong></td>
                        <td>Better-trained, courteous, knowledgeable employees</td>
                        <td>Singapore Airlines cabin crew, Ritz-Carlton staff</td>
                    </tr>
                    <tr>
                        <td><strong>4. Channel Differentiation</strong></td>
                        <td>Coverage, expertise, performance of distribution channels</td>
                        <td>Amway direct selling, Dell direct-to-customer model</td>
                    </tr>
                    <tr>
                        <td><strong>5. Image Differentiation</strong></td>
                        <td>Brand image, reputation, symbols, advertising</td>
                        <td>Luxury brands: Louis Vuitton, Rolex, Mercedes-Benz</td>
                    </tr>
                </table><br><br>

                <strong>Advantages of Differentiation (2 MARKS)</strong><br>
                • Premium pricing → higher margins<br>
                • Customer loyalty → lower price sensitivity<br>
                • Higher entry barriers<br>
                • Better bargaining power against suppliers & buyers<br>
                • Reduced threat of substitutes<br><br>

                <strong>Disadvantages / Risks (2 MARKS)</strong><br>
                • Higher costs (R&D, quality, advertising)<br>
                • Risk of imitation by competitors<br>
                • Over-differentiation (buyers may not value uniqueness)<br>
                • Changing customer tastes can make differentiator irrelevant<br><br>

                <strong>Conclusion</strong><br>
                Successful differentiation creates a sustainable competitive advantage when the uniqueness is valuable, rare, difficult to imitate, and backed by organisational capabilities.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                Types → <strong>P-S-P-C-I</strong><br>
                Product → Service → Personnel → Channel → Image<br><br>
                Advantages → <strong>P-L-E-B-S</strong> (Premium price, Loyalty, Entry barrier, Bargaining power, Substitute protection)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q5(a) ====================== -->
<!-- ====================== Q5(a) + Q5(b) – Fully Detailed 10 + 10 = 20 MARKS ====================== -->

<!-- ====================== Q5(a) – Competitive Strategy & Formulation ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(a)</div>
        <div class="q-content">What is a competitive strategy? How is competitive strategy formulated? (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Meaning of Competitive Strategy (2 MARKS)</strong><br>
                Competitive strategy (or business-level strategy) refers to the integrated set of actions taken by a business unit (SBU) to achieve competitive advantage and superior performance in its chosen industry or market segment.<br><br>

                <strong>Porter’s Three Generic Competitive Strategies (3 MARKS)</strong><br>
                1. **Cost Leadership** – Lowest cost producer (e.g., Walmart, Ryanair, Reliance Jio)<br>
                2. **Differentiation** – Unique & valued features (e.g., Apple, Mercedes, Titan)<br>
                3. **Focus** – Serving narrow segment exceptionally well<br>
                   - Cost Focus (e.g., Aldi, Kia in some markets)<br>
                   - Differentiation Focus (e.g., Rolex, Ferrari, Rolls-Royce)<br><br>

                <strong>How Competitive Strategy is Formulated (5 MARKS)</strong><br>
                1. **Analyse Industry Structure** – Using Porter’s Five Forces<br>
                2. **Identify Sources of Competitive Advantage** – Cost drivers or Differentiation drivers<br>
                3. **Assess Internal Capabilities** – Value chain analysis, core competencies<br>
                4. **Choose Appropriate Generic Strategy** – Cost, Differentiation or Focus<br>
                5. **Translate into Functional Policies** – Marketing, Operations, HR, Finance, R&D policies must support the chosen strategy<br>
                6. **Continuous Review & Adaptation** – Because of changing environment & competition<br><br>

                <strong>Conclusion</strong><br>
                A well-formulated competitive strategy creates a sustainable advantage by delivering superior value to customers while maintaining profitability.<br><br>

                <strong>Memory Help</strong><br>
                **C-D-F** → Cost Leadership | Differentiation | Focus<br>
                **Formulation Steps** → Industry → Advantage → Capabilities → Choose → Implement → Review
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q5(b) – Dimensions of Competitive Strategy ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(b)</div>
        <div class="q-content">What are the different dimensions that need to be considered while formulating a competitive strategy? (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Major Dimensions of Competitive Strategy (Hofer & Schendel) (9 MARKS)</strong><br><br>

                <table>
                    <tr><th>Dimension</th><th>Key Questions</th><th>Example</th></tr>
                    <tr>
                        <td><strong>1. Specialisation</strong></td>
                        <td>Breadth of product line & market segments served</td>
                        <td>Parle (only biscuits) vs ITC (multiple categories)</td>
                    </tr>
                    <tr>
                        <td><strong>2. Brand Identification</strong></td>
                        <td>Degree of branding & promotion</td>
                        <td>Lux, Nike vs generic/unbranded products</td>
                    </tr>
                    <tr>
                        <td><strong>3. Push vs Pull Strategy</strong></td>
                        <td>Emphasis on trade promotion vs consumer advertising</td>
                        <td>Pharma → Push; FMCG → Pull</td>
                    </tr>
                    <tr>
                        <td><strong>4. Channel Selection</strong></td>
                        <td>Direct, indirect, exclusive, online, retail</td>
                        <td>Boat → D2C + selective retail</td>
                    </tr>
                    <tr>
                        <td><strong>5. Product Quality</strong></td>
                        <td>High-end vs economy</td>
                        <td>Toyota (reliability) vs Rolls-Royce (luxury)</td>
                    </tr>
                    <tr>
                        <td><strong>6. Technological Leadership</strong></td>
                        <td>Leader vs follower</td>
                        <td>Tesla (EV tech) vs traditional car makers</td>
                    </tr>
                    <tr>
                        <td><strong>7. Vertical Integration</strong></td>
                        <td>Control over supply chain</td>
                        <td>Reliance (refinery to retail) vs others</td>
                    </tr>
                    <tr>
                        <td><strong>8. Cost Position</strong></td>
                        <td>Low-cost vs premium</td>
                        <td>Jio vs Airtel (initial phase)</td>
                    </tr>
                    <tr>
                        <td><strong>9. Service</strong></td>
                        <td>Level of customer service</td>
                        <td>Amazon vs traditional retail</td>
                    </tr>
                    <tr>
                        <td><strong>10. Price Policy</strong></td>
                        <td>Premium, parity or discount pricing</td>
                        <td>Patanjali (value pricing)</td>
                    </tr>
                    <tr>
                        <td><strong>11. Leverage/Financial Policy</strong></td>
                        <td>Debt-equity structure</td>
                        <td>High leverage for aggressive growth</td>
                    </tr>
                    <tr>
                        <td><strong>12. Relationship with Parent (for SBUs)</strong></td>
                        <td>Autonomy vs control</td>
                        <td>Tata Motors vs Tata Steel</td>
                    </tr>
                </table><br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                These dimensions help managers create a unique strategic position that is difficult for competitors to imitate.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **S-B-P-C-Q-T-V-C-S-P-L-R** → Specialisation, Brand, Push/Pull, Channel, Quality, Technology, Vertical integration, Cost, Service, Price, Leverage, Relationship with parent
            </div>
        </div>
    </div>
</div>


<!-- ====================== Q6 ====================== -->
<!-- ====================== Q6 (Fully Detailed – 10 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q6</div>
        <div class="q-content">Define Corporate Governance. Describe different models of Corporate Governance and also explain the concept of business ethics, citing examples. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Corporate Governance (4 MARKS)</strong><br><br>
                <strong>Definition:</strong>  
                Corporate Governance is the system of rules, policies, processes and practices by which a company is directed and controlled. It essentially involves balancing the interests of all stakeholders — shareholders, management, customers, suppliers, financiers, government and the community.<br><br>

                <strong>Key Objectives:</strong><br>
                • Transparency • Accountability • Fairness • Responsibility • Independence<br><br>

                <strong>Major Global Models of Corporate Governance (4 MARKS)</strong><br><br>

                <table>
                    <tr><th>Model</th><th>Ownership Pattern</th><th>Key Features</th><th>Examples</th></tr>
                    <tr>
                        <td><strong>Anglo-American (Market-based)</strong></td>
                        <td>Dispersed shareholders</td>
                        <td>Strong stock market, independent directors, one-tier board, focus on shareholder value</td>
                        <td>USA, UK, India (post-SEBI reforms)</td>
                    </tr>
                    <tr>
                        <td><strong>German (Bank-based / Two-tier)</strong></td>
                        <td>Banks & families hold large stakes</td>
                        <td>Supervisory board + Management board, co-determination (worker representation)</td>
                        <td>Germany, Netherlands</td>
                    </tr>
                    <tr>
                        <td><strong>Japanese (Keiretsu)</strong></td>
                        <td>Cross-shareholding among group companies</td>
                        <td>Lifetime employment, main bank system, long-term relationships</td>
                        <td>Toyota, Mitsubishi groups</td>
                    </tr>
                    <tr>
                        <td><strong>Family-dominated (Asian/Indian)</strong></td>
                        <td>Promoter/family control</td>
                        <td>Concentrated ownership, professional CEOs in later stages</td>
                        <td>Tata, Reliance, Birla, Bajaj</td>
                    </tr>
                </table><br><br>

                <strong>Business Ethics & Examples (2 MARKS)</strong><br>
                Business Ethics refers to moral principles and values that guide behaviour in the world of business.<br><br>
                • Tata Group → Refused to pay bribe in colonial era → “We do not bribe” policy<br>
                • Infosys → Voluntary disclosure, highest standards of transparency<br>
                • Patagonia → Environmental responsibility (“Don’t buy this jacket” campaign)<br>
                • Satyam scandal → Classic failure of ethics & governance<br><br>

                <strong>Conclusion</strong><br>
                Good corporate governance and strong business ethics are two sides of the same coin — both are essential for sustainable success, stakeholder trust and long-term value creation.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                Models → **A-G-J-F** (Anglo-American | German | Japanese | Family)<br>
                Ethics → **Tata-Infosys-Patagonia** (positive) vs **Satyam** (negative)
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q7 – All Four Short Notes (5×4 = 20 MARKS) – 100% FULLY DETAILED ====================== -->

<!-- ====================== Q7(a) General Environment and Strategy ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(a)</div>
        <div class="q-content">General Environment and Strategy (5 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction</strong><br>
                The General (or Macro) Environment consists of broad external forces that affect all organisations operating in an economy or society. It is also known as the remote environment or societal environment.<br><br>

                <strong>Components (PESTLE)</strong><br>
                • Political-Legal • Economic • Social-Cultural • Technological • Legal • Ecological/Environmental<br><br>

                <strong>Relevance to Strategic Management</strong><br>
                1. Source of Opportunities & Threats – Identifies major trends that can create new markets or destroy existing ones.<br>
                2. Shapes Industry Structure – Changes in macro factors can make an industry more or less attractive.<br>
                3. Influences Choice of Business – Firms enter industries/markets where macro environment is favourable.<br>
                4. Forces Strategic Adaptation – Companies must realign strategies when macro environment changes significantly.<br>
                5. Long-term Planning Horizon – General environment affects the organisation over 5–10+ years.<br><br>

                <strong>Examples</strong><br>
                • Rise of digital India + 4G/5G (Technological) → created multi-billion dollar opportunity for Jio, Paytm, Zomato.<br>
                • Health consciousness + ageing population (Social) → huge growth in health foods, wellness, insurance, and senior care services.<br>
                • Stringent emission norms (Political-Legal + Environmental) → forced automobile companies to shift to EVs.<br><br>

                <strong>Conclusion</strong><br>
                No strategy can be formulated in isolation from the general environment. Continuous scanning and alignment with macro trends separate winning organisations from the rest.<br><br>

                <strong>Memory Help</strong>: PESTLE → “Outer circle of strategy”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7(b) Porter's Five Forces Framework ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(b)</div>
        <div class="q-content">Porter's Five Forces Framework (5 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction</strong><br>
                Michael Porter’s Five Forces Framework (1979) is the most widely used tool to analyse the competitive intensity and attractiveness of an industry.<br><br>

                <strong>The Five Forces</strong><br>
                1. Threat of New Entrants – Barriers to entry (capital, brand, patents, scale, regulation).<br>
                2. Bargaining Power of Suppliers – Few suppliers, unique input, high switching cost.<br>
                3. Bargaining Power of Buyers – Few buyers, low switching cost, price sensitivity.<br>
                4. Threat of Substitute Products/Services – Availability of alternatives.<br>
                5. Rivalry Among Existing Competitors – Number of players, growth rate, exit barriers, differentiation.<br><br>

                <strong>Strategic Implications</strong><br>
                • High forces → Low profitability → Avoid or change the rules.<br>
                • Low forces → High profitability → Attractive industry.<br>
                • Helps choose positioning, influence forces (e.g., create entry barriers), or exit unattractive industries.<br><br>

                <strong>Example</strong>: Indian telecom (high rivalry + low entry barriers initially) → price war → consolidation.<br><br>

                <strong>Memory Help</strong>: “New Entrants → Suppliers → Buyers → Substitutes → Rivalry” (clockwise circle)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7(c) Critical Success Factors ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(c)</div>
        <div class="q-content">The critical success factor (5 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Definition</strong><br>
                Critical Success Factors (CSFs) are the limited number of areas in which satisfactory results will ensure successful competitive performance for the organisation.<br><br>

                <strong>Sources of CSFs</strong><br>
                1. Industry Characteristics – e.g., low cost in budget airlines, on-time delivery in courier.<br>
                2. Competitive Position & Strategy – market leader sets the benchmark.<br>
                3. Environmental Factors – e.g., digital reach for e-commerce, fuel price for airlines.<br>
                4. Temporal/Internal Factors – e.g., new technology adoption, leadership change.<br><br>

                <strong>Characteristics</strong><br>
                • Few in number (usually 4–8)<br>
                • Different for each industry<br>
                • Change over time<br><br>

                <strong>Example</strong>: For Swiggy/Zomato → Delivery time < 30 min, Restaurant tie-ups, App experience, Pricing.<br><br>

                <strong>Conclusion</strong><br>
                Identifying and continuously monitoring CSFs helps management focus resources on what really matters for survival and success.<br><br>

                <strong>Memory Help</strong>: **I-C-E-I** → Industry | Competition | Environment | Internal
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7(d) Corporate Culture ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">7(d)</div>
        <div class="q-content">Corporate Culture (5 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Definition</strong><br>
                Corporate Culture is the set of shared values, beliefs, norms, assumptions and “the way we do things around here” that shapes employee behaviour and organisational performance.<br><br>

                <strong>Characteristics</strong><br>
                • Invisible but powerful<br>
                • Learned through stories, rituals, symbols, heroes<br>
                • Can be strong (high commitment) or weak<br><br>

                <strong>Role in Strategy</strong><br>
                • Strong, adaptive culture → fastest strategy implementation<br>
                • Misaligned culture → biggest barrier to change<br>
                • Culture eats strategy for breakfast (Peter Drucker)<br><br>

                <strong>Examples</strong><br>
                • Tata → Integrity, trust, nation-building<br>
                • Google → Innovation, “Don’t be evil”, openness<br>
                • Amazon → Customer obsession, ownership, frugality<br><br>

                <strong>Conclusion</strong><br>
                Successful organisations consciously build and manage culture that supports their strategy and values.<br><br>

                <strong>Memory Help</strong>: Culture = “Organisation ka DNA”
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
        if (btnIcon) { btnIcon.classList.toggle('fa-eye', !isOpen); btnIcon.classList.toggle('fa-eye-slash', isOpen); }
    }
</script>
@endsection