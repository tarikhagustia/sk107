import axios from 'axios'
import jQuery from 'jQuery'
const API_URL = window.location.origin + '/api/';


Vue.component('Modal', require('../components/Modal.vue'));

let vo = new Vue({
  el : '#open-account-real',
  data : {
    task : {},
    status : 'done'
  },
  created : function(){
    this.initialTask();
  },
  mounted : function(){
    console.log( $(this.$el));
    // jQuery('.ajax-popup-link').magnificPopup({
    //   type: 'ajax'
    // });
  },
  methods : {
    initialTask(){
      axios.get(API_URL + 'open-account/task')
      .then((response) => {
        this.task = response.data;
        this.status = 'fail'

      })
      .catch((error) => {
        alert('Error While get task !')
      });

    },
    requestForm(){

    }
  }
});
