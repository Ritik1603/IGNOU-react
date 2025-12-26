import { useForm } from "@inertiajs/react";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import AdminLayout from "@/Layouts/AdminLayout";

export default function Edit({ paper, subjects, sessions }) {
    const { data, setData, put, processing } = useForm({
        qp_subject_id: paper.qp_subject_id,
        qp_session_id: paper.qp_session_id,
        qa_blocks: paper.qa_blocks || [],

        seo_title: paper.seo_title || "",
        seo_description: paper.seo_description || "",
        seo_keywords: paper.seo_keywords || "",
        canonical_url: paper.canonical_url || "",
        og_image: paper.og_image || "",
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
        put(`/admin/question-papers/papers/${paper.id}`);
    };

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-6">Edit Question Paper</h1>

            <form onSubmit={submit} className="space-y-8">

                {/* SUBJECT */}
                <select
                    className="border p-2 w-full"
                    value={data.qp_subject_id}
                    onChange={(e) =>
                        setData("qp_subject_id", e.target.value)
                    }
                >
                    {subjects.map((s) => (
                        <option key={s.id} value={s.id}>
                            {s.subject_code} – {s.subject_name}
                        </option>
                    ))}
                </select>

                {/* SESSION */}
                <select
                    className="border p-2 w-full"
                    value={data.qp_session_id}
                    onChange={(e) =>
                        setData("qp_session_id", e.target.value)
                    }
                >
                    {sessions.map((s) => (
                        <option key={s.id} value={s.id}>
                            {s.name}
                        </option>
                    ))}
                </select>

                {/* QUESTIONS */}
                {data.qa_blocks.map((block, index) => (
                    <div key={index} className="border rounded p-4 bg-white">
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

                {/* SEO */}
                <div className="bg-white p-4 rounded border space-y-3">
                    <h3 className="font-semibold">SEO</h3>

                    <input
                        className="border p-2 w-full"
                        placeholder="SEO Title"
                        value={data.seo_title}
                        onChange={(e) =>
                            setData("seo_title", e.target.value)
                        }
                    />

                    <textarea
                        className="border p-2 w-full"
                        rows="3"
                        placeholder="Meta Description"
                        value={data.seo_description}
                        onChange={(e) =>
                            setData("seo_description", e.target.value)
                        }
                    />

                    <input
                        className="border p-2 w-full"
                        placeholder="SEO Keywords"
                        value={data.seo_keywords}
                        onChange={(e) =>
                            setData("seo_keywords", e.target.value)
                        }
                    />

                    <input
                        className="border p-2 w-full"
                        placeholder="Canonical URL"
                        value={data.canonical_url}
                        onChange={(e) =>
                            setData("canonical_url", e.target.value)
                        }
                    />

                    <input
                        className="border p-2 w-full"
                        placeholder="OG Image URL"
                        value={data.og_image}
                        onChange={(e) =>
                            setData("og_image", e.target.value)
                        }
                    />
                </div>

                <button
                    type="submit"
                    disabled={processing}
                    className="bg-blue-600 text-white px-6 py-2 rounded"
                >
                    Update Question Paper
                </button>
            </form>
        </AdminLayout>
    );
}
