require('./bootstrap');

import Vue from 'vue'

Vue.component('Quiz', require('./components/Quiz').default);

Vue.component('question', require('./components/partials/Question').default);

new Vue({
    el: '#app',

    data() {
        return {
            userMenuOpen: false
        }
    }
});
