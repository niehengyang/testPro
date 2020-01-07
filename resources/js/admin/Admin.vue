<template>
    <div class="page-wrap">
        <div>这是我的主页最外层</div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "app",
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
</style>