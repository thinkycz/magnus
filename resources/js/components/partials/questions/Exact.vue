<template>
    <div class="flex flex-col">
        <label for="answer" class="text-gray-700 text-sm">Điền trả lời vào đây</label>
        <input type="text" id="answer" v-model="value" class="px-4 py-2 mt-1 border rounded shadow">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value: null
            }
        },

        watch: {
            value(value) {
                this.$emit('answer', value)
            }
        },
    }
</script>
