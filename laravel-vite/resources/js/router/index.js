import { createRouter,createWebHistory } from "vue-router";
import Add from "../crud/AddNew.vue";
import List from "../crud/List.vue";

const routes = [
    { path: '/', name: "List", component: List },
    { path: '/add-new', name: "Add", component: Add },
  ];

const router = createRouter({
    history: createWebHistory(),
    routes,
    strict: true, // applies to all routes
  })

  export default router;
