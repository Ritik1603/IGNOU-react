import UserLayout from "@/Layouts/UserLayout";
import { Head, router, Link } from "@inertiajs/react";
import { useMemo, useState, useEffect } from "react";
import Seo from "@/Components/Seo";
import ProductSchema from "@/Components/ProductSchema";

export default function Show({ product, sessions = [], availableMaterialTypes = [], variants = [], enumOptions = {} }) {
  const [qty, setQty] = useState(1);
  const [activeTab, setActiveTab] = useState("description");
  const [imageLoaded, setImageLoaded] = useState(false);
  // const [selectedVariant, setSelectedVariant] = useState(null);
  const [selectedSession, setSelectedSession] = useState(product.session);

  const materialOptions = useMemo(() => {
    return variants
      .filter(v => v.session === selectedSession)
      .map(v => v.material_type)
      .filter((v, i, a) => a.indexOf(v) === i);
  }, [variants, selectedSession]);



  const sessionOptions = sessions?.length
    ? sessions.map(s => s.session)
    : [product.session];

    
  const formatOptions =
    enumOptions.format?.length ? enumOptions.format : ["softcopy", "hardcopy"];

  const mediumOptions =
    enumOptions.medium?.length ? enumOptions.medium : ["English", "Hindi"];

  // Default selections (safe)
  const [selectedMaterial, setSelectedMaterial] = useState(
    product.material_type || materialOptions[0]
  );


  const [selectedFormat, setSelectedFormat] = useState(
    product.format || formatOptions[0]
  );
  const [selectedMedium, setSelectedMedium] = useState(
    product.medium || mediumOptions[0]
  );


  // useMemo(() => {
  // const variant = variants.find(
  //   v =>
  //     v.session === selectedSession &&
  //     v.material_type === selectedMaterial
  // );

  // setSelectedVariant(variant || null);
  // }, [selectedSession, selectedMaterial, variants]);


  // 🔹 ACTIVE VARIANT (based on selected options)
  const activeVariant = useMemo(() => {
    if (!variants?.length) return null;

    return variants.find(
      v =>
        v.session === selectedSession &&
        v.material_type === selectedMaterial
    ) || null;
  }, [variants, selectedSession, selectedMaterial]);


  useEffect(() => {
    // Check if current material exists for selected session
    const materialExists = variants.some(
      v =>
        v.session === selectedSession &&
        v.material_type === selectedMaterial
    );

    // Reset ONLY if invalid
    if (!materialExists) {
      const fallback = variants.find(v => v.session === selectedSession);
      if (fallback) {
        setSelectedMaterial(fallback.material_type);
      }
    }
  }, [selectedSession, selectedMaterial, variants]);

    // 🔹 Variant-aware image
  const coverImageUrl =
    activeVariant?.cover_image_url ||
    product.cover_image_url ||
    "";

  useEffect(() => {
    setImageLoaded(false);
  }, [coverImageUrl]);



// 🔹 PRICE LOGIC (variant-aware)
const price = activeVariant?.price ?? product.price;
const discountPrice = activeVariant?.discount_price ?? null;
const finalPrice = discountPrice ?? price;

// 🔹 DISCOUNT PERCENTAGE
const discountPercent =
  discountPrice && price
    ? Math.round(((price - discountPrice) / price) * 100)
    : 0;


  const computedTitle = useMemo(() => {
    const niceMaterial = (selectedMaterial || "").replaceAll("-", " ");
    return `${product.subject_code} ${niceMaterial} | IGNOU ${selectedSession}`;
  }, [product.subject_code, selectedMaterial, selectedSession]);


  const computedDescription = useMemo(() => {
    const niceMaterial = (selectedMaterial || "").replaceAll("-", " ");
    return `Download IGNOU ${product.subject_code} ${niceMaterial} for ${product.session}.`;
  }, [product.subject_code, selectedMaterial, product.session]);

  const canonical =
    product.canonical_url ||
    (typeof window !== "undefined" ? window.location.href : "");

  const seoTitle = product.meta_title || computedTitle;
  const seoDescription = product.meta_description || computedDescription;


  const payloadMeta = () => ({
    variant_id: activeVariant?.id,

    selected_options: {
      material_type: selectedMaterial,
      session: selectedSession,
      format: selectedFormat,
      medium: selectedMedium,
    },

    whatsapp_meta: {
      subject_code: product.subject_code,
      material_type: selectedMaterial,
      session: selectedSession,
      format: selectedFormat,
      medium: selectedMedium,
      price: finalPrice,
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

  const Badge = ({ children, variant = "default" }) => {
    const variants = {
      default: "bg-gradient-to-r from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700",
      accent: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white border-0",
      success: "bg-gradient-to-r from-emerald-500 to-teal-600 text-white border-0"
    };
    
    return (
      <span className={`
        inline-flex items-center text-xs font-semibold px-4 py-1.5 rounded-full
        ${variants[variant]}
        backdrop-blur-sm
        transition-all duration-300 hover:scale-105
      `}>
        {children}
      </span>
    );
  };

  const Select = ({ label, value, onChange, options, icon }) => (
    <div className="group">
      <label className="block text-xs font-semibold text-slate-600 dark:text-slate-400 mb-2 tracking-wide uppercase">
        {icon && <span className="mr-1.5">{icon}</span>}
        {label}
      </label>
      <div className="relative">
        <select
          value={value || ""}
          onChange={(e) => onChange(e.target.value)}
          className="
            w-full rounded-2xl
            border-2 border-slate-200 dark:border-slate-700
            bg-white dark:bg-slate-900
            text-slate-900 dark:text-slate-100
            px-4 py-3.5
            font-medium
            appearance-none
            cursor-pointer
            transition-all duration-300
            focus:outline-none focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500
            hover:border-slate-300 dark:hover:border-slate-600
          "
        >
          {options.map((opt) => (
            <option key={opt} value={opt}>
              {String(opt).replaceAll("-", " ").toUpperCase()}
            </option>
          ))}
        </select>
        <div className="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
          <svg className="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
    </div>
  );

  const TabButton = ({ id, children, icon }) => {
    const active = activeTab === id;
    return (
      <button
        type="button"
        onClick={() => setActiveTab(id)}
        className={`
          relative px-6 py-3 rounded-2xl text-sm font-bold transition-all duration-300
          ${
            active
              ? "bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-500/30 scale-105"
              : "bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 dark:hover:text-slate-200"
          }
        `}
      >
        {icon && <span className="mr-2">{icon}</span>}
        {children}
        {active && (
          <div className="absolute inset-0 rounded-2xl bg-white/20 animate-pulse" />
        )}
      </button>
    );
  };

  const FeatureCard = ({ icon, title, description }) => (
    <div className="group relative rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-white to-slate-50 dark:from-slate-900 dark:to-slate-800 p-5 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:border-blue-300 dark:hover:border-blue-600">
      <div className="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
      <div className="relative">
        <div className="text-3xl mb-3">{icon}</div>
        <div className="text-sm font-bold text-slate-900 dark:text-slate-100 mb-2">
          {title}
        </div>
        <p className="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
          {description}
        </p>
      </div>
    </div>
  );

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

      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600;700&display=swap');
        
        * {
          font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        h1, h2, h3, .heading {
          font-family: 'Sora', sans-serif;
        }

        @keyframes fadeInUp {
          from {
            opacity: 0;
            transform: translateY(20px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        @keyframes scaleIn {
          from {
            opacity: 0;
            transform: scale(0.95);
          }
          to {
            opacity: 1;
            transform: scale(1);
          }
        }

        @keyframes shimmer {
          0% {
            background-position: -1000px 0;
          }
          100% {
            background-position: 1000px 0;
          }
        }

        .animate-fade-in-up {
          animation: fadeInUp 0.6s ease-out forwards;
        }

        .animate-scale-in {
          animation: scaleIn 0.5s ease-out forwards;
        }

        .shimmer {
          background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
          background-size: 1000px 100%;
          animation: shimmer 2s infinite;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
      `}</style>

      <section className="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/30 dark:from-[#0a0f1e] dark:via-[#0b1220] dark:to-[#0d1528] transition-colors">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
          {/* Breadcrumbs */}
          <nav className="flex items-center space-x-2 text-xs font-medium text-slate-500 dark:text-slate-400 mb-8 animate-fade-in-up">
            <Link href="/" className="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
              🏠 Home
            </Link>
            <span className="opacity-40">/</span>
            <Link href="/materials" className="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
              Materials
            </Link>
            <span className="opacity-40">/</span>
            <span className="font-bold text-slate-900 dark:text-slate-100">
              {product.subject_code}
            </span>
          </nav>

          <div className="grid lg:grid-cols-12 gap-8 lg:gap-12">
            {/* LEFT COLUMN: Image & Features */}
            <div className="lg:col-span-5 space-y-6">
              {/* Product Image */}
              <div className="sticky top-8 animate-scale-in">
                <div className="group relative rounded-3xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-6 shadow-2xl shadow-slate-900/5 dark:shadow-black/20 overflow-hidden transition-all duration-500 hover:shadow-3xl hover:scale-[1.02]">
                  <div className="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                  
                  <div className="relative aspect-square rounded-2xl overflow-hidden border-2 border-slate-100 dark:border-slate-800 bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 flex items-center justify-center">
                    {coverImageUrl ? (
                      <>
                        {!imageLoaded && (
                          <div className="absolute inset-0 shimmer bg-slate-200 dark:bg-slate-700" />
                        )}
                        <img
                          key={activeVariant?.id || product.id}   // 🔑 FORCE REMOUNT
                          src={coverImageUrl}
                          alt={product.title || product.subject_code}
                          className={`w-full h-full object-cover transition-opacity duration-500 ${
                            imageLoaded ? "opacity-100" : "opacity-0"
                          }`}
                          loading="lazy"
                          onLoad={() => setImageLoaded(true)}
                          onError={(e) => {
                            e.currentTarget.style.display = "none";
                            setImageLoaded(true);
                          }}
                        />

                      </>
                    ) : (
                      <div className="text-center p-8">
                        <div className="text-6xl mb-4">📚</div>
                        <div className="text-sm font-semibold text-slate-500 dark:text-slate-400">
                          {product.subject_code}
                        </div>
                      </div>
                    )}
                  </div>

                  {discountPercent > 0 && (
                    <div className="absolute top-10 right-10 z-10">
                      <div className="bg-gradient-to-r from-red-500 to-pink-600 text-white text-xs font-black px-4 py-2 rounded-full shadow-lg shadow-red-500/50 rotate-12 animate-pulse">
                        {discountPercent}% OFF
                      </div>
                    </div>
                  )}
                </div>

                {/* Feature Cards */}
                <div className="grid grid-cols-2 gap-4 mt-6 animate-fade-in-up delay-200">
                  <FeatureCard
                    icon="⚡"
                    title="Instant Access"
                    description="Get your materials immediately after purchase"
                  />
                  <FeatureCard
                    icon="🎯"
                    title="Exam Focused"
                    description="Clean, precise content for better results"
                  />
                  <FeatureCard
                    icon="🛡️"
                    title="Secure Payment"
                    description="100% safe and encrypted transactions"
                  />
                  <FeatureCard
                    icon="💬"
                    title="WhatsApp Support"
                    description="Quick help whenever you need it"
                  />
                </div>
              </div>
            </div>

            {/* RIGHT COLUMN: Product Details & Purchase */}
            <div className="lg:col-span-7 space-y-6">
              {/* Main Product Card */}
              <div className="rounded-3xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-8 shadow-xl shadow-slate-900/5 dark:shadow-black/20 animate-fade-in-up delay-100">
                {/* Product Title & Badges */}
                <div className="space-y-4 mb-6">
                  <h1 className="heading text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 dark:text-slate-100 leading-tight tracking-tight">
                    {product.title || `${product.subject_code} ${String(product.material_type || "").replaceAll("-", " ")}`}
                  </h1>

                  <p className="text-lg text-slate-600 dark:text-slate-400 font-medium">
                    {product.subject_name}
                  </p>

                  <div className="flex flex-wrap gap-2">
                    <Badge variant="accent">
                      {String(selectedMaterial).replaceAll("-", " ").toUpperCase()}
                    </Badge>
                    <Badge>{selectedSession}</Badge>
                    <Badge>{product.level}</Badge>

                    {product.program && <Badge>{product.program}</Badge>}
                  </div>
                </div>

                {/* Price Section */}
                <div className="relative rounded-2xl bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-950/30 dark:to-indigo-950/30 border-2 border-blue-200 dark:border-blue-800 p-6 mb-6">
                  <div className="flex items-end justify-between gap-4">
                    <div>
                      <div className="text-xs font-bold text-blue-600 dark:text-blue-400 mb-2 uppercase tracking-wider">
                        Special Price
                      </div>
                      <div className="flex items-baseline gap-3">
                        <span className="text-5xl font-black text-slate-900 dark:text-slate-100">
                          {finalPrice ? (
                            <span>₹{finalPrice}</span>
                          ) : (
                            <span className="text-slate-400">Select options</span>
                          )}

                        </span>
                        {discountPrice  && (
                          <span className="text-2xl text-slate-400 dark:text-slate-500 line-through font-semibold">
                            ₹{price}
                          </span>
                        )}
                      </div>
                      {discountPercent > 0 && (
                        <div className="text-sm text-emerald-600 dark:text-emerald-400 font-bold mt-2">
                          You save {discountPercent}%
                        </div>
                      )}

                    </div>

                    <div className="text-right">
                      <div className="inline-flex items-center gap-2 bg-white dark:bg-slate-900 px-4 py-2 rounded-full border-2 border-blue-200 dark:border-blue-800">
                        <svg className="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                          <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                        </svg>
                        <span className="text-xs font-bold text-slate-700 dark:text-slate-300">
                          Secure Payment
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Selection Options - Only show if multiple options */}
                {(materialOptions.length > 1 || sessionOptions.length > 1 || formatOptions.length > 1 || mediumOptions.length > 1) && (
                  <div className="space-y-4 mb-6">
                    <h3 className="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider">
                      Customize Your Order
                    </h3>
                    <div className="grid sm:grid-cols-2 gap-4">
                      {materialOptions.length > 1 && (
                        <Select
                          label="Material Type"
                          value={selectedMaterial}
                          onChange={setSelectedMaterial}
                          options={materialOptions}
                          icon="📚"
                        />
                      )}
                      {sessionOptions.length > 1 && (
                        <Select
                          label="Session"
                          value={selectedSession}
                          onChange={setSelectedSession}   // ✅ THAT'S IT
                          options={sessionOptions}
                          icon="📅"
                        />



                      )}
                      {formatOptions.length > 1 && (
                        <Select
                          label="Format"
                          value={selectedFormat}
                          onChange={setSelectedFormat}
                          options={formatOptions}
                          icon="📦"
                        />
                      )}
                      {mediumOptions.length > 1 && (
                        <Select
                          label="Medium"
                          value={selectedMedium}
                          onChange={setSelectedMedium}
                          options={mediumOptions}
                          icon="🌐"
                        />
                      )}
                    </div>
                  </div>
                )}

                {/* Quantity & Action Buttons */}
                <div className="space-y-4">
                  <div className="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    {/* Quantity Selector */}
                    <div className="flex items-center gap-2">
                      <span className="text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-wider">
                        Qty:
                      </span>
                      <div className="flex items-center gap-2 bg-slate-50 dark:bg-slate-900 rounded-2xl border-2 border-slate-200 dark:border-slate-700 p-1">
                        <button
                          onClick={() => setQty((q) => Math.max(1, q - 1))}
                          className="w-10 h-10 rounded-xl bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 font-bold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-all duration-300 active:scale-95 border border-slate-200 dark:border-slate-700"
                          aria-label="Decrease quantity"
                        >
                          −
                        </button>

                        <div className="min-w-[3rem] text-center text-xl font-black text-slate-900 dark:text-slate-100">
                          {qty}
                        </div>

                        <button
                          onClick={() => setQty((q) => q + 1)}
                          className="w-10 h-10 rounded-xl bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 font-bold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-all duration-300 active:scale-95 border border-slate-200 dark:border-slate-700"
                          aria-label="Increase quantity"
                        >
                          +
                        </button>
                      </div>
                    </div>

                    {/* Action Buttons */}
                    <div className="flex-1 grid sm:grid-cols-2 gap-3">
                      <button
                        onClick={addToCart}
                        className="group relative w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-4 rounded-2xl font-bold text-base transition-all duration-300 hover:scale-105 active:scale-95 shadow-lg shadow-blue-500/30 overflow-hidden"
                      >
                        <span className="relative z-10 flex items-center justify-center gap-2">
                          <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                          Add to Cart
                        </span>
                        <div className="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300" />
                      </button>

                      <button
                        onClick={buyNow}
                        className="group relative w-full border-2 border-blue-600 dark:border-blue-500 text-blue-700 dark:text-blue-400 py-4 rounded-2xl font-bold text-base hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300 hover:scale-105 active:scale-95 overflow-hidden"
                      >
                        <span className="relative z-10 flex items-center justify-center gap-2">
                          <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 10V3L4 14h7v7l9-11h-7z" />
                          </svg>
                          Buy Now
                        </span>
                      </button>
                    </div>
                  </div>

                  <p className="text-xs text-slate-500 dark:text-slate-400 text-center bg-slate-50 dark:bg-slate-900 rounded-xl py-3 px-4 border border-slate-200 dark:border-slate-800">
                    🔒 By purchasing, you agree to our content usage terms. Need help? WhatsApp support available 24/7
                  </p>
                </div>
              </div>

              {/* Tabs Section */}
              <div className="rounded-3xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-[#0f172a] p-8 shadow-xl shadow-slate-900/5 dark:shadow-black/20 animate-fade-in-up delay-300">
                <div className="flex flex-wrap gap-3 mb-8">
                  <TabButton id="description" icon="📝">
                    Description
                  </TabButton>
                  <TabButton id="details" icon="ℹ️">
                    Details
                  </TabButton>
                  <TabButton id="faq" icon="❓">
                    FAQ
                  </TabButton>
                </div>

                <div className="min-h-[200px]">
                  {activeTab === "description" && (
                    <div className="animate-fade-in-up">
                      <div className="prose prose-slate dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 prose-headings:font-bold prose-headings:text-slate-900 dark:prose-headings:text-slate-100 prose-a:text-blue-600 dark:prose-a:text-blue-400">
                        <div
                          dangerouslySetInnerHTML={{
                            __html: product.description_html || "<p class='text-center py-8'>📄 No description available for this product yet.</p>",
                          }}
                        />
                      </div>
                    </div>
                  )}

                  {activeTab === "details" && (
                    <div className="grid sm:grid-cols-2 gap-4 animate-fade-in-up">
                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-5 transition-all duration-300 hover:scale-105 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">
                          📚 Subject Code
                        </div>
                        <div className="text-lg font-black text-slate-900 dark:text-slate-100">
                          {product.subject_code}
                        </div>
                      </div>

                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-5 transition-all duration-300 hover:scale-105 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">
                          📖 Subject Name
                        </div>
                        <div className="text-lg font-black text-slate-900 dark:text-slate-100">
                          {product.subject_name}
                        </div>
                      </div>

                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-5 transition-all duration-300 hover:scale-105 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">
                          📅 Session
                        </div>
                        <div className="text-lg font-black text-slate-900 dark:text-slate-100">
                          {product.session}
                        </div>
                      </div>

                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-5 transition-all duration-300 hover:scale-105 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">
                          🎓 Program
                        </div>
                        <div className="text-lg font-black text-slate-900 dark:text-slate-100">
                          {product.program || "IGNOU"}
                        </div>
                      </div>
                    </div>
                  )}

                  {activeTab === "faq" && (
                    <div className="space-y-4 animate-fade-in-up">
                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-6 transition-all duration-300 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="flex items-start gap-4">
                          <div className="text-3xl">⚡</div>
                          <div className="flex-1">
                            <div className="font-bold text-slate-900 dark:text-slate-100 mb-2">
                              When will I get access?
                            </div>
                            <p className="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                              Immediately after successful payment for softcopy materials. Hardcopy delivery timeline depends on your location and will be communicated after order confirmation.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-6 transition-all duration-300 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="flex items-start gap-4">
                          <div className="text-3xl">💬</div>
                          <div className="flex-1">
                            <div className="font-bold text-slate-900 dark:text-slate-100 mb-2">
                              Can I get help if I'm confused?
                            </div>
                            <p className="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                              Absolutely! WhatsApp support is available 24/7 for any guidance related to your purchase, content access, or general queries.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div className="group rounded-2xl border-2 border-slate-200 dark:border-slate-700 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800 p-6 transition-all duration-300 hover:border-blue-300 dark:hover:border-blue-600">
                        <div className="flex items-start gap-4">
                          <div className="text-3xl">🔄</div>
                          <div className="flex-1">
                            <div className="font-bold text-slate-900 dark:text-slate-100 mb-2">
                              What's your refund policy?
                            </div>
                            <p className="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                              Due to the digital nature of our products, refunds are handled on a case-by-case basis. Please contact support if you face any issues with your purchase.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  )}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </UserLayout>
  );
}