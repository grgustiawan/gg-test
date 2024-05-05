<template>
    <div
        class="py-2 bg-gradient-to-b from-theme-1 to-theme-2 dark:from-darkmode-800 dark:to-darkmode-800"
    >
        <div class="container">
            <div
                class="flex flex-col items-center justify-center h-screen text-center error-page lg:flex-row lg:text-left"
            >
                <div class="-intro-x lg:mr-20">
                    <img
                        class="h-48 w-[450px] lg:h-auto"
                        src="../../../public/images/error-illustration.svg"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                </div>
                <div class="mt-10 text-white lg:mt-0">
                    <div class="font-medium intro-x text-8xl">404</div>
                    <div class="mt-5 text-xl font-medium intro-x lg:text-3xl">
                        Oops. This page has gone missing.
                    </div>
                    <div class="mt-3 text-lg intro-x">
                        You may have mistyped the address or the page may have
                        moved.
                    </div>
                    <button
                        @click="this.$router.push('/')"
                        data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed px-4 py-3 mt-10 text-white border-white intro-x dark:border-darkmode-400 dark:text-slate-200"
                    >
                        Back to Home
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NotFoundPage",
};
</script>
