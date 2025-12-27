import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInPsychologyAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "Programme", value: "BA in Psychology", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFPC", icon: <PenIcon className="h-5 w-5" /> },
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "School", value: "School of Social Sciences", icon: <BadgeIcon className="h-5 w-5" /> },
      { label: "Mode", value: "Distance Learning", icon: <HomeStudyIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Total Credits", value: "120 (6 Sem)", icon: <StackIcon className="h-5 w-5" /> },
      { label: "Language", value: "Mainly English", icon: <LanguageIcon className="h-5 w-5" /> },
    ],
    []
  );

  const semesterData = useMemo(
    () => [
      {
        title: "First Semester: Psychology Basics",
        subtitle: "In plain English: You start with the basics - what is psychology, major areas like social, developmental, clinical psychology. You learn how the brain creates behavior and thoughts (this is the biology part, but not too heavy). You pick a skill course based on what interests you.",
        rows: [
          ["CC", "Introduction to Psychology", "BPCC-101", "6"],
          ["CC", "Biopsychology", "BPCC-102", "6"],
          ["AECC", "Environmental Studies", "BEVAE-181", "4"],
          [
            "SEC (Any 1)",
            "1. Emotional Intelligence  2. Counselling Psychology  3. Psychology for Living  4. Academic Writing & Composition",
            "1. BPCS-183  2. BPCE-145  3. BPCG-175  4. BEGG-171",
            "4",
          ],
        ],
      },
      {
        title: "Second Semester: Why People Are Different",
        subtitle: "What this actually means: You study why people are so different from each other - intelligence, personality, learning styles. Developmental psychology is all about how humans change from babies to old age - physically, mentally, emotionally. It's actually pretty fascinating when you see how much changes.",
        rows: [
          ["CC", "Psychology of Individual Differences", "BPCC-103", "6"],
          ["CC", "Developmental Psychology", "BPCC-104", "6"],
          [
            "SEC (Any 1)",
            "1. Emotional Intelligence  2. Counselling Psychology  3. Psychology for Living  4. Academic Writing & Composition",
            "1. BPCS-183  2. BPCE-145  3. BPCG-175  4. BEGG-171",
            "4",
          ],
          [
            "GE (Any 1)",
            "1. Psychology & Media  2. Governance  3. Academic Writing & Composition  4. Hindi Sahitya aur Naitik Mulyayen",
            "1. BPCG 172  2. BPAG 172  3. BEGG 172  4. BGDG 172",
            "6",
          ],
        ],
      },
      {
        title: "Third Semester: How to Do Research",
        subtitle: "The real deal: This is where you learn how psychological research actually works - how to design studies, basic statistics (yes, some math, sorry), how to tell good research from bad. You also learn the history - Freud, Skinner, all those famous psychologists and what they contributed.",
        rows: [
          ["DSC", "Psychological Research", "BEGC-105", "6"],
          ["IDC", "Development of Psychological Thought", "BEGC-106", "6"],
          [
            "SEC (Any 1)",
            "1. Emotional Intelligence  2. Counselling Psychology  3. Psychology for Living  4. Academic Writing & Composition",
            "1. BPCS-183  2. BPCE-145  3. BPCG-175  4. BEGG-173",
            "4",
          ],
          [
            "GE (Any 1)",
            "1. Psychology & Media  2. Governance  3. Rethinking Development  4. Academic Writing & Composition",
            "1. BPCG-173  2. BPAG-173  3. BSOG-173  4. BEGG-173",
            "6",
          ],
        ],
      },
      {
        title: "Fourth Semester: Social Stuff and More Stats",
        subtitle: "Translation: Social psychology is super interesting - why people behave differently in groups, how peer pressure works, why we conform, how persuasion works. More statistics (I know, I know, but you need it). Deeper dive into how people develop across their lifetime.",
        rows: [
          ["CC", "Social Psychology", "BPCC-107", "6"],
          ["CC", "Statistical Methods for Psychological Research – II", "BPCC-108", "6"],
          ["CC", "Developmental Psychology (Advanced)", "BPCC-109", "6"],
          [
            "SEC (Any 1)",
            "1. Managing Stress  2. Psychology & Life Skills  3. Personality Development & Soft Skills  4. Creative Writing",
            "1. BPCS-185  2. BPCE-147  3. BPCS-184  4. BEGG-174",
            "4",
          ],
          [
            "GE (Any 1)",
            "1. Sustainable Development  2. Doing Sociology  3. Fashion Design Fundamentals  4. French for Beginners",
            "1. BPAG-174  2. BSOS-184  3. BFDI-073  4. BFLS-183",
            "6",
          ],
        ],
      },
      {
        title: "Fifth Semester: Applying Psychology and Understanding Mental Disorders",
        subtitle: "What you're really learning: How to apply psychology to real problems - reducing prejudice, changing health behaviors, resolving conflicts. Study mental health disorders - depression, anxiety, schizophrenia, personality disorders. This is where things get really practical and interesting. You pick specializations based on what fascinates you.",
        rows: [
          ["DSC", "Applied Social Psychology", "BPCC-110", "6"],
          ["IDC", "Understanding Psychological Disorders", "BPCC-111", "6"],
          ["DSE-1 (Any 1)", "1. Positive Psychology  2. Forensic Psychology", "1. BPCE-141  2. BPCE-142", "6"],
          ["DSE-2 (Any 1)", "1. Environmental Psychology  2. Dissertation (Project Work)", "1. BPCE-143  2. BPCE-144", "6"],
        ],
      },
      {
        title: "Sixth Semester: Personality and Workplace Psychology",
        subtitle: "The final stretch: You study personality - different theories, how personality develops, how it's measured. Organizational psychology is all about workplace behavior - motivation, leadership, team dynamics. Super useful for HR careers. Final electives let you specialize or do a research project.",
        rows: [
          ["DSC", "Understanding Self & Personality", "BPCC-112", "6"],
          ["IDC", "Organizational Psychology", "BPCC-113", "6"],
          ["DSE-3 (Any 1)", "1. Environmental Psychology  2. Psychology of Well-being", "1. BPCE-143  2. BPCE-145", "6"],
          ["DSE-4 (Any 1)", "1. Dissertation (Project Work)  2. Health Psychology", "1. BPCE-144  2. BPCE-146", "6"],
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
        title="IGNOU BA in Psychology Admission 2026 | BAFPC (Distance Learning)"
        description="IGNOU BA in Psychology Admission 2026 (BAFPC): program facts, who should choose it, semester-wise subjects in accordion, career reality checks, and admission guidance."
        keywords="IGNOU BA Psychology Admission 2026, BAFPC, BA in Psychology IGNOU, IGNOU Psychology BA 2026, Unnati Education"
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
          <HeroPsychology />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="Let's Start With the Basic Facts"
              subtitle="Before we get into anything else, here's what you need to know right now about this program."
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
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What You're Wondering</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Here's the Real Answer</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="What's it called?" v="Bachelor of Arts in Psychology" />
                      <Row k="The code you'll need" v="BAFPC" />
                      <Row k="Which university?" v="IGNOU - Indira Gandhi National Open University" />
                      <Row k="Who runs it?" v="School of Social Sciences" />
                      <Row k="How do I study?" v="Distance learning - no daily college, study from home" />
                      <Row k="How long?" v="3 years if you're regular, up to 6 years if you need more time" />
                      <Row k="How many credits?" v="120 credits total across six semesters" />
                      <Row k="Language?" v="Mainly English" />
                      <Row k="Who can join?" v="Anyone who passed 12th, any stream" />
                      <Row k="Age limit?" v="None. Doesn't matter if you're 18 or 48" />
                      <Row k="When to apply?" v="January and July cycles every year" />
                      <Row k="Deadline?" v="Check IGNOU website - usually around August/September for July cycle" />
                      <Row k="Is it recognized?" v="UGC approved - totally valid everywhere" />
                      <Row k="Best for whom?" v="People wanting HR careers, planning further psychology studies, interested in social work" />
                      <Row k="What you CAN'T do with just this" v="Practice as a therapist or clinical psychologist (that needs 7 more years of study)" />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              {/* <Reveal>
                <ContentCard
                  title="IGNOU BA in Psychology Admission 2026: Your Complete Guide to Understanding Human Behavior and Mental Health Careers"
                  paragraphs={[
                    "You know that friend who always seems to understand exactly what people are going through? Or maybe you've caught yourself wondering why your brain remembers embarrassing moments from years ago but forgets where you kept your keys this morning? If questions like these genuinely fascinate you - not just sound interesting but actually keep you thinking - then the IGNOU BA in Psychology Admission 2026 might be exactly what you're looking for. And I mean really looking for, not just \"I need some degree and psychology sounds cool.\"",
                    "",
                    "Look, I'm going to be completely straight with you here. This isn't one of those degrees where you can waltz into a high-paying job right after graduation. Psychology is fascinating, yes. Important, absolutely. But if you're thinking you'll finish this BA and immediately start your own counseling practice or work as a therapist, I need to stop you right there. That's not how it works, and anyone telling you otherwise is either confused or lying.",
                    "",
                    "Let me walk you through everything honestly - the good parts, the limitations, what you'll actually study, what you can realistically do with this degree, and what requires years more education.",
                  ]}
                />
              </Reveal> */}

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Quick 3-step admission flow</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    Clean, predictable process — you just need to execute it correctly.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Check eligibility" desc="12th pass, any stream. No age bar." />
                    <StepMini n="02" title="Apply online" desc="Use the official IGNOU portal, upload correct file sizes." />
                    <StepMini n="03" title="Plan semesters" desc="Pick SEC/GE/DSE choices based on your goal, not random." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BA%20Psychology%202026" tone="primary">
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

          {/* WHAT IS PSYCHOLOGY */}
          <Section alt>
            <div id="about" />
            <SectionHeader
              eyebrow="About"
              title="So What Actually IS Psychology? (Because Movies Get It Wrong)"
              // subtitle="Alright, let's clear up some confusion."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Alright, let's clear up some confusion. When most people think "psychologist," they picture someone in a cozy office with a couch, listening to people's problems, maybe hypnotizing them. That's... not quite accurate.
                  </p>

                  <h3 className="mt-5 font-black text-slate-900 dark:text-white">What Psychology Actually Studies:</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Psychology is basically the science of figuring out why humans do the weird, wonderful, terrible, and brilliant things we do. It's about understanding:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Why your brain works the way it does (and why it sometimes doesn't)" />
                    <CheckItem text="How babies go from screaming potatoes to walking, talking people" />
                    <CheckItem text="Why you're more likely to help someone when you're alone than in a crowd" />
                    <CheckItem text="What's actually happening in someone's brain when they're depressed" />
                    <CheckItem text="Why some ads make you want to buy stuff you don't need" />
                    <CheckItem text="How your childhood affects who you are now" />
                    <CheckItem text="Why groups of people sometimes make terrible decisions" />
                    <CheckItem text="What makes a good leader versus a terrible one" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Real Examples From the Course:</h3>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Instead of just reading "stress affects memory," you'll learn WHY - how cortisol (stress hormone) actually interferes with your hippocampus (memory center), and why you blank out during exams even when you studied.
                  </p>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Instead of just knowing "babies develop language around age 2," you'll understand the whole process - how they go from recognizing sounds to forming words to creating sentences, and what happens if something goes wrong.
                  </p>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Instead of just hearing "depression is a mental illness," you'll study the biological factors (brain chemistry, genetics), psychological factors (thought patterns, learned helplessness), and social factors (isolation, life events) that all contribute.
                  </p>
                </Card>
              </Reveal>

              
            </div>
          </Section>

          {/* BA vs BSc */}
          <Section>
            <div id="comparison" />
            <SectionHeader
              eyebrow="Comparison"
              title="BA Psychology vs BSc Psychology - This Actually Matters A LOT"
              subtitle="Okay, this trips up SO many students. Let me make it super clear."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <div className="overflow-x-auto">
                    <table className="w-full text-left text-sm">
                      <thead>
                        <tr className="border-b border-slate-200/80 dark:border-white/10">
                          <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What You're Comparing</th>
                          <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Psychology</th>
                          <th className="py-3 font-black text-slate-700 dark:text-slate-200">BSc Psychology</th>
                        </tr>
                      </thead>
                      <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                        <TriRow a="The overall vibe" b="More about people and society" c="More about biology and science" />
                        <TriRow a="Math and statistics" b="Basic stats for understanding research" c="Heavy stats, data analysis, lots of numbers" />
                        <TriRow a="Biology stuff" b="You learn some basics about brain and behavior" c="Deep dive into neuroscience, brain chemistry, biological processes" />
                        <TriRow a="Lab work" b="Minimal - some practicals but not much" c="Lots of lab work, experiments, hands-on research" />
                        <TriRow a="If you're someone who..." b="Liked humanities subjects, not big on heavy science" c="Liked biology and science subjects" />
                        <TriRow a="Career path it suits" b="HR, counseling (with more study), social work" c="Clinical psychology, neuroscience research" />
                        <TriRow a="The brutal truth" b="Easier if science isn't your thing" c="Better foundation if you want clinical practice" />
                      </tbody>
                    </table>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Pick BA Psychology if: Science and math kind of scare you, you're more interested in the social and emotional sides of behavior, you're thinking about HR or social work careers, or you just want a good general understanding without heavy technical stuff.
                  </p>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Pick BSc Psychology if: You actually enjoyed biology in school, numbers don't freak you out, you're serious about becoming a clinical psychologist (the therapy kind), or research and neuroscience genuinely interest you.
                  </p>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    {/* <div className="font-black text-slate-900 dark:text-white">The Thing Nobody Tells You (Until It's Too Late)</div> */}
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      YOU CANNOT BECOME A THERAPIST OR CLINICAL PSYCHOLOGIST WITH JUST A BA IN PSYCHOLOGY.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* Reality bomb */}
          <Section alt>
            <div id="reality" />
            <SectionHeader
              eyebrow="Reality"
              title="The Thing Nobody Tells You (Until It's Too Late)"
              subtitle="Here's the reality bomb, and I'm telling you this upfront because I wish someone had told students I know before they started:"
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="To Practice as a Clinical Psychologist in India:"
                  paragraphs={[
                    "BA or BSc in Psychology - 3 years",
                    "MA in Psychology - 2 years",
                    "MPhil in Clinical Psychology - 2 years",
                    "Registration with RCI (Rehabilitation Council of India)",
                    "Total: 7 years minimum from when you finish 12th",
                    "",
                    "That's not counting the time it might take to get into good MA and MPhil programs (which are super competitive), or the money involved (anywhere from ₹50,000 to ₹5,00,000+ depending on the institution).",
                  ]}
                />
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">So What CAN You Do With Just BA Psychology?</h3>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">You CAN work as:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="HR person in companies (recruitment, training, employee stuff)" />
                    <CheckItem text="Counseling assistant (helping a licensed counselor, not practicing alone)" />
                    <CheckItem text="Social worker in NGOs" />
                    <CheckItem text="Mental health awareness coordinator" />
                    <CheckItem text="Research assistant" />
                    <CheckItem text="Teacher (if you also do B.Ed)" />
                  </ul>

                  <p className="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed">You CANNOT work as:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Clinical psychologist with your own practice" />
                    <CheckItem text="Therapist treating patients independently" />
                    <CheckItem text="School counselor (most schools want at least MA)" />
                  </ul>

                  <p className="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed">
                    I'm being blunt about this because I've seen too many students feel cheated when they realize this later. If you SPECIFICALLY want to be a therapist who treats people, you need to commit to 7 years of education and be okay with that. This BA is step one of seven, not the complete journey.
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* Right for you */}
          <Section>
            <div id="fit" />
            <SectionHeader
              eyebrow="Fit"
              title="Is This Actually Right for You? (Let's Be Real)"
              subtitle="Look, psychology sounds cool to everyone. Who doesn't want to 'understand people better'? But studying it seriously is different from being interested casually."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    You should genuinely consider this program if:
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="People's behavior actually fascinates you - like you catch yourself analyzing why your friend acts certain ways or wondering about psychological patterns" />
                    <CheckItem text="You're okay with the fact that good psychology jobs need more education after BA" />
                    <CheckItem text="HR careers interest you (this is the most realistic immediate career path)" />
                    <CheckItem text="You're planning to do MA in Psychology or related fields anyway" />
                    <CheckItem text="You want to work in social services or mental health organizations" />
                    <CheckItem text="Understanding mental health issues matters to you personally" />
                    <CheckItem text="You're comfortable with some statistics (not heavy math, but some numbers)" />
                    <CheckItem text="Reading case studies and research papers sounds interesting, not boring" />
                    <CheckItem text="You can handle studying on your own without daily classes" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    Maybe look at other options if:
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="You hate reading - and I mean actually hate it, because there's A LOT of reading" />
                    <CheckItem text="The idea of statistics makes you want to cry (you can't completely avoid it)" />
                    <CheckItem text="You want high-paying jobs immediately after graduation" />
                    <CheckItem text="Science and research bore you to tears" />
                    <CheckItem text="You're only choosing this because it sounds easier than other degrees" />
                    <CheckItem text="You want guaranteed job placement right away" />
                    <CheckItem text="You just need ANY degree and don't actually care about psychology" />
                    <CheckItem text="You can't study without someone forcing you to attend class daily" />
                  </ul>

                  <p className="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed">
                    I'm not trying to discourage you - if psychology genuinely interests you and you have realistic expectations, it's rewarding. But don't choose it for the wrong reasons.
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* SEMESTERS ACCORDION */}
          <Section>
            <div id="syllabus" />
            <SectionHeader
              eyebrow="Syllabus"
              title="What You'll Actually Study (Semester by Semester)"
              subtitle="Okay, let's get into what you'll actually be learning for three years. I'll keep it simple and tell you what each semester is really about."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Send%20BAFPC%20Semester%20details%202026" tone="primary">
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
              title="What You'll Actually Be Able to Do (Real Skills, Not BS)"
              subtitle="After three years, here's what you'll genuinely have learned:"
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Understanding Why People Do Things: You won't be able to read minds (that's not real), but you will be able to observe behavior and make educated guesses about what's motivating it based on psychological principles." />
                    <CheckItem text="Basic Helping Skills: You can't practice therapy, but you'll have learned active listening, empathy, how to have supportive conversations - useful in any job involving people." />
                    <CheckItem text="Making Sense of Research: You can read a psychology study and actually understand what it means, whether it's good research or garbage, and how to apply findings." />
                    <CheckItem text="Workplace People Stuff: Understanding what motivates employees, how teams work (and don't work), what makes a good leader - directly useful if you go into HR." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Mental Health Awareness: You'll recognize signs of common mental health issues, understand what's happening, know when someone needs professional help. You can't treat them yourself, but you'll know what you're seeing." />
                    <CheckItem text="Talking About Psychology Clearly: Explaining psychological concepts without sounding like a textbook, writing about behavior and mental processes, presenting ideas clearly." />
                    <CheckItem text="Thinking Critically: Not just believing everything you hear about human behavior. Psychology teaches you to ask where's the evidence? and think analytically." />
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
              title="What Jobs Can You Actually Get? (The Honest Truth)"
              subtitle="Let me lay out the real career paths, with actual salaries and reality checks."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 1: Human Resources Jobs</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    This is honestly the most common and realistic path for BA Psychology grads.
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="What you'd be called: HR Executive, Recruitment Coordinator, Training Officer, Employee Relations Person" />
                    <CheckItem text="What you'd actually do: Interview job candidates, organize employee training, handle workplace conflicts, help with performance reviews, coordinate HR activities" />
                    <CheckItem text="Starting salary: ₹18,000 to ₹35,000 per month depending on the company and city" />
                    <CheckItem text="After 5 years: ₹40,000 to ₹70,000 per month if you're good at it" />
                    <CheckItem text="The reality: Entry-level HR jobs are available with just BA. Your psychology background helps you understand employee behavior better than someone with just a business degree. Growth usually needs additional HR certifications or an MBA eventually." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 2 to 5 (Yes, these exist — and yes, they’re modest)</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Path 2: Helping Licensed Counselors (Not Counseling Yourself) — Job titles: Counseling Assistant, Mental Health Associate, Support Staff — Starting pay: ₹15,000 to ₹30,000 monthly — Reality check: You're assisting, not treating." />
                    <CheckItem text="Path 3: Social Work in NGOs — Job titles: Program Coordinator, Field Worker, Community Organizer, Project Assistant — Pay: ₹18,000 to ₹32,000 monthly starting — Honest truth: Meaningful work, modest pay." />
                    <CheckItem text="Path 4: Teaching Psychology (After Also Doing B.Ed) — Pay: ₹25,000 to ₹40,000 monthly depending on the school — Reality: Stable career, competitive jobs." />
                    <CheckItem text="Path 5: Research Assistant — Pay: ₹15,000 to ₹28,000 monthly, often temporary contracts — Truth bomb: Great for experience, not always stable." />
                  </ul>
                </Card>
              </Reveal>
            </div>

            <div className="mt-6 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 6: The Long Road - Clinical Psychology</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    If you want to actually practice as a clinical psychologist who treats patients:
                  </p>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="MA Psychology - 2 more years - costs ₹20,000 to ₹2,00,000 depending on college" />
                    <CheckItem text="MPhil Clinical Psychology - 2 more years - costs ₹50,000 to ₹3,00,000" />
                    <CheckItem text="RCI registration" />
                    <CheckItem text="Total: 7 years from finishing 12th, and significant money" />
                    <CheckItem text="After all that: Clinical psychologists can earn ₹30,000 to ₹1,00,000+ monthly depending on experience and whether they're in hospitals, clinics, or private practice" />
                    <CheckItem text="Reality: It's a long, expensive road. MA and especially MPhil admissions are super competitive. But if you're genuinely passionate about treating people with mental health issues, it's worth it. Just know what you're signing up for." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Need Someone to Help You Through This?</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Look, IGNOU forms can be confusing. The system isn't always user-friendly. Figuring out which subjects to pick, understanding credits, keeping track of assignment deadlines - it's a lot to manage on your own.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Unnati Education helps students through the whole thing - making sure your application is right, helping you understand how the program works, keeping track of important dates so you don't miss stuff. If you want someone guiding you so you don't mess up the application or get confused later, that's an option.
                  </p>
                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Help%20me%20with%20BAFPC%20Admission%202026" tone="primary">
                      <WhatsAppIcon className="h-5 w-5" />
                      Get Guidance
                    </CTA>
                    <CTA href="tel:+919355198199" tone="ghost">
                      <PhoneIcon className="h-5 w-5" />
                      Call
                    </CTA>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* DATES + APPLY */}
          <Section alt>
            <div id="apply" />
            <SectionHeader
              eyebrow="Apply"
              title="When Can You Apply? (Important Dates) + How Do You Actually Apply? (Step by Step, No Confusion)"
              subtitle="Important: These dates change every year. Check official sources."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">When Can You Apply? (Important Dates)</h3>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    IGNOU opens admissions twice a year:
                  </p>

                  <div className="mt-4 grid gap-4">
                    <MiniNote title="January Cycle:" text={"Usually opens: December\nDeadline: Around March usually\nClasses start: January"} />
                    <MiniNote title="July Cycle:" text={"Usually opens: June\nDeadline: Around August/September\nClasses start: July"} />
                  </div>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Important: These dates change every year. Go to www.ignou.ac.in and check their "Admissions" page for exact 2026 dates. Don't trust random websites - get it from the official source.
                  </p>

                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Pro tip: Don't wait until the last week. Their website crashes when everyone applies at once.
                  </p>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">How Do You Actually Apply? (Step by Step, No Confusion)</h3>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Step 1: Go to ignouadmission.samarth.edu.in (make sure it's the real IGNOU site, not a fake)" />
                    <CheckItem text="Step 2: Click \'Fresh Admission\' and make an account with your email and phone. They'll send you OTP codes." />
                    <CheckItem text="Step 3: Fill in your details EXACTLY like they're written on your 12th certificate. Even one wrong letter causes problems later." />
                    <CheckItem text="Step 4: Find \'Bachelor of Arts in Psychology\' in the program list. Code is BAFPC. Check THREE times you picked the right one." />
                    <CheckItem text="Step 5: Pick your regional center and study center based on where you live. You might need to go there occasionally." />
                    <CheckItem text="Step 6: Upload your documents: 10th marksheet - PDF, clear scan, under 200 KB; 12th marksheet - PDF, clear scan, under 200 KB; Photo - white background, JPEG, under 50 KB; Signature - on white paper, JPEG, under 30 KB; Aadhar or any ID - PDF, under 200 KB; Caste certificate if you're SC/ST/OBC" />
                    <CheckItem text="Step 7: Pay online. Save that confirmation - screenshot it, download it, whatever. You'll need it." />
                    <CheckItem text="Step 8: Download your enrollment confirmation. That number is super important. You'll need it for EVERYTHING - assignments, exams, results, everything. Don't lose it." />
                  </ul>

                  <div className="mt-5 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Mistakes everyone makes (don't be everyone):</div>
                    <ul className="mt-3 space-y-2 text-slate-600 dark:text-slate-300">
                      <li>• Uploading huge files that are too big</li>
                      <li>• Using the wrong file types</li>
                      <li>• Different name spellings on different documents</li>
                      <li>• Colored background in photo (needs to be white)</li>
                      <li>• Waiting till the last day and then the site crashes</li>
                    </ul>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* FAQs */}
          <Section>
            <div id="faqs" />
            <SectionHeader
              eyebrow="FAQs"
              title="Questions You're Probably Thinking Right Now"
              subtitle="Straight answers, same tone."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I really become a therapist with this degree?",
                      a: "No. Not with just BA. I know I keep saying this, but people keep asking, so: to practice as a clinical psychologist or therapist in India, you need BA/BSc Psychology (3 years) + MA Psychology (2 years) + MPhil Clinical Psychology (2 years) + RCI registration. That's 7 years total from finishing 12th, plus a lot of money. With just BA, you can work in HR, as a counseling assistant helping a licensed therapist, in social work, or research assistance. If therapy is your goal, think of this BA as step one of a seven-step journey.",
                    },
                    {
                      q: "I'm terrible at math. Will I struggle with the statistics parts?",
                      a: "Honestly? You'll need to put in effort, but it's not impossible. The statistics in BA Psychology isn't like engineering math. It's more about understanding what numbers mean - like what does it mean when a study says \"p < 0.05\" or how to interpret a correlation. You'll need to learn some formulas and do some calculations, but if you actually study and practice, most people can handle it even if math isn't their strength. If you're absolutely phobic about any numbers whatsoever, psychology might be tough. But if you're willing to try and put in effort, you can manage.",
                    },
                    {
                      q: "What jobs can I get that actually pay decent money right after graduating?",
                      a: "Real talk: most psychology jobs right after BA don't pay great. HR positions are your best bet - ₹18,000 to ₹35,000 monthly starting, which is okay-ish. NGO work pays ₹18,000 to ₹32,000 usually. Research assistant jobs are ₹15,000 to ₹28,000 and often temporary. Teaching after B.Ed pays ₹25,000 to ₹40,000. These aren't amazing salaries, but they grow with experience. If you want high pay (₹50,000+ monthly) right after graduation, psychology isn't the path. Good psychology money comes with further education and experience - clinical psychologists with MPhil can eventually earn ₹60,000 to ₹1,00,000+, but that's after 7 years of education.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I study this while working a full-time job?",
                      a: "Yeah, distance learning exists for exactly this reason. No daily classes. You study whenever - mornings, nights, weekends. Exams happen twice a year. BUT - and this is important - psychology has practical components. You'll need to do some practicals at your study center, which means occasional visits. Assignments (TMAs) need regular work. So yes, people do it while working, especially those in HR or related fields wanting psychology qualification. Just know it needs real time commitment - probably 10-15 hours a week - and you can't just ignore it. Self-discipline is huge when there's no teacher forcing you to study daily.",
                    },
                    {
                      q: "Is IGNOU degree actually respected or do people look down on distance education?",
                      a: "IGNOU is a proper central university, UGC approved. The degree is 100% valid for jobs, further studies, everything. Legally and officially, it's equal to regular college degrees. Now, will some snooty people look down on distance education? Maybe. There are always jerks. But for actual jobs, especially HR or social work, nobody cares if you did regular college or distance - they care about your skills and how you interview. For MA admissions, IGNOU BA grads are treated the same as any other BA grads. The stigma against distance education is outdated. What matters is what you actually learn and can do.",
                    },
                    {
                      q: "So Should You Actually Do This?",
                      a: "Here's my final honest take.\n\nThe IGNOU BA in Psychology Admission 2026 is a solid choice IF - and this is a big if - you understand what it actually is. It's not a shortcut to being a therapist. It's not a guaranteed high-paying job. It's not magic.\n\nWhat it IS: A legitimate, comprehensive introduction to psychology that gives you understanding of human behavior, prepares you for HR careers, provides foundation for further psychology studies if you want them, and helps you understand mental health and people better.\n\nYou need to be okay with:\nStarting salaries being modest (₹15,000-35,000 range)\nNeeding more education for advanced psychology careers\nSome statistics and research methods (can't avoid it)\nSelf-discipline to study without daily classes\nThe fact that some careers need 7 years of education, not 3\n\nIf you're genuinely fascinated by why people do what they do, interested in HR or social work, planning further studies anyway, can handle modest pay initially, and understand the realistic limitations, then yeah, go for it.\n\nBut don't do this because you think it's easy, or because you just need any degree, or because you have some fantasy about being a therapist without understanding the actual requirements. That's setting yourself up for disappointment.\n\nCheck www.ignou.ac.in for the exact 2026 admission dates. If you want help with the application process and navigating IGNOU's system, Unnati Education can guide you through it. Just make sure you're choosing this for the right reasons - because you genuinely care about understanding human behavior, not because it sounds cool.\n\nBe smart. Be realistic. And if psychology really does fascinate you, then welcome to a genuinely interesting field of study. Just know what you're getting into.",
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
                  Send your details — <b>name</b>, <b>DOB</b>, <b>qualification</b>, and <b>BAFPC</b>. We’ll help with admission,
                  documents, subject selection, assignments, and exam guidance.
                </p>
                <div className="mt-5 flex flex-wrap gap-3">
                  <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFPC%20Admission%202026" tone="primary">
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

function HeroPsychology() {
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
            IGNOU BA in Psychology
            <span className="block text-blue-700 dark:text-blue-300">Admission 2026</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code:{" "}
            <span className="font-black text-slate-900 dark:text-white">BAFPC</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              You know that friend who always seems to understand exactly what people are going through? Or maybe you've caught yourself wondering why your brain remembers embarrassing moments from years ago but forgets where you kept your keys this morning? If questions like these genuinely fascinate you - not just sound interesting but actually keep you thinking - then the IGNOU BA in Psychology Admission 2026 might be exactly what you're looking for. And I mean really looking for, not just "I need some degree and psychology sounds cool."
            </p>
            <p>
              Look, I'm going to be completely straight with you here. This isn't one of those degrees where you can waltz into a high-paying job right after graduation. Psychology is fascinating, yes. Important, absolutely. But if you're thinking you'll finish this BA and immediately start your own counseling practice or work as a therapist, I need to stop you right there. That's not how it works, and anyone telling you otherwise is either confused or lying.
            </p>
            <p>
              Let me walk you through everything honestly - the good parts, the limitations, what you'll actually study, what you can realistically do with this degree, and what requires years more education.
            </p>
          </div>

          {/* Badges */}
          <div className="mt-5 flex flex-wrap gap-2">
            <span className="inline-flex items-center gap-2 rounded-full border border-blue-200/70 bg-blue-50 px-3 py-1 text-xs font-black text-blue-800 dark:border-blue-500/25 dark:bg-blue-500/10 dark:text-blue-200">
              <StackIcon className="h-4 w-4" /> 120 Credits • 6 Semesters
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
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFPC%20Admission%202026" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAFPC 2026”</b> on WhatsApp for faster response.
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

function TriRow({ a, b, c }) {
  return (
    <tr>
      <td className="py-3 pr-4 font-semibold text-slate-900 dark:text-white whitespace-nowrap">{a}</td>
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[220px]">{b}</td>
      <td className="py-3 text-slate-600 dark:text-slate-300 min-w-[220px]">{c}</td>
    </tr>
  );
}

function ContentCard({ title, paragraphs = [], bullets = [], footer }) {
  return (
    <Card>
      <h3 className="font-black text-slate-900 dark:text-white">{title}</h3>
      {paragraphs.map((p, i) =>
        p === "" ? (
          <div key={i} className="h-3" />
        ) : (
          <p key={i} className={`text-slate-600 dark:text-slate-300 leading-relaxed ${i === 0 ? "mt-2" : "mt-3"}`}>
            {p}
          </p>
        )
      )}
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
                <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[340px] whitespace-pre-line">{r[1]}</td>
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFPC%20Admission%202026"
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

function BookIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M6 3.8h11a2 2 0 0 1 2 2V20a1 1 0 0 1-1.4.9C15.4 19.9 13.8 19.4 12 19.4s-3.4.5-5.6 1.5A1 1 0 0 1 5 20V5.8a2 2 0 0 1 1-2Zm1 2V18c1.7-.8 3.4-1.2 5-1.2s3.3.4 5 1.2V5.8H7Z" />
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
