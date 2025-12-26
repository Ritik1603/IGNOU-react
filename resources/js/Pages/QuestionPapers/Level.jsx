import { Link } from "@inertiajs/react";
import UserLayout from "@/Layouts/UserLayout";
import { useState, useMemo } from "react";

export default function Level({ level, subjects }) {

    const [search, setSearch] = useState("");

    // 🔍 FILTER SUBJECTS BY CODE OR NAME
    const filteredSubjects = useMemo(() => {
        if (!search) return subjects;

        const q = search.toLowerCase();

        return subjects.filter(subject =>
            subject.subject_code.toLowerCase().includes(q) ||
            subject.subject_name.toLowerCase().includes(q)
        );
    }, [search, subjects]);

    return (
        <UserLayout>

            {/* PAGE BACKGROUND */}
            <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-14">

                    {/* HEADER */}
                    <div className="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
                        <h1 className="text-3xl font-bold text-slate-900 dark:text-slate-100">
                            {level.name}
                        </h1>

                        {/* 🔍 SEARCH BAR */}
                        <input
                            type="text"
                            value={search}
                            onChange={(e) => setSearch(e.target.value)}
                            placeholder="Search by subject name or code (e.g. BCOC-131)"
                            className="
                                w-full md:w-96
                                px-4 py-3 rounded-xl text-sm
                                border border-slate-300 dark:border-slate-700
                                bg-white dark:bg-[#0f172a]
                                text-slate-900 dark:text-slate-100
                                placeholder:text-slate-400 dark:placeholder:text-slate-500
                                focus:outline-none
                                focus:ring-2 focus:ring-blue-500
                            "
                        />
                    </div>

                    {/* SUBJECT GRID */}
                    {filteredSubjects.length > 0 ? (
                        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            {filteredSubjects.map(subject => (
                                <Link
                                    key={subject.id}
                                    href={`/question-papers/${level.slug}/${subject.slug}`}
                                    className="
                                        group
                                        bg-white dark:bg-[#0f172a]
                                        border border-slate-200 dark:border-slate-700
                                        rounded-2xl
                                        p-5
                                        shadow-sm
                                        hover:shadow-xl hover:-translate-y-1
                                        transition-all
                                    "
                                >
                                    {/* SUBJECT CODE */}
                                    <div className="text-lg font-bold text-slate-900 dark:text-slate-100">
                                        {subject.subject_code}
                                    </div>

                                    {/* SUBJECT NAME */}
                                    <div className="text-sm text-slate-600 dark:text-slate-400 mt-1 leading-snug">
                                        {subject.subject_name}
                                    </div>

                                    {/* CTA */}
                                    <div
                                        className="
                                            mt-4
                                            text-sm font-medium
                                            text-blue-600 dark:text-blue-400
                                            group-hover:translate-x-1
                                            transition
                                        "
                                    >
                                        View Question Papers →
                                    </div>
                                </Link>
                            ))}
                        </div>
                    ) : (
                        <div className="text-center text-slate-500 dark:text-slate-400 mt-20">
                            No subjects found for "<strong>{search}</strong>"
                        </div>
                    )}

                </div>
            </section>

        </UserLayout>
    );
}
