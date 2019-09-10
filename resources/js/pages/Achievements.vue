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
        axios.get('/api/achievements')
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
