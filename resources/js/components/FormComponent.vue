<template>
    <form class="col-6 mt-5" v-on:submit.prevent="newForm">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" v-model="name">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control" id="phone" v-model="phone">
        </div>
        <div class="form-group">
            <label for="name">Correo</label>
            <input type="email" name="email" class="form-control" id="email" v-model="email">
        </div>
        <div class="form-group">
            <label for="subject">Asunto</label>
            <input type="text" name="subject" class="form-control" id="subject" v-model="subject">
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                phone: '',
                email: '',
                subject: '',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newForm() {
                const params = {
                    name: this.name,
                    phone: this.phone,
                    email: this.email,
                    subject: this.subject
                }
                axios.post('/formulario', params).then((response) => alert('Se ha enviado el mensaje correctamente!'));
            }
        }
    }
</script>

