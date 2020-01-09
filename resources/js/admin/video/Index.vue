<template>
   <div class="page">
       <div class="">测试阿里播放器</div>
       <div class="camera-player">
           <!-- 引入vue-aliplayer播放器（直播）-->
           <vue-aliplayer @play="play"
                          @pause="pauuse"
                          ref="player"
                          v-if="videoOptions"
                          :useFlashPrism="true"
                          :autoplay="true"
                          :isLive="true"
                          :showBuffer="true"
                          showBarTime="5000"
                          controlBarVisibility="hover"
                          :source="videoOptions.source"
                          :height="player.height"
                          :cover="videoOptions.cover"></vue-aliplayer>
           <div></div>
       </div>
       <el-button @click="preVideo">上一个</el-button>
       <el-button @click="nextVideo">下一个</el-button>
   </div>
</template>

<script>
    import vueAliplayer from './components/aliplayer.vue';
    export default {
        name: "Index",
        data(){
            return{
                player: {
                    height: '500px'
                },
                videoOptions: false,
                videoList:[],
            }
        },
        components: {
            'vue-aliplayer': vueAliplayer
        },
        created(){

        },

        mounted(){
            this.initVideos();
            this.play()
        },
        methods:{

            //初始化加载
            initVideos(){
                axios.get('/video').then((res)=>{
                    console.log(res);
                    this.videoList = res.data;

                    this.videoOptions = {
                        cover: "",
                        source: res.data[0].url,
                        videoNum: 0
                    };
                });
            },

            //上一视频
            preVideo(){

            },

            //下一视频
            nextVideo(){

            },

            /***-------------------阿里播放器-----------------------**/

            play() {
                const player = this.$refs.player.instance;
                player && player.play();
            },
            pauuse(){
                const player = this.$refs.player.instance;
                player && player.play();
            }
        }
    }
</script>

<style scoped>
    .camera-player{
        width: 800px;
        height: 500px;
        padding: 20px;
    }
</style>