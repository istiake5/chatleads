<template>
    <v-container>
        <v-form @submit.prevent="create">
        <v-text-field label="Name" v-model="form.name" type="text" required></v-text-field>
          <vue-simplemde v-model="form.description" ref="markdownEditor" />
        <v-btn color="green" type="submit">Create</v-btn>


    </v-form>
    </v-container>
</template>
<script>
export default {
  
    data(){
        return {
            form :{
                name:null,
                description:null,
            },
            errors:{}
        }
    },
    methods:{
        create() {
      axios
        .post("/api/movie", this.form)
        .then(res => this.$router.push(res.data.path))
        .catch(error => this.errors = error.response.data.error);
    }
       
    }
    
}
</script>