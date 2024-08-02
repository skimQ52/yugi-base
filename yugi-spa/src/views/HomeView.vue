<template>
  <div class="about">
    <YugiTable :cards="cards"></YugiTable>
  </div>
</template>

<style>
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
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
  },
};
</script>