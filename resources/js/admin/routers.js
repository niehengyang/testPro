import VueRouter from 'vue-router';

/* 初始路由模块 */
let routeArray = [
    {
        path: '/',
        beforeEnter: (to, from, next) => {
          //跳转之前的操作
            next('/')
        }
    }
];

/**-----------------------------页面引入-------------------------------**/
import TestRouterArray from "./routers/test";


/**---------------------------路由打包-------------------------------**/
routeArray = routeArray.concat(TestRouterArray);



/* 实例化Vuejs路由对象 */
const routers = new VueRouter({
    mode: 'hash',
    routes: routeArray
});

export default routers;