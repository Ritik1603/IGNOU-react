import UserLayout from '@/Layouts/UserLayout';
import Seo from '@/Components/Seo';
import { Link } from '@inertiajs/react';
import useReveal from '@/Hooks/useReveal';
import Counter from '@/Components/Counter';
import Testimonials from '@/Components/Testimonials';

function Home({ levels = [], qpLevels = [] }) {

    const heroRef = useReveal();
    const levelRef = useReveal();
    const qpRef = useReveal();
    const trustRef = useReveal();
    const testimonialRef = useReveal();

    return (
        <>
            <Seo
                title="IGNOU Solved Assignments, Guess Papers & PYP | Unnati Educations"
                description="Buy IGNOU solved assignments, guess papers and previous year papers for all UG & PG courses."
            />

            {/* ================= HERO ================= */}
            <section className="relative overflow-hidden bg-gradient-to-br
                                from-slate-900 via-blue-900 to-slate-900
                                text-white">

                {/* Decorative Glow */}
                <div className="absolute inset-0 opacity-25
                                bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.18),transparent_60%)]" />

                <div
                    ref={heroRef}
                    className="relative reveal max-w-7xl mx-auto px-6 py-28
                               grid md:grid-cols-2 gap-14 items-center"
                >
                    {/* LEFT */}
                    <div>
                        <h1 className="text-4xl md:text-5xl font-extrabold leading-tight">
                            Join Thousands Who Trust{' '}
                            <span className="text-blue-400">Unnati</span>
                        </h1>

                        <p className="mt-6 text-slate-200 text-lg">
                            IGNOU admission assistance, solved assignments,
                            guess papers and expert guidance — all in one place.
                        </p>

                        <div className="mt-10 flex flex-wrap gap-4">
                            <Link
                                href="/ignou-admission"
                                className="bg-blue-600 hover:bg-blue-700
                                           px-8 py-3 rounded-xl font-semibold
                                           shadow-xl transition-all hover:-translate-y-0.5"
                            >
                                Start Your Admission
                            </Link>

                            <a
                                href="tel:+919355198199"
                                className="border border-white/60
                                           hover:bg-white/10
                                           px-8 py-3 rounded-xl transition"
                            >
                                Talk to a Mentor
                            </a>
                        </div>
                    </div>

                    {/* RIGHT CARD */}
                    <div className="glass rounded-3xl p-10 shadow-2xl
                                    text-slate-900 dark:text-white">
                        <h2 className="text-3xl font-bold text-center">
                            UNNATI EDUCATIONS
                        </h2>

                        <p className="mt-2 text-center text-sm
                                      text-slate-600 dark:text-slate-400">
                            Your Trusted Academic Partner
                        </p>

                        <div className="mt-8 grid grid-cols-2 gap-4 text-sm">
                            {[
                                'Solved Assignments',
                                'Guess Papers',
                                'Previous Year Papers',
                                'Expert Support'
                            ].map((item, i) => (
                                <div
                                    key={i}
                                    className="rounded-xl px-4 py-3
                                               bg-slate-100 dark:bg-slate-800
                                               text-center font-medium"
                                >
                                    ✔ {item}
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </section>

            {/* ================= TRUST METRICS ================= */}
            <section
                ref={trustRef}
                className="reveal py-20 bg-white dark:bg-slate-950"
            >
                <div className="max-w-6xl mx-auto px-6 grid
                                grid-cols-2 md:grid-cols-4 gap-10 text-center">

                    <div>
                        <div className="text-3xl font-bold text-blue-600">
                            <Counter to={50000} suffix="+" />
                        </div>
                        <p className="mt-1 text-sm text-slate-600 dark:text-slate-400">
                            Students Helped
                        </p>
                    </div>

                    <div>
                        <div className="text-3xl font-bold text-blue-600">
                            <Counter to={1200} suffix="+" />
                        </div>
                        <p className="mt-1 text-sm text-slate-600 dark:text-slate-400">
                            Subjects Covered
                        </p>
                    </div>

                    <div>
                        <div className="text-3xl font-bold text-blue-600">
                            <Counter to={98} suffix="%" />
                        </div>
                        <p className="mt-1 text-sm text-slate-600 dark:text-slate-400">
                            Success Rate
                        </p>
                    </div>

                    <div>
                        <div className="text-3xl font-bold text-blue-600">
                            <Counter to={10} suffix="+" />
                        </div>
                        <p className="mt-1 text-sm text-slate-600 dark:text-slate-400">
                            Years Experience
                        </p>
                    </div>
                </div>
            </section>

            {/* ================= LEVELS (EXISTING FLOW) ================= */}
            <section
                ref={levelRef}
                className="reveal py-24 bg-slate-50 dark:bg-slate-950"
            >
                <div className="max-w-6xl mx-auto px-6">
                    <h2 className="text-3xl font-bold text-center
                                   text-slate-900 dark:text-white mb-14">
                        Choose Your Level
                    </h2>

                    <div className="grid md:grid-cols-2 gap-10 max-w-4xl mx-auto">
                        {levels.map(level => (
                            <Link
                                key={level.id}
                                href={`/levels/${level.slug}`}
                                className="gradient-border rounded-3xl
                                           bg-white dark:bg-slate-900
                                           p-12 text-center
                                           hover:-translate-y-1
                                           transition-all shadow-sm hover:shadow-xl"
                            >
                                <h3 className="text-xl font-semibold
                                               text-slate-900 dark:text-white">
                                    {level.name}
                                </h3>
                            </Link>
                        ))}
                    </div>
                </div>
            </section>

            {/* ================= QUESTION PAPERS ================= */}
            <section
                ref={qpRef}
                className="reveal py-24 bg-gradient-to-b
                           from-slate-100 to-slate-50
                           dark:from-[#0b1220] dark:to-slate-950"
            >
                <div className="max-w-7xl mx-auto px-6">

                    <h2 className="text-3xl font-bold text-center
                                   text-slate-900 dark:text-white mb-4">
                        Explore Question Papers
                    </h2>

                    <p className="text-center text-slate-600
                                  dark:text-slate-400 mb-14">
                        Browse solved IGNOU question papers level-wise
                    </p>

                    <div className="grid sm:grid-cols-2 lg:grid-cols-3
                                    gap-10 max-w-5xl mx-auto">
                        {qpLevels.map(level => (
                            <Link
                                key={level.id}
                                href={`/question-papers/${level.slug}`}
                                className="group gradient-border rounded-3xl
                                           bg-white dark:bg-slate-900
                                           p-10 transition-all
                                           hover:-translate-y-1 hover:shadow-2xl"
                            >
                                <div className="flex items-center justify-between">
                                    <h3 className="text-xl font-semibold
                                                   text-slate-900 dark:text-white">
                                        {level.name}
                                    </h3>
                                    <span className="text-blue-600
                                                     dark:text-blue-400
                                                     group-hover:translate-x-1 transition">
                                        →
                                    </span>
                                </div>

                                <p className="mt-3 text-sm
                                              text-slate-600 dark:text-slate-400">
                                    Solved question papers, session-wise
                                </p>
                            </Link>
                        ))}
                    </div>
                </div>
            </section>

{/* ================= TESTIMONIALS ================= */}
<section className="py-24 bg-white dark:bg-gradient-to-b dark:from-[#070b16] dark:to-[#0b1220] transition-colors">
    <div className="max-w-6xl mx-auto px-6">

        {/* Heading */}
        <h2 className="text-3xl font-bold text-center mb-14 text-slate-900 dark:text-white">
            What Students Say
        </h2>

        {/* Testimonials Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {/* TESTIMONIAL 1 */}
            <div className="relative bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                <div className="absolute -top-5 left-6 text-6xl text-blue-500/20 select-none">
                    “
                </div>

                <p className="text-slate-700 dark:text-slate-200 leading-relaxed">
                    Assignments saved my semester!  
                    The answers were clear, well-structured, and exactly what IGNOU expects.
                </p>

                <div className="mt-6">
                    <span className="font-semibold text-blue-600 dark:text-blue-400">
                        Priya
                    </span>
                    <span className="block text-sm text-slate-500 dark:text-slate-400">
                        BA Student, IGNOU
                    </span>
                </div>
            </div>

            {/* TESTIMONIAL 2 */}
            <div className="relative bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                <div className="absolute -top-5 left-6 text-6xl text-blue-500/20 select-none">
                    “
                </div>

                <p className="text-slate-700 dark:text-slate-200 leading-relaxed">
                    Guess papers were extremely helpful.  
                    Most questions came from the same topics. Highly recommended!
                </p>

                <div className="mt-6">
                    <span className="font-semibold text-blue-600 dark:text-blue-400">
                        Rahul
                    </span>
                    <span className="block text-sm text-slate-500 dark:text-slate-400">
                        BCOM Student, IGNOU
                    </span>
                </div>
            </div>

            {/* TESTIMONIAL 3 */}
            <div className="relative bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                <div className="absolute -top-5 left-6 text-6xl text-blue-500/20 select-none">
                    “
                </div>

                <p className="text-slate-700 dark:text-slate-200 leading-relaxed">
                    Support team guided me properly for submission.  
                    Very trustworthy platform for IGNOU students.
                </p>

                <div className="mt-6">
                    <span className="font-semibold text-blue-600 dark:text-blue-400">
                        Neha
                    </span>
                    <span className="block text-sm text-slate-500 dark:text-slate-400">
                        MA Student, IGNOU
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>


        </>
    );
}

/* ✅ Layout attached ONCE */
Home.layout = page => <UserLayout>{page}</UserLayout>;

export default Home;
