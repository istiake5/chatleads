 
<template>
  <div>
    <show-movie  :data="movie"></show-movie>
    <v-container>
      <div class="mt-4">
        <router-link to="/login">Log In To Reply</router-link>
      </div>
    </v-container>
  </div>
</template>
<script>
import ShowMovie from "./showmovie";

export default {
  components: { ShowMovie},
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