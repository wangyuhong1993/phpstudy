<template>
  <div class="app-container">
    <component v-bind:is="currentView" ></component>
  </div>
</template>

<script>
import list from './list';
import add from './add';
import edit from './edit';

export default {
  data() {
    return {
      currentView:list,
    }
  },
  components:{
    list,
    add,
    edit
  },
  created() {

  },
  methods: {

  }
}
</script>
