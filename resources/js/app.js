require('./bootstrap');

import Vue from 'vue'

Vue.component('Quiz', require('./components/Quiz').default);

Vue.component('question', require('./components/Question').default);

new Vue({
    el: '#app'
});
