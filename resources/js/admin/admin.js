require('../bootstrap');
window.Vue = require('vue') //引入Vue

import VueRouter from 'vue-router' //引入vue-router
Vue.use(VueRouter) //使用vue-router
import ElementUI from 'element-ui' //引入element-ui
import 'element-ui/lib/theme-chalk/index.css' //引入element-ui样式文件
Vue.use(ElementUI) // 使用element-ui

import Admin from './Admin.vue' // 引入App最外层页面组件

import HelloAdmin from './components/Test.vue' //引入hello组件

const router = new VueRouter({ // 定义VueRouter路由对象
    mode: 'hash', // 前端路由模式为/#/
    routes: [  // 定义前端路由
        {
            path: '/index',
            component: HelloAdmin,
        }
    ]
})

new Vue(Vue.util.extend({router}, Admin)).$mount('#adminindex') // 使用前面定义好的前端路由，以Admin.vue作为最外层的Vue组件，启动Vue编译，并把输出挂在到id为admin的DOM元素上