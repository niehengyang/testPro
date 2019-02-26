<template>
    <div class="home-page">
        <!--<img class="home-bg" src="/bgimg/banner.png">-->
        <div class="home-bg">
            <el-carousel class="carousel-bg" trigger="click" arrow="never">
                <el-carousel-item class="carousel-item" v-for="item in homeBgImg" :key="item.bg_id">
                    <el-row class="mid-counter">
                        <el-row class="left-box">
                            <div class="word-box">
                                <span class="app-name">{{item.app_title}}</span>
                                <span class="app-desc">{{item.app_desc}}</span>
                            </div>
                        </el-row>
                    </el-row>
                    <img class="homebg-img" :src="item.img_url">
                </el-carousel-item>
            </el-carousel>
        </div>
        <el-row class="top-nav">
            <el-row class="left-counter">
                <el-row class="left-item">
                    <img class="logo-img" src="/bgimg/logo.png">
                    <span class="logo-word">工业检测系统</span>
                </el-row>
                <el-row class="vertical-bar"></el-row>
                <el-row class="right-item">
                    <img class="cm-img" src="/bgimg/chinamobile.png">
                </el-row>
            </el-row>
            <el-row class="right-counter">
                <el-row class="midi-item">
                    <el-button class="home-btn" type="text" @click="toLoginPage">您好,请登录</el-button>
                </el-row>
            </el-row>
        </el-row>
        <el-row class="business-monitoring-box">
            <el-row class="business-monitoring-title">
                <h3 class="monitoring-title">提供八类业务监测</h3>
                <div class="stripes"></div>
            </el-row>
            <el-row class="business-monitoring-counter">
                <el-col class="business-item" v-for="item in businessMonitoringArray" :key="item.business_id">
                    <img class="business-img" :src="item.business_img">
                    <span class="business-name">{{item.business_name}}</span>
                </el-col>
            </el-row>
        </el-row>
        <el-row class="frist-advertising">
            <img src="/bgimg/八般武艺.png">
            <div class="first-advertising-title">
                <span>八般武艺，集于一身</span>
            </div>
        </el-row>
        <el-row class="basic-ability-box">
            <el-row class="basic-ability-title">
                <h3 class="ability-title">平台基础能力</h3>
                <div class="stripes"></div>
            </el-row>
            <el-row class="basic-ability-counter">
                <el-col class="ability-item" v-for="item in basicAbilityArray" :key="item.ability_id">
                    <img class="ability-img" :src="item.ability_img">
                    <span class="ability-name">{{item.ability_name}}</span>
                    <span class="ability-desc">{{item.ability_desc}}</span>
                </el-col>
            </el-row>
        </el-row>
        <el-row class="second-advertising">
            <img src="/bgimg/不再犹豫.png">
            <div class="second-advertising-title">
                <span>不再犹豫</span>
                <el-button class="join-btn">即刻体验</el-button>
            </div>
        </el-row>
        <el-row class="footer-box">
            <div class="top-box">
                <div class="text-box">
                    <div class="text-box-item">
                        <span class="bottom-text">产品介绍</span>
                        <div class="small-vertical-bar"></div>
                        <span class="bottom-text">常见问题</span>
                        <div class="small-vertical-bar"></div>
                        <span class="bottom-text">关于我们</span>
                    </div>
                </div>
                <div class="trademark-box">
                    <div class="left-item">
                        <div class="contact-way">
                            <span>400-1100-868</span>
                        </div>
                        <div class="contact-way">
                            <span>zqservice@chinamobile.com</span>
                        </div>
                    </div>
                    <div class="right-item">
                        <img class="qrcode-img" src="/bgimg/qrcode.png">
                    </div>
                </div>
            </div>
            <div class="horizontal-line"></div>
            <div class="bottom-box">
                <span class="copyright">中国移动通信集团公司政企客户分公司京ICP备05002571 ©2018 中国移动通信集团 版权所有</span>
            </div>
        </el-row>
        <v-goTop></v-goTop>
    </div>
</template>

