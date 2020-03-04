<template>
  <div>
    <form @submit="checkForm">
      <div>
        <label for="url">URL</label>
        <input type="text" id="url" v-model="url" />
      </div>
      <div>
        <label for="title">Title</label>
        <input type="text" id="title" v-model="title" />
      </div>
      <input type="submit" value="Go" />
    </form>
  </div>
</template>

<script lang="ts">
import { Vue, Component } from "vue-property-decorator";
import axios from "axios";

const BookmarkFormProps = Vue.extend({
  props: {
    userToken: String,
    action: String
  }
});

@Component
export default class BookmarkForm extends BookmarkFormProps {
  url: string = "";
  title: string = "";

  checkForm(e: Event) {
    e.preventDefault();
    console.log("check form", this.userToken);
    // validate
    this.submit();
  }

  submit() {
    const url = `${this.$props.action}?api_token=${this.$props.userToken}`;
    axios.post(url, {
      title: this.title,
      url: this.url
    });
  }
}
</script>
