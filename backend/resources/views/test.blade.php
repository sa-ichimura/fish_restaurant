<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue"></script>
</head>
<body>
<div id="app">
    @{{ message }}
</div>
<div id="app-2">
    <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
    </span>
</div>
<div id ="app-3">
<span v-if='seen'>Now you see me</span>
</div>

<div id="app-4">
<ol>
    <li v-for= "todo in todos">
        @{{todo.text}}
    </li>
</ol>
</div>

<div id="app-5">
    <p>@{{message}}</p>
    <button v-on:click = 'reverseMessage'>
        Reverse Message
    </button>
</div>

<div id="app-7">
    <ol>
        <todo-item 
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id"    
        ></todo-item>
    </ol>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data:{
            message: 'Hellow Vue'
        }
    })

    var app2 = new Vue({
        el: '#app-2',
        data:{
            message: 'you loaded this page on' + new Date().toLocaleString()
        }
    })

    //条件分岐
    var app3 = new Vue({
        el: '#app-3',
        data:{
            seen:true
        }
    })

    //for文
    var app4 = new Vue({
        el:'#app-4',
        data:{
            todos:[
                {text:'Learn JavaScript'},
                {text:'Lean Vue'},
                {text:'Build something awesome'}
            ]
        }
    })

    //ユーザー入力
    var app5 = new Vue({
        el:'#app-5',
        data:{
            message:'Hellow Vue.js'
        },
        methods:{
            reverseMessage:function()
            {
                this.message=this.message.split('').reverse().join('')
            }
        }
    })


    Vue.component('todo-item',{
        props:['todo'],
        template:'<li>@{{todo.text}}</li>'
    })

    var app7 = new Vue({
        el:'#app-7',
        data:{
            groceryList:[
                {id:0,text: 'vegetable'},
                {id:1,text:'cheese'},
                {id:2,text:'whatever else humans are supposed to eat'}
            ]
        }
    })

</script>
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</body>
</html>