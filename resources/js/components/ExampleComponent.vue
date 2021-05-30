<template>

<div>
    <div class="comments">
        <h2 class="title">Comments <span class="count">5</span></h2>
     

                <div style="border-left: 1px solid grey; padding: 5px;">

                    <div class="comment-item">
                        <div class="comment-item-top">
                            <div class="author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">Victor Shibut</div>
                                <div class="date">November 6, 2018 at 8:29 am</div>
                            </div>
                            <div @click="comment()" class="reply">Reply</div>

    
                        </div>
                        <p class="comment-item-bottom">
                            When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                        </p>
                    </div>

                    <div style="border-left: 1px solid grey; padding: 5px;" class="comment-item replied">
                        <div class="comment-item-top">
                            <div class="author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">Victor Shibut</div>
                                <div class="date">November 6, 2018 at 8:29 am</div>
                            </div>
                            <div @click="comment()" class="reply">Reply</div>
                        </div>
                        <p class="comment-item-bottom">
                            When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                        </p>
                        <div class="comment">
                           
                            <div @click="view_more()" class="reply">View More</div>

                        </div>
                    </div>

                </div>
       
        </div>

                                <modal name="comment"
                                    :height="1000"
                                    :scrollable="true"                                
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
                                    :scrollable="true"                                
                                    :adaptive="true"
                                    >
                                    <div style="padding: 10px;" class="write-comment">
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

                
            }
        },

        methods:{

            view_more(){
                 this.$modal.show('view_more');
            },
            
            comment(){
                 this.$modal.show('comment');
            }
        },


        mounted() {
             
            
         
        }
    }
</script>


