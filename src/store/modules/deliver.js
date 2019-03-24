const deliver = {
  state: {
    deliverList:[]
  },
  mutations: {
    // 添加交付物
    ADD_DELIVER: (state, data) => {
      state.deliverList.push(data)
    },
    // 删除交付物
    DELETE_DELIVER: (state, {data,index}) => {
      state.deliverList.splice(index,1)
    },
    // 修改
    UPDATE_DELIVER: (state, {data,index}) => {
      console.log("datadata:",data)
      state.deliverList.splice(index,1,data)
    }
  },
  actions: {
    AddDeliver({ commit }, data) {
      commit('ADD_DELIVER', data)
    },
    DeleteDelever({ commit },{data,index}) {
      commit('DELETE_DELIVER', {data,index})
    },
    UpdateDelever({ commit },{data,index}){
      commit('UPDATE_DELIVER', {data,index})
    }
  }
}

export default deliver
