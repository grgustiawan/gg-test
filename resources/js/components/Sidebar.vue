<template>
    <nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
        <a class="flex items-center pt-4 pl-5 intro-x" href="">
            <img class="w-6" src="../../../public/images/logo.png" alt="Midone - Tailwind Admin Dashboard Template">
            <span class="hidden ml-3 text-lg text-white xl:block"> Golds Gym </span>
        </a>
        <div class="my-6 side-nav__divider"></div>
        <ul>
            <li>
                <a href="javascript:;" class="side-menu" :class="{'side-menu--active': this.$route.name === 'user' || this.$route.name === 'staff'}">
                    <div class="side-menu__icon">
                        <i class="ri-contacts-book-2-fill"></i>
                    </div>
                    <div class="side-menu__title">
                        Manage
                        <div class="side-menu__sub-icon transform rotate-180">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="side-menu__sub-open">
                    <li @click="this.$router.push('/user')">
                        <a href="javascript:;" class="side-menu" :class="{'side-menu--active': this.$route.name === 'user'}">
                            <div class="side-menu__icon">
                                <i class="ri-id-card-fill"></i>
                            </div>
                            <div class="side-menu__title">
                                User
                            </div>
                        </a>
                    </li>
                    <li @click="this.$router.push('/staff')">
                        <a href="javascript:;" class="side-menu" :class="{'side-menu--active': this.$route.name === 'staff'}">
                            <div class="side-menu__icon text-xl">
                                <i class="ri-user-add-fill"></i>
                            </div>
                            <div class="side-menu__title">
                                Staff
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="side-menu" style="cursor: pointer;" @click="logout">
                    <div class="side-menu__icon">
                        <i class="ri-logout-box-r-line"></i>
                    </div>
                    <div class="side-menu__title">
                        Logout
                        <div class="side-menu__sub-icon transform rotate-180">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
            </li>
            <li class="my-6 side-nav__divider"></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'SidebarVue',
    methods: {
        logout(){
            this.$store.dispatch("LOGOUT")
            .then(() => {
                this.$router.push({ path : '/'});
            }).catch(() => {
                this.$router.push({ path : '/'});
            });
        }
    }
}
</script>

<style>

</style>
