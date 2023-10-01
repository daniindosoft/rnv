require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'

Vue.use(VueRouter)

import routes from './router'

Vue.component('navigation', require('./components/Navigation').default);

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
}

Vue.use(VueProgressBar, options)

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});

