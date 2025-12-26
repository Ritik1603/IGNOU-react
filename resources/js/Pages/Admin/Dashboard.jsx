import AdminLayout from '@/Layouts/AdminLayout';

export default function Dashboard({ stats }) {
    return (
        <AdminLayout>
            <h1 className="text-2xl font-bold mb-6">Dashboard</h1>

            <div className="grid md:grid-cols-3 gap-6">
                <div className="bg-white p-6 rounded shadow">
                    <p className="text-gray-500">Total Orders</p>
                    <h2 className="text-2xl font-bold">{stats.orders}</h2>
                </div>

                <div className="bg-white p-6 rounded shadow">
                    <p className="text-gray-500">Revenue</p>
                    <h2 className="text-2xl font-bold">₹{stats.revenue}</h2>
                </div>

                <div className="bg-white p-6 rounded shadow">
                    <p className="text-gray-500">Products</p>
                    <h2 className="text-2xl font-bold">{stats.products}</h2>
                </div>
            </div>
        </AdminLayout>
    );
}
