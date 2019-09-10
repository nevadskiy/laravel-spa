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

    methods: {
      fetch() {
        axios.get('http://localhost:8080/api/stats')
          .then(({data}) => {
            this.lessons = data.lessons;
            this.series = data.series;
          });
      }
    },

    created() {
      this.fetch();
    }
  }
</script>
