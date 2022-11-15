import Vue from 'vue';
import App from './App.vue'
import axios from 'axios';
import './index.css'


window.axios = axios.create({
  baseURL: `${process.env.VUE_APP_BE_ENDPOINT || 'http://localhost:8000'}/api`
});
Vue.config.productionTip = false

Vue.prototype.$axios = window.axios;

new Vue({
  render: h => h(App),
}).$mount('#app')
