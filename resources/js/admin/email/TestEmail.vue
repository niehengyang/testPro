<template>
    <div style="margin-top: 20px;margin-left: 40px">
        <el-button @click="sendEmail" type="success">点击发送邮件</el-button>
    </div>
</template>

<script>
    export default {
        name: "TestEmail",
        data(){
            return{

            }
        },
        methods:{
            sendEmail(){
               axios.post('/email').then((res)=>{
                    console.log('发送成功！');
                }).catch((error)=>{
                    console.log('发送失败！');
                })
            }
        }
    }
</script>

<style scoped>

</style>