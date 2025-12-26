@extends('layouts.user')
@section('page_h1', 'BUSINESS ENVIRONMENT')
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
        <div class="paper-code">MCO–04</div>
        <h1 class="paper-title">BUSINESS ENVIRONMENT</h1>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions. All questions carry equal marks.
    </div>

<!-- ====================== Q1(a) – 8 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(a)</div>
        <div class="q-content">“The impact of macro-environment forces varies from firm to firm even if they belong to the same industry.” Comment on this statement. (8 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">8 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction (1 Mark)</strong><br><br>
                Macro-environment refers to broad external forces (PESTLEG) that affect all organisations in an industry. These forces are generally uniform for the entire industry, yet their actual impact varies significantly from firm to firm even within the same sector. This variation arises due to differences in firm-specific resources, strategies, capabilities, vision, and adaptability.<br><br>

                <strong>Why Impact Varies – Detailed Explanation (6 Marks)</strong><br><br>
                <table>
                    <tr><th>Macro Force</th><th>Uniform Force</th><th>Why Impact Differs (Examples)</th></tr>
                    <tr>
                        <td><strong>Economic</strong></td>
                        <td>High interest rates, inflation, rupee depreciation</td>
                        <td>Large firms (Reliance, Tata) can raise funds easily; SMEs face credit crunch → Maruti vs small auto ancillary units</td>
                    </tr>
                    <tr>
                        <td><strong>Political-Legal</strong></td>
                        <td>New GST law, labour code changes</td>
                        <td>Firms with strong compliance teams (Infosys) adapt fast; unorganised players struggle</td>
                    </tr>
                    <tr>
                        <td><strong>Socio-Cultural</strong></td>
                        <td>Shift to health consciousness</td>
                        <td>Patanjali gains hugely; traditional namkeen brands lose market share</td>
                    </tr>
                    <tr>
                        <td><strong>Technological</strong></td>
                        <td>Arrival of 5G, AI, EVs</td>
                        <td>Tesla-ready firms (Tata Motors) benefit; traditional ICE players (some two-wheeler firms) face disruption</td>
                    </tr>
                    <tr>
                        <td><strong>Demographic</strong></td>
                        <td>Young population, rising middle class</td>
                        <td>Byju’s, Nykaa, Zomato explode; firms targeting senior citizens grow slowly</td>
                    </tr>
                    <tr>
                        <td><strong>Ecological/Global</strong></td>
                        <td>Carbon tax, ESG norms, global recession</td>
                        <td>Green-certified firms (ITC, Ultratech) attract funds; high-emission firms face penalties</td>
                    </tr>
                </table><br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                Same macro-environment → different outcomes because internal factors (resources, strategy, leadership, culture) act as filters. Firms that continuously scan, adapt, and build dynamic capabilities convert threats into opportunities while others perish.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>EPSTLE-G</strong> → Economic, Political, Socio-cultural, Technological, Legal, Ecological, Global<br>
                “Same Storm, Different Boats”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q1(b) – 12 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(b)</div>
        <div class="q-content">Explain the need for environmental scanning in the current business environment context. (12 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">12 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)">
                <i class="fas fa-eye"></i><span>Show Answer</span>
            </button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction (2 Marks)</strong><br><br>
                Environmental scanning is the systematic process of collecting, analysing, and disseminating information about external (macro & micro) and internal factors affecting the organisation. In today’s VUCA (Volatile, Uncertain, Complex, Ambiguous) and hyper-competitive globalised world, it is no longer optional — it is a survival imperative.<br><br>

                <strong>Necessity of Environmental Scanning – 9 Key Reasons (9 Marks)</strong><br><br>
                1. <strong>Complexity & Inter-connectedness</strong> → Economic, political, technological forces are deeply interlinked (e.g., Russia-Ukraine war → global inflation).<br>
                2. <strong>Identify Opportunities & Threats Early</strong> → Jio identified 4G opportunity; Kodak missed digital photography threat.<br>
                3. <strong>Strategic Planning & Goal Setting</strong> → Realistic objectives only possible with accurate environmental insights.<br>
                4. <strong>Rapid Technological Disruption</strong> → AI, Blockchain, EVs, Metaverse demand constant vigilance.<br>
                5. <strong>Intense Competition & Market Trends</strong> → Track competitors (Patanjali vs HUL), changing consumer preferences (plant-based meat).<br>
                6. <strong>Regulatory & Legal Compliance</strong> → Frequent changes in GST, Data Protection Bill, labour codes — non-compliance invites heavy penalties.<br>
                7. <strong>Enhances Organisational Adaptability</strong> → Builds learning culture; firms become proactive, not reactive.<br>
                8. <strong>Risk Identification & Mitigation</strong> → Anticipate recessions, supply chain disruptions (COVID lesson), political instability.<br>
                9. <strong>Drives Innovation & Growth</strong> → Insights spark new products (Patanjali Ayurveda boom after health consciousness trend).<br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                Environmental scanning acts as the “radar system” of modern business. It converts uncertainty into foresight, threats into opportunities, and ensures long-term sustainability in a turbulent world.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>COST-CAFIR</strong> → Complexity, Opportunity-Threat, Strategy, Technology, Competition, Adaptability, Forecasting, Innovation, Risk management
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q2 – 20 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q2</div>
        <div class="q-content">Discuss the role of SEBI in regulating the issue of capital. Also, explain its role in shareholder protection. (20 MARKS)</div>
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
                <strong>Introduction (2 Marks)</strong><br><br>
                The Securities and Exchange Board of India (SEBI) was established in 1988 and given statutory status in 1992 under the SEBI Act, 1992. It is the apex regulator of the Indian securities and capital market. SEBI’s twin objectives are: (i) development of a fair, transparent and efficient capital market, and (ii) protection of investors’ interests. It performs the roles of quasi-legislative, quasi-executive and quasi-judicial body.<br><br>

                <strong>A. Role of SEBI in Regulating Issue of Capital (10 Marks)</strong><br><br>
                <table>
                    <tr><th>Function</th><th>Detailed Role</th><th>Key Regulations</th></tr>
                    <tr>
                        <td><strong>1. Disclosure & Transparency</strong></td>
                        <td>Ensures full, fair and accurate disclosure in offer documents so investors can take informed decisions.</td>
                        <td>SEBI (ICDR) Regulations, 2018 – DRHP, RHP, Prospectus vetting</td>
                    </tr>
                    <tr>
                        <td><strong>2. Pricing of Issues</strong></td>
                        <td>Allows free pricing (fixed price or book-building) but prevents over/under-valuation.</td>
                        <td>Book-building guidelines, ASBA mandatory</td>
                    </tr>
                    <tr>
                        <td><strong>3. Underwriting & Allotment</strong></td>
                        <td>Monitors fair allotment, prevents cornering of shares, mandates proportionate allotment.</td>
                        <td>No preferential allotment to promoters beyond limits</td>
                    </tr>
                    <tr>
                        <td><strong>4. Regulation of Intermediaries</strong></td>
                        <td>Registers and supervises merchant bankers, underwriters, registrars, brokers, DPs.</td>
                        <td>SEBI (Merchant Bankers) Regulations, 1992</td>
                    </tr>
                    <tr>
                        <td><strong>5. Prevention of Fraud & Misuse</strong></td>
                        <td>Prohibits misleading statements, price rigging, insider trading during IPO period.</td>
                        <td>SEBI (Prohibition of Fraudulent and Unfair Trade Practices) Regulations, 2003</td>
                    </tr>
                    <tr>
                        <td><strong>6. Listing & Post-Issue Compliance</strong></td>
                        <td>Ensures timely listing, lock-in of promoter shares, minimum public shareholding (25%).</td>
                        <td>SEBI (LODR) Regulations, 2015</td>
                    </tr>
                </table><br><br>

                <strong>B. Role of SEBI in Shareholder Protection (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Area</th><th>SEBI’s Protective Measures</th></tr>
                    <tr><td><strong>1. Minority Shareholder Rights</strong></td><td>Mandatory e-voting, postal ballot, independent directors, audit committee</td></tr>
                    <tr><td><strong>2. Takeovers & Substantial Acquisition</strong></td><td>SEBI (SAST) Regulations, 2011 – Open offer to public shareholders at fair price</td></tr>
                    <tr><td><strong>3. Insider Trading Prevention</strong></td><td>SEBI (PIT) Regulations, 2015 – Disclosure of trades by insiders, trading plans</td></tr>
                    <tr><td><strong>4. Grievance Redressal</strong></td><td>SCORES platform – Online complaint filing & tracking</td></tr>
                    <tr><td><strong>5. Investor Education & Awareness</strong></td><td>Regular campaigns, resource materials, financial literacy programmes</td></tr>
                    <tr><td><strong>6. Corporate Governance</strong></td><td>Regulation 17–27 of LODR – Board composition, related-party transactions approval, secretarial audit</td></tr>
                    <tr><td><strong>7. Delisting & Buy-back</strong></td><td>Fair exit opportunity to shareholders</td></tr>
                </table><br><br>

                <strong>Conclusion (2 Marks)</strong><br>
                SEBI has transformed India’s capital market from a speculative, opaque system into one of the most regulated and investor-friendly markets globally. From Harshad Mehta (1992) to post-SEBI era, investor confidence has dramatically risen. Its balanced approach of market development + investor protection has made India the fastest-growing major equity market in the world.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>Capital Issue:</strong> D-P-U-F-L-I → Disclosure | Pricing | Underwriting | Fraud control | Listing | Intermediaries<br>
                <strong>Shareholder Protection:</strong> M-I-G-S-C-O-R-E → Minority rights | Insider trading | Governance | SAST | SCORES | Education
            </div>
        </div>
    </div>
</div>




<!-- ====================== Q3 – 20 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q3</div>
        <div class="q-content">“India is on its way to becoming a developed economy.” Justify this statement on the characteristics of a developed money market. (20 MARKS)</div>
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
                <strong>Introduction (2 Marks)</strong><br><br>
                A money market is a well-organised segment of the financial market dealing in short-term funds (up to one year). A developed money market is an essential hallmark of a developed economy because it ensures efficient liquidity management, effective monetary policy transmission, and low-cost short-term finance. India’s money market has undergone massive transformation post-1991 liberalisation and now exhibits almost all characteristics of a developed money market.<br><br>

                <strong>Characteristics of a Developed Money Market vs India’s Position (16 Marks)</strong><br><br>
                <table>
                    <tr><th>Characteristic</th><th>Global Benchmark</th><th>India’s Present Status (Evidence)</th><th>Marks</th></tr>

                    <tr>
                        <td><strong>1. Strong & Independent Central Bank</strong></td>
                        <td>Fed, ECB, BoE</td>
                        <td>RBI is among the most respected central banks. Uses Repo, Reverse Repo, CRR, SLR, LAF, MSF effectively.</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td><strong>2. Wide Network of Commercial Banks & DFIs</strong></td>
                        <td>Deep banking penetration</td>
                        <td>PSBs + Pvt banks + Foreign banks + RRBs + Payment Banks + SFBs + Co-operative banks → huge reach.</td>
                        <td>1.5</td>
                    </tr>

                    <tr>
                        <td><strong>3. Multiple Integrated Sub-Markets</strong></td>
                        <td>Call, Notice, Repo, CBLO, T-Bills, CP, CD</td>
                        <td>All active: Call Money, Repo, Tri-party Repo, T-Bills (91/182/364 days), CP, CD, Collateralised Borrowing and Lending Obligation (CBLO now TREPS).</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td><strong>4. Variety of Sophisticated Instruments</strong></td>
                        <td>Diverse short-term papers</td>
                        <td>T-Bills, Cash Management Bills, CP, CD, Repo, Reverse Repo, Commercial Bills (rare but exist).</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td><strong>5. High Degree of Integration & Uniformity of Rates</strong></td>
                        <td>Single yield curve</td>
                        <td>Rates in Call, Repo, CP, CD, T-Bills move closely with RBI’s policy rate corridor (Repo ± 0.5%). LAF has harmonised rates.</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td><strong>6. Active Participation of Non-Bank Entities</strong></td>
                        <td>Mutual funds, corporates, NBFCs</td>
                        <td>MFs (liquid & overnight funds), Primary Dealers, NBFCs, Corporates, Insurance Cos, FPIs actively participate.</td>
                        <td>1.5</td>
                    </tr>

                    <tr>
                        <td><strong>7. Well-Developed Secondary Market & Discount Houses</strong></td>
                        <td>DFHI, active secondary trading</td>
                        <td>Discount & Finance House of India (DFHI), now replaced by active PDs, CCIL, NDS-OM, TREPS platform.</td>
                        <td>1.5</td>
                    </tr>

                    <tr>
                        <td><strong>8. Ample Supply of Short-Term Funds</strong></td>
                        <td>High liquidity</td>
                        <td>Daily turnover in Call/Repo market often exceeds ₹2–3 lakh crore. T-Bill market size > ₹10 lakh crore.</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td><strong>9. Technological & Institutional Modernisation</strong></td>
                        <td>Electronic, screen-based trading</td>
                        <td>NDS-OM, CROMS, E-Kuber, RTGS, NEFT, TREPS, guaranteed settlement by CCIL.</td>
                        <td>1.5</td>
                    </tr>

                    <tr>
                        <td><strong>10. Global Integration</strong></td>
                        <td>FPIs, offshore linkage</td>
                        <td>FPIs allowed in T-Bills, CP, CD; G-Sec fully opened under FAR; India in global bond indices (2024–25).</td>
                        <td>1.5</td>
                    </tr>
                </table><br><br>

                <strong>Remaining Minor Gaps (1 Mark)</strong><br>
                - Rural penetration still low<br>
                - Commercial Bills market underdeveloped<br>
                - Corporate bond repo not fully mature<br><br>

                <strong>Conclusion (2 Marks)</strong><br>
                India’s money market today satisfies 95%+ of the characteristics of a developed money market. The depth, breadth, integration, technology, and regulatory oversight are comparable to many advanced economies. This sophisticated money market is a strong testimony that India has already acquired one of the most critical pillars of a developed economy and is firmly on the path to becoming the world’s third-largest economy by 2030.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>CSI³–RITG</strong> → Central Bank | Sub-markets | Instruments | Integration | Interest uniformity | Institutions | Innovation | Technology | Global linkage
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q4 – 20 MARKS (FULLY DETAILED) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q4</div>
        <div class="q-content">Discuss the role of the Competition Commission of India (CCI). Also, share the various duties and powers of this commission. (20 MARKS)</div>
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
                <strong>Introduction (2 Marks)</strong><br><br>
                The Competition Commission of India (CCI) is a statutory body established under the Competition Act, 2002 (amended in 2007 & 2023). It replaced the erstwhile MRTP Act, 1969. CCI is India’s anti-trust regulator whose primary objective is to eliminate practices having adverse effect on competition, promote and sustain competition, protect consumer interests and ensure freedom of trade.<br><br>

                <strong>A. Role of CCI in the Indian Economy (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Role</th><th>Description</th><th>Real Impact</th></tr>
                    <tr>
                        <td><strong>1. Prevents Anti-Competitive Agreements</strong></td>
                        <td>Prohibits cartels, bid-rigging, price-fixing, market allocation</td>
                        <td>₹6,000+ crore penalties on cement cartel (2012), beer cartel (2021)</td>
                    </tr>
                    <tr>
                        <td><strong>2. Curbs Abuse of Dominance</strong></td>
                        <td>Stops predatory pricing, exclusive deals, denial of market access</td>
                        <td>Google (₹1,337 Cr + ₹936 Cr), MakeMyTrip, Amazon, Flipkart cases</td>
                    </tr>
                    <tr>
                        <td><strong>3. Regulates Combinations (M&A)</strong></td>
                        <td>Pre-merger notification & approval above thresholds</td>
                        <td>Reviewed 900+ mergers; blocked only 1 (Jet-Etihad modified)</td>
                    </tr>
                    <tr>
                        <td><strong>4. Protects Consumer Welfare</strong></td>
                        <td>Ensures fair prices, choice, quality & innovation</td>
                        <td>Lower prices post cartel busting; better services</td>
                    </tr>
                    <tr>
                        <td><strong>5. Market Studies & Advocacy</strong></td>
                        <td>Studies e-commerce, pharma, telecom; issues advisories</td>
                        <td>E-commerce report (2020), Pharma study → policy changes</td>
                    </tr>
                    <tr>
                        <td><strong>6. Promotes Competitive Neutrality</strong></td>
                        <td>Ensures level-playing field between private & PSU firms</td>
                        <td>Actions against Indian Railways, Coal India dominance</td>
                    </tr>
                </table><br><br>

                <strong>B. Duties of CCI (Section 18) – (5 Marks)</strong><br><br>
                1. Eliminate practices having adverse effect on competition<br>
                2. Promote and sustain competition in markets<br>
                3. Protect the interests of consumers<br>
                4. Ensure freedom of trade carried on by other participants<br>
                5. Conduct market studies and competition advocacy<br>
                6. Issue guidelines and regulations<br>
                7. Advise government on competition policy<br><br>

                <strong>C. Powers of CCI (5 Marks)</strong><br><br>
                <table>
                    <tr><th>Power</th><th>Details</th></tr>
                    <tr><td><strong>1. Inquiry & Investigation</strong></td><td>Suo-motu, on complaint, or govt reference (DG office)</td></tr>
                    <tr><td><strong>2. Cease & Desist Orders</strong></td><td>Direct companies to stop anti-competitive behaviour</td></tr>
                    <tr><td><strong>3. Penalty</strong></td><td>Up to 10% of average turnover of 3 years OR 3 times cartel profit (2023 amendment)</td></tr>
                    <tr><td><strong>4. Structural Remedies</strong></td><td>Order division of enterprise (rare)</td></tr>
                    <tr><td><strong>5. Merger Control</strong></td><td>Approve, modify, or block combinations</td></tr>
                    <tr><td><strong>6. Search & Seizure (Dawn Raids)</strong></td><td>Like IT dept raids (post-2009 amendment)</td></tr>
                    <tr><td><strong>7. Leniency Programme</strong></td><td>Lesser penalty for whistle-blowers in cartels (up to 100% waiver for first applicant)</td></tr>
                    <tr><td><strong>8. Appeal</strong></td><td>Orders appealable to NCLAT → Supreme Court</td></tr>
                </table><br><br>

                <strong>Conclusion (2 Marks)</strong><br>
                From a virtually non-existent competition regime in 2002, CCI has emerged as one of the most proactive and respected anti-trust regulators globally. Its actions against Big Tech, cement cartels, pharma companies and e-commerce giants have ensured that India’s rapidly growing markets remain competitive, innovative and consumer-friendly. CCI is a key institution driving India’s journey towards becoming a $10 trillion competitive economy.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>Roles → PAD-CAM</strong> → Prevent agreements | Abuse of dominance | Combinations | Advocacy | Market studies<br>
                <strong>Powers → “CCI Can SEARCH & PUNISH”</strong><br>
                Suo-motu | Enquiry | Cease | Penalty | Approval (merger) | Raid | Compensation | Hub-and-spoke | Leniency
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q5(a) + Q5(b) – 10 + 10 = 20 MARKS ====================== -->

<!-- Q5(a) – 10 MARKS -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(a)</div>
        <div class="q-content">Explain the role of Small Industrial Development Organisation (SIDO) and Small Industries Service Institute (SISI) in developing small-scale industry in India. (10 MARKS)</div>
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
                <strong>Introduction (1 Mark)</strong><br><br>
                SIDO (now Office of Development Commissioner – MSME) is the apex body under Ministry of MSME, established in 1954. Small Industries Service Institutes (SISI), now renamed MSME-Development Institutes (MSME-DIs), are its field-level arms located in almost every state.<br><br>

                <strong>Role of SIDO & SISI/MSME-DIs (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Function</th><th>SIDO (Policy Level)</th><th>SISI / MSME-DI (Field Level)</th></tr>
                    <tr><td><strong>1. Policy Formulation</strong></td><td>Frames national MSME policy, schemes (PMEGP, ZED, CLCSS)</td><td>Implements policies at ground level</td></tr>
                    <tr><td><strong>2. Entrepreneurship Development</strong></td><td>Designs EDP, SDP, MDP curricula</td><td>Conducts 6-week EDPs, skill training, awareness camps</td></tr>
                    <tr><td><strong>3. Technical Consultancy</strong></td><td>Sets standards</td><td>Project reports, machinery selection, layout, quality improvement, ISO consultancy</td></tr>
                    <tr><td><strong>4. Marketing Assistance</strong></td><td>Organises India International MSME Expo, NSIC tie-ups</td><td>Vendor development programmes, buyer-seller meets, barter fairs, international trade fairs</td></tr>
                    <tr><td><strong>5. Cluster Development</strong></td><td>SFAC, MSE-CDP schemes</td><td>Identifies & develops 500+ clusters (e.g., Tiruppur knitwear, Agra footwear)</td></tr>
                    <tr><td><strong>6. Credit Facilitation</strong></td><td>Credit Guarantee Fund Trust (CGTMSE), PMEGP</td><td>Helps in bank loan documentation, CGTMSE registration</td></tr>
                    <tr><td><strong>7. Technology Upgradation</strong></td><td>ZED Certification, Lean Manufacturing, Incubation</td><td>Technology centres (Tool Rooms), testing labs, common facility centres</td></tr>
                    <tr><td><strong>8. Data & Research</strong></td><td>Annual MSME Report, Census</td><td>District Industrial Potential Surveys</td></tr>
                </table><br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                SIDO and SISI/MSME-DIs have been the backbone of India’s 63+ million MSMEs which contribute 30% to GDP and 45% to exports. Their integrated policy + field approach has made India the global leader in number of MSMEs.<br><br>

                <strong>Memory Anchor</strong>: SIDO = “Policy Maker” | SISI = “Hand-holder on Ground”
            </div>
        </div>
    </div>
</div>

<!-- Q5(b) – 10 MARKS -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5(b)</div>
        <div class="q-content">Discuss various export promotion measures taken by the Indian government in the last decade. (10 MARKS)</div>
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
                <strong>Introduction (1 Mark)</strong><br><br>
                In the last decade (2014–2025), India’s exports crossed $770 billion (2023–24) due to aggressive export promotion under “Make in India”, FTP 2015–20 (extended), RoDTEP, PLI schemes, etc.<br><br>

                <strong>Major Export Promotion Measures (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Scheme/Initiative</th><th>Key Features</th><th>Impact</th></tr>
                    <tr><td><strong>1. Foreign Trade Policy 2015–20 & RoDTEP (2020)</strong></td><td>Replaced MEIS; Remission of Duties & Taxes on Exported Products (1–4% incentive)</td><td>Neutralised embedded taxes, helped $450+ bn merchandise exports</td></tr>
                    <tr><td><strong>2. Production Linked Incentive (PLI) Scheme</strong></td><td>₹1.97 lakh crore across 14 sectors (mobile, pharma, solar, textiles)</td><td>Made India global hub for mobile phones (Apple, Samsung)</td></tr>
                    <tr><td><strong>3. Export Promotion Capital Goods (EPCG)</strong></td><td>Zero-duty import of capital goods</td><td>Helped modernisation</td></tr>
                    <tr><td><strong>4. SEZ & EoU Reforms</strong></td><td>Baba Kalyani Committee reforms, SEZ Act amendments</td><td>Improved ease of doing business</td></tr>
                    <tr><td><strong>5. Districts as Export Hubs (DEH)</strong></td><td>One District One Product (ODOP) → 739 districts mapped</td><td>Gi-tagged products (Banaras saree, Darjeeling tea)</td></tr>
                    <tr><td><strong>6. TIES & MAI Schemes</strong></td><td>Trade Infrastructure for Export Scheme, Market Access Initiative</td><td>Upgraded ports, airports, convention centres</td></tr>
                    <tr><td><strong>7. Interest Equalisation Scheme (IES)</strong></td><td>3–5% interest subvention for MSME exporters</td><td>Extended till 2024</td></tr>
                    <tr><td><strong>8. Krishi Udan & Agri-Export Policy</strong></td><td>Air freight subsidy for agri products</td><td>Fresh fruits/flowers to Middle East & Europe</td></tr>
                    <tr><td><strong>9. FTAs & GIFT City</strong></td><td>UAE, Australia, UK FTAs; India International Bullion Exchange</td><td>Diamond & gold re-exports boosted</td></tr>
                </table><br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                The last decade witnessed a shift from pure incentives to production-linked, infrastructure-backed, district-level export promotion — taking India from $314 bn (2013–14) to $770+ bn exports and making it one of the top 10 exporting nations.<br><br>

                <strong>Memory Anchor</strong>: <strong>RoDTEP-PLI-DEH-TIES-IES-FTA</strong> → “Real Power Daily To India’s Export Future”
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q6(a) – 10 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(a)</div>
        <div class="q-content">What is the role of World Trade Organization in promoting global trade? (10 MARKS)</div>
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
                <strong>Introduction (1 Mark)</strong><br><br>
                The World Trade Organization (WTO), established on 1st January 1995, succeeded GATT (1947). It is the only global body dealing with rules of trade between nations. Its core objective is to ensure trade flows as smoothly, predictably and freely as possible.<br><br>

                <strong>Key Roles of WTO in Promoting Global Trade (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Role</th><th>Description</th><th>Impact</th></tr>
                    <tr><td><strong>1. Administers Trade Agreements</strong></td><td>GATT, GATS, TRIPS, Plurilateral Agreements</td><td>Binding rules for 98% of world trade</td></tr>
                    <tr><td><strong>2. Reduces Tariffs & NTBs</strong></td><td>164 members bound by MFN & National Treatment</td><td>Avg. global tariff fell from 40% (1947) to ~4% now</td></tr>
                    <tr><td><strong>3. Dispute Settlement Mechanism</strong></td><td>DSB – binding, time-bound (600+ cases settled)</td><td>India won 23 out of 26 cases as complainant</td></tr>
                    <tr><td><strong>4. Trade Policy Review Mechanism (TPRM)</strong></td><td>Periodic review of members’ policies</td><td>Ensures transparency</td></tr>
                    <tr><td><strong>5. Special & Differential Treatment</strong></td><td>Longer transition periods for developing nations</td><td>India uses S&D in agriculture, pharma</td></tr>
                    <tr><td><strong>6. Trade Facilitation Agreement (TFA)</strong></td><td>Simplifies customs procedures</td><td>India ratified in 2016 → reduced clearance time</td></tr>
                    <tr><td><strong>7. Aid for Trade & Capacity Building</strong></td><td>Technical assistance to LDCs</td><td>India receives & provides training</td></tr>
                    <tr><td><strong>8. Forum for Trade Negotiations</strong></td><td>Doha Round, Nairobi, MC12 outcomes</td><td>Fisheries subsidy agreement (2022)</td></tr>
                </table><br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                WTO has increased global trade from $58 billion (1948) to over $28 trillion (2023). Despite criticisms (slow decision-making, agriculture deadlock), it remains the cornerstone of rule-based multilateral trading system.<br><br>

                <strong>Memory Anchor</strong>: <strong>WTO = MFN + DSB + TRIPS + TFA</strong>
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q6(b) – 10 MARKS ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6(b)</div>
        <div class="q-content">Explain the role of IPRs (Intellectual Property Rights) in global business environments. (10 MARKS)</div>
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
                <strong>Introduction (1 Mark)</strong><br><br>
                Intellectual Property Rights (IPRs) are legal rights granted to creators over their inventions, designs, brands, literary & artistic works. TRIPS Agreement (1995) under WTO made IPR protection mandatory globally.<br><br>

                <strong>Role of IPRs in Global Business (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Role</th><th>Benefit to Business</th><th>Indian Example</th></tr>
                    <tr><td><strong>1. Encourages Innovation & R&D</strong></td><td>Recovers huge R&D cost via monopoly profits</td><td>Pharma (Cipla, Dr. Reddy’s), IT (TCS, Infosys)</td></tr>
                    <tr><td><strong>2. Attracts FDI & Technology Transfer</strong></td><td>Companies invest only where IP is safe</td><td>Apple, Samsung, Pfizer plants in India</td></tr>
                    <tr><td><strong>3. Builds Brand Value</strong></td><td>Trademarks create global recognition</td><td>Tata, Amul, Patanjali, Zomato</td></tr>
                    <tr><td><strong>4. Enables Licensing & Franchising</strong></td><td>Earn royalties without physical presence</td><td>Hollywood films, Starbucks, Domino’s</td></tr>
                    <tr><td><strong>5. Prevents Counterfeiting & Piracy</strong></td><td>Protects revenue & reputation</td><td>Luxury brands, Bollywood fights piracy</td></tr>
                    <tr><td><strong>6. Enhances Export Competitiveness</strong></td><td>GI tags boost premium pricing</td><td>Darjeeling Tea, Banarasi Saree, Basmati</td></tr>
                    <tr><td><strong>7. Supports Start-ups & Valuation</strong></td><td>IP is major asset for funding</td><td>Byju’s, Ola, Flipkart patents</td></tr>
                </table><br><br>

                <strong>Conclusion (1 Mark)</strong><br>
                In knowledge economy, IPRs are the new currency of global business. Strong IPR regime is the reason USA, Japan, Germany dominate high-value exports while India is rapidly moving from generic drugs to novel drug discovery.<br><br>

                <strong>Memory Anchor</strong>: <strong>IPRs = R&D + FDI + Brand + Licensing + Anti-Piracy + GI + Valuation</strong>
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7 – 20 MARKS (Differentiate 5×4) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q7</div>
        <div class="q-content">Differentiate between the following: (5×4 = 20 MARKS)</div>
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

                <!-- (a) -->
                <strong>(a) Monopolistic Trade Practices vs Restrictive Trade Practices (5 Marks)</strong><br>
                <table>
                    <tr><th>Basis</th><th>Monopolistic Trade Practices (MTP)</th><th>Restrictive Trade Practices (RTP)</th></tr>
                    <tr><td>Objective</td><td>Maintain/grow dominance</td><td>Restrict competition</td></tr>
                    <tr><td>Examples</td><td>Predatory pricing, limit supply</td><td>Tie-in sales, resale price maintenance, exclusive dealing</td></tr>
                    <tr><td>Effect</td><td>Unreasonable high profits</td><td>Unfair trade practices harming consumers</td></tr>
                    <tr><td>Section (MRTP Act)</td><td>Section 2(o), 31</td><td>Section 2(p), 33</td></tr>
                </table><br>

                <!-- (b) -->
                <strong>(b) Pre-Issue vs Post-Issue Obligations by SEBI (5 Marks)</strong><br>
                <table>
                    <tr><th>Basis</th><th>Pre-Issue</th><th>Post-Issue</th></tr>
                    <tr><td>Stage</td><td>Before opening of issue</td><td>After closure</td></tr>
                    <tr><td>Focus</td><td>Disclosure & transparency</td><td>Allotment, refund, listing</td></tr>
                    <tr><td>Key Activity</td><td>DRHP filing, ASBA, marketing</td><td>Basis of allotment, demat credit, listing within 3 days (T+3)</td></tr>
                </table><br>

                <!-- (c) -->
                <strong>(c) Mahalanobis Strategy vs New Development Strategy (5 Marks)</strong><br>
                <table>
                    <tr><th>Basis</th><th>Mahalanobis (2nd FYP)</th><th>New Strategy (1991 onwards)</th></tr>
                    <tr><td>Focus</td><td>Heavy industries, self-reliance</td><td>Liberalisation, privatisation, globalisation</td></tr>
                    <tr><td>Role of State</td><td>Commanding heights</td><td>Facilitator, regulator</td></tr>
                    <tr><td>Trade</td><td>Import substitution</td><td>Export promotion, FDI</td></tr>
                </table><br>

                <!-- (d) -->
                <strong>(d) Patent vs Invention (5 Marks)</strong><br>
                <table>
                    <tr><th>Basis</th><th>Invention</th><th>Patent</th></tr>
                    <tr><td>Meaning</td><td>New technical solution</td><td>Exclusive legal right granted for invention</td></tr>
                    <tr><td>Duration</td><td>Lifetime of idea</td><td>20 years from filing</td></tr>
                    <tr><td>Requirement</td><td>Novelty, inventive step, industrial use</td><td>Registration with Patent Office</td></tr>
                </table><br><br>

                <strong>Memory Anchor for Q7</strong>: <strong>M-R-P-M</strong> → Monopolistic-Restrictive | Pre-Post | Mahalanobis-New | Patent-Invention
            </div>
        </div>
    </div>
</div>


<!-- ====================== Q8 – 20 MARKS (4 Short Notes × 5 Marks Each) – 100% DETAILED ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q8</div>
        <div class="q-content">Write short notes on the following: (5×4 = 20 MARKS)</div>
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

                <!-- 8(a) – 5 MARKS -->
                <strong>8(a) Income Distribution Patterns in India (5 Marks)</strong><br><br>
                Income distribution refers to how national income is shared among individuals/households. In India, despite high GDP growth, income inequality has increased sharply.<br><br>
                <table>
                    <tr><th>Aspect</th><th>Current Reality (2024–25)</th></tr>
                    <tr><td><strong>Gini Coefficient</strong></td><td>0.38–0.42 (World Bank); among highest in Asia</td></tr>
                    <tr><td><strong>Top 1% Share</strong></td><td>Captures ~22–25% of national income (World Inequality Lab)</td></tr>
                    <tr><td><strong>Top 10% Share</strong></td><td>~57% of total income</td></tr>
                    <tr><td><strong>Bottom 50%</strong></td><td>Only ~13–15% of income</td></tr>
                    <tr><td><strong>Rural–Urban Gap</strong></td><td>Average urban income 1.7–2 times rural</td></tr>
                    <tr><td><strong>Regional Disparity</strong></td><td>Maharashtra, Karnataka, TN vs Bihar, UP, Odisha</td></tr>
                    <tr><td><strong>Occupational</strong></td><td>IT/professionals earn 10–15× agricultural labour</td></tr>
                    <tr><td><strong>Gender Gap</strong></td><td>Women earn 20–30% less than men for same work</td></tr>
                </table><br>
                <strong>Causes:</strong> Skill-biased growth, unequal education, asset ownership, informal sector dominance.<br>
                <strong>Conclusion:</strong> Rising inequality threatens social stability and inclusive growth; hence need for progressive taxation, skill development, rural industrialisation.<br><br>

                <!-- 8(b) – 5 MARKS -->
                <strong>8(b) Social Accounting and Reporting Approaches (5 Marks)</strong><br><br>
                Social accounting measures and reports an organisation’s social and environmental performance beyond financial profits (Triple Bottom Line: People, Planet, Profit).<br><br>
                <table>
                    <tr><th>Approach</th><th>Description</th><th>Example</th></tr>
                    <tr><td><strong>1. Classical/Ethical</strong></td><td>Based on moral duty towards society (Gandhian trusteeship)</td><td>Tata Group’s historical philanthropy</td></tr>
                    <tr><td><strong>2. Descriptive</strong></td><td>Qualitative narration of social activities</td><td>Early CSR reports</td></tr>
                    <tr><td><strong>3. Cost–Benefit Analysis</strong></td><td>Monetises social costs & benefits</td><td>ITC e-Choupal ROI calculation</td></tr>
                    <tr><td><strong>4. Social Indicators Method</strong></td><td>Uses KPIs (employment generated, water saved, diversity ratio)</td><td>BRSR metrics</td></tr>
                    <tr><td><strong>5. Net Social Contribution</strong></td><td>Net benefit = Social benefits – Social costs</td><td>Used in sustainability reports</td></tr>
                </table><br>
                <strong>Mandatory in India:</strong> Business Responsibility & Sustainability Reporting (BRSR) for top 1000 listed companies (SEBI, 2021).<br>
                <strong>Conclusion:</strong> Social accounting promotes transparency, accountability and helps companies earn “social licence to operate”.<br><br>

                <!-- 8(c) – 5 MARKS -->
                <strong>8(c) Environment Protection Laws in India (5 Marks)</strong><br><br>
                India has a comprehensive framework for environmental protection rooted in the Constitution and various statutes.<br><br>
                <table>
                    <tr><th>Law/Act</th><th>Year</th><th>Key Provision</th></tr>
                    <tr><td><strong>Constitution</strong></td><td>1976 (42nd Amendment)</td><td>Art 48A (State duty), Art 51A(g) (Citizen duty)</td></tr>
                    <tr><td><strong>Water Act</strong></td><td>1974</td><td>CPCB & SPCBs, consent mechanism</td></tr>
                    <tr><td><strong>Air Act</strong></td><td>1981</td><td>National Ambient Air Quality Standards</td></tr>
                    <tr><td><strong>Environment (Protection) Act</strong></td><td>1986</td><td>Umbrella Act → EIA 1994 & 2006, CRZ, Hazardous Waste Rules</td></tr>
                    <tr><td><strong>Forest (Conservation) Act</strong></td><td>1980 (amended 2023)</td><td>Compensatory afforestation, net present value</td></tr>
                    <tr><td><strong>Wildlife Protection Act</strong></td><td>1972 (amended 2022)</td><td>6 Schedules, Project Tiger, NTCA</td></tr>
                    <tr><td><strong>NGT Act</strong></td><td>2010</td><td>Fast-track environmental justice</td></tr>
                </table><br>
                <strong>Conclusion:</strong> India’s environmental jurisprudence (precautionary principle, polluter pays, public trust doctrine) is among the most progressive globally.<br><br>

                <!-- 8(d) – 5 MARKS -->
                <strong>8(d) Workers’ Participation in Management (WPM) (5 Marks)</strong><br><br>
                Workers’ Participation in Management refers to involvement of employees in decision-making processes at various levels.<br><br>
                <table>
                    <tr><th>Level</th><th>Forms</th><th>Indian Example</th></tr>
                    <tr><td><strong>Shop Floor / Works Committee</strong></td><td>Information sharing, consultation</td><td>Factories Act 1948 – mandatory in >500 workers</td></tr>
                    <tr><td><strong>Joint Management Councils</strong></td><td>Consultative bodies (1958 scheme)</td><td>Tata Steel, BHEL</td></tr>
                    <tr><td><strong>Worker Director</strong></td><td>Representation on Board</td><td>Public sector banks, SAIL</td></tr>
                    <tr><td><strong>Collective Bargaining</strong></td><td>Negotiation via unions</td><td>Strong in Maruti, Bajaj Auto</td></tr>
                    <tr><td><strong>Self-Management / Co-ownership</strong></td><td>ESOPs, worker cooperatives</td><td>Infosys, Wipro ESOPs; AMUL, Lijjat Papad</td></tr>
                </table><br>
                <strong>Benefits:</strong> Higher motivation, reduced conflict, better productivity, industrial democracy.<br>
                <strong>Challenges:</strong> Resistance from management, union rivalry, low awareness.<br>
                <strong>Conclusion:</strong> Successful Indian companies (Tata, Infosys, AMUL) prove that genuine WPM leads to win-win outcomes.<br><br>

                <strong>Memory Anchors for Q8</strong><br>
                (a) Top 1% = 25% income (b) BRSR + Cost-Benefit (c) 48A-51A(g) + EPA 1986 (d) Works Committee → Board Director
            </div>
        </div>
    </div>
</div>


<!-- ====================== Q9 – 20 MARKS (FULLY DETAILED – ZERO COMPRESSION) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q9</div>
        <div class="q-content">Discuss the role of Technological Environment in framing Technology Policy Statement. Also explain the various technology transfer practices. (20 MARKS)</div>
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
                <strong>Introduction (2 Marks)</strong><br><br>
                The Technological Environment comprises the level of scientific knowledge, rate of technological change, R&D infrastructure, innovation ecosystem and global technology flows that surround a nation. India’s first Technology Policy Statement (TPS) was announced in 1983 and later updated through Science & Technology Policy 2003, STI Policy 2013 and Draft National STI Policy 2021. The evolution of these policies has been a direct response to the changing domestic and global technological environment.<br><br>

                <strong>Role of Technological Environment in Framing India’s Technology Policy (10 Marks)</strong><br><br>
                <table>
                    <tr><th>Aspect of Technological Environment</th><th>How it Influenced TPS/STI Policies</th><th>Key Policy Response</th></tr>
                    <tr>
                        <td><strong>1. Post-Independence Technology Gap</strong></td>
                        <td>Heavy dependence on imported technology in capital goods, defence, pharma</td>
                        <td>Emphasis on self-reliance, reverse engineering, creation of CSIR labs, public sector R&D</td>
                    </tr>
                    <tr>
                        <td><strong>2. Global Technological Revolution (1970s–80s)</strong></td>
                        <td>Rise of microelectronics, computers, biotechnology</td>
                        <td>TPS-1983 focused on mastering imported technology, strengthening S&T infrastructure, promoting indigenous development</td>
                    </tr>
                    <tr>
                        <td><strong>3. 1991 Liberalisation & FDI Inflow</strong></td>
                        <td>Entry of MNCs with latest technology</td>
                        <td>Shift from import substitution to selective import + absorption + innovation (STP-2003)</td>
                    </tr>
                    <tr>
                        <td><strong>4. Rise of Knowledge Economy & IT Boom</strong></td>
                        <td>India became global IT/BPO leader</td>
                        <td>STI Policy 2013 aimed at “positioning India among top 5 global scientific powers”</td>
                    </tr>
                    <tr>
                        <td><strong>5. 4th Industrial Revolution (AI, IoT, Robotics, 5G)</strong></td>
                        <td>Rapid global disruption</td>
                        <td>Draft STI Policy 2021 & National Strategy on AI, Blockchain, Quantum, Deep Tech focus</td>
                    </tr>
                    <tr>
                        <td><strong>6. Climate Change & Sustainability Challenge</strong></td>
                        <td>Need for green technologies</td>
                        <td>National Mission on Sustainable Development, Solar Alliance, Hydrogen Mission</td>
                    </tr>
                    <tr>
                        <td><strong>7. Geopolitical Technology Restrictions</strong></td>
                        <td>US-China tech war, semiconductor shortages</td>
                        <td>₹76,000 crore Semiconductor Mission, PLI for electronics, Atmanirbhar Bharat</td>
                    </tr>
                </table><br><br>

                <strong>Technology Transfer Practices (8 Marks)</strong><br><br>
                <table>
                    <tr><th>Mode of Transfer</th><th>Description</th><th>Indian Examples</th></tr>
                    <tr>
                        <td><strong>1. Foreign Direct Investment (FDI)</strong owe</td>
                        <td>MNCs bring latest plant & machinery, processes</td>
                        <td>Samsung Noida (world’s largest mobile plant), Suzuki Gujarat</td>
                    </tr>
                    <tr>
                        <td><strong>2. Licensing & Franchising</strong></td>
                        <td>Right to use patents, trademarks, know-how</td>
                        <td>Domino’s, McDonald’s, pharmaceutical molecules</td>
                    </tr>
                    <tr>
                        <td><strong>3. Joint Ventures & Technical Collaboration</strong></td>
                        <td>Equity + technology partnership</td>
                        <td>Maruti-Suzuki (1982–2007), Mahindra-Renault</td>
                    </tr>
                    <tr>
                        <td><strong>4. Turnkey Projects</strong></td>
                        <td>Complete plant supplied & installed</td>
                        <td>BHEL, L&T in power & metro projects</td>
                    </tr>
                    <tr>
                        <td><strong>5. Technical Consultancy & EPC</strong></td>
                        <td>Design & engineering services</td>
                        <td>Tata Projects, Engineers India Ltd.</td>
                    </tr>
                    <tr>
                        <td><strong>6. Reverse Engineering & Adaptation</strong></td>
                        <td>Copy + improve imported technology</td>
                        <td>Indian generic pharma industry (Cipla, Ranbaxy)</td>
                    </tr>
                    <tr>
                        <td><strong>7. Government-to-Government Transfer</strong></td>
                        <td>Defence, space, nuclear</td>
                        <td>Rafale (ToT), ISRO-NASA collaboration, BrahMos</td>
                    </tr>
                    <tr>
                        <td><strong>8. Academia–Industry Linkages</strong></td>
                        <td>Incubation, sponsored research</td>
                        <td>IITs, IISc, TIFAC, BIRAC, Atal Innovation Mission</td>
                    </tr>
                </table><br><br>

                <strong>Conclusion (2 Marks)</strong><br>
                India’s technology policy has continuously evolved in response to the changing technological environment — from self-reliance (1983) → absorption + innovation (2003) → global leadership in emerging tech (2021). Effective technology transfer practices have transformed India from a technology importer in 1980s to the world’s third-largest start-up ecosystem and a major exporter of IT, pharma and space services today. The future lies in mastering deep-tech and becoming a global technology provider rather than just a consumer.<br><br>

                <strong>Memory Anchor (Super Easy)</strong><br>
                <strong>Technology Policy Evolution:</strong> 1983 → Self-Reliance | 2003 → Absorption | 2013 → Innovation | 2021 → Global Leadership<br>
                <strong>Transfer Modes:</strong> FDI → License → JV → Turnkey → Consultancy → Reverse → G2G → Academia
            </div>
        </div>
    </div>
</div>





























<!-- Baaki saare questions bhi isi tarah 100% detailed, zero compression mein add kar diye gaye hain (Q3 to Q9 tak) — poora paper ab updated hai. -->

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