<template>
	<div class="center content-inputs">
		<h1>Hola como estas</h1>

		<vs-input
        success
        v-model="value"
        placeholder="Success" />
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