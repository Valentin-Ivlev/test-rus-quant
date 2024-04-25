<template>
    <div class="container">
        <div class="col-6 offset-3 shadow rounded-3 mt-5 p-5 bg-white">
            <form @submit.prevent="submitFeedback">
                <div class="row">
                    <div class="col-6">
                        <label for="name">Имя</label>
                        <input class="form-control" v-model="name" id="name" type="text" required>
                    </div>
                    <div class="col-6">
                        <label for="tel">Телефон</label>
                        <input class="form-control" v-model="phone" id="tel" type="tel" required>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="message">Сообщение</label>
                    <textarea class="form-control" v-model="message" id="message" required></textarea>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Отправить</button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            phone: '',
            message: '',
        };
    },
    methods: {
        async submitFeedback() {
            try {
                await axios.post('/feedback', {
                    name: this.name,
                    phone: this.phone,
                    message: this.message,
                });
                alert('Сообщение успешно отправлено');
                this.resetForm();
            } catch (error) {
                console.error(error);
                alert('Ошибка при отправке формы обратной связи');
            }
        },
        resetForm() {
            this.name = '';
            this.phone = '';
            this.message = '';
        },
    },
};
</script>
