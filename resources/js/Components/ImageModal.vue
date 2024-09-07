<template>
  <div class="modal-overlay" @click.self="close">
    <div class="modal">
      <h2>Добавить объявление</h2>
      <br />
      <form @submit.prevent="submitForm">
        <label for="name"> Название объявления:</label>
        <input type="text" v-model="name" required />
        
        <label for="price"> Цена </label>
        <input type="text" v-model="price" required />

        <label for="photo1_link"> Фото 1 </label>
        <input type="text" v-model="photo1_link" required />

        <label for="photo2_link"> Фото 2 </label>
        <input type="text" v-model="photo2_link" required />

        <label for="photo3_link"> Фото 3 </label>
        <input type="text" v-model="photo3_link" required />

        <label for="description"> Текст описания объявления </label>
        <input type="text" v-model="description" required />
        
        <button class="submit-btn" type="submit">Добавить</button>
      </form>
      <button class="close-btn" @click="close">Закрыть</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      url: '',
      alt: ''
    }
  },
  methods: {
    close() {
      this.$emit('close');
    },
  //  async submitForm() {
  //    const newEntry = { id: "", url: this.url, alt: this.alt }; // Пример объекта
  //    this.$emit('add-entry', newEntry);
   //   this.url = '';
// this.alt = '';
  //  }
  }
}
</script>

<style>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal {
  background: white;
  width: 50%;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.modal h2 {
  margin-top: 0;
}

.modal input {
  width: 100%;
  margin: 10px 0;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.modal button {
  margin-right: 10px;
}

.submit-btn {
  background: #007bff;
  color: white;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
}

.close-btn {
  background: #dc3545;
  color: white;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
}
</style>