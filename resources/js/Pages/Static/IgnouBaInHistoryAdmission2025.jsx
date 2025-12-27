import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInHistoryAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA in History", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAGHIH (ODL)", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2026", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2026", icon: <DeadlineIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Medium", value: "Hindi / English", icon: <LanguageIcon className="h-5 w-5" /> },
      { label: "Structure", value: "Semester + Flexible Credits", icon: <BadgeIcon className="h-5 w-5" /> },
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
        title="IGNOU BA in History Admission 2026 | BAGHIH (ODL)"
        description="Complete guide to IGNOU BA in History Admission 2026 (BAGHIH): eligibility, dates, semester-wise syllabus, careers, and Unnati Education admission support."
        keywords="BA in History Admission 2026, IGNOU BAGHIH, BA History IGNOU, IGNOU BA History 2026, Unnati Education"
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

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="IGNOU BA in History Admission 2026 Highlights"
              subtitle="Key dates, eligibility, structure, and what you actually get."
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
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Details</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="University" v="Indira Gandhi National Open University (IGNOU)" />
                      <Row k="Program Name" v="Bachelor of Arts in History" />
                      <Row k="Program Code" v="BAGHIH (Distance Learning / ODL Mode)" />
                      <Row k="Admission Cycle" v="July 2026 Session" />
                      <Row k="Last Date to Apply" v="August 31, 2026" />
                      <Row k="Program Duration" v="Minimum 3 Years, Maximum 6 Years" />
                      <Row k="Study Medium" v="English or Hindi (Choose One)" />
                      <Row k="Eligibility" v="Passed Class 12 from any recognized board" />
                      <Row k="Study Mode" v="Distance Learning with online support" />
                      <Row k="Course Structure" v="Semester-based with flexible credit system (CBCS-style)" />
                      <Row
                        k="Admission Support"
                        v="Unnati Education helps with form filling, documents, study centre selection, assignments, PYQs, and exam updates."
                      />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="So why study History anyway?"
                  paragraphs={[
                    "Look, I get it. When you tell someone you're studying history, they probably ask if you're planning to become a teacher. But here's the thing most people don't realize—history graduates develop some really valuable skills. You learn how to dig through information, question what you read, look at things from different angles, and make sense of complicated situations. These are exactly the abilities needed in government jobs, journalism, law, museums, and even corporate research.",
                    "What makes IGNOU different is they follow the New Education Policy 2020. Basically, you're not stuck with a fixed set of boring subjects. You get to choose from core papers, skill-building courses, and other interesting topics like disaster management or communication. You can even mix in some psychology if that interests you.",
                    "And here's something really important—this program is for everyone. Fresh out of Class 12? Perfect. Working a full-time job? No problem. Took a break from studies years ago? Come on in. There's no age bar, and you get up to six years to finish everything at your own speed.",
                    "The beauty of this program is that it respects your life situation. Maybe you're a parent who needs to be home with kids. Maybe you work odd hours. Maybe you live in a place where good colleges aren't nearby. Distance learning solves all these problems. You study when you can, where you can, without compromising on quality."
                  ]}
                  footer="If you want a degree that builds thinking skills (not just marks), BA History is a solid bet — provided you study consistently."
                />
              </Reveal>

			<Reveal>
			<ContentCard
				title="Who can apply for BA in History Admission 2026?"
				paragraphs={[
				"The requirements are pretty straightforward. IGNOU believes education should be accessible, so they keep things simple",
				]}
				bullets={[
				{ b: "Education:", t: "Pass certificate from Class 12 or any equivalent exam from a recognized board" },
				{ b: "Age limit:", t: "No age limit at all—whether you're 18 or 58, you're welcome" },
				{ b: "Medium:", t: "Choose whether you want to study in English or Hindi" },
				{ b: "Stream:", t: "Your Class 12 stream doesn't matter—Science, Commerce, Arts, whatever you studied is fine" },
				{ b: "Timeline:", t: "Up to 6 years maximum to complete the degree." },
				]}
				footer={[
				"This open approach is why working people, homemakers, and folks from rural areas pick IGNOU. They don't create unnecessary hurdles. I've seen people from all walks of life succeed in this program. There was this guy who worked at a petrol pump during the day and studied at night. Another student was a homemaker who studied while her kids were at school. A retired army officer joined because he always loved history but never got to study it formally. That's the kind of diversity this program welcomes.",
				"The fact that your Class 12 stream doesn't matter is huge. So many students feel trapped by decisions they made as teenagers. You picked Science because everyone said it was the smart choice, but your heart was always in humanities? This is your chance to follow that interest. You studied Commerce because of family pressure, but you always loved reading about history? Now you can actually study it properly."
				]}
			/>
			</Reveal>

            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Important dates you can’t miss"
                  paragraphs={[
                    "Listen, timing really matters here. The BA in History Admission 2026 window is open right now, but it closes on August 31, 2026. If you miss that date, you'll have to wait for the next cycle, which could delay your plans by months. I've seen students miss deadlines by just a day or two and then regret it for half a year.",
                    "Here's what you should do now:",
                  ]}
                  bullets={[
                    { t: "Find your Class 12 mark sheet and passing certificate" },
                    { t: "Get a passport-size photo scanned and ready" },
                    { t: "Keep your Aadhaar card or another ID proof handy" },
                    { t: "Decide if you want English or Hindi as your study medium" },
                    { t: "Think about which study center works best for you—that's where you'll submit work and take exams" },
                  ]}
				footer={[
                    "The study center choice matters more than you might think. Pick one that's reasonably close to where you live or work. You'll need to go there for assignments and exams, so accessibility counts. Some centers are better organized than others too, but we'll talk about that.",
                    "Feeling a bit lost with all this? That's totally normal. Unnati Education walks students through every single step. We help with filling forms correctly, uploading documents properly, picking the right study center, and even choosing subjects that match your goals. You don't have to figure this out alone. We've done this hundreds of times, so we know exactly where people usually get stuck and how to avoid those problems.",
                  ]}
                />
              </Reveal>

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Quick 3-step admission flow</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    Simple process — but sloppy execution causes delays. Don’t be that person.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Confirm eligibility" desc="12th pass (any stream) + choose English/Hindi." />
                    <StepMini n="02" title="Apply online" desc="Fill IGNOU form, upload documents, choose RC/SC." />
                    <StepMini n="03" title="Plan semesters" desc="Select subjects smartly + stay consistent on assignments." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20History%202026" tone="primary">
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
              title="What exactly is this BA in History program about?"
              subtitle="Distance learning, but not low value — if you treat it seriously."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                      IGNOU offers this degree with two program codes: BAFHI and BAGHIH. It's completely through distance learning, which means you don't have to show up for daily classes. You study from home using books, online materials, and assignments that you submit periodically. You can work, take care of your family, and still earn a proper degree that's recognized everywhere.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Another great thing? You can study and write exams in either English or Hindi. Whatever feels comfortable for you. This makes it easy for students from small towns or those who studied in their regional language to pursue higher education without language barriers.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    The program isn't just thrown together randomly. Every course has been carefully planned to give you both depth and breadth. You'll understand how India evolved through different periods, but you'll also learn about world history so you can see the bigger picture. You'll study economic changes, social movements, political developments, and cultural transformations. This comprehensive approach means you graduate with real understanding, not just surface-level knowledge.
                  </p>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">What you’ll actually learn</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="You'll study both Indian history and world history, covering everything from ancient times to modern events" />
                    <CheckItem text="You'll get better at reading critically, writing clearly, and doing proper research through assignments and projects" />
                    <CheckItem text="You'll see connections between history and other subjects like sociology, political science, economics, and culture" />
                    <CheckItem text="You'll learn to look at current problems by understanding what happened in the past" />
                    <CheckItem text="You'll be ready for jobs or further studies in archaeology, administration, heritage management, tourism, and more" />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* HOW IT WORKS */}
          <Section>
            <div id="how-it-works" />
            <SectionHeader
              eyebrow="How it works"
              title="How the course actually works"
              subtitle="The program runs on a semester system. Your three years get divided into six semesters. Each semester, you study different types of courses:"
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="What each course type means"
                  paragraphs={[
                    "IGNOU’s BA History isn’t only core history. It’s a structured mix that builds both knowledge and practical skills.",
                  ]}
                  bullets={[
                    { b: "Core History Papers:", t: "These are the main subjects covering Indian and world history across different time periods. This is the foundation of your degree. You'll move chronologically through Indian history while also understanding how the rest of the world was developing during those same periods." },
                    { b: "Elective Papers:", t: "Here you get to pick topics you find interesting—maybe the history of America, Russia, Africa, Southeast Asia, China, Japan, or Europe. This is where you can specialize a bit and dive deeper into areas that fascinate you. Want to understand the Soviet Union? Pick that. Curious about how Japan modernized so quickly? There's a paper for that" },
                    { b: "Interdisciplinary Papers:", t: "These let you explore related areas like disaster management, anthropology, and how Indian society works. This is important because history doesn't exist in isolation. Understanding sociology helps you understand social history. Knowing about disasters helps you study how societies respond to crises." },
                    { b: "Skill Enhancement Papers:", t: "These teach practical stuff like academic writing, counseling basics, communication skills, and leadership. These aren't just fillers—they're genuinely useful skills. Good writing helps in every career. Communication skills matter everywhere. Leadership training prepares you for management roles." },
                    { b: "Ability Enhancement Papers:", t: "General awareness topics like environmental studies and communication fundamentals. These round out your education and make sure you're not just book-smart but also aware of current issues facing the world." },
                  ]}
                  footer="This mix ensures you're not just learning dates and events. You're building skills that actually matter in real life. You're becoming someone who can think clearly, write well, research thoroughly, and communicate effectively. That combination is powerful."
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Pro tip (most students ignore this)</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Don’t choose electives randomly. Choose them based on your goal:
                  </p>
                  <div className="mt-4 grid gap-3">
                    <MiniNote title="UPSC/PSC" text="Pick papers that strengthen optional + essay writing + analysis." />
                    <MiniNote title="Teaching/Academics" text="Pick areas you can later specialize in for MA/NET." />
                    <MiniNote title="Heritage/Tourism" text="Lean toward culture, regions, and modern world context." />
                    <MiniNote title="Content/Media" text="Pick topics with narrative depth (modern Europe, USSR, etc.)." />
                  </div>
                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Help%20me%20choose%20BA%20History%20electives%202026" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" /> Help me choose electives
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" /> Talk to counselor
                    </CTA>
                  </div>
                </Card>
              </Reveal>
            </div>
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


          {/* CAREERS */}
          <Section>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="What Jobs Can You Actually Get After Completing BA in History?"
              subtitle="History isn’t a dead-end — but you must position yourself."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    This matters because nobody wants to spend three years on something that leads nowhere. The reality is that history opens more doors than you'd think:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem bold="Government jobs / UPSC / PSC:" text="History is one of the top choices for UPSC and State PSC exams. Lots of IAS and IPS officers studied history. The analytical skills you develop are perfect for administrative roles. When you're analyzing historical events, you're basically practicing for policy analysis. When you're understanding why empires fell, you're learning about governance failures. This directly translates to civil services work." />
                    <CheckItem bold="Teaching & academics:" text="Get a Master's degree and clear NET, and you can teach in colleges. Even without that, schools always need good history teachers who can make the subject interesting for kids. And honestly, there's something special about teaching history. You're shaping how the next generation understands the world. You're helping them develop critical thinking. That's meaningful work." />
                    <CheckItem bold="Museums and Heritage:" text="Work as a curator taking care of artifacts, an archivist organizing historical documents, or a heritage manager at monuments and cultural sites. India has thousands of heritage sites that need trained professionals. Museums are expanding. There's real demand here, especially as tourism grows." />
                    <CheckItem bold="Archaeology:" text="Join teams doing excavations, help preserve historical sites, or work with the Archaeological Survey of India on protecting our heritage. Every year, new sites are discovered and old ones need maintenance. If you love being outdoors and discovering physical traces of the past, this field is incredibly rewarding." />
                    <CheckItem bold="Tourism (cultural):" text="Become a tour guide specializing in historical places, work with travel companies planning cultural tours, or manage heritage hotels and tourist sites. Cultural tourism is booming. People want authentic experiences, and they need knowledgeable guides who can tell stories, not just rattle off facts." />
                    <CheckItem bold="Research orgs / NGOs:" text="Think tanks, policy institutes, and NGOs working on social issues need researchers who understand historical context. Policy doesn't happen in a vacuum. Good policy requires understanding how similar situations were handled before, what worked, what failed, and why." />
                    <CheckItem bold="Media & content:" text=" Write books, create documentaries, work as a journalist covering culture and politics, or join publishing companies. There's huge demand for well-researched historical content. Streaming platforms want documentaries. Publishers want accessible history books. Magazines need writers who can provide historical perspective on current events." />
                    <CheckItem bold="Corporate Jobs:" text="Companies hire people for research roles, knowledge management, content development, and analysis. They need folks who can handle complex information and explain it clearly. Your ability to research thoroughly, synthesize information, and present it coherently is valuable in business strategy, market research, and competitive analysis." />
                  </ul>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    The bottom line? History teaches you how to think, not just what to think. And that skill works everywhere. You learn to question sources, identify bias, understand context, see patterns, and draw reasonable conclusions. These aren't just academic skills—they're life skills that make you better at almost any job.
                  </p>
                </Card>
              </Reveal>

              <Reveal>
                <div className="grid gap-6">
                  <Card>
                    <h3 className="font-black text-slate-900 dark:text-white">
                      Why work with Unnati Education for BA in History Admission 2026?
                    </h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300">
                      Getting into IGNOU isn't rocket science, but small mistakes can cause big problems—rejections, delays, or wrong subject selections. We've been helping students with this for years, and we know every little detail that matters.
                    </p>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Walk you through the entire online form filling process step by step" />
                      <CheckItem text="Check your documents and help upload them correctly" />
                      <CheckItem text="Suggest study centers near you that work well" />
                      <CheckItem text="Advise on which subject combinations make sense for your goals" />
                      <CheckItem text="Provide solved assignments in handwritten and typed formats" />
                      <CheckItem text="Share previous year papers and likely questions for exams" />
                      <CheckItem text="Keep you updated on exam dates, results, and re-registration deadlines" />
                      <CheckItem text="Help prepare practical files if your course needs them" />
                    </ul>

					<p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    	We handle the confusing paperwork so you can focus on studying. Our team stays on top of every IGNOU rule change, which means you get correct information without the guesswork. IGNOU sometimes changes procedures, updates forms, or modifies requirements. We track all that so you don't have to worry about missing something important.
                    </p>
					<p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
						The assignment help we provide is particularly useful. IGNOU assignments aren't just busy work—they carry marks that count toward your final grade. We provide solved assignments that you can reference while writing your own. We give you both handwritten and typed versions so you can see different presentation styles. This doesn't mean copying—it means learning how to structure answers properly, what depth is expected, and how to present information clearly.                  
					</p>
                  </Card>

                  <Card>
                    <h3 className="font-black text-slate-900 dark:text-white">
                      Extra courses that make your profile stronger
                    </h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300">
                      While the BA in History degree itself is valuable, adding some specialized certificates or diplomas can really set you apart when applying for jobs:
                    </p>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Certificate in Archaeology and Museology" />
                      <CheckItem text="Diploma in Heritage Tourism Studies" />
                      <CheckItem text="Certificate in Indian Art and Architecture" />
                      <CheckItem text="Certificate in Records Management and Archival Studies" />
                      <CheckItem text="Foreign Language Courses like French, Spanish, or German" />
                      <CheckItem text="Diploma in Political Science or Sociology" />
                    </ul>

					<p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
						These extras show employers you've gone beyond basic requirements. They're especially useful if you want jobs with international organizations, foreign embassies, or projects involving multiple countries. A foreign language combined with history knowledge? That's a powerful combination for international cultural organizations or diplomatic services.
					</p>
                  </Card>
                </div>
              </Reveal>
            </div>
          </Section>

          {/* FAQs */}
          <Section alt>
            <div id="faqs" />
            <SectionHeader
              eyebrow="FAQs"
              title="Questions students usually ask"
              subtitle="Straight answers to avoid confusion."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "My Class 12 was in Science. Can I still apply?",
                      a: "Yes, absolutely. IGNOU doesn't care what stream you studied. Science, Commerce, Arts—doesn't matter. As long as you passed Class 12 from a recognized board, you're eligible for the BA in History program. I've met biology students who switched to history and loved it. Commerce students who realized they preferred humanities. It's never too late to follow your actual interests.",
                    },
                    {
                      q: "Is there any entrance exam I need to prepare for?",
                      a: "Nope. No entrance test required for BA in History Admission 2026. Admission happens purely based on your Class 12 qualification. Just apply online before the deadline and you're in. This is different from regular colleges where you might need to crack entrance exams. IGNOU believes in open access to education.",
                    },
                    {
                      q: "How do exams happen in distance mode?",
                      a: "IGNOU holds exams twice yearly, usually around June and December. You go to your assigned exam center and write the papers there. Apart from exams, you also submit assignments throughout the year, and those marks count toward your final grade. The exam pattern is straightforward—mostly descriptive answers where you need to write detailed responses. No tricky multiple choice or confusing formats.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I keep my job while studying?",
                      a: "That's literally the whole point of distance education. Thousands of working people do IGNOU courses while holding full-time jobs. The study material is designed for self-learning, and exam dates are announced months in advance so you can plan leave or schedule adjustments. Most students study early mornings, late evenings, or weekends. You don't need hours every day—consistent effort of even an hour daily adds up.",
                    },
                    {
                      q: "What happens if I fail a subject?",
                      a: "Nothing dramatic. You can reappear for that subject in the next exam cycle. IGNOU lets you take backpapers along with your regular semester exams. Since you have six years maximum to finish, there's plenty of time to clear everything. Life happens. You might have a bad semester due to work pressure, family issues, or health problems. The system is flexible enough to accommodate that.",
                    },
                    {
                      q: "Do employers respect IGNOU distance degrees?",
                      a: "Yes, especially IGNOU degrees. IGNOU is a central university established by Parliament. Its degrees are valid for government jobs, higher studies, and private sector positions. Many successful professionals and civil servants have IGNOU degrees. The stigma around distance learning has reduced significantly because people realize that it takes discipline to complete a degree while managing other responsibilities. Some employers actually value that demonstration of time management and commitment.",
                    },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* CONCLUSION */}
          <Section alt>
            <div id="conclusion" />
            <SectionHeader
              eyebrow="Conclusion"
              title="What you should do next"
              subtitle="If you want July 2026 admission, don’t wait till the last week."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    IGNOU BA in History Admission 2026 (BAGHIH) makes sense if you actually care about analysis, reading,
                    research, and careers that reward thinking. The degree is flexible, affordable, and widely valid —
                    but your results depend on consistency.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Deadline: <b>August 31, 2026</b>. Apply early so you’re not panicking over document issues at the end.
                  </p>
                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BA%20History%20Admission%202026" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" />
                      Start on WhatsApp
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" />
                      Call Support
                    </CTA>
                  </div>
                </Card>
              </Reveal>

              {/* <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Resources (buttons)</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    Replace these URLs with your actual Laravel route/links when ready.
                  </p>
                  <div className="mt-4 grid gap-3 sm:grid-cols-2">
                    <a
                      href="#"
                      className="rounded-2xl bg-blue-600 px-5 py-3 text-center font-black text-white transition hover:bg-blue-700"
                    >
                      Previous Year Papers (BAGHIH)
                    </a>
                    <a
                      href="#"
                      className="rounded-2xl bg-blue-600 px-5 py-3 text-center font-black text-white transition hover:bg-blue-700"
                    >
                      Guess Papers (BAGHIH)
                    </a>
                    <a
                      href="#"
                      className="rounded-2xl bg-blue-600 px-5 py-3 text-center font-black text-white transition hover:bg-blue-700"
                    >
                      Solved Assignments (BAGHIH)
                    </a>
                    <a
                      href="#"
                      className="rounded-2xl bg-blue-600 px-5 py-3 text-center font-black text-white transition hover:bg-blue-700"
                    >
                      Practical File (BAGHIH)
                    </a>
                  </div>
                </Card>
              </Reveal> */}
            </div>
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
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>chosen program</b>. We’ll help
                  with admission, documents, assignments, and exam guidance.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BA%20History%20Admission%202026" tone="primary">
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
            <Pill tone="blue">Central University • Flexible</Pill>
          </div>

          {/* Title */}
          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in History
            <span className="block text-blue-700 dark:text-blue-300">Admission 2026</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code:{" "}
            <span className="font-black text-slate-900 dark:text-white">BAGHIH (ODL / Distance Learning)</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              Are you the kind of person who gets lost in stories about ancient kingdoms, wonders how societies evolved, or wants to understand why the world is the way it is today? If yes, then the BA in History Admission 2026 at IGNOU could be exactly what you're looking for. This isn't about cramming dates for exams. It's about learning to think critically, understanding patterns, and building skills that work in civil services, teaching, research, tourism, and plenty of other fields.
            </p>
            {/* <p>
              The July 2026 session is open, and the deadline is <b>August 31, 2026</b>. The program is semester-based
              with a flexible credit system, and it includes core history papers plus skill and interdisciplinary courses
              so you build useful abilities (writing, communication, research, reasoning).
            </p>
            <p>
              The program works for fresh Class 12 pass-outs, working professionals, parents, and anyone restarting studies.
              No age bar. Up to 6 years to complete. The only catch: you need consistency.
            </p> */}
          </div>

          {/* Badges */}
          <div className="mt-5 flex flex-wrap gap-2">
            <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
              <CalendarIcon className="h-4 w-4" /> Last Date: 31 Aug 2026
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <ClockIcon className="h-4 w-4" /> Duration: 3–6 Years
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <BadgeIcon className="h-4 w-4" /> Semester + Flexible Credits
            </span>
          </div>

          {/* CTAs */}
          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20History%202026" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BA History 2026”</b> on WhatsApp for faster response.
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
      {footer
		? Array.isArray(footer)
			? footer.map((f, i) => (
				<p key={i} className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
				{f}
				</p>
			))
			: <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">{footer}</p>
		: null}

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
      <span className="text-slate-600 dark:text-slate-300">
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

