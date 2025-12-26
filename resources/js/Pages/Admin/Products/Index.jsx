import AdminLayout from '@/Layouts/AdminLayout';
import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <AdminLayout>
            <div className="flex justify-between mb-6">
                <h1 className="text-xl font-bold">Products</h1>
                <Link
                    href="/admin/products/create"
                    className="bg-blue-600 text-white px-4 py-2 rounded"
                >
                    Add Product
                </Link>
            </div>

            <table className="w-full bg-white shadow rounded">
                <thead className="bg-gray-100">
                    <tr>
                        <th className="p-3 text-left">Subject</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {products.map(p => (
                        <tr key={p.id} className="border-t">
                            <td className="p-3">
                                {p.subject_code}
                            </td>
                            <td>{p.material_type}</td>
                            <td>₹{p.price}</td>
                            <td>{p.status ? 'Active' : 'Inactive'}</td>
                            <td className="text-right p-3">
                                <Link
                                    href={`/admin/products/${p.id}/edit`}
                                    className="text-blue-600"
                                >
                                    Edit
                                </Link>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </AdminLayout>
    );
}