<script>
    import goTop from "../../components/gotop.vue";
    export default {
        name: "home",
        data(){
            return{
                homeBgImg:[
                    {bg_id: 1,img_url: '/bgimg/banner.png',app_title: '中国移动-工业监测平台',app_desc: '通过“轻方案”模式降低企业智能化改造成本门槛'}
                ],
                businessMonitoringArray: [
                    {business_id: 1,business_img: '/bgimg/生产检测.svg',business_name: '生产监测'},
                    {business_id: 2,business_img: '/bgimg/能源监测.svg',business_name: '能源监测'},
                    {business_id: 3,business_img: '/bgimg/缺陷检测.svg',business_name: '缺陷监测'},
                    {business_id: 4,business_img: '/bgimg/环境监测.svg',business_name: '环境监测'},
                    {business_id: 5,business_img: '/bgimg/冷链检测.svg',business_name: '冷链监测'},
                    {business_id: 6,business_img: '/bgimg/安全监测.svg',business_name: '安全监测'},
                    {business_id: 7,business_img: '/bgimg/仓储监测.svg',business_name: '仓储监测'},
                    {business_id: 8,business_img: '/bgimg/排放监测.svg',business_name: '排放监测'}
                ],
                basicAbilityArray:[
                    {ability_id: 1,ability_img: '/bgimg/能力开放.svg',ability_name: '能力开放',ability_desc: '平台将一些基础能力进行整合，提供API接口便于用户进行对接，同时提供能力的编排、转换、调用与跟踪服务'},
                    {ability_id: 2,ability_img: '/bgimg/可视化开发.svg',ability_name: '可视化开发',ability_desc: '提供丰富的表格、图表等可视化、模板化的数据展示组件，可供开发者可直接使用，无需"重复造轮子"，可以专注于核心业务研发'},
                    {ability_id: 3,ability_img: '/bgimg/多协议适配.svg',ability_name: '多协议适配',ability_desc: '支持主流物联网协议解析，包括MQTT、Modbus、CoAP、JT/808等，助力客户轻松接入各类行业终端'},
                    {ability_id: 4,ability_img: '/bgimg/设备管理.svg',ability_name: '设备管理',ability_desc: '实时监控管理接入设备的状态与数据属性，提供设备监控、设备生命周期管理、远程控制、设备档案管理等功能'},
                    {ability_id: 5,ability_img: '/bgimg/数据服务.svg',ability_name: '数据服务',ability_desc: '支持时间序列数据的写入、查询和删除，并可以设置数据时效，同时提供数据建模、知识挖掘、实时分析、关联分析、智能推荐等能力'},
                    {ability_id: 6,ability_img: '/bgimg/系统集成.svg',ability_name: '系统集成',ability_desc: '集成地图、短彩信及邮件服务，提供业务平台集成能力，方便与第三方应用、企业信息系统的快速集成'},
                ]
            }
        },
        created() {

        },
        components:{
            'v-goTop': goTop
        },
        methods:{
            //跳转到登录页
            toLoginPage() {
                window.location.href = '/login'
            }
        }
    }
</script>

