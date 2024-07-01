const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            newTodo: {
                title: '',
                completed: false
            }
        }
    },
    methods: {
        getApi() {
            axios.post('./server.php', {
                params: {}
            })
                .then((response) => {
                    this.todoList = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () { });
        },
        addTodo() {
            // Creo copia manuale dell'oggetto newTodo
            let newTodoCopy = {
                title: this.newTodo.title,
                completed: this.newTodo.completed
            };

            // Aggiungo copia a lista todoList
            this.todoList.push(newTodoCopy);

            // per rerset campi
            this.newTodo = { title: '', completed: false };
        }
    },
    created() {
        this.getApi();
    },
}).mount('#app')
