import { Head } from '@inertiajs/react';

export default function Seo({
    title,
    description,
    canonical,
}) {
    return (
        <Head>
            {title && <title>{title}</title>}
            {description && (
                <meta name="description" content={description} />
            )}
            {canonical && (
                <link rel="canonical" href={canonical} />
            )}
        </Head>
    );
}
