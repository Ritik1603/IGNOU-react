import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Create() {

    const { data, setData, post } = useForm({
        title: '',
        subject_code: '',
        subject_name: '',
        level: 'UG',
        program: '',
        material_type: 'solved-assignments',
        session: '',
        price: '',
        discount_price: '',
        description_html: '',
        cover_image: null
    });

    const submit = e => {
        e.preventDefault();
        post('/admin/products');
    };

    return (
        <AdminLayout>
            <form onSubmit={submit} className="space-y-4 max-w-xl">
                <input className="input" placeholder="Title"
                       onChange={e=>setData('title',e.target.value)} />

                <input className="input" placeholder="Subject Code"
                       onChange={e=>setData('subject_code',e.target.value)} />

                <input className="input" placeholder="Subject Name"
                       onChange={e=>setData('subject_name',e.target.value)} />

                <input className="input" placeholder="Program"
                       onChange={e=>setData('program',e.target.value)} />

                <input className="input" placeholder="Session"
                       onChange={e=>setData('session',e.target.value)} />

                <input className="input" placeholder="Price"
                       onChange={e=>setData('price',e.target.value)} />

                <input type="file"
                       onChange={e=>setData('cover_image',e.target.files[0])} />

                <textarea className="input"
                          placeholder="Description (HTML)"
                          onChange={e=>setData('description_html',e.target.value)} />

                <button className="bg-blue-600 text-white px-4 py-2 rounded">
                    Save
                </button>
            </form>
        </AdminLayout>
    );
}
