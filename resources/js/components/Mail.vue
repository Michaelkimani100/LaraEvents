<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center text-gold"><h3>Send Mail</h3></div>

                    <div class="card-body">
                       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" placeholder="Your Name" name="name" v-model="form.name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Quantity</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="quantity" v-model="form.email">
    </div>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="message" v-model="form.message
    "> </textarea>
  </div>
  <button type="submit" class="btn btn-primary float-right" @click.prevent="sendMessage">Send</button>
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
                    email:'',
                        message:''


                })
            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            sendMessage()
            {
                this.form.post('api/mail')
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
