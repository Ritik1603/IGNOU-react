import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInFacilityAndServicesManagementAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "Programme", value: "BA in Facility & Services Management", icon: <BuildingIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFFSM", icon: <PenIcon className="h-5 w-5" /> },
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "Offered By", value: "School of Tourism and Hospitality Service Management", icon: <BadgeIcon className="h-5 w-5" /> },
      { label: "Mode", value: "Distance Learning", icon: <HomeStudyIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Total Credits", value: "148 (6 Sem)", icon: <StackIcon className="h-5 w-5" /> },
      { label: "Language", value: "English only", icon: <LanguageIcon className="h-5 w-5" /> },
    ],
    []
  );

  const semesterData = useMemo(
    () => [
      {
        title: "First Semester: Facility Management Foundations",
        subtitle:
          "What this means: You start with fundamental concepts of facility management - what it is, why it matters, key principles. Learn building basics and maintenance fundamentals. Choose related subjects and skills to broaden your knowledge.",
        rows: [
          ["DSC", "Basics of Facility Management", "BFO003", "6"],
          ["VOC", "Introduction to Building and Maintenance", "BFOC101", "4"],
          [
            "IDC (Any 1)",
            "1. Media and Communication Skills\n2. Disaster Management\n3. General Psychology\n4. Applied Ethics\n5. Understanding Ambedkar\n6. Madhyakaleen Bharatiya Sahitya evam Sanskriti\n7. Indian Society: Images and Realities\n8. Pracheen Bharatiya Rajniti",
            "1. BEGG171\n2. BPAG171\n3. BPCG171\n4. BPYI101\n5. BABG171\n6. BHDG175\n7. BSOG171\n8. BSKG178",
            "6",
          ],
          [
            "SEC (Any 1)",
            "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Life Skills\n4. Computer Application in Business\n5. Tourism Anthropology\n6. Anuvaad Sidhaant evam Pravidhi\n7. Developing Emotional Competence\n8. An Introduction to Machine Translation",
            "1. BEGS183\n2. BPCS183\n3. BSSS183\n4. BCOS183\n5. BANS183\n6. BHDS183\n7. BPCS185\n8. BTTS183",
            "4",
          ],
        ],
      },
      {
        title: "Second Semester: Materials and Building Services",
        subtitle:
          "What this means: Learn how to manage materials and inventory for facilities - ordering, storing, tracking supplies. Study building services like plumbing, electrical systems, HVAC basics. Environmental awareness crucial for sustainable facility management.",
        rows: [
          ["DSC", "Material Management in Facilities", "BFOC102", "6"],
          ["DSC", "Building Services & Maintenance II", "BFO-002", "6"],
          ["AECC", "Environmental Studies", "BEVAE181", "4"],
          ["VAC", "Value Education", "BEDSV101", "6"],
        ],
      },
      {
        title: "Third Semester: Housekeeping and Fire Safety",
        subtitle:
          "What this means: Master housekeeping management - crucial for hotels, hospitals, offices. Study fire safety in depth - detection systems, prevention, emergency protocols, compliance. These are critical facility management responsibilities.",
        rows: [
          ["DSC", "Managing Housekeeping Services", "BFO-008", "6"],
          ["DSC", "Fire Safety in Facilities", "BFO-005", "6"],
          ["VOC", "Any 1 from Semester 1–2 Vocational stream (continuation)", "BFOC-101", "4"],
          ["AECC", "Environmental Studies", "BEVAE-181", "4"],
          ["Minor–DSC", "Any 1 from same Minor stream used earlier (e.g., Psychology & Media, Disaster Management, etc.)", "varies", "4"],
        ],
      },
      {
        title: "Fourth Semester: Human Resources and Catering",
        subtitle:
          "What this means: Learn to manage facility staff - hiring, training, scheduling, performance management. Study catering facility management - kitchens, cafeterias, food service operations. IT basics increasingly important for modern facility management systems.",
        rows: [
          ["DSC", "Human Resource Management", "BFO-009", "6"],
          ["DSC", "Managing Facilities – Catering Facilities", "BFO-011", "6"],
          ["VOC", "Any 1 from Vocational list (Sem 1–3)", "varied", "4"],
          ["AECC", "Introduction to Information Technology", "CIT-002", "4"],
          ["DSC-Minor", "Any 1 from same Minor stream chosen earlier", "varied", "4"],
        ],
      },
      {
        title: "Fifth Semester: Waste Management and Front Office",
        subtitle:
          "What this means: Study waste management and disposal - increasingly critical with environmental regulations. Learn front office operations - reception, visitor management, coordination. These complete your facility management skill set.",
        rows: [
          ["DSC", "Waste Management", "BFO006", "6"],
          ["DSC", "Managing Front Office Operations", "BFO007", "6"],
          [
            "DSC (Any 1)",
            "1. Psychology and Media\n2. Governance: Issues and Challenges\n3. Rethinking Development\n4. समाचार पत्र और फीचर लेखन\n5. Academic Writing & Composition\n6. Philosophy of Religion",
            "1. BPCG174\n2. BPAG172\n3. BSOG173\n4. BHDG173\n5. BEGG173\n6. BPYG172",
            "4",
          ],
          [
            "SEC (Any 1)",
            "1. Computer Application in Business\n2. Emotional Intelligence\n3. Life Skills\n4. Developing Emotional Competence\n5. Tourism Anthropology\n6. Writing and Study Skills\n7. Machine Translation\n8. समाचार लेखन",
            "1. BCOS183\n2. BPCS183\n3. BSSS183\n4. BPCS185\n5. BANS183\n6. BEGS183\n7. BTTS183\n8. BHDS183",
            "4",
          ],
        ],
      },
      {
        title: "Sixth Semester: Electrical/Mechanical Systems and Operations Planning",
        subtitle:
          "What this means: Learn about electrical and mechanical systems in buildings - power distribution, HVAC systems, equipment maintenance. Master operations planning - scheduling, budgeting, resource allocation, vendor management. Final semester prepares you for complete facility management responsibility.",
        rows: [
          ["DSC", "Electrical and Mechanical Systems in Facilities", "BFO010", "6"],
          ["DSC", "Facilities Operations Planning", "BFO012", "6"],
          [
            "VOC (Any 1)",
            "1. Data Analysis\n2. Logistics Management\n3. Radio Lekhan\n4. Entrepreneurship\n5. Personal Selling and Salesmanship",
            "1. BECS184\n2. BPAS184\n3. BHDS184\n4. BCOS185\n5. BCOS186",
            "4",
          ],
          [
            "SEC (Any 1)",
            "1. Tourism Anthropology\n2. Computer Application in Business\n3. Laboratory Management Skills\n4. Writing and Study Skills\n5. Anuvaad Sidhaant Evam Pravidhi\n6. Traditions and Perception of Craft in Bharat\n7. Emotional Intelligence\n8. Developing Emotional Competence\n9. Life Skills\n10. An Introduction to Machine Translation",
            "1. BANS183\n2. BCOS183\n3. BCHS183\n4. BEGS183\n5. BHDS183\n6. BHIS183\n7. BPCS183\n8. BPCS185\n9. BSSS183\n10. BTTS183",
            "4",
          ],
        ],
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
        title="IGNOU BA in Facility and Services Management Admission 2026 | BAFFSM (Distance Learning)"
        description="IGNOU BA in Facility and Services Management Admission 2026 (BAFFSM): program facts, what facility management means, semester-wise subjects in accordion, career paths, how to apply, and admission guidance."
        keywords="IGNOU BA Facility and Services Management Admission 2026, BAFFSM, Facility Management IGNOU, Infrastructure Management degree, Unnati Education"
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
          <HeroFacility />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="Quick Facts You Should Know"
              subtitle="Before diving deeper, here's everything you need to know immediately about this program."
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
                      <Row k="Full Program Name" v="Bachelor of Arts in Facility and Services Management" />
                      <Row k="Program Code" v="BAFFSM" />
                      <Row k="University" v="IGNOU - Indira Gandhi National Open University" />
                      <Row k="Offered By" v="School of Tourism and Hospitality Service Management" />
                      <Row k="Study Mode" v="Distance learning, study from anywhere" />
                      <Row k="How Long" v="3 years minimum, 6 years maximum" />
                      <Row k="Total Credits" v="148 credits across six semesters" />
                      <Row k="Language" v="English only" />
                      <Row k="Who Can Apply" v="Anyone who passed 12th standard from any stream" />
                      <Row k="Age Limit" v="No age limit at all" />
                      <Row k="When to Apply" v="Check IGNOU website for admission cycles" />
                      <Row k="Last Date" v="Visit official IGNOU site for current deadlines" />
                      <Row k="Recognition" v="UGC approved, valid everywhere" />
                      <Row k="Career Options" v="Facility Manager, Operations Manager, Property Manager, Safety Officer, Real Estate Management" />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="IGNOU BA in Facility and Services Management Admission 2026: Your Complete Guide to Building a Career in Infrastructure Management"
                  paragraphs={[
                    "Ever walked into a big corporate office, hospital, or shopping mall and wondered who makes sure everything runs smoothly - the AC works perfectly, lights never fail, security is always present, restrooms stay clean, parking is organized? Or maybe you've noticed how some buildings feel well-maintained and efficient while others always seem to have something broken or dirty?",
                    "The people behind this smooth operation are facility managers, and the IGNOU BA in Facility and Services Management Admission 2026 trains you to become one of these essential professionals. This isn't your typical business degree. It's specifically focused on managing buildings, infrastructure, and all the services that keep modern facilities running efficiently - from corporate offices and hospitals to malls, hotels, airports, and even entire smart city projects.",
                    "Whether you're a fresh 12th pass student looking for a unique career path with growing opportunities, someone already working in property management wanting formal qualification, or anyone interested in how buildings and infrastructure actually operate, this three-year program gives you the technical and managerial skills for this expanding field.",
                    "Let me explain everything in simple terms - what facility management actually means, who should choose this field, what you'll study, how to apply, and what kind of career you can build.",
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
                    <StepMini n="03" title="Plan semesters" desc="Pick IDC/SEC/VOC choices with your goal in mind." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFFSM%20Admission%202026" tone="primary">
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

          {/* WHAT IS FACILITY MANAGEMENT */}
          <Section alt>
            <div id="about" />
            <SectionHeader
              eyebrow="About"
              title="Understanding What Facility Management Actually Means"
              subtitle="Let's start with absolute basics because most people have never heard of 'facility management' and have no idea what it involves."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">What is Facility Management? (Simple Explanation)</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Facility Management means making sure buildings and their infrastructure work properly every single day. You're responsible for everything that makes a building functional EXCEPT the actual main business happening there.
                  </p>

                  <h3 className="mt-5 font-black text-slate-900 dark:text-white">Real examples to make it crystal clear:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Corporate Office Building: The company does software development or banking or consulting - that's their business. You ensure the AC works, electricity runs without interruption, security guards are present, elevators function, cafeteria operates smoothly, parking is organized, cleaning happens regularly, fire safety systems work, printers and copiers are maintained. Everything that lets employees focus on their actual work." />
                    <CheckItem text="Hospital: Doctors and nurses treat patients - that's the core business. You ensure medical equipment functions properly, cleanliness standards are met strictly, patient rooms have working facilities, oxygen supply is reliable, emergency generators work during power cuts, waste disposal follows safety protocols, lifts operate smoothly, temperature control works in ICUs. Everything that lets medical staff focus on patient care." />
                    <CheckItem text="Shopping Mall: Shops sell their products - that's their business. You manage escalators and elevators, keep restrooms clean and functional, ensure parking is organized, coordinate security, handle waste disposal, manage lighting and temperature throughout the building, ensure fire safety compliance, coordinate maintenance for all common areas. Everything that creates a good shopping experience." />
                    <CheckItem text="Hotel: Front desk and restaurant staff serve guests - that's hospitality. You ensure rooms are properly maintained, housekeeping operates efficiently, water supply and plumbing work perfectly, AC in every room functions, laundry services run smoothly, swimming pool maintenance happens, gym equipment works, backup power systems operate. Everything that makes guest comfort possible." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Basically: Facility Managers keep buildings and their services running smoothly behind the scenes so businesses can focus on their actual work. You're the person who makes sure "everything just works" even though most people never think about all the systems involved.
                  </p>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Reality check:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      This career is operations-heavy. You’ll deal with breakdowns, vendor delays, staff coordination, and compliance. If that sounds annoying, this field will irritate you daily. If that sounds like a challenge you enjoy, you’ll do well.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* COMPARISON */}
          <Section>
            <div id="comparison" />
            <SectionHeader
              eyebrow="Comparison"
              title="This Program vs Other Management Options"
              subtitle="Many students wonder whether to choose Facility Management, regular BBA, Hotel Management, or Event Management. Here's an honest comparison."
            />

            <Reveal>
              <Card>
                <div className="overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What Matters</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Facility Management</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BBA</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">Hotel Management</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Event Management</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <FiveRow a="Main Focus" b="Building and infrastructure operations" c="Business management broadly" d="Hospitality and guest services" e="Event planning and execution" />
                      <FiveRow a="Technical Knowledge" b="Very high - building systems, maintenance, safety" c="Low - business concepts" d="Moderate - service operations" e="Moderate - event logistics" />
                      <FiveRow a="Infrastructure Skills" b="Core focus - this is what you study" c="Minimal - not the focus" d="Some - hotel property basics" e="Minimal - venues only" />
                      <FiveRow a="People Management" b="Moderate - managing service staff" c="Moderate - general management" d="High - guest interaction" e="High - client and vendor management" />
                      <FiveRow a="Best Career Fit" b="Corporate facilities, real estate, infrastructure" c="General business, corporate jobs" d="Hotels, resorts, hospitality" e="Events, exhibitions, conferences" />
                      <FiveRow a="Starting Salary Range" b="₹18,000-35,000/month" c="₹20,000-40,000/month" d="₹15,000-30,000/month" e="₹18,000-35,000/month" />
                      <FiveRow a="Job Market Growth" b="High - infrastructure boom" c="Large - business everywhere" d="Moderate - hospitality sector" e="Moderate - events recovering post-COVID" />
                      <FiveRow a="Unique Advantage" b="Specialized niche with less competition" c="Versatile but very competitive" d="Service industry focus" e="Creative and dynamic" />
                    </tbody>
                  </table>
                </div>

                <div className="mt-6 grid gap-4 lg:grid-cols-2">
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose BA Facility Management if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      You're interested in how buildings work, technical infrastructure fascinates you, you like the idea of managing operations rather than sales or guest services, or you want a specialized niche with growing demand.
                    </p>
                  </div>

                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Choose BBA / Hotel / Event if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Choose BBA if: You want general business knowledge, aren't sure about specialization yet, or prefer broader corporate career options.
                      <br /><br />
                      Choose Hotel Management if: Guest service and hospitality genuinely interest you more than infrastructure management.
                      <br /><br />
                      Choose Event Management if: Creativity, event planning, and dynamic project-based work appeal to you more than regular facility operations.
                    </p>
                  </div>
                </div>
              </Card>
            </Reveal>
          </Section>

          {/* WHO SHOULD CHOOSE */}
          <Section alt>
            <div id="fit" />
            <SectionHeader
              eyebrow="Fit"
              title="Who Should Choose This Program?"
              subtitle="This program works best for specific types of people with particular interests."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You should strongly consider BA Facility Management if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="You're fascinated by how buildings and infrastructure actually work" />
                    <CheckItem text="The technical side of operations interests you - mechanical systems, electrical, safety" />
                    <CheckItem text="You like the idea of managing behind-the-scenes operations that make things run smoothly" />
                    <CheckItem text="Problem-solving and troubleshooting appeal to you" />
                    <CheckItem text="You're detail-oriented and notice when things aren't working properly" />
                    <CheckItem text="Real estate, property management, or infrastructure interest you" />
                    <CheckItem text="You want a specialized career with less competition than general business" />
                    <CheckItem text="Growing sectors like smart cities and corporate infrastructure development attract you" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You might prefer other options if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Technical systems and building operations bore you" />
                    <CheckItem text="You prefer direct customer interaction over backend management" />
                    <CheckItem text="Pure sales, marketing, or guest services interest you more" />
                    <CheckItem text="You want highly creative or artistic careers" />
                    <CheckItem text="Technical troubleshooting frustrates rather than interests you" />
                    <CheckItem text="You dislike dealing with maintenance and operational issues" />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* SEMESTERS ACCORDION */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="What You'll Actually Study Each Semester"
              subtitle="The curriculum progressively builds from facility management basics to advanced operational systems. Here's the complete breakdown."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Send%20BAFFSM%20Semester%20details%202026" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> Get Help Choosing Options
                </CTA>
              }
            />

            <Reveal>
              <SemestersAccordion semesters={semesterData} />
            </Reveal>
          </Section>

          {/* SKILLS */}
          <Section alt>
            <div id="skills" />
            <SectionHeader
              eyebrow="Skills"
              title="Real Skills You'll Build"
              subtitle="Beyond the degree, here's what you'll genuinely be able to do:"
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Technical Building Knowledge: Understanding of electrical systems, plumbing, HVAC, fire safety, mechanical equipment - enough to coordinate with technical specialists and make informed decisions." />
                    <CheckItem text="Operations Management: Planning daily facility operations, creating maintenance schedules, managing multiple service contracts, coordinating different departments and vendors." />
                    <CheckItem text="Safety and Compliance: Knowledge of fire safety regulations, building codes, health and safety standards, environmental compliance - critical for avoiding legal issues." />
                    <CheckItem text="Resource Management: Managing budgets, controlling costs, optimizing resource use, getting best value from vendors and contractors." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Staff Supervision: Managing housekeeping staff, security personnel, maintenance workers, coordinating their schedules and performance." />
                    <CheckItem text="Problem-Solving: Quickly addressing facility issues - from AC breakdown to plumbing emergencies to security concerns - minimizing disruption to business operations." />
                    <CheckItem text="Technology Use: Using facility management software, building automation systems, monitoring tools, maintenance management systems." />
                    <CheckItem text="Vendor Coordination: Managing relationships with cleaning companies, security agencies, maintenance contractors, equipment suppliers." />
                  </ul>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* CAREER PATHS */}
          <Section>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="Career Paths After Graduation"
              subtitle="Completing this degree opens several career directions in the growing infrastructure sector. Let me be realistic about each."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 1: Corporate Facility Management</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Work in large corporate offices managing building operations and infrastructure.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Actual job titles: Facility Executive, Operations Coordinator, Maintenance Manager, Infrastructure Officer, Admin Officer" />
                    <CheckItem text="Companies hiring: IT companies (Infosys, TCS, Wipro facilities teams), banks (managing branch infrastructure), MNCs (office building management), corporate parks, business process outsourcing companies" />
                    <CheckItem text="Starting salary: ₹18,000-35,000 monthly depending on company and city" />
                    <CheckItem text="After 5 years: ₹40,000-70,000 monthly with experience" />
                    <CheckItem text="What you do: Manage office building operations - AC and electrical systems, security coordination, housekeeping supervision, vendor management, maintenance scheduling, ensuring smooth daily operations." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 2: Real Estate and Property Management</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Manage commercial properties, residential complexes, or property portfolios for real estate companies.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Job titles: Property Manager, Asset Manager, Facility Coordinator, Building Manager" />
                    <CheckItem text="Hiring sectors: Real estate companies, property management firms, commercial complex operators" />
                    <CheckItem text="Starting salary: ₹20,000-38,000 monthly" />
                    <CheckItem text="What you do: Oversee property maintenance, tenant relations, vendor coordination, compliance management, ensuring property value is maintained." />
                  </ul>
                </Card>
              </Reveal>
            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 3: Healthcare Facility Management</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Job titles: Healthcare Facility Manager, Hospital Operations Manager, Infrastructure Officer" />
                    <CheckItem text="Hiring organizations: Large hospitals, hospital chains, medical colleges, healthcare institutions" />
                    <CheckItem text="Starting salary: ₹22,000-40,000 monthly" />
                    <CheckItem text="What you do: Manage hospital infrastructure - medical equipment maintenance coordination, cleanliness standards, patient comfort facilities, emergency systems, regulatory compliance." />
                  </ul>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 4: Hospitality Facility Management</h3>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Job titles: Hotel Facility Manager, Resort Operations Manager, Hospitality Infrastructure Manager" />
                      <CheckItem text="Starting salary: ₹18,000-35,000 monthly" />
                      <CheckItem text="What you do: Ensure all hotel facilities function properly - rooms, restaurants, recreational facilities, guest amenities, behind-the-scenes infrastructure." />
                    </ul>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 5: Retail and Mall Management</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Job titles: Mall Facility Manager, Retail Infrastructure Manager, Operations Executive" />
                    <CheckItem text="Starting salary: ₹20,000-38,000 monthly" />
                    <CheckItem text="What you do: Manage mall operations - escalators, parking, security, housekeeping, vendor coordination, ensuring good shopping environment." />
                  </ul>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 6: Safety and Security Management</h3>
                    <ul className="mt-4 space-y-3">
                      <CheckItem text="Job titles: Fire Safety Officer, Security Manager, Safety Compliance Officer" />
                      <CheckItem text="Starting salary: ₹20,000-40,000 monthly" />
                      <CheckItem text="What you do: Ensure fire safety compliance, manage security systems, conduct safety audits, emergency preparedness planning." />
                    </ul>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 7: Entrepreneurship - Own Facility Management Company</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Start your own facility management services company providing housekeeping, security, maintenance to multiple clients.
                      <br />
                      Reality: Requires capital investment, business acumen, networking. Income highly variable but potentially lucrative with established client base.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* ELIGIBILITY + DATES + APPLY */}
          <Section alt>
            <div id="apply" />
            <SectionHeader
              eyebrow="Apply"
              title="Eligibility Criteria - Who Can Apply + Important Dates + How to Apply"
              subtitle="The requirements are simple and welcoming. The process is straightforward if you avoid common mistakes."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Eligibility Criteria - Who Can Apply</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">The requirements are simple and welcoming.</p>

                  <p className="mt-4 font-black text-slate-900 dark:text-white">You need:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Passed 12th standard (10+2) or equivalent from any recognized board" />
                    <CheckItem text="Any stream works - Science, Commerce, Arts, Vocational, all eligible" />
                    <CheckItem text="No minimum percentage requirement" />
                    <CheckItem text="No upper age limit - fresh students or working professionals, all welcome" />
                    <CheckItem text="Comfort with English (program is English medium)" />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">This program particularly suits:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Students interested in infrastructure and operations" />
                    <CheckItem text="Those working in property management wanting formal qualification" />
                    <CheckItem text="People fascinated by how buildings and facilities work" />
                    <CheckItem text="Anyone planning careers in real estate or facility management" />
                    <CheckItem text="Students wanting specialized niche with less competition" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Important Dates for BA in Facility and Services Management Admission 2026</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Admission Cycles:
                    <br />
                    IGNOU typically opens admissions twice annually:
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniNote
                      title="January Cycle:"
                      text={"Opens: Usually December of previous year\nDeadline: Typically extends until March\nClasses begin: January"}
                    />
                    <MiniNote
                      title="July Cycle:"
                      text={"Opens: Usually June\nDeadline: Typically extends until August/September\nClasses begin: July"}
                    />
                  </div>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Important Note: Exact dates change yearly. Always check the official IGNOU website (ignou.ac.in) for current admission cycle dates and deadlines.
                  </p>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Don't Miss: Visit www.ignou.ac.in and check the "Admissions" section for the latest schedule for 2026 admissions.
                  </p>
                </Card>
              </Reveal>
            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">How to Apply - Complete Step-by-Step Process</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Here's exactly how the admission process works.
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Step 1: Visit IGNOU Samarth admission portal at ignouadmission.samarth.edu.in when admissions open. Verify you're on the official IGNOU site." />
                    <CheckItem text="Step 2: Click Fresh Admission and register with your email and mobile number. OTP verification required." />
                    <CheckItem text="Step 3: Fill all details exactly as on your 12th certificate - name spelling, birth date, everything must match perfectly." />
                    <CheckItem text="Step 4: Select Bachelor of Arts in Facility and Services Management from program list. Program code is BAFFSM. Double-check your selection." />
                    <CheckItem text="Step 5: Choose regional center and study center based on your location." />
                    <CheckItem text="Step 6: Upload clear scans of required documents: Class 10 marksheet (PDF under 200 KB); Class 12 marksheet (PDF under 200 KB); Passport photo with white background (JPEG under 50 KB); Signature on white paper (JPEG under 30 KB); Aadhar or government ID (PDF under 200 KB); Category certificate if SC/ST/OBC" />
                    <CheckItem text="Step 7: Pay online via card, net banking, or UPI. Save confirmation." />
                    <CheckItem text="Step 8: Download enrollment confirmation. Keep this number safe." />
                  </ul>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Common Mistakes to Avoid:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Don't upload oversized files. Don't use wrong formats. Ensure name consistency. Use white photo backgrounds only. Don't wait until last day.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Getting Complete Admission Support</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Navigating IGNOU admissions and distance education successfully benefits from proper guidance. Unnati Education provides comprehensive support - from checking eligibility and filling applications correctly to understanding course structures and planning your studies effectively. Connect with Unnati Education for reliable admission assistance throughout your BA in Facility and Services Management journey.
                  </p>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Help%20me%20with%20BAFFSM%20Admission%202026" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" />
                      Get Guidance
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" />
                      Call
                    </CTA>
                  </div>

                  <p className="mt-4 text-sm font-black text-slate-700 dark:text-slate-200">
                    Call/WhatsApp: 9355198199
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* FAQs */}
          <Section>
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
                      q: "What exactly will I do as a facility manager on a typical day?",
                      a: "Your daily work varies by facility type but generally includes: checking building systems are functioning (AC, lights, elevators), coordinating with housekeeping and security staff, meeting with vendors and contractors, addressing any maintenance issues that arise, ensuring safety compliance, managing budgets and expenses, planning preventive maintenance, responding to emergencies, coordinating with building occupants about facility needs. It's a mix of planning, coordination, problem-solving, and ensuring everything runs smoothly behind the scenes.",
                    },
                    {
                      q: "Is facility management only for big cities or are there jobs in smaller towns too?",
                      a: "Initially, metro cities and tier-2 cities have more opportunities because they have more corporate offices, malls, hospitals, and organized infrastructure. However, as India develops and smaller cities get modern infrastructure, hospitals, and corporate offices, facility management jobs are spreading. Starting your career in a larger city might be easier, but the field is growing everywhere as infrastructure modernizes.",
                    },
                    {
                      q: "Do I need to be very technical or good at engineering to do well in this field?",
                      a: "Not at all. You don't need to be an engineer. You need to understand building systems enough to coordinate with technical specialists and make informed decisions - but you're not personally fixing electrical systems or repairing AC units. Think of it like a hospital administrator doesn't need to be a doctor but needs to understand medical operations enough to manage the facility. Your role is management and coordination, not technical execution.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I do this while working or does it require full-time study?",
                      a: "Distance learning exists specifically for people with other commitments. You study from materials whenever you have time - no daily college attendance. Many people already working in property management or related fields do this degree to get formal qualification while continuing their jobs. You need self-discipline to study regularly, but it's absolutely manageable alongside work.",
                    },
                    {
                      q: "After this degree, do companies hire directly or do I need experience first?",
                      a: "Fresh graduates typically start in junior positions - facility executive, operations assistant, trainee facility manager - with starting salaries ₹18,000-30,000 monthly. With 2-3 years experience, you move to facility manager, operations manager roles with ₹35,000-60,000 monthly. Senior facility managers with 7-10 years experience can earn ₹70,000-₹1,50,000+ monthly depending on facility size and complexity. Like most careers, you start at entry level and grow with experience.",
                    },
                    {
                      q: "Your Path Forward with BA in Facility and Services Management Admission 2026",
                      a:
                        "The IGNOU BA in Facility and Services Management Admission 2026 offers genuine opportunity if your interests align with infrastructure, operations, and making buildings and facilities function efficiently. The specialized curriculum, growing demand in India's infrastructure boom, relatively less competition compared to general business degrees, and diverse facility types needing managers make it valuable for students interested in this field.\n\n" +
                        "But understand clearly that this career involves dealing with operational problems daily, coordinating multiple vendors and staff, working with budgets and constraints, and handling emergencies when systems fail. You must genuinely find satisfaction in keeping operations running smoothly rather than seeking glamorous or highly creative work. Starting salaries are modest but grow significantly with experience and responsibility.\n\n" +
                        "If you're fascinated by how buildings work, enjoy problem-solving and coordination, can maintain calm during operational crises, value specialized expertise over general knowledge, and see yourself managing infrastructure and facilities, then the BA in Facility and Services Management Admission at IGNOU provides solid preparation for this growing field.\n\n" +
                        "Check the official IGNOU website for exact admission dates for 2026 cycles. Connect with Unnati Education for complete admission guidance ensuring you don't miss deadlines, make application errors, or feel confused about requirements. Take that first step toward building your facility management career with proper education in this essential and expanding profession.",
                    },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* CONTACT */}
          <Section alt>
            <div id="contact" />
            <SectionHeader
              eyebrow="Contact"
              title="Get Started — Contact Unnati"
              subtitle="Send your details and we’ll guide you end-to-end."
            />

            <Reveal>
              <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                <p className="text-slate-600 dark:text-slate-300">
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>BAFFSM</b>. We’ll help with admission,
                  documents, subject selection, assignments, and exam guidance.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFFSM%20Admission%202026" tone="primary">
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

