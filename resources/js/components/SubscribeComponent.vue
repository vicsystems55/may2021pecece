<template>
<div >


     <button v-if="subscription_status" @click="unsubscribeCategory()" class="btn btn-lg btn-dark mt-2">Unsubscribe</button>

     <button v-else @click="subscribeCategory()" href="javascript:void(0)" class="btn btn-lg btn-primary mt-2">{{loading?'Loading...':'Subscribe'}}</button>

</div>


</template>


<script>

    export default {
        data(){

            return{

                subscription_status: false,
                loading: false,

            }
        },

        props: ['user_id', 'category_id'],

        methods:{


                getSubscriptionStatus(){
                  

                 axios.post('/getSubscriptionStatus',{
                     user_id: this.user_id,
                     category_id: this.category_id
                 })
               .then((response)=>(
                    
       
                   console.log(response),

                   this.subscription_status = response.data
                   

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            subscribeCategory(){
                alert('subscribing')

                  this.loading = true

                 axios.post('/subscribeCategory',{
                     user_id: this.user_id,
                     category_id: this.category_id
                 })
               .then((response)=>(
                      this.loading = false,
                   
                   console.log(response),

                   alert('Subscription Successful!'),
                   
                    this.getSubscriptionStatus()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            unsubscribeCategory(){
                alert('unsubscribing')

                  this.loading = true

                 axios.post('/unsubscribeCategory',{
                     user_id: this.user_id,
                     category_id: this.category_id
                 })
               .then((response)=>(
                      this.loading = false,
                   
                   console.log(response),

                   alert('unsubscribed'),
                   
                    this.getSubscriptionStatus()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },


        },

        mounted(){

            this.getSubscriptionStatus()



        }
    }

</script>