import { Link } from "@inertiajs/react";
import UserLayout from "@/Layouts/UserLayout";

export default function Index({ levels }) {
    return (
        <UserLayout>

            {/* PAGE BACKGROUND */}
            <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
                <div className="max-w-5xl mx-auto px-6 py-14">

                    {/* HEADING */}
                    <h1 className="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-10">
                        Question Papers
                    </h1>

                    {/* LEVEL CARDS */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        {levels.map(level => (
                            <Link
                                key={level.id}
                                href={`/question-papers/${level.slug}`}
                                className="
                                    group
                                    bg-white
                                    dark:bg-[#0f172a]
                                    border
                                    border-slate-200
                                    dark:border-slate-700
                                    rounded-2xl
                                    p-6
                                    shadow-sm
                                    hover:shadow-lg
                                    transition
                                "
                            >
                                <div className="flex items-center justify-between">
                                    <h2 className="text-xl font-semibold text-slate-900 dark:text-slate-100">
                                        {level.name}
                                    </h2>

                                    <span
                                        className="
                                            text-blue-600
                                            dark:text-blue-400
                                            text-sm
                                            font-medium
                                            group-hover:translate-x-1
                                            transition
                                        "
                                    >
                                        View →
                                    </span>
                                </div>

                                <p className="text-sm text-slate-600 dark:text-slate-400 mt-2">
                                    Browse solved and unsolved IGNOU question papers
                                </p>
                            </Link>
                        ))}
                    </div>

                </div>
            </section>

        </UserLayout>
    );
}
