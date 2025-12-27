import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaEconomicsAdmission2026() {
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
                title="IGNOU BA in Economics Admission 2026: Your Complete Guide to Getting Started"
                description="Looking to study economics but need flexibility? IGNOU's BA in Economics might be exactly what you need. This three-year program lets you study at your own pace while earning a UGC-recognized degree."
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

                    {/* QUICK OVERVIEW */}
                    <Section>
                        <div id="overview" />
                        <SectionHeader
                            eyebrow="Quick Overview"
                            title="What You Need to Know"
                            subtitle="Complete programme snapshot with all essential details at a glance."
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
                                                    Information
                                                </th>
                                                <th className="py-3 font-black text-slate-700 dark:text-slate-200">
                                                    Programme Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                                            <Row k="Programme Code" v="BAFEC" />
                                            <Row
                                                k="Full Name"
                                                v="Bachelor of Arts in Economics (Honours)"
                                            />
                                            <Row
                                                k="Learning Mode"
                                                v="Open and Distance Learning"
                                            />
                                            <Row
                                                k="Offered By"
                                                v="School of Social Sciences, IGNOU"
                                            />
                                            <Row
                                                k="Duration"
                                                v="3 to 6 Years"
                                            />
                                            <Row
                                                k="Study Material"
                                                v="English and Hindi"
                                            />
                                            <Row
                                                k="Minimum Qualification"
                                                v="10+2 from any stream"
                                            />
                                            <Row
                                                k="Total Credits"
                                                v="148 Credits"
                                            />
                                            <Row
                                                k="Recognition"
                                                v="UGC Approved"
                                            />
                                            <Row
                                                k="Admission Partner"
                                                v="Unnati Education"
                                            />
                                        </tbody>
                                    </table>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* WHY CHOOSE IGNOU */}
                    <Section alt>
                        <div id="why-choose" />
                        <SectionHeader
                            eyebrow="Why Choose IGNOU"
                            title="Why Choose IGNOU for Your BA in Economics Admission 2026?"
                            subtitle="Understanding what makes IGNOU's BA Economics program stand out from the rest."
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <ContentCard
                                    title="A Degree That Actually Counts"
                                    paragraphs={[
                                        "Let me be honest with you. When people hear \"distance learning,\" some still raise their eyebrows. But IGNOU is different. This is not just another distance learning certificate that employers ignore. IGNOU's BA Economics degree holds the same weight as regular university degrees across India and abroad.",
                                        "You can appear for UPSC exams with this degree. Government departments accept it for job applications. Private companies recognize it. Universities worldwide consider it valid for master's admissions. Why? Because IGNOU was established by an Act of Parliament in 1985 and is recognized by the University Grants Commission. That official stamp matters when you're building your career.",
                                        "Think about it this way—you get the same degree value without spending three years sitting in a classroom every single day. That's the real advantage here."
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <ContentCard
                                    title="Learn Without Leaving Your Job"
                                    paragraphs={[
                                        "Here's a common problem. You're working in a job that pays your bills. You want to study further, but taking three years off is not realistic. Your family depends on your income. Or maybe you're helping with a family business during the day. Traditional college just does not fit into your life.",
                                        "IGNOU solves this exact problem. Study early morning before heading to work. Read your materials during lunch breaks. Watch video lectures late at night when everyone's asleep. Prepare for exams on weekends. The flexibility is real, not just marketing talk.",
                                        "I've seen students juggle full-time jobs and complete this program successfully. One student worked in a bank during the day and studied economics at night. Today, he's a senior analyst in the same bank. Another student managed her father's retail shop while pursuing this degree. She now handles all the financial planning for their expanded business. These are real stories, and they're possible because IGNOU understands that adult learners have responsibilities.",
                                        "No daily attendance. No rigid 9-to-3 schedule. No feeling guilty about missing classes because your child fell sick or your boss needed you for an urgent project. You control your learning schedule completely."
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <ContentCard
                                    title="Affordable Education for Everyone"
                                    paragraphs={[
                                        "Let's talk money. Education in India has become expensive. Private universities charge lakhs of rupees for a three-year degree. Even government colleges have fees that middle-class families struggle to afford. Add hostel costs, transportation, food, and other expenses—it becomes overwhelming.",
                                        "IGNOU keeps costs dramatically lower. You pay only for what you study, and the payment structure spreads across semesters. There are no hidden charges, no sudden fee hikes, no capitation fees. The university's mission is to make quality education accessible, not to maximize profits.",
                                        "For families where every rupee counts, this matters enormously. You can afford a recognized degree without taking loans or selling assets. Education should not force financial stress on families, and IGNOU ensures it doesn't."
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <ContentCard
                                    title="Updated According to National Education Policy 2020"
                                    paragraphs={[
                                        "The government introduced NEP 2020 to modernize Indian education. The policy emphasizes practical skills alongside theory, multidisciplinary learning, and flexible credit systems. Many universities are still figuring out how to implement these changes. IGNOU has already adapted.",
                                        "The BA Economics program follows the Choice-Based Credit System that NEP recommends. You get core economics courses plus the freedom to choose electives based on your interests. Want to understand psychology along with economics? Choose psychology as your elective. Interested in media and communication? That's available too.",
                                        "This approach makes you well-rounded. Employers today want people who understand multiple fields, not just narrow specialists. The curriculum prepares you for the real world where problems don't fit neatly into single-subject boxes.",
                                        "You learn concepts and also understand how to apply them in real situations. Case studies, practical assignments, and project work connect theory to reality. This is not about memorizing definitions and forgetting them after exams. It's about building genuine understanding that stays with you throughout your career."
                                    ]}
                                />
                            </Reveal>
                        </div>

                        <div className="mt-6" />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Complete Support from Unnati Education
                                </h3>
                                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        Here's where many distance learning students struggle. IGNOU's systems are good, but navigating online portals, understanding credit requirements, remembering deadlines, filling forms correctly—it overwhelms people. Students miss deadlines because they didn't check the website. They submit wrong documents and face delays. They don't know whom to ask when problems arise.
                                    </p>
                                    <p>
                                        This is exactly where Unnati Education steps in. We become your dedicated support team from day one. Think of us as that helpful friend who knows all the procedures and deadlines, who reminds you what needs to be done, who helps you avoid mistakes.
                                    </p>
                                    <p>
                                        We handle the paperwork headaches so you can focus on actual learning. We remind you about deadlines before they sneak up on you. We help with assignments—not by doing your work, but by guiding you on structure, formatting, and requirements. We prepare you for exams with strategies that work. We assist with re-registration every semester so you don't accidentally miss it.
                                    </p>
                                    <p>
                                        From your first inquiry until you receive your final degree certificate, we stay with you. Your success becomes our goal. We've helped hundreds of students complete their IGNOU programs smoothly, and we bring all that experience to support you.
                                    </p>
                                </div>

                                <div className="mt-6 flex flex-wrap gap-3">
                                    <CTA
                                        href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Economics"
                                        tone="primary"
                                    >
                                        <WhatsAppIcon className="h-5 w-5" />
                                        Get Support on WhatsApp
                                    </CTA>
                                    <CTA href="tel:+919355198199" tone="ghost">
                                        <PhoneIcon className="h-5 w-5" />
                                        Call for Guidance
                                    </CTA>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* WHAT MAKES THIS PROGRAM DIFFERENT */}
                    <Section>
                        <div id="program-features" />
                        <SectionHeader
                            eyebrow="Program Features"
                            title="What Makes This Economics Program Different?"
                            subtitle="Understanding the unique aspects that set this program apart."
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <ContentCard
                                    title="Strong Foundation in Economic Thinking"
                                    paragraphs={[
                                        "Economics is everywhere around you, even if you don't realize it. When petrol prices increase, that's economics. When the government announces a new budget, that's economics. When you decide whether to save money or spend it, that's an economic choice. When companies launch products at specific prices, they're using economic principles.",
                                        "This program teaches you to see and understand these patterns. You start with basics—how individuals make choices when resources are limited, how prices form in markets, why some goods are expensive while others are cheap. Then you move to bigger questions—how economies grow, what causes unemployment, how inflation works, why countries trade with each other.",
                                        "By the end of six semesters, you think differently. You read a newspaper and understand the economic logic behind policy decisions. You watch news about stock markets and comprehend what's actually happening. You analyze business situations and identify the economic forces at play. This shift in thinking is powerful, and it stays with you forever."
                                    ]}
                                />
                            </Reveal>

                            <Reveal>
                                <ContentCard
                                    title="Practical Skills That Employers Want"
                                    paragraphs={[
                                        "Companies don't just want people who studied economics theory. They need employees who can actually do things with that knowledge. This program focuses heavily on practical skills.",
                                        "You learn to read and interpret data correctly—taking raw numbers and finding meaningful patterns. You study statistics and econometrics, which teach you how to test whether something really causes something else or if it's just coincidence. You practice forecasting—predicting what might happen next based on current trends.",
                                        "These skills are valuable everywhere. Banks need them for credit analysis. Consulting firms need them for advising clients. Government departments need them for policy planning. Even small businesses need them for understanding their markets better.",
                                        "Modern employers also want people comfortable with technology. This program includes computer applications and data analysis techniques. You learn software tools that economists actually use in professional settings. By graduation, you're job-ready, not just theoretically educated."
                                    ]}
                                />
                            </Reveal>
                        </div>

                        <div className="mt-6" />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Multiple Career Paths Available
                                </h3>
                                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        One beautiful thing about economics—it opens many different doors. You're not locked into one career path.
                                    </p>
                                </div>

                                <div className="mt-6 grid gap-4">
                                    <CareerPathCard
                                        title="Banking and Finance"
                                        description="Banks constantly hire economics graduates. You could join as a probationary officer and grow into management. You could work in credit departments evaluating loan applications. You could join investment banking and analyze market opportunities. Your understanding of interest rates, inflation, and financial systems makes you valuable here."
                                    />
                                    <CareerPathCard
                                        title="Government Services"
                                        description="If serving the public interests you, economics provides an excellent foundation. Prepare for Indian Economic Service and work on national economic policies. Join the Civil Services and contribute to administration with economic insight. State government departments need economists for planning and budgeting. The skills you develop in this program directly help with these competitive exams."
                                    />
                                    <CareerPathCard
                                        title="Corporate Sector"
                                        description="Private companies need economic analysis constantly. Market research teams study consumer behavior and competition. Business analytics teams forecast sales and identify growth opportunities. Strategy teams evaluate expansion decisions. Your economics training helps you excel in these roles."
                                    />
                                    <CareerPathCard
                                        title="Development Organizations"
                                        description="NGOs, international bodies like the World Bank or UN agencies, and social enterprises need economists who understand development. You could work on poverty reduction programs, sustainable development projects, or social impact assessment. This path suits people who want their work to make a direct difference in society."
                                    />
                                    <CareerPathCard
                                        title="Research and Teaching"
                                        description="Love deep analysis and want to contribute to knowledge? Pursue higher studies after this degree. Complete an MA, then MPhil and PhD. Join universities as faculty. Work in research institutions. Publish papers that influence policy. Academic careers offer intellectual satisfaction and stability."
                                    />
                                    <CareerPathCard
                                        title="Data Analytics"
                                        description="Technology companies increasingly value economists. Your training in data analysis, statistical thinking, and causal reasoning makes you effective in data science roles. Many economics graduates transition into analytics positions at tech firms, e-commerce companies, and startups. The combination of economic thinking and data skills is rare and highly valued."
                                    />
                                </div>

                                <div className="mt-6 p-4 rounded-2xl bg-blue-50 dark:bg-blue-500/10 border border-blue-200/70 dark:border-blue-500/25">
                                    <p className="text-slate-700 dark:text-slate-200 leading-relaxed">
                                        <strong className="text-blue-900 dark:text-blue-100">The point is this</strong>—you're not choosing a narrow career when you study economics. You're building versatile skills that work across industries and sectors.
                                    </p>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* COMPLETE COURSE STRUCTURE */}
                    <Section alt>
                        <div id="syllabus" />
                        <SectionHeader
                            eyebrow="Course Structure"
                            title="Complete Course Structure"
                            subtitle="The program is organized into six semesters with a careful progression from basics to advanced topics."
                            rightCTA={
                                <CTA
                                    href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Need%20Full%20Syllabus%20Details"
                                    tone="primary"
                                >
                                    <WhatsAppIcon className="h-5 w-5" /> Get Full Details
                                </CTA>
                            }
                        />

                        <Reveal>
                            <SyllabusAccordion />
                        </Reveal>

                        <div className="mt-8" />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Understanding the Course Types
                                </h3>
                                <div className="mt-4 grid gap-4 sm:grid-cols-2">
                                    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                        <div className="font-black text-slate-900 dark:text-white">
                                            CC - Core Course
                                        </div>
                                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                            Essential economics subjects that form the foundation of your degree
                                        </div>
                                    </div>
                                    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                        <div className="font-black text-slate-900 dark:text-white">
                                            AECC - Ability Enhancement Compulsory Course
                                        </div>
                                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                            Communication and environmental awareness courses
                                        </div>
                                    </div>
                                    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                        <div className="font-black text-slate-900 dark:text-white">
                                            GE - Generic Elective
                                        </div>
                                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                            Choose from various disciplines to broaden your knowledge
                                        </div>
                                    </div>
                                    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                        <div className="font-black text-slate-900 dark:text-white">
                                            SEC - Skill Enhancement Course
                                        </div>
                                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                            Practical skills courses for career readiness
                                        </div>
                                    </div>
                                    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5 sm:col-span-2">
                                        <div className="font-black text-slate-900 dark:text-white">
                                            DSE - Discipline Specific Elective
                                        </div>
                                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                                            Specialized economics courses allowing you to focus on areas of interest
                                        </div>
                                    </div>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* ELIGIBILITY */}
                    <Section>
                        <div id="eligibility" />
                        <SectionHeader
                            eyebrow="Eligibility"
                            title="Who Can Apply for BA in Economics Admission 2026?"
                            subtitle="IGNOU keeps admission criteria simple and inclusive. The university believes education should be accessible to everyone who wants to learn."
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <Card>
                                    <h3 className="font-black text-slate-900 dark:text-white">
                                        Basic Eligibility Requirements
                                    </h3>
                                    <div className="mt-4 space-y-4">
                                        <EligibilityItem
                                            title="Educational Qualification"
                                            items={[
                                                "You need to have passed Class 12 from any recognized board in India",
                                                "Any stream works—Science, Commerce, or Arts students can all apply",
                                                "No minimum percentage requirement exists for admission",
                                                "Even if you scored low marks in Class 12, you're still eligible"
                                            ]}
                                        />
                                        <EligibilityItem
                                            title="Age Limit"
                                            items={[
                                                "Absolutely no age restrictions apply",
                                                "Whether you're 18 or 58, you can enroll",
                                                "Many students join after years of working"
                                            ]}
                                        />
                                        <EligibilityItem
                                            title="Working Professionals"
                                            items={[
                                                "Currently employed individuals are welcome",
                                                "No need to take career breaks or resign",
                                                "Study while continuing your job"
                                            ]}
                                        />
                                        <EligibilityItem
                                            title="Previous Education Gap"
                                            items={[
                                                "If you completed Class 12 ten years ago, that's perfectly fine",
                                                "Education gaps don't disqualify you",
                                                "Life happens, and IGNOU understands that"
                                            ]}
                                        />
                                    </div>
                                </Card>
                            </Reveal>

                            <Reveal>
                                <Card>
                                    <h3 className="font-black text-slate-900 dark:text-white">
                                        Why This Open Eligibility Matters
                                    </h3>
                                    <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                                        <p>
                                            This open eligibility philosophy is what makes IGNOU special. Traditional universities often have complicated eligibility rules, minimum percentage requirements, and age restrictions. IGNOU removes these barriers because the university believes in lifelong learning opportunities for all.
                                        </p>
                                        <p>
                                            Whether you're a fresh Class 12 graduate planning your career, a working professional wanting to upgrade qualifications, a homemaker returning to education after years, or someone who couldn't attend regular college earlier—this program welcomes you.
                                        </p>
                                    </div>

                                    <div className="mt-6 p-4 rounded-2xl bg-green-50 dark:bg-green-500/10 border border-green-200/70 dark:border-green-500/25">
                                        <div className="flex items-start gap-3">
                                            <div className="mt-1">
                                                <svg className="h-6 w-6 text-green-600 dark:text-green-400" viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M12 2.8a9.2 9.2 0 1 0 0 18.4 9.2 9.2 0 0 0 0-18.4Zm4.6 7.1-5.2 5.2a1 1 0 0 1-1.4 0l-2.6-2.6a1 1 0 0 1 1.4-1.4l1.9 1.9 4.5-4.5a1 1 0 0 1 1.4 1.4Z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <div className="font-black text-green-900 dark:text-green-100">
                                                    Ready to Check Your Eligibility?
                                                </div>
                                                <p className="mt-1 text-sm text-green-800 dark:text-green-200">
                                                    Contact us for a quick verification of your documents and eligibility status.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </Card>
                            </Reveal>
                        </div>
                    </Section>

                    {/* IMPORTANT DATES */}
                    <Section alt>
                        <div id="dates" />
                        <SectionHeader
                            eyebrow="Important Dates"
                            title="Important Dates for BA in Economics Admission 2026"
                            subtitle="Timing matters in admissions. Missing a deadline can mean waiting six more months for the next cycle."
                        />

                        <div className="grid gap-6 lg:grid-cols-2">
                            <Reveal>
                                <Card>
                                    <h3 className="font-black text-slate-900 dark:text-white flex items-center gap-3">
                                        <span className="grid h-10 w-10 place-items-center rounded-xl bg-blue-600 text-white text-sm font-black">
                                            JAN
                                        </span>
                                        January Session 2026
                                    </h3>
                                    <div className="mt-4 overflow-x-auto">
                                        <table className="w-full text-left text-sm">
                                            <thead>
                                                <tr className="border-b border-slate-200/80 dark:border-white/10">
                                                    <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                                        Activity
                                                    </th>
                                                    <th className="py-3 font-black text-slate-700 dark:text-slate-200">
                                                        Expected Timeline
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                                                <Row k="Online Application Opens" v="Early January 2026" />
                                                <Row k="Last Date to Apply" v="March 31, 2026" />
                                                <Row k="Late Admission (if extended)" v="Mid-April 2026" />
                                                <Row k="Academic Session Begins" v="January 2026" />
                                                <Row k="Study Material Dispatch" v="Within 30 days of admission" />
                                                <Row k="First Assignment Submission" v="As per academic calendar" />
                                                <Row k="Term-End Examination" v="June 2026" />
                                            </tbody>
                                        </table>
                                    </div>
                                </Card>
                            </Reveal>

                            <Reveal>
                                <Card>
                                    <h3 className="font-black text-slate-900 dark:text-white flex items-center gap-3">
                                        <span className="grid h-10 w-10 place-items-center rounded-xl bg-indigo-600 text-white text-sm font-black">
                                            JUL
                                        </span>
                                        July Session 2026
                                    </h3>
                                    <div className="mt-4 overflow-x-auto">
                                        <table className="w-full text-left text-sm">
                                            <thead>
                                                <tr className="border-b border-slate-200/80 dark:border-white/10">
                                                    <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">
                                                        Activity
                                                    </th>
                                                    <th className="py-3 font-black text-slate-700 dark:text-slate-200">
                                                        Expected Timeline
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                                                <Row k="Online Application Opens" v="Early July 2026" />
                                                <Row k="Last Date to Apply" v="September 30, 2026" />
                                                <Row k="Late Admission (if extended)" v="Mid-October 2026" />
                                                <Row k="Academic Session Begins" v="July 2026" />
                                                <Row k="Study Material Dispatch" v="Within 30 days of admission" />
                                                <Row k="First Assignment Submission" v="As per academic calendar" />
                                                <Row k="Term-End Examination" v="December 2026" />
                                            </tbody>
                                        </table>
                                    </div>
                                </Card>
                            </Reveal>
                        </div>

                        <div className="mt-6" />

                        <Reveal>
                            <Card>
                                <h3 className="font-black text-slate-900 dark:text-white">
                                    Important Points About These Dates
                                </h3>
                                <div className="mt-4 space-y-4">
                                    <div className="flex gap-3">
                                        <span className="mt-[2px] grid h-6 w-6 flex-shrink-0 place-items-center rounded-lg bg-blue-600 text-white">
                                            <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                                                <path d="M9.2 16.6 4.9 12.3a1 1 0 0 1 1.4-1.4l2.9 2.9 8.5-8.5a1 1 0 0 1 1.4 1.4l-9.9 9.9Z" />
                                            </svg>
                                        </span>
                                        <span className="text-slate-600 dark:text-slate-300">
                                            These timelines are tentative based on previous years' patterns. IGNOU announces exact dates on their official website closer to each session. Sometimes the university extends deadlines if there's high demand or technical issues.
                                        </span>
                                    </div>
                                    {/* <div className="flex gap-3">
                                        <span className="mt-[2px] grid h-6 w-6 flex-shrink-0 place-items-center rounded-lg bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
                                            <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                                                <path d="M12 2.8a9.2 9.2 0 1 0 0 18.4 9.2 9.2 0 0 0 0-18.4Zm1 13.4a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm0-3.6a1 1 0 0 1-2 0V8.2a1 1 0 1 1 2 0v4.4Z" />
                                            </svg>
                                        </span>
                                        <span className="text-slate-600 dark:text-slate-300">
                                            This is where Unnati Education becomes invaluable. We track official notifications daily. The moment IGNOU announces dates, we inform our students immediately. We send reminders as deadlines approach. We ensure you never miss critical dates because you forgot to check the website.
                                        </span>
                                    </div> */}
                                    <div className="flex gap-3">
                                        <span className="mt-[2px] grid h-6 w-6 flex-shrink-0 place-items-center rounded-lg bg-blue-600 text-white">
                                            <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                                                <path d="M9.2 16.6 4.9 12.3a1 1 0 0 1 1.4-1.4l2.9 2.9 8.5-8.5a1 1 0 0 1 1.4 1.4l-9.9 9.9Z" />
                                            </svg>
                                        </span>
                                        <span className="text-slate-600 dark:text-slate-300">
                                            <strong className="text-slate-900 dark:text-white">This is where Unnati Education becomes invaluable.</strong> We track official notifications daily. The moment IGNOU announces dates, we inform our students immediately. We send reminders as deadlines approach. We ensure you never miss critical dates because you forgot to check the website.
                                        </span>
                                    </div>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* HOW UNNATI SUPPORTS */}
                    <Section>
                        <div id="support" />
                        <SectionHeader
                            eyebrow="Our Support"
                            title="How Unnati Education Supports Your Success Journey"
                            subtitle="Our support is not just about filling admission forms. We provide comprehensive guidance throughout your entire program. Here's how we help at every stage:"
                        />

                        <Reveal>
                            <div className="grid gap-6">
                                <SupportPhaseCard
                                    phase="Before Admission"
                                    subtitle="Getting Started Right"
                                    items={[
                                        {
                                            title: "Eligibility Verification",
                                            desc: "Before you invest time and hope, we verify if you're eligible. We check your Class 12 certificates, mark sheets, and other documents. Better to know upfront than face rejection later."
                                        },
                                        {
                                            title: "Program Counseling",
                                            desc: "We explain the complete course structure in simple language. You understand what subjects you'll study, how credits work, what electives mean, and how the examination system operates. No confusing jargon, just clear explanations."
                                        },
                                        {
                                            title: "Subject Selection Guidance",
                                            desc: "When choosing electives, we help you make informed decisions. Which subjects align with your career goals? Which combinations work well together? We've guided hundreds of students, so we know what works."
                                        },
                                        {
                                            title: "Application Process",
                                            desc: "IGNOU's online application has multiple steps. Upload this document here, enter this information there, choose this option, pay through this method. We guide you through every single step. We check your application before submission to catch any errors."
                                        },
                                        {
                                            title: "Document Verification",
                                            desc: "Uploaded documents must meet specific requirements—size limits, format types, clarity standards. We help you prepare documents correctly. One wrong upload can delay your admission by weeks."
                                        },
                                        {
                                            title: "Payment Guidance",
                                            desc: "Understanding what amount to pay, which payment mode to use, and how to confirm payment happens correctly. We explain the process and verify that your payment went through successfully."
                                        }
                                    ]}
                                />

                                <SupportPhaseCard
                                    phase="During Your Studies"
                                    subtitle="Consistent Support"
                                    items={[
                                        {
                                            title: "Assignment Help",
                                            desc: "Every semester includes assignment submissions. We don't write your assignments—that would be cheating. Instead, we guide you on structure, formatting, word limits, and referencing. We review your drafts and suggest improvements. We ensure you submit on time."
                                        },
                                        {
                                            title: "Study Material Support",
                                            desc: "If your study material hasn't arrived or is incomplete, we help you follow up with IGNOU. We also guide you to digital resources when you need them."
                                        },
                                        {
                                            title: "Doubt Clarification",
                                            desc: "Confused about a concept? Unclear about an instruction? Contact us. We clarify doubts or connect you with subject experts who can help."
                                        },
                                        {
                                            title: "Re-registration Assistance",
                                            desc: "Every semester, you must re-register for next semester's subjects. The process has specific timelines and procedures. We remind you when re-registration opens, guide you through subject selection, and ensure it completes successfully. Missing re-registration causes semester loss, so we're particularly careful here."
                                        },
                                        {
                                            title: "Exam Form Submission",
                                            desc: "Before each examination cycle, you must fill and submit exam forms. We remind you about deadlines, help you fill forms correctly, and verify submission."
                                        }
                                    ]}
                                />

                                <SupportPhaseCard
                                    phase="Examination Support"
                                    subtitle="Maximizing Your Performance"
                                    items={[
                                        {
                                            title: "Exam Preparation Strategies",
                                            desc: "We share effective study techniques for IGNOU exams. How to read study materials efficiently, how to make useful notes, how to practice with previous year papers, how to manage time during exams."
                                        },
                                        {
                                            title: "Answer Writing Guidance",
                                            desc: "IGNOU examinations have specific expectations for answers. We teach you how to structure answers, how much detail to include, how to present information clearly. Good content with poor presentation loses marks. We help you present well."
                                        },
                                        {
                                            title: "Exam Schedule Updates",
                                            desc: "When IGNOU releases exam dates and center information, we update you immediately. No last-minute surprises."
                                        },
                                        {
                                            title: "Hall Ticket Download",
                                            desc: "We remind you to download hall tickets and verify all details are correct. If there's an error, we help you get it corrected before the exam."
                                        }
                                    ]}
                                />

                                <SupportPhaseCard
                                    phase="After Exams"
                                    subtitle="Closing the Loop"
                                    items={[
                                        {
                                            title: "Result Tracking",
                                            desc: "When results are about to be declared, we inform you. We guide you on checking results online."
                                        },
                                        {
                                            title: "Rechecking Support",
                                            desc: "If you feel marks don't reflect your performance, we help you apply for rechecking or re-evaluation. We explain the process, costs, and realistic expectations."
                                        },
                                        {
                                            title: "Backlog Management",
                                            desc: "If you don't clear a paper, we help you plan how to reappear. Which session to choose, how to prepare better, what changed in the syllabus if anything."
                                        },
                                        {
                                            title: "Final Semester Procedures",
                                            desc: "When you're completing your last semester, several things need attention—all previous papers cleared, all assignments submitted, all fees paid, convocation registration if you want. We ensure everything is sorted."
                                        },
                                        {
                                            title: "Degree Certificate",
                                            desc: "Once you complete all requirements, we guide you through the degree application process. We track your application and ensure your certificate reaches you."
                                        }
                                    ]}
                                />
                            </div>
                        </Reveal>

                        <div className="mt-8" />

                        <Reveal>
                            <Card>
                                <div className="text-center">
                                    <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                        From Beginning to End, We're Your Constant Support System
                                    </h3>
                                    <p className="mt-3 text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                                        You're never alone in this journey. From your first inquiry until you receive your final degree certificate, we stay with you. Your success becomes our goal.
                                    </p>
                                    <div className="mt-6 flex flex-wrap justify-center gap-3">
                                        <CTA
                                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20I%20need%20complete%20support"
                                            tone="primary"
                                        >
                                            <WhatsAppIcon className="h-5 w-5" />
                                            Get Complete Support
                                        </CTA>
                                        <CTA href="tel:+919355198199" tone="ghost">
                                            <PhoneIcon className="h-5 w-5" />
                                            Talk to an Advisor
                                        </CTA>
                                    </div>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* ECONOMICS IN REAL LIFE */}
                    <Section alt>
                        <div id="real-life" />
                        <SectionHeader
                            eyebrow="Real-World Application"
                            title="Understanding How Economics Shapes Real Life"
                            subtitle="Economics is not just about complicated graphs and mathematical formulas. At its heart, economics is about understanding human behavior and how societies make choices."
                        />

                        <Reveal>
                            <Card>
                                <div className="space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        Every day, you make economic decisions. Should you buy that new phone or save the money? Economics explains the trade-offs. Why did your favorite restaurant increase prices? Economic principles of demand and supply. Why does the government give subsidies on some products? Policy economics. Why do some people have more wealth than others? Distribution economics.
                                    </p>
                                    <p>
                                        When you study this program, you start seeing these patterns everywhere. You watch news differently. You understand why governments make certain policy decisions. You comprehend what businesses are trying to achieve with their strategies. You recognize when someone's making a logical economic argument versus an emotional one.
                                    </p>
                                    <p>
                                        This awareness is powerful. It helps you make better personal financial decisions. It makes you a more informed citizen who understands policy debates. It makes you a more valuable employee because you understand business logic. It makes you a better entrepreneur if you start your own venture.
                                    </p>
                                    <p className="font-semibold text-slate-900 dark:text-white">
                                        The knowledge is not locked in textbooks. It flows into every aspect of your life, making you sharper, more analytical, and more effective.
                                    </p>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* WHY START NOW */}
                    <Section>
                        <div id="why-now" />
                        <SectionHeader
                            eyebrow="Take Action"
                            title="Why Starting Your BA in Economics Admission 2026 Makes Sense Now"
                            subtitle="If you're thinking about doing this program 'someday,' let me tell you—someday usually never comes. Life keeps happening. Responsibilities keep growing. Years pass quickly."
                        />

                        <Reveal>
                            <Card>
                                <div className="space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                                    <p>
                                        2026 is here. The admission cycles are starting soon. If not now, when? Three years from now, you'll either have this degree or wish you had started three years ago. The choice is yours, but the time to act is now.
                                    </p>
                                    <p>
                                        Maybe you're worried about balancing work and studies. Thousands of working professionals complete this program successfully every year. Maybe you're concerned about your age. Students from 20 to 60 are currently studying in IGNOU. Maybe you're worried about costs. IGNOU's structure makes it genuinely affordable.
                                    </p>
                                    <p>
                                        Whatever's holding you back, the solution likely exists. And that's exactly what we at Unnati Education help you figure out. Talk to us about your concerns. Let us show you how others in similar situations succeeded. Let us create a plan that works for your specific circumstances.
                                    </p>
                                    <p className="text-lg font-black text-slate-900 dark:text-white">
                                        The longer you wait, the longer you stay in the same position. Growth requires action, and action starts with a decision.
                                    </p>
                                </div>

                                <div className="mt-6 p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-500/10 dark:to-indigo-500/10 border border-blue-200/70 dark:border-blue-500/25">
                                    <h4 className="text-xl font-black text-slate-900 dark:text-white">
                                        Don't Let Another Admission Cycle Pass By
                                    </h4>
                                    <p className="mt-2 text-slate-700 dark:text-slate-200">
                                        The January 2026 session is approaching. The July 2026 session will follow. Secure your seat in one of these cycles and start building the future you want.
                                    </p>
                                    <div className="mt-4 flex flex-wrap gap-3">
                                        <CTA
                                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Ready%20to%20start%20BA%20Economics%202026"
                                            tone="primary"
                                        >
                                            <WhatsAppIcon className="h-5 w-5" />
                                            Start Your Journey Now
                                        </CTA>
                                        <CTA href="tel:+919355198199" tone="ghost">
                                            <PhoneIcon className="h-5 w-5" />
                                            Speak with a Counselor
                                        </CTA>
                                    </div>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* NEXT STEPS */}
                    <Section alt>
                        <div id="next-steps" />
                        <SectionHeader
                            eyebrow="Getting Started"
                            title="Take Your First Step Toward BA in Economics Admission 2026 Today"
                            subtitle="You've read this far, which means something about this program interests you. That interest is worth exploring further."
                        />

                        <Reveal>
                            <Card>
                                <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                    Here's What Happens Next When You Contact Unnati Education
                                </h3>

                                <div className="mt-6 grid gap-4">
                                    <ProcessStep
                                        number="01"
                                        title="You Reach Out"
                                        description="Contact us through phone, WhatsApp, email, or our website. Tell us about yourself—your educational background, current situation, what you hope to achieve."
                                    />
                                    <ProcessStep
                                        number="02"
                                        title="We Have a Detailed Conversation"
                                        description="We answer all your questions honestly. We explain the program, the process, the timeline, everything. No pressure, just information."
                                    />
                                    <ProcessStep
                                        number="03"
                                        title="Start the Admission Process"
                                        description="If you decide this program is right for you, we start the admission process. We guide you through documentation, form filling, and submission. We handle the confusing parts."
                                    />
                                    <ProcessStep
                                        number="04"
                                        title="Begin Your Learning Journey"
                                        description="Once admitted, you receive study materials and join the student community. Your learning journey begins, and we're with you for every milestone."
                                    />
                                    <ProcessStep
                                        number="05"
                                        title="Ongoing Support Throughout"
                                        description="Semester by semester, assignment by assignment, exam by exam, we support you. You focus on learning and growing. We handle the administrative complexities."
                                    />
                                    <ProcessStep
                                        number="06"
                                        title="Graduate with Your Degree"
                                        description="Three to six years later, depending on your pace, you graduate with your BA Economics degree. Your career options expand. Your knowledge deepens. Your confidence grows."
                                    />
                                </div>

                                <div className="mt-8 p-6 rounded-2xl bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-500/10 dark:to-emerald-500/10 border border-green-200/70 dark:border-green-500/25">
                                    <h4 className="text-xl font-black text-slate-900 dark:text-white">
                                        This Entire Journey Starts with One Simple Action
                                    </h4>
                                    <p className="mt-2 text-slate-700 dark:text-slate-200 leading-relaxed">
                                        Don't let another BA in Economics admission cycle pass by while you're still thinking about it. BA in Economics graduates are in demand. The skills you'll develop are valuable. The degree is recognized. The flexibility is real. The support from Unnati Education is comprehensive.
                                    </p>
                                    <p className="mt-3 text-lg font-black text-slate-900 dark:text-white">
                                        Everything you need for success is available. All that's missing is your decision to begin.
                                    </p>
                                </div>
                            </Card>
                        </Reveal>
                    </Section>

                    {/* CONTACT */}
                    <Section>
                        <div id="contact" />
                        <SectionHeader
                            eyebrow="Contact Us"
                            title="Ready to Get Started? Contact Unnati Education Today"
                            subtitle="Send us your details and we'll guide you through every step of your admission journey."
                        />

                        <Reveal>
                            <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-8 shadow-lg dark:border-white/10 dark:bg-[#0b1220]/70">
                                <div className="text-center max-w-2xl mx-auto">
                                    <h3 className="text-2xl font-black text-slate-900 dark:text-white">
                                        Let's Start Your Success Story
                                    </h3>
                                    <p className="mt-3 text-slate-600 dark:text-slate-300">
                                        Send us your details — <b>name</b>, <b>date of birth</b>, <b>qualification</b>, and <b>chosen program</b>. We'll handle admission, documents, assignments, and exams. Our team is ready to support you every step of the way.
                                    </p>

                                    <div className="mt-8 flex flex-wrap justify-center gap-4">
                                        <CTA
                                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20I%20want%20to%20apply%20for%20BA%20Economics%202026"
                                            tone="primary"
                                        >
                                            <WhatsAppIcon className="h-5 w-5" />
                                            Message on WhatsApp
                                        </CTA>
                                        <CTA href="tel:+919355198199" tone="ghost">
                                            <PhoneIcon className="h-5 w-5" />
                                            Call Now
                                        </CTA>
                                    </div>

                                    <div className="mt-8 grid gap-4 sm:grid-cols-2 text-left">
                                        <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                            <div className="flex items-center gap-3">
                                                <PhoneIcon className="h-5 w-5 text-blue-600 dark:text-blue-400" />
                                                <div>
                                                    <div className="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">
                                                        Call/WhatsApp
                                                    </div>
                                                    <div className="font-black text-slate-900 dark:text-white">
                                                        9355198199
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                                            <div className="flex items-center gap-3">
                                                <ClockIcon className="h-5 w-5 text-blue-600 dark:text-blue-400" />
                                                <div>
                                                    <div className="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">
                                                        Available
                                                    </div>
                                                    <div className="font-black text-slate-900 dark:text-white">
                                                        Mon - Sat, 9 AM - 7 PM
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p className="mt-6 text-sm text-slate-500 dark:text-slate-400">
                                        <strong>Quick Tip:</strong> Send <b>"BA Economics 2026"</b> on WhatsApp for faster response and immediate assistance.
                                    </p>
                                </div>
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
                        IGNOU BA in Economics
                        <span className="block text-blue-700 dark:text-blue-300 mt-1">
                            Admission 2026
                        </span>
                    </h1>

                    <p className="mt-4 text-sm sm:text-base text-slate-600 dark:text-slate-300">
                        Programme Code:{" "}
                        <span className="font-black text-slate-900 dark:text-white">
                            BAFEC
                        </span>{" "}
                        | Your Complete Guide to Getting Started
                    </p>

                    <div className="mt-5 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                        <p>
                            Looking to study economics but need flexibility? IGNOU's BA in Economics might be exactly what you need. This three-year program lets you study at your own pace while earning a UGC-recognized degree that opens doors across government jobs, private sector roles, and higher studies.
                        </p>
                        <p>
                            Whether you're a working professional or a fresh Class 12 graduate, this program adapts to your schedule without compromising on quality.
                        </p>
                    </div>

                    {/* Badges */}
                    <div className="mt-6 flex flex-wrap gap-2">
                        <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1.5 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
                            <CalendarIcon className="h-4 w-4" /> Last Date: September 30, 2026
                        </span>
                        <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1.5 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
                            <ClockIcon className="h-4 w-4" /> Duration: 3–6 Years
                        </span>
                        <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1.5 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
                            <BadgeIcon className="h-4 w-4" /> 148 Credits
                        </span>
                    </div>

                    {/* CTAs */}
                    <div className="mt-7 flex flex-wrap gap-3">
                        <CTA
                            href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Economics%202026"
                            tone="primary"
                        >
                            <WhatsAppIcon className="h-5 w-5" />
                            WhatsApp Us
                        </CTA>

                        <CTA href="tel:+919355198199" tone="ghost">
                            <PhoneIcon className="h-5 w-5" />
                            Call Now
                        </CTA>
                    </div>

                    <p className="mt-4 text-xs text-slate-500 dark:text-slate-400">
                        💡 <b>Quick Tip:</b> Send "BA Economics 2026" on WhatsApp for instant response
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
                    ? "rounded-[32px] border border-slate-200/80 bg-white/80 backdrop-blur-sm p-6 sm:p-8 shadow-[0_20px_60px_-40px_rgba(0,0,0,0.35)] dark:border-white/10 dark:bg-[#0b1220]/70 dark:shadow-[0_25px_70px_-50px_rgba(0,0,0,0.85)]"
                    : "",
            ].join(" ")}
        >
            {children}
        </section>
    );
}

