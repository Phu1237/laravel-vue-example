require('./bootstrap');

import { createApp } from 'vue'
import { createMetaManager as metaManager, plugin as metaPlugin } from 'vue-meta'

import router from './Vue/Router/index'
import store from './Vue/Store/index'
import App from './Vue/App.vue'

const app = createApp(App);
app.use(metaManager());
app.use(metaPlugin);
app.use(router);
app.use(store);

const vm = app.mount('#app');
