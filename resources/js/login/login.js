require('../bootstrap');
window.Vue = require('vue') //引入Vue

import VueRouter from 'vue-router' //引入vue-router
Vue.use(VueRouter) //使用vue-router
import ElementUI from 'element-ui' //引入element-ui
import 'element-ui/lib/theme-chalk/index.css' //引入element-ui样式文件
Vue.use(ElementUI) // 使用element-ui

import Login from './Login.vue' // 引入App最外层页面组件

const router = new VueRouter({ // 定义VueRouter路由对象
    mode: 'hash', // 前端路由模式为/#/
    routes: [  // 定义前端路由
        {
            path: '/login',
            component: Login
        }
    ]
})

new Vue(Vue.util.extend({router}, Login)).$mount('#adminlogin')