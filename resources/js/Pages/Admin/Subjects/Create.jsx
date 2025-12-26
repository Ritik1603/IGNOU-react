import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Create({ levels }) {
    const { data, setData, post } = useForm({
        level_id: '',
        code: '',
        name: '',
        description: ''
    });

    return (
        <AdminLayout>
            <form onSubmit={e => { e.preventDefault(); post('/admin/subjects'); }}
                  className="max-w-xl space-y-4">

                <select
                    className="border px-3 py-2 w-full"
                    onChange={e => setData('level_id', e.target.value)}>
                    <option value="">Select Level</option>
                    {levels.map(l => (
                        <option key={l.id} value={l.id}>{l.name}</option>
                    ))}
                </select>

                <input
                    className="border px-3 py-2 w-full"
                    placeholder="Subject Code (BCOC-136)"
                    onChange={e => setData('code', e.target.value)}
                />

                <input
                    className="border px-3 py-2 w-full"
                    placeholder="Subject Name"
                    onChange={e => setData('name', e.target.value)}
                />

                <textarea
                    className="border px-3 py-2 w-full"
                    placeholder="Description"
                    onChange={e => setData('description', e.target.value)}
                />

                <button className="bg-blue-600 text-white px-4 py-2 rounded">
                    Save Subject
                </button>
            </form>
        </AdminLayout>
    );
}
