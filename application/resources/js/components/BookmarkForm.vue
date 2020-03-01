<template>
<form @submit="checkForm">
    <input type="text" />
    <input type="submit"/>
</form>
</template>

<script lang="ts">
import { Vue, Component } from 'vue-property-decorator';

const BookmarkFormProps = Vue.extend({
    props: {
        userId: String,
        action: String,
    }
});

@Component
export default class BookmarkForm extends BookmarkFormProps {
    user: string = '';

    checkForm(e: Event) {
        e.preventDefault();
        console.log('check form', this.userId);
        // validate
    }
}
</script>
