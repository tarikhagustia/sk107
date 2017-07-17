<template>
  <h3>
    <a :href="dataUrl" class="ajax-popup-link">{{dataTitle}}</a>
  </h3>
</template>

<script>

    export default {
        props : ['dataTitle', 'dataUrl'],
        mounted() {
            $('.ajax-popup-link').magnificPopup({
              type: 'ajax',
              closeBtnInside : true,
              showCloseBtn : true,
              modal : true,
            });
            console.log('Component mounted.')
        }
    }
</script>
