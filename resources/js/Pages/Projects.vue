<template>
    <Head title="My Portfolio | Projects" />
    <!--Main App-->
    <App :projects="projects" />
</template>

<script>
    import {defineComponent} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import App from "@/Layout/App"
    export default defineComponent({
        name: "ProjectsPage",
        components: {
            Head,
            App,
        },
        props: {
            projects: Object,
        },
    })
</script>
