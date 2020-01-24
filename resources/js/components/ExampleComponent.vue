<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <div class="heading">
                        <h1>List of Books update reviews</h1>
                        </div>
                        <example-component
                         v-for="book in books "
                         v-bind="books 
                         :key="books id"
                         @update="update"
                         @delete="del"
                        ></example-component>
                        <div>
                        <button @click="create">Add</button>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

      


    export default {
        data() {
            return {
            books: [],
            mute: false
            }
        },

        methods: {
        async read() {
            const { data } = window.axios.get('/api/v1/books');
            data.forEach(book => this.books.push(new book(books)));
            console.log(data)
        },
        async update(id, books) {
            await window.axios.put(`/api/v1/books/${id}`, { books });
           // Once AJAX resolves we can update the Books with the new books
           this.books.find(books => books.id === id).books = books;
        },
        async create() {
            const { data } = window.axios.get('/api/v1/books/create');
            this.books.push(new Books(data));
        },
        async del(id) {
            await window.axios.delete(`/api/v1/books/${id}`);
            let index = this.books.findIndex(books => books.id === id);
            this.books.splice(index, 1);
        }
        },
         components: {
            ExampleComponent
         }
        watch: {
            mute(val) {
            document.getElementById('mute').className = val ? "on" : "";
            }
        }
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
