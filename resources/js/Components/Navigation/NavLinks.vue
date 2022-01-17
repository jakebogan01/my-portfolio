<template>
<!--PROJECTS-->
    <li>
        <Link :href="route('projects')">
            <div class="relative flex mx-4 group sm:hover:bg-[#B721FF] rounded-md cursor-pointer" :class="{ 'bg-[#B721FF]': $page.url === '/' ? 'bg-[#B721FF]': pageStatus === true }" >
<!--                :style="pageStatus === 'projectsPage' ? 'background: #B721FF;' : ''"-->
                <div class="flex justify-center items-center w-[2.1875rem] h-[2.1875rem] z-10">
                    <!--PROJECTS ICON-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:group-hover:fill-white" :class="{ 'fill-white': $page.url === '/' ? 'fill-white': pageStatus === true }" fill="rgba(255,255,255,0.5)" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                </div>
                <div class="hidden sm:flex items-center text-base text-[rgba(255,255,255,0.5)] sm:group-hover:text-white font-semibold whitespace-nowrap transition-[width] duration-300 overflow-hidden" :class="menuStyles.updateWidth">
                    <!--PROJECTS BUTTON TEXT-->
                    <span class="transition-opacity" :class="menuStyles.updateOpacity">
                        <span :class="{ 'text-white': $page.url === '/' ? 'text-white': pageStatus === true }">&#160;&#160;&#160;&#160;Projects</span>
                    </span>
                </div>
            </div>
        </Link>
    </li>

<!--ABOUT-->
    <li class="my-6">
        <Link :href="route('about')">
            <div class="relative flex mx-4 group sm:hover:bg-[#B721FF] rounded-md cursor-pointer" :class="{ 'bg-[#B721FF]': $page.url === '/about' }">
                <div class="flex justify-center items-center w-[2.1875rem] h-[2.1875rem] z-10">
                    <!--ABOUT ICON-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:group-hover:fill-white" :class="{ 'fill-white': $page.url === '/about' }" fill="rgba(255,255,255,0.5)" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="hidden sm:flex items-center text-base text-[rgba(255,255,255,0.5)] sm:group-hover:text-white font-semibold whitespace-nowrap transition-[width] duration-300 overflow-hidden" :class="menuStyles.updateWidth">
                    <!--ABOUT BUTTON TEXT-->
                    <span class="transition-opacity" :class="menuStyles.updateOpacity">
                        <span :class="{ 'text-white': $page.url === '/about' }">&#160;&#160;&#160;&#160;About</span>
                    </span>
                </div>
            </div>
        </Link>
    </li>

<!--SKILLS-->
    <li class="my-6">
        <Link :href="route('skills')">
            <div class="relative flex mx-4 group sm:hover:bg-[#B721FF] rounded-md cursor-pointer" :class="{ 'bg-[#B721FF]': $page.url === '/skills' }">
                <div class="flex justify-center items-center w-[2.1875rem] h-[2.1875rem] z-10">
                    <!--SKILLS ICON-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:group-hover:fill-white" :class="{ 'fill-white': $page.url === '/skills' }" fill="rgba(255,255,255,0.5)" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="hidden sm:flex items-center text-base text-[rgba(255,255,255,0.5)] sm:group-hover:text-white font-semibold whitespace-nowrap transition-[width] duration-300 overflow-hidden" :class="menuStyles.updateWidth">
                    <!--SKILLS BUTTON TEXT-->
                    <span class="transition-opacity" :class="menuStyles.updateOpacity">
                        <span :class="{ 'text-white': $page.url === '/skills' }">&#160;&#160;&#160;&#160;Skills</span>
                    </span>
                </div>
            </div>
        </Link>
    </li>

<!--CONTACT-->
    <li class="mt-6">
        <Link :href="route('contact')">
            <div class="relative flex mx-4 group sm:hover:bg-[#B721FF] rounded-md cursor-pointer" :class="{ 'bg-[#B721FF]': $page.url === '/contact' }">
                <div class="flex justify-center items-center w-[2.1875rem] h-[2.1875rem] z-10">
                    <!--CONTACT ICON-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:group-hover:fill-white" :class="{ 'fill-white': $page.url === '/contact' }" fill="rgba(255,255,255,0.5)" viewBox="0 0 20 20">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <div class="hidden sm:flex items-center text-base text-[rgba(255,255,255,0.5)] sm:group-hover:text-white font-semibold whitespace-nowrap transition-[width] duration-300 overflow-hidden" :class="menuStyles.updateWidth">
                    <!--CONTACT BUTTON TEXT-->
                    <span class="transition-opacity" :class="menuStyles.updateOpacity">
                        <span :class="{ 'text-white': $page.url === '/contact' }">&#160;&#160;&#160;&#160;Contact</span>
                    </span>
                </div>
            </div>
        </Link>
    </li>
</template>

<script>
    import {defineComponent} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    export default defineComponent({
        name: "NavLinks",
        components: {
            Link,
        },
        props: {
            menuStyles: Object,
            pageStatus: Boolean,
        },
    })
</script>
