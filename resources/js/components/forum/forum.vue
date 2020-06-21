<template>
<v-container>
    <v-layout>
        <v-flex>
            <movie v-for="movie in movies" :key="movie.path" :data="movie"></movie>
            <div class="text-xs-center">
                <v-pagination v-model="meta.current_page" :length="meta.total" @input="changePage">

                </v-pagination>
            </div>
        </v-flex>
    </v-layout>
</v-container>
    
</template>
<script>
import movie from './movie'
export default {
    data(){
        return {
            movies:{},
            meta:{},
            
        }
    },
    components:{movie},
    created(){
        this.fetchMovies()
    },
    methods:{
        fetchMovies(page){
            let url = page ? `/api/movie?page=${page}`: '/api/movie'
            axios.get(url)
            .then(res => {
            this.movies = res.data.data
            this.meta = res.data.meta
            })
        .catch(error => console.log(error.response.data))

        },
        changePage(page){
            this.fetchMovies(page)
        }
    }
    
}
</script>