import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";
import { Link } from "@inertiajs/react";

const Section = ({ title, children }) => (
    <section className="mt-20">
        <div className="flex items-center justify-between mb-6 flex-wrap gap-4">
            <h2 className="text-xl font-bold text-slate-900 dark:text-white">
                {title}
            </h2>

            <input
                type="text"
                placeholder="Search by subject"
                className="
                    px-4 py-2 rounded-lg text-sm
                    border border-slate-300 dark:border-slate-700
                    bg-white dark:bg-slate-900
                    text-slate-900 dark:text-slate-200
                    focus:ring-2 focus:ring-blue-500
                "
            />
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {children}
        </div>
    </section>
);

const Card = ({ title, subtitle = null, link }) => (
    <Link
        href={link}
        className="
            group relative
            bg-white dark:bg-slate-900
            border border-slate-200 dark:border-slate-700
            rounded-2xl p-6
            shadow-sm
            hover:shadow-xl hover:-translate-y-1
            transition-all
        "
    >
        <h3 className="font-semibold text-slate-900 dark:text-white leading-snug">
            {title}
        </h3>

        {subtitle && (
            <p className="text-xs text-slate-500 dark:text-slate-400 mt-1">
                {subtitle}
            </p>
        )}

        <span className="
            absolute bottom-4 right-4
            w-7 h-7 flex items-center justify-center
            rounded-full
            bg-blue-600 text-white
            group-hover:translate-x-1
            transition
        ">
            →
        </span>
    </Link>
);

const ViewMore = ({ link }) => (
    <Link
        href={link}
        className="
            flex items-center justify-center
            border-2 border-dashed border-blue-500
            text-blue-600 dark:text-blue-400
            rounded-2xl p-6
            font-semibold
            hover:bg-blue-50 dark:hover:bg-slate-800
            transition
        "
    >
        + View More
    </Link>
);

export default function IgnouAdmission() {
    return (
        <UserLayout>
            <Seo
                title="IGNOU Admission Guide | UG, PG, Diploma Programmes"
                description="Complete list of IGNOU UG, PG, Diploma & Certificate programmes with expert guidance."
            />

            {/* ================= HERO ================= */}
            <section className="
                bg-gradient-to-r from-blue-900 to-slate-900
                text-white
                py-20
            ">
                <div className="max-w-7xl mx-auto px-6 text-center">
                    <h1 className="text-4xl font-extrabold">
                        IGNOU Programmes & Admissions
                    </h1>

                    <p className="mt-4 text-blue-100 max-w-2xl mx-auto">
                        Explore IGNOU Undergraduate, Postgraduate, Diploma and
                        Certificate programmes with expert academic guidance.
                    </p>

                    <div className="mt-6 text-sm text-blue-200">
                        Home / IGNOU Admission
                    </div>
                </div>
            </section>

            {/* ================= CONTENT ================= */}
            <div className="bg-slate-50 dark:bg-[#0b1220] py-16">
                <div className="max-w-7xl mx-auto px-6">

                    {/* FYUP / UG */}
                    <Section title="Under Graduate Programmes (FYUP)">
                        <Card title="Bachelor of Arts Programmes" link="/ignou/bachelor-of-arts-programmes" />
                        <Card title="Bachelor of Science Programmes" link="/ignou/bachelor-of-science-programmes" />
                        <Card title="Bachelor of Commerce Programme" link="/ignou/ignou-bcom-admission-2025" />
                        <Card
                            title="Bachelor of Tourism & Travel Management"
                            subtitle="(BFTTM)"
                            link="#"
                        />
                        <ViewMore link="/ignou/four-year-under-graduate-programm" />
                    </Section>

                    {/* PG */}
                    <Section title="Master Degree Programmes">
                        <Card title="Management & Business Programmes" link="/ignou/management-business-programs" />
                        <Card title="Arts & Humanities Programmes" link="/ignou/ignou-arts-humanities-programmes" />
                        <Card title="Social Work & Counselling" link="/ignou/master-programmes-social-work-counselling" />
                        <Card title="Science Programmes" link="/ignou/master-of-science-programmes-science" />
                        <Card title="Computer Applications" link="/ignou/ignou-computer-applications-it" />
                        <Card title="Library & Information Science" link="/ignou/ignou-master-of-library-and-information-science-admission-2025" />
                        <Card title="Tourism & Travel Management" link="/ignou/ignou-master-of-tourism-and-travel-management-admission-2025" />
                        <ViewMore link="#" />
                    </Section>

                    {/* PG DIPLOMA */}
                    <Section title="Post Graduate Diploma Programmes">
                        <Card title="Education & Teaching Programmes" link="/ignou/post-graduate-education-teaching-related-programs" />
                        <Card title="Social Work & Development" link="/ignou/pg-social-work-development-programmes" />
                        <Card title="Health & Psychology" link="/ignou/pg-health-psychology-programmes" />
                        <Card title="Management & Business" link="/ignou/pg-management-business-programmes" />
                        <Card title="Journalism & Communication" link="/ignou/pg-journalism-communication-programmes" />
                        <Card title="Computer & IT" link="/ignou/pg-computer-it-programmes" />
                        <Card title="Environment & Disaster Management" link="/ignou/pg-environment-disaster-management-programmes" />
                        <Card title="Languages & Literature" link="/ignou/pg-languages-literature-programmes" />
                        <ViewMore link="#" />
                    </Section>

                    {/* DIPLOMA */}
                    <Section title="Diploma Programmes">
                        <Card title="Healthcare & Nursing" link="/ignou/diploma-programmes-healthcare-nursing" />
                        <Card title="Agriculture & Food Processing" link="/ignou/diploma-programmes-agriculture-food-processing" />
                        <Card title="Business & Finance" link="/ignou/diploma-programmes-business-finance-management" />
                        <Card title="Retail & Merchandising" link="/ignou/diploma-programmes-retail-merchandising" />
                        <Card title="Creative Arts & Languages" link="/ignou/diploma-programmes-creative-arts-languages" />
                        <Card title="Engineering & Technology" link="/ignou/diploma-programmes-engineering-technology" />
                        <ViewMore link="#" />
                    </Section>

                    {/* CERTIFICATE */}
                    <Section title="Certificate Programmes">
                        <Card title="Health & Nutrition" link="/ignou/certificate-programmes-health-nutrition-child-care" />
                        <Card title="Disability & Special Education" link="/ignou/certificate-programmes-disability-special-education" />
                        <Card title="Agriculture & Environment" link="/ignou/certificate-programmes-agriculture-environment-animal-husbandry" />
                        <Card title="Languages & Translation" link="/ignou/certificate-programmes-languages-translation" />
                        <Card title="Teaching & Education" link="/ignou/certificate-programmes-teaching-education" />
                        <Card title="Technology & IT Security" link="/ignou/certificate-programmes-technology-it-security" />
                        <ViewMore link="#" />
                    </Section>

                </div>
            </div>
        </UserLayout>
    );
}
