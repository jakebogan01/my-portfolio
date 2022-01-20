<template>
    <!--LOADING-->
    <Loading v-if="user === null" />

    <div class="about relative lg:px-5 flex-grow rounded-tl-[1.25rem] bg-[#211b2e] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] w-full h-full overflow-x-hidden overflow-y-auto transition-all" ref="aboutPage" v-if="user">

        <!--ABOUT CONTAINER-->
        <div class="transition-all" :class="appSizeToggle === 'true' ? 'py-4 576:py-[3.125rem] lg:py-[7.125rem] mx-2 576:mx-10 2xl:mx-24 animate-fullScreenTransition' : 'py-4 576:py-[3.125rem] 2xl:py-0 mx-2 576:mx-10 2xl:mx-20 animate-smallScreenTransition'">
            <div class="rounded-[1.25rem] overflow-hidden">
                <div class="flex items-center flex-col 840:flex-row relative bg-blue-400 w-full py-4 840:py-0 840:h-[10.9375rem] rounded-[1.25rem] overflow-hidden z-50">

                    <!--ABOUT USER-->
                    <div class="flex relative 840:pl-12 items-center text-center 840:text-left text-white z-40 cursor-default">
                        <div>
                            <h1 class="font-bold text-4xl">
                                {{ user.name }}
                            </h1>
                            <h3 class="font-bold text-xl">
                                {{ user.job_title }}
                            </h3>
                            <h5 class="font-bold text-sm text-blue-300 uppercase">
                                {{ user.city }}, {{ user.state }}
                            </h5>
                        </div>
                    </div>

                    <!--BACKGROUND VIDEO-->
                    <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_M2LlJG.json"  background="transparent" class="absolute -top-20 left-0 z-0 hidden 840:block" loading="eager" speed="0.5" style="width: 900px; height: 900px;" loop autoplay></lottie-player>

                    <div class="absolute 840:hidden top-0 left-0 w-full h-full bg-center bg-no-repeat bg-cover rounded-[1.25rem] overflow-hidden z-10" style="background-image: url('/img/images/city.jpg');"></div>

                    <div class="absolute top-0 left-0 w-full h-full opacity-80 rounded-[1.25rem] overflow-hidden z-20" style="background-image: linear-gradient(#8362E2, #3300D3);"></div>

                    <div class="bgBanner flex justify-center 840:justify-end items-center static 840:absolute top-0 right-0 pt-4 840:pr-0 840:py-0 w-full 840:w-[40.625rem] 840:h-[10.9375rem] bg-center bg-no-repeat bg-cover rounded-tr-[1.25rem] rounded-br-[1.25rem] overflow-hidden z-30">
                        <!--SOCIAL LINK BUTTONS-->
                        <div class="flex 840:mr-5 840:flex-col lg:flex-row text-2xl 840:text-xl transition-all">
                            <a :href="user.social_links.linkedin" target="_blank" class="mr-4 840:mr-0 lg:mr-6">
                                <button class="bg-blue-500 sm:hover:bg-blue-600 text-white px-2 py-3 840:py-4 rounded-lg w-20 840:w-36 sm:hover:scale-110 transition duration-200">
                                    <i class="fab fa-linkedin"></i><span class="hidden 840:inline">&#160;&#160;LinkedIn</span>
                                </button>
                            </a>
                            <a :href="user.social_links.github" target="_blank" class="840:mt-2 lg:mt-0">
                                <button class="bg-blue-500 sm:hover:bg-bg-blue-600 text-white px-2 py-3 840:py-4 rounded-lg w-20 840:w-36 sm:hover:scale-110 transition duration-200">
                                    <i class="fab fa-github"></i><span class="hidden 840:inline">&#160;&#160;GitHub</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--USER DESCRIPTION-->
            <div class="flex flex-col lg:flex-row mt-6">
                <div class="bg-[#15121f] px-4 py-5 rounded-[1.25rem] text-gray-300 text-lg">
                    <div v-html="user.body"></div>
                    <br>
                    <p>
                        If you are looking for a Web Developer and or Designer, please <Link :href="route('contact')" class="text-cyan-300 font-semibold">contact</link> me!
                    </p>
                </div>

                <!--USERS RESUME-->
                <div class="flex justify-center items-start mt-10 lg:mt-28 sm:min-w-[19.875rem]">
                    <div ref="resumeBtn" class="flex flex-row lg:flex-col top-0" :class="newPosition">
                        <a href="/img/docs/theron-bogan.pdf" class="group" aria-label="Download PDF" target="_blank" download>
                            <div class="overflow-hidden rounded-tl-md rounded-tr-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="165" height="117" viewBox="0 0 165 117"><defs><clipPath id="b"><rect width="165" height="117"/></clipPath></defs><g id="a" clip-path="url(#b)"><rect width="165" height="117" fill="#fff"/><g transform="translate(-2 -50)"><rect width="165" height="117" transform="translate(2 50)" fill="#a35bb4" class="sm:group-hover:fill-blue-400 transition-colors duration-200"/><g transform="translate(53.665 80.037)" class="transform translate-y-20 translate-x-14 sm:group-hover:translate-y-44 sm:group-hover:opacity-0 origin-center transition-all duration-300"><path d="M70.679,26H32.3A8.311,8.311,0,0,0,24,34.3V81.74a1.186,1.186,0,0,0,1.186,1.186H65.508a1.186,1.186,0,0,0,1.186-1.186v-24.9l0-5.26V34.3A10.653,10.653,0,0,1,70.68,26ZM60.764,72.252H32.3a1.186,1.186,0,0,1,0-2.372H60.764a1.186,1.186,0,0,1,0,2.372Zm0-10.674H32.3a1.186,1.186,0,0,1,0-2.372H60.764a1.186,1.186,0,0,1,0,2.372Zm0-10.674H32.3a1.186,1.186,0,0,1,0-2.372H60.764a1.186,1.186,0,0,1,0,2.372Zm0-10.674H32.3a1.186,1.186,0,0,1,0-2.372H60.764a1.186,1.186,0,0,1,0,2.372Z" transform="translate(-24 -26)" fill="#fff"/><path d="M70.3,26A8.311,8.311,0,0,0,62,34.3V56.837a1.189,1.189,0,0,0,1.186,1.186H77.418A1.189,1.189,0,0,0,78.6,56.837V34.3A8.311,8.311,0,0,0,70.3,26Z" transform="translate(-16.934 -26)" fill="#fff"/></g><path class="opacity-0 transform -translate-y-10 translate-x-14 sm:group-hover:translate-y-20 sm:group-hover:opacity-100 origin-center transition-all duration-300" d="M62.233,31.4A30.835,30.835,0,1,1,31.4.563,30.83,30.83,0,0,1,62.233,31.4ZM25.927,16.975V31.4H17.112a1.493,1.493,0,0,0-1.057,2.549L30.341,48.158a1.478,1.478,0,0,0,2.1,0L46.728,33.947A1.492,1.492,0,0,0,45.672,31.4h-8.8V16.975a1.5,1.5,0,0,0-1.492-1.492H27.419A1.5,1.5,0,0,0,25.927,16.975Z" transform="translate(53.102 -26.898)" fill="#fff"/></g></g></svg>
                            </div>
                            <button class="relative text-gray-600 font-bold bg-white py-2.5 rounded-bl-md rounded-br-md w-[10.3125rem] overflow-hidden">
                                My Resume
                            </button>
                        </a>

                        <!--SOCIAL LINK BUTTONS-->
                        <div class="flex flex-col justify-center items-center ml-6 lg:ml-0 sm:mt-0 lg:mt-12 text-3xl md:text-xl">
                            <a :href="user.social_links.linkedin" target="_blank" class="transition-transform duration-300" :class="showSideButtons">
                                <button class="bg-white text-gray-700 px-2 py-4 rounded-lg w-20 md:w-36 sm:hover:scale-110 sm:hover:text-[#A538F6] origin-center transition duration-200">
                                    <i class="fab fa-linkedin"></i><span class="hidden md:inline">&#160;&#160;LinkedIn</span>
                                </button>
                            </a>
                            <a :href="user.social_links.github" target="_blank" class="mt-6 origin-center transition-transform duration-300 delay-100" :class="showSideButtons">
                                <button class="bg-white text-gray-700 px-2 py-4 rounded-lg w-20 md:w-36 sm:hover:scale-110 sm:hover:text-[#A538F6] transition duration-200">
                                    <i class="fab fa-github"></i> <span class="hidden md:inline">&#160;&#160;GitHub</span>
                                </button>
                            </a>
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
    import Loading from "@/Components/Animations/Loading"
    export default defineComponent({
        name: "AboutIndex",
        components: {
            Link,
            Loading,
        },
        props: {
            user: Object,
            appSizeToggle: String,
        },
        data(){
            return {
                aboutPage: null,
                resumeBtn: null,
                newPosition: "",
                showSideButtons: "scale-0",
            }
        },
        mounted() {
            this.$refs.aboutPage.addEventListener("scroll", this.onScroll)
        },
        beforeDestroy() {
            this.$refs.aboutPage.removeEventListener("scroll", this.onScroll)
        },
        methods: {
            onScroll(e) {
                if(e.target.scrollTop >= 50) {
                    this.newPosition = "sticky top-24";
                }else{
                    this.newPosition = "";
                }

                if(e.target.scrollTop >= 220) {
                    this.showSideButtons = "scale-100";
                }else{
                    this.showSideButtons = "scale-0";
                }
            }
        }
    })
</script>
