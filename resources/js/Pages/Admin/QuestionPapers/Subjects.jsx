import { useForm } from "@inertiajs/react";
import AdminLayout from '@/Layouts/AdminLayout';


export default function Subjects({ subjects, levels }) {
    const { data, setData, post } = useForm({
        qp_level_id: "",
        subject_code: "",
        subject_name: "",
    });

    return (
        <AdminLayout>
            <h1 className="text-xl font-bold mb-4">Subjects</h1>

            <form onSubmit={e => { e.preventDefault(); post("/admin/question-papers/subjects"); }}
                  className="grid grid-cols-4 gap-2">

                <select className="border p-2"
                    onChange={e => setData("qp_level_id", e.target.value)}>
                    <option>Select Level</option>
                    {levels.map(l => (
                        <option key={l.id} value={l.id}>{l.name}</option>
                    ))}
                </select>

                <input className="border p-2"
                    placeholder="MEG-1"
                    onChange={e => setData("subject_code", e.target.value)} />

                <input className="border p-2"
                    placeholder="British Poetry"
                    onChange={e => setData("subject_name", e.target.value)} />

                <button className="bg-blue-600 text-white">Add</button>
            </form>

            <table className="mt-6 w-full border">
                <thead>
                    <tr>
                        <th>Level</th><th>Code</th><th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    {subjects.map(s => (
                        <tr key={s.id}>
                            <td>{s.level.name}</td>
                            <td>{s.subject_code}</td>
                            <td>{s.subject_name}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </AdminLayout>
    );
}
