import { useForm } from "@inertiajs/react";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import AdminLayout from "@/Layouts/AdminLayout";

export default function Papers({ subjects, sessions }) {
    const { data, setData, post, processing, errors } = useForm({
        qp_subject_id: "",
        qp_session_id: "",
        qa_blocks: [{ question: "", answer: "" }],

        // ✅ SEO FIELDS
        seo_title: "",
        seo_description: "",
        seo_keywords: "",
        canonical_url: "",
        og_image: "",
    });

    const addBlock = () => {
        setData("qa_blocks", [
            ...data.qa_blocks,
            { question: "", answer: "" },
        ]);
    };

    const updateBlock = (index, field, value) => {
        const updated = [...data.qa_blocks];
        updated[index][field] = value;
        setData("qa_blocks", updated);
    };

    const submit = (e) => {
        e.preventDefault();
        post("/admin/question-papers/papers");
    };

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-6">Add Question Paper</h1>

            <form onSubmit={submit} className="space-y-8">

                {/* ================= BASIC INFO ================= */}
                <div className="bg-white p-6 rounded shadow space-y-4">
                    <h2 className="font-semibold text-lg">Basic Details</h2>

                    {/* SUBJECT */}
                    <select
                        className="border p-2 w-full"
                        value={data.qp_subject_id}
                        onChange={(e) =>
                            setData("qp_subject_id", e.target.value)
                        }
                    >
                        <option value="">Select Subject</option>
                        {subjects.map((s) => (
                            <option key={s.id} value={s.id}>
                                {s.subject_code} – {s.subject_name}
                            </option>
                        ))}
                    </select>
                    {errors.qp_subject_id && (
                        <p className="text-red-500 text-sm">
                            {errors.qp_subject_id}
                        </p>
                    )}

                    {/* SESSION */}
                    <select
                        className="border p-2 w-full"
                        value={data.qp_session_id}
                        onChange={(e) =>
                            setData("qp_session_id", e.target.value)
                        }
                    >
                        <option value="">Select Session</option>
                        {sessions.map((s) => (
                            <option key={s.id} value={s.id}>
                                {s.name}
                            </option>
                        ))}
                    </select>
                    {errors.qp_session_id && (
                        <p className="text-red-500 text-sm">
                            {errors.qp_session_id}
                        </p>
                    )}
                </div>

                {/* ================= QUESTIONS ================= */}
                <div className="bg-white p-6 rounded shadow space-y-6">
                    <h2 className="font-semibold text-lg">Questions & Answers</h2>

                    {data.qa_blocks.map((block, index) => (
                        <div key={index} className="border rounded p-4">
                            <h3 className="font-semibold mb-2">
                                Question {index + 1}
                            </h3>

                            <CKEditor
                                editor={ClassicEditor}
                                data={block.question}
                                onChange={(e, editor) =>
                                    updateBlock(
                                        index,
                                        "question",
                                        editor.getData()
                                    )
                                }
                            />

                            <h4 className="font-semibold mt-4 mb-2">Answer</h4>

                            <CKEditor
                                editor={ClassicEditor}
                                data={block.answer}
                                onChange={(e, editor) =>
                                    updateBlock(
                                        index,
                                        "answer",
                                        editor.getData()
                                    )
                                }
                            />
                        </div>
                    ))}

                    <button
                        type="button"
                        onClick={addBlock}
                        className="bg-gray-200 px-4 py-2 rounded"
                    >
                        + Add Another Question
                    </button>
                </div>

                {/* ================= SEO SECTION ================= */}
                <div className="bg-white p-6 rounded shadow space-y-4">
                    <h2 className="font-semibold text-lg">
                        SEO & Meta Information
                    </h2>

                    <input
                        type="text"
                        className="border p-2 w-full"
                        placeholder="SEO Title"
                        value={data.seo_title}
                        onChange={(e) =>
                            setData("seo_title", e.target.value)
                        }
                    />

                    <textarea
                        className="border p-2 w-full"
                        placeholder="Meta Description"
                        rows="3"
                        value={data.seo_description}
                        onChange={(e) =>
                            setData("seo_description", e.target.value)
                        }
                    />

                    <input
                        type="text"
                        className="border p-2 w-full"
                        placeholder="SEO Keywords (comma separated)"
                        value={data.seo_keywords}
                        onChange={(e) =>
                            setData("seo_keywords", e.target.value)
                        }
                    />

                    <input
                        type="text"
                        className="border p-2 w-full"
                        placeholder="Canonical URL"
                        value={data.canonical_url}
                        onChange={(e) =>
                            setData("canonical_url", e.target.value)
                        }
                    />

                    <input
                        type="text"
                        className="border p-2 w-full"
                        placeholder="OG Image URL"
                        value={data.og_image}
                        onChange={(e) =>
                            setData("og_image", e.target.value)
                        }
                    />
                </div>

                {/* ================= SUBMIT ================= */}
                <button
                    type="submit"
                    disabled={processing}
                    className="bg-blue-600 text-white px-6 py-2 rounded"
                >
                    {processing ? "Saving..." : "Save Question Paper"}
                </button>
            </form>
        </AdminLayout>
    );
}
