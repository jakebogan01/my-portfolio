<template>
    <!--LOADING-->
    <Loading v-if="user === null" />

    <div class="relative lg:px-5 flex-grow rounded-tl-[1.25rem] bg-[#211b2e] shadow-[inset_0_0_0.3125rem_rgb(0,0,0)] w-full h-full overflow-x-hidden overflow-y-auto transition-all" :class="appSizeToggle === 'true' ? 'lg:pt-16' : 'lg:flex justify-center items-center'" v-if="user">

        <!--CONTACT CONTAINER-->
        <div class="bg-white sm:bg-transparent h-full sm:h-auto" :class="appSizeToggle === 'true' ? 'sm:py-[3.125rem] sm:mx-10 lg:mx-24 animate-fullScreenTransition' : 'sm:py-[3.125rem] lg:py-0 sm:mx-10 lg:mx-20 animate-smallScreenTransition'">
            <div class="max-w-7xl lg:min-w-[700px] transition-all">
                <div class="relative bg-white sm:rounded-[1.25rem]">
                    <h2 class="sr-only">Contact us</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <div class="relative overflow-hidden py-10 px-6 bg-indigo-700 sm:px-10 xl:px-12 xl:py-16 sm:rounded-tl-[1.25rem] sm:rounded-tr-[1.25rem] lg:rounded-bl-[1.25rem] lg:rounded-tr-none">
                            <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg"><path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" /><defs><linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient></defs></svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg"><path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" /><defs><linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient></defs></svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg"><path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" /><defs><linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient></defs></svg>
                            </div>
                            <div class="absolute inset-0 bg-indigo-200 mix-blend-multiply opacity-20"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-indigo-400 via-indigo-400 opacity-60"></div>

                            <!--CONTACT DESCRIPTION-->
                            <div class="relative z-20">
                                <h3 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                                    Get in touch
                                </h3>
                                <p class="mt-6 text-base text-indigo-50 max-w-3xl">
                                    If you've got a project in mind, why not stay in touch? Let's work together.
                                </p>
                                <dt class="sr-only">Social Links</dt>

                                <!--SOCIAL LINK BUTTONS-->
                                <dd class="hidden xs:flex mt-6 lg:mt-0 lg:flex-col lg:mt-6">
                                    <a :href="user.social_links.linkedin" target="_blank" class="mr-6">
                                        <button class="bg-cyan-400 sm:hover:bg-cyan-500 text-white text-lg font-semibold px-2 py-4 rounded-lg w-36 sm:hover:scale-110 transition duration-200">
                                            <i class="fab fa-linkedin text-xl"></i>&#160;&#160;LinkedIn
                                        </button>
                                    </a>
                                    <a :href="user.social_links.github" target="_blank" class="lg:mt-6">
                                        <button class="bg-cyan-400 sm:hover:bg-cyan-500 text-white text-lg font-semibold px-2 py-4 rounded-lg w-36 sm:hover:scale-110 transition duration-200">
                                            <i class="fab fa-github text-xl"></i>&#160;&#160;GitHub
                                        </button>
                                    </a>
                                </dd>
                            </div>
                        </div>

                        <!--CONTACT FORM-->
                        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                            <form class="contact_form mt-6 mr-[2.1875rem] grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8" autocomplete="on" @submit.prevent="sendEmail">
                                <div class="sm:mr-4">
                                    <label for="first-name" class="sr-only">First name</label>
                                    <input type="text" v-model="first_name" name="first_name" id="first-name" autocomplete="first name" class="py-3 px-4 block w-full shadow-sm text-gray-600 font-semibold bg-gray-200 focus:bg-gray-300 placeholder-gray-500 focus:ring-purple-600 focus:border-purple-600 rounded-md" placeholder="First name" required>
                                </div>
                                <div>
                                    <label for="last-name" class="sr-only">Last name</label>
                                    <input type="text" v-model="last_name" name="last_name" id="last-name" autocomplete="last name" class="py-3 px-4 block w-full shadow-sm text-gray-600 font-semibold bg-gray-200 focus:bg-gray-300 placeholder-gray-500 focus:ring-purple-600 focus:border-purple-600 rounded-md" placeholder="Last name" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="email" name="email" type="email" v-model="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-gray-600 font-semibold bg-gray-200 focus:bg-gray-300 placeholder-gray-500 focus:ring-purple-600 focus:border-purple-600 rounded-md" placeholder="Email" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea id="message" name="message" v-model="message" rows="4" class="block w-full shadow-sm py-3 px-4 bg-gray-200 focus:bg-gray-300 text-gray-600 font-semibold placeholder-gray-500 focus:ring-purple-600 focus:border-purple-600 border border-gray-300 rounded-md" placeholder="Message" required></textarea>
                                </div>
                                <div class="sm:col-span-2">
                                    <button type="submit" class="contact_btn mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-semibold text-white bg-blue-500 sm:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto">
                                        <i class="fas fa-envelope text-xl"></i>&#160;&#160;Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SUCCESS MESSAGE-->
        <div aria-live="assertive" :class="successMessage" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900">
                                    Successfully submitted!
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    I've got your message, thank you.
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <button class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="closeMessage()">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FAILED MESSAGE-->
        <div aria-live="assertive" :class="failedMessage" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900">
                                    Messaged Failed!
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    I'm sorry, your message didn't go through. Please try again.
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <button class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="closeMessage()">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
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
    import emailjs from "emailjs-com"
    import Loading from "@/Components/Animations/Loading"
    export default defineComponent({
        name: "ContactIndex",
        components: {
            Link,
            Loading,
        },
        props: {
            user: Object,
            appSizeToggle: String,
            menuIsOpened: String,
        },
        data() {
            return {
                first_name: "",
                last_name: "",
                email: "",
                message: "",
                successMessage: "hidden",
                failedMessage: "hidden",
            }
        },
        methods: {
            sendEmail(e) {
                try {
                    emailjs.sendForm("service_8chv6t8", "template_0bkbgh3", e.target, "user_3b3cBUCV3GsGHDxqSPZYc", {
                        first_name: this.first_name,
                        last_name: this.last_name,
                        email: this.email,
                        message: this.message
                    })
                } catch(error) {
                    console.log({error})
                    this.failedMessage = "block"
                }
                this.first_name = ""
                this.last_name = ""
                this.email = ""
                this.message = ""
                this.successMessage = "block"
            },
            closeMessage() {
                this.successMessage = "hidden"
                this.failedMessage = "hidden"
            }
        }
    })
</script>
