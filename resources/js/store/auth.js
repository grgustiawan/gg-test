import axios from 'axios';

export const auth = {
    state: {
        auth_status: false,
        auth_token: null,
        sidebar: {
            sidebarwidth: "18%",
            bgsidebar: "18%",
            expand: false,
        },
        auth_info: {
            id: null,
            name: null,
            nik: null,
            gender: null,
            email: null,
            phone: null,
            address: null,
            birth_date: null,
            birth_place: null,
            company: null,
            division: null,
            subdivision: null,
            department: null,
            position: null,
            photo: null,
            role: null,
            blood: null,
            joindate: null,
            access_token: null,
            permission: null
        },
        auth_reset: false
    },

    getters: {
        GET_AUTH_TOKEN(state){
            return state.auth_token;
        },

        GET_AUTH_INFO(state){
            return state.auth_info;
        },

        GET_AUTH_RESET(state){
            return state.auth_reset;
        },

        GET_SIDEBAR_WIDTH(state){
            return state.sidebar;
        }
    },

    actions: {
        LOGIN(context, loginData){
            return new Promise ((resolve, reject) => {
                axios.post('/login', loginData)
                     .then((response) => {
                        console.log(response)
                        context.commit('SET_AUTH_TOKEN', response.data.token);
                        context.commit('SET_AUTH_INFO', response.data.staff);
                        resolve(response);
                     }).catch((error) => {
                        reject(error);
                     })
            });
        },

        REFRESH(context){
            axios.defaults.headers.common['Authorization'] = context.state.auth_token;
            return new Promise ((resolve, reject) => {
                axios.get('/login')
                     .then((response) => {
                        context.commit('SET_AUTH_TOKEN', response.data.token);
                        context.commit('SET_AUTH_INFO', response.data.user);
                        resolve(response);
                     }).catch((error) => {
                        context.commit('SET_AUTH_LOGOUT')
                        reject(error);
                     })
            });
        },

        FORGOT(context, forgotData){
            return new Promise ((resolve, reject) => {
                axios.post('/forgot', forgotData)
                     .then((response) => {
                        context.commit('SET_AUTH_RESET');
                        resolve(response);
                     }).catch((error) => {
                        reject(error);
                     })
            });
        },

        RESET(context, payload){
            return new Promise ((resolve, reject) => {
                axios.post('/reset', payload)
                     .then((response) => {
                        context.commit('SET_AUTH_RESET');
                        resolve(response);
                     }).catch((error) => {
                        reject(error);
                     })
            });
        },

        LOGOUT(context){
            axios.defaults.headers.common['Authorization'] = context.state.auth_token;
            return new Promise ((resolve, reject) => {
                axios.get('/logout')
                     .then((response) => {
                        context.commit('SET_AUTH_LOGOUT')
                        resolve(response);
                     }).catch((error) => {
                        context.commit('SET_AUTH_LOGOUT')
                        reject(error);
                     })
            });
        }
    },

    mutations: {
        SET_SIDEBAR_WIDTH(state, payload){
            state.sidebar.sidebarwidth = payload.sidebar
            state.sidebar.bgsidebar = payload.bg
            state.sidebar.expand = payload.exp
        },

        SET_AUTH_TOKEN(state, token){
            state.auth_token = token;
        },

        SET_AUTH_INFO(state, info){
            state.auth_info.id = info.userid;
            state.auth_info.name = info.name;
            state.auth_info.nik = info.nik;
            state.auth_info.gender = info.gender;
            state.auth_info.email = info.email;
            state.auth_info.phone = info.phone;
            state.auth_info.address = info.address;
            state.auth_info.birth_date = info.birth_date;
            state.auth_info.birth_place = info.birth_place;
            state.auth_info.company = info.comp_kd;
            state.auth_info.division = info.divkd;
            state.auth_info.subdivision = info.subdiv_kd;
            state.auth_info.department = info.deptkd;
            state.auth_info.position = info.group_code;
            state.auth_info.photo = info.profile;
            state.auth_info.role = info.roleId;
            state.auth_info.blood = info.blood;
            state.auth_info.joindate = info.createdAt;
            state.auth_info.access_token = info.token;
            state.auth_info.permission = info.mtext;
        },

        SET_AUTH_RESET(state){
            state.auth_reset = true;
        },

        SET_AUTH_LOGOUT(state){
            state.auth_token = null;
            state.ref_token = null;
            state.auth_info = {
                    id: null,
                    name: null,
                    nip: null,
                    gender: null,
                    email: null,
                    phone: null,
                    photo: null,
                    birth_date: null,
                    birth_place: null,
                    alamat: null,
                    division: null,
                    subdivision: null,
                    department: null,
                    position: null,
                    image: null,
                    role: false,
                    blood: null,
                    joindate: null,
                    access_token: null,
                    permission: null,
            }
        }
    }
}
