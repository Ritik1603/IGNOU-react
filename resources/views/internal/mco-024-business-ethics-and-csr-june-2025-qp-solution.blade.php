@extends('layouts.user')
@section('page_h1', 'BUSINESS ETHICS AND CSR')
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
        <div class="paper-code">MCO–024</div>
        <h1 class="paper-title">BUSINESS ETHICS AND CSR</h1>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions as per marks allocation.
    </div>

<!-- ====================== Q1 ====================== -->
<!-- ====================== Q1 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q1</div>
        <div class="q-content">“What is the purpose of a corporation? Is it merely to earn profits or does it have any social responsibility ?” Elaborate on it based on two dominant views. (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS)</strong><br><br>
                The fundamental question “What is the purpose of a corporation?” has been debated for decades between two dominant schools of thought:<br>
                1. The Classical / Shareholder View (Profit Maximisation is the only responsibility)<br>
                2. The Socio-Economic / Stakeholder View (Corporation has broader social responsibilities)<br><br>
                This debate is not merely academic — it shapes laws, corporate policies, and public expectations worldwide, including India’s Companies Act 2013 which made CSR spending mandatory.<br><br>

                <strong>1. Classical / Shareholder View – “Only Purpose is Profit Maximisation” (8 MARKS)</strong><br><br>
                • Most famous proponent: Milton Friedman (1970 New York Times article)<br>
                • Core Argument: “The social responsibility of business is to increase its profits”<br>
                • Key Points:<br>
                  - Corporation is a legal creation of shareholders.<br>
                  - Managers are agents of shareholders → their only duty is to maximise shareholder wealth.<br>
                  - Using company resources for social causes = “taxation without representation”.<br>
                  - Social problems should be solved by government/society, not corporations.<br>
                  - Profit-making itself benefits society through jobs, taxes, innovation, and wealth creation.<br>
                  - “Invisible hand” of market ensures societal good.<br><br>

                • Indian Example of Classical Thinking (Pre-1990s): Many traditional family businesses focused purely on profit and dividends.<br><br>

                • Criticism of this view:<br>
                  - Ignores externalities (pollution, exploitation).<br>
                  - Short-term profit focus can destroy long-term sustainability.<br>
                  - Enron, Satyam scandals showed dangers of unchecked profit pursuit.<br><br>

                <strong>2. Socio-Economic / Stakeholder View – “Corporation has Broader Social Responsibilities” (9 MARKS)</strong><br><br>
                • Key Thinkers: R. Edward Freeman (Stakeholder Theory), Archie Carroll, Indian ethos of Trusteeship (Gandhi)<br>
                • Core Argument: Corporation is a social institution — it draws resources from society, hence owes something back.<br>
                • Key Points:<br>
                  - Stakeholders include shareholders + employees + customers + suppliers + community + environment.<br>
                  - Triple Bottom Line: People + Planet + Profit.<br>
                  - Long-term survival depends on societal licence to operate.<br>
                  - Ethical, responsible behaviour builds reputation, trust, and sustainable profits.<br>
                  - “Business cannot succeed in a society that fails”.<br><br>

                • Indian Examples of Socio-Economic View:<br>
                  - Tata Group: Built Jamshedpur as model town, hospitals, schools long before CSR was law.<br>
                  - Birla, Bajaj, Godrej families followed Trusteeship principle.<br>
                  - Azim Premji donated majority of Wipro stake for education.<br>
                  - Infosys Foundation, Reliance Foundation, Adani Foundation — massive CSR work.<br><br>

                • Global Examples: Patagonia (“Earth is our only shareholder”), Unilever Sustainable Living Plan.<br><br>

                • Legal Recognition in India: Section 135, Companies Act 2013 → 2% profit for CSR made mandatory → clear acceptance of Socio-Economic view.<br><br>

                <strong>Conclusion & Modern Reality (3 MARKS)</strong><br>
                The rigid Classical view is now largely rejected globally and in India. The dominant view today is Responsible Capitalism / Conscious Capitalism — profit is essential, but not the only purpose.<br><br>
                Successful Indian corporations (Tata, Infosys, Mahindra, Wipro) prove that integrating social responsibility with business strategy creates sustainable competitive advantage, stronger brand, employee loyalty, and long-term shareholder value.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                • Classical = Friedman → “Profit Only”<br>
                • Socio-Economic = Tata → “Profit + Purpose”<br>
                • India = Companies Act 2013 → Socio-Economic view legally accepted
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q2 ====================== -->
<!-- ====================== Q2 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q2</div>
        <div class="q-content">Discuss three contemporary approaches to business ethics. (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS)</strong><br><br>
                Business ethics deals with moral principles and values that should guide behaviour in the world of commerce. In today’s complex, globalised and multi-cultural business environment, three contemporary approaches are most widely used to resolve ethical dilemmas:<br>
                1. Ethical Relativism<br>
                2. Utilitarianism<br>
                3. Deontological Approach (Rights & Justice / Kantian Ethics)<br><br>
                Each approach offers a distinct lens to evaluate “what is right” in business situations.<br><br>

                <strong>1. Ethical Relativism (6 MARKS)</strong><br><br>
                • **Core Idea**: There are no universal moral truths. Ethical standards are relative to culture, society, religion or individual belief (“When in Rome, do as the Romans do”).<br>
                • **Key Proponents**: No single founder — rooted in cultural anthropology.<br>
                • **Application in Business**:<br>
                  - Gift-giving acceptable in China/Japan but seen as bribery in USA/Scandinavia.<br>
                  - Dress code, working hours, hierarchy respect vary across cultures.<br>
                • **Advantages**:<br>
                  - Promotes cultural sensitivity<br>
                  - Reduces ethnocentrism<br>
                  - Practical for multinational operations<br>
                • **Criticism / Limitations**:<br>
                  - Can justify serious wrongs (e.g., child labour, corruption, discrimination) as “local custom”.<br>
                  - Creates moral confusion when cultures clash within same company.<br>
                • **Indian Example**: Many MNCs allow “festival gifts” up to certain value in India but prohibit them in their home country.<br><br>

                <strong>2. Utilitarianism (6 MARKS)</strong><br><br>
                • **Core Idea**: An action is right if it produces the greatest good (happiness/utility) for the greatest number of people.<br>
                • **Key Proponents**: Jeremy Bentham (“greatest happiness principle”) & John Stuart Mill.<br>
                • **Two Types**:<br>
                  - Act Utilitarianism: Judge each act separately<br>
                  - Rule Utilitarianism: Follow rules that generally produce greatest good<br>
                • **Application in Business**:<br>
                  - Layoffs to save company → protects jobs of majority.<br>
                  - Product recall if harm to few outweighs benefit to many.<br>
                  - CSR projects chosen based on maximum social impact.<br>
                • **Advantages**:<br>
                  - Practical, outcome-focused<br>
                  - Aligns with welfare economics<br>
                • **Criticism**:<br>
                  - Can justify harming minority for majority (e.g., Bhopal gas victims vs Union Carbide profit).<br>
                  - Difficult to measure “happiness” accurately.<br>
                • **Indian Example**: During COVID, many firms cut salaries temporarily to avoid mass layoffs → utilitarian logic.<br><br>

                <strong>3. Deontological Approach (Rights & Justice / Kantian Ethics) (6 MARKS)</strong><br><br>
                • **Core Idea**: Certain actions are morally obligatory irrespective of consequences. Focus on duty, rights and justice.<br>
                • **Key Proponent**: Immanuel Kant – Categorical Imperative:<br>
                  1. Act only on maxims you can will to be universal law.<br>
                  2. Treat humanity always as an end, never merely as a means.<br>
                • **John Rawls’ Veil of Ignorance**: Design rules as if you didn’t know your position in society.<br>
                • **Application in Business**:<br>
                  - Never lie in advertising (universal law).<br>
                  - Pay fair wages even if cheaper labour available.<br>
                  - Respect employee dignity, privacy, whistle-blower rights.<br>
                • **Advantages**:<br>
                  - Protects individual rights<br>
                  - Provides clear moral rules<br>
                  - Prevents exploitation<br>
                • **Criticism**:<br>
                  - Rigid — sometimes duty conflicts with greater good.<br>
                • **Indian Example**: Tata Group refused to pay bribe even when it delayed projects — classic deontological stand.<br><br>

                <strong>Conclusion (3 MARKS)</strong><br>
                No single approach is perfect. Best practice is integrative:<br>
                - Relativism for cultural sensitivity<br>
                - Utilitarianism for impact measurement<br>
                - Deontology for protecting fundamental rights<br><br>
                Leading Indian companies (Tata, Infosys, Wipro) combine all three — respect local culture (relativism), maximise stakeholder welfare (utilitarianism), and never compromise on core values (deontology).<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **R-U-D** → Relativism (Culture) → Utilitarianism (Consequence) → Deontology (Duty/Rights)<br>
                Think: “Rome → Result → Rule”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3 ====================== -->
