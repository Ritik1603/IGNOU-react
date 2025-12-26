import AdminLayout from '@/Layouts/AdminLayout';
import { Link } from '@inertiajs/react';

export default function Index({ subjects }) {
    return (
        <AdminLayout>
            <div className="flex justify-between mb-6">
                <h1 className="text-xl font-bold">Subjects</h1>
                <Link href="/admin/subjects/create"
                      className="bg-blue-600 text-white px-4 py-2 rounded">
                    Add Subject
                </Link>
            </div>

            <table className="bg-white w-full shadow rounded">
                <thead>
                    <tr className="bg-gray-100">
                        <th className="p-3">Code</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {subjects.map(s => (
                        <tr key={s.id} className="border-t">
                            <td className="p-3">{s.code}</td>
                            <td>{s.name}</td>
                            <td>{s.level.name}</td>
                            <td className="text-right p-3">
                                <Link
                                    href={`/admin/subjects/${s.id}`}
                                    className="text-blue-600">
                                    View
                                </Link>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </AdminLayout>
    );
}
