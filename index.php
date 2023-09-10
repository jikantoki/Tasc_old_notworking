<!DOCTYPE html>
<html>

<head>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/meta/metaHeadStart.php';
  ?>
  <title><?php echo SITE_NAME; ?></title>
</head>

<body>
  <div id="app">
    <contents></contents>
    <main-header></main-header>
  </div>
</body>

<script type="module">
  export default {
    name: 'Top',
    components: {
      //MainHeader: () => import('/src/MainHeader.vue')
    }
  }

  Vue.createApp({
    data() {
      return {
        meta: {
          title: '<?php echo SITE_NAME; ?>',
          pageTitle: 'トップ'
        }
      }
    },
    watch: {

    },
    created() {
      //DOM生成前に処理が走る
      if (this.meta.pageTitle) {
        document.title = this.meta.title + ' | ' + this.meta.pageTitle
      }
      console.log(this)
      this.hello()
    },
    mounted() {
      //DOM生成後に処理が走る
    },
    methods: {
      //関数
      hello() {
        console.log('hello')
      }
    }
  }).mount('#app')
</script>

</html>
