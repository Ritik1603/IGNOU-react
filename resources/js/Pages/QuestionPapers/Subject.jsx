import { useEffect, useState } from "react";
import UserLayout from "@/Layouts/UserLayout";
import { Head, router  } from "@inertiajs/react";


export default function Subject({ subject, sessions, paper }) {
    const [activeQ, setActiveQ] = useState(1);
    const [progress, setProgress] = useState(0);


    const cleanText = (html = "") => {
        const div = document.createElement("div");
        div.innerHTML = html;
        return div.textContent || div.innerText || "";
    };

    /* ===============================
       SCROLL + ACTIVE QUESTION
    =============================== */
    useEffect(() => {
        const onScroll = () => {
            if (paper?.qa_blocks?.length) {
                paper.qa_blocks.forEach((_, i) => {
                    const el = document.getElementById(`q-${i + 1}`);
                    if (!el) return;

                    const rect = el.getBoundingClientRect();
                    if (rect.top <= 180 && rect.bottom >= 180) {
                        setActiveQ(i + 1);
                    }
                });
            }

            const scrollTop = window.scrollY;
            const docHeight =
                document.documentElement.scrollHeight - window.innerHeight;
            if (docHeight > 0) {
                setProgress((scrollTop / docHeight) * 100);
            }
        };

        window.addEventListener("scroll", onScroll);
        return () => window.removeEventListener("scroll", onScroll);
    }, [paper]);

    /* ===============================
       KEYBOARD SHORTCUTS
    =============================== */
    useEffect(() => {
        const handleKeys = (e) => {
            if (!paper?.qa_blocks?.length) return;

            if (e.key === "j" && activeQ < paper.qa_blocks.length) {
                document
                    .getElementById(`q-${activeQ + 1}`)
                    ?.scrollIntoView({ behavior: "smooth" });
            }

            if (e.key === "k" && activeQ > 1) {
                document
                    .getElementById(`q-${activeQ - 1}`)
                    ?.scrollIntoView({ behavior: "smooth" });
            }
        };

        window.addEventListener("keydown", handleKeys);
        return () => window.removeEventListener("keydown", handleKeys);
    }, [activeQ, paper]);

    /* ===============================
       READING TIME
    =============================== */
    const readingTime = () => {
        if (!paper?.qa_blocks?.length) return 0;

        const text = paper.qa_blocks
            .map(b => `${b.question} ${b.answer}`)
            .join(" ")
            .replace(/<[^>]+>/g, "");

        return Math.max(1, Math.ceil(text.split(" ").length / 200));
    };

    return (
        <UserLayout>

            {/* ================= SEO META TAGS ================= */}
            <Head>
                <title>
                    {paper?.seo_title
                        ? paper.seo_title
                        : `${subject.subject_code} ${subject.subject_name} Question Paper`}
                </title>

                <meta
                    name="description"
                    content={
                        paper?.seo_description
                            ? paper.seo_description
                            : `Solved question paper for ${subject.subject_code} – ${subject.subject_name}.`
                    }
                />

                {paper?.seo_keywords && (
                    <meta name="keywords" content={paper.seo_keywords} />
                )}

                {/* Canonical */}
                <link
                    rel="canonical"
                    href={
                        paper?.canonical_url
                            ? paper.canonical_url
                            : typeof window !== "undefined"
                                ? window.location.href
                                : ""
                    }
                />

                {/* Open Graph */}
                <meta
                    property="og:title"
                    content={
                        paper?.seo_title
                            ? paper.seo_title
                            : `${subject.subject_code} Question Paper`
                    }
                />

                <meta
                    property="og:description"
                    content={
                        paper?.seo_description
                            ? paper.seo_description
                            : `Read solved answers for ${subject.subject_code}.`
                    }
                />

                <meta
                    property="og:type"
                    content="article"
                />

                <meta
                    property="og:url"
                    content={
                        typeof window !== "undefined"
                            ? window.location.href
                            : ""
                    }
                />

                <meta
                    property="og:image"
                    content={
                        paper?.og_image
                            ? paper.og_image
                            : "/default-og.jpg"
                    }
                />

                <script type="application/ld+json">
                    {JSON.stringify({
                        "@context": "https://schema.org",
                        "@type": "Article",
                        "headline": paper?.seo_title || `${subject.subject_code} Question Paper`,
                        "description": paper?.seo_description,
                        "author": {
                            "@type": "Organization",
                            "name": "Unnati Educations"
                        },
                        "publisher": {
                            "@type": "Organization",
                            "name": "Unnati Educations"
                        },
                        "mainEntityOfPage": typeof window !== "undefined"
                            ? window.location.href
                            : ""
                    })}
                </script>

            </Head>

            {/* PROGRESS BAR */}
            <div className="fixed top-0 left-0 w-full h-[4px] z-[9999]">
                <div
                    className="h-full bg-blue-600"
                    style={{ width: `${progress}%` }}
                />
            </div>

            <section className="bg-slate-50 dark:bg-slate-950 transition-colors">
                <div className="max-w-7xl mx-auto px-4 py-8">

            {/* ================= HEADER ================= */}
            <div className="text-center mb-8">
                <h1 className="text-2xl font-bold text-slate-900 dark:text-white">
                    {subject.subject_code} – {subject.subject_name}
                </h1>

                {paper && (
                    <p className="text-sm text-slate-500 dark:text-slate-400 mt-1">
                        ⏱️ Estimated reading time: {readingTime()} min
                    </p>
                )}

                {/* ================= SESSION SELECTOR ================= */}
                <div className="flex justify-center gap-2 mt-4 flex-wrap">
                    {sessions.map((s) => (
                        <button
                            key={s.slug}
                            type="button"
                            onClick={() =>
                                router.get(
                                    window.location.pathname,
                                    { session: s.slug },
                                    {
                                        preserveScroll: true,
                                        preserveState: true,
                                        replace: true,
                                    }
                                )
                            }
                            className={`px-3 py-1 text-xs rounded-full border transition ${
                                paper && s.slug === paper.session_slug
                                    ? "bg-blue-600 text-white border-blue-600"
                                    : "bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-700"
                            }`}
                        >
                            {s.name}
                        </button>
                    ))}
                </div>
            </div>


                    {/* MAIN GRID */}
                    <div className="grid grid-cols-1 md:grid-cols-4 gap-8">

                        {/* SIDEBAR */}
                        {paper?.qa_blocks?.length > 0 && (
                            <aside className="hidden md:block sticky top-28 h-fit">
                                <div className="bg-white dark:bg-slate-900 border dark:border-slate-700 rounded-xl p-4 shadow-sm">
                                    <h3 className="font-semibold text-sm mb-3 text-slate-700 dark:text-slate-200">
                                        📌 Quick Jump
                                    </h3>
                                <ul className="space-y-1 text-sm">
                                    {paper.qa_blocks.map((block, i) => {
                                        const plainQuestion = cleanText(block.question).trim();


                                        const shortQuestion =
                                            plainQuestion.length > 45
                                                ? plainQuestion.slice(0, 45) + "…"
                                                : plainQuestion;

                                        return (
                                            <li key={i} className="relative group">
                                                <a
                                                    href={`#q-${i + 1}`}
                                                    className={`flex items-start gap-2 px-3 py-2 rounded-lg transition
                                                        ${activeQ === i + 1
                                                            ? "bg-blue-600 text-white"
                                                            : "hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300"
                                                        }`}
                                                >
                                                    {/* Question Number */}
                                                    <span className="font-semibold shrink-0">
                                                        Q{i + 1}
                                                    </span>

                                                    {/* Truncated Question */}
                                                    <span className="leading-snug">
                                                        {shortQuestion}
                                                    </span>
                                                </a>

                                                {/* TOOLTIP */}
                                                <div
                                                    className="pointer-events-none absolute left-full top-1/2 -translate-y-1/2 ml-3
                                                            w-72 p-3 rounded-lg text-xs
                                                            bg-slate-900 text-white
                                                            shadow-xl opacity-0 scale-95
                                                            group-hover:opacity-100 group-hover:scale-100
                                                            transition-all duration-200 z-50"
                                                >
                                                    {plainQuestion}
                                                </div>
                                            </li>
                                        );
                                    })}
                                </ul>

                                </div>
                            </aside>
                        )}

                        {/* CONTENT */}
                        <main className="md:col-span-3">
                            {!paper && (
                                <div className="bg-white dark:bg-slate-900 border dark:border-slate-700 rounded-xl p-10 text-center">
                                    <p className="text-slate-500 dark:text-slate-400">
                                        No question paper available for this subject yet.
                                    </p>
                                    <p className="text-sm mt-2">
                                        Please choose another session.
                                    </p>
                                </div>
                            )}

                            {paper?.qa_blocks?.length > 0 && (
                                <div className="bg-white dark:bg-slate-900 border dark:border-slate-700 rounded-2xl shadow-md p-6 md:p-10 space-y-10 text-[16px] leading-[1.85] text-slate-800 dark:text-slate-200">

                                    {paper.qa_blocks.map((block, index) => (
                                        <div
                                            key={index}
                                            id={`q-${index + 1}`}
                                            className={`scroll-mt-32 p-4 rounded-xl
                                                ${activeQ === index + 1
                                                    ? "bg-blue-50 dark:bg-slate-800 ring-1 ring-blue-400"
                                                    : ""
                                                }`}
                                        >
                                            <h2 className="font-semibold text-lg mb-2">
                                                Q{index + 1}.{" "}
                                                <span
                                                    dangerouslySetInnerHTML={{
                                                        __html: block.question,
                                                    }}
                                                />
                                            </h2>

                                            <div className="mt-3 pl-5 border-l-4 border-blue-400 dark:border-blue-600">
                                                <p className="font-semibold mb-1">
                                                    Answer:
                                                </p>
                                                <div
                                                    dangerouslySetInnerHTML={{
                                                        __html: block.answer,
                                                    }}
                                                />
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            )}
                        </main>
                    </div>
                </div>
            </section>

            {/* MOBILE QUICK JUMP */}
            {paper?.qa_blocks?.length > 0 && (
                <div className="md:hidden fixed bottom-4 right-4 z-50">
                    <select
                        value={activeQ}
                        onChange={(e) =>
                            document
                                .getElementById(`q-${e.target.value}`)
                                ?.scrollIntoView({ behavior: "smooth" })
                        }
                        className="bg-blue-600 text-white px-4 py-2 rounded-full shadow-lg"
                    >
                        {paper.qa_blocks.map((_, i) => (
                            <option key={i} value={i + 1}>
                                Q{i + 1}
                            </option>
                        ))}
                    </select>
                </div>
            )}
        </UserLayout>
    );
}
