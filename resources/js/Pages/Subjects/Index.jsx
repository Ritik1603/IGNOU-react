import UserLayout from '@/Layouts/UserLayout';
import { Link, Head } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import { useState, useMemo } from 'react';

export default function Index({ level, levelSlug, subjects }) {
    const [search, setSearch] = useState('');

    // 🔍 Filter by subject name OR code
    const filteredSubjects = useMemo(() => {
        if (!search) return subjects;

        const q = search.toLowerCase();

        return subjects.filter(subject =>
            subject.name.toLowerCase().includes(q) ||
            subject.code.toLowerCase().includes(q)
        );
    }, [search, subjects]);

    return (
        <UserLayout>

            {/* SEO */}
            <Seo
                title={`IGNOU ${level} Subjects | Unnati Educations`}
                description={`Browse IGNOU ${level} subjects with solved assignments, guess papers, and previous year question papers.`}
            />

            <section className="bg-slate-50 dark:bg-slate-950 transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-12">

                    {/* PAGE HEADER */}
                    <div className="mb-10 text-center">
                        <h1 className="text-3xl font-bold text-slate-900 dark:text-white">
                            {level} Subjects
                        </h1>

                        <p className="mt-2 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                            Select a subject to explore solved assignments, guess papers,
                            and previous year question papers.
                        </p>
                    </div>

                    {/* SEARCH BAR */}
                    <div className="mb-10 flex justify-center">
                        <input
                            type="text"
                            value={search}
                            onChange={(e) => setSearch(e.target.value)}
                            placeholder="Search by subject name or code (e.g. BCOC-132)"
                            className="
                                w-full
                                md:w-2/3
                                lg:w-1/2
                                px-5
                                py-3
                                rounded-xl
                                border
                                bg-white
                                dark:bg-slate-900
                                border-slate-300
                                dark:border-slate-700
                                text-slate-900
                                dark:text-slate-100
                                placeholder-slate-400
                                dark:placeholder-slate-500
                                focus:outline-none
                                focus:ring-2
                                focus:ring-blue-500
                                transition
                            "
                        />
                    </div>

                    {/* SUBJECT GRID */}
                    {filteredSubjects.length > 0 ? (
                        <div className="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                            {filteredSubjects.map(subject => (
                                <Link
                                    key={subject.id}
                                    href={`/levels/${levelSlug}/${subject.code}`}
                                    className="
                                        group
                                        bg-white
                                        dark:bg-slate-900
                                        border
                                        border-slate-200
                                        dark:border-slate-700
                                        rounded-2xl
                                        p-6
                                        shadow-sm
                                        hover:shadow-lg
                                        hover:border-blue-500
                                        dark:hover:border-blue-500
                                        transition-all
                                    "
                                >
                                    <h3 className="font-semibold text-lg text-slate-900 dark:text-white group-hover:text-blue-600">
                                        {subject.name}
                                    </h3>

                                    <p className="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                        {subject.code}
                                    </p>

                                    <div className="mt-4">
                                        <span className="inline-flex items-center text-blue-600 dark:text-blue-400 text-sm font-medium">
                                            View Question Papers
                                            <svg
                                                className="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                                                fill="none"
                                                stroke="currentColor"
                                                strokeWidth="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </span>
                                    </div>
                                </Link>
                            ))}
                        </div>
                    ) : (
                        <div className="text-center text-slate-500 dark:text-slate-400 mt-16">
                            No subjects found for{" "}
                            <span className="font-semibold text-slate-700 dark:text-slate-300">
                                "{search}"
                            </span>
                        </div>
                    )}

                </div>
            </section>

        </UserLayout>
    );
}
