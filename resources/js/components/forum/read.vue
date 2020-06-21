 
<template>
  <div>
    <show-movie  :data="movie" v-if="movie"></show-movie>
    <v-container>
      <comments :comments="movie.comments"></comments>
     <new-Comment :movieSlug = movie.slug></new-Comment>
    </v-container>
     
  </div>
</template>
<script>
import ShowMovie from "./showmovie";
import Comments from "../comment/comments";
import NewComment from "../comment/newComment";

export default {
  components: { ShowMovie,Comments,NewComment},
  data() {
    return {
      movie: null,
    };
  },
  created() {
    axios
        .get(`/api/movie/${this.$route.params.slug}`)
        .then(res => (this.movie = res.data.data));
  },
  
};
</script>
<style scoped>
</style>