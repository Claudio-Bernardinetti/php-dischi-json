const { createApp } = Vue
createApp({
  data() {
    return {
        dischi: []
    }
  },
  
  created() {
    axios.get('script.php')
        .then(response => {
            this.dischi = response.data;
        });
  }
  
}).mount('#app')