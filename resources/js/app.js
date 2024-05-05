import './bootstrap';
import { createApp } from 'vue';
import App from './components/app.vue'
import router from './router';
import store from './store';

const app = createApp(App)

axios.defaults.baseURL = 'http://localhost:8000/api';
app.config.globalProperties.uri = 'http://localhost';

app.use(store).use(router).mount('#app');