function HeroFacility() {
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
            <Pill tone="blue">UGC Approved</Pill>
          </div>

          {/* Title */}
          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in Facility and Services Management
            <span className="block text-blue-700 dark:text-blue-300">Admission 2026</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code:{" "}
            <span className="font-black text-slate-900 dark:text-white">BAFFSM</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              Ever walked into a big corporate office, hospital, or shopping mall and wondered who makes sure everything runs smoothly - the AC works perfectly, lights never fail, security is always present, restrooms stay clean, parking is organized? Or maybe you've noticed how some buildings feel well-maintained and efficient while others always seem to have something broken or dirty?
            </p>
            <p>
              The people behind this smooth operation are facility managers, and the IGNOU BA in Facility and Services Management Admission 2026 trains you to become one of these essential professionals. This isn't your typical business degree. It's specifically focused on managing buildings, infrastructure, and all the services that keep modern facilities running efficiently - from corporate offices and hospitals to malls, hotels, airports, and even entire smart city projects.
            </p>
            <p>
              Whether you're a fresh 12th pass student looking for a unique career path with growing opportunities, someone already working in property management wanting formal qualification, or anyone interested in how buildings and infrastructure actually operate, this three-year program gives you the technical and managerial skills for this expanding field.
            </p>
            <p>
              Let me explain everything in simple terms - what facility management actually means, who should choose this field, what you'll study, how to apply, and what kind of career you can build.
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
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFFSM%20Admission%202026" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAFFSM 2026”</b> on WhatsApp for faster response.
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
                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[360px] whitespace-pre-line">{r[1]}</td>
                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[260px] whitespace-pre-line">{r[2]}</td>
                <td className="py-3 font-black text-slate-900 dark:text-white whitespace-nowrap">{r[3]}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

/* ---------------- SEMESTER ACCORDION ---------------- */

function SemestersAccordion({ semesters = [] }) {
  const [open, setOpen] = useState(0);

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-3">
        {semesters.map((s, idx) => {
          const active = open === idx;
          return (
            <div key={idx} className="rounded-2xl border border-slate-200/80 bg-slate-50 dark:border-white/10 dark:bg-white/5">
              <button
                type="button"
                onClick={() => setOpen(active ? -1 : idx)}
                className="w-full px-4 py-4 text-left"
              >
                <div className="flex items-start justify-between gap-4">
                  <div>
                    <div className="font-black text-slate-900 dark:text-white">{s.title}</div>
                    <div className="mt-1 text-sm text-slate-600 dark:text-slate-300">
                      Click to {active ? "close" : "open"} semester details
                    </div>
                  </div>

                  <span
                    className={[
                      "mt-[2px] grid h-9 w-9 place-items-center rounded-xl",
                      "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900",
                      "shrink-0",
                    ].join(" ")}
                    aria-hidden="true"
                  >
                    <svg viewBox="0 0 24 24" fill="currentColor" className="h-5 w-5">
                      <path d={active ? "M6 12h12v2H6z" : "M11 6h2v5h5v2h-5v5h-2v-5H6v-2h5z"} />
                    </svg>
                  </span>
                </div>
              </button>

              {active ? (
                <div className="px-4 pb-4">
                  <div className="rounded-2xl border border-slate-200/80 bg-white/90 p-4 dark:border-white/10 dark:bg-[#0b1220]/70">
                    <p className="text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">
                      {s.subtitle}
                    </p>
                  </div>

                  <div className="mt-4">
                    <SyllabusTable title={s.title.replace(": ", " — ")} rows={s.rows} />
                  </div>
                </div>
              ) : null}
            </div>
          );
        })}
      </div>
    </div>
  );
}

/* ---------------- SMALL HELPERS ---------------- */

function MiniNote({ title, text }) {
  return (
    <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
      <div className="font-black text-slate-900 dark:text-white">{title}</div>
      <div className="mt-1 text-slate-600 dark:text-slate-300 whitespace-pre-line">{text}</div>
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFFSM%20Admission%202026"
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

function BuildingIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M4 21V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6h3a1 1 0 0 1 1 1v11h-3v-2h-2v2H4Zm3-3h2v-2H7v2Zm0-4h2v-2H7v2Zm0-4h2V8H7v2Zm0-4h2V4H7v2Zm4 12h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V8h-2v2Zm0-4h2V4h-2v2Z" />
    </svg>
  );
}
