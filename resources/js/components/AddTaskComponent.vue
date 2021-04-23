<template>
    <div class="container">
        <h1>Ajouter une tache</h1>

           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
  Add a task
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
              <label for="name">Nom de la tache</label>
              <input type="text" name="name" id="name" class="form-control" v-model="name ">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" @click="taskStore()">Ajouter ma tache </button>
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
        name:''
    }
},


        mounted() {
            console.log('Component mounted.')
        },

methods: {
		
		taskStore() {
			axios.post('http://127.0.0.1:8000/tasklist', {
                name: this.name
        })
				.then(response =>console.$emit('task-added',response))
                .then(error =>console.log(error))
		}
}
      
	}

    
</script>
