<template>
    <Head title="My Portfolio | Project" />
    <!--Main App-->
    <App :id="id" :project="project" :pageStatus="pageStatus" :projects="projects" />
</template>

<script>
    import {defineComponent} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import App from "@/Layout/App"
    export default defineComponent({
        name: "ShowPage",
        components: {
            Head,
            App,
        },
        props: {
            id: Number,
            project: Object,
            projects: Object,
            pageStatus: Boolean,
        }
    })
</script>
