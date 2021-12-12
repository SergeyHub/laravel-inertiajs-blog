<template>
    <app-layout>
        <template #header>
            {{ course.title }}
        </template>
        <div class="py-4 mx-8">
            <div class="text-2xl">{{ course.episodes[0].title }}</div>
            <iframe class="w-full h-screen"
                    :src="course.episodes[1].video_url" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
            <div class="text-sm text-gray-500">{{ course.episodes[0].description }}</div>
            <div class="mt-6">
                <ul v-for="(episode, index) in course.episodes" v-bind:key="episode.id">
                    <li class="mt-3 flex justify-between items-center">
                        <div>
                            Épisode n°{{ index + 1 }} - {{ episode.title }}
                            <button class="text-gray-500 focus:text-indigo-500 focus:outline-none"
                                    @click="switchEpisode(index)">Voir l'épisode</button>
                        </div>
                        <progress-button :episode-id="episode.id" :watched-episodes="watched"/>
                    </li>
                </ul>
            </div>
        </div>
    </app-layout>
    <H1>Hello</H1>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    //import ProgressButton from './ProgressButton';
    //import ProgressBar from './ProgressBar';
    export default {
        name: "Show",
        components: {
            AppLayout,
            ProgressButton,
            ProgressBar
        },

        props: ['course'],

        data() {
            return {
                courseShow: this.course
            }
        },

        mounted() {
            //console.log(this.courseList);
        }

    }
</script>

<style scoped>

</style>
