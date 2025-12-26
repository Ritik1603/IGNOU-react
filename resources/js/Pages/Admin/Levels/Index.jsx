import AdminLayout from '@/Layouts/AdminLayout';
import { Link } from '@inertiajs/react';

export default function Index({ levels }) {
    return (
        <AdminLayout>
            <div className="flex justify-between mb-6">
                <h1 className="text-xl font-bold">UG / PG</h1>
                <Link href="/admin/levels/create"
                      className="bg-blue-600 text-white px-4 py-2 rounded">
                    Add Level
                </Link>
            </div>

            <ul className="bg-white rounded shadow divide-y">
                {levels.map(l => (
                    <li key={l.id} className="p-4">
                        {l.name}
                    </li>
                ))}
            </ul>
        </AdminLayout>
    );
}
