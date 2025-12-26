import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Create() {

    const { data, setData, post } = useForm({
        code: '',
        type: 'percentage',
        value: '',
        min_cart_value: '',
        expiry_date: ''
    });

    const submit = e => {
        e.preventDefault();
        post('/admin/coupons');
    };

    return (
        <AdminLayout>
            <form onSubmit={submit} className="max-w-md space-y-4">
                <input className="input"
                       placeholder="Coupon Code"
                       onChange={e=>setData('code',e.target.value)} />

                <select className="input"
                        onChange={e=>setData('type',e.target.value)}>
                    <option value="percentage">Percentage</option>
                    <option value="fixed">Fixed</option>
                </select>

                <input className="input"
                       placeholder="Value"
                       onChange={e=>setData('value',e.target.value)} />

                <input className="input"
                       placeholder="Min Cart Value"
                       onChange={e=>setData('min_cart_value',e.target.value)} />

                <input type="date"
                       className="input"
                       onChange={e=>setData('expiry_date',e.target.value)} />

                <button className="bg-blue-600 text-white px-4 py-2 rounded">
                    Save Coupon
                </button>
            </form>
        </AdminLayout>
    );
}
