<template>

<div>
    <div class="comments">
        <h2 class="title">Comments <span class="count">5</span></h2>

           <div class="write-comment">
                        <h2 class="title">Your thoughts</h2>
                       
                        <div class="form">
                            <textarea v-model="message" class="textarea" placeholder="Message*"></textarea>
                            
                            <button @click="post_comment" class="submit">Post Comment</button>
                        </div>
                    </div>
     

                <div v-for="comment in firstgen_comments" :key="comment.id" style="border-left: 1px solid grey; border-bottom: 1px solid grey; padding: 5px; margin-bottom: 20px; margin-top: 20px;">

                    <div class="comment-item">
                        <div class="comment-item-top">
                            <div class="author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">{{comment.users.name}}</div>
                                <div class="date">{{comment.created_at}}</div>
                            </div>
                            <div @click="commenti()" class="reply">Reply</div>

    
                        </div>
                        <p class="comment-item-bottom">
                        {{comment.comment}}
                        </p>
                    </div>

                                 <secondgen-comment :commentid=comment.id></secondgen-comment>

                </div>

                 




       
        </div>

                                <modal name="commenti"
                                    :height="400"
                                                                  
                                    :adaptive="true"
                                    >
                                    <div style="padding: 10px;" class="write-comment">
                                        
                                     
                                        <form class="form">
                                            <textarea class="textarea" placeholder="Message*"></textarea>
                                          
                                            <button class="submit">Post Reply</button>
                                        </form>
                                    </div>
                                </modal>

                                <modal name="view_more"
                                    :height="auto"
                                    :scrollable="true"
                                                                 
                                   
                                    >
                                    <div style="padding: 5px; z-index:5;" class="write-commen">
                                    <h5>Comment</h5>

                                    </div>
                                </modal>


    </div>
</div>



</template>

<script>
import VModal from 'vue-js-modal'


Vue.use(VModal)

    export default {



        data() {
            return {
                loader: process.env.MIX_APP_URL + 'loader.gif',
                content: '',
                firstgen_comments: '',
                secondgen_comments: '',
                message: '',

                
            }
        },

        props: ['post_id'],

        methods:{

            view_more(){
                 this.$modal.show('view_more');
            },
            
            commenti(){
                this.$modal.show('commenti');
            },

            getAllComments(){

                

                axios.post('/getAllComments',{
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),
                   this.firstgen_comments = response.data

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            post_comment(){

               

                axios.post('/post_comment',{
                     message: this.message,
                     post_id: this.post_id
                 })
               .then((response)=>(
                    
                   
                   console.log(response),
                    this.getAllComments()

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },

            secondGenComments(comment_id){

                

                axios.post('/getAllComments',{
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

            this.getAllComments()
             
            
         
        }
    }
</script>


