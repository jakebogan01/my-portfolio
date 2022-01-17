<template>
    <Head title="My Portfolio | About" />
    <!--Main App-->
    <App :projects="projects" :user="user" />
</template>

<script>
    import {defineComponent} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import App from "@/Layout/App"
    export default defineComponent({
        name: "AboutPage",
        components: {
            Head,
            App,
        },
        props: {
            projects: Object,
            user: Object,
        }
    })
</script>
