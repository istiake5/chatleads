<template>
<v-card>
    <v-container fluid>
      <v-card-title>
        <div>
          <div class="headline">{{data.name}}</div>
          <span class="grey--text">{{data.user}} said {{data.created_at}}</span>
        </div>
        <v-spacer></v-spacer>
        <v-btn color="teal">{{data.comments_count}} Replies </v-btn>
       
      </v-card-title>
      <v-card-text v-html="description"></v-card-text>
     
    </v-container>
  </v-card>
    
</template>
<script>
export default {
    props:['data'],
    computed:{
      description(){
        return md.parse(this.data.description)
      }
    }
}
</script>