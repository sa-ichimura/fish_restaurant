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
          <div v-if="message === true" class="alert alert-primary" role="alert">比較リストに追加しました</div>

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
         message:null
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
                }).then((ret)=>{
                    console.log(ret);
                    if(ret.data.insert){
                        this.message = true;
                    }
                }).catch(err => {
                    this.message = false;
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
