<template>
    <div class="p-3 sm:px-8 relative h-screen lg:overflow-hidden bg-primary xl:bg-white dark:bg-darkmode-800 xl:dark:bg-darkmode-600 before:hidden before:xl:block before:content-[''] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[13%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-4.5deg] before:bg-primary/20 before:rounded-[100%] before:dark:bg-darkmode-400 after:hidden after:xl:block after:content-[''] after:w-[57%] after:-mt-[20%] after:-mb-[13%] after:-ml-[13%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[-4.5deg] after:bg-primary after:rounded-[100%] after:dark:bg-darkmode-700">
        <div class="container relative z-10 sm:px-10">
            <div class="block grid-cols-2 gap-4 xl:grid">
                <div class="hidden min-h-screen flex-col xl:flex">
                    <a class="-intro-x flex items-center pt-5" href="">
                        <img
                            class="w-6"
                            src="../../../public/images/logo.png"
                        />
                        <span class="ml-3 text-lg text-white"> Gold's Gym </span>
                    </a>
                    <div class="my-auto">
                        <img
                            class="-intro-x -mt-16 w-1/2"
                            src="../../../public/images/illustration.svg"
                        />
                        <div
                            class="-intro-x mt-10 text-4xl font-medium leading-tight text-white"
                        >
                            A few more clicks to <br />
                            sign in to your account.
                        </div>
                        <div
                            class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"
                        >
                            Manage all your accounts in one place
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Login Form -->
                <div class="my-10 flex h-screen py-5 xl:my-0 xl:h-auto xl:py-0">
                    <div
                        class="mx-auto my-auto w-full rounded-md bg-white px-5 py-8 shadow-md dark:bg-darkmode-600 sm:w-3/4 sm:px-8 lg:w-2/4 xl:ml-20 xl:w-auto xl:bg-transparent xl:p-0 xl:shadow-none"
                    >
                        <h2
                            class="intro-x text-center text-2xl font-bold xl:text-left xl:text-3xl"
                        >
                            Sign In
                        </h2>
                        <div
                            class="intro-x mt-2 text-center text-slate-400 xl:hidden"
                        >
                            A few more clicks to sign in to your account. Manage
                            all your e-commerce accounts in one place
                        </div>
                        <div class="intro-x mt-8">
                            <input
                                data-tw-merge=""
                                type="text"
                                placeholder="Email"
                                v-model="email"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x block min-w-full px-4 py-3 xl:min-w-[350px]"
                            />
                            <span class="text-danger" v-if="errorEmail">{{ errorEmail }}</span>
                            <input
                                data-tw-merge=""
                                type="password"
                                placeholder="Password"
                                v-model="password"
                                @keyup.enter="login"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]"
                            />
                            <span class="text-danger" v-if="errorPass">{{ errorPass }}</span>
                        </div>
                        <div
                            class="intro-x mt-5 text-center xl:mt-8 xl:text-left"
                        >
                            <button
                                @click="login"
                                data-tw-merge=""
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full px-4 py-3 align-top xl:mr-3 xl:w-32"
                            >
                                <spinner v-if="is_proccess"></spinner>
                                <span v-if="!is_proccess">Login</span>
                            </button>
                            <button
                                @click="this.$router.push('/register')"
                                data-tw-merge=""
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mt-3 w-full px-4 py-3 align-top xl:mt-0 xl:w-32"
                            >
                                Register
                            </button>
                        </div>
                        <div
                            class="intro-x mt-10 text-center text-slate-600 dark:text-slate-500 xl:mt-24 xl:text-left"
                        >
                            By signin up, you agree to our
                            <a class="text-primary dark:text-slate-200" href="">
                                Terms and Conditions
                            </a>
                            &amp;
                            <a class="text-primary dark:text-slate-200" href="">
                                Privacy Policy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <alert
        v-if="showAlert"
        :message="alertMessage"
        :success="status">
    </alert>
</template>

<script>
import Alert from '../components/Alert.vue'
import Spinner from '../components/Spinner.vue'

export default {
    name: "LoginPage",
    components: {
        Spinner,
        Alert,
    },
    data(){
        return {
            email: null,
            password: null,
            errorEmail: null,
            errorPass: null,
            is_proccess: false,
            message: null,
            status: false,
            showAlert: false,
            alertMessage: null,
        }
    },
    methods: {
        login(){
            if(!this.email) this.errorEmail = "Field NIK harus diisi!";
            if(!this.password) this.errorPass = "Field password harus diisi";
            if(!this.email || !this.password) return;

            this.is_proccess = true

            const data = {
                email: this.email,
                password: this.password,
            }

            if(this.email && this.password){
                this.$store.dispatch("LOGIN", data)
                .then(() => {
                    this.is_proccess = false
                    this.$router.push({ name : 'staff'});
                }).catch((error) => {
                    this.is_proccess = false
                    this.alertMessage = error.response.data.message
                    this.status = false
                    this.showAlert = true

                    setTimeout(() => {
                        this.showAlert = false
                        this.alertMessage = null
                        this.status = false
                    }, 5000);
                })
            }

            setTimeout(() => {
                this.errorEmail = null;
                this.errorPass = null;
            }, 5000);
        },
        onClosedAlert(value){this.showAlert = value},
    },
}
</script>
