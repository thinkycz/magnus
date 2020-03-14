<template>
    <div>
        <Checkbox v-for="(option, key) in options" :name="key" :key="key" :title="option.attributes.title" v-model="options[key]['checked']"></Checkbox>
    </div>
</template>

<script>
    import Checkbox from "./Checkbox";

    export default {
        props: ['answers'],

        data() {
            return {
                options: this.answers
            }
        },

        computed: {
            checked() {
                return this.options.filter(option => option.checked)
            }
        },

        watch: {
            checked(value) {
                this.$emit('answer', value)
            }
        },

        components: {
            Checkbox
        },
    }
</script>
