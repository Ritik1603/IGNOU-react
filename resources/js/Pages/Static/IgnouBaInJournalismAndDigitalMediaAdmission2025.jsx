import { useEffect, useMemo, useRef } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaJournalismDigitalMediaAdmission2025() {
  const infoTiles = useMemo(
    () => [
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Programme", value: "BA Journalism & Digital Media", icon: <MediaIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFJDM", icon: <PenIcon className="h-5 w-5" /> },
      { label: "Admission Cycle", value: "July 2025", icon: <CalendarIcon className="h-5 w-5" /> },
      { label: "Last Date", value: "31 Aug 2025 (Tentative)", icon: <DeadlineIcon className="h-5 w-5" /> },
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
        title="IGNOU BA Journalism & Digital Media Admission 2025 | BAFJDM – Unnati Education"
        description="Complete guide for IGNOU BA in Journalism and Digital Media (BAFJDM) admission 2025: eligibility, highlights, syllabus, careers, and Unnati Education support."
        keywords="BA in Journalism and Digital Media Admission 2025, BAFJDM, IGNOU Journalism Admission, BA Journalism Course, Digital Media Degree, Unnati Education"
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

          {/* WHY + OVERVIEW */}
          <Section>
            <div id="why" />
            <SectionHeader
              eyebrow="Why Journalism + Digital Media"
              title="Why Study IGNOU BA in Journalism and Digital Media (BAFJDM)?"
              subtitle="Modern media isn’t only newspapers or TV — it’s multi-platform storytelling, creators, and digital-first skills."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="5 Reasons Students Choose BAFJDM"
                  paragraphs={[
                    "The media industry rewards skill, speed, and storytelling clarity. BAFJDM is built around practical media understanding with distance learning flexibility.",
                  ]}
                  bullets={[
                    { b: "ODL flexibility:", t: "Study from anywhere — useful for working professionals and students." },
                    { b: "NEP/CBCS alignment:", t: "Semester-based structure with core + elective/skill components (verify final basket during registration)." },
                    { b: "Digital-first practical angle:", t: "Podcasting, content production awareness, and platform communication skills." },
                    { b: "UGC-recognised degree:", t: "Valid for higher studies and jobs (subject to recruitment rules)." },
                    { b: "Unnati support (0–100):", t: "Admissions + subject choice + assignments + exam workflow guidance." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Programme Overview"
                  paragraphs={[
                    "IGNOU’s BA in Journalism and Digital Media is designed for learners who want a strong base in journalism fundamentals plus the mindset required for today’s digital platforms.",
                    "You learn how reporting, editing, ethics, media regulations, PR and corporate communication work — along with skills that support content creation and distribution.",
                    "If you want career results, don’t treat it like a “distance degree only.” Build a portfolio (articles, reels, podcasts) alongside the syllabus.",
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
              title="IGNOU BAFJDM Admission 2025 Highlights"
              subtitle="Quick overview of key programme details in one place."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM" tone="primary">
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
                  <b>Note (honest):</b> Your original draft mentioned “148 credits” for BAFJDM. That’s a specific number and can easily be wrong if IGNOU updates structure.
                  We’re not hard-claiming totals here. Verify final credits/structure from IGNOU at admission / programme guide.
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
                      <Row k="Programme Name" v="Bachelor of Arts in Journalism and Digital Media (BAFJDM)" />
                      <Row k="Admission Cycle" v="July 2025 (as stated)" />
                      <Row k="Last Date" v="31 August 2025 (Tentative)" />
                      <Row k="Duration" v="Minimum 3 Years, Maximum 6 Years" />
                      <Row k="Mode" v="Open and Distance Learning (ODL + Online Support)" />
                      <Row k="Medium" v="English & Hindi (as per your draft)" />
                      <Row k="Framework" v="CBCS aligned with NEP 2020 (as stated; verify final structure)" />
                      <Row k="Focus" v="Journalism, digital media, media ethics, PR & content strategy" />
                      <Row k="Support" v="Unnati Education – guidance from 0–100" />
                    </tbody>
                  </table>
                </div>

                <p className="mt-4 text-slate-600 dark:text-slate-300">
                  Apply early. Most admission issues happen because students upload incorrect documents or select the wrong subject basket during registration.
                </p>
              </Card>
            </Reveal>

            <div className="mt-6" />

            <Reveal>
              <ContentCard
                title="What You’ll Learn (Practical Outcomes)"
                paragraphs={[
                  "This programme aims to make you comfortable with writing, media understanding, and multi-platform communication. Don’t overhype it as “job guarantee” — the industry hires based on output + portfolio.",
                ]}
                bullets={[
                  { t: "Write and edit stories across formats (news, features, scripts)." },
                  { t: "Understand media ethics, media law basics, and regulation frameworks." },
                  { t: "Develop digital storytelling awareness (audio/video workflow basics)." },
                  { t: "Read social media trends + audience behavior and respond strategically." },
                  { t: "Build personal brand basics (portfolio + consistent output)." },
                ]}
              />
            </Reveal>
          </Section>

          {/* SYLLABUS */}
          <Section>
            <div id="structure" />
            <SectionHeader
              eyebrow="Syllabus"
              title="Curriculum Structure + Semester-wise Syllabus"
              subtitle="Six semester structure with core + elective/skill components. Verify final basket/options during registration."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="Curriculum Structure Summary"
                  paragraphs={[
                    "BAFJDM is presented as a six-semester programme. Students typically study core journalism courses plus skill-enhancement and elective options (where available).",
                    "The programme flow usually moves from journalism fundamentals → ethics/regulations → writing → audio/podcast → mobile/digital production → PR/corporate communication.",
                  ]}
                  bullets={[
                    { t: "Foundations: journalism basics + media literacy" },
                    { t: "Ethics/regulations: credibility and compliance mindset" },
                    { t: "Writing: reporting + editing style improvements" },
                    { t: "Audio/video exposure: podcast + digital production awareness" },
                    { t: "PR/corporate communication: brand + stakeholder communication" },
                    { t: "Assignments + term-end exams strongly impact scoring" },
                  ]}
                  footer="Unnati Education can guide subject selection and assignment strategy so you don’t lose marks due to avoidable mistakes."
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Eligibility Criteria</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300">
                    IGNOU BAFJDM Admission 2025 is open and inclusive.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem bold="Qualification:" text="10+2 (or equivalent) from a recognized board." />
                    <CheckItem bold="Streams:" text="Any stream (Arts/Commerce/Science/Technical)." />
                    <CheckItem bold="Age limit:" text="No age restriction." />
                    <CheckItem bold="Medium:" text="English & Hindi (as stated in your draft; confirm at admission)." />
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
                <h3 className="font-black text-slate-900 dark:text-white">Semester-wise Syllabus (As Provided)</h3>
                <p className="mt-2 text-slate-600 dark:text-slate-300">
                  Below is your syllabus list converted from your Blade draft. Treat elective baskets as “options” — final availability depends on IGNOU registration options.
                </p>

                <div className="mt-5 space-y-3">
                  <SyllabusBlock title="Semester 1">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Introduction to Journalism and Digital Media", "BNM-021", "6"],
                        ["VOC (Any 1)", "Reporting in Journalism / Video Editing / Entrepreneurship", "BNMV-101 / BNMV-102 / BCOS-185", "4"],
                        [
                          "IDC (Any 1)",
                          "Media and Communication Skills / Applied Ethics / Disaster Management / Understanding Ambedkar / General Psychology / Madhyakaleen Bharatiya Sahitya evam Sanskriti / Indian Society: Images and Realities / Pracheen Bharatiya Rajniti",
                          "BEGG-171 / BPYI-101 / BPAG-171 / BABG-171 / BPCG-171 / BHDG-175 / BSOG-171 / BSKG-178",
                          "6",
                        ],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Computer Applications in Business / Tourism Anthropology / Anuvaad Siddhant Evam Pravidhi / Developing Emotional Competence / Creative Writing / Machine Translation",
                          "BEGS-183 / BPCS-183 / BCOS-183 / BANS-183 / BHDS-183 / BPCS-185 / BEGG-174 / BTTS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 2">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Media and Information Literacy", "BNM-023", "6"],
                        ["VOC (Any 1)", "Editing for Journalism / Digital Photography / Personal Selling and Salesmanship", "BNMV-103 / BNMV-104 / BCOS-186", "4"],
                        ["AECC (Any 1)", "Environmental Studies / English Communication Skills / हिंदी भाषा और संप्रेषण / Study of Urdu Progressive Poetry / Sanskrit Sahitya", "BEVAE-181 / BEGAE-182 / BHDAE-182 / BUDAE-182 / BSKAE-182", "4"],
                        ["VAC (Any 1)", "Value Education / Gender Sensitization: Society and Culture / Disability, Society and Culture", "BEDSV-101 / BGDG-172 / BMDG-171", "6"],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 3">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Journalistic Writings", "BNM-025", "6"],
                        ["DSC", "Media Ethics and Regulations", "BNM-026", "6"],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Developing Emotional Competence / Life Skills / Computer Application in Business / Laboratory Management Skills / Tourism Anthropology / Anuvaad Siddhant Evam Pravidhi",
                          "BEGS-183 / BPCS-183 / BPCS-185 / BSSS-183 / BCOS-183 / BCHS-183 / BANS-183 / BHDS-183",
                          "4",
                        ],
                        [
                          "GE (Any 1)",
                          "Psychology for Health and Well-being / Governance: Issues and Challenges / Rethinking Development / समाचार पत्र और फीचर लेखन / Academic Writing & Composition / Philosophy of Religion / Indian Society: Images and Realities",
                          "BPCG-173 / BPAG-172 / BSOG-173 / BHDG-173 / BEGG-173 / BPYG-172 / BSOG-171",
                          "6",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 4">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Audio Podcast", "BNM-029", "6"],
                        ["DSC", "Persuasive Communication Strategies", "BNM-030", "6"],
                        ["MINOR (Any 1)", "Digital Photography / Video Editing / Personal Selling and Salesmanship", "BNMV-104 / BNMV-102 / BCOS-186", "4"],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Developing Emotional Competence / Life Skills / Creative Writing / Anuvaad Siddhant Evam Pravidhi / Tourism Anthropology / Computer Applications in Business",
                          "BEGS-183 / BPCS-183 / BPCS-185 / BSSS-183 / BEGG-174 / BHDS-183 / BANS-183 / BCOS-183",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 5">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Mobile Journalism", "BNM-031", "6"],
                        ["DSC", "Research Methods in Media Studies", "BNM-032", "6"],
                        ["MINOR (Any 1)", "Digital Photography / Video Editing / Entrepreneurship / Personal Selling and Salesmanship", "BNMV-104 / BNMV-102 / BCOS-185 / BCOS-186", "4"],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Life Skills / Creative Writing / Computer Applications in Business / Anuvaad Siddhant Evam Pravidhi / Tourism Anthropology / Developing Emotional Competence",
                          "BEGS-183 / BPCS-183 / BSSS-183 / BEGG-174 / BCOS-183 / BHDS-183 / BANS-183 / BPCS-185",
                          "4",
                        ],
                      ]}
                    />
                  </SyllabusBlock>

                  <SyllabusBlock title="Semester 6">
                    <SyllabusTable
                      headers={["TYPE", "SUBJECTS", "CODE", "CREDITS"]}
                      rows={[
                        ["DSC", "Digital Media Production", "BNM-033", "6"],
                        ["DSC", "Public Relations and Corporate Communication", "BNM-034", "6"],
                        ["MINOR (Any 1)", "Digital Photography / Video Editing / Entrepreneurship / Personal Selling and Salesmanship", "BNMV-104 / BNMV-102 / BCOS-185 / BCOS-186", "4"],
                        [
                          "SEC (Any 1)",
                          "Writing and Study Skills / Emotional Intelligence / Developing Emotional Competence / Life Skills / Creative Writing / Anuvaad Siddhant Evam Pravidhi / Tourism Anthropology / Computer Applications in Business",
                          "BEGS-183 / BPCS-183 / BPCS-185 / BSSS-183 / BEGG-174 / BHDS-183 / BANS-183 / BCOS-183",
                          "4",
                        ],
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
                  paragraphs={["This programme aims to build balanced media professionals who can communicate clearly and ethically across platforms."]}
                  bullets={[
                    { t: "Build journalism fundamentals: reporting, writing, editing." },
                    { t: "Develop media ethics and regulation awareness." },
                    { t: "Introduce audio/podcast and digital production workflows." },
                    { t: "Support communication strategy and persuasion skills." },
                    { t: "Prepare a base for higher studies and media careers." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Learning Outcomes"
                  paragraphs={["After completing BAFJDM, learners should be able to:"]}
                  bullets={[
                    { t: "Write structured content for multiple formats." },
                    { t: "Assess sources and reduce misinformation risk." },
                    { t: "Understand platform communication + audience mindset." },
                    { t: "Use basic media production concepts (audio/video)." },
                    { t: "Apply ethics and regulatory awareness in content decisions." },
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
              title="Career Opportunities After BA Journalism & Digital Media"
              subtitle="Realistic outcomes depend on skills + portfolio, not only the degree."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Don’t sell this as a “direct job guarantee.” Media hiring is brutal: they want proof of work.
                    This degree gives structure, but your results come from output: writing samples, reels, podcasts, social content, and consistency.
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniCard title="Journalism (Reporting/Editing)" desc="Reporter, feature writer, editor assistant, research support roles." />
                    <MiniCard title="Digital Content + Social Media" desc="Content strategist, social media exec, SEO/content roles (better with real projects)." />
                    <MiniCard title="PR + Corporate Communication" desc="PR exec, media coordinator, corporate comms support roles." />
                    <MiniCard title="Broadcast + Multimedia" desc="Video editing, production assistant, podcast production support." />
                    <MiniCard title="Research + Media Analysis" desc="Research assistant roles; stronger if you add writing + analytics skills." />
                    <MiniCard title="Higher Studies" desc="MA Journalism/Mass Comm/Digital Media to specialize." />
                    <MiniCard title="Independent Creator" desc="Freelance journalism, YouTube/podcasting, niche content pages." />
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Unnati Education Support (0–100)"
                  paragraphs={[
                    "IGNOU is flexible, but that flexibility is where students mess up: missed deadlines, wrong uploads, weak assignment strategy. We add structure.",
                  ]}
                  bullets={[
                    { t: "Admission + documentation support (step-by-step)." },
                    { t: "Subject/elective guidance based on your career goal." },
                    { t: "Assignments strategy + practice support." },
                    { t: "Exam workflow guidance: form fill, dates, and prep plan." },
                    { t: "Updates for re-registration, exams, results and deadlines." },
                  ]}
                />
              </Reveal>

              <Reveal>
                <ContentCard
                  title="Add-on Certifications (Profile Boost)"
                  paragraphs={[
                    "Certificates help only if you apply them. Don’t collect certificates like trophies — build projects that prove competence.",
                  ]}
                  bullets={[
                    { t: "Digital Marketing + SEO + analytics basics" },
                    { t: "Video editing + storytelling workflows" },
                    { t: "Public Relations + brand communication" },
                    { t: "Photography + visual editing fundamentals" },
                    { t: "Creative writing + scriptwriting basics" },
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
                        <Row k="Accreditation" v="UGC-recognized degree (job eligibility depends on recruitment rules)" />
                        <Row k="Flexibility" v="ODL: study anywhere with printed + online support" />
                        <Row k="Industry Relevance" v="Digital-first content + journalism fundamentals" />
                        <Row k="Skill Growth" v="Writing, ethics, persuasion, and media understanding" />
                        <Row k="Career Scope" v="News/media, PR, content marketing, creator economy" />
                        <Row k="Support" v="Unnati Education: end-to-end guidance" />
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
                  <Faq q="What is BAFJDM?" a="A BA programme focused on journalism and digital media with distance learning (ODL) flexibility." />
                  <Faq q="Who can apply?" a="10+2 (or equivalent) from a recognized board. No age restriction." />
                  <Faq q="How long is the programme?" a="Minimum 3 years, maximum 6 years." />
                  <Faq q="Is the degree valid for jobs?" a="IGNOU degrees are generally accepted as per recognition; specific job eligibility depends on recruitment rules." />
                  <Faq q="Does the programme include practical skills?" a="It includes practical-oriented components like audio/podcast, digital production, writing and editing-focused courses." />
                  <Faq q="What support does Unnati provide?" a="Admissions, subject selection, assignments strategy and exam workflow guidance — from 0–100." />
                </div>
              </Card>
            </Reveal>

            <div className="mt-8" id="conclusion" />
            <Reveal>
              <Card>
                <h3 className="font-black text-slate-900 dark:text-white">Conclusion</h3>
                <div className="mt-3 space-y-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                  <p>
                    IGNOU BA Journalism & Digital Media (BAFJDM) is a solid base for learners who want to understand media, build writing skills, and grow into digital-first communicators.
                  </p>
                  <p>
                    But your career outcome depends on proof of work. If you want to stand out, build a portfolio alongside the programme: articles, short videos, podcast clips, or a niche content page.
                  </p>
                  <p>
                    Unnati Education supports the process end-to-end so you don’t miss deadlines or waste semesters — guidance from 0–100.
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
              subtitle="Share your name, qualification, and goal. We’ll guide admission + assignments + exams."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Share your <b>name</b>, <b>qualification</b>, and what you want to do (journalism / content / PR / creator).
                  We’ll handle admission workflow + assignment strategy + exam plan.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM" tone="primary">
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
            <Pill tone="blue">Journalism • Digital Media</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA Journalism & Digital Media
            <span className="block text-blue-700 dark:text-blue-300">Admission 2025</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAFJDM</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              Stories drive today’s world — from breaking-news reels to long-form podcasts. BAFJDM is designed for learners who want journalism fundamentals plus digital-first communication mindset.
            </p>
            <p>
              The programme suits aspiring journalists, editors, content creators, social media professionals, and communication/PR roles. It’s distance-friendly — but your outcomes depend on your portfolio and output.
            </p>
            <p>
              Tentative deadline mentioned in your draft is <b>31 August 2025</b>. Unnati Education supports admissions, subject planning, assignments, and exams.
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
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: WhatsApp <b>“BAFJDM 2025”</b> for faster help.
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM"
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

/* extra icon for Journalism/Digital Media */
function MediaIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4l-4 4v-4H6a2 2 0 0 1-2-2V5Zm4 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Zm0 4a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H8Z" />
    </svg>
  );
}
