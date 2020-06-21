<template>
<div class="mt-3">
    <v-card>
        <v-card-title>
            <div class="headline">{{data.user}}</div>
            <div class="mi-2">Said {{data.created_at}}</div>
        </v-card-title>
        <v-card-text v-html="data.comment"></v-card-text>
    </v-card>
</div>
    
</template>
<script>
export default {
    props:['data']
}
</script>