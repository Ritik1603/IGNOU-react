@extends('layouts.user')
@section('page_h1', 'ORGANISATIONAL THEORY AND BEHAVIOUR')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    :root {
        /* Brand + palette (tuned for 60-30-10) */
        --primary: #005BFF;
        --primary-light: #0A84FF;
        --accent: #F9A826;
        --success: #28C76F;
        --danger: #F04438;
        --gray: #4B5563;
        --light-gray: #9CA3AF;
        --border: #E2E8F0;
        --bg: #F3F6FB;
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
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; background: var(--bg); color: #1e293b; line-height: 1.7; }
    .container { max-width: 1129px; margin: 0 auto; padding: 0 20px; }
    .paper-header { text-align: center; background: #ffffff; padding: 28px 24px; border-radius: var(--radius-lg); margin-bottom: 32px; box-shadow: var(--shadow-md); border: 1px solid var(--border); }
    .paper-code { font-size: 1.6rem; font-weight: 700; color: var(--primary); letter-spacing: 4px; margin-bottom: 8px; }
    .paper-title { font-size: 1.9rem; font-weight: 800; color: #0f172a; margin: 10px 0; text-transform: uppercase; letter-spacing: 1px; }
    .program-name { font-size: 1rem; color: var(--gray); margin: 14px 0 18px; font-weight: 500; }
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
    @media (max-width: 768px) {
        body { padding: 12px 0; }
        .container { padding: 0 12px; }
        .q-trigger { padding: 16px; flex-wrap: wrap; gap: 12px; }
        .q-circle { width: 38px; height: 38px; font-size: 1.2rem; }
        .q-content { font-size: 1rem; padding-right: 0; order: 3; width: 100%; }
        .marks-wrapper { order: 4; margin-left: auto; gap: 10px; }
        .marks-badge, .show-answer-btn { font-size: 0.85rem; padding: 6px 10px; }
        .dropdown-icon { order: 2; margin-left: auto; }
        .answer-content { padding: 20px 16px; font-size: 0.98rem; }
    }
    @media (max-width: 480px) {
        .paper-code { font-size: 1.4rem; }
        .paper-title { font-size: 1.6rem; }
        .marks-badge, .show-answer-btn { font-size: 0.8rem; padding: 5px 9px; }
    }
</style>

<div class="container">
    <div class="paper-header mt-5">
        <div><img src="./images/log.jpg" alt="" style="width:150px;"></div>
        <div class="paper-code">MCO–01</div>
        <h1 class="paper-title">ORGANISATIONAL THEORY AND BEHAVIOUR</h1>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions as per marks allocation.
    </div>

<!-- ====================== Q1 ====================== -->
<!-- ====================== Q1 (Complete & Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q1</div>
        <div class="q-content">Explain the nature and types of conflict in an organisation. Also, explain the four stages in the conflict process with appropriate examples. (20 MARKS)</div>
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
                <strong>Introduction (2–3 MARKS):</strong>  
                Conflict is a process that begins when one party perceives that another party has negatively affected, or is about to negatively affect, something that the first party cares about (Thomas, 1976). In organisations, conflict is inevitable because of interdependence, scarce resources and differences in goals, values and perceptions. Modern view treats moderate conflict as functional — it stimulates creativity, innovation and change.<br><br>

                <strong>Nature of Organisational Conflict (5 MARKS)</strong><br>
                • Inevitable due to interaction and interdependence<br>
                • Perceptual – exists only when perceived<br>
                • Dynamic – intensity changes over time<br>
                • Can be Functional (constructive) or Dysfunctional (destructive)<br>
                • Occurs at multiple levels – individual, group, organisational<br>
                • Influenced by organisational structure, communication, leadership style and culture<br>
                • Can be managed and even harnessed for positive outcomes<br><br>

                <strong>Types of Organisational Conflict (7 MARKS)</strong><br><br>

                1. <strong>Intra-personal / Within Individual Conflict</strong>  
                   Role conflict, ethical dilemmas, frustration due to blocked goals.<br>
                   Example: Employee asked to fudge accounts faces moral vs job conflict.<br><br>

                2. <strong>Inter-personal Conflict</strong>  
                   Between two individuals – personality clashes, value differences.<br>
                   Example: Two managers competing for the same promotion.<br><br>

                3. <strong>Intra-group Conflict</strong>  
                   Within a single group/team.<br>
                   Example: Project team members disagree on approach and priorities.<br><br>

                4. <strong>Inter-group Conflict</strong>  
                   Between different groups/departments.<br>
                   Example: Classic Marketing vs Production conflict over delivery schedules.<br><br>

                5. <strong>Line vs Staff Conflict</strong>  
                   Line managers (authority) vs staff specialists (advisory).<br>
                   Example: HR recommending policy that production manager resists.<br><br>

                6. <strong>Individual vs Organisation Conflict</strong>  
                   Personal values clash with organisational practices.<br>
                   Example: Employee valuing work-life balance vs company’s overtime culture.<br><br>

                <strong>Four Stages in the Conflict Process (Pondy’s Model) – 6 MARKS</strong><br><br>

                1. <strong>Stage 1: Latent Conflict (Potential Opposition)</strong>  
                   Underlying conditions exist: scarce resources, goal incompatibility, communication barriers, structural differences.<br>
                   Example: Limited budget forces two departments to compete.<br><br>

                2. <strong>Stage 2: Perceived Conflict / Cognition & Personalisation</strong>  
                   Parties become aware that conflict exists; emotions get involved (anger, anxiety).<br>
                   Example: Marketing realises Production is delaying their campaign launch.<br><br>

                3. <strong>Stage 3: Felt Conflict / Intentions</strong>  
                   Parties decide how to respond – competing, collaborating, compromising, avoiding, accommodating.<br>
                   Example: Marketing head decides to escalate to CEO (competing) instead of negotiating.<br><br>

                4. <strong>Stage 4: Manifest Conflict (Behaviour)</strong>  
                   Open conflict – arguments, sabotage, strikes, withdrawal.<br>
                   Example: Marketing refuses to share forecast data with Production.<br><br>

                5. <strong>Stage 5: Conflict Aftermath (Outcome)</strong>  
                   Functional outcome → better solution, stronger relationship.<br>
                   Dysfunctional outcome → resentment, reduced cooperation.<br><br>

                <strong>Conclusion (2 MARKS):</strong>  
                Conflict is a natural and inevitable part of organisational life. When managed properly at the right stage, it becomes a source of creativity and improvement. Managers must recognise early signs (latent stage), encourage functional conflict and intervene constructively to prevent escalation into destructive conflict.<br><br>

                <strong>Memory Help:</strong>  
                Types → I-I-I-I-L-O (Intra-personal, Inter-personal, Intra-group, Inter-group, Line-Staff, Individual-Organisation)<br>
                Stages → L-P-F-M-O (Latent → Perceived → Felt → Manifest → Outcome)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q2 ====================== -->
<!-- ====================== Q2 (Complete & Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q2</div>
        <div class="q-content">Explain the dimensions of organisational climate. How can a favourable organisational climate be created? (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS):</strong>  
                Organisational climate refers to the perceived, relatively enduring quality of the work environment that is experienced by employees and influences their behaviour and motivation. It is the “personality” or “feel” of the organisation. Litwin & Stringer, Pareek and others have identified multiple dimensions that shape climate.<br><br>

                <strong>Key Dimensions of Organisational Climate (10 MARKS)</strong><br><br>

                1. <strong>Individual Autonomy</strong> – Freedom to plan and execute work independently.<br>
                2. <strong>Structure / Position Structure</strong> – Clarity of roles, rules, procedures and reporting relationships.<br>
                3. <strong>Reward Orientation</strong> – Extent to which rewards are linked to performance and are perceived as fair.<br>
                4. <strong>Warmth & Support</strong> – Friendly, helpful relationships among members and supportive leadership.<br>
                5. <strong>Risk Orientation</strong> – Encouragement of innovation, experimentation and calculated risk-taking.<br>
                6. <strong>Conflict Management</strong> – Openness in handling disagreements constructively rather than suppressing them.<br>
                7. <strong>Communication</strong> – Free flow of information (upward, downward, horizontal) and transparency.<br>
                8. <strong>Leadership Style</strong> – Participative, democratic vs autocratic, controlling style.<br>
                9. <strong>Participation in Decision-Making</strong> – Involvement of employees in goal-setting and planning.<br>
                10. <strong>Identity & Loyalty</strong> – Pride in belonging to the organisation and commitment.<br>
                11. <strong>Performance Standards & Pressure</strong> – High expectations and healthy pressure to excel.<br>
                12. <strong>Organisational Ethics & Values</strong> – Emphasis on integrity, fairness and social responsibility.<br><br>

                <strong>How to Create a Favourable Organisational Climate (7 MARKS)</strong><br><br>

                1. <strong>Open & Transparent Communication</strong> – Regular town halls, feedback channels, no hidden agendas.<br>
                2. <strong>Participative Leadership</strong> – Involve employees in decisions that affect them.<br>
                3. <strong>Fair & Performance-Linked Reward System</strong> – Transparent increments, bonuses, recognition programmes.<br>
                4. <strong>Training & Empowerment</strong> – Build trust by giving autonomy and skill development.<br>
                5. <strong>Supportive Supervision</strong> – Mentoring, coaching and emotional support.<br>
                6. <strong>Team-Building & Social Activities</strong> – Off-sites, celebrations, informal interactions.<br>
                7. <strong>Constructive Conflict Resolution</strong> – Open-door policy, grievance redressal forums.<br>
                8. <strong>Work-Life Balance Initiatives</strong> – Flexible timing, WFH, wellness programmes.<br>
                9. <strong>Strong Ethical Culture</strong> – Zero tolerance for corruption, clear value statements.<br>
                10. <strong>Continuous Climate Surveys & Action</strong> – Measure climate periodically and act on feedback.<br><br>

                <strong>Conclusion (2 MARKS):</strong>  
                A favourable organisational climate acts as a powerful motivator, enhances engagement, reduces turnover and drives superior performance. It is not static; top management must continuously monitor and nurture it through aligned policies, leadership behaviour and open culture. Organisations with positive climate (Google, TCS, Southwest Airlines) consistently outperform others in employee satisfaction and business results.<br><br>

                <strong>Memory Help:</strong>  
                Dimensions → A-S-R-W-R-C-C-L-P-I-P-E  
                (Autonomy, Structure, Reward, Warmth, Risk, Conflict, Communication, Leadership, Participation, Identity, Performance standards, Ethics)<br><br>

                Creation → C-L-R-T-S-T-C-W-E-S  
                (Communication, Leadership participative, Reward fairness, Training/empowerment, Supportive supervision, Team-building, Conflict resolution, Work-life balance, Ethics, Surveys)
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q3(a) & Q3(b) – Fully Detailed (10 + 10 = 20 MARKS) ====================== -->

<!-- ====================== Q3(a) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(a)</div>
        <div class="q-content">What do you mean by group development? Explain the different stages of the development of a group with appropriate examples. (10 MARKS)</div>
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
                <strong>Introduction (2 MARKS):</strong>  
                Group development is the process through which a collection of individuals transforms into a cohesive, high-performing team. Bruce Tuckman (1965) proposed the most widely accepted five-stage model: Forming → Storming → Norming → Performing → Adjourning.<br><br>

                <strong>Five Stages of Group Development (8 MARKS)</strong><br><br>

                1. <strong>Forming</strong>  
                   • Members come together, get acquainted, understand purpose and roles.  
                   • High uncertainty, politeness, dependence on leader.  
                   • Example: First meeting of a newly formed project team – everyone is cautious, formal introductions.<br><br>

                2. <strong>Storming</strong>  
                   • Conflicts emerge over goals, roles, procedures and leadership.  
                   • Resistance, frustration, power struggles.  
                   • Example: Team members argue over task allocation, timelines and who will lead.<br><br>

                3. <strong>Norming</strong>  
                   • Conflicts get resolved, norms and values established.  
                   • Cohesion, trust and mutual respect develop.  
                   • Example: Team agrees on ground rules, starts helping each other and shares responsibilities.<br><br>

                4. <strong>Performing</strong>  
                   • Group becomes fully functional and mature.  
                   • Focus shifts to task accomplishment with clear roles and high interdependence.  
                   • Example: The project team works smoothly, meets deadlines and delivers quality output.<br><br>

                5. <strong>Adjourning (Mourning)</strong>  
                   • Task completed, group disbands.  
                   • Members experience pride or sadness.  
                   • Example: Project ends, team submits report, celebrates success and says goodbyes.<br><br>

                <strong>Conclusion:</strong>  
                Understanding these stages helps leaders provide appropriate support at each phase and accelerate movement toward high performance.<br><br>

                <strong>Memory Help:</strong> F-S-N-P-A → Forming-Storming-Norming-Performing-Adjourning
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q3(b) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3(b)</div>
        <div class="q-content">Describe the principles of good communication. (10 MARKS)</div>
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
                <strong>Introduction (1 MARK):</strong>  
                Effective communication is the lifeblood of any organisation. Good communication ensures clarity, coordination and cooperation.<br><br>

                <strong>Principles of Good Communication (9 MARKS)</strong><br><br>

                1. <strong>Clarity</strong> – Simple, precise language; avoid jargon.<br>
                2. <strong>Completeness</strong> – Provide all necessary information and facts.<br>
                3. <strong>Conciseness</strong> – Brief and to the point; eliminate unnecessary words.<br>
                4. <strong>Concreteness</strong> – Specific facts and figures instead of vague statements.<br>
                5. <strong>Correctness</strong> – Accurate information, proper grammar and tone.<br>
                6. <strong>Consideration</strong> – Empathy; consider receiver’s background, emotions and needs.<br>
                7. <strong>Courtesy</strong> – Polite, respectful and positive tone.<br>
                8. <strong>Coherence & Consistency</strong> – Logical flow; consistent with previous messages.<br>
                9. <strong>Feedback</strong> – Two-way process; verify understanding.<br>
                10. <strong>Appropriate Channel & Timing</strong> – Choose right medium (oral/written/electronic) and right time.<br><br>

                <strong>Conclusion:</strong>  
                Following these principles minimises misunderstanding, builds trust and enhances organisational effectiveness.<br><br>

                <strong>Memory Help:</strong>  
                7 Cs + 3 more → Clarity, Completeness, Conciseness, Concreteness, Correctness, Consideration, Courtesy + Consistency, Feedback, Channel/Timing
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q4 ====================== -->
<!-- ====================== Q4 (Complete & Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q4</div>
        <div class="q-content">“Job satisfaction is an inner feeling; it is influenced by various organisational and personal variables.” Discuss these variables with examples. (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS):</strong>  
                Job satisfaction is an individual’s overall positive or negative emotional attitude towards his/her job. It is an inner feeling of contentment or discontentment arising from the perception that the job fulfils or blocks one’s important values and needs. It directly affects motivation, performance, absenteeism, turnover and organisational citizenship behaviour.<br><br>

                <strong>I. Organisational Variables Influencing Job Satisfaction (10–11 MARKS)</strong><br><br>

                1. <strong>Nature of Work</strong>  
                   • Challenging, meaningful, varied tasks → high satisfaction.  
                   • Example: Software developers enjoy autonomy and creativity → high satisfaction.  
                   • Repetitive assembly-line work → boredom and low satisfaction.<br><br>

                2. <strong>Pay and Benefits</strong>  
                   • Fair, competitive salary and attractive perks.  
                   • Perceived equity (comparison with peers and market) is crucial.  
                   • Example: Google’s high salary + stock options + free meals → very high satisfaction.<br><br>

                3. <strong>Promotion Opportunities</strong>  
                   • Clear, merit-based career growth path.  
                   • Example: Fast-track promotions in consulting firms motivate young MBAs.<br><br>

                4. <strong>Supervision Style</strong>  
                   • Supportive, participative, considerate supervisor → high satisfaction.  
                   • Autocratic, micromanaging boss → frustration and low satisfaction.<br><br>

                5. <strong>Co-workers</strong>  
                   • Friendly, cooperative, competent colleagues create a positive social environment.  
                   • Example: Strong team bonding in startups increases satisfaction even with lower pay.<br><br>

                6. <strong>Working Conditions</strong>  
                   • Safe, comfortable, hygienic workplace, proper tools and technology.  
                   • Example: Air-conditioned offices, ergonomic chairs, latest laptops → higher satisfaction.<br><br>

                7. <strong>Organisational Policies & Culture</strong>  
                   • Fair HR policies, work-life balance, recognition culture.  
                   • Example: TCS’s flexible timing and leave policy boosts satisfaction.<br><br>

                8. <strong>Job Security</strong>  
                   • Stable employment reduces anxiety.  
                   • Example: Government jobs are preferred for lifetime security.<br><br>

                <strong>II. Personal Variables Influencing Job Satisfaction (6–7 MARKS)</strong><br><br>

                1. <strong>Personality</strong>  
                   • Positive, optimistic, emotionally stable people report higher satisfaction in the same job.  
                   • Example: Extroverts enjoy sales jobs more than introverts.<br><br>

                2. <strong>Age & Tenure</strong>  
                   • Older and longer-tenured employees usually have higher satisfaction (better adjustment, realistic expectations).<br><br>

                3. <strong>Education & Skill Level</strong>  
                   • Highly educated employees expect autonomy and challenging work; mismatch causes dissatisfaction.<br><br>

                4. <strong>Gender & Family Responsibilities</strong>  
                   • Women may value flexible timing more due to family duties.<br><br>

                5. <strong>Values & Expectations</strong>  
                   • When personal values align with organisational values → higher satisfaction.<br>
                   • Example: An employee who values social service feels satisfied in an NGO but not in a tobacco company.<br><br>

                6. <strong>Perception of Fairness</strong>  
                   • Individual perception of equity, recognition and justice heavily influences satisfaction.<br><br>

                <strong>Conclusion (2 MARKS):</strong>  
                Job satisfaction is a combined outcome of organisational factors (which management can control) and personal factors (which are relatively fixed). Organisations that provide challenging work, fair rewards, supportive supervision, growth opportunities and a positive culture, while selecting employees whose personality and values fit the job, achieve the highest levels of job satisfaction, leading to lower turnover, higher productivity and stronger organisational commitment.<br><br>

                <strong>Memory Help:</strong>  
                Organisational → W-P-P-S-C-W-P-S (Work nature, Pay, Promotion, Supervision, Co-workers, Working conditions, Policies, Security)  
                Personal → P-A-E-G-V-P (Personality, Age, Education, Gender, Values, Perception of fairness)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q5 ====================== -->
<!-- ====================== Q5 (Complete & Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q5</div>
        <div class="q-content">“Stress has positive and negative consequences. Negative consequences have an adverse impact on biological, psychological and behavioural systems, apart from organisational systems.” Explain this statement with examples. (20 MARKS)</div>
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
                <strong>Introduction (3 MARKS):</strong>  
                Stress is the body’s and mind’s response to any demand or threat. In organisations, stress arises when job demands exceed an individual’s perceived ability or resources to cope. Hans Selye distinguished between:<br>
                • <strong>Eustress (Positive stress)</strong> – beneficial, motivating, enhances performance.<br>
                • <strong>Distress (Negative stress)</strong> – harmful, leads to dysfunction and illness.<br><br>

                <strong>Positive Consequences of Stress (Eustress) – 4 MARKS</strong><br><br>
                1. Increases alertness, energy and focus.<br>
                   Example: Meeting a tight project deadline sharpens concentration.<br>
                2. Acts as a motivator and performance booster up to an optimal level (Yerkes-Dodson Law).<br>
                   Example: Sales targets push executives to close more deals.<br>
                3. Enhances problem-solving and creativity under moderate pressure.<br>
                   Example: Hackathons produce innovative solutions.<br>
                4. Builds resilience and coping skills for future challenges.<br>
                   Example: Handling a crisis successfully increases confidence.<br><br>

                <strong>Negative Consequences of Stress (Distress)</strong><br><br>

                <strong>A. Biological / Physiological Impact (5 MARKS)</strong><br>
                • Cardiovascular issues: High BP, heart attacks (chronic stress → cortisol → artery damage).<br>
                • Weakened immune system → frequent colds, infections.<br>
                • Gastrointestinal disorders: Acidity, ulcers, IBS.<br>
                • Muscular problems: Tension headaches, back pain, migraines.<br>
                • Sleep disorders: Insomnia or excessive sleeping.<br>
                • Metabolic issues: Weight gain/loss, diabetes risk.<br>
                Example: A manager working 14-hour days for months develops hypertension and gastric ulcers.<br><br>

                <strong>B. Psychological Impact (4 MARKS)</strong><br>
                • Anxiety, irritability, depression.<br>
                • Burnout – emotional exhaustion, cynicism, reduced accomplishment.<br>
                • Reduced concentration, memory and decision-making ability.<br>
                • Low self-esteem and feelings of helplessness.<br>
                Example: An overworked accountant starts forgetting numbers and feels constant dread.<br><br>

                <strong>C. Behavioural Impact (4 MARKS)</strong><br>
                • Aggression or withdrawal from colleagues.<br>
                • Increased absenteeism and presenteeism.<br>
                • Higher turnover intention.<br>
                • Substance abuse (alcohol, smoking, drugs) as coping mechanism.<br>
                • Poor eating habits, lack of exercise.<br>
                Example: A stressed team leader snaps at juniors and starts coming in late regularly.<br><br>

                <strong>D. Organisational Impact (4 MARKS)</strong><br>
                • Decline in productivity and quality of work.<br>
                • Increased errors and accidents.<br>
                • Poor teamwork and communication breakdowns.<br>
                • Higher medical claims and compensation costs.<br>
                • Damage to organisational reputation (high attrition, negative Glassdoor reviews).<br>
                Example: A call centre with excessive targets sees 40% annual attrition and rising customer complaints.<br><br>

                <strong>Conclusion (2 MARKS):</strong>  
                While moderate stress (eustress) energises and drives superior performance, prolonged and intense stress (distress) creates a vicious cycle that damages the individual’s biological, psychological and behavioural systems and ultimately cripples organisational effectiveness. Proactive stress management through workload balancing, EAPs (Employee Assistance Programmes), wellness initiatives and supportive leadership is therefore a strategic necessity for modern organisations.<br><br>

                <strong>Memory Help:</strong>  
                Positive → M-A-C-R (Motivation, Alertness, Creativity, Resilience)<br>
                Negative Impacts → B-P-B-O (Biological → Psychological → Behavioural → Organisational)<br>
                Classic Examples → Hypertension & ulcers (Bio) | Burnout (Psycho) | Absenteeism & aggression (Behav) | Low productivity & high attrition (Org)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q6 ====================== -->
<!-- ====================== Q6 (Complete & Detailed – 20 MARKS) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q6</div>
        <div class="q-content">Critically evaluate the need for achievement theory of motivation. How can this theory be applied to managerial decisions? (20 MARKS)</div>
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
                <strong>Introduction (3–4 MARKS):</strong>  
                The Need for Achievement Theory (also called Acquired Needs Theory) was developed by David McClelland in the 1960s. It states that human motivation in the workplace is primarily driven by three learned/socially acquired needs:  
                1. Need for Achievement (nAch)  
                2. Need for Affiliation (nAff)  
                3. Need for Power (nPow) – further divided into Personalised and Institutionalised/Socialised Power.  
                Unlike Maslow or Herzberg, McClelland believed these needs are not innate but are developed through life experiences, culture and training.<br><br>

                <strong>Characteristics of the Three Needs (6 MARKS)</strong><br><br>

                1. <strong>Need for Achievement (nAch)</strong><br>
                   • Desire to excel and accomplish challenging goals.<br>
                   • Prefer moderate risk (50% chance of success).<br>
                   • Seek concrete, frequent feedback.<br>
                   • Take personal responsibility for success/failure.<br>
                   • Innovative and future-oriented.<br>
                   Example: Entrepreneurs, sales professionals, project leaders.<br><br>

                2. <strong>Need for Affiliation (nAff)</strong><br>
                   • Strong desire for friendly relationships and belongingness.<br>
                   • Avoid conflict, seek approval and cooperation.<br>
                   • Excellent in team roles and customer-facing jobs.<br>
                   • Perform best in supportive, harmonious environments.<br>
                   Example: HR personnel, counsellors, customer service executives.<br><br>

                3. <strong>Need for Power (nPow)</strong><br>
                   • Desire to influence and control others.<br>
                   • Personalised Power: Dominating for ego satisfaction.<br>
                   • Institutionalised/Socialised Power: Desire to direct others for organisational goals (best for leadership).<br>
                   Example: CEOs, senior managers, politicians.<br><br>

                <strong>Critical Evaluation – Strengths & Limitations (6–7 MARKS)</strong><br><br>

                <strong>Strengths:</strong><br>
                • Explains entrepreneurial and leadership behaviour very well.<br>
                • Needs can be measured through Thematic Apperception Test (TAT) and questionnaires.<br>
                • Proven that nAch can be developed through training (McClelland conducted successful programmes in India and other countries).<br>
                • Identifies why some people thrive in competitive environments while others prefer harmony.<br>
                • Highly practical for selection and placement decisions.<br><br>

                <strong>Limitations:</strong><br>
                • Difficult to measure needs accurately and objectively.<br>
                • Overlooks situational and organisational factors (e.g., reward system, culture).<br>
                • Ignores lower-order needs (pay, security) that are critical in developing countries.<br>
                • Does not explain team motivation or group dynamics adequately.<br>
                • Cultural bias – high nAch is valued in individualistic cultures (USA), but affiliation and harmony are more valued in collectivist cultures (India, Japan).<br><br>

                <strong>Application to Managerial Decisions (6–7 MARKS)</strong><br><br>

                1. <strong>Recruitment & Selection:</strong>  
                   • Use TAT or behavioural interviews to identify high nAch candidates for sales, R&D, startups.  
                   • High nAff for HR, customer relations, team coordinator roles.  
                   • High institutionalised nPow for top leadership positions.<br><br>

                2. <strong>Job Design & Assignment:</strong>  
                   • Give challenging, individual-responsibility projects to high nAch employees.  
                   • Assign team-based and relationship-oriented tasks to high nAff people.<br><br>

                3. <strong>Motivation & Reward System:</strong>  
                   • High nAch → frequent performance feedback, recognition, merit-based promotion.  
                   • High nAff → team awards, good interpersonal climate, social events.  
                   • High nPow → status symbols, authority, participation in strategic decisions.<br><br>

                4. <strong>Training & Development:</strong>  
                   • Conduct “Achievement Motivation Training” programmes to raise nAch levels (proven successful in India by McClelland himself).<br><br>

                5. <strong>Leadership Development:</strong>  
                   • Identify and groom individuals with high institutionalised power for senior roles.<br><br>

                6. <strong>Organisational Culture:</strong>  
                   • Create a high-performance culture for high nAch employees, or a collaborative culture for high nAff employees.<br><br>

                <strong>Conclusion (2 MARKS):</strong>  
                Despite certain limitations, McClelland’s Need for Achievement Theory remains one of the most practical and research-supported motivation theories. It provides managers with a powerful diagnostic tool to understand individual differences in motivation and design personalised strategies for selection, placement, motivation and leadership development. When combined with other theories (e.g., expectancy, equity), it becomes even more effective in real organisational settings.<br><br>

                <strong>Memory Help:</strong>  
                Needs → A-A-P → Achievement (moderate risk + feedback) | Affiliation (relationships) | Power (influence/control)<br>
                Best Jobs → nAch: Entrepreneurs/Sales | nAff: HR/Customer Service | nPow: CEOs/Leaders<br>
                Managerial Uses → S-J-M-T-L-C (Selection | Job design | Motivation system | Training | Leadership | Culture)
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q7 ====================== -->
<!-- ====================== Q7 (Complete & Detailed) ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">Q7</div>
        <div class="q-content">What are the components of organisational structure? Discuss them and explain how they help in the smooth functioning of the organisation. (20 MARKS)</div>
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
                <strong>Introduction:</strong>  
                Organisational structure is the formal system of task and authority relationships that determines how activities are directed toward the achievement of organisational goals. It is the framework that defines how people, tasks and resources are grouped, coordinated and controlled. A well-designed structure provides clarity, accountability and efficiency.<br><br>

                <strong>Major Components of Organisational Structure (10–12 MARKS)</strong><br><br>

                1. <strong>Hierarchy of Authority (Chain of Command)</strong><br>
                   • Defines who reports to whom and the vertical flow of authority.<br>
                   • Ensures unity of command, discipline and clear accountability.<br>
                   • Example: CEO → Regional Manager → Branch Manager → Staff.<br><br>

                2. <strong>Division of Labour / Specialisation</strong><br>
                   • Breaking down total work into smaller, specialised tasks.<br>
                   • Increases efficiency, expertise and productivity.<br>
                   • Example: Separate departments for Marketing, Finance, HR, Production.<br><br>

                3. <strong>Span of Control (Span of Management)</strong><br>
                   • Number of subordinates a manager can effectively supervise.<br>
                   • Narrow span → tall structure (more levels, close supervision).<br>
                   • Wide span → flat structure (fewer levels, more delegation).<br>
                   • Affects speed of communication and decision-making.<br><br>

                4. <strong>Departmentation</strong><br>
                   • Grouping of activities into departments/units.<br>
                   • Types: Functional, Product, Geographic, Customer, Process, Matrix.<br>
                   • Enables specialisation and better focus on specific objectives.<br><br>

                5. <strong>Delegation of Authority</strong><br>
                   • Assignment of decision-making power and responsibility to lower levels.<br>
                   • Reduces top-management workload and speeds up decisions.<br>
                   • Must be accompanied by accountability.<br><br>

                6. <strong>Centralisation vs Decentralisation</strong><br>
                   • Centralisation: Decision-making power concentrated at top.<br>
                   • Decentralisation: Power distributed to lower levels.<br>
                   • Decentralised structures promote faster decisions, innovation and motivation.<br><br>

                7. <strong>Formalisation / Standardisation</strong><br>
                   • Degree to which rules, policies, procedures and jobs are written and standardised.<br>
                   • High formalisation → consistency and predictability.<br>
                   • Low formalisation → flexibility and creativity.<br><br>

                8. <strong>Coordination Mechanisms</strong><br>
                   • Methods to integrate efforts of different departments (e.g., meetings, liaison roles, integrators, IT systems).<br>
                   • Essential in large and complex organisations.<br><br>

                9. <strong>Communication System</strong><br>
                   • Formal channels (downward, upward, horizontal) and informal networks.<br>
                   • Clear communication prevents confusion and conflict.<br><br>

                10. <strong>Alignment with Technology & Environment</strong><br>
                    • Mechanistic structure (stable environment, routine technology).<br>
                    • Organic structure (dynamic environment, non-routine technology).<br>
                    • Structure must fit technology (Woodward) and environment (Burns & Stalker).<br><br>

                <strong>How These Components Help in Smooth Functioning (6–8 MARKS)</strong><br>
                • Provides <strong>clarity of roles & responsibilities</strong> → reduces overlap & confusion.<br>
                • Ensures <strong>accountability</strong> through hierarchy and delegation.<br>
                • Facilitates <strong>coordination</strong> among departments.<br>
                • Promotes <strong>efficiency</strong> through specialisation and standardisation.<br>
                • Enables <strong>quick decision-making</strong> (decentralisation) and control (centralisation).<br>
                • Supports <strong>scalability</strong> and adaptability when properly designed.<br>
                • Minimises conflict by defining authority and communication channels.<br><br>

                <strong>Conclusion:</strong>  
                Organisational structure is the backbone of effective management. The right combination and balance of these components creates a system where work flows smoothly, decisions are timely, employees are motivated, and organisational goals are achieved efficiently. No single structure is ideal; it must be contingent upon size, strategy, technology and environment.<br><br>

                <strong>Memory Help:</strong>  
                Hie-Di-Span-Dept-Dele-Cen/Formal-Coord-Comm-Tech<br>
                (Hierarchy → Division → Span → Departmentation → Delegation → Centralisation → Formalisation → Coordination → Communication → Technology)
            </div>
        </div>
    </div>
</div>
<!-- ====================== Q8(a) Models of Man ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(a)</div>
        <div class="q-content">Models of Man (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> In organisational behaviour, “Models of Man” refer to different assumptions managers hold about human nature and motivation. Each model reflects a particular school of thought and directly influences management style, policies, motivation techniques and leadership approach.<br><br>

                <strong>The Main Models of Man</strong><br><br>
                1. <strong>Rational Economic Man</strong><br>
                   • Based on classical economic theory and Taylor’s scientific management.<br>
                   • Assumes humans are primarily motivated by money and economic incentives.<br>
                   • People behave rationally to maximise personal financial gain.<br>
                   • Management approach: Close supervision, piece-rate wages, strict controls.<br><br>

                2. <strong>Social Man</strong><br>
                   • Emerged from the Human Relations Movement (Hawthorne Studies).<br>
                   • Views humans as social beings whose behaviour is influenced by group norms, belongingness, recognition and relationships.<br>
                   • Money is secondary; social needs dominate.<br>
                   • Management approach: Friendly supervision, team work, participation, good interpersonal relations.<br><br>

                3. <strong>Self-Actualising Man</strong><br>
                   • Propounded by Abraham Maslow and Douglas McGregor (Theory Y).<br>
                   • Believes humans are growth-oriented and want to achieve their full potential.<br>
                   • Work can be a source of satisfaction and self-fulfilment if conditions are right.<br>
                   • Management approach: Job enrichment, autonomy, challenging tasks, participative decision-making.<br><br>

                4. <strong>Complex Man</strong><br>
                   • Developed by Schein and modern behavioural scientists.<br>
                   • Recognises that human needs are complex, varied and change over time and situations.<br>
                   • No single motivator works for everyone all the time.<br>
                   • Management approach: Contingency approach, flexible policies, individualised motivation.<br><br>

                5. <strong>Administrative Man</strong><br>
                   • Introduced by Herbert Simon (Bounded Rationality).<br>
                   • Humans intend to be rational but have limited information, time and cognitive capacity.<br>
                   • They “satisfice” (choose satisfactory rather than optimal solutions).<br>
                   • Management implication: Provide better information systems and simplify decision processes.<br><br>

                6. <strong>Political Man</strong><br>
                   • Views individuals as power-seeking and influence-oriented.<br>
                   • People form coalitions, bargain and use politics to protect and further interests.<br>
                   • Management needs to understand power dynamics, negotiation and conflict resolution.<br><br>

                <strong>Conclusion:</strong> No single model is complete or universally applicable. Effective managers integrate insights from multiple models depending on the person, situation and organisational context. Modern organisations tend to move from Economic Man → Social Man → Self-Actualising/Complex Man assumptions.<br><br>

                <strong>Memory Help:</strong> R-S-S-C-A-P → Rational Economic, Social, Self-Actualising, Complex, Administrative, Political Man
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(b) Culture-Person Compatibility ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(b)</div>
        <div class="q-content">Culture-Person Compatibility (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Culture-Person Compatibility (Person-Organisation Fit) refers to the degree of congruence between an individual’s values, beliefs, personality and needs and the prevailing organisational culture. High compatibility leads to greater job satisfaction, commitment and performance, while poor fit results in stress, dissatisfaction and turnover.<br><br>

                <strong>Key Dimensions/Factors of Culture-Person Compatibility</strong><br><br>
                1. <strong>Congruence of Values:</strong> When personal values (honesty, innovation, teamwork) match organisational values.<br>
                2. <strong>Work-Ethic Alignment:</strong> Match between individual’s attitude towards hard work, punctuality and organisational norms.<br>
                3. <strong>Behavioural Expectations:</strong> Individual’s preferred style (collaborative vs competitive) matches organisational norms.<br>
                4. <strong>Leadership Style Fit:</strong> Preference for autocratic vs participative leadership matches actual style.<br>
                5. <strong>Risk & Innovation Orientation:</strong> Risk-averse person in a highly innovative culture (or vice-versa) creates discomfort.<br>
                6. <strong>Socialisation Process:</strong> Effective orientation and training help newcomers internalise the culture.<br>
                7. <strong>Cultural Openness & Diversity:</strong> Inclusive cultures accommodate varied personalities better.<br><br>

                <strong>Outcomes of High Compatibility</strong><br>
                • Higher job satisfaction & organisational commitment<br>
                • Lower stress and burnout<br>
                • Reduced absenteeism and turnover<br>
                • Better performance and organisational citizenship behaviour<br><br>

                <strong>Outcomes of Poor Fit</strong><br>
                • Frustration, conflict and withdrawal<br>
                • High intention to leave<br>
                • Counter-productive work behaviour<br><br>

                <strong>Conclusion:</strong> Culture-person compatibility is a two-way process. Organisations must select candidates whose values align with the culture and also adapt the culture to retain diverse talent. It is a critical factor in building a motivated and stable workforce.<br><br>

                <strong>Memory Help:</strong> V-W-B-L-R-S-O → Values, Work-ethic, Behaviour, Leadership style, Risk orientation, Socialisation, Outcomes
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(c) Managing Multi-National Organisation ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(c)</div>
        <div class="q-content">Managing Multi-National Organisation (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> A Multi-National Organisation (MNC) owns and controls production and/or service facilities in more than one country. Managing an MNC requires balancing global integration (standardisation, cost efficiency) with local responsiveness (adaptation to host-country needs).<br><br>

                <strong>Key Aspects of Managing Multi-National Organisations</strong><br><br>
                1. <strong>Global Strategy with Local Adaptation:</strong> “Think globally, act locally” (e.g., McDonald’s same brand but different menus).<br>
                2. <strong>Cultural Diversity Management:</strong> Understanding and respecting Hofstede’s cultural dimensions in each country.<br>
                3. <strong>Organisational Structure:</strong> Use of matrix, transnational or network structures for coordination.<br>
                4. <strong>Cross-Cultural Communication & Leadership:</strong> Avoiding ethnocentrism and parochialism.<br>
                5. <strong>Human Resource Management:</strong> Expatriate selection, training, repatriation, fair compensation across countries.<br>
                6. <strong>Decision-Making:</strong> Balancing centralised control (HQ) vs local autonomy.<br>
                7. <strong>Coordination & Control Mechanisms:</strong> Global reporting systems, budgeting, audits, performance evaluation.<br>
                8. <strong>Legal & Ethical Compliance:</strong> Adhering to host-country laws, labour standards and anti-corruption norms.<br>
                9. <strong>Technology & Knowledge Transfer:</strong> Sharing best practices and innovations across units.<br>
                10. <strong>Corporate Social Responsibility:</strong> Addressing local community needs and sustainability.<br><br>

                <strong>Conclusion:</strong> Successful MNC management requires cultural intelligence, strategic flexibility and strong coordination systems. The right balance between global consistency and local sensitivity determines competitive advantage and long-term success.<br><br>

                <strong>Memory Help:</strong> S-C-S-L-H-D-C-L-T-S → Strategy, Culture, Structure, Leadership, HRM, Decision-making, Control, Legal/Ethics, Technology transfer, Social responsibility
            </div>
        </div>
    </div>
</div>

<!-- ====================== Q8(d) Managerial Use of Perception ====================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">8(d)</div>
        <div class="q-content">Managerial use of perception (10 MARKS)</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Perception is the process by which individuals select, organise and interpret sensory stimuli to make sense of their environment. In organisations, managerial perception influences almost every decision and interaction.<br><br>

                <strong>Managerial Applications of Perception</strong><br><br>
                1. <strong>Employee Selection:</strong> Interviewers form impressions based on appearance, communication style and perceived fit.<br>
                2. <strong>Performance Appraisal:</strong> Manager’s perception of effort and results affects ratings (subject to biases).<br>
                3. <strong>Motivation & Leadership:</strong> Understanding how employees perceive fairness, rewards and leadership style.<br>
                4. <strong>Conflict Resolution:</strong> Recognising differing perceptions of the same event helps find common ground.<br>
                5. <strong>Effective Communication:</strong> Ensuring message sent matches message received (perceptual filters).<br>
                6. <strong>Decision-Making:</strong> Interpretation of data, risks and opportunities depends on perception.<br>
                7. <strong>Change Management:</strong> How employees perceive change (threat vs opportunity) determines resistance or acceptance.<br>
                8. <strong>Customer Service & Organisational Image:</strong> Managing internal and external perceptions.<br><br>

                <strong>Common Perceptual Errors</strong><br>
                • Halo/Horn Effect • Stereotyping • Selective Perception • Projection • Contrast Effect • Primacy/Recency Effect<br><br>

                <strong>Conclusion:</strong> Accurate perception is critical for fair and effective management. Managers must be aware of perceptual biases, seek multiple viewpoints and verify facts before acting.<br><br>

                <strong>Memory Help:</strong> S-P-M-C-C-D-C-O → Selection, Performance appraisal, Motivation, Conflict resolution, Communication, Decision-making, Change management, Organisational image
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
            const icon = card.querySelector('.show-answer-btn i');
            if (span) span.textContent = 'Answer Shown';
            if (icon) { icon.classList.remove('fa-eye'); icon.classList.add('fa-eye-slash'); }
        });
    };
</script>
@endsection