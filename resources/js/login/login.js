require("../bootstrap");

/**
 * 如果用户已经有Token则跳转到管理网站中
 */
import TokenFactory from "../utils/tokenfactory";
if(TokenFactory.getToken()){
    window.location.href = "/admin/";
}

import LoginForm from './Login.vue'

new Vue(Vue.util.extend({},LoginForm)).$mount('#login');