<template>
    <div class="w-full p-8 lg:px-40 lg:py-12">
        <div class="flex justify-between items-center w-full">
            <h2 class="text-gray-700 text-sm">{{ question.attributes.title }}</h2>

            <slot></slot>
        </div>

        <div class="font-semibold text-gray-800 text-lg mt-2 mb-8 p-4 bg-white rounded shadow">
            <vue-markdown>{{ question.attributes.content }}</vue-markdown>
        </div>

        <div class="px-4 lg:px-12">
            <div :is="question.layout" :answers="question.attributes.answers" @answer="(value) => {answer = value}"></div>

            <button @click="$emit('answer', answer)" class="bg-green-400 px-8 py-3 mt-8 rounded-lg text-sm font-semibold text-gray-900 tracking-widest hover:bg-green-500 focus:outline-none">Tiếp theo</button>
        </div>
    </div>
</template>

<script>
    import Choice from "./questions/Choice"
    import Boolean from "./questions/Boolean"
    import Exact from "./questions/Exact"
    import VueMarkdown from 'vue-markdown'

    export default {
        props: ['question'],

        data() {
            return {
                answer: null
            }
        },

        components: {
            choice: Choice,
            boolean: Boolean,
            exact: Exact,
            VueMarkdown
        }
    }
</script>
