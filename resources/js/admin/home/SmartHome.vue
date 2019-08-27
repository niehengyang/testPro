<template>
    <div class="home-page">
        <div class="hearder-box">
            <el-row class="sysimg-item">
               <div class="sys-logo-item"><img class="sys-logo" src="smartHomeImages/logo.png"></div>
                <div class="sys-title-item">工业监测平台</div>
            </el-row>

           <div class="menu-box">
               <el-menu
                       :default-active="activeIndex"
                       class="el-menu-demo"
                       mode="horizontal"
                       @select="handleSelect"
                       background-color="#070F21"
                       text-color="#fff"
                       active-text-color="#0079FE">
                   <el-menu-item index="1">数据中心</el-menu-item>
                   <el-menu-item index="2">应用模板</el-menu-item>
                   <el-menu-item index="3">设备管理</el-menu-item>
                   <el-menu-item index="4">AI模型管理</el-menu-item>
                   <el-submenu index="5">
                       <template slot="title" class="sys-meger">系统管理</template>
                       <el-menu-item index="5-1">用户管理</el-menu-item>
                       <el-menu-item index="5-2">角色管理</el-menu-item>
                       <el-menu-item index="5-3">日志管理</el-menu-item>
                       <el-menu-item index="5-4">能力开放管理</el-menu-item>
                   </el-submenu>
               </el-menu>
           </div>

            <div class="right-take-box">
                <div class="use-wizard" title="向导">使用向导</div>

                <div class="bell-logo">
                    <!--&lt;!&ndash;:is-dot="newAlarmArray.alarm_count > 0" (小红点方法)&ndash;&gt;-->
                    <el-badge :value="newAlarmArray.alarm_count == 0? false: newAlarmArray.alarm_count" style="line-height: 30px" class="item" :title="'您有'+newAlarmArray.alarm_count+'条告警未处理'">
                        <el-popover
                                placement="bottom"
                                width="360"
                                v-loading="toLoadAlarm"
                                trigger="click">
                            <div class="nofityWrapper">
                                <div class="nofityList" style="padding:16px 19px 4px 20px;">
                                    <div class="listItem" style="border-bottom: 1px solid #EBEEF5;height:62px;" v-for="(alarm,index) in newAlarmArray.topThireAlarm" :key="index">
                                        <div class="alarmTitle" style="font-size:14px;color:rgba(48, 49, 51, 0.85);letter-spacing:0;line-height:22px;">
                                            告警名称：{{alarm? alarm.alarm_title: '--'}}
                                        </div>
                                        <div class="taskName" style="font-size:14px;color:#106AFF;letter-spacing:0;line-height:22px;cursor: pointer">
                                            告警设备：{{alarm? alarm.alarm_conditions[0].device_info.device_name: '--'}}
                                        </div>
                                        <div class="dateTime" style="float:right;font-size:12px;color:#909399;letter-spacing:0;line-height:18px;">
                                            告警时间：{{alarm? alarm.created_at: '--'}}
                                        </div>
                                    </div>
                                    <div v-if="newAlarmArray.topThireAlarm.length == 0" style="font-size:16px;color:#909399;text-align:center;">
                                        暂无告警
                                    </div>
                                </div>
                                <div class="notifyCheckAll"
                                     style="font-size:12px;color:#909399;letter-spacing:0;line-height:18px;text-align:center;cursor: pointer"
                                     @click="toAlarmList">
                                    查看全部消息
                                </div>
                            </div>
                            <img slot="reference" width="30" src="smartHomeImages/bell.png" @click="getNewAlarms" alt="小铃铛图片">
                        </el-popover>
                    </el-badge>
                </div>

                <!--用户信息，退出登录-->
                <div class="userInfoWrapper">
                    <el-menu mode="horizontal"   background-color="#070F21"
                             text-color="#fff" class="userInfoMenu" :router="true">
                        <el-submenu index="">
                            <template slot="title">
                                <!--<i class="el-icon-user"></i>-->
                                <img class="user-logo" src="smartHomeImages/user.png">
                                <span class="user-name">导航一</span>
                            </template>
                            <el-menu-item index="/user/info/">用户信息</el-menu-item>
                            <el-menu-item index="#" @click="logoutConfirm">退出登录</el-menu-item>
                        </el-submenu>
                    </el-menu>
                </div>
            </div>
        </div>

        <!-- 退出登录确认提示框 -->
        <el-dialog title="提示" :visible.sync="logoutConfirmVisible" :show-close="false">
            <div style="text-align: center">
                <span>你确定要退出系统吗?</span>
            </div>
            <span slot="footer" class="dialog-footer">
                <el-button @click="logoutConfirmVisible = false">取消</el-button>
                <el-button type="primary" @click="logout">确 定</el-button>
            </span>
        </el-dialog>
    </div>
