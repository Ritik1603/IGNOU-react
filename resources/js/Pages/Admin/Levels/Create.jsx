import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Create() {
    const { data, setData, post } = useForm({ name: '' });

    return (
        <AdminLayout>
            <form onSubmit={e => { e.preventDefault(); post('/admin/levels'); }}
                  className="max-w-md space-y-4">

                <input
                    className="border px-3 py-2 w-full"
                    placeholder="UG or PG"
                    onChange={e => setData('name', e.target.value)}
                />

                <button className="bg-blue-600 text-white px-4 py-2 rounded">
                    Save
                </button>
            </form>
        </AdminLayout>
    );
}
