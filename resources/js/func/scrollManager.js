function scrollContainer() {
    return {
        mouseStateIsDown: false,
        startX: 0,
        scrollLeft: 0,
        init() {
            this.$refs.container.addEventListener('mousedown', this.mouseDown.bind(this));
            this.$refs.container.addEventListener('mouseleave', this.mouseLeave.bind(this));
            this.$refs.container.addEventListener('mouseup', this.mouseUp.bind(this));
            this.$refs.container.addEventListener('mousemove', this.mouseMove.bind(this));
        },
        mouseDown(event) {
            this.mouseStateIsDown = true;
            this.startX = event.pageX - this.$refs.container.offsetLeft;
            this.$refs.container.style.cursor = 'grabbing';
            this.scrollLeft = this.$refs.container.scrollLeft;
        },
        mouseLeave() {
            this.$refs.container.style.cursor = 'grab';
            this.mouseStateIsDown = false;
        },
        mouseUp() {
            this.$refs.container.style.cursor = 'grab';
            this.mouseStateIsDown = false;
        },
        mouseMove(event) {
            if (!this.mouseStateIsDown) return;
            event.preventDefault();
            const x = event.pageX - this.$refs.container.offsetLeft;
            const walk = (x - this.startX) * 1.5; //scroll-fast
            this.$refs.container.scrollLeft = this.scrollLeft - walk;
            console.log(walk);
        }
    }
}

document.addEventListener("contextmenu", (event) => {
    event.preventDefault();
});
