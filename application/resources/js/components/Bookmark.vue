<template>
    <div>Bookmark [id: {{ this.id }}]</div>
</template>

<script lang="ts">
import { Vue, Component } from 'vue-property-decorator';

const BookmarkProps = Vue.extend({
    props: {
        id: String,
        title: String,
        url: String,
    }
});

@Component
export default class Bookmark extends BookmarkProps {
    mounted() {
        console.log('mounted bookmark');
    }
}
</script>
