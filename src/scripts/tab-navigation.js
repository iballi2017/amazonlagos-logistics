class TabNavigation {
    constructor(activeClass, defaultPage = '', childrenPages = []) {
        this.defaultPage = defaultPage;
        this.activeClass = activeClass;
        this.childrenPages = childrenPages;
    }

    activeSidenavLink() {
        // Get URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab') || this.defaultPage; //'user-profile';

        // Hide all tab contents and remove active classes from all tab links
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-link').forEach(el => el.classList.remove(this.activeClass));

        // Show the active tab content and add active class to the corresponding tab link
        document.querySelector(`#tab-${tab}`)?.classList.remove('hidden');
        document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`)?.classList.add(this.activeClass);

        function multiple(query_tab, query, activeClass) {
            if (tab === query) {
                const element = document.querySelector(`#tabs-nav a[href="?tab=${query_tab}"]`);
                element?.classList.add(activeClass)
            }
        }
        if (this.activeClass.length > 0) {
            for (let i = 0; i < this.childrenPages.length; i++) {
                const pg = this.childrenPages[i];
                multiple(pg.wrapperPage, pg.page, this.activeClass);
            }
        }


    }
}

export default TabNavigation;