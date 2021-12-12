<template>
    <app-layout>
        <template #header>
            List of trainings
        </template>
        <div class="py-3" v-for="course in this.courseList" v-bind:key="course.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="flex justify-between items-center">
                    <div class="text-2xl">{{ course.title}}</div>
                    <div class="text-sm text-indigo-500">25  épisodes</div>
                </div>
                <div class="text-4sm text-gray-700">{{ course.description}}</div>
                <a href="#" class="bg-indigo-500 text-white px-2 py-1
                text-sm mt-3 inline-block rounded hover:bg-indigo-700">View the Training</a>
            </div>
        </div>
    </app-layout>
    <H1>Hello</H1>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    export default {
        name: "Index",
        components: {
            AppLayout
        },

        data() {
            return {
                courseList: this.courses
            }
        },

        props: ['courses'],
        mounted() {
            console.log(this.courseList);
        }

    }
</script>

<style scoped>

</style>
