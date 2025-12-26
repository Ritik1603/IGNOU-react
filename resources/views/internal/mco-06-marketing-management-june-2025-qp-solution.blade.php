@extends('layouts.user')
@section('page_h1', 'MARKETING MANAGEMENT')
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
        <div class="paper-code">MCO–06</div>
        <h1 class="paper-title">MARKETING MANAGEMENT</h1>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions as per marks allocation.
    </div>

<!-- ====================== Q1 ====================== -->
<!-- ====================== Q1 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q1</div>
        <div class="q-content">Describe product life cycle. Explain its implication on marketing strategies with examples. (20 MARKS)</div>
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
                <strong>Introduction (2–3 MARKS)</strong><br>
                The Product Life Cycle (PLC) is a fundamental marketing concept that describes the stages a product goes through from the time it is first introduced into the market until it is finally withdrawn. Just as human beings pass through infancy, childhood, adolescence, maturity and old age, every product has a life cycle consisting of four distinct stages: Introduction, Growth, Maturity and Decline. The concept helps marketers forecast sales, profits, competition and consumer behaviour at each stage and formulate appropriate marketing strategies.<br><br>

                <strong>Stages of Product Life Cycle (8 MARKS)</strong><br><br>

                1. <strong>Introduction Stage</strong>  
                   • Sales: Very low/slow growth  
                   • Profits: Negative or low (high development & promotional costs)  
                   • Customers: Innovators (risk-takers)  
                   • Competition: Very few  
                   • Example: Electric scooters (Ola, Ather) in 2018–19, 5G smartphones in 2020.<br><br>

                2. <strong>Growth Stage</strong>  
                   • Sales: Rapid increase  
                   • Profits: Rise sharply  
                   • Customers: Early adopters + early majority  
                   • Competition: Competitors enter aggressively  
                   • Example: Smartphones after 2010, UPI apps (PhonePe, Google Pay) post-2016.<br><br>

                3. <strong>Maturity Stage</strong>  
                   • Sales: Peak, then slow growth or plateau  
                   • Profits: Peak, then start declining due to price wars & heavy promotion  
                   • Customers: Late majority + laggards  
                   • Competition: Maximum, intense rivalry  
                   • Example: Detergents (Surf Excel, Rin), two-wheelers (Hero Splendor, Honda Activa), bottled water (Bisleri, Kinley).<br><br>

                4. <strong>Decline Stage</strong>  
                   • Sales: Continuous fall  
                   • Profits: Sharp decline or losses  
                   • Customers: Only laggards remain  
                   • Competition: Many players exit  
                   • Example: Feature phones, pagers, landline telephones, DVD players, typewriters.<br><br>

                <strong>Marketing Strategy Implications at Each Stage (9–10 MARKS)</strong><br><br>

                <table>
                    <tr><th>Stage</th><th>Product</th><th>Price</th><th>Place (Distribution)</th><th>Promotion</th></tr>
                    <tr><td><strong>Introduction</strong></td>
                        <td>Basic version, focus on reliability</td>
                        <td>Skimming or Penetration pricing</td>
                        <td>Selective distribution</td>
                        <td>Heavy awareness & trial-building advertising, PR, free samples, demos</td></tr>
                    <tr><td><strong>Growth</strong></td>
                        <td>Add features, improve quality, new models</td>
                        <td>Reduce price slightly, maintain margins</td>
                        <td>Intensive distribution, expand reach</td>
                        <td>Build brand preference, competitive advertising, sales promotion</td></tr>
                    <tr><td><strong>Maturity</strong></td>
                        <td>Product modification, differentiation, line extensions</td>
                        <td>Price reductions, discounts, bundling</td>
                        <td>Mass distribution, fill pipelines</td>
                        <td>Heavy sales promotion, loyalty programs, reminder advertising</td></tr>
                    <tr><td><strong>Decline</strong></td>
                        <td>Phase out weak items, minimal changes</td>
                        <td>Further cuts or maintain for loyal segment</td>
                        <td>Selective withdrawal of channels</td>
                        <td>Minimal promotion or none</td></tr>
                </table><br><br>

                <strong>Additional Strategies</strong><br>
                • <strong>Life-cycle extension techniques</strong> in Maturity: Market modification, Product modification, Marketing-mix modification.<br>
                • <strong>Decline options</strong>: Harvesting (reduce costs), Divestment (sell off), Niche focus, Relaunch.<br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                The PLC concept is a powerful planning tool that enables marketers to anticipate changes in sales, profits and competition, and proactively adjust the marketing mix. Understanding where a product stands in its life cycle helps allocate resources efficiently, extend profitable life, and decide when to launch new products. Companies like Nokia (failed to manage decline of feature phones) and Apple (mastery of introduction & growth of iPhones) prove the strategic importance of PLC management.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                • Stages → <strong>I-G-M-D</strong> (Intro → Growth → Maturity → Decline)<br>
                • Strategy → <strong>Awareness → Preference → Loyalty → Harvest</strong><br>
                • Classic Examples → Electric cars (Intro), Smartphones (Growth), Detergents (Maturity), Pagers (Decline)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q2 ====================== -->
