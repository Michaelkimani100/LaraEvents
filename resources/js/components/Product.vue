<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center text-gold"><h3>Add Product</h3></div>

                    <div class="card-body">
                       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" placeholder="Product name" name="name" v-model="form.name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Quantity</label>
      <input type="number" class="form-control"  placeholder="Available quantity" name="quantity" v-model="form.quantity">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Reorder Level</label>
    <input type="number" class="form-control"  placeholder="Reorder level" name="reorder" v-model="form.reorder">
  </div>
  <button type="submit" class="btn btn-primary float-right" @click.prevent="addProduct">Add</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                form:new Form({
                    name:'',
                    quantity:'',
                    reorder:''


                })
            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addProduct()
            {
                this.form.post('api/product')
                .then(()=>{
                    console.log('Added')

                })
                .catch(()=>{
                    console.log('error')
                })

            }
        }
    }
</script>
<style scoped>
.card{
    background:whitesmoke;
}
.btn{
background: #DAA520;
border: none;
}
</style>
