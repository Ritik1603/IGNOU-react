import UserLayout from '@/Layouts/UserLayout';
import { Head, router } from '@inertiajs/react';
import { useState, useMemo } from 'react';

export default function MaterialIndex({ material, productsByLevel }) {
    const [search, setSearch] = useState('');

    const filteredProductsByLevel = useMemo(() => {
        if (!search) return productsByLevel;

        const q = search.toLowerCase();
        const result = {};

        Object.keys(productsByLevel).forEach(level => {
            const filtered = productsByLevel[level].filter(product =>
                product.subject_code.toLowerCase().includes(q) ||
                product.subject_name.toLowerCase().includes(q)
            );

            if (filtered.length > 0) {
                result[level] = filtered;
            }
        });

        return result;
    }, [search, productsByLevel]);

    return (
        <UserLayout>

            {/* SEO */}
            <Head title={`IGNOU ${material.replaceAll('-', ' ')} | Unnati Educations`} />

            {/* PAGE BACKGROUND */}
            <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
                <div className="max-w-7xl mx-auto px-6 py-14">

                    {/* HEADER */}
                    <div className="text-center mb-12">
                        <h1 className="text-3xl font-bold capitalize text-slate-900 dark:text-slate-100">
                            {material.replaceAll('-', ' ')}
                        </h1>

                        <p className="mt-3 text-slate-600 dark:text-slate-400 text-sm max-w-2xl mx-auto">
                            Browse IGNOU study materials organised by programme level and subject.
                        </p>
                    </div>

                    {/* SEARCH */}
                    <div className="flex justify-center mb-16">
                        <input
                            type="text"
                            value={search}
                            onChange={(e) => setSearch(e.target.value)}
                            placeholder="Search by subject name or code (e.g. BCOC-132)"
                            className="
                                w-full
                                md:w-1/2
                                px-5
                                py-3
                                rounded-xl
                                bg-white
                                dark:bg-[#111827]
                                border
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

                    {/* LEVEL SECTIONS */}
                    {Object.keys(filteredProductsByLevel).length > 0 ? (
                        Object.keys(filteredProductsByLevel).map(level => (
                            <div key={level} className="mb-20">

                                {/* LEVEL TITLE */}
                                <h2 className="text-xl font-semibold mb-6 text-slate-800 dark:text-slate-200">
                                    {level}
                                </h2>

                                <div className="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

                                    {filteredProductsByLevel[level].map(product => (
                                        <div
                                            key={product.id}
                                            onClick={() =>
                                                router.visit(
                                                    `/materials/${material}/${level.toLowerCase()}/${product.slug}`
                                                )
                                            }
                                            className="
                                                group
                                                cursor-pointer
                                                rounded-2xl
                                                p-5
                                                bg-white
                                                dark:bg-[#0f172a]
                                                border
                                                border-slate-200
                                                dark:border-slate-700
                                                shadow-sm
                                                hover:shadow-xl
                                                hover:-translate-y-0.5
                                                transition-all
                                            "
                                        >
                                            {/* SUBJECT CODE */}
                                            <div className="text-lg font-bold text-blue-700 dark:text-blue-400">
                                                {product.subject_code}
                                            </div>

                                            {/* SUBJECT NAME */}
                                            <p className="mt-1 text-sm text-slate-700 dark:text-slate-300 leading-snug">
                                                {product.subject_name}
                                            </p>

                                            {/* MATERIAL TYPE */}
                                            <p className="mt-3 text-xs uppercase tracking-wide text-slate-500 dark:text-slate-500">
                                                {product.material_type.replaceAll('-', ' ')}
                                            </p>

                                            {/* CTA */}
                                            <div className="mt-5 text-sm font-medium text-blue-600 dark:text-blue-400 opacity-0 group-hover:opacity-100 transition">
                                                View material →
                                            </div>
                                        </div>
                                    ))}

                                </div>
                            </div>
                        ))
                    ) : (
                        <div className="text-center text-slate-500 dark:text-slate-400 mt-24">
                            No results found for{" "}
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
