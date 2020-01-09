import Admin from '../Admin.vue' // 引入App最外层页面组件
import Test from "../components/Test.vue"//测试
import Aliplayer from "../video/Index.vue"//测试阿里播放器

const TestRouter = [  // 定义前端路由
    {
        path: '/',
        component: Admin,
    },
    {
        path: '/test',
        component: Test,
    },
    {
        path: '/aliplayer',
        component: Aliplayer
    }
    ];

export default TestRouter;