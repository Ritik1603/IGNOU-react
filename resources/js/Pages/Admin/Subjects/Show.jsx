import AdminLayout from '@/Layouts/AdminLayout';

export default function Show({ subject }) {
    return (
        <AdminLayout>
            <h1 className="text-2xl font-bold mb-2">
                {subject.code}
            </h1>
            <p className="text-gray-600 mb-4">
                {subject.level.name}
            </p>
            <p>{subject.description}</p>
        </AdminLayout>
    );
}
