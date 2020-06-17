<script>
import { Pie } from 'vue-chartjs'
export default {
   props: [pieDate],
  extends:Pie,
  mounted(){
     this.renderChart({
      labels: ['タンパク質','脂質','繊維','ミネラル','水分','リン','その他'],
      datasets: [{
        label: '成分表',
        backgroundColor: ['#FF367F', '#FF5F17', "#2DFF57",'#32EEFF', '#C9FF2F', "#C0C0C0"],
        data: pieDate,
        options: {
        title: {
            display: true,
            text: '成分表'
        }
    }
      }]
    })

  }

  
}
</script>>