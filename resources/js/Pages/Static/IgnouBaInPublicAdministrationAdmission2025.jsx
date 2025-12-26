import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaPublicAdministrationAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA Public Administration", icon: <GovIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFPA", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
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
        title="IGNOU BA Public Administration Admission 2025 | BAFPA – Unnati Education"
        description="Complete guide for IGNOU BA in Public Administration (BAFPA) admission 2025: eligibility, highlights, syllabus structure, careers, and Unnati Education support."
        keywords="BA in Public Administration Admission 2025, BAFPA, IGNOU Public Administration, IGNOU BAFPA Admission, Unnati Education"
      />

      <main className="relative bg-[#f7f9fc] text-slate-900 dark:bg-[#070A12] dark:text-slate-50">
        {/* NO DOTS BACKGROUND */}
        <div className="pointer-events-none absolute inset-0 overflow-hidden">
          <div className="absolute -top-40 left-1/2 h-[520px] w-[1000px] -translate-x-1/2 rounded-full bg-blue-500/15 blur-3xl dark:bg-blue-500/10" />
          <div className="absolute top-52 left-1/2 h-[520px] w-[900px] -translate-x-1/2 rounded-full bg-indigo-500/10 blur-3xl" />
          <div className="absolute -bottom-56 left-1/2 h-[640px] w-[1100px] -translate-x-1/2 rounded-full bg-sky-500/10 blur-3xl" />
          <NoiseOverlay />
        </div>

        <div className="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-12">
          <Hero />

          {/* HOME: WHY + OVERVIEW */}
          <Section>
            <div id="why" />
            <SectionHeader
              eyebrow="Why Public Administration"
              title="Why Study IGNOU BA in Public Administration?"
              subtitle="Governance, policy, public systems — with the flexibility of distance learning."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="6 Reasons Students Choose This Programme"
                  paragraphs={[
                    "Public Administration is the backbone of governance: how decisions are taken, policies are implemented, and services actually reach citizens.",
                  ]}
                  bullets={[
                    { b: "Real governance relevance:", t: "Understand how government works and how programs are executed on ground." },
                    { b: "NEP/CBCS flexibility:", t: "Study at your pace with modular learning and electives where available." },
                    { b: "ODL advantage:", t: "Study from anywhere with printed + digital support." },
                    { b: "Good base for UPSC/PCS:", t: "Build concepts for governance, administration, and policy frameworks." },
                    { b: "Career-aligned learning:", t: "Useful for NGOs, public sector roles, CSR and policy work." },
                    { b: "Unnati support:", t: "Admissions + assignments + exam workflow — we guide from 0–100." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Overview of the Programme"
                  paragraphs={[
                    "IGNOU’s BA Public Administration (BAFPA) is designed to make governance studies accessible. Students learn administrative theory, organizational behavior, public policy basics, and how public systems are managed.",
                    "The programme emphasizes ethics, transparency, accountability, and leadership — the qualities that actually matter in public service.",
                    "It’s not only about theory. The goal is to help you interpret real governance problems and understand how institutions can improve through better systems and execution.",
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* HIGHLIGHTS */}
          <Section alt>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="IGNOU BA Public Administration Admission 2025 Highlights"
              subtitle="Quick overview of eligibility, duration, credits, and learning mode."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFPA" tone="primary">
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
                <div className="rounded-2xl border border-amber-200/70 bg-amber-50 p-4 text-sm text-amber-900 dark:border-amber-500/25 dark:bg-amber-500/10 dark:text-amber-100">
                  <b>Important:</b> Your semester credit tables (as pasted) have internal credit-total mismatches (e.g., Semester-1 adds up to more than 20 credits).
                  We are displaying the list as provided, but you should verify final credit distribution during admission/reregistration.
                </div>

                <div className="mt-5 overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Feature</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Details</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="University" v="Indira Gandhi National Open University (IGNOU)" />
                      <Row k="Programme Name" v="Bachelor of Arts (Public Administration) – BAFPA" />
                      <Row k="Learning Mode" v="Open Distance Learning (ODL + Online Support)" />
                      <Row k="Duration" v="Minimum 3 Years, Maximum 6 Years" />
                      <Row k="Credits" v="120 Credits (semester-based; verify final distribution)" />
                      <Row k="Eligibility" v="10+2 or equivalent" />
                      <Row k="Medium" v="English (as per your draft)" />
                      <Row k="Framework" v="CBCS aligned with NEP 2020 (as stated)" />
                      <Row k="Focus Areas" v="Governance, policy studies, administration & leadership" />
                      <Row k="Support" v="Unnati Education – guidance from 0–100" />
                    </tbody>
                  </table>
                </div>

                <p className="mt-4 text-slate-600 dark:text-slate-300">
                  The programme is designed for academic growth + practical application. Through assignments and self-learning, learners build a grounded understanding of governance systems.
                </p>
              </Card>
            </Reveal>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="structure" />
            <SectionHeader
              eyebrow="Syllabus"
              title="Curriculum Structure + Semester-wise Syllabus (As Provided)"
              subtitle="CBCS-based structure with core + electives/skills components. Verify final options during registration."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Curriculum Structure Summary"
                  paragraphs={[
                    "The programme follows a CBCS-style semester structure across six semesters. Credits are earned through core courses, discipline-specific electives, skill enhancement and ability enhancement components.",
                    "The curriculum typically moves from foundations (theory, thinkers, basic systems) to applied governance areas like local governance, financial administration, e-governance, development administration and contemporary administrative issues.",
                  ]}
                  bullets={[
                    { t: "Core courses for strong conceptual base" },
                    { t: "Elective options (DSE/GE/IDC/SEC where applicable)" },
                    { t: "Skill components to improve writing, communication, ethics and applied thinking" },
                    { t: "Assignments (TMA) + term-end exams drive scoring" },
                  ]}
                  footer="Unnati Education can help you choose the right elective combination based on your goal (UPSC/PCS, NGO, public sector, CSR, policy research)."
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Eligibility Criteria</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    IGNOU BA Public Administration Admission 2025 is open and inclusive.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem bold="Qualification:" text="10+2 or equivalent from a recognized board." />
                    <CheckItem bold="Age limit:" text="No age restriction." />
                    <CheckItem bold="Medium:" text="English (as stated in your draft; IGNOU often offers bilingual options in many programmes—confirm at admission)." />
                  </ul>
                  <p className="mt-4 text-slate-600 dark:text-slate-300">
                    Unnati Education can help verify documents, confirm eligibility, and guide registration from 0–100.
                  </p>
                </Card>
              </Reveal>
            </div>

            <div className="mt-6" id="syllabus" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Semester-wise Syllabus</h3>
                <p className="mt-2 text-slate-600 dark:text-slate-300">
                  Below is the syllabus list exactly as you provided. Some credit totals and a few entries look inconsistent — treat this as a reference list and verify final subject basket/credits during registration.
                </p>

                <div className="mt-5 space-y-3">
                  <SyllabusBlock title="Semester 1">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["CC", "Perspectives on Public Administration", "BPAC-101", "6"],
                        ["CC", "Administrative Thinkers", "BPAC-102", "6"],
                        ["AECC", "Environmental Studies", "BEVAE-181", "4"],
                        [
                          "SEC (Any 1)",
                          "Applied Ethics / Media and Communication Skills / Understanding Ambedkar / Indian Society: Images and Realities / General Psychology",
                          "BPYG-171 / BEGG-171 / BABG-171 / BSOG-171 / BPCG-171",
                          "4",
                        ],
                        [
                          "GE (Any 1)",
                          "Disaster Management / Media and Communication Skills / Philosophy of Religion / भारतीय सौंदर्यम शास्त्र (Sanskrit)",
                          "BPAG-171 / BEGG-171 / BPYG-172 / BSKG-171",
                          "6",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 2">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["CC", "Administrative System at Union Level", "BPAC-103", "6"],
                        ["CC", "Administrative System at State and District Levels", "BPAC-104", "6"],
                        ["SEC (Any 1)", "English Communication Skills / Hindi Bhasha aur Sanpreshan", "BEGAE-182 / BHDAE-182", "4"],
                        [
                          "GE (Any 1)",
                          "भारतीय दर्शन के मूल सिद्धांत / Gender Sensitization: Society & Culture / Psychology & Media / Language and Linguistics / Philosophy of Religion",
                          "BSKG-172 / BGDG-172 / BPCG-172 / BEGG-172 / BPYG-172",
                          "6",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 3">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["CC", "Personnel Administration", "BPAC-105", "6"],
                        ["CC", "Understanding Public Policy", "BPAC-106", "6"],
                        ["CC", "Administrative System at Union Level (as provided)", "BPAC-107", "6"],
                        ["SEC (Any 1)", "Emotional Intelligence / Counselling Psychology / Psychology for Living / Academic Writing & Composition", "BPCS-183 / BPCS-185 / BPCG-175 / BEGG-173", "4"],
                        ["GE (Any 1)", "Psychology & Media / Governance / Rethinking Development", "BPCG-173 / BPAG-173 / BSOG-173", "6"],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 4">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["CC", "Public Policy and Administration in India", "BPAC-108", "6"],
                        ["CC", "Urban Local Governance", "BPAC-109", "6"],
                        ["CC", "Rural Local Governance", "BPAC-110", "6"],
                        ["SEC (Any 1)", "Ethics in Public Affairs / Gender Sensitization / Creative Writing / Stress Management", "BPAS-184 / BHDS-184 / BEGG-174 / BPCS-185", "4"],
                        ["GE (Any 1)", "Sustainable Development / Sociology of Environment / Data Analysis / French for Beginners", "BPAG-174 / BSOS-184 / BECS-184 / BFLS-183", "6"],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 5">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Comparative Public Administration", "BPAC-111", "6"],
                        ["IDC", "Financial Administration", "BPAC-112", "6"],
                        ["DSE-1 (Any 1)", "Administrative System in BRICS / Development Administration", "BPAE-141 / BPAE-142", "6"],
                        ["DSE-2 (Any 1)", "Public Office Administration / E-Governance", "BPAE-143 / BPAE-144", "6"],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 6">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["CC", "Development Administration", "BPAC-113", "6"],
                        ["CC", "Contemporary Issues and Concerns in Indian Administration", "BPAC-114", "6"],
                        ["DSE-3 (Any 1)", "Organisational Behaviour / Research Methodology", "BPAE-145 / BPAE-146", "6"],
                        ["DSE-4 (Any 1)", "Public System Management / Social Policies and Administration", "BPAE-147 / BPAE-148", "6"],
                      ]}
                    />
                  </SyllabusBlock>
                </div>
              </Card>
            </Reveal>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Programme Objectives"
                  paragraphs={[
                    "The programme is designed to build governance understanding and develop ethical, analytical administrators.",
                  ]}
                  bullets={[
                    { t: "Understand governance processes, structures, and institutions." },
                    { t: "Develop analysis + decision-making ability relevant to public sector work." },
                    { t: "Build social responsibility and leadership mindset." },
                    { t: "Integrate learning from economics, law, and sociology." },
                    { t: "Prepare for careers in government, research, academia, and NGOs." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Learning Outcomes"
                  paragraphs={["After completing the programme, learners should be able to:"]}
                  bullets={[
                    { t: "Explain key principles and practices of administration and policymaking." },
                    { t: "Understand ethics, transparency, and accountability in governance." },
                    { t: "Improve communication, leadership, and problem-solving abilities." },
                    { t: "Apply administrative theory to real governance challenges." },
                    { t: "Build a foundation for civil services, public sector jobs, policy research, and higher studies." },
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
              title="Career Opportunities After BA Public Administration"
              subtitle="Realistic outcomes: entry-level roles + competitive exam prep + higher studies."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    A BA in Public Administration is a strong base — but don’t oversell it as a direct “officer job”.
                    For most people it works best in three paths: <b>UPSC/PCS prep</b>, <b>entry-level admin roles</b>, or <b>higher studies</b>.
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniCard title="Civil Services Prep (UPSC/PCS)" desc="Concept base for governance and administration; your output depends on disciplined prep." />
                    <MiniCard title="Government/Development Program Roles" desc="Program coordinator, data/admin support roles in schemes and agencies (often via hiring exams/experience)." />
                    <MiniCard title="NGO / Social Sector Management" desc="Project execution, monitoring, reporting and community operations." />
                    <MiniCard title="CSR & Corporate Governance Support" desc="CSR operations, stakeholder coordination, compliance support (with added skills)." />
                    <MiniCard title="Policy/Research Assistant" desc="Research projects, surveys, reports; stronger if you build writing + data skills." />
                    <MiniCard title="Higher Studies Path" desc="MA Public Administration / Governance / Political Science → better roles & specialization." />
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Why Unnati Education"
                  paragraphs={[
                    "IGNOU is flexible, but students lose marks and time because of missed deadlines and unclear assignment strategies. We fix that with structure.",
                  ]}
                  bullets={[
                    { t: "Admission & documentation guidance (step-by-step)." },
                    { t: "Latest pattern assignments (handwritten + soft copy support as per your offer model)." },
                    { t: "Previous-year papers + guess paper practice strategy." },
                    { t: "Notes and practical file support (where relevant)." },
                    { t: "Updates for re-registration, exams, results and deadlines." },
                    { t: "Mentorship model — guidance from 0–100." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Recommended Add-ons"
                  paragraphs={[
                    "Short-term certificates can increase employability — but only if you apply them with projects and practice.",
                  ]}
                  bullets={[
                    { t: "Diploma in Public Policies & Governance" },
                    { t: "Certificate in Human Rights" },
                    { t: "Diploma in Non-profit Management" },
                    { t: "Certificate in Political Leadership & Governance" },
                    { t: "Foreign language basics for international exposure" },
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
                          <th className="py-3 font-black text-slate-700 dark:text-slate-200">Key Benefit</th>
                        </tr>
                      </thead>
                      <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                        <Row k="Accreditation" v="UGC-recognized and widely accepted degree" />
                        <Row k="Flexibility" v="Study from anywhere with ODL + online materials" />
                        <Row k="Design" v="NEP 2020 aligned modular structure (as stated)" />
                        <Row k="Skill Growth" v="Leadership, communication, policy analysis foundations" />
                        <Row k="Career Scope" v="Policy/NGO/CSR/research/higher studies pathways" />
                        <Row k="Support" v="Unnati Education: 0–100 guidance" />
                      </tbody>
                    </table>
                  </div>
                </Card>
              </Reveal>
            </div>

            <div className="mt-8" id="faq" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">FAQs</h3>
                <div className="mt-4 grid gap-3">
                  <Faq q="What is the IGNOU BA Public Administration Programme?" a="A distance (ODL) bachelor’s programme focused on governance, policy and administrative systems." />
                  <Faq q="Who can apply?" a="Anyone with 10+2 (or equivalent). No age limit." />
                  <Faq q="How long is the programme?" a="Minimum 3 years, maximum 6 years (as stated in your draft)." />
                  <Faq q="Is it valid for government jobs?" a="UGC-recognized IGNOU degrees are generally accepted; eligibility for specific jobs depends on recruitment rules." />
                  <Faq q="Can I prepare for UPSC with this programme?" a="Yes. Many students use it as a concept base alongside dedicated UPSC/PCS preparation." />
                  <Faq q="How does Unnati support students?" a="Admissions, assignments, exam workflow, deadlines and ongoing guidance — from 0–100." />
                  <Faq q="What are career options?" a="UPSC/PCS prep, entry-level admin roles, NGOs, CSR support, policy research assistant roles, and higher studies." />
                </div>
              </Card>
            </Reveal>

            <div className="mt-8" id="conclusion" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Conclusion</h3>
                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                  <p>
                    IGNOU BA Public Administration Admission 2025 is a strong starting point for students who want governance clarity, public system understanding, and a base for civil services or policy work.
                  </p>
                  <p>
                    The biggest advantage is flexibility — but the biggest risk is poor planning. If you want results, you need disciplined assignments + exam strategy + consistent revision.
                  </p>
                  <p>
                    Unnati Education supports you end-to-end so you don’t miss deadlines or waste semesters — guidance from 0–100.
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
              subtitle="Share your name, qualification, and interest. We’ll guide admission + assignments + exams."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Share your <b>name</b>, <b>qualification</b>, and <b>goal</b> (UPSC/PCS / NGO / CSR / higher studies). We’ll handle admission, assignments, and exam workflow.
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
            <Pill tone="blue">Governance • Policy</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA Public Administration
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAFPA</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              This programme helps students understand governance, policymaking, and how public institutions are managed — with the flexibility of distance learning.
            </p>
            <p>
              It’s especially useful for students aiming for civil services/PCS prep, NGO management, public sector support roles, and policy research pathways.
            </p>
            <p>
              Deadline mentioned in your content is <b>31 August 2025</b>. Unnati Education supports admissions, subject planning, assignments, and exams.
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
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFPA" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: WhatsApp <b>“BAFPA 2025”</b> for faster help.
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

function IconBox({ children }) {
  return (
    <div className="grid h-11 w-11 place-items-center rounded-xl bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
      {children}
    </div>
  );
}

/* ---------------- SYLLABUS UI ---------------- */

function SyllabusBlock({ title, children }) {
  return (
    <details className="group rounded-2xl border border-slate-200/80 bg-white p-4 dark:border-white/10 dark:bg-white/5">
      <summary className="cursor-pointer list-none font-black text-slate-900 dark:text-white flex items-center justify-between gap-3">
        <span>{title}</span>
        <span className="grid h-8 w-8 place-items-center rounded-xl bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
          <PlusIcon className="h-4 w-4 transition group-open:rotate-45" />
        </span>
      </summary>
      <div className="mt-4">{children}</div>
    </details>
  );
}

function SyllabusTable({ headers = [], rows = [] }) {
  return (
    <div className="overflow-x-auto rounded-2xl border border-slate-200/70 dark:border-white/10">
      <table className="min-w-[820px] w-full text-left text-sm">
        <thead className="bg-slate-50 dark:bg-white/5">
          <tr>
            {headers.map((h) => (
              <th key={h} className="py-3 px-4 font-black text-slate-700 dark:text-slate-200">
                {h}
              </th>
            ))}
          </tr>
        </thead>
        <tbody className="divide-y divide-slate-200/60 dark:divide-white/10 bg-white/90 dark:bg-transparent">
          {rows.map((r, idx) => (
            <tr key={idx} className="align-top">
              <td className="py-3 px-4 font-semibold text-slate-900 dark:text-white">{r[0]}</td>
              <td className="py-3 px-4 text-slate-600 dark:text-slate-300">{r[1]}</td>
              <td className="py-3 px-4 text-slate-600 dark:text-slate-300">{r[2]}</td>
              <td className="py-3 px-4 font-semibold text-slate-900 dark:text-white">{r[3]}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

/* ---------------- FAQ ---------------- */

function Faq({ q, a }) {
  return (
    <details className="group rounded-2xl border border-slate-200/80 bg-white p-4 dark:border-white/10 dark:bg-white/5">
      <summary className="cursor-pointer list-none font-black text-slate-900 dark:text-white flex items-center justify-between gap-3">
        <span>{q}</span>
        <span className="grid h-8 w-8 place-items-center rounded-xl bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900">
          <PlusIcon className="h-4 w-4 transition group-open:rotate-45" />
        </span>
      </summary>
      <div className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">{a}</div>
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

function GovIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 3 2 8v2h20V8L12 3Zm-8 9h16v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7Zm3 2v5h2v-5H7Zm4 0v5h2v-5h-2Zm4 0v5h2v-5h-2Z" />
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
