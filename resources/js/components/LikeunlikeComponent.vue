<template>



        <table>
            <tr>
                <td>
                    <span style="border: 1px solid white; width: 120px; color: white; background-color: rgb(63, 58, 58); padding: 10px;">
                    
                        {{total_likes}} Like
                    
                    </span>
                </td>
                <td>
                    <span style="border: 1px solid white; width: 120px; color: white; background-color: rgb(63, 58, 58); padding: 10px;">
                    
                        {{total_unlikes}} Unike
                    
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

                
            }
        },
        props: ['user_id', 'post_id'],

        methods:{

            getLikes(){

               

                 axios.get('/getLikes',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),

                   this.total_likes = response.post_likes

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            getUnikes(){

                    axios.get('/getUnikes',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),

                   this.total_unlikes = response.post_unlikes


             
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            },

            registerLike(){

                axios.get('/registerLike',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response)

             
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            },

            registerUnlike(){

                axios.get('/registerUnlike',{
                     user_id: this.user_id,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response)

             
             ))
                .catch(function (error) {
                    console.log(error);
                });
                
            }

        },

        mounted() {
             
           this.getLikes()
         
        },
    }

</script>