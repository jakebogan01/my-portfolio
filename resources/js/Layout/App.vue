<template>
    <!--APP PANEL-->
    <div class="w-full h-full bg-[#1B1627] overflow-hidden transition-all" :class="appSizeToggle === 'true' ? 'xl:max-h-full xl:max-w-full rounded-none' : 'xl:max-h-[756px] xl:max-w-[1240px] xl:rounded-[1.25rem]'">
        <div class="flex h-full max-w-screen-2xl bg-[#242236] m-auto" :class="appSizeToggle === 'true' ? 'pr-2' : 'pr-0'">

            <!--DESKTOP NAV-->
            <NavIndex @toggleMenu="menuStatus($event)" :menuIsOpened="menuIsOpened" :pageStatus="pageStatus" />
            <div class="flex flex-col flex-grow overflow-hidden">

                <!--SEARCH BAR-->
                <SearchIndex :projects="projects" @toggleSize="sizeStatus()" @toggleMobileMenu="mobileMenuStatus($event)" />
                <main class="flex relative flex-grow rounded-tl-[1.25rem] rounded-tr-[1.25rem] overflow-hidden transition-all">

                    <!--MOBILE NAV-->
                    <NavMobile :mobileMenuIsOpened="mobileMenuIsOpened" />

                    <!--PROJECTS-->
                    <ProjectIndex :projects="projects" :appSizeToggle="appSizeToggle" v-if="$page.url === '/'" />

                    <!--INDIVIDUAL PROJECTS-->
                    <ShowProject :project="project" :appSizeToggle="appSizeToggle" v-if="$page.url === '/project-' + id" />

                    <!--ABOUT USER-->
                    <AboutIndex :user="user" :appSizeToggle="appSizeToggle" v-if="$page.url === '/about'" />

                    <!--USERS SKILLS-->
                    <SkillsIndex :user="user" :appSizeToggle="appSizeToggle" :config="config" v-if="$page.url === '/skills'" />

                    <!--CONTACT USER-->
                    <ContactIndex :user="user" :appSizeToggle="appSizeToggle" v-if="$page.url === '/contact'" />
                </main>
            </div>
        </div>
    </div>
</template>

<script>
    import {defineComponent, ref, onMounted} from "vue"
    import {Head} from "@inertiajs/inertia-vue3"
    import AboutIndex from "@/Components/About/AboutIndex"
    import NavIndex from "@/Components/Navigation/NavIndex"
    import SearchIndex from "@/Components/Search/SearchIndex"
    import NavMobile from "@/Components/Navigation/NavMobile"
    import SkillsIndex from "@/Components/Skills/SkillsIndex"
    import ShowProject from "@/Components/Projects/ShowProject"
    import ContactIndex from "@/Components/Contact/ContactIndex"
    import ProjectIndex from "@/Components/Projects/ProjectIndex"
    export default defineComponent({
        name: "App",
        components: {
            Head,
            NavIndex,
            NavMobile,
            AboutIndex,
            SkillsIndex,
            ShowProject,
            SearchIndex,
            ProjectIndex,
            ContactIndex,
        },
        props: {
            id: Number,
            user: Object,
            config: Object,
            project: Object,
            projects: Object,
            pageStatus: Boolean,
        },
        setup() {
            const menuIsOpened = ref(null)
            const appSizeToggle = ref(null)
            const mobileMenuIsOpened = ref(null)

            onMounted(()=>{
                appSizeToggle.value = localStorage.getItem("appSizeToggle")
            })

            const sizeStatus = () => {
                appSizeToggle.value = localStorage.getItem("appSizeToggle")
            }

            const menuStatus = (status) => {
                menuIsOpened.value = status;
            }

            const mobileMenuStatus = (status) => {
                if(status === null) {
                    status = "false";
                }
                mobileMenuIsOpened.value = status;
            }

            return {
                menuIsOpened,
                appSizeToggle,
                mobileMenuIsOpened,
                sizeStatus,
                menuStatus,
                mobileMenuStatus,
            }
        }
    })
</script>

<style>
    .loader,
    .loader:before,
    .loader:after {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: load7 1.8s infinite ease-in-out;
        animation: load7 1.8s infinite ease-in-out;
    }
    .loader {
        color: #ffffff;
        font-size: 10px;
        position: relative;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }
    .loader:before,
    .loader:after {
        content: '';
        position: absolute;
        top: 0;
    }
    .loader:before {
        left: -3.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }
    .loader:after {
        left: 3.5em;
    }
    @-webkit-keyframes load7 {
        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em;
        }
        40% {
            box-shadow: 0 2.5em 0 0;
        }
    }
    @keyframes load7 {
        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em;
        }
        40% {
            box-shadow: 0 2.5em 0 0;
        }
    }
</style>
