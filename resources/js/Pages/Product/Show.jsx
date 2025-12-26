import UserLayout from "@/Layouts/UserLayout";
import { Head, router, Link } from "@inertiajs/react";
import { useMemo, useState } from "react";
import Seo from "@/Components/Seo";
import ProductSchema from "@/Components/ProductSchema";

export default function Show({ product, enumOptions = {} }) {
  const [qty, setQty] = useState(1);
  const [activeTab, setActiveTab] = useState("description");

  // Options (selectable)
  const materialOptions =
    enumOptions.material_type?.length
      ? enumOptions.material_type
      : [
          "solved-assignments",
          "guess-papers",
          "question-papers",
          "previous-year-papers",
          "sample-papers",
          "lab-manuals",
        ];

  const levelOptions =
    enumOptions.level?.length ? enumOptions.level : ["UG", "PG", "Diploma"];

  const formatOptions =
    enumOptions.format?.length ? enumOptions.format : ["softcopy", "hardcopy"];

  // Medium isn't in your DB table, but you asked for it.
  // If you later add a column, just set default from product.medium.
  const mediumOptions =
    enumOptions.medium?.length ? enumOptions.medium : ["English", "Hindi"];

  // Default selections (safe)
  const [selectedMaterial, setSelectedMaterial] = useState(
    product.material_type || materialOptions[0]
  );
  const [selectedLevel, setSelectedLevel] = useState(
    product.level || levelOptions[0]
  );
  const [selectedFormat, setSelectedFormat] = useState(
    product.format || formatOptions[0]
  );
  const [selectedMedium, setSelectedMedium] = useState(
    product.medium || mediumOptions[0]
  );

  const finalPrice = product.discount_price ?? product.price;

  const computedTitle = useMemo(() => {
    const niceMaterial = (selectedMaterial || "").replaceAll("-", " ");
    return `${product.subject_code} ${niceMaterial} | IGNOU ${selectedLevel}`;
  }, [product.subject_code, selectedMaterial, selectedLevel]);

  const computedDescription = useMemo(() => {
    const niceMaterial = (selectedMaterial || "").replaceAll("-", " ");
    return `Download IGNOU ${product.subject_code} ${niceMaterial} for ${product.session}.`;
  }, [product.subject_code, selectedMaterial, product.session]);

  const canonical =
    product.canonical_url ||
    (typeof window !== "undefined" ? window.location.href : "");

  const seoTitle = product.meta_title || computedTitle;
  const seoDescription = product.meta_description || computedDescription;

  const coverImageUrl = product.cover_image_url || "";

  const payloadMeta = () => ({
    // send selected options to cart
    selected_material_type: selectedMaterial,
    selected_level: selectedLevel,
    selected_format: selectedFormat,
    selected_medium: selectedMedium,

    // optional: helpful for WhatsApp message building later
    whatsapp_meta: {
      subject_code: product.subject_code,
      subject_name: product.subject_name,
      session: product.session,
      program: product.program,
      price: finalPrice,
      material_type: selectedMaterial,
      level: selectedLevel,
      format: selectedFormat,
      medium: selectedMedium,
    },
  });

  const addToCart = () => {
    router.post(
      "/cart/add",
      {
        product_id: product.id,
        quantity: qty,
        ...payloadMeta(),
      },
      { preserveScroll: true }
    );
  };

  const buyNow = () => {
    router.post("/cart/add", {
      product_id: product.id,
      quantity: qty,
      buy_now: true,
      ...payloadMeta(),
    });
  };

  const Badge = ({ children }) => (
    <span className="inline-flex items-center text-xs font-semibold px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
      {children}
    </span>
  );

  const Select = ({ label, value, onChange, options }) => (
    <div className="w-full">
      <div className="text-xs text-slate-600 dark:text-slate-400 mb-2">
        {label}
      </div>
      <select
        value={value || ""}
        onChange={(e) => onChange(e.target.value)}
        className="
          w-full rounded-xl
          border border-slate-300 dark:border-slate-700
          bg-white dark:bg-slate-900
          text-slate-900 dark:text-slate-100
          px-3 py-2
          focus:outline-none focus:ring-2 focus:ring-blue-500/40
        "
      >
        {options.map((opt) => (
          <option key={opt} value={opt}>
            {String(opt).replaceAll("-", " ")}
          </option>
        ))}
      </select>
    </div>
  );

  const TabButton = ({ id, children }) => {
    const active = activeTab === id;
    return (
      <button
        type="button"
        onClick={() => setActiveTab(id)}
        className={`
          px-4 py-2 rounded-xl text-sm font-semibold transition
          ${
            active
              ? "bg-blue-600 text-white"
              : "bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-800"
          }
        `}
      >
        {children}
      </button>
    );
  };

  return (
    <UserLayout>
      <Seo
        title={seoTitle}
        description={seoDescription}
        canonical={canonical}
        image={coverImageUrl || undefined}
      />

      <ProductSchema product={product} />
      <Head title={seoTitle} />

      <section className="bg-slate-100 dark:bg-[#0b1220] transition-colors">
        <div className="max-w-6xl mx-auto px-6 py-10">
          {/* Breadcrumbs */}
          <div className="text-xs text-slate-600 dark:text-slate-400 mb-6">
            <span className="opacity-80">Home</span>
            <span className="mx-2 opacity-60">/</span>
            <span className="opacity-80">Materials</span>
            <span className="mx-2 opacity-60">/</span>
            <span className="font-semibold text-slate-900 dark:text-slate-100">
              {product.subject_code}
            </span>
          </div>

          <div className="grid lg:grid-cols-12 gap-8">
            {/* LEFT: Image + trust */}
            <div className="lg:col-span-5">
              <div className="rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-5 shadow-sm">
                <div className="aspect-square rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 flex items-center justify-center">
                  {coverImageUrl ? (
                    <img
                      src={coverImageUrl}
                      alt={product.title || product.subject_code}
                      className="w-full h-full object-cover"
                      loading="lazy"
                      onError={(e) => {
                        e.currentTarget.style.display = "none";
                      }}
                    />
                  ) : (
                    <div className="text-sm text-slate-500 dark:text-slate-400">
                      No image available
                    </div>
                  )}
                </div>

                <div className="mt-5 grid gap-3">
                  <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                    <div className="text-sm font-semibold text-slate-900 dark:text-slate-100">
                      What you get
                    </div>
                    <ul className="mt-2 text-sm text-slate-700 dark:text-slate-300 space-y-1">
                      <li>• Instant access after purchase</li>
                      <li>• Clean, exam-focused material</li>
                      <li>• Support on WhatsApp if needed</li>
                    </ul>
                  </div>

                  <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                    <div className="text-sm font-semibold text-slate-900 dark:text-slate-100">
                      Trust & Safety
                    </div>
                    <p className="mt-2 text-sm text-slate-700 dark:text-slate-300">
                      Secure payment • Verified content • Quick delivery (for hardcopy)
                    </p>
                  </div>
                </div>
              </div>
            </div>

            {/* RIGHT: classic purchase panel */}
            <div className="lg:col-span-7">
              <div className="rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-6 shadow-sm">
                <h1 className="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-slate-100 leading-tight">
                  {product.title || `${product.subject_code} ${String(product.material_type || "").replaceAll("-", " ")}`}
                </h1>

                <p className="mt-2 text-slate-600 dark:text-slate-400">
                  {product.subject_name}
                </p>

                <div className="mt-4 flex flex-wrap gap-2">
                  <Badge>{String(selectedMaterial).replaceAll("-", " ")}</Badge>
                  <Badge>{selectedLevel}</Badge>
                  <Badge>{product.session}</Badge>
                  <Badge>{selectedFormat}</Badge>
                  <Badge>{selectedMedium}</Badge>
                </div>

                {/* Price block */}
                <div className="mt-6 flex items-end justify-between gap-4">
                  <div>
                    <div className="text-xs text-slate-600 dark:text-slate-400">
                      Price
                    </div>
                    <div className="text-3xl font-extrabold text-slate-900 dark:text-slate-100">
                      ₹{finalPrice}
                    </div>

                    {product.discount_price ? (
                      <div className="text-sm text-slate-500 dark:text-slate-400 mt-1">
                        MRP <span className="line-through">₹{product.price}</span>
                      </div>
                    ) : null}
                  </div>

                  <div className="text-xs text-slate-600 dark:text-slate-400 text-right">
                    <div className="font-semibold text-slate-900 dark:text-slate-100">
                      {/* {product.program || "IGNOU"} */}
                    </div>
                    <div>Secure payment</div>
                  </div>
                </div>

                {/* Selectors */}
                <div className="mt-6 grid sm:grid-cols-2 gap-4">
                  <Select
                    label="Material Type"
                    value={selectedMaterial}
                    onChange={setSelectedMaterial}
                    options={materialOptions}
                  />
                  <Select
                    label="Level"
                    value={selectedLevel}
                    onChange={setSelectedLevel}
                    options={levelOptions}
                  />
                  <Select
                    label="Format"
                    value={selectedFormat}
                    onChange={setSelectedFormat}
                    options={formatOptions}
                  />
                  <Select
                    label="Medium"
                    value={selectedMedium}
                    onChange={setSelectedMedium}
                    options={mediumOptions}
                  />
                </div>

                {/* Quantity + actions */}
                <div className="mt-6 flex flex-col sm:flex-row sm:items-center gap-4">
                  <div className="flex items-center gap-3">
                    <button
                      onClick={() => setQty((q) => Math.max(1, q - 1))}
                      className="
                        w-10 h-10 rounded-xl
                        border border-slate-300 dark:border-slate-700
                        bg-slate-50 dark:bg-slate-900
                        text-slate-900 dark:text-slate-100
                        hover:bg-slate-100 dark:hover:bg-slate-800 transition
                      "
                      aria-label="Decrease quantity"
                    >
                      −
                    </button>

                    <div className="min-w-[44px] text-center text-lg font-bold text-slate-900 dark:text-slate-100">
                      {qty}
                    </div>

                    <button
                      onClick={() => setQty((q) => q + 1)}
                      className="
                        w-10 h-10 rounded-xl
                        border border-slate-300 dark:border-slate-700
                        bg-slate-50 dark:bg-slate-900
                        text-slate-900 dark:text-slate-100
                        hover:bg-slate-100 dark:hover:bg-slate-800 transition
                      "
                      aria-label="Increase quantity"
                    >
                      +
                    </button>
                  </div>

                  <div className="flex-1 grid sm:grid-cols-2 gap-3">
                    <button
                      onClick={addToCart}
                      className="
                        w-full bg-blue-600 hover:bg-blue-700
                        text-white py-3 rounded-2xl font-semibold transition
                      "
                    >
                      Add to Cart
                    </button>

                    <button
                      onClick={buyNow}
                      className="
                        w-full border border-blue-600
                        text-blue-700 dark:text-blue-400
                        py-3 rounded-2xl font-semibold
                        hover:bg-blue-50 dark:hover:bg-blue-900/20 transition
                      "
                    >
                      Buy Now
                    </button>
                  </div>
                </div>

                <p className="mt-4 text-xs text-slate-500 dark:text-slate-400">
                  By purchasing you agree to our content usage terms. Need help? WhatsApp support available.
                </p>
              </div>

              {/* Tabs */}
              <div className="mt-6 rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-6 shadow-sm">
                <div className="flex flex-wrap gap-2">
                  <TabButton id="description">Description</TabButton>
                  <TabButton id="details">Details</TabButton>
                  <TabButton id="faq">FAQ</TabButton>
                </div>

                <div className="mt-6">
                  {activeTab === "description" ? (
                    <div className="prose prose-slate dark:prose-invert max-w-none text-slate-700 dark:text-slate-300">
                      <div
                        dangerouslySetInnerHTML={{
                          __html: product.description_html || "<p>No description available.</p>",
                        }}
                      />
                    </div>
                  ) : null}

                  {activeTab === "details" ? (
                    <div className="grid sm:grid-cols-2 gap-4 text-sm">
                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="text-xs text-slate-600 dark:text-slate-400">
                          Subject Code
                        </div>
                        <div className="mt-1 font-semibold text-slate-900 dark:text-slate-100">
                          {product.subject_code}
                        </div>
                      </div>

                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="text-xs text-slate-600 dark:text-slate-400">
                          Subject Name
                        </div>
                        <div className="mt-1 font-semibold text-slate-900 dark:text-slate-100">
                          {product.subject_name}
                        </div>
                      </div>

                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="text-xs text-slate-600 dark:text-slate-400">
                          Session
                        </div>
                        <div className="mt-1 font-semibold text-slate-900 dark:text-slate-100">
                          {product.session}
                        </div>
                      </div>

                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="text-xs text-slate-600 dark:text-slate-400">
                          Program
                        </div>
                        <div className="mt-1 font-semibold text-slate-900 dark:text-slate-100">
                          {product.program || "IGNOU"}
                        </div>
                      </div>
                    </div>
                  ) : null}

                  {activeTab === "faq" ? (
                    <div className="space-y-4 text-sm text-slate-700 dark:text-slate-300">
                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="font-semibold text-slate-900 dark:text-slate-100">
                          When will I get access?
                        </div>
                        <p className="mt-2">
                          Immediately after successful payment (softcopy). Hardcopy delivery depends on location.
                        </p>
                      </div>

                      <div className="rounded-2xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 p-4">
                        <div className="font-semibold text-slate-900 dark:text-slate-100">
                          Can I get help if I’m confused?
                        </div>
                        <p className="mt-2">
                          Yes — WhatsApp support is available for guidance related to the purchase.
                        </p>
                      </div>
                    </div>
                  ) : null}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </UserLayout>
  );
}
