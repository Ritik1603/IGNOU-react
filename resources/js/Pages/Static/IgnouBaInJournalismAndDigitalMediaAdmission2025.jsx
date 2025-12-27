import { useEffect, useMemo, useRef, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BaInJournalismAndDigitalMediaAdmission2026() {
  const infoTiles = useMemo(
    () => [
      { label: "Programme", value: "BA Journalism & Digital Media", icon: <BookIcon className="h-5 w-5" /> },
      { label: "Programme Code", value: "BAFJDM", icon: <PenIcon className="h-5 w-5" /> },
      { label: "University", value: "IGNOU", icon: <UniversityIcon className="h-5 w-5" /> },
      { label: "School", value: "Journalism & New Media Studies", icon: <HatIcon className="h-5 w-5" /> },
      { label: "Mode", value: "Distance learning", icon: <HomeStudyIcon className="h-5 w-5" /> },
      { label: "Duration", value: "3–6 Years", icon: <ClockIcon className="h-5 w-5" /> },
      { label: "Total Credits", value: "148 (6 Sem)", icon: <StackIcon className="h-5 w-5" /> },
      { label: "Medium", value: "English / Hindi", icon: <LangIcon className="h-5 w-5" /> },
    ],
    []
  );

  useEffect(() => {
    if (!document.getElementById("bafjdm-layout-v2")) {
      const s = document.createElement("style");
      s.id = "bafjdm-layout-v2";
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

  const semesterBlocks = useMemo(
    () => [
      {
        id: "sem1",
        title: "Semester 1: Getting Started",
        intro:
          "In plain English: You start with the basics - what journalism is, how it works, why it matters. Then you pick a hands-on skill to practice right away - either reporting, editing videos, or learning business basics. Plus you choose other courses to round out your knowledge.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Introduction to Journalism and Digital Media", "BNM-021", "6"],
            [
              "VOC\n(Any 1)",
              "1. Reporting in Journalism\n2. Video Editing\n3. Entrepreneurship",
              "1. BNMV-101\n2. BNMV-102\n3. BCOS-185",
              "4",
            ],
            [
              "IDC\n(Any 1)",
              "1. Media and Communication Skills\n2. Applied Ethics\n3. Disaster Management\n4. Understanding Ambedkar\n5. General Psychology\n6. Madhyakaleen Bharatiya Sahitya evam Sanskriti\n7. Indian Society: Images and Realities\n8. Pracheen Bharatiya Rajniti",
              "1. BEGG-171\n2. BPYI-101\n3. BPAG-171\n4. BABG-171\n5. BPCG-171\n6. BHDG-175\n7. BSOG-171\n8. BSKG-178",
              "6",
            ],
            [
              "SEC\n(Any 1)",
              "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Computer Applications in Business\n4. Tourism Anthropology\n5. Anuvaad Siddhant Evam Pravidhi\n6. Developing Emotional Competence\n7. Creative Writing\n8. Machine Translation",
              "1. BEGS-183\n2. BPCS-183\n3. BCOS-183\n4. BANS-183\n5. BHDS-183\n6. BPCS-185\n7. BEGG-174\n8. BTTS-183",
              "4",
            ],
          ],
        },
      },
      {
        id: "sem2",
        title: "Semester 2: Understanding Media Better",
        intro:
          "What this means: You learn how to spot fake news, understand how information spreads online, and think critically about media. Plus more hands-on practice in editing, photography, or business skills.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Media and Information Literacy", "BNM-023", "6"],
            [
              "VOC\n(Any 1)",
              "1. Editing for Journalism\n2. Digital Photography\n3. Personal Selling and Salesmanship",
              "1. BNMV-103\n2. BNMV-104\n3. BCOS-186",
              "4",
            ],
            [
              "AECC\n(Any 1)",
              "1. Environmental Studies\n2. English Communication Skills\n3. हिंदी भाषा और संप्रेषण\n4. Study of Urdu Progressive Poetry\n5. Sanskrit Sahitya",
              "1. BEVAE-181\n2. BEGAE-182\n3. BHDAE-182\n4. BUDAE-182\n5. BSKAE-182",
              "4",
            ],
            [
              "VAC\n(Any 1)",
              "1. Value Education\n2. Gender Sensitization: Society and Culture\n3. Disability, Society and Culture",
              "1. BEDSV-101\n2. BGDG-172\n3. BMDG-171",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem3",
        title: "Semester 3: Writing and Ethics",
        intro:
          "The deal here: You get serious about writing different types of stories - news, features, investigative pieces. And you learn about media law and ethics - super important stuff that keeps you out of trouble.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Journalistic Writings", "BNM-025", "6"],
            ["DSC", "Media Ethics and Regulations", "BNM-026", "6"],
            [
              "SEC\n(Any 1)",
              "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Developing Emotional Competence\n4. Life Skills\n5. Computer Application in Business\n6. Laboratory Management Skills\n7. Tourism Anthropology\n8. Anuvaad Siddhant Evam Pravidhi",
              "1. BEGS-183\n2. BPCS-183\n3. BPCS-185\n4. BSSS-183\n5. BCOS-183\n6. BCHS-183\n7. BANS-183\n8. BHDS-183",
              "4",
            ],
            [
              "GE\n(Any 1)",
              "1. Psychology for Health and Well-being\n2. Governance: Issues and Challenges\n3. Rethinking Development\n4. समाचार पत्र और फीचर लेखन\n5. Academic Writing & Composition\n6. Philosophy of Religion\n7. Indian Society: Images and Realities",
              "1. BPCG-173\n2. BPAG-172\n3. BSOG-173\n4. BHDG-173\n5. BEGG-173\n6. BPYG-172\n7. BSOG-171",
              "6",
            ],
          ],
        },
      },
      {
        id: "sem4",
        title: "Semester 4: Audio and Persuasion",
        intro:
          "What you're doing: Learning everything about making podcasts - recording, editing, hosting, getting it out there. Plus understanding how persuasion works in ads, PR, and content marketing.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Audio Podcast", "BNM-029", "6"],
            ["DSC", "Persuasive Communication Strategies", "BNM-030", "6"],
            [
              "MINOR\n(Any 1)",
              "1. Digital Photography\n2. Video Editing\n3. Personal Selling and Salesmanship",
              "1. BNMV-104\n2. BNMV-102\n3. BCOS-186",
              "4",
            ],
            [
              "SEC\n(Any 1)",
              "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Developing Emotional Competence\n4. Life Skills\n5. Creative Writing\n6. Anuvaad Siddhant Evam Pravidhi\n7. Tourism Anthropology\n8. Computer Applications in Business",
              "1. BEGS-183\n2. BPCS-183\n3. BPCS-185\n4. BSSS-183\n5. BEGG-174\n6. BHDS-183\n7. BANS-183\n8. BCOS-183",
              "4",
            ],
          ],
        },
      },
      {
        id: "sem5",
        title: "Semester 5: Mobile Journalism and Research",
        intro:
          "Here's the cool part: You learn to do professional journalism using just your smartphone - shooting video, recording audio, editing, publishing. Everything from one device. Plus research methods if you want to study media professionally.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Mobile Journalism", "BNM-031", "6"],
            ["DSC", "Research Methods in Media Studies", "BNM-032", "6"],
            [
              "MINOR\n(Any 1)",
              "1. Digital Photography\n2. Video Editing\n3. Entrepreneurship\n4. Personal Selling and Salesmanship",
              "1. BNMV-104\n2. BNMV-102\n3. BCOS-185\n4. BCOS-186",
              "4",
            ],
            [
              "SEC\n(Any 1)",
              "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Life Skills\n4. Creative Writing\n5. Computer Applications in Business\n6. Anuvaad Siddhant Evam Pravidhi\n7. Tourism Anthropology\n8. Developing Emotional Competence",
              "1. BEGS-183\n2. BPCS-183\n3. BSSS-183\n4. BEGG-174\n5. BCOS-183\n6. BHDS-183\n7. BANS-183\n8. BPCS-185",
              "4",
            ],
          ],
        },
      },
      {
        id: "sem6",
        title: "Semester 6: Bringing It All Together",
        intro:
          "Final semester: You put everything together into complete digital projects - videos, multimedia stories, interactive content. Plus learn how companies communicate with the public and manage their reputation.",
        table: {
          headers: ["TYPE", "SUBJECTS", "CODE", "CREDITS"],
          rows: [
            ["DSC", "Digital Media Production", "BNM-033", "6"],
            ["DSC", "Public Relations and Corporate Communication", "BNM-034", "6"],
            [
              "MINOR\n(Any 1)",
              "1. Digital Photography\n2. Video Editing\n3. Entrepreneurship\n4. Personal Selling and Salesmanship",
              "1. BNMV-104\n2. BNMV-102\n3. BCOS-185\n4. BCOS-186",
              "4",
            ],
            [
              "SEC\n(Any 1)",
              "1. Writing and Study Skills\n2. Emotional Intelligence\n3. Developing Emotional Competence\n4. Life Skills\n5. Creative Writing\n6. Anuvaad Siddhant Evam Pravidhi\n7. Tourism Anthropology\n8. Computer Applications in Business",
              "1. BEGS-183\n2. BPCS-183\n3. BPCS-185\n4. BSSS-183\n5. BEGG-174\n6. BHDS-183\n7. BANS-183\n8. BCOS-183",
              "4",
            ],
          ],
        },
      },
    ],
    []
  );

  return (
    <UserLayout>
      <Seo
        title="IGNOU BA Journalism & Digital Media 2026 | Course Details & Career Scope"
        description="Explore IGNOU BA in Journalism and Digital Media 2026 — curriculum, career opportunities & guidance. Unnati Education supports you through every step from 0 to 100."
        keywords="IGNOU BAFJDM 2026, BA Journalism Digital Media IGNOU, IGNOU Journalism Admission 2026, BNM courses, Unnati Education IGNOU"
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
          <HeroBAFJDM />

          {/* QUICK FACTS */}
          <Section>
            <div id="highlights" />
            <SectionHeader
              eyebrow="Highlights"
              title="Let's Start With the Basics"
              subtitle="Before I get into the details, here's everything you need to know right now, laid out plain and simple."
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
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">Here's the Answer</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <Row k="What's it called?" v="Bachelor of Arts in Journalism and Digital Media" />
                      <Row k="Program code?" v="BAFJDM (you'll need this when applying)" />
                      <Row k="Which university?" v="IGNOU - Indira Gandhi National Open University" />
                      <Row k="Who runs it?" v="School of Journalism and New Media Studies" />
                      <Row k="How do I study?" v="Distance learning - study from home, no daily college" />
                      <Row k="How long does it take?" v="3 years if you're quick, up to 6 years if you need more time" />
                      <Row k="How many credits total?" v="148 credits across six semesters" />
                      <Row k="What language?" v="Your choice - English or Hindi" />
                      <Row k="Who can apply?" v="Anyone who passed 12th, any stream" />
                      <Row k="Age limit?" v="None. Seriously, no age limit" />
                      <Row k="When can I apply?" v="Twice a year - January and July" />
                      <Row k="Deadline?" v="Usually August 31, 2026" />
                      <Row k="Is it recognized?" v="UGC approved - completely valid everywhere" />
                      <Row
                        k="What jobs can I get?"
                        v="Journalism, YouTube content creation, social media managing, video editing, podcasting, PR, digital marketing - lots of options"
                      />
                    </tbody>
                  </table>
                </div>
              </Card>
            </Reveal>

            <div className="mt-8 grid gap-6 lg:grid-cols-2">
              <Reveal>
                <ContentCard
                  title="IGNOU BA in Journalism and Digital Media Admission 2026: Your Complete Guide to Building a Career in Modern Storytelling"
                  paragraphs={[
                    "You know that feeling when you're scrolling through Instagram and you see a really well-made reel that just pulls you in? Or when you're watching a news video on YouTube and you think, “Man, I wish I could do that”? Maybe you read articles online and imagine yourself writing stories that thousands of people would read and share.",
                    "If any of this sounds like you, then listen - the IGNOU BA in Journalism and Digital Media Admission 2026 might be exactly what you've been looking for.",
                    "Here's the thing. This isn't one of those old-school journalism programs where you only learn about newspapers and traditional reporting. IGNOU's School of Journalism and New Media Studies has created something way more relevant for today's world. You'll learn everything - from writing news stories and shooting videos to editing podcasts, managing social media accounts, and creating content that actually gets people's attention.",
                    "Whether you just finished 12th standard and have no idea what to do next, or you're already working but feel stuck and want to switch to something more creative, this three-year program can genuinely change your career path.",
                    "I'm going to break down everything for you in simple terms. No confusing jargon, no beating around the bush. Just straight talk about what this program is, who it's right for, what you'll actually learn, how to get in, and what kind of job you can land afterward.",
                  ]}
                />
              </Reveal>

              <Reveal>
                <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
                  <h3 className="font-black text-slate-900 dark:text-white">Fast-track plan (if you’re serious)</h3>
                  <p className="mt-1 text-slate-600 dark:text-slate-300">
                    This degree is useless if you don’t build skills + portfolio. The win is: learn → create → publish → improve.
                  </p>
                  <div className="mt-4 grid gap-4">
                    <StepMini n="01" title="Apply clean" desc="Correct code (BAFJDM), correct documents, correct medium." />
                    <StepMini n="02" title="Create weekly" desc="Every week publish 1 post: article/video/podcast. No excuses." />
                    <StepMini n="03" title="Build proof" desc="Portfolio link > “I’m passionate”. Employers hire proof." />
                  </div>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM%20Admission%202026%20Guidance" tone="primary">
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

          {/* WHAT YOU LEARN */}
          <Section alt>
            <div id="learn" />
            <SectionHeader
              eyebrow="Curriculum Focus"
              title="So What Exactly Will You Learn?"
              subtitle="This program teaches you how to tell stories using whatever platform makes sense - text, video, audio, social media posts, podcasts, you name it."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">The Writing and Reporting Stuff</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Yeah, you'll learn the traditional journalism basics. How to research stories, interview people without making it awkward, check if something's actually true before you share it, and write clearly so anyone can understand.</p>
                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">The Creative Digital Stuff</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      This is where it gets fun. Video editing, making podcasts, photography, designing graphics for social media, creating those short videos everyone's obsessed with now. Real hands-on stuff.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Understanding How Platforms Work</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Ever wonder why some Instagram posts blow up and others get zero engagement? Or how YouTube actually decides what to recommend? You'll learn all that - how different platforms work, what their algorithms like, how to actually get people to see your content.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">The Strategic Thinking Part</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    It's not enough to just make content. You need to understand who you're making it for, what they want, how to measure if it's working, and how to plan content that actually achieves something. That's the strategic side.
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">The Ethics and Law Stuff</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Here's something people don't think about until it's too late - media law, ethical journalism, fact-checking, dealing with fake news, knowing when speed matters and when accuracy matters more. Important stuff in today's world.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">The Technical Tools</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Professional video editing software, audio editing programs, content management systems, analytics tools, publishing platforms - you'll get comfortable with all of it.
                    </p>
                  </div>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Why this beats random YouTube tutorials</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      What makes this different from just watching YouTube tutorials? You get the whole picture. You understand WHY things work, not just HOW to click buttons. And in today's media world, that understanding is what separates someone messing around from someone who can actually build a career.
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
              title="Is This Program Right for You?"
              subtitle="Not everyone should do this. Here’s the real filter."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">You should seriously consider this if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="You genuinely care about what's happening in the world and love following news and media" />
                    <CheckItem text="Making content for social media sounds exciting, not like a chore" />
                    <CheckItem text="You enjoy writing, filming, recording audio, or just creating stuff in general" />
                    <CheckItem text="The idea of talking to different people and telling their stories feels interesting" />
                    <CheckItem text="You want a career that mixes creativity with technology" />
                    <CheckItem text="Fast-paced work energizes you more than it stresses you out" />
                    <CheckItem text="Learning new apps and tools doesn’t scare you" />
                    <CheckItem text="Media/content/digital marketing careers sound appealing" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Maybe look at other options if:</h3>
                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Media and content stuff bores you or seems pointless" />
                    <CheckItem text="You need a very stable, predictable career path immediately" />
                    <CheckItem text="Technology and new software genuinely intimidate you" />
                    <CheckItem text="You’d rather study pure academic subjects like literature or history" />
                    <CheckItem text="You’re more interested in traditional careers like engineering or medicine" />
                    <CheckItem text="The thought of constantly learning new platforms sounds exhausting" />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Straight truth:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      If you want “one skill forever”, media isn’t for you. This field rewards people who keep learning.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* COMPARISON */}
          <Section alt>
            <div id="comparison" />
            <SectionHeader
              eyebrow="Comparison"
              title="How Does This Compare to Other Similar Programs?"
              subtitle="Mass Communication? English? BBA? Here’s the difference in plain terms."
            />

            <Reveal>
              <Card>
                <div className="overflow-x-auto">
                  <table className="w-full text-left text-sm">
                    <thead>
                      <tr className="border-b border-slate-200/80 dark:border-white/10">
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">What Matters</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Journalism & Digital Media</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA Mass Communication</th>
                        <th className="py-3 pr-4 font-black text-slate-700 dark:text-slate-200">BA English</th>
                        <th className="py-3 font-black text-slate-700 dark:text-slate-200">BBA</th>
                      </tr>
                    </thead>
                    <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                      <FiveRow
                        a="Main focus"
                        b="Modern digital storytelling & content creation"
                        c="Traditional media: TV, radio, newspapers, ads"
                        d="Literature, critical reading, writing"
                        e="Business management"
                      />
                      <FiveRow
                        a="Technical skills you get"
                        b="Lots: video, podcast, digital tools"
                        c="Some production + theory"
                        d="Not much (mostly writing)"
                        e="Minimal"
                      />
                      <FiveRow
                        a="Hands-on practice"
                        b="A ton: constant creation"
                        c="Decent mix"
                        d="Very little"
                        e="Some case studies"
                      />
                      <FiveRow
                        a="Best career fit"
                        b="Digital journalism, creator, social media manager"
                        c="Broadcasting, advertising, PR"
                        d="Teaching, writing content"
                        e="Business roles"
                      />
                      <FiveRow
                        a="Platform knowledge"
                        b="Digital-first: social, YouTube, podcasts"
                        c="Traditional adapting to digital"
                        d="Mostly written content"
                        e="Business communication"
                      />
                      <FiveRow
                        a="Job market now"
                        b="Growing fast"
                        c="Steady"
                        d="Stable"
                        e="Big"
                      />
                    </tbody>
                  </table>
                </div>

                <div className="mt-6 grid gap-4 lg:grid-cols-2">
                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Pick Journalism & Digital Media if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      You’re excited about creating content for today’s digital world and want real production skills.
                    </p>
                  </div>

                  <div className="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Pick others if:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Mass Communication: broader overview including ads + traditional broadcast. <br />
                      English: literature-first, teaching/writing oriented. <br />
                      BBA: business-first, not content-first.
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
              title="What You'll Actually Study - Semester by Semester"
              subtitle="Here’s the full semester structure with codes, credits, and plain-English meaning."
              rightCTA={
                <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20Send%20BAFJDM%20Semester%20wise%20details%202026" tone="primary">
                  <WhatsAppIcon className="h-5 w-5" /> Get Semester Details
                </CTA>
              }
            />

            <Reveal>
              <Accordion
                items={semesterBlocks.map((s) => ({
                  id: s.id,
                  title: s.title,
                  body: (
                    <div>
                      <p className="text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">{s.intro}</p>

                      <div className="mt-4 overflow-x-auto rounded-2xl border border-slate-200/80 dark:border-white/10">
                        <table className="w-full text-left text-sm">
                          <thead>
                            <tr className="border-b border-slate-200/80 bg-slate-50 dark:border-white/10 dark:bg-white/5">
                              {s.table.headers.map((h) => (
                                <th key={h} className="py-3 px-4 font-black text-slate-700 dark:text-slate-200">
                                  {h}
                                </th>
                              ))}
                            </tr>
                          </thead>
                          <tbody className="divide-y divide-slate-200/60 dark:divide-white/10">
                            {s.table.rows.map((r, i) => (
                              <tr key={i}>
                                <td className="py-3 px-4 font-semibold text-slate-900 dark:text-white whitespace-pre-line min-w-[140px]">
                                  {r[0]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[360px]">
                                  {r[1]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[180px]">
                                  {r[2]}
                                </td>
                                <td className="py-3 px-4 text-slate-600 dark:text-slate-300 whitespace-pre-line min-w-[110px]">
                                  {r[3]}
                                </td>
                              </tr>
                            ))}
                          </tbody>
                        </table>
                      </div>
                    </div>
                  ),
                }))}
              />
            </Reveal>
          </Section>

          {/* SKILLS */}
          <Section alt>
            <div id="skills" />
            <SectionHeader
              eyebrow="Skills"
              title="Real Skills You'll Actually Have"
              subtitle="Forget the fancy degree for a second. Here’s what you can do if you take this seriously."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Tell Stories Multiple Ways: Turn one story into an article, a video, a podcast, social posts, or graphics." />
                    <CheckItem text="Use Professional Tools: Video editing, audio editing, design tools, CMS, analytics." />
                    <CheckItem text="Understand Digital Platforms: How YouTube/Instagram/X/LinkedIn/podcasts actually work (including algorithm basics)." />
                    <CheckItem text="Think Critically: Spot fake news, verify sources, understand bias, check facts." />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <ul className="space-y-3">
                    <CheckItem text="Plan Strategically: Content calendars, analytics, engagement strategies, measuring what works." />
                    <CheckItem text="Write Professionally: Articles, scripts, captions, features, corporate communications." />
                    <CheckItem text="Make Ethical Choices: Privacy vs public interest, speed vs accuracy, responsible publishing." />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Hard truth:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Skills don’t appear from “studying”. They appear from producing work weekly and getting feedback.
                    </p>
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* CAREERS */}
          <Section>
            <div id="careers" />
            <SectionHeader
              eyebrow="Careers"
              title="What Kind of Jobs Can You Actually Get?"
              subtitle="Real paths, realistic ranges. Your portfolio affects your salary more than your “degree”."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 1: Digital Journalism</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Work for online news sites, digital news organizations, or digital divisions of newspapers/TV. Roles: reporter, video journalist, multimedia producer.
                    <br />
                    Starting pay: ₹20,000–₹35,000/month (varies by city & brand).
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 2: Content Creation & Social Media</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Companies, brands, influencers need content + strategy. Roles: content creator, social media manager, community manager.
                      <br />
                      Starting pay: ₹18,000–₹40,000/month (+ freelance upside).
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 3: Video Production & Editing</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Production houses, agencies, corporate teams, YouTube channels. If you’re good, this pays.
                      <br />
                      Starting: ₹20,000–₹45,000/month.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 4: Podcasting & Audio</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      India’s podcast space is expanding. Roles: producer, editor, host. Money grows with audience + sponsorships.
                    </p>
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Path 5: PR & Corporate Communication</h3>
                  <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Media relations, crisis communication, internal comms, brand messaging.
                    <br />
                    Starting: ₹25,000–₹50,000/month (metro advantage).
                  </p>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 6: Digital Marketing & SEO</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Content marketing, SEO writing, social media marketing.
                      <br />
                      Starting: ₹20,000–₹40,000/month.
                    </p>
                  </div>

                  <div className="mt-6 border-t border-slate-200/80 dark:border-white/10 pt-6">
                    <h3 className="font-black text-slate-900 dark:text-white">Path 7: Freelancing</h3>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Writing for publications, making videos for brands, managing social for clients, producing podcasts. Income varies wildly — skilled freelancers can out-earn many jobs.
                    </p>
                  </div>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Reality:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      The degree gets you “entry”. Your skills + portfolio decide your growth.
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
              title="Can You Actually Apply? + How to Actually Apply (Step by Step)"
              subtitle="Requirements are simple. Execution is where people mess up."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">Can You Apply? (Probably Yes)</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">You need:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="12th pass certificate from any recognized board" />
                    <CheckItem text="Any stream works - Science, Commerce, Arts, Vocational" />
                    <CheckItem text="No minimum percentage requirement" />
                    <CheckItem text="No age limit" />
                    <CheckItem text="Comfort with either English or Hindi" />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">This works especially well if you're:</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Someone who loves consuming media and wants to make it professionally" />
                    <CheckItem text="Working somewhere and thinking about switching to content/media" />
                    <CheckItem text="Already active on social media and want to level up" />
                    <CheckItem text="Interested in storytelling using modern multimedia tools" />
                    <CheckItem text="Excited about mixing creativity with technology" />
                  </ul>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <h3 className="font-black text-slate-900 dark:text-white">How to Apply - Step by Step</h3>

                  <div className="mt-4 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">When to Apply:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      Admissions open twice yearly (January & July). Deadline usually lands around August 31, 2026. Apply early — last-week rush causes errors and site issues.
                    </p>
                  </div>

                  <ul className="mt-5 space-y-3">
                    <CheckItem text='Step 1: Go to ignouadmission.samarth.edu.in when admissions open (official only).' />
                    <CheckItem text='Step 2: Click "Fresh Admission" and verify email + mobile via OTP.' />
                    <CheckItem text="Step 3: Fill details exactly as on your 12th certificate (spelling matters)." />
                    <CheckItem text='Step 4: Select "Bachelor of Arts in Journalism and Digital Media" (code: BAFJDM). Triple-check.' />
                    <CheckItem text="Step 5: Choose regional center + study center near you." />
                    <CheckItem text="Step 6: Choose medium (English or Hindi)." />
                    <CheckItem text="Step 7: Upload documents within size/format limits." />
                    <CheckItem text="Step 8: Pay online and save confirmation." />
                    <CheckItem text="Step 9: Download enrollment confirmation and keep the number safe." />
                  </ul>

                  <p className="mt-5 font-black text-slate-900 dark:text-white">Documents You Need (Get These Ready):</p>
                  <ul className="mt-3 space-y-3">
                    <CheckItem text="Class 10 marksheet - PDF, clear scan, under 200 KB" />
                    <CheckItem text="Class 12 marksheet - PDF, clear scan, under 200 KB" />
                    <CheckItem text="Passport photo - JPEG, white background, under 50 KB" />
                    <CheckItem text="Signature on white paper - JPEG, under 30 KB" />
                    <CheckItem text="Aadhar or government ID - PDF, under 200 KB" />
                    <CheckItem text="Category certificate (SC/ST/OBC) if applicable" />
                  </ul>

                  <div className="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-4 dark:border-white/10 dark:bg-white/5">
                    <div className="font-black text-slate-900 dark:text-white">Don’t Make These Mistakes:</div>
                    <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                      No oversized files. No wrong file types. Exact name matching. White background photo only. Don’t wait till the last day.
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
              title="Need Help? We've Got You"
              subtitle="Forms, deadlines, uploads, electives — we guide you so you don’t waste a year on avoidable mistakes."
            />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <p className="text-slate-600 dark:text-slate-300 leading-relaxed">
                    IGNOU admissions can get confusing. Forms, deadlines, document uploads, choosing the right subjects — it’s a lot. That’s exactly where Unnati Education comes in.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We help you through the whole thing — eligibility check, correct form filling, correct uploads, and making sure everything goes through before the deadline.
                  </p>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    We also help you understand the semester system, credits, and elective choices based on your career goals — not random selection.
                  </p>

                  <div className="mt-5 flex flex-wrap gap-3">
                    <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFJDM%20Admission%202026%20Support" tone="primary">
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
                  <h3 className="font-black text-slate-900 dark:text-white">Extra Things That'll Help Your Career</h3>
                  <p className="mt-3 text-slate-600 dark:text-slate-300 leading-relaxed">
                    While you're doing this degree, add short courses that actually increase employability:
                  </p>

                  <ul className="mt-4 space-y-3">
                    <CheckItem text="Digital Marketing Certificates: Google/HubSpot/Facebook Blueprint." />
                    <CheckItem text="Advanced Software Skills: deeper editing (Premiere/DaVinci), audio (Audacity), design basics." />
                    <CheckItem text="Language Skills: English + Hindi combo opens more media doors." />
                    <CheckItem text="Photography Training: DSLR basics + editing (Lightroom/Photoshop) if you want to specialize." />
                    <CheckItem text="SEO & Analytics: Google Analytics + SEO basics = higher-value content roles." />
                  </ul>

                  <p className="mt-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                    None of these take years. They just make your degree practical and market-ready.
                  </p>
                </Card>
              </Reveal>
            </div>
          </Section>

          {/* FAQs */}
          <Section alt>
            <div id="faqs" />
            <SectionHeader eyebrow="FAQs" title="Questions You Probably Have" subtitle="Short answers. No fluff." />

            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "Can I do this while working full-time?",
                      a:
                        "Yes. That’s the whole point of distance learning — you study when you have time. No daily classes. But you must still set aside time for practical creation (videos/podcasts). Working people do complete this successfully.",
                    },
                    {
                      q: "Is this degree actually recognized for media jobs?",
                      a:
                        "Yes. IGNOU is a central university and UGC approved. The degree is valid. In media, skills + portfolio matter more than the college name anyway.",
                    },
                    {
                      q: "Do I need expensive cameras and editing software?",
                      a:
                        "No. You can start with a smartphone and free apps. As you improve, you can invest — but you don’t need expensive gear to begin.",
                    },
                  ]}
                />
              </Reveal>

              <Reveal>
                <FaqCard
                  items={[
                    {
                      q: "What if I'm not good with technology?",
                      a:
                        "The program builds up from basics. If you can use a smartphone and social apps, you can learn the tools step-by-step. The key is practice, not “talent”.",
                    },
                    {
                      q: "Can I do a Master's after this?",
                      a:
                        "Yes. You can pursue MA in Journalism/Mass Communication or related subjects from any Indian university. This BA works for postgrad eligibility.",
                    },
                    {
                      q: "So Should You Do This?",
                      a:
                        "The IGNOU BA in Journalism and Digital Media Admission 2026 is a real opportunity if you're into modern storytelling, digital content, and multimedia communication. The program covers old-school journalism + digital production, it’s flexible, it’s UGC approved, and it opens multiple career paths.\n\nBut here’s the reality: you’ll always be learning. Platforms change. Tools change. What people like changes. If you don’t enjoy creating content and learning new tools, you’ll suffer. If you DO enjoy it and you build a portfolio while studying, you can turn this into a career.",
                    },
                  ]}
                />
              </Reveal>
            </div>
          </Section>

          {/* META (AT THE END) */}
          {/* <Section alt>
            <SectionHeader eyebrow="Meta" title="Meta Details" subtitle="Meta details placed at the end as requested." />
            <div className="grid gap-6 lg:grid-cols-2">
              <Reveal>
                <Card>
                  <div className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Meta Title</div>
                  <div className="mt-2 font-black text-slate-900 dark:text-white">
                    IGNOU BA Journalism & Digital Media 2026 | Course Details & Career Scope
                  </div>
                </Card>
              </Reveal>

              <Reveal>
                <Card>
                  <div className="text-xs font-black uppercase tracking-wider text-slate-500 dark:text-slate-400">Meta Description</div>
                  <div className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed">
                    Explore IGNOU BA in Journalism and Digital Media 2026 — curriculum, career opportunities & guidance. Unnati Education supports you through every step from 0 to 100.
                  </div>
                </Card>
              </Reveal>
            </div>
          </Section> */}
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

          <div className="h-20" />
        </div>

        <MobileStickyCTA />
      </main>
    </UserLayout>
  );
}

