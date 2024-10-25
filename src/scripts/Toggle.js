class Toggle {
    control; target; className; event;
    constructor(control, target, event = "click", className = "hidden") {
        this.control = control;
        this.target = target;
        this.event = event;
        this.className = className;
    }

    toggle() {
        this.control.addEventListener(this.event, () => {
            console.log("toggle")
            console.log({target:this.target})
            console.log({className:this.className})
            this.target.classList.contains(this.className) ? this.target.classList.remove(this.className) :
                this.target.classList.add(this.className)
        })
    }
}

export default Toggle;