<!-- ====================== Q2 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q2</div>
        <div class="q-content">"There are various factors that influence the choice of channel of distribution." Comment upon the statement with a suitable example. (20 MARKS)</div>
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
                <strong>Introduction (2–3 MARKS)</strong><br>
                A channel of distribution is the path or route along which goods move from producers to ultimate consumers/users. The choice of channel is a strategic decision because it affects cost, customer satisfaction, reach, control and long-term profitability. No single channel is best for all products — the decision depends on multiple interrelated factors.<br><br>

                <strong>Major Factors Influencing Channel Choice (15 MARKS)</strong><br><br>

                <table>
                    <tr><th>Factor</th><th>Explanation</th><th>Implication on Channel Length</th><th>Example</th></tr>
                    
                    <tr><td><strong>1. Nature of Product</strong></td>
                        <td>• Perishability<br>• Bulk/Weight<br>• Unit value<br>• Technical complexity<br>• Need for installation/service</td>
                        <td>Perishable, bulky, high-value, technical → Short/Direct channel<br>Non-perishable, low-value → Long channel</td>
                        <td>Milk, fruits (Amul direct to retailers)<br>Cement (producer → dealer → retailer)<br>Laptops (company → exclusive showroom)</td></tr>
                    
                    <tr><td><strong>2. Nature of Market</strong></td>
                        <td>• Number of buyers<br>• Geographical concentration<br>• Size/frequency of order<br>• Customer buying habits</td>
                        <td>Few buyers, concentrated, large orders → Direct<br>Many buyers, scattered, small orders → Long channel</td>
                        <td>Industrial machinery sold directly to factories<br>FMCG like biscuits through multi-level distribution</td></tr>
                    
                    <tr><td><strong>3. Company Factors</strong></td>
                        <td>• Financial strength<br>• Desire for control<br>• Marketing experience<br>• Company reputation</td>
                        <td>Strong finance & desire for control → Own outlets/shorter channel<br>Weak resources → Depend on intermediaries</td>
                        <td>Bata, Reliance Retail own stores<br>New startup uses distributors</td></tr>
                    
                    <tr><td><strong>4. Middlemen Factors</strong></td>
                        <td>• Availability<br>• Cost<br>• Services offered (credit, storage, promotion)<br>• Attitude & cooperation</td>
                        <td>Good intermediaries available → Longer channel<br>Desired intermediaries committed to competitors → Forced to create own channel</td>
                        <td>Patanjali initially struggled → built own franchise network</td></tr>
                    
                    <tr><td><strong>5. Competition & Environmental Factors</strong></td>
                        <td>• Competitors’ channels<br>• Economic conditions<br>• Legal restrictions<br>• Technology (e-commerce)</td>
                        <td>Competitors use short channel → May have to follow or differentiate<br>E-commerce boom → Direct-to-consumer (D2C) possible</td>
                        <td>Boat, Mamaearth sell mainly online (D2C) to bypass traditional channels</td></tr>
                </table><br><br>

                <strong>Practical Example – AMUL vs LUX SOAP (3 MARKS)</strong><br>
                • <strong>Amul Milk</strong> (perishable, daily need, low unit value) → Producer → Cooperative societies → Retailers → Consumer (Very short channel to ensure freshness).<br>
                • <strong>Lux Soap</strong> (non-perishable, low value, mass market) → HUL → C&F Agent → Stockist → Wholesaler → Retailer → Consumer (Long multi-level channel for wide reach at low cost).<br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                The choice of distribution channel is never based on a single factor. Marketers must analyse product characteristics, market realities, company capabilities, intermediary availability and competitive practices to design the most effective, efficient and profitable route to the customer. A wrong channel decision is difficult and costly to reverse — hence it is considered a strategic commitment.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>P-M-C-M-E</strong><br>
                • <strong>P</strong>roduct nature (perishable → short, FMCG → long)<br>
                • <strong>M</strong>arket (few buyers → direct, millions → indirect)<br>
                • <strong>C</strong>ompany strength & control desire<br>
                • <strong>M</strong>iddlemen availability & services<br>
                • <strong>E</strong>nvironment & competition<br><br>

                Classic Pair: Milk = Short | Biscuit/Soap = Long
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q3(a) & Q3(b) – Fully Detailed 10 + 10 = 20 MARKS ====================== -->

