<template>
    <div>
        <div>你好，欢迎来到我的主页</div>
        <el-button @click="toLoginPage">前往登录</el-button>
    </div>
</template>

<script>
    export default {
        name: "home",
        data(){
            return{

            }
        },
        methods:{
            //跳转到登录
            toLoginPage(){
                window.location.href = '/login'
            }
        }
    }
</script>

<style scoped>

</style>