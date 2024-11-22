class TabNavigation {
    constructor(wrapperClass, activeClass, options = null) {
        this.wrapperClass = wrapperClass;
        this.activeClass = activeClass;
        this.options = options;
    }

    activeSidenavLink() {
        if (this.wrapperClass) {
            // Get URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab') || this.options.defaultPage;

            // Hide all tab contents and remove active classes from all tab links
            this.wrapperClass.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            this.wrapperClass.querySelectorAll('.tab-link').forEach(el => el.classList.remove(this.activeClass));
            if (this.options.htmlAttribute?.qualifiedName) this.wrapperClass.querySelectorAll('.tab-link').forEach(el => el.removeAttribute(this.options.htmlAttribute?.qualifiedName))

            // Show the active tab content and add active class to the corresponding tab link
            this.wrapperClass?.querySelector(`#tab-${tab}`)?.classList.remove('hidden');
            if (this.activeClass) {
                this.wrapperClass?.querySelector(`#tabs-nav a[href="?tab=${tab}"]`)?.classList.add(this.activeClass)
            };
            if (this.options.htmlAttribute?.qualifiedName && this.options.htmlAttribute?.value) {
                this.wrapperClass.querySelector(`#tabs-nav a[href="?tab=${tab}"]`)?.setAttribute(this.options?.htmlAttribute.qualifiedName, this.options?.htmlAttribute?.value)
            }

            function multiple(wrapper, query_tab, query, activeClass) {
                if (tab === query) {
                    const element = wrapper?.querySelector(`#tabs-nav a[href="?tab=${query_tab}"]`);
                    element?.classList.add(activeClass)
                }
            }

            if (this.activeClass && this.activeClass.length > 0) {
                if (!this.options?.childrenPages?.length > 0) return
                for (let i = 0; i < this.options.childrenPages.length; i++) {
                    const pg = this.options.childrenPages[i];
                    multiple(this.wrapperClass, pg.wrapperPage, pg.page, this.activeClass);
                }
            }

        }
    }
}

export default TabNavigation;