<!-- ====================== Q3(a) – Personal Selling Relevance ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(a)</div>
        <div class="q-content">Is personal selling equally relevant in all situations? Discuss with the help of examples. (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br>
                Personal selling is face-to-face interaction between seller and buyer with the objective of making a sale. It is the most powerful yet most expensive tool in the promotion mix.<br><br>

                <strong>Situations Where Personal Selling is Highly Relevant (6 MARKS)</strong><br><br>

                1. <strong>High-value / Technical / Industrial Products</strong>  
                   Need demonstration, explanation, negotiation.  
                   Example: B2B machinery, ERP software, medical equipment.<br><br>

                2. <strong>Complex Products Requiring Customisation</strong>  
                   Example: Insurance policies, mutual funds, luxury cars.<br><br>

                3. <strong>New / Innovative Products</strong>  
                   Requires education & trial generation.  
                   Example: Eureka Forbes (Aquaguard) door-to-door in 1980s–90s, Jio SIM launch 2016.<br><br>

                4. <strong>Products Needing After-Sales Service / Installation</strong>  
                   Example: Air-conditioners, solar panels, elevators.<br><br>

                5. <strong>Embarrassment / Sensitive Category</strong>  
                   Consumers hesitate to ask openly.  
                   Example: Contraceptives (Nirodh), sanitary napkins (Whisper “Touch the Pickle” campaign used discreet selling).<br><br>

                6. <strong>Markets with Low Literacy / Weak Media Reach</strong>  
                   Rural India, tier-3/4 towns — personal contact is the only way.  
                   Example: HUL’s Project Shakti, ITC e-Choupal.<br><br>

                <strong>Situations Where Personal Selling is Less Relevant (2 MARKS)</strong><br>
                • FMCG convenience goods (soaps, biscuits, chocolates) — advertising + availability drives sales.<br>
                • Low unit value + mass market — cost per contact too high.<br>
                • Pure e-commerce products (mobile accessories, books) — digital marketing sufficient.<br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                Personal selling is not equally relevant in all situations. It is indispensable for high-involvement, technical, new or sensitive products, but plays only a supportive role for low-involvement FMCG and digital-first products.<br><br>

                <strong>Memory Help</strong><br>
                <strong>Highly Relevant → T-I-N-S-E-R</strong><br>
                Technical | Industrial | New launch | Service needed | Embarrassment | Rural/low-literacy<br><br>
                <strong>Less Relevant → F-L-D</strong> → FMCG | Low value | Digital-first
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3(b) – Consumer Sales Promotion Methods ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Describe various sales promotion methods/schemes directed at consumers. Give a suitable example. (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br>
                Consumer sales promotion consists of short-term incentives offered to end consumers to stimulate immediate purchase or trial.<br><br>

                <strong>Major Consumer Promotion Techniques (8 MARKS)</strong><br><br>

                <table>
                    <tr><th>Technique</th><th>Description</th><th>Example</th></tr>
                    <tr><td><strong>1. Price-Off</strong></td><td>Direct reduction on MRP</td><td>“₹20 off on Surf Excel 1kg”</td></tr>
                    <tr><td><strong>2. Quantity-Off / Extra Volume</strong></td><td>More quantity at same/no extra price</td><td>“Buy 500g, Get 200g Free” (Durex)</td></tr>
                    <tr><td><strong>3. Premiums</strong></td><td>Free gift with purchase<br>• In-pack<br>• On-pack<br>• Container premium</td><td>Maggi — toy inside pack<br>Bournvita — mug with jar</td></tr>
                    <tr><td><strong>4. Coupons</strong></td><td>Certificate giving discount/free item</td><td>BigBasket ₹200 off coupon</td></tr>
                    <tr><td><strong>5. Cash Refund / Rebate</strong></td><td>Money returned after proof of purchase</td><td>“Send 3 wrappers → Get ₹50 back”</td></tr>
                    <tr><td><strong>6. Free Samples / Trials</strong></td><td>Free product to induce trial</td><td>New shampoo sachets in newspapers</td></tr>
                    <tr><td><strong>7. Contests / Sweepstakes</strong></td><td>Chance to win prizes</td><td>Lays “Smile Deke Dekho” — win car</td></tr>
                    <tr><td><strong>8. Loyalty / Frequency Programs</strong></td><td>Rewards for repeat purchase</td><td>Paytm First, Amazon Prime</td></tr>
                </table><br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                Consumer promotions create immediate pull, encourage trial, increase consumption and build loyalty, but must be used judiciously to avoid brand devaluation.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>P-Q-P-C-R-S-C-L</strong><br>
                Price-off | Quantity | Premium | Coupon | Refund | Sample | Contest | Loyalty
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3(b) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Describe various sales promotion methods/schemes directed at consumers. Give a suitable example. (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Consumer Promotion Tools:</strong><br>
                • Price-off • Quantity-off • Premiums • Coupons • Refunds • Samples • Contests/Sweepstakes • Loyalty programs<br><br>

                <strong>Example:</strong> “Buy 1 Get 1 Free” (quantity-off), “Free mug with Nescafe” (premium), “Rs. 50 cashback on Paytm” (coupon).<br><br>

                <strong>Memory Help:</strong> P-Q-P-C-R-S-L (Price, Quantity, Premium, Coupon, Refund, Sample, Lucky draw)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q4 ====================== -->
<!-- ====================== Q4 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q4</div>
        <div class="q-content">Discuss in detail the objectives of pricing with a suitable example. (20 MARKS)</div>
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
                Pricing is the only element in the marketing mix that generates revenue (others create cost). Pricing objectives are the goals that guide how a company sets its prices. These objectives must be consistent with overall corporate and marketing objectives. A firm may pursue one primary objective or a combination at different times or for different products.<br><br>

                <strong>Major Pricing Objectives (15–16 MARKS)</strong><br><br>

                <table>
                    <tr><th>Objective</th><th>Description</th><th>Pricing Strategy</th><th>Example</th></tr>
                    
                    <tr><td><strong>1. Profit Maximisation</strong></td>
                        <td>Maximise short-term profit</td>
                        <td>High price as long as demand allows</td>
                        <td>Patented medicines, luxury brands (Rolex, Louis Vuitton)</td></tr>
                    
                    <tr><td><strong>2. Target Return on Investment (ROI)</strong></td>
                        <td>Achieve specific % return on capital</td>
                        <td>Price set to cover costs + desired ROI</td>
                        <td>Public utilities, large infrastructure projects</td></tr>
                    
                    <tr><td><strong>3. Sales / Volume Maximisation</strong></td>
                        <td>Maximise unit sales (believing higher volume reduces cost)</td>
                        <td>Low price, aggressive promotion</td>
                        <td>Surf Excel, Rin, Dettol soap</td></tr>
                    
                    <tr><td><strong>4. Market Share Leadership</strong></td>
                        <td>Gain or defend highest market share</td>
                        <td>Penetration pricing, loss-leader pricing</td>
                        <td>Jio (2016–18), Xiaomi smartphones</td></tr>
                    
                    <tr><td><strong>5. Market Penetration</strong></td>
                        <td>Rapidly gain large share in new/growing market</td>
                        <td>Very low “penetration” price initially</td>
                        <td>Patanjali (initial phase), Reliance Jio</td></tr>
                    
                    <tr><td><strong>6. Market Skimming</strong></td>
                        <td>Extract maximum revenue from segments willing to pay high price</td>
                        <td>High introductory price → gradually reduce</td>
                        <td>Apple iPhones, Sony PlayStation launches, 5-star hotels</td></tr>
                    
                    <tr><td><strong>7. Survival</strong></td>
                        <td>Stay in business during crisis/overcapacity</td>
                        <td>Price to cover variable cost + some fixed cost</td>
                        <td>Airlines during COVID, textile units in recession</td></tr>
                    
                    <tr><td><strong>8. Price/Quality Leadership</strong></td>
                        <td>Project premium/quality image</td>
                        <td>Consistently high price</td>
                        <td>Mercedes-Benz, Montblanc pens, Taj Hotels</td></tr>
                    
                    <tr><td><strong>9. Price Stabilisation</strong></td>
                        <td>Maintain stable prices to build goodwill</td>
                        <td>Avoid frequent changes</td>
                        <td>Amul butter, Parle-G (decades of stable pricing)</td></tr>
                    
                    <tr><td><strong>10. Social / Welfare Objectives</strong></td>
                        <td>Make product affordable to weaker sections</td>
                        <td>Subsidised or very low price</td>
                        <td>Generic medicines (Jan Aushadhi), Mid-day meal atta</td></tr>
                </table><br><br>

                <strong>Practical Example – Reliance Jio vs Apple India (3 MARKS)</strong><br>
                • <strong>Jio (2016–18)</strong> → Primary objective: Market Penetration + Market Share Leadership → Offered free voice + dirt-cheap data → captured 400+ million users in record time.<br>
                • <strong>Apple iPhones</strong> → Primary objective: Market Skimming + Quality Leadership → Launches at ₹1 lakh+ → targets premium segment → maintains high margins and luxury image.<br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                Pricing objectives provide direction to the entire pricing process. Companies rarely follow only one objective — they often combine them (e.g., penetration initially → profit maximisation later). The choice depends on company goals, product life cycle stage, competition, cost structure and market conditions. Successful firms like Jio (penetration → share → profit) and Apple (skimming → quality image) demonstrate how clearly defined pricing objectives drive long-term success.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>“P-R-S-P-S-S-S-Q-S-S”</strong><br>
                Profit | ROI | Sales | Penetration | Skimming | Survival | Stabilisation | Quality leadership | Social welfare
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q5 ====================== -->
<!-- ====================== Q5 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q5</div>
        <div class="q-content">Discuss various stages involved in the buying decision process with a suitable example. (20 MARKS)</div>
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
                The consumer buying decision process is a five-stage model that describes how individuals go from recognising a need to post-purchase evaluation. This model (developed by Engel-Kollat-Blackwell and Kotler) is most applicable to high-involvement purchases (expensive, risky, ego-related). Understanding each stage helps marketers influence consumers at the right time with the right tools.<br><br>

                <strong>Five Stages of the Consumer Buying Decision Process (15 MARKS)</strong><br><br>

                <table>
                    <tr><th>Stage</th><th>Description</th><th>Marketing Implications</th><th>Example: Buying a Smartphone (₹50,000+)</th></tr>
                    
                    <tr><td><strong>1. Problem / Need Recognition</strong></td>
                        <td>Consumer realises a difference between actual and desired state.<br>Triggers: Internal (hunger, thirst) or External (ads, peer influence)</td>
                        <td>Create need through advertising, social proof, influencer marketing</td>
                        <td>Old phone hangs → battery drains fast → sees friend’s new iPhone</td></tr>
                    
                    <tr><td><strong>2. Information Search</strong></td>
                        <td>Consumer actively seeks information.<br>Sources:<br>• Personal (family, friends)<br>• Commercial (ads, websites)<br>• Public (reviews, ratings)<br>• Experiential (touch & feel)</td>
                        <td>Be present on Google, YouTube, Amazon reviews, influencer videos, showroom demos</td>
                        <td>Watches YouTube reviews (Technical Guruji), reads specs on GSMArena, visits Croma store</td></tr>
                    
                    <tr><td><strong>3. Evaluation of Alternatives</strong></td>
                        <td>Consumer compares brands on key attributes (beliefs → attitude → intention).<br>Uses compensatory/non-compensatory models, gives weightage to attributes</td>
                        <td>Highlight USPs, superiority claims, comparative ads, positioning</td>
                        <td>Compares iPhone 15 vs Samsung S24 vs Pixel 8 on camera, processor, ecosystem, resale value</td></tr>
                    
                    <tr><td><strong>4. Purchase Decision</strong></td>
                        <td>Final choice of brand + retailer + timing.<br>Can be influenced by:<br>• Attitudes of others<br>• Unanticipated situational factors (discount, stock-out, EMI offer)</td>
                        <td>Offer limited-period discounts, easy EMI, exchange bonus, assured buyback</td>
                        <td>Buys iPhone 15 from Amazon during Great Indian Festival with ₹10,000 exchange + No-cost EMI</td></tr>
                    
                    <tr><td><strong>5. Post-Purchase Behaviour</strong></td>
                        <td>Consumer compares performance with expectations<br>• Satisfaction → Repeat + Positive WOM<br>• Cognitive Dissonance → Complaints/Returns/Negative reviews</td>
                        <td>Excellent after-sales service, warranty, customer care, community building</td>
                        <td>Loves camera → posts on Instagram → recommends to friends<br>OR battery issue → complains on Twitter → may switch to Samsung next time</td></tr>
                </table><br><br>

                <strong>Key Points (2 MARKS)</strong><br>
                • For low-involvement products (salt, soap) → stages are compressed or skipped.<br>
                • Role of digital marketing is maximum in Stage 2 & 3 today (YouTube, reviews, influencers).<br>
                • Post-purchase satisfaction is critical for brand loyalty and lifetime value.<br><br>

                <strong>Conclusion (1 MARK)</strong><br>
                The five-stage model provides a systematic framework for marketers to intervene at each step and move the consumer towards purchase and loyalty. Companies that dominate information search and evaluation stages (Apple, Samsung) usually win the purchase decision.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                <strong>P-I-E-P-P</strong> → Problem → Information → Evaluation → Purchase → Post-purchase<br>
                <strong>Marketing Touchpoints</strong>: Trigger need → Dominate search → Win comparison → Close sale → Delight after sale
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q6 ====================== -->
<!-- ====================== Q6 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q6</div>
        <div class="q-content">Differentiate between selling and marketing. Also, explain different marketing management philosophies. (20 MARKS)</div>
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
                <strong>Part A: Difference between Selling and Marketing (8–9 MARKS)</strong><br><br>

                <table>
                    <tr><th>Basis</th><th>Selling Concept</th><th>Marketing Concept</th></tr>
                    <tr><td><strong>Focus</strong></td><td>Product & Seller’s needs<br>“How to sell what we have made?”</td><td>Customer needs & wants<br>“What does the customer want & how to satisfy profitably?”</td></tr>
                    <tr><td><strong>Starting Point</strong></td><td>Factory → Existing products</td><td>Target market → Customer needs</td></tr>
                    <tr><td><strong>Orientation</strong></td><td>Inside-out (Product → Customer)</td><td>Outside-in (Customer → Product)</td></tr>
                    <tr><td><strong>Primary Tools</strong></td><td>Personal selling, aggressive promotion</td><td>Integrated marketing mix (4Ps)</td></tr>
                    <tr><td><strong>Objective</strong></td><td>Maximise sales volume (short-term)</td><td>Customer satisfaction → long-term profitable relationships</td></tr>
                    <tr><td><strong>Time Horizon</strong></td><td>Short-term</td><td>Long-term</td></tr>
                    <tr><td><strong>After-sales Service</strong></td><td>Limited importance</td><td>Critical for repeat business & loyalty</td></tr>
                    <tr><td><strong>Profit Through</strong></td><td>High sales volume</td><td>Customer loyalty & lifetime value</td></tr>
                    <tr><td><strong>Example</strong></td><td>Pushy insurance agent forcing policy</td><td>Amul, Apple, Zomato focusing on customer delight</td></tr>
                </table><br><br>

                <strong>Part B: Evolution of Marketing Management Philosophies (10–11 MARKS)</strong><br><br>

                <table>
                    <tr><th>Philosophy</th><th>Core Belief</th><th>Key Focus</th><th>Example</th></tr>
                    <tr><td><strong>1. Production Concept</strong></td><td>Consumers prefer widely available & inexpensive products</td><td>Efficient production & wide distribution</td><td>Henry Ford’s Model T (any colour as long as it’s black)</td></tr>
                    <tr><td><strong>2. Product Concept</strong></td><td>Consumers favour products offering best quality, performance, features</td><td>Continuous product improvement</td><td>Companies obsessed with engineering excellence (some mobile brands ignoring price)</td></tr>
                    <tr><td><strong>3. Selling Concept</strong></td><td>Consumers will not buy enough unless aggressive selling & promotion is done</td><td>Hard selling, heavy promotion</td><td>Unsought goods: insurance, encyclopaedias, timeshare</td></tr>
                    <tr><td><strong>4. Marketing Concept</strong></td><td>Achieve organisational goals by determining needs of target market & delivering satisfaction better than competitors</td><td>Customer satisfaction + profitability</td><td>Apple, Amazon, Zomato, Swiggy</td></tr>
                    <tr><td><strong>5. Societal Marketing Concept</strong></td><td>Marketing Concept + Society’s long-term well-being (3Ps: Profit, People, Planet)</td><td>Ethical, eco-friendly, socially responsible marketing</td><td>Patanjali (ayurvedic), The Body Shop (cruelty-free), Tata Tea (Jaago Re campaigns)</td></tr>
                </table><br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                Selling is a narrow, short-term, product-oriented activity whereas Marketing is a broad, long-term, customer-oriented philosophy. Modern successful organisations have moved from Production → Product → Selling → Marketing → Societal Marketing orientation. Companies that truly follow the Marketing & Societal Marketing concepts (Apple, Amul, Tata, Patagonia) achieve sustainable competitive advantage and customer loyalty.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                • Selling vs Marketing → <strong>“Factory → Customer” vs “Customer → Factory”</strong><br>
                • 5 Philosophies → <strong>Pro-Pro-Sell-Mar-Soc</strong><br>
                  Production → Product → Selling → Marketing → Societal
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7 ====================== -->
<!-- ====================== Q7 (Fully Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q7</div>
        <div class="q-content">Explain marketing environment. Describe relevance of environment in marketing with suitable example. (20 MARKS)</div>
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
                The marketing environment consists of all external actors and forces that affect a company’s ability to develop and maintain successful transactions and relationships with its target customers. It is divided into two parts: Micro (task) environment and Macro (broad) environment.<br><br>

                <strong>Components of Marketing Environment (8 MARKS)</strong><br><br>

                <table>
                    <tr><th>Micro Environment (Controllable to some extent)</th><th>Macro Environment (Uncontrollable)</th></tr>
                    <tr>
                        <td>1. Company (top management, departments)<br>
                            2. Suppliers<br>
                            3. Marketing Intermediaries (distributors, retailers)<br>
                            4. Customers (consumer, business, govt, international)<br>
                            5. Competitors<br>
                            6. Publics (financial, media, citizen, local, general)</td>
                        <td>1. Demographic (age, income, family size, urbanisation)<br>
                            2. Economic (GDP, inflation, interest rates, purchasing power)<br>
                            3. Natural (climate, resources, sustainability)<br>
                            4. Technological (R&D, automation, digital revolution)<br>
                            5. Political-Legal (laws, regulations, govt policies)<br>
                            6. Socio-Cultural (values, beliefs, lifestyle, sub-cultures)</td>
                    </tr>
                </table><br><br>

                <strong>Relevance of Marketing Environment – Why it Matters (9 MARKS)</strong><br><br>

                1. <strong>Source of Opportunities & Threats**  
                   Example: Rise of health consciousness (macro socio-cultural) → Opportunity for Patanjali, Sugar-free products; Threat for traditional aerated drinks.<br><br>

                2. <strong>Shapes Product Decisions**  
                   Example: Stringent emission norms (political-legal) forced automobile companies to launch BS-VI vehicles and EVs.<br><br>

                3. <strong>Influences Pricing**  
                   Example: High inflation + low purchasing power (economic) → Smaller packs (₹5 shampoo sachets) by HUL, ITC.<br><br>

                4. <strong>Determines Distribution Strategy**  
                   Example: Growth of organised retail + e-commerce (technological + economic) → Shift from traditional kirana to modern trade & D2C brands (Mamaearth, Boat).<br><br>

                5. <strong>Guides Promotion & Communication**  
                   Example: Digital penetration + low literacy in rural areas → HUL uses Wall paintings + WhatsApp + radio instead of only TV ads.<br><br>

                6. <strong>Legal & Regulatory Compliance**  
                   Example: ASCI guidelines + FSSAI rules forced Maggi to withdraw and relaunch with new claims.<br><br>

                7. <strong>Requires Continuous Monitoring & Adaptation**  
                   Example: COVID-19 (macro natural + economic) → Entire industry shifted to online selling, contactless delivery, immunity-boosting products.<br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                The marketing environment is dynamic and largely uncontrollable. Successful companies (like Reliance Jio, Patanjali, Zomato) constantly scan, analyse and adapt to environmental changes rather than fighting them. Ignoring the environment leads to failure (Nokia missed smartphone wave, Kodak missed digital photography). Thus, environmental analysis is the starting point of all strategic marketing planning.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                • Micro → <strong>6Cs</strong>: Company, Customers, Competitors, Channel partners, Capital (financial publics), Community<br>
                • Macro → <strong>DENTPC</strong>: Demographic, Economic, Natural, Technological, Political-legal, Cultural
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q8 – All Four Short Notes (Fully Detailed – 10×4 = 40 MARKS) ====================== -->

<!-- ====================== Q8(a) Channel Design Decisions ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(a)</div>
        <div class="q-content">Channel design decisions (10 MARKS)</div>
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
                <strong>Channel Design Decisions (10 MARKS)</strong><br><br>
                Channel design refers to decisions regarding the type, number and responsibilities of marketing intermediaries to deliver the right product to the right customer at the right time and place.<br><br>

                <strong>Major Steps in Channel Design</strong><br>
                1. <strong>Analysing Customer Service Requirements</strong> – lot size, waiting time, spatial convenience, variety, service support.<br>
                2. <strong>Setting Channel Objectives</strong> – coverage, cost, control, adaptability.<br>
                3. <strong>Identifying Major Alternatives</strong><br>
                   • Types of intermediaries (company force, agents, distributors, retailers, e-commerce).<br>
                   • Number of intermediaries → Intensive / Selective / Exclusive.<br>
                   • Push vs Pull strategy.<br>
                4. <strong>Evaluating Alternatives</strong> – economic criteria (sales, cost, profit), control criteria, adaptive criteria.<br>
                5. <strong>Selecting Channel Members</strong> – reputation, capacity, willingness, financial strength.<br>
                6. <strong>Defining Responsibilities</strong> – price policy, territory, services, promotion support, inventory levels.<br><br>

                <strong>Example</strong>: Boat chose selective distribution + heavy online D2C for control & margins; Parle-G uses intensive distribution through millions of kirana stores.<br><br>

                <strong>Memory Help</strong>: <strong>A-S-I-E-S-R</strong> → Analyse → Set → Identify → Evaluate → Select → Responsibilities
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(b) Functions of Wholesalers ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(b)</div>
        <div class="q-content">Functions of wholesalers (10 MARKS)</div>
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
                <strong>Functions of Wholesalers (10 MARKS)</strong><br><br>
                Wholesalers buy in bulk from producers and sell in smaller lots to retailers/industrial users.<br><br>

                <strong>Key Functions</strong><br>
                1. Assembling – collect from many manufacturers<br>
                2. Bulk-breaking / Dispersion – sell smaller quantities<br>
                3. Warehousing – create time utility<br>
                4. Transportation – physical distribution<br>
                5. Financing – credit to retailers, prompt payment to producers<br>
                6. Risk Bearing – price fluctuation, damage, obsolescence<br>
                7. Grading, Sorting, Packing<br>
                8. Market Information & Feedback to producers<br>
                9. Promotional Assistance – displays, local advertising<br>
                10. Training & Managerial Help to retailers<br><br>

                <strong>Conclusion</strong>: Wholesalers reduce transaction costs and enable manufacturers to concentrate on production.<br><br>

                <strong>Memory Help</strong>: <strong>A-B-W-T-F-R-G-P-I-M</strong><br>
                Assembling → Bulk-breaking → Warehousing → Transport → Finance → Risk → Grading → Promotion → Information → Management help
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(c) Product Mix ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(c)</div>
        <div class="q-content">Product Mix (10 MARKS)</div>
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
                <strong>Product Mix (10 MARKS)</strong><br><br>
                Product Mix (or Product Assortment) is the complete range of products offered by a company.<br><br>

                <strong>Four Dimensions</strong><br>
                1. <strong>Width</strong> – Number of product lines (e.g., HUL: soaps, detergents, foods, personal care)<br>
                2. <strong>Length</strong> – Total number of items across all lines<br>
                3. <strong>Depth</strong> – Number of variants within each item (e.g., Lux soap: 10 fragrances × 5 sizes = depth 50)<br>
                4. <strong>Consistency</strong> – How closely lines are related in end-use, production or distribution<br><br>

                <strong>Strategic Decisions</strong>: Expansion, Contraction, Line Stretching (up/down), Line Filling, Modernisation<br><br>

                <strong>Example</strong>: ITC → High width (cigarettes, hotels, FMCG, paper, agri) but low consistency.<br><br>

                <strong>Memory Help</strong>: <strong>W-L-D-C</strong> → Width, Length, Depth, Consistency
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(d) Relationship Marketing ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(d)</div>
        <div class="q-content">Relationship Marketing (10 MARKS)</div>
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
                <strong>Relationship Marketing (10 MARKS)</strong><br><br>
                Relationship Marketing shifts focus from one-time transactions to building long-term, profitable relationships with customers and stakeholders.<br><br>

                <strong>Key Elements</strong><br>
                • Customer retention & lifetime value<br>
                • CRM databases<br>
                • Loyalty programmes (Amazon Prime, MakeMyTrip Black)<br>
                • Frequency marketing (air miles, credit card points)<br>
                • Personalised communication<br>
                • Club membership (Harley Owners Group)<br>
                • 360-degree stakeholder bonds (suppliers, employees, channel partners)<br><br>

                <strong>Benefits</strong>: Lower acquisition cost, higher wallet share, positive word-of-mouth, sustainable profits.<br><br>

                <strong>Examples</strong>: Zomato Gold, Amazon Prime, Apple ecosystem.<br><br>

                <strong>Memory Help</strong>: <strong>R-E-L-A-T-I-O-N</strong><br>
                Retention → Engagement → Loyalty → Acquisition cost ↓ → Trust → Interaction → Ownership feeling → Network
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