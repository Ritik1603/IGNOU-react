import AdminLayout from '@/Layouts/AdminLayout';
import { Head, useForm } from '@inertiajs/react';

export default function Edit({ product }) {

    const { data, setData, put, processing, errors } = useForm({
        price: product.price ?? 0,
        session: product.session ?? '',
        status: product.status ?? 0,
    });

    const submit = (e) => {
        e.preventDefault();
        put(`/admin/products/${product.id}`);
    };

    return (
        <AdminLayout>
            <Head title="Edit Product" />

            <div className="max-w-xl bg-white p-6 rounded shadow">
                <h1 className="text-xl font-semibold mb-4">
                    Edit Product
                </h1>

                <form onSubmit={submit} className="space-y-4">

                    <div>
                        <label className="block text-sm font-medium">
                            Subject
                        </label>
                        <p className="text-gray-700">
                            {product.subject_code} – {product.subject_name}
                        </p>
                    </div>

                    <div>
                        <label className="block text-sm font-medium">
                            Material Type
                        </label>
                        <p className="capitalize text-gray-700">
                            {product.material_type.replaceAll('-', ' ')}
                        </p>
                    </div>

                    <div>
                        <label className="block text-sm font-medium">
                            Price (₹)
                        </label>
                        <input
                            type="number"
                            className="w-full border rounded px-3 py-2"
                            value={data.price}
                            onChange={(e) => setData('price', e.target.value)}
                        />
                        {errors.price && (
                            <div className="text-red-500 text-sm">
                                {errors.price}
                            </div>
                        )}
                    </div>

                    <div>
                        <label className="block text-sm font-medium">
                            Session
                        </label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.session}
                            onChange={(e) => setData('session', e.target.value)}
                            placeholder="June 2025"
                        />
                    </div>

                    <div>
                        <label className="block text-sm font-medium">
                            Status
                        </label>
                        <select
                            className="w-full border rounded px-3 py-2"
                            value={data.status}
                            onChange={(e) => setData('status', e.target.value)}
                        >
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>

                    <button
                        disabled={processing}
                        className="bg-blue-600 text-white px-4 py-2 rounded"
                    >
                        Update Product
                    </button>

                </form>
            </div>
        </AdminLayout>
    );
}
