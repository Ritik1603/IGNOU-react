import { useForm } from "@inertiajs/react";
import AdminLayout from '@/Layouts/AdminLayout';


export default function Import() {
    const { data, setData, post, processing, errors } = useForm({
        file: null,
    });

    const submit = (e) => {
        e.preventDefault();
        post("/admin/question-papers/import");
    };

    return (

        <AdminLayout>
        <div className="max-w-xl">
            <h1 className="text-xl font-bold mb-4">
                Import Subjects (Excel)
            </h1>

            <form onSubmit={submit} className="space-y-4">
                <input
                    type="file"
                    accept=".xlsx,.csv"
                    onChange={(e) => setData("file", e.target.files[0])}
                    className="block w-full border p-2"
                />

                {errors.file && (
                    <p className="text-red-500 text-sm">{errors.file}</p>
                )}

                <button
                    type="submit"
                    disabled={processing}
                    className="bg-blue-600 text-white px-4 py-2 rounded"
                >
                    {processing ? "Importing..." : "Import Excel"}
                </button>
            </form>

            <div className="mt-6 text-sm text-gray-600">
                <p className="font-semibold mb-1">Excel format:</p>
                <pre className="bg-gray-100 p-3 rounded">
level | subject_code | subject_name | subject_slug | seo_title | seo_description
                </pre>
            </div>
        </div>

        </AdminLayout>
    );
}
