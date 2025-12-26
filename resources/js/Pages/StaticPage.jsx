import UserLayout from '@/Layouts/UserLayout';
import Seo from '@/Components/Seo';

export default function StaticPage({ title, html }) {
    return (
        <UserLayout>
            <Seo title={title} />

            <section className="bg-white py-10">
                <div className="max-w-7xl mx-auto px-6">

                    {/* Blade HTML output */}
                    <div
                        className="legacy-blade-content"
                        dangerouslySetInnerHTML={{ __html: html }}
                    />

                </div>
            </section>
        </UserLayout>
    );
}
