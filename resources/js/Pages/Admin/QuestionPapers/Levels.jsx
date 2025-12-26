import { useForm } from "@inertiajs/react";
import AdminLayout from '@/Layouts/AdminLayout';


export default function Levels({ levels }) {
    const { data, setData, post } = useForm({ name: "" });

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-4">Programme Levels</h1>

            <form onSubmit={e => { e.preventDefault(); post("/admin/question-papers/levels"); }}>
                <input
                    className="border p-2 mr-2"
                    placeholder="UG / PG / FYUP"
                    value={data.name}
                    onChange={e => setData("name", e.target.value)}
                />
                <button className="bg-blue-600 text-white px-4 py-2">Add</button>
            </form>

            <ul className="mt-6 space-y-2">
                {levels.map(l => (
                    <li key={l.id}>{l.name}</li>
                ))}
            </ul>
        </AdminLayout>
    );
}
