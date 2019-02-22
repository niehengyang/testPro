<template>
    <div>首页
        <el-button type="primary" @click="toLogout">退出登录</el-button>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        // name: "Admin",
        data(){
            return{

            }
        },
        created() {

        },
        methods:{
            //退出登录
            toLogout(){
                axios.post('/admin/logout')
                    .then((response)=> {
                        window.location.href = '/admin/'
                        this.$message.success('注销成功！')
                    })
                    .catch((error)=> {
                        this.$message.success('注销失败！')
                    })
            }
        }
    }
</script>

<style scoped>

</style>