/* ---------------- HERO ---------------- */

function HeroBAFJDM() {
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
            <Pill>Updated 2026</Pill>
            <Pill tone="blue">UGC Approved</Pill>
          </div>

          <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white">
            IGNOU BA in Journalism & Digital Media Admission 2026
            <span className="block text-blue-700 dark:text-blue-300">BAFJDM — Modern Storytelling Career Guide</span>
          </h1>

          <p className="mt-3 text-sm sm:text-base text-slate-600 dark:text-slate-300">
            Programme Code: <span className="font-black text-slate-900 dark:text-white">BAFJDM</span> • Medium:{" "}
            <span className="font-black text-slate-900 dark:text-white">English / Hindi</span>
          </p>

          <div className="mt-4 space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
            <p>
              You know that feeling when you're scrolling through Instagram and you see a really well-made reel that just pulls you in? Or when you're watching a news video on YouTube and you think, "Man, I wish I could do that"? Maybe you read articles online and imagine yourself writing stories that thousands of people would read and share.
            </p>
            <p>
              If any of this sounds like you, then listen - the IGNOU BA in Journalism and Digital Media Admission 2026 might be exactly what you've been looking for.
            </p>
            <p>
              Here's the thing. This isn't one of those old-school journalism programs where you only learn about newspapers and traditional reporting. IGNOU's School of Journalism and New Media Studies has created something way more relevant for today's world. You'll learn everything - and I mean everything - from writing news stories and shooting videos to editing podcasts, managing social media accounts, and creating content that actually gets people's attention.
            </p>
            <p>
              Whether you just finished 12th standard and have no idea what to do next, or you're already working but feel stuck and want to switch to something more creative, this three-year program can genuinely change your career path.
            </p>
            <p>
              I'm going to break down everything for you in simple terms. No confusing jargon, no beating around the bush. Just straight talk about what this program is, who it's right for, what you'll actually learn, how to get in, and what kind of job you can land afterward.
            </p>
          </div>

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

          <div className="mt-6 flex flex-wrap gap-3">
            <CTA href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20IGNOU%20BAFJDM%20Admission%202026" tone="primary">
              <WhatsAppIcon className="h-5 w-5" />
              WhatsApp
            </CTA>

            <CTA href="tel:+919355198199" tone="ghost">
              <PhoneIcon className="h-5 w-5" />
              Call
            </CTA>
          </div>

          <p className="mt-3 text-xs text-slate-500 dark:text-slate-400">
            Tip: Send <b>“BAFJDM 2026”</b> on WhatsApp for faster response.
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
    <span className={["inline-flex items-center", "rounded-full border", "px-3 py-1", "text-xs font-black", "transition", styles].join(" ")}>
      {children}
    </span>
  );
}

