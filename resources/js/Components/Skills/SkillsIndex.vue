<template>
    <!--LOADING-->
    <div class="flex justify-center items-center w-full h-full rounded-tl-[1.25rem] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] bg-[#211b2e]" style="margin-top: 0;" v-if="user.length <= 0">
        <div class="loader">Loading...</div>
    </div>

    <div class="relative lg:px-5 flex-grow rounded-tl-[1.25rem] bg-[#211b2e] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] w-full h-full overflow-x-hidden overflow-y-auto transition-all" :class="appSizeToggle === 'true' ? 'lg:pt-16' : 'lg:flex justify-center items-center'" v-if="user.length > 0">

        <div class="transition-all" :class="appSizeToggle === 'true' ? 'sm:py-[3.125rem] sm:mx-10 lg:mx-24 animate-fullScreenTransition' : 'sm:py-[3.125rem] lg:py-0 sm:mx-10 lg:mx-20 animate-smallScreenTransition'">
            <div class="relative bg-gradient-to-r from-teal-500 to-cyan-600 sm:rounded-[1.25rem] sm:max-w-[56.25rem] sm:mx-auto py-12 px-4 576:px-10 lg:py-16 lg:px-8 overflow-hidden transition-all">
                <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                    <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360"><path class="text-teal-200 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" /><path class="text-cyan-400 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" /></svg>
                </div>
                <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center z-20">

                    <!--SKILLS DESCRIPTION-->
                    <div>
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            Most Proficient With..
                        </h2>
                        <p class="mt-3 max-w-3xl text-lg text-white">
                            These are just some of the tools and software that I use on a daily bases. If you would like to learn more, feel free to click below and contact me!
                        </p>
                        <div class="mt-8 sm:flex">
                            <div>
                                <a :href="route('contact')">
                                    <button class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-semibold rounded-md text-white bg-blue-500 sm:hover:bg-blue-600">
                                        <i class="fas fa-envelope text-xl"></i>&#160;&#160;Contact Me
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--DISPLAY SKILLS HERE-->
                    <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2 rounded-[1.25rem] overflow-hidden">
                        <a :href="user[0].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[0].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
                        <a :href="user[1].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[1].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
                        <a :href="user[2].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[2].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
                        <a :href="user[3].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[3].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
                        <a :href="user[4].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[4].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
                        <a :href="user[5].skill_url" target="_blank">
                            <div class="flex justify-center items-center col-span-1 py-8 px-8 bg-white sm:hover:bg-blue-100 transition-colors">
                                <div class="text-cyan-400 text-6xl" v-html="config[user[5].name]['icon']" style="height: fit-content; display: inherit;"></div>
                            </div>
                        </a>
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
        name: "SkillsIndex",
        components: {
            Link,
        },
        props: {
            user: Object,
            config: Object,
            appSizeToggle: String,
        },
    })
</script>
