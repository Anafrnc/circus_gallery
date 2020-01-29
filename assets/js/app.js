// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

import Vue from 'vue'
import App from './App.vue'

new Vue({
    el: "#app",
    component: {App}
    }
);