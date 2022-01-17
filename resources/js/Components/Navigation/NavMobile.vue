<template>
    <!--NAV SHOWS ON MOBILE VIEWPORTS-->
    <nav class="absolute top-0 bg-[rgba(0,0,0,0.30)] h-full sm:hidden overflow-hidden transition-all z-50" :class="showNav">
        <ul class="relative bg-[#242236] h-full w-[4.1875rem] transition-all" :class="navCurrentDisplay">
            <NavLinks :menuStyles="menuStyles"/>
        </ul>
    </nav>
</template>

<script>
    import {defineComponent, onMounted, onUpdated, ref} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    import NavLinks from "@/Components/Navigation/NavLinks"
    export default defineComponent({
        name: "NavMobile",
        components: {
            Link,
            NavLinks,
        },
        props: {
            mobileMenuIsOpened: String,
        },
        setup(props) {
            const menuStyles = ref({
                updateWidth: ref("w-44"),
                updateOpacity: ref(null),
            })
            const navCurrentDisplay = ref("-left-12")
            const showNav = ref("max-w-0 min-w-0 opacity-0")

            onMounted(() => {
                if(localStorage.getItem("mobileMenuIsClosed") === "true") {
                    initMenuState(true)
                } else {
                    initMenuState(false)
                }
            })

            onUpdated(() => {
                if(localStorage.getItem("mobileMenuIsClosed") === "true") {
                    initMenuState(true)
                } else {
                    initMenuState(false)
                }
            })

            const initMenuState = (status) => {
                if(status) {
                    navCurrentDisplay.value = "left-0";
                    showNav.value = "min-w-[100%] max-w-[100%] w-full opacity-1";
                } else {
                    navCurrentDisplay.value = "-left-12";
                    showNav.value = "max-w-0 min-w-0 w-0 opacity-0";
                }
            }

            return {
                showNav,
                menuStyles,
                navCurrentDisplay,
                initMenuState,
            }
        }
    })
</script>
