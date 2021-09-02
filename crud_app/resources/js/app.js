//import axios
import axios from 'axios';

// Require Vue
window.Vue = require('vue').default;
window.axios = axios;

// Register Vue Components
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
});