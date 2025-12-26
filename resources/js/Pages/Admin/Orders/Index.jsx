import AdminLayout from '@/Layouts/AdminLayout';

export default function Index({ orders }) {
    return (
        <AdminLayout>
            <div className="p-6">
                <h1 className="text-2xl font-bold mb-6">Orders</h1>

                <table className="w-full border">
                    <thead className="bg-gray-100">
                        <tr>
                            <th className="p-3 border">#</th>
                            <th className="p-3 border">Name</th>
                            <th className="p-3 border">Phone</th>
                            <th className="p-3 border">Total</th>
                            <th className="p-3 border">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {orders.map((order, i) => (
                            <tr key={order.id}>
                                <td className="p-3 border">{i + 1}</td>
                                <td className="p-3 border">{order.name}</td>
                                <td className="p-3 border">{order.phone}</td>
                                <td className="p-3 border">₹{order.total}</td>
                                <td className="p-3 border">
                                    {new Date(order.created_at).toLocaleDateString()}
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </AdminLayout>
    );
}
