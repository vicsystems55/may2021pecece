<template>

    <div>

        


    </div>


</template>


<script>

    export default {
        data(){

            return{

                follower_status: false,
                loading: false,
                followers: '',

            }
        },

        props: ['follower_id', 'author_id'],

        methods:{


                getFollowers(){
                  

                 axios.post('/getFollowers',{
                     follower_id: this.follower_id,
                     author_id: this.author_id
                 })
               .then((response)=>(
                    
       
                   console.log(response),

                   this.follower_status = response.data.follower_status,
                   this.followers = response.data.followers
                   

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            followAuthor(){
                alert('subscribing')

                  this.loading = true

                 axios.post('/followAuthor',{
                     author_id: this.author_id,
                     follower_id: this.follower_id
                 })
               .then((response)=>(
                      this.loading = false,
                   
                   console.log(response),

                   alert('Author Followed!!'),
                   
                       this.getFollowers()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            unfollowAuthor(){
                alert('unsubscribing')

                  this.loading = true

                 axios.post('/unfollowAuthor',{
                     author_id: this.author_id,
                     follower_id: this.follower_id
                 })
               .then((response)=>(
                      this.loading = false,
                   
                   console.log(response),

                   alert('Author Unfollowed'),
                   
                       this.getFollowers()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },


        },

        mounted(){

            this.getFollowers()



        }
    }



</script>