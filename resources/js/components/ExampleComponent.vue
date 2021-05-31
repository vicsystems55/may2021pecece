<template>

<div>
    <div class="comments">
        <h2 class="title">Comments <span class="count">5</span></h2>
     

                <div v-for="comment in firstgen_comments" :key="comment.id" style="border-left: 1px solid grey; border-bottom: 1px solid grey; padding: 5px; margin-bottom: 20px;">

                    <div class="comment-item">
                        <div class="comment-item-top">
                            <div class="author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">Victor Shibut</div>
                                <div class="date">November 6, 2018 at 8:29 am</div>
                            </div>
                            <div @click="commenti()" class="reply">Reply</div>

    
                        </div>
                        <p class="comment-item-bottom">
                        {{comment.comment}}
                        </p>
                    </div>

                                 <secondgen-comment commentid="1"></secondgen-comment>

                </div>


       
        </div>

                                <modal name="commenti"
                                    :height="1000"
                                                                  
                                    :adaptive="true"
                                    >
                                    <div style="padding: 10px;" class="write-comment">
                                        
                                        <div class="subtitle">
                                            Your email address will not be published. Required fields are marked *
                                        </div>
                                        <form class="form">
                                            <textarea class="textarea" placeholder="Message*"></textarea>
                                          
                                            <button class="submit">Post Comment</button>
                                        </form>
                                    </div>
                                </modal>

                                <modal name="view_more"
                                    :height="1000"
                                                                 
                                    :adaptive="true"
                                    >
                                    <div style="padding: 1px; z-index:5;" class="write-comment">
                                    <h5>Comments</h5>
                                        
                                      
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

                alert(this.post_id)

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


