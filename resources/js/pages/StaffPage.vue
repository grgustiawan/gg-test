<template>
    <div class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <sidebar-mobile-vue></sidebar-mobile-vue>
        <div class="mt-[4.7rem] flex md:mt-0">
            <sidebar></sidebar>

            <div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
                    <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
                        <ol class="flex items-center text-theme-1 dark:text-slate-300">
                            <li class="">
                                <a>Manage</a>
                            </li>
                            <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                                <a>{{ String(this.$route.name).charAt(0).toUpperCase() + String(this.$route.name).slice(1) }}</a>
                            </li>
                        </ol>
                    </nav>


                    <div class="search intro-x relative mr-3 sm:mr-6">
                        <div class="relative hidden sm:block">
                            <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400/70">
                            <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
                        </div>
                        <a class="relative text-slate-600 sm:hidden" href="">
                            <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
                        </a>
                    </div>

                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg"><img src="../../../public/images/profile.png" alt="Midone - Tailwind Admin Dashboard Template">
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
                                <div class="p-2 font-medium font-normal">
                                    <div class="font-medium">Kevin Spacey</div>
                                    <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                                        DevOps Engineer
                                    </div>
                                </div>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                </div>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Profile</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Add Account</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Reset Password</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="help-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Help</a>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                                </div>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="intro-y mt-10 text-lg font-medium">Data Staff</h2>
                <div class="mt-5 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                        <button data-tw-merge="" @click="showCreate = true" class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">Add New Staff</button>

                        <div class="mx-auto hidden text-slate-500 md:block">
                            Showing 1 to {{ staff.length }} of {{ staff.length }} entries
                        </div>
                        <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                            <div class="relative w-56 text-slate-500">
                                <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                            <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        IMAGE
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        NAME
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        NIK
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        EMAIL
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        PHONE
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        STATUS
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="data-staff">
                                <tr data-tw-merge="" class="intro-x" v-for="st in staff" :key="st.id">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at8 August 2022" src="../../../public/images/profile.png" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="">
                                            {{ st.nama }}
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Sport &amp; Outdoor
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        {{ st.nik }}
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        {{ st.email }}
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        {{ st.telepon }}
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                            Active
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a @click="editStaff(st)" class="mr-3 flex items-center" href="#">
                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                Edit
                                            </a>
                                            <a @click="selectedStaff = st.id" class="flex items-center text-danger" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal" href="#">
                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                </div>

                <!-- Confirmation Modal -->
                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-confirmation-modal" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                    <div data-tw-merge="" class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                        <div class="p-5 text-center">
                            <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mx-auto mt-3 h-16 w-16 text-danger"></i>
                            <div class="mt-5 text-3xl">Are you sure?</div>
                            <div class="mt-2 text-slate-500">
                                Do you really want to delete these records? <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button data-tw-merge="" data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</button>
                            <button data-tw-merge="" @click="deleteStaff" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">
                                <spinner v-if="isLoading"></spinner>
                                <span v-if="!isLoading">Delete</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
            <!-- END: Content -->
        </div>
    </div>

    <staff-modal-vue
        @onClosed="closedModal"
        @onResolved="submitted"
        @onError="onError"
        v-if="showCreate">
    </staff-modal-vue>

    <staff-modal-edit-vue
        @onClosed="closedModalEdit"
        @onResolved="submitted"
        @onError="onErrorEdit"
        v-if="showEdit"
        :staff="selectedStaff">
    </staff-modal-edit-vue>

    <alert
        v-if="showAlert"
        :message="alertMessage"
        :success="success">
    </alert>
</template>

<script>
import axios from 'axios';
import Sidebar from '../components/Sidebar.vue';
import SidebarMobileVue from '../components/SidebarMobile.vue';
import StaffModalVue from '../components/StaffModal.vue';
import Spinner from '../components/Spinner.vue';
import StaffModalEditVue from '../components/StaffModalEdit.vue';
import Alert from '../components/Alert.vue';

export default {
    name: 'StaffPage',
    components: {
        Sidebar,
        SidebarMobileVue,
        StaffModalVue,
        Spinner,
        StaffModalEditVue,
        Alert,
    },
    data(){
        return {
            Sidebar,
            SidebarMobileVue,
            staff: null,
            authToken: null,
            showCreate: false,
            showEdit: false,
            selectedStaff: null,
            isLoading: false,
            selectedStaff: null,
            showAlert: false,
            success: false,
            alertMessage: null,
        }
    },
    created(){
        this.authToken = this.$store.getters.GET_AUTH_TOKEN
        this.getStaffData()
    },
    methods: {
        async getStaffData(){
            try {
                const {data} = await axios.get('/staff', {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + this.authToken
                    }
                })

                this.staff = data
            } catch(error){
                console.log(error)
                if (error.response.status == 401) {
                    this.$store.dispatch("LOGOUT")
                    .then(() => {
                        this.$router.push({ path: "/login" });
                    })
                    .catch(() => {
                        this.$router.push({ path: "/login" });
                    });
                }
            }
        },
        editStaff(stf){
            this.selectedStaff = stf
            this.showEdit = true
        },
        closedModal(value){
            this.showCreate = value
        },
        closedModalEdit(value){
            this.showEdit = value
            this.selectedStaff = null
        },
        submitted(value){
            this.success = true;
            this.alertMessage = value.message
            this.showAlert = true;

            setTimeout(() => {
                window.location.reload
            }, 3000)

            window.location.reload()
        },
        onError(value){
            this.success = false;
            this.alertMessage = value.message
            this.showAlert = true;

            setTimeout(() => {
                this.showAlert = false;
                this.success = false;
                this.alertMessage = value.message
            }, 3000)
            alert(value.message)
        },
        onErrorEdit(value){
            this.success = false;
            this.alertMessage = value.message
            this.showAlert = true;

            setTimeout(() => {
                this.showAlert = false;
                this.success = false;
                this.alertMessage = value.message
            }, 3000)
            alert(value.message)
        },
        async deleteStaff(){
            try {
                this.isLoading = true;
                await axios.delete('/staff/' + this.selectedStaff, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + this.authToken
                    }
                })

                this.isLoading = false;
                window.location.reload();
            } catch(error){
                console.log(error)
            }
        }
    }
}
</script>
