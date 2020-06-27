<script>
//円グラフを表示するコーポネント
import { Pie } from 'vue-chartjs'
export default {
  props:{
    id:{
      defolut:0,
    },
  },
   extends:Pie,
  async mounted(){
    console.log(this.id)
    console.log('/api/food_component/')
    const data = {
      id:this.id
    }
    const ret = await window.axios.post('/api/food_component/',data).then((ret)=>{
                    
                    this.data=ret.data
                    //取得したデータをitemsに格納
                })
    this.renderChart({
      labels: ['タンパク質','脂質','繊維','ミネラル','水分','リン','その他'],
      datasets: [{
        label: '成分表',
        backgroundColor: ['#FF367F', '#FF5F17', "#2DFF57",'#32EEFF', '#C9FF2F', "#C0C0C0"],
        data: this.data,
        options: {
          title: {
              display: true,
              text: '成分表'
          }
        }
      }]
    })
  },
};
</script>>