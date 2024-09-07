<template>
  <div class="gallery">
    <div class="button-container">
      <button @click="showModal">Добавить объявление</button>
    </div>
    <div class="grid">
      <div v-for="entry in entries" :key="entry.id" class="grid-item" @click="goToEntryCard(entry.id)">
        <div> Фото 1: <img :src="entry.photo1_link" :alt="entry.photo1_link" /> </div>
        <div> Фото 2: <img :src="entry.photo2_link" :alt="entry.photo2_link" /> </div>
        <div> Фото 3: <img :src="entry.photo3_link" :alt="entry.photo3_link" /> </div>
        <div> Название: {{ entry.name }} </div>
        <div> Цена: {{ entry.price }} </div>
        <div> Описание: {{ entry.description }} </div>
        <div> </div>
      </div>
    </div>
    <ImageModal v-if="isModalVisible" @close="isModalVisible = false" @add-image="addImage" />
  </div>
</template>

<script>
import { router } from '@inertiajs/vue3';
import ImageModal from '../Components/ImageModal.vue'
export default {
  components: { ImageModal },
    data() {
    return {
      isModalVisible: false,
    }
  },
  props: {
    entries: Array
  },
  methods: {
 //   async fetchImages() {
  //    const response = await this.$inertia.get('/api/entries');
  //    this.entries = response.data;
  //  },
    showModal() {
      this.isModalVisible = true;
    },
    goToEntryCard(EntryId) {
      router.visit(`/entries/${EntryId}`); // Переход на страницу карточки изображения
    },
   // addEntry(newEntry) {
  //    this.entries.push(newEntry);
   //   this.isModalVisible = false;
   // },
  },
}
</script>

<style>
.gallery {
  margin: 20px;
  text-align: center;
}

.button-container {
  margin-bottom: 20px;
}

.button-container button {
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
}

.button-container button:hover {
  background-color: #0056b3;
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  gap: 10px;
}

.grid-item {
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 2px 16px rgba(0, 0, 0, 0.1);
}

.grid-item img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 8px;
}
</style>