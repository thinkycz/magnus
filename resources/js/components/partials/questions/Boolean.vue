<template>
    <div>
        <Checkbox :name="0" key="true" title="Đồng ý" :value="value" @input="() => {value = true}"></Checkbox>
        <Checkbox :name="1" key="false" title="Không đồng ý" :value="!value" @input="() => {value = false}"></Checkbox>
    </div>
</template>

<script>
    import Checkbox from "./Checkbox";

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

        components: {
            Checkbox
        },
    }
</script>
