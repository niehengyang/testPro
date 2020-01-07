
window.Vue = require('vue'); //引入Vue

/* VueJs 通用基础组件 */
require("../bootstrap");

/* 第三方通用组件 */
require("./bootstrap/3rd");

/* 项目自定义组件 */
require("./bootstrap/project");

/* 看门狗 */
require("./bootstrap/guard");


import VueRouter from 'vue-router' //引入vue-router
Vue.use(VueRouter); //使用vue-router

/* api统一管理 */
import apis from "../apis/index";
Vue.prototype.$api = apis;


import Admin from './Admin.vue' // 引入App最外层页面组件

/* 路由统一管理 */
import router from "./routers";

new Vue(Vue.util.extend({router}, App)).$mount('#app'); // 使用前面定义好的前端路由，以Admin.vue作为最外层的Vue组件，启动Vue编译，并把输出挂在到id为admin的DOM元素上