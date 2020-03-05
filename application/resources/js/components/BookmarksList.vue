<template>
  <div>
    <button @click="refresh">Refresh</button>
    <div class="list">
      <bookmark
        v-for="bookmark in bookmarks"
        v-bind:key="bookmark.id"
        title="bookmark.title"
        url="bookmark.url"
      />
    </div>
  </div>
</template>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import api from "../api";
import Bookmark from "./Bookmark.vue";

const BookmarksListProps = Vue.extend({
  props: {
    bookmarksList: Array,
    refreshUrl: String
  }
});

@Component
export default class BookmarksList extends BookmarksListProps {
  bookmarks: Bookmark[] = [];

  onCreated() {
      this.bookmarks = this.$props.bookmarks;
  }
  async refresh() {
    const resp = await api.get(this.$props.refreshUrl);
    this.bookmarks = resp.data;
    console.log(resp);
  }
}
</script>
