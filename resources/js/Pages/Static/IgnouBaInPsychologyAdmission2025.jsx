import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaPsychologyAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA Psychology", icon: <BrainIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFPC", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Session", value: "Jan & July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2025", icon: <DeadlineIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Eligibility", value: "10+2 (Any Stream)", icon: <EligibilityIcon className="h-5 w-5" /> },
      { label: "Mode", value: "UGC Approved • ODL", icon: <BadgeIcon className="h-5 w-5" /> },
    ],
    []
  );

  useEffect(() => {
    if (!document.getElementById("unnati-reveal-v1")) {
      const s = document.createElement("style");
      s.id = "unnati-reveal-v1";
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
        title="BA in Psychology Admission 2025 | BAFPC Guide – Unnati Education"
        description="We guide students through IGNOU BA in Psychology (BAFPC) admission 2025 with eligibility, dates, course structure, and academic support from admission to exams."
        keywords="BA in Psychology Admission 2025, BAFPC, IGNOU Psychology Admission, BA Psychology IGNOU, Unnati Education"
      />

      <main className="relative bg-[#f7f9fc] text-slate-900 dark:bg-[#070A12] dark:text-slate-50">
        {/* BACKGROUND (NO DOTS) */}
        <div className="pointer-events-none absolute inset-0 overflow-hidden">
          <div className="absolute -top-40 left-1/2 h-[520px] w-[1000px] -translate-x-1/2 rounded-full bg-blue-500/15 blur-3xl dark:bg-blue-500/10" />
          <div className="absolute top-52 left-1/2 h-[520px] w-[900px] -translate-x-1/2 rounded-full bg-indigo-500/10 blur-3xl" />
          <div className="absolute -bottom-56 left-1/2 h-[640px] w-[1100px] -translate-x-1/2 rounded-full bg-sky-500/10 blur-3xl" />
          <NoiseOverlay />
        </div>

        <div className="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-12">
          {/* HERO */}
          <Hero />

          {/* HIGHLIGHTS */}
          <Section alt>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="IGNOU BA in Psychology Admission 2025 Highlights"
              subtitle="Quick snapshot of programme basics, eligibility, and mode."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFPC" tone="primary">
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
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Particulars</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Details</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="Course Name" v="Bachelor of Arts in Psychology (BAFPC)" />
                      <Row k="University" v="Indira Gandhi National Open University (IGNOU)" />
                      <Row k="Mode of Study" v="Distance + Online (ODL)" />
                      <Row k="Eligibility" v="10+2 or equivalent (any stream)" />
                      <Row k="Duration" v="Minimum 3 Years, Maximum 6 Years" />
                      <Row k="Credit Requirement" v="120 Credits (semester-based)" />
                      <Row k="Course Type" v="Major programme with interdisciplinary + skills-based components" />
                      <Row k="Admission Session" v="January 2025 & July 2025" />
                      <Row k="Last Date to Apply" v="31 August 2025" />
                      <Row k="Examination" v="Semester-wise (Theory + Practical/TMA where applicable)" />
                      <Row k="Support Partner" v="Unnati Education – Admission & Academic Guidance" />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8" id="program" />
            <Reveal>
              <ContentCard
                title="About the Programme (BAFPC)"
                paragraphs={[
                  "IGNOU’s BA Psychology (BAFPC) fits students who want to understand human mind, behavior and mental wellbeing — with the flexibility of distance learning.",
                  "It introduces core areas like social psychology, developmental psychology, clinical foundations, counseling basics, organizational behavior and environmental psychology, along with interdisciplinary skill courses.",
                  "IGNOU also includes value-added skill components (writing, stress management, emotional intelligence, etc.). Unnati Education helps you manage admissions, course selection, TMAs, and exam preparation without confusion.",
                ]}
              />
            </Reveal>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="Course Structure, Eligibility, and Learning Goals"
              subtitle="What you study, how credits work, and what outcomes you should realistically expect."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Objectives of BA Psychology (2025)"
                  paragraphs={[
                    "The programme aims to build a grounded understanding of human behavior while developing academic and practical skills.",
                  ]}
                  bullets={[
                    { t: "Understand key areas of human behavior and psychological processes." },
                    { t: "Learn major subfields: clinical foundations, developmental, social, counseling, and organizational psychology." },
                    { t: "Connect psychology with allied domains like education, sociology and biology." },
                    { t: "Build critical thinking, research basics and academic writing skills." },
                    { t: "Gain applied exposure via case-based learning, assignments and projects where applicable." },
                    { t: "Prepare for higher study pathways (MA Psychology and related fields) and entry-level career roles." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Admission Eligibility (Simple)</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    Eligibility is straightforward — no stream restriction, no age limit.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem bold="Qualification:" text="10+2 (Intermediate) or equivalent from a recognized board." />
                    <CheckItem bold="Age limit:" text="No age limit." />
                    <CheckItem bold="Streams allowed:" text="Arts / Science / Commerce — all eligible." />
                    <CheckItem
                      bold="Best for:"
                      text="Students aiming for psychology, counseling, HR, social services, teaching, and health-related support roles."
                    />
                  </ul>
                  <p className="mt-4 text-slate-600 dark:text-slate-300">
                    Unnati Education helps with admission steps, subject planning, and semester workflow (TMA + exam strategy).
                  </p>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Course Details (CBCS-based Design)"
                  paragraphs={[
                    "The course is structured under CBCS with 120 credits across six semesters. Credits come from a mix of discipline core, minor/elective, skill and ability enhancement, and interdisciplinary/value-added courses.",
                    "You’ll typically complete TMAs (Tutor Marked Assignments) plus exams; some components may include practical/project-style work depending on semester/course.",
                  ]}
                  bullets={[
                    { t: "Discipline-Specific Core Courses (DSC)" },
                    { t: "Minor / Electives (as applicable)" },
                    { t: "Ability Enhancement / Skill Enhancement courses (AECC/SEC)" },
                    { t: "Interdisciplinary / Generic electives (IDC/GE)" },
                    { t: "Value-added courses (skill + application focused)" },
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Semester-wise Syllabus</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    You currently have “Detailed list coming soon” in Blade — that’s fine, but don’t call it “complete outline”.
                    Here we keep it honest and actionable.
                  </p>

                  <div className="mt-4 grid gap-3">
                    <details className="group rounded-2xl border border-slate-200/80 bg-slate-50 p-4 dark:border-white/10 dark:bg-white/5">
                      <summary className="cursor-pointer list-none font-black text-slate-900 dark:text-white flex items-center justify-between gap-3">
                        <span>Semester-wise Subject Codes (Update Pending)</span>
                        <span className="grid h-8 w-8 place-items-center rounded-xl bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
                          <PlusIcon className="h-4 w-4 transition group-open:rotate-45" />
                        </span>
                      </summary>
                      <div className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                        Detailed subject codes, credits, and semester-wise breakup will be updated after official IGNOU confirmation.
                        For real-time updates, contact Unnati Education on WhatsApp.
                      </div>
                    </details>
                  </div>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-white p-4 dark:border-white/10 dark:bg-white/5">
                    <p className="font-black text-slate-900 dark:text-white">Quick Help</p>
                    <p className="mt-2 text-slate-600 dark:text-slate-300">
                      If you want, send your <b>qualification</b> + <b>goal</b> (HR / counseling / higher studies) and we’ll suggest the best elective direction.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Detailed Subject Insights (Practical Meaning)"
                  paragraphs={[
                    "Psychology becomes useful when you can apply it — not just memorize definitions. These areas show up in real work:",
                  ]}
                  bullets={[
                    { b: "Biopsychology:", t: "Brain–behavior links; important foundation for clinical and neuro pathways." },
                    { b: "Developmental Psychology:", t: "Child/adolescent understanding; helpful in education and counseling tracks." },
                    { b: "Social Psychology:", t: "Group behavior and influence; useful in HR, training, and organizational roles." },
                    { b: "Forensic Psychology:", t: "Psychology in legal contexts; supports criminology and legal-adjacent roles." },
                    { b: "Health & Environmental Psychology:", t: "Modern mental health + environment-related stressors and behavior change." },
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
              title="Career Opportunities After BA Psychology (Realistic)"
              subtitle="A BA is a foundation. Serious roles (clinical practice) usually need higher qualification."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Mental health awareness is rising, but don’t oversell. A BA Psychology typically opens entry-level roles and pathways,
                    while specialized practice often requires MA/MSc + training and licensing requirements.
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniCard title="Counseling Support / Trainee Roles" desc="Support roles in schools, NGOs, helplines (often with additional certification/training)." />
                    <MiniCard title="HR / Talent & Training" desc="Recruitment, training coordination, employee engagement (with skill building)." />
                    <MiniCard title="Research Assistant / Data Support" desc="Assist projects, surveys, behavioral research, report work." />
                    <MiniCard title="Community / NGO Work" desc="Mental health awareness, outreach, community programs." />
                    <MiniCard title="Education Support" desc="Teaching support, student mentoring (often with education add-ons)." />
                    <MiniCard title="Higher Studies Path" desc="MA Psychology / related specializations → better roles and growth." />
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Add-on Courses Students Can Combine"
                  paragraphs={[
                    "Your list is good — just frame it as add-ons, not part of IGNOU syllabus unless IGNOU confirms.",
                  ]}
                  bullets={[
                    { t: "Digital Psychology (behavior in the digital era)" },
                    { t: "Neuropsychology (advanced brain–behavior)" },
                    { t: "Sports Psychology (performance + mindset)" },
                    { t: "Consumer Psychology (buyer behavior)" },
                    { t: "Cross-Cultural Psychology (culture and behavior)" },
                    { t: "Psychology & AI (cognition + AI applications)" },
                  ]}
                  footer="These can improve employability — but skills + projects matter more than just certificates."
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Why Choose Unnati Education (0–100 Support)"
                  paragraphs={[
                    "Distance learning gets messy when students miss deadlines or don’t know what matters for exams. We keep it structured and on-time.",
                  ]}
                  bullets={[
                    { t: "Admission support for IGNOU BA Psychology (BAFPC)." },
                    { t: "Course/elective guidance aligned to your career goal." },
                    { t: "TMA/assignment guidance + project/report support where needed." },
                    { t: "Previous year notes, papers, and practice strategy." },
                    { t: "Support for higher study planning (MA pathways etc.)." },
                    { t: "Career direction support for HR / counseling tracks (practical roadmaps)." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Conclusion</h3>
                  <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    <p>
                      IGNOU BA Psychology Admission 2025 is a strong foundation for understanding human behavior and building
                      pathways into HR, counseling support, research and further studies.
                    </p>
                    <p>
                      The deadline you mentioned is <b>31 August 2025</b> — don’t delay if you want the July cycle.
                      With Unnati Education, admission steps, subject planning, and exam workflow becomes easier and less chaotic.
                    </p>
                    <p>
                      If you want real career outcomes, pair your degree with: writing + research + internships/projects + add-on skills.
                      That’s what creates leverage — not just having “BA Psychology” on paper.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* CONTACT */}
          <Section>
            <div id="contact" />
            <SectionHeader
              eyebrow="Contact"
              title="Get Started — Contact Unnati"
              subtitle="Share your name, qualification, and interest. We’ll guide admission + TMAs + exams."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Share your <b>name</b>, <b>qualification</b>, and <b>goal</b> (HR / counseling / higher studies). We’ll handle admission,
                  TMAs, practicals (if any), and exam strategy.
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
                <p className="mt-3 text-sm font-black text-slate-700 dark:text-slate-200">Call/WhatsApp: 9355198199</p>
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
            <Pill tone="blue">UGC Approved</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA Psychology
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAFPC</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              IGNOU BA Psychology (BAFPC) is a flexible undergraduate option for students who want to understand the human mind,
              behavior, and wellbeing — without compromising work or personal responsibilities.
            </p>
            <p>
              The programme includes core psychology foundations with interdisciplinary and skill components aligned with CBCS/NEP-style learning.
            </p>
            <p>
              Deadline mentioned in your content is <b>31 August 2025</b>. Unnati Education supports admission, subject planning, TMAs and exam preparation.
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
              <BadgeIcon className="h-4 w-4" /> UGC Approved • ODL
            </span>
          </div>

          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFPC" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: WhatsApp <b>“BAFPC 2025”</b> for faster help.
          </p>
        </div>
      </div>
    </section>
  );
}

function Pill({ children, tone = "neutral" }) {
  const styles =
    tone === "blue"
      ? "border-blue-200/70 bg-blue-50 text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200"
      : "border-slate-200/70 bg-white text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200";

  return (
    <span className={["inline-flex items-center rounded-full border px-3 py-1 text-xs font-black transition", styles].join(" ")}>
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
          href="https://wa.me/919355198199"
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

/* ---------------- ICONS ---------------- */

function PlusIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M11 5a1 1 0 0 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5Z" />
    </svg>
  );
}

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

function DeadlineIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M7 2.8a1 1 0 0 1 1 1V5h8V3.8a1 1 0 1 1 2 0V5h1a2 2 0 0 1 2 2v12.2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1V3.8a1 1 0 0 1 1-1Zm14 6H3v10.4c0 .6.4 1 1 1h16a1 1 0 0 0 1-1V8.8ZM7 12h5v5H7v-5Z" />
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

function BadgeIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 2.8 8.8 5H5.8v3.1L3.6 11 5.8 13.9V17h3L12 19.2 15.2 17h3V13.9L20.4 11l-2.2-2.9V5h-3L12 2.8Zm-1 12.4-3-3a1 1 0 1 1 1.4-1.4l1.6 1.6 4.6-4.6a1 1 0 0 1 1.4 1.4l-6 6Z" />
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

function BrainIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M9.6 4.2a3.4 3.4 0 0 0-3.4 3.4v.3a2.7 2.7 0 0 0-1.7 2.5 2.8 2.8 0 0 0 1 2.2 2.6 2.6 0 0 0-.8 1.9 2.8 2.8 0 0 0 2.8 2.8h1.1V4.2Zm4.8 0v15.1h1.1a2.8 2.8 0 0 0 2.8-2.8 2.6 2.6 0 0 0-.8-1.9 2.8 2.8 0 0 0 1-2.2 2.7 2.7 0 0 0-1.7-2.5v-.3a3.4 3.4 0 0 0-3.4-3.4Z" />
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

function EligibilityIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 2.8 8.8 5H5.8v3.1L3.6 11 5.8 13.9V17h3L12 19.2 15.2 17h3V13.9L20.4 11l-2.2-2.9V5h-3L12 2.8Zm-1 12.4-3-3a1 1 0 1 1 1.4-1.4l1.6 1.6 4.6-4.6a1 1 0 0 1 1.4 1.4l-6 6Z" />
    </svg>
  );
}
