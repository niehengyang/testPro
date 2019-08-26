require('../bootstrap');
window.Vue = require('vue') //引入Vue

import VueRouter from 'vue-router' //引入vue-router
Vue.use(VueRouter) //使用vue-router
import ElementUI from 'element-ui' //引入element-ui
import 'element-ui/lib/theme-chalk/index.css' //引入element-ui样式文件
Vue.use(ElementUI) // 使用element-ui

import Admin from './Admin.vue' // 引入App最外层页面组件

import HelloAdmin from './components/Test.vue' //引入hello组件
import Home from './components/Home.vue' //引入home组件
import Video from "./video/testVideoPlay.vue"//测试视频播放器
import SmartHome from "./home/SmartHome.vue"//智能监测项目首页

const router = new VueRouter({ // 定义VueRouter路由对象
    mode: 'hash', // 前端路由模式为/#/
    routes: [  // 定义前端路由
        {
            path: '/',
            component: SmartHome,
        },
        {
            path: '/home',
            component: Home
        }

    ]
});

new Vue(Vue.util.extend({router}, Admin)).$mount('#adminindex') // 使用前面定义好的前端路由，以Admin.vue作为最外层的Vue组件，启动Vue编译，并把输出挂在到id为admin的DOM元素上