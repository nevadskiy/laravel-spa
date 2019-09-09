<template>
    <div>
        <h1 class="text-3xl">Site stats</h1>

        <ul>
            <li>
                <strong>Total Series: </strong> {{ series }}
            </li>
            <li>
                <strong>Total Lessons: </strong> {{ lessons }}
            </li>
        </ul>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        lessons: 0,
        series: 0,
      };
    },

    created() {
      axios.get('/api/stats').then((response) => {
        this.lessons = response.data.lessons;
        this.series = response.data.series;
      });
    }
  }
</script>
