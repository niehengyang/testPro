/* VueJs 通用基础组件 */
/**
 *
 * 导入Vue 及 Vue Router
 *
 */
window.Vue = require('vue'); //引入Vue

import VueRouter from 'vue-router'; //引入vue-router
Vue.use(VueRouter); //使用vue-router

/**
 *
 * 导入ElementUI
 *
 */
import ElementUI from 'element-ui'; //引入element-ui
import 'element-ui/lib/theme-chalk/index.css'; //引入element-ui样式文件
Vue.use(ElementUI); // 使用element-ui

import Home from './Home.vue' // 引入App最外层页面组件

const router = new VueRouter({ // 定义VueRouter路由对象
    mode: 'hash', // 前端路由模式为/#/
    routes: [  // 定义前端路由
        {
            path: '/',
            component: Home
        }
    ]
});

new Vue(Vue.util.extend({router}, Home)).$mount('#home');