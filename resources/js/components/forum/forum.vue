<template>
<v-container>
    <v-layout>
        <v-flex>
            <movie v-for="movie in movies" :key="movie.path" :data="movie"></movie>
        </v-flex>
    </v-layout>
</v-container>
    
</template>
<script>
import movie from './movie'
export default {
    data(){
        return {
            movies:{}
        }
    },
    components:{movie},
    created(){

        axios.get('/api/movie')
        .then(res => this.movies = res.data.data)
        .catch(error => console.log(error.response.data))
        
    }
    
}
</script>