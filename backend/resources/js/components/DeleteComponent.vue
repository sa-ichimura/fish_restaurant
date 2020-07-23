<template>
    <div class="container">
        <button
            type="submit" 
            class ="btn btn-outline-success"
            @click='deleteButtom'
        >削除する
        </button>
    </div>
</template>

<script>
export default {
    props:[
        'user',
        'food',
        'comparison'
    ],
  methods:{
      deleteButtom:function(event){
          if(event){
                //ajaxからの帰りが遅いのでdisplay:none;にする
                let deleteClass = '.comparison'+'-'+this.comparison
                const element = document.querySelector(deleteClass)
                element.style.display = 'none';
       
            const ret = axios
                .put("/api/food_component/delete/" + this.user+'/'+this.food,{
                    
                }).then((ret)=>{
                    //エラーなければ要素削除
                    element.remove()
                }).catch(err => {
                    this.message = false;
                });
          }
      }
  }
}

</script>
