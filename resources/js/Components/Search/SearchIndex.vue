<template>
    <header class="header flex items-center pr-6 pl-0 min-h-[4.625rem] h-[4.625rem]">
        <div class="relative px-4 sm:hidden">
            <div class="relative w-[2.1875rem] h-[2.375rem] cursor-pointer" @click="toggleMenu()">
                <div class="absolute bg-[#6c727f] transform origin-center rounded-full transition-all" :class="rotate135"></div>
                <div class="absolute bg-[#6c727f] w-[2.6875rem] h-[0.425rem] transform origin-center -rotate-[45deg] translate-y-[0.90625rem] -translate-x-[0.3125rem] rounded-full"></div>
                <div class="absolute bg-[#6c727f] w-[1.53125rem] transform origin-center rounded-full transition-all" :class="rotate45"></div>
            </div>
        </div>
        <div class="flex justify-between items-center w-full">
            <div class="w-full pl-0">
                <div class="relative flex rounded-[1.25rem] bg-[#1E192B] max-w-full sm:max-w-[28.125rem] transition-all">
                    <!--SEARCH BAR-->
                    <input @keydown="show_projects" ref="searchBarElement" type="search" name="search" class="relative appearance-none border-none outline-none bg-[#1E192B] rounded-tl-[1.25rem] rounded-bl-[1.25rem] text-[#656467] w-full px-4 text-base font-semibold focus:text-white z-30" aria-labelledby="Search Projects" placeholder="Search Projects" v-model="searchString" @blur="toggleSearchIcon(false)" @focus="toggleSearchIcon(true)">
                    <div class="relative inline-block flex items-center bg-[#1E192B] border-0 h-[2.5rem] m-0 pr-2.5 text-base cursor-text rounded-tr-[1.25rem] rounded-br-[1.25rem] z-30 transition-colors" :class="iconColor" @click="focusOnSearchBar">
                        <i class="fas fa-search"></i>
                    </div>
                    <!--SEARCH FIELD-->
                    <div class="absolute bg-[#1E192B] pt-12 w-full rounded-bl-xl rounded-br-xl rounded-tl-[1.3rem] rounded-tr-[1.3rem] z-20 overflow-hidden" v-show="empty">
                        <ul v-for="project in filtered_projects" :key="project.id" v-cloak>
                            <Link :href="route('show.project', [project.id])" method="post" :data="{ id: project.id }" as="fetch" preserve-state>
                                <li class="pl-4 space-y-2 font-semibold text-white cursor-pointer py-3 sm:hover:bg-[#322a45] transition-colors">{{ project.title }}</li>
                            </Link>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex hidden xl:block">
                <!--EXPAND ICON-->
                <div class="ml-7 text-gray-500 hover:text-white sm:hover:scale-110 transition" @click="expand(true)">
                    <i class="fas fa-expand-alt cursor-pointer"></i>
                </div>
                <!--COLLAPSE ICON-->
                <div class="hidden ml-7 text-gray-500 hover:text-white sm:hover:scale-110 transition">
                    <i class="fas fa-compress-alt cursor-pointer"></i>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    import {defineComponent, ref, onMounted} from "vue"
    import {Link} from "@inertiajs/inertia-vue3"
    export default defineComponent({
        name: "SearchIndex",
        components: {
            Link,
        },
        props: {
            projects: Object,
        },
        data(){
            return{
                project: "",
                empty: false,
                searchString: "",
            }
        },
        methods:{
            show_projects(){
                this.empty = true
            }
        },
        updated(){
            this.project = this.projects
            if(this.searchString === ""){
                this.empty = false
            }
        },
        computed: {
            filtered_projects: function () {
                let articles_array = this.project,
                    searchString = this.searchString

                if(!searchString){
                    return articles_array
                }

                searchString = searchString.trim().toLowerCase();

                articles_array = articles_array.filter(function(item){
                    if(item.title.toLowerCase().indexOf(searchString) !== -1){
                        return item;
                    }
                })
                return articles_array
            }
        },
        setup(props, { emit }) {
            const rotate45 = ref("-rotate-[45deg] h-[0.3125rem] translate-y-[1.5rem] translate-x-[0.8125rem]")
            const rotate135 = ref("w-[0.9375rem] h-[0.3125rem] -rotate-[45deg] translate-y-[0.3125rem] -translate-x-[0.0625rem]")
            const searchBarElement = ref(null)
            const iconColor = ref("text-[#656467]")

            onMounted(() => {
                if(localStorage.getItem("mobileMenuIsClosed") === "true") {
                    initMenuState(true)
                } else {
                    initMenuState(false)
                }
            })

            const focusOnSearchBar = ()=>{
                searchBarElement.value.focus()
            }

            const expand = () => {
                //GET LOCAL STORAGE
                const appSizeToggle = localStorage.getItem("appSizeToggle")

                //CHANGE MENU STYLES BASED ON TOGGLE BUTTON
                if(appSizeToggle === "true") {
                    localStorage.removeItem("appSizeToggle");
                    emit("toggleSize")
                } else {
                    localStorage.setItem("appSizeToggle", "true");
                    emit("toggleSize")
                }
            }

            const toggleSearchIcon = (status) => {
                if(status) {
                    iconColor.value = "text-[#353536]"
                } else {
                    iconColor.value = "text-[#656467]"
                }
            }

            const initMenuState = (status) => {
                if(status) {
                    rotate45.value = "rotate-[45deg] h-[0.425rem] translate-y-[1.25rem] translate-x-[0.625rem]";
                    rotate135.value = "w-[1.375rem] h-[0.425rem] -rotate-[135deg] translate-y-[0.46875rem] -translate-x-[0.125rem]";
                } else {
                    rotate45.value  = "-rotate-[45deg] h-[0.3125rem] translate-y-[1.5rem] translate-x-[0.8125rem]";
                    rotate135.value = "w-[0.9375rem] h-[0.3125rem] -rotate-[45deg] translate-y-[0.3125rem] -translate-x-[0.0625rem]";
                }
            }

            const toggleMenu = () => {
                //GET LOCAL STORAGE
                const mobileMenuState = localStorage.getItem("mobileMenuIsClosed")
                let updatedStatus;

                //CHANGE MENU STYLES BASED ON TOGGLE BUTTON
                if(mobileMenuState === "true") {
                    localStorage.removeItem("mobileMenuIsClosed");
                    updatedStatus = localStorage.getItem("mobileMenuIsClosed")
                    rotate45.value  = "-rotate-[45deg] h-[0.3125rem] translate-y-[1.5rem] translate-x-[0.8125rem]";
                    rotate135.value = "w-[0.9375rem] h-[0.3125rem] -rotate-[45deg] translate-y-[0.3125rem] -translate-x-[0.0625rem]";
                    emit("toggleMobileMenu", updatedStatus)
                } else {
                    localStorage.setItem("mobileMenuIsClosed", "true");
                    updatedStatus = localStorage.getItem("mobileMenuIsClosed")
                    rotate45.value = "rotate-[45deg] h-[0.425rem] translate-y-[1.25rem] translate-x-[0.625rem]";
                    rotate135.value = "w-[1.375rem] h-[0.425rem] -rotate-[135deg] translate-y-[0.46875rem] -translate-x-[0.125rem]";
                    emit("toggleMobileMenu", updatedStatus)
                }
            }

            return {
                rotate45,
                rotate135,
                iconColor,
                searchBarElement,
                expand,
                toggleMenu,
                initMenuState,
                focusOnSearchBar,
                toggleSearchIcon,
            }
        }
    })
</script>
