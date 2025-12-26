import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaEconomicsAdmission2025() {
    const infoTiles = useMemo(
        () => [
            {
                label: "University",
                value: "IGNOU",
                icon: <UniversityIcon className="h-5 w-5" />,
            },
            {
                label: "Programme",
                value: "BA Economics (Hons)",
                icon: <BookIcon className="h-5 w-5" />,
            },
            {
                label: "Programme Code",
                value: "BAFEC",
                icon: <PenIcon className="h-5 w-5" />,
            },
            {
                label: "Admission Cycle",
                value: "July 2026",
                icon: <CalendarIcon className="h-5 w-5" />,
            },
            {
                label: "Last Date",
                value: "31 Aug 2026",
                icon: <DeadlineIcon className="h-5 w-5" />,
            },
            {
                label: "Duration",
                value: "3–6 Years",
                icon: <ClockIcon className="h-5 w-5" />,
            },
            {
                label: "Medium",
                value: "Hindi & English",
                icon: <LanguageIcon className="h-5 w-5" />,
            },
            {
                label: "Structure",
                value: "UGC Approved • CBCS",
                icon: <BadgeIcon className="h-5 w-5" />,
            },
        ],
        []
    );

    useEffect(() => {
        if (!document.getElementById("bafhi-layout-v2")) {
            const s = document.createElement("style");
            s.id = "bafhi-layout-v2";
            s.innerHTML = `
        @keyframes enter {
          from { opacity:0; transform: translateY(18px) scale(.985);}
          to { opacity:1; transform: translateY(0) scale(1);}
        }
        .reveal { opacity: 0; transform: translateY(18px) scale(.985); }
        .reveal.is-in { animation: enter .75s cubic-bezier(.2,.8,.2,1) both; }
      `;
            document.head.appendChild(s);
        }
    }, []);

    return (
        <UserLayout>
            <Seo
                title="BA in Economics Admission | BAFEC Guide – Unnati"
                description="We explain IGNOU BA in Economics Admission for BAFEC with clear rules, dates, and eligibility. We guide students from form filling to exams with simple."
                keywords="BA in Economics Admission, BAFEC, IGNOU BA Economics, IGNOU Economics Admission 2026, Unnati Education"
            />

            <main className="relative bg-[#f7f9fc] text-slate-900 dark:bg-[#070A12] dark:text-slate-50">
                {/* BACKGROUND */}
                <div className="pointer-events-none absolute inset-0 overflow-hidden">
                    <div className="absolute -top-40 left-1/2 h-[520px] w-[1000px] -translate-x-1/2 rounded-full bg-blue-500/15 blur-3xl dark:bg-blue-500/10" />
                    <div className="absolute top-52 left-1/2 h-[520px] w-[900px] -translate-x-1/2 rounded-full bg-indigo-500/10 blur-3xl" />
                    <div className="absolute -bottom-56 left-1/2 h-[640px] w-[1100px] -translate-x-1/2 rounded-full bg-sky-500/10 blur-3xl" />
                    <NoiseOverlay />
                </div>

                <div className="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-12">
                    {/* HERO */}
                    <Hero />

                    {/* OVERVIEW */}
                    <Section>
                        <div id="overview" />
                        <SectionHeader
                            eyebrow="Overview"
                            title="Overview and Highlights"
                            subtitle="Programme snapshot + what you get with Unnati’s admission-to-exam support."
                        />

                        <RevealGrid cols="lg:grid-cols-4">
                            {infoTiles.map((t) => (
                                <InfoTile key={t.label} {...t} />
                            ))}
                        </RevealGrid>

                        <div className="mt-6" />

                        <Reveal>
                            <Card>
                                <div className="overflow-x-auto">
                                    <table className="w-full text-left text-sm">
                                        <thead>
                                            <tr className="border-b border-slate-200/80 dark:border-white/10">
                                                <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                                    Feature
                                                </th>
                                                <th className="py-3 font-black text-slate-700 dark:text-slate-200">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                                            <Row k="Programme Code" v="BAFEC" />
                                            <Row
                                                k="Programme Name"
                                                v="Bachelor of Arts , Economics"
                                            />
                                            <Row
                                                k="Programme Type"
                                                v="Honors Degree"
                                            />
                                            <Row
                                                k="Mode"
                                                v="Open and Distance Learning (ODL)"
                                            />
                                            <Row
                                                k="The School"
                                                v="School of Social Sciences"
                                            />
                                            <Row
                                                k="Duration"
                                                v="Minimum 3 Years – Maximum 6 Years"
                                            />
                                            <Row
                                                k="Medium of Instruction"
                                                v="English & Hindi"
                                            />
                                            <Row k="Specialization" v="—" />
                                            <Row
                                                k="Eligibility"
                                                v="10+2 (or equivalent)"
                                            />
                                            <Row
                                                k="Support Partner"
                                                v="Unnati Education – Complete Admission-to-Exam Guidance"
                                            />
                                        </tbody>
                                    </table>
                                </div>

                                <p className="mt-4 text-slate-600 dark:text-slate-300">
                                    This program suits learners who are looking for flexibility without sacrificing quality. IGNOU’s BA Economics is perfect for students who want to learn at their own pace.

                                </p>
                                <p className="mt-3 text-slate-600 dark:text-slate-300">
                                    Unnati Education helps you to avoid confusion and delays. We help you at every stage, from eligibility confirmation to assignment completion, exam preparation to exam prep.

                                </p>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* HIGHLIGHTS */}
                    <Section alt>
                        <div id="highlights" />
                        <SectionHeader
                            eyebrow="Highlights"
                            title="Why IGNOU BA Economics (BAFEC)?"
                            subtitle="IGNOU BA Economics is a flexible course that offers structured discipline. The IGNOU BA Economics degree is for students who want autonomy and accountability. What makes it special?"
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <ContentCard
                                    title="What makes this program special?"
                                    paragraphs={[
                                        "IGNOU BA Economics is flexible, but still structured — ideal for students who want autonomy with a clear academic roadmap.",
                                    ]}
                                    bullets={[
                                        {
                                            b: "Recognized, respected, and treated with respect:",
                                            t: "The University Grants Commission recognizes the degree as a valid qualification for employment in the government, private sector, and internationally. Graduates of this program are eligible to pursue postgraduate education, civil-service exams, or research programs throughout India.",
                                        },
                                        {
                                            b: "Flexibility that fits you:",
                                            t: "You can finish the program in just three years or as long as six. The ODL model allows you to learn from anywhere, through print materials, online resources, or interactive sessions. Attendance or relocation is not a requirement.",
                                        },
                                        {
                                            b: "Affordable and accessible:",
                                            t: "IGNOU offers a cost structure that is among the lowest in India while providing a level of quality comparable with top national universities. Students from all backgrounds - including rural or working-class learners - can access world-class Economics education.",
                                        },
                                        {
                                            b: "4. Curriculum Aligned to NEP 2026:",
                                            t: "MThe New Education Policy emphasizes flexibility, multidisciplinary learning, and skills development. IGNOU's BAFEC program is updated to incorporate these principles. It prepares you both for academic growth and job relevance.",
                                        },
                                        {
                                            b: "Unnati Education provides comprehensive support for Unnati Education:",
                                            t: "Many students are not struggling because they lack guidance, but because they do not have the right information. Unnati Education can bridge that gap. We provide you with assistance at every step -- from selecting subjects to preparing for exams, completing assignments, or re-registering. No need to struggle with the digital process on your own. We will handle all the logistics. You can concentrate on learning and growing.",
                                        },
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <Card>
                                    <h3 className="font-black text-slate-900 dark:text-white">
                                        IGNOU Bachelor of Economics Admissions 2026 (tentative date)
                                    </h3>
                                    {/* <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                                        The IGNOU BA Economics 2026 Admission session is <b>expected to open in July 2026</b>, with <b>the tentative closing date of 30th September 2026.</b> Missing the deadline can delay your academic progress by up to 6 months.
                                    </p> */}
                                    <ul className="mt-4 space-y-3">
                                        <CheckItem text="The IGNOU BA Economics 2026 Admission session is expected to open in July 2026, with the tentative closing date of 30th September 2026. Missing the deadline can delay your academic progress by up to 6 months." />
                                        <CheckItem text="Openness is a great way to allow students who cannot attend a traditional university due to personal, geographical, or financial barriers to earn prestigious degrees." />
                                    </ul>
                                    <p className="mt-4 text-slate-600 dark:text-slate-300">
                                        Unnati Education is committed to ensuring that each student's eligibility, documents, and enrollment are smooth without technical difficulties.
                                    </p>
                                </Card>
                            </Reveal>
                        </div>

                        <div className="mt-6 grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <ContentCard
                                    title="Criteria for Eligibility"
                                    paragraphs={[
                                        "The admission criteria are inclusive and simple:",
                                    ]}
                                    bullets={[
                                        {
                                            t: "The candidate should have passed 10+2 from an accredited board or equivalent.",
                                        },
                                        {
                                            t: "No stream restrictions apply to this program, so it is open to all students, regardless of their background.",
                                        },
                                        {
                                            t: "IGNOU has a flexible schedule that allows for both working professionals and students to pursue other courses.",
                                        },
                                    ]}
                                    footer="Openness is a great way to allow students who cannot attend a traditional university due to personal, geographical, or financial barriers to earn prestigious degrees.
                                            Unnati Education is committed to ensuring that each student's eligibility, documents, and enrollment are smooth without technical difficulties."
                                />
                            </Reveal>

                            <Reveal>
                                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                                    <h3 className="font-black text-slate-900 dark:text-white">
                                        Quick next steps
                                    </h3>
                                    <p className="mt-1 text-slate-600 dark:text-slate-300">
                                        If you’re serious, don’t “save it for
                                        later”. Most mistakes happen in form
                                        filling + subject choice.
                                    </p>

                                    <div className="mt-4 grid gap-4">
                                        <StepMini
                                            n="01"
                                            title="Confirm eligibility + documents"
                                            desc="10+2 proof, ID, photo/signature, etc."
                                        />
                                        <StepMini
                                            n="02"
                                            title="Choose programme + centre"
                                            desc="Pick correctly so you don’t regret it later."
                                        />
                                        <StepMini
                                            n="03"
                                            title="Plan assignments + exams"
                                            desc="Don’t wait for deadlines to become chaos."
                                        />
                                    </div>

                                    <div className="mt-5 flex flex-wrap gap-3">
                                        <CTA
                                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Economics"
                                            tone="primary"
                                        >
                                            <WhatsAppIcon className="h-5 w-5" />
                                            WhatsApp Guidance
                                        </CTA>
                                        <CTA
                                            href="tel:+919355198199"
                                            tone="ghost"
                                        >
                                            <PhoneIcon className="h-5 w-5" />
                                            Call Now
                                        </CTA>
                                    </div>
                                </div>
                            </Reveal>
                        </div>
                    </Section>

                    {/* SYLLABUS */}
                    <Section>
                        <div id="syllabus" />
                        <SectionHeader
                            eyebrow="Syllabus"
                            title="IGNOU BA Economics Syllabus"
                            subtitle="Semester-wise structure (CC/AECC/GE/SEC/DSE)."
                            rightCTA={
                                <CTA
                                    href="https://wa.me/919355198199"
                                    tone="primary"
                                >
                                    <WhatsAppIcon className="h-5 w-5" /> Ask for
                                    Full Details
                                </CTA>
                            }
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <SyllabusTable
                                    title="Semester 1"
                                    rows={[
                                        [
                                            "CC",
                                            "Introductory Microeconomics",
                                            "BECC-101",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Mathematical Methods for Economics I",
                                            "BECC-102",
                                            "6",
                                        ],
                                        [
                                            "AECC",
                                            "Environmental Studies",
                                            "BEVAE-181",
                                            "4",
                                        ],
                                        [
                                            "GE",
                                            "(Any 1) Indian Society: Images and Realities / General Psychology / Media and Communication Skills / Disaster Management / Applied Ethics / Understanding Ambedkar / भारतीय सौंदर्यम शास्त्र / National Cadet Corps",
                                            "BSOG-171 / BPCG-171 / BEGG-171 / BPAG-171 / BPYG-171 / BABG-171 / BSKG-171 / ONR-003",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <SyllabusTable
                                    title="Semester 2"
                                    rows={[
                                        [
                                            "CC",
                                            "Introductory Macroeconomics",
                                            "BECC-103",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Mathematical Methods for Economics II",
                                            "BECC-104",
                                            "6",
                                        ],
                                        [
                                            "AECC",
                                            "(Any 1) English Communication Skills / हिंदी भाषा और संप्रेषण",
                                            "BEGAE-182 / BHDAE-182",
                                            "4",
                                        ],
                                        [
                                            "GE",
                                            "(Any 1) भारतीय दर्शन के मूल सिद्धांत / Governance: Issues and Challenges / Psychology & Media / Language & Linguistics / Gender Sensitization: Society and Culture / Philosophy of Religion",
                                            "BSKG-172 / BPAG-172 / BPCG-172 / BEGG-172 / BGDG-172 / BPYG-172",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <SyllabusTable
                                    title="Semester 3"
                                    rows={[
                                        [
                                            "CC",
                                            "Intermediate Microeconomics I",
                                            "BECC-105",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Intermediate Macroeconomics I",
                                            "BECC-106",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Statistical Methods for Economics",
                                            "BECC-107",
                                            "6",
                                        ],
                                        [
                                            "SEC",
                                            "(Any 1) Tourism Anthropology / Emotional Intelligence / Developing Emotional Competence / समाचार लेखन / Writing & Study Skills / English Language Teaching / Managing HR / Life Skills / Computer Application in Business",
                                            "BANS-183 / BPCS-183 / BPCS-185 / BHDS-183 / BEGS-183 / BEGS-185 / BPCS-187 / BSSS-183 / BCOS-183",
                                            "4",
                                        ],
                                        [
                                            "GE",
                                            "(Any 1) E-Governance / Psychology for Health and Well-being / Rethinking Development / Hindi Patrakarita / Academic Writing & Composition / आधार संस्कृत",
                                            "BPAG-173 / BPCG-173 / BSOG-173 / BHDG-173 / BEGG-173 / BSKG-173",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <SyllabusTable
                                    title="Semester 4"
                                    rows={[
                                        [
                                            "CC",
                                            "Intermediate Microeconomics II",
                                            "BECC-108",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Intermediate Macroeconomics II",
                                            "BECC-109",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Introductory Econometrics",
                                            "BECC-110",
                                            "6",
                                        ],
                                        [
                                            "SEC",
                                            "(Any 1) Logistics Management/ Public Health and Epidemiology / Data Analysis / Managing Stress / School Psychology / Application of Social Psychology / Managing HR / Business Communication / Creative Writing / Society through the Visual / Techniques of Ethnographic Filmmaking",
                                            "BPAS-184 / BANS-184 / BECS-184 / BPCS-186 / BPCS-184 / BPCS-188 / BPCS-187 / BEGS-186 / BEGG-174 / BSOS-185 / BSOS-184",
                                            "4",
                                        ],
                                        [
                                            "GE",
                                            "(Any 1) E-Governance / Psychology & Media / Psychology of Gender / Sustainable Development / Creative Writing",
                                            "BPAG-174 / BPCG-174 / BPCG-176 / BPAG-174 / BEGG-174",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <SyllabusTable
                                    title="Semester 5"
                                    rows={[
                                        [
                                            "CC",
                                            "Indian Economy – I",
                                            "BECC-111",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Development Economics",
                                            "BECC-112",
                                            "6",
                                        ],
                                        [
                                            "DSE-1",
                                            "(Any 1) Environmental Economics / Money and Banking",
                                            "BECE-141 / BECE-143",
                                            "6",
                                        ],
                                        [
                                            "DSE-2",
                                            "(Any 1) Environmental Economics / Money and Banking",
                                            "BECE-141 / BECE-143",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <SyllabusTable
                                    title="Semester 6"
                                    rows={[
                                        [
                                            "CC",
                                            "Indian Economy – II",
                                            "BECC-113",
                                            "6",
                                        ],
                                        [
                                            "CC",
                                            "Applied Econometrics",
                                            "BECC-114",
                                            "6",
                                        ],
                                        [
                                            "DSE-3",
                                            "(Any 1) Public Finance / International Economics",
                                            "BECE-142 / BECE-144",
                                            "6",
                                        ],
                                        [
                                            "DSE-4",
                                            "(Any 1) Public Finance / International Economics",
                                            "BECE-142 / BECE-144",
                                            "6",
                                        ],
                                    ]}
                                />
                            </Reveal>
                        </div>

                        <div className="mt-8" />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Curriculum Structure and Academic Design
                                </h3>
                                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        The IGNOU BA Economics follows the Choice-Based Credit System. This ensures a balanced mixture of theoretical, analytic, and skills-oriented learning. Over six semesters, students will earn 148 credits, which are divided into five categories. Core Courses; Discipline-Specific electives; Ability Enhancement courses; Skill Enhancement courses, and Generic Electives.
                                    </p>
                                    <p>
                                        Each credit is equal to 30 hours of work, including self learning, assignments, counseling sessions, and project work.
                                    </p>
                                    <p>
                                        The course progresses from the foundational topics of micro-and macroeconomics up to advanced subjects such as econometrics. Quantitative techniques, policy analysis, and development theory.
                                    </p>
                                    <p>
                                        Instead of memorizing, we focus on conceptual clarity, data analysis, and policy implementation, which will help you to understand how economics works in the real world.
                                    </p>
                                    <p>
                                        The program introduces modules on communication, environment, and research skills, which help students connect economics with society and sustainability.
                                    </p>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* CAREERS */}
                    <Section alt>
                        <div id="careers" />
                        <SectionHeader
                            eyebrow="Careers"
                            title="Career Opportunities After IGNOU BA Economics"
                            subtitle="Economics is practical: analysis, statistics, forecasting, policy — valuable everywhere."
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <Card>
                                    <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                                        An Economics degree opens more doors than you might think. Graduates can analyze patterns, interpret statistics, and design policies -- skills highly valued by all industries. After you complete the IGNOU BA Economics program, you can choose to pursue careers in several different directions:
                                    </p>

                                    <div className="mt-4 grid gap-4">
                                        <MiniCard
                                            title="1. Banking and Financial Services"
                                            desc="Join public or private banking as an analyst or officer. Your economics degree will give you a good understanding of interest rates, financial markets, and consumer trends. This knowledge is essential for jobs in investment banking or credit analysis.."
                                        />
                                        <MiniCard
                                            title="2. Government and Civil Services"
                                            desc="The government is always looking for economics graduates, particularly in the Indian Economic Services (IES), Civil Services, and Statistics agencies. The analytical skills developed by the program are ideal for exam prep and policy roles."
                                        />
                                        <MiniCard
                                            title="3. Corporate and Business Analysis"
                                            desc="Economists are essential to modern businesses for their market research, forecasting skills, and support in making decisions. Graduates are qualified to work as analysts, consultants, or research associates."
                                        />
                                        <MiniCard
                                            title="4. Policy Research for NGOs"
                                            desc="If you are interested in development, sustainability, or governance, you can use this degree to conduct policy research for organizations like NITI-Aayog, UNDP, or the World Bank, as well as NGOs that work on social welfare and resource allocation."
                                        />
                                        <MiniCard
                                            title="5. Academia and Higher Studies"
                                            desc="Students can move on to global programs, such as the MSc in Development Economics. Researchers can go on to work for think tanks, universities, or international agencies."
                                        />
                                        <MiniCard
                                            title="6. Data Analytics and Economic Modeling"
                                            desc="In today's world of data, economists who are proficient in quantitative methods and econometrics are highly valued for analytics roles. This course will prepare you to work at the intersection of data science and economics."
                                        />
                                    </div>
                                </Card>
                            </Reveal>

                            <Reveal>
                                <div className="grid gap-6">
                                    <ContentCard
                                        title="Emerging Areas for Study"
                                        paragraphs={[
                                            "While the core curriculum is comprehensive, new domains continue to shape how economists think. To stay abreast of global changes, students are encouraged either to specialize or explore topics such as:",
                                        ]}
                                        bullets={[
                                            {
                                                b: "Digital Economics:",
                                                t: "Understanding the effects of Fintech, online trading, and digital currencies on employment, growth, and productivity.",
                                            },
                                            {
                                                b: "Behavioral Economics:",
                                                t: "The study of psychological factors that influence consumer and financial decisions.",
                                            },
                                            {
                                                b: "Big Data & AI Applications:",
                                                t: "Using Machine Learning for Forecasting, Demand Prediction, and Policy Simulation.",
                                            },
                                            {
                                                b: "Sustainable Development & Climate Economics:",
                                                t: "Addressing issues of economic policy that are tied to environmental policies.",
                                            },
                                            {
                                                b: "Public Policy & Government:",
                                                t: "Bridging economics, policymaking, social welfare, and administration.",
                                            },
                                        ]}
                                    />

                                    <ContentCard
                                        title="How Unnati Supports Students (0–100 Guidance)"
                                        paragraphs={[
                                            "IGNOU allows you to study at your own pace, but managing deadlines, portals, and assignments can seem overwhelming. Unnati Education is here to transform your experience:",
                                        ]}
                                        bullets={[
                                            {
                                                b: "Counseling on a Personalized Basis:",
                                                t: "We can help you better understand the structure of the courses, the credit system, and the subject combinations that are best suited to your goals.",
                                            },
                                            {
                                                b: "Paperwork handled correctly:",
                                                t: "We ensure all paperwork is completed correctly on time.",
                                            },
                                            {
                                                b: "Assignment guidance:",
                                                t: " Get well-structured notes and solved assignments. You can also access previous-year questions, which are aligned to IGNOU's assessment style.",
                                            },
                                            {
                                                b: "Exam preparation:",
                                                t: "Our mentors offer a targeted preparation for the term-end exams (TEE) that covers both conceptual clarity and a writing strategy.",
                                            },
                                            {
                                                b: "Re-registration + backlog support:",
                                                t: "Re-registration, Backlog Support, and Never Lose a Semester. We assist with reregistration, backlog support, and revaluation.",
                                            },
                                            {
                                                b: "Monitoring from beginning to end:",
                                                t: "We monitor your progress, ensuring you don't miss any updates or submissions.",
                                            },
                                        ]}
                                        footer="We help you to enroll, but we also ensure that you get your degree with confidence, on time, and with top results."
                                    />
                                </div>
                            </Reveal>
                        </div>

                        <div className="mt-8" />
                        <div id="conclusion" />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Conclusion
                                </h3>
                                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        The IGNOU BA in Economics 2026 Admission program is much more than a bachelor's degree. It opens the door to analytical thinking, financial knowledge, and policy understanding. The flexible learning structure and NEP-aligned syllabus, as well as the strong industry relevance of this program, empower students to achieve both academic and professional excellence, without having to step away from their commitments.
                                    </p>
                                    <p>
                                        This course is the perfect foundation for anyone who wants to pursue a career as an economist, researcher, policy maker, or financier. With Unnati Education's 0-to-1 support, you can create a clear, structured path that is free of stress.
                                    </p>
                                    <p>
                                        Let us take care of the complexities so you can concentrate on your growth.
                                        Unnati Education offers guidance and guaranteed progress for the IGNOU BA Economics 2026 journey.
                                    </p>
                                    {/* <p className="font-semibold text-slate-900 dark:text-white">
                                        Note: Your Blade conclusion line says
                                        “IGNOU BA Economics 2026 journey.”
                                        Update that to 2026.
                                    </p> */}
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* CONTACT */}
                    <Section>
                        <div id="contact" />
                        <SectionHeader
                            eyebrow="Contact"
                            title="Get Started — Contact Unnati"
                            subtitle="Send details and we’ll guide you end-to-end."
                        />

                        <Reveal>
                            <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                                <p className="text-slate-600 dark:text-slate-300">
                                    Send your details — <b>name</b>, <b>DOB</b>,{" "}
                                    <b>qualification</b>, and{" "}
                                    <b>chosen program</b>. We’ll handle
                                    admission, documents, assignments, and
                                    exams.
                                </p>
                                <div className="mt-5 flex flex-wrap gap-3">
                                    <CTA
                                        href="https://wa.me/919355198199"
                                        tone="primary"
                                    >
                                        <WhatsAppIcon className="h-5 w-5" />
                                        Message
                                    </CTA>
                                    <CTA href="tel:+919355198199" tone="ghost">
                                        <PhoneIcon className="h-5 w-5" />
                                        Call
                                    </CTA>
                                </div>
                                <p className="mt-3 text-sm font-black text-slate-700 dark:text-slate-200">
                                    Call/WhatsApp: 9355198199 
                                </p>
                            </div>
                        </Reveal>

                        <div className="h-20" />
                    </Section>
                </div>

                <MobileStickyCTA />
            </main>
        </UserLayout>
    );
}

/* ---------------- GENERIC LAYOUT ---------------- */

function Hero() {
    return (
        <section className="mb-14" id="home">
            <div
                className="
          relative overflow-hidden rounded-3xl
          border border-slate-200/80
          bg-white/90 backdrop-blur-sm
          p-6 sm:p-8
          shadow-[0_25px_70px_-50px_rgba(0,0,0,0.35)]
          dark:border-white/10
          dark:bg-[#0b1220]/70
          dark:shadow-[0_30px_80px_-55px_rgba(0,0,0,0.85)]
        "
            >
                {/* glow */}
                <div className="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-blue-500/15 blur-3xl" />
                <div className="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-indigo-500/10 blur-3xl" />

                <div className="relative max-w-3xl">
                    {/* Pills */}
                    <div className="flex flex-wrap gap-2 mb-4">
                        <Pill>IGNOU • ODL</Pill>
                        <Pill>Updated 2026</Pill>
                        <Pill tone="blue">UGC Approved • CBCS</Pill>
                    </div>

                    {/* Title */}
                    <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
                        IGNOU BA Economics
                        <span className="block text-blue-700 dark:text-blue-300">
                            Admission 2026
                        </span>
                    </h1>

                    <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
                        Programme Code:{" "}
                        <span className="font-black text-slate-900 dark:text-white">
                            BAFEC
                        </span>
                    </p>

                    <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                        <p>
                            IGNOU BA in Economics Admissions 2026 is India’s
                            most sought-after undergraduate option for students
                            interested in economics, finance, and data analysis.
                            The School of Social Sciences, Indira Gandhi Open
                            University (IGNOU), offers this course that combines
                            academic excellence and real-world applications
                            through the Choice-Based Credit System.
                        </p>
                        <p>
                            The program's core objective is to teach learners
                            how the economy works, how policy shapes growth, and
                            what data are used for modern decision making. It is
                            the perfect program for students looking to gain a
                            combination of quantitative and theoretical skills,
                            which will open doors to careers in both the public
                            and private sectors.
                        </p>
                    </div>

                    {/* Badges */}
                    <div className="mt-5 flex flex-wrap gap-2">
                        <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
                            <CalendarIcon className="h-4 w-4" /> Last Date: 31
                            Aug 2026
                        </span>
                        <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
                            <ClockIcon className="h-4 w-4" /> Duration: 3–6
                            Years
                        </span>
                        <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
                            <BadgeIcon className="h-4 w-4" /> UGC Approved •
                            CBCS
                        </span>
                    </div>

                    {/* CTAs */}
                    <div className="mt-6 flex flex-wrap gap-3">
                        <CTA
                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Economics"
                            tone="primary"
                        >
                            <WhatsAppIcon className="h-5 w-5" />
                            WhatsApp
                        </CTA>

                        <CTA href="tel:+919355198199" tone="ghost">
                            <PhoneIcon className="h-5 w-5" />
                            Call
                        </CTA>
                    </div>

                    <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
                        Tip: Send <b>“BA Economics 2026”</b> on WhatsApp for
                        faster response.
                    </p>
                </div>
            </div>
        </section>
    );
}

function Pill({ children, tone = "neutral" }) {
    const styles =
        tone === "blue"
            ? `
        border-blue-200/70
        bg-blue-50
        text-blue-800
        dark:border-blue-500/25
        dark:bg-blue-500/10
        dark:text-blue-200
      `
            : `
        border-slate-200/70
        bg-white
        text-slate-700
        dark:border-slate-800/60
        dark:bg-white/5
        dark:text-slate-200
      `;

    return (
        <span
            className={[
                "inline-flex items-center",
                "rounded-full border",
                "px-3 py-1",
                "text-xs font-black",
                "transition",
                styles,
            ].join(" ")}
        >
            {children}
        </span>
    );
}

function Section({ children, alt = false }) {
    return (
        <section
            className={[
                "mt-12",
                alt
                    ? "rounded-[32px] border border-slate-200/80 bg-white/80 backdrop-blur-sm p-6 shadow-[0_20px_60px_-40px_rgba(0,0,0,0.35)] dark:border-white/10 dark:bg-[#0b1220]/70 dark:shadow-[0_25px_70px_-50px_rgba(0,0,0,0.85)]"
                    : "",
            ].join(" ")}
        >
            {children}
        </section>
    );
}

function SectionHeader({ eyebrow, title, subtitle, rightCTA }) {
    return (
        <div className="mb-6 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    {eyebrow}
                </p>
                <h2 className="mt-2 text-2xl font-black text-slate-900 dark:text-white">
                    {title}
                </h2>
                <p className="mt-1 text-slate-600 dark:text-slate-300">
                    {subtitle}
                </p>
            </div>
            {rightCTA && <div>{rightCTA}</div>}
        </div>
    );
}

/* ---------------- REVEAL ---------------- */

function Reveal({ children }) {
    const ref = useRef(null);

    useEffect(() => {
        const el = ref.current;
        if (!el) return;
        el.classList.add("reveal");
        const io = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting) {
                    el.classList.add("is-in");
                    io.disconnect();
                }
            },
            { threshold: 0.12 }
        );
        io.observe(el);
        return () => io.disconnect();
    }, []);

    return <div ref={ref}>{children}</div>;
}

function RevealGrid({ children, cols = "lg:grid-cols-4" }) {
    return (
        <div className={`grid gap-4 sm:grid-cols-2 ${cols}`}>
            {children.map((c, i) => (
                <Reveal key={i}>{c}</Reveal>
            ))}
        </div>
    );
}

/* ---------------- UI BLOCKS ---------------- */

function InfoTile({ label, value, icon }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-4 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
            <div className="flex items-center gap-3">
                <IconBox>{icon}</IconBox>
                <div>
                    <p className="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">
                        {label}
                    </p>
                    <p className="font-black text-slate-900 dark:text-white">
                        {value}
                    </p>
                </div>
            </div>
        </div>
    );
}

function Card({ children }) {
    return (
        <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
            {children}
        </div>
    );
}

function Row({ k, v }) {
    return (
        <tr>
            <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white">
                {k}
            </td>
            <td className="py-3 text-slate-600 dark:text-slate-300">{v}</td>
        </tr>
    );
}

function ContentCard({ title, paragraphs = [], bullets = [], footer }) {
    return (
        <Card>
            <h3 className="font-black text-slate-900 dark:text-white">
                {title}
            </h3>
            {paragraphs.map((p, i) => (
                <p
                    key={i}
                    className={`text-slate-600 dark:text-slate-300 leading-relaxed ${
                        i === 0 ? "mt-2" : "mt-3"
                    }`}
                >
                    {p}
                </p>
            ))}
            {bullets?.length ? (
                <ul className="mt-4 space-y-3">
                    {bullets.map((x, i) => (
                        <CheckItem key={i} bold={x.b} text={x.t} />
                    ))}
                </ul>
            ) : null}
            {footer ? (
                <p className="mt-4 text-slate-600 dark:text-slate-300">
                    {footer}
                </p>
            ) : null}
        </Card>
    );
}

function MiniCard({ title, desc }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
            <div className="font-black text-slate-900 dark:text-white">
                {title}
            </div>
            <div className="mt-1 text-slate-600 dark:text-slate-300">
                {desc}
            </div>
        </div>
    );
}

function CheckItem({ text, bold }) {
    return (
        <li className="flex gap-3">
            <span className="mt-[2px] grid h-6 w-6 place-items-center rounded-lg bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
                <svg
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    className="h-4 w-4"
                >
                    <path d="M9.2 16.6 4.9 12.3a1 1 0 0 1 1.4-1.4l2.9 2.9 8.5-8.5a1 1 0 0 1 1.4 1.4l-9.9 9.9Z" />
                </svg>
            </span>
            <span className="text-slate-600 dark:text-slate-300">
                {bold ? (
                    <b className="text-slate-900 dark:text-white">{bold} </b>
                ) : null}
                {text}
            </span>
        </li>
    );
}

function StepMini({ n, title, desc }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
            <div className="flex items-start gap-3">
                <div className="text-2xl font-black text-blue-500/40">{n}</div>
                <div>
                    <div className="font-black text-slate-900 dark:text-white">
                        {title}
                    </div>
                    <div className="mt-1 text-slate-600 dark:text-slate-300">
                        {desc}
                    </div>
                </div>
            </div>
        </div>
    );
}

function SyllabusTable({ title, rows }) {
    return (
        <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
            <h3 className="font-black text-slate-900 dark:text-white">
                {title}
            </h3>

            <div className="mt-4 overflow-x-auto">
                <table className="w-full text-left text-sm">
                    <thead>
                        <tr className="border-b border-slate-200/80 dark:border-white/10">
                            <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                TYPE
                            </th>
                            <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                SUBJECTS
                            </th>
                            <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                CODE
                            </th>
                            <th className="py-3 font-black text-slate-700 dark:text-slate-200">
                                CREDITS
                            </th>
                        </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                        {rows.map((r, i) => (
                            <tr key={i}>
                                <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white whitespace-nowrap">
                                    {r[0]}
                                </td>
                                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[320px]">
                                    {r[1]}
                                </td>
                                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 whitespace-nowrap">
                                    {r[2]}
                                </td>
                                <td className="py-3 font-black text-slate-900 dark:text-white whitespace-nowrap">
                                    {r[3]}
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </div>
    );
}

/* ---------------- CTA & HELPERS ---------------- */

function CTA({ href, children, tone = "primary" }) {
    const isTel = typeof href === "string" && href.startsWith("tel:");
    const isHash = typeof href === "string" && href.startsWith("#");

    return (
        <a
            href={href}
            target={isTel || isHash ? undefined : "_blank"}
            rel={isTel || isHash ? undefined : "noreferrer"}
            className={`inline-flex items-center justify-center gap-2 rounded-2xl px-5 py-3 font-black transition ${
                tone === "primary"
                    ? "bg-blue-600 text-white hover:bg-blue-700"
                    : "border border-slate-300 dark:border-white/20 text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-white/5"
            }`}
        >
            {children}
        </a>
    );
}

function IconBox({ children, tone = "dark" }) {
    return (
        <div
            className={`grid h-11 w-11 place-items-center rounded-xl ${
                tone === "blue"
                    ? "bg-blue-600 text-white"
                    : "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900"
            }`}
        >
            {children}
        </div>
    );
}

/* ---------------- MOBILE CTA ---------------- */

function MobileStickyCTA() {
    return (
        <div className="lg:hidden fixed bottom-0 inset-x-0 z-50 bg-white/90 backdrop-blur border-t border-slate-200 dark:bg-[#070A12]/90 dark:border-white/10">
            <div className="flex gap-3 p-4">
                <a
                    href="https://wa.me/919355198199"
                    className="flex-1 bg-blue-600 text-white rounded-xl py-3 text-center font-black"
                    target="_blank"
                    rel="noreferrer"
                >
                    WhatsApp
                </a>
                <a
                    href="tel:+919355198199"
                    className="flex-1 border rounded-xl py-3 text-center font-black dark:border-white/20"
                >
                    Call
                </a>
            </div>
        </div>
    );
}

/* ---------------- NOISE ---------------- */

function NoiseOverlay() {
    return (
        <div
            className="absolute inset-0 opacity-[0.06] dark:opacity-[0.05]"
            style={{
                backgroundImage:
                    "url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22180%22 height=%22180%22%3E%3Cfilter id=%22n%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.9%22/%3E%3C/filter%3E%3Crect width=%22180%22 height=%22180%22 filter=%22url(%23n)%22/%3E%3C/svg%3E')",
            }}
        />
    );
}

/* ---------------- Icons ---------------- */

function WhatsAppIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M12 2.5a9.5 9.5 0 0 0-8.1 14.5L3 21l4.1-1.3A9.5 9.5 0 1 0 12 2.5Zm0 17.3a7.8 7.8 0 0 1-4-1.1l-.3-.2-2.4.8.8-2.3-.2-.3A7.8 7.8 0 1 1 12 19.8Zm4.6-5.1c-.2-.1-1.3-.6-1.5-.7-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.3 6.3 0 0 1-3-2.6c-.2-.3 0-.4.1-.5l.6-.7c.1-.2.1-.4 0-.6l-.7-1.6c-.1-.2-.2-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 2 0 1.2.9 2.4 1 2.6.1.2 1.7 2.6 4.2 3.7.6.3 1.1.4 1.5.6.6.2 1.2.2 1.6.1.5-.1 1.3-.5 1.5-1.1.2-.6.2-1.1.1-1.2 0-.1-.2-.2-.4-.3Z" />
        </svg>
    );
}

function PhoneIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M6.6 10.4c1.3 2.6 3.4 4.7 6 6l2-2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.9.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.4c0-.6.4-1 1-1H7c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.9.1.4 0 .8-.3 1.1l-2 2Z" />
        </svg>
    );
}

function CalendarIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M7 2.8a1 1 0 0 1 1 1V5h8V3.8a1 1 0 1 1 2 0V5h1a2 2 0 0 1 2 2v12.2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V3.8a1 1 0 0 1 1-1Zm14 6H3v10.4c0 .6.4 1 1 1h16a1 1 0 0 0 1-1V8.8Z" />
        </svg>
    );
}

function ClockIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M12 2.8a9.2 9.2 0 1 0 0 18.4 9.2 9.2 0 0 0 0-18.4Zm1 9.7 3.2 1.9a1 1 0 0 1-1 1.7l-3.7-2.2a1 1 0 0 1-.5-.9V7.2a1 1 0 1 1 2 0v5.3Z" />
        </svg>
    );
}

function UniversityIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M12 3 2 8l10 5 10-5-10-5Zm-7 9v7h3v-5l4 2 4-2v5h3v-7l-7 3.5L5 12Z" />
        </svg>
    );
}

function BookIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M6 3.8h11a2 2 0 0 1 2 2V20a1 1 0 0 1-1.4.9C15.4 19.9 13.8 19.4 12 19.4s-3.4.5-5.6 1.5A1 1 0 0 1 5 20V5.8a2 2 0 0 1 1-2Zm1 2V18c1.7-.8 3.4-1.2 5-1.2s3.3.4 5 1.2V5.8H7Z" />
        </svg>
    );
}

function DeadlineIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M7 2.8a1 1 0 0 1 1 1V5h8V3.8a1 1 0 1 1 2 0V5h1a2 2 0 0 1 2 2v12.2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V3.8a1 1 0 0 1 1-1Zm14 6H3v10.4c0 .6.4 1 1 1h16a1 1 0 0 0 1-1V8.8ZM7 12h5v5H7v-5Z" />
        </svg>
    );
}

function LanguageIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M12 2.8a9.2 9.2 0 1 0 0 18.4 9.2 9.2 0 0 0 0-18.4Zm6.8 8.2h-3.3c-.1-1.7-.6-3.3-1.3-4.6 2 .9 3.4 2.6 3.9 4.6ZM12 4.6c.9 1.3 1.5 3 1.7 4.4h-3.4c.2-1.4.8-3.1 1.7-4.4Zm-5.1 1.8C6.2 7.7 5.7 9.3 5.6 11H2.2c.5-2 1.9-3.7 4.7-4.6Zm-4.7 6.6h3.4c.1 1.7.6 3.3 1.3 4.6-2-.9-3.4-2.6-4.7-4.6Zm7.9 6.4c-.9-1.3-1.5-3-1.7-4.4h3.4c-.2 1.4-.8 3.1-1.7 4.4Zm2.9-1.8c.7-1.3 1.2-2.9 1.3-4.6h3.3c-.5 2-1.9 3.7-4.6 4.6Z" />
        </svg>
    );
}

function BadgeIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M12 2.8 8.8 5H5.8v3.1L3.6 11 5.8 13.9V17h3L12 19.2 15.2 17h3V13.9L20.4 11l-2.2-2.9V5h-3L12 2.8Zm-1 12.4-3-3a1 1 0 1 1 1.4-1.4l1.6 1.6 4.6-4.6a1 1 0 0 1 1.4 1.4l-6 6Z" />
        </svg>
    );
}

function PenIcon(props) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
            <path d="M14.7 4.2 20 9.5l-9.9 9.9H4.8v-5.3l9.9-9.9ZM6.8 17.4h2.5l7.9-7.9-2.5-2.5-7.9 7.9v2.5Z" />
        </svg>
    );
}
