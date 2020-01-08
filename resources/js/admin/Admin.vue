<template>
    <div class="page-wrap">
        <div>这是我的主页最外层</div>
       <div class="main-page-wrap">
           <router-view></router-view>
       </div>
    </div>
</template>

<script>
    export default {
        name: "admin",
        data(){
            return{

            }
        },
        created() {

        },
        methods: {

        }
    }
</script>

<style lang="sass" scoped>
    .page-wrap
        background: bisque
        .main-page-wrap
            padding: 20px
</style>