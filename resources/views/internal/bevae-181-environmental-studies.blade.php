@extends('layouts.user')
@section('page_h1', 'ENVIRONMENTAL STUDIES')
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
        font-size: 1.6rem;
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

    /* === INSTRUCTIONS === */
    .instructions-box {
        background: #E3F0FF;
        border: 1px solid rgba(0, 91, 255, 0.35);
        padding: 18px 22px;
        border-radius: var(--radius-md);
        margin: 32px 0;
        font-size: 1rem;
        line-height: 1.8;
        color: #0f295f;
        font-weight: 600;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.06);
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
        user-select: none;
        position: relative;
        background: linear-gradient(to right, #F7FAFF, #FFFFFF);
        min-height: 80px;
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
        color: #0f172a;
        padding-right: 10px;
    }

    /* === MARKS + SHOW ANSWER (Mobile Fix) === */
    .marks-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
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
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: var(--transition);
        box-shadow: 0 2px 8px rgba(22, 101, 52, 0.25);
    }

    .dropdown-icon {
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
        flex-shrink: 0;
    }

    .question-dropdown.open .dropdown-icon {
        transform: rotate(180deg);
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
        max-height: 4000px;
    }

    .answer-content {
        padding: 28px 32px;
        font-size: 1rem;
        line-height: 1.9;
        color: #374151;
        background: linear-gradient(to bottom, #FFFFFF, #F7FAFF);
    }

    /* Options Styling */
    .options {
        display: grid;
        gap: 14px;
        margin: 20px 0;
    }

    .option {
        padding: 16px 20px;
        background: #FAFBFD;
        border: 2px solid #E5E7EB;
        border-radius: 14px;
        font-size: 1rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .option.correct {
        background: #D1FAE5;
        border-color: #10B981;
        color: #065F46;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
    }

    .explanation {
        background: var(--highlight);
        border-left: 5px solid var(--highlight-border);
        padding: 18px 22px;
        margin: 20px 0;
        border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
        color: #92400e;
        font-size: 1rem;
        line-height: 1.8;
    }

    /* === RESPONSIVE FIXES (Phone Perfect Now) === */
    @media (max-width: 768px) {
        body {
            padding: 12px 0;
        }

        .container {
            padding: 0 12px;
        }

        .q-trigger {
            padding: 16px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .q-circle {
            width: 38px;
            height: 38px;
            font-size: 1.2rem;
        }

        .q-content {
            font-size: 1rem;
            padding-right: 0;
            order: 3;
            width: 100%;
        }

        .marks-wrapper {
            order: 4;
            margin-left: auto;
            gap: 10px;
        }

        .marks-badge,
        .show-answer-btn {
            font-size: 0.85rem;
            padding: 6px 10px;
        }

        .dropdown-icon {
            order: 2;
            margin-left: auto;
        }

        .answer-content {
            padding: 20px 16px;
            font-size: 0.98rem;
        }

        .option {
            padding: 14px 16px;
            font-size: 0.96rem;
        }
    }

    @media (max-width: 480px) {
        .paper-code {
            font-size: 1.4rem;
        }

        .paper-title {
            font-size: 1.6rem;
        }

        .q-content {
            font-size: 0.98rem;
        }

        .marks-badge,
        .show-answer-btn {
            font-size: 0.8rem;
            padding: 5px 9px;
        }
    }
</style>

<div class="container">

    <div class="paper-header mt-5">
        <div><img src="./images/log.jpg" alt="" style="width:150px;"></div>
        <div class="paper-code">BEVAE–181</div>
        <h1 class="paper-title">ENVIRONMENTAL STUDIES</h1>
        <div class="program-name">ABILITY ENHANCEMENT COMPULSORY COURSE (AECC)</div>
    </div>

    <div class="instructions-box">
        <strong>Note:</strong> All 50 questions are compulsory • Each question carries <strong>2 marks</strong> • Choose the correct option
    </div>



    <!-- Baaki 48 questions bhi same format mein — yahan full 50 daal deta hoon (bilkul no compression) -->

    <!-- Question 50 (Last one as example) -->

    <!-- Question 1 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">1</div>
            <div class="q-content">Which one of the following is a human-modified environment?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Cities</div>
                    <div class="option">(2) Industries</div>
                    <div class="option">(3) Plantations</div>
                    <div class="option">(4) Crop fields</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> In the text, human-made (human-modified) environments are described as those created and maintained by people—explicitly including cities, industrial spaces and crop fields. A city is given as the clearest example of a totally human-created environment: water is treated and piped in, wastes are collected and processed elsewhere, and resources like food and energy are continually imported and managed. Hence, “Cities” best represents a human-modified environment in the sense used in the book.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 2 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">2</div>
            <div class="q-content">Which one of the following is not one of the seventeen <br> Sustainable Development Goals (SDGs)?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Good health</div>
                    <div class="option">(2) Zero hunger</div>
                    <div class="option">(3) No poverty</div>
                    <div class="option correct">(4) Social equity and equality</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> “Social equity and equality” is not the formal title of any SDG, even though equity is a cross-cutting value reflected in several goals.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 3 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">3</div>
            <div class="q-content">Which one of the following is not a decomposer?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Earthworm</div>
                    <div class="option">(2) Fungi</div>
                    <div class="option">(3) Vulture</div>
                    <div class="option correct">(4) Hawk</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Ecosystem sections in the text distinguish decomposers (mainly microorganisms like bacteria and fungi, and detritus feeders such as earthworms) that break down dead organic matter and recycle nutrients. Hawk is a carnivorous predator at higher trophic levels, not a decomposer.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 4 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">4</div>
            <div class="q-content">The extent of the biosphere is about:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) 11,000 m below the surface of the earth to 9,000 m above the mean sea level.</div>
                    <div class="option">(2) 9,000 m below the surface of the earth to 9,000 m above the mean sea level.</div>
                    <div class="option">(3) 10,000 m below the surface of the earth to 10,000 m above the mean sea level.</div>
                    <div class="option">(4) 6,000 m below the surface of the earth to 8,000 m above the mean sea level.</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The book states that the biosphere—the thin life-supporting layer around the Earth—extends from the ocean floor about 11,000 metres below the surface up to roughly 9,000 metres above mean sea level (the heights of the highest mountains). It also notes life is most abundant near sea level and significant from ~200 m below the ocean surface up to ~6,000 m above sea level. Hence, option (1) matches the described vertical extent.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 5 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">5</div>
            <div class="q-content">Primary consumers are found at:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Trophic level I</div>
                    <div class="option correct">(2) Trophic level II</div>
                    <div class="option">(3) Trophic level III</div>
                    <div class="option">(4) Trophic level V</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Trophic structure of an ecosystem is divided into various levels. Producers (plants and algae) occupy Trophic Level I, while primary consumers, such as herbivores (e.g., deer, rabbit, cow), feed directly on producers and thus belong to Trophic Level II. Higher levels (III, IV, V) represent secondary, tertiary, and quaternary consumers, respectively.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 6 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">6</div>
            <div class="q-content">What percent of water is present on the earth’s surface <br> in the form of fresh water?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) About 4%</div>
                    <div class="option correct">(2) About 3%</div>
                    <div class="option">(3) About 2%</div>
                    <div class="option">(4) About 1%</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> About 71% of the Earth’s surface is covered with water. Out of this total, around 97% is saltwater found in oceans and seas, while only about 3% is fresh water. Most of this fresh water is locked in glaciers and polar ice caps, with a very small fraction available as groundwater or surface water.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 7 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">7</div>
            <div class="q-content">The detritus food chain begins:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Always in the ocean</div>
                    <div class="option">(2) With a producer</div>
                    <div class="option correct">(3) With decaying organic matter</div>
                    <div class="option">(4) With air pollution</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The detritus food chain (DFC) starts with dead organic matter (detritus) such as fallen leaves, dead plants and animals. This organic matter is broken down by decomposers like bacteria, fungi, and detritivores (earthworms). The book explains that this type of food chain is essential for recycling nutrients back into the ecosystem and is common in forest floors, wetlands, and aquatic sediments.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 8 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">8</div>
            <div class="q-content">Maple, beech and oak are found in:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Temperate deciduous forest</div>
                    <div class="option">(2) Temperate evergreen forest</div>
                    <div class="option">(3) Temperate rain forest</div>
                    <div class="option">(4) Coniferous forest</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Maple, beech, and oak trees are typical species of temperate deciduous forests. These forests are found in regions with moderate temperatures and distinct seasons, including a long growing period and a cold winter during which trees shed their leaves. The periodic leaf fall helps conserve water during the dormant season.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 9 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">9</div>
            <div class="q-content">Unattached organisms that live at the air-water interface are known as:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Plankton</div>
                    <div class="option correct">(2) Neuston</div>
                    <div class="option">(3) Nekton</div>
                    <div class="option">(4) Periphyton</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> In the aquatic ecosystems section, the book defines neuston as organisms that live on or near the surface film of water, at the air–water interface. They are distinct from plankton (which drift in water), nekton (free-swimming organisms), and periphyton (those attached to submerged surfaces). Neuston includes small plants, protozoans, and insects that utilize surface tension for movement or feeding.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 10 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">10</div>
            <div class="q-content">Which one of the following is not a part of lentic ecosystems?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Lakes</div>
                    <div class="option">(2) Impoundments</div>
                    <div class="option">(3) Wetlands</div>
                    <div class="option correct">(4) River</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Lentic ecosystems refer to standing or still-water bodies, where there is little or no flow of water. Examples include lakes, ponds, reservoirs, and wetlands. In contrast, rivers and streams represent lotic ecosystems, characterized by flowing water. Therefore, “River” is not a part of lentic ecosystems as per the classification in the text.
                </div>
            </div>
        </div>
    </div>
    <!-- Question 11 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">11</div>
            <div class="q-content">In which of the following processes does solid water <br> directly change into water vapour?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Evaporation</div>
                    <div class="option">(2) Transpiration</div>
                    <div class="option correct">(3) Sublimation</div>
                    <div class="option">(4) Condensation</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Sublimation is the process by which ice or snow directly changes into water vapour without passing through the liquid phase. It usually occurs under low-pressure and dry conditions, especially in cold regions or high altitudes. Evaporation involves liquid water changing into vapour, but sublimation occurs directly from the solid state.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 12 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">12</div>
            <div class="q-content">Kul is a traditional irrigation practice in the state of:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Himachal Pradesh</div>
                    <div class="option">(2) Rajasthan</div>
                    <div class="option">(3) Uttarakhand</div>
                    <div class="option">(4) Punjab</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Traditional water management systems, Kul is mentioned as a mountainous irrigation channel used in Himachal Pradesh. These small water channels divert water from glaciers and streams to agricultural fields. They are community-managed systems that demonstrate indigenous knowledge and sustainable use of natural resources.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 13 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">13</div>
            <div class="q-content">Which of the following soils supports the cultivation of Rubber?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Black soil</div>
                    <div class="option">(2) Red soil</div>
                    <div class="option correct">(3) Laterite soil</div>
                    <div class="option">(4) Alluvial soil</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Laterite soil is rich in iron and aluminium and forms in tropical regions with heavy rainfall. It is found in states like Kerala, Karnataka, and Tamil Nadu, where conditions of high temperature and humidity favour rubber cultivation. Hence, Laterite soil is best suited for rubber plantations.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 14 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">14</div>
            <div class="q-content">Which one of the following is not one of the consequences <br> of excessive irrigation?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Waterlogging in the soil</div>
                    <div class="option">(2) Loss of productivity partially or completely</div>
                    <div class="option">(3) Increase in salinity or alkalinity</div>
                    <div class="option correct">(4) Increase in productivity substantially</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Excessive irrigation can lead to adverse effects such as waterlogging, salinity, and alkalinity in soil, which in turn reduce soil fertility and crop productivity. Continuous over-irrigation raises the groundwater table and deposits salts on the soil surface.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 15 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">15</div>
            <div class="q-content">Which one of the following is an economic significance of forests?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Protection of biodiversity</div>
                    <div class="option correct">(2) Forest products used for pharmaceuticals</div>
                    <div class="option">(3) Aesthetic and Spiritual purpose</div>
                    <div class="option">(4) Recreational purposes</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Forests provide both ecological and economic benefits. Economically, forests are a major source of timber, fuelwood, gums, resins, medicinal plants, and raw materials for industries such as paper, furniture, and pharmaceuticals. Many plants growing in forests contain medicinal properties and are used in the preparation of drugs and herbal medicines.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 16 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">16</div>
            <div class="q-content">Which one of the following is not a cause of deforestation?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Forest fires</div>
                    <div class="option">(2) Grazing of animals</div>
                    <div class="option correct">(3) Selective cutting of the trees</div>
                    <div class="option">(4) Pest attack</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Causes of deforestation include "forest fires," "over-grazing by animals," and "pest attack." However, it describes "scientific and selective cutting of the trees" as a method of forest conservation, not as a cause of deforestation. Therefore, selective cutting is not a cause of deforestation.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 17 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">17</div>
            <div class="q-content">In which of the following states was Joint Forest <br> Management (JFM) first successfully implemented?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) West Bengal</div>
                    <div class="option">(2) Uttarakhand</div>
                    <div class="option">(3) Odisha</div>
                    <div class="option">(4) Himachal Pradesh</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Joint Forest Management (JFM) was first successfully implemented in West Bengal. The Arabari model in the Midnapore district became the pioneer example where local communities, in collaboration with the Forest Department, protected degraded forests in exchange for a share of forest produce. The success of this model led to the national adoption of the JFM programme in the early 1990s, involving community participation in forest conservation and management.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 18 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">18</div>
            <div class="q-content">Which one of the following is the most abundant life <br> form on the Earth in terms of number?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Plants</div>
                    <div class="option">(2) Birds</div>
                    <div class="option">(3) Amphibians and Reptiles</div>
                    <div class="option correct">(4) Insects and Microorganisms</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Biodiversity and its Conservation unit, insects and microorganisms, make up the largest proportion of living organisms on Earth. Insects alone account for over half of all known species, while microorganisms such as bacteria, fungi, and protozoa exist in astronomically large numbers across every habitat. They play essential roles in decomposition, nutrient cycling, and maintaining ecological balance.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 19 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">19</div>
            <div class="q-content">The Trans-Himalaya biogeographic region is found in:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Sikkim</div>
                    <div class="option">(2) Uttarakhand</div>
                    <div class="option correct">(3) Ladakh</div>
                    <div class="option">(4) Arunachal Pradesh</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Trans-Himalayan region lies to the north of the Great Himalayan range, covering areas such as Ladakh, Lahaul-Spiti, and parts of northern Kashmir. This region is characterized by cold deserts, sparse vegetation, and unique wildlife such as the snow leopard, Tibetan wild ass, and yak. Thus, Ladakh represents the main part of the Trans-Himalaya biogeographic region.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 20 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">20</div>
            <div class="q-content">Which one of the following biogeographic regions covers <br> the largest area in India?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) The Western Ghats</div>
                    <div class="option correct">(2) The Deccan Peninsula</div>
                    <div class="option">(3) The Indian Desert</div>
                    <div class="option">(4) The Gangetic Plain</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Deccan Peninsula is the largest, covering about 42% of the total land area. It extends across major portions of Madhya Pradesh, Maharashtra, Chhattisgarh, and parts of Andhra Pradesh, Karnataka, and Tamil Nadu. The region includes tropical dry and moist deciduous forests and harbours a rich diversity of flora and fauna. Hence, the Deccan Peninsula is the largest biogeographic region in India.
                </div>
            </div>
        </div>
    </div>




    <!-- Question 21 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">21</div>
            <div class="q-content">Which one of the following is an indirect use value of biodiversity?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Aesthetic value</div>
                    <div class="option">(2) Existence value</div>
                    <div class="option">(3) Bequest value</div>
                    <div class="option">(4) Optional value</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Indirect use values are the non-consumptive benefits obtained from biodiversity. These include ecosystem services such as pollination, soil formation, climate regulation, and cultural or aesthetic enjoyment derived from natural beauty and wildlife observation. Aesthetic value refers to the pleasure people derive from the beauty of nature, landscapes, and living organisms, making it an indirect use value of biodiversity.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 22 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">22</div>
            <div class="q-content">Which one of the following is a conventional source of energy?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Solar energy</div>
                    <div class="option">(2) Atomic energy</div>
                    <div class="option">(3) Wind energy</div>
                    <div class="option correct">(4) Biomass energy</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Conventional sources are those traditionally used for a long time, such as coal, petroleum, natural gas, hydro power, and biomass. Biomass energy, derived from firewood, agricultural residues, and animal dung, has been used for centuries for cooking and heating, making it a conventional source of energy.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 23 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">23</div>
            <div class="q-content">The first wave energy project in India was set up at:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Gulf of Mannar</div>
                    <div class="option">(2) Gulf of Khambhat</div>
                    <div class="option correct">(3) Vizhinjam</div>
                    <div class="option">(4) Hanthal</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Renewable Energy Resources section, India’s first wave energy project was established at Vizhinjam near Thiruvananthapuram (Kerala). The site was chosen due to its strong and consistent wave action. The project aimed to explore the potential of wave power as an alternative renewable energy source along India’s coastline. Hence, Vizhinjam marks the beginning of India’s wave energy development initiatives.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 24 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">24</div>
            <div class="q-content">India’s maximum commercial energy comes from:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Fossil fuel</div>
                    <div class="option">(2) Hydropower</div>
                    <div class="option">(3) Atomic energy</div>
                    <div class="option correct">(4) Coal</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Coal remains the primary source of commercial energy in India. It is the main fuel for thermal power plants, which produce the majority of the country’s electricity. Although renewable and alternative sources like hydropower and atomic energy are growing, coal continues to contribute more than half of India’s total energy consumption due to its abundance and reliability as an energy resource.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 25 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">25</div>
            <div class="q-content">Which one of the following is not a factor for the sustainable <br> carrying capacity of the human species?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Knowledge system</div>
                    <div class="option">(2) Resource availability</div>
                    <div class="option">(3) Level of economic development</div>
                    <div class="option correct">(4) Standards of living</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Factors influencing sustainable carrying capacity include resource availability, knowledge and technology, and economic development that improves resource use efficiency. However, standards of living relate to consumption patterns and comfort levels, not the ecological capacity itself. Hence, it is not a determining factor for sustainable carrying capacity.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 26 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">26</div>
            <div class="q-content">Insecticides, particularly chlorinated hydrocarbons,<br> reduced the population level of:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Passenger pigeon</div>
                    <div class="option correct">(2) Bald Eagle</div>
                    <div class="option">(3) Corn</div>
                    <div class="option">(4) Indian Rhino</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Chlorinated hydrocarbon insecticides, such as DDT, caused a drastic decline in populations of birds of prey, including the Bald Eagle, during the mid-20th century. These chemicals accumulated in food chains, leading to thinning of eggshells, reduced hatching success, and population collapse. This case became a major environmental issue, highlighting the dangers of bioaccumulation and biomagnification in ecosystems.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 27 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">27</div>
            <div class="q-content">Invasive species that causes skin allergies is:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Water hyacinth</div>
                    <div class="option">(2) Mesquite</div>
                    <div class="option correct">(3) Congress weed</div>
                    <div class="option">(4) Sweet pea</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Congress weed (Parthenium hysterophorus) is an invasive alien species that spreads rapidly in disturbed soils and along roadsides. It is notorious for causing skin allergies, respiratory problems, and dermatitis in humans. The plant competes with native species and reduces biodiversity. Due to its health and ecological impacts, it is identified as one of India’s most dangerous invasive weeds.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 28 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">28</div>
            <div class="q-content">Which one of the following is an in-situ conservation programme?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Zoological parks</div>
                    <div class="option">(2) Artificial insemination</div>
                    <div class="option">(3) Fostering</div>
                    <div class="option correct">(4) National parks</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> In-situ conservation refers to the protection of species within their natural habitats, allowing them to continue their evolutionary processes. Examples include biosphere reserves, national parks, and wildlife sanctuaries. In contrast, ex-situ conservation involves protecting species outside their natural habitats, such as in zoos, botanical gardens, and gene banks. Hence, national parks are a form of in-situ conservation.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 29 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">29</div>
            <div class="q-content">Which one of the following wetlands is located in Odisha?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Sukhna</div>
                    <div class="option">(2) Renuka</div>
                    <div class="option correct">(3) Chilika</div>
                    <div class="option">(4) Loktak</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Chilika Lake is a brackish water lagoon located in the state of Odisha. It is the largest coastal lagoon in India and one of the largest in the world. It supports a rich diversity of migratory birds and aquatic life and has been recognized as a Ramsar Site for its international ecological importance. The other wetlands—Sukhna (Chandigarh), Renuka (Himachal Pradesh), Loktak (Manipur).
                </div>
            </div>
        </div>
    </div>

    <!-- Question 30 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">30</div>
            <div class="q-content">Which one of the following is a non-point source pollution?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Discharge of pollution through chimneys</div>
                    <div class="option correct">(2) Run-offs from agricultural fields</div>
                    <div class="option">(3) Discharge channels in municipal areas</div>
                    <div class="option">(4) Discharge through pipes in industries</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Environmental Pollution distinguishes between point source and non-point source pollution. Point sources are identifiable locations such as pipes, drains, or chimneys that release pollutants directly. Non-point sources, on the other hand, are diffuse and scattered, making them harder to trace. Agricultural run-offs carrying fertilizers, pesticides, and sediments are classic examples of non-point source pollution, as they come from wide areas of land and enter water bodies indirectly.
                </div>
            </div>
        </div>
    </div>
    <!-- Question 31 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">31</div>
            <div class="q-content">Which one of the following is a major source of ozone as a pollutant?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Photochemical reaction</div>
                    <div class="option">(2) Coal and oil combustion</div>
                    <div class="option">(3) Automobiles</div>
                    <div class="option">(4) Petrochemical solvents</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Ozone at ground level is not emitted directly but formed by photochemical reactions involving sunlight, nitrogen oxides (NOₓ), and volatile organic compounds (VOCs). This process occurs mainly in urban areas with heavy traffic and industrial activities, producing photochemical smog that contains ozone as a secondary pollutant. Hence, the photochemical reaction is the major source of ozone pollution near the Earth’s surface.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 32 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">32</div>
            <div class="q-content">Which one of the following is a secondary air pollutant?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Sulphur trioxide</div>
                    <div class="option">(2) Sulphur dioxide</div>
                    <div class="option">(3) Carbon monoxide</div>
                    <div class="option">(4) Carbon dioxide</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> In the section on Air Pollution, the textbook differentiates between primary and secondary pollutants. Primary pollutants are emitted directly (e.g., SO₂, CO, CO₂). Secondary pollutants are formed in the atmosphere through chemical reactions between primary pollutants. Sulphur trioxide (SO₃) is formed when SO₂ reacts with oxygen → hence secondary pollutant.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 33 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">33</div>
            <div class="q-content">Which one of the following is a physical agent of water pollution?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Radioactive substances</div>
                    <div class="option">(2) Bacteria</div>
                    <div class="option">(3) Particulates</div>
                    <div class="option">(4) Pesticides</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Pollutants are classified as physical, chemical, or biological agents. Physical pollutants alter the physical properties of water, such as temperature, colour, and radioactivity. Radioactive substances, released from nuclear plants or mining activities, are considered physical agents of water pollution because they change the water’s physical and radiological characteristics.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 34 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">34</div>
            <div class="q-content">Which one of the following is not a symptom of toxicity?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Poisoning</div>
                    <div class="option">(2) Metabolic disorder</div>
                    <div class="option">(3) Malformations</div>
                    <div class="option correct">(4) Releases ionising radiations</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Toxicity refers to the harmful effects of pollutants or chemicals on living organisms. Symptoms of toxicity include poisoning, metabolic disorders, and malformations (birth defects) caused by prolonged exposure to toxic substances. However, the release of ionising radiations is not a symptom but rather a cause or source of toxicity.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 35 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">35</div>
            <div class="q-content">Which one of the following is not a biological treatment of waste?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Conditioning</div>
                    <div class="option">(2) Lagooning</div>
                    <div class="option">(3) Digestion</div>
                    <div class="option">(4) Composting</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Biological treatment methods, such as digestion, composting, and lagooning, involve microorganisms decomposing organic matter in waste. Conditioning, on the other hand, is a mechanical or chemical process used to improve the physical properties of waste before disposal (e.g., drying, neutralizing, or compacting). It does not involve biological activity, and hence it is not a biological method of waste treatment.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 36 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">36</div>
            <div class="q-content">Which of the following is not a part of organic waste?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></ option correct></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Kitchen waste</div>
                    <div class="option">(2) Waste vegetables</div>
                    <div class="option correct">(3) Plastics</div>
                    <div class="option">(4) Fruit waste</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Organic waste is a material derived from plant or animal sources that can be biodegraded by microorganisms. This includes kitchen scraps, vegetable peels, fruit residues, and garden waste. Plastics, however, are synthetic polymers made from petrochemicals and are non-biodegradable, thus falling under inorganic or non-organic waste. They persist in the environment for hundreds of years and are a major cause of pollution.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 37 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">37</div>
            <div class="q-content">Which one of the following is not a benefit of recycling waste?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) It conserves resources.</div>
                    <div class="option">(2) It prevents the emission of greenhouse gases.</div>
                    <div class="option">(3) It supplies valuable raw materials to industry.</div>
                    <div class="option correct">(4) It does not pollute the environment.</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Recycling offers several advantages—it helps conserve natural resources, reduces greenhouse gas emissions, and provides raw materials for industries. However, recycling processes such as sorting, melting, and reprocessing can still generate some pollution, including fumes, residues, and energy consumption. Therefore, the claim that recycling “does not pollute the environment” is incorrect, as no industrial process is completely pollution-free.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 38 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">38</div>
            <div class="q-content">The Inter-governmental Panel on Climate Change <br> (IPCC) was established in the year:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) 1985</div>
                    <div class="option">(2) 1986</div>
                    <div class="option">(3) 1987</div>
                    <div class="option correct">(4) 1988</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Global Environmental Issues unit states that the Intergovernmental Panel on Climate Change (IPCC) was established in 1988 jointly by the World Meteorological Organization (WMO) and the United Nations Environment Programme (UNEP). Its purpose is to assess scientific information related to climate change, its impacts, and adaptation and mitigation strategies.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 39 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">39</div>
            <div class="q-content">Ozone is found in:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Troposphere</div>
                    <div class="option correct">(2) Stratosphere</div>
                    <div class="option">(3) Mesosphere</div>
                    <div class="option">(4) Ionosphere</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Ozone layer is concentrated in the stratosphere, between 10 and 50 kilometres above the Earth’s surface. This layer absorbs the majority of the Sun’s harmful ultraviolet (UV) radiation, thereby protecting living organisms.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 40 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">40</div>
            <div class="q-content">pH of unpolluted rainwater is:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) 5.7</div>
                    <div class="option">(2) 6.7</div>
                    <div class="option">(3) 7.0</div>
                    <div class="option">(4) 7.7</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> As stated in the Air Pollution and Acid Rain section, pure rainwater is slightly acidic, not neutral, because it naturally contains dissolved carbon dioxide (CO₂) from the atmosphere. This CO₂ forms carbonic acid (H₂CO₃), which lowers the pH to around 5.6 or 5.7. When pollutants like sulfur dioxide (SO₂) and nitrogen oxides (NOₓ) are added, the acidity increases further, producing acid rain with a pH often below 5. Hence, 5.7 is the typical pH of unpolluted rainwater.
                </div>
            </div>
        </div>
    </div>
    <!-- Question 41 -->
    <!-- Question 41 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">41</div>
            <div class="q-content">Which of the following amendments made the protection <br> and improvement of the natural br environment a Fundamental Duty?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Forty-first Amendment Act</div>
                    <div class="option correct">(2) Forty-second Amendment Act</div>
                    <div class="option">(3) Forty-third Amendment Act</div>
                    <div class="option">(4) Forty-fourth Amendment Act</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Environmental Legislation and Policies unit clearly mentions that the Forty-second Amendment Act of 1976 added Article 48A and Article 51A(g) to the Indian Constitution. Article 48A (Directive Principles): Directs the State to protect and improve the environment. Article 51A(g) (Fundamental Duty): Makes it the duty of every citizen to protect and improve the natural environment, including forests, lakes, rivers, and wildlife.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 42 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">42</div>
            <div class="q-content">The Convention on the Control of Transboundary Movement of <br> Hazardous Wastes and Their Disposal is known as:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) The Stockholm Convention</div>
                    <div class="option">(2) The Rotterdam Convention</div>
                    <div class="option correct">(3) The Basel Convention</div>
                    <div class="option">(4) The Vienna Convention</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Basel Convention (adopted in 1989) regulates the transboundary movement and disposal of hazardous wastes. Its main objective is to reduce hazardous waste generation, promote environmentally sound management, and prevent illegal international dumping of such waste, especially from developed to developing nations. It is one of the key international environmental treaties.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 43 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">43</div>
            <div class="q-content">In Delhi, new vehicles should have a pollution <br> prevention mechanism comparable to:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) BS III</div>
                    <div class="option">(2) BS IV</div>
                    <div class="option">(3) BS V</div>
                    <div class="option correct">(4) BS VI</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Environmental Protection Measures section highlights <br>that India adopted Bharat Stage (BS) emission standards, similar to the Euro norms, to regulate vehicular pollution. As per the latest environmental regulations, from April 2020, all new vehicles sold in India must comply with BS VI standards.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 44 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">44</div>
            <div class="q-content">At the dawn of agriculture (about 8000 B.C.), the world <br> population was somewhere around:</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) 1 million</div>
                    <div class="option">(2) 2 million</div>
                    <div class="option correct">(3) 5 million</div>
                    <div class="option">(4) 10 million</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The human population during the beginning of agriculture, around 8000 B.C., was estimated to be approximately 5 million. This period marked the transition from hunting-gathering to settled agriculture, leading to a stable food supply and gradual population growth.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 45 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">45</div>
            <div class="q-content">Which one of the following terms is not a part <br> of the WHO definition of health?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Physical</div>
                    <div class="option">(2) Mental</div>
                    <div class="option">(3) Social</div>
                    <div class="option correct">(4) Psychological</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Human Health and Environment section refers to the World Health Organization (WHO) definition of health as “a state of complete physical, mental, and social well-being and not merely the absence of disease or infirmity.” The term psychological is closely related to mental health, but is not explicitly mentioned in the official WHO definition.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 46 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">46</div>
            <div class="q-content">Which one of the following is not a geological hazard?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Glacier advances</div>
                    <div class="option">(2) Avalanches</div>
                    <div class="option">(3) Landslides</div>
                    <div class="option">(4) Earthquakes</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Geological hazards are natural processes arising from movements or changes in the Earth’s crust, including earthquakes, landslides, volcanic eruptions, and related events. While glacier advances are natural climatic or glacial phenomena linked to temperature and precipitation changes, they are not classified as geological hazards.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 47 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">47</div>
            <div class="q-content">In which year did the Indian coastline experience the most <br> devastating Tsunami in recorded history?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) 1999</div>
                    <div class="option">(2) 2000</div>
                    <div class="option correct">(3) 2004</div>
                    <div class="option">(4) 2005</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Indian Ocean Tsunami of December 26, 2004, was the most devastating tsunami in India’s recorded history. Triggered by a 9.0 magnitude undersea earthquake near Sumatra (Indonesia), the tsunami struck the Andaman and Nicobar Islands, Tamil Nadu, Andhra Pradesh, and Kerala.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 48 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">48</div>
            <div class="q-content">Which one of the following is not one of the three major views on nature?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) The Western</div>
                    <div class="option">(2) The Eastern</div>
                    <div class="option correct">(3) The Sinocentric</div>
                    <div class="option">(4) The Indian</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Environmental Ethics and Human–Nature Relationship has three major worldviews on nature: 1. The Western view – focuses on human dominance and exploitation of nature. 2. The Eastern view – emphasizes balance, harmony, and spiritual interconnection. 3. The Indian view – sees nature as sacred, divine, and inseparable from human life. The term “Sinocentric” (China-centered) is not used among the major views discussed.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 49 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">49</div>
            <div class="q-content">Which one of the following is not a category of environmental equity?</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option">(1) Procedural</div>
                    <div class="option">(2) Geographical</div>
                    <div class="option">(3) Social</div>
                    <div class="option correct">(4) Psychological</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> Environmental equity refers to fairness in the distribution of environmental benefits and burdens among different sections of society. The main categories include: Procedural equity, Geographical equity, and Social equity. Psychological is not a recognized category.
                </div>
            </div>
        </div>
    </div>

    <!-- Question 50 -->
    <div class="question-dropdown">
        <div class="q-trigger" onclick="toggleDropdown(this)">
            <div class="q-circle">50</div>
            <div class="q-content">ENVIS Centre at TERI works in the area of ............</div>
            <div class="marks-wrapper">
                <div class="marks-badge">2 MARKS</div><button type="button" class="show-answer-btn" onclick="event.stopPropagation(); toggleDropdown(this)"><i class="fas fa-eye"></i><span>Show Answer</span></button>
            </div>
            <div class="dropdown-icon"><i class="fas fa-chevron-down"></i></div>
        </div>
        <div class="answer-panel">
            <div class="answer-content">
                <div class="options">
                    <div class="option correct">(1) Renewable energy and environment</div>
                    <div class="option">(2) Toxic chemicals</div>
                    <div class="option">(3) Pollution control</div>
                    <div class="option">(4) Occupational health</div>
                </div>
                <div class="explanation">
                    <strong>Explanation:</strong> The Environmental Information System (ENVIS) section in the Policies and Practices for Environmental Protection unit explains that ENVIS was established by the Ministry of Environment, Forest and Climate Change (MoEFCC) to collect, store, and disseminate environmental information through a network of specialized centres. The centre at TERI focuses on Renewable Energy and Environment.
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
            if (icon) {
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    };
</script>



@endsection