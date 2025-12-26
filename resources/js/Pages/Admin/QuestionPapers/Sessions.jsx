import { useForm } from "@inertiajs/react";
import AdminLayout from '@/Layouts/AdminLayout';


export default function Sessions({ sessions }) {
    const { data, setData, post } = useForm({ month: "", year: "" });

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-4">Sessions</h1>

            <form onSubmit={e => { e.preventDefault(); post("/admin/question-papers/sessions"); }}>
                <input className="border p-2 mr-2" placeholder="June"
                    onChange={e => setData("month", e.target.value)} />
                <input className="border p-2 mr-2" placeholder="2025"
                    onChange={e => setData("year", e.target.value)} />
                <button className="bg-blue-600 text-white px-4 py-2">Add</button>
            </form>

            <ul className="mt-4">
                {sessions.map(s => <li key={s.id}>{s.name}</li>)}
            </ul>
        </AdminLayout>
    );
}
