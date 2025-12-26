@extends('layouts.user')
@section('page_h1', 'WRITING AND STUDY SKILLS')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')







<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root{--primary:#005BFF;--accent:#F9A826;--success:#28C76F;--bg:#F3F6FB;--card-bg:#FFFFFF;--border:#E2E8F0;
        --shadow-sm:0 4px 12px rgba(15,23,42,0.06);--shadow-md:0 8px 25px rgba(15,23,42,0.10);--radius-lg:28px;--transition:all 0.3s ease;
        --highlight:#FFFBEB;--highlight-border:#FBBF24;}
    *{margin:0;padding:0;box-sizing:border-box;}
    body{font-family:'Inter',sans-serif;background:var(--bg);color:#1e293b;line-height:1.7;}
    .container{max-width:1129px;margin:0 auto;padding:0 20px;}
    .paper-header{text-align:center;background:#fff;padding:28px 24px;border-radius:var(--radius-lg);margin-bottom:32px;box-shadow:var(--shadow-md);border:1px solid var(--border);}
    .paper-code{font-size:1.6rem;font-weight:700;color:var(--primary);letter-spacing:4px;margin-bottom:8px;}
    .paper-title{font-size:1.9rem;font-weight:800;color:#0f172a;margin:10px 0;text-transform:uppercase;letter-spacing:1px;}
    .instructions-box{background:#E3F0FF;border:1px solid rgba(0,91,255,0.35);padding:18px 22px;border-radius:20px;margin:32px 0;font-weight:600;box-shadow:0 8px 20px rgba(15,23,42,0.06);}
    .question-dropdown{background:var(--card-bg);border-radius:var(--radius-lg);margin:24px 0;border:1px solid var(--border);box-shadow:var(--shadow-sm);overflow:hidden;transition:var(--transition);}
    .question-dropdown:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
    .q-trigger{padding:22px 26px;display:flex;align-items:center;gap:16px;cursor:pointer;user-select:none;background:linear-gradient(to right,#F7FAFF,#FFFFFF);min-height:80px;}
    .q-trigger:hover{background:linear-gradient(to right,#E9F2FF,#F7FAFF);}
    .q-circle{width:42px;height:42px;background:radial-gradient(circle at 30% 0,#7FB4FF,var(--primary));color:#fff;border-radius:50%;font-weight:700;font-size:1.3rem;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:0 6px 16px rgba(0,91,255,0.5);}
    .q-content{flex:1;font-size:1.1rem;font-weight:600;line-height:1.6;color:#0f172a;padding-right:10px;}
    .marks-wrapper{display:flex;align-items:center;gap:10px;flex-shrink:0;}
    .marks-badge{background:linear-gradient(135deg,#DBEAFE,#BFDBFE);color:#1D4ED8;padding:8px 14px;border-radius:50px;font-weight:600;font-size:0.9rem;white-space:nowrap;box-shadow:0 2px 8px rgba(37,99,235,0.25);border:1px solid #93C5FD;}
    .show-answer-btn{background:linear-gradient(135deg,#E3F9EF,#C7F1DD);color:#166534;padding:8px 14px;border-radius:999px;border:1px solid var(--success);font-weight:700;font-size:0.9rem;cursor:pointer;display:inline-flex;align-items:center;gap:6px;transition:var(--transition);}
    .dropdown-icon{width:36px;height:36px;background:radial-gradient(circle at 30% 0,#7FB4FF,var(--primary));color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.1rem;transition:var(--transition);flex-shrink:0;}
    .question-dropdown.open .dropdown-icon{transform:rotate(180deg);background:var(--accent);}
    .answer-panel{max-height:0;overflow:hidden;transition:max-height 0.5s ease,padding 0.3s ease;background:#F7FAFF;border-top:1px solid var(--border);}
    .question-dropdown.open .answer-panel{max-height:8000px;}
    .answer-content{padding:28px 32px;font-size:1rem;line-height:1.9;color:#374151;background:linear-gradient(to bottom,#FFFFFF,#F7FAFF);}
    .explanation{background:var(--highlight);border-left:5px solid var(--highlight-border);padding:18px 22px;margin:20px 0;border-radius:0 12px 12px 0;color:#92400e;}
    table{width:100%;border-collapse:collapse;margin:20px 0;}
    th,td{border:1px solid #cbd5e1;padding:12px;text-align:left;background:#f8fafc;}
    th{background:#e0e7ff;color:#1e293b;font-weight:600;}
    @media(max-width:768px){
        .q-trigger{flex-wrap:wrap;padding:16px;gap:12px;}
        .q-content{order:3;width:100%;}
        .marks-wrapper,.dropdown-icon{order:2;}
        .dropdown-icon{margin-left:auto;}
        .answer-content{padding:20px 16px;}
    }
</style>

<div class="container">
    <div class="paper-header mt-5">
        <div><img src="./images/log.jpg" alt="" style="width:150px;"></div>
        <div class="paper-code">BEGS–183</div>
        <h1 class="paper-title">WRITING AND STUDY SKILLS</h1>
        <div class="program-name">BAG / B.COM / B.Sc</div>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> Attempt all questions • Total Marks: 100
    </div>

   <!-- ==================== Q1 (a) – 5 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(a)</div>
        <div class="q-content">What exactly are homonyms? Please give at least four examples of homophones.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Homonyms are words that are written and pronounced in the same way but have different meanings. The Greek word homos is derived from onyma. When used properly, they make English expressive and sometimes even confusing.<br><br>
                <strong>Principles of Definition:</strong> Homonyms share the same pronunciation and spelling, but have different meanings.<br>
                <strong>Categories:</strong> Different grammatical categories may apply.<br>
                <strong>Types:</strong><br>
                • Homophones: Same sound, different meanings.<br>
                • The homographs are the same words but have different meanings.<br>
                <strong>The importance of Context</strong> aids the reader in understanding the intended meaning.<br><br>
                <strong>Examples:</strong><br>
                • Bank (river bank / financial institution)<br>
                • Bark (dog bark / outer layer of tree)<br>
                • Bat (cricket-bat / flying mammal)<br>
                • Right (direction or correct)<br><br>
                <strong>Use</strong> to improve vocabulary and style.<br>
                <strong>Conclusion:</strong> The use of homophones makes language flexible and colourful, but it is important to be careful when using them in order not to create confusion.<br>
                <strong>Keyword Anchors:</strong> Same form - different meaning - context - homophones - homographs - examples.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q1 (b) – 5 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(b)</div>
        <div class="q-content">What do you understand by the term ‘synthesising’? How does ‘synthesising’ become an important step in the process of writing?</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> The term 'synthesising' is using ideas and data from several sources together into one unified structure. It's a higher-order thinking skill that turns an analysis into a piece of organised writing.<br><br>
                <strong>Main points:</strong><br>
                • The definition is to bring together different facts and points of view into a single coherent unit.<br>
                • To provide a comprehensive and balanced view of a subject.<br>
                • The process step comes after the reading phase and notes-taking, but before drafting.<br>
                • Integration: Merges different perspectives logically.<br>
                • The ability to think critically involves more than summarizing.<br>
                • Unique Insight Promotes a fresh interpretation.<br>
                • Example: Combining information from several articles to form a coherent essay<br>
                • Result: Writes with clarity, depth and structure.<br><br>
                <strong>Finale:</strong> A synthesis is required to build an intelligent, logical, and coherent writing that shows the writer’s ability and creativity.<br>
                <strong>Anchors for Keywords:</strong> Link – combine – integrate – evaluate – create coherence.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q1 (c) – 5 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(c)</div>
        <div class="q-content">Why is it important to edit/proofread your writing</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Correction and proofreading are the end of the writing process. It ensures the accuracy, clarity, and presentation. This is done to improve the content for readers.<br><br>
                <strong>Main points:</strong><br>
                • Text Editing: focuses on the structure, tonality, and flow of the text.<br>
                • Proofreading: detects errors in spelling, punctuation or grammar.<br>
                • Clarity ensures sentences convey their intended meaning.<br>
                • Accuracy eliminates factual and formatting errors.<br>
                • Coherence maintains logical succession and unity of thought.<br>
                • Professionalism: Shows professionalism and the level of quality in writing.<br>
                • Readability makes writing easier to follow.<br>
                • Final Review: ensures an edited and complete document.<br><br>
                <strong>Finale:</strong> The editing and proofreading process transforms the rough draft into an error-free and professional document, which creates a favorable impression in the mind of the reader.<br>
                <strong>Anchors for Keywords:</strong> Clarify, correct and polish.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q1 (d) – 5 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">1(d)</div>
        <div class="q-content">How is expository writing different from argumentative writing? Give examples of both.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Two main types of academic prose include expository and persuasive writings. They both use logical reasoning, but their purpose are different. While they are similar, one has the goal of explaining, while the other has that of persuading.<br><br>

                <table>
                    <tr><th>Basis for Difference</th><th>Expository Writing</th><th>Argumentative Writing</th></tr>
                    <tr><td>1. Purpose</td><td>The primary goal is to inform or explain a topic in an organized and logical manner.</td><td>The primary goal is to influence or convince the reader using reasoning and evidence.</td></tr>
                    <tr><td>2. Nature and Tone</td><td>Presents facts using a neutral, objective tone.</td><td>Presents opinions and arguments in a rational, assertive manner.</td></tr>
                    <tr><td>3. Structure</td><td>Follows a simple format: Introduction → Explanation → Conclusion.</td><td>Follows logical argumentation: Argument → Proof → Rebuttal → Conclusion.</td></tr>
                    <tr><td>4. Use of Evidence</td><td>Uses facts and examples to clarify or explain the concept.</td><td>Uses examples, logic, facts, statistics, and other evidence to justify or defend a viewpoint.</td></tr>
                    <tr><td>5. Example and Outcome</td><td>Example: The process of photosynthesis.<br>Outcome: Helps readers clearly understand the topic.</td><td>Example: “Why we should use renewable energy instead of fossil fuels.”<br>Outcome: Influences or persuades the reader’s decision.</td></tr>
                </table><br>

                <strong>Concluding paragraph:</strong> Expository and argumentative writing both inform and explain. To be effective, you need to use a logical structure, clear expression, and be supported by evidence.<br>
                <strong>Word Anchors:</strong> Explain, Inform, Persuade. Logic. Evidence. Clarity. Purpose.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q2 (a) – 10 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">2(a)</div>
        <div class="q-content">How would you write an essay following the process approach? Briefly explain the various steps involved.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> A process approach to essays looks at writing as more of a continual process, involving multiple interrelated stages, rather than a singular act. It encourages writers to plan, draft, review, and polish their essays. Writing is treated as a creative, developmental and learning activity. Ideas can evolve with feedback and reflection.<br><br>
                <strong>Main steps in the process:</strong><br>
                • <strong>Understanding the Topic:</strong> Carefully read and interpret the Essay Question to identify its Focus, Scope, and Purpose.<br>
                • <strong>Brainstorming ideas:</strong> Generating ideas using techniques like mind-mapping or listing. This broadens our thinking and provides rich content.<br>
                • <strong>Outlining and Planning:</strong> Arrange the ideas in a logical order under headings. It is important to have an outline that gives the essay direction.<br>
                • <strong>The Draft:</strong> Start by writing the essay's first version, paying more attention to the content than the grammar. Create sentences with clear topics and details to support them.<br>
                • <strong>Revising:</strong> Assess the text for its organisation, coherence and argumentation. Remove redundant or irrelevant material.<br>
                • <strong>Editor:</strong> Revise language and sentence structure. Assure that the transitions and linking create a smooth, fluid flow.<br>
                • <strong>Review:</strong> Look for errors in spelling, punctuation or grammar.<br>
                • <strong>Final Presenting:</strong> Prepare a neatly formatted essay. Include a clear intro, body, and conclusion.<br><br>
                <strong>Finale:</strong> When writing, the process-based approach makes it systematic and free of errors. It increases creativity, builds confidence and leads to well-structured writing.<br>
                <strong>Keyword Anchors:</strong> Plan, Draft, Review, Edit, Proofread, and Present and Improve.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q2 (b) – 10 Marks ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">2(b)</div>
        <div class="q-content">What are the three major types of ‘study skills’? How do such skills help us to become better learners?</div>
        <div class="marks-wrapper">
            <div class="marks-badge">10 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Introduction:</strong> Study skills are the strategies and methods that assist learners in collecting, organising, or recalling information. Study skills fall into three main categories, which are gathering, storing and retrieving information. These skills can help students perform more effectively in school and learn faster.<br><br>
                • <strong>Gathering skills:</strong> collect information in various forms, including from books, journals, online sources and other materials. There are many techniques to use, such as scanning, skimming and using reference materials like dictionaries or thesauruses.<br>
                • <strong>Storing skills:</strong> Organise and record information. Methods for preparing include taking notes, summarizing and using visuals, such as charts and diagrams.<br>
                • <strong>Retrieving skills:</strong> Help when needed in remembering and using information. Improving memory and application is enhanced by using activities like outlines, recall practice, and revision.<br>
                • <strong>Relationship between skills:</strong> This cycle of collecting, storing and retrieving is an ongoing learning experience.<br><br>
                <strong>What is the role of in learning?</strong><br>
                • Encourage better understanding, critical thinking and active engagement.<br>
                • Reducing exam anxiety and improving time management.<br>
                • Outcome: They become more independent, confident and efficient at handling schoolwork.<br><br>
                <strong>Conclusion:</strong> Studies show that skills that are effective transform reading from passive to active learning. The skills are important because they help the student plan and create knowledge in an efficient manner.
            </div>
        </div>
    </div>
</div>


<!-- ==================== Q3 – 7 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">3</div>
        <div class="q-content">Write a well-structured composition (with a clear beginning, body and conclusion) on the following topic:<br><strong>Urgent measures and steps to be taken for water conservation</strong></div>
        <div class="marks-wrapper">
            <div class="marks-badge">7 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>Urgent measures and steps to be taken for water conservation</strong><br><br>
                <strong>Introduction:</strong> Water, the foundation for life and essential in domestic, agricultural and industrial uses, is the water. Rapid urbanisation, polluting industries, and careless usage have all contributed to water scarcity. Both preventive action and measures must be implemented to save this precious resource. In order to conserve water, the textbook stresses responsible usage, science-based management, and community participation.<br><br>

                <strong>A. Measures to conserve water</strong><br><br>
                • <strong>Water Harvesting:</strong> Collecting and storing water from open ground and rooftops helps recharge the groundwater.<br>
                • <strong>Water-saving Irrigation:</strong> The use of drip, sprinkler or other irrigation methods will reduce water wastage. This is because water can be delivered directly to plant roots.<br>
                • <strong>Reuse and recycling of water:</strong> Domestic effluents and industrial effluents must be treated before being reused for washing clothes, gardening or for other purposes that are not intended for drinking.<br>
                • <strong>Forest and Watershed Development.</strong> By planting trees and protecting the catchment area, you can help prevent soil erosion and surface runoff.<br>
                • <strong>Use water-saving Devices</strong> in Homes and Public Places.<br><br>

                <strong>B. PREVENTIVE ACTIONS FOR WATER CONSERVATION</strong><br><br>
                • <strong>Avoiding water pollution.</strong> Strict regulation of industrial waste, chemical discharges, and wastewater disposal is necessary in order to maintain the cleanliness and usability of our water resources.<br>
                • <strong>Water System Maintenance:</strong> Cleaning storage tanks, repairing leaks, and checking pipes will prevent waste and contamination.<br>
                • <strong>Public awareness and education:</strong> Campaigns, workshops and school programmes are to promote responsible water use as well as a conservation mindset.<br>
                • <strong>Policy implementation and law enforcement:</strong> Governments need to implement strong laws and guidelines for industrial water extraction, urban water plans, and groundwater use.<br>
                • <strong>Communities Participation</strong> Community and Self Help Groups Can Actively participate in Watershed Management, Village Water Storage, and Monitoring of Water Bodies.<br><br>

                <strong>Summary:</strong> The conservation of water is a combination of practical actions and preventive measures. Our water resources can be secured for future generations by using technology and awareness. Every citizen is responsible for making “Every Drop Counts” real.<br><br>
                <strong>Useful Keywords Anchors include:</strong> Awareness, Participation, Policy, Reuse and Irrigation.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q4 – 5 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">4</div>
        <div class="q-content">Write a formal letter to the Principal of your college requesting that the computer facilities on the campus be improved and updated.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">5 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>FORMAL LETTER TO PRINCIPAL REQUESTING AMENDMENTS TO THE COMPUTER FIELDS</strong><br><br>
                From:<br>
                Rahul Sharma<br>
                B.A. English, roll no. 2145<br>
                Room No. 215, Hostel Block-II<br>
                ABC College Delhi 110007<br><br>

                Date 7 November 2025<br><br>

                To:<br>
                The Principal<br>
                ABC College<br>
                Delhi - 110007<br><br>

                <strong>Subject:</strong> Request For Improvement and Upgrade of Computer Facilities<br><br>

                Please respect Sir/Madam.<br><br>

                This is a letter from a B.A. Please be aware of the bad condition of the computer facilities at our college. Some of the computers remain inoperable and are not up to date. This causes students inconvenience when completing research assignments or online tasks.<br><br>

                In the absence of modern systems and with slow internet connections, it is hard for students to engage in computer-based teaching and make use of digital resources that are provided by their university. Technology literacy is important. Therefore, it is urgent to update the computers with modern software and perform regular maintenance.<br><br>

                This is a very important matter. I ask you to please look into it and take the appropriate steps to enhance and modernise computer facilities on campus. It will help the students develop their digital proficiency and improve their academic performance.<br><br>

                We thank you for your anticipation.<br><br>

                Yours faithfully,<br>
                (Signature)<br>
                Rahul Sharma
            </div>
        </div>
    </div>
</div>
<!-- ==================== Q5 – 6 Marks – FULL UNCOMPRESSED ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">5</div>
        <div class="q-content">The Student Council of your college has conducted a campaign to improve the reading habits of young children in a neighbouring school. Write a brief report of the meeting.</div>
        <div class="marks-wrapper">
            <div class="marks-badge">6 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>REPORT OF THE CAMPAIGN ABOUT IMPROVING READING HABITS AMONG SCHOOL CHILDREN</strong><br><br>
                <strong>Title:</strong> Student Council Report on Reading Awareness Campaign<br>
                <strong>Date:</strong> Friday, 5 November 2025<br>
                <strong>Venue:</strong> Bright Future Public School, Delhi<br>
                <strong>Reported by:</strong> Rahul Singh, Student Council Secretary at ABC College.<br><br>

                <strong>Introduction:</strong> This report summarizes the Campaign to Promote Reading at Bright Future Public School on November 5, 2025. This campaign was organised by the Student Council of ABC College. The goal of the campaign was to instill reading habits in young children as well as make them aware of how important reading is for both learning and fun.<br><br>

                <strong>The Campaign's Objectives</strong><br>
                • Children should be encouraged to read.<br>
                • Making reading a regular part of one's daily routine.<br>
                • Students can explore more books than their usual syllabus.<br><br>

                <strong>Program Details:</strong><br>
                • Principal Bright Future High School inaugurated the campaign.<br>
                • During the sessions, ten student volunteers of ABC College held book presentations, interactive quizzes, and storytelling.<br>
                • Posters and charts have been used to promote the benefits of reading.<br>
                • They were impressed by the enthusiasm of students and their teachers.<br>
                • Students donated books to create a small Reading Corner.<br><br>

                <strong>Results of the meeting:</strong> This programme has received an overwhelming response from students and educators. A number of children are committed to reading at least 30 minutes a day. The campaign increased motivation and interest in reading.<br><br>

                <strong>Final Conclusion:</strong> Student Council’s Campaign was a Successful and Inspiring Initiative. This campaign was a success in strengthening the connection between colleges and local schools. It also achieved its objective of promoting lifelong habits of reading. The Council has decided to carry on this outreach programme each semester.<br><br>
                <strong>Keyword anchors:</strong> Planning – Awareness – Participation, Outcome and Continuity.
            </div>
        </div>
    </div>
</div>

<!-- ==================== Q6 – FULL UNCOMPRESSED (Passage + All Questions) ==================== -->
<div class="question-dropdown">
    <div class="q-trigger" onclick="toggleDropdown(this)">
        <div class="q-circle">6</div>
        <div class="q-content">Read the passage given below and answer the questions that follow:</div>
        <div class="marks-wrapper">
            <div class="marks-badge">20 MARKS</div>
            <button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
        </div>
        <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
    </div>
    <div class="answer-panel">
        <div class="answer-content">
            <div class="explanation">
                <strong>PASSAGE:</strong><br>
                Climate change refers to long-term shifts in temperatures and weather patterns. Such shifts can be natural, due to changes in the sun’s activity or large volcanic eruptions. But since the 1800s, human activities have been the main driver of climate change, primarily due to the burning of fossil fuels like coal, oil and gas.<br><br>

                Burning fossil fuels generates greenhouse gas emissions that act like a blanket wrapped around the Earth, trapping the sun’s heat and raising temperatures. The main greenhouse gases that are causing climate change include carbon dioxide and methane. Energy, industry, transport, building, agriculture and land use are among the main sectors causing greenhouse gases.<br><br>

                Climate scientists have shown that humans are responsible for virtually all global heating over the last 200 years. Human activities like the ones mentioned above are causing greenhouse gases that are warming the world faster than at any time in at least the last two thousand years. Many people think climate change mainly means warmer temperatures. But temperature rise is only the beginning of the story. Because the Earth is a system, where everything is connected, changes in one area can influence changes in all others. The consequences of climate change now include, among others, intense droughts, water scarcity, severe fires, rising sea levels, flooding, melting polar ice, catastrophic storms and declining biodiversity.<br><br>

                <strong>(i) (a) What is a ‘Topic Sentence’?</strong><br>
                <strong>ANS:</strong> A topic sentence is the sentence that expresses or identifies the primary idea, central theme or main point of a paragraph. This sentence tells readers what the paragraph's main topic is and how it will be discussed. It's usually supported by sentences that follow.<br><br>

                <strong>(i) (b) In the above passage, which is the topic sentence, in your opinion?</strong><br>
                <strong>ANS:</strong> The subject sentence in the paragraph is:<br>
                “Climate change refers to long-term shifts in temperatures and weather patterns.”<br>
                This paragraph introduces the major idea of the whole passage and establishes its direction.<br><br>

                <strong>(i) (c) Explain why you identify this as the ‘topic sentence’ of the passage.</strong><br>
                <strong>ANS:</strong> This phrase defines climate change. This is the central idea of this passage. The passage's core idea is defined by this sentence. All the other details, such as causes, greenhouse gases, human activities and consequences, are based on it.<br><br>

                <strong>(ii) Give an appropriate title for the passage.</strong><br>
                <strong>ANS:</strong> The title is: <strong>Global Climate Change: Causes & Consequences</strong><br><br>

                <strong>(iii) Write in your own words a summary of this passage.</strong><br>
                <strong>ANS:</strong> Climate Change refers to changes over time in temperatures and weather patterns. Humans have primarily been responsible for climate change since 1800. This is due to burning fossil fuels. Energy, Transport, Agriculture, and Industries emit gases that trap heat from the sun, increasing global temperatures. In response, Earth has faced fires, flooding, sea level rise, melting of ice and storms. This shows how each change impacts the others.
            </div>
        </div>
    </div>
</div>





</div>

<script>
    function toggleDropdown(el) {
        const card = el.closest('.question-dropdown');
        card.classList.toggle('open');
        const span = card.querySelector('.show-answer-btn span');
        const icon = card.querySelector('.show-answer-btn i');
        if (span) span.textContent = card.classList.contains('open') ? 'Hide Answer' : 'Show Answer';
        if (icon) icon.classList.toggle('fa-eye-slash', card.classList.contains('open'));
    }
</script>








@endsection