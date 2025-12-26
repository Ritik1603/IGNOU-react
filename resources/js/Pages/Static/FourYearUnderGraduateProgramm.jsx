import UserLayout from "@/Layouts/UserLayout";
import Seo from "@/Components/Seo";
import { useState, useMemo } from "react";

const courses = [
    { name: "Bachelor of Arts (History)", code: "BAFHI" },
    { name: "Bachelor of Arts (Economics)", code: "BAFEC" },
    { name: "Bachelor of Arts (Philosophy)", code: "BAFPY" },
    { name: "Bachelor of Arts (Political Science)", code: "BAFPS" },
    { name: "Bachelor of Arts (Psychology)", code: "BAFPC" },
    { name: "Bachelor of Arts (Public Administration)", code: "BAFPA" },
    { name: "Bachelor of Arts (Sociology)", code: "BAFSO" },
    { name: "Bachelor of Arts (Journalism & Digital Media)", code: "BAFJDM" },
    { name: "Bachelor of Commerce", code: "BCOMF" },
    { name: "Bachelor of Science (Anthropology)", code: "BSCFAN" },
    { name: "Bachelor of Science (Biochemistry)", code: "BSCFBC" },
    { name: "Bachelor of Science (Mathematics)", code: "BSCFMT" },
    { name: "Bachelor of Social Work", code: "BFSW" },
    { name: "Bachelor of Arts (MSME)", code: "BAMSME" },
    { name: "Bachelor of Science (Food Safety & Quality)", code: "BSCFFSQM" },
    { name: "Bachelor of Performing Arts (Hindustani)", code: "BPAFH" },
    { name: "Bachelor of Arts (Facility Services)", code: "BAFSM" },
    { name: "Bachelor of Arts (Vocational – Tourism)", code: "BAFVT" },
    { name: "Bachelor of Tourism & Travel Management", code: "BFTTM" },
    { name: "Bachelor of Arts (Education)", code: "BAFEDU" },
    { name: "Bachelor of Arts (Home Science)", code: "BAFHSC" },
];

export default function FourYearUnderGraduate() {
    const [search, setSearch] = useState("");

    const filteredCourses = useMemo(() => {
        if (!search) return courses;
        const q = search.toLowerCase();
        return courses.filter(
            c =>
                c.name.toLowerCase().includes(q) ||
                c.code.toLowerCase().includes(q)
        );
    }, [search]);

    return (
        <UserLayout>
            <Seo
                title="Undergraduate Programmes (FYUP) – IGNOU"
                description="Complete list of IGNOU Four Year Undergraduate Programmes (FYUP)"
            />

            <section className="bg-slate-100 dark:bg-[#0b1220] min-h-screen transition-colors">
                <div className="max-w-7xl mx-auto px-6 py-20">

                    {/* TITLE */}
                    <h1 className="text-center text-4xl font-extrabold mb-12
                                   bg-gradient-to-r from-blue-500 via-indigo-500 to-pink-500
                                   bg-clip-text text-transparent">
                        Undergraduate Programmes (FYUP)
                    </h1>

                    {/* SEARCH */}
                    <div className="max-w-2xl mx-auto mb-14 relative">
                        <input
                            type="text"
                            value={search}
                            onChange={e => setSearch(e.target.value)}
                            placeholder="Search by programme name or code"
                            className="
                                w-full px-6 py-4 rounded-full
                                bg-white dark:bg-[#0f172a]
                                border border-slate-300 dark:border-slate-700
                                text-slate-900 dark:text-white
                                placeholder:text-slate-400
                                focus:ring-2 focus:ring-blue-500
                                outline-none
                            "
                        />
                        <span className="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
                            🔍
                        </span>
                    </div>

                    {/* GRID */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 perspective-[1200px]">

                        {filteredCourses.map((course, index) => (
                            <div
                                key={course.code}
                                className="
                                    group relative
                                    bg-white dark:bg-[#0f172a]
                                    border border-slate-200 dark:border-slate-700
                                    rounded-2xl p-6 h-[140px]
                                    shadow-lg
                                    transition-all duration-500
                                    hover:-translate-y-4 hover:rotate-x-6 hover:rotate-y-3
                                "
                                style={{ animationDelay: `${index * 80}ms` }}
                            >
                                {/* Glow Layers */}
                                <div className="absolute inset-0 rounded-2xl opacity-0
                                                bg-gradient-to-br from-blue-500/20 via-purple-500/10 to-pink-500/20
                                                group-hover:opacity-100 transition" />

                                {/* CONTENT */}
                                <div className="relative z-10">
                                    <h3 className="font-bold text-lg text-slate-900 dark:text-white mb-2">
                                        {course.name}
                                    </h3>

                                    <p className="text-sm font-semibold tracking-widest text-blue-600 dark:text-blue-400">
                                        {course.code}
                                    </p>
                                </div>

                                {/* ARROW */}
                                <div className="
                                    absolute bottom-4 right-4
                                    w-12 h-12 rounded-full
                                    bg-gradient-to-br from-blue-500 to-indigo-600
                                    text-white text-xl font-bold
                                    flex items-center justify-center
                                    shadow-lg
                                    transition-all
                                    group-hover:scale-110 group-hover:rotate-12
                                ">
                                    →
                                </div>
                            </div>
                        ))}
                    </div>

                    {/* EMPTY STATE */}
                    {filteredCourses.length === 0 && (
                        <p className="text-center mt-20 text-slate-500 dark:text-slate-400">
                            No programmes found for “{search}”
                        </p>
                    )}
                </div>
            </section>
        </UserLayout>
    );
}
