<template>
   <div>
       <div class="box" id="box">hahah</div>
       <div>
           <el-button type="primiary" @click="handleClick">截图</el-button>
           <img src="/bgimg/password.svg" id="img_box"/>
       </div>
   </div>

</template>

<script>
    import html2canvas from 'html2canvas';
    export default {
        name: "testVideoPlay",
        data(){
            return{

            }
        },
        component:{
            'html2canvas' : html2canvas
        },
        methods:{
            //截图
            handleClick(){
                let video = document.querySelector('#box');//需要截图的video标签
                let canvas = document.createElement('canvas');
                canvas.width = '100px';
                canvas.height = '100px';
                var context = canvas.getContext("2d");
                context.scale(2,2);
                html2canvas(video).then(function(canvas) {
                    document.body.appendChild(canvas);
                });
                // html2canvas(video, {
                //     canvas:canvas,
                //     useCORS : true,
                //     onrendered : function(canvas) {
                //         console.log(canvas.toDataURL())
                //         // $("#img_box").attr('src',canvas.toDataURL());
                //     },
                //     allowTaint: true,
                // });
            }
        }
    }
</script>

<style scoped>

</style>