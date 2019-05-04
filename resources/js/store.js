import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const state = {
    title: ''
}

const getters = {

}

const mutations = {
    SET_TITLE(state, title) {
        state.title = title
    }
}

const actions = {

}

export default new Vuex.store({
    state,
    getters,
    mutations,
    actions
});
