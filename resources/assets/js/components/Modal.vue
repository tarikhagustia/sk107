<template>
  <h3 v-if="dataAction == 'ajax'">
    <a :href="dataUrl" class="ajax-popup-link">{{dataTitle}}</a>
  </h3>
  <h3 v-else>
    <a :href="dataUrl">{{dataTitle}}</a>
  </h3>
</template>

<script>

    export default {
        props : ['dataTitle', 'dataUrl', 'dataAction'],
        mounted() {
            $('.ajax-popup-link').magnificPopup({
              type: 'ajax',
              closeBtnInside : true,
              showCloseBtn : true,
              modal : true,
            });
        }
    }
</script>