/* ---------------- SECTION ---------------- */

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
        <div className="min-w-0">
          <p className="text-xs font-bold uppercase text-slate-500 dark:text-slate-400">{label}</p>
          <p className="font-black text-slate-900 dark:text-white truncate">{value}</p>
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
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[220px]">{c}</td>
      <td className="py-3 pr-4 text-slate-600 dark:text-slate-300 min-w-[220px]">{d}</td>
      <td className="py-3 text-slate-600 dark:text-slate-300 min-w-[200px]">{e}</td>
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

/* ---------------- ACCORDION ---------------- */

function Accordion({ items = [] }) {
  const [openId, setOpenId] = useState(items?.[0]?.id || "");

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-2 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-2">
        {items.map((it) => {
          const active = openId === it.id;
          return (
            <div key={it.id} className="rounded-2xl border border-slate-200/80 dark:border-white/10 overflow-hidden">
              <button type="button" onClick={() => setOpenId(active ? "" : it.id)} className="w-full px-4 py-4 bg-slate-50 dark:bg-white/5 text-left">
                <div className="flex items-start justify-between gap-4">
                  <div className="font-black text-slate-900 dark:text-white">{it.title}</div>
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
              </button>

              {active ? <div className="px-4 pb-5 pt-4 bg-white dark:bg-[#0b1220]/40">{it.body}</div> : null}
            </div>
          );
        })}
      </div>
    </div>
  );
}

