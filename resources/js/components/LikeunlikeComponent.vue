<template>



        <table>
            <tr>

            
                <td v-if='!liked_by_user'>
                    <span @click="registerLike()" style="border: 1px solid white; width: 120px; color: white; background-color: rgb(63, 58, 58); padding: 10px;">
                    
                        {{total_likes}} {{total_likes==1?'Like':'Unlikes'}}
                    
                    </span>
                </td>

                            
                <td v-else>
                    <span style="border: 1px solid white; width: 120px; color: white; background-color: orange; padding: 10px;">
                    
                        {{total_likes}} {{total_likes==1?'Like':'Likes'}}
                    
                    </span>
                </td>

                <td v-if='!unliked_by_user'>
                    <span @click="registerUnlike()" style="border: 1px solid white; width: 120px; color: white; background-color: rgb(63, 58, 58); padding: 10px;">
                    
                        {{total_unlikes}} {{total_unlikes==1?'Unlike':'Unikes'}}
                    
                    </span>
                </td>

                <td v-else>
                    <span style="border: 1px solid white; width: 120px; color: white; background-color: red; padding: 10px;">
                    
                        {{total_unlikes}} {{total_unlikes==1?'Unlike':'Unlikes'}}
                    
                    </span>
                </td>

            </tr>
        </table>




</template>


<script>





    export default {

        data() {
            return {
                loader: process.env.MIX_APP_URL + 'loader.gif',
                content: '',
                total_likes: '',
                total_unlikes: '',
                liked_by_user: false,
                unliked_by_user: false,

                
            }
        },
        props: ['user_id', 'post_id'],

        methods:{

            getLikes(){

           

                 axios.post('/getLikes',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),

                   this.total_likes = response.data.post_likes,
                   this.liked_by_user = response.data.liked_by_user

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            getUnlikes(){

                    axios.post('/getUnlikes',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                         
                   console.log(response),

                   this.total_unlikes = response.data.post_unlikes,
                   this.unliked_by_user = response.data.unliked_by_user
            
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            },

            registerLike(){

               

                axios.post('/registerLike',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),

                    this.getUnlikes(),
                    this.getLikes()

         
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            },

            registerUnlike(){

                axios.post('/registerUnlike',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),
                   this.getUnlikes(),
                    this.getLikes()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            }

        },

        mounted() {
             
           this.getLikes()

           this.getUnlikes()
         
        },
    }

</script>

