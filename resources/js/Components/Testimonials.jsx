import { useEffect, useState } from "react";

const testimonials = [
  { name: "Rahul", text: "Unnati made IGNOU simple for me." },
  { name: "Priya", text: "Assignments saved my semester!" },
  { name: "Amit", text: "Fast support and accurate answers." },
];

export default function Testimonials() {
    const [i, setI] = useState(0);

    useEffect(() => {
        const t = setInterval(() => {
            setI((p) => (p + 1) % testimonials.length);
        }, 4000);
        return () => clearInterval(t);
    }, []);

    return (
        <div className="max-w-xl mx-auto text-center transition-all">
            <p className="text-lg italic">“{testimonials[i].text}”</p>
            <p className="mt-3 font-semibold">— {testimonials[i].name}</p>
        </div>
    );
}
