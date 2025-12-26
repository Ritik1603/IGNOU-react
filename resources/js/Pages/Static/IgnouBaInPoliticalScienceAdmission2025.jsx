import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaPoliticalScienceAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA (Hons) Political Science", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAPSH", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2025", icon: <DeadlineIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Medium", value: "Hindi & English", icon: <LanguageIcon className="h-5 w-5" /> },
      { label: "Structure", value: "UGC Approved • CBCS", icon: <BadgeIcon className="h-5 w-5" /> },
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
        title="IGNOU BA Political Science Admission 2025 | Syllabus – Unnati"
        description="Explore IGNOU BA Political Science 2025 details, syllabus overview, and career scope. Unnati Education guides you through every step — from 0 to 100."
        keywords="IGNOU BA Political Science Admission 2025, BAPSH, BA Political Science IGNOU, Political Science Syllabus IGNOU, Unnati Education"
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

          {/* WHY (home tab second section) */}
          <Section>
            <div id="why" />
            <SectionHeader
              eyebrow="Why this programme"
              title="Why IGNOU BA Political Science?"
              subtitle="A practical degree for governance, policy, and civil services direction — without losing flexibility."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="What you actually gain (not just marketing)"
                  paragraphs={[
                    "Political Science becomes useful when it builds your ability to read power, institutions, policy and society — and explain it clearly.",
                  ]}
                  bullets={[
                    { b: "Comprehensive understanding:", t: "Political theory, public administration, international relations, constitution and institutions." },
                    { b: "NEP 2020 + CBCS flexibility:", t: "Modular structure; electives + interdisciplinary exposure across social sciences." },
                    { b: "Civil services & public policy edge:", t: "Builds analytical writing + governance understanding aligned with competitive exams." },
                    { b: "ODL flexibility:", t: "Study at your pace — works for working professionals, homemakers, and non-traditional learners." },
                    { b: "Empowerment through knowledge:", t: "Critical thinking about justice, equality, power — better citizenship + leadership." },
                    { b: "Unnati support (0–100):", t: "Admission, planning, assignments, exams, re-registration — handled with clarity." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Fix your meta copy (you pasted Economics)</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Your Blade <b>keywords</b> and <b>og_description</b> still mention Economics/BAFEC. That’s a straight mismatch.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="I corrected SEO title/description/keywords for Political Science in this React file." />
                    <CheckItem text="Do the same in Blade originals if you keep them anywhere." />
                  </ul>
                  <p className="mt-4 text-slate-600 dark:text-slate-300">
                    Also: your highlights table says the programme is <b>BAPSH</b> — so don’t label this page like a generic BA without specifying the right code.
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* HIGHLIGHTS */}
          <Section alt>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="IGNOU BA Political Science 2025 Highlights"
              subtitle="Programme snapshot: duration, credits, eligibility, and support."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Political%20Science" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> WhatsApp Guidance
                </CTA>
              }
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
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Feature</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Details</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="University" v="Indira Gandhi National Open University (IGNOU)" />
                      <Row k="Program Name" v="Bachelor of Arts (Honours) in Political Science" />
                      <Row k="Programme Code" v="BAPSH" />
                      <Row k="School" v="School of Social Sciences" />
                      <Row k="Learning Mode" v="Open and Distance Learning (ODL + Online Resources)" />
                      <Row k="Academic Cycle" v="July 2025 Session" />
                      <Row k="Last Date (tentative)" v="31 August 2025" />
                      <Row k="Duration" v="Minimum 3 Years – Maximum 6 Years" />
                      <Row k="Medium" v="English & Hindi" />
                      <Row k="Eligibility" v="10+2 or equivalent" />
                      <Row k="Credit Requirement" v="148 credits (6 semesters)" />
                      <Row k="Framework" v="CBCS aligned to NEP 2020" />
                      <Row k="Support" v="Unnati Education – Comprehensive 0–100 guidance" />
                    </tbody>
                  </table>
                </div>

                <p className="mt-4 text-slate-600 dark:text-slate-300">
                  This program builds leadership readiness for governance, public policy, law, media and research — combining academic depth with a practical view.
                </p>

                <h3 className="mt-6 font-black text-slate-900 dark:text-white">What is the BA in Political Science programme?</h3>
                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                  <p>
                    BA Political Science explores power, government, and how citizens shape public decisions — within India and globally.
                  </p>
                  <p>
                    IGNOU’s approach is multidisciplinary: politics connects with economics, public administration, international affairs and sociology.
                  </p>
                  <p>
                    The program also pushes research mindset: analytical writing, policy interpretation and understanding real issues like governance reforms, environmental politics, and conflict resolution.
                  </p>
                </div>

                <h3 className="mt-6 font-black text-slate-900 dark:text-white">Admission Eligibility</h3>
                <ul className="mt-4 space-y-3">
                  <CheckItem bold="Qualification:" text="10+2 or equivalent from a recognized board." />
                  <CheckItem bold="Age limit:" text="No restriction." />
                  <CheckItem bold="Medium:" text="English & Hindi (not “English preferred” only — your Blade contradicts itself)." />
                </ul>

                <p className="mt-4 text-slate-600 dark:text-slate-300">
                  Open eligibility makes this suitable for freshers, working professionals, and civil service aspirants who want flexibility without losing academic seriousness.
                </p>
              </Card>
            </Reveal>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="Curriculum Structure Summary"
              subtitle="CBCS-based design: 148 credits across 6 semesters; each credit ~30 learning hours."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="How the structure works"
                  paragraphs={[
                    "The IGNOU BAPSH follows CBCS under NEP 2020. Over six semesters you complete core modules, discipline electives and skill/ability enhancement modules.",
                    "Students start with fundamentals of political theory, government and comparative studies, then move to advanced topics like global politics and governance reforms.",
                    "By the final year, learners build skills in political analysis, report writing and leadership — relevant for civil services, policy roles and media research.",
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Eligibility (you repeated this twice)</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    Your Blade repeats eligibility once in Highlights and again inside Syllabus with random HTML blocks. In React I’m keeping it once, cleanly.
                  </p>
                  <div className="mt-4 rounded-2xl border border-slate-200/80 bg-slate-50 p-4 dark:border-white/10 dark:bg-white/5">
                    <p className="font-semibold text-slate-900 dark:text-white">Eligibility</p>
                    <p className="mt-2 text-slate-600 dark:text-slate-300"><b>Qualification:</b> 10+2 or equivalent</p>
                    <p className="mt-2 text-slate-600 dark:text-slate-300"><b>Age limit:</b> No restrictions</p>
                    <p className="mt-2 text-slate-600 dark:text-slate-300"><b>Medium:</b> English & Hindi</p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Program Objectives"
                  bullets={[
                    { t: "Build a strong base in political theory and governance systems." },
                    { t: "Develop critical thinking and analytical ability for policy evaluation." },
                    { t: "Strengthen understanding of India’s constitution and institutional frameworks." },
                    { t: "Encourage interdisciplinary study linking politics, economics, law and sociology." },
                    { t: "Develop communication and research ability for public service and academia." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Learning Outcomes"
                  paragraphs={["Graduates of IGNOU BA Political Science typically learn to:"]}
                  bullets={[
                    { t: "Understand theories of power, state and ideology in historical and current contexts." },
                    { t: "Analyze political institutions and policy choices." },
                    { t: "Use research and data evaluation to study global and local issues." },
                    { t: "Communicate policy ideas in academic and public forums." },
                    { t: "Contribute to governance and nation-building with intellectual and ethical integrity." },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* CAREERS */}
          <Section alt>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="Career Opportunities after IGNOU BA Political Science"
              subtitle="Where this degree realistically leads — if you actually build skills, not just collect credits."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Employers value the mix of analytical thinking, civic awareness, and writing/communication developed in Political Science.
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniCard title="1. Civil Services & Public Administration" desc="UPSC/State PSC preparation; governance understanding + writing practice." />
                    <MiniCard title="2. Policy Research & Governance" desc="Think tanks, advisory bodies, research roles influencing policy direction." />
                    <MiniCard title="3. Education & Academia" desc="PG + teaching/research track; lecturers, professors, academic writing roles." />
                    <MiniCard title="4. Journalism & Media" desc="Editorial writing, political analysis, reporting and content research." />
                    <MiniCard title="5. Law & Legal Consultancy" desc="Many graduates pursue LLB; policy + constitution base helps." />
                    <MiniCard title="6. Diplomacy & International Relations" desc="Foreign affairs analysis, international organizations, embassy-linked roles." />
                    <MiniCard title="7. CSR & Public Affairs" desc="Corporate communications, CSR strategy, stakeholder and policy coordination." />
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Why Unnati Education helps (0–100)"
                  paragraphs={[
                    "Distance learning fails when students miss deadlines, misunderstand portals, or don’t know what matters for exams. We keep it structured.",
                  ]}
                  bullets={[
                    { t: "Subject selection + academic planning (so you don’t pick random combos)." },
                    { t: "Solved assignments (soft copy + handwritten as needed)." },
                    { t: "Previous year + guess papers for practice." },
                    { t: "Project/practical file guidance when applicable." },
                    { t: "Exam-focused notes based on IGNOU pattern." },
                    { t: "Updates on re-registration, results and TEE notifications." },
                  ]}
                  footer="We handle the messy parts so you can focus on the work that actually improves your results."
                />
              </Reveal>
            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Recommended Add-on Courses"
                  paragraphs={["To widen career options, combine the degree with:"]}
                  bullets={[
                    { t: "Certificate in Public Governance and Policy" },
                    { t: "Diploma in International Relations and Human Rights" },
                    { t: "Certificate in Media Communication and Political Journalism" },
                    { t: "Diploma in Legislative Process and Law" },
                    { t: "Foreign language courses (French, German, Spanish)" },
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Benefits at a Glance</h3>
                  <div className="mt-4 overflow-x-auto">
                    <table className="w-full text-left text-sm">
                      <thead>
                        <tr className="border-b border-slate-200/80 dark:border-white/10">
                          <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Aspect</th>
                          <th className="py-3 font-black text-slate-700 dark:text-slate-200">Benefit</th>
                        </tr>
                      </thead>
                      <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                        <Row k="UGC Recognition" v="Valid for jobs and further studies in India and abroad." />
                        <Row k="Flexible Schedule" v="Learn anytime/anywhere via ODL." />
                        <Row k="Curriculum" v="NEP 2020 + CBCS, practical orientation." />
                        <Row k="Skill Development" v="Research, communication, policy analysis focus." />
                        <Row k="Career Scope" v="Civil services, media, academia, CSR, law, governance." />
                        <Row k="Unnati Support" v="End-to-end guidance from admission to exams." />
                      </tbody>
                    </table>
                  </div>
                </Card>
              </Reveal>
            </div>

            {/* FAQ */}
            <div className="mt-10" id="faq" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">FAQs — IGNOU BA Political Science Admission 2025</h3>
                <div className="mt-4 grid gap-3">
                  <FaqItem
                    q="Q1. What is IGNOU BA in Political Science?"
                    a="A UGC-recognised CBCS/NEP 2020 aligned ODL degree focused on political theory, governance and international relations."
                  />
                  <FaqItem
                    q="Q2. Who is eligible for the 2025 session?"
                    a="Anyone who has passed 10+2 (or equivalent) from a recognised board. No upper age limit."
                  />
                  <FaqItem
                    q="Q3. What is the duration?"
                    a="Minimum 3 years, maximum 6 years — flexible pacing."
                  />
                  <FaqItem
                    q="Q4. Is the degree valid for UPSC and government exams?"
                    a="Yes. IGNOU is UGC-recognised, and the degree is accepted for competitive/government examinations."
                  />
                  <FaqItem
                    q="Q5. Can I work while studying?"
                    a="Yes. ODL is built for learners balancing jobs and personal commitments."
                  />
                  <FaqItem
                    q="Q6. What career paths are common?"
                    a="Civil services, policy research, teaching, journalism/media, CSR/public affairs and law track (with LLB)."
                  />
                  <FaqItem
                    q="Q7. How does Unnati Education support students?"
                    a="Admission guidance, academic planning, solved assignments, exam notes, PYQs/guess papers, and deadline updates."
                  />
                </div>
              </Card>
            </Reveal>

            {/* CONCLUSION */}
            <div className="mt-10" id="conclusion" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Conclusion</h3>
                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                  <p>
                    IGNOU BA Political Science Admission 2025 isn’t just “a BA.” It’s training in leadership, governance, and the ideas that shape societies.
                  </p>
                  <p>
                    By studying institutions, public policy and international relations, you learn how decisions made by parliaments, courts and global bodies affect daily life.
                  </p>
                  <p>
                    If you’re serious about democracy, equality, justice and governance — this is a strong entry point. But don’t coast: build writing, research and current affairs habits.
                  </p>
                  <p>
                    With Unnati Education’s guidance, you can keep the process clean and focus on the work that actually improves results.
                  </p>
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
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>chosen program</b>. We’ll handle admission, documents, assignments, and exams.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199" tone="primary">
                    <WhatsAppIcon className="h-5 w-5" />
                    Message
                  </CTA>
                  <CTA href="tel:+919355198199" tone="ghost">
                    <PhoneIcon className="h-5 w-5" />
                    Call
                  </CTA>
                </div>
                <p className="mt-3 text-sm font-black text-slate-700 dark:text-slate-200">
                  Call/WhatsApp: 9355198199 • 9355198199
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
        <div className="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-blue-500/15 blur-3xl" />
        <div className="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-indigo-500/10 blur-3xl" />

        <div className="relative max-w-3xl">
          <div className="flex flex-wrap gap-2 mb-4">
            <Pill>IGNOU • ODL</Pill>
            <Pill>Updated 2025</Pill>
            <Pill tone="blue">UGC Approved • CBCS</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA Political Science
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAPSH</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              IGNOU BA in Political Science Admission 2025 suits learners who want to understand politics, governance,
              public policy and global affairs — with the flexibility of ODL.
            </p>
            <p>
              The CBCS/NEP 2020-aligned structure supports interdisciplinary learning while building critical thinking,
              analytical writing and civic awareness.
            </p>
            <p>
              Unnati Education provides end-to-end guidance to keep admissions, deadlines, assignments and exams smooth.
            </p>
          </div>

          <div className="mt-5 flex flex-wrap gap-2">
            <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
              <CalendarIcon className="h-4 w-4" /> Last Date: 31 Aug 2025
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <ClockIcon className="h-4 w-4" /> Duration: 3–6 Years
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <BadgeIcon className="h-4 w-4" /> UGC Approved • CBCS
            </span>
          </div>

          <div className="mt-6 flex flex-wrap gap-3">
            <CTA
              href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Political%20Science"
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
            Tip: Send <b>“BA Political Science 2025”</b> on WhatsApp for faster response.
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
      {footer ? <p className="mt-4 text-slate-600 dark:text-slate-300">{footer}</p> : null}
    </Card>
  );
}

function MiniCard({ title, desc }) {
  return (
    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
      <div className="font-black text-slate-900 dark:text-white">{title}</div>
      <div className="mt-1 text-slate-600 dark:text-slate-300">{desc}</div>
    </div>
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

/* ---------------- FAQ ---------------- */

function FaqItem({ q, a }) {
  return (
    <details className="group rounded-2xl border border-slate-200/80 bg-slate-50 p-4 dark:border-white/10 dark:bg-white/5">
      <summary className="cursor-pointer list-none font-black text-slate-900 dark:text-white flex items-center justify-between gap-3">
        <span>{q}</span>
        <span className="grid h-8 w-8 place-items-center rounded-xl bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
          <svg viewBox="0 0 24 24" fill="currentColor" className="h-4 w-4 transition group-open:rotate-45">
            <path d="M11 5a1 1 0 0 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5Z" />
          </svg>
        </span>
      </summary>
      <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">{a}</p>
    </details>
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
