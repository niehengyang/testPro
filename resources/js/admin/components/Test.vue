<template>
    <div>
        <div>hahahhahahah!!!!!!!</div>
        <el-button type="primary" @click="toLogout">退出登录</el-button>
    </div>
</template>

<script>
    export default {
        name: "Test",
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