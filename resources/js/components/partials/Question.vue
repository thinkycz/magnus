<template>
    <div class="w-full px-40 py-12">
        <h2 class="flex items-center text-gray-700 text-xs lg:text-base">Question {{ questionNumber }}</h2>
        <h1 class="font-bold text-black text-xl lg:text-2xl mb-8">{{ question.text }} </h1>

        <div class="px-12">


            <button @click="submitAnswer" class="bg-green-400 px-8 py-3 mt-8 rounded-lg text-sm font-semibold text-gray-900 tracking-widest hover:bg-green-500 focus:outline-none">Answer</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['question', 'questionNumber'],

        data() {
            return {
                answer: ''
            }
        },

        methods: {
            submitAnswer: function () {
                this.$emit('answer', {answer: this.answer});
                this.answer = null;
            }
        }
    }
</script>
