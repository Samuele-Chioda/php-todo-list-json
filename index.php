<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>php-todolist-json</title>
</head>

<body>

    <div id="app">
        <h1>Todo List</h1>

        <form @submit.prevent="addTodo">
            <input type="text" v-model="newTodo.title" placeholder="Titolo" required>
            <button type="submit">Aggiungi Attività</button>
        </form>

        <ul>
            <li v-for="todo in todoList" :key="todo.title">
                <h3>{{ todo.title }}</h3>
                <p><strong>Completato:</strong> {{ todo.completed ? 'Sì' : 'No' }}</p>
            </li>
        </ul>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>