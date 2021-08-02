<template>
   <div class="container">
    <div class="row ">
      
        <div class="col-md-3" v-for="book in books" :key="book.description">
        <!-- <ul id="myUL"> -->
            <div class="card text-center shadow m-4" style="width: 18rem;">
                <img src="storage/back2.jpg" class="card-img-top" alt="">
                
                <div class="card-body" >
                
                <h5 class="card-title" id="element">{{ book.titre}}</h5>
                <h6 class="card-title" id="element">{{ book.date_publication}}</h6>
                
        
                <p class="card-text text-center" > {{ book.titre}}</p>
               <!-- Button trigger modal -->
                    <button type="button" class="btn text-white"  style="background-color: #0D4E6D;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Click to read more ...
                    </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{ book.description}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div> 
             </div>
          </div>
        </div> 
         </div>
     </div>
</template>

<script>
    export default {
        data: function () {
            return {
                books: [],
                loading: true
            }
        },

        mounted() {
            this.loadBooks();
        },

        methods: {
            loadBooks: function () {
                axios.get('/api/books')
                    .then((response) => {
                        this.books = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
        }
    }
</script>