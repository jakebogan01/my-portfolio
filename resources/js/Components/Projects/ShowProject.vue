<template>
    <!--LOADING-->
    <div class="flex justify-center items-center w-full h-full rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e]" style="margin-top: 0;" v-if="project === null">
        <div class="loader">Loading...</div>
    </div>

    <div class="projects relative flex-grow rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e] pl-0 w-full h-full" :class="appSizeToggle === 'true' ? 'pt-5 992:pt-0' : 'pt-[5.625rem] 992:pt-0 pb-10 md:pb-2.5'" v-if="project">

        <div class="flex justify-center items-center w-full h-full max-h-[45rem] visible" :class="appSizeToggle === 'true' ? 'p-0 opacity-0 animate-fullScreenTransition' : '992:pl-[3%] animate-smallScreenTransition'">
            <!--CARD CONTAINER-->
            <div class="card flex 992:items-center w-[95%] max-w-[50rem] bg-white p-0 992:p-[1.5625rem] rounded-[1.25rem] h-full 992:h-[22rem] z-10 transition-all duration-500" :id="appSizeToggle === 'true' ? 'desktop' : ''">

                <div class="relative mx-auto transition-all">
                    <div class="flex flex-col 992:flex-row items-center">

                        <!--DEFAULT APP SIZE USE THIS IMAGE-->
                        <div class="h-[10.625rem] sm:h-[15.625rem] lg:h-[18.75rem] w-[90%] 992:w-full max-w-[25.625rem] 992:max-w-[18.75rem] rounded-[1.25rem] -translate-y-16 translate-x-0 992:-translate-y-0 992:-translate-x-[4.3rem] flex-shrink-0 transition-all duration-500 overflow-hidden" :class="appSizeToggle === 'true' ? '992:hidden' : ''">
                            <a :href="project.code_url" target="_blank">
                                <img :src="'/img/svg/project-images/project-' + project.image_index + '.svg'" :alt="project.title" class="block w-full h-full object-cover rounded-[1.25rem] transition-all" loading="eager">
                            </a>
                        </div>
                        <div class="max-w-none text-center 992:mt-0 992:text-left transition-all" :class="appSizeToggle === 'true' ? 'max-w-[37.5rem] xs:max-w-[60.25rem] px-[1.875rem] 992:mx-auto 992:px-7' : 'xs:max-w-[37.5rem] px-[1.875rem] 992:pl-0 992:pr-[3.5625rem]'">

                            <!--DEFAULT APP SIZE USE THIS IMAGE-->
                            <div :class="appSizeToggle === 'true' ? 'hidden 992:block 992:h-[21.875rem] 992:mb-3' : 'hidden'">
                                <a :href="project.code_url" target="_blank">
                                    <img :src="'/img/svg/project-images/project-1.svg'" :alt="project.title" class="w-full h-full object-cover rounded-[1.25rem]">
                                </a>
                            </div>

                            <!--TAGS-->
                            <span class="text-[#423a66] block mb-3">
                                <span class="mr-2 inline-flex items-center text-white font-bold rounded-full h-6 whitespace-nowrap text-xs bg-gray-400 py-1.6 px-2.5 uppercase cursor-default" v-if="project.tags.tag_1 !== null">
                                    {{ project.tags.tag_1 }}
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

                            <!--PROJECT INFORMATION-->
                            <div class="text-[#64569D]">
                                <h2 class="text-2xl font-bold mb-4 uppercase cursor-default">
                                    {{ project.title }}
                                </h2>
                            </div>

                            <div class="text-[#76709c] font-bold leading-7 cursor-default">
                                <p class="mb-6">
                                    {{ project.summary }}
                                </p>
                            </div>

                            <!--SOCIAL AND CODE LINK BUTTONS-->
                            <div class="flex flex-row justify-center 992:justify-start relative rounded-full">
                                <div class="flex justify-center items-center relative text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-transform rounded-full overflow-hidden z-50 cursor-pointer" @click="showAllBtns()" style="will-change: transform;">
                                    <a :href="project.code_url" target="_blank" class="inner-circle absolute top-0 left-0 right-0 bottom-0 rounded-full w-full h-full bg-[#685ca3] z-0" :style="showLinkBkg">
                                        <i class="fas fa-link origin-center absolute scale-0 z-10" :class="showLinkIcon"></i>
                                    </a>
                                    <i class="fas fa-eye origin-center relative z-10" :class="hideViewIcon"></i>
                                </div>
                                <a :href="project.github_url" target="_blank">
                                    <div class="flex justify-center items-center left-2/4 -translate-x-2/4 992:left-0 992:translate-x-0 absolute text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-transform rounded-full overflow-hidden z-30 cursor-pointer" :class="showGithubBtn" style="will-change: transform;">
                                        <i class="fab fa-github"></i>
                                    </div>
                                </a>
                                <div class="flex justify-center items-center left-2/4 -translate-x-2/4 992:left-0 992:translate-x-0 absolute text-2xl text-white bg-[#685ca3] w-[2.9375rem] h-[2.9375rem] hover:scale-110 transition-all hover:bg-red-500 rounded-full z-10 cursor-pointer" @click="liked()" :class="showLikeBtn" style="will-change: transform;">
                                    <span class="absolute text-[#A538F6] font-bold text-base opacity-0" :class="showLikeIndicator">1&#43;</span>
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import {defineComponent} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    export default defineComponent({
        name: "ProjectIndex",
        components: {
            Link,
        },
        props:{
            project: Object,
            appSizeToggle: String,
        },
        data() {
            return {
                hideViewIcon: null,
                showLinkIcon: null,
                showLikeBtn: "left-0",
                showLinkBkg: "display: none;",
                showLikeIndicator: null,
                showGithubBtn: "left-0",
            }
        },
        methods: {
            showAllBtns()
            {
                this.showLinkBkg = "display: contents;";
                this.hideViewIcon = "animate-switchIcon";
                this.showLinkIcon = "animate-switchBackIcon";
                this.showLikeBtn = "animate-move3rdBtnOnMobile 992:animate-move3rdBtn";
                this.showGithubBtn = "animate-move2ndBtnOnMobile 992:animate-move2ndBtn";
            },
            liked()
            {
                this.showLikeIndicator = "animate-likeBtn";
                this.showLikeBtn = "animate-move3rdBtnOnMobile 992:animate-move3rdBtn bg-red-500";
            }
        },
    })
</script>
