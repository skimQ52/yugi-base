import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.css';
import { createBootstrap } from 'bootstrap-vue-next';

const app = createApp(App)
app.use(createBootstrap());
app.use(createPinia())
app.use(router)

app.mount('#app')