<style scoped lang="sass">
    .home-page
        width: 100%
        height: 100%
        overflow-x: hidden
        .home-bg
            position: absolute
            width: 100%
            /*width: 130%*/
            height: 560px
            /*left: -16%*/
            .carousel-bg
                width: 100%
                height: 100%
                .el-carousel__container
                    width: 100%
                    height: 100%
                    .carousel-item
                        width: 130%
                        height: 560px
                        left: -16%
                        .mid-counter
                            position: absolute
                            margin-top: 90px
                            width: 100%
                            display: flex
                            flex-direction: row
                            z-index: 99
                            .left-box
                                width: 60%
                                height: 400px
                                display: flex
                                align-items: center
                                .word-box
                                    position: absolute
                                    width: 100%
                                    height: 100px
                                    text-align: center
                                    line-height: 50px
                                    display: block
                                    .app-name
                                        font-size: 40px
                                        color: #FFFFFF
                                        line-height: 48px
                                        display: block
                                    .app-desc
                                        font-size: 20px
                                        color: #FFFFFF
                                        display: block
                        .homebg-img
                            width: 100%
                            height: 100%
        .top-nav
            position: absolute
            top: 0
            width: 100%
            height: 60px
            padding: 0 40px 0 40px
            display: flex
            flex-direction: row
            z-index: 99
            .left-counter
                width: 50%
                height: 60px
                display: flex
                align-items: center
                align-content: center
                .left-item
                    text-align: left
                    display: flex
                    align-items: center
                    .logo-img
                        width: 32px
                        height: 32px
                        margin-right: 20px
                    .logo-word
                        font-size: 20px
                        color: #FFFFFF
                        text-align: left
                .vertical-bar
                    width: 3px
                    height: 14px
                    border-left: 1px solid #FFFFFF
                    margin: 0 16px 0 16px
                .right-item
                    display: flex
                    align-items: center
                    .cm-img
                        width: 67px
                        height: 21px
            .right-counter
                width: 50%
                height: 60px
                display: flex
                align-items: center
                justify-content: flex-end
                .midi-item
                    width: 84px
                    height: 60px
                    display: flex
                    align-items: center
                    align-content: center
                    .home-btn
                        width: 84px
                        height: 20px
                        line-height: 1px
                        font-size: 14px
                        color: #FFFFFF
                        text-align: right
        .business-monitoring-box
            width: 100%
            padding-top: 620px
            display: flex
            flex-direction: column
            align-items: center
            .business-monitoring-title
                width: 100%
                display: flex
                flex-direction: column
                align-items: center
                .monitoring-title
                    width: 100%
                    font-size: 24px
                    color: #373D41
                    text-align: center
                    letter-spacing: 1px
                .stripes
                    margin-top: 10px
                    width: 40px
                    height: 4px
                    background: #106AFF
                    border-radius: 100px
            .business-monitoring-counter
                width: 80%
                display: flex
                flex-wrap: wrap
                justify-content: center
                .business-item
                    width: 260px
                    height: 160px
                    display: flex
                    flex-direction: column
                    align-items: center
                    justify-content: center
                    align-content: flex-start
                    margin-top: 80px
                    .business-img
                        width: 80px
                        height: 80px
                        cursor: pointer
                    .business-name
                        width: 100%
                        text-align: center
                        margin-top: 30px
                        font-size: 20px
                        color: #373D41
                        cursor: pointer
        .frist-advertising
            width: 100%
            height: 400px
            margin-top: 80px
            display: flex
            flex-flow: column
            align-items: center
            align-content: center
            .first-advertising-title
                position: absolute
                width: 100%
                height: 100%
                display: flex
                align-items: center
                justify-content: center
                font-size: 40px
                color: #F2F2F2
                letter-spacing: 2px
        .basic-ability-box
            width: 100%
            margin-top: 80px
            display: flex
            flex-direction: column
            align-items: center
            .basic-ability-title
                width: 100%
                display: flex
                flex-direction: column
                align-items: center
                .ability-title
                    width: 100%
                    font-size: 24px
                    color: #373D41
                    text-align: center
                    letter-spacing: 1px
                .stripes
                    margin-top: 10px
                    width: 40px
                    height: 4px
                    background: #106AFF
                    border-radius: 100px
            .basic-ability-counter
                width: 80%
                display: flex
                flex-wrap: wrap
                margin-top: 20px
                align-items: center
                .ability-item
                    width: 300px
                    height: 300px
                    display: flex
                    padding: 20px
                    flex-direction: column
                    align-items: center
                    align-content: center
                    margin: 0 auto
                    .ability-img
                        width: 64px
                        height: 64px
                        cursor: pointer
                    .ability-name
                        margin-top: 30px
                        font-size: 20px
                        color: #373D41
                        text-align: center
                        cursor: pointer
                    .ability-desc
                        margin-top: 20px
                        font-size: 14px
                        color: #999999
                        text-align: justify
                        line-height: 22px
        .second-advertising
            width: 100%
            height: 400px
            margin-top: 80px
            display: flex
            flex-flow: column
            align-items: center
            align-content: center
            .second-advertising-title
                position: absolute
                width: 100%
                height: 100%
                display: flex
                align-items: center
                justify-content: center
                flex-direction: column
                font-size: 40px
                color: #F2F2F2
                letter-spacing: 2px
            .join-btn
                width: 200px
                height: 60px
                border: 1px solid #FFFFFF
                border-radius: 100px
                font-size: 20px
                color: #FFFFFF
                text-align: center
                margin-top: 36px
                background: transparent
        .footer-box
            width: 100%
            height: 166px
            background: #373D41
            .top-box
                width: 100%
                height: 126px
                display: flex
                flex-direction: row
                .text-box
                    width: 50%
                    height: 100%
                    padding: 30px 0 0 120px
                    .text-box-item
                        display: flex
                        flex-direction: row
                        align-items: center
                        .bottom-text
                            width: 56px
                            height: 20px
                            font-size: 14px
                            color: #F2F2F2
                            text-align: center
                            cursor: pointer
                        .small-vertical-bar
                            width: 0
                            height: 10px
                            border: 1px solid #FFFFFF
                            margin: 0 30px 0 30px
                .trademark-box
                    display: flex
                    flex-direction: row
                    align-items: center
                    justify-content: space-around
                    padding: 0 140px 0 140px
                    .left-item
                        width: 50%
                        text-align: right
                        padding-right: 50px
                        line-height: 40px
                        .contact-way
                            font-size: 14px
                            color: #FFFFFF
                            text-align: justify
                    .right-item
                        width: 50%
                        text-align: left
                        padding-left: 50px
                        .qrcode-img
                            width: 88px
                            height: 88px
            .horizontal-line
                width: 100%
                opacity: 0.2
                border: 1px solid #FFFFFF
            .bottom-box
                width: 100%
                padding-left: 120px
                .copyright
                    opacity: 0.5
                    font-size: 12px
                    color: #FFFFFF
                    text-align: center
</style>