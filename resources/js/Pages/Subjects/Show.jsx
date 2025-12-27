import UserLayout from '@/Layouts/UserLayout';
import { Link, router } from '@inertiajs/react';
import Seo from '@/Components/Seo';

export default function Show({ level, levelSlug, subject, productsByMaterial }) {
    return (
        <UserLayout>
            <Seo
                title={`${subject.name} (${subject.code}) | IGNOU Study Materials`}
                description={`Download IGNOU ${subject.code} ${subject.name} solved assignments, guess papers, and previous year papers.`}
            />

            <section className="bg-slate-50 dark:bg-slate-950 transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-12">

                    {/* Breadcrumb */}
                    <nav className="text-sm mb-6 text-slate-500 dark:text-slate-400">
                        <Link href="/" className="hover:text-blue-600">Home</Link>
                        <span className="mx-2">/</span>
                        <Link href={`/levels/${levelSlug}`} className="hover:text-blue-600">
                            {level}
                        </Link>
                        <span className="mx-2">/</span>
                        <span className="font-medium">{subject.code}</span>
                    </nav>

                    {/* Header */}
                    <div className="mb-10 text-center">
                        <h1 className="text-3xl font-bold text-slate-900 dark:text-white">
                            {subject.name}
                        </h1>
                        <p className="mt-2 text-slate-600 dark:text-slate-400">
                            Subject Code: <b>{subject.code}</b>
                        </p>
                    </div>

                    {/* Material Cards */}
                    <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        {Object.keys(productsByMaterial).map(type => {
                            const product = productsByMaterial[type][0]; // latest session

                            return (
                                <div
                                    key={type}
                                    onClick={() =>
                                        router.visit(
                                            `/materials/${type}/${levelSlug}/${product.slug}`
                                        )
                                    }
                                    className="
                                        cursor-pointer
                                        bg-white dark:bg-slate-900
                                        border border-slate-200 dark:border-slate-700
                                        rounded-2xl p-6
                                        hover:border-blue-500 hover:shadow-lg
                                        transition
                                    "
                                >
                                    <h3 className="font-semibold text-lg capitalize text-slate-900 dark:text-white">
                                        {type.replaceAll('-', ' ')}
                                    </h3>

                                    <p className="text-sm text-slate-500 mt-2">
                                        Latest session: {product.session}
                                    </p>

                                    <div className="mt-4 text-blue-600 text-sm font-medium">
                                        View material →
                                    </div>
                                </div>
                            );
                        })}
                    </div>

                </div>
            </section>
        </UserLayout>
    );
}