</template>
<style lang="sass">
    .el-menu--horizontal>.el-submenu .el-submenu__title
        height: 88px
        width: 150px
        font-size: 20px
        text-align: center
        line-height: 88px
        color: rgba(255,255,255,1)
        border-bottom: 2px solid transparent
        color: #909399
</style>
<script>
    export default {
        name: "SmartHome",
        data(){
            return{
                activeIndex: '1',

                //退出登录框
                logoutConfirmVisible: false,

                // 权限列表
                // permissionList: window.__permission_list__,
                // currentUserName: window.__login_user__.admin_name,
                // currentUserLever: window.__login_user__.admin_level,

                //最新告警信息
                newAlarmArray: {
                    alarm_count: 0,
                    topThireAlarm: []
                },
            }
        },
        created() {
        },
        methods:{
            //选择菜单
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            },

            logoutConfirm() {
                this.logoutConfirmVisible = true
            },

            // 退出登录
            logout() {
                TokenFactory.clearToken();
                window.location.href = '/admin/login';
            },

            //跳转到告警列表
            toAlarmList(){
                this.$router.push({path: '/alarm/'});
            }
        },
        mounted() {

        }
    }
</script>

<style scoped lang="sass">
    .home-page
        .hearder-box
            height: 88px
            background: rgba(7,15,33,1)
            text-align: center
            padding: 0 60px 0 60px
            .sysimg-item
                width: 220px
                height: 88px
                float: left
                text-align: center
                margin-right: 50px
                .sys-logo-item
                    width: 51px
                    height: 88px
                    margin-right: 10px
                    text-align: center
                    line-height: 120px
                    float: left
                    .sys-logo
                        width: 51px
                .sys-title-item
                    height: 88px
                    font-size: 22px
                    line-height: 88px
                    color: rgba(255,255,255,1)
                    letter-spacing: 2px
            .menu-box
                width: 750px
                height: 88px
                float: left
                .el-menu-demo
                    width: 750px
                    height: 88px
                    .el-menu-item
                        width: 150px
                        height: 88px
                        font-size: 20px
                        text-align: center
                        line-height: 88px
                        color: rgba(255,255,255,1)
                    .el-menu-item.is-active , .el-submenu.is-active
                        font-weight: bold
            .right-take-box
                width: 280px
                height: 88px
                float: right
                .use-wizard
                    width: 79px
                    height: 88px
                    line-height: 96px
                    float: left
                    font-size: 18px
                    font-weight: 300
                    color: rgba(255,255,255,1)
                    margin-right: 20px
                    cursor: pointer
                .bell-logo
                    width: 30px
                    height: 88px
                    float: left
                    line-height: 96px
                    margin-right: 20px
                    cursor: pointer
                .userInfoWrapper
                    width: 100px
                    height: 88px
                    float: left
                    .user-logo
                        width: 24px
                        height: 24px
                    .user-name
                        font-size: 18px
                        font-weight: 300
                        color: rgba(255,255,255,1)

    .fsf

</style>