window.Vue = require('vue');
/* Istanzio Axios e la posso richiamare quando e dove mi serve  */
window.axios = require('axios');

//import App
import App from './views/App';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    /* Trova il div con l'id app e reinderizzami all'interno la mia app.vue */
    render: h =>h(App)
});
