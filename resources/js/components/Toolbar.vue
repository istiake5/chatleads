<template>

    <v-toolbar dense>
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Chatleads</v-toolbar-title>

      <v-spacer></v-spacer>
      <router-link to="/forum">
      <v-btn> Forum</v-btn>
      </router-link>
      <v-btn>Ask Question</v-btn>
      <v-btn>Category</v-btn>
      <router-link to="/login">
      <v-btn>Login</v-btn>
      </router-link>
      
    </v-toolbar>
  
</template>
<script>
export default {
    
}
</script>
<style scoped>

</style>