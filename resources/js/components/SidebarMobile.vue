<template>
    <div class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&amp;.mobile-menu--active]:before:visible [&amp;.mobile-menu--active]:before:opacity-100">
        <div class="flex h-[70px] items-center px-3 sm:px-8">
            <a class="mr-auto flex" href="">
                <img class="w-6" src="../../../public/images/logo.svg" alt="Midone - Tailwind Admin Dashboard Template">
            </a>
            <a class="mobile-menu-toggler" href="#">
                <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
            </a>
        </div>
        <div class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&amp;[data-simplebar]]:fixed [&amp;_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
            <a href="#" class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
                <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
            </a>
            <ul class="py-2">
                <li>
                    <a class="menu menu--active" href="javascript:;">
                        <div class="menu__icon">
                            <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="menu__title">
                            Manage
                            <div class="menu__sub-icon transform rotate-180">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a class="menu menu--active" href="rubick-side-menu-crud-data-list-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    User
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="menu" href="rubick-side-menu-crud-form-page.html">
                                <div class="menu__icon">
                                    <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="menu__title">
                                    Staff
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__divider my-6"></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SidebarMobileVue'
}
</script>

<style>

</style>
