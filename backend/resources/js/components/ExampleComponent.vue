<template>
    <div class="container">
        <button
            type="submit" 
            class ="btn btn-outline-success"
            v-bind:disabled='isPushComparison' 
            @click='comparison'
        >比較する
        </button>
        <button 
            type="submit" 
            class ="btn btn-outline-success"
            v-bind:disabled='isPushNotComparison'
            @click='notComparison'
        >比較しない
        </button>

    </div>
</template>

<script>
export default {
    props:[
        'userId',
        'foodId'
    ],
  data:function(){
    return {
         isPushComparison : false,
         isPushNotComparison:false,
         return:false
    }
  },

  methods:{
      comparison:function(event){
          if(event){
                this.isPushComparison = true;
                this.isPushNotComparison = false;
            const ret = axios
                .put("/api/food_component/" + this.foodId+"/"+this.userId,{
                    userId: this.userId
                }).then((ret)=>{}).catch(err => {
                    this.message = err;
                });
          }
      },
      
      notComparison:function(event){
          if(event){
              this.isPushComparison = false;
              this.isPushNotComparison = true;
              
          }
      }

  }
}

</script>
