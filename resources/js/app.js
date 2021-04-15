require('./bootstrap');
window.Vue = require('vue');
import Vue from "vue";
import VueRouter from 'vue-router';
import routes from './routes';
import VueSimpleAlert from "vue-simple-alert";
Vue.use(VueRouter);
Vue.use(VueSimpleAlert);

newFunction();

function newFunction(){

  const app1 = new Vue({
    el: '#manageMyApplication',
    router: new VueRouter(routes)
  });

  const app2 = new Vue({
    el: '#dashboard',
    router: new VueRouter(routes)
  });

  //Application form, Document upload
  const app3 = new Vue({
    el: '#applicantForm',
    router: new VueRouter(routes)
  });

  const app8 = new Vue({
    el: '#applicantDocuments',
    router: new VueRouter(routes)
  });

  const app39 = new Vue({
    el: '#choose',
    router: new VueRouter(routes)
  });

  //Nursing
  const app4 = new Vue({
    el: '#annexure1',
    router: new VueRouter(routes)
  });

  const app5 = new Vue({
    el: '#annexure2',
    router: new VueRouter(routes)
  });

  const app6 = new Vue({
    el: '#annexure2PrintForm',
    router: new VueRouter(routes)
  });

  const app7 = new Vue({
    el: '#annexure2BlankForm',
    router: new VueRouter(routes)
  });

  const app9 = new Vue({
    el: '#reviewMyApplication',
    router: new VueRouter(routes)
  });

  const app10 = new Vue({
    el: '#viewMyApplication',
    router: new VueRouter(routes)
  });
  
  const app11 = new Vue({
    el: '#printView',
    router: new VueRouter(routes)
  });
 

  const app12 = new Vue({
    el: '#adminDashboard',
    router: new VueRouter(routes)
  });

  const app13 = new Vue({
    el: '#manageApplicationDetails',
    router: new VueRouter(routes)
  });

  // Review Application
  const app14 = new Vue({
    el: '#adminapplicantForm',
    router: new VueRouter(routes)
  });

  const app15 = new Vue({
    el: '#adminannexure1',
    router: new VueRouter(routes)
  });

  const app16 = new Vue({
    el: '#adminannexure2',
    router: new VueRouter(routes)
  });

  const app17 = new Vue({
    el: '#adminapplicantDocuments',
    router: new VueRouter(routes)
  });

  const app18 = new Vue({
    el: '#adminReview',
    router: new VueRouter(routes)
  });
  // End review Application

}