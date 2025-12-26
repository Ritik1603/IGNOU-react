import { Head } from '@inertiajs/react';

export default function ProductSchema({ product }) {

    const schema = {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": product.title,
        "description": product.meta_description,
        "sku": product.subject_code,
        "offers": {
            "@type": "Offer",
            "price": product.discount_price ?? product.price,
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock"
        }
    };

    return (
        <Head>
            <script type="application/ld+json">
                {JSON.stringify(schema)}
            </script>
        </Head>
    );
}
