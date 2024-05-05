import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import { auth } from './auth'

export default createStore({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    auth
  },

  plugins: [createPersistedState({
    paths: ['auth']
  })]
})

