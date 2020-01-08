<template>
    <div class="page">
        <div class="login-form-box">
            <el-form ref="adminLoginForm" :model="adminLoginForm" label-width="80px" class="login-form">
                <el-form-item label="账号名" prop="email">
                    <el-input class="username-input" v-model="adminLoginForm.email"  placeholder="请输入邮箱"></el-input>
                </el-form-item>
                <el-form-item label="密码" prop="password">
                    <el-input class="password-input" type="password" v-model="adminLoginForm.password" placeholder="请输入密码"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="onLoginSubmit">立即登陆</el-button>
                    <el-button>取消</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>
<script>
    export default {
        // name: "Login"
        data(){
            return{
                adminLoginForm: {email: '',password: ''},
            }
        },
        created() {

        },
        methods:{
            onLoginSubmit(){
                axios.post('/admin/login',this.adminLoginForm)
                    .then((response)=> {
                        window.location.href = '/admin/';
                        this.$message.success('登录成功！')
                    })
                    .catch((error)=> {
                        this.$message.success('登录失败！')
                    })
            }
        }
    }
</script>

<style scoped lang="sass">
    .page
        width: 100%
        height: 100%
        .login-form-box
            padding: 30px
            width: 360px
            height: 300px
            .login-form
                .username-input
                    width: 360px
                .password-input
                    width: 360px
</style>