<!-- ====================== Q3 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q3</div>
        <div class="q-content">What is meant by ethical dilemmas? Discuss from the point of view of stakeholder management and social accounting. (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS)</strong><br><br>
                An **ethical dilemma** arises when a person or organisation faces two or more conflicting moral obligations, where choosing one value violates another equally important value. There is no perfect solution — only a choice between “right vs right” or “wrong vs wrong”.<br><br>
                Common business examples: Profit vs employee welfare, Transparency vs commercial secrecy, Short-term gain vs long-term sustainability.<br><br>

                <strong>1. Understanding Ethical Dilemmas (5 MARKS)</strong><br><br>
                • **Types**:<br>
                  – Right vs Right: Truth vs Loyalty, Justice vs Mercy, Individual vs Community, Short-term vs Long-term.<br>
                  – Wrong vs Wrong: Bribe to save jobs vs refuse bribe and lose contract.<br><br>
                • **Causes**:<br>
                  – Pressure for results<br>
                  – Conflicting stakeholder interests<br>
                  – Ambiguous laws / cultural differences<br>
                  – Personal values vs organisational culture<br><br>
                • **Real Indian Examples**:<br>
                  – Satyam scandal: Truth (confess fraud) vs Loyalty (protect company image).<br>
                  – Nestlé Maggi crisis: Consumer safety vs brand reputation & profit.<br><br>

                <strong>2. Stakeholder Management Perspective (7 MARKS)</strong><br><br>
                Stakeholder theory (R. Edward Freeman) says a company must create value for all stakeholders, not just shareholders.<br><br>

                <strong>How Ethical Dilemmas Arise Among Stakeholders</strong><br>
                • Shareholders want maximum dividend → Employees want higher wages → Community wants no pollution → Government wants taxes.<br>
                • Choosing one group’s interest harms others.<br><br>

                <strong>Stakeholder Approach to Resolve Dilemmas</strong><br>
                1. **Identify & Map Stakeholders** (primary & secondary)<br>
                2. **Understand Their Legitimate Interests**<br>
                3. **Prioritise Using Ethical Principles** (urgency, legitimacy, power)<br>
                4. **Engage in Dialogue** (town halls, grievance cells)<br>
                5. **Seek Win-Win or Least Harm Solutions**<br>
                6. **Transparent Decision-Making**<br><br>

                <strong>Example**: Tata Nano Singur plant — Land acquisition dilemma → Farmers vs Jobs vs Investment → Tata chose to exit rather than force acquisition (stakeholder justice).<br><br>

                <strong>3. Social Accounting (Social Audit) Perspective (7 MARKS)</strong><br><br>
                Social accounting measures, monitors and reports a company’s social and environmental performance along with financial performance (Triple Bottom Line).<br><br>

                <strong>Role in Resolving Ethical Dilemmas</strong><br>
                • Forces transparency — “What gets measured gets managed”.<br>
                • Exposes hidden impacts (e.g., child labour in supply chain).<br>
                • Provides data for ethical decision-making.<br>
                • Builds credibility with stakeholders.<br><br>

                <strong>Process of Social Accounting</strong><br>
                1. Define social objectives<br>
                2. Identify indicators (water usage, diversity ratio, community spend)<br>
                3. Collect data (internal + third-party audit)<br>
                4. Verify & disclose (GRI, BRSR in India)<br>
                5. Act on findings<br><br>

                <strong>Example**: ITC’s e-Choupal → Social accounting showed empowerment of 4 million farmers → justified continued investment despite low short-term ROI.<br><br>

                <strong>Conclusion (3 MARKS)</strong><br>
                Ethical dilemmas are inevitable in business. The stakeholder management approach ensures fair balancing of interests, while social accounting provides the transparency and accountability needed to build trust. Companies that integrate both (Tata, Infosys, ITC) not only resolve dilemmas ethically but also create sustainable long-term value and societal goodwill.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                Dilemma → “Right vs Right”<br>
                Resolution → **Stakeholder Dialogue + Social Accounting Transparency**<br>
                Think: **“Talk to all + Show the numbers”**
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q4(a) + Q4(b) – 100% FULLY DETAILED 10 + 10 = 20 MARKS – ZERO COMPRESSION ====================== -->

