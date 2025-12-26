import UserLayout from '@/Layouts/UserLayout';
import { router, useForm } from '@inertiajs/react';

export default function CartIndex({
    cartItems = [],
    subtotal = 0,
    discount = 0,
    total = 0,
    coupon = null
}) {
    const couponForm = useForm({ code: '' });
    const checkoutForm = useForm({ name: '', phone: '' });

    const applyCoupon = (e) => {
        e.preventDefault();
        couponForm.post('/cart/apply-coupon', { preserveScroll: true });
    };

    const removeCoupon = () => {
        router.post('/cart/remove-coupon', {}, { preserveScroll: true });
    };

    const updateQty = (id, qty) => {
        if (qty < 1) return;
        router.post('/cart/update', { id, quantity: qty }, { preserveScroll: true });
    };

    const removeItem = (id) => {
        router.post('/cart/remove', { id }, { preserveScroll: true });
    };

    const placeWhatsAppOrder = (e) => {
        e.preventDefault();
        checkoutForm.post('/checkout/whatsapp', { preserveScroll: true });
    };

    return (
        <UserLayout>
            <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-16">

                    {/* PAGE TITLE */}
                    <h1 className="text-3xl font-bold text-slate-900 dark:text-white mb-10">
                        Your Cart
                    </h1>

                    {/* EMPTY CART */}
                    {cartItems.length === 0 && (
                        <div className="text-center text-slate-500 dark:text-slate-400">
                            Your cart is empty.
                        </div>
                    )}

                    {/* CART HEADER (DESKTOP) */}
                    {cartItems.length > 0 && (
                        <div className="hidden md:grid grid-cols-[3fr_2fr_1fr_1fr] gap-6 px-6 mb-4 text-sm font-semibold text-slate-600 dark:text-slate-400">
                            <div>Product</div>
                            <div>Quantity</div>
                            <div className="text-right">Price</div>
                            <div className="text-right">Action</div>
                        </div>
                    )}

                    {/* CART ITEMS */}
                    <div className="space-y-4">
                        {cartItems.map(item => (
                            <div
                                key={item.id}
                                className="
                                    grid grid-cols-1 md:grid-cols-[3fr_2fr_1fr_1fr]
                                    gap-6
                                    items-center
                                    bg-white dark:bg-[#0f172a]
                                    border border-slate-200 dark:border-slate-700
                                    rounded-2xl
                                    px-6 py-5
                                    shadow-sm
                                "
                            >
                                {/* PRODUCT */}
                                <div>
                                    <h3 className="font-semibold text-slate-900 dark:text-white">
                                        {item.product.subject_code}
                                    </h3>
                                    <p className="text-sm text-slate-600 dark:text-slate-400 capitalize">
                                        {item.product.material_type}
                                    </p>
                                </div>

                                {/* QUANTITY */}
                                <div className="flex items-center gap-3">
                                    <button
                                        onClick={() => updateQty(item.id, item.quantity - 1)}
                                        className="w-8 h-8 rounded-lg border border-slate-300 dark:border-slate-600
                                                   bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-700"
                                    >
                                        −
                                    </button>

                                    <span className="w-8 text-center font-semibold text-slate-900 dark:text-white">
                                        {item.quantity}
                                    </span>

                                    <button
                                        onClick={() => updateQty(item.id, item.quantity + 1)}
                                        className="w-8 h-8 rounded-lg border border-slate-300 dark:border-slate-600
                                                   bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-700"
                                    >
                                        +
                                    </button>
                                </div>

                                {/* PRICE */}
                                <div className="text-right font-semibold text-slate-900 dark:text-white">
                                    ₹{item.price * item.quantity}
                                </div>

                                {/* REMOVE */}
                                <div className="text-right">
                                    <button
                                        onClick={() => removeItem(item.id)}
                                        className="text-sm text-red-500 hover:underline"
                                    >
                                        Remove
                                    </button>
                                </div>
                            </div>
                        ))}
                    </div>

                    {/* COUPON */}
                    <div className="mt-12">
                        <form onSubmit={applyCoupon} className="flex flex-wrap gap-3">
                            <input
                                type="text"
                                value={couponForm.data.code}
                                onChange={e => couponForm.setData('code', e.target.value)}
                                placeholder="Coupon code"
                                className="px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-700
                                           bg-white dark:bg-[#0f172a] text-slate-900 dark:text-white
                                           focus:ring-2 focus:ring-blue-500"
                            />
                            <button
                                disabled={couponForm.processing}
                                className="bg-slate-800 dark:bg-slate-700 text-white px-6 rounded-xl"
                            >
                                Apply
                            </button>
                        </form>

                        {coupon && (
                            <div className="mt-4 text-green-600 dark:text-green-400">
                                Coupon <strong>{coupon.code}</strong> applied
                                <button
                                    onClick={removeCoupon}
                                    className="ml-3 text-red-500 text-sm hover:underline"
                                >
                                    Remove
                                </button>
                            </div>
                        )}
                    </div>

                    {/* TOTAL */}
                    <div className="mt-14 flex justify-end">
                        <div className="w-full max-w-sm bg-white dark:bg-[#0f172a]
                                        border border-slate-200 dark:border-slate-700
                                        rounded-2xl p-6">
                            <div className="flex justify-between text-slate-700 dark:text-slate-300">
                                <span>Subtotal</span>
                                <span>₹{subtotal}</span>
                            </div>

                            {discount > 0 && (
                                <div className="flex justify-between text-green-600 dark:text-green-400 mt-2">
                                    <span>Discount</span>
                                    <span>−₹{discount}</span>
                                </div>
                            )}

                            <div className="flex justify-between text-xl font-bold text-slate-900 dark:text-white mt-4">
                                <span>Total</span>
                                <span>₹{total}</span>
                            </div>
                        </div>
                    </div>

                    {/* WHATSAPP CHECKOUT */}
                    <form
                        onSubmit={placeWhatsAppOrder}
                        className="mt-16 bg-white dark:bg-[#0f172a]
                                   border border-slate-200 dark:border-slate-700
                                   rounded-2xl p-8 max-w-3xl"
                    >
                        <h2 className="text-xl font-semibold text-slate-900 dark:text-white mb-6">
                            Order via WhatsApp
                        </h2>

                        <div className="grid md:grid-cols-2 gap-4 mb-6">
                            <input
                                type="text"
                                placeholder="Your Name"
                                value={checkoutForm.data.name}
                                onChange={e => checkoutForm.setData('name', e.target.value)}
                                required
                                className="px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-700
                                           bg-white dark:bg-[#0f172a] text-slate-900 dark:text-white
                                           focus:ring-2 focus:ring-green-500"
                            />

                            <input
                                type="text"
                                placeholder="WhatsApp Number"
                                value={checkoutForm.data.phone}
                                onChange={e => checkoutForm.setData('phone', e.target.value)}
                                required
                                className="px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-700
                                           bg-white dark:bg-[#0f172a] text-slate-900 dark:text-white
                                           focus:ring-2 focus:ring-green-500"
                            />
                        </div>

                        <button
                            type="submit"
                            disabled={checkoutForm.processing}
                            className="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-semibold transition"
                        >
                            {checkoutForm.processing ? 'Processing...' : 'Order via WhatsApp'}
                        </button>
                    </form>

                </div>
            </section>
        </UserLayout>
    );
}
