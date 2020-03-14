<template>
    <div class="my-4">
        <input type="checkbox"
               :name="name"
               :id="name"
               :checked="value"
               @input="(event) => {$emit('input', event.target.checked ? 1 : 0)}"
               class="hidden">

        <label :for="name" class="flex items-center cursor-pointer">
            <span class="transition-all inline-block py-2 px-4 text-gray-800 font-bold text-lg rounded-lg mr-5 bg-gray-400"
                  :class="{'bg-green-500': value}">
                {{ letter }}
            </span>

            <span class="ml-2 text-cool-gray-700 text-sm tracking-wide">{{ title }}</span>
        </label>
    </div>
</template>

<script>
    export default {
        props: {
            name: {
                required: true
            },
            title: {
                required: true
            },
            value: {
                default: 0
            }
        },

        computed: {
            letter() {
                return String.fromCharCode(this.name + 65)
            }
        },

        created() {
            this.$emit('input', this.value ? 1 : 0)
        }
    };
</script>
