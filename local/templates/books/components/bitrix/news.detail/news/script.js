(() => {
    const vps = document.querySelectorAll('.cases-viewport');
    vps.forEach(vp => {
        vp.addEventListener('wheel', (e) => {
            if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                vp.scrollLeft += e.deltaY;
                e.preventDefault();
            }
        }, {passive: false});

        let startX = null, startScrollLeft = 0;
        vp.addEventListener('pointerdown', (e) => {
            startX = e.clientX;
            startScrollLeft = vp.scrollLeft;
            vp.setPointerCapture(e.pointerId);
            vp.style.scrollSnapType = 'none';
        });
        vp.addEventListener('pointermove', (e) => {
            if (startX !== null) {
                const dx = e.clientX - startX;
                vp.scrollLeft = startScrollLeft - dx;
            }
        });
        const endDrag = () => {
            startX = null;
            vp.style.scrollSnapType = 'x proximity';
        };
        vp.addEventListener('pointerup', endDrag);
        vp.addEventListener('pointercancel', endDrag);
        vp.addEventListener('pointerleave', () => {
            if (startX !== null) endDrag();
        });
    });
})();