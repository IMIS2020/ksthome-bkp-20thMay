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

  const app24 = new Vue({
    el: '#printAnnexure1',
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

  const app25 = new Vue({
    el: '#adminPrintAnnexure1',
    router: new VueRouter(routes)
  });

  const app26 = new Vue({
    el: '#adminPrintView',
    router: new VueRouter(routes)
  });
  // End review Application

  // Domains start
  const app19 = new Vue({
    el: '#addDomains',
    router: new VueRouter(routes)
  });
  const app20 = new Vue({
    el: '#manageDomains',
    router: new VueRouter(routes)
  });
 
  // Domains end

  // Schedule start
  const app21 = new Vue({
    el: '#addSchedule',
    router: new VueRouter(routes)
  });
  const app22 = new Vue({
    el: '#manageSchedule',
    router: new VueRouter(routes)
  });
  const app23 = new Vue({
    el: '#extendLastDateNursing',
    router: new VueRouter(routes)
  });

  const app43 = new Vue({
    el: '#extendLastDateHHDLS',
    router: new VueRouter(routes)
  });
  // Schedule end

  //Manage Users
 
  const app40 = new Vue({
    el: '#manageUsers',
    router: new VueRouter(routes)
  });
  //Manage users end



   //all registed Users
 
   const app41 = new Vue({
    el: '#allRegisteredUsers',
    router: new VueRouter(routes)
  });
  //all registered users end


     //Admin users profile
     const app42 = new Vue({
      el: '#adminUserProfile',
      router: new VueRouter(routes)
    });
    //amin users profile end
}