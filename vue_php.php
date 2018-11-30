<?php
    $html = '<div id="app" class="app">
        <h1>{{message}}</h1>
        <todo-item></todo-item>
        <button v-on:click="reverseMessage">Reverse Message</button>
    </div>
    
    ';
    echo $html;
?>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script>
    Vue.component('todo-item', {
        template: '<li>This is a todo</li>'
    })
</script>

<script>
    var app5 = new Vue({
        el: "#app",
        data : {
            message : "Hola a todos"
        },
        methods: {
            reverseMessage ()
            {
                return this.message = this.message.split('').reverse().join('')
            }
        }
    })
</script>

<style lang="css">
    .app {
        background-color: #cccccc;
    }
</style>

