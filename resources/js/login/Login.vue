<template>
    <div class="login-form">
        <el-form ref="form" :model="adminLoginForm" label-width="80px">
            <el-form-item label="账号名" prop="admin_username">
                <el-input class="username-input" v-model="adminLoginForm.admin_username"  placeholder="请输入用户名"></el-input>
            </el-form-item>
            <el-form-item label="密码" prop="admin_password">
                <el-input class="password-input" v-model="adminLoginForm.admin_password" placeholder="请输入密码"></el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click="onLoginSubmit">立即登陆</el-button>
                <el-button>取消</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>
    export default {
        // name: "Login"
        data(){
            return{
                adminLoginForm: {admin_username: '',admin_password: ''},
            }
        },
        created() {

        },
        methods:{
            onLoginSubmit(){
                axios.post('/admin/login',this.adminLoginForm)
                    .then((response)=> {
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
    .login-form
        width: 360px
        height: 300px
        .username-input
            width: 360px
        .password-input
            width: 360px
</style>