<template>
    <nav class="relative h-full hidden sm:block" @mouseenter="toggleNavArrow(true)" @mouseleave="toggleNavArrow(false)">
        <ul>
            <li class="flex items-center px-4 h-[4.625rem]">
                <Link :href="route('projects')">
                    <!--ANIMATED DESKTOP MENU-->
                    <MenuIntroAnimation :class="introMenuStyle === 'true' ? 'hidden' : 'block'" />
                    <!--REGULAR DESKTOP MENU-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" class="group w-[2.1875rem] h-[2.375rem] sm:hover:scale-110 transition-transform" :class="introMenuStyle === 'true' ? 'block' : 'hidden'"><g><rect width="36.228504" height="37.407685" rx="0" ry="0" transform="matrix(1.104103 0 0 1.069299 0 0)" fill="rgb(36,34,54)" stroke="none" stroke-width="1"/><g transform="matrix(1 0 0 1 0.000001 0)"><path class="sm:group-hover:stroke-white transition-colors" d="M5.618066,35.694747L35.618066,5.694747L5.618066,35.694747Z" transform="matrix(-0.970685 0 0 -0.967785 38.942342 38.717426)" fill="none" stroke="rgb(108,114,127)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/><path class="sm:group-hover:stroke-white transition-colors" d="M5.168027,13.324404L13.249791,5.242639L5.168027,13.324404Z" transform="matrix(-0.982073 0.009428 -0.009261 -0.964734 16.410962 16.010504)" fill="none" stroke="rgb(108,114,127)" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/><path class="sm:group-hover:stroke-white transition-colors" d="M23.578377,38.322343L38.321723,23.578997L23.578377,38.322343Z" transform="matrix(-1.025862 -0.00984 0.010067 -1.049445 60.226414 61.558469)" fill="none" stroke="rgb(108,114,127)" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>
                </Link>
            </li>
            <!--NAV LINKS-->
            <NavLinks :menuStyles="menuStyles" :pageStatus="pageStatus" />
        </ul>
        <div class="relative h-full" @click="toggleMenu()">
            <!--ARROW BUTTON-->
            <div class="absolute -right-3 top-16 flex justify-center items-center cursor-pointer rounded-full w-8 h-8 shadow-[3px_0_1px_rgba(0,0,0,0.3)] z-10 transition-transform" :class="menuStyles.updateArrowOpacity">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" class="group h-8 w-8 transform" :class="menuStyles.updateArrowDisplay">
                    <g transform="matrix(0.773557 0 0 0.773557 -3.295977 -2.235569)">
                        <ellipse rx="6.449166" ry="5.823571" transform="matrix(1.503384 0 0 1.664867 13.956171 12.585454)" fill="#242236" stroke="none" stroke-width="0"/>
                        <path class="stroke-[#6d727e] group-hover:stroke-white transition-colors" d="M5.327892,3.26464l6.658434,6.529281-6.658434,6.610894" transform="matrix(-.771989 0 0-.746822 20.639472 19.930249)" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </div>
        </div>
    </nav>
</template>

<script>
    import {defineComponent, onMounted, onUpdated, ref} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    import NavLinks from "@/Components/Navigation/NavLinks"
    import MenuIntroAnimation from "@/Components/Animations/Buttons/MenuIntroAnimation"
    export default defineComponent({
        name: "NavIndex",
        components: {
            Link,
            NavLinks,
            MenuIntroAnimation,
        },
        props: {
            menuIsOpened: String,
            pageStatus: Boolean,
        },
        setup(props, { emit }) {
            const menuStyles = ref({
                updateWidth: ref("w-0 xl:w-44"),
                updateOpacity: ref(null),
                updateArrowDisplay: ref(null),
                updateArrowOpacity: ref("scale-0")
            })
            const menuTouched = ref(false)
            const introMenuStyle = ref(localStorage.getItem("logoToggle"))

            onMounted(() => {
                //GET LOCAL STORAGE
                const menuHistory = localStorage.getItem("menuIsClosed")
                localStorage.setItem("logoToggle", "true")
                emit("toggleMenu", menuHistory)

                //CHECK IF MENU IS CLOSED
                if(menuHistory === "true") {
                    currentMenuStatus();
                }
            })

            onUpdated(() => {
                //CHECK IF MENU IS CLOSED
                if(props.menuIsOpened === "true") {
                    currentMenuStatus(true);
                } else {
                    currentMenuStatus(false);
                }
            })

            const toggleNavArrow = (status) => {
                if(status) {
                    menuStyles.value.updateArrowOpacity = "scale-0 xl:scale-100";
                } else {
                    menuStyles.value.updateArrowOpacity = "scale-0";
                }
            }

            //CHANGE MENU STYLES BASED ON HISTORY
            const currentMenuStatus = (status) => {
                if(status) {
                    menuStyles.value.updateWidth = "w-0";
                    menuStyles.value.updateOpacity = "opacity-0";
                    menuStyles.value.updateArrowDisplay = "rotate-180";
                } else {
                    menuStyles.value.updateWidth = "w-0 xl:w-44";
                    menuStyles.value.updateOpacity = null;
                    menuStyles.value.updateArrowDisplay = null;
                }
            }

            const toggleMenu = () => {
                //GET LOCAL STORAGE
                const menuHistory = localStorage.getItem("menuIsClosed")
                let updatedStatus;

                //CHANGE MENU STYLES BASED ON TOGGLE BUTTON
                if(menuHistory === "true") {
                    localStorage.removeItem("menuIsClosed");
                    updatedStatus = localStorage.getItem("menuIsClosed")
                    menuStyles.value.updateWidth = "w-0 xl:w-44";
                    menuStyles.value.updateOpacity = null;
                    emit("toggleMenu", updatedStatus)
                } else {
                    localStorage.setItem("menuIsClosed", "true");
                    updatedStatus = localStorage.getItem("menuIsClosed")
                    menuStyles.value.updateWidth = "w-0";
                    menuStyles.value.updateOpacity = "opacity-0";
                    emit("toggleMenu", updatedStatus)
                }
            }

            return {
                menuStyles,
                menuTouched,
                introMenuStyle,
                toggleMenu,
                toggleNavArrow,
                currentMenuStatus,
            }
        }
    })
</script>
