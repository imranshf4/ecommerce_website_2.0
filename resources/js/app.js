import './bootstrap';
import { createApp } from 'vue';
import App from './admin/App.vue';
// import Example from './admin/components/Example.vue';
import router from './admin/router';

const app = createApp(App);
// app.component('example-component', Example);
app.use(router);
app.mount('#app');