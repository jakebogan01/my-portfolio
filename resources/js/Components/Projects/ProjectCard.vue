<template>
    <div class="card__wrapper swiper-wrapper relative transition-all">

        <div class="card__item swiper-slide flex flex-col 992:flex-row items-center" v-for="(todo, index) in todos" :key="index">

            <!--DEFAULT APP SIZE USE THIS IMAGE-->
            <div class="card__img h-[10.625rem] sm:h-[15.625rem] lg:h-[18.75rem] w-[90%] 992:w-full max-w-[25.625rem] 992:max-w-[18.75rem] rounded-[1.25rem] -translate-y-1/2 translate-x-0 992:-translate-y-0 992:-translate-x-[12.5rem] opacity-0 flex-shrink-0 transition-all duration-500 overflow-hidden" :class="appSizeToggle === 'true' ? '992:hidden' : ''">
                <a :href="projects[index].code_url" target="_blank">
                    <img :src="'/img/svg/project-images/project-' + index + '.svg'" :alt="projects[index].title" class="block w-full h-full object-cover rounded-[1.25rem] opacity-0 transition-all" loading="eager">
                </a>
            </div>

            <!--DEFAULT APP SIZE USE THIS IMAGE-->
            <div class="card__content max-w-none text-center mt-1 sm:mt-5 992:mt-0 992:text-left transition-all" :class="appSizeToggle === 'true' ? 'max-w-[37.5rem] xs:max-w-[56.25rem] px-[1.875rem] 992:mx-auto 992:px-7' : 'xs:max-w-[37.5rem] px-[1.875rem] 992:pl-0 992:pr-[3.5625rem]'">
                <div :class="appSizeToggle === 'true' ? 'hidden 992:block h-[10.625rem] sm:h-[21.875rem] 992:mb-3' : 'hidden'">
                    <a :href="projects[index].code_url" target="_blank">
                        <img :src="'/img/svg/project-images/project-' + index + '.svg'" :alt="projects[index].title" class="w-full h-full object-cover rounded-[1.25rem]">
                    </a>
                </div>

                <!--TAGS-->
                <span class="card__code text-[#423a66] block mb-3">
                    <span class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="projects[index].tags.tag_1 !== null">
                        {{ projects[index].tags.tag_1 }}
                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                    </span>
                    <span  class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="projects[index].tags.tag_2 !== null">
                        {{ projects[index].tags.tag_2 }}
                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                    </span>
                    <span  class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="projects[index].tags.tag_3 !== null">
                        {{ projects[index].tags.tag_3 }}
                        <i class="fas fa-circle ml-1.5" style="font-size: 0.3125rem;"></i>
                    </span>
                </span>

                <!--PROJECT INFORMATION-->
                <div class="card__title text-[#64569D]">
                    <h2 class="text-2xl font-bold mb-4 uppercase cursor-default">
                        {{ projects[index].title }}
                    </h2>
                </div>
                <div class="card__text text-[#76709c] font-bold leading-7 cursor-default">
                    <p class="mb-6">
                        {{ projects[index].summary }}
                    </p>
                </div>

                <!--SOCIAL AND CODE LINK BUTTONS-->
                <div class="flex flex-row justify-center 992:justify-start relative rounded-full">
                    <div class="flex justify-center items-center relative text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-transform rounded-full overflow-hidden z-50 cursor-pointer" @click="showAllBtns(index)" style="will-change: transform;">
                        <a :href="projects[index].code_url" target="_blank" class="inner-circle absolute top-0 left-0 right-0 bottom-0 rounded-full w-full h-full bg-[#685ca3] z-0" :style="todo.showLinkBkg">
                            <i class="fas fa-link origin-center absolute scale-0 z-10" :class="todo.showLinkIcon"></i>
                        </a>
                        <i class="fas fa-eye origin-center relative z-10" :class="todo.hideViewIcon"></i>
                    </div>
                    <a :href="projects[index].github_url" target="_blank">
                        <div class="flex justify-center items-center left-2/4 -translate-x-2/4 992:left-0 992:translate-x-0 absolute text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-transform rounded-full overflow-hidden z-30 cursor-pointer" :class="todo.showGithubBtn" style="will-change: transform;">
                            <i class="fab fa-github"></i>
                        </div>
                    </a>
                    <div class="flex justify-center items-center left-2/4 -translate-x-2/4 992:left-0 992:translate-x-0 absolute text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-all hover:bg-red-500 rounded-full z-10 cursor-pointer" @click="liked(index)" :class="todo.showLikeBtn" style="will-change: transform;">
                        <span class="absolute text-[#A538F6] font-bold text-base opacity-0" :class="todo.showLikeIndicator">1&#43;</span>
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>

        <!--ANIMATION UP ARROW-->
        <div class="arrows absolute left-14 -top-[1.35rem] text-6xl text-gray-200 hidden" :class="appSizeToggle === 'true' ? '992:hidden' : '992:block'">
            <i class="fas fa-chevron-up animate-bounce" style="animation-duration: 2s;"></i>
        </div>
        <!--ANIMATION DOWN ARROW-->
        <div class="arrows absolute left-14 -bottom-10 text-6xl text-gray-200 hidden" :class="appSizeToggle === 'true' ? '992:hidden' : '992:block'">
            <i class="fas fa-chevron-down animate-bounceBack"></i>
        </div>

        <!--PAGINATION-->
        <div class="card__pagination absolute flex items-center justify-center 992:block -translate-y-1/2 -translate-x-1/2 992:translate-x-0 z-20 text-center -right-[0.3125rem] top-2/4 transition-all"></div>

    </div>
</template>

<script>
    import {defineComponent} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    export default defineComponent({
        name: "ProjectCard",
        components: {
            Link,
        },
        props: {
            projects: Object,
            appSizeToggle: String,
        },
        data() {
            return {
                todos: [
                    {hideViewIcon: null},
                    {showLinkIcon: null},
                    {showGithubBtn: "left-0"},
                    {
                        showLikeBtn: "left-0",
                        showLinkBkg: "display: none;",
                        showLikeIndicator: null,
                    },
                ]
            }
        },
        methods: {
            showAllBtns(index)
            {
                this.todos[index].hideViewIcon = "animate-switchIcon";
                this.todos[index].showLinkIcon = "animate-switchBackIcon";
                this.todos[index].showGithubBtn = "animate-move2ndBtnOnMobile 992:animate-move2ndBtn";
                this.todos[index].showLikeBtn = "animate-move3rdBtnOnMobile 992:animate-move3rdBtn";
                this.todos[index].showLinkBkg = "display: contents;";
            },
            liked(index)
            {
                this.todos[index].showLikeBtn = "animate-move3rdBtnOnMobile 992:animate-move3rdBtn bg-red-500";
                this.todos[index].showLikeIndicator = "animate-likeBtn";
            }
        }
    })
</script>
