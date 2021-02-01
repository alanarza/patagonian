<template>
    <div class="center">

        <h1>Buscar musica en spotify</h1> <br>
        <vs-input
            label="Name"
            v-model="value"
            placeholder="Evan You"
        />
    </div>
</template>

<script>
export default {
	data() {
        return {
            value: null
        };
    },
}
</script>

<style>
.center {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    flex-wrap: wrap;
}
</style>