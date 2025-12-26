import { useState } from "react";
import { Link } from "@inertiajs/react";
import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";

export default function BachelorOfArtsProgrammes() {

    const programmes = [
        { title: "Bachelor of Arts (History)", code: "BAFHI", link: "/ignou/ignou-ba-in-history-admission-2025" },
        { title: "Bachelor of Arts (Economics)", code: "BAFEC", link: "/ignou/ignou-ba-economics-admission-2025" },
        { title: "Bachelor of Arts (Philosophy)", code: "BAFPY", link: "#" },
        { title: "Bachelor of Arts (Political Science)", code: "BAFPS", link: "/ignou/ignou-ba-in-political-science-admission-2025" },
        { title: "Bachelor of Arts (Psychology)", code: "BAFPC", link: "/ignou/ignou-ba-in-psychology-admission-2025" },
        { title: "Bachelor of Arts (Public Administration)", code: "BAFPA", link: "/ignou/ignou-ba-in-public-administration-admission-2025" },
        { title: "Bachelor of Arts (Sociology)", code: "BAFSO", link: "#" },
        { title: "Bachelor of Arts (Journalism & Digital Media)", code: "BAFJDM", link: "/ignou/ignou-ba-in-journalism-and-digital-media-admission-2025" },
        { title: "Bachelor of Arts (MSME)", code: "BAMSME", link: "/ignou/ignou-ba-in-micro-small-and-medium-enterprises-admission-2025" },
        { title: "Bachelor of Arts (Facility & Services Management)", code: "BAFSM", link: "/ignou/ba-fsm" },
        { title: "Bachelor of Arts (Education)", code: "BAFEDU", link: "/ignou/ba-education" },
    ];

    const [query, setQuery] = useState("");

    const filtered = programmes.filter(p =>
        p.title.toLowerCase().includes(query.toLowerCase()) ||
        p.code.toLowerCase().includes(query.toLowerCase())
    );

    return (
        <UserLayout>
            <Seo
                title="Bachelor of Arts Programmes | IGNOU BA Courses"
                description="Explore IGNOU Bachelor of Arts programmes with specialisations, codes, and admission guidance."
            />

            <section className="relative min-h-screen bg-slate-50 dark:bg-[#0b1220] transition-colors">

                {/* Soft background glow */}
                <div className="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(99,102,241,0.15),transparent_60%)]" />

                <div className="relative max-w-7xl mx-auto px-6 py-24">

                    {/* Header */}
                    <div className="text-center mb-16">
                        <h1 className="text-4xl md:text-5xl font-extrabold
                                       bg-gradient-to-r from-blue-600 via-purple-500 to-pink-500
                                       text-slate-600 dark:text-slate-400 bg-clip-text">
                            Bachelor of Arts Programmes
                        </h1>

                        <p className="mt-4 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                            Choose your IGNOU BA specialisation. View programme details,
                            eligibility, and admission guidance.
                        </p>
                    </div>

                    {/* Search */}
                    <div className="relative max-w-xl mx-auto mb-20">
                        <span className="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
                            🔍
                        </span>

                        <input
                            value={query}
                            onChange={(e) => setQuery(e.target.value)}
                            type="text"
                            placeholder="Search by programme name or code"
                            className="
                                w-full pl-12 pr-6 py-4 rounded-full
                                bg-white dark:bg-slate-900
                                border border-slate-300 dark:border-slate-700
                                text-slate-900 dark:text-white
                                focus:ring-2 focus:ring-blue-500
                                outline-none
                                shadow-md
                                transition
                            "
                        />
                    </div>

                    {/* Cards */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                        {filtered.map((p, i) => (
                            <Link
                                key={i}
                                href={p.link}
                                className="
                                    group relative
                                    rounded-2xl
                                    p-6
                                    bg-white dark:bg-slate-900
                                    border border-slate-200 dark:border-slate-700
                                    shadow-sm
                                    transition-all duration-300
                                    hover:-translate-y-2 hover:shadow-xl
                                    hover:border-blue-500/50
                                "
                            >
                                {/* Gradient hover ring */}
                                <div className="
                                    pointer-events-none
                                    absolute inset-0 rounded-2xl
                                    opacity-0 group-hover:opacity-100
                                    bg-[radial-gradient(circle_at_top,rgba(59,130,246,0.18),transparent_60%)]
                                    transition
                                " />

                                {/* Content */}
                                <h3 className="text-slate-900 dark:text-white font-semibold text-base leading-snug">
                                    {p.title}
                                </h3>

                                <div className="mt-1 text-xs tracking-widest font-bold text-blue-600 dark:text-blue-400">
                                    {p.code}
                                </div>

                                {/* CTA */}
                                <div className="mt-5">
                                    <span className="
                                        inline-flex items-center gap-2
                                        text-sm font-medium
                                        text-blue-600 dark:text-blue-400
                                        group-hover:text-blue-500
                                        transition
                                    ">
                                        View Programme
                                        <span className="transform transition group-hover:translate-x-1">
                                            →
                                        </span>
                                    </span>
                                </div>
                            </Link>
                        ))}

                        {filtered.length === 0 && (
                            <div className="col-span-full text-center text-slate-500 dark:text-slate-400">
                                No programmes match your search.
                            </div>
                        )}
                    </div>
                </div>
            </section>
        </UserLayout>
    );
}
