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
    el: '#manageScholarship',
    router: new VueRouter(routes)
  });

  const app = new Vue({
    el: '#dashboard',
    router: new VueRouter(routes)
  });

//add-start(nursing)
  const app2 = new Vue({
    el: '#applicationForm',
    router: new VueRouter(routes)
  });

  const app3 = new Vue({
    el: '#annexure1',
    router: new VueRouter(routes)
  });

  const app4 = new Vue({
    el: '#annexure2',
    router: new VueRouter(routes)
  });

  const app5 = new Vue({
    el: '#uploadDocuments',
    router: new VueRouter(routes)
  });

  const app6 = new Vue({
    el: '#review',
    router: new VueRouter(routes)
  });
//add-end(nursing)

// view-start(nursing)
  
  const app7 = new Vue({
    el: '#viewNursing',
    router: new VueRouter(routes)
  });
  
  const app8 = new Vue({
    el: '#printViewNursing',
    router: new VueRouter(routes)
  });
//manage-view end (Nursing)

//HHDLSS ADD-START
  const app9 = new Vue({
    el: '#applicationFormHHDLSS',
    router: new VueRouter(routes)
  });

  const app10 = new Vue({
    el: '#annexure1HHDLSS',
    router: new VueRouter(routes)
  });

  const app11 = new Vue({
    el: '#annexure2HHDLSS',
    router: new VueRouter(routes)
  });

  const app12 = new Vue({
    el: '#uploadDocumentsHHDLSS',
    router: new VueRouter(routes)
  });

  const app13 = new Vue({
    el: '#reviewHHDLSS',
    router: new VueRouter(routes)
  });
//HHDLSS ADD-END

//view-start hhdlss
  const app14 = new Vue({
    el: '#viewHHDLSS',
    router: new VueRouter(routes)
  });

  const app15 = new Vue({
    el: '#printViewHHDLSS',
    router: new VueRouter(routes)
  });

//End-HHDLSS

// Admin Section
const app16 = new Vue({
  el: '#adminDashboard',
  router: new VueRouter(routes)
});

const app17 = new Vue({
  el: '#addDomains',
  router: new VueRouter(routes)
});

const app18 = new Vue({
  el: '#manageDomains',
  router: new VueRouter(routes)
});

const app19 = new Vue({
  el: '#addNursingApplicationSchedule',
  router: new VueRouter(routes)
});

const app20 = new Vue({
  el: '#addHHDLSSApplicationSchedule',
  router: new VueRouter(routes)
});

const app21 = new Vue({
  el: '#manageApplicationSchedule',
  router: new VueRouter(routes)
});

const app22 = new Vue({
  el: '#manageApplicationDetails',
  router: new VueRouter(routes)
});

const app23 = new Vue({
  el: '#extendLastDate',
  router: new VueRouter(routes)
});

}