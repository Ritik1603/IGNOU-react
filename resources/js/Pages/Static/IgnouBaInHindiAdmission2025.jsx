import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInHindiAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "Programme", value: "Bachelor of Arts in Hindi", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFHD", icon: <PenIcon className="h-5 w-5" /> },
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "School", value: "School of Humanities", icon: <HatIcon className="h-5 w-5" /> },
      { label: "Mode", value: "Distance learning", icon: <HomeStudyIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Total Credits", value: "148 (6 Sem)", icon: <StackIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "August 31, 2026", icon: <CalendarIcon className="h-5 w-5" /> },
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

  const semesterBlocks = useMemo(
    () => [
      {
        id: "sem1",
        title: "First Semester: History and Classical Poetry",
        intro:
          "What this means: You start with how Hindi literature developed over centuries and study early medieval poetry, especially Bhakti movement poets like Kabir, Surdas, and Tulsidas. Environmental studies provides broader awareness. You choose one elective based on your interests.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Sahitya ka Itihaas – I", "BHDC-101", "6"],
            ["CC", "Hindi Kavita – I (Aadi evam Bhakti Kavya)", "BHDC-102", "6"],
            ["AECC", "Environmental Studies", "BEVAE-181", "4"],
            [
              "GE\n(Any 1)",
              "1. भारतीय सौंदर्यम शास्त्र\n2. Indian Society: Images and Realities\n3. Media and Communication Skills\n4. General Psychology\n5. Disaster Management\n6. Applied Ethics\n7. Understanding Ambedkar\n8. National Cadet Corps",
              "1. BSKG-171\n2. BSOG-171\n3. BEGG-171\n4. BPCG-171\n5. BPAG-171\n6. BPYG-171\n7. BABG-171\n8. ONR-003",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem2",
        title: "Second Semester: More History and Riti Poetry",
        intro:
          "What this means: Continue literature history and study Riti period poetry with its distinct style and themes. Communication skills course strengthens your expression. Another elective broadens your knowledge.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Sahitya ka Itihaas – II", "BHDC-103", "6"],
            ["CC", "Hindi Kavita – II (Riti evam Nirgun Kavya)", "BHDC-104", "6"],
            [
              "AECC (Any 1)",
              "1. English Communication Skills\n2. हिंदी भाषा और संप्रेषण",
              "1.BEGAE-182\n2. BHDAE-182",
              "4",
            ],
            [
              "GE (Any 1)",
              "1. भारतीय दर्शन के मूल सिद्धांत\n2. Governance: Issues and Challenges\n3. Psychology and Media\n4. Language and Linguistics\n5. Gender Sensitization\n6. Philosophy of Religion",
              "1. BSKG-172\n2. BPAG-172\n3. BPCG-172\n4. BEGG-172\n5. BGDG-172\n6. BPYG-172",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem3",
        title: "Third Semester: Drama and Essays",
        intro:
          "What this means: Study Hindi plays and theatrical traditions, explore essay writing and other prose forms, understand linguistic structure of Hindi language. Skill course develops practical abilities.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Natak aur Rangmanch", "BHDC-105", "6"],
            ["CC", "Hindi Nibandh aur Anya Gadyavidhaayein", "BHDC-106", "6"],
            ["CC", "Bhasha Vigyan aur Hindi Bhasha", "BHDC-107", "6"],
            [
              "SEC\n(Any 1)",
              "1. समाचार लेखन\n2. Emotional Intelligence\n3. Writing and Study Skills\n4. English Language Teaching\n5. Data Analysis\n6. Academic Writing & Composition",
              "1. BHDS-183\n2. BPCS-183\n3. BEGS-183\n4. BEGS-185\n5. BECS-184\n6. BEGG-173",
              "4",
            ],
            [
              "GE\n(Any 1)",
              "1. Rethinking Development\n2. Psychology and Media\n3. Governance: Issues and Challenges\n4. Hindi Patrakarita\n5. E-Governance\n6. आधार संस्कृत",
              "1. BSOG-173\n2. BPCG-173\n3. BPAG-173\n4. BHDG-173\n5. BPAG-173\n6. BSKG-173",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem4",
        title: "Fourth Semester: Novels and Translation",
        intro:
          "What this means: Read and analyze major Hindi novels, continue drama studies, learn translation techniques between Hindi and English. These skills have direct professional applications.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Upanyas", "BHDC-108", "6"],
            ["CC", "Natak aur Rangmanch – II", "BHDC-109", "6"],
            ["CC", "Anuvaad: Siddhant aur Vyavahar", "BHDC-110", "6"],
            [
              "SEC\n(Any 1)",
              "1. Data Analysis\n2. School Psychology\n3. Creative Writing\n4. Business Communication\n5. Life Skills\n6. English Language Teaching\n7. Stress Management\n8. Tourism Anthropology",
              "1. BECS-184\n2. BPCS-184\n3. BEGG-174\n4. BEGS-186\n5. BSSS-183\n6. BEGS-185\n7. BPCS-186\n8. BANS-184",
              "4",
            ],
            [
              "GE\n(Any 1)",
              "1. Psychology and Media\n2. Gender Sensitization\n3. Sustainable Development\n4. Rethinking Development\n5. Hindi Patrakarita",
              "1. BPCG-174\n2. BGDG-172\n3. BPAG-174\n4. BSOG-173\n5. BHDG-173",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem5",
        title: "Fifth Semester: Criticism and Language-Society Relationship",
        intro:
          "What this means: Learn how to critically evaluate literature, understand relationship between language and social structures. Electives let you specialize in areas matching your career interests.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Aalochana aur Aalochana ke Siddhant", "BHDC-111", "6"],
            ["CC", "Bhasha aur Samaj", "BHDC-112", "6"],
            ["DSE-1 (Any 1)", "1. Prayojanmulak Hindi\n2. Hindi Sahitya aur Cinema", "1. BHDE-141\n2. BHDE-143", "6"],
            ["DSE-2 (Any 1)", "1. Prayojanmulak Hindi\n2. Hindi Sahitya aur Cinema", "1. BHDE-141\n2. BHDE-143", "6"],
          ],
        },
      },
      {
        id: "sem6",
        title: "Sixth Semester: Modern Poetry and Final Specializations",
        intro:
          "What this means: Complete drama studies, explore contemporary Hindi poetry after independence. Final electives let you focus on functional Hindi for professional use or Hindi cinema studies based on your career direction.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["CC", "Hindi Natak aur Rangmanch – III", "BHDC-113", "6"],
            ["CC", "Aadhunik Hindi Kavita – Swatantrayottar Kavita", "BHDC-114", "6"],
            ["DSE-3 (Any 1)", "1. Hindi Sahitya aur Cinema\n2. Prayojanmulak Hindi", "1. BHDE-143\n2. BHDE-141", "6"],
            ["DSE-4 (Any 1)", "1. Hindi Sahitya aur Cinema\n2. Prayojanmulak Hindi", "1. BHDE-143\n2. BHDE-141", "6"],
          ],
        },
      },
    ],
    []
  );

  return (
    <UserLayout>
      <Seo
        title="IGNOU BA in Hindi Admission 2026 | BAFHD (Distance Learning)"
        description="IGNOU BA in Hindi (BAFHD) 2026 admission details, syllabus overview, and career scope. Unnati Education guides you through every step — from 0 to 100."
        keywords="IGNOU BA Hindi Admission 2026, BAFHD, BA Hindi IGNOU, Hindi Literature Distance Learning, Unnati Education"
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
          <HeroHindi />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="Quick Facts You Should Know"
              subtitle="Before diving deeper, here's what you need to know immediately about this Hindi literature program."
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
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What You're Asking</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Here's Your Answer</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="Full Program Name" v="Bachelor of Arts in Hindi" />
                      <Row k="Program Code" v="BAFHD" />
                      <Row k="University" v="IGNOU - Indira Gandhi National Open University" />
                      <Row k="Offered By" v="School of Humanities" />
                      <Row k="Study Mode" v="Distance learning, study from home" />
                      <Row k="How Long" v="3 years minimum, 6 years maximum" />
                      <Row k="Total Credits" v="148 credits across six semesters" />
                      <Row k="Language" v="Hindi medium only" />
                      <Row k="Who Can Apply" v="Anyone who passed 12th standard from any stream" />
                      <Row k="Age Limit" v="No age limit at all" />
                      <Row k="When to Apply" v="January and July cycles annually" />
                      <Row k="Last Date" v="August 31, 2026" />
                      <Row k="Recognition" v="UGC approved, valid for government jobs" />
                      <Row k="Career Options" v="Teaching, Translation, Journalism, Civil Services, Content Writing, Publishing" />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="IGNOU BA in Hindi Admission 2026: Your Complete Guide to Building a Career in Hindi Literature and Language"
                  paragraphs={[
                    "Growing up speaking Hindi? Love reading Hindi literature? Dream of careers in Hindi journalism, teaching, translation, or government services? The IGNOU BA in Hindi Admission 2026 gives you comprehensive training in Hindi literature, language, communication, and cultural studies through flexible distance learning that fits around your work or family responsibilities.",
                    "This isn't just about grammar rules you learned in school. A BA in Hindi from IGNOU takes you deep into classical Hindi poetry, modern novels, drama, literary criticism, translation techniques, and practical applications in media and journalism. Whether you're a fresh 12th pass student, working professional needing Hindi expertise, or someone passionate about preserving and promoting Hindi language and culture, this three-year program prepares you for diverse careers.",
                    "Let me walk you through everything you need to know. I'll explain what makes BA in Hindi different, who should choose it, what you'll study semester by semester, how to apply, and what careers await you after graduation.",
                  ]}
                />
              </Reveal>

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Quick 3-step admission flow</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    Clean admission + consistent study wins. If you mess up documents or wait till the last day, you’re creating your own problems.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Confirm eligibility" desc="12th pass, any stream. No age limit." />
                    <StepMini n="02" title="Apply correctly" desc="Correct program code (BAFHD), correct docs, correct centre." />
                    <StepMini n="03" title="Write regularly" desc="Hindi improves through reading + writing, not “confidence”." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Hindi%20Admission%202026%20(BAFHD)" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" />
                      WhatsApp Guidance
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" />
                      Call Now
                    </CTA>
                  </div>
                </div>
              </Reveal>
            </div>
          </Section>

          {/* ABOUT */}
          <Section alt>
            <div id="about" />
            <SectionHeader
              eyebrow="About"
              title="Understanding What BA in Hindi Actually Means"
              subtitle="Let's start with basics because many students wonder what studying Hindi at degree level involves."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    BA in Hindi is not just advanced grammar lessons. It's about deeply understanding Hindi literature from different time periods - medieval Bhakti poetry by Kabir and Tulsidas, modern novels by Premchand, contemporary plays, essays, literary criticism, and how Hindi language evolved and functions in society today.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    You'll read and analyze great works of Hindi literature, understand different literary movements, learn translation between Hindi and English, study how language and society influence each other, explore Hindi cinema and its literary connections, and develop skills for practical applications in journalism, media, and professional communication.
                  </p>

                  <h3 className="mt-5 font-black text-slate-900 dark:text-white">What makes this degree valuable:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Cultural Connection: You develop deep appreciation for India's rich literary and cultural heritage expressed through Hindi." />
                    <CheckItem text="Professional Skills: Translation, journalism, content writing, teaching - all these careers need strong Hindi language expertise this program provides." />
                    <CheckItem text="Government Opportunities: Many central and state government positions prioritize Hindi proficiency, making this degree valuable for administrative careers." />
                    <CheckItem text="Academic Foundation: Prepares you excellently for MA in Hindi, research, and teaching careers at college level." />
                    <CheckItem text="Communication Excellence: You master expressing complex ideas clearly in Hindi, valuable in countless professional situations." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Reality check:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If you don’t enjoy reading Hindi texts and writing answers properly, you’ll hate this degree. It’s not “easy” — it’s consistent effort.
                    </p>
                  </div>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Good news:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If Hindi is your strength, this degree turns that strength into employable skills: teaching, translation, writing, and government Hindi work.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* FIT */}
          <Section>
            <div id="fit" />
            <SectionHeader
              eyebrow="Fit"
              title="Who Should Choose BA in Hindi?"
              subtitle="This program works best for specific types of students with particular interests and goals."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You should strongly consider BA in Hindi if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Hindi is your first language and you genuinely enjoy reading Hindi literature" />
                    <CheckItem text="You're considering teaching careers and want strong subject knowledge" />
                    <CheckItem text="Translation between Hindi and English interests you" />
                    <CheckItem text="Hindi journalism or content writing appeals to you" />
                    <CheckItem text="You're preparing for civil services in Hindi medium" />
                    <CheckItem text="Government jobs requiring Hindi proficiency interest you" />
                    <CheckItem text="You want to work preserving and promoting Hindi language and culture" />
                    <CheckItem text="Academic research in Hindi literature fascinates you" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You might prefer other options if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Hindi literature and reading bore you or feel like a chore" />
                    <CheckItem text="You're more comfortable in English than Hindi" />
                    <CheckItem text="Technical subjects like engineering or medicine interest you more" />
                    <CheckItem text="You want professional degrees like law or medicine" />
                    <CheckItem text="Your career goals don't involve language, literature, or communication" />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* COMPARISON */}
          <Section alt>
            <div id="comparison" />
            <SectionHeader
              eyebrow="Comparison"
              title="BA in Hindi vs Other BA Options: Making the Right Choice"
              subtitle="Many students wonder whether to choose Hindi or other BA subjects. Here's an honest comparison."
            />

            <Reveal>
              <Card>
                <div className="overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What Matters</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Hindi</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA English</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Political Science</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">BA Journalism</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <FiveRow a="Main Focus" b="Hindi literature, language, culture" c="English literature, writing" d="Politics, governance, administration" e="Media, reporting, communication" />
                      <FiveRow a="Reading Type" b="Hindi poetry, novels, plays, criticism" c="English literature texts" d="Political theory, documents" e="News, media studies" />
                      <FiveRow a="Career Fit" b="Hindi teaching, translation, government Hindi posts" c="English teaching, content writing, corporate communication" d="Civil services, administration" e="Journalism, media" />
                      <FiveRow a="Medium" b="Hindi only" c="English only" d="Usually English" e="Usually English" />
                      <FiveRow a="Government Jobs" b="Excellent (Hindi proficiency valued)" c="Good (English needed everywhere)" d="Excellent (optional subject)" e="Moderate" />
                    </tbody>
                  </table>
                </div>

                <div className="mt-6 grid gap-4 lg:grid-cols-2">
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose BA Hindi if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Hindi is your strength, you enjoy Hindi literature, want government jobs where Hindi matters, or plan Hindi teaching careers.
                    </p>
                  </div>

                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose others if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Choose BA English if: You're stronger in English, want corporate careers, or prefer English literature.
                      <br /><br />
                      Choose BA Political Science if: You're certain about civil services and want political science optional.
                      <br /><br />
                      Choose BA Journalism if: You specifically want media careers and prefer practical journalism training.
                    </p>
                  </div>
                </div>
              </Card>
            </Reveal>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="What You'll Study Each Semester"
              subtitle="The curriculum progresses logically from classical Hindi literature through modern works. Here's the complete semester-by-semester breakdown."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Send%20BAFHD%20Semester%20wise%20details%202026" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> Get Semester Details
                </CTA>
              }
            />

            <Reveal>
              <Accordion
                items={semesterBlocks.map((s) => ({
                  id: s.id,
                  title: s.title,
                  body: (
                    <div>
                      <p className="text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">
                        {s.intro}
                      </p>

                      <div className="mt-4 overflow-x-auto rounded-2xl border border-slate-200/80 dark:border-white/10">
                        <table className="w-full text-left text-sm">
                          <thead>
                            <tr className="border-b border-slate-200/80 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                              {s.table.headers.map((h) => (
                                <th key={h} className="py-3 px-4 font-black text-slate-700 dark:text-slate-200">
                                  {h}
                                </th>
                              ))}
                            </tr>
                          </thead>
                          <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                            {s.table.rows.map((r, i) => (
                              <tr key={i}>
                                <td className="py-3 px-4 font-semibold text-slate-900 dark:text-white whitespace-pre-line min-w-[140px]">
                                  {r[0]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[360px]">
                                  {r[1]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[180px]">
                                  {r[2]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[110px]">
                                  {r[3]}
                                </td>
                              </tr>
                            ))}
                          </tbody>
                        </table>
                      </div>
                    </div>
                  ),
                }))}
              />
            </Reveal>
          </Section>

          {/* SKILLS */}
          <Section alt>
            <div id="skills" />
            <SectionHeader
              eyebrow="Skills"
              title="Real Skills You'll Develop"
              subtitle="Beyond academic knowledge, this degree builds practical abilities that matter in actual jobs."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Superior Hindi Writing: Through constant essay writing, literary analysis, and creative assignments, you develop ability to express complex ideas clearly and beautifully in Hindi. This skill transfers to journalism, content writing, translation, and government communication." />
                    <CheckItem text="Critical Analysis: Studying literature teaches you to analyze texts deeply, understand multiple meanings, evaluate different interpretations, and form well-reasoned conclusions. These thinking skills apply beyond literature." />
                    <CheckItem text="Translation Expertise: The dedicated translation course plus constant practice moving between Hindi and English develops professional translation skills valued in government, publishing, and international organizations." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Cultural Understanding: Deep knowledge of Hindi literary traditions, historical movements, and cultural contexts gives you insights valuable in education, cultural organizations, and heritage preservation." />
                    <CheckItem text="Research Abilities: Finding information in Hindi sources, evaluating literary scholarship, citing properly, and building arguments based on textual evidence - all prepare you for research careers or further studies." />
                    <CheckItem text="Professional Communication: Understanding how language functions in society, learning functional Hindi for workplace situations, and mastering formal Hindi communication prepare you for administrative and government roles." />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* CAREERS */}
          <Section>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="Career Paths After Graduation"
              subtitle="Completing BA in Hindi opens multiple career directions. Let me be specific about real opportunities."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Career Path 1: Teaching and Academia</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    After BA Hindi, pursue B.Ed to become school teacher or MA Hindi to become college lecturer. Hindi teachers remain in high demand throughout India. School teachers earn from 25,000 to 40,000 rupees monthly depending on location and school type. College lecturers with UGC scale start from 57,700 rupees monthly.
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 2: Translation Services</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Government departments, publishing houses, international organizations, and businesses need Hindi-English translators. Your translation training prepares you well. Freelance translators earn per word or per project. Full-time positions offer 20,000 to 40,000 rupees monthly starting salaries.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 3: Hindi Journalism and Media</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Hindi newspapers, news channels, online portals, and magazines need reporters, editors, and content creators who write excellent Hindi. Your literary background gives you language skills others lack. Entry positions offer 20,000 to 35,000 rupees monthly.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 4: Government Services</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Many central and state government positions specifically require Hindi proficiency - administrative officers, translators, information officers, cultural departments. UPSC and state PSC exams in Hindi medium become accessible. Your Hindi expertise gives you advantages in these competitive exams.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Career Path 5: Content Writing and Digital Media</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Growing Hindi digital content needs writers who can create website content, blog posts, social media updates, and marketing materials in quality Hindi. Starting salaries range from 18,000 to 30,000 rupees monthly, growing quickly with experience.
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 6: Publishing and Editing</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Hindi publishing houses need editors, proofreaders, literary agents, and manuscript evaluators who deeply understand good Hindi writing. Your literature knowledge makes you valuable here. Starting positions offer 18,000 to 35,000 rupees monthly.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 7: Cultural Organizations</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      NGOs, cultural bodies, heritage organizations, and government cultural departments need people who can promote Hindi language and literature, organize literary events, manage cultural programs. Your expertise becomes your unique qualification.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* ELIGIBILITY + APPLY */}
          <Section alt>
            <div id="apply" />
            <SectionHeader
              eyebrow="Apply"
              title="Who Can Apply for BA in Hindi Admission? + How to Apply for BA in Hindi Admission 2026"
              subtitle="The eligibility criteria are simple and welcoming. The process is straightforward if you avoid common mistakes."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Who Can Apply for BA in Hindi Admission?</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    The eligibility criteria are simple and welcoming.
                  </p>

                  <p className="mt-4 font-black text-slate-900 dark:text-white">Basic Requirements:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="You must have passed 12th standard or equivalent from any recognized board in India" />
                    <CheckItem text="Your 12th stream doesn't matter - Science, Commerce, Arts, Vocational, all equally eligible" />
                    <CheckItem text="There's no minimum percentage requirement - whether you scored 50% or 90%, you can apply" />
                    <CheckItem text="There's no upper age limit - fresh students and mature learners both welcome" />
                    <CheckItem text="You should be comfortable reading and writing in Hindi" />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">This program particularly suits:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Students who completed 12th in Hindi medium" />
                    <CheckItem text="Anyone who loves Hindi literature and wants to study it deeply" />
                    <CheckItem text="Working professionals in government needing Hindi qualifications" />
                    <CheckItem text="People preparing for civil services in Hindi medium" />
                    <CheckItem text="Those interested in Hindi journalism or translation careers" />
                    <CheckItem text="Anyone wanting to contribute to Hindi language preservation and promotion" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">How to Apply for BA in Hindi Admission 2026</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Here's exactly how the admission process works step by step.
                  </p>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">When to Apply:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      IGNOU opens admissions twice annually. For 2026, January cycle typically opens in December 2025 and July cycle opens around June 2026. The final deadline for both cycles is August 31, 2026. Apply early to avoid last-minute technical issues.
                    </p>
                  </div>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">Complete Application Steps:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Visit the IGNOU Samarth admission portal at ignouadmission.samarth.edu.in when admissions open. Verify you're on the official IGNOU website." />
                    <CheckItem text="Create new registration by clicking Fresh Admission and providing your email and mobile number for OTP verification." />
                    <CheckItem text="Fill all personal details exactly as they appear on your 12th certificate - name spelling, date of birth, everything must match perfectly." />
                    <CheckItem text="Select Bachelor of Arts in Hindi from the program list. The program code is BAFHD. Double-check you're selecting the right program." />
                    <CheckItem text="Choose your preferred regional center and study center based on your location. You'll visit this center occasionally if needed." />
                    <CheckItem text="Upload clear scanned copies of all required documents meeting size and format specifications." />
                    <CheckItem text="Complete payment online using credit card, debit card, net banking, or UPI. Save your payment confirmation immediately." />
                    <CheckItem text="Download your enrollment confirmation. This enrollment number is your identity for everything IGNOU related. Keep it safe." />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">Documents You Need Ready:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Class 10 marksheet as clear PDF scan under 200 KB" />
                    <CheckItem text="Class 12 marksheet as clear PDF scan under 200 KB" />
                    <CheckItem text="Recent passport-size photograph with white background as JPEG under 50 KB" />
                    <CheckItem text="Your signature on blank white paper as JPEG under 30 KB" />
                    <CheckItem text="Aadhar card or any government photo ID as PDF under 200 KB" />
                    <CheckItem text="Category certificate if you're SC, ST, or OBC" />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Common Application Mistakes:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Don't upload files larger than specified limits. Don't use wrong file formats. Make sure name spelling matches exactly across all documents. Don't use colored photo backgrounds. Don't wait until the last date when systems get overloaded.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* SUPPORT */}
          <Section>
            <div id="support" />
            <SectionHeader
              eyebrow="Support"
              title="Getting Complete Support from Unnati Education"
              subtitle="Navigating IGNOU admissions and successfully completing distance education requires proper guidance throughout your journey."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Navigating IGNOU admissions and successfully completing distance education requires proper guidance throughout your journey. That's where Unnati Education helps you every step of the way.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We guide you through the entire admission process - checking your eligibility, filling the online form correctly, uploading documents properly, and ensuring your application goes through smoothly before the August 31, 2026 deadline.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We help you understand the semester system, credit requirements, and elective selection so you make informed decisions matching your interests and career goals.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We provide support with assignment preparation in Hindi, exam strategies, and study planning throughout your three-year journey. Distance learning requires self-discipline, and having structured guidance makes tremendous difference.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We send timely reminders about important dates - assignment deadlines, exam form submissions, re-registration periods - so you never miss anything crucial that could delay your progress.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We offer doubt-clearing support when you struggle with difficult literary concepts or critical theories. Having someone to explain confusing topics helps you understand better and perform well.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Thousands of IGNOU students have successfully completed their degrees with our support. We understand the unique challenges of distance learning and provide practical solutions that actually work. Connect with Unnati Education for comprehensive admission guidance and ongoing academic support throughout your BA in Hindi journey.
                  </p>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFHD%20Admission%202026%20Support" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" />
                      Get Support
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" />
                      Call
                    </CTA>
                  </div>

                  <p className="mt-4 text-sm font-black text-slate-700 dark:text-slate-200">Call/WhatsApp: 9355198199</p>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Additional Skills That Boost Your Career</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    While completing BA in Hindi, consider these short additions that enhance employability:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Translation Certifications: Short courses in professional translation add specialized credentials beyond your degree translation course." />
                    <CheckItem text="Journalism Diplomas: Six-month to one-year journalism courses give practical media skills alongside your literature degree." />
                    <CheckItem text="Digital Content Creation: Understanding SEO writing, content marketing, and social media communication in Hindi makes you more valuable for digital content careers." />
                    <CheckItem text="Computer Skills: Basic typing in Devanagari script, using Hindi language software, and digital publishing tools increase your professional utility." />
                    <CheckItem text="English Proficiency: While your degree is in Hindi, good English skills help in translation work and broaden career options significantly." />
                  </ul>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    These additions make your BA Hindi more practical and market-ready without requiring years of additional study.
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* FAQs */}
          <Section alt>
            <div id="faqs" />
            <SectionHeader
              eyebrow="FAQs"
              title="Common Questions Students Ask"
              subtitle="Practical questions, practical answers."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I complete BA in Hindi while working full-time?",
                      a: "Yes, absolutely. Distance learning exists specifically for working people. You study from materials whenever you have time. There are no mandatory daily classes. Exams happen twice yearly. Many working professionals, including government employees, successfully complete this degree while managing full-time jobs.",
                    },
                    {
                      q: "Is IGNOU BA in Hindi recognized for government jobs and teaching?",
                      a: "Yes, completely. IGNOU is a central university with full UGC approval. The BA Hindi degree is valid for all government jobs requiring graduation, teaching positions with B.Ed, MA admissions, and civil services exams. It holds equal value to regular university degrees.",
                    },
                    {
                      q: "Do I need to have studied Hindi literature in 12th standard?",
                      a: "No. While having Hindi in 12th helps, it's not mandatory. Any stream works. The program starts from basics and builds progressively. Your interest in Hindi literature matters more than your 12th subjects.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "What if my Hindi writing skills aren't very strong?",
                      a: "The program itself strengthens your Hindi writing through constant practice. You improve naturally by reading extensively and writing regularly throughout three years. Start with simpler assignments and gradually tackle complex ones. Most students find their Hindi improves dramatically during the program.",
                    },
                    {
                      q: "Can I pursue MA in Hindi after IGNOU BA?",
                      a: "Yes, absolutely. You can pursue MA in Hindi from any Indian university after IGNOU BA. The degree is recognized everywhere. Many students do MA from regular universities after distance BA. Your IGNOU BA Hindi qualifies you equally for postgraduate studies, competitive exams, or employment.",
                    },
                    {
                      q: "Your Path Forward with BA in Hindi Admission 2026",
                      a:
                        "The IGNOU BA in Hindi Admission 2026 offers genuine opportunity if your interests align with Hindi literature, language, and culture. The comprehensive curriculum covering classical to contemporary Hindi literature, flexible learning system, UGC recognition, and diverse career options make it valuable for students passionate about Hindi.\n\n" +
                        "But understand clearly that studying literature requires consistent reading and writing effort in Hindi. You must genuinely enjoy Hindi literature, not find it boring. You need self-discipline for distance learning without daily supervision. You should be comfortable with deep literary analysis rather than wanting purely technical education.\n\n" +
                        "If you love Hindi, want careers in Hindi teaching, translation, journalism, government services, or cultural work, can maintain study discipline, and dream of contributing to Hindi language and literature, then the BA in Hindi Admission at IGNOU provides an excellent path forward.",
                    },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* CONTACT */}
          <Section>
            <div id="contact" />
            <SectionHeader
              eyebrow="Contact"
              title="Get Started — Contact Unnati"
              subtitle="Send your details and we’ll guide you end-to-end."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>BAFHD</b>. We’ll help with admission,
                  documents, electives, assignments, and exam guidance.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFHD%20Admission%202026" tone="primary">
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

            <div className="h-10" />
          </Section>

          {/* META (AT THE END) */}
          <Section alt>
            <SectionHeader
              eyebrow="Meta"
              title="Introduction to BAFHD: IGNOU Bachelor of Arts Hindi Admission 2026"
              subtitle="Meta details placed at the end as requested."
            />
            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <div className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Meta Title</div>
                  <div className="mt-2 font-black text-slate-900 dark:text-white">
                    IGNOU BA in Hindi Admission 2026 | Syllabus & Career Scope
                  </div>
                </Card>
              </Reveal>
              <Reveal>
                <Card>
                  <div className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Meta Description</div>
                  <div className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Explore IGNOU BA in Hindi (BAFHD) 2026 admission details, syllabus overview, and career scope. Unnati Education guides you through every step — from 0 to 100.
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          <div className="h-20" />
        </div>

        <MobileStickyCTA />
      </main>
    </UserLayout>
  );
}

