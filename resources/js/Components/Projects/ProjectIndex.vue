<template>
    <!--LOADING-->
    <div class="flex justify-center items-center w-full h-full rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e]" style="margin-top: 0;" v-if="projects.length <= 0">
        <div class="loader">Loading...</div>
    </div>

    <div class="projects relative flex-grow rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e] pl-0 w-full h-full overflow-x-hidden overflow-y-auto sm:overflow-y-hidden transition-all" :class="appSizeToggle === 'true' ? 'pt-5 992:pt-0' : 'sm:pt-[5.625rem] pb-10 md:pb-2.5'" v-if="projects.length > 0">

        <div class="relative sm:hidden pt-12 pb-20 px-4">
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-white">
                        All Projects
                    </h2>
                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5" v-for="(project, index) in projects" :key="index">

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <!--PROJECT IMAGE-->
                        <a :href="project.code_url" target="_blank">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" :src="'/img/svg/project-images/project-' + index + '.svg'" :alt="project.title">
                            </div>
                        </a>

                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <!--TAGS-->
                                <span class="card__code text-[#423a66] block mb-3">
                                    <span class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="project.tags.tag_1 !== null">
                                        {{ project.tags.tag_1 ?? ''}}
                                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                                    </span>
                                    <span  class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="project.tags.tag_2 !== null">
                                        {{ project.tags.tag_2 }}
                                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                                    </span>
                                    <span  class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="project.tags.tag_3 !== null">
                                        {{ project.tags.tag_3 }}
                                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                                    </span>
                                </span>

                                <!--PROJECT DESCRIPTION-->
                                <div class="mt-2">
                                    <p class="text-2xl text-[#64569D] font-bold mb-4 uppercase cursor-default">
                                        {{ project.title }}
                                    </p>
                                    <p class="mt-3 card__text text-[#76709c] font-bold leading-7 cursor-default">
                                        {{ project.summary }}
                                    </p>
                                </div>
                            </div>

                            <!--SOCIAL AND CODE LINK BUTTONS-->
                            <div class="mt-6 flex items-center">
                                <div class="flex flex-row justify-center rounded-full">
                                    <a :href="project.code_url" target="_blank" class="mr-2">
                                        <div class="flex justify-center items-center relative text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] rounded-full overflow-hidden cursor-pointer">
                                            <i class="fas fa-link origin-center absolute"></i>
                                        </div>
                                    </a>
                                    <a :href="project.github_url" target="_blank"  class="mr-2">
                                        <div class="flex justify-center items-center text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] rounded-full overflow-hidden cursor-pointer">
                                            <i class="fab fa-github"></i>
                                        </div>
                                    </a>
                                    <button class="flex justify-center items-center text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] rounded-full focus:outline-none focus:ring focus:ring-red-500 transition-all cursor-pointer">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--COVERS ENTIRE SCREEN TO SCROLL-->
        <div class="hidden 992:absolute top-0 left-0 sm:flex justify-center items-center w-full max-h-[45rem] visible" :class="appSizeToggle === 'true' ? 'h-full p-0 opacity-0 animate-fullScreenTransition' : 'h-[85%] 992:pl-[3%] animate-smallScreenTransition'">
            <!--CARD CONTAINER-->
            <div class="card w-[95%] max-w-[50rem] bg-white p-0 992:p-[1.5625rem] rounded-[1.25rem] h-full 992:h-[22rem] z-10 transition-all duration-500" :id="appSizeToggle === 'true' ? 'desktop' : ''">
                <!--LOOP THROUGH EACH CARD-->
                <ProjectCard :appSizeToggle="appSizeToggle" :projects="projects" />
            </div>
        </div>

    </div>
</template>

<script>
    import {defineComponent, onMounted, onUpdated} from "vue"
    import "swiper/css/bundle"
    import Swiper from "swiper/bundle"
    import {Link} from "@inertiajs/inertia-vue3"
    import ProjectCard from "@/Components/Projects/ProjectCard"
    export default defineComponent({
        name: "ProjectIndex",
        components: {
            Link,
            ProjectCard,
        },
        props: {
            text: String,
            projects: Object,
            appSizeToggle: String,
        },
        setup(){
            onMounted(() => {
                setTimeout(()=>{
                    initSwiper();
                },200)
            })

            onUpdated(() => {
                setTimeout(()=>{
                    initSwiper();
                },200)
            })

            const initSwiper = () => {
                const swiper = new Swiper(".card", {
                    spaceBetween: 30,
                    effect: "fade",
                    loop: false,
                    speed: 300,
                    mousewheel: {
                        invert: false,
                    },
                    pagination: {
                        el: ".card__pagination",
                        clickable: true,
                    }
                });
            }

            return {
                initSwiper,
            }
        },
    })
</script>
