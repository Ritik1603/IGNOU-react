import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInEnglishAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "Programme", value: "Bachelor of Arts in English", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAEGH", icon: <PenIcon className="h-5 w-5" /> },
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Mode", value: "Distance Learning", icon: <HomeStudyIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Total Credits", value: "148 (6 Sem)", icon: <StackIcon className="h-5 w-5" /> },
      { label: "Language", value: "English medium only", icon: <LanguageIcon className="h-5 w-5" /> },
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

  return (
    <UserLayout>
      <Seo
        title="IGNOU BA in English Admission 2026 | BAEGH (Distance Learning)"
        description="IGNOU BA in English Admission 2026 (BAEGH): quick facts, what BA English means, who should choose it, comparisons, skills, careers, eligibility, how to apply, and Unnati Education support."
        keywords="IGNOU BA English Admission 2026, BAEGH, BA English IGNOU, English Literature Distance Learning, Unnati Education"
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
          <HeroEnglish />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="Quick Facts You Should Know"
              subtitle="Before diving deeper, here's what you need to know immediately about this English literature program."
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
                      <Row k="Full Program Name" v="Bachelor of Arts in English" />
                      <Row k="Program Code" v="BAEGH" />
                      <Row k="University" v="IGNOU - Indira Gandhi National Open University" />
                      <Row k="Study Mode" v="Distance learning, study from home" />
                      <Row k="How Long" v="3 years minimum, 6 years maximum" />
                      <Row k="Total Credits" v="148 credits across six semesters" />
                      <Row k="Language" v="English medium only" />
                      <Row k="Who Can Apply" v="Anyone who passed 12th standard from any stream" />
                      <Row k="Age Limit" v="No age limit at all" />
                      <Row k="When to Apply" v="January and July cycles annually" />
                      <Row k="Last Date" v="August 31, 2026" />
                      <Row k="Recognition" v="UGC, DEB, and AIU approved" />
                      <Row k="Career Options" v="Teaching, Journalism, Content Writing, Publishing, Civil Services, Corporate Communication" />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="IGNOU BA in English Admission 2026: Your Complete Guide to Building a Career in Literature and Communication"
                  paragraphs={[
                    "Love reading novels? Get lost in poetry? Enjoy analyzing what writers really mean? If literature fascinates you and you dream of careers involving reading, writing, or teaching, then the IGNOU BA in English Admission 2026 might be exactly what you're looking for.",
                    "This isn't just about reading books for fun anymore. A BA in English from IGNOU gives you serious training in British, American, Indian, and postcolonial literature while developing your critical thinking, communication excellence, and creative writing abilities. And the best part? You study at your own pace through distance learning, making it perfect whether you're a fresh 12th pass student, working professional, or someone returning to education after a gap.",
                    "Let me walk you through everything you need to know about this program. I'll explain who should choose it, what you'll actually study semester by semester, how to apply, and what careers await you after graduation.",
                  ]}
                />
              </Reveal>

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Quick 3-step admission flow</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    Distance learning works only if you handle basics cleanly: correct form, correct docs, correct centre.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Confirm eligibility" desc="12th pass, any stream. No age limit." />
                    <StepMini n="02" title="Apply online" desc="Use official portal, upload correct file sizes/formats." />
                    <StepMini n="03" title="Stay consistent" desc="Reading + writing regularly matters more than “motivation”." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20English%20Admission%202026" tone="primary">
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
              title="Understanding What BA in English Actually Means"
              subtitle="Let's start with basics because many students get confused about what studying English literature actually involves."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    BA in English is not about learning English grammar like you did in school. It's about reading and analyzing great works of literature from different time periods and cultures. You'll read Shakespeare's plays, Jane Austen's novels, American poets like Robert Frost, Indian writers like Rabindranath Tagore, African authors like Chinua Achebe, and contemporary voices from around the world.
                  </p>

                  <h3 className="mt-5 font-black text-slate-900 dark:text-white">But it's more than just reading. You learn to:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Analyze deeply: Why did the author choose these words? What does this symbol represent? How does this novel reflect its historical period?" />
                    <CheckItem text="Think critically: Question assumptions, evaluate different interpretations, form well-reasoned arguments about what literature means." />
                    <CheckItem text="Write clearly: Express complex ideas in organized, persuasive ways through essays, analyses, and creative pieces." />
                    <CheckItem text="Understand cultures: Literature shows you how different societies think, what they value, how they've changed over time." />
                    <CheckItem text="Communicate effectively: The reading and writing you do develops communication skills valuable in almost every profession." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Reality check:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If reading and writing feel like a chore, you will struggle. This degree rewards people who can sit with texts, think, and write consistently.
                    </p>
                  </div>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Good news:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If you genuinely enjoy literature and want better communication skills, this degree builds something useful across many careers.
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
              title="Who Should Choose BA in English?"
              subtitle="This program works best for specific types of students with particular interests and career goals."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You should strongly consider BA in English if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="You genuinely enjoy reading and find literature interesting, not boring" />
                    <CheckItem text="You're good at expressing ideas in writing and want to improve further" />
                    <CheckItem text="You're considering teaching careers and need strong subject knowledge" />
                    <CheckItem text="Content writing, journalism, or publishing interests you" />
                    <CheckItem text="You're preparing for civil services and want essay writing advantage" />
                    <CheckItem text="Communication skills matter more to you than technical or numerical skills" />
                    <CheckItem text="You want careers involving reading, writing, editing, or analyzing texts" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You might prefer other options if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Literature and reading bore you or feel like a chore" />
                    <CheckItem text="You're more interested in technical subjects like engineering or medicine" />
                    <CheckItem text="You want specialized professional training like law or accounting" />
                    <CheckItem text="Numbers and calculations interest you more than words and ideas" />
                    <CheckItem text="You need immediate job placement right after graduation without further training" />
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
              title="BA in English vs Other BA Options: Making the Right Choice"
              subtitle="Many students wonder whether to choose English or other BA subjects. Here's an honest comparison."
            />

            <Reveal>
              <Card>
                <div className="overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What Matters</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA English</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Journalism</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Political Science</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">BA Psychology</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <FiveRow a="Main Focus" b="Literature, language, critical analysis" c="Media, reporting, news writing" d="Politics, governance, administration" e="Human behavior, mental processes" />
                      <FiveRow a="Reading Type" b="Novels, poetry, plays, literary criticism" c="News, articles, media studies" d="Political theory, government documents" e="Research papers, case studies" />
                      <FiveRow a="Writing Style" b="Essays, literary analysis, creative writing" c="News reports, articles, feature stories" d="Analytical papers, policy analysis" e="Research reports, case notes" />
                      <FiveRow a="Best Career Fit" b="Teaching, content writing, publishing, editing" c="Journalism, media, PR" d="Civil services, administration, politics" e="Counseling, HR, research" />
                      <FiveRow a="UPSC Advantage" b="Strong (essay writing, comprehension)" c="Moderate" d="Excellent (optional subject)" e="Moderate" />
                      <FiveRow a="Creativity" b="High (interpretation, creative expression)" c="Moderate (feature writing)" d="Low (analytical focus)" e="Low (scientific approach)" />
                    </tbody>
                  </table>
                </div>

                <div className="mt-6 grid gap-4 lg:grid-cols-2">
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose BA English if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Literature genuinely interests you, you're strong in writing, want teaching careers, or need superior communication skills for any profession.
                    </p>
                  </div>

                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose others if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Choose BA Journalism if: You specifically want media careers and prefer practical journalism training over literary study.
                      <br /><br />
                      Choose BA Political Science if: You're certain about civil services or political careers.
                      <br /><br />
                      Choose BA Psychology if: Human behavior and counseling interest you more than literature.
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
              subtitle="The curriculum progresses logically from ancient classical literature to modern contemporary voices. Here's the complete breakdown semester by semester."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Send%20BAEGH%20Prospectus%20and%20Semester%20details%202026" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> Get Semester Details
                </CTA>
              }
            />

            <Reveal>
              <Card>
                <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                  <div className="font-black text-slate-900 dark:text-white">Prospectus</div>
                </div>
              </Card>
            </Reveal>
          </Section>

          {/* SKILLS */}
          <Section alt>
            <div id="skills" />
            <SectionHeader
              eyebrow="Skills"
              title="Real Skills You'll Build"
              subtitle="Beyond academic knowledge, this degree develops practical abilities that matter in actual jobs."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Superior Writing Ability: Through constant essay writing, literary analysis, and critical papers, you develop ability to express complex ideas clearly, organize thoughts logically, and write persuasively. This skill transfers to any profession requiring written communication." />
                    <CheckItem text="Critical Thinking: Analyzing literature teaches you to look beneath surfaces, question assumptions, consider multiple interpretations, and form well-reasoned conclusions. These thinking skills apply far beyond literature." />
                    <CheckItem text="Deep Reading Comprehension: You learn to read carefully, understand subtle meanings, grasp author intentions, and extract key ideas from complex texts. This helps in any job requiring processing written information." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Cultural Awareness: Studying literature from different time periods and cultures gives you understanding of diverse perspectives, historical contexts, and how societies think differently. This cultural literacy becomes increasingly valuable in globalized workplaces." />
                    <CheckItem text="Research Skills: Finding information, evaluating sources, citing properly, and building arguments based on evidence - all developed through literary research - apply to countless professional situations." />
                    <CheckItem text="Articulate Expression: Reading great writers improves your own expression. You learn effective vocabulary, sentence structures, and rhetorical techniques that make your own communication more powerful." />
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
              subtitle="Completing BA in English opens multiple career directions. Let me be specific about real opportunities."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Career Path 1: Teaching and Academia</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    After BA English, pursue B.Ed to become school teacher or MA English to become college lecturer. Teaching English literature, language, or communication skills provides stable, respected careers. Starting salaries for school teachers range from 25,000 to 40,000 rupees monthly depending on location and school type. College lecturers with UGC scale earn from 57,700 rupees monthly upwards.
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 2: Content Writing and Digital Communication</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Companies need people who can write website content, blog posts, social media updates, product descriptions, and marketing materials. Your literature background gives you writing skills and creativity others lack. Starting salaries range from 20,000 to 35,000 rupees monthly, growing quickly with experience.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 3: Journalism and Media</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Print newspapers, online news portals, magazines, and broadcast media need reporters, feature writers, editors, and correspondents. Your analytical skills and writing ability prepare you well. Consider short journalism courses alongside your degree. Entry salaries range from 20,000 to 35,000 rupees monthly.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Career Path 4: Publishing and Editing</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Publishing houses need editors, proofreaders, literary agents, and manuscript evaluators who understand good writing. Your literature knowledge makes you valuable here. Starting positions offer 18,000 to 30,000 rupees monthly, growing to 50,000 plus with experience.
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 5: Civil Services</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      UPSC and State PSC exams require strong writing skills for essay papers and good comprehension for reading passages. BA English graduates often excel here. Your subject knowledge helps in optional subjects, essay papers, and interview rounds where articulate expression matters.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 6: Corporate Communication and PR</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Large companies need communication officers, corporate writers, public relations specialists, and internal communication managers. Your ability to craft clear, persuasive messages becomes valuable. Metro jobs offer 25,000 to 45,000 rupees monthly starting salaries.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Career Path 7: Translation and Interpretation</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If you know another language well alongside English, translation work offers opportunities in publishing, government, international organizations, and localization companies.
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
              title="Who Can Apply for BA in English Admission? + How to Apply for BA in English Admission 2026"
              subtitle="The eligibility criteria are simple and welcoming to everyone. The process is straightforward if you avoid common mistakes."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Who Can Apply for BA in English Admission?</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    The eligibility criteria are simple and welcoming to everyone.
                  </p>

                  <p className="mt-4 font-black text-slate-900 dark:text-white">Basic Requirements:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="You must have passed 12th standard or equivalent from any recognized board in India" />
                    <CheckItem text="Your 12th stream doesn't matter - Science, Commerce, Arts, Vocational, all equally eligible" />
                    <CheckItem text="There's no minimum percentage requirement - whether you scored 50% or 90%, you can apply" />
                    <CheckItem text="There's no upper age limit - fresh students and mature learners both welcome" />
                    <CheckItem text="You should be comfortable reading and writing in English" />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Special Pathway for Those Without 12th:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If you don't have 12th standard qualification, IGNOU offers a Bridge Program called Bachelor Preparatory Program. This 6-month certificate course covers language skills, basic humanities subjects, and communication fundamentals. After completing BPP successfully, you become eligible for BA English admission. BPP runs twice yearly and makes higher education accessible to those who couldn't complete traditional schooling.
                    </p>
                  </div>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">This program particularly suits:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Fresh 12th pass students who loved English literature in school" />
                    <CheckItem text="Working professionals wanting to complete graduation while keeping their jobs" />
                    <CheckItem text="Homemakers who have time now and want to pursue education" />
                    <CheckItem text="People who took career breaks and now want to return to studies" />
                    <CheckItem text="Anyone genuinely interested in literature, reading, and writing" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">How to Apply for BA in English Admission 2026</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Here's exactly how the admission process works step by step.
                  </p>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">When to Apply:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      IGNOU opens admissions twice annually. For 2026, January cycle typically opens in December 2025 and July cycle opens around June 2026. The final deadline for both cycles is August 31, 2026. Don't wait until the last week because systems get overloaded.
                    </p>
                  </div>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">Complete Application Steps:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Visit the IGNOU Samarth admission portal at ignouadmission.samarth.edu.in when admissions open. Make absolutely sure you're on the official IGNOU website, not fake lookalike sites." />
                    <CheckItem text="Create new registration by clicking Fresh Admission and providing your email and mobile number. They'll send OTP to both for verification." />
                    <CheckItem text="Fill all personal details exactly as they appear on your 12th certificate. Your name spelling, date of birth, everything must match perfectly to avoid problems during document verification." />
                    <CheckItem text="Select Bachelor of Arts in English from the program list. The program code is BAEGH. Double-check you're selecting the right program." />
                    <CheckItem text="Choose your preferred regional center and study center based on your location. You'll visit this center occasionally for counseling if needed, so proximity helps." />
                    <CheckItem text="Upload clear scanned copies of required documents. Each must meet size limits and format requirements specified on the portal." />
                    <CheckItem text="Complete payment online using credit card, debit card, net banking, or UPI. Save your payment confirmation immediately." />
                    <CheckItem text="Download your enrollment confirmation after successful payment. This enrollment number is your identity for everything IGNOU related. Keep it safe forever." />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">Documents You Need Ready:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Class 10 marksheet as clear PDF scan under 200 KB" />
                    <CheckItem text="Class 12 marksheet as clear PDF scan under 200 KB" />
                    <CheckItem text="Recent passport-size photograph with white background as JPEG under 50 KB" />
                    <CheckItem text="Your signature on blank white paper as JPEG under 30 KB" />
                    <CheckItem text="Aadhar card or any government photo ID as PDF under 200 KB" />
                    <CheckItem text="Category certificate if you're SC, ST, or OBC" />
                    <CheckItem text="BPP certificate if you're applying through Bachelor Preparatory Program route" />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Common Application Mistakes:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Don't upload files larger than specified limits - the system automatically rejects them. Don't use wrong file formats - only PDF for documents and JPEG for photos work. Make sure your name spelling matches exactly across all documents. Don't use colored backgrounds for photos - white background is mandatory. Don't wait until the last date when systems face heavy traffic.
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
              subtitle="Navigating IGNOU admissions and successfully completing distance education requires proper guidance every step of the way."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Navigating IGNOU admissions and successfully completing distance education requires proper guidance every step of the way. That's where Unnati Education helps you throughout your journey.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We guide you through the entire admission process - checking your eligibility, filling the online form correctly, uploading documents properly, and ensuring your application goes through smoothly before the August 31, 2026 deadline.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We help you understand the semester system, credit requirements, and subject selection so you make informed decisions matching your interests and career goals.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We provide support with assignment preparation, exam strategies, and study planning throughout your three-year journey. Distance learning requires self-discipline, and having structured guidance makes tremendous difference.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We send timely reminders about important dates - assignment deadlines, exam form submissions, re-registration periods - so you never miss anything crucial that could delay your progress.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We offer doubt-clearing support when you struggle with difficult literature concepts or literary theories. Having someone to explain confusing topics helps you understand better and perform well in exams.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Thousands of IGNOU students have successfully completed their degrees with our support. We understand the unique challenges of distance learning and provide practical solutions that actually work. Whether you need help with admission paperwork, assignment guidance, exam preparation, or just someone to answer your questions, Unnati Education supports you from admission through graduation.
                  </p>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAEGH%20Admission%202026%20Support" tone="primary">
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
                  <h3 className="font-black text-slate-900 dark:text-white">Additional Certifications That Boost Your Career</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    While completing BA in English, consider these short-term courses that enhance your employability significantly:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Creative Writing Courses: Short certifications in creative writing, fiction writing, or poetry writing add specialized skills beyond academic literature study." />
                    <CheckItem text="Journalism and Mass Communication Diplomas: Six-month to one-year journalism courses give you practical media skills alongside your literature degree." />
                    <CheckItem text="Digital Marketing Basics: Understanding SEO writing, content marketing, and social media communication makes you more valuable for content writing careers." />
                    <CheckItem text="Foreign Language Learning: Knowing French, Spanish, German, or any foreign language creates translation opportunities and international career options." />
                    <CheckItem text="Teaching Certifications: Short teaching methodology courses or TEFL certificates prepare you better for teaching careers alongside your degree." />
                  </ul>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    These additions make your BA English more practical and market-ready without requiring years of additional study.
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
                      q: "Can I really complete BA in English while working full-time?",
                      a: "Yes, absolutely. Distance learning exists specifically for working people. You study from materials whenever you have time - early mornings, late nights, weekends, whatever works for your schedule. There are no mandatory daily classes. You appear for exams just twice yearly in June and December. Many working professionals successfully complete IGNOU degrees while managing demanding jobs.",
                    },
                    {
                      q: "Is IGNOU BA in English recognized for teaching jobs and higher studies?",
                      a: "Yes, completely and without any doubt. IGNOU is a central university established by Parliament with full UGC, DEB, and AIU approval. The BA English degree is valid for all teaching positions with B.Ed, MA admissions in any Indian university, government jobs, and even higher studies abroad. It holds exactly equal value to degrees from regular universities.",
                    },
                    {
                      q: "Do I need to have studied English literature in 12th standard?",
                      a: "Not at all. Any 12th stream works - Science, Commerce, Arts, Vocational, doesn't matter. Many successful English graduates come from Science or Commerce backgrounds. The program starts from basics and progressively builds your knowledge. Your interest in literature matters more than your 12th subjects.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "What if I'm not confident about my English language skills?",
                      a: "The program includes English Communication Skills courses in early semesters specifically to strengthen your language abilities. You also improve naturally by reading extensively throughout the program. Start with simpler texts and gradually tackle more complex ones. Most students find their English improves dramatically during the three years.",
                    },
                    {
                      q: "Can I pursue MA English after IGNOU BA or only from IGNOU?",
                      a: "You can pursue MA English from any Indian university after IGNOU BA. The degree is recognized everywhere. Many students do MA from regular universities after distance BA. Your IGNOU BA English qualifies you equally for postgraduate admissions, competitive exams, or employment.",
                    },
                    {
                      q: "Your Path Forward with BA in English Admission 2026",
                      a:
                        "The IGNOU BA in English Admission 2026 offers genuine opportunity if your interests align with literature, reading, writing, and communication. The comprehensive curriculum covering classical to contemporary literature, flexible learning system allowing you to study while working, UGC recognition, and affordable structure make it accessible and valuable for students from all backgrounds.\n\n" +
                        "But understand clearly that studying literature requires consistent reading and writing effort. You must genuinely enjoy reading books, not find them boring. You need to maintain self-discipline for distance learning without daily classes and teacher supervision. You should be comfortable with essay writing and literary analysis rather than wanting purely technical or mathematical education.\n\n" +
                        "If you love reading, want superior communication skills, can maintain study discipline, and dream of careers in teaching, writing, journalism, publishing, or civil services, then the BA in English Admission at IGNOU provides an excellent path forward.\n\n" +
                        "Applications remain open until August 31, 2026. Connect with Unnati Education today, and we'll guide you through the entire admission process step by step, ensuring you don't miss deadlines, make application mistakes, or feel confused about any requirement. Take that first step toward building your literature and communication career with proper guidance supporting you every step of the way.",
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
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>BAEGH</b>. We’ll help with admission,
                  documents, subject selection, assignments, and exam guidance.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAEGH%20Admission%202026" tone="primary">
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

function HeroEnglish() {
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
            <Pill tone="blue">UGC, DEB, AIU</Pill>
          </div>

          {/* Title */}
          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in English
            <span className="block text-blue-700 dark:text-blue-300">Admission 2026</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code:{" "}
            <span className="font-black text-slate-900 dark:text-white">BAEGH</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              Love reading novels? Get lost in poetry? Enjoy analyzing what writers really mean? If literature fascinates you and you dream of careers involving reading, writing, or teaching, then the IGNOU BA in English Admission 2026 might be exactly what you're looking for.
            </p>
            <p>
              This isn't just about reading books for fun anymore. A BA in English from IGNOU gives you serious training in British, American, Indian, and postcolonial literature while developing your critical thinking, communication excellence, and creative writing abilities. And the best part? You study at your own pace through distance learning, making it perfect whether you're a fresh 12th pass student, working professional, or someone returning to education after a gap.
            </p>
            <p>
              Let me walk you through everything you need to know about this program. I'll explain who should choose it, what you'll actually study semester by semester, how to apply, and what careers await you after graduation.
            </p>
          </div>

          {/* Badges */}
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

          {/* CTAs */}
          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20English%20Admission%202026" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAEGH 2026”</b> on WhatsApp for faster response.
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

function FaqCard({ items = [] }) {
  const [open, setOpen] = useState(0);

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-3">
        {items.map((it, idx) => {
          const active = open === idx;
          return (
            <button
              key={idx}
              type="button"
              onClick={() => setOpen(active ? -1 : idx)}
              className="w-full text-left"
            >
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
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">
                    {it.a}
                  </p>
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
    <div
      className={`grid h-11 w-11 place-items-center rounded-xl ${
        tone === "blue" ? "bg-blue-600 text-white" : "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900"
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAEGH%20Admission%202026"
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

function LanguageIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 2.8a9.2 9.2 0 1 0 0 18.4 9.2 9.2 0 0 0 0-18.4Zm6.8 8.2h-3.3c-.1-1.7-.6-3.3-1.3-4.6 2 .9 3.4 2.6 3.9 4.6ZM12 4.6c.9 1.3 1.5 3 1.7 4.4h-3.4c.2-1.4.8-3.1 1.7-4.4Zm-5.1 1.8C6.2 7.7 5.7 9.3 5.6 11H2.2c.5-2 1.9-3.7 4.7-4.6Zm-4.7 6.6h3.4c.1 1.7.6 3.3 1.3 4.6-2-.9-3.4-2.6-4.7-4.6Zm7.9 6.4c-.9-1.3-1.5-3-1.7-4.4h3.4c-.2 1.4-.8 3.1-1.7 4.4Zm2.9-1.8c.7-1.3 1.2-2.9 1.3-4.6h3.3c-.5 2-1.9 3.7-4.6 4.6Z" />
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