/* ---------------- HERO ---------------- */

function HeroHindi() {
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
        <div className="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-blue-500/15 blur-3xl" />
        <div className="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-indigo-500/10 blur-3xl" />

        <div className="relative max-w-3xl">
          <div className="flex flex-wrap gap-2 mb-4">
            <Pill>IGNOU • ODL</Pill>
            <Pill>Updated 2026</Pill>
            <Pill tone="blue">UGC Approved</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in Hindi Admission 2026
            <span className="block text-blue-700 dark:text-blue-300">BAFHD — Complete Guide</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAFHD</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              Growing up speaking Hindi? Love reading Hindi literature? Dream of careers in Hindi journalism, teaching, translation, or government services? The IGNOU BA in Hindi Admission 2026 gives you comprehensive training in Hindi literature, language, communication, and cultural studies through flexible distance learning that fits around your work or family responsibilities.
            </p>
            <p>
              This isn't just about grammar rules you learned in school. A BA in Hindi from IGNOU takes you deep into classical Hindi poetry, modern novels, drama, literary criticism, translation techniques, and practical applications in media and journalism. Whether you're a fresh 12th pass student, working professional needing Hindi expertise, or someone passionate about preserving and promoting Hindi language and culture, this three-year program prepares you for diverse careers.
            </p>
            <p>
              Let me walk you through everything you need to know. I'll explain what makes BA in Hindi different, who should choose it, what you'll study semester by semester, how to apply, and what careers await you after graduation.
            </p>
          </div>

          <div className="mt-5 flex flex-wrap gap-2">
            <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
              <StackIcon className="h-4 w-4" /> 148 Credits • 6 Semesters
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <ClockIcon className="h-4 w-4" /> Duration: 3–6 Years
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <HomeStudyIcon className="h-4 w-4" /> Distance Learning
            </span>
          </div>

          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Hindi%20Admission%202026%20(BAFHD)" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAFHD 2026”</b> on WhatsApp for faster response.
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
    <span className={["inline-flex items-center", "rounded-full border", "px-3 py-1", "text-xs font-black", "transition", styles].join(" ")}>
      {children}
    </span>
  );
}

