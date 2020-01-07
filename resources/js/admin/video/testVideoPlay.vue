<template>
   <div class="playerWrap">
       <d-player ref="player" :options="options" style="width: 1000px;height: 500px"></d-player>
   </div>
</template>

<script type="text/ecmascript-6">
    import dPlayer from 'vue-dplayer'
    import 'vue-dplayer/dist/vue-dplayer.css'
    import 'vue-dplayer/dist/vue-dplayer.js'
    import 'vue-dplayer/dist/vue-dplayer.min.js'

    export default {
        name: 'in-video',
        props: {
            source: {
                type: String,
                default: ''
            }
        },
        data () {
            return {
                player: null,
                options: {
                    video: {
                        live: true,
                        danmaku: true,
                        url: 'rtmp://112.35.25.250:1935/vod/openUrl/Mr6hKq4?beginTime=20191104T161100&endTime=20191105T161100&playBackMode=1',
                        type: 'hls'
                    },
                    contextmenu: [
                        {}
                    ]
                }
            }
        },
        mounted() {
            this.player = this.$refs.player.dp
        },
        created() {
            this._setVideoUrl(this.source)
        },
        methods: {
            // 设置视频播放路径
            _setVideoUrl (url) {
                this.player.switchVideo({
                    url: url
                })
            }
        },
        components: {
            dPlayer
        }
    }
</script>

<style lang="sass" scoped>
</style>