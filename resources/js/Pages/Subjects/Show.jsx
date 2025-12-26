import UserLayout from '@/Layouts/UserLayout';
import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';

export default function Show({ level, levelSlug, subject, materials }) {
    return (
        <UserLayout>

            {/* SEO */}
            <Seo
                title={`${subject.name} (${subject.code}) | IGNOU Study Materials`}
                description={`Download IGNOU ${subject.code} ${subject.name} solved assignments, guess papers, previous year papers and notes.`}
            />

            <section className="bg-slate-50 dark:bg-slate-950 transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-12">

                    {/* BREADCRUMB */}
                    <nav className="text-sm mb-6 text-slate-500 dark:text-slate-400">
                        <Link href="/" className="hover:text-blue-600">
                            Home
                        </Link>
                        <span className="mx-2">/</span>

                        <Link
                            href={`/levels/${levelSlug}`}
                            className="hover:text-blue-600"
                        >
                            {level}
                        </Link>

                        <span className="mx-2">/</span>

                        <span className="text-slate-700 dark:text-slate-300 font-medium">
                            {subject.code}
                        </span>
                    </nav>

                    {/* HEADER */}
                    <div className="mb-10 text-center">
                        <h1 className="text-3xl font-bold text-slate-900 dark:text-white">
                            {subject.name}
                        </h1>

                        <p className="mt-2 text-slate-600 dark:text-slate-400">
                            Subject Code:{" "}
                            <span className="font-semibold text-slate-800 dark:text-slate-200">
                                {subject.code}
                            </span>
                        </p>
                    </div>

                    {/* MATERIAL TYPES GRID */}
                    <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        {materials.map(type => {
                            const productSlug = `${subject.code.toLowerCase()}-${type}`;

                            return (
                                <Link
                                    key={type}
                                    href={`/materials/${type}/${levelSlug}/${productSlug}`}
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
                                    {/* TITLE */}
                                    <h3 className="font-semibold text-lg capitalize text-slate-900 dark:text-white group-hover:text-blue-600">
                                        {type.replaceAll('-', ' ')}
                                    </h3>

                                    {/* DESCRIPTION */}
                                    <p className="text-sm text-slate-500 dark:text-slate-400 mt-2 leading-relaxed">
                                        View available{" "}
                                        {type.replaceAll('-', ' ')} for this subject.
                                    </p>

                                    {/* CTA */}
                                    <div className="mt-4">
                                        <span className="inline-flex items-center text-blue-600 dark:text-blue-400 text-sm font-medium">
                                            Explore
                                            <svg
                                                className="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                                                fill="none"
                                                stroke="currentColor"
                                                strokeWidth="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    d="M9 5l7 7-7 7"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                </Link>
                            );
                        })}
                    </div>

                </div>
            </section>

        </UserLayout>
    );
}
