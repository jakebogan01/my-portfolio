<template>
    <Head title="My Portfolio | Contact" />
    <!--Main App-->
    <App :projects="projects" :user="user" />
</template>

<script>
    import {defineComponent} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import App from "@/Layout/App"
    export default defineComponent({
        name: "ContactPage",
        components: {
            Head,
            App,
        },
        props: {
            user: Object,
            projects: Object,
        }
    })
</script>
