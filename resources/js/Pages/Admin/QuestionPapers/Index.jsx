import AdminLayout from "@/Layouts/AdminLayout";
import { Link } from "@inertiajs/react";

export default function Index({ papers }) {
    return (
        <AdminLayout>
            <div className="flex justify-between items-center mb-6">
                <h1 className="text-xl font-bold">Question Papers</h1>

                <Link
                    href="/admin/question-papers/papers"
                    className="bg-blue-600 text-white px-4 py-2 rounded"
                >
                    + Add Question Paper
                </Link>
            </div>

            <div className="bg-white rounded shadow overflow-x-auto">
                <table className="w-full text-sm">
                    <thead className="bg-gray-100">
                        <tr>
                            <th className="p-3 text-left">Subject</th>
                            <th className="p-3 text-left">Session</th>
                            <th className="p-3 text-left">Questions</th>
                            <th className="p-3 text-left">Status</th>
                            <th className="p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {papers.map(paper => (
                            <tr key={paper.id} className="border-t">
                                <td className="p-3">
                                    {paper.subject?.subject_code} – {paper.subject?.subject_name}
                                </td>

                                <td className="p-3">
                                    {paper.session?.name}
                                </td>

                                <td className="p-3">
                                    {paper.qa_blocks?.length || 0}
                                </td>

                                <td className="p-3">
                                    {paper.status ? (
                                        <span className="text-green-600">Active</span>
                                    ) : (
                                        <span className="text-red-600">Inactive</span>
                                    )}
                                </td>

                                <td className="p-3">
                                    <Link
                                        href={`/admin/question-papers/papers/${paper.id}/edit`}
                                        className="text-blue-600 hover:underline"
                                    >
                                        Edit
                                    </Link>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>

                {papers.length === 0 && (
                    <div className="p-6 text-center text-gray-500">
                        No question papers found.
                    </div>
                )}
            </div>
        </AdminLayout>
    );
}
