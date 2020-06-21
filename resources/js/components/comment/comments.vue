<template>
<div>
    <comment v-for="comment in content" :key="comment.id" :data="comment"></comment>
</div>
    
</template>
<script>
import comment from './comment'
export default {
    props:['comments'],
    data(){
        return{
            content:this.comments
        }
    },
    components:{comment},
    created(){
        this.listen()
    },
    methods:{
        listen(){
            EventBus.$on('newComment',(comment) => {
                this.content.unshift(comment)

            })
        }
    }
    
}
</script>