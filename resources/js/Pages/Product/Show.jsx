import UserLayout from '@/Layouts/UserLayout';
import { Head, router } from '@inertiajs/react';
import { useState } from 'react';
import Seo from '@/Components/Seo';
import ProductSchema from '@/Components/ProductSchema';

export default function Show({ product }) {

    const [qty, setQty] = useState(1);

    const addToCart = () => {
        router.post('/cart/add', {
            product_id: product.id,
            quantity: qty,
        }, {
            preserveScroll: true,
        });
    };

    const buyNow = () => {
        router.post('/cart/add', {
            product_id: product.id,
            quantity: qty,
            buy_now: true,
        });
    };

    return (
        <UserLayout>

            {/* SEO */}
            <Seo
                title={`${product.subject_code} ${product.material_type.replaceAll('-', ' ')} | IGNOU ${product.level}`}
                description={`Download IGNOU ${product.subject_code} ${product.material_type.replaceAll('-', ' ')} for ${product.session}.`}
                canonical={typeof window !== 'undefined' ? window.location.href : ''}
            />

            <ProductSchema product={product} />

            <Head title={`${product.subject_code} ${product.material_type}`} />

            {/* PAGE BACKGROUND */}
            <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
                <div className="max-w-6xl mx-auto px-6 py-14 grid md:grid-cols-2 gap-12">

                    {/* LEFT: CONTENT */}
                    <div>

                        {/* SUBJECT CODE */}
                        <h1 className="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-1">
                            {product.subject_code}
                        </h1>

                        {/* SUBJECT NAME */}
                        <p className="text-slate-600 dark:text-slate-400 mb-4">
                            {product.subject_name}
                        </p>

                        {/* MATERIAL TYPE BADGE */}
                        <span className="
                            inline-block
                            bg-blue-100
                            dark:bg-blue-900/30
                            text-blue-700
                            dark:text-blue-300
                            text-sm
                            px-3
                            py-1
                            rounded-full
                            mb-6
                        ">
                            {product.material_type.replaceAll('-', ' ')}
                        </span>

                        {/* DESCRIPTION */}
                        <div className="
                            prose
                            prose-slate
                            dark:prose-invert
                            max-w-none
                            text-slate-700
                            dark:text-slate-300
                            leading-relaxed
                        ">
                            <div dangerouslySetInnerHTML={{ __html: product.description_html }} />
                        </div>
                    </div>

                    {/* RIGHT: PURCHASE CARD */}
                    <div
                        className="
                            bg-white
                            dark:bg-[#0f172a]
                            border
                            border-slate-200
                            dark:border-slate-700
                            rounded-2xl
                            p-6
                            shadow-lg
                            h-fit
                        "
                    >
                        {/* PRICE */}
                        <div className="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-6">
                            ₹{product.discount_price ?? product.price}
                        </div>

                        {/* QUANTITY */}
                        <div className="flex items-center gap-4 mb-8">
                            <button
                                onClick={() => setQty(q => Math.max(1, q - 1))}
                                className="
                                    px-3
                                    py-1
                                    rounded-lg
                                    border
                                    border-slate-300
                                    dark:border-slate-600
                                    bg-slate-50
                                    dark:bg-slate-800
                                    text-slate-800
                                    dark:text-slate-200
                                    hover:bg-slate-100
                                    dark:hover:bg-slate-700
                                "
                            >
                                −
                            </button>

                            <span className="text-lg font-semibold text-slate-900 dark:text-slate-100">
                                {qty}
                            </span>

                            <button
                                onClick={() => setQty(q => q + 1)}
                                className="
                                    px-3
                                    py-1
                                    rounded-lg
                                    border
                                    border-slate-300
                                    dark:border-slate-600
                                    bg-slate-50
                                    dark:bg-slate-800
                                    text-slate-800
                                    dark:text-slate-200
                                    hover:bg-slate-100
                                    dark:hover:bg-slate-700
                                "
                            >
                                +
                            </button>
                        </div>

                        {/* ACTION BUTTONS */}
                        <button
                            onClick={addToCart}
                            className="
                                w-full
                                bg-blue-600
                                hover:bg-blue-700
                                text-white
                                py-3
                                rounded-xl
                                font-semibold
                                mb-4
                                transition
                            "
                        >
                            Add to Cart
                        </button>

                        <button
                            onClick={buyNow}
                            className="
                                w-full
                                border
                                border-blue-600
                                text-blue-600
                                dark:text-blue-400
                                py-3
                                rounded-xl
                                font-semibold
                                hover:bg-blue-50
                                dark:hover:bg-blue-900/20
                                transition
                            "
                        >
                            Buy Now
                        </button>

                        {/* TRUST NOTE */}
                        <p className="text-xs text-slate-500 dark:text-slate-400 mt-6 text-center">
                            Secure payment • Instant access after purchase
                        </p>
                    </div>
                </div>
            </section>

        </UserLayout>
    );
}
