<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSMon</title>
    <link rel="stylesheet" href="//unpkg.com/element-plus/dist/index.css" />

    <!-- Vue 3 CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Element Plus CDN -->
    <script src="//unpkg.com/element-plus"></script>
</head>
<body>
    <div id="app">
        <el-button type="primary" @click="msg = 'Button clicked!'">Click Me</el-button>
        <p>{{ msg }}</p>
    </div>
    <script>
      const { createApp } = Vue;
      const app = createApp({
        data() {
          return {
            msg: 'Hello Element Plus!'
          }
        }
      });
      app.use(ElementPlus);
      app.mount('#app');
    </script>
</body>
</html>