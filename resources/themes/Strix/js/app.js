/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../Core/js/core.js');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('latest-blog-component', require('./sections/LatestBlogComponent.vue').default);
Vue.component('mailing-list-component', require('./sections/MailingListComponent.vue').default);
Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('blog-card-component', require('./components/BlogCardComponent.vue').default);
Vue.component('dropdown-component', require('./components/DropdownComponent.vue').default);
Vue.component('modal-component', require('./components/ModalComponent.vue').default);
Vue.component('tabs-component', require('./components/TabsComponent.vue').default);
Vue.component('tab-component', require('./components/TabComponent.vue').default);

Vue.prototype.$modal = {
    show(name, params = {}) {
        location.hash = name;
    },

    hide(name) {
        location.hash = '#';
    },
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    directive: {
        scroll: {
            inserted: function (el, binding) {
                let f = function (evt) {
                    if (binding.value(evt, el)) {
                        window.removeEventListener('scroll', f)
                    }
                };

                window.addEventListener('scroll', f)
            }
        }
    }
});
