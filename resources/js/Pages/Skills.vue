<template>
    <Head title="My Portfolio | Skills" />
    <!--Main App-->
    <App :config="config" :projects="projects" :user="user" />
</template>

<script>
    import {defineComponent} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import App from "@/Layout/App"
    export default defineComponent({
        name: "SkillsPage",
        components: {
            Head,
            App,
        },
        props: {
            user: Object,
            config: Object,
            projects: Object,
        }
    })
</script>
