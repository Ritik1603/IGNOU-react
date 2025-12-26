import { useEffect, useState } from "react";

export default function Counter({ to, suffix = "" }) {
    const [count, setCount] = useState(0);

    useEffect(() => {
        let start = 0;
        const duration = 1200;
        const step = Math.ceil(to / (duration / 16));

        const interval = setInterval(() => {
            start += step;
            if (start >= to) {
                start = to;
                clearInterval(interval);
            }
            setCount(start);
        }, 16);

        return () => clearInterval(interval);
    }, [to]);

    return <span>{count}{suffix}</span>;
}
