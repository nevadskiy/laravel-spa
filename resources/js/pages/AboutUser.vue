<template>
    <div>
        <h1 class="text-3xl">About User</h1>

        <div v-if="user">
            <p>Your email: {{ user.email }}</p>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        user: null,
      };
    },

    methods: {
      fetch() {
        axios.get('/api/user?api_token=5XYLVZsHfQud3qCwneYoeYm5aeoVvBfRHMzjzUuTafLgwNqTqjuR9YQ6TZkg9NBCWSaGkaszKHRFBqHp')
          .then(({ data }) => {
            this.user = data;
          });
      },
    },

    created() {
      this.fetch();
    }
  }
</script>
