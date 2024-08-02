<template>
  <div class="about">
    <YugiTable :cards="cards"></YugiTable>

    <div class="mt-32 flex">
      <input v-model="search" placeholder="Search API for a card" @change="handleInput" />
      <div class="mt-2">Value: {{ search }}</div>
    </div>
  </div>
</template>

<style>
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    flex-flow: column;
    align-items: center;
  }
}
</style>
<script>
import YugiTable from "@/components/YugiTable.vue";
import axios from 'axios';

export default {
  components: { YugiTable },
  data() {
    return {
      cards: [],
      search: '',
      debouncer: null,
    };
  },
  created() {
    this.load();
  },
  methods: {
    async load() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/card');

        this.cards = response.data;
      } catch (e) {
        console.error(
            'An error occurred while trying to load the list of cards'
        );
      }
    },
    debounce(func, delay) {
      clearTimeout(this.debounceTimeout);
      this.debounceTimeout = setTimeout(func, delay);
    },
    async handleSearch() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/search', {
          params: {
            name: this.search
          }
        });
        console.log(response.data)
      } catch (e) {
        console.error(
            'An error occurred while trying to load the list of cards'
        );
      }
    },
    handleInput() {
      this.debounce(() => {
        this.handleSearch();
      }, 500);
    },
  },
};
</script>