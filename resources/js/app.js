
window.Vue = require('vue');

Vue.component('datos-colaborador', require('./components/collaborator/DatosComponent.vue').default);
Vue.component('datos-personales', require('./components/collaborator/DatosPersonalesComponent.vue').default);
Vue.component('datos-laborales', require('./components/collaborator/DatosLaboralesComponent.vue').default);
Vue.component('datos-medicos', require('./components/collaborator/DatosMedicos.vue').default);
Vue.component('datos-familiares', require('./components/collaborator/DatosFamiliares.vue').default);
Vue.component('estudios', require('./components/collaborator/Estudios.vue').default);

const app = new Vue({
    el: '#app',
});