/* ---------------- FAQ ---------------- */

function FaqCard({ items = [] }) {
  const [open, setOpen] = useState(0);

  return (
    <div className="rounded-3xl border border-slate-200/80 bg-white/90 backdrop-blur-sm p-6 shadow-sm dark:border-white/10 dark:bg-[#0b1220]/70">
      <div className="space-y-3">
        {items.map((it, idx) => {
          const active = open === idx;
          return (
            <button key={idx} type="button" onClick={() => setOpen(active ? -1 : idx)} className="w-full text-left">
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
                {active ? <p className="mt-2 text-slate-600 dark:text-slate-300 leading-relaxed whitespace-pre-line">{it.a}</p> : null}
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
      className={[
        "grid h-11 w-11 place-items-center rounded-xl",
        tone === "blue" ? "bg-blue-600 text-white" : "bg-slate-900 text-white dark:bg-white/90 dark:text-slate-900",
      ].join(" ")}
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
          href="https://wa.me/919355198199?text=Hi%20Unnati%20-%20BAFJDM%20Admission%202026"
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

function HatIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 3 2 8l10 5 9-4.5V15h2V8L12 3Zm-6 9v4.5c0 1.7 3 3.5 6 3.5s6-1.8 6-3.5V12l-6 3-6-3Z" />
    </svg>
  );
}

function LangIcon(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" {...props}>
      <path d="M12 2.8c5.1 0 9.2 4.1 9.2 9.2S17.1 21.2 12 21.2 2.8 17.1 2.8 12 6.9 2.8 12 2.8Zm0 2a7.2 7.2 0 1 0 0 14.4 7.2 7.2 0 0 0 0-14.4Zm4.7 4.7-.8.3c-.4.1-.7.4-.8.8-.2.8-.5 1.6-1 2.3l2.2 2.2-1.4 1.4-2.1-2.1c-.7.5-1.5.9-2.4 1.1-.4.1-.7.4-.8.8l-.2.7H7.2l.3-1.1c.2-.8.8-1.4 1.6-1.6.6-.2 1.2-.4 1.7-.7l-1.9-1.9 1.4-1.4 1.8 1.8c.3-.5.5-1 .7-1.6.2-.8.8-1.4 1.6-1.6l1.1-.3v2.1Z" />
    </svg>
  );
}
