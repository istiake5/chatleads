<template>
    <div>
        <vue-simplemde v-model="body" ref="markdownEditor" />
        <v-btn dark color="green" @click.prevent="submit">Done</v-btn>
    </div>
</template>
<script>
export default {
    props:['movieSlug'],
    data(){
        return {
            body:''
        }
    },
    methods:{
        submit(){
            axios.post(`/api/movie/${this.movieSlug}/comment`,{body:this.body})
            .then(res =>{
                this.body = null
                EventBus.$emit('newComment', res.data.comment)
                window.screenTo(0,0)
            })
        }
    }
    
}
</script>