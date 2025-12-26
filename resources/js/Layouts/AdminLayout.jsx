import { Link, useForm } from '@inertiajs/react';

export default function AdminLayout({ children }) {

    const { post } = useForm();

    const logout = () => {
        post('/logout');
    };

    return (
        <div className="min-h-screen flex">
            <aside className="w-64 bg-gray-900 text-white p-6 flex flex-col justify-between">

                <div>
                    <h2 className="text-lg font-bold mb-6">Admin Panel</h2>

                    <nav className="space-y-3 text-sm">

                        {/* DASHBOARD */}
                        <Link href="/admin/dashboard" className="block hover:text-blue-400">
                            Dashboard
                        </Link>

                        {/* ===== QUESTION PAPERS MODULE ===== */}
                        <div className="mt-6">
                            <p className="text-xs uppercase text-gray-400 mb-2">
                                Question Papers
                            </p>

                            <Link
                                href="/admin/question-papers/levels"
                                className="block hover:text-blue-400"
                            >
                                Levels (UG / PG / FYUP)
                            </Link>

                            <Link
                                href="/admin/question-papers/subjects"
                                className="block hover:text-blue-400"
                            >
                                Subjects
                            </Link>

                            <Link
                                href="/admin/question-papers/sessions"
                                className="block hover:text-blue-400"
                            >
                                Sessions
                            </Link>

                            <Link
                                href="/admin/question-papers/"
                                className="block hover:text-blue-400"
                            >
                                Question Papers
                            </Link>

                            <Link
                                href="/admin/question-papers/import"
                                className="block hover:text-blue-400"
                            >
                                Excel Import
                            </Link>
                        </div>

                        {/* ===== EXISTING MODULES ===== */}
                        <div className="mt-6">
                            <p className="text-xs uppercase text-gray-400 mb-2">
                                Store
                            </p>

                            <Link href="/admin/products" className="block hover:text-blue-400">
                                Products
                            </Link>

                            <Link href="/admin/coupons" className="block hover:text-blue-400">
                                Coupons
                            </Link>

                            <Link href="/admin/orders" className="block hover:text-blue-400">
                                Orders
                            </Link>
                        </div>

                    </nav>
                </div>

                {/* LOGOUT */}
                <button
                    onClick={logout}
                    className="text-left text-red-400 hover:text-red-300 text-sm mt-6"
                >
                    Logout
                </button>

            </aside>

            <main className="flex-1 bg-gray-100 p-6">
                {children}
            </main>
        </div>
    );
}
