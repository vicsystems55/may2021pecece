<template>

 <div>

    <div v-for="comment in secondgen_comments" :key="comment.id" style="border-left: 1px solid grey; padding: 5px;" class="comment-item replied">
    <div>
        <div class="comment-item-top">
            <div class="author">
                <div class="userpic ie-img">
                    <img src="img/demo-bg.jpg" alt="">
                </div>
                <div class="name">Victor Shibut</div>
                <div class="date">November 6, 2018 at 8:29 am</div>
            </div>
            <div class="reply">Reply</div>
        </div>
        <p class="comment-item-bottom">
                    {{comment.comment}}
        </p>

    </div>
            <p @click="view_morez()">
                view more
            </p>
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
               
                secondgen_comments: '',

                
            }
        },

      props: ['commentid'],

        methods:{

            view_morez(){
                 this.$modal.show('view_more');
            },
            
            commentz(){
                 this.$modal.show('comment');
            },

            getSecondGenComments(){

                alert(this.commentid)

                axios.post('/getSecondGenComments',{
                     comment_id: this.commentid
                 })
               .then((response)=>(
                    
                   
                   console.log(response),
                   this.secondgen_comments = response.data

             
             ))
                .catch(function (error) {
                    console.log(error);
                });

            },


        },


        mounted() {

            this.getSecondGenComments()
             
            
         
        }
    }
</script>


