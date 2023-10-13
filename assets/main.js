const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: null,
        }
    },
    methods: {
        readData() {
            axios
                .get('script.php')
                .then(response => {
                    this.dischi = response.data;
                    this.dischi.forEach(disco => {
                        disco.visible = false;
                    });
                });
        },
    },
    mounted() {
        this.readData();
    }
}).mount('#app')