/* ---------------- SECTION ---------------- */

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
        <p className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">{eyebrow}</p>
        <h2 className="mt-2 text-2xl font-black text-slate-900 dark:text-white">{title}</h2>
        <p className="mt-1 text-slate-600 dark:text-slate-300">{subtitle}</p>
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
          <p className="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">{label}</p>
          <p className="font-black text-slate-900 dark:text-white">{value}</p>
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
      <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white">{k}</td>
      <td className="py-3 text-slate-600 dark:text-slate-300">{v}</td>
    </tr>
  );
}

function FiveRow({ a, b, c, d, e }) {
  return (
    <tr>
      <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white whitespace-nowrap">{a}</td>
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[240px]">{b}</td>
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[200px]">{c}</td>
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[220px]">{d}</td>
      <td className="py-3 text-slate-600 dark:text-slate-300 min-w-[220px]">{e}</td>
    </tr>
  );
}

function ContentCard({ title, paragraphs = [], bullets = [], footer }) {
  return (
    <Card>
      <h3 className="font-black text-slate-900 dark:text-white">{title}</h3>
      {paragraphs.map((p, i) => (
        <p key={i} className={`text-slate-600 dark:text-slate-300 leading-relaxed ${i === 0 ? "mt-2" : "mt-3"}`}>
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
      {footer ? <p className="mt-4 text-slate-600 dark:text-slate-300">{footer}</p> : null}
    </Card>
  );
}

function CheckItem({ text, bold }) {
  return (
    <li className="flex gap-3">
      <span className="mt-[2px] grid h-6 w-6 place-items-center rounded-lg bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
        <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
          <path d="M9.2 16.6 4.9 12.3a1 1 0 0 1 1.4-1.4l2.9 2.9 8.5-8.5a1 1 0 0 1 1.4 1.4l-9.9 9.9Z" />
        </svg>
      </span>
      <span className="text-slate-600 dark:text-slate-300 whitespace-pre-line">
        {bold ? <b className="text-slate-900 dark:text-white">{bold} </b> : null}
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
          <div className="font-black text-slate-900 dark:text-white">{title}</div>
          <div className="mt-1 text-slate-600 dark:text-slate-300">{desc}</div>
        </div>
      </div>
    </div>
  );
}

/* ---------------- ACCORDION ---------------- */

function Accordion({ items = [] }) {
  const [openId, setOpenId] = useState(items?.[0]?.id || "");

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-2 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-2">
        {items.map((it) => {
          const active = openId === it.id;
          return (
            <div key={it.id} className="rounded-2xl border border-slate-200/80 dark:border-white/10 overflow-hidden">
              <button
                type="button"
                onClick={() => setOpenId(active ? "" : it.id)}
                className="w-full px-4 py-4 bg-slate-50 dark:bg-white/5 text-left"
              >
                <div className="flex items-start justify-between gap-4">
                  <div className="font-black text-slate-900 dark:text-white">{it.title}</div>
                  <span
                    className={[
                      "mt-[2px] grid h-7 w-7 place-items-center rounded-lg",
                      "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900",
                      "shrink-0",
                    ].join(" ")}
                    aria-hidden="true"
                  >
                    <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                      <path d={active ? "M6 12h12v2H6z" : "M11 6h2v5h5v2h-5v5h-2v-5H6v-2h5z"} />
                    </svg>
                  </span>
                </div>
              </button>

              {active ? (
                <div className="px-4 pb-5 pt-4 bg-white dark:bg-[#0b1220]/40">
                  {it.body}
                </div>
              ) : null}
            </div>
          );
        })}
      </div>
    </div>
  );
}

/* ---------------- FAQ ---------------- */

function FaqCard({ items = [] }) {
  const [open, setOpen] = useState(0);

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-3">
        {items.map((it, idx) => {
          const active = open === idx;
          return (
            <button key={idx} type="button" onClick={() => setOpen(active ? -1 : idx)} className="w-full text-left">
              <div
                className={[
                  "rounded-2xl border",
                  "border-slate-200/80 dark:border-white/10",
                  "bg-slate-50 dark:bg-white/5",
                  "px-4 py-4",
                  "transition",
                  active ? "shadow-sm" : "",
                ].join(" ")}
              >
                <div className="flex items-start justify-between gap-4">
                  <div className="font-black text-slate-900 dark:text-white whitespace-pre-line">{it.q}</div>
                  <span
                    className={[
                      "mt-[2px] grid h-7 w-7 place-items-center rounded-lg",
                      "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900",
                      "shrink-0",
                    ].join(" ")}
                    aria-hidden="true"
                  >
                    <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4">
                      <path d={active ? "M6 12h12v2H6z" : "M11 6h2v5h5v2h-5v5h-2v-5H6v-2h5z"} />
                    </svg>
                  </span>
                </div>
                {active ? (
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">{it.a}</p>
                ) : null}
              </div>
            </button>
          );
        })}
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
    <div className={`grid h-11 w-11 place-items-center rounded-xl ${tone === "blue" ? "bg-blue-600 text-white" : "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900"}`}>
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFHD%20Admission%202026"
          className="flex-1 bg-blue-600 text-white rounded-xl py-3 text-center font-black"
          target="_blank"
          rel="noreferrer"
        >
          WhatsApp
        </a>
        <a href="tel:+919355198199" className="flex-1 border rounded-xl py-3 text-center font-black dark:border-white/20">
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

function PenIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M14.7 4.2 20 9.5l-9.9 9.9H4.8v-5.3l9.9-9.9ZM6.8 17.4h2.5l7.9-7.9-2.5-2.5-7.9 7.9v2.5Z" />
    </svg>
  );
}

function HomeStudyIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 3 2.8 10.3a1 1 0 0 0 1.2 1.6L5 11.1V20a1 1 0 0 0 1 1h4v-6h4v6h4a1 1 0 0 0 1-1v-8.9l1 .8a1 1 0 1 0 1.2-1.6L12 3Z" />
    </svg>
  );
}

function StackIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 2.8 2.8 7.6 12 12.4l9.2-4.8L12 2.8Zm-9.2 7.9V14L12 18.8 21.2 14v-3.3L12 15.5 2.8 10.7Zm0 5.2V19.2L12 24l9.2-4.8v-3.3L12 20.7 2.8 15.9Z" />
    </svg>
  );
}

function CalendarIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M7 2.8a1 1 0 0 1 1 1V5h8V3.8a1 1 0 1 1 2 0V5h1a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V3.8a1 1 0 0 1 1-1Zm13 8H4v9a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-9Z" />
    </svg>
  );
}

function BookIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M6 3h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm0 2v14h10V5H6Zm14 1h1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-1V6Z" />
    </svg>
  );
}

function HatIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 3 2 8l10 5 9-4.5V15h2V8L12 3Zm-6 9v4.5c0 1.7 3 3.5 6 3.5s6-1.8 6-3.5V12l-6 3-6-3Z" />
    </svg>
  );
}
