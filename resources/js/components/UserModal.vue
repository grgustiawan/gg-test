<template>
    <div style="position: fixed;top:0;left:0;width:100svw;height: 100svh;z-index: 100;display: flex;justify-content: center;align-items:center;overflow: hidden">
        <div class="overlay"></div>
        <div class="preview-component intro-y box w-2/5">
            <div
                class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row"
            >
                <h2 class="mr-auto text-base font-medium">Add New User</h2>
                <div
                    data-tw-merge=""
                    class="flex items-center mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto cursor-pointer text-xl text-danger z-50"
                >
                    <i class="ri-close-large-fill" @click="closeModal"></i>
                </div>
            </div>
            <div class="p-5">
                <div class="preview relative [&amp;.hide]:overflow-hidden [&amp;.hide]:h-0">
                    <div class="mt-1">
                        <label
                            data-tw-merge=""
                            for="regular-form-1"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            ID Staff
                        </label>
                        <select data-tw-merge="" v-model="user.id_staff" aria-label="Default select example" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2">
                            <option v-for="usr in users" :key="usr.id" :value="usr.id">{{ usr.nama }}</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="regular-form-1"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Hak Akses
                        </label>
                        <select data-tw-merge="" v-model="user.hak_akses" aria-label="Default select example" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="regular-form-1"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Status Akun
                        </label>
                        <select data-tw-merge="" v-model="user.status_akun" aria-label="Default select example" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <button data-tw-merge=""
                        @click="submitUser"
                        class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 mt-5 shadow-md">
                        <spinner v-if="isLoading"></spinner>
                        <span v-if="!isLoading">Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Spinner from './Spinner.vue';

export default {
    name: 'UserModalVue',
    components:{
        Spinner,
    },
    data(){
        return {
            user: {
                id_staff: null,
                hak_akses: null,
                status_akun: null,
            },
            isLoading: false,
            users: null,
        }
    },
    mounted(){
        this.getUsers()
    },
    methods: {
        closeModal(){
            this.$emit('onClosed', false);
        },
        async getUsers(){
            try {
                const {data} = await axios.get('/staff', {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + this.$store.getters.GET_AUTH_TOKEN
                    },
                })

                this.users = data
            } catch(error){
                console.log(error)
            }
        },
        async submitUser(){
            try {
                this.isLoading = true;
                const {data} = await axios.post('/user', this.user, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + this.$store.getters.GET_AUTH_TOKEN
                    },
                })

                this.isLoading = false;
                this.$emit('onResolved', data)
            } catch(error){
                this.$emit('OnError', error)
                console.log(error)
            }
        }
    }
};
</script>
