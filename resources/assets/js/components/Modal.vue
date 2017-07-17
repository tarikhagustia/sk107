<template>
  <a :href="dataUrl" class="ajax-popup-link">{{dataTitle}}</a>
</template>

<script>

    export default {
        props : ['dataTitle', 'dataUrl'],
        mounted() {
            $('.ajax-popup-link').magnificPopup({
              type: 'ajax'
            });
            console.log('Component mounted.')
        }
    }
</script>
