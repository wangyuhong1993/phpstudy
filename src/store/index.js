import Vue from 'vue'
import Vuex from 'vuex'
import app from './modules/app'
import user from './modules/user'
import deliver from './modules/deliver'
import getters from './getters'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    app,
    user,
    deliver
  },
  getters,
  plugins: [createPersistedState({
    storage: window.localStorage  // 记录sessionStorage,会话结束缓存清除
  })]
})

export default store