function SyllabusTable({ title, rows }) {
  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <h3 className="font-black text-slate-900 dark:text-white">{title}</h3>

      <div className="mt-4 overflow-x-auto">
        <table className="w-full text-left text-sm">
          <thead>
            <tr className="border-b border-slate-200/80 dark:border-white/10">
              <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">TYPE</th>
              <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">SUBJECTS</th>
              <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">CODE</th>
              <th className="py-3 font-black text-slate-700 dark:text-slate-200">CREDITS</th>
            </tr>
          </thead>
          <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
            {rows.map((r, i) => (
              <tr key={i}>
                <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white whitespace-nowrap">{r[0]}</td>
                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[320px]">{r[1]}</td>
                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 whitespace-nowrap">{r[2]}</td>
                <td className="py-3 font-black text-slate-900 dark:text-white whitespace-nowrap">{r[3]}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

/* ---------------- SMALL HELPERS ---------------- */

function MiniNote({ title, text }) {
  return (
    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
      <div className="font-black text-slate-900 dark:text-white">{title}</div>
      <div className="mt-1 text-slate-600 dark:text-slate-300">{text}</div>
    </div>
  );
}


function SyllabusAccordion() {
    const [openSemester, setOpenSemester] = useState(null);

    const semesters = [
        {
            id: 1,
            title: "Semester 1",
            rows: [
                ["Core", "History of India – I", "BHIC-101", "6"],
                ["Core", "Social Formations and Cultural Patterns of the Ancient World", "BHIC-102", "6"],
                ["AECC", "Environmental Studies", "BEVAE-181", "4"],
                ["Interdisciplinary", "Disaster Management", "BPAG-171", "6"],
            ]
        },
        {
            id: 2,
            title: "Semester 2",
            rows: [
                ["Core", "History of India – II", "BHIC-103", "6"],
                ["Core", "Social Formations and Cultural Patterns of the Medieval World", "BHIC-104", "6"],
                ["AECC", "English Communication OR Hindi Bhasha aur Sampreshan (Choose 1)", "BEGAE-182 / BHDAE-182", "4"],
                ["GE", "Media & Communication Skills / Disaster Management / Philosophy of Religion / Indian Society (Choose 1)", "BEGG-172 / BPAG-172 / BPYG-172 / BSOG-171", "6"],
            ]
        },
        {
            id: 3,
            title: "Semester 3",
            rows: [
                ["Core", "History of India – III (c. 750 – 1206 CE)", "BHIC-105", "6"],
                ["Core", "Rise of the Modern West – I", "BHIC-106", "6"],
                ["Interdisciplinary", "History of India: Earliest Times to c. 300 BCE", "BHID-101", "6"],
                ["SEC", "Emotional Intelligence / Counselling Psychology / Psychology for Living / Academic Writing (Choose 1)", "BPCS-183 / BPCS-185 / BPCG-175 / BEGG-173", "4"],
            ]
        },
        {
            id: 4,
            title: "Semester 4",
            rows: [
                ["Core", "History of India – IV (c. 1206 – 1550 CE)", "BHIC-107", "6"],
                ["Core", "Rise of the Modern West – II", "BHIC-108", "6"],
                ["Interdisciplinary", "History of India: c. 300 BCE – 8th Century CE", "BHID-102", "6"],
                ["SEC", "Emotional Intelligence / Managing Stress / Writing Skills / Tourism Anthropology / Computer Apps / Leadership (Choose 1)", "BPCS-183 / BPCS-185 / BEGS-183 / BANS-183 / BCOS-183 / BPCS-187", "4"],
            ]
        },
        {
            id: 5,
            title: "Semester 5",
            rows: [
                ["Core", "History of India – V (c. 1550 – 1605 CE)", "BHIC-109", "6"],
                ["Interdisciplinary", "History of India: 8th to 15th Century CE", "BHID-103", "6"],
                ["DSE-1", "USA (1776–1945) / USSR (1917–1964) / Africa (1500–1960) (Choose 1)", "BHIE-141 / BHIE-143 / BHIE-145", "6"],
                ["DSE-2", "USA (1776–1945) / USSR (1917–1964) / Africa (1500–1960) (Choose 1)", "BHIE-141 / BHIE-143 / BHIE-145", "6"],
            ]
        },
        {
            id: 6,
            title: "Semester 6",
            rows: [
                ["Core", "History of India – VI (c. 1750 – 1857 CE)", "BHIC-110", "6"],
                ["Interdisciplinary", "History of India: 16th to Mid-18th Century CE", "BHID-104", "6"],
                ["DSE-3", "Southeast Asia (19th–20th) / China & Japan (1840–1949) / Modern Europe (1780–1939) (Choose 1)", "BHIE-142 / BHIE-144 / BHIE-146", "6"],
                ["DSE-4", "Southeast Asia (19th–20th) / China & Japan (1840–1949) / Modern Europe (1780–1939) (Choose 1)", "BHIE-142 / BHIE-144 / BHIE-146", "6"],
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
                                            <th className="py-3 pr-4 font-black">TYPE</th>
                                            <th className="py-3 pr-4 font-black">SUBJECTS</th>
                                            <th className="py-3 pr-4 font-black">CODE</th>
                                            <th className="py-3 font-black">CREDITS</th>
                                        </tr>
                                    </thead>
                                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                                        {semester.rows.map((r, i) => (
                                            <tr key={i}>
                                                <td className="py-3 pr-4 font-semibold whitespace-nowrap">
                                                    {r[0]}
                                                </td>
                                                <td className="py-3 pr-4 min-w-[320px]">
                                                    {r[1]}
                                                </td>
                                                <td className="py-3 pr-4 whitespace-nowrap">
                                                    {r[2]}
                                                </td>
                                                <td className="py-3 font-black whitespace-nowrap">
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
                  <div className="font-black text-slate-900 dark:text-white">{it.q}</div>
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
                {active ? <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">{it.a}</p> : null}
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BA%20History%20Admission%202026"
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
