import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInHistoryAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA in History", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFHI / BAGHIH (ODL)", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2025", icon: <DeadlineIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Medium", value: "Hindi & English", icon: <LanguageIcon className="h-5 w-5" /> },
      { label: "Structure", value: "Semester-wise (CBCS)", icon: <BadgeIcon className="h-5 w-5" /> },
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
        title="IGNOU BA in History Admission 2025 | BAFHI"
        description="We guide students through BA in History Admission 2025 under IGNOU. Our team supports BAFHI choices, CBCS structure, dates, and admission steps."
        keywords="BA in History Admission, BAFHI, IGNOU History BA, BA History Admission 2025, Unnati Education"
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
          {/* HERO (Blade content embedded) */}
          <Hero />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="IGNOU BA in History Admission 2025 Highlights"
              subtitle="Key details, eligibility, CBCS structure, and support."
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
                      <Row k="Program Name" v="Bachelor of Arts in History" />
                      <Row k="Program Code" v="BAGHIH (ODL Mode) • Also referred as BAFHI in guidance context" />
                      <Row k="Admission Cycle" v="July 2025" />
                      <Row k="Admission Last Date" v="August 31, 2025" />
                      <Row k="Duration" v="Minimum 3 years, Maximum 6 years" />
                      <Row k="Medium of Instruction" v="English & Hindi" />
                      <Row k="Eligibility" v="10+2 or equivalent qualification" />
                      <Row k="Mode of Study" v="Distance Learning + Online Learning" />
                      <Row k="Structure" v="Semester-wise, Choice-Based Credit System (CBCS)" />
                      <Row k="Special Features" v="Flexibility, Skill Courses, Interdisciplinary Electives" />
                      <Row
                        k="Admission Support"
                        v="Unnati Education helps with admission, assignments, previous year papers, and practical guidance."
                      />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="BA in History Admission 2025 – Course Details"
                  paragraphs={[
                    "The BA in History course design gives learners a balanced mix of core history papers, interdisciplinary exposure, skills-building courses, and electives. It’s structured so you don’t just “memorize history,” you learn how to analyze it and apply it in real-world contexts.",
                  ]}
                  bullets={[
                    { b: "Discipline-specific Core Courses (DSC):", t: "Indian and World History across major periods." },
                    { b: "Discipline-Specific Electives (DSE):", t: "Focused regions like USA, USSR, Africa, SE Asia, China, Japan, Modern Europe." },
                    { b: "Interdisciplinary Courses (IDC):", t: "Related areas like disaster management, anthropology, Indian society." },
                    { b: "Ability Enhancement (AECC):", t: "Environment studies + communication skills for general awareness." },
                    { b: "Skill Enhancement (SEC):", t: "Practical subjects like counselling, academic writing, leadership, etc." },
                  ]}
                  footer="This layering makes sure learners understand history as a living discipline connected to society, policy, and careers."
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="BA in History Admission Eligibility"
                  paragraphs={["The admission requirements are straightforward and open for all kinds of learners:"]}
                  bullets={[
                    { b: "Educational Qualification:", t: "10+2 or equivalent exam from a recognized board." },
                    { b: "Age Limit:", t: "No minimum/maximum age limit." },
                    { b: "Medium:", t: "Choose English or Hindi for study and exams." },
                  ]}
                  footer="IGNOU’s open eligibility supports students, working professionals, homemakers, and learners who want to resume education."
                />
              </Reveal>
            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="BA in History Admission 2025 Last Date"
                  paragraphs={[
                    "The admission deadline is August 31, 2025. Because the program runs on a semester-based cycle, missing this deadline usually means waiting for the next admission window.",
                    "Unnati Education helps you avoid last-minute errors and delays. Our counselors can assist with:",
                  ]}
                  bullets={[
                    { t: "Online admission form filling" },
                    { t: "Correct document uploads" },
                    { t: "Selecting the right study centre" },
                    { t: "Subject selection aligned with your goal (UPSC/teaching/research, etc.)" },
                  ]}
                  footer="If you want faster help, message “BAFHI 2025” on WhatsApp."
                />
              </Reveal>

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Quick 3-step admission flow</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    Clean, predictable process — you just need to execute it correctly.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Check eligibility" desc="10+2 or equivalent qualification." />
                    <StepMini n="02" title="Apply online" desc="Fill IGNOU form, select RC/SC, upload documents." />
                    <StepMini n="03" title="Get support" desc="Assignments, exam updates, CBCS planning & guidance." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20History" tone="primary">
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

          {/* ABOUT (Blade) */}
          <Section alt>
            <div id="about" />
            <SectionHeader
              eyebrow="About"
              title="About Bachelor of Arts in History (BAFHI)"
              subtitle="What the program is and what it aims to build in you."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    The Bachelor of Arts in History (Program Codes <b>BAFHI</b> and <b>BAGHIH</b>) is an undergraduate
                    program offered by the Indira Gandhi National Open University (IGNOU). It’s offered in the Open
                    and Distance Learning (ODL) mode, making it accessible and flexible for learners across regions and
                    backgrounds.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    There’s no restrictive age bracket. Learners who have completed schooling and adults restarting
                    education can both enroll. The medium of instruction is <b>English</b> and <b>Hindi</b>.
                  </p>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Program goals</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Introduce key concepts in Indian and World History across ancient, medieval, and contemporary periods." />
                    <CheckItem text="Develop reading and writing skills through regular tasks, collaboration, and research-oriented work." />
                    <CheckItem text="Expose you to the interdisciplinary nature of History through sociology, political science, economics, literature, and culture." />
                    <CheckItem text="Build analytical tools to understand current issues by studying patterns from the past." />
                    <CheckItem text="Prepare you for careers and higher studies in archaeology, history, public administration, tourism heritage, and related fields." />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* SYLLABUS (Blade) */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="IGNOU BA in History Syllabus (Semester-wise)"
              subtitle="Semester 1–6 structure (CBCS)."
              rightCTA={
                <CTA href="https://wa.me/919355198199" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> Get Full Syllabus
                </CTA>
              }
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <SyllabusTable
                  title="Semester 1"
                  rows={[
                    ["DSC", "History of India – I", "BHIC-101", "6"],
                    ["DSC", "Social Formations and Cultural Patterns of the Ancient World", "BHIC-102", "6"],
                    ["AECC", "Environmental Studies", "BEVAE-181", "4"],
                    ["IDC", "Disaster Management", "BPAG-171", "6"],
                  ]}
                />
              </Reveal>

              <Reveal>
                <SyllabusTable
                  title="Semester 2"
                  rows={[
                    ["DSC", "History of India – II", "BHIC-103", "6"],
                    ["DSC", "Social Formations and Cultural Patterns of the Medieval World", "BHIC-104", "6"],
                    ["AECC", "(Any 1) English Communication / Hindi Bhasha aur Sampreshan", "BEGAE-182 / BHDAE-182", "4"],
                    [
                      "GE",
                      "(Any 1) Media & Communication Skills / Disaster Management / Philosophy of Religion / Indian Society",
                      "BEGG-172 / BPAG-172 / BPYG-172 / BSOG-171",
                      "6",
                    ],
                  ]}
                />
              </Reveal>

              <Reveal>
                <SyllabusTable
                  title="Semester 3"
                  rows={[
                    ["DSC", "History of India – III (c. 750 – 1206 CE)", "BHIC-105", "6"],
                    ["DSC", "Rise of the Modern West – I", "BHIC-106", "6"],
                    ["IDC", "History of India: Earliest Times to c. 300 BCE", "BHID-101", "6"],
                    [
                      "SEC",
                      "(Any 1) Emotional Intelligence / Counselling Psychology / Psychology for Living / Academic Writing & Composition",
                      "BPCS-183 / BPCS-185 / BPCG-175 / BEGG-173",
                      "4",
                    ],
                  ]}
                />
              </Reveal>

              <Reveal>
                <SyllabusTable
                  title="Semester 4"
                  rows={[
                    ["DSC", "History of India – IV (c. 1206 – 1550 CE)", "BHIC-107", "6"],
                    ["DSC", "Rise of the Modern West – II", "BHIC-108", "6"],
                    ["IDC", "History of India: c. 300 BCE – 8th Century CE", "BHID-102", "6"],
                    [
                      "SEC",
                      "(Any 1) Emotional Intelligence / Managing Stress / Writing & Study Skills / Tourism Anthropology / Computer Applications in Business / Leadership & Teamwork",
                      "BPCS-183 / BPCS-185 / BEGS-183 / BANS-183 / BCOS-183 / BPCS-187",
                      "4",
                    ],
                  ]}
                />
              </Reveal>

              <Reveal>
                <SyllabusTable
                  title="Semester 5"
                  rows={[
                    ["DSC", "History of India – V (c. 1550 – 1605 CE)", "BHIC-109", "6"],
                    ["IDC", "History of India: 8th to 15th Century CE", "BHID-103", "6"],
                    [
                      "DSE-1",
                      "(Any 1) History of USA (1776–1945) / USSR (1917–1964) / Africa (1500–1960)",
                      "BHIE-141 / BHIE-143 / BHIE-145",
                      "6",
                    ],
                    [
                      "DSE-2",
                      "(Any 1) History of USA (1776–1945) / USSR (1917–1964) / Africa (1500–1960)",
                      "BHIE-141 / BHIE-143 / BHIE-145",
                      "6",
                    ],
                  ]}
                />
              </Reveal>

              <Reveal>
                <SyllabusTable
                  title="Semester 6"
                  rows={[
                    ["DSC", "History of India – VI (c. 1750 – 1857 CE)", "BHIC-110", "6"],
                    ["IDC", "History of India: 16th to Mid-18th Century CE", "BHID-104", "6"],
                    [
                      "DSE-3",
                      "(Any 1) Southeast Asia (19th–20th) / China & Japan (1840–1949) / Modern Europe (1780–1939)",
                      "BHIE-142 / BHIE-144 / BHIE-146",
                      "6",
                    ],
                    [
                      "DSE-4",
                      "(Any 1) Southeast Asia (19th–20th) / China & Japan (1840–1949) / Modern Europe (1780–1939)",
                      "BHIE-142 / BHIE-144 / BHIE-146",
                      "6",
                    ],
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* CAREERS (Blade) */}
          <Section>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="Career Opportunities After BA in History"
              subtitle="History isn’t “only teaching” — it’s a versatile base for multiple paths."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    An education in History can lead to a broad range of roles — governance, academia, heritage, media,
                    and research. Here are strong pathways students commonly pursue:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem
                      bold="Civil Service:"
                      text="History is one of the most preferred optional subjects for UPSC and State PSC examinations."
                    />
                    <CheckItem
                      bold="Academics & Teaching:"
                      text="With higher education, become a lecturer/professor/school teacher."
                    />
                    <CheckItem bold="Museums & Archives:" text="Curator, conservator, archivist, documentation roles." />
                    <CheckItem
                      bold="Archaeology & Heritage:"
                      text="Work with surveys, excavation projects, and conservation of heritage sites."
                    />
                    <CheckItem
                      bold="Tourism (Cultural Tourism):"
                      text="Heritage site operations, management, and travel advisory."
                    />
                    <CheckItem
                      bold="Research Institutes & NGOs:"
                      text="Think tanks, cultural NGOs, and international organizations."
                    />
                    <CheckItem
                      bold="Media & Content:"
                      text="Research writing, books, documentaries, journalism."
                    />
                    <CheckItem
                      bold="Corporate (analytical roles):"
                      text="Knowledge management, research, education-adjacent roles."
                    />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <div className="grid gap-6">
                  <Card>
                    <h3 className="font-black text-slate-900 dark:text-white">
                      Why Choose Unnati Education for IGNOU BA in History Admission 2025?
                    </h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300">
                      You focus on studying — we handle the admissions + academic pipeline.
                    </p>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Complete admission guidance" />
                      <CheckItem text="Solved Assignments (Handwritten + Soft Copy)" />
                      <CheckItem text="Previous Year Question Papers & Guess Papers" />
                      <CheckItem text="Support for Practical File Preparation" />
                      <CheckItem text="Notes and exam-focused coaching support" />
                      <CheckItem text="Updates on re-registration, results, exam schedules" />
                    </ul>
                  </Card>

                  <Card>
                    <h3 className="font-black text-slate-900 dark:text-white">
                      Recommended Add-On Courses to boost outcomes
                    </h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300">
                      Add-ons can give you an edge, especially if you’re aiming for interdisciplinary work.
                    </p>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Certificate in Archaeology & Museology" />
                      <CheckItem text="Diploma in Heritage Tourism Studies" />
                      <CheckItem text="Certificate in Indian Art & Architecture" />
                      <CheckItem text="Certificate in Records Management & Archival Studies" />
                      <CheckItem text="Foreign Language Courses (French, Spanish, German)" />
                      <CheckItem text="Diploma in Political Science or Sociology" />
                    </ul>
                  </Card>
                </div>
              </Reveal>
            </div>
          </Section>

          {/* CONCLUSION (Blade) */}
          <Section alt>
            <div id="conclusion" />
            <SectionHeader
              eyebrow="Conclusion"
              title="What you should do next"
              subtitle="If you want July 2025 admission, don’t wait till the last week."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    IGNOU BA in History Admission 2025 is a strong choice if you’re genuinely interested in history,
                    culture, research, and public-facing careers. It’s flexible under NEP 2020, semester-based (CBCS),
                    interdisciplinary, and has real career value.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Admissions are open until <b>August 31, 2025</b>. Apply early to avoid avoidable mistakes and delays.
                  </p>
                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BA%20History%20Admission%202025" tone="primary">
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

              <Reveal>
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
              </Reveal>
            </div>
          </Section>

          {/* CONTACT (Blade) */}
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
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>chosen program</b>. We’ll help
                  with admission, documents, assignments, and exam guidance.
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
            <Pill>Updated 2025</Pill>
            <Pill tone="blue">UGC Approved • CBCS</Pill>
          </div>

          {/* Title */}
          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in History
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code:{" "}
            <span className="font-black text-slate-900 dark:text-white">BAFHI / BAGHIH (ODL)</span>
          </p>

          {/* Blade hero content */}
          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              The IGNOU BA in History admission 2025 is among the top undergraduate courses for those interested in
              studying the development of societies, civilizations, and cultural processes. This course is not only for
              students who love history, but also for those aiming for careers in civil services, research, academia,
              tourism, archaeology, cultural conservation, and policy development.
            </p>
            <p>
              The program aligns with the New Education Policy (NEP) 2020 and follows the Choice-Based Credit System
              (CBCS), which is semester-based. This makes it more flexible and allows students to pick core classes,
              skills enhancement courses, interdisciplinary courses, and discipline electives. Admission to the July 2025
              cycle is open. The deadline for applying is August 31, 2025.
            </p>
            <p>
              Unlike conventional BA programs, this one focuses not only on chronology but also on analysis, comparative
              studies, and interdisciplinary methods — helping students understand how the past shapes the future in
              administrative, research, and professional areas.
            </p>
          </div>

          {/* Badges */}
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

          {/* CTAs */}
          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20History" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAFHI 2025”</b> on WhatsApp for faster response.
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
