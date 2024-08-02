<template>
  <ag-grid-vue
      :row-data="cards"
      :column-defs="colDefs"
      style="height: 500px; width: 100em;"
      class="ag-theme-quartz"
  >
  </ag-grid-vue>
</template>

<script>

import {AgGridVue} from "ag-grid-vue3";

export default {
  components: {AgGridVue},
  props: {
    cards: {
      required: true,
      type: Array,
    },
  },
  computed: {
    colDefs() {
      return [
        {
          field: 'name',
          headerName: 'Card Name',
          flex: 1,
        },
        {
          field: 'race',
        },
        {
          field: 'type',
        },
        {
          field: 'attribute',
        },
        {
          field: 'actions', //TODO: cell renderer
        },
      ];
    },
  },
  methods: {
  },
};
</script>

<style>
.ag-header-cell.text-center {
  .ag-header-cell-label {
    justify-content: center;
  }
}
</style>
