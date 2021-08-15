<template>
 
  <mdb-container>
    <mdb-radar-chart
      :data="radarChartData"
      :options="radarChartOptions"
      :width="600"
      :height="300"
    ></mdb-radar-chart>
  </mdb-container>
</template>

<script>
  import { mdbRadarChart, mdbContainer } from "mdbvue";
  export default {
    name: "ChartPage",
    components: {
      mdbRadarChart,
      mdbContainer
    },
    props:{
      feed : Array
    },
    data() {
      return {
        radarChartData: {
          labels: [this.feed[0],this.feed[1],this.feed[2],this.feed[3],this.feed[4]],
         datasets: [
            {
              label: "My First dataset",
              backgroundColor: "rgba(255, 99, 132, 0.1)",
              borderColor: "rgba(255, 99, 132, 1)",
              borderWidth: 0.7,
              data: [65, 59, 90, 81, 56]
            },
            {
              label: "My Second dataset",
              backgroundColor: "rgba(75, 192, 192, 0.2)",
              borderColor: "rgba(75, 192, 192, 1)",
              borderWidth: 0.7,
              data: [28, 48, 40, 19, 96]
            }
          ]
        },
        radarChartOptions: {
          responsive: false,
          maintainAspectRatio: false
        }
      };
    },
    
  };
</script>