const animateCircle = t => {
    const {
        percentage: e,
        onScroll: c,
        speed: o,
        element: i,
        size: n,
        background_clr: a,
        color: r,
        stroke_width: h
    } = t, l = Math.ceil(document.body.scrollHeight - window.innerHeight);
    let s = i[0];
    ctx = s.getContext("2d"), s.width = 2 * n + h, s.height = 2 * n + h;
    let d = s.width / 2,
        x = s.height / 2,
        g = 0;
    const m = t => {
        (c ? (g = Math.floor(t / l * 360), Math.floor(t / l * 100)) : (g += o) / 360 * 100) <= e ? (ctx.clearRect(0, 0, s.width, s.height), ctx.beginPath(), ctx.lineWidth = h, ctx.arc(d, x, n, 0, 2 * Math.PI), ctx.strokeStyle = a, ctx.stroke(), ctx.closePath(), ctx.beginPath(), ctx.lineWidth = h, ctx.strokeStyle = r, ctx.arc(d, x, n, 0, 2 * Math.PI / 360 * g), ctx.stroke(), ctx.closePath(), c || requestAnimationFrame(m)) : c || cancelAnimationFrame(m)
    };
    c || requestAnimationFrame(m), c && (m(window.pageYOffset), document.addEventListener("scroll", (() => {
        const t = Math.ceil(window.pageYOffset);
        m(t)
    })))
};
