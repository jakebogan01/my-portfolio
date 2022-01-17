<template>
    <!--LOADING-->
    <div class="flex justify-center items-center w-full h-full rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e]" style="margin-top: 0;" v-if="projects === null">
        <div class="loader">Loading...</div>
    </div>

    <div class="projects relative flex-grow rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e] pl-0 w-full h-full" :class="appSizeToggle === 'true' ? 'pt-5 992:pt-0' : 'pt-[5.625rem] 992:pt-0 pb-10 md:pb-2.5'" v-if="projects">


<!--        COVERS ENTIRE SCREEN TO SCROLL-->
        <div class="flex justify-center items-center w-full h-full max-h-[45rem] visible" :class="appSizeToggle === 'true' ? 'p-0 opacity-0 animate-fullScreenTransition' : '992:pl-[3%] animate-smallScreenTransition'">
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
