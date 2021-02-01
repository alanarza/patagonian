import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import router from './router';
import moment from 'moment';
import Vuesax from 'vuesax';

//Vue.config.devtools = false;

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'material-icons/iconfont/material-icons.css';
import 'vuesax/dist/vuesax.css';

Vue.use(VueAxios, axios);
Vue.use(Vuesax);

//Componentes estaticos de la aplicacion

Vue.component('home', require('./pages/home.vue').default);

new Vue({
    router
}).$mount('#app');
