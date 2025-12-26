import AdminLayout from '@/Layouts/AdminLayout';
import { Link } from '@inertiajs/react';

export default function Index({ coupons }) {
    return (
        <AdminLayout>
            <div className="flex justify-between mb-6">
                <h1 className="text-xl font-bold">Coupons</h1>
                <Link href="/admin/coupons/create"
                      className="bg-blue-600 text-white px-4 py-2 rounded">
                    Add Coupon
                </Link>
            </div>

            <table className="w-full bg-white rounded shadow">
                <thead className="bg-gray-100">
                    <tr>
                        <th className="p-3">Code</th>
                        <th>Type</th>
                        <th>Value</th>
                        <th>Expiry</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {coupons.map(c => (
                        <tr key={c.id} className="border-t">
                            <td className="p-3">{c.code}</td>
                            <td>{c.type}</td>
                            <td>{c.value}</td>
                            <td>{c.expiry_date ?? '—'}</td>
                            <td className="text-right p-3">
                                <Link
                                    method="delete"
                                    href={`/admin/coupons/${c.id}`}
                                    className="text-red-600 text-sm"
                                >
                                    Delete
                                </Link>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </AdminLayout>
    );
}
