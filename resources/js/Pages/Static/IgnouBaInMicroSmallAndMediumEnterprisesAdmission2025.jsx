import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaMsmeAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA in MSME", icon: <StoreIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAMSME", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2025 (Tentative)", icon: <DeadlineIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Eligibility", value: "10+2 (Any Stream)", icon: <EligibilityIcon className="h-5 w-5" /> },
      { label: "Mode", value: "UGC-DEB • ODL", icon: <BadgeIcon className="h-5 w-5" /> },
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
        title="IGNOU BA in Micro, Small, and Medium Enterprises Admission 2025 | BAMSME – Unnati Education"
        description="We guide students through IGNOU BA in Micro, Small, and Medium Enterprises (BAMSME) admission 2025 with clear support, simple learning paths, syllabus, careers, and exam workflow help."
        keywords="BA MSME Admission, BAMSME IGNOU, MSME Degree Course, BA MSME Syllabus, IGNOU MSME Program"
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

          {/* WHY + ABOUT */}
          <Section>
            <div id="why" />
            <SectionHeader
              eyebrow="Why MSME"
              title="Why Study IGNOU BA in Micro, Small, and Medium Enterprises (BAMSME)?"
              subtitle="A practical undergraduate path for aspiring entrepreneurs and small-business leaders."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="What Makes BAMSME Practical"
                  paragraphs={[
                    "This programme combines entrepreneurship, management, and basic economics to help learners understand how micro and small enterprises actually operate.",
                    "If your goal is real-world business execution (not only theory), BAMSME is more aligned than many generic degrees — but your success still depends on your skills and action.",
                  ]}
                  bullets={[
                    { b: "Entrepreneur mindset:", t: "Learn how to plan, start, and sustain small enterprises." },
                    { b: "ODL flexibility:", t: "Study while working or managing family/business responsibilities." },
                    { b: "Skills + systems:", t: "Basics of finance, operations, marketing, and compliance." },
                    { b: "Inclusive:", t: "No age limit — only discipline matters." },
                    { b: "Unnati support:", t: "Guidance from admission to exams (0–100)." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="5 Reasons Students Choose BAMSME (As Your Draft)"
                  paragraphs={[
                    "Your Blade page listed clear reasons — we’re keeping the message but presenting it cleanly for your React layout.",
                  ]}
                  bullets={[
                    { b: "Aligns with India’s entrepreneurial push:", t: "Make in India / Startup India type ecosystem awareness." },
                    { b: "Flexible and inclusive design:", t: "Distance learning for rural students, professionals, and first-gen founders." },
                    { b: "Industry-related curriculum:", t: "Focus on small-business development and practical operations." },
                    { b: "Empowerment through practical learning:", t: "Leadership, financial literacy, marketing strategy, and problem-solving." },
                    { b: "Partner support:", t: "Unnati Education helps you avoid deadline/registration mistakes." },
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
              title="IGNOU BAMSME Admission 2025 Highlights"
              subtitle="Programme overview, eligibility, credits, mode, and Unnati support."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAMSME" tone="primary">
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
                <div className="mt-1 overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Feature</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Details</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="University" v="Indira Gandhi National Open University (IGNOU)" />
                      <Row k="Program Name" v="Bachelor of Arts in Micro, Small, and Medium Enterprises (BAMSME)" />
                      <Row k="School (as provided)" v="School of Vocational Education and Training" />
                      <Row k="Mode of Study" v="Open Distance Learning + Online Resources (as provided)" />
                      <Row k="Admission Cycle" v="July 2025" />
                      <Row k="Last Date (tentative)" v="31 August 2025" />
                      <Row k="Duration" v="Minimum 3 Years – Maximum 6 Years" />
                      <Row k="Medium" v="English (as provided)" />
                      <Row k="Eligibility" v="10+2 or equivalent" />
                      <Row k="Total Credits (as provided)" v="120 credits across 6 semesters" />
                      <Row k="Focus Area" v="Entrepreneurship, management, finance, marketing & MSME development" />
                      <Row k="Support" v="Unnati Education: complete assistance from 0–100" />
                    </tbody>
                  </table>
                </div>

                <div className="mt-5 rounded-2xl border border-amber-200/70 bg-amber-50 p-4 text-sm text-amber-900 dark:border-amber-500/25 dark:bg-amber-500/10 dark:text-amber-100">
                  <b>Pro tip (kept from your draft, but made honest):</b> This programme can help you become a job creator — but only if you actually execute:
                  pick a niche, build a small business plan, learn numbers, and build operational discipline.
                </div>
              </Card>
            </Reveal>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Programme Overview"
                  paragraphs={[
                    "The IGNOU BA MSME is positioned as a foundation for enterprise management and entrepreneurship, combining business administration basics with economics, finance, marketing, and operations.",
                    "The core advantage is alignment with practical business realities — case thinking, business planning, and small enterprise execution mindset.",
                  ]}
                  footer="If you want real outcomes, don’t treat assignments as a formality. Use them to build your business notes, plans, and market understanding."
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="What You’ll Actually Gain (Skills)"
                  paragraphs={[
                    "Your page lists strong claims — but here’s the grounded version: you gain a structured base, and you must convert it into action.",
                  ]}
                  bullets={[
                    { t: "Basic legal/economic framework awareness around MSMEs" },
                    { t: "Business planning mindset (budgeting, costing, break-even thinking)" },
                    { t: "Marketing and digital strategy basics (only useful if you practice)" },
                    { t: "Operations/logistics and compliance awareness" },
                    { t: "Rural/community enterprise orientation and growth thinking" },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="BAMSME Curriculum Structure + Semester-wise Syllabus (As Provided)"
              subtitle="Presented in your React layout with collapsible semester blocks."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Curriculum Structure (From Your Draft)"
                  paragraphs={[
                    "Your draft says BAMSME follows CBCS under NEP 2020 with 120 credits across 6 semesters, and that each credit represents roughly 30 hours of study.",
                    "Structure described includes core courses, electives, skill-enhancement modules for communication/digital skills, and ability-enhancement courses tied to sustainability and policy topics.",
                  ]}
                  footer="Verify the latest programme guide at admission time — IGNOU structures can get revised, and your page should not hard-claim what you can’t verify."
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Eligibility Criteria</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    Kept exactly from your Blade page, just presented in this layout.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem bold="Qualification:" text="10+2 or equivalent from an accredited board." />
                    <CheckItem bold="Age limit:" text="No age limit." />
                    <CheckItem bold="Medium:" text="English." />
                  </ul>
                  <p className="mt-4 text-slate-600 dark:text-slate-300">
                    Unnati Education can help verify eligibility, choose electives properly, and complete registration without technical mistakes — guidance from 0–100.
                  </p>
                </Card>
              </Reveal>
            </div>

            <div className="mt-6" />

            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Semester-wise Syllabus</h3>
                <p className="mt-2 text-slate-600 dark:text-slate-300">
                  Below is the syllabus list converted from your Blade tables. Semester 4 in your Blade repeats Semester 3 content (looks like a copy-paste error).
                  I’m keeping it “as provided” but you should fix that in the source content.
                </p>

                <div className="mt-5 space-y-3">
                  <SyllabusBlock title="Semester 1">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "English at Workplace", "BEGLA-136", "6"],
                        ["DSC", "Entrepreneurship and Small Business", "BTMC-134", "6"],
                        ["IDC", "Introductory Microeconomics", "BECC-101", "6"],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Developing Emotional Competence / Life Skills / Computer Application in Business / Tourism Anthropology / Laboratory Management Skills / Anuvaad Siddhant Evam Pravidhi",
                          "BEGS-183 / BPCS-183 / BPCS-185 / BSSS-183 / BCOS-183 / BANS-183 / BCHS-183 / BHDS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 2">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Business Communication", "BCOLA-138", "6"],
                        ["DSC", "Financial Accounting", "BCOC-131", "6"],
                        ["AECC", "Environmental Studies", "BEVAE-101", "4"],
                        ["VAC", "Value Education", "BEDSV-101", "6"],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 3">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "CSR Projects & Programmes", "BERC-131", "6"],
                        ["DSC", "Business Organization and Management", "BCOC-132", "6"],
                        [
                          "AECC (Any 1)",
                          "English Communication Skills / हिंदी भाषा और संप्रेषण / Study of Urdu Progressive Poetry / Sanskrit Sahitya",
                          "BEGAE-182 / BHDAE-182 / BUDAE-182 / BSDAE-182",
                          "4",
                        ],
                        [
                          "SEC (Any 1)",
                          "Managing Stress / Emotional Intelligence / Writing and Study Skills / Computer Application in Business / Developing Emotional Competence / Life Skills",
                          "BPCS-186 / BPCS-183 / BEGS-183 / BCOS-183 / BPCS-185 / BSSS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 4 (As Provided — likely duplicated)">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "CSR Projects & Programmes", "BERC-131", "6"],
                        ["DSC", "Business Organization and Management", "BCOC-132", "6"],
                        [
                          "AECC (Any 1)",
                          "English Communication Skills / हिंदी भाषा और संप्रेषण / Study of Urdu Progressive Poetry / Sanskrit Sahitya",
                          "BEGAE-182 / BHDAE-182 / BUDAE-182 / BSDAE-182",
                          "4",
                        ],
                        [
                          "SEC (Any 1)",
                          "Managing Stress / Emotional Intelligence / Writing and Study Skills / Computer Application in Business / Developing Emotional Competence / Life Skills",
                          "BPCS-186 / BPCS-183 / BEGS-183 / BCOS-183 / BPCS-185 / BSSS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 5">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Financial Management", "BCOE-143", "6"],
                        ["DSC", "Fundamentals of Investment", "BCOE-144", "6"],
                        ["MINOR (Any 1)", "Computer Application in Business / Entrepreneurship / Personal Selling and Salesmanship", "BCOS-183 / BCOS-185 / BCOS-186", "4"],
                        [
                          "SEC (Any 1)",
                          "Life Skills / Emotional Intelligence / Writing and Study Skills / Logistics Management / Computer Application in Business / Tourism Anthropology",
                          "BSSS-183 / BPCS-183 / BEGS-183 / BPAS-184 / BCOS-183 / BANS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 6">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Auditing", "BCOE-145", "6"],
                        ["DSC", "Micro, Small & Medium Enterprises", "BCOE-146", "6"],
                        ["MINOR (Any 1)", "Computer Application in Business / Entrepreneurship / Personal Selling and Salesmanship", "BCOS-183 / BCOS-185 / BCOS-186", "4"],
                        [
                          "SEC (Any 1)",
                          "Life Skills / Emotional Intelligence / Writing and Study Skills / Logistics Management / Computer Application in Business / Tourism Anthropology",
                          "BSSS-183 / BPCS-183 / BEGS-183 / BPAS-184 / BCOS-183 / BANS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>
                </div>
              </Card>
            </Reveal>
          </Section>

          {/* CAREERS + UNNATI + ADDONS + FAQ + CONCLUSION */}
          <Section alt>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="Career Opportunities After BA in MSME"
              subtitle="Career outcomes depend on execution. The degree gives base; your skills and proof of work decide results."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Your Blade content claims strong outcomes. Here’s the reality: MSME careers and entrepreneurship are performance-based.
                    If you don’t build practical skills (numbers, marketing, operations), the degree alone won’t carry you.
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniCard title="Entrepreneurship & Startups" desc="Turn ideas into a business: production, services, e-commerce, consulting (needs execution + discipline)." />
                    <MiniCard title="Business Development & Operations" desc="Operations exec, growth support, business analyst-type roles in MSMEs/startups." />
                    <MiniCard title="Finance & Accounts" desc="Finance associate, accounts/compliance support roles (stronger with practical practice)." />
                    <MiniCard title="Digital Marketing" desc="Campaign handling, social marketing, product branding — must build real projects." />
                    <MiniCard title="CSR & Development Sector" desc="Work with NGOs/government on community enterprise and CSR projects." />
                    <MiniCard title="Supply Chain & Logistics" desc="Distribution planning and logistics roles (especially e-commerce ecosystem)." />
                    <MiniCard title="Rural Enterprise & Social Innovation" desc="Training/mentoring and grassroots entrepreneurship enablement roles." />
                    <MiniCard title="Higher Education" desc="MBA / MA Economics / PG diplomas in entrepreneurship & MSME specializations." />
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Why Unnati Education (0–100 Support)"
                  paragraphs={[
                    "Distance education punishes laziness and disorganization. Students lose marks because they miss deadlines or submit weak assignments. That’s where Unnati support matters.",
                  ]}
                  bullets={[
                    { t: "Counseling on academic planning and subject selection." },
                    { t: "Assignment support each semester (handwritten + soft copy guidance as per your service model)." },
                    { t: "Past-year question papers + guess paper strategy." },
                    { t: "Project/file preparation guidance where applicable." },
                    { t: "Updates for re-registration, exams, results and deadlines." },
                    { t: "Exam coaching focus for scoring better." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Key Features (From Your Draft)"
                  paragraphs={["Your draft had multiple sections; these are the same points, condensed without changing meaning."]}
                  bullets={[
                    { b: "Vocational relevance:", t: "Applied business thinking — opportunity → operations → scale." },
                    { b: "NEP 2020 alignment:", t: "Multidisciplinary approach combining economics + entrepreneurship + digital transformation." },
                    { b: "Entrepreneur ecosystem focus:", t: "Job creation, inclusive growth, innovation and ethics." },
                    { b: "Real-world orientation:", t: "Assignments/projects using real business problems and models." },
                    { b: "Lifelong learning:", t: "Stack more certifications and programmes while working." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Recommended Add-on Courses"
                  paragraphs={[
                    "Add-ons are useful only if you apply them. Don’t hoard certificates—build one real project per certificate.",
                  ]}
                  bullets={[
                    { t: "Certificate in Digital Marketing for Start-ups" },
                    { t: "Diploma in Financial Management for MSMEs" },
                    { t: "Certificate in Online Business & E-Commerce" },
                    { t: "Diploma in Rural Entrepreneurship Development" },
                    { t: "Certificate in Export & Import Operations" },
                    { t: "Foreign languages for trade (German/French/Spanish)" },
                  ]}
                />
              </Reveal>
            </div>

            <div className="mt-8" id="faq" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">FAQs</h3>
                <div className="mt-4 grid gap-3">
                  <Faq q="What is the BA in MSME IGNOU program?" a="A vocational BA focusing on entrepreneurship, business management, and MSME development." />
                  <Faq q="Who can apply in 2025?" a="10+2 (or equivalent) from a recognized board. No upper age limit." />
                  <Faq q="How long is the program?" a="Minimum 3 years and maximum 6 years (CBCS model as stated)." />
                  <Faq q="How do you learn?" a="Open and Distance Learning with printed materials + online support and counseling." />
                  <Faq q="What skills will I gain?" a="Basics of business finance, marketing, logistics, compliance, and MSME operations mindset." />
                  <Faq q="Can I start my own business with this degree?" a="Yes, but the degree won’t do it for you — you must execute: market research, costing, sales, and operations." />
                  <Faq q="Is the degree valid for jobs?" a="Generally UGC-recognized programmes are accepted; specific eligibility depends on recruitment rules." />
                  <Faq q="How does Unnati Education help?" a="Admission, assignment strategy, exam workflow, and ongoing guidance from 0–100." />
                </div>
              </Card>
            </Reveal>

            <div className="mt-8" id="conclusion" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Conclusion</h3>
                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                  <p>
                    IGNOU BA in Micro, Small, and Medium Enterprises (BAMSME) is a practical foundation that can support entrepreneurship and MSME careers — if you treat it as a skill-building track, not a “degree only” formality.
                  </p>
                  <p>
                    This programme works best when you build real output alongside it: a business plan, basic accounting discipline, market testing, and consistent execution.
                  </p>
                  <p>
                    With Unnati Education, you don’t navigate IGNOU alone. We guide admission, subject planning, assignments, and exam workflow — from 0 to 100.
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
              title="Get Started — Contact Unnati Education Now"
              subtitle="Message or call for admission guidance, document help, and complete support."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Take the first step toward your entrepreneurial journey. Share your <b>name</b>, <b>qualification</b>, and <b>goal</b>. We’ll guide you end-to-end.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAMSME" tone="primary">
                    <WhatsAppIcon className="h-5 w-5" />
                    Message on WhatsApp
                  </CTA>
                  <CTA href="tel:+919355198199" tone="ghost">
                    <PhoneIcon className="h-5 w-5" />
                    Call Now
                  </CTA>
                </div>
                <p className="mt-3 text-sm font-black text-slate-700 dark:text-slate-200">Call / WhatsApp: 9355198199</p>
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
            <Pill tone="blue">Entrepreneurship • MSME</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in Micro, Small & Medium Enterprises
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAMSME</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              BAMSME is one of the most practical undergraduate options for learners who want to build entrepreneurship and small-business execution skills.
            </p>
            <p>
              It suits rural learners, professionals, and first-generation business owners because it’s distance-friendly — but you still need discipline and output to win.
            </p>
            <p>
              Tentative last date mentioned in your Blade is <b>31 August 2025</b>. Unnati Education supports admissions, assignments, and exam workflow.
            </p>
          </div>

          <div className="mt-5 flex flex-wrap gap-2">
            <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
              <CalendarIcon className="h-4 w-4" /> Tentative Last Date: 31 Aug 2025
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <ClockIcon className="h-4 w-4" /> Duration: 3–6 Years
            </span>
            <span className="inline-flex items-center gap-2 rounded-full border border-slate-200/70 bg-white px-3 py-1 text-xs font-black text-slate-700 dark:border-slate-800/60 dark:bg-white/5 dark:text-slate-200">
              <BadgeIcon className="h-4 w-4" /> UGC-DEB • ODL
            </span>
          </div>

          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAMSME" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: WhatsApp <b>“BAMSME 2025”</b> for faster help.
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAMSME"
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

function StoreIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M4 7.5 6.2 4h11.6L20 7.5v2a3 3 0 0 1-3 3c-1 0-1.9-.5-2.5-1.2A3.2 3.2 0 0 1 12 12.5c-1 0-1.9-.5-2.5-1.2A3.2 3.2 0 0 1 7 12.5a3 3 0 0 1-3-3v-2Zm3.2-2 1.1 2h7.4l1.1-2H7.2ZM5 13.6c.6.3 1.3.4 2 .4 1.2 0 2.2-.4 3-1.1.8.7 1.8 1.1 3 1.1s2.2-.4 3-1.1c.8.7 1.8 1.1 3 1.1.7 0 1.4-.1 2-.4V20a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-6.4ZM8 16v4h3v-4H8Zm5 0v4h3v-4h-3Z" />
    </svg>
  );
}
