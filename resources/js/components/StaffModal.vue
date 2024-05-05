<template>
    <div style="position: fixed;top:0;left:0;width:100svw;height: 100svh;z-index: 100;display: flex;justify-content: center;align-items:center;overflow: hidden">
        <div class="overlay"></div>
        <div class="preview-component intro-y box w-2/5">
            <div
                class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row"
            >
                <h2 class="mr-auto text-base font-medium">Add New Staff</h2>
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
                            NIK
                        </label>
                        <input
                            data-tw-merge=""
                            id="nik"
                            type="text"
                            placeholder="Input text"
                            v-model="staff.nik"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                        />
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="regular-form-1"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Nama
                        </label>
                        <input
                            data-tw-merge=""
                            id="nama"
                            type="text"
                            placeholder="Input text"
                            v-model="staff.nama"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                        />
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="regular-form-1"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Email
                        </label>
                        <input
                            data-tw-merge=""
                            id="email"
                            type="text"
                            placeholder="Email"
                            v-model="staff.email"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                        />
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="telepon"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Telepon
                        </label>
                        <input
                            data-tw-merge=""
                            id="regular-form-1"
                            type="text"
                            placeholder="Telepon"
                            v-model="staff.telepon"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                        />
                    </div>
                    <div class="mt-3">
                        <label
                            data-tw-merge=""
                            for="password"
                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                        >
                            Password
                        </label>
                        <input
                            data-tw-merge=""
                            id="regular-form-1"
                            type="password"
                            placeholder="Password"
                            v-model="staff.password"
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                        />
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
    name: 'StaffModalVue',
    components:{
        Spinner,
    },
    data(){
        return {
            staff: {
                nik: null,
                nama: null,
                email: null,
                telepon: null,
                password: null,
            },
            isLoading: false,
        }
    },
    methods: {
        closeModal(){
            this.$emit('onClosed', false);
        },
        async submitUser(){
            try {
                console.log(this.staff)
                this.isLoading = true;
                const {data} = await axios.post('/staff', this.staff, {
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

<style>
.overlay{
    position: absolute;
    top: 0;
    left:0;
    width: 100%;
    height: 100%;
    background: #0000008e;
}
</style>