function SectionHeader({ eyebrow, title, subtitle, rightCTA }) {
    return (
        <div className="mb-8 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    {eyebrow}
                </p>
                <h2 className="mt-2 text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">
                    {title}
                </h2>
                {subtitle && (
                    <p className="mt-2 text-slate-600 dark:text-slate-300 max-w-3xl">
                        {subtitle}
                    </p>
                )}
            </div>
            {rightCTA && <div className="lg:flex-shrink-0">{rightCTA}</div>}
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
        <div className="rounded-2xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-4 shadow-sm transition-all hover:shadow-md dark:border-white/10 dark:bg-[#0b1220]/70">
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
            <h3 className="text-xl font-black text-slate-900 dark:text-white">
                {title}
            </h3>
            {paragraphs.map((p, i) => (
                <p
                    key={i}
                    className={`text-slate-600 dark:text-slate-300 leading-relaxed ${
                        i === 0 ? "mt-3" : "mt-3"
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

function CareerPathCard({ title, description }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-gradient-to-br from-slate-50 to-white px-5 py-5 transition-all hover:shadow-md dark:border-white/10 dark:from-white/5 dark:to-transparent">
            <div className="flex items-start gap-3">
                <div className="mt-1 grid h-8 w-8 flex-shrink-0 place-items-center rounded-lg bg-blue-600 text-white">
                    <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                        <path d="M9.2 16.6 4.9 12.3a1 1 0 0 1 1.4-1.4l2.9 2.9 8.5-8.5a1 1 0 0 1 1.4 1.4l-9.9 9.9Z" />
                    </svg>
                </div>
                <div className="flex-1">
                    <div className="font-black text-slate-900 dark:text-white">
                        {title}
                    </div>
                    <div className="mt-2 text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                        {description}
                    </div>
                </div>
            </div>
        </div>
    );
}

function CheckItem({ text, bold }) {
    return (
        <li className="flex gap-3">
            <span className="mt-[2px] grid h-6 w-6 flex-shrink-0 place-items-center rounded-lg bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
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

function EligibilityItem({ title, items }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
            <div className="font-black text-slate-900 dark:text-white mb-2">
                {title}
            </div>
            <ul className="space-y-2">
                {items.map((item, i) => (
                    <li key={i} className="flex gap-2 text-sm text-slate-600 dark:text-slate-300">
                        <span className="text-blue-600 dark:text-blue-400 mt-1">•</span>
                        <span>{item}</span>
                    </li>
                ))}
            </ul>
        </div>
    );
}

function SupportPhaseCard({ phase, subtitle, items }) {
    return (
        <Card>
            <div className="flex items-center gap-3 mb-4">
                <div className="h-10 w-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 grid place-items-center text-white font-black text-lg">
                    {phase === "Before Admission" ? "1" : phase === "During Your Studies" ? "2" : phase === "Examination Support" ? "3" : "4"}
                </div>
                <div>
                    <h3 className="text-xl font-black text-slate-900 dark:text-white">
                        {phase}
                    </h3>
                    <p className="text-sm text-slate-600 dark:text-slate-300">
                        {subtitle}
                    </p>
                </div>
            </div>
            <div className="grid gap-3">
                {items.map((item, i) => (
                    <div key={i} className="rounded-xl border border-slate-200/80 bg-slate-50 px-4 py-3 dark:border-white/10 dark:bg-white/5">
                        <div className="font-black text-slate-900 dark:text-white text-sm">
                            {item.title}
                        </div>
                        <div className="mt-1 text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            {item.desc}
                        </div>
                    </div>
                ))}
            </div>
        </Card>
    );
}

function ProcessStep({ number, title, description }) {
    return (
        <div className="rounded-2xl border border-slate-200/80 bg-gradient-to-br from-slate-50 to-white px-5 py-5 dark:border-white/10 dark:from-white/5 dark:to-transparent">
            <div className="flex items-start gap-4">
                <div className="grid h-12 w-12 flex-shrink-0 place-items-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white font-black text-lg">
                    {number}
                </div>
                <div className="flex-1">
                    <div className="font-black text-slate-900 dark:text-white">
                        {title}
                    </div>
                    <div className="mt-2 text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                        {description}
                    </div>
                </div>
            </div>
        </div>
    );
}

/* ---------------- ACCORDION SYLLABUS ---------------- */

function SyllabusAccordion() {
    const [openSemester, setOpenSemester] = useState(null);

    const semesters = [
        {
            id: 1,
            title: "Semester 1",
            rows: [
                ["CC", "Introductory Microeconomics", "BECC-101", "6"],
                ["CC", "Mathematical Methods for Economics I", "BECC-102", "6"],
                ["AECC", "Environmental Studies", "BEVAE-181", "4"],
                ["GE", "(Any 1) Indian Society: Images and Realities / General Psychology / Media and Communication Skills / Disaster Management / Applied Ethics / Understanding Ambedkar / भारतीय सौंदर्यम शास्त्र / National Cadet Corps", "BSOG-171 / BPCG-171 / BEGG-171 / BPAG-171 / BPYG-171 / BABG-171 / BSKG-171 / ONR-003", "6"],
            ]
        },
        {
            id: 2,
            title: "Semester 2",
            rows: [
                ["CC", "Introductory Macroeconomics", "BECC-103", "6"],
                ["CC", "Mathematical Methods for Economics II", "BECC-104", "6"],
                ["AECC", "(Any 1) English Communication Skills / हिंदी भाषा और संप्रेषण", "BEGAE-182 / BHDAE-182", "4"],
                ["GE", "(Any 1) भारतीय दर्शन के मूल सिद्धांत / Governance: Issues and Challenges / Psychology and Media / Language and Linguistics / Gender Sensitization: Society and Culture / Philosophy of Religion", "BSKG-172 / BPAG-172 / BPCG-172 / BEGG-172 / BGDG-172 / BPYG-172", "6"],
            ]
        },
        {
            id: 3,
            title: "Semester 3",
            rows: [
                ["CC", "Intermediate Microeconomics I", "BECC-105", "6"],
                ["CC", "Intermediate Macroeconomics I", "BECC-106", "6"],
                ["CC", "Statistical Methods for Economics", "BECC-107", "6"],
                ["SEC", "(Any 1) Tourism Anthropology / Emotional Intelligence / Developing Emotional Competence / समाचार लेखन / Writing and Study Skills / English Language Teaching / Managing Human Resources / Life Skills / Computer Application in Business", "BANS-183 / BPCS-183 / BPCS-185 / BHDS-183 / BEGS-183 / BEGS-185 / BPCS-187 / BSSS-183 / BCOS-183", "4"],
                ["GE", "(Any 1) E-Governance / Psychology for Health and Well-being / Rethinking Development / Hindi Patrakarita / Academic Writing & Composition / आधार संस्कृत", "BPAG-173 / BPCG-173 / BSOG-173 / BHDG-173 / BEGG-173 / BSKG-173", "6"],
            ]
        },
        {
            id: 4,
            title: "Semester 4",
            rows: [
                ["CC", "Intermediate Microeconomics II", "BECC-108", "6"],
                ["CC", "Intermediate Macroeconomics II", "BECC-109", "6"],
                ["CC", "Introductory Econometrics", "BECC-110", "6"],
                ["SEC", "(Any 1) Logistics Management / Public Health and Epidemiology / Data Analysis / Managing Stress / School Psychology / Application of Social Psychology / Managing Human Resources / Business Communication / Creative Writing / Society through the Visual / Techniques of Ethnographic Filmmaking", "BPAS-184 / BANS-184 / BECS-184 / BPCS-186 / BPCS-184 / BPCS-188 / BPCS-187 / BEGS-186 / BEGG-174 / BSOS-185 / BSOS-184", "4"],
                ["GE", "(Any 1) E-Governance / Psychology and Media / Psychology of Gender / Sustainable Development / Creative Writing", "BPAG-174 / BPCG-174 / BPCG-176 / BPAG-174 / BEGG-174", "6"],
            ]
        },
        {
            id: 5,
            title: "Semester 5",
            rows: [
                ["CC", "Indian Economy – I", "BECC-111", "6"],
                ["CC", "Development Economics", "BECC-112", "6"],
                ["DSE-1", "(Any 1) Environmental Economics / Money and Banking", "BECE-141 / BECE-143", "6"],
                ["DSE-2", "(Any 1) Environmental Economics / Money and Banking", "BECE-141 / BECE-143", "6"],
            ]
        },
        {
            id: 6,
            title: "Semester 6",
            rows: [
                ["CC", "Indian Economy – II", "BECC-113", "6"],
                ["CC", "Applied Econometrics", "BECC-114", "6"],
                ["DSE-3", "(Any 1) Public Finance / International Economics", "BECE-142 / BECE-144", "6"],
                ["DSE-4", "(Any 1) Public Finance / International Economics", "BECE-142 / BECE-144", "6"],
            ]
        }
    ];

    return (
        <div className="space-y-3">
            {semesters.map((semester) => (
                <div
                    key={semester.id}
                    className="rounded-2xl border border-slate-200/80 bg-white/90 backdrop-blur-sm overflow-hidden dark:border-white/10 dark:bg-[#0b1220]/70"
                >
                    <button
                        onClick={() => setOpenSemester(openSemester === semester.id ? null : semester.id)}
                        className="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-slate-50 dark:hover:bg-white/5 transition-colors"
                    >
                        <div className="flex items-center gap-3">
                            <div className="grid h-10 w-10 place-items-center rounded-xl bg-blue-600 text-white font-black">
                                {semester.id}
                            </div>
                            <h3 className="text-lg font-black text-slate-900 dark:text-white">
                                {semester.title}
                            </h3>
                        </div>
                        <svg
                            className={`h-5 w-5 text-slate-400 transition-transform ${
                                openSemester === semester.id ? "rotate-180" : ""
                            }`}
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M7.4 8.6a1 1 0 0 1 1.4 0L12 11.8l3.2-3.2a1 1 0 1 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 0-1.4Z" />
                        </svg>
                    </button>

                    {openSemester === semester.id && (
                        <div className="px-6 pb-5 border-t border-slate-200/80 dark:border-white/10">
                            <div className="overflow-x-auto mt-4">
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
                                        {semester.rows.map((r, i) => (
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
                    )}
                </div>
            ))}
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
                    ? "bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-600/25"
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
        <div className="lg:hidden fixed bottom-0 inset-x-0 z-50 bg-white/95 backdrop-blur-lg border-t border-slate-200 dark:bg-[#070A12]/95 dark:border-white/10 shadow-[0_-10px_40px_-15px_rgba(0,0,0,0.3)]">
            <div className="flex gap-3 p-4">
                <a
                    href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Economics%202026"
                    className="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl py-3.5 text-center font-black shadow-lg"
                    target="_blank"
                    rel="noreferrer"
                >
                    <div className="flex items-center justify-center gap-2">
                        <WhatsAppIcon className="h-5 w-5" />
                        WhatsApp
                    </div>
                </a>
                <a
                    href="tel:+919355198199"
                    className="flex-1 border-2 border-slate-300 dark:border-white/20 rounded-xl py-3.5 text-center font-black"
                >
                    <div className="flex items-center justify-center gap-2">
                        <PhoneIcon className="h-5 w-5" />
                        Call
                    </div>
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
