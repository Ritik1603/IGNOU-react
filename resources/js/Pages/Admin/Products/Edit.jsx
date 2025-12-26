import AdminLayout from "@/Layouts/AdminLayout";
import { Head, useForm } from "@inertiajs/react";
import { useMemo, useState } from "react";

export default function Edit({ product, enums = {} }) {
  const [coverPreview, setCoverPreview] = useState(
    product.cover_image_url || (product.cover_image ? `/storage/${product.cover_image}` : "")
  );

  // Fallbacks if you don't pass enums from controller
  const materialTypeOptions = useMemo(
    () =>
      enums.material_type ?? [
        "solved-assignments",
        "guess-papers",
        "question-papers",
        "previous-year-papers",
        "sample-papers",
        "lab-manuals",
      ],
    [enums]
  );

  const levelOptions = useMemo(
    () => enums.level ?? ["UG", "PG", "Diploma"],
    [enums]
  );

  const formatOptions = useMemo(
    () => enums.format ?? ["softcopy", "hardcopy"],
    [enums]
  );

  const { data, setData, post, processing, errors } = useForm({
    _method: "PUT", 
    // base fields
    title: product.title ?? "",
    slug: product.slug ?? "",
    subject_code: product.subject_code ?? "",
    subject_name: product.subject_name ?? "",
    level: product.level ?? "UG",
    program: product.program ?? "",
    material_type: product.material_type ?? "solved-assignments",
    format: product.format ?? "softcopy",
    session: product.session ?? "",
    price: product.price ?? 0,
    discount_price: product.discount_price ?? "",
    description_html: product.description_html ?? "",
    meta_title: product.meta_title ?? "",
    meta_description: product.meta_description ?? "",
    canonical_url: product.canonical_url ?? "",
    status: String(product.status ?? 0),

    // file
    cover_image: null,
  });

  const submit = (e) => {
    e.preventDefault();

    // Inertia file upload needs FormData -> use post + _method
    post(`/admin/products/${product.id}`, {
      forceFormData: true,
      preserveScroll: true,
    });
  };

  const onCoverChange = (file) => {
    setData("cover_image", file);
    if (file) {
      const url = URL.createObjectURL(file);
      setCoverPreview(url);
    }
  };

  const FieldError = ({ name }) =>
    errors[name] ? (
      <div className="text-red-600 text-sm mt-1">{errors[name]}</div>
    ) : null;

  return (
    <AdminLayout>
      <Head title="Edit Product" />

      <div className="max-w-5xl bg-white p-6 rounded shadow">
        <div className="flex items-start justify-between gap-6 mb-6">
          <div>
            <h1 className="text-xl font-semibold">Edit Product</h1>
            <p className="text-sm text-gray-600 mt-1">
              Update complete product details, pricing, SEO and content.
            </p>
          </div>

          <div className="text-xs text-gray-500 text-right">
            <div>ID: <span className="font-semibold">{product.id}</span></div>
            <div>Created: {product.created_at ?? "—"}</div>
            <div>Updated: {product.updated_at ?? "—"}</div>
          </div>
        </div>

        <form onSubmit={submit} className="space-y-8">
          {/* BASIC DETAILS */}
          <section>
            <h2 className="text-sm font-semibold text-gray-900 mb-4">
              Basic Details
            </h2>

            <div className="grid md:grid-cols-2 gap-4">
              <div>
                <label className="block text-sm font-medium">Title</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.title}
                  onChange={(e) => setData("title", e.target.value)}
                  placeholder="BCOC-131 Solved Assignments"
                />
                <FieldError name="title" />
              </div>

              <div>
                <label className="block text-sm font-medium">Slug</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.slug}
                  onChange={(e) => setData("slug", e.target.value)}
                  placeholder="bcoc-131-solved-assignments"
                />
                <FieldError name="slug" />
              </div>

              <div>
                <label className="block text-sm font-medium">Subject Code</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.subject_code}
                  onChange={(e) => setData("subject_code", e.target.value)}
                  placeholder="BCOC-131"
                />
                <FieldError name="subject_code" />
              </div>

              <div>
                <label className="block text-sm font-medium">Subject Name</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.subject_name}
                  onChange={(e) => setData("subject_name", e.target.value)}
                  placeholder="Financial Accounting"
                />
                <FieldError name="subject_name" />
              </div>

              <div>
                <label className="block text-sm font-medium">Level</label>
                <select
                  className="w-full border rounded px-3 py-2"
                  value={data.level}
                  onChange={(e) => setData("level", e.target.value)}
                >
                  {levelOptions.map((opt) => (
                    <option key={opt} value={opt}>
                      {opt}
                    </option>
                  ))}
                </select>
                <FieldError name="level" />
              </div>

              <div>
                <label className="block text-sm font-medium">Program</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.program}
                  onChange={(e) => setData("program", e.target.value)}
                  placeholder="B.COMG / BAG / etc"
                />
                <FieldError name="program" />
              </div>

              <div>
                <label className="block text-sm font-medium">Material Type</label>
                <select
                  className="w-full border rounded px-3 py-2"
                  value={data.material_type}
                  onChange={(e) => setData("material_type", e.target.value)}
                >
                  {materialTypeOptions.map((opt) => (
                    <option key={opt} value={opt}>
                      {String(opt).replaceAll("-", " ")}
                    </option>
                  ))}
                </select>
                <FieldError name="material_type" />
              </div>

              <div>
                <label className="block text-sm font-medium">Format</label>
                <select
                  className="w-full border rounded px-3 py-2"
                  value={data.format}
                  onChange={(e) => setData("format", e.target.value)}
                >
                  {formatOptions.map((opt) => (
                    <option key={opt} value={opt}>
                      {opt}
                    </option>
                  ))}
                </select>
                <FieldError name="format" />
              </div>

              <div>
                <label className="block text-sm font-medium">Session</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.session}
                  onChange={(e) => setData("session", e.target.value)}
                  placeholder="June 2025"
                />
                <FieldError name="session" />
              </div>

              <div>
                <label className="block text-sm font-medium">Status</label>
                <select
                  className="w-full border rounded px-3 py-2"
                  value={data.status}
                  onChange={(e) => setData("status", e.target.value)}
                >
                  <option value="0">Inactive</option>
                  <option value="1">Active</option>
                </select>
                <FieldError name="status" />
              </div>
            </div>
          </section>

          {/* PRICING */}
          <section>
            <h2 className="text-sm font-semibold text-gray-900 mb-4">
              Pricing
            </h2>

            <div className="grid md:grid-cols-2 gap-4">
              <div>
                <label className="block text-sm font-medium">Price (₹)</label>
                <input
                  type="number"
                  className="w-full border rounded px-3 py-2"
                  value={data.price}
                  onChange={(e) => setData("price", e.target.value)}
                  min="0"
                />
                <FieldError name="price" />
              </div>

              <div>
                <label className="block text-sm font-medium">
                  Discount Price (₹)
                </label>
                <input
                  type="number"
                  className="w-full border rounded px-3 py-2"
                  value={data.discount_price}
                  onChange={(e) => setData("discount_price", e.target.value)}
                  min="0"
                  placeholder="Leave blank if no discount"
                />
                <FieldError name="discount_price" />
              </div>
            </div>
          </section>

          {/* COVER IMAGE */}
          <section>
            <h2 className="text-sm font-semibold text-gray-900 mb-4">
              Cover Image
            </h2>

            <div className="grid md:grid-cols-2 gap-4 items-start">
              <div>
                <label className="block text-sm font-medium">Upload Image</label>
                <input
                  type="file"
                  className="w-full border rounded px-3 py-2"
                  accept="image/*"
                  onChange={(e) => onCoverChange(e.target.files?.[0] || null)}
                />
                <FieldError name="cover_image" />
                <p className="text-xs text-gray-500 mt-2">
                  Max 2MB. Recommended: 800×800.
                </p>
              </div>

              <div>
                <div className="text-sm font-medium mb-2">Preview</div>
                <div className="w-full h-48 border rounded flex items-center justify-center overflow-hidden bg-gray-50">
                  {coverPreview ? (
                    <img
                      src={coverPreview}
                      alt="Cover preview"
                      className="w-full h-full object-cover"
                    />
                  ) : (
                    <span className="text-sm text-gray-500">No image</span>
                  )}
                </div>
              </div>
            </div>
          </section>

          {/* DESCRIPTION */}
          <section>
            <h2 className="text-sm font-semibold text-gray-900 mb-4">
              Description (HTML)
            </h2>

            <div>
              <label className="block text-sm font-medium">
                Description HTML
              </label>
              <textarea
                className="w-full border rounded px-3 py-2 min-h-[220px] font-mono text-sm"
                value={data.description_html}
                onChange={(e) => setData("description_html", e.target.value)}
                placeholder="<p>Write product details here...</p>"
              />
              <FieldError name="description_html" />
              <p className="text-xs text-gray-500 mt-2">
                This renders on frontend using <code>dangerouslySetInnerHTML</code>.
                Don’t paste garbage scripts here.
              </p>
            </div>
          </section>

          {/* SEO */}
          <section>
            <h2 className="text-sm font-semibold text-gray-900 mb-4">
              SEO Fields
            </h2>

            <div className="grid md:grid-cols-2 gap-4">
              <div>
                <label className="block text-sm font-medium">Meta Title</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.meta_title}
                  onChange={(e) => setData("meta_title", e.target.value)}
                  placeholder="BCOC-131 Solved Assignments | IGNOU"
                />
                <FieldError name="meta_title" />
              </div>

              <div>
                <label className="block text-sm font-medium">Canonical URL</label>
                <input
                  type="text"
                  className="w-full border rounded px-3 py-2"
                  value={data.canonical_url}
                  onChange={(e) => setData("canonical_url", e.target.value)}
                  placeholder="https://www.unnatieducations.com/materials/..."
                />
                <FieldError name="canonical_url" />
              </div>

              <div className="md:col-span-2">
                <label className="block text-sm font-medium">
                  Meta Description
                </label>
                <textarea
                  className="w-full border rounded px-3 py-2 min-h-[100px]"
                  value={data.meta_description}
                  onChange={(e) => setData("meta_description", e.target.value)}
                  placeholder="Short description for search engines..."
                />
                <FieldError name="meta_description" />
              </div>
            </div>
          </section>

          {/* SUBMIT */}
          <div className="pt-2">
            <button
              disabled={processing}
              className="bg-blue-600 text-white px-4 py-2 rounded"
            >
              {processing ? "Updating..." : "Update Product"}
            </button>
          </div>
        </form>
      </div>
    </AdminLayout>
  );
}
