<template>
    <div>
        <h1 class="text-3xl">Your Achievements</h1>

        <ul>
            <li
                v-for="(achievement, index) in achievements"
                :key="index"
                v-text="achievement"
            >
            </li>
        </ul>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        achievements: [],
      };
    },

    methods: {
      fetch() {
        axios.get('/api/achievements?api_token=5XYLVZsHfQud3qCwneYoeYm5aeoVvBfRHMzjzUuTafLgwNqTqjuR9YQ6TZkg9NBCWSaGkaszKHRFBqHp')
          .then(({ data }) => {
            this.achievements = data;
          });
      },
    },

    created() {
      this.fetch();
    }
  }
</script>
