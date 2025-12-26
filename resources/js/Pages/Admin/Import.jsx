import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Import() {

    const { data, setData, post, processing } = useForm({
        file: null
    });

    const submit = e => {
        e.preventDefault();
        post('/admin/import');
    };

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-4">Bulk Import Products</h1>

            <form onSubmit={submit} className="space-y-4">
                <input type="file"
                       onChange={e => setData('file', e.target.files[0])} />

                <button
                    disabled={processing}
                    className="bg-blue-600 text-white px-4 py-2 rounded">
                    Import
                </button>
            </form>
        </AdminLayout>
    );
}
