import { Link, usePage } from "@inertiajs/react";
import { useEffect, useState } from "react";

export default function UserLayout({ children }) {
    const { qpLevels = [] } = usePage().props;

    /* ===============================
       DARK MODE (NO FLASH)
    =============================== */
    const [dark, setDark] = useState(() => {
        if (typeof window === "undefined") return false;
        return localStorage.getItem("theme") === "dark";
    });

    useEffect(() => {
        const root = document.documentElement;
        if (dark) {
            root.classList.add("dark");
            localStorage.setItem("theme", "dark");
        } else {
            root.classList.remove("dark");
            localStorage.setItem("theme", "light");
        }
    }, [dark]);

    return (
        <div className="min-h-screen flex flex-col bg-slate-50 dark:bg-slate-950 transition-colors duration-300">

            {/* ================= HEADER ================= */}
            <header className="
                sticky top-0 z-50
                bg-white/90 dark:bg-slate-900/90
                backdrop-blur
                border-b border-slate-200 dark:border-slate-800
            ">
                <div className="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

                    {/* LOGO */}
                    <Link
                        href="/"
                        className="text-xl font-extrabold tracking-wide
                                   text-blue-700 dark:text-blue-400"
                    >
                        UNNATI EDUCATIONS
                    </Link>

                    {/* NAVIGATION */}
                    <nav className="
                        hidden md:flex items-center gap-6
                        text-sm font-medium
                        text-slate-700 dark:text-slate-200
                    ">
                        <Link className="hover:text-blue-600 dark:hover:text-blue-400" href="/">
                            Home
                        </Link>

                        <Link href="/ignou/ignou-admission" className="hover:text-blue-600 dark:hover:text-blue-400">
                            IGNOU Admission
                        </Link>

                        {/* QUESTION PAPERS DROPDOWN */}
                        <div className="relative group">
                            <Link
                                href="/question-papers"
                                className="flex items-center gap-1
                                           hover:text-blue-600 dark:hover:text-blue-400"
                            >
                                Question Papers
                                <svg
                                    className="w-3 h-3 mt-[1px]"
                                    fill="none"
                                    stroke="currentColor"
                                    strokeWidth="2"
                                    viewBox="0 0 24 24"
                                >
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </Link>

                            <div className="
                                absolute left-0 mt-2 w-44
                                bg-white dark:bg-slate-900
                                border border-slate-200 dark:border-slate-700
                                rounded-xl shadow-xl
                                opacity-0 invisible
                                group-hover:opacity-100 group-hover:visible
                                transition-all duration-200
                            ">
                                {qpLevels.map(level => (
                                    <Link
                                        key={level.id}
                                        href={`/question-papers/${level.slug}`}
                                        className="
                                            block px-4 py-2 text-sm
                                            text-slate-700 dark:text-slate-200
                                            hover:bg-slate-100 dark:hover:bg-slate-800
                                            hover:text-blue-600 dark:hover:text-blue-400
                                        "
                                    >
                                        {level.name}
                                    </Link>
                                ))}
                            </div>
                        </div>

                        <Link href="/materials/solved-assignments" className="hover:text-blue-600 dark:hover:text-blue-400">
                            Solved Assignments
                        </Link>

                        <Link href="/materials/guess-papers" className="hover:text-blue-600 dark:hover:text-blue-400">
                            Guess Papers
                        </Link>

                        <Link href="/materials/previous-year-papers" className="hover:text-blue-600 dark:hover:text-blue-400">
                            PYP
                        </Link>
                    </nav>

                    {/* RIGHT ACTIONS */}
                    <div className="flex items-center gap-3 text-sm">

                        {/* DARK MODE TOGGLE */}
                        <button
                            onClick={() => setDark(v => !v)}
                            className="
                                px-3 py-1.5 rounded-full
                                border border-slate-300 dark:border-slate-600
                                text-slate-700 dark:text-slate-200
                                hover:bg-slate-100 dark:hover:bg-slate-800
                                transition
                            "
                            aria-label="Toggle dark mode"
                        >
                            {dark ? "☀️ Light" : "🌙 Night"}
                        </button>

                        <Link
                            href="/login"
                            className="
                                px-3 py-1.5 rounded-full
                                text-slate-700 dark:text-slate-200
                                hover:bg-slate-100 dark:hover:bg-slate-800
                                hover:text-blue-600 dark:hover:text-blue-400
                                transition
                            "
                        >
                            Login
                        </Link>



                        <Link
                            href="/register"
                            className="
                                bg-blue-600 hover:bg-blue-700
                                text-white px-4 py-2 rounded-lg
                                transition
                            "
                        >
                            Signup
                        </Link>
                    </div>
                </div>
            </header>

            {/* ================= CONTENT ================= */}
            <main className="flex-1">
                {children}
            </main>

            {/* ================= FOOTER ================= */}
            <footer className="bg-blue-900 dark:bg-slate-900 text-white mt-16">
                <div className="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10 text-sm">

                    <div>
                        <h4 className="font-semibold mb-2">Unnati Educations</h4>
                        <p className="text-blue-100 dark:text-slate-300">
                            Trusted IGNOU education partner for solved assignments,
                            guess papers & academic guidance.
                        </p>
                    </div>

                    <div>
                        <h4 className="font-semibold mb-2">Quick Links</h4>
                        <ul className="space-y-1 text-blue-100 dark:text-slate-300">
                            <li>Admissions</li>
                            <li>Solved Assignments</li>
                            <li>Guess Papers</li>
                            <li>PYP</li>
                        </ul>
                    </div>

                    <div>
                        <h4 className="font-semibold mb-2">Contact</h4>
                        <p className="text-blue-100 dark:text-slate-300">
                            Email: info@unnatieducations.com
                        </p>
                        <p className="text-blue-100 dark:text-slate-300">
                            Phone: +91 93159 81939
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    );
}