<!-- ====================== Q4(a) – NGOs and Business Responsibility ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">4(a)</div>
        <div class="q-content">NGOs and business responsibility (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br><br>
                Non-Governmental Organisations (NGOs) have emerged as critical partners, watchdogs and catalysts in making businesses more socially responsible. Their independence, grassroots reach and expertise make them uniquely positioned to influence, collaborate with and monitor corporate behaviour.<br><br>

                <strong>Roles of NGOs in Promoting Business Responsibility (7 MARKS)</strong><br><br>
                1. **Advocacy & Awareness** – Highlight social/environmental issues (Greenpeace, CSE).<br>
                2. **Watchdog & Accountability** – Expose unethical practices (Amnesty, Transparency International).<br>
                3. **Partnership & Implementation** – Execute CSR projects with credibility and expertise.<br>
                4. **Capacity Building** – Train communities and companies on sustainability.<br>
                5. **Research & Policy Influence** – Provide data and recommendations to government and corporates.<br>
                6. **Certification & Standards** – Develop voluntary standards (Fairtrade, Rainforest Alliance).<br>
                7. **Conflict Mediation** – Act as neutral third party between company and affected communities.<br><br>

                <strong>Real Indian Case Studies (2 MARKS)</strong><br><br>
                • **Tata Steel + Gram Vikas (Odisha)** – Long-term partnership for water, sanitation, education in tribal areas.<br>
                • **HUL + UNICEF/WASH** – Swachh Bharat initiatives reaching millions.<br>
                • **Vedanta + Sterlite Copper controversy** – NGOs highlighted environmental violations leading to plant closure (Thoothukudi).<br>
                • **CRY, Smile Foundation, Akshaya Patra** – Trusted partners for education and mid-day meal programmes of many corporates.<br><br>

                <strong>Conclusion</strong><br>
                NGOs are no longer adversaries but strategic allies in responsible business. Effective CSR today is almost impossible without credible NGO partnerships.<br><br>

                <strong>Memory Help</strong>: **NGO = A-W-P-C** → Advocacy | Watchdog | Partner | Capacity-builder
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q4(b) – Shareholders and Corporate Social Responsibility ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">4(b)</div>
        <div class="q-content">Shareholders and Corporate Social Responsibility (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br><br>
                Traditionally, shareholders were seen as only interested in dividends and share price. Today, especially institutional and socially conscious shareholders, actively push companies towards responsible, sustainable and ethical practices.<br><br>

                <strong>Evolving Role of Shareholders in CSR (7 MARKS)</strong><br><br>
                1. **Institutional Investors** (LIC, mutual funds, pension funds) now include ESG criteria in investment decisions.<br>
                2. **Shareholder Activism** – File resolutions at AGMs demanding transparency, diversity, climate action.<br>
                3. **Proxy Voting** – Vote against boards that ignore CSR.<br>
                4. **Divestment Movements** – Withdraw from tobacco, arms, fossil fuels (global trend).<br>
                5. **Engagement & Dialogue** – Direct meetings with management on sustainability issues.<br>
                6. **Impact Investing** – Funds that deliberately seek social + financial returns.<br>
                7. **Legal Push in India** – SEBI mandates top 1000 listed companies to disclose Business Responsibility & Sustainability Reporting (BRSR).<br><br>

                <strong>Indian Examples (2 MARKS)</strong><br><br>
                • **Azim Premji** – Donated ~67% of Wipro shares for philanthropy.<br>
                • **Infosys Shareholders** – Supported Narayana Murthy’s high governance standards.<br>
                • **Coal India** – Faced shareholder pressure (including LIC) to reduce environmental impact and improve worker safety.<br>
                • **Tata Sons** – Unique structure where two-thirds of profits go to charitable trusts → shareholder-driven CSR model.<br><br>

                <strong>Conclusion</strong><br>
                Modern shareholders are no longer passive profit-seekers. They are active drivers of responsible capitalism, recognising that sustainable, ethical companies deliver superior long-term returns.<br><br>

                <strong>Memory Help</strong>: Shareholder → From “Profit Only” → “Profit + Purpose + Planet”
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q5 ====================== -->
<!-- ====================== Q5 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q5</div>
        <div class="q-content">Explain four approaches to business strategy for CSR. (20 MARKS)</div>
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
                <strong>Introduction (2 MARKS)</strong><br><br>
                Archie B. Carroll (1979, 1991) proposed a classic four-stage model that describes how companies evolve in their approach towards Corporate Social Responsibility (CSR). These four approaches represent a continuum from minimum legal compliance to leadership in social innovation.<br><br>

                <strong>1. Reactive Approach (Deny Responsibility) – 4 MARKS</strong><br><br>
                • **Philosophy**: “CSR is not our job — only profit matters”<br>
                • **Behaviour**: Do less than required, resist change, fight regulation<br>
                • **Typical Actions**:<br>
                  – Ignore complaints<br>
                  – Lobby against laws<br>
                  – Hide violations<br>
                • **Indian Example (Historical)**: Many polluting factories before 1990s denied responsibility for river pollution.<br>
                • **Modern Example**: Some small companies still avoid CSR spending despite Section 135.<br><br>

                <strong>2. Defensive Approach (Do Minimum – Legal Compliance) – 5 MARKS</strong><br><br>
                • **Philosophy**: “We’ll do only what law forces us to do”<br>
                • **Behaviour**: Comply reluctantly, view CSR as cost, public relations exercise<br>
                • **Typical Actions**:<br>
                  – Spend exactly 2% only when mandated<br>
                  – Choose low-impact, high-visibility projects (painting schools)<br>
                  – Resist voluntary disclosure<br>
                • **Indian Example**: Some companies spend 2% just to avoid penalty — no genuine integration.<br><br>

                <strong>3. Accommodative Approach (Accept & Do More Than Required) – 5 MARKS</strong><br><br>
                • **Philosophy**: “We accept responsibility and will go beyond legal minimum when pressured or beneficial”<br>
                • **Behaviour**: Respond to stakeholders, adopt industry best practices<br>
                • **Typical Actions**:<br>
                  – Sustainability reporting<br>
                  – Employee welfare beyond law<br>
                  – Community development programmes<br>
                • **Indian Example**: HUL (Project Shakti, Lifebuoy handwashing), ITC (e-Choupal), Mahindra (Nanhi Kali) — genuine efforts, good implementation.<br><br>

                <strong>4. Proactive Approach (Anticipate & Lead Responsibility) – 6 MARKS</strong><br><br>
                • **Philosophy**: “CSR is core to our business — we lead change”<br>
                • **Behaviour**: Anticipate issues, innovate solutions, shape policy, integrate CSR into strategy<br>
                • **Typical Actions**:<br>
                  – Net-zero targets before regulation<br>
                  – Circular economy models<br>
                  – Shared value creation (profit + social impact)<br>
                  – Influence industry standards<br>
                • **Best Indian Examples**:<br>
                  – **Tata Group**: Trusteeship model, spends far beyond 2%, disaster relief, education, health as core identity.<br>
                  – **Infosys Foundation**: Education, rural development, arts — led by Sudha Murty long before law.<br>
                  – **Dhirubhai Ambani’s Reliance**: Built townships, schools, hospitals in Jamnagar even in 1990s.<br>
                  – **Wipro/Azim Premji**: Largest personal philanthropy in India.<br><br>

                <strong>Conclusion (3 MARKS)</strong><br><br>
                The four approaches form an evolutionary path:<br>
                **Reactive → Defensive → Accommodative → Proactive**<br><br>
                Today, leading Indian companies (Tata, Infosys, HUL, ITC) have moved to **Proactive** stage — treating CSR not as cost or compliance, but as **strategic investment** that creates shared value, builds trust, reduces risk and ensures long-term licence to operate.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **R-D-A-P** → Reactive (Deny) → Defensive (Do minimum) → Accommodative (Accept) → Proactive (Lead)<br>
                Think: “Resist → Reluctant → Responsible → Revolutionary”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q6 ====================== -->
<!-- ====================== Q6 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q6</div>
        <div class="q-content">Explain different aspects of Corporate Social Responsibility towards the employees. (20 MARKS)</div>
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
                <strong>Introduction (2 MARKS)</strong><br><br>
                Employees are the most valuable internal stakeholders. CSR towards employees goes far beyond statutory compliance — it is about creating a workplace that respects human dignity, promotes growth, ensures fairness and builds long-term commitment. Leading Indian companies treat employees as “family” and invest heavily in their well-being.<br><br>

                <strong>10 Key Aspects of CSR Towards Employees (16 MARKS)</strong><br><br>

                <table>
                    <tr><th>Aspect</th><th>Description</th><th>Real Indian Example</th></tr>
                    <tr>
                        <td><strong>1. Fair & Ethical Recruitment</strong></td>
                        <td>No discrimination on caste, gender, religion, region. Transparent, merit-based hiring.</td>
                        <td>Infosys, TCS – blind recruitment, diversity hiring</td>
                    </tr>
                    <tr>
                        <td><strong>2. Equal Opportunity & Diversity</td>
                        <td>Gender, LGBTQ+, PwD inclusion, anti-harassment policies (POSH).</td>
                        <td>Tata Group’s “Second Career” for women returnees, Accenture 50% women workforce target</td>
                    </tr>
                    <tr>
                        <td><strong>3. Safe & Healthy Workplace</strong></td>
                        <td>Physical safety, mental health programmes, ergonomics, zero accident goal.</td>
                        <td>Tata Steel – “Safety First” culture, HUL mental health counselling</td>
                    </tr>
                    <tr>
                        <td><strong>4. Fair Wages & Timely Payment</strong></td>
                        <td>Living wage (not just minimum), bonus, ESOPs.</td>
                        <td>Marico, Godrej – industry-leading salaries + profit sharing</td>
                    </tr>
                    <tr>
                        <td><strong>5. Learning & Development</strong></td>
                        <td>Continuous training, leadership programmes, sponsorship for higher education.</td>
                        <td>Wipro, Infosys – massive training budgets, iGuru, InfyTQ platforms</td>
                    </tr>
                    <tr>
                        <td><strong>6. Work-Life Balance & Flexibility</strong></td>
                        <td>WFH, flexible timing, sabbaticals, childcare support.</td>
                        <td>Google India, Microsoft – unlimited sick leave, parental support</td>
                    </tr>
                    <tr>
                        <td><strong>7. Employee Welfare & Benefits</strong></td>
                        <td>Medical insurance for family, housing, transport, crèche, food.</td>
                        <td>TCS, Cognizant – comprehensive health cover, campus facilities</td>
                    </tr>
                    <tr>
                        <td><strong>8. Participation & Voice</strong></td>
                        <td>Open-door policy, town halls, employee surveys, unions respected.</td>
                        <td>HUL “Employee Voice” surveys, Tata Workers’ Union legacy</td>
                    </tr>
                    <tr>
                        <td><strong>9. Dignity & Respect</strong></td>
                        <td>No forced labour, no verbal abuse, whistle-blower protection.</td>
                        <td>Azim Premji Foundation – strict anti-harassment policy</td>
                    </tr>
                    <tr>
                        <td><strong>10. Community & Social Contribution</strong></td>
                        <td>Encourage volunteering, matching grants for employee donations.</td>
                        <td>IBM, Deloitte – “Volunteer hours” counted in appraisal</td>
                    </tr>
                </table><br><br>

                <strong>Benefits to Company (2 MARKS)</strong><br>
                • Higher engagement & productivity<br>
                • Lower attrition<br>
                • Strong employer brand<br>
                • “Great Place to Work” certification → attracts talent<br><br>

                <strong>Leading Indian Practitioners</strong><br>
                Tata Group, Infosys, HUL, Wipro, Godrej, Mahindra consistently rank in “Best Companies to Work For” and spend far beyond legal CSR requirement on employee welfare.<br><br>

                <strong>Conclusion (2 MARKS)</strong><br>
                CSR towards employees is not charity — it is smart business. A happy, respected, growing workforce becomes the biggest competitive advantage in knowledge economy. Companies that treat employees as assets, not costs, build cultures of trust, innovation and sustainability.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **F-A-S-W-L-W-P-D-C-S** → Fair recruitment | Diversity | Safety | Wages | Learning | Work-life | Welfare | Participation | Dignity | Social contribution
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7 ====================== -->
<!-- ====================== Q7 (100% FULLY DETAILED – 20 MARKS) – ZERO COMPRESSION ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q7</div>
        <div class="q-content">Discuss different models of Corporate Social Responsibility operating in India. (20 MARKS)</div>
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
                <strong>Introduction (2 MARKS)</strong><br><br>
                India has one of the oldest and richest traditions of business giving in the world. CSR in India has evolved through distinct historical phases and today operates through five recognisable models that reflect cultural, political, economic and legal influences.<br><br>

                <strong>Five Major Models of CSR in India (16 MARKS)</strong><br><br>

                <table>
                    <tr><th>Model</th><th>Period / Philosophy</th><th>Key Features</th><th>Examples</th></tr>
                    
                    <tr>
                        <td><strong>1. Ethical / Gandhian Model (Trusteeship)</strong></td>
                        <td>Pre-independence & early industrialists</td>
                        <td>Wealth belongs to society → Businessmen are trustees<br>Voluntary philanthropy in education, health, community welfare</td>
                        <td>Tata (Jamshedpur, IISc, TISS), Birla (BITS Pilani), Bajaj, Godrej family trusts</td>
                    </tr>
                    
                    <tr>
                        <td><strong>2. Statist Model (Nehruvian / PSU Era)</strong></td>
                        <td>1950s–1980s</td>
                        <td>State as main driver of development<br>PSUs had explicit social objectives (employment, regional balance)</td>
                        <td>Sail, BHEL, ONGC townships, schools, hospitals</td>
                    </tr>
                    
                    <tr>
                        <td><strong>3. Liberal / Market-Driven Model</strong></td>
                        <td>1991 onwards (LPG reforms)</td>
                        <td>Profit maximisation first<br>CSR seen as cost or PR, minimal voluntary spending</td>
                        <td>Many new private companies before 2013 law</td>
                    </tr>
                    
                    <tr>
                        <td><strong>4. Stakeholder Model</strong></td>
                        <td>2000s onwards</td>
                        <td>Balance interests of all stakeholders<br>CSR integrated into business</td>
                        <td>HUL (Shakti), ITC (e-Choupal), Mahindra (Nanhi Kali, ESOPs for farmers)</td>
                    </tr>
                    
                    <tr>
                        <td><strong>5. Strategic / Shared Value Model</strong></td>
                        <td>2010s onwards (post Companies Act 2013)</td>
                        <td>CSR as core business strategy<br>Creates competitive advantage while solving social issues</td>
                        <td>Reliance Foundation (rural transformation + digital), Aditya Birla (education + skills), Ambuja Cement (water security)</td>
                    </tr>
                </table><br><br>

                <strong>Impact of Companies Act 2013 (2 MARKS)</strong><br><br>
                • Section 135 made CSR spending mandatory (2% of average net profit) for eligible companies.<br>
                • Shifted India from purely voluntary to **hybrid model** (mandatory spending + voluntary spirit).<br>
                • Moved majority of large companies from Liberal → Stakeholder/Strategic model.<br><br>

                <strong>Conclusion (2 MARKS)</strong><br><br>
                India’s CSR journey beautifully reflects its civilizational ethos — from Gandhian trusteeship to modern strategic CSR. Today, leading Indian corporates (Tata, Reliance, HUL, Infosys, Wipro) operate at the confluence of Ethical + Stakeholder + Strategic models, proving that profit and purpose can co-exist and reinforce each other. This unique Indian blend is now globally recognised as a model of “responsible capitalism”.<br><br>

                <strong>Memory Help (Super Easy)</strong><br>
                **E-S-L-S-S** → Ethical → Statist → Liberal → Stakeholder → Strategic<br>
                Think: “Gandhi → Nehru → Manmohan → Murthy → Ambani”
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(a) ====================== -->
<!-- ====================== Q8 (a) (b) (c) (d) – 100% FULLY DETAILED 10×4 = 40 MARKS – ZERO COMPRESSION ====================== -->

<!-- ====================== Q8(a) Kantian Idea of the Categorical Imperative ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(a)</div>
        <div class="q-content">Kantian Idea of the Categorical Imperative (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br><br>
                Immanuel Kant (1724–1804) gave the most powerful deontological (duty-based) ethical theory. The **Categorical Imperative** is the supreme principle of morality — an unconditional moral command that applies to all rational beings irrespective of personal desires or consequences.<br><br>

                <strong>Three Formulations of the Categorical Imperative (6 MARKS)</strong><br><br>
                1. **Formula of Universal Law**  
                   “Act only according to that maxim whereby you can at the same time will that it should become a universal law.”  
                   → If everyone did it, would the world still function?  
                   Example: False promise to repay loan → cannot be universalised (trust would collapse).<br><br>

                2. **Formula of Humanity as an End**  
                   “Act in such a way that you treat humanity, whether in your own person or in the person of any other, never merely as a means to an end, but always at the same time as an end.”  
                   → Never use people only as tools; respect their dignity.  
                   Example: Exploiting workers, misleading advertising, bribery — all violate this.<br><br>

                3. **Formula of Autonomy / Kingdom of Ends**  
                   Every rational being must act as if legislating universal laws through their maxims.  
                   → We are both law-makers and law-followers in a moral community.<br><br>

                <strong>Application in Business Ethics (3 MARKS)</strong><br><br>
                • Tata Group refusing to pay bribes even when it delayed projects — followed universal law.<br>
                • Infosys “no compromise on values” policy — treats employees & clients as ends, not means.<br>
                • Satyam scandal — Ramalinga Raju violated all three formulations.<br><br>

                <strong>Conclusion</strong><br>
                Kantian ethics provides an uncompromising, universal moral compass for business: never lie, never exploit, never treat people merely as resources — regardless of profit pressure.<br><br>

                <strong>Memory Help</strong>: **U-H-A** → Universal Law | Humanity as End | Autonomy
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(b) Corporate Social Responsibility in Conflict Zones ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(b)</div>
        <div class="q-content">Corporate Social Responsibility in Conflict Zones (10 MARKS)</div>
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
                <strong>Introduction (1 MARK)</strong><br><br>
                Conflict zones are areas affected by armed violence, civil war, terrorism or severe political instability. Operating here poses extreme ethical, legal and reputational risks. CSR becomes “do no harm” + active peace-building.<br><br>

                <strong>Key Challenges & Responsibilities (7 MARKS)</strong><br><br>
                1. **Do No Harm Principle** – Avoid complicity in human rights abuses.<br>
                2. **Security & Human Rights** – Voluntary Principles on Security & Human Rights (VPSHR).<br>
                3. **Community Consent** – Free, Prior & Informed Consent (FPIC).<br>
                4. **Economic Contribution vs Exploitation** – Jobs vs resource curse.<br>
                5. **Transparency** – Publish payments to governments (EITI).<br>
                6. **Neutrality** – Don’t take sides in conflict.<br><br>

                <strong>Real Examples</strong><br>
                • **Vedanta-Sterlite (Thoothukudi)** – Alleged pollution + police firing → plant shut.<br>
                • **POSCO Odisha** – Land acquisition protests → project cancelled.<br>
                • **ONGC in Sudan** (past) – Accused of complicity with regime.<br>
                • **Tata in Kalinganagar** – Initial violence → later became model of community development.<br><br>

                <strong>Positive Practices</strong><br>
                → Local hiring, schools, hospitals, women empowerment, dialogue forums.<br><br>

                <strong>Conclusion</strong><br>
                In conflict zones, normal CSR is insufficient. Companies must adopt “conflict-sensitive” CSR — rigorous risk assessment, stakeholder dialogue and strict human rights adherence.<br><br>

                <strong>Memory Help</strong>: **Do No Harm + Dialogue + Transparency**
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(c) Egoism and Ethical Imperatives ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(c)</div>
        <div class="q-content">Egoism and Ethical Imperatives (10 MARKS)</div>
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
                <strong>Egoism</strong><br>
                • **Psychological Egoism**: All actions are ultimately self-interested.<br>
                • **Ethical Egoism** (Ayn Rand): One ought to act in one’s rational self-interest.<br>
                • Business Application: Profit maximisation, shareholder primacy.<br><br>

                <strong>Ethical Imperatives (Deontology)</strong><br>
                • Kant: Duty-based universal principles.<br>
                • Rights & Justice approach (Rawls).<br><br>

                <strong>Conflict & Resolution</strong><br>
                • Pure egoism → exploitation, corruption, short-termism.<br>
                • Ethical imperatives without practicality → bankruptcy.<br>
                • Balanced View: **Enlightened Egoism / Responsible Self-Interest** — long-term self-interest requires ethical behaviour.<br><br>

                <strong>Indian Example</strong>: Tata Group — refused unethical profits for 150+ years → built unmatched trust and longevity.<br><br>

                <strong>Conclusion</strong><br>
                True long-term self-interest aligns with ethical imperatives. Egoism unchecked destroys; ethics without viability fails. Integration is the key.<br><br>

                <strong>Memory Help</strong>: Egoism = Me | Imperative = Duty | Enlightened = Me + We
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(d) Transfer of Unspent CSR Amount ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(d)</div>
        <div class="q-content">Transfer of Unspent CSR Amount (10 MARKS)</div>
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
                <strong>Legal Framework (Companies Act 2013 – Section 135 & Rules)</strong><br><br>
                1. **Mandatory Spending**: 2% of average net profit of last 3 years.<br>
                2. **Two Scenarios for Unspent Amount**:<br>
                   - **Ongoing Projects**: Transfer to “Unspent CSR Account” within **30 days** of FY end → utilise within 3 years.<br>
                   - **Non-Ongoing Projects**: Transfer to Schedule VII funds (PM Relief Fund, Swachh Bharat, etc.) within **6 months** of FY end.<br>
                3. **Penalty for Non-Compliance**: Company → 2× unspent amount or ₹1 crore (whichever lower); Officer → up to 2 years jail or fine ₹50,000–₹25 lakh.<br><br>

                <strong>Purpose of Strict Rules</strong><br>
                • Prevent diversion of CSR funds<br>
                • Ensure actual social impact<br>
                • Increase transparency & accountability<br><br>

                <strong>Conclusion</strong><br>
                India is the first country to make CSR spending mandatory and enforce strict transfer rules — reflecting shift from voluntary charity to legally enforced social responsibility.<br><br>

                <strong>Memory Help</strong>: **30 days → Unspent CSR A/c | 6 months → Schedule VII**
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