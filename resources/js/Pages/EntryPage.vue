<template>
  <div class="entry-card">
    <img :src="entry.photo1_link" :alt="entry.alt" />
    <h2>{{ entry.alt }}</h2>
    <p>Название: {{ entry.name }}</p>
    <a :href="`/entries/`">Вернуться к списку объявлений</a>
  </div>
</template>

<script>
export default {
  props: {
    entry: Object,
  },
 };
</script>

<style>
.entry-card {
  text-align: center;
}

.entry-card img {
  max-width: 100%;
  height: auto;
}

.entry-card h2 {
  margin: 10px 0;
}
</style>